<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSubCategory;
use App\Models\Contact;
use App\Models\CustomInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\SEO;
use App\Models\Sitemap;
use Illuminate\Support\Facades\Response;

class frontendController extends Controller

{

    public function sitemap()
    {
        // Fetch sitemap data from the database
        $sitemap = Sitemap::first();

        // Return the view with the XML content and set the correct content type
        return Response::make(view('frontend.sitemap', compact('sitemap')), 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
    public function index()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        $blogs = Blog::orderBy('id', 'desc')->where('blog_sub_category_id',2)->take(3)->get();
        return view('frontend.index', compact('seo','blogs'));
    }

    //Signages
    public function arcylic_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.arcylic-signages', compact('seo'));
    }
    public function metal_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.metal-signages', compact('seo'));
    }
    public function digital_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        $blogs = Blog::orderBy('id', 'desc')->where('blog_sub_category_id',3)->take(3)->get();
        return view('frontend.signages.digital-signages', compact('seo','blogs'));
    }
    public function outdoor_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.outdoor-signages', compact('seo'));
    }
    public function indoor_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.indoor-signages', compact('seo'));
    }
    public function neon_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.neon-signages', compact('seo'));
    }
    public function led_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        $blogs = Blog::orderBy('id', 'desc')->where('blog_sub_category_id',9)->take(3)->get();
        return view('frontend.signages.led-light-signages', compact('seo','blogs'));
    }
    public function hospital_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.hospital-signages', compact('seo'));
    }
    public function restaurant_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.restaurant-signages', compact('seo'));
    }
    public function construction_safety_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.construction-safety-signages', compact('seo'));
    }
    public function office_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.office-signages', compact('seo'));
    }
    public function fire_safety_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.fire-safety-signages', compact('seo'));
    }
    public function door_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.door-signages', compact('seo'));
    }
    public function house_number_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.house-number-signages', compact('seo'));
    }
    public function nameplate_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.nameplate-signages', compact('seo'));
    }
    public function restroom_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.restroom-signages', compact('seo'));
    }
    public function prohibitory_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.prohibitory-signages', compact('seo'));
    }
    public function office_desk_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.office-desk-signages', compact('seo'));
    }
    public function floor_signages()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.floor-signages', compact('seo'));
    }
    public function room_name_plates()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.room-name-plates', compact('seo'));
    }
    public function digital_signage_for_retail()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.digital-signage-for-retail', compact('seo'));
    }
    public function restaurant_menu_boards()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signages.restaurant-menu-boards', compact('seo'));
    }

    //    signagesResion
    public function acrylic_signage_manufacturer_bangalore()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.acrylic-signage-manufacturer-bangalore', compact('seo'));
    }
    public function steel_signage_manufacturer_bangalore()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.steel-signage-manufacturer-bangalore', compact('seo'));
    }
    public function digital_signage_company_bangalore()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        $blogs = Blog::orderBy('id', 'desc')->where('blog_sub_category_id',3)->take(3)->get();
        return view('frontend.signagesResion.digital-signage-company-bangalore', compact('seo','blogs'));
    }
    public function neon_sign_board_bangalore()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.neon-sign-board-bangalore', compact('seo'));
    }

    public function signage_in_bangalore()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.signage-in-bangalore', compact('seo'));
    }
    public function led_sign_board_in_bangalore()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        $blogs = Blog::orderBy('id', 'desc')->where('blog_sub_category_id',9)->take(3)->get();

        return view('frontend.signagesResion.led-sign-board-in-bangalore', compact('seo','blogs'));
    }

    public function hospital_signages_in_bangalore()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.hospital-signages-in-bangalore', compact('seo'));
    }
    public function safety_signages_in_bangalore()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.safety-signages-in-bangalore', compact('seo'));
    }

    public function name_plate_signages_in_bangalore()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.name-plate-signages-in-bangalore', compact('seo'));
    }
    public function restroom_signs_in_bangalore()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.restroom-signs-in-bangalore', compact('seo'));
    }
    public function office_desk_signs_in_bangalore()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.office-desk-signs-in-bangalore', compact('seo'));
    }


    //chennai
    public function signage_company_in_chennai()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        $blogs = Blog::orderBy('id', 'desc')->where('blog_sub_category_id',2)->take(3)->get();
        return view('frontend.signagesResion.signages-in-chennai', compact('seo','blogs'));
    }
    public function acrylic_signages_in_chennai()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.acrylic-signages-in-chennai', compact('seo'));
    }
    public function metal_sign_in_chennai (){
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.metal-stainless-steel-chennai', compact('seo'));
        
    }
    public function leading_digital_signages_manufacturer_in_chennai(){
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.leading-digital-signages-manufacturer-in-chennai', compact('seo'));
    }


    public function custom_neon_sign_board_in_chennai()
    {
        
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.custom-neon-sign-boards-in-chennai', compact('seo'));
    }
    public function led_display_board_in_chennai(){
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.led-display-board-in-chennai', compact('seo'));
    }
    public function hospital_medical_signages_chennai(){
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.hospital-medical-signages-chennai', compact('seo'));
    }
    public function high_quality_safety_signages_in_chennai(){
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.high-quality-safety-signages-in-chennai', compact('seo'));
    }
    public function high_quality_restroom_signs_in_chennai(){
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.signagesResion.high-quality-restroom-signs-in-chennai', compact('seo'));
    }
