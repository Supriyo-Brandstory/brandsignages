@extends('frontend.layout.appLayout')
@section('content')
    <style>
        .bank-hero {
            position: relative;
            background: url('{{ asset('frontend/Images/generated/bank_hero.png') }}') no-repeat center center/cover;
            min-height: 600px;
            display: flex;
            align-items: center;
            color: white;
        }

        .bank-hero::before {
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
            .bank-hero {
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

    <section class="bank-hero">
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <span class="badge mb-3 px-3 py-2 text-uppercase fw-bold bg-brand-red">Banking Specialist</span>
                    <h1 class="">Premium Signage <br>For Financial Institutions</h1>
                    <p class="fs-20">
                        Define trust and security with our high-end banking signage systems.
                        Engineered for institutional scale, brand consistency, and regulatory compliance.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact_us') }}"
                            class="btn btn-lg btn-brand-red fw-bold px-5 py-3 rounded-pill">Request Consultation</a>
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
                    <img src="{{ asset('frontend/Images/generated/bank_internal.png') }}" alt="Bank Interior"
                        class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6 ps-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-4 text-dark">Earning Trust at Every Touchpoint</h2>
                    <p class="text-muted mb-4 fs-5">In the banking sector, signage is more than just identification—it's a
                        symbol of stability and professionalism. We provide end-to-end branding solutions for branch
                        rollouts and corporate offices.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">Premium Architectural Metals & Finishes</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">Atm Enclosures & Security Graphics</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">Digital Rate Boards & Interactive Kiosks</span>
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
                        <h3>1,200+</h3>
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">Branches Branded</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <h3>15+</h3>
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">Years of Trust</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <h3>100%</h3>
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">Brand Accuracy</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <h3>24/7</h3>
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">Global Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Comprehensive Banking Solutions</h2>
                <div class="mx-auto" style="width: 80px; height: 4px; background: #E43D12;"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="icon-box"><i class="fas fa-building fa-2x"></i></div>
                        <h4 class="fw-bold">External Facades</h4>
                        <p class="text-muted">High-impact architectural channel letters and pylon signs that establish a
                            dominant street presence for your branches.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box" style="border-top-color: #000;">
                        <div class="icon-box" style="background: #000; color: #fff;"><i
                                class="fas fa-credit-card fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">ATM Branding</h4>
                        <p class="text-muted">Custom illuminated surrounds and security graphics that increase visibility
                            and brand recall for off-site ATM networks.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="icon-box"><i class="fas fa-desktop fa-2x"></i></div>
                        <h4 class="fw-bold">Digital Signage</h4>
                        <p class="text-muted">Centralized networks for real-time interest rate displays, exchange rates, and
                            interactive customer engagement boards.</p>
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
                        <h5>Institutional Audit</h5>
                        <p class="text-muted">Review of existing brand assets and spatial requirements across branch
                            networks.</p>
                    </div>
                    <div class="process-step">
                        <h5>Technical Design</h5>
                        <p class="text-muted">Engineering blueprints that adhere to global brand standards and safety
                            protocols.</p>
                    </div>
                    <div class="process-step">
                        <h5>Precision Fabrication</h5>
                        <p class="text-muted">Manufacturing using high-grade metals and energy-efficient LED modules.</p>
                    </div>
                    <div class="process-step">
                        <h5>Synchronized Rollout</h5>
                        <p class="text-muted">Coordinated installation across multiple regions to ensure zero deviation in
                            brand rollout.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sticky-column">
                        <div class="row g-3">
                            <div class="col-12">
                                <img src="{{ asset('frontend/Images/generated/bank_hero.png') }}" class="gallery-img"
                                    alt="Bank Building" style="height: auto; max-height: 80vh;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bank Experience Section -->
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-dark">Institutional <span class="text-brand-red">Excellence</span></h2>
                <p class="text-black fw-bold">Delivering premium branding to the financial world.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-shield-alt fa-3x"></i></div>
                        <h4 class="fw-bold text-black">High Security</h4>
                        <p class="text-black">Durable, tamper-proof materials designed for high-traffic financial
                            environments.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-pen-nib fa-3x"></i></div>
                        <h4 class="fw-bold text-black">Aesthetic Luxury</h4>
                        <p class="text-black">Premium finishes like brushed titanium and tempered glass for executive
                            zones.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-server fa-3x"></i></div>
                        <h4 class="fw-bold text-black">Unified Logistics</h4>
                        <p class="text-black">Strategic logistics management for seamless multi-branch signage rollouts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Gallery Section (Enhanced Banking Excellence) -->
    <section class="py-5 bg-light" id="projects">
        <style>
            .project-card-bank {
                position: relative;
                overflow: hidden;
                border-radius: 20px;
                height: 100%;
                cursor: pointer;
            }

            .project-card-bank img {
                transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }

            .project-card-bank:hover img {
                transform: scale(1.1);
            }

            .project-overlay-bank {
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

            .plus-icon-bank {
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

            .project-card-bank:hover .plus-icon-bank {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        </style>
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold text-dark">Banking <span class="text-brand-red">Portfolios</span></h2>
                <p class="text-muted">Crafting visual identities for the world's most trusted banks.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="project-card-bank shadow-lg" style="height: 500px;">
                        <img src="{{ asset('frontend/Images/generated/bank_hero.png') }}"
                            class="w-100 h-100 object-fit-cover" alt="Large Bank Building">
                        <div class="plus-icon-bank"><i class="fas fa-plus fa-lg"></i></div>
                        <div class="project-overlay-bank">
                            <span class="badge bg-brand-red mb-2 align-self-start">National Rollout</span>
                            <h3 class="fw-bold text-white mb-1">State Bank Authority</h3>
                            <p class="text-white-50 small mb-0">500+ Branches branded with unified signage systems.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-4 h-100">
                        <div class="col-12" style="height: 240px;">
                            <div class="project-card-bank shadow">
                                <img src="{{ asset('frontend/Images/generated/bank_internal.png') }}"
                                    class="w-100 h-100 object-fit-cover" alt="Inside Bank">
                                <div class="project-overlay-bank">
                                    <h5 class="fw-bold text-white mb-0">HDFC Bank Executive</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="height: 240px;">
                            <div class="project-card-bank shadow">
                                <img src="{{ asset('frontend/Images/generated/bank_hero.png') }}"
                                    class="w-100 h-100 object-fit-cover" alt="ICICI Bank">
                                <div class="project-overlay-bank">
                                    <h5 class="fw-bold text-white mb-0">ICICI Regional Hub</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: Engineering Standards -->
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold text-black">Uncompromising <span class="text-brand-red">Engineering
                            Standards</span></h2>
                    <p class="text-black fs-5 mb-4 fw-medium">Precision and consistency are the cornerstones of banking
                        signage. We use industrial-grade methods to ensure long-term brand integrity.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-brand-red bg-light">
                                <h6 class="fw-bold text-black mb-1">Laser Accuracy</h6>
                                <p class="small text-black mb-0">Micro-precision cutting for seamless brand logos and
                                    lettering.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-dark bg-light">
                                <h6 class="fw-bold text-black mb-1">Smart Illumination</h6>
                                <p class="small text-black mb-0">High-efficiency LED systems with automated brightness
                                    control.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-dark bg-light">
                                <h6 class="fw-bold text-black mb-1">Weather Protection</h6>
                                <p class="small text-black mb-0">Specialized coatings resistant to extreme UV and humidity.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-brand-red bg-light">
                                <h6 class="fw-bold text-black mb-1">Safety Glazing</h6>
                                <p class="small text-black mb-0">Impact-resistant materials for ATM and counter signage.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="{{ asset('frontend/Images/generated/bank_internal.png') }}"
                            class="img-fluid rounded-4 shadow-lg" alt="Engineering">
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
                                class="text-brand-red">Strict Compliance</span></h2>
                        <p class="text-black fs-5 mb-5 fw-medium">We ensure your financial facility meets all international
                            and local safety standards, combining security with regulatory transparency.
                        </p>

                        <div class="d-flex align-items-center gap-4 mb-4">
                            <div class="p-3 bg-white shadow-sm rounded-circle">
                                <i class="fas fa-shield-alt text-brand-red fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="text-black fw-bold mb-0">100% Brand Compliance</h5>
                                <p class="text-black small mb-0">Adhering to strict RBI and Global banking norms.</p>
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
                                    <i class="fas fa-eye text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">ATM Visibility</h4>
                                <p class="text-black small mb-0">Compliance with safety lighting standards to ensure
                                    customer security in ATM zones at night.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-universal-access text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">Accessibility</h4>
                                <p class="text-black small mb-0">Tactile and Braille integration for differently-abled
                                    customers at counters and ATMs.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-lock text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">Security Standards</h4>
                                <p class="text-black small mb-0">Tamper-proof signage mounting for high-exposure public
                                    areas and branch windows.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-info text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">Mandatory Disclosures</h4>
                                <p class="text-black small mb-0">Integrated displays for mandatory regulatory information
                                    and interest rate disclosures.</p>
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
                    <h2 class="display-5 fw-bold text-dark">Trusted by <br><span class="text-brand-red">Banking
                            Leaders</span></h2>
                    <p class="text-dark fs-5 mt-4">See why top financial institutions choose us for their branding
                        logistics.</p>
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
                                            <p class="fs-5 text-dark mb-4">"Brand Signages managed our 200-branch
                                                rebranding seamlessly. The consistency across regions was impeccable."</p>
                                            <h6 class="fw-bold mb-0 text-black">Operations Head</h6>
                                            <p class="small text-muted mb-0">Leading Private Sector Bank</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-none d-md-block">
                                        <div class="p-5 bg-dark text-white rounded-4 shadow-sm h-100">
                                            <div class="mb-4 text-brand-red">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i>
                                            </div>
                                            <p class="fs-5 mb-4 text-white">"Their ATM surrounds significantly improved our
                                                brand visibility in high-traffic urban areas. Highly professional team."</p>
                                            <h6 class="fw-bold mb-0 text-white">Marketing Director</h6>
                                            <p class="small text-white-50 mb-0">Global Banking Corporation</p>
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
                <h2 class="display-5 fw-bold text-dark">Banking Signage <span class="text-brand-red">FAQs</span></h2>
                <div class="mx-auto bg-brand-red mt-3" style="width: 60px; height: 3px;"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion accordion-flush shadow-sm rounded-4 overflow-hidden" id="bankFaq">
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold py-4 px-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#bf1">
                                    Can you manage a pan-India branch rebranding rollout?
                                </button>
                            </h2>
                            <div id="bf1" class="accordion-collapse collapse show" data-bs-parent="#bankFaq">
                                <div class="accordion-body p-4 text-muted">
                                    Yes, we specialize in high-volume, multi-location rollouts. Our logistics and
                                    installation teams are equipped to handle 100+ branches simultaneously with strict brand
                                    adherence.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold py-4 px-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#bf2">
                                    What materials do you use for premium branch facades?
                                </button>
                            </h2>
                            <div id="bf2" class="accordion-collapse collapse" data-bs-parent="#bankFaq">
                                <div class="accordion-body p-4 text-muted">
                                    We use marine-grade stainless steel, high-quality acrylics, and energy-efficient Samsung
                                    LEDs to ensure the signs look premium and last for decades.
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
            <h2 class="display-5 fw-bold mb-4">Elevate Your Institutional Branding</h2>
            <p class="mb-5 opacity-75 fs-5 mx-auto" style="max-width: 700px;">Join the elite list of financial
                institutions that trust Brand Signages for their visual excellence. Let's start your rollout today.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact_us') }}" class="btn btn-lg btn-brand-red fw-bold rounded-pill px-5 py-3">Get a
                    Quote</a>
                <a href="tel:+919000000000" class="btn btn-lg btn-outline-light fw-bold rounded-pill px-5 py-3">Call
                    Now</a>
            </div>
        </div>
    </section>
@endsection
