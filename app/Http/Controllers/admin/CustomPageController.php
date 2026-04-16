<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CustomPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CustomPageController extends Controller
{
    protected $css_path = 'frontend/customstyle';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = CustomPage::paginate(10);
        return view('admin.custom_pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cssFiles = $this->getCssFiles();
        return view('admin.custom_pages.create', compact('cssFiles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:custom_pages,slug',
            'content' => 'required',
            'custom_css' => 'nullable|string',
        ]);

        CustomPage::create($request->all());

        Session::flash('msg', 'Custom Page created successfully!');
        return redirect()->route('custom-pages.index');
    }

    /**
     * Display visual editor with frontend layout wrapper.
     */
    public function visualEditorPreview(Request $request)
    {
        $content = $request->input('content');
        $custom_css = $request->input('custom_css');
        return view('admin.custom_pages.visual_editor', compact('content', 'custom_css'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = CustomPage::findOrFail($id);
        $cssFiles = $this->getCssFiles();
        return view('admin.custom_pages.edit', compact('page', 'cssFiles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $page = CustomPage::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:custom_pages,slug,' . $id,
            'content' => 'required',
            'custom_css' => 'nullable|string',
        ]);

        $page->update($request->all());

        Session::flash('msg', 'Custom Page updated successfully!');
        return redirect()->route('custom-pages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = CustomPage::findOrFail($id);
        $page->delete();

        Session::flash('msg', 'Custom Page deleted successfully!');
        return redirect()->route('custom-pages.index');
    }

    // CSS Management Methods
    public function manageCss()
    {
        $cssFiles = $this->getCssFiles();
        return view('admin.custom_pages.manage_css', compact('cssFiles'));
    }

    public function createCss(Request $request)
    {
        $request->validate([
            'filename' => 'required|string',
            'content' => 'nullable|string',
        ]);

        $filename = Str::finish($request->filename, '.css');
        $path = public_path($this->css_path . '/' . $filename);

        if (File::exists($path)) {
            return back()->withErrors(['filename' => 'File already exists.']);
        }

        File::put($path, $request->content ?? '');

        Session::flash('msg', 'CSS file created successfully!');
        return redirect()->route('custom-pages.manage-css');
    }

    public function editCss($filename)
    {
        $path = public_path($this->css_path . '/' . $filename);
        if (!File::exists($path)) {
            abort(404);
        }

        $content = File::get($path);
        return view('admin.custom_pages.edit_css', compact('filename', 'content'));
    }

    public function updateCss(Request $request, $filename)
    {
        $path = public_path($this->css_path . '/' . $filename);
        if (!File::exists($path)) {
            abort(404);
        }

        File::put($path, $request->content ?? '');

        Session::flash('msg', 'CSS file updated successfully!');
        return redirect()->route('custom-pages.manage-css');
    }

    public function destroyCss($filename)
    {
        $path = public_path($this->css_path . '/' . $filename);
        if (File::exists($path)) {
            File::delete($path);
        }

        Session::flash('msg', 'CSS file deleted successfully!');
        return redirect()->route('custom-pages.manage-css');
    }

    protected function getCssFiles()
    {
        $path = public_path($this->css_path);
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0755, true);
        }

        $files = File::files($path);
        return array_map(function ($file) {
            return $file->getFilename();
        }, $files);
    }
}
