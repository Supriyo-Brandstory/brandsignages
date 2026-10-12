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
        $pages = CustomPage::orderBy('id', 'desc')->paginate(10);
        $cssFiles = $this->getCssFiles();
        return view('admin.custom_pages.index', compact('pages', 'cssFiles'));
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

        $page = CustomPage::create($request->all());

        // Explicitly sync to sitemap immediately
        try {
            if (!empty($page->slug)) {
                $domain = \App\Services\SitemapService::getDomain();
                \App\Services\SitemapService::addOrUpdateUrl($domain . '/' . ltrim($page->slug, '/'));
            }
        } catch (\Throwable $e) {
            \Illuminate\Support\Facades\Log::error('Sitemap page create sync error: ' . $e->getMessage());
        }

        Session::flash('msg', 'Custom Page created successfully!');
        return redirect()->route('custom-pages.index');
    }

    /**
     * Display visual editor with frontend layout wrapper.
     */
    public function visualEditorPreview(Request $request)
    {
        $rawContent = $request->input('content');
        $custom_css = $request->input('custom_css');

        // Fetch blogs so @foreach ($blogs as $blog) works in the preview too
        $blogs = \App\Models\Blog::orderBy('id', 'desc')->take(3)->get();

        // Compile Blade directives ({{ asset() }}, @foreach, <x-component />, etc.)
        try {
            $content = \Illuminate\Support\Facades\Blade::render(
                $rawContent ?? '',
                ['blogs' => $blogs]
            );
        } catch (\Throwable $e) {
            // If there's a Blade syntax error, fall back to raw content so the editor still opens
            $content = $rawContent ?? '';
        }

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

        $oldSlug = $page->slug;
        $page->update($request->all());

        // Explicitly update sitemap (replace old URL with new URL)
        try {
            $domain = \App\Services\SitemapService::getDomain();
            $oldUrl = !empty($oldSlug) ? $domain . '/' . ltrim($oldSlug, '/') : null;
            $newUrl = $domain . '/' . ltrim($page->slug, '/');
            \App\Services\SitemapService::addOrUpdateUrl($newUrl, $oldUrl);
        } catch (\Throwable $e) {
            \Illuminate\Support\Facades\Log::error('Sitemap page update sync error: ' . $e->getMessage());
        }

        Session::flash('msg', 'Custom Page updated successfully!');
        return redirect()->route('custom-pages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = CustomPage::findOrFail($id);
        $deletedSlug = $page->slug;
        $page->delete();

        // Explicitly remove from sitemap
        try {
            if (!empty($deletedSlug)) {
                $domain = \App\Services\SitemapService::getDomain();
                \App\Services\SitemapService::removeUrl($domain . '/' . ltrim($deletedSlug, '/'));
            }
        } catch (\Throwable $e) {
            \Illuminate\Support\Facades\Log::error('Sitemap page delete sync error: ' . $e->getMessage());
        }

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

    /**
     * Download sample ZIP containing template page, images folder, and README guide.
     */
    public function downloadSampleFile()
    {
        $zipPath = storage_path('app/sample_custom_pages.zip');

        $zip = new \ZipArchive();
        if ($zip->open($zipPath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === true) {
            // 1. Add sample page php (without header and footer)
            $samplePageContent = $this->getSampleFileContent();
            $zip->addFromString('sample_custom_page.php', $samplePageContent);

            // 2. Add sample images in images/ folder
            $bannerSource = public_path('frontend/Images/home/brandsignages-banner.webp');
            if (File::exists($bannerSource)) {
                $zip->addFile($bannerSource, 'images/sample-banner.webp');
            }
            $showcaseSource = public_path('frontend/Images/home/why-choose.webp');
            if (File::exists($showcaseSource)) {
                $zip->addFile($showcaseSource, 'images/sample-showcase.webp');
            }

            // 3. Add README guide
            $readmeContent = $this->getSampleReadmeContent();
            $zip->addFromString('README.txt', $readmeContent);

            $zip->close();
        }

        // Also copy to public/samples for direct link access
        $publicDir = public_path('samples');
        if (!File::isDirectory($publicDir)) {
            File::makeDirectory($publicDir, 0755, true);
        }
        if (File::exists($zipPath)) {
            File::copy($zipPath, $publicDir . '/sample_custom_pages.zip');
        }

        return response()->download($zipPath, 'sample_custom_pages.zip', [
            'Content-Type' => 'application/zip',
        ]);
    }

    /**
     * README guide content for the sample ZIP.
     */
    protected function getSampleReadmeContent()
    {
        return <<<'TXT'
======================================================================
BRAND SIGNAGES - BULK CUSTOM PAGES UPLOAD GUIDE
======================================================================

FOLDER STRUCTURE INSIDE YOUR ZIP:
----------------------------------
my_bulk_pages.zip
├── surat_index.php             <-- Your page files (.php or .html)
├── hyderabad_index.php
├── sample_custom_page.php
└── images/                     <-- All page images here
    ├── sample-banner.webp
    └── sample-showcase.webp

RULES & BEST PRACTICES:
-----------------------
1. NO HEADER & NO FOOTER:
   - Do NOT include <header>, <footer>, <html>, or <body> tags.
   - The website header and footer are automatically added by the site layout.

2. IMAGE PATHS:
   - Place all your page images inside the "images/" folder of this ZIP.
   - Reference images in your HTML using relative paths like:
     <img src="images/sample-showcase.webp">
     or
     <div style="background-image: url('images/sample-banner.webp');">
   - During bulk upload, the system automatically saves the images into the website
     assets directory and links them correctly.

3. PAGE TITLE & SLUG:
   - You can define optional metadata at the top of your page file:
     <!--
     Title: Premium Sign Board Manufacturers in Surat
     Slug: sign-board-manufacturers-in-surat
     CSS: (Optional CSS file name)
     -->
   - If omitted, the title and slug will be automatically detected from <h1> or the file name.

4. UPLOAD:
   - Go to Admin Panel -> All Custom Pages -> "Bulk Upload Pages"
   - Select your .zip archive and click "Start Bulk Upload".
======================================================================
TXT;
    }

    /**
     * Bulk upload pages from multiple .php/.html files, .zip archive, or .csv file.
     */
    public function bulkUpload(Request $request)
    {
        $request->validate([
            'files' => 'required',
            'default_css' => 'nullable|string',
            'overwrite' => 'nullable|boolean',
        ]);

        $defaultCss = $request->input('default_css');
        $overwrite = $request->boolean('overwrite', true);

        $results = [
            'created' => 0,
            'updated' => 0,
            'skipped' => 0,
            'images' => 0,
            'errors' => [],
        ];

        $uploadedFiles = $request->file('files');
        if (!is_array($uploadedFiles)) {
            $uploadedFiles = [$uploadedFiles];
        }

        $imageExtensions = ['jpg', 'jpeg', 'png', 'webp', 'svg', 'gif', 'avif', 'ico', 'bmp'];
        $imagesTargetDir = public_path('frontend/Images/custom_pages');
        if (!File::isDirectory($imagesTargetDir)) {
            File::makeDirectory($imagesTargetDir, 0755, true);
        }
        $rootImagesDir = public_path('images');
        if (!File::isDirectory($rootImagesDir)) {
            File::makeDirectory($rootImagesDir, 0755, true);
        }

        foreach ($uploadedFiles as $uploadedFile) {
            if (!$uploadedFile->isValid()) {
                $results['errors'][] = "Uploaded file {$uploadedFile->getClientOriginalName()} was invalid or failed to upload.";
                continue;
            }

            $origName = $uploadedFile->getClientOriginalName();
            $ext = strtolower($uploadedFile->getClientOriginalExtension());

            if ($ext === 'zip') {
                $this->processZipUpload($uploadedFile, $defaultCss, $overwrite, $results);
            } elseif ($ext === 'csv') {
                $this->processCsvUpload($uploadedFile, $defaultCss, $overwrite, $results);
            } elseif (in_array($ext, ['php', 'html', 'htm', 'blade'])) {
                $content = File::get($uploadedFile->getRealPath());
                $this->processSinglePage($content, $origName, $defaultCss, $overwrite, $results);
            } elseif (in_array($ext, $imageExtensions)) {
                $destPath = $imagesTargetDir . '/' . $origName;
                $uploadedFile->move($imagesTargetDir, $origName);
                if (File::exists($destPath)) {
                    File::copy($destPath, $rootImagesDir . '/' . $origName);
                }
                $results['images']++;
            } else {
                $results['errors'][] = "Unsupported file type for {$origName}. Allowed: .php, .html, .htm, .zip, .csv, and images.";
            }
        }

        $msg = "Bulk upload completed: {$results['created']} page(s) created, {$results['updated']} updated.";
        if ($results['images'] > 0) {
            $msg .= " {$results['images']} image(s) uploaded.";
        }
        if ($results['skipped'] > 0) {
            $msg .= " ({$results['skipped']} skipped).";
        }

        if (!empty($results['errors'])) {
            $errorSummary = implode('; ', array_slice($results['errors'], 0, 5));
            Session::flash('error', $errorSummary);
        }

        Session::flash('msg', $msg);
        return redirect()->route('custom-pages.index');
    }

    /**
     * Process ZIP archive containing page files and images.
     */
    protected function processZipUpload($file, $defaultCss, $overwrite, &$results)
    {
        $zip = new \ZipArchive();
        if ($zip->open($file->getRealPath()) !== true) {
            $results['errors'][] = "Could not open ZIP file: " . $file->getClientOriginalName();
            return;
        }

        $tempDir = storage_path('app/temp_zip_' . uniqid());
        File::makeDirectory($tempDir, 0755, true);
        $zip->extractTo($tempDir);
        $zip->close();

        $imagesTargetDir = public_path('frontend/Images/custom_pages');
        if (!File::isDirectory($imagesTargetDir)) {
            File::makeDirectory($imagesTargetDir, 0755, true);
        }

        $rootImagesDir = public_path('images');
        if (!File::isDirectory($rootImagesDir)) {
            File::makeDirectory($rootImagesDir, 0755, true);
        }

        $cssTargetDir = public_path($this->css_path);
        if (!File::isDirectory($cssTargetDir)) {
            File::makeDirectory($cssTargetDir, 0755, true);
        }

        $allFiles = File::allFiles($tempDir);
        $imageExtensions = ['jpg', 'jpeg', 'png', 'webp', 'svg', 'gif', 'avif', 'ico', 'bmp'];

        // Pass 1: Extract Images & CSS files first
        foreach ($allFiles as $extractedFile) {
            $relPath = $extractedFile->getRelativePathname();
            if (str_contains($relPath, '__MACOSX') || str_starts_with($extractedFile->getFilename(), '.')) {
                continue;
            }

            $ext = strtolower($extractedFile->getExtension());

            // Handle images
            if (in_array($ext, $imageExtensions)) {
                $filename = $extractedFile->getFilename();
                File::copy($extractedFile->getRealPath(), $imagesTargetDir . '/' . $filename);
                File::copy($extractedFile->getRealPath(), $rootImagesDir . '/' . $filename);
                $results['images']++;
            }

            // Handle CSS files
            if ($ext === 'css') {
                $filename = $extractedFile->getFilename();
                File::copy($extractedFile->getRealPath(), $cssTargetDir . '/' . $filename);
            }
        }

        // Pass 2: Process Page files
        foreach ($allFiles as $extractedFile) {
            $relPath = $extractedFile->getRelativePathname();
            if (str_contains($relPath, '__MACOSX') || str_starts_with($extractedFile->getFilename(), '.')) {
                continue;
            }

            $ext = strtolower($extractedFile->getExtension());
            if (in_array($ext, ['php', 'html', 'htm'])) {
                $content = File::get($extractedFile->getRealPath());
                $this->processSinglePage($content, $extractedFile->getFilename(), $defaultCss, $overwrite, $results);
            }
        }

        File::deleteDirectory($tempDir);
    }

    /**
     * Process CSV file with pages.
     */
    protected function processCsvUpload($file, $defaultCss, $overwrite, &$results)
    {
        $handle = fopen($file->getRealPath(), 'r');
        if (!$handle) {
            $results['errors'][] = "Could not read CSV file: " . $file->getClientOriginalName();
            return;
        }

        $header = fgetcsv($handle);
        if (!$header) {
            fclose($handle);
            return;
        }

        $map = [];
        foreach ($header as $idx => $col) {
            $cleanCol = strtolower(trim($col));
            if (in_array($cleanCol, ['title', 'page_title', 'name'])) $map['title'] = $idx;
            if (in_array($cleanCol, ['slug', 'url_slug', 'url'])) $map['slug'] = $idx;
            if (in_array($cleanCol, ['content', 'html', 'body', 'html_body'])) $map['content'] = $idx;
            if (in_array($cleanCol, ['custom_css', 'css'])) $map['custom_css'] = $idx;
        }

        while (($row = fgetcsv($handle)) !== false) {
            if (empty(array_filter($row))) continue;
            $title = isset($map['title']) ? ($row[$map['title']] ?? '') : '';
            $slug = isset($map['slug']) ? ($row[$map['slug']] ?? '') : '';
            $content = isset($map['content']) ? ($row[$map['content']] ?? '') : '';
            $css = isset($map['custom_css']) && !empty($row[$map['custom_css']]) ? $row[$map['custom_css']] : $defaultCss;

            $this->savePageRecord($title, $slug, $content, $css, $overwrite, $results);
        }

        fclose($handle);
    }

    /**
     * Parse single file content and save to database.
     */
    protected function processSinglePage($rawContent, $filename, $defaultCss, $overwrite, &$results)
    {
        $title = null;
        $slug = null;
        $css = null;

        // Check for comment metadata: <!-- Title: ... -->
        if (preg_match('/<!--\s*Title:\s*([^\n\r->]+)/i', $rawContent, $m)) {
            $title = trim($m[1]);
        }
        if (preg_match('/<!--\s*Slug:\s*([^\n\r->]+)/i', $rawContent, $m)) {
            $slug = trim($m[1]);
        }
        if (preg_match('/<!--\s*CSS:\s*([^\n\r->]+)/i', $rawContent, $m)) {
            $css = trim($m[1]);
        }

        // Extract title from <title> tag if not found
        if (empty($title) && preg_match('/<title[^>]*>(.*?)<\/title>/si', $rawContent, $m)) {
            $title = trim(strip_tags($m[1]));
        }

        // Extract title from <h1> tag if not found
        if (empty($title) && preg_match('/<h1[^>]*>(.*?)<\/h1>/si', $rawContent, $m)) {
            $title = trim(strip_tags($m[1]));
        }

        // Clean filename (e.g., surat_index.php -> surat, hyderabad_index.php -> hyderabad)
        $cleanBase = pathinfo($filename, PATHINFO_FILENAME);
        $cleanBase = preg_replace('/(\.blade)$/i', '', $cleanBase);
        $cleanBaseWithoutIndex = preg_replace('/[_-]index$/i', '', $cleanBase);

        if (empty($title)) {
            $title = Str::title(str_replace(['-', '_'], ' ', $cleanBaseWithoutIndex ?: $cleanBase));
        }

        if (empty($slug)) {
            $slug = Str::slug($cleanBaseWithoutIndex ?: $cleanBase);
        } else {
            $slug = Str::slug($slug);
        }

        // Detect linked CSS if not specified
        if (empty($css) && preg_match('/<link\s+[^>]*href=["\'][^"\']*\/customstyle\/([^"\'\?]+)["\']/i', $rawContent, $m)) {
            $css = trim($m[1]);
        }
        if (empty($css)) {
            $css = $defaultCss;
        }

        // Sanitize content: remove header, footer, body wrappers
        $cleanContent = $this->cleanHtmlContent($rawContent);

        $this->savePageRecord($title, $slug, $cleanContent, $css, $overwrite, $results);
    }

    /**
     * Clean page content to remove layout wrappers, header, footer, and full html tags.
     */
    protected function cleanHtmlContent($content)
    {
        // Strip UTF-8 BOM
        $content = preg_replace('/^\xEF\xBB\xBF/', '', $content);

        // If Blade @section('content') is present, take what is inside
        if (preg_match('/@section\([\'"]content[\'"]\)(.*?)@endsection/si', $content, $m)) {
            $content = $m[1];
        }

        // Strip Blade @extends and leftover @section / @endsection
        $content = preg_replace('/@extends\([^\)]+\)/i', '', $content);
        $content = preg_replace('/@section\([^\)]+\)/i', '', $content);
        $content = preg_replace('/@endsection/i', '', $content);

        // If full HTML document, extract <body> content
        if (preg_match('/<body[^>]*>(.*?)<\/body>/si', $content, $m)) {
            $content = $m[1];
        }

        // Strip out <header>...</header> and <footer>...</footer> tags
        $content = preg_replace('/<header\b[^>]*>(.*?)<\/header>/si', '', $content);
        $content = preg_replace('/<footer\b[^>]*>(.*?)<\/footer>/si', '', $content);

        // Strip out <head>...</head> tags
        $content = preg_replace('/<head\b[^>]*>(.*?)<\/head>/si', '', $content);

        // Strip DOCTYPE, <html>, </html>, <body>, </body> if remaining
        $content = preg_replace('/<!DOCTYPE[^>]*>/i', '', $content);
        $content = preg_replace('/<\/?html[^>]*>/i', '', $content);
        $content = preg_replace('/<\/?body[^>]*>/i', '', $content);

        // Fix any missing blog.detail route calls to valid URL
        $content = preg_replace('/route\(\s*[\'"]blog\.detail[\'"]\s*,\s*([^\)]+)\)/i', 'url(\'/blogs/\' . $1)', $content);

        // Automatically rewrite relative image paths so they load from frontend/Images/custom_pages/
        $content = $this->rewriteImagePaths($content);

        return trim($content);
    }

    /**
     * Rewrite relative image paths in HTML to point to custom_pages images directory.
     */
    protected function rewriteImagePaths($content)
    {
        // 1. Rewrite <img src="..." and <source src="..."
        $content = preg_replace_callback(
            '/(<(?:img|source)\b[^>]*?\bsrc\s*=\s*["\'])(?!https?:\/\/|\/\/|\{\{|\/storage\/|\/frontend\/)(?:\.?\.\/)*(?:images?\/|assets\/images?\/|img\/)?([^"\'<>\s]+\.(?:jpg|jpeg|png|webp|svg|gif|avif|ico))(["\'][^>]*>)/i',
            function ($m) {
                $filename = basename($m[2]);
                return $m[1] . "{{ asset('frontend/Images/custom_pages/" . $filename . "') }}" . $m[3];
            },
            $content
        );

        // 2. Rewrite CSS url('...')
        $content = preg_replace_callback(
            '/(url\(\s*[\'"]?)(?!https?:\/\/|\/\/|\{\{|\/storage\/|\/frontend\/)(?:\.?\.\/)*(?:images?\/|assets\/images?\/|img\/)?([^\'"\)\s]+\.(?:jpg|jpeg|png|webp|svg|gif|avif|ico))([\'"]?\s*\))/i',
            function ($m) {
                $filename = basename($m[2]);
                return $m[1] . "{{ asset('frontend/Images/custom_pages/" . $filename . "') }}" . $m[3];
            },
            $content
        );

        return $content;
    }

    /**
     * Save or update page record and sync to sitemap.
     */
    protected function savePageRecord($title, $slug, $content, $css, $overwrite, &$results)
    {
        if (empty($slug)) {
            $slug = Str::slug($title);
        }

        if (empty($slug)) {
            $results['errors'][] = "Skipped an entry with missing slug.";
            $results['skipped']++;
            return;
        }

        $existing = CustomPage::where('slug', $slug)->first();

        if ($existing) {
            if ($overwrite) {
                $oldSlug = $existing->slug;
                $existing->title = $title ?: $existing->title;
                $existing->content = $content ?: $existing->content;
                if (!empty($css)) {
                    $existing->custom_css = $css;
                }
                $existing->save();

                try {
                    $domain = \App\Services\SitemapService::getDomain();
                    $newUrl = $domain . '/' . ltrim($existing->slug, '/');
                    $oldUrl = !empty($oldSlug) ? $domain . '/' . ltrim($oldSlug, '/') : null;
                    \App\Services\SitemapService::addOrUpdateUrl($newUrl, $oldUrl);
                } catch (\Throwable $e) {
                    \Illuminate\Support\Facades\Log::error('Sitemap page bulk update sync error: ' . $e->getMessage());
                }

                $results['updated']++;
            } else {
                $results['skipped']++;
            }
        } else {
            $page = CustomPage::create([
                'title' => $title ?: ucfirst(str_replace('-', ' ', $slug)),
                'slug' => $slug,
                'content' => $content,
                'custom_css' => $css ?: null,
            ]);

            try {
                $domain = \App\Services\SitemapService::getDomain();
                \App\Services\SitemapService::addOrUpdateUrl($domain . '/' . ltrim($page->slug, '/'));
            } catch (\Throwable $e) {
                \Illuminate\Support\Facades\Log::error('Sitemap page bulk create sync error: ' . $e->getMessage());
            }

            $results['created']++;
        }
    }

    /**
     * Provide sample file template without header and footer.
     */
    protected function getSampleFileContent()
    {
        return <<<'HTML'
<!-- 
======================================================================
BRAND SIGNAGES - SAMPLE CUSTOM PAGE (WITHOUT HEADER & FOOTER)
======================================================================
PAGE METADATA (Optional - auto-detected during Bulk Upload):
Title: Premium Sign Board Manufacturers in YourCity
Slug: sign-board-manufacturers-in-yourcity
CSS: 

IMPORTANT GUIDELINES:
1. DO NOT include <html>, <head>, <body>, <header>, or <footer> tags!
2. The website header and footer are automatically added by the layout.
3. You can use standard HTML, <style> tags, Bootstrap classes, and Blade syntax.
======================================================================
-->

<style>
    .hero-banner {
        padding: 70px 0;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), #1c1c1c;
        color: #ffffff;
        background-size: cover;
        background-position: center;
    }
    .hero-banner_title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.2;
    }
    .custom-section-title {
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 15px;
    }
    .custom-card {
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 24px;
        height: 100%;
        background: #ffffff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.04);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .custom-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }
    .contact-btn {
        background-color: #E43D12;
        color: #ffffff;
        border: none;
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 4px;
        text-decoration: none;
        display: inline-block;
        transition: background 0.3s ease;
    }
    .contact-btn:hover {
        background-color: #c9340e;
        color: #ffffff;
    }
</style>

<!-- Hero Banner Section -->
<section class="hero-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="hero-banner_title">Premium Sign Board <br>Manufacturers in YourCity</h1>
                <p class="lead mb-4">Capture attention and build brand authority with durable, bespoke signage solutions crafted for businesses across all industries.</p>
                <div>
                    <a href="{{ route('contact_us') }}" class="contact-btn">Get a Free Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About / Overview Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="custom-section-title">High-Impact Custom Signboards in YourCity</h2>
                <p class="text-secondary">
                    Signages are one of the most powerful brand touchpoints for your business. Whether you need eye-catching outdoor LED displays, corporate 3D acrylic letters, or subtle interior directional signs, we design and produce signboards that reflect your brand identity with clarity.
                </p>
                <p class="text-secondary">
                    Manufactured with weather-resistant materials and ultra-bright illumination, our signs are engineered to provide maximum visibility day and night while minimizing energy consumption.
                </p>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="ri-checkbox-circle-fill text-danger me-2"></i> Custom laser-cut designs to exact specifications</li>
                    <li class="mb-2"><i class="ri-checkbox-circle-fill text-danger me-2"></i> Weatherproof, UV-resistant premium grade materials</li>
                    <li class="mb-2"><i class="ri-checkbox-circle-fill text-danger me-2"></i> Turnkey service from fabrication to on-site installation</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('frontend/Images/home/brandsignages-banner.webp') }}" alt="Custom Signage Showcase" class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>
</section>

<!-- Services / Offerings Grid -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="custom-section-title">Signage Products We Deliver</h2>
            <p class="text-muted">Explore our popular commercial signage categories</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="custom-card">
                    <h4 class="fw-bold mb-3">LED Display Boards</h4>
                    <p class="text-muted">High-lumen LED illuminated signages designed for storefronts, retail plazas, and exterior building branding.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <h4 class="fw-bold mb-3">3D Acrylic Letters</h4>
                    <p class="text-muted">Modern front-lit and back-lit 3D letters tailored for corporate reception areas and office lobbies.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <h4 class="fw-bold mb-3">Neon & Glow Signs</h4>
                    <p class="text-muted">Eye-catching custom flex-neon lighting crafted for restaurants, bars, retail stores, and creative studios.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blogs Section (Optional dynamic Blade loop) -->
@if (isset($blogs) && count($blogs) > 0)
<section class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="custom-section-title">Latest Articles & Insights</h2>
        </div>
        <div class="row g-4">
            @foreach ($blogs as $blog)
                <div class="col-md-4">
                    <div class="custom-card">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid rounded mb-3" style="height: 180px; width: 100%; object-fit: cover;">
                        <h5 class="fw-bold">{{ Str::limit($blog->title, 55) }}</h5>
                        <p class="text-muted small">{{ Str::limit(strip_tags($blog->description), 90) }}</p>
                        <a href="{{ url('/blogs/' . $blog->slug) }}" class="text-danger fw-semibold text-decoration-none">Read More &rarr;</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Call to Action Banner -->
<section class="py-5 text-center text-white" style="background-color: #121212;">
    <div class="container">
        <h2 class="mb-3 text-white">Need a Signboard Tailored to Your Brand?</h2>
        <p class="lead mb-4 text-white-50">Get in touch with our signage design consultants for an on-site survey and quotation.</p>
        <a href="{{ route('contact_us') }}" class="contact-btn">Talk to Our Team</a>
    </div>
</section>
HTML;
    }
}

