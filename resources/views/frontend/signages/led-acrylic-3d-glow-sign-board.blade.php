@extends('frontend.layout.appLayout')

@push('styles')
<link rel="stylesheet" href="{{ asset('frontend/customstyle/neon-signages-2.css') }}">
@endpush

@section('content')
    <section class="simple-impact-hero">
        @php
            $slides = [
                [
                    'img' => 'led-banner-3',
                    'title' => 'Custom Led Sign Board- Crafted for Maximum Impact',
                    'desc' =>
                        'Designed to create a strong first impression, our Led name board highlight your brand and attract attention from a distance.',
                ],
                [
                    'img' => 'led-banner-n',
                    'title' => 'Led Light Board for Shops, Offices & Commercial Spaces',
                    'desc' =>
                        'Our Led light board deliver sharp brightness and lettering, making them perfect for shops, offices, clinics, and commercial spaces.',
                ],
                [
                    'img' => 'led-banner-n2',
                    'title' => 'Premium Led Sign Board That Shines Day & Night',
                    'desc' =>
                        'Made with high-quality materials and precision lighting, our Led sign board provide 24*7 visibility, long-lasting performance and a professional look.',
                ],
            ];
        @endphp

        <div class="hero-slides-wrapper" id="heroSlider">
            @foreach ($slides as $slide)
                <div class="impact-slide {{ $loop->first ? 'active' : '' }}">
                    <img src="/frontend/Images/led-sign-board/{{ $slide['img'] }}.webp" alt="{{ $slide['title'] }}">

                    <div class="hero-dark-overlay">
                        <div class="container container-large">
                            <div class="hero-content-final">
                                <h1 class="hero-msg-title">{{ $slide['title'] }}</h1>
                                <p class="hero-msg-desc">{{ $slide['desc'] }}</p>

                                <div class="hero-msg-actions">
                                    <a href="{{ route('contact_us') }}" class="btn-impact primary">
                                        I am Interested <i class="fas fa-arrow-right"></i>
                                    </a>
                                    <a href="{{ route('contact_us') }}" class="btn-impact secondary">
                                        Get a Quote <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="hero-pagination-dots">
            @foreach ($slides as $index => $slide)
                <div class="dot {{ $index === 0 ? 'active' : '' }}" onclick="goToSlide({{ $index }})"></div>
            @endforeach
        </div>
    </section>

    <section class="instant-pricing ">
        <div class="container py-5">
            <h2>Energy-Efficient Led Sign Boards <br>by Brand Signages</h2>
            <p>In a busy commercial environment, your sign board is often the first thing people notice about your business.
                Led
                sign boards offer a powerful way to make that first impression count. With bright illumination and sharp
                visibility,
                they help your brand remain clearly noticeable both during the day and after dark, ensuring your business
                never
                blends into the background. As businesses continue to adopt modern branding solutions, Led signage has
                become a preferred choice for creating a professional and memorable storefront presence.
            </p>
            <p>Exclusive Led light board designs to capture attention instantly. Their vibrant lighting and modern appearance
                make them highly
                effective for shops, showrooms, restaurants, clinics, and offices that want to attract more walk-in
                customers. At Brand Signages, our product
                range includes expertly crafted <a href="led-name-board-design"
                    style="color:#E43D12; text-decoration:none;"><b>Led name board</b></a>, <a href="arcylic-signages"
                    style="color:#E43D12; text-decoration:none;"><b>acrylic face-lit sign</b></a>, <a
                    href="metal-led-letters" style="color:#E43D12; text-decoration:none;"><b>metal channel letters</b></a>
                with backlit glow, high-brightness <b>Led modules</b>,
                and hybrid material options designed for businesses that want distinctive and high-impact signage.</p>
            
                <div class="impact-gallery-grid mt-5">
                @php
                    $galleryItems = [
                        ['img' => 'led-1', 'title' => 'Outdoor Led Sign Board', 'class' => 'red-title'],
                        ['img' => 'led-2', 'title' => 'Led Light Board', 'class' => 'red-title'],
                        ['img' => 'led-3', 'title' => 'Outdoor Led Sign Board', 'class' => 'red-title'],
                        ['img' => 'led-4', 'title' => 'Led Sign Board', 'class' => 'red-title'],
                        ['img' => 'led-5', 'title' => 'Led Sign Board', 'class' => 'red-title'],
                        ['img' => 'led-6', 'title' => 'Led Shop Name Board', 'class' => 'red-title'],
                        ['img' => 'led-7', 'title' => 'Led Shop Name Board', 'class' => 'red-title'],
                        ['img' => 'led-8', 'title' => 'Led Office Name Board', 'class' => 'red-title'],
                        ['img' => 'led-9', 'title' => 'Led Office Name Board', 'class' => 'red-title'],
                        ['img' => 'led-10', 'title' => 'Led Business Name Board', 'class' => 'red-title'],
                        ['img' => 'led-11', 'title' => 'Led Business Name Board', 'class' => 'red-title'],
                        ['img' => 'led-12', 'title' => 'Outdoor Led Sign board', 'class' => 'red-title'],
                        ['img' => 'led-13', 'title' => 'Outdoor Led Sign board', 'class' => 'red-title'],
                        ['img' => 'led-14', 'title' => 'Led Light Board', 'class' => 'red-title'],
                        ['img' => 'led-15', 'title' => 'Led Shop Name Board', 'class' => 'red-title'],
                        ['img' => 'led-16', 'title' => 'Led Sign Board', 'class' => 'red-title'],
                        ['img' => 'led-17', 'title' => 'Led Sign Board', 'class' => 'red-title'],
                        ['img' => 'led-18', 'title' => 'Led Glow Sign Board', 'class' => 'red-title'],
                        ['img' => 'led-19', 'title' => 'Led Glow Sign Board', 'class' => 'red-title'],
                        ['img' => 'led-20', 'title' => 'Custom LED Sign Board', 'class' => 'red-title'],
                    ];
                @endphp

                @foreach ($galleryItems as $item)
                    <div class="impact-card buy-now-btn" data-product="{{ $item['title'] }}" style="cursor: pointer;">
                        <div class="impact-card-inner">
                            <img src="/frontend/Images/led/{{ $item['img'] }}.webp" alt="{{ $item['title'] }}"
                                class="impact-image">
                            <div class="impact-title-box">
                                <span class="{{ $item['class'] ?? '' }}">{{ $item['title'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><br></br>
           
        <div class="text-center">
            <a href="#pricing">
                <button class="contact-btn">Size Specific Pricing</button>
            </a>
        </div>
    </section>

    <section class="led-signs-manufacturing">
        <div class="container pt-5">

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-imagex">
                        <img src="{{ asset('frontend/Images/home/led-sign-bg.webp') }}"
                            alt="Starbucks LED Sign board designed by Brand Signages" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="hero-title text-start">Custom Led Light Board: Built for Premium Impact & Style</h2>
                    <p class="brand-description">
                        Led sign board is the most powerful branding element for modern businesses delivering high
                        visibility, energy efficiency, and premium appeal. Over the years, Led signage has evolved into a
                        must-have identity
                        element for <a href="led-name-board-for-shop"
                            style="color:#E43D12; text-decoration:none;"><strong>retail stores</strong></a>, <a
                            href="name-board-designs-for-shops-bangalore"
                            style="color:#E43D12; text-decoration:none;"><strong>restaurants</strong></a>, <a
                            href="name-board-design-for-office-bangalore"
                            style="color:#E43D12; text-decoration:none;"><strong>corporate offices</strong></a>, <a
                            href="name-board-designs-for-shops-bangalore"
                            style="color:#E43D12; text-decoration:none;"><strong>jewellery shops</strong></a>, <a
                            href="name-board-designs-for-shops-bangalore"
                            style="color:#E43D12; text-decoration:none;"><strong>clinics</strong></a>, and franchise chains
                        across India.
                        Today in 2025, Led board continue to redefine how businesses stand out offering customization
                        and tech-driven illumination.
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            <b>Visibility That Wins Attention:</b> A well-built Led sign board isn’t decoration- it’s a
                            locator. It cuts through visual competition, makes your brand findable, and turns casual
                            visibility into awareness.
                        </li>
                        <li class="mb-3">
                            <b>Brand Recall Without Pause:</b> Led name boards don’t rely on operating hours. They work
                            nonstop- guiding, reminding, and imprinting your brand in the customer’s mind long after
                            shutters close.
                        </li>
                        <li>
                            <b>Perception Built Instantly:</b> Quality Led signage signals discipline, investment, and
                            reliability. Customers judge before entering, and a precise, well-lit sign tells them your
                            standards aren’t negotiable.
                        </li>
                        <div class="mt-4">
                            <a href="blogs/led-sign-board" class="custom-btn">Explore More</a>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <x-trust-features />

    <section class="We-Elevate-Brands-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="We-Elevate-Brands-heading fw-bold">Material Options for<br>Exclusive Led Boards</h2>
            </div>

            <div class="position-relative">
                <div class="swiper We-Elevate-Brands-swiper pt-60">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="3d-led-acrylic-letters" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/led-sign-board/3d-acrylic-led-name-board.webp') }}"
                                        class="card-img-center" alt="Acrylic LED Letters">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="3d-led-acrylic-letters">3D Acrylic
                                                LED Letters</a></h5>
                                        <p class="We-Elevate-Brands-text">Acrylic LED letters are a versatile choice for
                                            LED name boards, offering bright illumination, sleek design, and durability.
                                            Perfect for creating high-impact, attention-grabbing name boards for any
                                            business.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="led-aluminum-channel-letters" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/led-sign-board/aluminum-led-name-board.webp') }}"
                                        class="card-img-center" alt="Aluminum LED Channel Letters">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a
                                                href="led-aluminum-channel-letters">Aluminum LED Letters</a></h5>
                                        <p class="We-Elevate-Brands-text">Aluminum channel letters offer a sleek, 3D design
                                            with front-facing LED illumination. Customizable in black, gold, silver, or
                                            multi-colour, they create premium, high-visibility name boards for retail
                                            businesses. </p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="2d-stencil-cut-acrylic-led-letters" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/led-sign-board/2d-stencil-cut-led-name-board.webp') }}"
                                        class="card-img-center" alt="2D Stencil Cut Sign Boards">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a
                                                href="2d-stencil-cut-acrylic-led-letters">2D Stencil Cut Sign Board</a>
                                        </h5>
                                        <p class="We-Elevate-Brands-text">2D stencil cut name boards offer sleek, flush
                                            designs with hidden LED illumination, providing a cost-effective, professional,
                                            and
                                            customizable signage solution ideal for delicate fonts and minimalist branding.
                                        </p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="3d-crystal-led-letters" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/led-sign-board/crystal-led-name-board.webp') }}"
                                        class="card-img-center" alt="3D Crystal LED Letters">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="3d-crystal-led-letters">3D Crystal
                                                LED Letters</a></h5>
                                        <p class="We-Elevate-Brands-text">3D Crystal LED Letters feature crystal-embedded
                                            acrylic faces with backlit LEDs, deep 3D layering, and luxurious metallic
                                            finishes,
                                            creating dazzling, high-visibility name boards perfect for premium retail and
                                            luxury brands.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="sky-sign-boards" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/led-sign-board/sky-sgn-board-2.webp') }}"
                                        class="card-img-center" alt="Sky LED Sign Boards">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="sky-sign-boards">Sky LED Sign
                                                Boards</a></h5>
                                        <p class="We-Elevate-Brands-text">Sky LED sign boards are large-format rooftop
                                            signs with weather-resistant construction, IP67-rated LEDs, and premium
                                            illumination. Designed for high-rise branding, they ensure long-distance
                                            visibility and strong corporate identity impact.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="led-dot-matrix-display" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/led-sign-board/led-dot-matrix-display.webp') }}"
                                        class="card-img-center" alt="LED Dot Matrix Displays">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="led-dot-matrix-display">LED Dot
                                                Matrix Displays</a></h5>
                                        <p class="We-Elevate-Brands-text">LED Dot Matrix Displays feature exposed,
                                            high-intensity LEDs for maximum brightness and contrast. With programmable RGB
                                            effects and energy-efficient design, they deliver dynamic, attention-grabbing
                                            signage for commercial and retail spaces.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="flexible-led-display-boards" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/led-sign-board/flexibile-led-1.webp') }}"
                                        class="card-img-center" alt="Outdoor Business Signages">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="flexible-led-display-boards">Flexible
                                                LED Displays</a></h5>
                                        <p class="We-Elevate-Brands-text">Flexible LED Displays offer dynamic, programmable
                                            messaging with high brightness and curved installation capability. Available
                                            in RGB or single-color, they allow real-time updates for indoor and outdoor
                                            branding applications.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="neon-signages" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/led-sign-board/led-neon-name-board.webp') }}"
                                        class="card-img-center" alt="Neon LED Signs">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="neon-signages">Neon LED Signs</a>
                                        </h5>
                                        <p class="We-Elevate-Brands-text">LED Neon Name Boards deliver vibrant, durable
                                            name boards with shatter-resistant LED ropes. Offering low power consumption and
                                            vivid
                                            fluorescent colors, they provide a retro neon effect with modern efficiency and
                                            longevity.</p>
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


    <section id="pricing" class="pb-5">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">Led Sign Board Pricing Based on <br>Size and Features</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/led-sign-board-signage.webp') }}" alt="Led Name Board Design"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fs-20">
                        The cost of an Led sign board includes materials and installation. Prices vary based on size, design
                        complexity, lighting, and color options.
                    </p>

                    <p class="fs-20"><strong>Popular Size Options Include:</strong></p>
                    <ul class="fs-20" style="padding-left: 18px;">
                        <li><b>Small Led Boards:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹1,000 – ₹10,000)</li>
                        <li><b>Medium Led Boards:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹10,000 – ₹25,000)</li>
                        <li><b>Large Led Boards:</b> 4 ft x 8 ft (₹25,000 – ₹35,000)</li>
                        <li><b>Custom Dimensions:</b> Depends on your design & customization.</li>
                    </ul>

                    <p class="fs-20">
                        Our Led name boards are built with <strong>IP65-rated Led modules</strong> for full weather
                        resistance,
                        delivering 5,000 to 8,000 nits of brightness for outdoor visibility. With a rated lifespan
                        of <strong>50,000+ hours</strong>, 12 to 15 years at standard usage, they deliver performance
                        year-round.
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
            <h2 class="hero-title  mb-6">Our Recent Led Sign Board <br>Installation Projects</h2>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/titan-store-sign-5.webp"
                            alt="Led Sign Board for Titan Watch- Brand Signages" class="img-fluid">
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
            <h2 class="text-center mb-5 new_custom-heading">Why Choose Brand Signages for Led <br>Sign Boards?</h2>
            <div class="row justify-content-center g-4">

                <!-- Expertise -->
                <div class="col-md-4 justify-content-between d-flex flex-column">
                    <div class="new_custom-box new_custom-light-box d-flex flex-column justify-content-between ">
                        <p>Backed by years of hands-on experience, we specialize in <a
                                style="color: #000000ff;text-decoration: underline;"
                                href="/led-display-board-in-chennai"><strong>Led sign boards</strong></a> that blend
                            functionality
                            with creativity.
                            Our experts ensures every design aligns with your brand identity.</p>
                        <h4 class="new_custom-title">Expert Craftsmanship</h4>
                    </div>
                    <div class="why-choose-image-container">
                        <img src="{{ asset('frontend/Images/led-sign-board/hotwind-led-sign-board.webp') }}"
                            alt="why choose us as your Led Sign Board Partner" class="img-fluid mt-3">
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
{{-- ====================================================
     NEON CUSTOMER REVIEWS SECTION (nr-section)
     ==================================================== --}}
<section class="nr-section py-5">
    <div class="container">
        <div class="row g-4">
            
            {{-- Left Sidebar Column --}}
            <div class="col-lg-4 col-md-4 nr-sidebar-col">
                <div class="nr-sidebar-box pe-lg-3">
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <i class="fa-solid fa-star text-warning fs-4"></i>
                        <span class="fs-2 fw-bold text-dark">4.8</span>
                    </div>
                    <h3 class="nr-sidebar-title">Our Client Reviews</h3>
                    <p class="text-muted  mb-3">
                        400 total &bull; <a href="https://g.page/r/CfwSx40PFmfKEAI/review" class="text-primary text-decoration-underline">Write a Review</a>
                    </p>

                    {{-- Progress Bars Card --}}
                    <div class="nr-progress-card p-3 rounded-3 border mb-4 bg-white">
                        <div class="nr-stat-row d-flex align-items-center gap-2 mb-2">
                            <span class="small text-muted" style="width: 45px;">5-star</span>
                            <div class="progress flex-grow-1" style="height: 6px;">
                                <div class="progress-bar" style="width: 98%; background-color: #e43d12;"></div>
                            </div>
                            <span class="small text-muted" style="width: 35px; text-align: right;">98%</span>
                        </div>
                        <div class="nr-stat-row d-flex align-items-center gap-2 mb-2">
                            <span class="small text-muted" style="width: 45px;">4-star</span>
                            <div class="progress flex-grow-1" style="height: 6px;">
                                <div class="progress-bar" style="width: 4%; background-color: #e43d12;"></div>
                            </div>
                            <span class="small text-muted" style="width: 35px; text-align: right;">4%</span>
                        </div>
                        <div class="nr-stat-row d-flex align-items-center gap-2 mb-2">
                            <span class="small text-muted" style="width: 45px;">3-star</span>
                            <div class="progress flex-grow-1" style="height: 6px;">
                                <div class="progress-bar bg-secondary" style="width: 0.5%;"></div>
                            </div>
                            <span class="small text-muted" style="width: 35px; text-align: right;">&lt;1%</span>
                        </div>
                        <div class="nr-stat-row d-flex align-items-center gap-2 mb-2">
                            <span class="small text-muted" style="width: 45px;">2-star</span>
                            <div class="progress flex-grow-1" style="height: 6px;">
                                <div class="progress-bar bg-secondary" style="width: 0.5%;"></div>
                            </div>
                            <span class="small text-muted" style="width: 35px; text-align: right;">&lt;1%</span>
                        </div>
                        <div class="nr-stat-row d-flex align-items-center gap-2 mb-0">
                            <span class="small text-muted" style="width: 45px;">1-star</span>
                            <div class="progress flex-grow-1" style="height: 6px;">
                                <div class="progress-bar bg-secondary" style="width: 0.5%;"></div>
                            </div>
                            <span class="small text-muted" style="width: 35px; text-align: right;">&lt;1%</span>
                        </div>
                    </div>

                    {{-- Customer Photos Thumbnail Row --}}
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <img src="{{ asset('frontend/Images/led-review-1.webp') }}" class="rounded-2" style="width: 44px; height: 44px; object-fit: cover;" alt="Review thumbnail">
                        <img src="{{ asset('frontend/Images/led-review-2.webp') }}" class="rounded-2" style="width: 44px; height: 44px; object-fit: cover;" alt="Review thumbnail">
                        <img src="{{ asset('frontend/Images/led-review-3.webp') }}" class="rounded-2" style="width: 44px; height: 44px; object-fit: cover;" alt="Review thumbnail">
                        <img src="{{ asset('frontend/Images/led-review-4.webp') }}" class="rounded-2" style="width: 44px; height: 44px; object-fit: cover;" alt="Review thumbnail">
                        <div class="rounded-2 bg-light d-flex align-items-center justify-content-center border" style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-camera text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Cards Grid (2 Columns) --}}
            <div class="col-lg-8 col-md-8">
                <div class="row g-4">
                    
                    {{-- Column 1 --}}
                    <div class="col-md-6 d-flex flex-column gap-4">
                        
                        {{-- Card 1: Smitha soni (Text Only) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Priya Malhotra</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <h4 class="nr-review-title">LED Name Board</h4>
                            <p class="nr-review-desc">Ordered a custom LED sign board for my café's entrance and it's been the best upgrade this year. Bright even in daylight, and installation took under 30 minutes with the included mounting kit.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 2: A.G. (With Image review-ag.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/led-review-1.webp') }}" alt="Shop LED Sign Board" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Rohan Sen</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">Got a waterproof LED sign board for my shop and it's held up through two months of monsoon without any issue. Brightness is still as good as day one.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 3: Customer (With Image review-customer.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/led-review-2.webp') }}" alt="Office LED Sign Board" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Ananya Kumari</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">Great quality sign for my office. Took about 8 days to arrive after finalizing the design, right in line with the quote. Only wish there were a couple more font options.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 4: Anjali Rana (Text Only) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Vikram T.</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <h4 class="nr-review-title">Good work</h4>
                            <p class="nr-review-desc">Needed a branded LED sign board for our retail store and the team nailed the logo replication perfectly. Barely noticed a change in our electricity bill after installing it.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 5: R.K. (With Image review-r.k.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/led-review-3.webp') }}" alt="Retail LED Sign Board" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Sneha Reddy</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">Solid product, good brightness control, and the multicolor option is a nice touch. Delivery took slightly longer than expected but the sign was worth the wait.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                    </div>

                    {{-- Column 2 --}}
                    <div class="col-md-6 d-flex flex-column gap-4">
                        
                        {{-- Card 1: C. (With Image review-c.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/led-review-4.webp') }}" alt="LED Shop Name Board" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Karan Viswakarma</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">Ordered an outdoor LED sign board for our restaurant's patio. IP rating held up exactly as promised through a heavy downpour last month.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 2: Vamshi (Text Only) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Divya Nair</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">Good experience overall. Sign looks premium and the color is exactly what I asked for. Packaging was solid too, arrived without a scratch.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 3: V. (With Image review-v.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/led-review-5.webp') }}" alt="Game Shop LED Sign Board" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Aditya Patel</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">Best decision for my gaming shop setup. Adjustable brightness is genuinely useful, dims down nicely for late-night sessions without being too harsh.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 4: Mayur Sharma (With Image review-Mayur-Sharma.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/led-review-6.webp') }}" alt="Cake Shop LED Sign Board" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Neha Singh</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">Put an LED sign board up in my bakery window and footfall genuinely picked up after that. People stop to take photos outside, which is great free promotion.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                        {{-- Card 5: Anika Mehta (With Image review-Anika-Mehta.webp) --}}
                        <div class="nr-card p-3 border rounded-3 bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('frontend/Images/led-review-7.webp') }}" alt="Gym LED Sign Board" class="img-fluid rounded-3 w-100" style="max-height: 240px; object-fit: cover;">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="nr-username">Siddharth R.</span>
                                <span class="text-danger small">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </span>
                            </div>
                            <p class="nr-review-desc">Ordered one for my commercial gym as a bit of a fun addition. Build quality is solid, and the remote for brightness/color control is simple to use. Would've liked a slightly longer power cable, but no real complaints.</p>
                            <a href="#" class="nr-readmore">Read more</a>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        {{-- End Detailed Information Section --}}
            <div class="nr-info-card-wrapper mt-5 mb-4">
                <p class="nr-info-card-desc">A well-built LED sign board does more than display a name—it pulls foot traffic toward your door and anchors your brand in a customer's memory. At Brand Signages, every LED sign board is engineered for clarity, durability, and visual impact, whether it is a compact LED name board above a reception desk or a large outdoor LED sign board commanding attention from the street.</p>

                <h3 class="nr-info-card-heading">Types of LED Sign Boards and How They Work</h3>
                <p class="nr-info-card-desc">Not every LED sign board functions the same way, and choosing the right illumination style changes how your brand is perceived. Front-lit LED sign boards cast light directly through acrylic or polycarbonate faces, producing bold, readable lettering even under direct sunlight. Backlit LED sign boards create a halo glow around metal or acrylic letters, adding depth and a premium feel to storefronts and office lobbies. Edge-lit LED sign boards use light-guide panels for an ultra-slim profile that works beautifully in modern interiors with limited mounting depth.</p>
                <p class="nr-info-card-desc">For businesses that want dimension and shadow, 3D acrylic LED sign boards combine routed lettering with internal LED modules to produce a sculpted, glowing effect. Understanding these types helps you match the board to your space, viewing distance, and budget rather than settling for a generic solution.</p>

                <div class="nr-info-collapse-content collapse" id="nrInfoMoreContent">
                    <h3 class="nr-info-card-heading">Materials That Define Durability and Finish</h3>
                    <p class="nr-info-card-desc">The skeleton of a long-lasting LED sign board is hidden in its materials. High-grade acrylic remains the most popular face material because it diffuses LED light evenly without yellowing under UV exposure. For outdoor LED sign boards, aluminum composite panels and galvanized metal frames resist rust, warping, and temperature swings. Polycarbonate overlays add impact resistance for boards installed in high-traffic or storm-prone areas.</p>
                    <p class="nr-info-card-desc">At Brand Signages, we pair these substrates with energy-efficient LED modules rated for fifty thousand hours of continuous use. That combination means your LED light board stays bright and structurally sound for years, not months, even when mounted outdoors in harsh weather.</p>

                    <h3 class="nr-info-card-heading">Outdoor LED Sign Boards vs. Indoor LED Light Boards</h3>
                    <p class="nr-info-card-desc">The gap between an outdoor LED sign board and an indoor LED light board is wider than most buyers expect. Outdoor units require sealed driver housings, waterproof cable glands, and UV-stable inks to prevent fading. They also need higher-lumen LED strips to compete with ambient daylight. Indoor LED sign boards can use lower-lumen, warmer LEDs because they operate in controlled lighting and do not face rain, dust, or direct sun.</p>
                    <p class="nr-info-card-desc">If you are installing a LED name board on an exposed façade, balcony, or rooftop, always confirm the IP rating and the sealing method. An under-spec board may look perfect on day one and fail after the first monsoon. Brand Signages builds outdoor-rated LED sign boards with proper gasketing and drainage channels so moisture never pools inside the frame.</p>

                    <h3 class="nr-info-card-heading">Customization: Size, Color, Font, and Mounting</h3>
                    <p class="nr-info-card-desc">Every business has a different wall, a different brand color, and a different viewing angle. That is why rigid, off-the-shelf LED sign boards rarely deliver the impact a custom build can. Brand Signages offers full customization: you choose the exact dimensions, the Pantone-matched LED color temperature, the typeface, and the mounting hardware—wall brackets, raceways, hanging rods, or flush studs.</p>
                    <p class="nr-info-card-desc">Whether you need a sleek LED name board in warm white for a law office or a vivid RGB LED light board that cycles colors for a nightclub entrance, the sign is fabricated to your specifications rather than pulled from a warehouse shelf.</p>

                    <h3 class="nr-info-card-heading">Installation, Maintenance, and Lifespan</h3>
                    <p class="nr-info-card-desc">A professional LED sign board installation starts with a site survey. Technicians check wall material, electrical access, viewing angles, and local signage bylaws before a single bracket is drilled. Once mounted, LED sign boards require minimal maintenance—occasional dusting of the face and an annual inspection of the driver and connections are usually enough.</p>
                    <p class="nr-info-card-desc">Because LEDs run cool and draw a fraction of the power that neon or fluorescent tubes demand, your operating costs stay low and the risk of fire or ballast failure disappears. Most Brand Signages LED light boards operate for five to seven years before any component needs replacement, making them one of the most cost-effective long-term investments in physical branding.</p>

                    <h3 class="nr-info-card-heading">Why Businesses Upgrade to LED Signage</h3>
                    <p class="nr-info-card-desc">Traditional flex boards and painted signs go dark after sunset. Neon tubes flicker, break, and consume heavy power. An LED sign board solves all of those problems in a single upgrade. The light is steady, the colors are saturated, and the energy draw is a fraction of older technologies. For retail stores, restaurants, clinics, and corporate offices, that translates into round-the-clock visibility and a sharper professional image.</p>
                    <p class="nr-info-card-desc">Brand Signages designs each LED sign board, LED name board, and LED light board to turn passers-by into paying customers. If your current signage is fading, flickering, or simply invisible at night, a custom LED solution is the most direct way to fix it.</p>
                </div>
                 <a class="nr-info-readmore-link my-2 d-inline-block" data-bs-toggle="collapse" href="#nrInfoMoreContent" role="button" aria-expanded="false" aria-controls="nrInfoMoreContent" onclick="toggleReadMoreText(this)">
                ➤ Read More
            </a>

            <div class="mt-3">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#globalContactPopup" class="nr-info-touch-btn">
                    Get In Touch <span class="touch-arrow"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 10.5L10.5 3.5M10.5 3.5H4.66667M10.5 3.5V9.33333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                </a>
            </div>
            </div>
        
     

        <script>
        function toggleReadMoreText(btn) {
            setTimeout(function() {
                if (btn.getAttribute('aria-expanded') === 'true') {
                    btn.innerHTML = '➤ Read Less';
                } else {
                    btn.innerHTML = '➤ Read More';
                }
            }, 150);
        }
        </script>

    </div>
</section>

    <section class="other-cities-section py-5">
        <div class="container">
            <h2 class="hero-title">Our Office Locations<br> Across India- Brand Signages</h2>
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

        <section id="designs" class="why-bg-light-pink pt-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="hero-title">LED Sign Board Manufacturers<br> and Suppliers Information</h2>
            </div>

                 <div class="row con-fix2">
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-noida" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/TWKmmM60dNVYO4S8VONCMs3GPyRa9kzyv4Yn8l44.webp" alt="Top 10 Best Led sign board manufacturers in Noida">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGN BOARD NOIDA</span>
                                        <span class="time">2026 Details</span>
                                    </div>
                                    <h5 class="blog-card-title">Led Sign Board in Noida: A Detailed Guide</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-kochi" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/AvuJ4ahNeSAceuXdT0Ns4zpJsx2MZGYdlagSZqFU.webp" alt="Top 10 Best Led sign board manufacturers in Kochi">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGN BOARD KOCHI</span>
                                        <span class="time">2026 Details</span>
                                    </div>
                                    <h5 class="blog-card-title">Led Sign Board in Kochi: In-depth Overview</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-indore" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/SM3SEMJCWggF0Tuucj1e7BZlDTrvUmkr1ABXHvsN.webp" alt="Top 10 Best Led Sign Board Manufacturers in Indore">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGN BOARD INDORE</span>
                                        <span class="time">2026 Details</span>
                                    </div>
                                    <h5 class="blog-card-title">Led Sign Board in Indore: A 2026 Guide</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-mumbai" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/laQTOcE5vvTi6f2e5sAaHPw3ONRv7Xt1llVNXs73.webp" alt="Top 10 Best Led Sign Board Manufacturers in Mumbai">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGN BOARD MUMBAI</span>
                                        <span class="time">2026 Details</span>
                                    </div>
                                    <h5 class="blog-card-title">Led Sign Boards in Mumbai: Detailed 2026 Guide</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-pune" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/YWKDcqTQs0Sn6dP8nLfELKlQymX24ClZXEC3ZviD.webp" alt="Top 10 Best Led Sign Board Manufacturers in Pune">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGN BOARD PUNE</span>
                                        <span class="time">2026 Details</span>
                                    </div>
                                    <h5 class="blog-card-title">Led Sign Boards in Pune: A Comprehensive Guide</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-delhi" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/aeOQFzjsiVvMA1lz9byIAdtZs7WxNMUFcRKKEQuE.webp" alt="Top 10 Best Led Sign Board Manufacturers in Delhi">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGN BOARD DELHI</span>
                                        <span class="time">2026 Details</span>
                                    </div>
                                    <h5 class="blog-card-title">Led Sign Boards in Delhi: 2026 Updated Guide</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-ahmedabad" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/M5q60VXDEKX9cX79o6vZIHjS55ruJdcU2L2nq0xt.webp" alt="Top 10 Best Led Sign Board Manufacturers in Ahmedabad">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGN BOARD AHMEDABAD</span>
                                        <span class="time">2026 Details</span>
                                    </div>
                                    <h5 class="blog-card-title">Led Sign Boards in Ahmedabad: 2026 Updated Guide</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-kolkata" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/8EUlCoLWWOBJ3qHC8YekaNUiKoK2EpzGXIbRPaPT.webp" alt="Top 10 Best Led Sign Board Manufacturers in Kolkata, West Bengal">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGN BOARD KOLKATA</span>
                                        <span class="time">2026 Details</span>
                                    </div>
                                    <h5 class="blog-card-title">Led Sign Boards in Kolkata, West Bengal: 2026 Updated List</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-jaipur" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/SncdbBCAzKEq4mfIV9Pcs38vUQUz1Hn4HOnQ1a7i.webp" alt="Top 10 Led Sign Board Manufacturers in Jaipur, Rajasthan">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGN BOARD JAIPUR</span>
                                        <span class="time">2026 Details</span>
                                    </div>
                                    <h5 class="blog-card-title">Led Sign Boards in Jaipur, Rajasthan: 2026 Updated List</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    
                    


            </div>

        </div>
        </div>
    </section>


    <section id="designs" class="why-bg-light-pink pt-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="hero-title">LED Sign Board Design, Features <br> & Technical Insights</h2>
            </div>

            <div class="row con-fix2">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/latest-trends-in-led-sign-boards-for-retail-restaurants-corporate-offices"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/SezXjSHygpBdNZrYmX65nMZFBQvgQSzrx3UAblJZ.jpg"
                                    alt="Latest Trends in LED Sign Boards for Retail, Restaurants &amp; Corporate Offices">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARDS</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">Latest Trends in LED Sign Boards for Retail, Restaurants &amp;
                                    Corporate Offices</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/indoor-vs-outdoor-led-sign-boards-key-differences-pricing-use-cases"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/ArRdsQjL0MjJzm14La9TmNWWn6lOnzHPJgOJZrt4.jpg"
                                    alt="Indoor vs Outdoor LED Sign Boards: Key Differences, Pricing &amp; Use Cases">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARDS</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">Indoor vs Outdoor LED Sign Boards: Key Differences, Pricing
                                    &amp; Use Cases</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/acrylic-led-vs-neon-led-vs-flex-led-sign-boards-which-one-should-you-pick"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/bjmU9CWXhSiHQLBU3oC6fEvliaTJ0v4LQlcRiS1J.jpg"
                                    alt="Acrylic LED vs Neon LED vs Flex LED Sign Boards: Which One Should You Pick?">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARD</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">Acrylic LED vs Neon LED vs Flex LED Sign Boards: Which One
                                    Should You Pick?</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/how-to-pick-the-perfect-led-sign-board-for-your-business-buying-guide"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/btDp0N9BgbWFOSoPmb1F6Mk754dlYy0H2BP3CD3C.jpg"
                                    alt="How to Pick the Perfect LED Sign Board for Your Business: Buying Guide">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARD</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">How to Pick the Perfect LED Sign Board for Your Business:
                                    Buying Guide</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/top-mistakes-businesses-make-when-installing-led-sign-boards"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/BhQFRzo6MYgpN9224LJ3idQft6KJV4ojo8Q8T8YB.jpg"
                                    alt="Top Mistakes Businesses Make When Installing LED Sign Boards">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARDS</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">Top Mistakes Businesses Make When Installing LED Sign Boards
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/understanding-led-modules-brightness-levels-power-consumption-led-sign-boards"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/GZ0zXEizWFCqpLgj6Gn6G0H064T1fIPtkqp53txJ.jpg"
                                    alt="Understanding LED Modules, Brightness Levels &amp; Power Consumption: LED Sign Boards">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARDS</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">Understanding LED Modules, Brightness Levels &amp; Power
                                    Consumption</h5>
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
                    <a href="https://brandsignages.com/blogs/led-sign-board-maintenance-guide-cleaning-waterproofing-lifespan-tips"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/c6RFaS3vtzmbDsZZa23uAhZBhDzrU8vc5j5UuEyC.jpg"
                                    alt="LED Sign Board Maintenance Guide: Cleaning, Waterproofing &amp; Lifespan Tips">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARD</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">LED Sign Board Maintenance Guide: Cleaning, Waterproofing &amp;
                                    Lifespan Tips</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/how-led-acrylic-3d-letters-are-manufactured-process-materials-costs"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/bE4m6DpSrJRYspYp9pIcGhpkiKXJoF2UC3qia4o1.jpg"
                                    alt="How LED Acrylic 3D Letters Are Manufactured: Process, Materials &amp; Costs">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARDS</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">How LED Acrylic 3D Letters Are Manufactured: Process, Materials
                                    &amp; Costs</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/before-after-how-led-branding-transforms-storefront-visibility-visual-examples"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/6RHcz8fhTb9Xs4sDoGvWOsAGVw7VRO4LpsBXtH5v.jpg"
                                    alt="Before &amp; After: How LED Branding Transforms Storefront Visibility (Visual Examples)">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARDS</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">Before &amp; After: How LED Branding Transforms Storefront
                                    Visibility (Examples)</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/why-led-sign-boards-are-the-best-budget-branding-investment-for-small-businesses"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/M4JL9vGU8YMfuztIyIA4wpL2ot7VU91K3XYnFYc3.jpg"
                                    alt="Why LED Sign Boards Are the Best Budget Branding Investment for Small Businesses">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARDS</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">Why LED Sign Boards Are the Best Budget Branding Investment for
                                    Small Businesses</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/best-led-sign-board-ideas-for-restaurants-cafes-salons-clinics"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/aKQDeuYsrU4xACJi6cYrd9GwxONhbmeiVGgQiaXn.jpg"
                                    alt="Best LED Sign Board Ideas for Restaurants, Cafes, Salons &amp; Clinics">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARDS</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">Best LED Sign Board Ideas for Restaurants, Cafes, Salons &amp;
                                    Clinics</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/how-led-sign-boards-increase-footfall-for-retail-stores-case-study-insights"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/EI051owQeQkdyoefGjKiFR5ekCHOl25ghq6GTR2s.jpg"
                                    alt="How LED Sign Boards Increase Footfall for Retail Stores: Case Study Insights">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">LED SIGN BOARDS</span>
                                    <span class="time">LED Signs</span>
                                </div>
                                <h5 class="blog-card-title">How LED Sign Boards Increase Footfall for Retail Stores: Case
                                    Study Insights</h5>
                            </div>
                        </div>
                    </a>
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
                        signs, scrolling message boards, and indoor or outdoor display boards, helping businesses
                        communicate
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
                        and glow signs. You can choose from <b>10+ exclusive material options</b> like acrylic LED boards,
                        ACP-based
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
                    <P>LED sign boards are energy-efficient, long-lasting, and built for durability. They are
                        water-resistant,
                        weather-proof, and require very minimal maintenance. Their eco-friendly components and safer
                        disposal
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
                    <P>Our LED sign boards are crafted using advanced LED technology and fully customizable designs to meet
                        your
                        brand’s unique requirements. They provide bright, consistent illumination that attracts attention
                        both day and
                        night. The boards are energy-efficient, durable, and designed for long-term use, combining modern
                        aesthetics with
                        functional performance. With options for 3D lettering, glow effects, and premium materials like
                        acrylic, metal and ACP,
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






    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.impact-slide');
            const dots = document.querySelectorAll('.dot');
            let current = 0;
            let slideInterval;

            function showImpactSlide(n) {
                slides[current].classList.remove('active');
                dots[current].classList.remove('active');
                current = (n + slides.length) % slides.length;
                slides[current].classList.add('active');
                dots[current].classList.add('active');
            }

            window.goToSlide = function(n) {
                showImpactSlide(n);
                resetInterval();
            }

            function nextImpactSlide() {
                showImpactSlide(current + 1);
            }

            function resetInterval() {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextImpactSlide, 5000);
            }

            resetInterval();
        });
    </script>


    <script>
        document.addEventListener('click', function(e) {
            var button = e.target.closest('.buy-now-btn');
            if (button) {
                e.preventDefault();
                var productInfo = button.getAttribute('data-product');

                var modalEl = document.getElementById('globalContactPopup');
                if (modalEl && typeof bootstrap !== 'undefined') {
                    var myModal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                    var messageField = document.querySelector(
                        '#globalPopupForm textarea[name="message"]');
                    if (messageField) {
                        messageField.value = 'I am interested in ' + productInfo +
                            '. Please provide more details.';
                    }
                    myModal.show();
                }
            }
        });
    </script>

    {{-- ====================================================
         LIGHTBOX MODAL FOR GALLERY & REVIEW IMAGES
         ==================================================== --}}
    <div class="nr-modal" id="nrImageModal">
        <span class="nr-modal-close" id="nrModalClose">&times;</span>
        <button class="nr-modal-btn nr-modal-prev" id="nrModalPrev"><i class="fa-solid fa-chevron-left"></i></button>
        <div class="nr-modal-content-wrap">
            <img class="nr-modal-img" id="nrModalImg" src="" alt="Zoomed Review Image">
        </div>
        <button class="nr-modal-btn nr-modal-next" id="nrModalNext"><i class="fa-solid fa-chevron-right"></i></button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var modal = document.getElementById("nrImageModal");
            var modalImg = document.getElementById("nrModalImg");
            var closeBtn = document.getElementById("nrModalClose");
            var prevBtn = document.getElementById("nrModalPrev");
            var nextBtn = document.getElementById("nrModalNext");

            var imagesList = [];
            var activeIndex = -1;

            function refreshImagesList() {
                imagesList = [];
                var selectors = [
                    ".nr-sidebar-box img",
                    ".nr-card img"
                ];
                document.querySelectorAll(selectors.join(",")).forEach(function (el) {
                    if (imagesList.indexOf(el.src) === -1) {
                        imagesList.push(el.src);
                    }
                    el.style.cursor = "pointer";
                    el.addEventListener("click", function (e) {
                        e.stopPropagation();
                        var src = e.target.src;
                        activeIndex = imagesList.indexOf(src);
                        openModal(src);
                    });
                });

                // Camera icon box click
                var cameraBox = document.querySelector(".nr-sidebar-box .fa-camera");
                if (cameraBox) {
                    var boxContainer = cameraBox.closest("div");
                    if (boxContainer) {
                        boxContainer.style.cursor = "pointer";
                        boxContainer.addEventListener("click", function (e) {
                            e.stopPropagation();
                            if (imagesList.length > 0) {
                                activeIndex = 0;
                                openModal(imagesList[0]);
                            }
                        });
                    }
                }

                // Attach Read More click handlers
                document.querySelectorAll(".nr-readmore").forEach(function (btn) {
                    btn.style.cursor = "pointer";
                    btn.addEventListener("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var card = this.closest(".nr-card");
                        if (card) {
                            var desc = card.querySelector(".nr-review-desc");
                            if (desc) {
                                desc.classList.toggle("expanded");
                                if (desc.classList.contains("expanded")) {
                                    this.textContent = "Show less";
                                } else {
                                    this.textContent = "Read more";
                                }
                            }
                        }
                    });
                });
            }

            function openModal(src) {
                if (!modal || !modalImg) return;
                modal.style.display = "flex";
                modalImg.src = src;
                document.body.style.overflow = "hidden";
            }

            function closeModal() {
                if (!modal) return;
                modal.style.display = "none";
                document.body.style.overflow = "";
            }

            function showPrev() {
                if (imagesList.length === 0) return;
                activeIndex = (activeIndex - 1 + imagesList.length) % imagesList.length;
                modalImg.src = imagesList[activeIndex];
            }

            function showNext() {
                if (imagesList.length === 0) return;
                activeIndex = (activeIndex + 1) % imagesList.length;
                modalImg.src = imagesList[activeIndex];
            }

            if (closeBtn) closeBtn.addEventListener("click", closeModal);
            if (prevBtn) prevBtn.addEventListener("click", function(e) {
                e.stopPropagation();
                showPrev();
            });
            if (nextBtn) nextBtn.addEventListener("click", function(e) {
                e.stopPropagation();
                showNext();
            });

            if (modal) {
                modal.addEventListener("click", function (e) {
                    if (e.target === modal || e.target === document.querySelector('.nr-modal-content-wrap')) {
                        closeModal();
                    }
                });
            }

            document.addEventListener("keydown", function (e) {
                if (modal && modal.style.display === "flex") {
                    if (e.key === "Escape") closeModal();
                    if (e.key === "ArrowLeft") showPrev();
                    if (e.key === "ArrowRight") showNext();
                }
            });

            refreshImagesList();
        });
    </script>
@endsection
