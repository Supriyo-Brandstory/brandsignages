@extends('frontend.layout.appLayout')
@php $disableAutoPopup = true; @endphp
@section('content')
    <div class="container py-5">
        <div class="bread-cum-menu">
            <p><a href="{{ route('index') }}">Home</a> / Doctor Name Board</p>
        </div>
        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-24.webp') }}" class="card-img-topx"
                        alt="Acrylic LED Doctor Name Board - Dr. Khanna">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic LED Doctor Name Board</h5>

                        <p class="mb-1 fw-bold text-black">₹1,500 – ₹5,000 (20% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic LED Doctor Name Board (Price: ₹1,500 – ₹4,000)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-25.webp') }}" class="card-img-topx"
                        alt="Acrylic LED Doctor Nameplate - Dr. Ahuja's Clinic">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic LED Nameplate for Clinic</h5>

                        <p class="mb-1 fw-bold text-black">₹1,500 – ₹5,000 (15% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic LED Nameplate for Clinic (Price: ₹1,500 – ₹3,000)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-26.webp') }}" class="card-img-topx"
                        alt="Acrylic LED Clinic Name Board - Dr. Chandarana">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Doctor Doctor Name Board for Door</h5>

                        <p class="mb-1 fw-bold text-black">₹2,000 – ₹5,500 (18% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Doctor Doctor Name Board for Door (Price: ₹2,000 – ₹3,500)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-27.webp') }}" class="card-img-topx"
                        alt="Acrylic LED Doctor Name Board - Mukund Clinic">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Doctor Doctor Name Board for Clinic</h5>

                        <p class="mb-1 fw-bold text-black">₹1,500 – ₹5,000 (20% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Doctor Doctor Name Board for Clinic (Price: ₹1,500 – ₹4,000)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-30.webp') }}" class="card-img-topx"
                        alt="Acrylic LED Doctor Nameplate - Round Shaped">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Clinic LED Nameplate</h5>

                        <p class="mb-1 fw-bold text-black">₹1,500 – ₹6,000 (20% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Clinic LED Nameplate (Price: ₹1,500 – ₹4,000)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-31.webp') }}" class="card-img-topx"
                        alt="Acrylic LED Doctor Nameplate - Dr. Smith">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Doctor Clinic Nameplate for Door</h5>

                        <p class="mb-1 fw-bold text-black">₹1,200 – ₹5,500 (20% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Doctor Clinic Nameplate for Door (Price: ₹1,200 – ₹3,500)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-32.webp') }}" class="card-img-topx"
                        alt="Acrylic LED Doctor Name Board - Royal Clinic">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Doctor Name Board</h5>

                        <p class="mb-1 fw-bold text-black">₹1,500 – ₹5,000 (20% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Doctor Name Board (Price: ₹1,500 – ₹4,000)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-33.webp') }}" class="card-img-topx"
                        alt="Acrylic LED Hospital Name Board - NIMA Health">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic LED Hospital Name Board</h5>

                        <p class="mb-1 fw-bold text-black">₹1,200 – ₹4,500 (18% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic LED Hospital Name Board (Price: ₹1,200 – ₹3,500)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-22.webp') }}" class="card-img-topx"
                        alt="Acrylic Doctor Name Board for Shop- Byron Humburgers Store">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic LED Shop Nameplate</h5>

                        <p class="mb-1 fw-bold text-black">₹1,000 – ₹4,500 (18% Off)</p>

                    </div>

                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic LED Shop Nameplate (Price: ₹1,000 – ₹2,500)">Buy Now</button>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-21.webp') }}" class="card-img-topx"
                        alt="Acrylic Doctor Name Board for Shop- Barnda Store">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic Doctor Name Board for Shop</h5>

                        <p class="mb-1 fw-bold text-black">₹1,000 – ₹4,000 (15% Off)</p>
                    </div>
                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic Doctor Name Board for Shop (Price: ₹1,000 – ₹2,000)">Buy Now</button>
                    </div>

                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-23.webp') }}" class="card-img-topx"
                        alt="Acrylic Doctor Name Board for Shop- Sam's Coffee Shop">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic LED Shop Name Board</h5>

                        <p class="mb-1 fw-bold text-black">₹1,000 – ₹4,000 (15% Off)</p>
                    </div>
                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic LED Shop Name Board (Price: ₹1,000 – ₹2,000)">Buy Now</button>
                    </div>

                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card h-100 shadow-sm border-0 pb-5">
                    <img src="{{ asset('/frontend/Images/name-boards/led-name-102.webp') }}" class="card-img-topx"
                        alt="Acrylic Doctor Name Board for Office- Celine">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Acrylic LED Office Nameplate</h5>

                        <p class="mb-1 fw-bold text-black">₹1,000 – ₹4,000 (15% Off)</p>
                    </div>
                    <div class="text-center">
                        <button class="contact-btn buy-now-btn"
                            data-product="Acrylic LED Office Nameplate (Price: ₹1,000 – ₹2,000)">Buy Now</button>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <!--<div class="newly-bannersection">
                                                                                                                                                    <div class="bar">
                                                                                                                                                        <h1 class="hero-banner_title">Led Light Name Board</h1>

                                                                                                                                                    </div>
                                                                                                                                                    
                                                                                                                                                    <div class="slider-wrapper">

                                                                                                                                                        <div class="main-slider">
                                                                                                                                                            <div class="slide active">
                                                                                                                                                                <img src="/frontend/Images/name-boards/led-name-1.webp" alt="Doctor Name Board Design for Shop- Raifa Store">
                                                                                                                                                            </div>
                                                                                                                                                            <div class="slide">
                                                                                                                                                                <img src="/frontend/Images/name-boards/led-name-2.webp" alt="Doctor Name Board Design for Shop- Barnda Store">
                                                                                                                                                            </div>
                                                                                                                                                            <div class="slide">
                                                                                                                                                                <img src="/frontend/Images/name-boards/led-name-3.webp" alt="Doctor Name Board Design for Shop- Byron Humburgers Store">
                                                                                                                                                            </div>
                                                                                                                                                            <div class="slide">
                                                                                                                                                                <img src="/frontend/Images/name-boards/led-name-4.webp" alt="Doctor Name Board Design for Home- Khanna Bhawan">
                                                                                                                                                            </div>
                                                                                                                                                            <div class="slide">
                                                                                                                                                                <img src="/frontend/Images/name-boards/led-name-12.webp" alt="Doctor Name Board Design for Multi-Story Bulding- Direction Sign">
                                                                                                                                                            </div>
                                                                                                                                                            <div class="slide">
                                                                                                                                                                <img src="/frontend/Images/name-boards/led-name-5.webp" alt="Doctor Name Board Design for Home- Ahujas Residence">
                                                                                                                                                            </div>
                                                                                                                                                            <div class="slide">
                                                                                                                                                                <img src="/frontend/Images/name-boards/led-name-6.webp" alt="Doctor Name Board Design for Office- Apples">
                                                                                                                                                            </div>
                                                                                                                                                            <div class="slide">
                                                                                                                                                                <img src="/frontend/Images/name-boards/led-name-7.webp" alt="Doctor Name Board Design for Advocate Office- Chandaranas">
                                                                                                                                                            </div>
                                                                                                                                                            <div class="slide">
                                                                                                                                                                <img src="/frontend/Images/name-boards/led-name-8.webp" alt="Doctor Name Board Design">
                                                                                                                                                            </div>
                                                                                                                                                          
                                                                                                                                                        </div>

                                                                                                                                                        
                                                                                                                                                        <div class="nav-arrow prev">&#8249;</div>
                                                                                                                                                        <div class="nav-arrow next">&#8250;</div>
                                                                                                                                                    


                                                                                                                                                        <div class="thumbnails">
                                                                                                                                                            <img src="/frontend/Images/name-boards/led-name-1.webp" alt="Doctor Name Board Design for Shop- Raifa Store" class="thumb active" data-index="0">
                                                                                                                                                            <img src="/frontend/Images/name-boards/led-name-2.webp" alt="Doctor Name Board Design for Shop- Barnda Store" class="thumb" data-index="1">
                                                                                                                                                            <img src="/frontend/Images/name-boards/led-name-3.webp" alt="Doctor Name Board Design for Shop- Byron Humburgers Store" class="thumb" data-index="2">
                                                                                                                                                            <img src="/frontend/Images/name-boards/led-name-4.webp" alt="Doctor Name Board Design for Home- Khanna Bhawan" class="thumb" data-index="3">
                                                                                                                                                            <img src="/frontend/Images/name-boards/led-name-12.webp" alt="Doctor Name Board Design for Multi-Story Bulding- Direction Sign" class="thumb" data-index="4">
                                                                                                                                                            <img src="/frontend/Images/name-boards/led-name-5.webp" alt="Doctor Name Board Design for Home- Ahujas Residence" class="thumb" data-index="5">
                                                                                                                                                            <img src="/frontend/Images/name-boards/led-name-6.webp" alt="Doctor Name Board Design for Office- Apples" class="thumb" data-index="6">
                                                                                                                                                            <img src="/frontend/Images/name-boards/led-name-7.webp" alt="Acrylic LED Sign Board - Corporate Office" class="thumb" data-index="7">
                                                                                                                                                            <img src="/frontend/Images/name-boards/led-name-8.webp" alt="House Doctor Name Board Design" class="thumb" data-index="8">
                                                                                                                                                        </div>
                                                                                                                                                    </div>

                                                                                                                                                  
                                                                                                                                                    <div class="content">
                                                                                                                                                        <h1 class="hero-banner_title">Doctor Name Board</h1>
                                                                                                                                                        <p class="subtitle"><b>Price: ₹1,000 - ₹30,000.00 + GST</b></p>

                                                                                                                                                        <div class="divider"></div>
                                                                                                                                                        <p class="fs-16">LED name boards are a modern and energy-efficient way to showcase your brand. Compared to traditional signage,
                                                                                                                                                            LED name boards consume less power, require minimal maintenance, and offer brighter, long-lasting illumination. We create premium
                                                                                                                                                             LED name boards using high-quality LED modules, designed in acrylic, metal, wooden, and custom material formats with front-lit,
                                                                                                                                                             backlit, and halo illumination options.</p>
                                                                                                                                                        <ul class="features">
                                                                                                                                                            <li>LED name board for house, office, shop, etc.</li>
                                                                                                                                                            <li>3D Letters highlight your name, brand, or logo</li>
                                                                                                                                                            <li>Customized based on space and visibility needs</li>
                                                                                                                                                            <li>Energy-efficient illumination with minimal maintenance</li>
                                                                                                                                                            <li>PAN India service including design & installation</li>
                                                                                                                                                        </ul>

                                                                                                                                                        <div class="buttons">
                                                                                                                                                            <a href="#pricing" class="btn">Explore Pricing</a>
                                                                                                                                                            <a href="{{ route('contact_us') }}" class="btn">Place Order</a>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>-->

    <!-- About Section -->

    <section class="instant-pricing">
        <div class="container pt-5">
            <h2>Best Doctor Name Boards for clinics, Hospitals & Medical Stores</h2>
            <p>Brand Signages offers a wide range of <strong>doctor name boards for clinic</strong>, hospitals, and medical
                spaces.
                We create customized boards with high-quality LED modules to ensure bright visibility, energy efficiency,
                and long-lasting performance.
            </p>
            <p>Our collection includes acrylic, metal, glass, and backlit formats tailored to professional medical
                environments.
                Whether you need a compact LED light <strong>doctor name plate for clinic</strong> entrance, larger
                illuminated <strong>hospital name board</strong>, or exclusive <strong>medical shop name board</strong>, we
                provide precise fabrication and professional installation support. Each <strong>Doctor Name Board</strong>
                is crafted for durability, clear readability, and a premium illuminated finish for professional identity.
            </p>
            <img src="/frontend/Images/name-boards/led-name-9.webp"
                alt="Exclusive Doctor Name Board Design by Brand Signages" class="shop-image">

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
                        <img src="{{ asset('frontend/Images/name-boards/name-boards.webp') }}"
                            alt="Doctor Name Board designed by Brand Signages" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="hero-title text-start">The Importance of Choosing the Right Doctor Name Board</h2>
                    <p class="brand-description">
                        In the healthcare industry, a clear and professional doctor name board is essential for patient
                        trust and easy navigation. It ensures your clinic or hospital stands out and helps patients identify
                        the right department or specialist instantly, both in daylight and at night.
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            <strong>Builds Professional Trust:</strong> A high-quality illuminated name board reflects
                            professionalism and care. It establishes an immediate sense of trust with patients and visitors
                            arriving at your medical facility.
                        </li>
                        <li class="mb-3">
                            <strong>Ensures Easy Navigation:</strong> Medical facilities can be complex. Bold, illuminated
                            doctor name plates ensure that patients can find the correct chamber or department without
                            confusion, even from a distance.
                        </li>
                        <li>
                            <strong>Long-Term Reliability:</strong> Developed specifically for healthcare environments, our
                            boards are energy-efficient, easy to clean, and built for consistent 24/7 performance with
                            minimal maintenance.
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
                <h2 class="We-Elevate-Brands-heading fw-bold">Doctor Name Board Materials <br>and Finish Options</h2>
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

    <section id="pricing">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3 pb-5">
            <h2 class="hero-title">Doctor Name Board Design Latest <br>Pricing & Size Options</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/name-boards/led-name-101.webp') }}"
                            alt="Rivetoile Doctor Name Board Design" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fs-20">
                        The cost of an <a href="doctor-name-board-design"
                            style="color:#E43D12; text-decoration:none;"><strong>LED name board</strong></a> depends on the
                        material, overall size, lettering style, type of LED
                        illumination,
                        and installation requirements. Whether it is for a shop entrance, office reception, or exterior
                        wall, accurate
                        measurement ensures proper visibility and finish.
                    </p>

                    <p class="fs-20"><strong>Doctor Name Board Sizes Include:</strong></p>
                    <ul class="fs-20" style="padding-left: 18px;">
                        <li><b>Small Name Board:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹1,000 – ₹11,000)</li>
                        <li><b>Medium Name Board:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹12,000 – ₹21,000)</li>
                        <li><b>Large Name Board:</b> 4 ft x 8 ft (₹21,000 – ₹30,000)</li>
                        <li><b>Custom Dimension:</b> Based on size, material, and design</li>
                    </ul>

                    <p class="fs-20">
                        Our LED name boards are built with IP65-rated LED modules for full weather resistance, delivering
                        5,000 to 8,000 nits of brightness for outdoor visibility. With a rated lifespan of 50,000+ hours,
                        roughly 12 to 15 years at standard usage, they deliver consistent performance year-round.
                    </p>

                    <button class="contact-btn buy-now-btn"
                        data-product="Doctor Name Board (Price: ₹1,000 - ₹30,000)">Book
                        Order Now</button>
                </div>

    </section>

    <section id="designs" class="why-bg-light-pink pt-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="hero-title">Discover The Best Doctor Name Boards <br>for Every Space</h2>
                <p class="fs-20">An illuminated identity makes a difference and we bing you the best <a
                        href="name-board-design-bangalore" style="color:#E43D12; text-decoration:none;"><strong>name board
                            designs</strong></a> in India. Our <strong>LED name board</strong>
                    collection is built for homes, offices,
                    retail outlets, and commercial buildings that require strong visibility with a refined finish. From
                    subtle entrance
                    plates to bold exterior installations, every Doctor LED name board is crafted to enhance readability,
                    and deliver a clean, modern appearance. We focus on <strong>precision fabrication</strong>,
                    <strong>balanced lighting</strong>, and <strong>durable materials</strong> to ensure your name remains
                    clear and impressive for years.
                </p>

            </div>

            <h3 class="hero-title">Explore Doctor Name Board Designs for Clinics</h3>

            <div class="row g-4 office-mag-grid mt-2">

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/name-board-design-for-home-trends-styles-ideas-for-2026"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/led-name-board-for-home.webp"
                            alt="Doctor Name Board Design for Home" class="office-mag-bg">
                        <div class="office-mag-chip">House Name Board</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Doctor Name Board Design for Home: Trends & Ideas for 2026</h4>
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

            <h3 class="hero-title pt-5 mt-4">Explore Name Board Designs for Hospitals</h3>

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
                            <h4 class="office-mag-title">Electrical Shop Doctor Name Board: Ideas, Trends & Branding</h4>
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
                            <h4 class="office-mag-title">Stationery Shop Doctor Name Board Designs: Creative & Functional
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/juice-shop-name-board-design-fresh-eye-catching-ideas-for-modern-juice-bars"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/juice-shop-led-name-board.jpeg"
                            alt="Juice Shop Doctor Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Juice Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Juice Shop Doctor Name Board Design: Eye-Catching Ideas</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/jewellery-shop-name-board-design-stunning-ideas-to-elevate-your-storefront"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/jewellery-shop-led-name-board.jpeg"
                            alt="Jewellery Shop Doctor Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Jewellery Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Jewellery Shop Doctor Name Board Design: Ideas to Elevate Your
                                Storefront</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/furniture-shop-name-board-designs-ideas-trends-for-storefronts"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/furniture-shop-led-name-board.jpeg"
                            alt="Furniture Shop Doctor Name Board" class="office-mag-bg">
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
                            alt="Footwear Shop Doctor Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Footwear Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Footwear Shop Doctor Name Board Designs: Modern Ideas & Trends
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/medical-shop-name-board-design-modern-styles-trends-best-practices"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/medical-shop-name-board.jpeg"
                            alt="Medical Shop Doctor Name Board" class="office-mag-bg">
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
                            alt="Xerox Shop Doctor Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Xerox Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Xerox Shop Doctor Name Board Designs: Guide with Modern Ideas
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/cloth-saree-shop-name-board-design-trends-for-2025-a-detailed-guide"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/sharee-shop-name-board.jpeg"
                            alt="Cloth & Saree Shop Doctor Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Cloth Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Cloth & Saree Shop Doctor Name Board Design Trends</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/creative-tailoring-shop-name-board-design-ideas-to-elevate-your-brand-in-2025"
                        class="office-mag-card">
                        <img src="https://brandsignages.com/storage/blogs/M7AJuSSHinwNNbRQOBSpB5OBxWvsVN5E7nQrvsNZ.jpg"
                            alt="Tailoring Shop Doctor Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Tailor Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Creative Tailoring Shop Doctor Name Board Design Ideas to Elevate
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
                            alt="Mobile Shop Doctor Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Mobile Shop</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Mobile Shop Doctor Name Board Design Trends to Attract Customers
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

            </div>




            <!-- Office Magazine Slider: New Design -->
            <div class="office-mag-header text-center mt-5">
                {{-- <span class="office-mag-eyebrow">Office & Workspaces</span> --}}
                <h3 class="hero-title mt-3">Exclusive Doctor Name Board Designs <br>for Healthcare Facilities</h3>

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
                            <h4 class="office-mag-title">Office Doctor Name Board Design Trends for 2026</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/corporate-office-name-board-a-guide-to-design-materials-branding"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/corporate-office-led-name-board.jpg"
                            alt="Corporate Office Doctor Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Corporate</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Corporate Office Doctor Name Board: Design, Materials & Branding
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/architect-office-name-board-style-purpose-and-design-inspiration"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/architect-office-led-name-board.jpeg"
                            alt="Architect Office Doctor Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Architect</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Architect Office Doctor Name Board: Style, Purpose & Design</h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/construction-office-name-board-materials-design-best-practices"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/construction-company-name-board.jpg"
                            alt="Construction Office Doctor Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Industrial</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Construction Office Doctor Name Board: Materials, Design & Best
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
                            alt="Advocate Office Doctor Name Board" class="office-mag-bg">
                        <div class="office-mag-chip">Professional</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Advocate Office Doctor Name Board: Design Elements for Identity
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/acrylic-name-board-for-office-modern-workspace-branding-essential"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/acrylic-office-led-name-board.jpg"
                            alt="Acrylic Doctor Name Board for Office" class="office-mag-bg">
                        <div class="office-mag-chip">Acrylic</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Acrylic Doctor Name Board for Office: Modern Workspace Branding
                            </h4>
                            <span class="office-mag-cta">Read More &#8594;</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="https://brandsignages.com/blogs/glass-name-board-for-office-stylish-and-professional-branding"
                        class="office-mag-card">
                        <img src="frontend/Images/name-boards/glass-office-name-board.jpeg"
                            alt="Glass Doctor Name Board for Office" class="office-mag-bg">
                        <div class="office-mag-chip">Glass</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Glass Doctor Name Board for Office: Style & Branding</h4>
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
                        <img src="frontend/Images/name-boards/office-doctor-name-board-design.jpeg"
                            alt="Office Doctor Name Board Design Ideas" class="office-mag-bg">
                        <div class="office-mag-chip">Inspiration</div>
                        <div class="office-mag-content">
                            <h4 class="office-mag-title">Office Doctor Name Board Design Ideas: Modern Inspiration for
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
                            <h4 class="office-mag-title">Doctor Name Board for Office Table: Designs and Buyers Guide
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
                    <h2>Premium Doctor Name Board Solutions</h2>
                </div>
                <div class="col-md-8 col-12">

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                    class="img-fluid">
                                <h3>Striking Designs</h3>
                                <p>We are <a style="color: #ffff;text-decoration: underline;"
                                        href="https://brandsignages.com"><strong>Brand Signages</strong></a>, specialists
                                    in crafting impactful name board designs that leave a lasting impression. Our name
                                    boards go beyond simple identification- they reflect personality, enhance visibility,
                                    and elevate the overall appearance.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}"
                                    alt="Custom Craftmanship" class="img-fluid">
                                <h3>Custom Craftsmanship</h3>
                                <p>Every space has its own identity, and our designs reflect that. From modern <a
                                        style="color: #ffff;text-decoration: underline;"
                                        href="https://brandsignages.com/arcylic-signages"><strong>acrylic name
                                            boards</strong></a> to timeless metal finishes, we customize every name board
                                    design to match your style, purpose, and visual appeal.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}"
                                    alt="Highly Durable Name Boards" class="img-fluid">
                                <h3>High Durability</h3>
                                <p>We use premium, weather-resistant and premium materials to ensure your name board remains
                                    strong, vibrant, and long-lasting day and night even in demanding outdoor conditions.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/perfect-illu.webp') }}"
                                    alt="Perfect Illumination" class="img-fluid">
                                <h3>Perfect Illumination</h3>
                                <p> Add brilliance to your brand with our LED-lit and neon store name boards, designed to
                                    shine bright day and night. Each design is engineered for maximum visibility, ensuring
                                    your brand stands out.
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
                            href="https://brandsignages.com/doctor-name-board-design"><strong>LED name boards</strong></a>,
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
                    Are Doctor Name Boards Weatherproof and Durable?
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
                    <p>An LED name board design is important because it directly affects visibility, readability, and the
                        overall perception of your space. Unlike a non-illuminated board, an LED name board remains clearly
                        visible during evenings and low-light conditions, ensuring your home or business is easily
                        identifiable at all times.</p>
                    <p>The right design- including font selection, letter thickness, spacing, and lighting style determines
                        how professional and refined the final output appears. A well-planned Doctor LED name board enhances
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
                    <p>We manufacture LED name boards using premium-grade materials and high-performance lighting components
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
                        deliver long-lasting LED name board solutions.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are Doctor Name Boards Suitable for Outdoor Use?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, LED name boards are highly suitable for outdoor installation when manufactured using
                        weather-resistant and durable materials. These materials ensure protection against rain, dust,
                        sunlight, and humidity.</p>

                    <p>Common materials used for outdoor LED name boards include:</p>
                    <ul>
                        <li>Acrylic panels with waterproof LED modules</li>
                        <li>Stainless Steel (304/316 grade) fabricated letters</li>
                        <li>ACP (Aluminium Composite Panel) backing sheets</li>
                        <li>Powder-coated metal frames for rust resistance</li>
                        <li>IP65-rated LED lighting components for outdoor durability</li>
                    </ul>

                    <p>When built with these materials, LED name boards offer excellent nighttime visibility, energy
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
                    How Long Do Doctor Name Boards Typically Last?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>High-quality LED name boards made with durable materials can last between 4 to 8 years or more,
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
                    Why Choose Brand Signages for Doctor Name Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Brand Signages is a trusted manufacturer of premium doctor name boards, delivering high-visibility
                        signage solutions tailored for clinics, hospitals, and pharmacies.</p>

                    <ul>
                        <li>Custom-built doctor name boards based on your professional identity and clinic requirements</li>
                        <li>High-quality materials with weather-resistant and durable finishes</li>
                        <li>Advanced LED modules for uniform brightness and energy efficiency</li>
                        <li>In-house design, fabrication, and professional installation</li>
                        <li>Fast turnaround time with strict quality control standards</li>
                    </ul>

                    <p>We focus on precision manufacturing, long-term performance, and impactful visual presence to ensure
                        your professional practice stands out day and night.</p>
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
@endsection
