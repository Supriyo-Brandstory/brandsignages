<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class BlogController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::paginate(10); // Adjust pagination as needed
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subcategories = BlogSubCategory::all();
        return view('admin.blogs.create', compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'blog_sub_category_id' => 'required|exists:blog_sub_categories,id',
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'topic' => 'required|string|max:255',
            'reding_time' => 'required|integer',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        Blog::create([
            'blog_sub_category_id' => $request->blog_sub_category_id,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
            'topic' => $request->topic,
            'reding_time' => $request->reding_time,
        ]);

        Session::flash('msg', 'Blog created successfully!');
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $subcategories = BlogSubCategory::all();
        return view('admin.blogs.edit', compact('blog', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'blog_sub_category_id' => 'required|exists:blog_sub_categories,id',
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'topic' => 'required|string|max:255',
            'reding_time' => 'required|integer',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $blog->id,
        ]);
    
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
    
            // Store the new image
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath;
        }
    
        $blog->update([
            'blog_sub_category_id' => $request->blog_sub_category_id,
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $request->slug,
            'topic' => $request->topic,
            'reding_time' => $request->reding_time,
            'image' => $blog->image ?? null,
        ]);
    
        Session::flash('msg', 'Blog updated successfully!');
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();

        Session::flash('msg', 'Blog deleted successfully!');
        return redirect()->route('blogs.index');
    }
}
