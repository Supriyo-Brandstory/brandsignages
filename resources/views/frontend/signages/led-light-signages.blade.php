@extends('frontend.layout.appLayout')
@section('content')
<style>
    .why-card.card {
    border: solid 1px;
    height: 100%;
    padding: 20px;
    background: white;
    border-color: #e43d1269;
}
    </style>
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/led-signage1.webp')}}" alt="LED Signage">
                <div class="carousel-caption-custom">
                    <h1>Top LED Sign Board Manufacturers and Suppliers</h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Types of LED Signage Boards We Offer</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage3.webp')}}" class="why-card-img-top"
                        alt="Acrylic LED Sign Board">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3" style="color: #E43D12; font-weight: bold;">Acrylic LED Sign Board</h3>
                        <div class="container mb-3">
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Usage/Application:</div>
                                <div class="col-6">Advertisement, Branding</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Lighting Type:</div>
                                <div class="col-6">Front Lit (LED)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Material:</div>
                                <div class="col-6">Acrylic</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Shape:</div>
                                <div class="col-6">Rectangle/ Square</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Size:</div>
                                <div class="col-6">Customizable (Minimum 10 Sq. Ft.)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Pixel Pitch:</div>
                                <div class="col-6">16mm</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Brand:</div>
                                <div class="col-6">Brand Signages</div>
                            </div>
                        </div>
                        
                        
                    
                        <p>
                            Crafted from high-grade cast acrylic, our Acrylic LED Sign Boards are designed to add depth and dimension to your brand identity.
                        </p>
                        <div class="text-center">
                            <a href="{{route('contact_us')}}">
                                <button class="contact-btn">Get Quote</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage5.webp')}}" class="why-card-img-top"
                        alt="Digital Backlit Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3" style="color: #E43D12; font-weight: bold;">LED Backlit Boards</h3>
                        <div class="container mb-3">
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Usage/Application:</div>
                                <div class="col-6">Branding, Indoor Display</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Lighting Type:</div>
                                <div class="col-6">LED Backlit (Edge-lit / Full Panel)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Material:</div>
                                <div class="col-6">Acrylic, Aluminum, Fabric Frame</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Mounting Type:</div>
                                <div class="col-6">Wall Mounted / Hanging</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Size:</div>
                                <div class="col-6">Customizable (Minimum : 10 Sq. Ft.)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Color Options:</div>
                                <div class="col-6">Single Color / Multi-color / RGB</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Power Supply:</div>
                                <div class="col-6">12V / 24V (as per size)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Brand:</div>
                                <div class="col-6">Brand Signages</div>
                            </div>
                        </div>
                        
                    
                        <p>
                            Illuminate your brand with unmatched elegance using Brand Signages’ LED Backlit Boards, designed to deliver maximum visual impact.

                        </p>  
                        <div class="text-center">
                            <a href="{{route('contact_us')}}">
                                <button class="contact-btn">Get Quote</button>
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage6.webp')}}" class="why-card-img-top"
                        alt="LED Reverse Light Sign">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3" style="color: #E43D12; font-weight: bold;">LED Reverse Light Sign</h3>
                        <div class="container mb-3">
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Usage/Application:</div>
                                <div class="col-6">Corporate, Hotels, Showroom</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Lighting Type:</div>
                                <div class="col-6">Reverse LED / Halo-Lit</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Material:</div>
                                <div class="col-6">Acrylic / Stainless Steel / Aluminum</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Mounting Type:</div>
                                <div class="col-6">Wall Mounted with Spacer Kit</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Illumination Style:</div>
                                <div class="col-6">Back Glow (Halo Effect)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Size:</div>
                                <div class="col-6">Customizable (Letter height from 6”)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Color Options:</div>
                                <div class="col-6">Warm White, Cool White, RGB</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Power Supply:</div>
                                <div class="col-6">12V / 24V (as per sign size)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Brand:</div>
                                <div class="col-6">Brand Signages</div>
                            </div>
                        </div>
                        
                    
                        <p>
                            LED Reverse Light Signs are signage solutions where LED lights illuminate the design from the back, creating a halo or glow effect around the letters. 
                        </p>
                        <div class="text-center">
                            <a href="{{route('contact_us')}}">
                                <button class="contact-btn">Get Quote</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage7.webp')}}" class="why-card-img-top"
                        alt="LED Message Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3" style="color: #E43D12; font-weight: bold;">LED Message Boards</h3>
                        <div class="container mb-3">
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Usage/Application:</div>
                                <div class="col-6">Advertisements</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Lighting Type:</div>
                                <div class="col-6">LED – Monochrome / RGB</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Display Format:</div>
                                <div class="col-6">Scrolling Text, Flashing Alerts</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Material:</div>
                                <div class="col-6">Powder-Coated Metal / </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Pixel Pitch:</div>
                                <div class="col-6">P6 / P8 / P10 (Custom on request)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Mounting Type:</div>
                                <div class="col-6">Wall Mount / Pole Mount</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Input Options:</div>
                                <div class="col-6">USB / Wi-Fi / LAN</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Control Software:</div>
                                <div class="col-6">PC / Mobile Compatible</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Brightness:</div>
                                <div class="col-6">Adjustable (Day/Night Modes)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Size:</div>
                                <div class="col-6">Custom Sizes Available</div>
                            </div>
                        </div>
                        
                    
                        <p>
                            Brand Signages’ LED Message Boards are the perfect solution for businesses looking to broadcast dynamic, real-time messages with high visibility.

                        </p>
                        <div class="text-center">
                            <a href="{{route('contact_us')}}">
                                <button class="contact-btn">Get Quote</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage8.webp')}}" class="why-card-img-top"
                        alt="Glowing Light Sign Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3" style="color: #E43D12; font-weight: bold;">Glowing Light Sign Boards</h3>
                        <div class="container mb-3">
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Usage/Application:</div>
                                <div class="col-6">Retail Stores, Showrooms, Office</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Lighting Type:</div>
                                <div class="col-6">LED Backlit / Edge-Lit</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Material:</div>
                                <div class="col-6">Acrylic / Aluminum / PVC</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Mounting Type:</div>
                                <div class="col-6">Wall Mounted, Ceiling Mounted</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Illumination Style:</div>
                                <div class="col-6">Glowing (Front-Lit or Edge-Lit)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Size:</div>
                                <div class="col-6">Customizable (Small to Large Formats)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Color Options:</div>
                                <div class="col-6">Single Color, RGB Multi-Color</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Power Supply:</div>
                                <div class="col-6">12V / 24V</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Brightness:</div>
                                <div class="col-6">Adjustable Brightness</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4" style="color: #E43D12; font-weight: bold;">Durability:</div>
                                <div class="col-6">UV Resistant, Waterproof</div>
                            </div>
                        </div>
                        
                    
                        <p>
                            Our Glowing Light Sign Boards are designed to add a touch of elegance and attention-grabbing flair to any space.
                        </p>
                        <div class="text-center">
                            <a href="{{route('contact_us')}}">
                                <button class="contact-btn">Get Quote</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="signageCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage3.webp')}}" class="why-card-img-top"
                                    alt="Acrylic LED Sign Board">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3" style="color: #E43D12; font-weight: bold;">Acrylic LED Sign Board</h3>
                                    <div class="container mb-3">
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Usage/Application:</div>
                                            <div class="col-6">Advertisement, Branding</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Lighting Type:</div>
                                            <div class="col-6">Front Lit (LED)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Material:</div>
                                            <div class="col-6">Acrylic</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Shape:</div>
                                            <div class="col-6">Rectangle/ Square</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Size:</div>
                                            <div class="col-6">Customizable (Minimum 10 Sq. Ft.)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Pixel Pitch:</div>
                                            <div class="col-6">16mm</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Brand:</div>
                                            <div class="col-6">Brand Signages</div>
                                        </div>
                                    </div>
                                    
                                    
                                
                                    <p>
                                        Crafted from high-grade cast acrylic, our Acrylic LED Sign Boards are designed to add depth and dimension to your brand identity.
                                    </p>
                                    <div class="text-center">
                                        <a href="{{route('contact_us')}}">
                                            <button class="contact-btn">Get Quote</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage5.webp')}}" class="why-card-img-top"
                                    alt="Digital Backlit Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3" style="color: #E43D12; font-weight: bold;">LED Backlit Boards</h3>
                                    <div class="container mb-3">
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Usage/Application:</div>
                                            <div class="col-6">Branding, Indoor Display</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Lighting Type:</div>
                                            <div class="col-6">LED Backlit (Edge-lit / Full Panel)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Material:</div>
                                            <div class="col-6">Acrylic, Aluminum, Fabric Frame</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Mounting Type:</div>
                                            <div class="col-6">Wall Mounted / Hanging</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Size:</div>
                                            <div class="col-6">Customizable (Minimum : 10 Sq. Ft.)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Color Options:</div>
                                            <div class="col-6">Single Color / Multi-color / RGB</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Power Supply:</div>
                                            <div class="col-6">12V / 24V (as per size)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Brand:</div>
                                            <div class="col-6">Brand Signages</div>
                                        </div>
                                    </div>
                                    
                                
                                    <p>
                                        Illuminate your brand with unmatched elegance using Brand Signages’ LED Backlit Boards, designed to deliver maximum visual impact.
                                    </p>  
                                    <div class="text-center">
                                        <a href="{{route('contact_us')}}">
                                            <button class="contact-btn">Get Quote</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage6.webp')}}" class="why-card-img-top"
                                    alt="LED Reverse Light Sign">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3" style="color: #E43D12; font-weight: bold;">LED Reverse Light Sign</h3>
                                    <div class="container mb-3">
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Usage/Application:</div>
                                            <div class="col-6">Corporate, Hotels, Showroom</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Lighting Type:</div>
                                            <div class="col-6">Reverse LED / Halo-Lit</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Material:</div>
                                            <div class="col-6">Acrylic / Stainless Steel / Aluminum</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Mounting Type:</div>
                                            <div class="col-6">Wall Mounted with Spacer Kit</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Illumination Style:</div>
                                            <div class="col-6">Back Glow (Halo Effect)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Size:</div>
                                            <div class="col-6">Customizable (Letter height from 6”)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Color Options:</div>
                                            <div class="col-6">Warm White, Cool White, RGB</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Power Supply:</div>
                                            <div class="col-6">12V / 24V (as per sign size)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Brand:</div>
                                            <div class="col-6">Brand Signages</div>
                                        </div>
                                    </div>
                                    
                                
                                    <p>
                                        LED Reverse Light Signs are signage solutions where LED lights illuminate the design from the back, creating a halo or glow effect around the letters. 
                                    </p>
                                    <div class="text-center">
                                        <a href="{{route('contact_us')}}">
                                            <button class="contact-btn">Get Quote</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage7.webp')}}" class="why-card-img-top"
                                    alt="LED Message Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3" style="color: #E43D12; font-weight: bold;">LED Message Boards</h3>
                                    <div class="container mb-3">
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Usage/Application:</div>
                                            <div class="col-6">Advertisements</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Lighting Type:</div>
                                            <div class="col-6">LED – Monochrome / RGB</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Display Format:</div>
                                            <div class="col-6">Scrolling Text, Flashing Alerts</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Material:</div>
                                            <div class="col-6">Powder-Coated Metal</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Pixel Pitch:</div>
                                            <div class="col-6">P6 / P8 / P10 (Custom on request)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Mounting Type:</div>
                                            <div class="col-6">Wall Mount / Pole Mount</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Input Options:</div>
                                            <div class="col-6">USB / Wi-Fi / LAN</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Control Software:</div>
                                            <div class="col-6">PC / Mobile Compatible</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Brightness:</div>
                                            <div class="col-6">Adjustable (Day/Night Modes)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Size:</div>
                                            <div class="col-6">Custom Sizes Available</div>
                                        </div>
                                    </div>
                                    
                                
                                    <p>
                                        Brand Signages’ LED Message Boards are the perfect solution for businesses looking to broadcast dynamic, real-time messages with high visibility.
                                    </p>
                                    <div class="text-center">
                                        <a href="{{route('contact_us')}}">
                                            <button class="contact-btn">Get Quote</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                       
                        <div class="col-md-6">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage7.webp')}}" class="why-card-img-top"
                                    alt="LED Message Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3" style="color: #E43D12; font-weight: bold;">LED Message Boards</h3>
                                    <div class="container mb-3">
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Usage/Application:</div>
                                            <div class="col-6">Advertisements</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Lighting Type:</div>
                                            <div class="col-6">LED – Monochrome / RGB</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Display Format:</div>
                                            <div class="col-6">Scrolling Text, Flashing Alerts</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Material:</div>
                                            <div class="col-6">Powder-Coated Metal / </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Pixel Pitch:</div>
                                            <div class="col-6">P6 / P8 / P10 (Custom on request)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Mounting Type:</div>
                                            <div class="col-6">Wall Mount / Pole Mount</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Input Options:</div>
                                            <div class="col-6">USB / Wi-Fi / LAN</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Control Software:</div>
                                            <div class="col-6">PC / Mobile Compatible</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Brightness:</div>
                                            <div class="col-6">Adjustable (Day/Night Modes)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Size:</div>
                                            <div class="col-6">Custom Sizes Available</div>
                                        </div>
                                    </div>
                                    
                                
                                    <p>
                                        Brand Signages’ LED Message Boards are the perfect solution for businesses looking to broadcast dynamic, real-time messages with high visibility.
                                    </p>
                                    <div class="text-center">
                                        <a href="{{route('contact_us')}}">
                                            <button class="contact-btn">Get Quote</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage8.webp')}}" class="why-card-img-top"
                                    alt="Glowing Light Sign Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3" style="color: #E43D12; font-weight: bold;">Glowing Light Sign Boards</h3>
                                    <div class="container mb-3">
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Usage/Application:</div>
                                            <div class="col-6">Retail Stores, Showrooms, Office</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Lighting Type:</div>
                                            <div class="col-6">LED Backlit / Edge-Lit</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Material:</div>
                                            <div class="col-6">Acrylic / Aluminum / PVC</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Mounting Type:</div>
                                            <div class="col-6">Wall Mounted, Ceiling Mounted</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Illumination Style:</div>
                                            <div class="col-6">Glowing (Front-Lit or Edge-Lit)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Size:</div>
                                            <div class="col-6">Customizable ( Small to Large Formats)</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Color Options:</div>
                                            <div class="col-6">Single Color, RGB Multi-Color</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Power Supply:</div>
                                            <div class="col-6">12V / 24V</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Brightness:</div>
                                            <div class="col-6">Adjustable Brightness</div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-4" style="color: #E43D12; font-weight: bold;">Durability:</div>
                                            <div class="col-6">UV Resistant, Waterproof</div>
                                        </div>
                                    </div>
                                    
                                
                                    <p>
                                        Our Glowing Light Sign Boards are designed to add a touch of elegance and attention-grabbing flair to any space.
                                    </p>
                                    <div class="text-center">
                                        <a href="{{route('contact_us')}}">
                                            <button class="contact-btn">Get Quote</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-carousel-controls">
                <button id="prevButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="nextButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="carousel-indicators why-carousel-indicators">
                <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-5" id="gallery-container">
        <h2 class="hero-title  mb-4">LED Sign Boards – Crafted to Shine, Built to Last</h2>
        <p class=" text-center mb-5">We bring brilliance to branding with our high-performance LED sign boards designed to capture attention. Our exclusive range offers sleek acrylic LED sign boards, dynamic LED message boards, and vibrant LED light boxes – each crafted to align perfectly with your brand vision and appeal.
        </p>            

        <div class="row align-items-center">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-1.webp')}}" data-lightbox="Acrylic LED Signboard Design" data-title="Image 1">
                    <img src="{{asset('frontend/Images/acrylic-led-1.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-2.webp')}}" data-lightbox="LED Signboard Design" data-title="Image 2">
                    <img src="{{asset('frontend/Images/led-2.webp')}}" class="img-fluid" alt="LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/message-board-3.webp')}}" data-lightbox="LED Message Board Design" data-title="Image 3">
                    <img src="{{asset('frontend/Images/message-board-3.webp')}}" class="img-fluid" alt="LED Message Board Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-lightbox-4.webp')}}" data-lightbox="LED Lightbox Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/led-lightbox-4.webp')}}" class="img-fluid" alt="LED Lightbox Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-lightbox-5.webp')}}" data-lightbox="LED Lightbox Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/led-lightbox-5.webp')}}" class="img-fluid" alt="LED Lightbox Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-6.webp')}}" data-lightbox="LED Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/led-6.webp')}}" class="img-fluid" alt="LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-signboard-4.webp')}}" data-lightbox="Acrylic LED Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/acrylic-led-signboard-4.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-signboard-6.webp')}}" data-lightbox="Acrylic LED Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/acrylic-led-signboard-6.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section>


