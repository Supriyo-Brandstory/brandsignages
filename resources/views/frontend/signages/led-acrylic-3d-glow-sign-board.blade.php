@extends('frontend.layout.appLayout')
@section('content')

<div class="newly-bannersection">
    <div class="bar">
        <h1 class="hero-banner_title">LED Sign Board</h1>

    </div>
    <!-- Slider -->
    <div class="slider-wrapper">

        <div class="main-slider">
            <div class="slide active">
                <img src="/frontend/Images/led-sign-board/led-sign-boards-10.webp" alt="LED Sign Board">
            </div>
            <div class="slide">
                <img src="/frontend/Images/led-sign-board/led-sign-boards-1.webp" alt="LED Sign Board">
            </div>
            <div class="slide">
                <img src="/frontend/Images/led-sign-board/led-sign-boards-12.webp" alt="LED Sign Board">
            </div>
            <div class="slide">
                <img src="/frontend/Images/led-sign-board/led-sign-boards-3.webp" alt="LED Sign Board">
            </div>
            <div class="slide">
                <img src="/frontend/Images/led-sign-board/led-sign-boards-4.webp" alt="LED Sign Board">
            </div>
            <div class="slide">
                <img src="/frontend/Images/led-sign-board/led-sign-boards-5.webp" alt="LED Sign Board">
            </div>
            <div class="slide">
                <img src="/frontend/Images/led-sign-board/led-sign-boards-6.webp" alt="LED Sign Board">
            </div>
            <div class="slide">
                <img src="/frontend/Images/led-sign-board/led-sign-boards-7.webp" alt="LED Sign Board">
            </div>
            <div class="slide">
                <img src="/frontend/Images/led-sign-board/led-sign-boards-8.webp" alt="LED Sign Board">
            </div>
            <div class="slide">
                <img src="/frontend/Images/led-sign-board/led-sign-boards-9.webp" alt="LED Sign Board">
            </div>

        </div>

        <!-- Navigation should be OUTSIDE -->
        <div class="nav-arrow prev">&#8249;</div>
        <div class="nav-arrow next">&#8250;</div>



        <div class="thumbnails">
            <img src="/frontend/Images/led-sign-board/led-sign-boards-10.webp" class="thumb active" data-index="0" alt="LED Scrolling Text Sign Board">
            <img src="/frontend/Images/led-sign-board/led-sign-boards-1.webp" class="thumb" data-index="1" alt="LED Glow Sign Board">
            <img src="/frontend/Images/led-sign-board/led-sign-boards-12.webp" class="thumb" data-index="2" alt="LED Glow Sign Board">
            <img src="/frontend/Images/led-sign-board/led-sign-boards-3.webp" class="thumb" data-index="3" alt="LED Glow Sign Board">
            <img src="/frontend/Images/led-sign-board/led-sign-boards-4.webp" class="thumb" data-index="4" alt="LED Glow Sign Board">
            <img src="/frontend/Images/led-sign-board/led-sign-boards-5.webp" class="thumb" data-index="5" alt="LED Glow Sign Board">
            <img src="/frontend/Images/led-sign-board/led-sign-boards-6.webp" class="thumb" data-index="6" alt="LED Glow Sign Board">
            <img src="/frontend/Images/led-sign-board/led-sign-boards-7.webp" class="thumb" data-index="7" alt="LED Glow Sign Board">
            <img src="/frontend/Images/led-sign-board/led-sign-boards-8.webp" class="thumb" data-index="8" alt="LED Glow Sign Board">
            <img src="/frontend/Images/led-sign-board/led-sign-boards-9.webp" class="thumb" data-index="9" alt="LED Glow Sign Board">
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <h1 class="hero-banner_title">Custom LED Sign Boards</h1>
        <p class="subtitle"><b>Price: ₹1,000 - ₹35,000.00 + GST</b></p>

        <div class="divider"></div>
        <p class="fs-16">LED sign boards do more than just display names- they make a brand unforgettable. With bright illumination, exceptional visibility, and fully
            customizable design options, LED signage ensures a business stands out day and night. Designed to draw attention from distances and elevate brand presence,
            LED sign boards help businesses be seen, recognised, and remembered.</p>
        <ul class="features">
            <li>Explore 8+ LED sign board types</li>
            <li>Crafted with quality material- acrylic, LEDs, & ACP</li>
            <li>Attractive LED name boards with custom designs</li>
            <li>PAN India service including delivery & installation</li>
            <li>Dedicated Support services round the clock</li>
        </ul>

        <div class="buttons">
            <a href="#pricing" class="btn">Check Pricing</a>
            <a href="{{ route('contact_us') }}" class="btn">Get Quote</a>
        </div>
    </div>
