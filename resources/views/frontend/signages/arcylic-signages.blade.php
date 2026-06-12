@extends('frontend.layout.appLayout')
@section('content')
    <section class="simple-impact-hero">
        @php
            $slides = [
                [
                    'img' => 'acrylic-sign-board-1',
                    'title' => 'Acrylic Sign Board- Signature Identity for Your Space',
                    'desc' =>
                        'Our custom acrylic sign boards display your name, anchor your identity into the walls, the entrance, and the indoor atmosphere of your business.',
                ],
                [
                    'img' => 'led-acrylic-sign-board-1',
                    'title' => 'LED Acrylic Sign Board- Built to Outlast 2026 Trends',
                    'desc' =>
                        'Where other sign boards fade, our LED acrylic sign boards are the future of illuminated sign board- sleek, customizable, and energy-efficient.',
                ],
                [
                    'img' => 'led-acrylic-sign-board-3',
                    'title' => 'LED Acrylic Sign Board for Brands That Own the Night',
                    'desc' =>
                        'Restaurants that stay open late. Hospitals that never sleep. Our LED acrylic sign boards are built for businesses that do not clock out.',
                ],
            ];
        @endphp

        <div class="hero-slides-wrapper" id="heroSlider">
            @foreach ($slides as $slide)
                <div class="impact-slide {{ $loop->first ? 'active' : '' }}">
                    <img src="/frontend/Images/acrylic-sign/{{ $slide['img'] }}.webp" alt="{{ $slide['title'] }}">

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
            <h2>Premium Acrylic & LED Acrylic Sign Boards <br>by Brand Signages</h2>
            <p>Every surface in your business tells a story- the walls, the counters, the entrance. Most businesses waste these surfaces on signage that customers 
                look at once and never recall. Our acrylic sign boards change that equation entirely. Crafted from high-density cast acrylic, <a href="http://brandsignages.test/acrylic-letters" style="color:#E43D12; text-decoration:none;"><b>3D acrylic letters</b></a> carry a weightless 
                transparency that catches ambient light and bends it into something almost luminous. We design and print acrylic sign boards that feels alive and looks the best.
            </p>
            <p>When daylight fades, your signage becomes your strongest branding tool. LED acrylic sign boards combine premium acrylic with bright, energy-efficient illumination to 
                ensure your business remains visible and attractive after dark. Our <a href="https://brandsignages.com/acrylic-led-letter" style="color:#E43D12; text-decoration:none;"><b>acrylic LED letters</b></a> 
                are manufactured with precision and high-quality LED modules to deliver consistent illumination without dark spots or flickering. The result is a professional, modern sign that enhances
                 brand recognition and helps your outdoor deliver clean and elegant glow.</p>
            <!-- Product Impact Gallery Grid -->
            <div class="impact-gallery-grid mt-5">
                @php
                    $galleryItems = [
                        ['img' => 'acrylic-sign-1', 'title' => 'Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-2', 'title' => 'Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-3', 'title' => 'Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-4', 'title' => 'Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-5', 'title' => 'Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-6', 'title' => 'Led Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-7', 'title' => 'Led Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-8', 'title' => 'Led Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-9', 'title' => 'Led Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-10', 'title' => 'Led Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-11', 'title' => 'Led Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-12', 'title' => 'Led Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-13', 'title' => 'Led Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-14', 'title' => 'Led Acrylic Sign Board', 'class' => 'red-title'],
                        ['img' => 'acrylic-sign-15', 'title' => 'Led Acrylic Sign Board', 'class' => 'red-title'],
                    ];
                @endphp

                @foreach ($galleryItems as $item)
                    <div class="impact-card buy-now-btn" data-product="{{ $item['title'] }}" style="cursor: pointer;">
                        <div class="impact-card-inner">
                            <img src="/frontend/Images/acrylic-sign/{{ $item['img'] }}.webp" alt="{{ $item['title'] }}"
                                class="impact-image">
                            <div class="impact-title-box">
                                <span class="{{ $item['class'] ?? '' }}">{{ $item['title'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="text-center">
            <a href="#pricing">
                <button class="contact-btn">Check Pricing</button>
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
                    <h2 class="hero-title text-start">LED Acrylic Sign Board: Where Design Meets Illumination</h2>
                    <p class="brand-description">
                        A premium <a href="https://brandsignages.com/led-acrylic-3d-glow-sign-board" style="color:#E43D12; text-decoration:none;"><b>LED sign board</b></a> is more than 
                        a display board- it is a statement of brand quality. Combining crystal-clear acrylic with precision LED lighting, these sign boards create a sophisticated look 
                        that enhances <a href="https://brandsignages.com/led-acrylic-3d-glow-sign-board" style="color:#E43D12; text-decoration:none;"><b>storefronts</b></a>, <a href="https://brandsignages.com/led-acrylic-3d-glow-sign-board" style="color:#E43D12; text-decoration:none;"><b>offices</b></a>, showrooms, and commercial spaces. We design for modern appearance that makes brands look established, professional, and memorable.
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            <b>Creates a Very First Impression:</b> Customers form opinions within seconds. A well-crafted LED acrylic sign board communicates professionalism, trust, and attention to detail before a conversation even begins.
                        </li>
                        <li class="mb-3">
                            <b>Highlight Your Brand Identity:</b> From logos and brand names to custom shapes and colors, acrylic LED signage transforms ordinary branding into a visually striking experience that customers remember.
                        </li>
                        <li>
                            <b>Elegant Illumination:</b> Built using durable acrylic and energy-efficient LEDs, these sign boards deliver a clean, consistent glow while maintaining low operating costs and long-term performance.
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
                <h2 class="We-Elevate-Brands-heading fw-bold">Explore Our Premium Acrylic Sign <br>Board Options</h2>
            </div>

            <div class="position-relative">
                <div class="swiper We-Elevate-Brands-swiper pt-60">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="3d-led-acrylic-letters" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/led-sign-board/3d-acrylic-letters-mounted-on-acp-base-frame-2.webp') }}"
                                        class="card-img-center" alt="Acrylic LED Letters">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="3d-led-acrylic-letters">3D Acrylic
                                                Led Letters</a></h5>
                                        <p class="We-Elevate-Brands-text">Acrylic Led letters are a versatile choice for
                                            Led sign board, offering bright illumination, sleek design, and durability.
                                            Perfect for creating high-impact, attention-grabbing name board for any
                                            business.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="led-aluminum-channel-letters" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/led-sign-board/aluminum-channel-letters-acp-2.webp') }}"
                                        class="card-img-center" alt="Aluminum LED Channel Letters">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="3d-acp-letter-acrylic">ACP
                                                Acrylic Letters</a></h5>
                                        <p class="We-Elevate-Brands-text">Aluminum channel letters offer a sleek, 3D design
                                            with front-facing Led illumination. Customizable in black, gold, silver, or
                                            multi-colour, they create premium, high-visibility signage for retail and
                                            boutique businesses. </p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="2d-stencil-cut-acrylic-led-letters" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/led-sign-board/2d-stencil-cut-letters-2.webp') }}"
                                        class="card-img-center" alt="2D Stencil Cut Sign Boards">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a
                                                href="2d-stencil-cut-acrylic-led-letters">2D Stencil Cut Acrylic Board</a>
                                        </h5>
                                        <p class="We-Elevate-Brands-text">2D stencil cut sign boards offer sleek, flush
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
                                    <img src="{{ asset('frontend/Images/acrylic-sign/3d-acrylic-1.webp') }}"
                                        class="card-img-center" alt="3D Acrylic Letters">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="acrylic-letters">3D Acrylic Letters</a></h5>

                                        <p class="We-Elevate-Brands-text">3D Acrylic Letters feature precision-cut acrylic faces, dimensional raised profiles, and smooth polished finishes, creating bold, professional signage with exceptional visibility and a premium appearance, ideal for retail stores, corporate offices, showrooms.</p>
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
            <h2 class="hero-title">Acrylic Sign Board Price & Specifications <br>Explore Options</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/acrylic-sign/acrylic-led-sign.webp') }}" alt="Led Name Board Design"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fs-20">
                        The cost of an acrylic sign board depends on factors such as material thickness, letter depth, design complexity, finish options, and installation requirements. For businesses seeking illuminated signage, LED acrylic sign boards are also available with integrated lighting.
                    </p>

                    <ul class="fs-20" style="padding-left: 18px;">
                        <li><b>Small Sign Boards:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹2,000 – ₹8,000)</li>
                        <li><b>Medium Sign Boards:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹8,000 – ₹15,000)</li>
                        <li><b>Large Sign Boards:</b> 4 ft x 8 ft (₹15,000 – ₹40,000)</li>
                        <li><b>Custom Dimensions:</b> Depends on your design & customization.</li>
                    </ul>

                    <p class="fs-20">
                        Our acrylic sign boards are manufactured using premium-grade acrylic for professional appearance and long-lasting durability. For businesses requiring day-and-night visibility, LED acrylic sign boards feature energy-efficient LED illumination, weather-resistant construction, and low-maintenance performance.
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
            <h2 class="hero-title  mb-6">Recent Acrylic Sign Board Projects <br>by Brand Signages</h2>
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


<section class="other-cities-section py-5">
    <div class="container">
        <h2 class="my-5">Acrylic Sign Boards in Other Cities</h2>
        <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
            <div class="other-cities-card">
                <a href="https://brandsignages.com/premium-acrylic-sign-boards-in-mumbai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Acrylic Sign Boards Mumbai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Mumbai</p>
                </div>
            </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/acrylic-signages-in-chennai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Acrylic Signages Chennai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Chennai</p>
                </div>
                </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/acrylic-signage-manufacturer-bangalore" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="Acrylic Signages Bangalore">
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
                                    Our tech startup needed a signage solution that matched our innovative spirit. The
                                    design team didn't just create a sign; they captured our company's entire essence.
                                    The LED-powered brand display has become a conversation starter for clients and
                                    employees alike.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}"
                                        alt="Sneha Reddy- Our Client" class="rounded-circle me-3" width="50"
                                        height="50">
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
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50"
                                        height="50">
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
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50"
                                        height="50">
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
        <h1 class="faq-title">Frequently Asked Questions</h1>

        <div class="faq-item">
            <button class="faq-question">
                What are The Common Applications of Acrylic Sign Boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic sign boards are widely used across various industries due to their versatility and
                    durability:</p>
                <ul>
                    <li>Corporate Offices: Directional signs, room identification, branding displays.</li>
                    <li>Retail Spaces: Promotional displays, and product information signs.</li>
                    <li>Restaurants: Menu boards, special displays.</li>
                    <li>Hospitals: Wayfinding systems to guide patients.</li>
                    <li>Events: Awards plaques or recognition displays.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How Long Do Acrylic Sign Boards Typically Last?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>With proper care and maintenance, acrylic sign boards can last several years without
                    significant wear or fading. Their resistance to UV rays ensures that colors remain vibrant over
                    time, making them an excellent long-term investment for any business.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How Does Acrylic Sign Boards Compare to Other Signage Materials?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Here is a comprehensive comparison of acrylic signboards with other signage materials:</p>
                <ul>
                    <li>Durability: More impact-resistant than glass; won’t shatter easily.</li>
                    <li>Weight: Lighter than glass or metal; easier to install.</li>
                    <li>Weather Resistance: Suitable for both indoor and outdoor use without warping.</li>
                    <li>Customization: Easier to mold into various shapes compared to wood or metal.</li>
                </ul>
                <p>These benefits make acrylic a preferred choice among businesses seeking effective signage
                    solutions.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What’s The Best Way to Clean and Maintain Acrylic Signage Boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>According to experts, these are the steps to clean acrylic sign boards:</p>
                <ul>
                    <li>Use a soft cloth (microfiber works best) with mild soap mixed with water.</li>
                    <li>Gently wipe the surface without applying excessive pressure.</li>
                    <li>Avoid using abrasive cleaners or materials that could scratch the surface.</li>
                    <li>Regular maintenance will keep them looking new; consider cleaning every few weeks depending
                        on exposure to dirt or dust.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can Acrylic Signage Boards be Used for Outdoor Advertising?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic sign boards with LED is ideal for outdoor advertising due to its weather-resistant
                    properties:</p>
                <ul>
                    <li>They can withstand rain, sun exposure, and varying temperatures without deteriorating
                        quickly.</li>
                    <li>For outdoor applications, ensure any printed graphics use UV-resistant inks or coatings to
                        prevent fading over time.</li>
                    <li>Additionally, using thicker sheets enhances durability against potential impacts from
                        environmental factors like wind or debris.</li>
                    <li>This makes them an excellent choice for businesses looking to increase visibility outdoors
                        while maintaining quality over time.</li>
                </ul>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                How Do Acrylic Sign Boards Contribute to Brand Visibility?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic sign boards improve brand visibility by offering an elegant and professional appearance. 
                    They can be customized with bright colors, 3D letters, and unique designs to attract attention. Acrylic 
                    boards also come with illuminated options for better visibility at night. High-quality printing and soft 
                    finishes make logos and text stand out. By maintaining a strong and attractive presence, acrylic signage 
                    helps companies create a memorable brand image, which makes it easier for customers to recognize and trust 
                    the brand.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
             Can LED Lighting be Integrated into Acrylic Sign Boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, LED lighting can be added to acrylic sign boards to make them look more visually striking. 
                    Businesses often use backlit or illuminated acrylic signs to improve visibility, especially in areas with 
                    low light. The LED-illuminated acrylic signage is commonly used in retail shops, restaurants, hotels, and corporate 
                    offices. It gives an elegant look, better brand recognition, and engagement. </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
             Can Acrylic Sign Boards Withstand Extreme Weather Conditions?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, acrylic sign boards are durable and can overcome various climate conditions. They bear rain, wind, 
                    and sunshine, so they can be used for both internal and external purposes. High-quality acrylic does 
                    not fade easily, even in excessive cold or heat. However, for hard exterior environments, companies 
                    can use additional coatings to increase durability. Acrylic signs are also water resistant, which 
                    prevents moisture damage. Adequate maintenance can make them a reliable option for long-term usage.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can Acrylic Sign Boards be Customized in Terms of Shape and Size?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, acrylic sign boards can be tailored in several shapes and sizes to adjust your specific requirements. 
                    They can be cut into exceptional designs, from simple rectangles to complicated logos and letters. You can select 
                    thickness, color, and finish (bright or matte) to suit your branding. Acrylic signs can also include 3D letters or 
                    LED lighting for additional effect. We provide custom acrylic signage design services to clients across India. </p>
            </div>
        </div>

    </div>
</section>
<section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Signage & Branding</h2>
            <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the signage designs through our articles.</p>

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
@endsection