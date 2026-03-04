@extends('frontend.layout.appLayout')
@section('content')


    <div class="newly-bannersection">
        <div class="bar">
            <h1 class="hero-banner_title">LED Shop Name Board</h1>

        </div>
        <!-- Slider -->
        <div class="slider-wrapper">

            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/name-boards/led-shop-1.webp" alt="LED Shop Name Board for Hair Salon- Kinda Obsessed Hair Studio">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/led-shop-2.webp" alt="LED Shop Name Board for Retail Shop- Zarch">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/led-shop-3.webp" alt="LED Shop Name Board for Cerave Store- Bangalore">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/led-shop-4.webp" alt="LED Shop Name Board for Hair Salon Valoni">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/led-shop-5.webp" alt="LED Shop Name Board for The Light Hub">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/led-shop-6.webp" alt="LED Shop Name Board for Eureka Fashion Store">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/led-shop-7.webp" alt="LED Shop Name Board for Coronado Store">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/led-shop-8.webp" alt="LED Shop Name Board for Super Lyan Store">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/led-shop-9.webp" alt="LED Shop Name Board">
                </div>
              
            </div>

            <!-- Navigation should be OUTSIDE -->
            <div class="nav-arrow prev">&#8249;</div>
            <div class="nav-arrow next">&#8250;</div>
        


            <div class="thumbnails">
                <img src="/frontend/Images/name-boards/led-shop-1.webp" alt="LED Shop Name Board for Hair Salon- Kinda Obsessed Hair Studio" class="thumb active" data-index="0">
                <img src="/frontend/Images/name-boards/led-shop-2.webp" alt="LED Shop Name Board for Retail Shop- Zarch" class="thumb" data-index="1">
                <img src="/frontend/Images/name-boards/led-shop-3.webp" alt="LED Shop Name Board for Cerave Store- Bangalore" class="thumb" data-index="2">
                <img src="/frontend/Images/name-boards/led-shop-4.webp" alt="LED Shop Name Board for Hair Salon Valoni" class="thumb" data-index="3">
                <img src="/frontend/Images/name-boards/led-shop-5.webp" alt="LED Shop Name Board for The Light Hub" class="thumb" data-index="4">
                <img src="/frontend/Images/name-boards/led-shop-6.webp" alt="LED Shop Name Board for Eureka Fashion Store" class="thumb" data-index="5">
                <img src="/frontend/Images/name-boards/led-shop-7.webp" alt="LED Shop Name Board for Coronado Store" class="thumb" data-index="6">
                <img src="/frontend/Images/name-boards/led-shop-8.webp" alt="LED Shop Name Board for Super Lyan Store" class="thumb" data-index="7">
                <img src="/frontend/Images/name-boards/led-shop-9.webp" alt="LED Shop Name Board" class="thumb" data-index="8">
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <h1 class="hero-banner_title">LED Name Board for Shop</h1>
            <p class="subtitle"><b>Price: ₹1,000 - ₹30,000.00 + GST</b></p>

            <div class="divider"></div>
            <p class="fs-16">LED name boards for shops are a smart and impactful way to strengthen your storefront presence. They
                 create a bold visual identity, improve visibility in busy market areas, and ensure your shop name is readable
                  during the day and at night. LED shop name boards use energy-efficient LED modules embedded inside acrylic or 
                  metal letters, delivering uniform brightness with lower power consumption.</p>
            <ul class="features">
                <li>LED name board for retail shops and storefronts</li>
                <li>3D illuminated logo & letters to enhance visibility</li>
                <li>Custom-built according to frontage width & branding needs</li>
                <li>Energy-efficient illumination with minimal maintenance</li>
                <li>PAN India service including design & installation</li>
            </ul>

            <div class="buttons">
                <a href="#pricing" class="btn">Explore Pricing</a>
                <a href="{{ route('contact_us') }}" class="btn">Place Order</a>
            </div>
        </div>
    </div>

    <!-- About Section -->

    <section class="instant-pricing">
        <div class="container pt-5">
            <h2>High-Impact LED Name Boards for Retail <br>& Commercial Spaces</h2>
            <p>Brand Signages manufactures high-visibility <a href="led-name-board-design" style="color:#E43D12; text-decoration:none;"><strong>LED name board</strong></a> solutions designed 
            to make every <a href="name-board-designs-for-shops-bangalore" style="color:#E43D12; text-decoration:none;"><strong>shop name board</strong></a> 
                stand out in busy commercial areas. Our illuminated boards are crafted to attract attention instantly, improve 
                brand recall, and ensure crystal-clear readability both during the day and at night. Whether you need a bold <strong>front-lit LED</strong> name board, 
                elegant <strong>halo-lit letters</strong>, or a fully <strong>illuminated name board</strong>, our designs are tailored to your shop frontage, brand theme, and viewing distance.
            </p>
            <p>A professionally crafted <a href="name-board-design-bangalore" style="color:#E43D12; text-decoration:none;"><strong>name board design</strong></a> plays a crucial role in building trust and drawing walk-in customers. That’s why our LED 
                name board options are engineered with premium materials, advanced lighting technology, and weather-resistant finishes to deliver
                 <strong>long-term durability</strong> and consistent brightness.</p>
            <img src="/frontend/Images/name-boards/largest-ever-signage-board-collection.webp" alt="Exclusive Shop Name Board Design by Brand Signages" class="shop-image">

           <!-- <div class="scroll-loop-wrapper">
                <div class="gridbox">
                   
                        <div class="scroll-card">
                            <img src="{{ asset('frontend/Images/name-boards/shop-name-boards-1.webp') }}"
                               alt="Premium Shop Name Boards for Outdoor Advertising">
                        </div>
                           <div class="scroll-card">
                            <img src="{{ asset('frontend/Images/name-boards/shop-name-boards-7.webp') }}"
                               alt="Premium Shop Name Boards for Outdoor Advertising">
                        </div>
                           <div class="scroll-card">
                            <img src="{{ asset('frontend/Images/name-boards/shop-name-boards-9.webp') }}"
                               alt="Premium Shop Name Boards for Outdoor Advertising">
                        </div>    
                    
                </div>-->

                     
                <div class="text-center">
                <a href="#designs">
                    <button class="contact-btn">Browse Latest Designs</button>
                </a>
            </div>
                            
            </div>
        </div>
    </section>

    <section class="led-signs-manufacturing">
        <div class="container pt-5">

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-imagex">
                        <img src="{{asset('frontend/Images/name-boards/name-boards.webp')}}"
                            alt="Name Board designed by Brand Signages" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="hero-title text-start">Why the Right LED Name Board Matters for Your Shop</h2>
                    <p class="brand-description">
                        For any retail business, visibility directly impacts footfall. A properly designed LED name board helps your 
                        shop stand out in busy commercial areas and ensures customers can easily locate you, even from a distance. It also
                         reinforces your brand presence consistently, making your shop more recognizable to both new and returning 
                         customers. 
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            <strong>Strong Market Presence:</strong> A bright and well-structured LED shop board gives your storefront a bold
                             and professional appearance, helping you compete effectively with neighboring businesses.
                        </li>
                        <li class="mb-3">
                            <strong>Supports Customer Attraction:</strong> Clear illuminated letters improve readability during evening hours and low-light
                             conditions, increasing the chances of walk-in customers noticing your store. 
                        </li>
                        <li>
                            <strong>Built for Daily Commercial Use:</strong> Shop LED boards are designed for continuous operation with energy-efficient 
                            lighting and durable materials, making them a practical long-term investment.
                        </li>
                        <div class="mt-4">
                            <a href="#designs" class="custom-btn">Start Your Project</a>
                        </div>
                </div>
            </div>
        </div>
    </section>


        <section class="We-Elevate-Brands-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="We-Elevate-Brands-heading fw-bold">LED Shop Name Board Materials <br>and Finish Options</h2>
            </div>

            <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <a href="3d-led-acrylic-letters" style="text-decoration:none; color:inherit;">
                                <img src="{{asset('frontend/Images/led-sign-board/3d-acrylic-letters-mounted-on-acp-base-frame-2.webp')}}" class="card-img-center"
                                    alt="Acrylic LED Letters">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="3d-led-acrylic-letters">3D Acrylic LED Letters</a></h5>
                                    <p class="We-Elevate-Brands-text">Acrylic LED letters are a versatile choice for LED name boards, offering bright illumination, sleek design, and durability.
                                        Perfect for creating high-impact, attention-grabbing name boards for any business.</p>
                                </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <a href="led-aluminum-channel-letters" style="text-decoration:none; color:inherit;">
                                <img src="{{asset('frontend/Images/led-sign-board/aluminum-channel-letters-acp-2.webp')}}" class="card-img-center"
                                    alt="Aluminum LED Channel Letters">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="led-aluminum-channel-letters">Aluminum LED Letters</a></h5>
                                    <p class="We-Elevate-Brands-text">Aluminum channel letters offer a sleek, 3D design with front-facing LED illumination. Customizable in black, gold, silver, or
                                        multi-colour, they create premium, high-visibility name boards for retail businesses. </p>
                                </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <a href="2d-stencil-cut-acrylic-led-letters" style="text-decoration:none; color:inherit;">
                                <img src="{{asset('frontend/Images/led-sign-board/2d-stencil-cut-letters-2.webp')}}" class="card-img-center"
                                    alt="2D Stencil Cut Sign Boards">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="2d-stencil-cut-acrylic-led-letters">2D Stencil Cut Sign Board</a></h5>
                                    <p class="We-Elevate-Brands-text">2D stencil cut name boards offer sleek, flush designs with hidden LED illumination, providing a cost-effective, professional, and
                                        customizable signage solution ideal for delicate fonts and minimalist branding.</p>
                                </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <a href="3d-crystal-led-letters" style="text-decoration:none; color:inherit;">
                                <img src="{{asset('frontend/Images/led-sign-board/crystal-led-6.webp')}}" class="card-img-center"
                                    alt="3D Crystal LED Letters">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="3d-crystal-led-letters">3D Crystal LED Letters</a></h5>
                                    <p class="We-Elevate-Brands-text">3D Crystal LED Letters feature crystal-embedded acrylic faces with backlit LEDs, deep 3D layering, and luxurious metallic finishes,
                                        creating dazzling, high-visibility name boards perfect for premium retail and luxury brands.</p>
                                </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <a href="sky-sign-boards" style="text-decoration:none; color:inherit;">
                                <img src="{{asset('frontend/Images/led-sign-board/sky-sgn-board-2.webp')}}" class="card-img-center"
                                    alt="Sky LED Sign Boards">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="sky-sign-boards">Sky LED Sign Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Sky LED sign boards are large-format rooftop signs with weather-resistant construction, IP67-rated LEDs, and premium
                                        illumination. Designed for high-rise branding, they ensure long-distance visibility and strong corporate identity impact.</p>
                                </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <a href="led-dot-matrix-display" style="text-decoration:none; color:inherit;">
                                <img src="{{asset('frontend/Images/led-sign-board/open-dot-led-sign-1.webp')}}" class="card-img-center"
                                    alt="LED Dot Matrix Displays">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="led-dot-matrix-display">LED Dot Matrix Displays</a></h5>
                                    <p class="We-Elevate-Brands-text">LED Dot Matrix Displays feature exposed, high-intensity LEDs for maximum brightness and contrast. With programmable RGB
                                        effects and energy-efficient design, they deliver dynamic, attention-grabbing signage for commercial and retail spaces.</p>
                                </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <a href="flexible-led-display-boards" style="text-decoration:none; color:inherit;">
                                <img src="{{asset('frontend/Images/led-sign-board/flexibile-led-1.webp')}}" class="card-img-center"
                                    alt="Outdoor Business Signages">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="flexible-led-display-boards">Flexible LED Displays</a></h5>
                                    <p class="We-Elevate-Brands-text">Flexible LED Displays offer dynamic, programmable messaging with high brightness and curved installation capability. Available
                                        in RGB or single-color, they allow real-time updates for indoor and outdoor branding applications.</p>
                                </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <a href="neon-signages" style="text-decoration:none; color:inherit;">
                                <img src="{{asset('frontend/Images/led-sign-board/neon-sign-board-4.webp')}}" class="card-img-center"
                                    alt="Neon LED Signs">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a href="neon-signages">Neon LED Signs</a></h5>
                                    <p class="We-Elevate-Brands-text">LED Neon Name Boards deliver vibrant, durable name boards with shatter-resistant LED ropes. Offering low power consumption and vivid
                                        fluorescent colors, they provide a retro neon effect with modern efficiency and longevity.</p>
                                </div>
                        </div>
                    </div>


                    </div>
                    <!-- Navigation Arrows -->
                    <div class="We-Elevate-Brands-nav ">
                        <!-- Swap order: prev on left, next on right -->
                        <div class="We-Elevate-Brands-button-prev"></div>
                        <div class="We-Elevate-Brands-button-next"></div>
                    </div>

                </div>
            </div>

        </div>
    </section>

       <section id="pricing">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3 pb-5">
            <h2 class="hero-title">LED Name Board for Shop- Latest <br>Pricing & Size Options</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/name-boards/led-shop-101.webp')}}"
                            alt="Rivetoile LED Name Board Design" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
            <p class="fs-20">
                The cost of an LED name board depends on the material, overall size, lettering style, type of LED illumination,
                 and installation requirements. Whether it is for a shop entrance, office reception, or exterior wall, accurate
                  measurement ensures proper visibility and finish.
            </p>

    <p class="fs-20"><strong>LED Name Board Sizes Include:</strong></p>
    <ul class="fs-20" style="padding-left: 18px;">
        <li><b>Small Name Board:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹1,000 – ₹11,000)</li>
        <li><b>Medium Name Board:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹12,000 – ₹21,000)</li>
        <li><b>Large Name Board:</b> 4 ft x 8 ft (₹21,000 – ₹30,000)</li>
        <li><b>Custom Dimension:</b> Based on size, material, and design</li>
    </ul>

    <p class="fs-20">
        Our LED name board options include front-lit, backlit (halo), edge-lit, and RGB LED light name board styles, along with warm
         or cool white lighting choices. Each board is built with energy-efficient LED modules and weather-resistant materials for
          long-lasting performance.
    </p>

   <a href="https://brandsignages.com/contact-us" bis_skin_checked="1">
            <button class="contact-btn">Book Order Now</button>
    </a>
