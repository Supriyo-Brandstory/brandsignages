<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

class DatabaseController extends Controller
{
    public function showExportPage()
{
    // Create a temporary folder to store CSVs
    $folder = storage_path('app/public/database_exports');
    File::makeDirectory($folder, 0755, true, true);

    // Get all table names in the database
    $tables = DB::select('SHOW TABLES');
    $tableNames = array_map(function ($table) {
        return $table->{'Tables_in_' . env('DB_DATABASE')}; // Get table name dynamically
    }, $tables);

    // Create an array to hold the CSV file paths
    $csvFiles = [];

    foreach ($tableNames as $table) {
        // Retrieve data from the table
        $data = DB::table($table)->get();

        // Open a CSV file for each table
        $filePath = $folder . '/' . $table . '.csv';
        $output = fopen($filePath, 'w');

        // Add column names as the first row
        $columns = Schema::getColumnListing($table);
        fputcsv($output, $columns);

        // Add rows to the CSV
        foreach ($data as $row) {
            fputcsv($output, (array) $row);
        }

        fclose($output);

        // Add the file path to the array for downloading
        $csvFiles[] = $filePath;
    }

    // Return the view to show the export page and the list of CSV files
    return view('admin.database.index', compact('csvFiles'));
}

    public function exportAll()
{
    // Create a temporary folder to store CSVs
    $folder = storage_path('app/public/database_exports');
    File::makeDirectory($folder, 0755, true, true);

    // Get all table names in the database
    $tables = DB::select('SHOW TABLES');
    $tableNames = array_map(function ($table) {
        return $table->{'Tables_in_' . env('DB_DATABASE')}; // Get table name dynamically
    }, $tables);

    foreach ($tableNames as $table) {
        // Retrieve data from the table
        $data = DB::table($table)->get();
        
        // Open a CSV file for each table
        $filePath = $folder . '/' . $table . '.csv';
        $output = fopen($filePath, 'w');

        // Add column names as the first row
        $columns = Schema::getColumnListing($table);
        fputcsv($output, $columns);

        // Add rows to the CSV
        foreach ($data as $row) {
            fputcsv($output, (array) $row);
        }

        fclose($output);
    }

    // Compress the CSVs into a zip file
    $zipFile = $folder . '.zip';
    $this->zipDirectory($folder, $zipFile);

    // Delete the folder after zipping
    File::deleteDirectory($folder);

    // Return the zip file for download
    return response()->download($zipFile)->deleteFileAfterSend(true);
}

private function zipDirectory($source, $destination)
{
    $zip = new \ZipArchive();
    if ($zip->open($destination, \ZipArchive::CREATE) === TRUE) {
        $files = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($source),
            \RecursiveIteratorIterator::LEAVES_ONLY
        );
        
        foreach ($files as $file) {
            if (!$file->isDir()) {
                $zip->addFile($file->getRealPath(), basename($file->getRealPath()));
            }
        }

        $zip->close();
    }
}

public function exportCsvAll()
{
    // Create a temporary folder to store CSVs
    $folder = storage_path('app/public/database_exports');
    File::makeDirectory($folder, 0755, true, true);

    // Get all table names in the database
    $tables = DB::select('SHOW TABLES');
    $tableNames = array_map(function ($table) {
        return $table->{'Tables_in_' . env('DB_DATABASE')}; // Get table name dynamically
    }, $tables);

    // Create an array to hold the CSV file paths
    $csvFiles = [];

    foreach ($tableNames as $table) {
        // Retrieve data from the table
        $data = DB::table($table)->get();

        // Open a CSV file for each table
        $filePath = $folder . '/' . $table . '.csv';
        $output = fopen($filePath, 'w');

        // Add column names as the first row
        $columns = Schema::getColumnListing($table);
        fputcsv($output, $columns);

        // Add rows to the CSV
        foreach ($data as $row) {
            fputcsv($output, (array) $row);
        }

        fclose($output);

        // Add the file path to the array for downloading
        $csvFiles[] = $filePath;
    }

    // Return the view to allow the user to download the CSV files
    return view('admin.database.index', compact('csvFiles'));
}
public function exportAllInOneCSV()
{
    // Create a temporary folder to store CSV
    $folder = storage_path('app/public/database_exports');
    File::makeDirectory($folder, 0755, true, true);

    // Define the path of the combined CSV file
    $csvFile = $folder . '/full_database_export.csv';
    $output = fopen($csvFile, 'w');

    // Get all table names in the database
    $tables = DB::select('SHOW TABLES');
    $tableNames = array_map(function ($table) {
        return $table->{'Tables_in_' . env('DB_DATABASE')}; // Get table name dynamically
    }, $tables);

    foreach ($tableNames as $table) {
        // Add table name as a section header in the CSV
        fputcsv($output, ["Table: $table"]);
        fputcsv($output, []); // Blank line for separation

        // Retrieve data from the table
        $data = DB::table($table)->get();

        // Add column names (header row) as the first row in each table's section
        $columns = Schema::getColumnListing($table);
        fputcsv($output, $columns);

        // Add rows to the CSV
        foreach ($data as $row) {
            fputcsv($output, (array) $row);
        }

        // Add a blank line between tables for readability
        fputcsv($output, []);
    }

    fclose($output);

    // Return the single CSV file for download
    return response()->download($csvFile)->deleteFileAfterSend(true);
}

public function exportAllInOneMySQL()
{
    // MySQL credentials
    $dbName = env('DB_DATABASE');
    $folder = storage_path('app/public/database_exports');

    // Ensure the folder exists or create it
    File::makeDirectory($folder, 0755, true, true);

    // Get all table names in the database
    $tables = DB::select('SHOW TABLES');
    $tableNames = array_map(function ($table) use ($dbName) {
        return $table->{'Tables_in_' . $dbName}; // Get table name dynamically
    }, $tables);

    // Loop through each table and export it
    foreach ($tableNames as $table) {
        // Define the SQL dump file path
        $filePath = $folder . '/' . $table . '.sql';

        // Ensure the file path is absolute (using mysqldump)
        $mysqldumpCommand = sprintf(
            'mysqldump --user=%s --password=%s --host=%s %s %s > %s',
            escapeshellarg(env('DB_USERNAME')),
            escapeshellarg(env('DB_PASSWORD')),
            escapeshellarg(env('DB_HOST')),
            escapeshellarg($dbName),
            escapeshellarg($table),
            escapeshellarg($filePath)
        );

        try {
            // Run the mysqldump command to export the table
            $output = shell_exec($mysqldumpCommand);
            if ($output === null) {
                throw new \Exception("Error exporting table: $table");
            }
        } catch (\Exception $e) {
            // Log any error that occurs during export
            
            continue; // Continue with next table
        }
    }

    // Optionally, you can combine the SQL files into one (this part is up to you)

    // Return the zip file or combined file for download (if you combine them)
    // Here we're returning the individual SQL files for download
    return response()->download($folder . '/' . $table . '.sql')->deleteFileAfterSend(true);
}


}
