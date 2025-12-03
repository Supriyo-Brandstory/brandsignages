@extends('frontend.layout.appLayout')
@section('content')
    <section class="hero-banner"
        style="background-image: url('{{ asset('/frontend/Images/home/led-signagesbengalor-banner.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">High-Impact LED Sign Boards <br>in Bangalore | 7X Energy Efficient</h1>
                    <p>Brand Signages is a trusted B2B premium LED sign board manufacturer<br> in Bangalore, India. Shine brighter in the city with high-impact LED sign boards.
                    </p>
                    <a href="https://brandsignages.com/contact-us">
                        <button class="contact-btn">Get Free Quote</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section>
        <div class="container py-5">
            <h2 class="hero-title">Stand Out in Bangalore’s Cityscape with<br> High-Impact LED Sign Boards</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board-signage.webp')}}" alt="LED Sign Board Design"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="brand-title">Supirior-quality LED Name Boards Bangalore</h2>
                    <p class="brand-description">
                       In a world full of visual noise, your business must make an impact offline to stand out from competitors. 
                       Sign boards act as the first point of interaction, and LED sign boards are the talk of the town, boosting 
                       brand visibility and capturing attention instantly.
                    </p>
                       <p class="brand-description">
                       Brand Signages is a leading LED sign board manufacturers in Bangalore, serving B2B customers with 7X energy-efficient striking visual displays. We provide a wide range of comprehensive <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/led-acrylic-3d-glow-sign-board"><strong>LED sign boards</strong></a> for our customers at affordable prices. As a trusted provider of LED signboards in Bangalore, we deliver solutions tailored to make an impact.
                    </p>
                    <p class="brand-description">
                       Being a prominent leader in <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/services"><strong>signage services</strong></a>, we have become trusted name in LED sign board manufacturing. We value our core principles, serve each customer with utmost priority, and bring your brand to life with captivating graphics and impactful visual storytelling. 
                    </p>
                    <div class="mt-4">
                            <a href="{{route('about_us')}}" class="custom-btn">About Us</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="BuiltToLast-section"
        style="background: url('{{ asset('frontend/Images/new/Premium-LED-Sign-bg.png') }}') no-repeat;">

        <div class="BuiltToLast-container">
            <h2 class="BuiltToLast-heading">Premium LED Sign Boards for Businesses<br> Crafted to Shine, Built to Last</h2>
            <p class="BuiltToLast-description">
                Renowned for craftsmanship and creativity, Brand Signages delivers top-tier LED signage solutions for businesses in Bangalore. We
                specialize in designing custom LED signage boards for outdoor spaces, retail branding, etc.
            </p>
            <div class="BuiltToLast-images">
                <img src="{{asset('frontend/Images/new/cardamom-sign.webp')}}" alt="LED Sign Board Design for B2B Customer"
                    class="BuiltToLast-img">
                <img src="{{asset('frontend/Images/new/congrats-sign.webp')}}" alt="LED Sign Board Design for B2B Customer"
                    class="BuiltToLast-img">
                <img src="{{asset('frontend/Images/led-sign-3.webp')}}" alt="LED Sign Board Design for B2B Customer"
                    class="BuiltToLast-img">
            </div>
        </div>
    </section>-->
  <!--<section class="bgrowth-slider-section">
            <div class="bgrowth-header">
                <h2>Our LED Sign Board <br>Product Range</h2>
                
            </div>

            <div class="swiper bgrowth-swiper container">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">

                    
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/acrylic-sign-board-1.webp') }}" alt="Acrylic LED Sign"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Acrylic LED Sign Board</h3>
                            <p>
                                Acrylic LED Sign Board is a visually appealing signage solution made from durable acrylic material, 
                                illuminated with LED lights. Ideal for restaurants and cafes, retail stores, event exhibitions, hotel resorts, etc. 
                            </p>
                        </div>
                    </div>

                   
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/digital-led-signage-1.webp') }}" alt="Metal Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Digital LED Display Boards</h3>
                            <p>
                                Digital LED Display Boards use LED technology to display dynamic content, including text, images, and videos. 
                                It can create an impressive customer experience and attract foot traffic with interactive digital LED screens.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/led-backlit-board-1.webp') }}" alt="LED Sign Board"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>LED Backlit Boards</h3>
                            <p>
                                LED Backlit Boards are illuminated signboards where LED lights are placed behind the display surface, creating a 
                                glowing effect. With striking design and visual appeal, LED backlit signs can establish a strong brand presence. 
                            </p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/led-reverse-light.webp') }}" alt="Digital Signages"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>LED Reverse Light Sign</h3>
                            <p>
                                LED Reverse Light Signs are signage solutions where LED lights illuminate the design from the back, creating a 
                                glow effect around the letters. In high-traffic areas, LED reverse light signs ensure your message stands out, day or night.
                            </p>
                        </div>
                    </div>

                   
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/led-message-boards.webp') }}" alt="Neon Sign Board"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>LED Message Boards</h3>
                            <p>
                               LED Message Boards are digital display boards to showcase customizable text and messages, ideal for real-time updates on information 
                               display. If you're looking for captivating message boards, LED message boards are the best option.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/glow-sign-board.webp') }}" alt="retail Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Glowing Light Sign Boards</h3>
                            <p>
                               Glowing Light Sign Boards are illuminated signage solutions that use LED or neon lights to create a vibrant, eye-catching glow. The glowing 
                               light sign board is ideal for cafes, storefronts, exhibitions, malls, or event spaces.
                            </p>
                        </div>
                    </div>


                    
                </div>
             


            </div>
            
               <div class="text-center mt-4">
            <a href="https://brandsignages.com/services" class="btn-we-elevate">View All Services</a>
        </div>


        </section>-->
        <section class="We-Elevate-Brands-section py-5">
        <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Exlusive LED Sign Board <br>Product Range</h2>
        </div>

        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/3d-acrylic-letters-mounted-on-acp-base-frame-2.webp')}}" class="card-img-center"
                                alt="Acrylic LED Letters">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="3d-led-acrylic-letters">3D Acrylic LED Letters</a></h5>
                                <p class="We-Elevate-Brands-text">Acrylic LED letters are a versatile choice for LED sign boards, offering bright illumination, sleek design, and durability. 
                                    Perfect for creating high-impact, attention-grabbing name boards for any business.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/aluminum-channel-letters-acp-2.webp')}}" class="card-img-center"
                                alt="Aluminum LED Channel Letters">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="led-aluminum-channel-letters">Aluminum LED Letters</a></h5>
                                <p class="We-Elevate-Brands-text">Aluminum channel letters offer a sleek, 3D design with front-facing LED illumination. Customizable in black, gold, silver, or 
                                    multi-colour, they create premium, high-visibility signage for retail and boutique businesses. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/2d-stencil-cut-letters-2.webp')}}" class="card-img-center"
                                alt="2D Stencil Cut Sign Boards">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="2d-stencil-cut-acrylic-led-letters">2D Stencil Cut Sign Board</a></h5>
                                <p class="We-Elevate-Brands-text">2D stencil cut sign boards offer sleek, flush designs with hidden LED illumination, providing a cost-effective, professional, and
                                     customizable signage solution ideal for delicate fonts and minimalist branding.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/crystal-led-6.webp')}}" class="card-img-center"
                                alt="3D Crystal LED Letters">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="3d-crystal-led-letters">3D Crystal LED Letters</a></h5>
                                <p class="We-Elevate-Brands-text">3D Crystal LED Letters feature crystal-embedded acrylic faces with backlit LEDs, deep 3D layering, and luxurious metallic finishes, 
                                    creating dazzling, high-visibility sign boards perfect for premium retail and luxury brands.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
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
                            <img src="{{asset('frontend/Images/led-sign-board/neon-sign-board-4.webp')}}" class="card-img-center"
                                alt="Neon LED Signs">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="neon-signages">Neon LED Signs</a></h5>
                                <p class="We-Elevate-Brands-text">LED Neon Sign Boards deliver vibrant, durable signage with shatter-resistant LED ropes. Offering low power consumption and vivid 
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


          <section class="Maximum-Impact-section">
        <div class="container">
            <div class="swiper Maximum-Impact-swiper">

                <h2>LED Sign Boards That Create <br>Maximum Impact </h2>
                <p>Trusted by clients across Bangalore and India, we’ve worked on 100+ LED sign board projects with
                    excellence.
                    We are a proven leader in the B2B led sign board manufacturing with 10+ years of excellence. We design
                    modern tech-savvy LED sign boards that consume 7x less energy, backed with premium quality materials and
                    range of options.</p>
                <div class="swiper-wrapper">
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-4.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-3.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-1.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>

                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-4.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-3.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-1.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>



                </div>
            </div>
        </div>
    </section>
    
    <section class="new-recent-works">
        <div class="container">
            <h2 class="hero-title  mb-6">Our Recent LED Sign Board <br>Installation Projects</h2>
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



     <div class="inquery-from-section">
        <x-coustom-inquiry-form />
        </div>
                <section class="we-deliver">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <h2>What Makes LED Sign Boards a Top Choice for Businesses</h2>
                    </div>
                    <div class="col-md-8 col-12">
                    
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                        class="img-fluid">
                                    <h3>Eye-Catching Designs</h3>
                                    <p>LED signage boards captivate attention with vibrant, high-resolution displays. These modern signages enhance brand visibility and leave a lasting impression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Timely Delive"
                                        class="img-fluid">
                                    <h3>Powerful Tool for Advertising</h3>
                                    <p>Bangalore's vibrant commercial landscape, with its tech hubs and bustling streets, makes LED signboards a perfect choice for businesses seeking high visibility. These illuminated displays enhance brand presence, and attracting customers.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Direct Purchase"
                                        class="img-fluid">
                                    <h3>Long-Lasting Durability </h3>
                                    <p>LED sign boards are designed with energy-efficient LED technology to ensure low electricity consumption and extended lifespan.
                                    </p>
                                </div>
                            </div>
                             <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Direct Purchase"
                                        class="img-fluid">
                                    <h3>Installation & Maintenance </h3>
                                    <p> Other than traditional sign boards, it does not require upkeep. LED signage boards are lightweight due to modern materials like aluminum frames and acrylic panels.
                                    </p>
                                </div>
                            </div>
                            

                        </div>
        </section>

         <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve B2B Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/home/client-bg.webp') }}" alt="Our Clients">
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

     <!--<section class="home-page mb-5">
         <div class="pointing">
            <div class="container point">
                <div class="ledx pulse-point">
                    <span class="pulse"></span> 
                    <span class="pulse-center"></span> 
                    <img class="pulse-hover-img ledx-img" src="{{ asset('frontend/Images/home/led-signage.png') }}"
                        alt="LED Sign Board">
                </div>
                <div class="outdoorx pulse-point">
                    <span class="pulse"></span> 
                    <span class="pulse-center"></span> 
                    <img class="pulse-hover-img outdoorx-img" src="{{ asset('frontend/Images/home/outdoor-signage.png') }}"
                        alt="Outdoor Signage">
                </div>
                <div class="digitalx pulse-point">
                    <span class="pulse"></span> 
                    <span class="pulse-center"></span> 
                    <img class="pulse-hover-img digitalx-img" src="{{ asset('frontend/Images/home/digital-signage.png') }}"
                        alt="Digital Signage">
                </div>
                <div class="metalx pulse-point">
                    <span class="pulse"></span>
                    <span class="pulse-center"></span>
                    <img class="pulse-hover-img metalx-img" src="{{ asset('frontend/Images/home/metal-signage.png') }}"
                        alt="Metal Signage">
                </div>
                <div class="acrylicx pulse-point">
                    <span class="pulse"></span> 
                    <span class="pulse-center"></span> 
                    <img class="pulse-hover-img acrylicx-img" src="{{ asset('frontend/Images/home/acrylic-signage.png') }}"
                        alt="Acrylic Signage">
                </div>




            </div>
        </div>
    </section>-->

          <!-- testimonial Feedback Section -->
        <section class="new_testimonial-swiper-section">
            <div class="container">
                <h2 class="text-center mb-md-5 mb-3">What Our Clients Say About Us</h2>

                <div class="position-relative">

                    <!-- Navigation Arrows (placed OUTSIDE swiper container) -->
                    <div class="new_testimonial-button-prev">
                        <img src="{{ asset('frontend/Images/home/arrow-left.png') }}" alt="Arrow Left" width="40"
                            height="40">
                    </div>
                    <div class="new_testimonial-button-next">
                        <img src="{{ asset('frontend/Images/home/arrow-right.png') }}" alt="Arrow Right" width="40"
                            height="40">
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
                                        Our tech startup needed a signage solution that matched our innovative spirit. The Brand Signages team didn't just 
                                        create a sign; they captured our company's essence. The LED sign board has become a conversation starter for clients 
                                        and employees alike.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/home/testimonial-1.webp') }}" alt="Michael, CEO, Technova Innovations"
                                            class="rounded-circle me-3" width="50" height="50">
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
                                        As a boutique hotel chain, brand consistency is everything. These custom signages transformed 
                                        our branding across multiple locations. The attention to detail is remarkable - each piece 
                                        feels uniquely crafted yet perfectly aligned with our brand identity.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/home/testimonial-2.webp') }}" alt="Asish, CEO, A Hotel Chain"
                                            class="rounded-circle me-3" width="50" height="50">
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
                                        We needed a visually appealing sign for our office location, and Brand Signages delivered a 
                                        stunning LED sign board beyond our expectations. The direct communication and on-demand design 
                                        process was seamless and stress-free.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/home/testimonial-3.webp') }}" alt="Nandini, CEO, A Real Estate Company"
                                            class="rounded-circle me-3" width="50" height="50">
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
                                        like Bhive. But what they delivered went far beyond expectations. They didn’t just create 
                                        signs – they crafted a visual identity that reflects our energy, innovation, and community spirit. 
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/home/testimonial-4.webp') }}" alt="Manager, Bhive Workspace"
                                            class="rounded-circle me-3" width="50" height="50">
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
            
    <section class="other-cities-section mt-5">
    <div class="container">
        <h2 class="my-5">Led Sign Board in Other Cities</h2>
        <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
            <div class="other-cities-card">
                <a href="https://brandsignages.com/led-display-board-in-mumbai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="LED Sign Boards Mumbai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Mumbai</p>
                </div>
            </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/led-display-board-in-chennai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="LED Sign Boards Chennai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Chennai</p>
                </div>
                </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/led-sign-board-in-bangalore" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="LED Sign Boards Bangalore">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Bangalore</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>

          <section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Latest Articles on LED Sign Boards</h2>
                <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the signage designs
                    through our articles.</p>
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
                                    <p class="card-text">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') }}
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
         <section class="faq-section">
            <div class="container">
                <h1 class="faq-title">LED Sign Board FAQs</h1>

                <div class="faq-item">
                    <button class="faq-question">
                        What is an LED signboard and how does it work?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>An LED signboard is a bright, attention-grabbing display that helps businesses showcase their messages, 
                            offers, or brand vibrantly. It works by lighting up specially designed panels that can show text, images,
                             or even moving visuals. Because it’s clear and visible in any lighting, day or night, it makes your business
                              stand out from the crowd. Plus, LED signboards are cost-effective to run, long-lasting, and easy to update,
                               so you can change your message whenever you need to.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Are your LED signboards weather-resistant and suitable for outdoor use?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes. Our <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/led-sign-board-in-bangalore"><strong>LED sign boards</strong></a> are designed for durability and can handle Bangalore’s 
                            changing weather from scorching summer heat to heavy monsoon rains. They deliver 
                            reliable performance all year round, making them perfect for long-term outdoor use.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Do you provide remote content management or scheduling for LED displays?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes. Our digital LED signboards support remote content management, so you can update messages, 
                            ads, or visuals in real time from anywhere. You can also schedule content in advance, making 
                            it easy to run timely promotions without being on-site.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Do I need any permissions to install an LED signboard in Bangalore?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Depending on the location and size, certain LED signboards may require permissions from the local municipal authorities 
                            or BBMP (Bruhat Bengaluru Mahanagara Palike). We can guide you through the approval process.</p>
                    </div>
                </div>


                <div class="faq-item">
                    <button class="faq-question">
                        What is the lifespan of your LED signboards?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>The average lifespan of our LED signboards ranges from 30,000 to 80,000 hours, 
                            depending on usage. With adequate care and maintenance, LED signboards can last for 
                            3 to 7 years, making them a long-lasting and cost-effective signage solution for 
                            businesses in Bangalore.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Can LED signboards be customized with my brand logo and colors?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Absolutely. At <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/"><strong>Brand Signages</strong></a>, we design LED signboards that are 
                            fully customized to match your brand identity. From incorporating 
                            your logo and brand colors to adding your tagline and unique design elements, 
                            we ensure every detail reflects your business’s style and message. Our goal is 
                            to create a signboard that not only looks great but also strengthens your brand presence.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        What is the delivery time for signboard in Bangalore?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>We ensure timely delivery of your signboards across Bangalore. Our standard delivery time 
                            ranges from 2 to 7 business days, depending on the complexity of the design, customization 
                            requirements, and installation needs.</p>
                        <p>For simpler designs or ready-to-install boards, delivery can be completed within 2 to 3 days. 
                            Custom signboards with branding elements like logos, lighting, or unique shapes may take up 
                            to 7 days to ensure precision and quality. For bulk sign board orders, it can take up to 15 days.</p> 
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        How energy-efficient are your LED signboards?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Our LED sign boards are designed to be highly energy-efficient, up to 
                            7 times more efficient than traditional LED sign board options. This means 
                            significantly lower power consumption without compromising on brightness or 
                            visual impact.</p>
                        <p>Our LED boards also generate less heat, have longer lifespans, and require minimal maintenance, 
                            making them an eco-friendly and cost-effective choice.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        What types of LED signboards are ideal for businesses in Bangalore?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>For small and large-scale businesses in Bangalore, <strong>Brand Signages</strong> offers a variety of LED 
                        signboards tailored to suit different environments, brand styles, and visibility needs. Here are the most popular 
                        and effective types:</p>
                        <ul>
                            <li>Front-lit LED Signboards</li>
                            <li>Back-lit LED Signboards</li>
                            <li>Acrylic LED Signboards</li>
                            <li>3D LED Letter Signboards</li>
                            <li>LED Reverse Light Signs</li>
                            <li>Digital LED Display Boards</li>
                        </ul>

                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Are LED sign boards suitable for promoting my retail store?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Absolutely. LED sign boards are one of the most effective ways to 
                            attract attention and drive foot traffic to your retail store. At 
                            Brand Signages, we create high-impact LED displays designed specifically 
                            for retail spaces, helping you showcase offers, new arrivals, and brand 
                            messages in a way that stands out and engages customers.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Do you provide installation services for the LED sign boards?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, at <strong>Brand Signages</strong>, we provide complete installation services for all LED sign boards 
                        across Bangalore and other locations in India. Our expert installation team ensures that your signage is securely 
                        mounted, perfectly aligned, and fully functional.</p>
                        <p>Our installation service includes:</p>
                            <ul>
                                <li>On-site assessment for optimal positioning</li>
                                <li>Safe and professional mounting on various surfaces</li>
                                <li>Electrical setup and testing to ensure proper illumination</li>
                                <li>Post-installation support and maintenance guidance</li>
                            </ul>

                    </div>
                </div>
            </div>
        </section>

@endsection