<x-coustom-inquiry-form />
<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Best LED Signage Board Manufacturers <br> for Custom LED Signs</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/led-signage2.webp')}}" alt="Best LED Signage Manufacturers" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                    <p class="brand-description">
                    LED sign boards are a modern branding solution with compact digital screens used in storefronts, banks, hospitals, and almost everywhere. Different from traditional signage, LED sign boards show dynamic content on digital displays providing better visibility and impact. 
                    </p>
                    <p class="brand-description">
                    Being an industry-leading LED signage manufacturer in 
                    <a href="{{route('led_sign_board_in_bangalore')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">Bangalore </a>, 
                   <a href="{{route('led_display_board_in_mumbai')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;"> Mumbai </a>, and
                    <a href="{{route('led_display_board_in_chennai')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;"> Chennai </a>,
                    Brand Signages offers energy-efficient LED sign boards. We combine quality and innovation to design energy-efficient LED sign boards. From amazing LED reverse light signs, and digital LED to acrylic LED signages we offer a range of solutions. 
                    </p>
                    <p class="brand-description">
                    Brand Signages is the best LED sign board manufacturers, trusted by top businesses. With over a decade of expertise, we have worked with 100+ businesses across India.  
                    </p>
            </div>
        </div>
    </div>
</section>




<section class="process-section">
        <div class="container">
            <h2 class="process-title">Hassle-Free Signage Solutions for Your Business</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="process-card">
                        <div class="icon-design">
                            <img src="{{asset('frontend/Images/graphic-designer.webp')}}" alt="On-demand Design">
                        </div>
                        <h3>On-demand Design</h3>
                        <p>Our creative team of sign board makers in Bangalore offers flexible, personalized signage solutions. We transform your ideas into compelling visual narratives that strengthen your brand presence.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="process-card">
                        <div class="icon-deliver">
                            <img src="{{asset('frontend/Images/on-time.webp')}}" alt="Timely Deliver">
                        </div>
                        <h3>Timely Deliver</h3>
                        <p>We optimize workflows, maintain stringent timelines, and coordinate logistics to guarantee
                            project completion without compromising quality or design integrity.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="process-card">
                        <div class="icon-purchase">
                            <img src="{{asset('frontend/Images/transaction.webp')}}" alt="Direct Purchase">
                        </div>
                        <h3>Direct Purchase</h3>
                        <p>Our streamlined purchasing pathway eliminates complexity, connecting you straight to creative
                            brilliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