</div>

<section class="instant-pricing">
    <div class="container pt-5">
        <h2>LED Sign Boards for Brand Visibility<br> and Commercial Impact</h2>
        <p>The demand for <b>custom LED sign boards</b> has grown as businesses shift toward high-visibility branding solutions that perform across lighting conditions
            and environments. Brand Signages manufactures LED signage engineered for clarity and consistent illumination, making them suitable for <b>retail chains</b>,
            <b>hospitality brands</b>, <b>healthcare facilities</b>, <b>corporate spaces</b>, and <b>high-footfall commercial zones</b>. Unlike generic signage, our LED solutions are
            developed with lumen-optimized lighting, weather-resistant construction, and installation compatibility for indoor and outdoor.
        </p>
        <p>Our product range includes precision-built <b>LED name boards</b>, <b>acrylic face-lit sign</b>, <b>metal channel letters</b> with backlit glow, high-brightness <b>LED display boards</b>,
            and hybrid material options for brands requiring architectural integration. Businesses choose Brand Signages not just for manufacturing, but for reliability,
            service support, and long-term operational value. If your priority is standing out, being instantly recognisable, and creating a lasting visual presence, a precision-crafted <b>LED sign
                board</b> ensures your brand is noticed- not overlooked.</p>
        <!--<img src="/frontend/Images/name-boards/largest-ever-signage-board-collection.webp" alt="Exclusive LED Name Board Design by Brand Signages" class="shop-image">-->
        <div class="video-image-container">
            <img src="/frontend/Images/name-boards/largest-ever-signage-board-collection.webp"
                alt="Exclusive LED Name Board Design by Brand Signages"
                class="shop-image">

            <!-- Modern Play Button -->
            <div class="play-overlay" onclick="openVideo()">
                <svg width="50" height="50" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 5v14l11-7z" />
                </svg>
            </div>
        </div>

        <!-- Popup Modal -->
        <div id="ytPopup" class="yt-popup">
            <div class="yt-wrapper">
                <span class="close-btn" onclick="closeVideo()">×</span>
                <iframe id="ytFrame" frameborder="0" allowfullscreen allow="autoplay"></iframe>
            </div>
        </div>



        <div class="text-center">
            <a href="#designs">
                <button class="contact-btn">See How It Works</button>
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
                    <img src="{{asset('frontend/Images/home/led-sign-bg.webp')}}"
                        alt="Starbucks LED Sign board designed by Brand Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="hero-title text-start">LED Sign Boards: Built with Impact & Style</h2>
                <p class="brand-description">
                    LED sign boards is the most powerful branding elements for modern businesses delivering high
                    visibility, energy efficiency, and premium appeal. Over the years, LED signage has evolved into a must-have identity
                    element for <a href="name-board-designs-for-shops-bangalore" style="color:#E43D12; text-decoration:none;"><strong>retail stores</strong></a>, <a href="name-board-designs-for-shops-bangalore" style="color:#E43D12; text-decoration:none;"><strong>restaurants</strong></a>, <a href="name-board-designs-for-shops-bangalore" style="color:#E43D12; text-decoration:none;"><strong>corporate offices</strong></a>, <a href="name-board-designs-for-shops-bangalore" style="color:#E43D12; text-decoration:none;"><strong>jewellery shops</strong></a>, <a href="name-board-designs-for-shops-bangalore" style="color:#E43D12; text-decoration:none;"><strong>clinics</strong></a>, and franchise chains across India.
                    Today in 2025, LED sign boards continue to redefine how businesses stand out offering customization
                    and tech-driven illumination. 
                </p>
                <ul class="brand-list">
                    <li class="mb-3">
                        <b>Visibility That Wins Attention:</b> A well-built LED sign board isn’t decoration- it’s a locator. It cuts through visual competition, makes your brand findable, and turns casual visibility into awareness.
                    </li>
                    <li class="mb-3">
                        <b>Brand Recall Without Pause:</b> LED name boards don’t rely on operating hours. They work nonstop- guiding, reminding, and imprinting your brand in the customer’s mind long after shutters close.
                    </li>
                    <li>
                        <b>Perception Built Instantly:</b> Quality LED signage signals discipline, investment, and reliability. Customers judge before entering, and a precise, well-lit sign tells them your standards aren’t negotiable.
                    </li>
                    <div class="mt-4">
                        <a href="blogs/led-sign-board" class="custom-btn">Explore More</a>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="We-Elevate-Brands-section py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Material Options for<br>Exclusive LED Sign Boards</h2>
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
                                    <p class="We-Elevate-Brands-text">Acrylic LED letters are a versatile choice for LED sign boards, offering bright illumination, sleek design, and durability.
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
                                        multi-colour, they create premium, high-visibility signage for retail and boutique businesses. </p>
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
                                    <p class="We-Elevate-Brands-text">2D stencil cut sign boards offer sleek, flush designs with hidden LED illumination, providing a cost-effective, professional, and
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
                                        creating dazzling, high-visibility sign boards perfect for premium retail and luxury brands.</p>
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


