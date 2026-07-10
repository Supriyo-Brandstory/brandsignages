@extends('frontend.layout.appLayout')

@push('styles')
<link rel="stylesheet" href="{{ asset('frontend/customstyle/digital-signages-2.css') }}">
@endpush

@section('content')
<!-- Custom Stylesheet link fallback if push is not handled by layout -->
<link rel="stylesheet" href="{{ asset('frontend/customstyle/digital-signages-2.css') }}">

<div class="ds2-page-wrapper">
    <!-- 1. Hero Showcase 3-Slider Carousel Section (Uses ds-1.webp, ds-2.webp, ds-3.webp) -->
    <section class="ds2-hero-wrapper">
        <div id="ds2HeroCarousel" class="swiper ds2-hero-swiper">
            
            <!-- Explicit 3-Slider Indicators (Right Side Dots) -->
            <div class="ds2-slider-dots"></div>

            <div class="swiper-wrapper">
                
                <!-- SLIDE 1 (Image: ds-1.webp) -->
                <div class="swiper-slide">
                    <div class="ds2-slide-bg d-none d-md-block" style="background-image: url('{{ asset('frontend/Images/ds-1.webp') }}');"></div>
                    <div class="ds2-slide-bg d-block d-md-none" style="background-image: url('{{ asset('frontend/Images/ds-m-01.webp') }}');"></div>
                    <div class="ds2-slide-overlay"></div>
                    <div class="container ds2-hero-content-container">
                        <div class="ds2-hero-textbox">
                            <h1 class="ds2-hero-title">High-Impact Digital Signage Displays- Electronic Signage</h1>
                            <p class="ds2-hero-description">
                                Brand Signages is a leading provider of digital signage and electronic signage solutions. We design and deliver commercial displays, interactive kiosks, and smart screens for all industries- PAN India delivery.
                            </p>
                            <div>
                                <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                                    Book A Demo Call <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 (Image: ds-2.webp) -->
                <div class="swiper-slide">
                    <div class="ds2-slide-bg d-none d-md-block" style="background-image: url('{{ asset('frontend/Images/ds-2.webp') }}');"></div>
                    <div class="ds2-slide-bg d-block d-md-none" style="background-image: url('{{ asset('frontend/Images/ds-m-02.webp') }}');"></div>
                    <div class="ds2-slide-overlay"></div>
                    <div class="container ds2-hero-content-container">
                        <div class="ds2-hero-textbox">
                            <h1 class="ds2-hero-title">High-Impact Digital Signage Displays- Electronic Signage</h1>
                            <p class="ds2-hero-description">
                                Brand Signages is a leading provider of digital signage and electronic signage solutions. We design and deliver commercial displays, interactive kiosks, and smart screens for all industries- PAN India delivery.
                            </p>
                            <div>
                                <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                                    Book A Demo Call <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

              
            </div>

            <!-- Carousel Arrow Controls -->
            <div class="ds2-carousel-controls">
                <button class="ds2-control-btn ds2-hero-prev" type="button" aria-label="Previous Slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="ds2-control-btn ds2-hero-next" type="button" aria-label="Next Slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

            <!-- Category Pills Navigation Bar with Seamless Infinite Loop Scrolling -->
            <div class="ds2-pills-nav-wrapper">
                <div class="ds2-marquee-wrapper">
                    <div class="ds2-marquee-track">
                        <!-- SET 1 -->
                        <a href="{{ route('commercial_display') }}" class="ds2-pill-item">Commercial Display</a>
                        <a href="{{ route('touch_screen_kiosk') }}" class="ds2-pill-item">Touch Screen Kiosk</a>
                        <a href="{{ route('digital_standee_display') }}" class="ds2-pill-item">Digital Standee</a>
                        <a href="{{ route('display_video_wall') }}" class="ds2-pill-item">Video Wall Display</a>
                        <a href="{{ route('flat_panel_display') }}" class="ds2-pill-item">Flat Panel Display</a>
                        <a href="{{ route('digital_signage_for_retail') }}" class="ds2-pill-item">Retail Digital Signage</a>
                        <a href="{{ route('restaurant_menu_boards') }}" class="ds2-pill-item">Restaurant Menu Boards</a>
                        <a href="{{ route('outdoor_signages') }}" class="ds2-pill-item">Outdoor LED Display</a>
                        <a href="{{ route('flexible_led_display') }}" class="ds2-pill-item">Flexible LED Display</a>
                        <a href="{{ route('led_dot_matrix') }}" class="ds2-pill-item">LED Dot Matrix</a>
                        <a href="{{ route('led_acrylic_glow_sign') }}" class="ds2-pill-item">3D Glow Sign Board</a>
                        <a href="{{ route('sky_signs') }}" class="ds2-pill-item">Sky Sign Boards</a>

                        <!-- SET 2 (Exact Duplicate for Seamless Continuous Loop) -->
                        <a href="{{ route('commercial_display') }}" class="ds2-pill-item">Commercial Display</a>
                        <a href="{{ route('touch_screen_kiosk') }}" class="ds2-pill-item">Touch Screen Kiosk</a>
                        <a href="{{ route('digital_standee_display') }}" class="ds2-pill-item">Digital Standee</a>
                        <a href="{{ route('display_video_wall') }}" class="ds2-pill-item">Video Wall Display</a>
                        <a href="{{ route('flat_panel_display') }}" class="ds2-pill-item">Flat Panel Display</a>
                        <a href="{{ route('digital_signage_for_retail') }}" class="ds2-pill-item">Retail Digital Signage</a>
                        <a href="{{ route('restaurant_menu_boards') }}" class="ds2-pill-item">Restaurant Menu Boards</a>
                        <a href="{{ route('outdoor_signages') }}" class="ds2-pill-item">Outdoor LED Display</a>
                        <a href="{{ route('flexible_led_display') }}" class="ds2-pill-item">Flexible LED Display</a>
                        <a href="{{ route('led_dot_matrix') }}" class="ds2-pill-item">LED Dot Matrix</a>
                        <a href="{{ route('led_acrylic_glow_sign') }}" class="ds2-pill-item">3D Glow Sign Board</a>
                        <a href="{{ route('sky_signs') }}" class="ds2-pill-item">Sky Sign Boards</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Explore Commercial-Grade Digital Signages with Inbuilt Smart Software (3-Card Carousel Slider) -->
    <section class="ds2-software-grid-section d">
        <div class="container">
            <h2 class="ds2-main-title">Explore Commercial-Grade Digital Signages with Inbuilt Smart Software</h2>

            <div id="ds2CardSlider" class="swiper ds2-card-swiper ds2-card-slider-wrapper">
                <div class="swiper-wrapper">
                    
                    <!-- Card 1: Commercial Display -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Commercial Display</h3>
                                <p class="ds2-feature-card-text">
                                    We design versatile digital signage displays to be used in retail environments, corporate settings, and educational institutions. They deliver stunning visuals and can be customized to fit any branding requirement.
                                </p>
                                <a href="{{ route('commercial_display') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/ds-4.webp') }}" alt="Commercial Display">
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Touch Screen Kiosk -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                             <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Touch Screen Kiosk</h3>
                                <p class="ds2-feature-card-text">
                                    Engage customers with touch-screen kiosk. Sleek rectangular frame, this interactive kiosk functions as an intuitive input device. Like a smartphone, it runs CMS software, providing real-time assistance and information.
                                </p>
                                <a href="{{ route('touch_screen_kiosk') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/ds-5.webp') }}" alt="Touch Screen Kiosk">
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Digital Standee Display -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Digital Standee Display</h3>
                                <p class="ds2-feature-card-text">
                                    Our digital standees feature customizable colors and branding, offering commercial-grade displays in India. Enjoy an immersive viewing experience with crisp visuals, superior audio, and high-quality video wall performance.
                                </p>
                                <a href="{{ route('digital_standee_display') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/ds-6.webp') }}" alt="Digital Standee Display">
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Display Video Wall -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Display Video Wall</h3>
                                <p class="ds2-feature-card-text">
                                    Showcase your products and services with our high-brightness video walls, available in 26" and 55" screens. Designed for commercial impact, these walls deliver stunning visuals and immersive experiences.
                                </p>
                                <a href="{{ route('display_video_wall') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/ds-7.webp') }}" alt="Display Video Wall">
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: Flat Panel Display -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Flat Panel Display</h3>
                                <p class="ds2-feature-card-text">
                                    Enhance engagement with our Interactive Flat Panel Display, featuring cutting-edge visuals and advanced touch technology. Comes with integrated digital signage software, delivering complete, seamless signage solutions.
                                </p>
                                <a href="{{ route('flat_panel_display') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/ds-8.webp') }}" alt="Flat Panel Display">
                            </div>
                        </div>
                    </div>

                    <!-- Card 6: Outdoor LED Displays -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Outdoor LED Displays</h3>
                                <p class="ds2-feature-card-text">
                                    Weatherproof, IP65-rated high-nit outdoor digital displays with auto-brightness control for drive-thrus, billboards, and exterior facades with remote cloud CMS access.
                                </p>
                                <a href="{{ route('outdoor_signages') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/outdoor-led.webp') }}" alt="Outdoor LED Displays">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Slider Pagination Indicators (Pill + Circle Dot matching design) -->
                <div class="ds2-card-slider-indicators"></div>
            </div>

        </div>
    </section>

    <!-- 3. The Home of Premium Digital Signage- Excellence Beyond Expectations Section -->
    <section class="ds2-premium-home-section">
        <div class="container">
            <!-- Top 2-Column Block -->
            <div class="row align-items-center mb-5 pb-lg-3">
                <div class="col-lg-6">
                    <h2 class="ds2-premium-title">The Home of Premium Digital Signage- Excellence Beyond Expectations</h2>
                    <p class="ds2-premium-desc">
                        Brand Signages is a premier digital signage provider with 12+ years of expertise. With a long-standing foundation, we have manufacturing excellence for digital displays, interactive kiosks, commercial displays, and more. We are committed to deliver products with unmatched quality and work with long-term business principles putting 100% efforts in digital signage manufacturing.
                    </p>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Book A Demo Call <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ds2-premium-img-wrap">
                        <img src="{{ asset('frontend/Images/ds-9.webp') }}" alt="The Home of Premium Digital Signage">
                    </div>
                </div>
            </div>

            <!-- Bottom 2x2 Grid of 4 Feature Cards -->
            <div class="row g-4 mt-2">
                <!-- Card 1: Superior Quality -->
                <div class="col-md-6">
                    <div class="ds2-why-card">
                        <h3 class="ds2-why-card-title">Superior Quality</h3>
                        <p class="ds2-why-card-text">
                            We craft digital signage using premium materials and advanced technology, ensuring long-lasting performance, high clarity, and exceptional visual appeal.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Technical Expertise -->
                <div class="col-md-6">
                    <div class="ds2-why-card">
                        <h3 class="ds2-why-card-title">Technical Expertise</h3>
                        <p class="ds2-why-card-text">
                            Our tech-focused team invests in continuous R&D to deliver innovative, modern, and highly efficient digital signage solutions for every business.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Unmatched Expertise -->
                <div class="col-md-6">
                    <div class="ds2-why-card">
                        <h3 class="ds2-why-card-title">Unmatched Expertise</h3>
                        <p class="ds2-why-card-text">
                            With 12+ years in the digital and LED signage industry, we deliver deep expertise and trend-forward solutions for every project.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Transparent Pricing -->
                <div class="col-md-6">
                    <div class="ds2-why-card">
                        <h3 class="ds2-why-card-title">Transparent Pricing</h3>
                        <p class="ds2-why-card-text">
                            We provide clear, detailed, and competitive pricing with no hidden charges, helping you plan confidently and know exactly what you receive.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Smart and Impactful Digital Signage Solutions for Every Industry Section -->
    <section class="ds2-industry-section">
        <div class="container">
            <h2 class="ds2-industry-title">Smart and Impactful Digital Signage Solutions for Every Industry</h2>

            <!-- Horizontal Industry Tabs Nav -->
            <div class="ds2-industry-tabs-nav">
                <button type="button" class="ds2-industry-tab-btn active" data-tab="tab-hotels">Hotels, Restaurants & QSRs</button>
                <button type="button" class="ds2-industry-tab-btn" data-tab="tab-retails">Retails</button>
                <button type="button" class="ds2-industry-tab-btn" data-tab="tab-hospitals">Hospitals</button>
                <button type="button" class="ds2-industry-tab-btn" data-tab="tab-banks">Bank & Financial</button>
                <button type="button" class="ds2-industry-tab-btn" data-tab="tab-schools">School & College</button>
                <button type="button" class="ds2-industry-tab-btn" data-tab="tab-corporate">Corporate Office</button>
            </div>

            <!-- Tab 1: Hotels, Restaurants & QSRs (Active) -->
            <div id="tab-hotels" class="ds2-industry-pane row align-items-center active">
                <div class="col-lg-6 mb-4 mb-lg-0 p-0">
                    <div class="ds2-industry-pane-img-wrap">
                        <img src="{{ asset('frontend/Images/ds-10.webp') }}" alt="Hotels, Restaurants & QSRs Digital Signage">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h3 class="ds2-industry-pane-title">Hotels, Restaurants, & QSRs</h3>
                    <p class="ds2-industry-pane-desc">
                        Effective advertising are important for hotels and restaurants. Engaging visuals, videos, and promotional campaigns capture attention. With our customized Digital Displays, restaurants and hotels across india can showcase dynamic content. We provide in-built Signage Software for real-time updates, ensuring your messages stay fresh and relevant. Our digital signage solutions include:
                    </p>
                    <ul class="ds2-industry-list">
                        <li>Digital Menu Boards</li>
                        <li>Self-Ordering Kiosks</li>
                        <li>Digital Standees</li>
                        <li>Custom Digital Walls</li>
                    </ul>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Book Your Order <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab 2: Retails -->
            <div id="tab-retails" class="ds2-industry-pane row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="ds2-industry-pane-img-wrap">
                        <img src="{{ asset('frontend/Images/Display_homepage-Solution_retail.jpg') }}" alt="Retail Digital Signage">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h3 class="ds2-industry-pane-title">Retail Stores & Shopping Malls</h3>
                    <p class="ds2-industry-pane-desc">
                        Maximize store footfall and drive impulse sales with ultra-bright commercial window displays, digital promotional standees, and interactive product showcase kiosks. Our cloud CMS allows instant content scheduling across store networks.
                    </p>
                    <ul class="ds2-industry-list">
                        <li>Storefront Window Displays</li>
                        <li>Interactive Product Catalogs</li>
                        <li>In-Store Digital Standees</li>
                        <li>Video Wall Brand Displays</li>
                    </ul>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Book Your Order <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab 3: Hospitals -->
            <div id="tab-hospitals" class="ds2-industry-pane row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="ds2-industry-pane-img-wrap">
                        <img src="{{ asset('frontend/Images/digital-display-medical.webp') }}" alt="Healthcare & Hospital Signage">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h3 class="ds2-industry-pane-title">Hospitals & Healthcare Clinics</h3>
                    <p class="ds2-industry-pane-desc">
                        Enhance patient navigation and streamline waiting room management with digital wayfinding kiosks, doctor schedule boards, and patient queue management displays.
                    </p>
                    <ul class="ds2-industry-list">
                        <li>Wayfinding Touch Kiosks</li>
                        <li>Doctor Directory Boards</li>
                        <li>Queue Management Displays</li>
                        <li>Patient Information Screens</li>
                    </ul>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Book Your Order <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab 4: Bank & Financial -->
            <div id="tab-banks" class="ds2-industry-pane row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="ds2-industry-pane-img-wrap">
                        <img src="{{ asset('frontend/Images/bank-signage-hero.png') }}" alt="Bank & Financial Signage">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h3 class="ds2-industry-pane-title">Banks & Financial Institutions</h3>
                    <p class="ds2-industry-pane-desc">
                        Display real-time interest rates, exchange rates, promotional schemes, and queue updates with secure commercial displays engineered for financial branch networks.
                    </p>
                    <ul class="ds2-industry-list">
                        <li>Interest Rate Ticker Displays</li>
                        <li>Branch Queue Management Screens</li>
                        <li>Interactive Banking Kiosks</li>
                        <li>High-Brightness Window Displays</li>
                    </ul>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Book Your Order <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab 5: School & College -->
            <div id="tab-schools" class="ds2-industry-pane row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="ds2-industry-pane-img-wrap">
                        <img src="{{ asset('frontend/Images/digital-display-calssroom.webp') }}" alt="Schools & Universities Digital Signage">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h3 class="ds2-industry-pane-title">Schools, Colleges & Universities</h3>
                    <p class="ds2-industry-pane-desc">
                        Modernize educational campuses with interactive flat panel displays for digital classrooms, campus event notice boards, and emergency notification displays.
                    </p>
                    <ul class="ds2-industry-list">
                        <li>Interactive Flat Panels (IFPD)</li>
                        <li>Campus Notice Board Displays</li>
                        <li>Auditorium Video Walls</li>
                        <li>Library Wayfinding Kiosks</li>
                    </ul>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Book Your Order <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab 6: Corporate Office -->
            <div id="tab-corporate" class="ds2-industry-pane row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="ds2-industry-pane-img-wrap">
                        <img src="{{ asset('frontend/Images/digital-display-corporate-office.webp') }}" alt="Corporate Office Digital Signage">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h3 class="ds2-industry-pane-title">Corporate Offices & Business Parks</h3>
                    <p class="ds2-industry-pane-desc">
                        Transform corporate lobbies and meeting rooms with sleek video wall displays, room booking digital panels, and corporate communications signage.
                    </p>
                    <ul class="ds2-industry-list">
                        <li>Lobby Video Walls</li>
                        <li>Meeting Room Booking Displays</li>
                        <li>Corporate Announcement Screens</li>
                        <li>Visitor Management Kiosks</li>
                    </ul>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Book Your Order <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. Digital Signage that Empowers You Section -->
    <section class="ds2-empower-section">
        <div class="container">
            <h2 class="ds2-empower-title">Digital Signage that Empowers You</h2>
            <p class="ds2-empower-subtitle">
                Easily manage signage software and hardware to elevate the power of your digital screens and improve business performance.
            </p>

            <div class="row g-4">
                <!-- Card 1: Effortless content management (ds-11.webp) -->
                <div class="col-lg-6 col-md-6">
                    <div class="ds2-empower-card">
                        <div class="ds2-empower-card-body">
                            <h3 class="ds2-empower-card-title">Effortless content management</h3>
                            <p class="ds2-empower-card-text">
                                Create and deploy captivating content, gain powerful insights and manage your display ecosystem with our simple all-in-one platform.
                            </p>
                            <a href="{{ route('contact_us') }}" class="ds2-empower-card-link">Contact Us &rarr;</a>
                        </div>
                        <div class="ds2-empower-card-img-wrap">
                            <img src="{{ asset('frontend/Images/ds-11.webp') }}" alt="Effortless Content Management">
                        </div>
                    </div>
                </div>

                <!-- Card 2: Brand Signage LYNK Cloud (ds-12.webp) -->
                <div class="col-lg-6 col-md-6">
                    <div class="ds2-empower-card">
                        <div class="ds2-empower-card-body">
                            <h3 class="ds2-empower-card-title">Brand Signage LYNK Cloud</h3>
                            <p class="ds2-empower-card-text">
                                Go beyond content management for hospitality with a platform that analyzes guests' content use to reveal marketing insights and increase revenue.
                            </p>
                            <a href="{{ route('contact_us') }}" class="ds2-empower-card-link">Contact Us &rarr;</a>
                        </div>
                        <div class="ds2-empower-card-img-wrap">
                            <img src="{{ asset('frontend/Images/ds-12.webp') }}" alt="Brand Signage LYNK Cloud">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Why Choose Us for Digital Signages Section -->
    <section class="ds2-why-choose-section">
        <div class="container">
            <h2 class="ds2-why-choose-title">Why Choose Us for Digital Signages</h2>

            <div class="row align-items-center">
                <!-- Left Column: 2 Cards -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- Card 1: In-House Manufacturing -->
                    <div class="ds2-why-choose-box">
                        <div class="ds2-why-choose-icon">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M9.01343 42.943V22.6433L24.9978 11.0237L40.9884 22.6436V42.943H9.01343ZM27.1942 20.2523L26.4918 18.4243H23.5112L22.8058 20.2523C21.8333 20.4835 20.9058 20.8677 20.0533 21.393L18.2644 20.5975L16.1573 22.7046L16.9527 24.4936C16.4275 25.346 16.0432 26.2736 15.8091 27.249L13.9841 27.9514V30.932L15.8091 31.6343C16.0432 32.6069 16.4275 33.5374 16.9527 34.3869L16.1573 36.1758L18.2644 38.2829L20.0533 37.4905C20.9058 38.0128 21.8333 38.4 22.8088 38.6311L23.5112 40.4561H26.4918L27.1942 38.6311C28.1667 38.4 29.0972 38.0158 29.9467 37.4905L31.7356 38.2829L33.8427 36.1758L33.0503 34.3869C33.5726 33.5343 33.9598 32.6069 34.1909 31.6343L36.0159 30.932V27.9514L34.1909 27.249C33.9598 26.2736 33.5756 25.346 33.0503 24.4936L33.8427 22.7046L31.7356 20.5975L29.9467 21.393C29.0942 20.8677 28.1667 20.4835 27.1942 20.2523ZM25 24.2414C27.8726 24.2414 30.2018 26.5677 30.2018 29.4402C30.2018 32.3128 27.8726 34.642 25 34.642C22.1275 34.642 19.8013 32.3128 19.8013 29.4402C19.8013 26.5677 22.1275 24.2414 25 24.2414ZM46.6681 45.5346V47.5806C46.6681 48.1453 46.2097 48.6036 45.6451 48.6036H4.35677C3.79216 48.6036 3.33373 48.1453 3.33373 47.5806V45.5346C3.33373 44.97 3.79216 44.5116 4.35677 44.5116H45.6451C46.2097 44.5116 46.6681 44.97 46.6681 45.5346ZM6.9303 22.2184C5.38941 23.3293 3.2401 22.9854 2.12245 21.4512C1.01147 19.9103 1.3553 17.761 2.88961 16.6434L22.9806 2.04796C24.2371 1.14198 25.9036 1.20149 27.0808 2.09424L47.1057 16.6434C48.6466 17.761 48.9904 19.9103 47.8728 21.4512C46.7618 22.9854 44.6124 23.3293 43.0716 22.2184L24.9977 9.08443L6.9303 22.2184Z" fill="#E43D12"/>