</div>

</section>

<section id="designs" class="why-bg-light-pink pt-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="hero-title">Explore The Best-Rated LED Name <br>Boards for Shops</h2>
                <p class="fs-20">A strong storefront identity drives customer attention. Our LED name boards for shops are designed to deliver maximum visibility with 
                    a sharp, professional finish. Whether installed on a retail shop, showroom entrance, or commercial outlet, each board is designed to highlight your
                     shop name clearly in both daylight and after dark.</p>
                <p class="fs-20">We offer a wide range of LED name board styles, including front-lit, backlit (halo), edge-lit, and RGB LED options. Each board is custom-built to your shop's frontage size and branding needs, ensuring optimal visibility and a polished look that enhances your storefront presence.</p>
                 
            </div>


            <div class="row con-fix2">
 
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/hardware-shop-name-board-designs-styles-branding-ideas" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/KZUz5AdxHY3etfmnnVofNmDbvMCsEnajXQNgqxGN.jpg" alt="Hardware Shop Name Board: Designs, Styles &amp; Branding Ideas">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Hardware Shop LED Name Board</span>
                            <span class="time">100+ Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/electrical-shop-name-board-design-ideas-trends-branding" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/czZlKe3qxGW7OjbfyzHpqi5XIOF0m2Rx8UXtXg80.jpg" alt="Electrical Shop Name Board Design: Ideas, Trends &amp; Branding">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Electrical Shop LED Name Board</span>
                            <span class="time">100+ Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/stationery-shop-name-board-designs-for-2025-creative-functional-signage" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/M3JSag0ffZlQY0hpxHLYnbg3th2jCmwI3iH3dONC.jpg" alt="Stationery Shop Name Board Designs for 2025: Creative &amp; Functional Signage">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Stationery Shop LED Name Board</span>
                            <span class="time">100+Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/juice-shop-name-board-design-fresh-eye-catching-ideas-for-modern-juice-bars" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/jqHQ3GpleIVRKQOokMDqXJTItm4tnWe7UEJmubbs.jpg" alt="Juice Shop Name Board Design: Fresh &amp; Eye-Catching Ideas for Modern Juice Bars">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Juice Shop LED Name Board</span>
                            <span class="time">Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/jewellery-shop-name-board-design-stunning-ideas-to-elevate-your-storefront" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/YLlD9KPySbesKpFmHVbQNbJMSJs6pPuESFXh1UWz.jpg" alt="Jewellery Shop Name Board Design: Stunning Ideas to Elevate Your Storefront">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Jewellery Shop LED Name Board</span>
                            <span class="time">Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/furniture-shop-name-board-designs-ideas-trends-for-storefronts" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/lU7J8x6Xaw3PFA96HpSnw83469lv1UZKz8UMiJnG.jpg" alt="Furniture Shop Name Board: Designs, Ideas &amp; Trends for Storefronts">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Furniture Shop LED Name Board</span>
                            <span class="time">100+ Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/footwear-shop-name-board-designs-modern-ideas-styles-trends" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/cnzodI522kb6tbIIPog1iaEnIBYVHdqKSDaYzMZD.jpg" alt="Footwear Shop Name Board Designs: Modern Ideas, Styles &amp; Trends">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Footwear Shop LED Name Board</span>
                            <span class="time">Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/medical-shop-name-board-design-modern-styles-trends-best-practices" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/I2GGnNeqzJ8qwyjNNo9ugxvYECkBNPkPV9jyOHd0.jpg" alt="Medical Shop Name Board Design:  Modern Styles, Trends &amp; Best Practices">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Medical Shop LED Name Board</span>
                            <span class="time">100+ Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/xerox-shop-name-board-designs-a-complete-guide-with-modern-ideas" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/bIBl9w7DWlATxF3Al89DcsfZcgBgcaREKdtNCi36.jpg" alt="Xerox Shop Name Board Designs: A Complete Guide with Modern Ideas">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Xerox Shop LED Name Board</span>
                            <span class="time">Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/cloth-saree-shop-name-board-design-trends-for-2025-a-detailed-guide" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/8EoUieeF7xynHtzKAGKLckAuFX6VywWoRxYsy5Ek.jpg" alt="Cloth &amp; Saree Shop Name Board Design Trends for 2025: A Detailed Guide">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Cloth Shop LED Name Board</span>
                            <span class="time">Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/creative-tailoring-shop-name-board-design-ideas-to-elevate-your-brand-in-2025" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/M7AJuSSHinwNNbRQOBSpB5OBxWvsVN5E7nQrvsNZ.jpg" alt="Creative Tailoring Shop Name Board Design Ideas to Elevate Your Brand in 2025">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Tailor Shop LED Name Board</span>
                            <span class="time">Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/top-mobile-shop-name-board-design-trends-to-attract-more-customers" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/oEU2NPTGhVJeQigszQFXz2tr0Bb4Dmu6bmizmFav.jpg" alt="Mobile Shop Name Board Design Ideas in 2025: Attract More Customers">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">Mobile Shop LED Name Board</span>
                            <span class="time">Exclusive Designs</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