<section class="container py-lg-5 py-md-3 py-sm-2 py-3">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for LED Sign <br>Boards in Bangalore</h2>
            <p class="card-text testimonial-card-text">Because we are the top-tier LED signage manufacturers backed with 10+ years of expertise. Whether it is a<br> glowing LED sign board or acrylic LED signs, each sign board offers exceptional performance and designed <br>to reflect your brand identity.</p>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/led-signage9.webp')}}" alt="Quality Assurance" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Quality Assurance</h5>
                            <p class="text-content">Quality assurance is the base of Brand Signage. Our signage board goes through various technical tests to ensure high standard quality and durability. It will go on for a long time as you invest in a permanent product. We are committed to giving excellent LED signage boards that elevate your brand image.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/led-signage10.webp')}}" alt="Customization Options" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Customization Options</h5>
                            <p class="text-content">By understanding your brand, you will get customization options that will meet your brand identity. From font choice to acrylic led sign board design, and lighting effects, our team will discuss with you and give multiple options that will suit your brand identity.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/led-signage11.webp')}}" alt="Customer Satisfaction"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Customer Satisfaction</h5>
                            <p class="text-content">We always prioritize our customer satisfaction.  From primary consultation to LED signage installation, you will get end-to-end support. Our passionate team ensures a flawless experience. We are always available for assistance, maintenance, and guidance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/led-signage12.webp')}}" alt="Future Innovations" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Future Innovations</h5>
                            <p class="text-content">We are ready to push ourselves to bring innovations that match your preferences. In the constantly evolving market, we leverage LED signage technology and provide top-notch solutions that gear up your brand presence.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>



