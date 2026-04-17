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
        ini_set('max_execution_time', 300);
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
                // 1. Export Database using PHP (Portable approach)
                $sqlContent = "-- Database Backup\n";
                $sqlContent .= "-- Date: " . now()->toDateTimeString() . "\n\n";
                $sqlContent .= "SET FOREIGN_KEY_CHECKS=0;\n\n";
                
                $tables = DB::select('SHOW TABLES');
                $dbName = config('database.connections.mysql.database');
                $tableKey = 'Tables_in_' . $dbName;

                foreach ($tables as $table) {
                    $tableName = $table->$tableKey;
                    
                    // Drop table statement
                    $sqlContent .= "DROP TABLE IF EXISTS `$tableName`;\n";
                    
                    // Create table statement
                    $createTableResult = DB::select("SHOW CREATE TABLE `$tableName`")[0];
                    $createProperty = 'Create Table';
                    $sqlContent .= $createTableResult->$createProperty . ";\n\n";
                    
                    // Insert data
                    $rows = DB::table($tableName)->get();
                    foreach ($rows as $row) {
                        $row = (array)$row;
                        $columns = array_keys($row);
                        $values = array_values($row);
                        
                        $escapedValues = array_map(function($value) {
                            if ($value === null) return 'NULL';
                            return DB::getPdo()->quote($value);
                        }, $values);
                        
                        $sqlContent .= "INSERT INTO `$tableName` (`" . implode("`, `", $columns) . "`) VALUES (" . implode(", ", $escapedValues) . ");\n";
                    }
                    $sqlContent .= "\n";
                }
                
                $sqlContent .= "SET FOREIGN_KEY_CHECKS=1;";
                $zip->addFromString('database.sql', $sqlContent);

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

                Backup::create([
                    'filename' => $filename,
                    'path' => 'backups/' . $filename,
                    'status' => 'success'
                ]);

                return redirect()->back()->with('success', 'Backup created successfully.');
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

                // 1. Restore Database (Replace)
                $sqlFile = $extractPath . '/database.sql';
                if (File::exists($sqlFile)) {
                    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                    
                    // Get all current tables and drop them
                    $currentTables = DB::select('SHOW TABLES');
                    $dbName = config('database.connections.mysql.database');
                    $tableKey = 'Tables_in_' . $dbName;
                    
                    foreach ($currentTables as $table) {
                        Schema::dropIfExists($table->$tableKey);
                    }
                    
                    // Import SQL
                    $sql = File::get($sqlFile);
                    DB::unprepared($sql);
                    
                    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
                }

                // 2. Restore Storage (Replace)
                $storageDir = $extractPath . '/storage';
                if (File::exists($storageDir)) {
                    $targetStorage = storage_path('app/public');
                    // Delete existing storage contents to ensure a clean replace
                    File::cleanDirectory($targetStorage);
                    // Copy new contents
                    File::copyDirectory($storageDir, $targetStorage);
                }

                File::deleteDirectory($extractPath);

                return redirect()->back()->with('success', 'Backup imported and data replaced successfully.');
            } else {
                return redirect()->back()->with('error', 'Could not open zip file.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }
}
