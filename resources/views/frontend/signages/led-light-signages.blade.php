@extends('frontend.layout.appLayout')
@section('content')

    <div class="newly-bannersection">
        <div class="bar">
            <h1 class="hero-banner_title">Acrylic LED Glow Sign Boards</h1>

        </div>
        <!-- Slider -->
        <div class="slider-wrapper">
            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/acrylic-led-signboard-6.webp" alt="Acrylic LED Glow Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/led-sign-board-1.webp" alt="Acrylic LED Glow Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/led-display-board.webp" alt="Acrylic LED Glow Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/led-light-board.webp" alt="Acrylic LED Glow Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/custom-led-sign-board.webp" alt="Acrylic LED Glow Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-sign-board.webp" alt="Acrylic LED Glow Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/led-glow-sign-board.webp" alt="Acrylic LED Glow Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/led-name-board.webp" alt="Acrylic LED Glow Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/outdoor-led-sign-board.webp" alt="Acrylic LED Glow Sign Board">
                </div>
                <!-- Add more slides as needed -->

                <div class="nav-arrow prev">&#8249;</div>
                <div class="nav-arrow next">&#8250;</div>
            </div>

            <div class="thumbnails">
                <img src="/frontend/Images/acrylic-led-signboard-6.webp" class="thumb active" data-index="0">
                <img src="/frontend/Images/led-sign-board/led-sign-board-1.webp" class="thumb" data-index="1">
                <img src="/frontend/Images/led-sign-board/led-display-board.webp" class="thumb" data-index="2">
                <img src="/frontend/Images/led-sign-board/led-light-board.webp" class="thumb" data-index="3">
                <img src="/frontend/Images/led-sign-board/custom-led-sign-board.webp" class="thumb" data-index="4">
                <img src="/frontend/Images/led-sign-board/acrylic-led-sign-board.webp" class="thumb" data-index="5">
                <img src="/frontend/Images/led-sign-board/led-glow-sign-board.webp" class="thumb" data-index="6">
                <img src="/frontend/Images/led-sign-board/led-name-board.webp" class="thumb" data-index="7">
                <img src="/frontend/Images/led-sign-board/outdoor-led-sign-board.webp" class="thumb" data-index="8">
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <h1 class="hero-banner_title">LED Name Boards- 12+ Acrylic LED Shop Sign Board Options</h1>
            <p class="subtitle">Eye-Catching LED Shop Boards That Attract Customers Into Your Store</p>

            <div class="divider"></div>

            <ul class="features">
                <li>Browse 10 different shop-sign design options</li>
                <li>Crafted using quality material like acrylic, LEDs, and ACP</li>
                <li>3D letters to highlight your logos and shop name</li>
                <li>Attractive LED glow boards to attract attention</li>
                <li>Full-service including design and on-site installation</li>
                <li>Active support with 24/7 active hotline</li>
            </ul>

            <div class="buttons">
                <a href="#pricing" class="btn">Check Pricing</a>
                <a href="{{ route('contact_us') }}" class="btn">Get Quote</a>
            </div>
        </div>
    </div>





    {{-- <section class="hero-banner"
        style="background-image: url('{{ asset('/frontend/Images/led-sign-board/led-sign-boards.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Brilliant LED Name Boards That </br>Make Your Brand Shine</h1>
                    <p>Enhance your storefront with premium LED name boards. Designed for superior </br>visibility and
                        lasting performance, our creations ensure your brand never goes unnoticed.
                    </p>
                    <a href="/contact-us">
                        <button class="contact-btn">Get Free Quote</button>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}



    <section>
        <div class="container" id="">
            <h2 class="hero-title  mb-4">Shine Brighter with Acrylic LED Glow Sign Boards</h2>
            <p class=" text-center fs-20">In the world of retail and consumer businesses, first impressions are often the deciding factor for customers. 
                This is why shopping malls and high streets are designed to be visually captivating. Every element of a store’s exterior, its facade, entrance,
                 and, most importantly, the sign board is carefully crafted to draw potential customers inside.</p>
                <p class=" text-center fs-20">The <a style="color: #E43D12;text-decoration: none;" href="/name-board-designs-for-shops-bangalore"><strong>shop sign board</strong></a> is 
                more than just a display of your brand name. It acts as the store’s ambassador, making a bold statement about 
                your business. A well-designed sign can literally make people pause and take notice, compelling them to step 
                through your doors.</p>
                <p class=" text-center fs-20"><b>Acrylic LED sign boards</b>, especially those with metallic finishes and backlit elements, create a striking visual impact. Imagine polished gold 
                letters mounted on crisp white acrylic, laser-cut with precision, glowing softly to highlight your brand. Different types of signage serve different roles. Flashing lights grab immediate 
                attention, while neon signs in vibrant hues evoke energy and excitement, perfect for stores with a lively, festive vibe.</p>
                <p class=" text-center fs-20">Conversely, <b>3D acrylic LED sign boards</b> with a gold finish or subtle illumination communicate luxury and quality, signaling to customers that your 
                products are premium. And then there are sky signs atop tall buildings, making your brand visible across vast distances and turning your store into a recognizable landmark.</p>
            </p>

            {{-- <div class="row align-items-center new-lighbox">

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/acrylic-led-signboard-6.webp')}}" class="img-fluid"
                            alt="Custom LED Sign Board" style="width: 100%;">
                        <span><b>Custom LED Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/led-sign-board/led-sign-board-1.webp')}}" class="img-fluid"
                            alt="LED Sign Board" style="width: 100%;">
                        <span><b>LED Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/led-sign-board/led-display-board.webp')}}" class="img-fluid"
                            alt="LED Display Board" style="width: 100%;">
                        <span><b>LED Display Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/led-sign-board/led-light-board.webp')}}" class="img-fluid"
                            alt="LED Light Board" style="width: 100%;">
                        <span><b>LED Light Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/led-sign-board/custom-led-sign-board.webp')}}" class="img-fluid"
                            alt="LED Light Board" style="width: 100%;">
                        <span><b>Cusom LED Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/led-sign-board/acrylic-led-sign-board.webp')}}" class="img-fluid"
                            alt="Acrylic LED Name Board" style="width: 100%;">
                        <span><b>Acrylic LED Name Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/led-sign-board/led-glow-sign-board.webp')}}" class="img-fluid"
                            alt="LED Glow Sign Board" style="width: 100%;">
                        <span><b>LED Glow Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/led-sign-board/led-name-board.webp')}}" class="img-fluid"
                            alt="LED Name Board" style="width: 100%;">
                        <span><b>LED Name Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/led-sign-board/outdoor-led-sign-board.webp')}}" class="img-fluid"
                            alt="Outdoor LED Sign Board" style="width: 100%;">
                        <span><b>Outdoor LED Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/led-sign-board/indoor-led-sign-board.webp')}}" class="img-fluid"
                            alt="Indoor LED Sign Board" style="width: 100%;">
                        <span><b>Indoor LED Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/led-sign-board/led-office-name-board.webp')}}" class="img-fluid"
                            alt="LED Office Name Board" style="width: 100%;">
                        <span><b>LED Office Name Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="javascript:void(0)">
                        <img src="{{asset('frontend/Images/led-sign-board/led-glow-name-board.webp')}}" class="img-fluid"
                            alt="LED Glow Sign Board" style="width: 100%;">
                        <span><b>LED Glow Name Board</b></span>
                    </a>
                </div>


            </div> --}}
        </div>
    </section>

        <section class="We-Elevate-Brands-section">
        <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Types of LED & ACP Acrylic Glow Sign <br>Boards - Order at Brand Signages </h2>
        </div>

        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/uhouse.webp')}}" class="card-img-center"
                                alt="ACP Mounted Acrylic Letters">
                            <div class="card-body pt-0">
                                <a href="#3d-acrylic-letter" class="We-Elevate-Brands-title">ACP Mounted Acrylic Letters</a>
                                <p class="We-Elevate-Brands-text">Custom 3D acrylic box letters with a metallic finish and internal LED illumination, mounted on a 
                                    sleek ACP frame. This premium, glowing sign offers a modern and professional look for corporate or retail spaces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/led-sign.webp')}}" class="card-img-center"
                                alt="3D Acrylic Channel Letters">
                            <div class="card-body pt-0">
                                <a href="#3d-acrylic-channel-letter" class="We-Elevate-Brands-title">3D Acrylic Channel Letters</a>
                                <p class="We-Elevate-Brands-text">Premium illuminated aluminum channel letter signage with professional 3D construction, featuring aluminum profiles 
                                    and acrylic faces, ideal for corporate offices and retail store branding.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/stencil-cut-sign.webp')}}" class="card-img-center"
                                alt="Stencil Cut Acrylic Signage">
                            <div class="card-body pt-0">
                                <a href="#stencil-cut-acrylic-letter" class="We-Elevate-Brands-title">Stencil Cut Acrylic Signage</a>
                                <p class="We-Elevate-Brands-text">2D Stencil Cut Acrylic Signboards, perfect for intricate details and multi-content displays. Ideal for shop fronts 
                                    requiring information like timings, contact details, and taglines.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/acrylic-sign.webp')}}" class="card-img-center"
                                alt="Wall Mounted 3D Letters">
                            <div class="card-body pt-0">
                                <a href="#wall-mounted-led-letter" class="We-Elevate-Brands-title">Acrylic Glow Sign Board</a>
                                <p class="We-Elevate-Brands-text">Illuminated Acrylic 3D letters with internal LEDs, designed for direct wall mounting without a baseboard. They offer a sleek, 
                                    modern appearance by appearing to float directly on the surface.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/retail-sign.webp')}}" class="card-img-center"
                                alt="Backlit Metal Letter Signs">
                            <div class="card-body pt-0">
                                <a href="#backlit-metal-letters" class="We-Elevate-Brands-title">Backlit Metal Letter Signs</a>
                                <p class="We-Elevate-Brands-text">Premium metal letter signs in luxury finishes like gold and chrome, featuring a subtle LED back-glow for elegant accent 
                                    lighting. Ideal for sophisticated interiors and well-lit corporate spaces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/outdoor-sign.webp')}}" class="card-img-center"
                                alt="Glittering Acrylic Letters">
                            <div class="card-body pt-0">
                                <a href="#glittering-acrylic" class="We-Elevate-Brands-title">Glittering Acrylic Letters</a>
                                <p class="We-Elevate-Brands-text">Sparkling crystal-accented 3D acrylic letters that create a luxurious, glittering effect. Ideal for adding festive bling 
                                    to jewellery stores, boutiques, and premium restaurants.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/neon-sign2.webp')}}" class="card-img-center"
                                alt="Vibrant Neon Signage">
                            <div class="card-body pt-0">
                                <a href="#neon-sign-board" class="We-Elevate-Brands-title">Vibrant Neon Signage</a>
                                <p class="We-Elevate-Brands-text">Vibrant neon signs with their iconic glow, perfect for creating a retro, high-energy atmosphere. Ideal for bars, lounges,
                                     and entertainment venues seeking standout visual appeal.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/dot-matrix.webp')}}" class="card-img-center"
                                alt="Open LED Dot Matrix Signs">
                            <div class="card-body pt-0">
                                <a href="#dot-led-matrix" class="We-Elevate-Brands-title">Open LED Dot Matrix Signs</a>
                                <p class="We-Elevate-Brands-text">Open Dot LED signs feature exposed, intensely bright pinpoints of light for maximum visibility. This bold, high-impact solution 
                                    ensures your shop front stands out, ideal for creating a flashy display.</p>
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


    <section class="new_custom-why-choose">
        <div class="container">
            <h2 class="text-center mb-5 new_custom-heading">Why Choose Brand Signages for LED <br>Light Name Boards?</h2>
            <div class="row justify-content-center g-4">

                <!-- Expertise -->
                <div class="col-md-4 justify-content-between d-flex flex-column">
                    <div class="new_custom-box new_custom-light-box d-flex flex-column justify-content-between ">
                        <p>Backed by years of hands-on experience, we specialize in <a
                                style="color: #000000ff;text-decoration: underline;"
                                href="/led-display-board-in-chennai"><strong>LED sign boards</strong></a> that blend
                            functionality
                            with creativity.
                            Our experts ensures every design aligns with your brand identity.</p>
                        <h4 class="new_custom-title">Expert Craftsmanship</h4>
                    </div>
                    <div class="why-choose-image-container">
                        <img src="{{ asset('frontend/Images/led-sign-board/hotwind-led-sign-board.webp') }}"
                            alt="why choose us as your LED Sign Board Partner" class="img-fluid mt-3">
                    </div>
                </div>

                <!-- Experience -->
                <div class="col-md-4">
                    <div class="new_custom-box new_custom-image-box"
                        style="background-image: url('{{ asset('frontend/Images/led-sign-board/optical-store-led-sign-board.webp') }}');">
                        <div class="new_custom-overlay">
                            <h4 class="new_custom-title text-white">Tailored Solution</h4>
                            <p class="text-white">We believe no two brands are the same. That’s why every <a
                                    style="color: #ffffffff;text-decoration: underline;"
                                    href="/led-sign-board-in-bangalore"><strong>LED name board</strong></a> we
                                design is fully customizable,
                                whether you need a sleek indoor display for a boutique or a high-visibility outdoor sign for
                                a corporate space.</p>
                        </div>
                    </div>
                </div>

                <!-- Excellence -->
                <div class="col-md-4 justify-content-between d-flex flex-column">
                    <div class="why-choose-image-container">
                        <img src="{{ asset('frontend/Images/led-sign-board/diner-led-sign-board.webp') }}"
                            alt="Outdoor LED sign board designed by our experts" class="img-fluid mb-3">
                    </div>
                    <div class="new_custom-box new_custom-light-box-3 d-flex flex-column justify-content-between">
                        <h4 class="new_custom-title">Superior Material</h4>
                        <p>We use only premium-grade acrylic, stainless steel, and advanced LED modules to ensure your
                            signage remains brilliant, long-lasting,
                            and energy-efficient. Each board is crafted to withstand time, weather, and constant visibility
                            demands.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="pricing">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">LED Sign Board Pricing & Size Options</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board/led-name-board-design-1.webp')}}"
                            alt="Rivetoile LED Name Board Design" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
    <p class="fs-20">
        The cost of an LED acrylic sign includes materials and installation. Since signs like an 8-ft shop 
        board or 20-ft sky sign can’t be handed over, we visit the site to measure the space accurately before 
        installation.
    </p>

    <p class="fs-20"><strong>Popular Size Options Include:</strong></p>
    <ul class="fs-20" style="padding-left: 18px;">
        <li><b>Small LED Boards:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹8,000 – ₹15,000)</li>
        <li><b>Medium LED Boards:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹18,000 – ₹35,000)</li>
        <li><b>Large LED Boards:</b> 4 ft x 8 ft (₹40,000 – ₹60,000)</li>
        <li><b>Custom Dimensions:</b> Depends on your design & customization.</li>
    </ul>

    <p class="fs-20">
        Each board is crafted with <b>high-quality materials</b>, <b>premium LEDs</b>, and weather-resistant finishes. 
        You can choose from different lighting styles, including <b>front-lit, backlit, edge-lit, or RGB color-changing LEDs</b>, 
        to match your brand’s identity. We discuss the best materials, help the customer visualize the final sign, and once specifications 
        are agreed.
    </p>

   <a href="https://brandsignages.com/contact-us" bis_skin_checked="1">
                            <button class="contact-btn">Book Order Now</button>
                        </a>