<div class="text-center">
                <a href="/name-board-designs-for-shops-bangalore">
                    <button class="contact-btn">Shop Name Boards</button>
                </a>
            </div>



            </div>
        </div>
    </section>

    <section id="recent_projects" class="new-recent-works">
        <div class="container pt-5">
            <h2 class="hero-title  mb-6">Our Recent Name Board <br>Design Projects</h2>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/titan-store-sign-5.webp"
                            alt="LED Sign Board for Titan Watch- Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Titan Showroom</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/fortis-hospital-name-board-5.webp"
                            alt="LED Sign Board for Fortis Hospital- Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Fortis Hospital</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/cafe-mocha-name-board-4.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Café Mocha</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/tanishq.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Tanishq Showroom</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/prestidge-group-sign-board-5.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Prestige Group</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/medplus-shop-name-board-design.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>MedPlus Pharmacy</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="/contact-us">
                    <button class="contact-btn">Start Your Project</button>
                </a>
            </div>


        </div>
    </section>


    </section>

    <section class="we-deliver">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <h2>Premium Name Board Design Solutions</h2>
                        </div>
                        <div class="col-md-8 col-12">

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                            class="img-fluid">
                                        <h3>Striking Designs</h3>
                                        <p>We are <a style="color: #ffff;text-decoration: underline;" href="https://brandsignages.com"><strong>Brand Signages</strong></a>, specialists in crafting impactful name board designs that leave a lasting impression. Our name boards go beyond simple identification- they reflect personality, enhance visibility, and elevate the overall appearance. 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Custom Craftmanship"
                                            class="img-fluid">
                                        <h3>Custom Craftsmanship</h3>
                                        <p>Every space has its own identity, and our designs reflect that. From modern <a style="color: #ffff;text-decoration: underline;" href="https://brandsignages.com/arcylic-signages"><strong>acrylic name boards</strong></a> to timeless metal finishes, we customize every name board design to match your style, purpose, and visual appeal.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Highly Durable Name Boards"
                                            class="img-fluid">
                                        <h3>High Durability</h3>
                                        <p>We use premium, weather-resistant and premium materials to ensure your name board remains strong, vibrant, and long-lasting day and night even in demanding outdoor conditions.
                                        </p>
                                    </div>
                                </div>
                                 <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/perfect-illu.webp') }}" alt="Perfect Illumination"
                                            class="img-fluid">
                                        <h3>Perfect Illumination</h3>
                                        <p> Add brilliance to your brand with our LED-lit and neon store name boards, designed to shine bright day and night. Each design is engineered for maximum visibility, ensuring your brand stands out.
                                    </div>
                                </div>


                            </div>
            </section>

   



    <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/name-boards/name-board-23.webp') }}" alt="Neon name board for client" class="img-fluid">
            </div>
            <div class="col-md-7 new_client_section-scrolling col-12">

                <div class="new_client_section-wrapper">
                    <!-- Row 1 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-1">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}"
                                alt="White Gold - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}"
                                alt="Manthan - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}"
                                alt="Sobha - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}"
                                alt="Societe Generale - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}"
                                alt="HashedIn - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}"
                                alt="Innoviti - Our Signage Client">
                        </div>

                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}"
                                alt="White Gold - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}"
                                alt="Manthan - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}"
                                alt="Sobha - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}"
                                alt="Societe Generale - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}"
                                alt="HashedIn - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}"
                                alt="Innoviti - Our Signage Client">
                        </div>

                    </div>

                    <!-- Row 2 (Right to Left) -->
                    <div class="new_client_section-row new_client_section-row-2">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}"
                                alt="Flipkart - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}"
                                alt="VYMO - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}"
                                alt="Indusface - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}"
                                alt="Chargebee - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>

                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}"
                                alt="Flipkart - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}"
                                alt="VYMO - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}"
                                alt="Indusface - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}"
                                alt="Chargebee - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                    </div>

                    <!-- Row 3 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-3">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}"
                                alt="Natural - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}"
                                alt="Vakil Search - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}"
                                alt="Bhive Workspace - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}"
                                alt="Apollo Hospitals - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}"
                                alt="Adarsh Developers - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}"
                                alt="New Horizon Educational Institution - Our Signage Client">
                        </div>


                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}"
                                alt="Natural - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}"
                                alt="Vakil Search - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}"
                                alt="Bhive Workspace - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}"
                                alt="Apollo Hospitals - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}"
                                alt="Adarsh Developers - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}"
                                alt="New Horizon Educational Institution - Our Signage Client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- testimonial Feedback Section -->
    <section class="new_testimonial-swiper-section">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-3">What Our Clients Say About Us</h2>

            <div class="position-relative">

                <!-- Navigation Arrows (placed OUTSIDE swiper container) -->
                <div class="new_testimonial-button-prev">
                    <img src="{{ asset('frontend/Images/home/arrow-left.png') }}" alt="Arrow Left" width="40" height="40">
                </div>
                <div class="new_testimonial-button-next">
                    <img src="{{ asset('frontend/Images/home/arrow-right.png') }}" alt="Arrow Right" width="40" height="40">
                </div>

                <!-- Swiper -->
                <div class="swiper new_testimonial-swiper">
                    <div class="swiper-wrapper">

                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    Our tech startup needed a signage solution that matched our innovative spirit. The Brand
                                    Signages team didn't just
                                    create a sign; they captured our company's essence. The LED sign board has become a
                                    conversation starter for clients
                                    and employees alike.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-1.webp') }}"
                                        alt="Michael, CEO, Technova Innovations" class="rounded-circle me-3" width="50"
                                        height="50">
                                    <div>
                                        <h6 class="name">Michael</h6>
                                        <small class="text-muted">CEO, Technova Innovations</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Duplicate Slide -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    As a boutique hotel chain, brand consistency is everything. These custom signages
                                    transformed
                                    our branding across multiple locations. The attention to detail is remarkable - each
                                    piece
                                    feels uniquely crafted yet perfectly aligned with our brand identity.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-2.webp') }}"
                                        alt="Asish, CEO, A Hotel Chain" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Asish</h6>
                                        <small class="text-muted">CEO, A Hotel Chain</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    We needed a visually appealing sign for our office location, and Brand Signages
                                    delivered a
                                    stunning LED sign board beyond our expectations. The direct communication and on-demand
                                    design
                                    process was seamless and stress-free.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-3.webp') }}"
                                        alt="Nandini, CEO, A Real Estate Company" class="rounded-circle me-3" width="50"
                                        height="50">
                                    <div>
                                        <h6 class="name">Nandini</h6>
                                        <small class="text-muted">CEO, A Real Estate Company</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    We weren’t sure if a signage company could capture the essence of a dynamic workspace
                                    like Bhive. But what they delivered went far beyond expectations. They didn’t just
                                    create
                                    signs – they crafted a visual identity that reflects our energy, innovation, and
                                    community spirit.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-4.webp') }}"
                                        alt="Manager, Bhive Workspace" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sai Teja</h6>
                                        <small class="text-muted">Manager, Bhive Workspace</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="faq-section">
        <div class="container">
            <h1 class="faq-title">Frequently Asked Questions</h1>

            

            <div class="faq-item">
                <button class="faq-question">
                    What Types of Name Boards are Available at Brand Signages?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We offer a wide range of name board designs suitable for all types of businesses, including <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/top-mobile-shop-name-board-design-trends-to-attract-more-customers"><strong>office name board</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/best-tea-shop-name-board-design-trends-to-attract-customers-in-2025"><strong>shop name board</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/name-board-design-for-home-trends-styles-ideas-for-2026"><strong>name boards for home</strong></a>, and more. Our collection includes
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/arcylic-signages"><strong>acrylic name boards</strong></a>, <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/metal-signages"><strong>metal sign boards</strong></a>, <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/led-name-board-design"><strong>LED name boards</strong></a>, <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/arcylic-signages"><strong>neon signage</strong></a>, glow sign
                        boards, and <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/digital-signages"><strong>digital signage</strong></a>, all
                        fully customizable to reflect your name board identity and enhance visibility.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are LED Name Boards Weatherproof and Durable?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>At Brand Signages, we use weather-resistant acrylic, stainless steel (304/316 grade), ACP backing panels,
                         powder-coated metal frames, and sealed wiring systems to prevent moisture entry. Outdoor installations are
                          fitted with IP-rated LED modules and regulated drivers to handle rain, heat, dust, and humidity without 
                          affecting brightness or performance.</p>
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Fast is The Installation and Delivery Process?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our process is efficient and end-to-end. Once the design is approved, we handle production,
                        installation, and finishing within a <strong>quick turnaround time, usually within 5-7
                            days</strong>, without compromising on quality.</p>
                </div>
            </div>

            <div class="faq-item">
    <button class="faq-question">
        Why is a Name Board Design Important?
        <i class="faq-icon fa-solid fa-chevron-down"></i>
    </button>
    <div class="faq-answer">
        <p>An LED name board design is important because it directly affects visibility, readability, and the overall perception of your space. Unlike a non-illuminated board, an LED name board remains clearly visible during evenings and low-light conditions, ensuring your home or business is easily identifiable at all times.</p>
        <p>The right design- including font selection, letter thickness, spacing, and lighting style determines how professional and refined the final output appears. A well-planned LED light name board enhances recognition, improves clarity from a distance, and creates a stronger visual presence compared to basic signage.</p>
    </div>
