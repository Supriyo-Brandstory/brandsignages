<?php

namespace App\Http\Controllers\admin\seo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SEO;

class SEOController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seos = SEO::paginate(10); // Get SEO entries with pagination
        return view('admin.seo.index', compact('seos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.seo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'page_url' => 'required|string|max:255|unique:seos,page_url',
            'script' => 'nullable|string',
        ]);

        // Create a new SEO entry
        SEO::create($validatedData);

        // Redirect to the index page with success message
        return redirect()->route('seo.index')->with('msg', 'SEO Entry Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SEO $seo)
    {
        return view('admin.seo.show', compact('seo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SEO $seo)
    {
        return view('admin.seo.edit', compact('seo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SEO $seo)
    {
        // Validate form data
        $validatedData = $request->validate([
            'page_url' => 'required|string|max:255|unique:seos,page_url,' . $seo->id,
            'script' => 'nullable|string',
        ]);

        // Update the SEO entry
        $seo->update($validatedData);

        // Redirect to the index page with success message
        return redirect()->route('seo.index')->with('msg', 'SEO Entry Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SEO $seo)
    {
        // Delete the SEO entry
        $seo->delete();

        // Redirect to the index page with success message
        return redirect()->route('seo.index')->with('msg', 'SEO Entry Deleted Successfully!');
    }
}