</div>


            </div>
        </div>
    </section>

        <section>
        <div class="container py-5">
            <h2 class="hero-title">From Query to Concept and Reality<br> Our Quote Process</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/home/our-quote-process.jpg')}}" alt="Digital Signage installed in retail space by Brand Signages"
                            class="img-fluid">
                    </div>
                </div>

             <div class="col-lg-6">

    <p class="fs-20">
        At <strong>Brand Signages</strong>, we make getting a signage quote simple and transparent:
    </p>

    <ol class="fs-20">
        <li><strong>Site Check:</strong> We visit your location to confirm measurements and assess installation feasibility.</li>
        <li><strong>Design & Artwork:</strong> Whether you have a ready design or just a logo, we create a layout that highlights your brand name, tagline, and identity.</li>
        <li><strong>Material Selection:</strong> Choose from our wide range of acrylic, ACP, and LED options with samples to guide your decision.</li>
        <li><strong>3D Preview:</strong> We provide a 3D render showing dimensions, materials, and lighting, so you know exactly how your sign will look.</li>
        <li><strong>Clear Quoting:</strong> With specifications and visuals in hand, you can compare options confidently and avoid surprises at installation.</li>
    </ol>

    <p class="fs-20">
        At <strong>Brand Signages</strong>, we combine clarity, quality, and design to deliver signage that perfectly represents your brand.
    </p>