<section id="pricing">
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">LED Sign Board Size & Pricing <br>Explore Options</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/led-sign-board-signage.webp')}}"
                        alt="LED Name Board Design" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="fs-20">
                    The cost of an LED sign board includes materials and installation. Prices vary based on size, design complexity, lighting, and color options.
                </p>

                <p class="fs-20"><strong>Popular Size Options Include:</strong></p>
                <ul class="fs-20" style="padding-left: 18px;">
                    <li><b>Small LED Boards:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹1,000 – ₹10,000)</li>
                    <li><b>Medium LED Boards:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹10,000 – ₹25,000)</li>
                    <li><b>Large LED Boards:</b> 4 ft x 8 ft (₹25,000 – ₹35,000)</li>
                    <li><b>Custom Dimensions:</b> Depends on your design & customization.</li>
                </ul>

                <p class="fs-20">
                    Each sign board is crafted with <b>high-quality materials</b>, <b>premium LEDs</b>, and weather-resistant finishes.
                    You can choose from different lighting styles, including <b>front-lit, backlit, edge-lit, or RGB color-changing LEDs</b>,
                    to match your brand’s identity.
                </p>

                <a href="https://brandsignages.com/contact-us" bis_skin_checked="1">
                    <button class="contact-btn">Book Order Now</button>
                </a>
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

<section class="new_custom-why-choose">
    <div class="container">
        <h2 class="text-center mb-5 new_custom-heading">Why Choose Brand Signages for LED <br>Sign Boards?</h2>
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
                                href="/led-sign-board-in-bangalore"><strong>LED sign board</strong></a> we
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