</div>


<div class="faq-item">
    <button class="faq-question">
        Which Local Vendor Provides Professional Name Board Design?
        <i class="faq-icon fa-solid fa-chevron-down"></i>
    </button>
    <div class="faq-answer">
        <p>Brand Signages is a trusted local provider known for delivering premium-quality name board designs. From consultation and design to fabrication and installation, every step is handled with precision and professional standards.</p>
    </div>
</div>

<div class="faq-item">
    <button class="faq-question">
        What Materials Are Used in Name Board Design?
        <i class="faq-icon fa-solid fa-chevron-down"></i>
    </button>
    <div class="faq-answer">
    <p>We manufacture LED name boards using premium-grade materials and high-performance lighting components to ensure durability, brightness, and long-term reliability.</p>

    <p><strong>Materials we use include:</strong></p>

    <ul>
        <li>Acrylic sheets for illuminated faces and edge-lit effects</li>
        <li>Stainless Steel (304/316 grade) for corrosion-resistant fabricated letters</li>
        <li>Aluminium Composite Panel (ACP) for strong and stable backing support</li>
        <li>Powder-coated metal frames for structural strength</li>
        <li>Waterproof LED modules and quality drivers for consistent illumination</li>
    </ul>

    <p>We select materials based on installation location, lighting style, and performance requirements to deliver long-lasting LED name board solutions.</p>
    </div>
    </div>

