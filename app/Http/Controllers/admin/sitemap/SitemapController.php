<?php

namespace App\Http\Controllers\admin\sitemap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitemap;

class SitemapController extends Controller
{
    public function index()
    {
        // Retrieve existing sitemap entry, assuming a single entry exists
        $sitemap = Sitemap::first();

        // Calculate URL counts
        $sitemapContent = $sitemap->sitemap ?? '';
        preg_match_all('#<loc>(.*?)</loc>#i', $sitemapContent, $matches);
        $urls = $matches[1] ?? [];
        $totalUrls = count($urls);
        $blogUrls = count(array_filter($urls, fn($u) => str_contains($u, '/blogs/')));
        $pageUrls = $totalUrls - $blogUrls;

        $dbBlogs = \App\Models\Blog::count();
        $dbPages = \App\Models\CustomPage::count();

        return view('admin.sitemap.index', compact('sitemap', 'totalUrls', 'blogUrls', 'pageUrls', 'dbBlogs', 'dbPages'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'sitemap' => 'required|string',
        ]);

        // Clean and sanitize XML entries
        $cleaned = \App\Services\SitemapService::sanitizeContent($request->sitemap);

        // Save or update the sitemap entry
        $record = Sitemap::updateOrCreate(
            ['id' => 1], // Assuming a single row for sitemap
            ['sitemap' => $cleaned]
        );

        // Also sync public/sitemap.xml
        try {
            $fullXml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"
                . "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"\n"
                . "        xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"\n"
                . "        xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">\n"
                . $cleaned . "\n"
                . "</urlset>\n";
            \Illuminate\Support\Facades\File::put(public_path('sitemap.xml'), $fullXml);
        } catch (\Throwable $e) {}

        return redirect()->route('sitemap.index')->with('success', 'Sitemap updated successfully.');
    }

    public function sync()
    {
        $count = \App\Services\SitemapService::syncAll();

        return redirect()->route('sitemap.index')->with('success', "Sitemap synced successfully! Added/updated {$count} URLs.");
    }
}