<!--<section class="customization-bg-and-main-color-section">
    <div class="container">
        <h2 class="text-center hero-title mb-5">Customize Your LED Sign</h2>

        <div class="row g-4 align-items-start">
            
            <div class="col-md-4 order-2 order-md-1">
                <div class="thumb-card">
                    <h5>Choose Background</h5>
                    <div class="customization-thumbs bg-thumbs">
                        <img src="{{ asset('frontend/Images/customization/background/background-1.webp') }}" onclick="changeBg(this)">
                        <img src="{{ asset('frontend/Images/customization/background/background-2.webp') }}" onclick="changeBg(this)">
                        <img src="{{ asset('frontend/Images/customization/background/background-3.webp') }}" onclick="changeBg(this)">
                        <img src="{{ asset('frontend/Images/customization/background/background-4.webp') }}" onclick="changeBg(this)">
                        <img src="{{ asset('frontend/Images/customization/background/background-5.webp') }}" onclick="changeBg(this)">
                        <img src="{{ asset('frontend/Images/customization/background/background-6.webp') }}" onclick="changeBg(this)">
                        <img src="{{ asset('frontend/Images/customization/background/background-7.webp') }}" onclick="changeBg(this)">
                        <img src="{{ asset('frontend/Images/customization/background/background-8.webp') }}" onclick="changeBg(this)">
                        <img src="{{ asset('frontend/Images/customization/background/background-9.webp') }}" onclick="changeBg(this)">
                        <img src="{{ asset('frontend/Images/customization/background/background-10.webp') }}" onclick="changeBg(this)">
                    </div>
                </div>
                <div class="thumb-card mt-4">
                    <h5>Choose Sign Style</h5>
                    <div class="customization-thumbs sign-thumbs">
                        <img src="{{ asset('frontend/Images/customization/front/sign-1.webp') }}" onclick="changeSign(this)">
                        <img src="{{ asset('frontend/Images/customization/front/sign-2.webp') }}" onclick="changeSign(this)">
                        <img src="{{ asset('frontend/Images/customization/front/sign-3.webp') }}" onclick="changeSign(this)">
                        <img src="{{ asset('frontend/Images/customization/front/sign-4.png') }}" onclick="changeSign(this)">
                        <img src="{{ asset('frontend/Images/customization/front/sign-5.webp') }}" onclick="changeSign(this)">
                        <img src="{{ asset('frontend/Images/customization/front/sign-6.webp') }}" onclick="changeSign(this)">
                        <img src="{{ asset('frontend/Images/customization/front/sign-7.png') }}" onclick="changeSign(this)">
                    </div>
                </div>
            </div>

            
            <div class="col-md-8 order-1 order-md-2">
                <div class="customization-preview">
                    <img id="bgPreview" src="{{ asset('frontend/Images/customization/background/background-1.webp') }}">
                    <img id="signPreview" src="{{ asset('frontend/Images/customization/front/sign-1.webp') }}">
                </div>
            </div>
        </div>
    </div>
</section>-->

<section id="designs" class="why-bg-light-pink pt-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="hero-title">LED Sign Board Price<br> Explore Pricing Insights</h2>
        </div>

        <div class="row con-fix2">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/led-sign-board-pricing-size-material-led-type-controller-warranty-installation-cost" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/mjcQbqNZEIMQBfDGJeSfhJXTHkKR1ZKkZGgtfMex.jpg" alt="LED Sign Board Pricing: Size, Material, LED Type, Controller, Warranty &amp; Installation Cost">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">LED Sign Board Pricing: Size, Material, LED Type, Controller, Warranty &amp; Installation Cost</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/how-to-choose-the-best-led-sign-board-manufacturer-in-bangalore-mumbai-chennai" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/6VPY4cEx3enyaVpRAUMc21SN0KvJpitvClousHFX.jpg" alt="How to Choose the Best LED Sign Board Manufacturers: A Detailed Guide">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">How to Choose the Best LED Sign Board Manufacturers: A Detailed Guide</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/led-sign-board-price-guide-updated-2025-cost-by-size-material-lighting-type" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/MlHPqaVwbtBat0oZQ2sC81XRXopsxK054vVc0uFV.jpg" alt="LED Sign Board Price Guide (Updated 2025): Cost by Size, Material &amp; Lighting Type">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">LED Sign Board Price Guide (Updated 2025): Cost by Size, Material &amp; Lighting Type</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    </div>
    </div>
</section>