</svg>

                        </div>
                        <h3 class="ds2-why-choose-box-title">In-House Manufacturing</h3>
                        <p class="ds2-why-choose-box-text">
                            With full in-house manufacturing, every digital signage system is produced, tested, and quality-checked by our expert team, ensuring unmatched durability, finish, and long-term performance.
                        </p>
                    </div>

                    <!-- Card 2: Expert Technical Team -->
                    <div class="ds2-why-choose-box">
                        <div class="ds2-why-choose-icon">
                         <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M35.9021 31.9333C35.5558 29.5802 34.3775 27.4292 32.581 25.8705C30.7845 24.3117 28.4888 23.4485 26.1104 23.4375H23.8937C21.5153 23.4485 19.2196 24.3117 17.4231 25.8705C15.6267 27.4292 14.4484 29.5802 14.1021 31.9333L13.0396 39.3625C13.0056 39.6026 13.0281 39.8474 13.1051 40.0774C13.1821 40.3073 13.3116 40.5162 13.4833 40.6875C13.9 41.1042 16.4562 43.2292 25.0042 43.2292C33.5521 43.2292 36.1021 41.1125 36.525 40.6875C36.6967 40.5162 36.8262 40.3073 36.9032 40.0774C36.9803 39.8474 37.0027 39.6026 36.9687 39.3625L35.9021 31.9333Z" fill="#E43D12"/>
<path d="M15.75 24.5831C13.7365 26.4393 12.4265 28.9343 12.0417 31.6456L11.2708 36.9789C5.08333 36.9373 3.20833 34.6873 2.89583 34.2289C2.77504 34.0624 2.68884 33.8734 2.64232 33.673C2.5958 33.4726 2.58991 33.265 2.625 33.0623L3.08333 30.4789C3.32213 29.1288 3.88296 27.8562 4.71828 26.769C5.55359 25.6818 6.63876 24.812 7.88177 24.2334C9.12477 23.6549 10.489 23.3845 11.8587 23.4454C13.2284 23.5063 14.5632 23.8966 15.75 24.5831Z" fill="#E43D12"/>
<path d="M47.375 33.0623C47.4101 33.265 47.4042 33.4726 47.3577 33.673C47.3112 33.8734 47.225 34.0624 47.1042 34.2289C46.7917 34.6873 44.9167 36.9373 38.7292 36.9789L37.9583 31.6456C37.5735 28.9343 36.2635 26.4393 34.25 24.5831C35.4368 23.8966 36.7716 23.5063 38.1413 23.4454C39.511 23.3845 40.8752 23.6549 42.1182 24.2334C43.3612 24.812 44.4464 25.6818 45.2817 26.769C46.117 27.8562 46.6779 29.1288 46.9167 30.4789L47.375 33.0623Z" fill="#E43D12"/>
<path d="M16.1042 20C15.5797 20.7437 14.8836 21.3499 14.0747 21.767C13.2659 22.1841 12.3684 22.3998 11.4583 22.3958C10.5505 22.3958 9.65573 22.1801 8.84766 21.7664C8.03959 21.3528 7.34139 20.753 6.81059 20.0166C6.27979 19.2801 5.93159 18.4281 5.79469 17.5307C5.65779 16.6333 5.7361 15.7162 6.02317 14.8549C6.31024 13.9937 6.79785 13.2131 7.44582 12.5773C8.09379 11.9415 8.88357 11.4688 9.75008 11.1981C10.6166 10.9274 11.535 10.8665 12.4297 11.0204C13.3243 11.1744 14.1696 11.5387 14.8958 12.0833C14.6869 12.9002 14.582 13.7402 14.5833 14.5833C14.5849 16.4941 15.111 18.3677 16.1042 20Z" fill="#E43D12"/>
<path d="M44.2708 16.6667C44.2714 17.4192 44.1236 18.1644 43.8359 18.8598C43.5481 19.5551 43.1261 20.1869 42.594 20.719C42.0619 21.2511 41.4301 21.6731 40.7348 21.9608C40.0394 22.2486 39.2942 22.3964 38.5417 22.3958C37.6316 22.3998 36.7341 22.1841 35.9253 21.767C35.1165 21.3499 34.4203 20.7437 33.8958 20C34.889 18.3677 35.4151 16.4941 35.4167 14.5833C35.4181 13.7402 35.3131 12.9002 35.1042 12.0833C35.9554 11.445 36.9675 11.0562 38.0272 10.9607C39.0868 10.8651 40.1522 11.0665 41.1038 11.5423C42.0555 12.0182 42.8558 12.7496 43.4152 13.6547C43.9746 14.5597 44.2708 15.6027 44.2708 16.6667Z" fill="#E43D12"/>
<path d="M25 22.396C29.3147 22.396 32.8125 18.8982 32.8125 14.5835C32.8125 10.2688 29.3147 6.771 25 6.771C20.6853 6.771 17.1875 10.2688 17.1875 14.5835C17.1875 18.8982 20.6853 22.396 25 22.396Z" fill="#E43D12"/>
</svg>

                        </div>
                        <h3 class="ds2-why-choose-box-title">Expert Technical Team</h3>
                        <p class="ds2-why-choose-box-text">
                            Our trained digital signage engineers provide proactive support, quick issue resolution, and reliable maintenance, ensuring your digital signage network stays stable and responsive.
                        </p>
                    </div>
                </div>

                <!-- Center Column: ds-13.webp -->
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="ds2-why-choose-center-img-wrap">
                        <img src="{{ asset('frontend/Images/ds-13.webp') }}" alt="Why Choose Us for Digital Signages" class="d-none d-md-block">
                        <img src="{{ asset('frontend/Images/ds-m-13.webp') }}" alt="Why Choose Us for Digital Signages" class="d-block d-md-none">
                    </div>
                </div>

                <!-- Right Column: 2 Cards -->
                <div class="col-lg-4 col-md-6">
                    <!-- Card 3: Advanced Signage Platform -->
                    <div class="ds2-why-choose-box">
                        <div class="ds2-why-choose-icon">
                           <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M39.1807 0H11.0429C10.8273 0 10.5469 0.0788006 10.5469 0.294802V39.3331C10.5469 39.5491 10.8273 39.8439 11.0429 39.8439H20.703V46.8752H18.4057C18.1897 46.8752 17.9685 46.9604 17.9685 47.1764V49.4892C17.9685 49.7052 18.1897 50 18.4057 50H31.8174C32.0334 50 32.031 49.7052 32.031 49.4892V47.1764C32.031 46.9604 32.0334 46.8752 31.8174 46.8752H29.2966V39.8439H39.1803C39.3959 39.8439 39.4531 39.5491 39.4531 39.3331V0.294802C39.4535 0.0788006 39.3963 0 39.1807 0ZM14.0625 35.9379V3.51563H30.5806H34.1067H35.9375V35.9379H14.0625Z" fill="#E43D12"/>
