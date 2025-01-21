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

        return view('admin.sitemap.index', compact('sitemap'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'sitemap' => 'required|string',
        ]);

        // Save or update the sitemap entry
        Sitemap::updateOrCreate(
            ['id' => 1], // Assuming a single row for sitemap
            ['sitemap' => $request->sitemap]
        );

        return redirect()->route('sitemap.index')->with('success', 'Sitemap updated successfully.');
    }
}
