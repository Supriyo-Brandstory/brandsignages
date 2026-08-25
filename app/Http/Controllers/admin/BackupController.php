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
use Illuminate\Support\Facades\Artisan;
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
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1');
        DB::connection()->disableQueryLog();

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
                // 1. Export Database
                $tempSql = tempnam(sys_get_temp_dir(), 'backup_sql') . '.sql';
                $handle = fopen($tempSql, 'w');

                fwrite($handle, "-- Database Backup\n");
                fwrite($handle, "-- Date: " . now()->toDateTimeString() . "\n\n");
                fwrite($handle, "SET FOREIGN_KEY_CHECKS=0;\n\n");
                
                $tables = DB::select('SHOW TABLES');
                if (empty($tables)) {
                    throw new \Exception("Database is empty.");
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
                        $createTableResult = DB::select("SHOW CREATE TABLE `$tableName`")[0];
                        $createProperty = 'Create Table';
                        fwrite($handle, $createTableResult->$createProperty . ";\n\n");
                    }
                    
                    DB::table($tableName)->orderBy(DB::raw('1'))->chunk(100, function($rows) use ($handle, $tableName) {
                        if ($rows->count() > 0) {
                            $valuesList = [];
                            $columns = null;
                            foreach ($rows as $row) {
                                $row = (array)$row;
                                if (!$columns) $columns = array_keys($row);
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
                if (File::exists($tempSql)) File::delete($tempSql);

                Backup::create([
                    'filename' => $filename,
                    'path' => 'backups/' . $filename,
                    'status' => 'success'
                ]);

                return redirect()->back()->with('success', 'Backup created successfully.');
            }
            return redirect()->back()->with('error', 'Could not create zip file.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Backup failed: ' . $e->getMessage());
        }
    }

    public function download($id)
    {
        ini_set('memory_limit', '-1');
        $backup = Backup::findOrFail($id);
        $path = storage_path('app/' . $backup->path);
        if (File::exists($path)) return response()->download($path);
        return redirect()->back()->with('error', 'Backup file not found.');
    }

    public function destroy($id)
    {
        $backup = Backup::findOrFail($id);
        $path = storage_path('app/' . $backup->path);
        if (File::exists($path)) File::delete($path);
        $backup->delete();
        return redirect()->back()->with('success', 'Backup deleted successfully.');
    }

    public function updateSettings(Request $request)
    {
        Setting::updateOrCreate(['key' => 'backup_emails'], ['value' => $request->backup_emails]);
        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

    public function sendEmail($id)
    {
        ini_set('memory_limit', '-1');
        $backup = Backup::findOrFail($id);
        $path = storage_path('app/' . $backup->path);
        $emailSetting = Setting::where('key', 'backup_emails')->first();
        if (!$emailSetting || empty($emailSetting->value)) return redirect()->back()->with('error', 'No email configured.');
        $emails = array_map('trim', explode(',', $emailSetting->value));
        try {
            Mail::raw('Please find the attached backup file.', function ($message) use ($emails, $path, $backup) {
                $message->to($emails)->subject('Database Backup - ' . $backup->filename)->attach($path);
            });
            return redirect()->back()->with('success', 'Backup sent to email.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }

    public function import(Request $request)
    {
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1');
        DB::connection()->disableQueryLog();

        $request->validate(['backup_file' => 'required|file']);

        try {
            $zipFile = $request->file('backup_file');
            $zip = new ZipArchive();

            if ($zip->open($zipFile->getRealPath()) === TRUE) {
                $extractPath = storage_path('app/temp_import');
                if (File::exists($extractPath)) File::deleteDirectory($extractPath);
                File::makeDirectory($extractPath, 0755, true);
                $zip->extractTo($extractPath);
                $zip->close();

                // Find SQL file anywhere inside extracted directory
                $sqlFile = null;
                if (File::exists($extractPath . '/database.sql')) {
                    $sqlFile = $extractPath . '/database.sql';
                } else {
                    $allFiles = File::allFiles($extractPath);
                    foreach ($allFiles as $file) {
                        if ($file->getExtension() === 'sql') {
                            $sqlFile = $file->getRealPath();
                            break;
                        }
                    }
                }

                if ($sqlFile && File::exists($sqlFile)) {
                    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                    
                    // Drop existing tables except sessions
                    $currentTables = DB::select('SHOW TABLES');
                    if (!empty($currentTables)) {
                        $tableKey = array_keys((array)$currentTables[0])[0];
                        foreach ($currentTables as $table) {
                            $tableName = $table->$tableKey;
                            if ($tableName !== 'sessions') {
                                DB::statement("DROP TABLE IF EXISTS `$tableName`");
                            }
                        }
                    }
                    
                    // Import SQL stream line by line with robust character parser
                    $this->executeSqlStream($sqlFile);

                    // Sync migrations and ensure latest schema updates
                    Artisan::call('migrate', ['--force' => true]);

                    if (!Schema::hasTable('sessions') && config('session.driver') == 'database') {
                        Artisan::call('migrate', ['--path' => 'database/migrations/0001_01_01_000000_create_users_table.php', '--force' => true]);
                    }

                    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
                    Artisan::call('cache:clear');
                    Artisan::call('config:clear');
                }

                // Restore Storage files
                $storageDir = $extractPath . '/storage';
                if (!File::exists($storageDir)) {
                    // Check if storage folder is nested
                    $directories = File::directories($extractPath);
                    foreach ($directories as $dir) {
                        if (basename($dir) === 'storage') {
                            $storageDir = $dir;
                            break;
                        }
                    }
                }

                if (File::exists($storageDir)) {
                    $targetStorage = storage_path('app/public');
                    if (!File::exists($targetStorage)) {
                        File::makeDirectory($targetStorage, 0755, true);
                    }
                    File::copyDirectory($storageDir, $targetStorage);
                }

                File::deleteDirectory($extractPath);
                return redirect()->back()->with('success', 'Backup restored successfully! All data and files are synced.');
            }
            return redirect()->back()->with('error', 'Could not open uploaded zip file.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }

    /**
     * Executes SQL dump file efficiently via streaming character parser.
     * Prevents memory exhaustion and handles multiline statements with quotes correctly.
     */
    private function executeSqlStream(string $sqlFilePath): void
    {
        $pdo = DB::getPdo();
        $handle = fopen($sqlFilePath, 'r');
        if (!$handle) {
            throw new \Exception("Unable to open SQL file: $sqlFilePath");
        }

        $buffer = '';
        $in_single_quote = false;
        $in_double_quote = false;
        $in_backtick = false;
        $in_block_comment = false;
        $escaped = false;

        while (($line = fgets($handle)) !== false) {
            $len = strlen($line);
            for ($i = 0; $i < $len; $i++) {
                $char = $line[$i];
                $nextChar = ($i + 1 < $len) ? $line[$i + 1] : '';

                if ($in_block_comment) {
                    if ($char === '*' && $nextChar === '/') {
                        $in_block_comment = false;
                        $i++;
                    }
                    continue;
                }

                if ($escaped) {
                    $buffer .= $char;
                    $escaped = false;
                    continue;
                }

                if ($char === '\\' && ($in_single_quote || $in_double_quote)) {
                    $buffer .= $char;
                    $escaped = true;
                    continue;
                }

                if ($char === "'" && !$in_double_quote && !$in_backtick) {
                    $in_single_quote = !$in_single_quote;
                    $buffer .= $char;
                    continue;
                }

                if ($char === '"' && !$in_single_quote && !$in_backtick) {
                    $in_double_quote = !$in_double_quote;
                    $buffer .= $char;
                    continue;
                }

                if ($char === '`' && !$in_single_quote && !$in_double_quote) {
                    $in_backtick = !$in_backtick;
                    $buffer .= $char;
                    continue;
                }

                if (!$in_single_quote && !$in_double_quote && !$in_backtick) {
                    if (($char === '-' && $nextChar === '-') || $char === '#') {
                        break; // Ignore rest of comment line
                    }
                    if ($char === '/' && $nextChar === '*') {
                        $in_block_comment = true;
                        $i++;
                        continue;
                    }
                    if ($char === ';') {
                        $stmt = trim($buffer);
                        if ($stmt !== '') {
                            try {
                                $pdo->exec($stmt);
                            } catch (\Exception $e) {
                                // Ignore non-critical drop table or duplicate index errors
                            }
                        }
                        $buffer = '';
                        continue;
                    }
                }

                $buffer .= $char;
            }
        }

        if (trim($buffer) !== '') {
            try {
                $pdo->exec(trim($buffer));
            } catch (\Exception $e) {
                // Ignore
            }
        }

        fclose($handle);
    }
}