//mumbai

public function leading_signage_company_in_mumbai(){
    $currentRoute = Route::current()->uri();
    $seo = SEO::where('page_url', $currentRoute)->first();
    $blogs = Blog::orderBy('id', 'desc')->where('blog_sub_category_id',7)->take(3)->get();
    return view('frontend.signagesResion.leading-signage-company-in-mumbai', compact('seo','blogs'));
    
}
public function premium_acrylic_sign_boards_in_mumbai(){
    $currentRoute = Route::current()->uri();
    $seo = SEO::where('page_url', $currentRoute)->first();
    return view('frontend.signagesResion.premium-acrylic-sign-boards-in-mumbai', compact('seo'));
 
}
public function digital_signages_manufacturer_in_mumbai(){
    $currentRoute = Route::current()->uri();
    $seo = SEO::where('page_url', $currentRoute)->first();
    return view('frontend.signagesResion.digital-signages-manufacturer-in-mumbai', compact('seo'));
 
}
public function led_display_board_in_mumbai(){
    $currentRoute = Route::current()->uri();
    $seo = SEO::where('page_url', $currentRoute)->first();
    return view('frontend.signagesResion.led-display-board-in-mumbai', compact('seo'));
 
}
public function hospital_and_medical_signages_in_mumbai(){
    $currentRoute = Route::current()->uri();
    $seo = SEO::where('page_url', $currentRoute)->first();
    return view('frontend.signagesResion.hospital-and-medical-signages-in-mumbai', compact('seo'));
 
}
public function construction_fire_safety_signages_in_mumbai(){
    $currentRoute = Route::current()->uri();
    $seo = SEO::where('page_url', $currentRoute)->first();
    return view('frontend.signagesResion.construction-fire-safety-signages-in-mumbai', compact('seo'));
 
}
public function name_plate_signs_manufacturer_mumbai(){
    $currentRoute = Route::current()->uri();
    $seo = SEO::where('page_url', $currentRoute)->first();
    return view('frontend.signagesResion.name-plate-signs-manufacturer-mumbai', compact('seo'));
 
}
public function office_signages_in_mumbai(){
    $currentRoute = Route::current()->uri();
    $seo = SEO::where('page_url', $currentRoute)->first();
    return view('frontend.signagesResion.office-signages-in-mumbai', compact('seo'));
 
}
public function stainless_steel_sign_board_manufacturer_mumbai(){
    $currentRoute = Route::current()->uri();
    $seo = SEO::where('page_url', $currentRoute)->first();
    return view('frontend.signagesResion.stainless-steel-sign-board-manufacturer-mumbai', compact('seo'));
 
}
public function neon_sign_board_in_mumbai(){
    $currentRoute = Route::current()->uri();
    $seo = SEO::where('page_url', $currentRoute)->first();
    return view('frontend.signagesResion.neon-sign-board-in-mumbai', compact('seo'));
 
}
public function restroom_signs_in_mumbai(){
    $currentRoute = Route::current()->uri();
    $seo = SEO::where('page_url', $currentRoute)->first();
    return view('frontend.signagesResion.restroom-signs-in-mumbai', compact('seo'));
 
}

    public function contact_us()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.contact-us', compact('seo'));
    }


    public function about_us()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.about-us', compact('seo'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:20',
            'message' => 'nullable|string|max:5000',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
   
    public function blogs(Request $request)
    {
        // Fetch the search query
        $searchQuery = $request->query('search');
    
        if ($searchQuery) {
            // Search blogs by title or content
            $allBlogs = Blog::where('title', 'like', '%' . $searchQuery . '%')
                ->orWhere('content', 'like', '%' . $searchQuery . '%')
                ->orderBy('id', 'desc')
                ->paginate(15);
    
            $categories = BlogCategory::with('subCategories')->get();
    
            // Pass search query to the view for display in the search bar
            return view('frontend.blogs.index', compact('categories', 'allBlogs', 'searchQuery'));
        }
    
        // Fetch the latest 3 blogs for the banner/featured section
        $latestBlogs = Blog::orderBy('id', 'desc')->take(3)->get();
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        // Exclude the latest 3 blogs from the main list of all blogs
        $allBlogs = Blog::whereNotIn('id', $latestBlogs->pluck('id'))->orderBy('id', 'desc')->paginate(15);
    
        // Fetch categories with their subcategories
        $categories = BlogCategory::with('subCategories')->get();
    
        // You can set the banner here (e.g., static content or dynamic query)
        $banner = "Your Banner Content";
    
        // Pass variables to the view
        return view('frontend.blogs.index', compact('categories', 'allBlogs', 'latestBlogs', 'banner', 'seo'));
    }
    
    
    public function blogsVariation(Request $request, $slug)
    {
        // Check if the slug matches a blog category
        $currentRoute = request()->path();;
        $seo = SEO::where('page_url', $currentRoute)->first();


        $category = BlogCategory::where('slug', $slug)->first();
    
        // Check if it's a blog post slug
        $blog = Blog::join('blog_sub_categories', 'blog_sub_categories.id', '=', 'blogs.blog_sub_category_id')
            ->join('blog_categories', 'blog_categories.id', '=', 'blog_sub_categories.blog_category_id')
            ->select('blogs.*', 'blog_categories.name as category_name', 'blog_sub_categories.name as sub_category_name')
            ->where('blogs.slug', $slug)
            ->first();
    
            if ($blog) {
                $blogSeoData = [];
            
                if ($seo && !empty($seo->script)) {
                    preg_match('/<title>(.*?)<\/title>/', $seo->script, $titleMatch);
                    preg_match('/<meta name="description" content="(.*?)"/', $seo->script, $descriptionMatch);
            
                    $blogSeoData = [
                        'title' => $titleMatch[1] ?? null,
                        'meta_description' => $descriptionMatch[1] ?? null,
                        'canonical_url' => isset($seo->page_url) ? url($seo->page_url) : null,
                        'image' => $blog->image ?? null,
                    ];
                }
            
                return view('frontend.blogs.details', compact('blog', 'blogSeoData'));
            }
            
    
        // If a search query exists
        if ($request->has('search') && !empty($request->input('search'))) {
            $searchTerm = $request->input('search');
            $allBlogs = Blog::where('title', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('content', 'LIKE', '%' . $searchTerm . '%')
                ->orderBy('id', 'desc')
                ->paginate(15);
        } elseif (!$category) {
            $subcategory = BlogSubCategory::where('slug', $slug)->first();
            if (!$subcategory) {
                abort(404, 'Category or Subcategory not found');
            }
    
            $allBlogs = Blog::where('blog_sub_category_id', $subcategory->id)->orderBy('id', 'desc')->paginate(15);
            $categories = BlogCategory::with('subCategories')->get();
            $category = $subcategory;
            
            return view('frontend.blogs.index', compact('allBlogs', 'categories', 'category', 'seo'));
        } else {
            $subCategoryIds = BlogSubCategory::where('blog_category_id', $category->id)->pluck('id');
            $allBlogs = Blog::whereIn('blog_sub_category_id', $subCategoryIds)->orderBy('id', 'desc')->paginate(15);
        }
      
        $categories = BlogCategory::with('subCategories')->get();
       
        return view('frontend.blogs.index', compact('allBlogs', 'categories', 'category', 'seo'));
    }
    
    public function privacyPolicy()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.privacy-policy', compact('seo'));
    }
    public function termsAndConditions()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.terms-and-conditions', compact('seo'));
    }

    public function bala_kumaranan()
    {
        $currentRoute = Route::current()->uri();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.author-bala-kumaran', compact('seo'));
    }


    public function coustomInquiryStore(Request $request)
    {
        $validatedData = $request->validate([
            'type'   => 'required|string',
            'title'  => 'required|string',
            'height' => 'required|integer',
            'width'  => 'required|integer',
            'name'   => 'required|string',
            'email'  => 'required|email',
            'phone'  => 'required|string',
            'image'  => $request->type === 'upload' ? 'required|image' : 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('inquiries', 'public');
            $validatedData['image'] = $imagePath;
        }

        CustomInquiry::create($validatedData);

        return response()->json(['message' => 'Inquiry saved successfully!']);
    }

}
