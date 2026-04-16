<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MediaController extends Controller
{
    private $disk = 'public';

    public function index(Request $request)
    {
        $path = $request->query('path', '');
        $pickerMode = $request->has('picker');
        
        // Ensure path is within the disk
        $directories = Storage::disk($this->disk)->directories($path);
        $files = Storage::disk($this->disk)->files($path);

        $breadcrumb = [];
        $parts = array_filter(explode('/', $path));
        $currentPath = '';
        foreach ($parts as $part) {
            $currentPath .= ($currentPath ? '/' : '') . $part;
            $breadcrumb[] = [
                'name' => $part,
                'path' => $currentPath,
                'url' => route('admin.media.index', ['path' => $currentPath] + ($pickerMode ? ['picker' => 1] : []))
            ];
        }

        $items = [];

        foreach ($directories as $dir) {
            $items[] = [
                'name' => basename($dir),
                'type' => 'folder',
                'path' => $dir,
                'url' => route('admin.media.index', ['path' => $dir] + ($pickerMode ? ['picker' => 1] : []))
            ];
        }

        foreach ($files as $file) {
            $items[] = [
                'name' => basename($file),
                'type' => 'file',
                'path' => $file,
                'url' => asset('storage/' . $file),
                'size' => $this->formatBytes(Storage::disk($this->disk)->size($file)),
                'ext' => pathinfo($file, PATHINFO_EXTENSION),
                'is_image' => in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp'])
            ];
        }

        return view('admin.media.index', compact('items', 'breadcrumb', 'path', 'pickerMode'));
    }

    public function createFolder(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'path' => 'nullable|string'
        ]);

        $path = $request->input('path', '');
        $folderName = $request->input('name');
        $fullPath = $path ? $path . '/' . $folderName : $folderName;

        if (Storage::disk($this->disk)->exists($fullPath)) {
            return back()->with('error', 'Folder already exists.');
        }

        Storage::disk($this->disk)->makeDirectory($fullPath);

        return back()->with('success', 'Folder created successfully.');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'files.*' => 'required|file|max:10240', // 10MB limit
            'path' => 'nullable|string'
        ]);

        $path = $request->input('path', '');

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $file->storeAs($path, $file->getClientOriginalName(), $this->disk);
            }
        }

        return back()->with('success', 'Files uploaded successfully.');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'path' => 'required|string',
            'type' => 'required|in:file,folder'
        ]);

        $path = $request->input('path');
        $type = $request->input('type');

        if ($type === 'folder') {
            Storage::disk($this->disk)->deleteDirectory($path);
        } else {
            Storage::disk($this->disk)->delete($path);
        }

        return back()->with('success', 'Item deleted successfully.');
    }

    private function formatBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= (1 << (10 * $pow));
        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}