</svg>

                        </div>
                        <h3 class="ds2-why-choose-box-title">Advanced Signage Platform</h3>
                        <p class="ds2-why-choose-box-text">
                            Our advanced cloud-based software lets you publish, schedule, and monitor content in real time, ensuring seamless display management across multiple locations without downtime or technical frustration.
                        </p>
                    </div>

                    <!-- Card 4: Designed for Performance -->
                    <div class="ds2-why-choose-box">
                        <div class="ds2-why-choose-icon">
                           <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1403_802)">
<path d="M49.921 1.07266C49.7466 0.458301 49.2057 0 48.5352 0H42.6758C41.8661 0 41.2109 0.655176 41.2109 1.46484C41.2109 2.27451 41.8661 2.92969 42.6758 2.92969H46.1017L39.1062 10.8279C29.6749 21.4967 15.7956 27.1357 1.59062 25.9013C0.811031 25.8197 0.0756795 26.4277 0.00565998 27.2345C-0.0644572 28.0398 0.532125 28.7494 1.33886 28.8194C2.70927 28.9382 3.86562 28.9968 5.23183 28.9968C18.9204 28.9968 32.1669 23.0987 41.3008 12.7676L47.0703 6.25586V7.32422C47.0703 8.13389 47.7255 8.78906 48.5352 8.78906C49.3448 8.78906 50 8.13389 50 7.32422V2.91035L49.921 1.07266Z" fill="#E43D12"/>
<path d="M48.5352 47.0705H46.9727V14.1369C46.9727 13.5218 46.5879 12.9725 46.01 12.7607C45.4335 12.5533 44.7854 12.7221 44.3878 13.1928L43.488 14.2613C42.0003 16.0266 40.3795 17.7046 38.6686 19.2452C38.3596 19.5228 38.1836 19.9189 38.1836 20.3338V47.0705H35.2539V24.9044C35.2539 24.3637 34.9549 23.8658 34.4786 23.6112C34.0022 23.3595 33.42 23.3853 32.9723 23.6885C31.1541 24.9102 29.2372 26.026 27.2745 27.0072C26.7781 27.2547 26.4648 27.7625 26.4648 28.3176V47.0705H23.5352V30.8152C23.5352 30.3389 23.3034 29.8926 22.9144 29.6179C22.5267 29.3446 22.026 29.2788 21.5782 29.4362C19.72 30.0985 17.8031 30.6607 15.8805 31.1042C15.2167 31.2587 14.7461 31.8495 14.7461 32.5318V47.0705H11.8164V33.5418C11.8164 33.1241 11.6376 32.7264 11.3271 32.4489C11.0139 32.1714 10.589 32.0298 10.1856 32.087C8.30596 32.3016 6.39053 32.4117 4.49082 32.4146C3.68262 32.416 3.02744 33.0712 3.02744 33.8794V47.0705H1.46484C0.655176 47.0705 0 47.7257 0 48.5354C0 49.345 0.655176 50.0002 1.46484 50.0002H48.5352C49.3448 50.0002 50 49.345 50 48.5354C50 47.7257 49.3448 47.0705 48.5352 47.0705Z" fill="#E43D12"/>
</g>
<defs>
<clipPath id="clip0_1403_802">
<rect width="50" height="50" fill="white"/>
</clipPath>
</defs>
</svg>

                        </div>
                        <h3 class="ds2-why-choose-box-title">Designed for Performance</h3>
                        <p class="ds2-why-choose-box-text">
                            Every screen, kiosk, and signage solution is custom-designed digital signage to match your branding, environment, viewing distance, and content goals creating a fully personalized experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

 

    <!-- Client Logos Section -->
    <section class="new_client_section ">
        <h2 class="new_client_section-title">We Serve B2B Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-12 new_client_section-scrolling col-12">
                <div class="new_client_section-wrapper">
                    <!-- Row 1 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-1">
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client1.webp') }}" alt="White Gold"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client2.webp') }}" alt="Manthan"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Sobha"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Societe Generale"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client5.webp') }}" alt="HashedIn"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Innoviti"></div>
                        <!-- Duplicates -->
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client1.webp') }}" alt="White Gold"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client2.webp') }}" alt="Manthan"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Sobha"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Societe Generale"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client5.webp') }}" alt="HashedIn"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Innoviti"></div>
                    </div>
                    <!-- Row 2 (Right to Left) -->
                    <div class="new_client_section-row new_client_section-row-2">
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client7.webp') }}" alt="Puravankara"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client8.webp') }}" alt="Flipkart"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client9.webp') }}" alt="VYMO"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client10.webp') }}" alt="Indusface"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client11.webp') }}" alt="Chargebee"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client12.webp') }}" alt="Puravankara"></div>
                        <!-- Duplicates -->
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client7.webp') }}" alt="Puravankara"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client8.webp') }}" alt="Flipkart"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client9.webp') }}" alt="VYMO"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client10.webp') }}" alt="Indusface"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client11.webp') }}" alt="Chargebee"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client12.webp') }}" alt="Puravankara"></div>
                    </div>
                    <!-- Row 3 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-3">
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client13.webp') }}" alt="Natural"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client14.webp') }}" alt="Vakil Search"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client15.webp') }}" alt="Bhive Workspace"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Apollo Hospitals"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client17.webp') }}" alt="Adarsh Developers"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client18.webp') }}" alt="New Horizon"></div>
                        <!-- Duplicates -->
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client13.webp') }}" alt="Natural"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client14.webp') }}" alt="Vakil Search"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client15.webp') }}" alt="Bhive Workspace"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Apollo Hospitals"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client17.webp') }}" alt="Adarsh Developers"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client18.webp') }}" alt="New Horizon"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. What Our Clients Say (Testimonials) Section -->
    <section class="ds2-testimonial-section">
        <!-- Background Watermark Text -->
        <div class="ds2-testimonial-bg-text">Testimonials</div>

        <div class="container">
            <!-- Header with Title & Arrow Navigation Buttons -->
            <div class="ds2-testimonial-header">
                <h2 class="ds2-testimonial-title">What Our Clients Say</h2>
                <div class="ds2-testimonial-controls">
                    <button class="ds2-testimonial-control-btn ds2-testimonial-prev" type="button" aria-label="Previous Testimonials">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button class="ds2-testimonial-control-btn ds2-testimonial-next" type="button" aria-label="Next Testimonials">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Testimonials Swiper Slider -->
            <div id="ds2TestimonialCarousel" class="swiper ds2-testimonial-swiper">
                <div class="swiper-wrapper">
                    
                    <!-- Slide 1: Nandini -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-testimonial-card">
                            <div>
                                <div class="ds2-testimonial-quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p class="ds2-testimonial-text">
                                    We needed urgent signage for our new retail location, and they delivered beyond expectations. The direct communication and on-demand design process made the experience seamless and stress-free.
                                </p>
                            </div>
                            <div>
                                <h3 class="ds2-testimonial-author-name">Nandini</h3>
                                <p class="ds2-testimonial-author-title">CEO, A Real Estate Company</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Sai Teja -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-testimonial-card">
                            <div>
                                <div class="ds2-testimonial-quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p class="ds2-testimonial-text">
                                    We weren't sure if a signage company could capture the essence of a dynamic workspace like Bhive. But what they delivered went far beyond expectations. They didn't just create signs - they crafted a visual identity that reflects our energy, innovation, and community spirit.
                                </p>
                            </div>
                            <div>
                                <h3 class="ds2-testimonial-author-name">Sai Teja</h3>
                                <p class="ds2-testimonial-author-title">Manager, Bhive Workspace</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Dr. Ananya Reddy -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-testimonial-card">
                            <div>
                                <div class="ds2-testimonial-quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p class="ds2-testimonial-text">
                                    Brand Signages transformed our hospital lobby with interactive digital kiosks and wayfinding displays. The setup was quick, and the cloud software makes content management effortless.
                                </p>
                            </div>
                            <div>
                                <h3 class="ds2-testimonial-author-name">Dr. Ananya Reddy</h3>
                                <p class="ds2-testimonial-author-title">Director, Apollo Hospitals</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4: Vikram Sharma -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-testimonial-card">
                            <div>
                                <div class="ds2-testimonial-quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p class="ds2-testimonial-text">
                                    The outdoor video wall they installed at our flagship store has significantly increased customer footfall. Highly recommended for commercial digital display solutions!
                                </p>
                            </div>
                            <div>
                                <h3 class="ds2-testimonial-author-name">Vikram Sharma</h3>
                                <p class="ds2-testimonial-author-title">Marketing Head, Retail Chain</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- 8. Digital Signages in Other Cities Section -->
    <section class="ds2-cities-section">
        <div class="container">
            <h2 class="ds2-cities-title">Digital Signages in Other Cities</h2>
            <div class="row g-4 justify-content-center">
                <!-- City 1: Mumbai (SVG 1) -->
                <div class="col-lg-4 col-md-4">
                    <a href="{{ route('digital_signages_manufacturer_in_mumbai') }}" class="ds2-city-card">
                        <div class="ds2-city-card-svg">
                            <svg width="233" height="165" viewBox="0 0 233 165" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M86.844 44.8142C91.534 44.7051 96.2294 44.7051 100.925 44.7007C115.987 44.8393 131.054 44.5296 146.111 44.8555C145.873 43.0259 145.873 41.183 145.791 39.3431C145.362 39.3327 144.509 39.318 144.08 39.3121C143.963 38.3214 143.843 37.3292 143.73 36.3428C142.133 36.3635 141.767 38.0412 141.705 39.3077C141.167 39.4109 140.635 39.5141 140.109 39.6173C139.861 40.5829 139.773 41.668 139.003 42.3963C138.667 41.4823 138.553 40.521 138.46 39.5598C137.784 39.4522 137.103 39.3534 136.436 39.2605C136.281 38.4187 136.141 37.5827 135.976 36.7453C135.615 36.7394 134.901 36.7291 134.54 36.7291C134.307 37.655 134.08 38.5794 133.869 39.5141C133.461 39.5244 132.644 39.5495 132.237 39.5598C132.04 40.5107 131.839 41.4557 131.627 42.4067C130.624 41.8435 130.723 40.6139 130.305 39.6851C129.803 39.4006 129.267 39.1986 128.699 39.0851C128.616 37.7626 128.243 36.3473 126.611 36.4608C126.209 37.453 125.91 38.4806 125.718 39.5347C125.326 39.5554 124.536 39.6011 124.142 39.6276C123.977 40.5313 123.88 41.4616 123.523 42.3182C123.141 39.2973 123.694 36.0539 122.231 33.2542C121.307 31.286 119.318 30.0299 117.216 29.648C117.201 24.0589 117.356 18.4699 117.273 12.8823C118.957 12.9958 120.812 12.6021 122.32 13.559C123.729 14.3227 124.835 15.5316 126.23 16.3218C128.033 16.7921 129.923 16.4456 131.767 16.4766C131.586 13.5899 131.741 10.6973 131.823 7.80918C130.181 7.75315 128.481 7.84013 126.911 7.31823C125.491 6.02231 124.204 4.44187 122.293 3.85804C120.626 3.18134 118.895 4.0025 117.267 4.37992C117.149 2.98966 117.418 1.55368 117.108 0.185532C116.566 0.107391 116.028 0.0454788 115.491 -0.000225067C115.398 9.89677 115.563 19.7982 115.47 29.6952C113.151 29.8913 111.302 31.6162 110.413 33.6817C109.199 36.1202 109.597 38.9037 109.334 41.5177C109.205 41.6105 108.941 41.7963 108.812 41.8906C108.657 40.6758 108.6 39.0703 106.942 39.2664C106.792 38.2078 106.565 36.4151 105.083 36.7557C104.349 37.3749 104.53 38.4452 104.344 39.287C103.786 39.3327 103.239 39.3902 102.691 39.4418C102.154 40.4281 102.474 42.442 100.925 42.3344C100.852 41.4144 100.795 40.496 100.734 39.5804C100.047 39.5244 99.3595 39.4728 98.6829 39.4212C98.6106 38.6 98.6106 37.7729 98.4298 36.9679C97.965 36.7763 97.4742 36.6775 96.968 36.6834C96.7923 37.5562 96.627 38.4349 96.4825 39.318C95.8523 39.3224 95.2273 39.3327 94.6022 39.3489C94.4163 40.3249 94.2098 41.3009 93.9927 42.2769C92.5206 42.1074 93.0424 40.5166 92.8875 39.4669C92.2262 39.4462 91.5755 39.4256 90.9246 39.4109C90.8523 38.4909 90.7748 37.5724 90.7077 36.6583C90.0671 36.6215 89.437 36.5905 88.812 36.5596C88.7759 37.4265 88.75 38.2904 88.7345 39.1573C88.125 39.1322 87.5207 39.1116 86.9215 39.0909C86.9009 40.9957 86.8801 42.902 86.844 44.8142Z" fill="#11100E"/>
                                <path d="M69.7676 34.4785C75.9194 34.3694 82.0765 34.5301 88.2284 34.3488C88.2232 33.8534 88.2077 32.8612 88.2026 32.3658C87.3348 32.444 86.4773 32.531 85.6199 32.6194C85.9556 30.666 85.8833 28.5223 84.7779 26.818C83.7603 25.3098 81.9422 24.7157 80.2944 24.1997C80.9763 23.6217 81.6167 22.9701 81.8698 22.0767C81.4721 22.0089 80.6715 21.8703 80.2738 21.8025C79.7728 18.27 79.8812 14.6329 79.06 11.1624C78.3781 14.6594 78.1095 18.2228 77.7325 21.7567C77.1746 21.8909 75.5216 22.3243 76.5392 23.0733C76.9576 23.4817 77.3967 23.8694 77.8512 24.2454C73.967 24.639 71.0125 28.4973 71.8801 32.3658C71.1518 32.3246 70.4185 32.2877 69.6952 32.2582C69.716 32.9954 69.7366 33.7399 69.7676 34.4785Z" fill="#11100E"/>
                                <path d="M163.058 34.4784C163.053 33.7811 163.047 33.0837 163.053 32.3864C162.304 32.4277 161.566 32.4749 160.827 32.5206C160.945 30.4964 160.662 28.3218 159.354 26.6941C158.306 25.3466 156.653 24.7569 155.145 24.1008C155.455 23.5229 156.751 23.0216 156.266 22.2579C155.95 22.112 155.325 21.8289 155.011 21.6844C154.38 18.2331 154.504 14.6903 153.817 11.2493C152.754 14.5665 152.981 18.1712 152.48 21.6063C151.978 21.9011 151.483 22.196 150.996 22.4953C151.431 23.0791 151.875 23.6629 152.325 24.2409C150.728 24.8247 148.931 25.3776 147.903 26.8342C146.767 28.4707 146.798 30.548 146.668 32.4542C145.883 32.4645 145.098 32.4793 144.324 32.4999C144.344 33.0941 144.369 33.6985 144.4 34.2971C150.615 34.6185 156.839 34.5448 163.058 34.4784Z" fill="#11100E"/>
                                <path d="M84.9329 45.0728C84.9071 42.0402 84.9793 39.009 85.0208 35.9808C80.811 35.9602 76.6013 35.8732 72.3967 35.857C72.4743 38.9471 72.5259 42.0461 72.3089 45.1348C76.5134 45.0669 80.7232 45.0006 84.9329 45.0728Z" fill="#11100E"/>
                                <path d="M160.243 44.9489C160.103 41.9634 160.047 38.9676 160.13 35.9807C155.997 35.9291 151.869 35.935 147.738 36.0338C147.852 39.0237 147.821 42.015 147.718 45.0005C151.891 44.943 156.069 44.943 160.243 44.9489Z" fill="#11100E"/>
                                <path d="M72.314 57.7489C76.4979 57.7843 80.6767 57.7533 84.8658 57.7681C84.7934 53.8847 84.8295 50 84.7831 46.1211C80.6198 46.1682 76.4567 46.1004 72.2934 46.1048C72.4691 49.9793 72.5259 53.8685 72.314 57.7489Z" fill="#11100E"/>
                                <path d="M160.227 57.7534C160.212 53.8583 160.196 49.9646 160.186 46.0739C156.074 46.0533 151.964 46.0842 147.852 46.0842C147.815 49.9794 148.172 53.8745 147.856 57.7637C151.978 57.743 156.105 57.7578 160.227 57.7534Z" fill="#11100E"/>
                                <path d="M86.8337 46.1162C87.0662 49.9376 86.9473 53.7752 87.092 57.6025C87.3503 57.6748 87.8616 57.8148 88.1147 57.887C87.8925 61.4563 88.249 65.0359 87.8978 68.6052C106.756 68.5536 125.615 68.5271 144.473 68.6406C144.417 65.036 144.462 61.4298 144.473 57.8251C144.767 57.8001 145.362 57.7367 145.661 57.7057C145.568 53.8475 145.671 49.9848 145.811 46.1251C126.151 46.156 106.488 46.2297 86.8337 46.1162Z" fill="#11100E"/>
                                <path d="M71.5702 61.5659C76.2708 61.4716 80.9815 61.3374 85.6818 61.5556C85.6715 60.6459 85.656 59.7422 85.6457 58.8385C80.9453 58.7869 76.2448 58.8385 71.5496 58.6011C71.5548 59.5874 71.5651 60.5737 71.5702 61.5659Z" fill="#11100E"/>
                                <path d="M146.963 61.3684C151.652 61.42 156.344 61.364 161.033 61.4878C161.013 60.5531 160.992 59.6184 160.976 58.6881C156.333 58.8532 151.683 58.6365 147.045 58.8694C147.014 59.7009 146.983 60.5324 146.963 61.3684Z" fill="#11100E"/>
                                <path d="M84.7779 68.869L85.3255 68.8896C85.4443 66.9052 85.4753 64.9164 85.532 62.9335C80.8936 62.9954 76.2501 63.0219 71.6168 62.8244C71.5909 64.8397 71.5859 66.8492 71.5496 68.8631C75.9556 68.6921 80.372 68.7334 84.7779 68.869Z" fill="#11100E"/>
                                <path d="M160.961 62.9503C156.375 62.9547 151.782 62.9444 147.196 62.8766C147.206 64.8404 147.247 66.8027 147.272 68.765C151.838 68.7443 156.406 68.6927 160.972 68.7915C160.966 66.8395 160.961 64.892 160.961 62.9503Z" fill="#11100E"/>
                                <path d="M20.0724 76.1158C20.9039 76.1423 21.7304 76.1733 22.5672 76.2087C22.5826 76.4726 22.6084 77.0048 22.6188 77.2672C38.2076 77.3867 53.7965 77.0918 69.3801 77.397C69.3131 74.9791 69.2821 72.5627 69.2924 70.1404C53.7449 70.2215 38.1973 70.2333 22.6549 70.0874C22.6808 71.3744 22.6963 72.66 22.6963 73.9515C21.7562 73.9781 20.8161 73.9987 19.8863 74.0238C19.9329 74.5457 20.0258 75.5939 20.0724 76.1158Z" fill="#11100E"/>
                                <path d="M22.3295 97.4942C22.2676 99.3444 22.2831 101.198 22.3656 103.048C23.6776 103.042 24.9948 103.048 26.3121 103.058C26.3121 101.177 26.3171 99.2973 26.1829 97.4219C27.0196 97.4219 27.8615 97.4116 28.7087 97.4072C28.6053 99.2707 28.5537 101.142 28.595 103.011C30.0258 103.038 31.4618 103.032 32.8978 102.99C32.9132 101.183 32.9287 99.3798 32.8668 97.5826C33.7086 97.5517 34.5558 97.5252 35.4081 97.5045C35.3771 99.3179 35.3668 101.131 35.3719 102.949C36.8028 102.986 38.2334 103.027 39.6642 103.052C39.7108 101.177 39.7418 99.3032 39.6952 97.4323C40.5372 97.4323 41.3843 97.4382 42.2314 97.4426C42.1539 99.3032 42.1126 101.167 42.1436 103.032C43.5744 103.048 45.0155 103.052 46.4515 103.063C46.4463 101.177 46.4515 99.2869 46.405 97.4072C47.2469 97.3969 48.0888 97.3866 48.936 97.3762C48.843 99.225 48.8275 101.08 48.8636 102.934C50.2892 102.959 51.7252 102.996 53.156 103.048C53.156 101.173 53.156 99.3032 53.0836 97.4323C53.9256 97.4485 54.7728 97.4529 55.625 97.4588C55.5475 99.3032 55.5423 101.146 55.563 102.996C56.9732 103.017 58.3833 103.027 59.7985 103.032C59.7572 101.136 59.7469 99.2398 59.6592 97.3497C60.501 97.3659 61.3481 97.3762 62.2004 97.391C62.1126 99.2457 62.0868 101.105 62.0403 102.965C63.4608 102.955 64.8863 102.945 66.312 102.934C66.2913 101.094 66.3378 99.256 66.3378 97.4219C67.1436 97.4691 67.9598 97.5045 68.7758 97.531C68.7036 99.3032 68.6519 101.074 68.5899 102.846C69.468 102.84 70.3513 102.836 71.2345 102.846C71.2965 116.348 71.3224 129.855 71.1881 143.357C73.0475 143.357 74.907 143.316 76.7717 143.274C76.6477 132.562 76.6684 121.844 76.839 111.142C77.0765 121.87 76.7872 132.608 77.1798 143.332C79.437 143.326 81.6891 143.321 83.9514 143.326C83.9256 132.283 83.7655 121.225 84.1012 110.186C84.2821 121.245 84.1478 132.308 84.2615 143.373C85.7336 143.352 87.2108 143.295 88.6881 143.363C88.8533 127.02 88.6054 110.672 88.7139 94.3289C77.6085 94.5559 66.5032 94.1888 55.3926 94.2257C42.0971 94.236 28.8017 94.1475 15.5061 94.1991C15.5216 95.3093 15.5113 96.4209 15.4907 97.5355C17.7686 97.5414 20.0517 97.5414 22.3295 97.4942Z" fill="#11100E"/>
                                <path d="M217.169 94.1685C204.567 94.055 191.969 94.2304 179.365 94.2201C167.557 94.0756 155.75 94.5872 143.936 94.4678C143.988 110.775 144.024 127.087 143.921 143.398C145.481 143.373 147.045 143.347 148.611 143.326C148.306 141.162 148.481 138.977 148.481 136.802C148.512 127.753 148.43 118.698 148.59 109.655C148.935 120.878 148.632 132.123 148.838 143.357C151.11 143.357 153.383 143.332 155.661 143.244C155.739 132.443 155.76 121.642 155.816 110.847C155.929 111.545 155.981 112.252 155.956 112.964C155.812 123.063 156.235 133.187 155.853 143.275C157.706 143.301 159.567 143.326 161.426 143.306C161.411 129.85 161.333 116.395 161.442 102.939C162.278 102.929 163.12 102.918 163.972 102.913C164.013 101.101 164.029 99.2873 163.941 97.4798C164.762 97.4694 165.589 97.4532 166.415 97.4385C166.338 99.2976 166.348 101.152 166.332 103.011C167.747 103.038 169.173 103.042 170.594 103.053C170.619 101.188 170.615 99.3241 170.465 97.4694C171.343 97.4326 172.226 97.4016 173.11 97.3662C173.023 99.2357 173.023 101.105 173 102.976C174.374 103.038 175.749 103.053 177.133 103.059C177.133 101.167 177.118 99.271 177.025 97.3869C177.903 97.381 178.781 97.381 179.67 97.3766C179.613 99.2607 179.608 101.146 179.613 103.032C181.018 103.053 182.433 103.053 183.848 103.059C183.848 101.188 183.863 99.3241 183.781 97.4532C184.643 97.4429 185.511 97.4282 186.384 97.4178C186.338 99.2607 186.328 101.105 186.338 102.955C187.764 103.007 189.194 103.042 190.63 103.069C190.692 101.198 190.671 99.3285 190.564 97.4591C191.406 97.4429 192.252 97.4223 193.104 97.3972C193.089 99.2504 193.042 101.111 193.021 102.966C194.432 103.001 195.848 103.022 197.267 103.048C197.315 101.188 197.366 99.3285 197.309 97.4694C198.14 97.4635 198.978 97.4488 199.819 97.4385C199.778 99.2873 199.778 101.142 199.772 102.991C201.194 103.032 202.624 103.053 204.049 103.069C204.122 101.224 204.138 99.3801 204.07 97.5417C204.907 97.5358 205.749 97.5358 206.591 97.5417C206.529 99.3757 206.514 101.208 206.504 103.048C207.804 103.069 209.106 103.094 210.414 103.131C210.414 101.266 210.404 99.4008 210.356 97.5358C212.578 97.5417 214.809 97.5358 217.035 97.5461C217.061 96.4153 217.103 95.289 217.169 94.1685Z" fill="#11100E"/>
                                <path d="M84.7985 70.4124C80.6767 70.3771 76.56 70.4287 72.4432 70.3255L71.6839 70.3048C71.689 71.3884 71.6942 72.4691 71.6994 73.5527C76.2035 73.4864 80.7231 73.3729 85.2221 73.6309C85.2118 72.5561 85.2118 71.4813 85.2273 70.4124H84.7985Z" fill="#11100E"/>
                                <path d="M87.4949 70.357C87.4743 71.3949 87.4586 72.4387 87.4483 73.4869C90.94 73.4353 94.4318 73.4294 97.9287 73.5179C113.719 73.5223 129.514 73.4604 145.31 73.5488C145.289 72.5419 145.289 71.5394 145.304 70.5368C126.033 70.3614 106.761 70.6503 87.4949 70.357Z" fill="#11100E"/>
                                <path d="M147.371 70.3363C147.386 71.4303 147.402 72.5257 147.423 73.6255C151.912 73.481 156.4 73.708 160.889 73.5532C160.889 72.4799 160.91 71.4155 160.961 70.3511C156.431 70.3201 151.9 70.5118 147.371 70.3363Z" fill="#11100E"/>
                                <path d="M163.099 77.4175C178.699 77.2214 194.303 77.2214 209.907 77.3452C209.938 77.0253 209.995 76.384 210.026 76.0641C210.899 76.0641 211.772 76.07 212.661 76.0847C212.764 75.4139 212.867 74.7475 212.975 74.0811C211.968 74.0649 210.971 74.0502 209.979 74.0398C209.948 72.7484 209.927 71.4613 209.938 70.1757C194.323 70.2008 178.709 70.1551 163.095 70.1963C163.233 72.598 163.192 75.0099 163.099 77.4175Z" fill="#11100E"/>
                                <path d="M87.8306 92.4844C87.0559 90.1491 84.8916 88.2531 85.1757 85.651C85.2067 82.0758 85.1602 78.5021 85.217 74.9328C80.7025 75.0979 76.1829 74.9475 71.6633 74.9682C71.6942 79.5606 71.8285 84.1575 71.6581 88.75C71.6323 90.1181 70.7645 91.2342 70.0208 92.3089C75.9556 92.3089 81.8957 92.334 87.8306 92.4844Z" fill="#11100E"/>
                                <path d="M162.666 92.3092C161.979 91.0118 160.755 89.8397 160.893 88.2534C160.858 83.8585 160.893 79.4577 160.893 75.0569C156.416 75.1542 151.937 75.0775 147.464 74.9374C147.448 79.0242 147.573 83.1198 147.427 87.2007C146.725 89.0804 145.656 90.7951 144.535 92.4478C150.573 92.1382 156.622 92.3298 162.666 92.3092Z" fill="#11100E"/>
                                <path d="M22.6704 91.3376C37.7686 91.5705 52.8719 91.4718 67.9753 91.6118C70.2479 88.2076 68.9308 83.8997 69.4835 80.0828C52.5672 80.2169 35.6509 80.1698 18.7344 80.1181C18.7189 81.0484 18.6983 81.9831 18.688 82.9178C20.0258 82.9075 21.3688 82.9134 22.7118 82.9031C22.7479 85.7131 22.7686 88.5232 22.6704 91.3376Z" fill="#11100E"/>
                                <path d="M163.27 88.2284C163.295 89.5095 164.023 90.5887 164.845 91.5087C179.891 91.4674 194.934 91.5603 209.974 91.55C209.958 88.6574 209.933 85.7589 209.958 82.8663C211.349 82.8619 212.737 82.8825 214.138 82.9135C214.163 81.9935 214.2 81.0795 214.246 80.1698C197.18 80.1344 180.118 80.1654 163.058 80.1389C163.218 82.8309 163.089 85.5378 163.27 88.2284Z" fill="#11100E"/>
                                <path d="M191.885 152.123C190.599 152.107 189.324 152.097 188.047 152.082C188.074 150.481 188.088 148.88 188.109 147.283C189.365 147.277 190.626 147.288 191.891 147.314C191.901 148.915 191.895 150.516 191.885 152.123ZM172.366 139.474C172.387 141.865 172.366 144.261 172.346 146.664C171.147 146.669 169.953 146.679 168.766 146.689C168.746 143.115 168.849 139.54 168.88 135.971C176.528 136.054 184.179 136.157 191.829 136.012C191.864 139.643 191.864 143.27 191.823 146.896C190.579 146.865 189.334 146.844 188.094 146.834C188.156 144.36 188.136 141.89 188.13 139.422C182.872 139.406 177.619 139.536 172.366 139.474ZM168.797 152.134C168.849 150.502 168.859 148.874 168.828 147.246C169.984 147.215 171.147 147.201 172.315 147.195C172.325 148.87 172.325 150.547 172.33 152.227C171.147 152.196 169.969 152.169 168.797 152.134ZM169.014 131.463C170.413 131.473 171.818 131.504 173.229 131.535C173.208 132.826 173.177 134.116 173.126 135.408C171.746 135.414 170.372 135.418 169.004 135.428C169.014 134.102 169.018 132.779 169.014 131.463ZM169.204 126.678C170.527 126.684 171.859 126.705 173.192 126.751C173.182 128.12 173.192 129.499 173.208 130.873C171.808 130.883 170.413 130.899 169.018 130.904C169.117 129.499 169.158 128.089 169.204 126.678ZM170.212 122.201C171.244 122.16 172.278 122.133 173.316 122.123C173.26 123.445 173.244 124.774 173.264 126.1C171.906 126.064 170.547 126.028 169.2 125.981C169.525 124.716 169.866 123.456 170.212 122.201ZM173.161 117.918C173.192 119.117 173.219 120.309 173.27 121.508C172.381 121.483 171.492 121.462 170.615 121.446C171.327 120.181 172.144 118.968 173.161 117.918ZM174.313 116.265C175.465 115.512 176.652 114.798 177.882 114.163C177.898 115.036 177.908 115.915 177.933 116.798C177.432 116.761 176.906 116.736 176.357 116.727C175.53 116.714 174.75 116.737 174.025 116.786C174.121 116.612 174.217 116.439 174.313 116.265ZM177.944 121.498C176.601 121.483 175.263 121.483 173.937 121.566C173.807 120.161 173.797 118.756 173.724 117.35C173.827 117.609 174.512 117.542 175.308 117.507C175.939 117.479 176.845 117.461 177.97 117.516C177.898 118.842 177.908 120.171 177.944 121.498ZM177.991 131.586C177.964 132.847 177.954 134.112 177.954 135.372C176.545 135.356 175.14 135.346 173.735 135.336C173.761 134.091 173.786 132.847 173.817 131.601C175.202 131.607 176.596 131.607 177.991 131.586ZM177.97 130.883C176.596 130.883 175.228 130.893 173.864 130.941C173.833 129.515 173.838 128.089 173.889 126.664C175.218 126.709 176.545 126.746 177.882 126.777C177.892 128.145 177.923 129.509 177.97 130.883ZM173.838 122.143C175.175 122.17 176.518 122.18 177.861 122.18C177.846 123.492 177.857 124.805 177.882 126.115C176.524 126.111 175.171 126.115 173.827 126.142C173.838 124.809 173.848 123.476 173.838 122.143ZM178.589 131.58C179.928 131.611 181.265 131.642 182.608 131.673C182.604 132.903 182.604 134.137 182.614 135.372C181.23 135.352 179.846 135.331 178.466 135.321C178.503 134.071 178.544 132.826 178.589 131.58ZM178.569 126.74C179.908 126.802 181.255 126.849 182.604 126.885C182.598 128.228 182.614 129.567 182.639 130.914C181.276 130.899 179.918 130.899 178.559 130.91C178.569 129.519 178.579 128.131 178.569 126.74ZM182.639 122.253C182.645 123.579 182.66 124.908 182.691 126.235C181.302 126.208 179.912 126.193 178.528 126.177C178.517 124.846 178.517 123.507 178.523 122.174C179.891 122.201 181.265 122.226 182.639 122.253ZM178.575 117.396C179.938 117.392 181.302 117.392 182.67 117.396C182.67 118.786 182.681 120.181 182.697 121.576C181.302 121.57 179.918 121.576 178.533 121.58C178.538 120.186 178.548 118.791 178.575 117.396ZM182.67 113.921C182.656 114.881 182.645 115.842 182.639 116.808C181.292 116.762 179.949 116.74 178.606 116.736C178.579 115.816 178.554 114.897 178.538 113.977C179.912 113.957 181.286 113.936 182.67 113.921ZM183.192 131.586C184.686 131.576 186.178 131.566 187.676 131.55C187.603 132.847 187.572 134.143 187.568 135.445C186.1 135.439 184.633 135.424 183.172 135.424C183.172 134.143 183.176 132.862 183.192 131.586ZM183.219 126.829C184.696 126.839 186.173 126.854 187.655 126.87C187.599 128.213 187.583 129.567 187.572 130.914C186.105 130.924 184.643 130.93 183.182 130.91C183.197 129.546 183.213 128.187 183.219 126.829ZM183.25 122.17C184.696 122.18 186.142 122.185 187.593 122.185C187.568 123.507 187.583 124.836 187.63 126.162C186.167 126.162 184.706 126.187 183.25 126.224C183.239 124.871 183.244 123.518 183.25 122.17ZM183.291 117.437C184.665 117.474 186.038 117.505 187.418 117.536C187.494 118.869 187.531 120.202 187.556 121.539C186.116 121.555 184.68 121.58 183.244 121.617C183.264 120.222 183.281 118.828 183.291 117.437ZM183.353 114.386C184.566 115.16 185.724 116.007 186.838 116.917C185.656 116.896 184.484 116.886 183.312 116.896C183.316 116.055 183.332 115.217 183.353 114.386ZM188.057 118.436C188.771 119.443 189.421 120.507 190.057 121.576C189.561 121.576 188.569 121.58 188.074 121.586C188.053 120.532 188.047 119.478 188.057 118.436ZM191.472 126.241C190.351 126.208 189.235 126.187 188.125 126.173C188.125 124.84 188.125 123.513 188.119 122.185C188.879 122.18 189.638 122.17 190.403 122.164C190.822 123.503 191.177 124.867 191.472 126.241ZM191.751 130.93C190.574 130.941 189.396 130.945 188.228 130.951C188.218 129.567 188.202 128.182 188.181 126.802C189.334 126.798 190.492 126.798 191.658 126.788C191.664 128.166 191.695 129.546 191.751 130.93ZM191.798 135.48C190.568 135.465 189.349 135.465 188.13 135.47C188.187 134.147 188.202 132.826 188.202 131.504C189.386 131.514 190.574 131.529 191.767 131.524C191.777 132.841 191.782 134.158 191.798 135.48ZM60.3151 152.241C60.2996 150.564 60.3099 148.89 60.3615 147.215C61.5082 147.242 62.655 147.283 63.8017 147.33C63.8326 148.946 63.8533 150.568 63.8739 152.19C62.6859 152.21 61.4979 152.231 60.3151 152.241ZM44.5094 139.499C44.53 141.937 44.5558 144.374 44.5507 146.813C43.249 146.803 41.9525 146.809 40.656 146.823C40.5837 143.208 40.6044 139.598 40.6611 135.981C48.3729 136.064 56.0847 136.163 63.7965 136.136C63.7346 139.695 63.8378 143.25 63.781 146.809C62.6292 146.798 61.4824 146.788 60.3357 146.778C60.2945 144.344 60.3306 141.911 60.3718 139.484C55.0826 139.52 49.7934 139.561 44.5094 139.499ZM40.5992 152.056C40.5992 150.44 40.6095 148.818 40.6302 147.205C41.9319 147.205 43.2387 147.221 44.5455 147.242C44.5455 148.864 44.5455 150.485 44.5507 152.107C43.2284 152.082 41.9112 152.066 40.5992 152.056ZM40.687 131.452C41.9061 131.498 43.1302 131.555 44.3543 131.611C44.3698 132.878 44.3751 134.143 44.3854 135.408C43.1456 135.418 41.9112 135.428 40.6715 135.434C40.6766 134.106 40.6818 132.775 40.687 131.452ZM40.8006 126.555C41.9835 126.596 43.1714 126.643 44.3647 126.689C44.3543 128.089 44.3543 129.488 44.3543 130.893C43.1456 130.904 41.9422 130.914 40.7387 130.92C40.749 129.463 40.7697 128.007 40.8006 126.555ZM41.9835 122.061C42.7687 122.067 43.5537 122.071 44.3491 122.087C44.3491 123.431 44.3543 124.778 44.3698 126.126C43.1611 126.105 41.9473 126.084 40.7439 126.059C41.0538 124.695 41.4876 123.369 41.9835 122.061ZM44.3027 118.419C44.3336 119.443 44.3594 120.466 44.3957 121.493C43.8585 121.504 42.7893 121.524 42.2521 121.535C42.8925 120.47 43.5899 119.437 44.3027 118.419ZM45.0516 131.56C46.4566 131.57 47.8565 131.591 49.2665 131.607C49.2149 132.847 49.1685 134.091 49.1528 135.336C47.7841 135.352 46.4205 135.356 45.0516 135.352C45.0671 134.085 45.0723 132.82 45.0516 131.56ZM45.0671 122.123C46.4515 122.118 47.8357 122.143 49.2252 122.185C49.2149 123.476 49.2252 124.778 49.251 126.074C47.846 126.074 46.4463 126.074 45.0465 126.059C45.0723 124.747 45.0827 123.435 45.0671 122.123ZM45.0103 126.736C46.4154 126.736 47.8202 126.726 49.2252 126.73C49.2201 128.11 49.2304 129.488 49.2562 130.868C47.8409 130.873 46.4308 130.879 45.0207 130.883C45.0413 129.499 45.0361 128.114 45.0103 126.736ZM45.1859 117.609C46.5186 117.547 47.8512 117.495 49.1891 117.454C49.1994 118.776 49.2304 120.099 49.2923 121.421C47.8616 121.4 46.4308 121.421 45 121.467C45.0723 120.181 45.1343 118.894 45.1859 117.609ZM49.2098 114.406C49.2149 115.211 49.2201 116.018 49.2355 116.824C48.0579 116.839 46.875 116.865 45.7128 116.907C46.8285 116.007 47.9958 115.176 49.2098 114.406ZM49.9174 122.139C51.2965 122.185 52.6809 122.195 54.0651 122.191C54.0548 123.482 54.0496 124.778 54.0444 126.074C52.6394 126.039 51.2294 126.022 49.8244 126.012C49.8502 124.716 49.876 123.431 49.9174 122.139ZM49.9432 117.392C51.2862 117.423 52.6291 117.437 53.9774 117.433C53.9825 118.786 54.0083 120.144 54.0393 121.504C52.6549 121.473 51.2758 121.462 49.8915 121.462C49.9071 120.103 49.9277 118.745 49.9432 117.392ZM53.972 113.936C53.9825 114.902 53.9877 115.873 54.0032 116.849C52.6601 116.818 51.312 116.814 49.9742 116.834C49.9484 115.863 49.9226 114.891 49.9071 113.926C51.2604 113.926 52.6136 113.911 53.972 113.936ZM49.9174 126.699C51.2913 126.761 52.6705 126.792 54.0496 126.802C54.0238 128.162 54.0083 129.519 54.0032 130.883C52.6343 130.879 51.2655 130.879 49.9018 130.889C49.8863 129.494 49.8811 128.094 49.9174 126.699ZM49.9226 131.488C51.312 131.545 52.7067 131.555 54.1012 131.55C54.0548 132.831 54.0186 134.112 53.998 135.397C52.6085 135.377 51.2242 135.366 49.8399 135.362C49.845 134.065 49.8657 132.775 49.9226 131.488ZM54.6333 131.524C56.0125 131.519 57.3967 131.519 58.7811 131.493C58.8482 132.82 58.8636 134.147 58.8224 135.48C57.3967 135.418 55.9762 135.397 54.5557 135.403C54.5765 134.112 54.5972 132.816 54.6333 131.524ZM54.6797 126.782C56.0486 126.788 57.4225 126.782 58.7966 126.761C58.8017 128.141 58.812 129.519 58.812 130.899C57.4173 130.873 56.0228 130.879 54.6333 130.893C54.6436 129.525 54.6642 128.151 54.6797 126.782ZM58.812 122.325C58.7914 123.596 58.7966 124.871 58.7862 126.146C57.407 126.101 56.028 126.08 54.6539 126.074C54.6591 124.774 54.6694 123.476 54.6797 122.18C56.0538 122.211 57.4328 122.247 58.812 122.325ZM58.8378 117.501C58.8017 118.859 58.812 120.222 58.843 121.58C57.4535 121.58 56.0641 121.58 54.6746 121.601C54.6797 120.206 54.6746 118.812 54.6488 117.423C56.0434 117.47 57.438 117.501 58.8378 117.501ZM54.7005 114.262C56.1621 115.005 57.6808 115.702 58.8275 116.917C57.4431 116.876 56.0641 116.829 54.6849 116.839C54.6849 115.976 54.69 115.118 54.7005 114.262ZM59.4628 122.304C60.3822 122.278 61.312 122.257 62.2417 122.236C62.7066 123.544 63.063 124.887 63.3575 126.251C62.03 126.235 60.7077 126.22 59.3854 126.214C59.3957 124.908 59.4215 123.606 59.4628 122.304ZM59.4473 117.877C60.3409 119.137 61.1777 120.439 61.999 121.751C61.1261 121.725 60.2532 121.7 59.3854 121.679C59.3854 120.408 59.3957 119.143 59.4473 117.877ZM63.5692 130.955C62.2004 130.972 60.8368 130.972 59.4731 130.966C59.5145 129.567 59.53 128.166 59.5249 126.767C60.8317 126.777 62.1332 126.798 63.4452 126.833C63.4866 128.207 63.5331 129.581 63.5692 130.955ZM63.7241 135.594C62.3089 135.573 60.8988 135.563 59.4886 135.542C59.561 134.184 59.561 132.82 59.4938 131.467C60.8781 131.473 62.2675 131.493 63.657 131.519C63.657 132.878 63.6725 134.236 63.7241 135.594ZM232.088 164.216C224.866 162.893 217.557 162.138 210.3 161.049C210.212 159.856 210.176 158.662 210.176 157.469C205.743 157.463 201.291 157.707 196.869 157.314C197.004 157.211 197.273 156.995 197.408 156.885C201.643 156.642 205.91 156.813 210.16 156.84C210.15 153.487 210.187 150.135 210.187 146.778C205.863 146.953 201.54 146.813 197.222 146.829L197.236 146.204C201.55 146.136 205.869 146.101 210.187 146.095C210.171 142.877 210.191 139.664 210.166 136.447C205.889 136.441 201.617 136.437 197.34 136.437L197.288 135.785C201.592 135.703 205.899 135.826 210.207 135.837C210.166 132.391 210.14 128.952 210.15 125.506C205.811 125.418 201.472 125.584 197.139 125.341L197.562 124.871C201.746 124.685 205.956 124.877 210.15 124.877C210.156 121.56 210.166 118.244 210.129 114.928C205.904 115.036 201.679 114.98 197.453 114.943C197.464 114.788 197.474 114.468 197.484 114.313C201.689 114.369 205.894 114.293 210.103 114.38C210.092 111.198 210.092 108.017 210.187 104.84C194.67 105.077 179.148 104.887 163.631 104.969C163.734 122.567 163.72 140.165 163.699 157.764C156.313 157.49 148.91 157.624 141.524 157.707C141.778 149.014 141.462 140.32 141.601 131.628C141.59 119.416 141.638 107.206 141.699 95.0001C138.079 95.202 134.447 95.0679 130.822 95.1195C117.511 95.1092 104.199 95.2227 90.8936 95.0576C91.1158 103.62 90.9401 112.19 91.0073 120.755C90.9401 133.084 91.1106 145.408 91.0537 157.738C83.626 157.583 76.1932 157.568 68.7655 157.682C68.8482 140.145 68.7655 122.603 68.9411 105.067C53.4814 104.85 38.0165 104.99 22.5568 104.953C22.66 108.068 22.5775 111.194 22.6084 114.313C26.8079 114.287 31.0073 114.38 35.2067 114.339C35.2118 114.493 35.2222 114.794 35.2273 114.949C31.0176 114.939 26.813 114.949 22.6084 114.959C22.6084 118.275 22.6291 121.591 22.6033 124.908C26.8079 124.634 31.0176 124.877 35.2221 124.856L35.1859 125.574C30.9969 125.558 26.8079 125.537 22.6239 125.408C22.6136 128.884 22.6291 132.36 22.6033 135.832C26.8646 135.75 31.1312 135.806 35.3977 135.816L35.4339 136.581C31.1622 136.353 26.8854 136.561 22.6136 136.427C22.5878 139.68 22.5878 142.939 22.593 146.198C26.8904 146.06 31.1932 146.136 35.4959 146.225C35.4029 146.394 35.2118 146.726 35.1188 146.891C30.9555 146.881 26.7872 146.906 22.6239 146.885C22.6446 150.207 22.5672 153.533 22.6342 156.86C26.8182 156.7 31.0073 156.85 35.1964 156.834L35.1394 157.572C30.9815 157.191 26.8079 157.717 22.6497 157.36C22.5568 158.658 22.5154 159.959 22.4948 161.266C16.0537 162.103 9.64357 163.114 3.19732 163.894C2.11769 164.086 0.903896 164.065 0 164.767C13.497 164.969 27.0041 164.886 40.5114 164.948C40.4649 160.847 40.5941 156.745 40.6663 152.645C41.9577 152.639 43.249 152.629 44.5455 152.619C44.5507 156.689 44.561 160.764 44.6229 164.841C45.8833 164.83 47.1488 164.835 48.4142 164.845C48.4142 160.837 48.4814 156.829 48.466 152.821C48.5021 151.705 48.4091 150.491 49.0393 149.515C50.0878 147.799 52.6394 146.974 54.3492 148.197C55.4649 148.895 56.1881 150.124 56.1621 151.451C56.2706 155.935 56.2242 160.424 56.2036 164.907C57.6033 164.903 59.0031 164.897 60.403 164.903C60.2841 160.791 60.2635 156.673 60.3254 152.563C61.4876 152.583 62.6498 152.619 63.8172 152.666C63.8481 156.751 63.843 160.837 63.843 164.923C74.2717 164.975 84.7005 164.856 95.1292 165C94.9587 154.298 94.9536 143.59 95.1343 132.882C95.9092 132.629 96.6478 132.268 97.2883 131.751C96.3895 128.487 97.03 125.005 97.6653 121.745C99.9019 112.5 107.521 105.316 116.338 102.237C119.308 103.321 122.04 104.949 124.602 106.777C131.544 111.916 135.888 120.414 135.857 129.065C135.842 129.965 135.496 130.811 135.248 131.663C135.888 132.257 136.663 132.66 137.495 132.944C137.501 143.615 137.67 154.292 137.428 164.959C147.841 164.886 158.254 164.959 168.673 164.965C168.75 160.868 168.673 156.772 168.807 152.681C169.984 152.691 171.162 152.701 172.35 152.701C172.422 156.766 172.371 160.837 172.408 164.907C173.626 164.903 174.845 164.897 176.07 164.897C176.167 160.356 175.946 155.8 176.229 151.265C176.178 148.942 178.719 147.015 180.94 147.603C182.65 147.944 184.081 149.509 184.123 151.286C184.271 155.821 184.102 160.366 184.199 164.913C185.455 164.886 186.72 164.892 187.985 164.938C188.006 160.795 187.991 156.652 188.016 152.516C189.314 152.516 190.609 152.552 191.911 152.614C191.916 156.714 191.984 160.816 191.984 164.917C198.27 164.948 204.556 164.948 210.841 164.917C218.219 164.81 225.62 165.083 232.981 164.639C232.758 164.536 232.309 164.319 232.088 164.216Z" fill="#11100E"/>
                                <path d="M88.8224 156.456C88.6984 153.429 88.7139 150.398 88.6984 147.371C82.8616 147.444 77.0249 147.469 71.1933 147.382C71.2139 150.429 71.1984 153.471 71.1933 156.518C77.0661 156.555 82.9442 156.565 88.8224 156.456Z" fill="#11100E"/>
                                <path d="M141.798 92.8413C142.599 90.5783 144.029 88.6204 144.933 86.4251C145.253 82.6701 145.052 78.8944 145.104 75.129C143.647 75.1231 142.19 75.1084 140.738 75.0465C140.971 79.9633 140.734 84.8815 140.883 89.7983C140.067 89.8087 139.251 89.8249 138.446 89.8455C138.657 84.9272 138.312 80.0045 138.404 75.0818C136.079 75.185 133.75 75.1806 131.425 75.0509C131.606 79.9692 131.317 84.8919 131.617 89.7983C130.779 89.7718 129.943 89.7512 129.116 89.7408C129.308 84.8506 129.133 79.9588 129.194 75.0715C126.766 75.1644 124.344 75.1541 121.922 75.0258C122.371 79.9633 122.035 84.9331 122.227 89.8809C121.389 89.8912 120.562 89.9119 119.737 89.9428C119.871 84.9788 119.747 80.0104 119.83 75.0406L119.266 75.0612C117.174 75.0671 115.026 75.3767 112.991 74.7722C112.748 79.7775 112.903 84.7975 112.955 89.8087C112.118 89.8028 111.286 89.8087 110.46 89.8146C110.48 84.8653 110.537 79.9176 110.486 74.9742C108.115 75.2219 105.728 75.1128 103.358 75.0052C103.564 79.9279 103.295 84.855 103.6 89.7718C102.758 89.819 101.922 89.8662 101.085 89.9178C101.245 84.9538 101.219 79.9898 101.126 75.0302C98.8431 75.2322 96.5497 75.16 94.2666 75.1084C94.308 80.0104 94.2408 84.9066 94.3027 89.8087C93.5021 89.8087 92.7066 89.8087 91.9164 89.8146C91.8906 84.9066 91.9422 80.0001 91.8803 75.0981C90.4133 75.16 88.9464 75.185 87.4795 75.185C87.6602 79.0035 87.4277 82.8352 87.6602 86.6522C88.3369 88.7958 89.7934 90.6092 90.5683 92.7322C107.645 92.8103 124.721 92.6806 141.798 92.8413Z" fill="#11100E"/>
                                <path d="M161.545 144.235C155.646 144.322 149.742 144.421 143.848 144.281C143.837 145.02 143.837 145.764 143.837 146.507C149.737 146.322 155.646 146.229 161.539 146.476C161.535 145.727 161.539 144.978 161.545 144.235Z" fill="#11100E"/>
                                <path d="M88.9102 144.215C83.3781 144.374 77.8357 144.349 72.2985 144.24C72.1489 144.239 71.9963 144.24 71.8409 144.242C71.6399 144.245 71.444 144.251 71.2531 144.259C71.2664 144.632 71.2728 145.019 71.2708 145.418C71.2694 145.716 71.2633 146.006 71.2531 146.291C74.1247 146.285 77.0222 146.294 79.9451 146.319C82.9364 146.344 85.9009 146.385 88.8378 146.441C88.8585 145.889 88.8946 144.772 88.9102 144.215Z" fill="#11100E"/>
                                <path d="M161.477 156.528C161.498 153.47 161.473 150.413 161.519 147.355C155.661 147.433 149.799 147.464 143.942 147.402C144.035 150.454 143.993 153.501 143.977 156.555C149.81 156.6 155.64 156.565 161.477 156.528Z" fill="#11100E"/>
                            </svg>
                        </div>
                        <h3 class="ds2-city-name">Mumbai</h3>
                    </a>
                </div>

                <!-- City 2: Chennai (SVG 2) -->
                <div class="col-lg-4 col-md-4">
                    <a href="{{ route('signage_company_in_chennai') }}" class="ds2-city-card">
                        <div class="ds2-city-card-svg">
                            <svg width="140" height="165" viewBox="0 0 140 165" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M123.126 127.669H15.9863V157.261H123.126V127.669Z" fill="#0E0D0A"/>
                                <path d="M125.509 138.81H13.605V143.231H125.509V138.81Z" fill="#0E0D0A"/>
                                <path d="M17.687 140H13.605V142.042H17.687V140Z" fill="white"/>
                                <path d="M120.096 142.042H112.115V140H120.096V142.042ZM110.786 142.042H102.806V140H110.786V142.042ZM101.475 142.042H93.4959V140H101.475V142.042ZM92.1645 142.042H84.1853V140H92.1645V142.042ZM82.8562 142.042H74.8769V140H82.8562V142.042ZM73.5457 142.042H65.5664V140H73.5457V142.042ZM64.2373 142.042H56.2559V140H64.2373V142.042ZM54.9268 142.042H46.9454V140H54.9268V142.042ZM45.6163 142.042H37.6371V140H45.6163V142.042ZM36.3058 142.042H28.3266V140H36.3058V142.042ZM26.9953 142.042H19.0161V140H26.9953V142.042Z" fill="white"/>
                                <path d="M125.507 140H121.425V142.042H125.507V140Z" fill="white"/>
                                <path d="M116.665 98.0776H22.4474V127.669H116.665V98.0776Z" fill="#0E0D0A"/>
                                <path d="M116.665 107.462H22.4474V111.883H116.665V107.462Z" fill="#0E0D0A"/>
                                <path d="M25.8851 108.652H22.4474V110.694H25.8851V108.652Z" fill="white"/>
                                <path d="M112.108 110.694H105.392V108.652H112.108V110.694ZM104.271 110.694H97.552V108.652H104.271V110.694ZM96.4312 110.694H89.7103V108.652H96.4312V110.694ZM88.5937 110.694H81.8749V108.652H88.5937V110.694ZM80.754 110.694H74.0353V108.652H80.754V110.694ZM72.9144 110.694H66.1956V108.652H72.9144V110.694ZM65.0791 110.694H58.3582V108.652H65.0791V110.694ZM57.2395 110.694H50.5207V108.652H57.2395V110.694ZM49.3998 110.694H42.6811V108.652H49.3998V110.694ZM41.5602 110.694H34.8435V108.652H41.5602V110.694ZM33.7227 110.694H27.0039V108.652H33.7227V110.694Z" fill="white"/>
                                <path d="M116.665 108.652H113.227V110.694H116.665V108.652Z" fill="white"/>
                                <path d="M125.509 148.077H13.605V158.622H125.509V148.077Z" fill="#0E0D0A"/>
                                <path d="M94.2152 132.346H44.897V158.622H94.2152V132.346Z" fill="#0E0D0A"/>
                                <path d="M63.6254 138.81H55.0278V158.62H63.6254V138.81Z" fill="white"/>
                                <path d="M55.0279 135.535H46.4324V158.622H55.0279V135.535Z" fill="#0E0D0A"/>
                                <path d="M55.0279 135.535H46.4324V136.881H55.0279V135.535Z" fill="#0E0D0A"/>
                                <path d="M55.0279 156.352H46.4324V158.622H55.0279V156.352Z" fill="#0E0D0A"/>
                                <path d="M92.68 135.535H84.0845V158.622H92.68V135.535Z" fill="#0E0D0A"/>
                                <path d="M92.68 135.535H84.0845V136.881H92.68V135.535Z" fill="#0E0D0A"/>
                                <path d="M92.68 156.352H84.0845V158.622H92.68V156.352Z" fill="#0E0D0A"/>
                                <path d="M73.8549 138.81H65.2573V158.62H73.8549V138.81Z" fill="white"/>
                                <path d="M84.0844 138.81H75.4868V158.62H84.0844V138.81Z" fill="white"/>
                                <path d="M120.403 117.126H18.7048V127.67H120.403V117.126Z" fill="#0E0D0A"/>
                                <path d="M120.403 118.175H18.7048V119.762H120.403V118.175Z" fill="white"/>
                                <path d="M109.426 68.4868H29.6859V98.0761H109.426V68.4868Z" fill="#0E0D0A"/>
                                <path d="M112.591 87.5356H26.5186V98.0787H112.591V87.5356Z" fill="#0E0D0A"/>
                                <path d="M112.591 88.6968H26.5186V91.6428H112.591V88.6968Z" fill="white"/>
                                <path d="M104.063 38.895H35.0518V68.4864H104.063V38.895Z" fill="#0E0D0A"/>
                                <path d="M106.8 57.9414H32.3119V68.4866H106.8V57.9414Z" fill="#0E0D0A"/>
                                <path d="M106.8 60.3525H32.3119V63.2986H106.8V60.3525Z" fill="white"/>
                                <path d="M99.0187 9.3042H40.0936V38.8956H99.0187V9.3042Z" fill="#0E0D0A"/>
                                <path d="M101.359 9.3042H37.7552V17.3822H101.359V9.3042Z" fill="#0E0D0A"/>
                                <path d="M101.359 12.5356H37.7552V14.1504H101.359V12.5356Z" fill="white"/>
                                <path d="M101.359 14.1504H37.7552V15.7651H101.359V14.1504Z" fill="#0E0D0A"/>
                                <path d="M101.359 28.3506H37.7552V38.8958H101.359V28.3506Z" fill="#0E0D0A"/>
                                <path d="M101.359 30.8755H37.7552V32.9154H101.359V30.8755Z" fill="white"/>
                                <path d="M97.2772 127.669H41.835V135.535H97.2772V127.669Z" fill="#0E0D0A"/>
                                <path d="M95.6882 129.497H43.4218V133.708H95.6882V129.497Z" fill="white"/>
                                <path d="M97.2772 95.5059H41.835V103.373H97.2772V95.5059Z" fill="#0E0D0A"/>
                                <path d="M95.6882 97.333H43.4218V101.544H95.6882V97.333Z" fill="white"/>
                                <path d="M97.2772 62.728H41.835V70.5934H97.2772V62.728Z" fill="#0E0D0A"/>
                                <path d="M95.6882 64.5527H43.4218V68.7657H95.6882V64.5527Z" fill="white"/>
                                <path d="M97.2772 34.9624H41.835V42.83H97.2772V34.9624Z" fill="#0E0D0A"/>
                                <path d="M95.6882 36.792H43.4218V41.0028H95.6882V36.792Z" fill="white"/>
                                <path d="M109.429 76.168H29.6859V80.5913H109.429V76.168Z" fill="#0E0D0A"/>
                                <path d="M32.5932 77.3599H29.6859V79.3998H32.5932V77.3599Z" fill="white"/>
                                <path d="M105.57 79.3998H99.8861V77.3599H105.57V79.3998ZM98.937 79.3998H93.251V77.3599H98.937V79.3998ZM92.302 79.3998H86.616V77.3599H92.302V79.3998ZM85.6669 79.3998H79.981V77.3599H85.6669V79.3998ZM79.034 79.3998H73.346V77.3599H79.034V79.3998ZM72.399 79.3998H66.7131V77.3599H72.399V79.3998ZM65.764 79.3998H60.078V77.3599H65.764V79.3998ZM59.1311 79.3998H53.443V77.3599H59.1311V79.3998ZM52.4961 79.3998H46.8101V77.3599H52.4961V79.3998ZM45.8611 79.3998H40.1751V77.3599H45.8611V79.3998ZM39.2282 79.3998H33.5422V77.3599H39.2282V79.3998Z" fill="white"/>
                                <path d="M109.426 77.3599H106.517V79.3998H109.426V77.3599Z" fill="white"/>
                                <path d="M104.063 47.3706H35.0518V51.7918H104.063V47.3706Z" fill="#0E0D0A"/>
                                <path d="M37.5684 48.563H35.0518V50.6029H37.5684V48.563Z" fill="white"/>
                                <path d="M100.723 50.6029H95.8019V48.563H100.723V50.6029ZM94.9817 50.6029H90.0602V48.563H94.9817V50.6029ZM89.2399 50.6029H84.3206V48.563H89.2399V50.6029ZM83.5004 50.6029H78.5788V48.563H83.5004V50.6029ZM77.7564 50.6029H72.837V48.563H77.7564V50.6029ZM72.0168 50.6029H67.0953V48.563H72.0168V50.6029ZM66.275 50.6029H61.3535V48.563H66.275V50.6029ZM60.5333 50.6029H55.6139V48.563H60.5333V50.6029ZM54.7936 50.6029H49.87V48.563H54.7936V50.6029ZM49.0519 50.6029H44.1325V48.563H49.0519V50.6029ZM43.3122 50.6029H38.3907V48.563H43.3122V50.6029Z" fill="white"/>
                                <path d="M104.063 48.563H101.544V50.6029H104.063V48.563Z" fill="white"/>
                                <path d="M99.0187 20.7271H40.0936V25.1482H99.0187V20.7271Z" fill="#0E0D0A"/>
                                <path d="M42.2452 21.917H40.0936V23.959H42.2452V21.917Z" fill="white"/>
                                <path d="M96.1693 23.959H91.9671V21.917H96.1693V23.959ZM91.2671 23.959H87.0628V21.917H91.2671V23.959ZM86.3649 23.959H82.1627V21.917H86.3649V23.959ZM81.4627 23.959H77.2605V21.917H81.4627V23.959ZM76.5584 23.959H72.3562V21.917H76.5584V23.959ZM71.6562 23.959H67.454V21.917H71.6562V23.959ZM66.7561 23.959H62.5539V21.917H66.7561V23.959ZM61.8518 23.959H57.6496V21.917H61.8518V23.959ZM56.9496 23.959H52.7496V21.917H56.9496V23.959ZM52.0474 23.959H47.8453V21.917H52.0474V23.959ZM47.1452 23.959H42.9431V21.917H47.1452V23.959Z" fill="white"/>
                                <path d="M99.0164 21.917H96.8691V23.959H99.0164V21.917Z" fill="white"/>
                                <path d="M97.2772 135.535L94.2152 138.81V135.535H97.2772Z" fill="#0E0D0A"/>
                                <path d="M41.893 135.535L44.9529 138.81V135.535H41.893Z" fill="#0E0D0A"/>
                                <path d="M93.0643 1.25H92.3492V9.30434H93.0643V1.25Z" fill="#0E0D0A"/>
                                <path d="M95.0763 6.66028C95.0763 7.98085 94.0048 9.05236 92.6842 9.05236C91.3636 9.05236 90.29 7.98085 90.29 6.66028C90.29 5.33757 91.3615 4.26611 92.6842 4.26611C94.0048 4.26611 95.0763 5.33972 95.0763 6.66028Z" fill="#0E0D0A"/>
                                <path d="M93.8803 2.8254C93.8803 3.48675 93.3435 4.02144 92.6843 4.02144C92.0229 4.02144 91.4861 3.48675 91.4861 2.8254C91.4861 2.16404 92.0229 1.62939 92.6843 1.62939C93.3456 1.62939 93.8803 2.16619 93.8803 2.8254Z" fill="#0E0D0A"/>
                                <path d="M86.6011 1.25H85.8882V9.30434H86.6011V1.25Z" fill="#0E0D0A"/>
                                <path d="M88.6174 6.66028C88.6174 7.98085 87.5459 9.05236 86.2232 9.05236C84.9026 9.05236 83.829 7.98085 83.829 6.66028C83.829 5.33757 84.9026 4.26611 86.2232 4.26611C87.5481 4.26611 88.6174 5.33972 88.6174 6.66028Z" fill="#0E0D0A"/>
                                <path d="M87.4192 2.8254C87.4192 3.48675 86.8845 4.02144 86.2231 4.02144C85.5618 4.02144 85.0272 3.48675 85.0272 2.8254C85.0272 2.16404 85.5639 1.62939 86.2231 1.62939C86.8845 1.62939 87.4192 2.16619 87.4192 2.8254Z" fill="#0E0D0A"/>
                                <path d="M80.14 1.25H79.4271V9.30434H80.14V1.25Z" fill="#0E0D0A"/>
                                <path d="M82.1562 6.66028C82.1562 7.98085 81.0869 9.05236 79.762 9.05236C78.4393 9.05236 77.37 7.98085 77.37 6.66028C77.37 5.33757 78.4414 4.26611 79.762 4.26611C81.0869 4.26611 82.1562 5.33972 82.1562 6.66028Z" fill="#0E0D0A"/>
                                <path d="M80.9602 2.8254C80.9602 3.48675 80.4255 4.02144 79.7642 4.02144C79.1028 4.02144 78.5681 3.48675 78.5681 2.8254C78.5681 2.16404 79.1028 1.62939 79.7642 1.62939C80.4255 1.62939 80.9602 2.16619 80.9602 2.8254Z" fill="#0E0D0A"/>
                                <path d="M73.681 1.25H72.9638V9.30434H73.681V1.25Z" fill="#0E0D0A"/>
                                <path d="M75.6952 6.66028C75.6952 7.98085 74.6237 9.05236 73.301 9.05236C71.9783 9.05236 70.9089 7.98085 70.9089 6.66028C70.9089 5.33757 71.9804 4.26611 73.301 4.26611C74.6237 4.26611 75.6952 5.33972 75.6952 6.66028Z" fill="#0E0D0A"/>
                                <path d="M74.4991 2.8254C74.4991 3.48675 73.9644 4.02144 73.3031 4.02144C72.6417 4.02144 72.1071 3.48675 72.1071 2.8254C72.1071 2.16404 72.6439 1.62939 73.3031 1.62939C73.9644 1.62939 74.4991 2.16619 74.4991 2.8254Z" fill="#0E0D0A"/>
                                <path d="M75.1648 0H63.9475C57.9695 0 53.1232 4.84636 53.1232 10.8243C53.1232 16.8023 57.9695 21.6508 63.9475 21.6508H65.9208V10.1737H73.3074V21.6508H75.1648C81.1427 21.6508 85.9912 16.8044 85.9912 10.8243C85.9912 4.84636 81.1427 0 75.1648 0Z" fill="#0E0D0A"/>
                            </svg>
                        </div>
                        <h3 class="ds2-city-name">Chennai</h3>
                    </a>
                </div>

                <!-- City 3: Bangalore (SVG 3) -->
                <div class="col-lg-4 col-md-4">
                    <a href="{{ route('digital_signage_company_bangalore') }}" class="ds2-city-card">
                        <div class="ds2-city-card-svg">
                            <svg width="180" height="165" viewBox="0 0 180 165" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M90 20 C85 20, 80 25, 75 35 L105 35 C100 25, 95 20, 90 20 Z" fill="#11100E"/>
                                <path d="M88 10 L92 10 L92 20 L88 20 Z" fill="#11100E"/>
                                <circle cx="90" cy="8" r="3" fill="#11100E"/>
                                <path d="M70 35 H110 V47 H70 Z" fill="#11100E"/>
                                <path d="M65 47 H115 V53 H65 Z" fill="#11100E"/>
                                <path d="M60 53 H120 V78 H60 Z" fill="#11100E"/>
                                <path d="M30 60 C27 60, 25 65, 23 72 L37 72 C35 65, 33 60, 30 60 Z" fill="#11100E"/>
                                <rect x="23" y="72" width="14" height="28" fill="#11100E"/>
                                <path d="M150 60 C147 60, 145 65, 143 72 L157 72 C155 65, 153 60, 150 60 Z" fill="#11100E"/>
                                <rect x="143" y="72" width="14" height="28" fill="#11100E"/>
                                <rect x="15" y="78" width="150" height="52" fill="#11100E"/>
                                <rect x="10" y="130" width="160" height="15" fill="#11100E"/>
                                <rect x="75" y="85" width="30" height="45" fill="white"/>
                                <rect x="35" y="88" width="12" height="30" fill="white"/>
                                <rect x="133" y="88" width="12" height="30" fill="white"/>
                            </svg>
                        </div>
                        <h3 class="ds2-city-name">Bangalore</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
       <!-- 7. Our Recent Signage and Branding Design Projects Section -->
    <section class="ds2-projects-section">
        <div class="container">
            <h2 class="ds2-main-title text-center mb-5">Our Recent Signage and Branding Design Projects</h2>
            
            <div class="row g-4">
                <!-- Card 1: Titan Showroom -->
                <div class="col-lg-4 col-md-6">
                    <div class="ds2-project-card">
                        <div class="ds2-project-card-content">
                            <h3 class="ds2-project-card-title">Titan Showroom</h3>
                            <a href="{{ route('contact_us') }}" class="ds2-project-card-link">Explore Projects <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="ds2-project-card-img-wrap">
                            <img src="{{ asset('frontend/Images/ds-14.webp') }}" alt="Titan Showroom Signage Project">
                        </div>
                    </div>
                </div>

                <!-- Card 2: Fortis hospital -->
                <div class="col-lg-4 col-md-6">
                    <div class="ds2-project-card">
                        <div class="ds2-project-card-content">
                            <h3 class="ds2-project-card-title">Fortis hospital</h3>
                            <a href="{{ route('contact_us') }}" class="ds2-project-card-link">Explore Projects <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="ds2-project-card-img-wrap">
                            <img src="{{ asset('frontend/Images/ds-15.webp') }}" alt="Fortis Hospital Signage Project">
                        </div>
                    </div>
                </div>

                <!-- Card 3: Café Mocha -->
                <div class="col-lg-4 col-md-6">
                    <div class="ds2-project-card">
                        <div class="ds2-project-card-content">
                            <h3 class="ds2-project-card-title">Café Mocha</h3>
                            <a href="{{ route('contact_us') }}" class="ds2-project-card-link">Explore Projects <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="ds2-project-card-img-wrap">
                            <img src="{{ asset('frontend/Images/ds-16.webp') }}" alt="Café Mocha Signage Project">
                        </div>
                    </div>
                </div>

                <!-- Card 4: Tanishq Showroom -->
                <div class="col-lg-4 col-md-6">
                    <div class="ds2-project-card">
                        <div class="ds2-project-card-content">
                            <h3 class="ds2-project-card-title">Tanishq Showroom</h3>
                            <a href="{{ route('contact_us') }}" class="ds2-project-card-link">Explore Projects <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="ds2-project-card-img-wrap">
                            <img src="{{ asset('frontend/Images/ds-17.webp') }}" alt="Tanishq Showroom Signage Project">
                        </div>
                    </div>
                </div>

                <!-- Card 5: Prestige Group -->
                <div class="col-lg-4 col-md-6">
                    <div class="ds2-project-card">
                        <div class="ds2-project-card-content">
                            <h3 class="ds2-project-card-title">Prestige Group</h3>
                            <a href="{{ route('contact_us') }}" class="ds2-project-card-link">Explore Projects <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="ds2-project-card-img-wrap">
                            <img src="{{ asset('frontend/Images/ds-18.webp') }}" alt="Prestige Group Signage Project">
                        </div>
                    </div>
                </div>

                <!-- Card 6: MedPlus Pharmacy -->
                <div class="col-lg-4 col-md-6">
                    <div class="ds2-project-card">
                        <div class="ds2-project-card-content">
                            <h3 class="ds2-project-card-title">MedPlus Pharmacy</h3>
                            <a href="{{ route('contact_us') }}" class="ds2-project-card-link">Explore Projects <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="ds2-project-card-img-wrap">
                            <img src="{{ asset('frontend/Images/ds-19.webp') }}" alt="MedPlus Pharmacy Signage Project">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Your Project Button -->
            <div class="text-center mt-5">
                <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                    Start Your Project <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <section class="why-bg-light-pink py-5 px-2" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Digital Signage</h2>
                <p class="card-text text-start text-md-center ">Explore the latest trends, tips, and expert insights in the digital
                    signage
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
            <h1 class="faq-title">FAQS</h1>

            <div class="faq-item">
                <button class="faq-question">
                    What Digital Signage Solutions Do You Offer for Businesses?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We offer comprehensive solutions including hardware (displays, screens),
                        software (content management), custom content creation, installation, technical support,
                        strategy consulting, and industry-specific digital communication solutions tailored to enhance
                        brand visibility and audience engagement across multiple platforms and environments.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    What is Electronic Signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Electronic signage refers to any display system using LED or LCD screens to show information, advertising, or dynamic content. It is often used interchangeably with digital signage. At Brand Signages, our electronic signage solutions include commercial displays, video walls, digital standees, and interactive kiosks- all built for 24/7 business use across retail, hospitals, corporate offices, and more.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Does Digital Signage Enhance Customer Engagement?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage boosts customer engagement by delivering dynamic, interactive visual content that
                        captures attention, personalizes messaging, provides real-time information, and creates
                        immersive brand experiences across multiple touchpoints, transforming traditional communication
                        into compelling, memorable interactions.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can Digital Signage be Customized for Specific Business Needs?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>A digital sign company offers extensive customization across multiple dimensions:</p>
                    <ul>
                        <P>1. Industry-Specific Solutions:</P>
                        <ul>
                            <ul>
                                <li>Retail: Product showcases, promotions, interactive catalogs</li>
                                <li>Healthcare: Patient information, wayfinding, queue management</li>
                                <li>Corporate: Internal communications, performance dashboards</li>
                                <li>Education: Campus announcements, event schedules</li>
                                <li>Hospitality: Menu boards, guest information, event details</li>
                            </ul>
                        </ul>
                        <p>2. Content Customization:</p>
                        <ul>
                            <ul>
                                <li>Brand-aligned design aesthetics</li>
                                <li>Dynamic content scheduling</li>
                                <li>Real-time updates</li>
                                <li>Multilingual support</li>
                                <li>Personalized messaging</li>
                                <li>Interactive elements</li>
                            </ul>
                        </ul>
                        <p>3. Technical Customization:</p>
                        <ul>
                            <ul>
                                <li>Screen size and configuration</li>
                                <li>Mounting options</li>
                                <li>Integration with existing systems</li>
                                <li>Cloud-based or local content management</li>
                                <li>Mobile device compatibility</li>
                                <li>Custom hardware configurations</li>
                            </ul>
                        </ul>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Types of Content Can be Displayed on Digital Signage Screens?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage display screens can display a wide variety of content, enhancing engagement and
                        communication. This includes text-based content, visual content like images and infographics,
                        and multimedia content—including videos, slideshows, and live feeds—provides dynamic
                        storytelling opportunities that engage viewers on multiple sensory levels.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Easy is It to Update and Manage Content on Digital Signage Systems?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Users can remotely update displays in real time, schedule content, and access templates for
                        consistency. Analytics tools also provide insights into performance, enabling businesses to
                        optimize messaging and enhance audience engagement efficiently.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    What Industries Can Benefit from Digital Signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage can be a game changer in branding for many industries. Here’s a breakdown:</p>
                    <ul>
                        <li>Retail stores use digital signage to showcase new arrivals and exclusive offers.</li>
                        <li>Restaurants use digital boards to showcase menus and special offers.</li>
                        <li>Hospitals and clinics use them to provide essential information to patients.</li>
                        <li>Hotels use it to highlight amenities, services, and guide guests.</li>
                        <li>Banks utilize digital signage to inform customers about their services.</li>
                    </ul>
                    <p>Digital signage systems offer potential advantages for nearly all businesses aiming to enhance
                        communication with both customers and employees.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Industries Can Benefit from Digital Signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>A digital signage system needs some key hardware components. These are:</p>
                    <ul>
                        <li>First, a screen like an LED or LCD monitor to show the content.</li>
                        <li>Second, a multimedia or computer player to store and play content.</li>
                        <li>Third, a content management system (CMS) to organize and update what appears on the screen.</li>
                        <li>Many advanced systems also need an Internet connection for remote updates.</li>
                    </ul>
                    <p>Assembly equipment or supports may be required to install the screens correctly. According to the
                        configuration, extra accessories can be integrated such as
                        touch screens and speakers so that the signage is more communicative and appealing to users.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is The Average Lifespan of Digital Signage Displays?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>The lifespan of a digital display is based on its usage and quality. Most digital screens last
                        between 50,000
                        and 100,000 hours and work for 5 to 10 years with sufficient attention. LED screens usually last
                        longer than
                        LCD screens. If you are used indoors with moderate brightness, screens last longer. Outdoor screens
                        bear climatic
                        conditions, so they may require extra protection. Periodic upkeep, such as cleaning and software
                        updates, assists
                        in extending the life of the screen and keeping it working effectively.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    Can Digital Signage Display Content in Multiple Languages?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, you can show content in several languages with digital signage. Digital signage systems present
                        textual content
                        alongside images and videos in various languages to achieve superior communication effectiveness.
                        Confirms that customers,
                        workers, and visitors comprehend essential information clearly, irrespective of the language they
                        speak, enhancing their
                        experience with the business or service. </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Can Digital Signage Help Improve In-store Sales?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage is super effective in grabbing customer attention immediately. With bright and
                        striking screens you can show discounts,
                        and special offers to attract foot traffic. Contents like product demonstrations or customer reviews
                        can generate trust. In restaurants,
                        digital menus make the order easier and highlight best-selling items. Stores can wear interactive
                        screens to highlight desired products.
                        Digital signage also permits companies to update promotions promptly without printing new posters.
                    </p>
                </div>
            </div>

        </div>
    </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof Swiper !== 'undefined') {
        // 1. Initialize Hero Showcase Swiper
        var heroSwiper = new Swiper('#ds2HeroCarousel', {
            loop: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.ds2-slider-dots',
                clickable: true,
                bulletClass: 'ds2-dot-btn',
                bulletActiveClass: 'active',
                renderBullet: function (index, className) {
                    return '<button type="button" class="' + className + '" aria-label="Slide ' + (index + 1) + '"></button>';
                }
            },
            navigation: {
                nextEl: '.ds2-hero-next',
                prevEl: '.ds2-hero-prev',
            }
        });

        // 2. Initialize Smart Software Card Swiper
        var cardSwiper = new Swiper('#ds2CardSlider', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.ds2-card-slider-indicators',
                clickable: true,
                bulletClass: 'ds2-card-indicator-btn',
                bulletActiveClass: 'active',
                renderBullet: function (index, className) {
                    return '<button type="button" class="' + className + '" aria-label="Go to slide ' + (index + 1) + '"></button>';
                }
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            }
        });

        // 3. Initialize Testimonial Swiper
        var testimonialSwiper = new Swiper('#ds2TestimonialCarousel', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.ds2-testimonial-next',
                prevEl: '.ds2-testimonial-prev',
            },
            breakpoints: {
                992: {
                    slidesPerView: 2,
                }
            }
        });
    }

    // 4. Industry Tab Switcher Logic
    var industryTabs = document.querySelectorAll('.ds2-industry-tab-btn');
    industryTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var targetTab = this.getAttribute('data-tab');
            industryTabs.forEach(function (t) { t.classList.remove('active'); });
            this.classList.add('active');

            var panes = document.querySelectorAll('.ds2-industry-pane');
            panes.forEach(function (p) { p.classList.remove('active'); });
            var targetPane = document.getElementById(targetTab);
            if (targetPane) {
                targetPane.classList.add('active');
            }
        });
    });
});
</script>
@endsection
