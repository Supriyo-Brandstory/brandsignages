<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
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
    $seo = SEO ::where('page_url',$currentRoute )->first();
    return view('frontend.index',compact('seo'));
   }

   //Signages
   public function arcylic_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.arcylic-signages',compact('seo'));
   }
   public function metal_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.metal-signages',compact('seo'));
   }
   public function digital_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.digital-signages',compact('seo'));
   }
   public function outdoor_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.outdoor-signages',compact('seo'));
   }
   public function indoor_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.indoor-signages',compact('seo'));
   }
   public function neon_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.neon-signages',compact('seo'));
   }
   public function led_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.led-light-signages',compact('seo'));
   }
   public function hospital_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.hospital-signages',compact('seo'));
   }
   public function restaurant_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.restaurant-signages',compact('seo'));
   }
   public function construction_safety_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.construction-safety-signages',compact('seo'));
   }
   public function office_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.office-signages',compact('seo'));
   }
   public function fire_safety_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.fire-safety-signages',compact('seo'));
   }
   public function door_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.door-signages',compact('seo'));
   }
   public function house_number_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.house-number-signages',compact('seo'));
   }
   public function nameplate_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.nameplate-signages',compact('seo'));
   }
   public function restroom_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.restroom-signages',compact('seo'));
   }
   public function prohibitory_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.prohibitory-signages',compact('seo'));
   }    
   public function office_desk_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.office-desk-signages',compact('seo'));
   }
   public function floor_signages(){
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.floor-signages',compact('seo'));
   }
   public function room_name_plates(){  
    $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
       return view('frontend.signages.room-name-plates',compact('seo'));
   }

    //    signagesResion
    public function acrylic_signage_manufacturer_bangalore(){
        $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
        return view('frontend.signagesResion.acrylic-signage-manufacturer-bangalore',compact('seo'));
    }
    public function steel_signage_manufacturer_bangalore(){
        $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
        return view('frontend.signagesResion.steel-signage-manufacturer-bangalore',compact('seo'));
    }
    public function digital_signage_company_bangalore(){
        $currentRoute = Route::current()->uri();
    $seo = SEO ::where('page_url',$currentRoute )->first();
        return view('frontend.signagesResion.digital-signage-company-bangalore',compact('seo'));
    }
    public function neon_sign_board_bangalore(){
        $currentRoute = Route::current()->uri();
        $seo = SEO ::where('page_url',$currentRoute )->first();
        return view('frontend.signagesResion.neon-sign-board-bangalore',compact('seo'));
    }
   
    public function signage_in_bangalore(){
        $currentRoute = Route::current()->uri();
        $seo = SEO ::where('page_url',$currentRoute )->first();
        return view('frontend.signagesResion.signage-in-bangalore',compact('seo'));
    }
   
}