<div class="faq-item">
    <button class="faq-question">
        Are LED Name Boards Suitable for Outdoor Use?
        <i class="faq-icon fa-solid fa-chevron-down"></i>
    </button>
    <div class="faq-answer">
        <p>Yes, LED name boards are highly suitable for outdoor installation when manufactured using weather-resistant and durable materials. These materials ensure protection against rain, dust, sunlight, and humidity.</p>
        
        <p>Common materials used for outdoor LED name boards include:</p>
        <ul>
            <li>Acrylic panels with waterproof LED modules</li>
            <li>Stainless Steel (304/316 grade) fabricated letters</li>
            <li>ACP (Aluminium Composite Panel) backing sheets</li>
            <li>Powder-coated metal frames for rust resistance</li>
            <li>IP65-rated LED lighting components for outdoor durability</li>
        </ul>

        <p>When built with these materials, LED name boards offer excellent nighttime visibility, energy efficiency, and long-lasting performance even in challenging outdoor conditions.</p>
    </div>
</div>

<div class="faq-item">
    <button class="faq-question">
        Can Name Board Designs Be Fully Customized?
        <i class="faq-icon fa-solid fa-chevron-down"></i>
    </button>
    <div class="faq-answer">
        <p>Yes, customization is available for size, font style, material, finish, lighting, and color combinations. A customized name board ensures it aligns perfectly with your brand identity or personal style.</p>
    </div>