<section id="designs" class="why-bg-light-pink pt-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="hero-title">LED Sign Board Strategy, Selection<br> & Technical Insights</h2>
        </div>

        <div class="row con-fix2">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/latest-trends-in-led-sign-boards-for-retail-restaurants-corporate-offices" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/SezXjSHygpBdNZrYmX65nMZFBQvgQSzrx3UAblJZ.jpg" alt="Latest Trends in LED Sign Boards for Retail, Restaurants &amp; Corporate Offices">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">Latest Trends in LED Sign Boards for Retail, Restaurants &amp; Corporate Offices</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/indoor-vs-outdoor-led-sign-boards-key-differences-pricing-use-cases" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/ArRdsQjL0MjJzm14La9TmNWWn6lOnzHPJgOJZrt4.jpg" alt="Indoor vs Outdoor LED Sign Boards: Key Differences, Pricing &amp; Use Cases">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">Indoor vs Outdoor LED Sign Boards: Key Differences, Pricing &amp; Use Cases</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/acrylic-led-vs-neon-led-vs-flex-led-sign-boards-which-one-should-you-pick" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/bjmU9CWXhSiHQLBU3oC6fEvliaTJ0v4LQlcRiS1J.jpg" alt="Acrylic LED vs Neon LED vs Flex LED Sign Boards: Which One Should You Pick?">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARD</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">Acrylic LED vs Neon LED vs Flex LED Sign Boards: Which One Should You Pick?</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/how-to-pick-the-perfect-led-sign-board-for-your-business-buying-guide" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/btDp0N9BgbWFOSoPmb1F6Mk754dlYy0H2BP3CD3C.jpg" alt="How to Pick the Perfect LED Sign Board for Your Business: Buying Guide">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARD</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">How to Pick the Perfect LED Sign Board for Your Business: Buying Guide</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/top-mistakes-businesses-make-when-installing-led-sign-boards" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/BhQFRzo6MYgpN9224LJ3idQft6KJV4ojo8Q8T8YB.jpg" alt="Top Mistakes Businesses Make When Installing LED Sign Boards">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">Top Mistakes Businesses Make When Installing LED Sign Boards</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/understanding-led-modules-brightness-levels-power-consumption-led-sign-boards" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/GZ0zXEizWFCqpLgj6Gn6G0H064T1fIPtkqp53txJ.jpg" alt="Understanding LED Modules, Brightness Levels &amp; Power Consumption: LED Sign Boards">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">Understanding LED Modules, Brightness Levels &amp; Power Consumption</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>

    </div>
    </div>
</section>

<section id="designs" class="why-bg-light-pink pt-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="hero-title">LED Sign Board Use Cases, ROI, Trends<br> & Real-World Results</h2>
        </div>

        <div class="row con-fix2">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/led-sign-board-maintenance-guide-cleaning-waterproofing-lifespan-tips" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/c6RFaS3vtzmbDsZZa23uAhZBhDzrU8vc5j5UuEyC.jpg" alt="LED Sign Board Maintenance Guide: Cleaning, Waterproofing &amp; Lifespan Tips">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARD</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">LED Sign Board Maintenance Guide: Cleaning, Waterproofing &amp; Lifespan Tips</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/how-led-acrylic-3d-letters-are-manufactured-process-materials-costs" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/bE4m6DpSrJRYspYp9pIcGhpkiKXJoF2UC3qia4o1.jpg" alt="How LED Acrylic 3D Letters Are Manufactured: Process, Materials &amp; Costs">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">How LED Acrylic 3D Letters Are Manufactured: Process, Materials &amp; Costs</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/before-after-how-led-branding-transforms-storefront-visibility-visual-examples" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/6RHcz8fhTb9Xs4sDoGvWOsAGVw7VRO4LpsBXtH5v.jpg" alt="Before &amp; After: How LED Branding Transforms Storefront Visibility (Visual Examples)">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">Before &amp; After: How LED Branding Transforms Storefront Visibility (Examples)</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/why-led-sign-boards-are-the-best-budget-branding-investment-for-small-businesses" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/M4JL9vGU8YMfuztIyIA4wpL2ot7VU91K3XYnFYc3.jpg" alt="Why LED Sign Boards Are the Best Budget Branding Investment for Small Businesses">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">Why LED Sign Boards Are the Best Budget Branding Investment for Small Businesses</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/best-led-sign-board-ideas-for-restaurants-cafes-salons-clinics" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/aKQDeuYsrU4xACJi6cYrd9GwxONhbmeiVGgQiaXn.jpg" alt="Best LED Sign Board Ideas for Restaurants, Cafes, Salons &amp; Clinics">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">Best LED Sign Board Ideas for Restaurants, Cafes, Salons &amp; Clinics</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="https://brandsignages.com/blogs/how-led-sign-boards-increase-footfall-for-retail-stores-case-study-insights" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="https://brandsignages.com/storage/blogs/EI051owQeQkdyoefGjKiFR5ekCHOl25ghq6GTR2s.jpg" alt="How LED Sign Boards Increase Footfall for Retail Stores: Case Study Insights">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">LED SIGN BOARDS</span>
                                <span class="time">LED Signs</span>
                            </div>
                            <h5 class="blog-card-title">How LED Sign Boards Increase Footfall for Retail Stores: Case Study Insights</h5>
                        </div>
                    </div>
                </a>
            </div>



        </div>

    </div>
    </div>