</div>
            </div>
        </div>
    </section>



 

        <section class="new-recent-works">
        <div class="container">
            <h2 class="hero-title  mb-6">Our Recent Sign Board Projects</h2>
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

       <section>
        <div class="container pt-5" id="">
            <h2 class="hero-title  mb-4">Endless Options for Shop Sign Boards</h2>
                <p class="fs-20">
                        Shop boards today come in an astonishing variety of styles, colours, and materials. Acrylic sheets, for instance, are available in multiple shades and thicknesses, while LEDs can range from warm-white to crisp white, giving store owners plenty of flexibility. But the options don’t stop there; modern sign boards offer:<br></p>
                        <ul class="fs-20">
                        <li>Vibrant neon and fluorescent colors</li>
                        <li>Flashing or dynamic light effects</li>
                        <li>Powerful spotlight illumination</li>
                        <li>Programmable RGB LED lighting</li>
                        </ul>
                        <p class="fs-20">
                        With these materials and lighting options, skilled signmakers can design eye-catching shop boards in countless shapes and sizes, making your storefront truly unique.
                        Many of these feature <b>striking 3D designs</b>, with letters and logos projecting 2–3 inches from the base. We also display sleek, <b>2D stencil-cut boards</b> where the letters are seamlessly carved into the ACP base.<br><br>
                        For those looking beyond acrylic, metal letter boards are also available in elegant finishes such as gold, chrome, copper, rose gold, and brushed textures.</p> 
                        <p class="fs-20">
                        Larger installations like Sky Signs, designed for rooftops or tall buildings, are crafted from more robust materials to withstand exposure and weather.<br><br>
                        For a more dramatic, festive look ideal for restaurants or nightclubs, our exotic options include <strong>crystal-studded letters</strong>, <strong>Open Dot LED illumination</strong>, and flexible <strong>neon LED rope designs</strong>. With 
                        so many combinations of colours, materials, and lighting, the possibilities are limited only by imagination.</p>

                        <h3 class="mb-4"><strong>Choosing the Right Shop Board for Your Business</strong></h3>
                        <p class="fs-20">
                        Selecting the ideal signage for your store is crucial, as the right design can set the tone for your brand. Today, businesses can choose from a variety of acrylic glow signboards and premium LED options:</p>
                        <ul class="fs-20">
                        <li><b>Lit or non-lit boards:</b> Depending on whether you want your sign to stand out day and night.</li>
                        <li><b>3D letters and logos:</b> Crafted from acrylic or metal for a premium, tactile appearance.</li>
                        <li><b>2D signage:</b> Where designs are printed on vinyl or flex for a sleek, modern look.</li>
                        </ul>
                        <p class="fs-20">With so many possibilities, it’s normal to feel overwhelmed. That’s why our team is here to guide you in selecting the signboard that perfectly matches your business’s personality and goals.</p>

                        <h3 class="mb-4"><strong>Materials Used in Modern 3D Shop Boards</strong></h3>
                        <p class="fs-20">
                        Every high-quality signboard generally consists of three main elements:<br>
                        <ul class="fs-20">
                        <li><strong>The Base Structure</strong> – Typically a sturdy metal frame or box. We often use ACP (Aluminium Composite Panel) for a sleek, durable foundation.</li>
                        <li><strong>The Letters or Logos</strong> – Usually crafted from polished acrylic for a glass-like, high-end finish.</li>
                        <li><strong>Lighting Elements</strong> – Embedded LEDs bring the letters to life, producing a variety of colours and effects.</li>
                        </ul>
                            <div class="image-item material-img" style="text-align:center;">
                                <img src="/frontend/Images/led-sign-board/material-specifications.jpg" 
                                    alt="3D Acrylic LED Sign Board - Material Specifications">
                                <p>3D Acrylic LED Sign Board - Material Specifications</p>
                            </div>

                        <p class="fs-20">For a deep dive into these materials, their construction, and the process behind modern 3D signboards, you can explore the detailed section at the end of this page. It’s a fascinating look at how creativity and technology combine to make storefronts stand out.
                        </p>

        </div>
    </section>
    
           <section>
        <div class="container pt-5" id="">
            <h2 class="hero-title  mb-4">Different Types of LED ACP Acrylic Glow Signs</h2>
                    <p class="fs-20">Explore a detailed explanation and photos of different kinds of LED ACP Acrylic Glow Sign Boards, showcasing the variety of designs, materials, and lighting effects that modern signmakers offer. 
                        From sleek 3D letters to vibrant neon-lit displays, each signboard demonstrates unique ways to enhance a storefront’s appeal and attract customers day and night.</p>

                    <h3 id="3d-acrylic-letter" class="mb-4"><strong>1. 3D Acrylic Letter Embossed on ACP Frames</strong></h3>
                    <p class="fs-20">
                    One of the most popular choices among store owners is the 3D acrylic letter sign mounted on an ACP (Aluminium Composite Panel) base. These signboards combine depth, illumination, and premium aesthetics, making a storefront instantly eye-catching.
                    </p>

                    <h3 class="mb-4"><strong>Features of a 3D Acrylic Letter Signboard</strong></h3>
                    <ul class="fs-20">
                    <li>Letters or logos are crafted from acrylic and typically extend 2–3 inches in depth, creating a strong three-dimensional effect.</li>
                    <li>LEDs are carefully installed inside the hollow acrylic letters, ensuring even illumination from within.</li>
                    <li>The acrylic letters are mounted onto a sturdy ACP frame, providing structural support and a polished backdrop.</li>
                    <li>The completed board is then securely installed on the store façade, resulting in a professional, high-end display.</li>
                    </ul>

                    <p class="fs-20">
                    These signs can take many forms: a sleek white ACP panel with golden letters, vibrant neon-colored letters on a black frame, or custom multi-coloured logos tailored to a brand’s identity. From jewellery stores to <a style="color: #E43D12;text-decoration: none;" href="blogs/cloth-saree-shop-name-board-design-trends-for-2025-a-detailed-guide"><strong>clothing outlets</strong></a>, and from food chains to boutique shops, these boards are versatile and adaptable to any retail environment.
                    </p>
                        <div class="image-grid">
                            <div class="image-item">
                                <img src="/frontend/Images/led-sign-board/3d-acrylic-letters-mounted-on-acp-base-frame.webp" 
                                    alt="Acrylic LED Mounted on ACP Frame">
                                <p>Acrylic LED Mounted on ACP Frame (e.g., Acrylic glow sign mounted on wall)</p>
                            </div>
                            <div class="image-item">
                                <img src="/frontend/Images/led-sign-board/3d-acrylic-letters-mounted-on-acp-base-frame-2.webp" 
                                    alt="Acrylic LED Mounted on ACP Frame">
                                <p>Acrylic LED Mounted on ACP Frame (e.g., 3D Glow Letter LED board)</p>
                            </div>
                        </div>
                        <div class="image-grid">
                            <div class="image-item">
                                <img src="/frontend/Images/led-sign-board/acrylic-leter-acp-3.webp" 
                                    alt="Acrylic LED Mounted on ACP Frame">
                                <p>Acrylic LED Mounted on ACP Frame (e.g., Acrylic glow sign mounted on Storefront)</p>
                            </div>
                            <div class="image-item">
                                <img src="/frontend/Images/led-sign-board/acrylic-leter-acp-4.webp" 
                                    alt="Acrylic LED Mounted on ACP Frame">
                                <p>Acrylic LED Mounted on ACP Frame (e.g., Acrylic glow sign mounted on Storefront)</p>
                            </div>
                        </div>


                    <h3 class="mb-4"><strong>How 3D Acrylic Letters Are Created</strong></h3>
                    <p class="fs-20">
                    The process begins with the client providing a design layout or artwork that defines the shape, size, and style of the letters or logos. Using advanced laser cutting machines, these designs are precisely cut from flat acrylic sheets that typically range from 3 mm to 5 mm in thickness.
                    </p>
                    <p class="fs-20">
                    Next, the sides of each letter are built using a technique called skirting. This involves attaching a vertical acrylic border around the perimeter of the flat letter, creating a hollow box-like structure. The skirting usually measures between 2.5 and 3 inches in depth, giving the letters their characteristic 3D effect.
                    </p>
                    <p class="fs-20">
                    Once the hollow letters are ready, LED modules are inserted inside. The acrylic material allows light to diffuse beautifully through the front and sides of the letters, producing a uniform glow.
                    </p>
                    <p class="fs-20">
                    Finally, the illuminated letters are mounted onto the ACP frame, which acts as both the foundation and the design backdrop. The completed board is then installed on the storefront, creating a stunning visual centerpiece.
                    </p>

                    <h3 class="mb-4"><strong>Day and Night Impact</strong></h3>
                    <p class="fs-20">
                    The appeal of these signboards lies in their dual effect:
                    </p>
                    <ul class="fs-20">
                    <li><strong>Daytime:</strong> The 3D letters stand out prominently against the ACP panel, projecting depth and elegance. Even without lighting, they convey a premium, professional look.</li>
                    <li><strong>Nighttime:</strong> When illuminated, the embedded LEDs transform the board into a vibrant, glowing display, instantly attracting attention and enhancing brand visibility.</li>
                    </ul>

                    <p class="fs-20">
                    With endless options for acrylic and ACP colours, finishes, and lighting styles, each 3D signboard can be uniquely tailored to reflect a brand’s personality while creating a lasting impression on customers.
                    </p>

                    <h3 id="3d-acrylic-channel-letter" class="mb-4"><strong>2. 3D Acrylic Aluminum Channel Letters</strong></h3>
                            <p class="fs-20">
                            Channel letter signboards are a popular alternative to traditional acrylic box letters, offering a sleek and modern look while maintaining the 3D depth and LED illumination that draws attention. While these signs share similarities with acrylic box letters, their construction has a key difference:
                            </p>
                            <p class="fs-20">
                            In channel letter boards, the sidewalls of each letter are made from metal rather than acrylic. This means only the front surface of the letter lights up, creating a distinctive glow that contrasts beautifully with the metallic edges.
                            </p>
                            <p class="fs-20">
                            Channel letters can be customized in a variety of styles black letters mounted on a metal frame, acrylic-front letters with golden or silver sides, or multi-coloured combinations mounted on wooden or ACP back panels. These designs are versatile enough for boutique shops, jewellery outlets, and restaurants alike, giving each storefront a refined, contemporary appearance.
                            </p>
                                <div class="image-grid">
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/acrylic-aluminum-letters-1.webp" 
                                            alt="Acrylic LED Mounted on ACP Frame (e.g., Acrtlic LED Mouned on Shop)">
                                        <p>Acrylic LED Mounted on ACP Frame (e.g., Acrtlic LED Mouned on Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/aluminum-channel-letters-acp-2.webp" 
                                            alt="Acrylic LED Mounted on ACP Frame (e.g., Acrtlic LED Mouned on Shop)">
                                        <p>Aluminium Channel Letter on ACP Base Frame (e.g., Acrtlic LED Mouned on Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/aluminum-channel-letters-acp-3.webp" 
                                            alt="Acrylic LED Mounted on ACP Frame (e.g., Acrtlic LED Mouned on Shop)">
                                        <p>Aluminium Channel Letter on ACP Base Frame (e.g., Acrtlic LED Mouned on Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/aluminum-channel-letters-acp-5.webp" 
                                            alt="Acrylic LED Mounted on ACP Frame (e.g., Acrtlic LED Mouned on Shop)">
                                        <p>Aluminium Channel Letter on ACP Base Frame (e.g., size view & front view of letters)</p>
                                    </div>
                                </div>


                            <h3 class="mb-4"><strong>How Channel Letters Are Made</strong></h3>
                            <p class="fs-20">
                            The process begins with the fabrication of the side profile, known as the aluminium channel or “channel patti.” A 3-inch thick aluminium strip is bent into the shape of the letter using specialized bending machinery.
                            </p>
                            <p class="fs-20">
                            Once the channel is ready, a laser-cut acrylic sheet is mounted on the front of the letter. LEDs are installed behind the acrylic to provide a clean, focused illumination from the front. Because the sides are metallic, the light does not pass through, giving the letters a sharp, polished look during the day and a striking glow at night.
                            </p>

                            <h3 class="mb-4"><strong>Day and Night Appearance</strong></h3>
                            <p class="fs-20">
                            Channel letter boards are designed to offer both aesthetic appeal and functionality:
                            </p>
                            <ul class="fs-20">
                            <li><strong>Daytime:</strong> The metallic sides and crisp front-facing acrylic create a premium, professional appearance. Even without lighting, the signboard looks sophisticated and eye-catching.</li>
                            <li><strong>Nighttime:</strong> The LEDs illuminate the front surface of each letter, producing a radiant glow that highlights the brand while keeping the sleek metallic finish intact.</li>
                            </ul>

                            <p class="fs-20">
                            Choosing between full acrylic box letters or aluminium channel letters largely depends on your priorities. If you want a strong front-facing glow with a metallic, elegant look during the day, channel letters are ideal. For those who prefer the entire 3D letter to emit light from all sides, acrylic box letters are the better choice.
                            </p>

                              <h3 id="wall-mounted-led-letter" class="mb-4"><strong>3. Acrylic Glow Sign Boards (Stand-Alone Letters)</strong></h3>
                                    <p class="fs-20">
                                        Acrylic glow sign boards are a classic choice for businesses looking to make their name shine literally. Traditionally, acrylic letters are mounted on an aluminium composite (ACP) base. But increasingly, customers prefer a cleaner look, where the letters are mounted directly on walls or existing metal frames, removing the need for a bulky base.
                                    </p>
                                    <p class="fs-20">
                                        Imagine a premium granite wall in a luxury restaurant. Covering it with an ACP panel would hide the elegance of the granite. Instead, installing acrylic letters directly on the wall preserves the premium feel while still providing a radiant glow.
                                    </p>
                                    <div class="image-grid">
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/acrylic-glow-sign-board-1.webp" 
                                            alt="crylic Glow Sign Boards (e.g., Acrylic Glow Sign Board mounted on Juice Bar)">
                                        <p>Acrylic Glow Sign Boards (e.g., Acrylic Glow Sign Board mounted on Juice Bar)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/acrylic-glow-sign-board-2.webp" 
                                            alt="Acrylic Glow Sign Boards (e.g., Acrylic Glow Sign Boards Jewellery Shop)">
                                        <p>Acrylic Glow Sign Boards (e.g., Acrylic Glow Sign Boards Jewellery Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/acrylic-glow-sign-board-3.webp" 
                                            alt="Acrylic Glow Sign Boards (e.g., Acrylic Glow Sign Boards mounted on Shop)">
                                        <p>Acrylic Glow Sign Boards (e.g., Acrylic Glow Sign Boards mounted on Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/acrylic-glow-sign-board-4.webp" 
                                            alt="Aluminium Channel Letter on ACP Base Frame">
                                        <p>Acrylic Glow Sign Boards (e.g., Acrylic Glow Sign Boards mounted on Shop)</p>
                                    </div>
                                </div>
                                    <p class="fs-20">
                                        Stand-alone letters are also ideal when a sign is mounted on an existing steel frame or hanging from the ceiling in a mall or boutique. The letters appear to float, adding a striking aesthetic to storefronts and enhancing the brand’s presence.
                                    </p>

                                    <h3 class="mb-4"><strong>Key Considerations for Stand-Alone Acrylic Letters</strong></h3>
                                    <ul>
                                        <li class="fs-20"><strong>Power Supply:</strong> Each letter has LEDs inside, so wiring must be carefully routed. When mounted without a base, wires are hidden by drilling holes in the wall or using the hollow frame structure.</li>
                                        <li class="fs-20"><strong>Material Strength:</strong> Without a solid ACP backing, letters must be made from thicker acrylic (5 mm instead of the standard 3 mm). The back surface is reinforced with metal or ACP for stability.</li>
                                    </ul>
                                    <p class="fs-20">
                                        This careful approach ensures durability, especially in high-rise buildings where wind can be a real concern. A strong, robust installation is not just cosmetic it’s about safety.
                                    </p>

                                    <h3 id="stencil-cut-acrylic-letter" class="mb-4"><strong>4. 2D Stencil Cut Letters in ACP Frame</strong></h3>
                                    <p class="fs-20">
                                        Not all signs need to protrude. Sometimes, a flat, two-dimensional design is more suitable. In 2D stencil cut boards, acrylic letters are cut to fit perfectly within the ACP sheet, creating a sleek, flush appearance. LEDs placed behind the letters illuminate them without adding depth.
                                    </p>
                                    <p class="fs-20">
                                        Think of it like cutting shapes from paper in an arts-and-crafts class. The letter “A” is precisely carved out of the ACP sheet, and a matching acrylic piece slides in. LEDs behind the letter make it glow. The result is a clean, polished board with a subtle 2D effect.
                                    </p>
                                    <div class="image-grid">
                                        <div class="image-item">
                                            <img src="/frontend/Images/led-sign-board/2d-stencil-cut-letters-2.webp" 
                                                alt="2D Stencil Cut Acrylic LED Letters (e.g., Acrylic Glow Sign Board mounted on Shop Front)">
                                            <p>2D Stencil Cut Acrylic LED Letters (e.g., Acrylic Glow Sign Board mounted on Shop Front)</p>
                                        </div>
                                        <div class="image-item">
                                            <img src="/frontend/Images/led-sign-board/2d-stencil-cut-letters-3.webp" 
                                                alt="2D Stencil Cut Acrylic LED Letters (e.g., Acrylic Glow Sign Board mounted on Shop Front)">
                                            <p>2D Stencil Cut Acrylic LED Letters (e.g., Acrylic Glow Sign Board)</p>
                                        </div>
                                    </div>


                                    <h3 class="mb-4"><strong>When 2D Stencil Cut Works Best</strong></h3>
                                    <ul>
                                        <li class="fs-20"><strong>Cost Efficiency:</strong> 2D letters are cheaper to produce than 3D letters.</li>
                                        <li class="fs-20"><strong>Aesthetic Control:</strong> Designers can mix 3D and 2D elements, giving logos and names more prominence while keeping secondary details subtle.</li>
                                        <li class="fs-20"><strong>Indoor Use:</strong> Perfect for areas where letters protruding too much could be a hazard, like bars or reception areas.</li>
                                        <li class="fs-20"><strong>Narrow Fonts:</strong> Thin or intricate fonts that can’t accommodate LEDs in 3D are ideal for stencil cut letters.</li>
                                    </ul>

    <h3 id="backlit-metal-letters" class="mb-4"><strong>5. Metal Letter Sign Boards – Subtle Luxury for Your Brand</strong></h3>
    <p class="fs-20">
        While most LED acrylic signboards rely on acrylic to diffuse light, there are occasions when sheer elegance and premium appearance matter more than illumination. This is where metal letter boards shine.
    </p>
    <p class="fs-20">
        Metal letters are typically made from stainless steel, aluminum, or iron and can be anodized or polished to achieve finishes like gold, rose gold, copper, chrome, or brushed metal. These signs exude sophistication, making them a perfect choice for luxury hotels, premium retail stores, or corporate offices where subtlety matters more than a glowing effect.
    </p>
                                        <div class="image-grid">
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/metal-letter-boards-1.webp" 
                                            alt="Metal Letter Boards for Shop (e.g., Metal Leter Board Mounted on Juice Shop)">
                                        <p>Metal Letter Boards for Shop (e.g., Metal Leter Board Mounted on Juice Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/metal-letter-boards-2.webp" 
                                            alt="Metal Letter Boards for Shop (e.g., Metal Leter Board Mounted on Shop)">
                                        <p>Metal Letter Boards for Shop (e.g., Metal Leter Board Mounted on Garments Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/metal-letter-boards-3.webp" 
                                            alt="Metal Letter Boards for Shop (e.g., Metal Leter Board Mounted on Shop)">
                                        <p>Metal Letter Boards for Shop (e.g., Metal Leter Board Mounted on Jewellery Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/metal-letter-boards-4.webp" 
                                            alt="Metal Letter Boards for Shop (e.g., Metal Leter Board Mounted on Juice Shop)">
                                        <p>Metal Letter Boards for Shop (e.g., Metal Leter Board Mounted on Jewellery Shop)</p>
                                    </div>
                                </div>

    <h3 class="mb-4"><strong>Advantages of Metal Letter Boards:</strong></h3>
    <ul>
        <li class="fs-20"><strong>Unmatched Aesthetics:</strong> Anodized or polished metal letters offer a rich, high-end look that acrylic alone cannot match.</li>
        <li class="fs-20"><strong>Durability:</strong> Metal letters resist corrosion, wear, and discoloration, ensuring long-term visual appeal.</li>
    </ul>

    <p class="fs-20"><strong>Limitations:</strong></p>
    <p class="fs-20">
        Metal is opaque, so these signs cannot be backlit through the letters themselves. To overcome this, designers create a back glow effect by raising the letters slightly from the wall and installing flexible LED strips behind them. The letters themselves remain dark, while the light spills around them, creating a subtle halo that emphasizes the sign’s elegance.
    </p>

    <p class="fs-20"><strong>Use Cases:</strong></p>
    <ul>
        <li class="fs-20">Lobby signage in hotels, <a style="color: #E43D12;text-decoration: none;" href="blogs/medical-shop-name-board-design-modern-styles-trends-best-practices"><strong>medical shops</strong></a>, and premium offices</li>
        <li class="fs-20">High-end restaurant nameboards</li>
        <li class="fs-20">Boutique and <a style="color: #E43D12;text-decoration: none;" href="blogs/jewellery-shop-name-board-design-stunning-ideas-to-elevate-your-storefront"><strong>jewelry store signs</strong></a></li>
    </ul>

    <h3 id="glittering-acrylic" class="mb-4"><strong>6. 3D Crystal Letter LED Boards – Glitter and Glamour</strong></h3>
    <p class="fs-20">
        For businesses that demand extra sparkle, 3D Crystal Letter LED boards are the ultimate choice. Unlike standard acrylic letters, these boards use hundreds to thousands of tiny glass crystals that scatter LED light in multiple directions. The result is a glittering, almost chandelier-like effect that immediately draws attention.
    </p>

    <h3 class="mb-4"><strong>How They’re Made:</strong></h3>
    <ul>
        <li class="fs-20">The front of the letter is made of transparent acrylic.</li>
        <li class="fs-20">Small glass crystals are attached behind this acrylic sheet.</li>
        <li class="fs-20">Another acrylic layer is added behind the crystals to hold them in place.</li>
        <li class="fs-20">LEDs are installed underneath, and their light is refracted through the crystals, creating a dazzling sparkle.</li>
    </ul>
         <div class="image-grid">
                                        <div class="image-item">
                                            <img src="/frontend/Images/led-sign-board/crystal-letter-led-1.webp" 
                                                alt="3D Crystal Letter LED Sign Board (e.g., D Crystal Letter LED Sign mounted on Shop Front)">
                                            <p>3D Crystal Letter LED Sign Board (e.g., D Crystal Letter LED Sign mounted on Shop Front)</p>
                                        </div>
                                        <div class="image-item">
                                            <img src="/frontend/Images/led-sign-board/crystal-letter-board-2.webp" 
                                                alt="3D Crystal Letter LED Sign Board (e.g., Crystal Letter LED Sign Board)">
                                            <p>3D Crystal Letter LED Sign Board (e.g., Crystal Letter LED Sign Board)</p>
                                        </div>
                                    </div>

    <h3 class="mb-4"><strong>Why Jewelers and Retailers Love Crystal Letters:</strong></h3>
    <ul>
        <li class="fs-20">They resemble diamonds or precious stones, perfectly complementing the luxury products on display.</li>
        <li class="fs-20">Letter edges are often finished with metallic gold, rose gold, or silver, giving a premium, multi-dimensional look.</li>
    </ul>

    <p class="fs-20">
        Ideal for high-end <a style="color: #E43D12;text-decoration: none;" href="blogs/cloth-saree-shop-name-board-design-trends-for-2025-a-detailed-guide"><strong>clothing stores</strong></a>, hotels, and jewelry boutiques.
    </p>

    <section id="sky-signs">
    <h3 class="mb-4"><strong>7. Sky Sign Board – Taking Your Brand to New Heights</strong></h3>
    <p class="fs-20">
        Sky Signs are a specialized form of large-format, elevated signage designed to be installed on tall buildings or skyscrapers. Unlike typical storefront signage, sky signs are visible from great distances and can become landmark identifiers for a city skyline.
    </p>

    <h3 class="mb-4"><strong>Why Sky Signs Are Unique:</strong></h3>
    <ul>
        <li class="fs-20"><strong>Size & Visibility:</strong> Letters for sky signs can range from 6 to 12 feet or even taller. At such heights, conventional 2–3 foot signage becomes invisible, so scale is a key consideration.</li>
        <li class="fs-20"><strong>Material Strength:</strong> Aluminium channel letters with thicker profiles are commonly used to prevent warping or bending. Acrylic fronts are often 5 mm thick to resist cracking in harsh weather.</li>
        <li class="fs-20"><strong>Weatherproofing:</strong> LEDs, wiring, and power supplies are chosen for IP67 waterproof ratings to ensure functionality even in heavy rains or extreme sunlight.</li>
    </ul>
                        <div class="image-grid">
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/sky-sign-board-1.webp" 
                                            alt="Sky Sign Board Boards (e.g., Sky Sign Mounted on Hotel)">
                                        <p>Sky Sign Board Boards (e.g., Sky Sign Mounted on Hotel)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/sky-sgn-board-2.webp" 
                                            alt="Sky Sign Board Boards (e.g., Sky Sign Mounted on Corporate Building)">
                                        <p>Sky Sign Board Boards (e.g., Sky Sign Mounted on Corporate Building)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/sky-sgn-board-3.webp" 
                                            alt="Sky Sign Board Boards (e.g., Sky Sign Mounted on Corporate Building)">
                                        <p>Sky Sign Board Boards (e.g., Sky Sign Mounted on Corporate Building)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/sky-sign-board-4.webp" 
                                            alt="Sky Sign Board Boards (e.g., Sky Sign Mounted on Corporate Building)">
                                        <p>Sky Sign Board Boards (e.g., Sky Sign Mounted on Corporate Building)</p>
                                    </div>
                                </div>

    <h3 class="mb-4"><strong>Challenges in Sky Sign Installation:</strong></h3>
    <ul>
        <li class="fs-20">Accessing elevated positions often requires cranes, scaffolding, or rope-suspended platforms, increasing project complexity.</li>
        <li class="fs-20">The letters’ exposure to high-speed winds demands additional structural reinforcement.</li>
        <li class="fs-20">Weatherproofing electronic components is critical to prevent short circuits, corrosion, and potential fire hazards.</li>
    </ul>

    <h3 class="mb-4"><strong>Sky Signs in Action:</strong></h3>
    <ul>
        <li class="fs-20">Each letter is fabricated to be structurally robust, combining aluminium frames with thick acrylic fronts.</li>
        <li class="fs-20">LED modules are strategically embedded for both front and back glow effects, ensuring visibility day and night.</li>
        <li class="fs-20">Experienced installation teams use cranes, rope platforms, and safety scaffolding to secure signs on tall buildings efficiently and safely.</li>
    </ul>

    <h3 class="mb-4"><strong>Why Sky Signs Matter for Your Brand:</strong></h3>
    <ul>
        <li class="fs-20"><strong>Maximum Visibility:</strong> Installed atop skyscrapers, these signs are visible from kilometers away, turning your brand into a city landmark.</li>
        <li class="fs-20"><strong>Brand Prestige:</strong> Sky signs convey authority, credibility, and long-term presence, signaling that your brand is established and ambitious.</li>
        <li class="fs-20"><strong>Creative Freedom:</strong> With large-scale dimensions, sky signs allow for bold typography, vibrant lighting, and even 3D logo effects, creating a lasting visual impact.</li>
    </ul>


            <h3 id="dot-led-matrix" class="mb-4"><strong>8. Open Dot LED Boards – Maximum Brightness and Impact</strong></h3>
            <p class="fs-20">
                Unlike traditional LED signs where lights are hidden, Open Dot LED boards expose each LED module directly, creating a bold and brilliant effect. These boards are also known as Spot LED boards, because each LED acts like a pinpoint of intense light.
            </p>

            <h3 class="mb-4"><strong>Key Features:</strong></h3>
            <ul>
                <li class="fs-20"><strong>Intense Illumination:</strong> With hundreds or thousands of exposed LEDs, these signs can outshine surrounding street lights.</li>
                <li class="fs-20"><strong>Dynamic Effects:</strong> Using RGB LEDs and programmable drivers, the lights can display cascading colors, patterns, and animations.</li>
                <li class="fs-20"><strong>Custom Fabrication:</strong> Acrylic or metal letters are drilled with small holes, and individual LEDs are inserted on top, allowing the light to shine directly and unfiltered.</li>
            </ul>
            <div class="image-grid">
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/open-dot-led-sign-1.webp" 
                                            alt="Open Dot LED Sign Board Boards (e.g., Open Dot LED Sign Board Board for Shop)">
                                        <p>Open Dot LED Sign Board Boards (e.g., Open Dot LED Sign Board Board for Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/open-dot-led-sign-2.webp" 
                                            alt="Open Dot LED Sign Board Boards (e.g., Open Dot LED Sign Board Board for Shop)">
                                        <p>Open Dot LED Sign Board Boards (e.g., Open Dot LED Sign Board Board for Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/open-dot-led-sign-3.webp" 
                                            alt="Open Dot LED Sign Board Boards (e.g., Open Dot LED Sign Board Board for Shop)">
                                        <p>Open Dot LED Sign Board Boards (e.g., Open Dot LED Sign Board Board for Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/open-dot-led-sign-4.webp" 
                                            alt="Open Dot LED Sign Board Boards (e.g., Open Dot LED Sign mounted on Hotel)">
                                        <p>Open Dot LED Sign Board Boards (e.g., Open Dot LED Sign mounted on Hotel)</p>
                                    </div>
                                </div>

            <p class="fs-20"><strong>Applications:</strong></p>
            <ul>
                <li class="fs-20"><a style="color: #E43D12;text-decoration: none;" href="blogs/jewellery-shop-name-board-design-stunning-ideas-to-elevate-your-storefront"><strong>Jewelry stores</strong></a>, <a style="color: #E43D12;text-decoration: none;" href="blogs/best-tea-shop-name-board-design-trends-to-attract-customers-in-2025"><strong>tea & cafe outlets</strong></a>, and premium retail outlets for high visibility</li>
                <li class="fs-20">Brand promotions and event signage that require attention-grabbing brilliance</li>
                <li class="fs-20">Businesses in areas with dim lighting where maximum visibility is crucial</li>
            </ul>

            <h3 class="mb-4"><strong>Why Choose Brand Signages:</strong></h3>
            <ul>
                <li class="fs-20">LEDs are securely installed for safety and longevity</li>
                <li class="fs-20">Light distribution is optimized for a uniform, dazzling effect</li>
                <li class="fs-20">Advanced RGB programming creates dynamic visual experiences</li>
            </ul>

            <p class="fs-20"><strong>In short:</strong></p>
            <ul>
                <li class="fs-20"><strong>Metal Letter Boards:</strong> Elegant and premium, perfect for understated luxury.</li>
                <li class="fs-20"><strong>3D Crystal Letter LED Boards:</strong> Glittering and glamorous, ideal for jewelry and high-end retail.</li>
                <li class="fs-20"><strong>Open Dot LED Boards:</strong> Ultra-bright and dynamic, perfect for maximum visibility and dramatic impact.</li>
            </ul>

            <p class="fs-20">
                Each type of board serves a distinct purpose, allowing businesses to choose a signage solution that aligns with their brand personality, location, and desired visibility.
            </p>

 
    <h3 class="mb-4"><strong>9. In-Cut Letters on an ACP Frame</strong></h3>
    <p class="fs-20">
        In-Cut Acrylic Letters are a premium signage option that combines elegance with a subtle 3D effect. While similar to Stencil Cut Letters, the primary difference lies in how the letters protrude slightly from the base panel, creating depth and visual interest.
    </p>
    <p class="fs-20">
        In this method, laser-cut acrylic letters are inserted into matching cutouts on an ACP (Aluminium Composite Panel) sheet. The result is a flush fit or a slightly raised effect, depending on the thickness of the acrylic used. For example, if a 10 mm thick acrylic letter is placed in a 3 mm deep ACP cavity, the letter protrudes approximately 7 mm, adding a noticeable dimension to the board. This subtle 3D effect enhances the letter’s edge glow when backlit with LEDs, making the sign more eye-catching than standard flat designs.
    </p>              
                            <div class="image-grid">
                                        <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/in-cut-acp-frame-1.webp" 
                                            alt="In-cut Acrylic Letters on an ACP Frame (e.g., In-cut Acrylic Letters on an ACP Frame for Shop)">
                                        <p>In-cut Acrylic Letters on an ACP Frame (e.g., In-cut Acrylic Letters on an ACP Frame for Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/in-cut-acp-frame-2.webp" 
                                            alt="In-cut Acrylic Letters on an ACP Frame (e.g., In-cut Acrylic Letters on an ACP Frame for Shop)">
                                        <p>In-cut Acrylic Letters on an ACP Frame (e.g., In-cut Acrylic Letters on an ACP Frame for Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/in-cut-acp-frame-3.webp" 
                                            alt="In-cut Acrylic Letters on an ACP Frame (e.g., In-cut Acrylic Letters on an ACP Frame for Shop)">
                                        <p>In-cut Acrylic Letters on an ACP Frame (e.g., In-cut Acrylic Letters on an ACP Frame for Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/in-cut-acp-frame-4.webp" 
                                            alt="In-cut Acrylic Letters on an ACP Frame (e.g., In-cut Acrylic Letters on an ACP Frame for Shop)">
                                        <p>In-cut Acrylic Letters on an ACP Frame (e.g., In-cut Acrylic Letters on an ACP Frame for Shop)</p>
                                    </div>
                                </div>

    <h3 class="mb-4"><strong>Visual Appeal & Flexibility:</strong></h3>
    <p class="fs-20">
        In-Cut letters not only emit a front glow but also create a soft glow along the edges due to the slight protrusion. This makes them perfect for creating signage with varying depths, adding a luxurious look for indoor and outdoor use. They are particularly effective for intricate fonts and designs where thin lines and detailed typography need to stand out.
    </p>

    <h3 class="mb-4"><strong>Choosing Between Stencil Cut and In-Cut Letters:</strong></h3>
    <p class="fs-20">
        The choice ultimately comes down to aesthetics and design goals. While both options allow for backlighting, In-Cut letters create more dimension and an enhanced edge glow, making them ideal for premium shopfronts, offices, or brand displays that require a sophisticated appearance.
    </p>

    <h3 class="mb-4"><strong>Practical Applications:</strong></h3>
    <ul>
        <li class="fs-20">High-end retail shop boards and <a style="color: #E43D12;text-decoration: none;" href="blogs/creative-tailoring-shop-name-board-design-ideas-to-elevate-your-brand-in-2025"><strong>tailoring shop board</strong></a></li>
        <li class="fs-20">Hotel and restaurant signage</li>
        <li class="fs-20">Corporate office nameboards</li>
        <li class="fs-20">Indoor wayfinding or decorative panels</li>
    </ul>


    <h3 id="neon-sign-board" class="mb-4"><strong>10. Neon Sign Boards – Eye-Catching & Energy Efficient</strong></h3>
    <p class="fs-20">
        Neon signs are a distinct category of LED acrylic signage, inspired by the traditional neon glass tubes that were popular decades ago. Classic neon signs used glass tubes filled with noble gases like neon, argon, helium, or xenon, which emitted bright, fluorescent colors when electrified. These colors were attention-grabbing and gave a fun, party-like vibe to any space.
    </p>
    <p class="fs-20">
        However, traditional neon had several downsides:
    </p>
    <ul>
        <li class="fs-20"><strong>High maintenance:</strong> Glass tubes were fragile and prone to breakage.</li>
        <li class="fs-20"><strong>Gas leakage:</strong> Over time, gas often escaped, causing flickering or dark letters.</li>
        <li class="fs-20"><strong>High energy consumption:</strong> Neon lights consumed significant electricity, making them expensive to operate.</li>
    </ul>
    <p class="fs-20">
        Anyone who has seen a neon letter flicker or go dark knows the frustration these signs could cause. Yet, despite these issues, neon lights were highly effective at drawing attention in bars, lounges, restaurants, salons, and entertainment venues.
    </p>
     <div class="image-grid">
                                        <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/neon-sign-board-1.webp" 
                                            alt="Neon Sign Board for Juice Bar (e.g., Neon Sign Board Exclusively Designed for Juice Shop)">
                                        <p>Neon Sign Board for Juice Bar (e.g., Neon Sign Board Exclusively Designed for Juice Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/seon-sign-board-2.webp" 
                                            alt="In-cut Acrylic Letters on an ACP Frame (e.g., In-cut Acrylic Letters on an ACP Frame for Shop)">
                                        <p>Neon Sign Board for Coffee Shop (e.g., Neon Sign Board Exclusively Designed for Coffee Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/neon-sign-board-3.webp" 
                                            alt="Neon Sign Board for Gaming Shop (e.g., Neon Sign Board Exclusively Designed for Gaming Shop)">
                                        <p>INeon Sign Board for gaming Shop (e.g., Neon Sign Board Exclusively Designed for Gaming Shop)</p>
                                    </div>
                                    <div class="image-item">
                                        <img src="/frontend/Images/led-sign-board/neon-sign-board-4.webp" 
                                            alt="Neon Sign Board Sample Designs for Shop (e.g., Neon Sign Board Sample Designs for Shop)">
                                        <p>Neon Sign Board Sample Designs for Shop (e.g., Neon Sign Board Sample Designs for Shop)</p>
                                    </div>
                                </div>

    <h3 class="mb-4"><strong>Modern Solution: LED Neon Ropes</strong></h3>
    <p class="fs-20">
        With advances in LED technology, LED neon ropes have replaced traditional glass tubes. These are flexible, energy-efficient, and long-lasting, while still delivering the vibrant, fluorescent look neon is known for.
    </p>

    <h3 class="mb-4"><strong>Key Benefits of LED Neon Ropes:</strong></h3>
    <ul>
        <li class="fs-20"><strong>Durability:</strong> Unlike glass, the flexible plastic tubing is resistant to breakage.</li>
        <li class="fs-20"><strong>Low power consumption:</strong> LED neon uses a fraction of the energy of traditional neon.</li>
        <li class="fs-20"><strong>Vivid colors:</strong> Available in eye-catching shades such as fluorescent green, peppermint blue, bright orange, royal blue, and pink.</li>
        <li class="fs-20"><strong>Low maintenance:</strong> No gas refills, no flickering letters- just consistent illumination.</li>
    </ul>

    <h3 class="mb-4"><strong>Design Considerations:</strong></h3>
    <p class="fs-20">
        LED neon ropes are best suited for running or script fonts due to their thin, flexible form (typically around half an inch in diameter). This makes them perfect for:
    </p>
    <ul>
        <li class="fs-20">Lounge bars and nightclubs</li>
        <li class="fs-20">Cafés and dessert shops</li>
        <li class="fs-20">Youth-focused stores and entertainment outlets</li>
    </ul>

    <p class="fs-20"><strong>Limitations:</strong></p>
    <ul>
        <li class="fs-20">For thick, blocky fonts, LED neon may not work well; traditional acrylic letters with embedded LEDs are better.</li>
        <li class="fs-20">Color choice is important: a fluorescent pink or green may energize a party crowd but could appear out of place for a corporate office or medical clinic.</li>
    </ul>

    <h3 class="mb-4"><strong>Why LED Neon Signs Remain Popular:</strong></h3>
    <p class="fs-20">
        Despite the evolution in signage technology, neon-style signs still command attention. Their bright, playful glow draws the eye, making them ideal for businesses looking to project energy, fun, or creativity. Modern LED neon combines this aesthetic with practical benefits: lower energy costs, durability, and minimal upkeep.
    </p>
    <p class="fs-20">
        In short, LED neon signs let you capture the magic of classic neon with the convenience of modern technology, making them a favorite for vibrant, high-impact signage.
    </p>


    <h3 class="mb-4"><strong>Crafting the Perfect Shop Sign Board</strong></h3>
    <p class="fs-20">
    If you’ve explored the variety of sign boards discussed above, it’s clear that creating the perfect <a style="color: #E43D12;text-decoration: none;" href="/name-board-designs-for-shops-bangalore"><strong>shop light board</strong></a> involves much more than picking a style. From 2D or 3D acrylic letters to luxurious metal finishes, sparkling crystal letters, ultra-bright Open Dot LEDs, and vibrant LED neon ropes, every choice impacts the overall look, feel, 
    and cost of your signage. The ideal sign board balances aesthetics, visibility, durability, and your brand identity. By finalising the materials, lighting, and specifications, you can ensure a shop sign that not only draws attention but also reinforces your brand’s presence and prestige.
    </p>








        </div>
    </section>

    <!--<section class="other-cities-section py-5">
        <div class="container">
            <h2 class="my-5">Led Sign Board in Other Cities</h2>
            <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
                <div class="other-cities-card">
                    <a href="/led-display-board-in-mumbai" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="LED Sign Boards Mumbai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Mumbai</p>
                        </div>
                    </a>
                </div>
                <div class="other-cities-card">
                    <a href="/led-display-board-in-chennai" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="LED Sign Boards Chennai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Chennai</p>
                        </div>
                    </a>
                </div>
                <div class="other-cities-card">
                    <a href="/led-sign-board-in-bangalore" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="LED Sign Boards Bangalore">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Bangalore</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>-->

    <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve B2B Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/led-sign-board/irani-cafe-led-sign-board.webp') }}"
                    alt="Irani Cafe LED Sign Board - Brand Signages">
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
    <section class="new_testimonial-swiper-section">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-3">Feedback from Our Valuable Clients</h2>

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
                                    Our tech startup needed a signage solution that matched our innovative spirit. The
                                    design team didn't just create a sign; they captured our company's entire essence.
                                    The LED-powered brand display has become a conversation starter for clients and
                                    employees alike.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy- Our Client"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sneha Reddy</h6>
                                        <small class="text-muted">Marketing Head – Urban Retail Co.</small>
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
                                    We needed stunning, durable, and regulation-compliant signage for our hospital,
                                    and Brand Signages delivered exactly what we asked for. Their attention to detail
                                    is excellent, which helped us enhance the patient experience.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema - Our Client"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Seema Nayak</h6>
                                        <small class="text-muted">Operations Manager– Horizon Hospitals</small>
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
                                    From initial conceptualization to execution, they executed our café signage project
                                    seamlessly. They perfectly captured the aesthetics of our brand with vibrant acrylic
                                    signs and a neon board that has quickly become an Instagram favorite among local people.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}"
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sandeep Gupta</h6>
                                        <small class="text-muted">Founder – Café Bloom</small>
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
                                    We needed elegant indoor and outdoor corporate signage that matched our branding.
                                    Brand Signages impressed us with their quick turnaround, premium finish, and seamless
                                    coordination throughout the signage project.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}"
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sandeep Gupta</h6>
                                        <small class="text-muted">Director– Nova Consulting Group</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Digital Signage</h2>
                <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the digital signage
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
        <div class="faq-container">
            <h1 class="faq-title">LED Sign Board FAQs</h1>

            <div class="faq-item">
                <button class="faq-question">
                    How Long Will It Take to Deliver LED Sign Board? 
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <P>The delivery time for your LED sign board typically ranges between <b>7 to 10 working days</b>,
                        depending on the size, design complexity, and customization requirements. Our team ensures
                        timely production and delivery while maintaining top-notch quality standards.</P>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can I Customize My LED Sign Board According to My Needs?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Absolutely. We offer <b>fully customized LED sign boards</b> tailored to your brand’s identity,
                        including
                        design, color, size, lighting type, and logo integration. Our team works closely with you to create
                        a sign board that truly reflects your business personality.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How to Choose LED Sign Board for Outdoor Advertising?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>When choosing an LED sign board for outdoor advertising, focus on brightness, durability, and
                        visibility. <b>Opt for weather-resistant
                            materials, high-luminance LEDs</b>, and a design that aligns with your brand’s identity. At
                        Brand Signages, we craft outdoor LED sign boards
                        engineered to withstand Indian climatic conditions while ensuring your brand message remains clear
                        and vibrant, day or night.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Difference between Single Color and Full Color LED Sign Board?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>A <b>single-color LED sign board</b> displays text or visuals in one shade- commonly red, green, or
                        white- ideal for simple messages and budget-friendly
                        solutions. In contrast, a <b>full-color LED sign board</b> supports multiple hues and dynamic
                        visuals, perfect for high-impact promotions and video
                        displays. Brand Signages offers both options to suit diverse advertising needs and budgets.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are Your LED Sign Board Energy Efficient for Indian Climate?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our LED sign boards are designed with <b>energy-efficient modules and low-heat components</b>,
                        ensuring optimal performance even in high-temperature and humid conditions.
                        With Brand Signages, you get energy-saving LED systems that minimize power consumption while
                        delivering maximum brightness and long lifespan—ideal for the Indian
                        climate.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do You Offer Affordable LED Sign Board for Small Business?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>For small businesses looking to enhance visibility, Brand Signages offers <b>affordable LED sign
                            board solutions</b> without compromising on quality. Whether it’s a compact storefront display
                        or a simple illuminated name board, our custom LED signage designs help you attract more customers
                        at a budget that fits your business goals.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Where to Buy Customizable LED Sign Board with Remote Control?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>You can purchase customizable LED sign boards with remote control directly from Brand Signages. Our
                        <b>advanced control systems</b> allow you to update messages, visuals, and offers in real time with
                        ease. Choose from a variety of sizes, colors, and display modes to suit your business communication
                        needs.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do You Provide LED Sign Board with Warranty and After-Sale Service in India?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>At Brand Signages, every LED sign board comes with a <b>comprehensive warranty and dedicated
                            after-sales support</b>. We ensure hassle-free maintenance, quick service response, and
                        long-lasting performance.
                        Our team stands by your signage even after installation, ensuring your investment continues to shine
                        bright.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do You Deliver LED Sign Boards PAN India?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we deliver LED sign boards across Bangalore and <b>all over India within 10 Working Days</b>.
                        Our logistics team ensures safe packaging
                        and hassle-free delivery so that your signage reaches you in perfect condition.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What are The Leading Companies Offering LED Sign Board with Programmable Display?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Brand Signages is among the leading LED sign board manufacturers in India, specializing in
                        <b>programmable displays</b> for retail, hospitality, and
                        corporate branding. Our LED boards feature dynamic content control, remote access, and high
                        brightness for impactful communication—making
                        your brand message stand out 24/7.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do You Provide Installation Support?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>YYes, we offer <b>complete installation services</b> for all LED sign boards. Our expert technicians
                        ensure proper setup, alignment, and wiring
                        to make your signage functional and visually appealing from day one.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can LED Sign Boards be Used for Outdoor Branding?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Definitely, Our LED sign boards are designed for both indoor and outdoor use, built to withstand
                        varying weather conditions while maintaining
                        brightness and visual impact, making them perfect for outdoor branding.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are Your LED Sign Boards Energy-efficient?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, our LED sign boards are <b>highly energy-efficient and</b> designed to consume significantly
                        less power compared
                        to traditional lighting options. They deliver bright, consistent illumination while keeping
                        electricity costs
                        low, making them an eco-friendly and cost-effective branding solution for your business.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Long Do LED Sign Boards Last?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>High-quality LED sign boards typically last for up to 5–7 years with proper maintenance. They are
                        energy-efficient,
                        durable, and designed to deliver long-lasting performance, ensuring great value for your investment.
                    </p>
                </div>
            </div>

        </div>
    </section>

        <script>
        const slides = document.querySelectorAll('.slide');
        const thumbs = document.querySelectorAll('.thumb');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });

            thumbs.forEach((thumb, i) => {
                thumb.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        }

        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        thumbs.forEach(thumb => {
            thumb.addEventListener('click', () => {
                currentIndex = parseInt(thumb.dataset.index);
                showSlide(currentIndex);
            });
        });

        // Optional: Auto-play
        setInterval(nextSlide, 3000);
    </script>


@endsection