</div>

<div class="faq-item">
    <button class="faq-question">
        How Do I Choose the Right Name Board Design?
        <i class="faq-icon fa-solid fa-chevron-down"></i>
    </button>
    <div class="faq-answer">
        <p>Consider the installation location, viewing distance, lighting needs, brand personality, and available space. A professional assessment helps determine the most suitable design for maximum impact.</p>
    </div>
</div>

<div class="faq-item">
    <button class="faq-question">
        How Long Do LED Name Boards Typically Last?
        <i class="faq-icon fa-solid fa-chevron-down"></i>
    </button>
    <div class="faq-answer">
        <p>High-quality LED name boards made with durable materials can last between 4 to 8 years or more, depending on environmental conditions and maintenance.</p>
    </div>
</div>

<div class="faq-item">
    <button class="faq-question">
        Is Professional Installation Necessary?
        <i class="faq-icon fa-solid fa-chevron-down"></i>
    </button>
    <div class="faq-answer">
        <p>Professional installation ensures proper alignment, secure mounting, and safe electrical setup for illuminated boards. It improves durability and provides a clean, premium finish.</p>
    </div>
</div>

<div class="faq-item">
    <button class="faq-question">
        What Size Should a Name Board Be?
        <i class="faq-icon fa-solid fa-chevron-down"></i>
    </button>
    <div class="faq-answer">
        <p>The size depends on the facade width, viewing distance, and placement area. Proper measurement ensures the name board is proportionate and easily readable from a distance.</p>
    </div>