</section>





<!--<section>
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
    </section>-->


<!--<section id="exploredesigns">
        <div class="container pt-5" id="">
            <h2 class="hero-title  mb-4">Best LED Sign Board Product Range <br>for Your Business</h2>
                    <p class="text-center fs-20">
                        The right LED sign board can set the tone for your brand. At Brand Signages, you can choose from a variety of <b>acrylic 
                        glow sign boards</b>, <b>crystal LED</b>, <b>programmable LED</b>, and other most in-demand LED sign board options. We present the 
                            briliant designs and custom LED sign board design options to help you choose what fits your needs. Browse 
                            <b>the largest collection of LED sign board</b> at Brand Signages, consult with our experts, and customize 
                            LED sign boards at your conveninece. We provide <b>PAN India delivery</b> and <b>installation</b>. </p>

                              <div class="image-grid">
                                        <div class="image-item">
                                            <img src="/frontend/Images/led-sign-board/3d-acrylic-led-letters.webp" 
                                                alt="Flexible LED Sign Board by Brand Signages">
                                                <p>Acrylic LED Letter Sign</p>
                                  
                                        </div>
                                        <div class="image-item">
                                            <img src="/frontend/Images/led-sign-board/led-sign-board-showcase.webp" 
                                                alt="Modern LED Sign Board- programmable Flexible LED Sign Board">
                                                 <p>Programmable LED Sign Board</p>
                                        
                                        </div>
                                    </div>
                                    </div>
                        

        </div>
    </section>-->





<section class="other-cities-section py-5">
    <div class="container">
        <h2 class="hero-title">We Deliver LED Sign Boards <br> Across India</h2>
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
</section>

<section class="new_client_section container">
    <h2 class="new_client_section-title">We Serve Clients Across <br>All Industries</h2>
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



