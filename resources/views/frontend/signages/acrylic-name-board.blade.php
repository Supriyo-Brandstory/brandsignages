@extends('frontend.layout.appLayout')
@php $disableAutoPopup = true; @endphp
@section('content')


 <section class="simple-impact-hero">
        @php
            $slides = [
                [
                    'img' => 'acrylic-name-board-111',
                    'title' => 'Acrylic Name Board, Engineered for Timeless Elegance',
                    'desc' =>
                        'Crafted with high-quality acrylic, our name boards combine crystal-clear sophistication with durability, ensuring refined brand identity.',
                ],
                [
                    'img' => 'acrylic-name-board-112',
                    'title' => 'Acrylic Name Board, Designed to Reflect Your Standards',
                    'desc' =>
                        'Crafted to mirror your business and commitment to quality, our acrylic name board projects credibility and style, helping you build instant recognition.',
                ],
                [
                    'img' => 'acrylic-name-board-113',
                    'title' => 'Acrylic Name Board, Tailored for Every Business Front Door',
                    'desc' =>
                        'Designed to adapt seamlessly to your unique identity, our acrylic name boards deliver high-end appearance and reinforces your presence with timeless appeal.',
                ],
            ];
        @endphp

        <div class="hero-slides-wrapper" id="heroSlider">
            @foreach ($slides as $slide)
                <div class="impact-slide {{ $loop->first ? 'active' : '' }}">
                    <img src="/frontend/Images/name-boards/{{ $slide['img'] }}.webp" alt="{{ $slide['title'] }}">

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

    <section class="instant-pricing">
        <div class="container pt-5">
            <h2>Best Acrylic Name Boards for <br>Home, Office, Shops</h2>
            <p>At Brand Signages, we make the best acrylic <a href="/name-board-design-for-office-bangalore" style="color:#E43D12; text-decoration:none;"><strong>name boards for office</strong></a>, 
            shops, and home designed to make your brand shine. Whether you need a professional office name board or a bold <a href="/name-board-designs-for-shops-bangalore" style="color:#E43D12; text-decoration:none;"><strong>shop name board</strong></a> 
            that commands attention, we deliver the most precision-engineered acrylic boards. Every cut from premium-grade acrylic, finished with weather-resistant durability, and tailored to reflect your unique brand personality.
            </p>
            <p>Our acrylic name boards blend modern aesthetics with lasting performance, ensuring your signage looks impeccable indoors and stands strong outdoor. With customizable fonts, colors, sizes, and mounting options,
                 Brand Signages makes it effortless to create a statement piece that elevates your space. From minimalist home entrances to high-impact retail storefronts, trust us to transform your name into a visual landmark.</p>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-24.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Home- Khanna Bhawan">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Name Board for Home</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹1,000 – ₹4,000 (20% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Name Board for Home (Price: ₹1,000 – ₹3,000)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-25.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Home- Ahuja's Residence">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Name Board for Home</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹1,000 – ₹4,000 (15% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Name Board for Home (Price: ₹1,000 – ₹2,000)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-26.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Home- Chandaranas Advocate Office">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Name Board for Door</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹8,000 – ₹4,500 (18% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Name Board for Door (Price: ₹8,000 – ₹2,500)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-27.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Home- Mukund Villa">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Name Board for Door</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹1,000 – ₹4,000 (20% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Name Board for Door (Price: ₹1,000 – ₹3,000)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-30.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Home- Round Shaped Board">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Name Board for Home</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹1,000 – ₹5,000 (20% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Name Board for Home (Price: ₹1,000 – ₹3,000)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-31.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Office- Smith California">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Name Board for Door</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹900 – ₹4,500 (20% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Name Board for Door (Price: ₹900 – ₹2,500)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-32.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Office- Royal Property">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Name Board for Office</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹1,000 – ₹4,000 (20% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Name Board for Office (Price: ₹1,000 – ₹3,000)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-33.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Shop- NIMA Salon">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Shop Name Board</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹800 – ₹3,500 (18% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Shop Name Board (Price: ₹800 – ₹2,500)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/acrylic-name-1.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Shop- Stella Salon">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Shop Nameplate</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹1,000 – ₹4,500 (18% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Shop Nameplate (Price: ₹2,000 – ₹7,500)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/acrylic-name-4.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Office">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Name Board</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹3,000 – ₹12,000 (15% Off)</p>
                    </div>
                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Name Board for Office (Price: ₹3,000 – ₹12,000)">Buy Now</button>
                    </div>

                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/acrylic-name-5.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Shop- DS Makeup Studio">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Shop Name Board</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹4,000 – ₹15,000 (15% Off)</p>
                    </div>
                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Shop Name Board (Price: ₹4,000 – ₹15,000)">Buy Now</button>
                    </div>

                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/acrylic-name-6.webp') }}" class="card-img-topx"
                        alt="Acrylic Name Board for Office- Goyal Group">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Office Nameplate</h5>

                        <p class="mb-1 mt-0 fs-18 fw-bold text-black">₹3,000 – ₹12,000 (15% Off)</p>
                    </div>
                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Office Nameplate (Price: ₹3,000 – ₹12,000)">Buy Now</button>
                    </div>

                </div>
            </div>

        </div> <!-- row -->
    </div> <!-- container --><br><br>

    <div class="text-center">
        <a href="/contact-us">
            <button class="contact-btn">Explore 1,000+ Designs</button>
        </a>
    </div>
</section>


    <section class="led-signs-manufacturing">
        <div class="container pt-5">

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-imagex">
                        <img src="{{ asset('/frontend/Images/acrylic-sign/acrylic-led.webp') }}"
                            alt="Name Board designed by Brand Signages" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="hero-title text-start">Importance of Choosing the Right Acrylic Name Board</h2>
                    <p class="brand-description">
                        Every entrance tells a story before anyone steps inside. An acrylic name board ensures yours speaks of quality- 
                        adding depth, LED light, and a contemporary edge that makes any doorway feel more welcoming and professionally 
                        complete. And we deliver the most premium-grade options when it comes a signage. 
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            <strong>Enhances Visibility Instantly:</strong> Unlike traditional boards, a polished acrylic name board improves
                             readability with its crystal-clear glossy finish. A well-crafted acrylic name board ensures your business remains
                              sharp, vibrant, and easy to identify.
                        </li>
                        <li class="mb-3">
                            <strong>Reflects Professionalism:</strong> The finish, thickness, and design of your acrylic name board communicate 
                            attention to detail. A premium acrylic board naturally creates confidence among visitors, clients, and guests with
                             its sleek, sophisticated appearance.
                        </li>
                        <li>
                            <strong>Long-Term Value:</strong> Long-Term Value: A high-quality acrylic name board is weather-resistant, durable,
                             and built for consistent performance. With minimal maintenance and timeless aesthetic appeal, it delivers both 
                             functional and visual benefits for years.
                        </li>
                        <div class="mt-4">
                            <a href="#designs" class="custom-btn">Start Your Project</a>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <x-trust-features />

    <section class="We-Elevate-Brands-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="We-Elevate-Brands-heading fw-bold">Explore Our Premium Acrylic Name <br>Board Options</h2>
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

    <section id="pricing">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3 pb-5">
            <h2 class="hero-title">Acrylic Name Board Pricing Options <br>Based on Size</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/name-boards/acrylic-name-board-12.webp') }}"
                            alt="Louis Vuitton Acrylic Name Board Design" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fs-20">
                        The cost of an acrylic name board depends on the material thickness, overall size, lettering
                         style, finish type, and installation requirements. Whether it is for a shop entrance, office 
                         reception, or exterior wall, accurate measurement ensures proper visibility and a polished finish.
                    </p>

                    <ul class="fs-20" style="padding-left: 18px;">
                        <li><b>Small Name Board:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹1,000 – ₹10,000)</li>
                        <li><b>Medium Name Board:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹12,000 – ₹21,000)</li>
                        <li><b>Large Name Board:</b> 4 ft x 8 ft (₹21,000 – ₹40,000)</li>
                        <li><b>Custom Dimension:</b> Based on size, material, and design</li>
                    </ul>

                    <p class="fs-20">
                        Our acrylic name boards are crafted from premium-grade cast acrylic with UV-resistant coating for full 
                        weather protection, maintaining crystal-clear transparency and color in all conditions. With a 
                        material thickness ranging from 3mm to 10mm and precision laser-cut edges, they deliver a flawless
                         glass-like finish that lasts 10 to 15 years.
                    </p>

                    <button class="contact-btn buy-now-btn"
                        data-product="Acrylic Name Board (Price: ₹1,000 - ₹30,000)">Book
                        Order Now</button>
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


        <div class="inquery-from-section">
        <x-coustom-inquiry-form />
    </div>

    <section class="we-deliver">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h2>Best Acrylic Name Board Solutions</h2>
                </div>
                <div class="col-md-8 col-12">

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                    class="img-fluid">
                                <h3>Crystal Transparency</h3>
                                <p>We are Brand Signages, specialists in crafting impactful acrylic name boards that leave 
                                    a lasting impression. Our acrylic boards go beyond simple identification- they reflect 
                                    personality, enhance visibility, and elevate the overall appearance.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}"
                                    alt="Custom Craftmanship" class="img-fluid">
                                <h3>Custom Craftsmanship</h3>
                                <p>Every space has its own identity, and our designs reflect that. From minimalist frosted finishes 
                                    to bold glossy lettering, we customize every <a style="color: #ffff;text-decoration: underline;" href="https://brandsignages.com/arcylic-signages"><strong>acrylic sign board</strong></a> 
                                    and name board to match your style, purpose, and visual appeal.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}"
                                    alt="Highly Durable Name Boards" class="img-fluid">
                                <h3>Highly Durable</h3>
                                <p>We use premium-quality, UV-resistant, and weatherproof acrylic materials to ensure your name board remains strong,
                                     vibrant, and long-lasting, even in demanding outdoor conditions, without yellowing or cracking over time.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/perfect-illu.webp') }}"
                                    alt="Perfect Illumination" class="img-fluid">
                                <h3>Flawless Finish</h3>
                                <p>Add dimension to your brand with our precision-cut acrylic name boards, designed to catch light and draw eyes
                                     effortlessly. Each design is engineered for maximum clarity, ensuring your name stands out with a polished,
                                      glass-like brilliance.
                            </div>
                        </div>


                    </div>
    </section>

    <section id="designs" class="why-bg-light-pink pt-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="hero-title">Discover The Best Acrylic Name Boards <br>for Every Space</h2>

            <div class="row g-4 office-mag-grid mt-2">

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/name-board-design-for-home-trends-styles-ideas-for-2026"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/led-name-board-for-home.webp"
                            alt="Acrylic Name Board Design for Home" class="office-mag-bg">
                        <div class="office-mag-chip">House Name Board</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Acrylic Name Board Design for Home: Trends & Ideas for 2026</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/house-name-plate-design-30-stunning-ideas-for-homes-2026"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/led-name-plate-house.webp" alt="LED House Name Plate Design"
                            class="office-mag-bg">
                        <div class="office-mag-chip">Name Plate Design</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">LED House Name Plate Design: 30+ Ideas for Homes 2026</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/guide-to-signage-board-design-inspiring-sign-board-design-ideas"
                        class="office-mag-card">
                        <img src="https://brandsignages.com/storage/blogs/5xbcHD87sUvd005ZCSV6EEeRrxKJSf5TSaxMgzZV.jpg"
                            alt="Sign Board Design Guide" class="office-mag-bg">
                        <div class="office-mag-chip">LED Sign Boards</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Guide to Signage Board Design: Inspiring Sign Board Design Ideas
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

            </div>

            <h3 class="hero-title pt-5 mt-4">Explore Acrylic Name Board for Shop</h3>

            <div class="row g-4 office-mag-grid mt-2">

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/hardware-shop-name-board-designs-styles-branding-ideas"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/hardware-shop-led-name-board.jpeg"
                            alt="LED Hardware Shop Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Hardware Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">LED Hardware Shop Board: Designs, Styles & Branding Ideas</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/electrical-shop-name-board-design-ideas-trends-branding"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/electrical-shop-led-name-board.jpeg"
                            alt="LED Electrical Shop Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Electrical Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Electrical Shop Acrylic Name Board: Ideas, Trends & Branding</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/stationery-shop-name-board-designs-for-2025-creative-functional-signage"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/stationary-shop-led-name-board.jpeg"
                            alt="LED Stationery Shop Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Stationery Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Stationery Shop Acrylic Name Board Designs: Creative & Functional
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/juice-shop-name-board-design-fresh-eye-catching-ideas-for-modern-juice-bars"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/juice-shop-led-name-board.jpeg"
                            alt="Juice Shop Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Juice Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Juice Shop Acrylic Name Board Design: Eye-Catching Ideas</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/jewellery-shop-name-board-design-stunning-ideas-to-elevate-your-storefront"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/jewellery-shop-led-name-board.jpeg"
                            alt="Jewellery Shop Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Jewellery Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Jewellery Shop Acrylic Name Board Design: Ideas to Elevate Your
                                Storefront</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/furniture-shop-name-board-designs-ideas-trends-for-storefronts"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/furniture-shop-led-name-board.jpeg"
                            alt="Furniture Shop Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Furniture Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Furniture Shop Name Board: Designs, Ideas & Trends
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/footwear-shop-name-board-designs-modern-ideas-styles-trends"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/footwear-shop-led-name-board.jpeg"
                            alt="Footwear Shop Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Footwear Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Footwear Shop Acrylic Name Board Designs: Modern Ideas & Trends
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/medical-shop-name-board-design-modern-styles-trends-best-practices"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/medical-shop-name-board.jpeg"
                            alt="Medical Shop Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Medical Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Medical Shop Name Board Design: Modern Styles, Trends & Best
                                Practices</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/xerox-shop-name-board-designs-a-complete-guide-with-modern-ideas"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/xerox-shop-led-name-board.jpeg"
                            alt="Xerox Shop Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Xerox Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Xerox Shop Acrylic Name Board Designs: Guide with Modern Ideas
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/cloth-saree-shop-name-board-design-trends-for-2025-a-detailed-guide"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/sharee-shop-name-board.jpeg"
                            alt="Cloth & Saree Shop Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Cloth Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Cloth & Saree Shop Acrylic Name Board Design Trends</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/creative-tailoring-shop-name-board-design-ideas-to-elevate-your-brand-in-2025"
                        class="office-mag-card">
                        <img src="https://brandsignages.com/storage/blogs/M7AJuSSHinwNNbRQOBSpB5OBxWvsVN5E7nQrvsNZ.jpg"
                            alt="Tailoring Shop Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Tailor Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Creative Tailoring Shop Acrylic Name Board Design Ideas to Elevate
                                Your
                                Brand</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/top-mobile-shop-name-board-design-trends-to-attract-more-customers"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/mobile-shop-name-board.jpeg"
                            alt="Mobile Shop Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Mobile Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Mobile Shop Acrylic Name Board Design Trends to Attract Customers
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

            </div>




            <!-- Office Magazine Slider: New Design -->
            <div class="office-mag-header text-center mt-5">
                {{-- <span class="office-mag-eyebrow">Office & Workspaces</span> --}}
                <h3 class="hero-title mt-3">Exclusive Acrylic Name Board Designs <br>for Office & Workspaces</h3>

            </div>

            <!-- Office Grid: Static 3-column layout, same card design -->
            <div class="row g-4 office-mag-grid">

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/office-name-board-design-trends-for-2026-a-detailed-guide"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/office-led-name-board.jpeg"
                            alt="Office Name Board Design Trends 2026" class="office-mag-bg">
                        <div class="office-mag-chip">Trends 2026</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Office Acrylic Name Board Design Trends for 2026</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/corporate-office-name-board-a-guide-to-design-materials-branding"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/corporate-office-led-name-board.jpg"
                            alt="Corporate Office Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Corporate</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Corporate Office Acrylic Name Board: Design, Materials & Branding
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/architect-office-name-board-style-purpose-and-design-inspiration"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/architect-office-led-name-board.jpeg"
                            alt="Architect Office Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Architect</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Architect Office Acrylic Name Board: Style, Purpose & Design</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/construction-office-name-board-materials-design-best-practices"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/construction-company-name-board.jpg"
                            alt="Construction Office Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Industrial</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Construction Office Acrylic Name Board: Materials, Design & Best
                                Practices
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/advocate-office-name-board-design-elements-for-professional-identity"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/advocate-office-led-name-board.jpg"
                            alt="Advocate Office Acrylic Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Professional</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Advocate Office Acrylic Name Board: Design Elements for Identity
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/acrylic-name-board-for-office-modern-workspace-branding-essential"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/acrylic-office-led-name-board.jpg"
                            alt="Acrylic Name Board for Office" class="office-mag-bg">
                        <div class="office-mag-chip">Acrylic</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Acrylic Name Board for Office: Modern Workspace Branding
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/glass-name-board-for-office-stylish-and-professional-branding"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/glass-office-name-board.jpeg"
                            alt="Glass Acrylic Name Board for Office" class="office-mag-bg">
                        <div class="office-mag-chip">Glass</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Glass Acrylic Name Board for Office: Style & Branding</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/ultimate-guide-to-office-reception-signage-make-the-right-first-impression"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/office-reception-led-name-board.jpeg"
                            alt="Office LED Reception Signage" class="office-mag-bg">
                        <div class="office-mag-chip">Reception</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Office LED Reception Signage: First Impressions That Last</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/office-name-board-design-ideas-modern-inspiration-for-workplace"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/office-led-name-board-design.jpeg"
                            alt="Office Acrylic Name Board Design Ideas" class="office-mag-bg">
                        <div class="office-mag-chip">Inspiration</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Office Acrylic Name Board Design Ideas: Modern Inspiration for
                                Workplaces
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/name-board-for-office-table-designs-materials-pricing-buyers-guide"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/office-table-led-name-board.jpeg"
                            alt="Office LED Table Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Table / Desk</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Acrylic Name Board for Office Table: Designs and Buyers Guide
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/5-must-have-indoor-office-signs-for-a-functional-workspace"
                        class="office-mag-card">
                        <img src="https://brandsignages.com/storage/blogs/svt9mVEW6sVkDQNCINeyUZXL7iPdR34MKZxQPFPk.webp"
                            alt="Indoor Office LED Signs" class="office-mag-bg">
                        <div class="office-mag-chip">Indoor Signs</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">5 Must-Have Indoor Office Signs for a Functional Workspace</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/hospital-sign-board-design-trends-for-2026-a-detailed-guide"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/hospital-name-board.webp"
                            alt="Hospital LED Sign Board Trends" class="office-mag-bg">
                        <div class="office-mag-chip">Healthcare</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Hospital LED Sign Board Design Trends for 2026: A Detailed Guide
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

            </div>

        </div>
        </div>
    </section>


    <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/name-boards/name-board-23.webp') }}" alt="Neon name board for client"
                    class="img-fluid">
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
                                    Our tech startup needed a signage solution that matched our innovative spirit. The Brand
                                    Signages team didn't just
                                    create a sign; they captured our company's essence. The LED sign board has become a
                                    conversation starter for clients
                                    and employees alike.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-1.webp') }}"
                                        alt="Michael, CEO, Technova Innovations" class="rounded-circle me-3"
                                        width="50" height="50">
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
                                        alt="Asish, CEO, A Hotel Chain" class="rounded-circle me-3" width="50"
                                        height="50">
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
                                        alt="Nandini, CEO, A Real Estate Company" class="rounded-circle me-3"
                                        width="50" height="50">
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
                                        alt="Manager, Bhive Workspace" class="rounded-circle me-3" width="50"
                                        height="50">
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
                            href="https://brandsignages.com/blogs/top-mobile-shop-name-board-design-trends-to-attract-more-customers"><strong>office
                                name board</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/best-tea-shop-name-board-design-trends-to-attract-customers-in-2025"><strong>shop
                                name board</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/name-board-design-for-home-trends-styles-ideas-for-2026"><strong>name
                                boards for home</strong></a>, and more. Our collection includes
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/arcylic-signages"><strong>acrylic name boards</strong></a>, <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/metal-signages"><strong>metal sign boards</strong></a>, <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/led-name-board-design"><strong>Acrylic Name
                                Boards</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/arcylic-signages"><strong>neon signage</strong></a>, glow sign
                        boards, and <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/digital-signages"><strong>digital signage</strong></a>, all
                        fully customizable to reflect your name board identity and enhance visibility.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are Acrylic Name Boards Weatherproof and Durable?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>At Brand Signages, we use weather-resistant acrylic, stainless steel (304/316 grade), ACP backing
                        panels,
                        powder-coated metal frames, and sealed wiring systems to prevent moisture entry. Outdoor
                        installations are
                        fitted with IP-rated LED modules and regulated drivers to handle rain, heat, dust, and humidity
                        without
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
                    <p>An Acrylic Name Board design is important because it directly affects visibility, readability, and
                        the
                        overall perception of your space. Unlike a non-illuminated board, an Acrylic Name Board remains
                        clearly
                        visible during evenings and low-light conditions, ensuring your home or business is easily
                        identifiable at all times.</p>
                    <p>The right design- including font selection, letter thickness, spacing, and lighting style determines
                        how professional and refined the final output appears. A well-planned Acrylic Name Board enhances
                        recognition, improves clarity from a distance, and creates a stronger visual presence compared to
                        basic signage.</p>
                </div>
            </div>


            <div class="faq-item">
                <button class="faq-question">
                    Which Local Vendor Provides Professional Name Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Brand Signages is a trusted local provider known for delivering premium-quality name board designs.
                        From consultation and design to fabrication and installation, every step is handled with precision
                        and professional standards.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Materials Are Used in Name Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We manufacture Acrylic Name Boards using premium-grade materials and high-performance lighting
                        components
                        to ensure durability, brightness, and long-term reliability.</p>

                    <p><strong>Materials we use include:</strong></p>

                    <ul>
                        <li>Acrylic sheets for illuminated faces and edge-lit effects</li>
                        <li>Stainless Steel (304/316 grade) for corrosion-resistant fabricated letters</li>
                        <li>Aluminium Composite Panel (ACP) for strong and stable backing support</li>
                        <li>Powder-coated metal frames for structural strength</li>
                        <li>Waterproof LED modules and quality drivers for consistent illumination</li>
                    </ul>

                    <p>We select materials based on installation location, lighting style, and performance requirements to
                        deliver long-lasting Acrylic Name Board solutions.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are Acrylic Name Boards Suitable for Outdoor Use?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, Acrylic Name Boards are highly suitable for outdoor installation when manufactured using
                        weather-resistant and durable materials. These materials ensure protection against rain, dust,
                        sunlight, and humidity.</p>

                    <p>Common materials used for outdoor Acrylic Name Boards include:</p>
                    <ul>
                        <li>Acrylic panels with waterproof LED modules</li>
                        <li>Stainless Steel (304/316 grade) fabricated letters</li>
                        <li>ACP (Aluminium Composite Panel) backing sheets</li>
                        <li>Powder-coated metal frames for rust resistance</li>
                        <li>IP65-rated LED lighting components for outdoor durability</li>
                    </ul>

                    <p>When built with these materials, Acrylic Name Boards offer excellent nighttime visibility, energy
                        efficiency, and long-lasting performance even in challenging outdoor conditions.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can Name Board Designs Be Fully Customized?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, customization is available for size, font style, material, finish, lighting, and color
                        combinations. A customized name board ensures it aligns perfectly with your brand identity or
                        personal style.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Do I Choose the Right Name Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Consider the installation location, viewing distance, lighting needs, brand personality, and
                        available space. A professional assessment helps determine the most suitable design for maximum
                        impact.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Long Do Acrylic Name Boards Typically Last?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>High-quality Acrylic Name Boards made with durable materials can last between 4 to 8 years or more,
                        depending on environmental conditions and maintenance.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Is Professional Installation Necessary?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Professional installation ensures proper alignment, secure mounting, and safe electrical setup for
                        illuminated boards. It improves durability and provides a clean, premium finish.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Size Should a Name Board Be?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>The size depends on the facade width, viewing distance, and placement area. Proper measurement
                        ensures the name board is proportionate and easily readable from a distance.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can Logos Be Included in Name Board Designs?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, logos, icons, and brand elements can be integrated into the design. Adding a logo enhances brand
                        recognition and creates a stronger visual identity.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Why Choose Brand Signages for Acrylic Name Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Brand Signages is a trusted manufacturer of premium Acrylic Name Boards, delivering high-visibility
                        signage solutions tailored for commercial and residential spaces.</p>

                    <ul>
                        <li>Custom-built Acrylic Name Boards based on your brand identity and space requirements</li>
                        <li>High-quality materials with weather-resistant and durable finishes</li>
                        <li>Advanced LED modules for uniform brightness and energy efficiency</li>
                        <li>In-house design, fabrication, and professional installation</li>
                        <li>Fast turnaround time with strict quality control standards</li>
                    </ul>

                    <p>We focus on precision manufacturing, long-term performance, and impactful visual presence to ensure
                        your Acrylic Name Board stands out day and night.</p>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Office Portal Swiper
            // Office Magazine Swiper - New Design with Autoplay
            new Swiper('.office-mag-swiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                loop: true,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: '.office-mag-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.office-mag-next',
                    prevEl: '.office-mag-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 24
                    },
                }
            });

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
        });
    </script>


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
@endsection
