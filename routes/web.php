<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\frontendController;
// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [frontendController::class, 'index'])->name('index');
Route::get('/arcylic-signages', [frontendController::class, 'arcylic_signages'])->name('arcylic_signages');
Route::get('/metal-signages', [frontendController::class, 'metal_signages'])->name('metal_signages');
Route::get('/digital-signages', [frontendController::class, 'digital_signages'])->name('digital_signages');
Route::get('/outdoor-signages', [frontendController::class, 'outdoor_signages'])->name('outdoor_signages');
Route::get('/indoor-signages', [frontendController::class, 'indoor_signages'])->name('indoor_signages');
Route::get('/neon-signages', [frontendController::class, 'neon_signages'])->name('neon_signages');
Route::get('/led-light-signages', [frontendController::class, 'led_signages'])->name('led_signages');
Route::get('/hospital-signages', [frontendController::class, 'hospital_signages'])->name('hospital_signages');
Route::get('/restaurant-signages', [frontendController::class, 'restaurant_signages'])->name('restaurant_signages');
Route::get('/construction-safety-signages', [frontendController::class, 'construction_safety_signages'])->name('construction_safety_signages');
Route::get('/office-signages', [frontendController::class, 'office_signages'])->name('office_signages');
Route::get('/fire-safety-signages', [frontendController::class, 'fire_safety_signages'])->name('fire_safety_signages');
Route::get('/door-signages', [frontendController::class, 'door_signages'])->name('door_signages');
Route::get('/house-number-signages', [frontendController::class, 'house_number_signages'])->name('house_number_signages');
Route::get('/nameplate-signages', [frontendController::class, 'nameplate_signages'])->name('nameplate_signages');
Route::get('/restroom-signages', [frontendController::class, 'restroom_signages'])->name('restroom_signages');
Route::get('/prohibitory-signages', [frontendController::class, 'prohibitory_signages'])->name('prohibitory_signages');
Route::get('/office-desk-signages', [frontendController::class, 'office_desk_signages'])->name('office_desk_signages');
Route::get('/floor-signages', [frontendController::class, 'floor_signages'])->name('floor_signages');
Route::get('/modern-room-number-signs', [frontendController::class, 'room_name_plates'])->name('room_name_plates');
Route::get('/digital-signage-for-retail', [frontendController::class, 'digital_signage_for_retail'])->name('digital_signage_for_retail');
Route::get('/restaurant-menu-boards', [frontendController::class, 'restaurant_menu_boards'])->name('restaurant_menu_boards');
//bengalore
Route::get('/acrylic-signage-manufacturer-bangalore', [frontendController::class, 'acrylic_signage_manufacturer_bangalore'])->name('acrylic_signage_manufacturer_bangalore');
Route::get('/steel-signage-manufacturer-bangalore', [frontendController::class, 'steel_signage_manufacturer_bangalore'])->name('steel_signage_manufacturer_bangalore');
Route::get('/digital-signage-company-bangalore', [frontendController::class, 'digital_signage_company_bangalore'])->name('digital_signage_company_bangalore');
Route::get('/neon-sign-board-bangalore', [frontendController::class, 'neon_sign_board_bangalore'])->name('neon_sign_board_bangalore');
Route::get('/signage-in-bangalore', [frontendController::class, 'signage_in_bangalore'])->name('signage_in_bangalore');
Route::get('/led-sign-board-in-bangalore', [frontendController::class, 'led_sign_board_in_bangalore'])->name('led_sign_board_in_bangalore');
Route::get('/hospital-signages-in-bangalore', [frontendController::class, 'hospital_signages_in_bangalore'])->name('hospital_signages_in_bangalore');
Route::get('/safety-signages-in-bangalore', [frontendController::class, 'safety_signages_in_bangalore'])->name('safety_signages_in_bangalore');
Route::get('/name-plate-signages-in-bangalore', [frontendController::class, 'name_plate_signages_in_bangalore'])->name('name_plate_signages_in_bangalore');
Route::get('/restroom-signs-in-bangalore', [frontendController::class, 'restroom_signs_in_bangalore'])->name('restroom_signs_in_bangalore');
Route::get('/office-desk-signs-in-bangalore', [frontendController::class, 'office_desk_signs_in_bangalore'])->name('office_desk_signs_in_bangalore');
//chennai
Route::get('/signage-in-chennai', [frontendController::class, 'signage_company_in_chennai'])->name('signage_company_in_chennai');
Route::get('/acrylic-signages-in-chennai', [frontendController::class, 'acrylic_signages_in_chennai'])->name('acrylic_signages_in_chennai');
Route::get('/metal-and-stainless-steel-sign-boards-in-chennai', [frontendController::class, 'metal_sign_in_chennai'])->name('metal_sign_in_chennai');
Route::get('/leading-digital-signage-in-chennai', [frontendController::class, 'leading_digital_signages_manufacturer_in_chennai'])->name('leading_digital_signages_manufacturer_in_chennai');
Route::get('/custom-neon-sign-boards-in-chennai', [frontendController::class, 'custom_neon_sign_board_in_chennai'])->name('custom_neon_sign_board_in_chennai');
Route::get('/led-display-board-in-chennai', [frontendController::class, 'led_display_board_in_chennai'])->name('led_display_board_in_chennai');
Route::get('/hospital-medical-signages-chennai',[frontendController::class,'hospital_medical_signages_chennai'])->name('hospital_medical_signages_chennai');
Route::get('/high-quality-safety-signages-in-chennai',[frontendController::class,'high_quality_safety_signages_in_chennai'])->name('high_quality_safety_signages_in_chennai');
Route::get('/high-quality-restroom-signs-in-chennai',[frontendController::class,'high_quality_restroom_signs_in_chennai'])->name('high_quality_restroom_signs_in_chennai');
//mumbai
Route::get('/leading-signage-company-in-mumbai', [frontendController::class, 'leading_signage_company_in_mumbai'])->name('leading_signage_company_in_mumbai');
Route::get('/premium-acrylic-sign-boards-in-mumbai', [frontendController::class, 'premium_acrylic_sign_boards_in_mumbai'])->name('premium_acrylic_sign_boards_in_mumbai');
Route::get('/digital-signages-manufacturer-in-mumbai',[frontendController::class,'digital_signages_manufacturer_in_mumbai'])->name('digital_signages_manufacturer_in_mumbai');
Route::get('/led-display-board-in-mumbai',[frontendController::class,'led_display_board_in_mumbai'])->name('led_display_board_in_mumbai');
Route::get('/hospital-and-medical-signages-in-mumbai',[frontendController::class,'hospital_and_medical_signages_in_mumbai'])->name('hospital_and_medical_signages_in_mumbai');
Route::get('/construction-fire-safety-signages-in-mumbai',[frontendController::class,'construction_fire_safety_signages_in_mumbai'])->name('construction_fire_safety_signages_in_mumbai');
Route::get('/name-plate-signs-manufacturer-mumbai',[frontendController::class,'name_plate_signs_manufacturer_mumbai'])->name('name_plate_signs_manufacturer_mumbai');
Route::get('/office-signages-in-mumbai',[frontendController::class,'office_signages_in_mumbai'])->name('office_signages_in_mumbai');
Route::get('/stainless-steel-sign-board-manufacturer-mumbai',[frontendController::class,'stainless_steel_sign_board_manufacturer_mumbai'])->name('stainless_steel_sign_board_manufacturer_mumbai');
Route::get('/neon-sign-board-in-mumbai',[frontendController::class,'neon_sign_board_in_mumbai'])->name('neon_sign_board_in_mumbai');
Route::get('/restroom-signs-in-mumbai',[frontendController::class,'restroom_signs_in_mumbai'])->name('restroom_signs_in_mumbai');
//others
Route::get('/blogs', [frontendController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug?}', [frontendController::class, 'blogsVariation'])->name('blogsVaritaion');
Route::get('/privacy-policy', [frontendController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/terms-and-conditions', [frontendController::class, 'termsAndConditions'])->name('termsAndConditions');
Route::get('/author-manoj-kaliyannan', [frontendController::class, 'bala_kumaranan'])->name('bala_kumaranan');
Route::get('/about-us', [frontendController::class, 'about_us'])->name('about_us');
Route::get('/contact-us', [frontendController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-us', [frontendController::class, 'store'])->name('contact.store');
Route::get('sitemap.xml', [frontendController::class, 'sitemap'])->name('sitemap');
Route::post('/custom-inquiry', [frontendController::class, 'coustomInquiryStore'])->name('custom-inquiry.store');
Route::get('/captcha/refresh', function() {
    return response()->json(['captcha' => captcha_img()]);
})->name('captcha.refresh');
Auth::routes();
Route::get('/services', [frontendController::class, 'services'])->name('services');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
require __DIR__ . '/admin.php';