<section class="testimonial section ">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Customer Testimonial</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none ">
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The LED light signage board meets my expectations. Their customer service suggestions help us to get the best light signage board. I ordered steel letters and neon sign boards that are perfect for my store. Highly recommend it.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/led-signage14.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Meenal Jain</div>
                                <div class="client-role">Beauty Product Store Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">I loved how they understood my brand and crafted the acrylic signage to match my brand perfectly. Great service too!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/led-signage15.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Rajesh Iyer</div>
                                <div class="client-role">Bookstore and Stationery Shop Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">After installing their digital led sign board, our store's foot traffic has increased. It's a real head-turner, especially at night. Fantastic product!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/led-signage16.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Shivani Desai</div>
                                <div class="client-role">Home Decor Store Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The signage board is energy-efficient and built to last. Its bright, and clear edge made a significant difference in our brand visibility.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/led-signage17.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Amitabh Patel</div>
                                <div class="client-role">Organic Grocery Store Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">I ordered a glowing sign board for my retail store, the team was attentive, and the results were outstanding! From design to delivery, the process was smooth and hassle-free. Loved it!</p> <br>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/led-signage18.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Farhan Qureshi</div>
                                <div class="client-role">Car Rental Service Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonialCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The LED light signage board meets my expectations. Their customer service suggestions help us to get the best light signage board. I ordered steel letters and neon sign boards that are perfect for my store. Highly recommend it.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage14.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Meenal Jain</div>
                                            <div class="client-role">Beauty Product Store Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">I loved how they understood my brand and crafted the acrylic signage to match my brand perfectly. Great service too!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage15.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Rajesh Iyer</div>
                                            <div class="client-role">Bookstore and Stationery Shop Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">After installing their digital led sign board, our store's foot traffic has increased. It's a real head-turner, especially at night. Fantastic product!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage16.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Shivani Desai</div>
                                            <div class="client-role">Home Decor Store Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">After installing their digital led sign board, our store's foot traffic has increased. It's a real head-turner, especially at night. Fantastic product!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage16.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Shivani Desai</div>
                                            <div class="client-role">Home Decor Store Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The signage board is energy-efficient and built to last. Its bright, and clear edge made a significant difference in our brand visibility.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage17.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Amitabh Patel</div>
                                            <div class="client-role">Organic Grocery Store Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">I ordered a glowing sign board for my retail store, the team was attentive, and the results were outstanding! From design to delivery, the process was smooth and hassle-free. Loved it!</p> <br>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/led-signage18.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Farhan Qureshi</div>
                                            <div class="client-role">Car Rental Service Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="testimonial-carousel-controls">
                <button id="prevButton" class="testimonial-carousel-control" type="button"
                    data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="nextButton" class="testimonial-carousel-control" type="button"
                    data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="carousel-indicators testimonial-carousel-indicators">
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title">FAQS</h1>

        <div class="faq-item">
            <button class="faq-question">
                What are the advantages of using LED light sign boards? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                    <P>There are a few advantages of using LED light sign boards:</P>
                    <ul>
                        <ul>
                            <li>Low Energy Consumer: LED sign boards consume a low amount of electricity.</li>
                            <li>Weatherproof: it is weatherproof and safe to place in an outdoor palace.</li>
                            <li>Low Maintenance: They are easy to maintain and more effective to place in any location.</li>
                            <li>Customizable: You can easily personalize your light sign board according to your brand image.</li>
                        </ul>
                    </ul>     
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What types of LED signboards are ideal for businesses in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Businesses in Bangalore can benefit from various LED signboards, including 2D and 3D LED signs for retail stores, glow signboards for restaurants and cafes, acrylic LED signs for corporate offices, and digital signage for malls and commercial spaces. Brand Signages offers customized solutions with a dedicated manufacturing facility to meet your specific needs.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are LED sign boards suitable for promoting my retail store?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Definitely! LED signboards are highly efficient for retail store promotion, as they are transparent day and night, long-lasting, and energy-saving. They seize awareness and offer lucid information, making them perfect for any enterprise.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can LED sign boards be customized for my business?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, you can easily customize your brand’s LED sign boards. You can choose color, design, style, font, and lighting effects that match your brand identity effortlessly.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I Use LED Light Sign Board for Outdoor Use?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, you can use LED light sign boards for outdoor places. They are weatherproof, long-lasting, which offer superior visibility in a variety of outdoor settings. They are ideal for both during the day and at night for boosting brand visibility because of their brilliant illumination.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                LED sign boards compared to traditional signage- which one is better in energy-efficient?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>It is one of the most significant questions that you should know when you choose LED sign boards. In the matter of energy saving, LED sign boards are always top of the list. You can save electricity up to 80% compared to neon signage. They are an environmentally and cost effective option for all types of enterprises. Its lower maintenance and long-lasting lifespan make it suitable for any setting.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do LED light sign boards go for a long period?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, it can go on for a long period. However, there are a few factors that play a significant role in the lifespan of LED light sign boards. They are- manufacturer of LED light signage boards and the material that is used. It can be said, the LED light sign board’s lifespan can range from 4,000 to 13,000 hours. However, the industry standard is 10,000 hours which is more than 1 year.</p>
            </div>
        </div>

    </div>
</section>
<section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Digital Signage</h2>
            <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the digital signage through our articles.</p>

        </div>

        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="{{ route('blogsVaritaion', $blog->slug) }}" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">{{ strtoupper($blog->topic) }}</span>
                                <span class="time">{{ $blog->reding_time }} mins 🕘</span>
                            </div>
                            <h5 class="blog-card-title">{{ $blog->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="text-center">
            <a href="{{ route('blogs') }}">
                <button class="contact-btn">See All Blogs</button>
            </a>
            </div>
        </div>
    </div>
</section>

    @endsection