<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogSubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
        // Display the list of categories with their subcategories
        public function index()
        {
            $categories = BlogCategory::with('subCategories')->paginate(10);
            return view('admin.blogs.categories.index', compact('categories'));
        }
    
        // Show the form to create a new category and subcategories
        public function create()
        {
            $categories = BlogCategory::get();
            return view('admin.blogs.categories.create',compact('categories'));
        }
    
        // Store a new parent category and its subcategories
        public function store(Request $request)
        {
            // Default 'is_subcategory' to false if not checked
            $request->merge(['is_subcategory' => $request->has('is_subcategory')]);
        
            // Validate the form inputs
            $validated = $request->validate([
                'is_subcategory' => 'required|boolean', // Ensure 'is_subcategory' is either true or false
                'category_name' => 'required|string|max:255',
                'category_description' => 'nullable|string',
                'parent_category_id' => 'nullable|exists:blog_categories,id', // Parent category ID for subcategories
            ]);
            
        
            // If it's a subcategory, ensure a parent category is selected
            if ($validated['is_subcategory']) {
                // Check if parent_category_id is provided
                if (!$request->has('parent_category_id') || empty($request->parent_category_id)) {
                    return back()->withErrors(['parent_category_id' => 'Please select a parent category for the subcategory.']);
                }
        
                // Create the subcategory with the associated blog_category_id (parent category)
                BlogSubCategory::create([
                    'name' => $validated['category_name'],
                    'description' => $validated['category_description'],
                    'blog_category_id' => $validated['parent_category_id'], // Assigning the parent category ID
                ]);
        
                return redirect()->route('categories.index')->with('success', 'Subcategory created successfully!');
            }
        
            // If it's a parent category, create it without the blog_category_id
            BlogCategory::create([
                'name' => $validated['category_name'],
                'description' => $validated['category_description'],
            ]);
        
            return redirect()->route('categories.index')->with('success', 'Category created successfully!');
        }
        
        
        
    
        // Show the form to edit an existing category and its subcategories
        public function edit($id, $type)
    
        {
            
            if($type == 0){
                $category = BlogCategory::findOrFail($id);
                $categories = BlogCategory::where('id', '!=', $id)->get();
                return view('admin.blogs.categories.edit', compact('category', 'categories'));

            }else{
                $category = BlogSubCategory::findOrFail($id);
                $categories = BlogCategory::get();
                return view('admin.blogs.categories.edit', compact('category', 'categories'));

            }
           
          
        }
        
    
        // Update an existing category and its subcategories
        public function update(Request $request, $id)
        {
            // Default 'is_subcategory' to false if not checked
            $request->merge(['is_subcategory' => $request->has('is_subcategory')]);
        
            // Validate the form inputs
            $validated = $request->validate([
                'is_subcategory' => 'required|boolean', // Ensure 'is_subcategory' is either true or false
                'category_name' => 'required|string|max:255',
                'category_slug' => 'required|string|max:255|unique:blog_categories,slug,' . $id, // Exclude current record from uniqueness check
                'category_description' => 'nullable|string',
                'parent_category_id' => 'nullable|exists:blog_categories,id', // Parent category ID for subcategories
            ]);
        
            if ($validated['is_subcategory']) {
                // Update subcategory
                $subcategory = BlogSubCategory::findOrFail($id);
        
                // Ensure a parent category is selected for subcategories
                if (!$request->has('parent_category_id') || empty($request->parent_category_id)) {
                    return back()->withErrors(['parent_category_id' => 'Please select a parent category for the subcategory.']);
                }
        
                // Update the subcategory with new data
                $subcategory->update([
                    'name' => $validated['category_name'],
                    'slug' => $validated['category_slug'],
                    'description' => $validated['category_description'],
                    'blog_category_id' => $validated['parent_category_id'], // Update the parent category ID
                ]);
        
                return redirect()->route('categories.index')->with('success', 'Subcategory updated successfully!');
            } else {
                // Update parent category
                $category = BlogCategory::findOrFail($id);
        
                $category->update([
                    'name' => $validated['category_name'],
                    'slug' => $validated['category_slug'],
                    'description' => $validated['category_description'],
                ]);
        
                return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
            }
        }
        
        
    
        // Delete a category and its subcategories
        public function destroy($id)
        {
            $category = BlogCategory::findOrFail($id);
            $category->delete();
    
            return redirect()->route('categories.index')->with('msg', 'Category deleted successfully!');
        }
    
        // Update the order of subcategories for a category
        public function updateOrder(Request $request)
        {
            $validated = $request->validate([
                'category_id' => 'required|exists:blog_categories,id',
               
            ]);
    
            foreach ($request->order as $index => $id) {
                BlogSubCategory::where('id', $id)->update(['blog_category_id' => $validated['category_id']]);
            }
     
            
            return response()->json(['success' => true, 'message' => 'Subcategory order updated successfully!']);
        }

        public function subcategorydestroy($id)
        {
            $subcategory = BlogSubCategory::findOrFail($id);
            $subcategory->delete();
            return redirect()->route('categories.index')->with('msg', 'Subcategory deleted successfully!');
        }
}
