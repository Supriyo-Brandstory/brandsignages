<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Backup;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
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
                $dbName = config('database.connections.mysql.database');
                $dbUser = config('database.connections.mysql.username');
                $dbPass = config('database.connections.mysql.password');
                $dbHost = config('database.connections.mysql.host');
                $sqlFile = $backupPath . "/db_dump_{$timestamp}.sql";

                $command = sprintf(
                    'mysqldump --user=%s --password=%s --host=%s %s > %s',
                    escapeshellarg($dbUser),
                    escapeshellarg($dbPass),
                    escapeshellarg($dbHost),
                    escapeshellarg($dbName),
                    escapeshellarg($sqlFile)
                );

                shell_exec($command);

                if (File::exists($sqlFile)) {
                    $zip->addFile($sqlFile, 'database.sql');
                }

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

                // Clean up SQL file
                if (File::exists($sqlFile)) {
                    File::delete($sqlFile);
                }

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
                if (File::exists($sqlFile)) {
                    $dbName = config('database.connections.mysql.database');
                    $dbUser = config('database.connections.mysql.username');
                    $dbPass = config('database.connections.mysql.password');
                    $dbHost = config('database.connections.mysql.host');

                    $command = sprintf(
                        'mysql --user=%s --password=%s --host=%s %s < %s',
                        escapeshellarg($dbUser),
                        escapeshellarg($dbPass),
                        escapeshellarg($dbHost),
                        escapeshellarg($dbName),
                        escapeshellarg($sqlFile)
                    );

                    shell_exec($command);
                }

                // 2. Restore Storage
                $storageDir = $extractPath . '/storage';
                if (File::exists($storageDir)) {
                    $targetStorage = storage_path('app/public');
                    File::copyDirectory($storageDir, $targetStorage);
                }

                File::deleteDirectory($extractPath);

                return redirect()->back()->with('success', 'Backup imported successfully.');
            } else {
                return redirect()->back()->with('error', 'Could not open zip file.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }
}
