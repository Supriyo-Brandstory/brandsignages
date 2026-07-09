@extends('frontend.layout.appLayout')

@push('styles')
<link rel="stylesheet" href="{{ asset('frontend/customstyle/digital-signages-2.css') }}">
@endpush

@section('content')
<!-- Custom Stylesheet link fallback if push is not handled by layout -->
<link rel="stylesheet" href="{{ asset('frontend/customstyle/digital-signages-2.css') }}">

<div class="ds2-page-wrapper">
    <!-- 1. Hero Showcase 2-Slider Carousel Section -->
    <section class="ds2-hero-wrapper">
        <div id="ds2HeroCarousel" class="swiper ds2-hero-swiper">
            
            <!-- Explicit Slider Indicators (Right Side Dots) -->
            <div class="ds2-slider-dots"></div>

            <div class="swiper-wrapper">
                
                <!-- SLIDE 1 -->
                <div class="swiper-slide">
                    <div class="ds2-slide-bg d-none d-md-block" style="background-image: url('{{ asset('frontend/Images/hs-01.webp.webp') }}');"></div>
                    <div class="ds2-slide-bg d-block d-md-none" style="background-image: url('{{ asset('frontend/Images/hs-01.webp.webp') }}');"></div>
                    <div class="ds2-slide-overlay"></div>
                    <div class="container ds2-hero-content-container">
                        <div class="ds2-hero-textbox">
                            <h1 class="ds2-hero-title">Medical Signage Solutions for Hospitals & Clinics</h1>
                            <p class="ds2-hero-description">
                                Brand Signages is a premier digital signage manufacturer with 12+ years of experience. We create digital displays, interactive kiosk for all industries. With in-house manufacturing setup in Bangalore, we deliver PAN India services.
                            </p>
                            <div>
                                <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                                    Book A Demo Call <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="swiper-slide">
                    <div class="ds2-slide-bg d-none d-md-block" style="background-image: url('{{ asset('frontend/Images/hs-3.webp') }}');"></div>
                    <div class="ds2-slide-bg d-block d-md-none" style="background-image: url('{{ asset('frontend/Images/hs-3.webp') }}');"></div>
                    <div class="ds2-slide-overlay"></div>
                    <div class="container ds2-hero-content-container">
                        <div class="ds2-hero-textbox">
                            <h1 class="ds2-hero-title">NABH & ADA Compliant Wayfinding Systems</h1>
                            <p class="ds2-hero-description">
                                We design patient-friendly directional signage systems that comply with all health audit standards. Seamlessly guide visitors from parking zones directly to specific medical wards.
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
                        <a href="{{ route('directional_signages') }}" class="ds2-pill-item">Directional Wayfinding</a>
                        <a href="{{ route('safety_signages') }}" class="ds2-pill-item">Safety Signages</a>
                        <a href="{{ route('digital_signages') }}" class="ds2-pill-item">Healthcare LED Displays</a>
                        <a href="{{ route('door_signages') }}" class="ds2-pill-item">Room & Ward ID Signs</a>
                        <a href="{{ route('fire_safety_signages') }}" class="ds2-pill-item">Fire & Safety Exit signs</a>
                        <a href="{{ route('nameplate_signages') }}" class="ds2-pill-item">Doctor Desk Plates</a>
                        <a href="{{ route('touch_screen_kiosk') }}" class="ds2-pill-item">Interactive Information Kiosks</a>
                        <a href="{{ route('display_video_wall') }}" class="ds2-pill-item">OPD Directory Video Walls</a>
                        <a href="{{ route('restroom_signages') }}" class="ds2-pill-item">Braille & Restroom Signs</a>

                        <!-- SET 2 -->
                        <a href="{{ route('directional_signages') }}" class="ds2-pill-item">Directional Wayfinding</a>
                        <a href="{{ route('safety_signages') }}" class="ds2-pill-item">Safety Signages</a>
                        <a href="{{ route('digital_signages') }}" class="ds2-pill-item">Healthcare LED Displays</a>
                        <a href="{{ route('door_signages') }}" class="ds2-pill-item">Room & Ward ID Signs</a>
                        <a href="{{ route('fire_safety_signages') }}" class="ds2-pill-item">Fire & Safety Exit signs</a>
                        <a href="{{ route('nameplate_signages') }}" class="ds2-pill-item">Doctor Desk Plates</a>
                        <a href="{{ route('touch_screen_kiosk') }}" class="ds2-pill-item">Interactive Information Kiosks</a>
                        <a href="{{ route('display_video_wall') }}" class="ds2-pill-item">OPD Directory Video Walls</a>
                        <a href="{{ route('restroom_signages') }}" class="ds2-pill-item">Braille & Restroom Signs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Explore Modern Hospital Signages (Swiper Card Slider) -->
    <section class="ds2-software-grid-section">
        <div class="container">
            <h2 class="ds2-main-title">Modern Hospital Signage for Better Patient Journeys</h2>

            <div id="ds2CardSlider" class="swiper ds2-card-swiper ds2-card-slider-wrapper">
                <div class="swiper-wrapper">
                    
                    <!-- Card 1: Directional Wayfinding -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Directional & Wayfinding</h3>
                                <p class="ds2-feature-card-text">
                                    Highly visible corridor signs, lobby directory boards, and color-coded pathfinders designed to reduce patient navigation stress and anxiety during critical hours.
                                </p>
                                <a href="{{ route('directional_signages') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-crsl-1.webp') }}" alt="Directional Wayfinding">
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Interactive Kiosks -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                             <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Touchscreen Information Kiosks</h3>
                                <p class="ds2-feature-card-text">
                                    Engage visitors with self-service registration and digital mapping. Interactive touchscreen kiosks run smart CMS to provide directions and queue status in real time.
                                </p>
                                <a href="{{ route('touch_screen_kiosk') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-5.webp') }}" alt="Interactive Kiosks">
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: LED Video Walls -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">High-Definition Video Walls</h3>
                                <p class="ds2-feature-card-text">
                                    Dynamic LED displays for waiting zones. Broadcast medical updates, token queues, doctor directories, and health tips simultaneously on ultra-bright panels.
                                </p>
                                <a href="{{ route('display_video_wall') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-6.webp') }}" alt="LED Video Walls">
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Dental & Clinic Signboards -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Clinic & Department Signs</h3>
                                <p class="ds2-feature-card-text">
                                    Prominent external clinic facades and department header sign boards. Built with weatherproofing, premium acrylic, or glow-lit letters to invite confidence.
                                </p>
                                <a href="{{ route('doctor_name_board_design') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-4.webp') }}" alt="Dental & Clinic Signboards">
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: Safety & Compliance -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">NABH Safety Signages</h3>
                                <p class="ds2-feature-card-text">
                                    Clinical safety alerts, fire evacuation pathways, emergency exits, and chemical warnings engineered in strict compliance with safety regulations.
                                </p>
                                <a href="{{ route('safety_signages') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-crsl-3.webp') }}" alt="Safety & Compliance">
                            </div>
                        </div>
                    </div>

                    <!-- Card 6: Room & Restroom Braille -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-feature-card">
                            <div class="ds2-card-content">
                                <h3 class="ds2-feature-card-title">Braille & ADA Signs</h3>
                                <p class="ds2-feature-card-text">
                                    Tactile room numbering and Braille restroom signs ensuring complete accessibility for visually impaired patients and visitors across multi-floor layouts.
                                </p>
                                <a href="{{ route('restroom_signages') }}" class="ds2-feature-card-link">Know More &rarr;</a>
                            </div>
                            <div class="ds2-feature-card-img-wrap">
                                <img src="{{ asset('frontend/Images/hs-crsl-4.webp') }}" alt="Braille & ADA Signs">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Slider Pagination Indicators -->
                <div class="ds2-card-slider-indicators"></div>
            </div>

        </div>
    </section>

    <!-- 3. The Home of Premium Medical Signages (2-Column Info & 2x2 Grid) -->
    <section class="ds2-premium-home-section">
        <div class="container">
            <!-- Top Row -->
            <div class="row align-items-center mb-5 pb-lg-3">
                <div class="col-lg-6">
                    <h2 class="ds2-premium-title">Clinical-Grade Signage Engineered for Healthcare Excellence</h2>
                    <p class="ds2-premium-desc">
                        Brand Signages provides robust, architectural signage systems designed specifically for high-traffic clinical environments. With 12+ years of industry experience, we manufacture medical-grade boards that withstand chemical disinfectants, improve wait-time experience, and pass NABH and JCI accreditation audits easily.
                    </p>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Get Custom Quote <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ds2-premium-img-wrap">
                        <img src="{{ asset('frontend/Images/hs-1.webp') }}" alt="Premium Medical Signage">
                    </div>
                </div>
            </div>

            <!-- Bottom 2x2 Grid -->
            <div class="row g-4 mt-2">
                <!-- Card 1: Sterile & Antimicrobial Substrates -->
                <div class="col-md-6">
                    <div class="ds2-why-card">
                        <h3 class="ds2-why-card-title">Sterile & Clean Materials</h3>
                        <p class="ds2-why-card-text">
                            Fabricated on non-porous, antimicrobial surfaces that resist aggressive daily chemical sanitizing routines without fading, staining, or degradation.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Professional Wayfinding Audit -->
                <div class="col-md-6">
                    <div class="ds2-why-card">
                        <h3 class="ds2-why-card-title">Comprehensive Wayfinding Audits</h3>
                        <p class="ds2-why-card-text">
                            We don't just supply signs. We carry out site audits to map out patient journeys from entrances directly to clinical endpoints, minimizing corridors confusion.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Complete ADA Compliance -->
                <div class="col-md-6">
                    <div class="ds2-why-card">
                        <h3 class="ds2-why-card-title">Auditable ADA & NABH Conformity</h3>
                        <p class="ds2-why-card-text">
                            Strict adherence to standards regarding tactile text, Braille patterns, background contrast, and fire-resistant materials for hospital verification.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Disruption-Free Deployment -->
                <div class="col-md-6">
                    <div class="ds2-why-card">
                        <h3 class="ds2-why-card-title">Off-Peak Silent Installation</h3>
                        <p class="ds2-why-card-text">
                            Our team executes phased installations during off-peak hours (typically night shifts) to guarantee zero disruption to medical procedures or emergencies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Hospital Signage by Use Type (Tabbed interactive section) -->
    <section class="ds2-industry-section">
        <div class="container">
            <h2 class="ds2-industry-title">Hospital & Medical Signages by Use Type</h2>

            <!-- Horizontal Tabs -->
            <div class="ds2-industry-tabs-nav">
                <button type="button" class="ds2-industry-tab-btn active" data-tab="tab-wayfinding">Directional & Wayfinding</button>
                <button type="button" class="ds2-industry-tab-btn" data-tab="tab-informational">Informational & Educational</button>
                <button type="button" class="ds2-industry-tab-btn" data-tab="tab-safety">Safety & Compliance</button>
                <button type="button" class="ds2-industry-tab-btn" data-tab="tab-digital">Digital Screens</button>
                <button type="button" class="ds2-industry-tab-btn" data-tab="tab-branding">Hospital Branding</button>
            </div>

            <!-- Tab 1: Directional & Wayfinding (Active) -->
            <div id="tab-wayfinding" class="ds2-industry-pane row align-items-center active">
                <div class="col-lg-6 mb-4 mb-lg-0 p-0">
                    <div class="ds2-industry-pane-img-wrap">
                        <img src="{{ asset('frontend/Images/hs-crsl-1.webp') }}" alt="Directional & Wayfinding Hospital Signage">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h3 class="ds2-industry-pane-title">Directional & Wayfinding Signage</h3>
                    <p class="ds2-industry-pane-desc">
                        Directional and wayfinding signages are essential in hospital buildings to guide patients and visitors through complex environments efficiently. Clear signage systems reduce confusion, stress, and anxiety, ensuring individuals can reach their appointments, wards, and services smoothly.
                    </p>
                    <ul class="ds2-industry-list">
                        <li>Overhead Hanging Directionals</li>
                        <li>Lobby OPD Directory Boards</li>
                        <li>Color-coded Floor Pathfinders</li>
                        <li>Elevator Corridor Indexes</li>
                    </ul>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Enquire Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab 2: Informational & Educational -->
            <div id="tab-informational" class="ds2-industry-pane row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 p-0">
                    <div class="ds2-industry-pane-img-wrap">
                        <img src="{{ asset('frontend/Images/hs-crsl-2.webp') }}" alt="Informational & Educational Hospital Signage">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h3 class="ds2-industry-pane-title">Informational & Educational Signage</h3>
                    <p class="ds2-industry-pane-desc">
                        Informational signs play a vital role in keeping patients aware of clinic procedures, schedules, and general health awareness tips. These boards help build confidence and educate patients while they wait for their consultations.
                    </p>
                    <ul class="ds2-industry-list">
                        <li>Doctor Schedule Boards</li>
                        <li>Department Registration Desks</li>
                        <li>Preventive Health Info Boards</li>
                        <li>Billing & Policy Displays</li>
                    </ul>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Enquire Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab 3: Safety & Compliance -->
            <div id="tab-safety" class="ds2-industry-pane row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 p-0">
                    <div class="ds2-industry-pane-img-wrap">
                        <img src="{{ asset('frontend/Images/hs-crsl-3.webp') }}" alt="Safety & Compliance Hospital Signage">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h3 class="ds2-industry-pane-title">Safety & Compliance Signage</h3>
                    <p class="ds2-industry-pane-desc">
                        Critical for maintaining health and security guidelines inside wards, laboratories, and operational units. Clear evacuation maps, fire safety pointers, and chemical hazard signages verify compliance with regulatory laws.
                    </p>
                    <ul class="ds2-industry-list">
                        <li>Fire Exit Evacuation Routes</li>
                        <li>No Smoking & Radiation Signs</li>
                        <li>Biohazard Laboratory Warnings</li>
                        <li>ICU & OT Entry Regulations</li>
                    </ul>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Enquire Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab 4: Digital Screens -->
            <div id="tab-digital" class="ds2-industry-pane row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 p-0">
                    <div class="ds2-industry-pane-img-wrap">
                        <img src="{{ asset('frontend/Images/hs-crsl-5.webp') }}" alt="Digital Signage in Hospital">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h3 class="ds2-industry-pane-title">Interactive Digital Displays</h3>
                    <p class="ds2-industry-pane-desc">
                        Modernize your clinic with interactive and cloud-controlled digital screens. Display real-time appointment tokens, queue status updates, live news, and entertainment to optimize patient waiting times.
                    </p>
                    <ul class="ds2-industry-list">
                        <li>Queue Management Displays</li>
                        <li>Dynamic Doctor Directory Screens</li>
                        <li>Interactive Lobby Wayfinders</li>
                        <li>Patient Information Televisions</li>
                    </ul>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Enquire Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab 5: Hospital Branding -->
            <div id="tab-branding" class="ds2-industry-pane row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 p-0">
                    <div class="ds2-industry-pane-img-wrap">
                        <img src="{{ asset('frontend/Images/hs-crsl-6.webp') }}" alt="Hospital Branding Signage">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h3 class="ds2-industry-pane-title">Exterior Hospital Branding</h3>
                    <p class="ds2-industry-pane-desc">
                        Build instant brand visibility and reputation in your locality. Clean, illuminated external signboards, building roof letters, and front entrance sign board designs establish a premium presence.
                    </p>
                    <ul class="ds2-industry-list">
                        <li>Illuminated 3D LED Acrylic Letters</li>
                        <li>Building Rooftop Sky Signage</li>
                        <li>Front Gate Entrance Pylons</li>
                        <li>Main Reception Logo Panels</li>
                    </ul>
                    <div>
                        <a href="{{ route('contact_us') }}" class="ds2-btn-primary">
                            Enquire Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. Interior & Exterior Signages Highlight Section -->
    <section class="ds2-empower-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/Images/hs-8.webp') }}" alt="Interior & Exterior Signage" class="img-fluid rounded-4 shadow" style="width: 100%; height: auto; max-height: 480px; object-fit: cover;">
                </div>
                <div class="col-lg-6">
                    <h2 class="ds2-main-title text-start mb-4">Interior & Exterior Healthcare Signages</h2>
                    <p class="mb-3">
                        Interior sign boards allow patients to find consulting chambers, radiology labs, and inpatient rooms with minimal anxiety. These designs integrate clearly with your interior decor while utilizing clean, highly visible typography, tactile letters, and Braille indicators to suit patients of all levels of ability.
                    </p>
                    <p class="mb-4">
                        Exterior signboards establish trust before patients even cross the threshold. High-brightness LED layouts, emergency unit signs, and parking entrance directories are manufactured using weatherproof substrates to withstand intense sunlight, heavy rains, and dust.
                    </p>
                    <a href="{{ route('contact_us') }}" class="ds2-btn-primary">Book A Site Survey</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Client Logos Section -->
    <section class="new_client_section">
        <h2 class="new_client_section-title">Trusted by Leading Healthcare Institutions</h2>
        <div class="row">
            <div class="col-md-12 new_client_section-scrolling col-12">
                <div class="new_client_section-wrapper">
                    <!-- Row 1 -->
                    <div class="new_client_section-row new_client_section-row-1">
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Apollo Hospitals"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Sobha"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Societe Generale"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Innoviti"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client1.webp') }}" alt="White Gold"></div>
                        <!-- Duplicates -->
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Apollo Hospitals"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Sobha"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Societe Generale"></div>
                        <div class="new_client_section-client"><img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Innoviti"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. What Our Clients Say (Testimonials) Section -->
    <section class="ds2-testimonial-section">
        <div class="ds2-testimonial-bg-text">Feedback</div>
        <div class="container">
            <div class="ds2-testimonial-header">
                <h2 class="ds2-testimonial-title">What Clinical Operations Say</h2>
                <div class="ds2-testimonial-controls">
                    <button class="ds2-testimonial-control-btn ds2-testimonial-prev" type="button" aria-label="Previous Testimonials">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button class="ds2-testimonial-control-btn ds2-testimonial-next" type="button" aria-label="Next Testimonials">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Testimonials Swiper -->
            <div id="ds2TestimonialCarousel" class="swiper ds2-testimonial-swiper">
                <div class="swiper-wrapper">
                    
                    <!-- Slide 1 -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-testimonial-card">
                            <div>
                                <div class="ds2-testimonial-quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p class="ds2-testimonial-text">
                                    The new color-coded wayfinding system has significantly reduced patient confusion in our outpatient wings. Visitors and nurses have both commented on how intuitive the department routes have become.
                                </p>
                            </div>
                            <div>
                                <h3 class="ds2-testimonial-author-name">Dr. Rajesh Kumar</h3>
                                <p class="ds2-testimonial-author-title">Director of Operations, Apollo Hospitals</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-testimonial-card">
                            <div>
                                <div class="ds2-testimonial-quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p class="ds2-testimonial-text">
                                    From standardizing room directory plates to executing midnight silent installations, their team demonstrated clinical-grade professionalism. The signage is durable and easy to sanitize daily.
                                </p>
                            </div>
                            <div>
                                <h3 class="ds2-testimonial-author-name">Seema Nayak</h3>
                                <p class="ds2-testimonial-author-title">Operations Manager, Fortis Hospital</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide h-auto">
                        <div class="ds2-testimonial-card">
                            <div>
                                <div class="ds2-testimonial-quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p class="ds2-testimonial-text">
                                    Their Braille and ADA-compliant safety boards passed our hospital accreditation audit flawlessly. The modular design of room IDs makes updating clinician listings extremely simple.
                                </p>
                            </div>
                            <div>
                                <h3 class="ds2-testimonial-author-name">Vinay Gupta</h3>
                                <p class="ds2-testimonial-author-title">Facility Head, Max Healthcare</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 8. Hospital Signages in Other Cities Section -->
    <section class="ds2-cities-section">
        <div class="container">
            <h2 class="ds2-cities-title">Hospital Signage Services Across India</h2>
            <div class="row g-4 justify-content-center">
                <!-- Bangalore -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('hospital_signages_in_bangalore') }}" class="ds2-city-card">
                        <h3 class="ds2-city-name">Bangalore</h3>
                    </a>
                </div>
                <!-- Chennai -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('hospital_medical_signages_chennai') }}" class="ds2-city-card">
                        <h3 class="ds2-city-name">Chennai</h3>
                    </a>
                </div>
                <!-- Mumbai -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('hospital_and_medical_signages_in_mumbai') }}" class="ds2-city-card">
                        <h3 class="ds2-city-name">Mumbai</h3>
                    </a>
                </div>
                <!-- Hyderabad -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="{{ route('hospital_and_medical_signages_in_hyderabad') }}" class="ds2-city-card">
                        <h3 class="ds2-city-name">Hyderabad</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FAQs Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="faq-title text-center mb-5">Hospital Signage FAQs</h2>

            <div class="faq-item">
                <button class="faq-question">
                    What are clinical-grade Hospital Signages?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Hospital signages are highly specialized clinical signs designed to facilitate safe, clean, and quick wayfinding. They include tactile Braille panels, overhead directions, lobby directory boards, and illuminated emergency routes constructed from non-porous, antimicrobial elements.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are the signages compliant with NABH and ADA guidelines?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, all our healthcare signage products are produced to satisfy NABH, JCI, and ADA standards. They utilize correct tactile sizing, raised letters, high-contrast ratios, and fire-resistant materials to ensure standard-compliant audits.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can signs be cleaned with sanitizing chemicals daily?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Absolutely. We use clinical-grade substrates, UV-stable prints, and brushed metals that are specifically engineered to withstand aggressive sanitizing products (like isopropyl alcohol and bleach solutions) without rusting or fading.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you install sign boards without disrupting patients?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We implement silent night-time installation protocols. Our installers work floor-by-floor during off-peak hours using noiseless vacuum-assisted mounts to avoid clinical interruption and preserve air hygiene.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can hospital room ID signs be easily updated?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes. We manufacture smart modular room ID frames with interchangeable slider inserts. This lets administrative personnel update doctor names or ward details locally within seconds.</p>
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
                delay: 4500,
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

        // 2. Initialize feature card swiper
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

    // 4. Tab Switcher Logic
    var tabs = document.querySelectorAll('.ds2-industry-tab-btn');
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var targetTab = this.getAttribute('data-tab');
            tabs.forEach(function (t) { t.classList.remove('active'); });
            this.classList.add('active');

            var panes = document.querySelectorAll('.ds2-industry-pane');
            panes.forEach(function (p) { p.classList.remove('active'); });
            var targetPane = document.getElementById(targetTab);
            if (targetPane) {
                targetPane.classList.add('active');
            }
        });
    });

    // 5. FAQ Accordion Logic
    var faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(function(question) {
        question.addEventListener('click', function() {
            var item = this.parentElement;
            var isActive = item.classList.contains('active');
            
            // Close all
            document.querySelectorAll('.faq-item').forEach(function(i) {
                i.classList.remove('active');
            });
            
            // Toggle active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>
@endsection