<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title py-5">LED Sign Board FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">
                What Exactly is an LED Sign Board and How Does it Work? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <P>LED sign boards are electronic displays that use light-emitting diodes (LEDs) to show text, images,
                    and videos. They are bright, energy-efficient, and long-lasting, available in formats like 3D logo
                    signs, scrolling message boards, and indoor or outdoor display boards, helping businesses communicate
                    clearly and attract attention.</P>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I Get Customized LED Name Boards and Banner-style Sign Boards? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <P>Yes, we offer custom LED sign boards designed for <b>offices, indoor branding</b>, <b>and outdoor</b>
                    advertisements. You can get premium-quality LED name boards and banner-style board designs made
                    using high-grade materials for long-lasting performance and a standout visual appeal.</P>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What types of LED sign boards do you offer? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <P>We provide LED advertising display boards, indoor and outdoor LED displays, scrolling message boards,
                    and glow signs. You can choose from <b>10+ exclusive material options</b> like acrylic LED boards, ACP-based
                    LED signs, 3D illuminated letters, programmable LED displays, and fully custom shop-front LED signs.
                    All are made using quality materials like acrylic, LED modules, and ACP to ensure a premium, durable
                    finish for your brand.</P>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What are the advantages of using LED sign boards? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <P>LED sign boards are energy-efficient, long-lasting, and built for durability. They are water-resistant,
                    weather-proof, and require very minimal maintenance. Their eco-friendly components and safer disposal
                    also make them a more sustainable signage choice compared to traditional options.</P>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is an Acrylic LED Sign Board?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <P>Acrylic LED Sign Boards are made from high-quality cast acrylic and raised to a depth of 2–3 inches.
                    The letters are securely fixed directly onto walls or ACP panels, providing a clean, premium, and
                    durable 3D appearance for your brand.</P>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How Do Your LED Sign Boards Make a Business Stand Out?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <P>Our LED sign boards are crafted using advanced LED technology and fully customizable designs to meet your
                    brand’s unique requirements. They provide bright, consistent illumination that attracts attention both day and
                    night. The boards are energy-efficient, durable, and designed for long-term use, combining modern aesthetics with
                    functional performance. With options for 3D lettering, glow effects, and premium materials like acrylic, metal and ACP,
                    these signage boards help create a strong visual identity.</P>
            </div>
        </div>

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

<style>
    .customization-bg-and-main-color-section {
        padding: 70px 0;
        background: linear-gradient(180deg, #f9f9f9, #ffffff);
    }

    /* Card wrapper */
    .thumb-card {
        background: #fff;
        padding: 20px;
        border-radius: 14px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .thumb-card h5 {
        font-size: 18px;
        margin-bottom: 15px;
        font-weight: 600;
    }

    /* Thumbnails */
    .customization-thumbs {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 14px;
    }

    .sign-thumbs {
        grid-template-columns: repeat(4, 1fr);
    }

    .customization-thumbs img {
        width: 100%;
        cursor: pointer;
        border-radius: 10px;
        border: 2px solid transparent;
        transition: all 0.35s ease;
        background: #f5f5f5;
    }

    /* Hover */
    .customization-thumbs img:hover {
        transform: translateY(-4px) scale(1.04);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    /* Active */
    .customization-thumbs img.active {
        border-color: #ff4a17;
        box-shadow: 0 0 0 3px rgba(255, 74, 23, 0.25);
    }

    /* Preview box */
    .customization-preview {
        position: relative;
        width: 100%;
        aspect-ratio: 2 / 1.12;
        border-radius: 18px;
        overflow: hidden;
        background: #000;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
    }

    .customization-preview img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Sign overlay */
    #signPreview {
        z-index: 2;
        pointer-events: none;
        object-fit: contain;
    }
</style>
<script>
    function setActive(el) {
        el.parentElement.querySelectorAll('img').forEach(img => img.classList.remove('active'));
        el.classList.add('active');
    }

    function changeBg(el) {
        document.getElementById('bgPreview').src = el.src;
        setActive(el);
    }

    function changeSign(el) {
        document.getElementById('signPreview').src = el.src;
        setActive(el);
    }
</script>




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

<script>
    document.querySelectorAll('.product-gallery').forEach(gallery => {
        const mainImg = gallery.querySelector('.main-preview img');
        const thumbs = gallery.querySelectorAll('.thumbnail-row img');

        thumbs.forEach(thumb => {
            thumb.addEventListener('click', () => {
                mainImg.src = thumb.src;
                mainImg.alt = thumb.alt;
            });
        });
    });
</script>

<script>
    function openVideo() {
        document.getElementById("ytPopup").style.display = "flex";
        document.getElementById("ytFrame").src = "https://www.youtube.com/embed/RnnPGGb_iJI?autoplay=1";
    }

    function closeVideo() {
        document.getElementById("ytPopup").style.display = "none";
        document.getElementById("ytFrame").src = "";
    }
</script>





@endsection