</div>

<div class="faq-item">
    <button class="faq-question">
        Can Logos Be Included in Name Board Designs?
        <i class="faq-icon fa-solid fa-chevron-down"></i>
    </button>
    <div class="faq-answer">
        <p>Yes, logos, icons, and brand elements can be integrated into the design. Adding a logo enhances brand recognition and creates a stronger visual identity.</p>
    </div>
</div>

<div class="faq-item">
    <button class="faq-question">
        Why Choose Brand Signages for LED Name Board Design?
        <i class="faq-icon fa-solid fa-chevron-down"></i>
    </button>
    <div class="faq-answer">
    <p>Brand Signages is a trusted manufacturer of premium LED name boards, delivering high-visibility signage solutions tailored for commercial and residential spaces.</p>

        <ul>
            <li>Custom-built LED name boards based on your brand identity and space requirements</li>
            <li>High-quality materials with weather-resistant and durable finishes</li>
            <li>Advanced LED modules for uniform brightness and energy efficiency</li>
            <li>In-house design, fabrication, and professional installation</li>
            <li>Fast turnaround time with strict quality control standards</li>
        </ul>

        <p>We focus on precision manufacturing, long-term performance, and impactful visual presence to ensure your LED name board stands out day and night.</p>
            </div>
</div>
        </div>
    </section>


<script>
let current = 0;
const slides = document.querySelectorAll('.slide');
const thumbs = document.querySelectorAll('.thumb');

function show(i) {
  slides[current].classList.remove('active');
  current = i;
  slides[current].classList.add('active');
}

document.querySelector('.next').onclick = () =>
  show((current + 1) % slides.length);

document.querySelector('.prev').onclick = () =>
  show((current - 1 + slides.length) % slides.length);

thumbs.forEach((t, i) => (t.onclick = () => show(i)));
</script>



@endsection