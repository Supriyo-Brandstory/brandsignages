@extends('frontend.layout.appLayout')
@section('content')
    <style>
        .hotel-hero {
            position: relative;
            background: url('{{ asset('frontend/Images/hotel-restaurant-signs.webp') }}') no-repeat center center/cover;
            min-height: 600px;
            display: flex;
            align-items: center;
            color: white;
        }

        .hotel-hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.4));
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: left;

            h1 {
                font-family: 'Lora', serif;
                font-size: 40px;
            }

            p {
                margin: 20px 0;
            }
        }

        .feature-box {
            background: #fff;
            padding: 2.5rem;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border-radius: 12px;
            border-top: 5px solid #E43D12;
            transition: all 0.4s ease;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.1);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background: #fff0ed;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #E43D12;
            margin-bottom: 20px;
        }

        .stat-section {
            background: #000;
            padding: 5rem 0;
            color: white;
        }

        .stat-item h3 {
            font-size: 3rem;
            color: #E43D12;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .process-step {
            border-left: 3px dashed #E43D12;
            padding-left: 30px;
            margin-bottom: 30px;
            position: relative;
        }

        .process-step::before {
            content: "";
            width: 14px;
            height: 14px;
            background: #E43D12;
            border: 3px solid #fff;
            border-radius: 50%;
            position: absolute;
            left: -10px;
            top: 5px;
            box-shadow: 0 0 0 4px rgba(228, 61, 18, 0.2);
        }

        .gallery-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .sticky-column {
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .fs-20 {
            font-size: 20px;
        }

        .btn-brand-red {
            background-color: #E43D12;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-brand-red:hover {
            background-color: #000;
            color: white;
        }

        .text-brand-red {
            color: #E43D12;
        }

        .bg-brand-red {
            background-color: #E43D12;
        }

        .testimonial-nav-btn {
            width: 54px !important;
            height: 54px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 50% !important;
            padding: 0 !important;
            transition: all 0.3s ease !important;
            border: none !important;
        }

        .testimonial-nav-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2) !important;
        }

        /* Mobile View Fixes */
        @media (max-width: 768px) {
            .hotel-hero {
                min-height: 450px;
                text-align: center;
            }

            .hero-content {
                text-align: center;
            }

            .hero-content h1 {
                font-size: 32px !important;
            }

            .hero-content p {
                font-size: 16px !important;
            }

            .hero-content .d-flex {
                flex-direction: column;
                gap: 10px !important;
                align-items: center;
            }

            .hero-content .btn {
                padding: 12px 20px !important;
                width: 100%;
            }

            .stat-section {
                padding: 3rem 0;
            }

            .stat-item h3 {
                font-size: 2rem;
            }

            .sticky-column {
                position: relative;
                top: 0;
                margin-top: 20px;
            }

            .feature-box {
                padding: 1.5rem;
            }

            .display-5 {
                font-size: 28px;
            }
        }
    </style>

    <section class="hotel-hero">
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-7">
                    <span class="badge mb-3 px-3 py-2 text-uppercase fw-bold bg-brand-red">Hospitality Experts</span>
                    <h1 class="">Crafting Five-Star <br>First Impressions</h1>
                    <p class="fs-20">
                        Elevate your guest experience with elegant, bespoke signage systems.
                        Designed to blend seamlessly with your architecture and define your luxury brand.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact_us') }}"
                            class="btn btn-lg btn-brand-red fw-bold px-5 py-3 rounded-pill">Define Your Brand</a>
                        <a href="#solutions" class="btn btn-lg btn-outline-light fw-bold px-5 py-3 rounded-pill">View
                            Solutions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white" id="solutions">
        <div class="container py-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <img src="{{ asset('frontend/Images/reception-indoor-sign.webp') }}" alt="Hotel Reception"
                        class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6 ps-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-4 text-dark">The Art of Guest Navigation</h2>
                    <p class="text-muted mb-4 fs-5">Intuitive wayfinding is the silent concierge of your property. We
                        specialize in interior and exterior hotel signage that enhances the guest journey from arrival to
                        suites.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">Architecturally Matched Materials (Brass, Marble, Glass)</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">Bespoke Room Identifiers & Floor Directories</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">ADA-Compliant Tactile & Braille Integration</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="stat-section">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <h3>500+</h3>
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">Hotels Branded</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <h3>50k+</h3>
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">Signs Delivered</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <h3>100%</h3>
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">Luxury Standards</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <h3>24/7</h3>
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">Support Provided</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Premium Hospitality Solutions</h2>
                <div class="mx-auto" style="width: 80px; height: 4px; background: #E43D12;"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="icon-box"><i class="fas fa-star fa-2x"></i></div>
                        <h4 class="fw-bold">Lobby Sophistication</h4>
                        <p class="text-muted">Polished metal logos and elegant directories that greet guests with refined
                            luxury from the moment they enter.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box" style="border-top-color: #000;">
                        <div class="icon-box" style="background: #000; color: #fff;"><i class="fas fa-bed fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">Suite Identifiers</h4>
                        <p class="text-muted">Custom-designed room numbers and status sliders that match your interior
                            designer's vision and palette.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="icon-box"><i class="fas fa-utensils fa-2x"></i></div>
                        <h4 class="fw-bold">Amenity Wayfinding</h4>
                        <p class="text-muted">Clear, stylish signage for spas, gyms, restaurants, and lounges that keeps the
                            guest experience seamless.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="display-5 fw-bold mb-4">The Implementation Masterplan</h2>
                    <div class="process-step">
                        <h5>Aesthetic Audit</h5>
                        <p class="text-muted">Analyzing your property's theme and interior designer's direction for creative
                            alignment.</p>
                    </div>
                    <div class="process-step">
                        <h5>Creative Prototyping</h5>
                        <p class="text-muted">Sample production using premium finishes (Brass, Titanium, Etched Glass) for
                            your approval.</p>
                    </div>
                    <div class="process-step">
                        <h5>Artisanal Fabrication</h5>
                        <p class="text-muted">Hand-finished manufacturing combined with micro-precision laser cutting
                            technology.</p>
                    </div>
                    <div class="process-step">
                        <h5>Discreet Installation</h5>
                        <p class="text-muted">Seamless execution by professional teams to ensure zero disruption to guest
                            stays.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sticky-column">
                        <div class="row g-3">
                            <div class="col-12">
                                <img src="{{ asset('frontend/Images/hotel-restaurant-signs.webp') }}" class="gallery-img"
                                    alt="Hotel Exterior" style="height: auto; max-height: 80vh;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hotel Experience Section -->
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-dark">Guest-Centric <span class="text-brand-red">Excellence</span></h2>
                <p class="text-black fw-bold">Defined by elegance and functional clarity.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-magic fa-3x"></i></div>
                        <h4 class="fw-bold text-black">Aesthetic Harmony</h4>
                        <p class="text-black">Signage that feels like a natural extension of your property's interior
                            design and architectural mood.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-universal-access fa-3x"></i></div>
                        <h4 class="fw-bold text-black">Universal Clarity</h4>
                        <p class="text-black">Intuitive icons and multilingual support for international guests from across
                            the globe.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-hand-sparkles fa-3x"></i></div>
                        <h4 class="fw-bold text-black">Premium Durability</h4>
                        <p class="text-black">Finishes that resist fingerprints and cleaning chemicals, maintaining a
                            brand-new look for years.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Gallery Section (Enhanced Hotel Excellence) -->
    <section class="py-5 bg-light" id="projects">
        <style>
            .project-card-hotel {
                position: relative;
                overflow: hidden;
                border-radius: 20px;
                height: 100%;
                cursor: pointer;
            }

            .project-card-hotel img {
                transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }

            .project-card-hotel:hover img {
                transform: scale(1.1);
            }

            .project-overlay-hotel {
                position: absolute;
                inset: 0;
                background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 60%);
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                padding: 2rem;
                opacity: 0.9;
                transition: opacity 0.3s;
            }

            .plus-icon-hotel {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%) scale(0.5);
                width: 60px;
                height: 60px;
                background: rgba(228, 61, 18, 0.9);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                opacity: 0;
                transition: 0.4s;
            }

            .project-card-hotel:hover .plus-icon-hotel {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        </style>
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold text-dark">Hospitality <span class="text-brand-red">Excellence</span></h2>
                <p class="text-muted">Defining luxury for India's leading hotel chains and resorts.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="project-card-hotel shadow-lg" style="height: 500px;">
                        <img src="{{ asset('frontend/Images/hotel-restaurant-signs.webp') }}"
                            class="w-100 h-100 object-fit-cover" alt="Luxury Hotel">
                        <div class="plus-icon-hotel"><i class="fas fa-plus fa-lg"></i></div>
                        <div class="project-overlay-hotel">
                            <span class="badge bg-brand-red mb-2 align-self-start">Resort Rebranding</span>
                            <h3 class="fw-bold text-white mb-1">Grand Heritage Resort</h3>
                            <p class="text-white-50 small mb-0">Total wayfinding refresh for 250+ luxury villas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-4 h-100">
                        <div class="col-12" style="height: 240px;">
                            <div class="project-card-hotel shadow">
                                <img src="{{ asset('frontend/Images/reception-indoor-sign.webp') }}"
                                    class="w-100 h-100 object-fit-cover" alt="Inside Lobby">
                                <div class="project-overlay-hotel">
                                    <h5 class="fw-bold text-white mb-0">ITC Grand Central</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="height: 240px;">
                            <div class="project-card-hotel shadow">
                                <img src="{{ asset('frontend/Images/restaurant-signage2.webp') }}"
                                    class="w-100 h-100 object-fit-cover" alt="Restaurant">
                                <div class="project-overlay-hotel">
                                    <h5 class="fw-bold text-white mb-0">Taj West End</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: Hygiene & Finish Standards -->
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold text-black">Uncompromising <span class="text-brand-red">Finish
                            Standards</span></h2>
                    <p class="text-black fs-5 mb-4 fw-medium">In luxury hospitality, the finish is everything. Our hotel
                        signage is built to withstand high use while maintaining a prestige look.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-brand-red bg-light">
                                <h6 class="fw-bold text-black mb-1">Fingerprint Resistant</h6>
                                <p class="small text-black mb-0">Specialized coatings that keep touch-points looking clean
                                    and pristine.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-dark bg-light">
                                <h6 class="fw-bold text-black mb-1">Precision Hand-Polish</h6>
                                <p class="small text-black mb-0">Artisanal finishing on brass, copper, and titanium
                                    elements.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-dark bg-light">
                                <h6 class="fw-bold text-black mb-1">Easy-Sanitize Surfaces</h6>
                                <p class="small text-black mb-0">Non-porous materials that withstand daily housekeeping
                                    protocols.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-brand-red bg-light">
                                <h6 class="fw-bold text-black mb-1">Seamless Joinery</h6>
                                <p class="small text-black mb-0">Flush mounting and hidden fixings for a clean, minimalist
                                    aesthetic.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="{{ asset('frontend/Images/industry-hospitality.webp') }}"
                            class="img-fluid rounded-4 shadow-lg" alt="Hotel Detail">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REDESIGNED SECTION: Compliance Corner (White Theme) -->
    <section class="py-5 bg-white" style="position: relative; overflow: hidden; border-top: 1px solid #eee;">
        <div class="container h-100 py-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="p-lg-5 p-4 rounded-5"
                        style="background: #f8f9fa; border: 1px solid rgba(228, 61, 18, 0.2);">
                        <span class="badge bg-brand-red mb-4 px-3 py-2 text-uppercase tracking-wider">Certified
                            Solutions</span>
                        <h2 class="display-4 fw-bold text-black mb-4 line-height-1">Built for <br><span
                                class="text-brand-red">Strict Safety</span></h2>
                        <p class="text-black fs-5 mb-5 fw-medium">We ensure your property meets all global hospitality
                            safety standards, combining luxury with regulatory compliance.
                        </p>

                        <div class="d-flex align-items-center gap-4 mb-4">
                            <div class="p-3 bg-white shadow-sm rounded-circle">
                                <i class="fas fa-shield-alt text-brand-red fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="text-black fw-bold mb-0">100% Audit Readiness</h5>
                                <p class="text-black small mb-0">Trusted for international fire and safety inspections.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-fire-extinguisher text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">Fire Compliance</h4>
                                <p class="text-black small mb-0">UL-rated fire safety materials for all public and corridor
                                    signage.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-universal-access text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">ADA & Braille</h4>
                                <p class="text-black small mb-0">Grade 2 Braille and high-contrast tactile lettering for
                                    full guest accessibility.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-bolt text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">Emergency Egress</h4>
                                <p class="text-black small mb-0">Photoluminescent exit signs that exceed global life-safety
                                    standards.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-info text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">Mandatory Display</h4>
                                <p class="text-black small mb-0">Integrated solutions for fire maps and mandatory safety
                                    disclosures.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-4 text-center text-lg-start">
                    <h2 class="display-5 fw-bold text-dark">Trusted by <br><span class="text-brand-red">Hospitality
                            Leaders</span></h2>
                    <p class="text-dark fs-5 mt-4">Hear what general managers and developers say about our visual delivery.
                    </p>
                    <div class="mt-4 mt-lg-5 d-flex gap-3 justify-content-end justify-content-lg-start mb-4 mb-lg-0">
                        <button class="testimonial-nav-btn btn-dark shadow-sm" type="button"
                            data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="testimonial-nav-btn btn-brand-red shadow-sm text-white" type="button"
                            data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8 mt-0">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div
                                            class="p-5 bg-light rounded-4 border-start border-5 border-brand-red shadow-sm h-100">
                                            <div class="mb-4 text-warning">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i>
                                            </div>
                                            <p class="fs-5 text-dark mb-4">"Brand Signages understood our design intent
                                                perfectly. The suite identifiers they produced were absolute works of art."
                                            </p>
                                            <h6 class="fw-bold mb-0 text-black">General Manager</h6>
                                            <p class="small text-muted mb-0">Leading 5-Star Hotel Chain</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-none d-md-block">
                                        <div class="p-5 bg-dark text-white rounded-4 shadow-sm h-100">
                                            <div class="mb-4 text-brand-red">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i>
                                            </div>
                                            <p class="fs-5 mb-4 text-white">"Their coordination with our MEP and interior
                                                teams during the pre-opening phase was exceptional. Quality is unmatched."
                                            </p>
                                            <h6 class="fw-bold mb-0 text-white">Project Director</h6>
                                            <p class="small text-white-50 mb-0">Luxury Resort Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-dark">Hotel Signage <span class="text-brand-red">FAQs</span></h2>
                <div class="mx-auto bg-brand-red mt-3" style="width: 60px; height: 3px;"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion accordion-flush shadow-sm rounded-4 overflow-hidden" id="hotelFaq">
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold py-4 px-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#hf1">
                                    Can you match signage to bespoke interior finishes (brass, marble, etc.)?
                                </button>
                            </h2>
                            <div id="hf1" class="accordion-collapse collapse show" data-bs-parent="#hotelFaq">
                                <div class="accordion-body p-4 text-muted">
                                    Yes, we specialize in high-end material matching. We can fabricate signage in
                                    hand-polished brass, brushed titanium, or even integrated stone to align with your
                                    interior mood boards.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold py-4 px-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#hf2">
                                    Do you provide silent installation for functioning properties?
                                </button>
                            </h2>
                            <div id="hf2" class="accordion-collapse collapse" data-bs-parent="#hotelFaq">
                                <div class="accordion-body p-4 text-muted">
                                    Absolutely. Our teams work during off-peak hours with noiseless tools to ensure guest
                                    sleep cycles are never disrupted during a signage refresh.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-white shadow-lg" style="background-color: #000;">
        <div class="container py-4 text-center">
            <h2 class="display-5 fw-bold mb-4">Elevate Your Guest Experience</h2>
            <p class="mb-5 opacity-75 fs-5 mx-auto" style="max-width: 700px;">Join the elite hotels that trust Brand
                Signages for their branding excellence. Let's make your property a landmark.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact_us') }}" class="btn btn-lg btn-brand-red fw-bold rounded-pill px-5 py-3">Get a
                    Proposal</a>
                <a href="tel:+919000000000" class="btn btn-lg btn-outline-light fw-bold rounded-pill px-5 py-3">Call
                    Expert</a>
            </div>
        </div>
    </section>
@endsection
