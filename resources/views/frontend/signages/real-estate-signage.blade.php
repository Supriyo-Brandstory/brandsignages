@extends('frontend.layout.appLayout')
@section('content')
    <style>
        .estate-hero {
            position: relative;
            background: url('{{ asset('frontend/Images/generated/real_estate_hero.png') }}') no-repeat center center/cover;
            min-height: 600px;
            display: flex;
            align-items: center;
            color: white;
        }

        .estate-hero::before {
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
            .estate-hero {
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

    <section class="estate-hero">
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <span class="badge mb-3 px-3 py-2 text-uppercase fw-bold bg-brand-red">Real Estate Specialists</span>
                    <h1 class="">Selling Lifestyles <br>Not Just Buildings</h1>
                    <p class="fs-20">
                        Maximize your property value with immersive signage and branding solutions.
                        From site hoardings to luxury marketing galleries, we create impressions that convert.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact_us') }}"
                            class="btn btn-lg btn-brand-red fw-bold px-5 py-3 rounded-pill">Start Your Project</a>
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
                    <img src="{{ asset('frontend/Images/generated/real_estate_internal.png') }}" alt="Sales Gallery"
                        class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6 ps-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-4 text-dark">Immersive Property Marketing</h2>
                    <p class="text-muted mb-4 fs-5">Real estate branding is about establishing authority before the first
                        brick is laid. We provide large-format and precision-engineered signage for developers.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">High-Fidelity Site Hoardings (UV-Protected)</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">Bespoke Sales Gallery & Sample Flat Branding</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">Integrated Project Wayfinding & Amenities Signage</span>
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
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">Projects Branded</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <h3>1M+</h3>
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">Sq.ft Hoardings</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <h3>98%</h3>
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">On-Time Delivery</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <h3>15+</h3>
                        <p class="text-white-50 text-uppercase tracking-wider small fw-bold">City Presence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">End-to-End Estate Solutions</h2>
                <div class="mx-auto" style="width: 80px; height: 4px; background: #E43D12;"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="icon-box"><i class="fas fa-image fa-2x"></i></div>
                        <h4 class="fw-bold">Site Hoardings</h4>
                        <p class="text-muted">Turn your construction perimeter into a massive marketing asset with vibrant
                            graphics and robust structural frames.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box" style="border-top-color: #000;">
                        <div class="icon-box" style="background: #000; color: #fff;"><i class="fas fa-gem fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">Experience Centers</h4>
                        <p class="text-muted">Luxury interior branding that reflects your project's prestige, from backlit
                            floor plans to elegant reception logos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="icon-box"><i class="fas fa-map-signs fa-2x"></i></div>
                        <h4 class="fw-bold">Project Wayfinding</h4>
                        <p class="text-muted">Seamless navigation systems for sample flats and completed campuses,
                            maintaining brand consistency throughout.</p>
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
                        <h5>Site Analysis</h5>
                        <p class="text-muted">Detailed survey of project visibility zones and key traffic flow areas.</p>
                    </div>
                    <div class="process-step">
                        <h5>Creative Strategy</h5>
                        <p class="text-muted">Developing a visual identity that aligns with your property's USP and buyer
                            persona.</p>
                    </div>
                    <div class="process-step">
                        <h5>Industrial Fabrication</h5>
                        <p class="text-muted">Manufacturing using UV-resistant inks and high-grade structures for maximum
                            longevity.</p>
                    </div>
                    <div class="process-step">
                        <h5>Precision Installation</h5>
                        <p class="text-muted">Rapid deployment of site-wide branding using our specialized project
                            management teams.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sticky-column">
                        <div class="row g-3">
                            <div class="col-12">
                                <img src="{{ asset('frontend/Images/generated/real_estate_hero.png') }}" class="gallery-img"
                                    alt="Project Site" style="height: auto; max-height: 80vh;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Real Estate Experience Section -->
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-dark">Developer-Centric <span class="text-brand-red">Excellence</span>
                </h2>
                <p class="text-black fw-bold">Built to survive tough site conditions while looking premium.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-sun fa-3x"></i></div>
                        <h4 class="fw-bold text-black">UV Stability</h4>
                        <p class="text-black">Graphics that don't fade under extreme tropical sun, ensuring your site looks
                            new for months.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-wind fa-3x"></i></div>
                        <h4 class="fw-bold text-black">Wind Resistance</h4>
                        <p class="text-black">Structural MS frames engineered to withstand high wind loads for safe
                            large-format hoarding.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-shipping-fast fa-3x"></i></div>
                        <h4 class="fw-bold text-black">Rapid Rollout</h4>
                        <p class="text-black">Modular production systems allowing us to brand 500+ running feet of site
                            perimeter in days.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Gallery Section (Enhanced Real Estate Excellence) -->
    <section class="py-5 bg-light" id="projects">
        <style>
            .project-card-estate {
                position: relative;
                overflow: hidden;
                border-radius: 20px;
                height: 100%;
                cursor: pointer;
            }

            .project-card-estate img {
                transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }

            .project-card-estate:hover img {
                transform: scale(1.1);
            }

            .project-overlay-estate {
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

            .plus-icon-estate {
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

            .project-card-estate:hover .plus-icon-estate {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        </style>
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold text-dark">Real Estate <span class="text-brand-red">Excellence</span></h2>
                <p class="text-muted">Marketing the most prestigious addresses in the country.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="project-card-estate shadow-lg" style="height: 500px;">
                        <img src="{{ asset('frontend/Images/generated/real_estate_hero.png') }}"
                            class="w-100 h-100 object-fit-cover" alt="Large Development">
                        <div class="plus-icon-estate"><i class="fas fa-plus fa-lg"></i></div>
                        <div class="project-overlay-estate">
                            <span class="badge bg-brand-red mb-2 align-self-start">Ultra-Luxury</span>
                            <h3 class="fw-bold text-white mb-1">Skyline Residences</h3>
                            <p class="text-white-50 small mb-0">Total branding rollout across 30 acres of site perimeter.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-4 h-100">
                        <div class="col-12" style="height: 240px;">
                            <div class="project-card-estate shadow">
                                <img src="{{ asset('frontend/Images/generated/real_estate_internal.png') }}"
                                    class="w-100 h-100 object-fit-cover" alt="Sales Gallery">
                                <div class="project-overlay-estate">
                                    <h5 class="fw-bold text-white mb-0">The Crest Marketing Gallery</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="height: 240px;">
                            <div class="project-card-estate shadow">
                                <img src="{{ asset('frontend/Images/generated/real_estate_hero.png') }}"
                                    class="w-100 h-100 object-fit-cover" alt="Hoarding">
                                <div class="project-overlay-estate">
                                    <h5 class="fw-bold text-white mb-0">Eco-City Phase 1</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: Structural Standards -->
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold text-black">Uncompromising <span class="text-brand-red">Engineering
                            Standards</span></h2>
                    <p class="text-black fs-5 mb-4 fw-medium">Real estate signage must be as resilient as the buildings
                        they market. We use structural-grade fabrication methods.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-brand-red bg-light">
                                <h6 class="fw-bold text-black mb-1">MS Structural Frames</h6>
                                <p class="small text-black mb-0">Industrial-grade steel structures for high-stability
                                    hoarding.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-dark bg-light">
                                <h6 class="fw-bold text-black mb-1">Night-Glow Illumination</h6>
                                <p class="small text-black mb-0">Uniform LED lighting for maximum 24/7 project visibility.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-dark bg-light">
                                <h6 class="fw-bold text-black mb-1">Weather-Shield Vinyl</h6>
                                <p class="small text-black mb-0">High-grade cast vinyl with matte lamination to prevent
                                    glare.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-brand-red bg-light">
                                <h6 class="fw-bold text-black mb-1">Rapid Re-skinning</h6>
                                <p class="small text-black mb-0">Modular systems that allow for fast graphic updates as
                                    project phases evolve.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="{{ asset('frontend/Images/generated/real_estate_internal.png') }}"
                            class="img-fluid rounded-4 shadow-lg" alt="Precision">
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
                        <p class="text-black fs-5 mb-5 fw-medium">We ensure your project site meets all RERA and safety
                            regulations, combining marketing flair with industrial compliance.
                        </p>

                        <div class="d-flex align-items-center gap-4 mb-4">
                            <div class="p-3 bg-white shadow-sm rounded-circle">
                                <i class="fas fa-shield-alt text-brand-red fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="text-black fw-bold mb-0">100% RERA Compliance</h5>
                                <p class="text-black small mb-0">Ensuring all mandatory disclosures are clearly displayed.
                                </p>
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
                                    <i class="fas fa-file-contract text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">RERA Displays</h4>
                                <p class="text-black small mb-0">Mandatory project disclosure boards as per latest RERA
                                    guidelines.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-hard-hat text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">Safety Signage</h4>
                                <p class="text-black small mb-0">OSHA-compliant construction site safety and hazard
                                    warnings.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-road text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">Public Safety</h4>
                                <p class="text-black small mb-0">Clear public boundary markers and heavy vehicle entry
                                    warnings.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-exclamation-triangle text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">Site Hoarding Safety</h4>
                                <p class="text-black small mb-0">Structurally certified hoarding installations with
                                    engineering stability reports.</p>
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
                    <h2 class="display-5 fw-bold text-dark">Trusted by <br><span class="text-brand-red">Developer
                            Leaders</span></h2>
                    <p class="text-dark fs-5 mt-4">See how we've helped the country's top builders sell their vision.</p>
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
                                            <p class="fs-5 text-dark mb-4">"The site hoarding rollout for our township
                                                project was incredibly fast. The quality of graphics really helped set a
                                                premium tone."</p>
                                            <h6 class="fw-bold mb-0 text-black">VP Marketing</h6>
                                            <p class="small text-muted mb-0">Tier-1 National Developer</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-none d-md-block">
                                        <div class="p-5 bg-dark text-white rounded-4 shadow-sm h-100">
                                            <div class="mb-4 text-brand-red">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i>
                                            </div>
                                            <p class="fs-5 mb-4 text-white">"Professional installation and strong
                                                structural engineering. Their signage withstands the monsoon season
                                                perfectly."</p>
                                            <h6 class="fw-bold mb-0 text-white">Head of Construction</h6>
                                            <p class="small text-white-50 mb-0">Luxury Residential Builder</p>
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
                <h2 class="display-5 fw-bold text-dark">Real Estate Signage <span class="text-brand-red">FAQs</span></h2>
                <div class="mx-auto bg-brand-red mt-3" style="width: 60px; height: 3px;"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion accordion-flush shadow-sm rounded-4 overflow-hidden" id="estateFaq">
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold py-4 px-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#ef1">
                                    How long do the outdoor hoardings last in extreme weather?
                                </button>
                            </h2>
                            <div id="ef1" class="accordion-collapse collapse show" data-bs-parent="#estateFaq">
                                <div class="accordion-body p-4 text-muted">
                                    Our hoardings use UV-stable inks and structural frames designed for 2+ years of
                                    exposure. They are engineered to withstand high wind loads and monsoon conditions
                                    without fading or buckling.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold py-4 px-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#ef2">
                                    Do you provide mandatory RERA disclosure boards?
                                </button>
                            </h2>
                            <div id="ef2" class="accordion-collapse collapse" data-bs-parent="#estateFaq">
                                <div class="accordion-body p-4 text-muted">
                                    Yes, we provide standard-compliant RERA disclosure boards and safety signage that meet
                                    all local regulatory requirements for construction sites.
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
            <h2 class="display-5 fw-bold mb-4">Launch Your Project with Impact</h2>
            <p class="mb-5 opacity-75 fs-5 mx-auto" style="max-width: 700px;">Join the elite list of developers who trust
                Brand Signages for visual excellence. Let's make your site a landmark.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact_us') }}"
                    class="btn btn-lg btn-brand-red fw-bold rounded-pill px-5 py-3">Request Site Audit</a>
                <a href="tel:+919000000000" class="btn btn-lg btn-outline-light fw-bold rounded-pill px-5 py-3">Speak to
                    Specialist</a>
            </div>
        </div>
    </section>
@endsection
