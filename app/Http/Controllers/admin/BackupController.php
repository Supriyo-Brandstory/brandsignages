<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Backup;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use ZipArchive;

class BackupController extends Controller
{
    public function index()
    {
        $backups = Backup::latest()->get();
        $emailSetting = Setting::where('key', 'backup_emails')->first();
        $backupEmails = $emailSetting ? $emailSetting->value : '';

        return view('admin.backups.index', compact('backups', 'backupEmails'));
    }

    public function create()
    {
        ini_set('max_execution_time', 600);
        ini_set('memory_limit', '512M');
        try {
            $timestamp = now()->format('Y-m-d_H-i-s');
            $filename = "backup_{$timestamp}.zip";
            $backupPath = storage_path("app/backups");
            
            if (!File::exists($backupPath)) {
                File::makeDirectory($backupPath, 0755, true);
            }

            $zipPath = $backupPath . '/' . $filename;
            $zip = new ZipArchive();

            if ($zip->open($zipPath, ZipArchive::CREATE) === TRUE) {
                // 1. Export Database using PHP (Plain SQL as requested)
                $tempSql = tempnam(sys_get_temp_dir(), 'backup_sql') . '.sql';
                $handle = fopen($tempSql, 'w');

                fwrite($handle, "-- Database Backup\n");
                fwrite($handle, "-- Date: " . now()->toDateTimeString() . "\n\n");
                fwrite($handle, "SET FOREIGN_KEY_CHECKS=0;\n\n");
                
                $tables = DB::select('SHOW TABLES');
                if (empty($tables)) {
                    throw new \Exception("Database is empty or could not be accessed.");
                }
                
                $firstTable = (array)$tables[0];
                $tableKey = array_keys($firstTable)[0];

                foreach ($tables as $table) {
                    $tableName = $table->$tableKey;
                    
                    fwrite($handle, "-- Table: $tableName\n");
                    
                    if ($tableName === 'sessions') {
                        fwrite($handle, "TRUNCATE TABLE `$tableName`;\n");
                    } else {
                        fwrite($handle, "DROP TABLE IF EXISTS `$tableName`;\n");
                        
                        // Create table statement
                        $createTableResult = DB::select("SHOW CREATE TABLE `$tableName`")[0];
                        $createProperty = 'Create Table';
                        fwrite($handle, $createTableResult->$createProperty . ";\n\n");
                    }
                    
                    // Insert data in chunks
                    DB::table($tableName)->orderBy(DB::raw('1'))->chunk(100, function($rows) use ($handle, $tableName) {
                        if ($rows->count() > 0) {
                            $valuesList = [];
                            $columns = null;
                            
                            foreach ($rows as $row) {
                                $row = (array)$row;
                                if (!$columns) {
                                    $columns = array_keys($row);
                                }
                                
                                $escapedValues = array_map(function($value) {
                                    if ($value === null) return 'NULL';
                                    return DB::getPdo()->quote($value);
                                }, array_values($row));
                                
                                $valuesList[] = "(" . implode(", ", $escapedValues) . ")";
                            }
                            
                            $sql = "INSERT INTO `$tableName` (`" . implode("`, `", $columns) . "`) VALUES " . implode(", ", $valuesList) . ";\n";
                            fwrite($handle, $sql);
                        }
                    });
                    
                    fwrite($handle, "-- End of Table: $tableName\n\n");
                }
                
                fwrite($handle, "SET FOREIGN_KEY_CHECKS=1;");
                fclose($handle);

                $zip->addFile($tempSql, 'database.sql');

                // 2. Export Storage
                $storagePath = storage_path('app/public');
                if (File::exists($storagePath)) {
                    $files = new \RecursiveIteratorIterator(
                        new \RecursiveDirectoryIterator($storagePath),
                        \RecursiveIteratorIterator::LEAVES_ONLY
                    );

                    foreach ($files as $name => $file) {
                        if (!$file->isDir()) {
                            $filePath = $file->getRealPath();
                            $relativePath = 'storage/' . substr($filePath, strlen($storagePath) + 1);
                            $zip->addFile($filePath, $relativePath);
                        }
                    }
                }

                $zip->close();
                
                if (File::exists($tempSql)) {
                    File::delete($tempSql);
                }

                Backup::create([
                    'filename' => $filename,
                    'path' => 'backups/' . $filename,
                    'status' => 'success'
                ]);

                return redirect()->back()->with('success', 'Backup created successfully (Plain SQL inside).');
            } else {
                return redirect()->back()->with('error', 'Could not create zip file.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Backup failed: ' . $e->getMessage());
        }
    }

    public function download($id)
    {
        $backup = Backup::findOrFail($id);
        $path = storage_path('app/' . $backup->path);

        if (File::exists($path)) {
            return response()->download($path);
        }

        return redirect()->back()->with('error', 'Backup file not found.');
    }

    public function destroy($id)
    {
        $backup = Backup::findOrFail($id);
        $path = storage_path('app/' . $backup->path);

        if (File::exists($path)) {
            File::delete($path);
        }

        $backup->delete();

        return redirect()->back()->with('success', 'Backup deleted successfully.');
    }

    public function updateSettings(Request $request)
    {
        Setting::updateOrCreate(
            ['key' => 'backup_emails'],
            ['value' => $request->backup_emails]
        );

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

    public function sendEmail($id)
    {
        $backup = Backup::findOrFail($id);
        $path = storage_path('app/' . $backup->path);
        $emailSetting = Setting::where('key', 'backup_emails')->first();

        if (!$emailSetting || empty($emailSetting->value)) {
            return redirect()->back()->with('error', 'No email addresses configured.');
        }

        $emails = array_map('trim', explode(',', $emailSetting->value));

        try {
            Mail::raw('Please find the attached backup file.', function ($message) use ($emails, $path, $backup) {
                $message->to($emails)
                    ->subject('Database & Storage Backup - ' . $backup->filename)
                    ->attach($path);
            });

            return redirect()->back()->with('success', 'Backup sent to email addresses.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }

    public function import(Request $request)
    {
        ini_set('max_execution_time', 600);
        ini_set('memory_limit', '512M');
        $request->validate([
            'backup_file' => 'required|file|mimes:zip'
        ]);

        try {
            $zipFile = $request->file('backup_file');
            $zip = new ZipArchive();

            if ($zip->open($zipFile->getRealPath()) === TRUE) {
                $extractPath = storage_path('app/temp_import');
                if (File::exists($extractPath)) {
                    File::deleteDirectory($extractPath);
                }
                File::makeDirectory($extractPath, 0755, true);

                $zip->extractTo($extractPath);
                $zip->close();

                // 1. Restore Database
                $sqlFile = $extractPath . '/database.sql';
                $sqlFileGz = $extractPath . '/database.sql.gz';
                
                if (File::exists($sqlFileGz) || File::exists($sqlFile)) {
                    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                    
                    // Get all current tables and drop them
                    $currentTables = DB::select('SHOW TABLES');
                    $tableKey = !empty($currentTables) ? array_keys((array)$currentTables[0])[0] : null;
                    
                    foreach ($currentTables as $table) {
                        $tableName = $table->$tableKey;
                        if ($tableName !== 'sessions') {
                            Schema::dropIfExists($tableName);
                        } else {
                            DB::table($tableName)->truncate();
                        }
                    }
                    
                    // Import SQL
                    $handle = File::exists($sqlFileGz) ? gzopen($sqlFileGz, 'rb') : fopen($sqlFile, 'r');
                    $query = '';
                    
                    while ($handle && (File::exists($sqlFileGz) ? !gzeof($handle) : !feof($handle))) {
                        $line = File::exists($sqlFileGz) ? gzgets($handle, 4096) : fgets($handle, 4096);
                        
                        if (trim($line) == '' || strpos(trim($line), '--') === 0 || strpos(trim($line), '/*') === 0) {
                            continue;
                        }
                        
                        $query .= $line;
                        
                        if (substr(trim($line), -1) == ';') {
                            DB::unprepared($query);
                            $query = '';
                        }
                    }
                    
                    File::exists($sqlFileGz) ? gzclose($handle) : fclose($handle);

                    // Recreate core tables as fallback
                    try {
                        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
                    } catch (\Exception $e) {}

                    if (!Schema::hasTable('sessions') && config('session.driver') == 'database') {
                        Schema::create('sessions', function ($table) {
                            $table->string('id')->primary();
                            $table->foreignId('user_id')->nullable()->index();
                            $table->string('ip_address', 45)->nullable();
                            $table->text('user_agent')->nullable();
                            $table->longText('payload');
                            $table->integer('last_activity')->index();
                        });
                    }

                    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

                    \Illuminate\Support\Facades\Artisan::call('cache:clear');
                    \Illuminate\Support\Facades\Artisan::call('config:clear');
                    \Illuminate\Support\Facades\Artisan::call('view:clear');
                }

                // 2. Restore Storage
                $storageDir = $extractPath . '/storage';
                if (File::exists($storageDir)) {
                    $targetStorage = storage_path('app/public');
                    File::cleanDirectory($targetStorage);
                    File::copyDirectory($storageDir, $targetStorage);
                }

                File::deleteDirectory($extractPath);

                return redirect()->back()->with('success', 'Backup imported successfully (Replaced everything).');
            } else {
                return redirect()->back()->with('error', 'Could not open zip file.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }
}
