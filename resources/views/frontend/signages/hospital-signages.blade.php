@extends('frontend.layout.appLayout')
@section('content')
    <style>

        h2 span{
            font-family: 'lora', sans-serif;
        }
        .hospital-hero {
            position: relative;
            background: url('{{ asset('frontend/Images/generated/hospital_hero.png') }}') no-repeat center center/cover;
            min-height: 600px;
            display: flex;
            align-items: center;
            color: white;
        }

        .hospital-hero::before {
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

        .stage-shadow{
            box-shadow: 0 100px 80px -60px rgba(0, 0, 0, 0.5);
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
            .hospital-hero {
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

    <section class="hospital-hero">
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-7">
                    <span class="badge mb-3 px-3 py-2 text-uppercase fw-bold bg-brand-red">Healthcare Specialist</span>
                    <h1 class="">Smarter Wayfinding <br>For Modern Hospitals</h1>
                    <p class="fs-20">
                        Enhance patient experience and clinical efficiency with our professional medical signage systems.
                        Designed for clarity, durability, and compliance.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('contact_us') }}"
                            class="btn btn-lg btn-brand-red fw-bold px-5 py-3 rounded-pill">Get Free Audit</a>
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
                    <img src="https://archello.s3.eu-central-1.amazonaws.com/images/2024/09/27/prashant-parmar-architect-modern-hospital-interior-at-ratnanjali-solitaire-hospitals-archello.1727437060.3087.jpg" alt="Hospital Wayfinding"
                        class="stage-shadow img-fluid rounded-4">
                </div>
                <div class="col-lg-6 ps-lg-5 order-1 order-lg-2 mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-4 text-dark">Navigating the <span class="text-brand-red">Path to Healing</span></h2>
                    <p class="text-muted mb-4 fs-5">In a high-stress medical environment, clear signage is a calming force.
                        We specialize in interior and exterior hospital signage that directs patients intuitively, reducing
                        anxiety and staff interruptions.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">Antimicrobial & Hygienic Materials</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">ADA & Braille Compliant Modules</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-check-circle text-brand-red me-3 fa-lg"></i>
                            <span class="fw-semibold">Digital Self-Service Wayfinding</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<style>
    .stat-section {
        background: linear-gradient(135deg, #0f2027, #203a43, #468ead);
        padding: 5.5rem 0;
        color: #fff;
    }

    .stat-col {
        border-right: 1px solid rgba(255, 255, 255, 0.15);
    }

    .stat-col:last-child {
        border-right: none;
    }

    .stat-item {
        padding: 2.5rem 1rem;
    }

    .stat-item h3 {
        font-size: 3.2rem;
        font-weight: 800;
        letter-spacing: 1px;
        margin-bottom: 8px;
        color: #ffffff;
    }

    .stat-item p {
        margin: 0;
        font-size: 13px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.75);
        font-weight: 700;
    }

    /* MOBILE */
    @media (max-width: 768px) {
        .stat-section {
            padding: 3.5rem 0;
        }

        .stat-col {
            border-right: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }

        .stat-col:nth-child(3),
        .stat-col:nth-child(4) {
            border-bottom: none;
        }

        .stat-item h3 {
            font-size: 2.2rem;
        }
    }

</style>

    <section class="stat-section">
    <div class="container">
        <div class="row text-center align-items-center g-0">

            <div class="col-md-3 col-6 stat-col">
                <div class="stat-item">
                    <h3>250+</h3>
                    <p>Clinics Branded</p>
                </div>
            </div>

            <div class="col-md-3 col-6 stat-col">
                <div class="stat-item">
                    <h3>12k+</h3>
                    <p>Signages Installed</p>
                </div>
            </div>

            <div class="col-md-3 col-6 stat-col">
                <div class="stat-item">
                    <h3>100%</h3>
                    <p>Quality Assured</p>
                </div>
            </div>

            <div class="col-md-3 col-6 stat-col">
                <div class="stat-item">
                    <h3>24h</h3>
                    <p>Design Turnaround</p>
                </div>
            </div>

        </div>
    </div>
</section>


    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Signage for Every Ward</h2>
                <div class="mx-auto" style="width: 80px; height: 4px; background: #E43D12;"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="icon-box"><i class="fas fa-directions fa-2x"></i></div>
                        <h4 class="fw-bold">Directional Systems</h4>
                        <p class="text-muted">Overhead and wall-mounted signs that guide visitors from the main entrance to
                            sub-waiting areas and diagnostics.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box" style="border-top-color: #000;">
                        <div class="icon-box" style="background: #000; color: #fff;"><i class="fas fa-door-open fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">Room Identifiers</h4>
                        <p class="text-muted">Modular room signs with clinician name sliders, room numbers, and tactile
                            Braille for full accessibility.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="icon-box"><i class="fas fa-info-circle fa-2x"></i></div>
                        <h4 class="fw-bold">Digital Informational</h4>
                        <p class="text-muted">Dynamic floor directories and lobby kiosks that provide real-time updates on
                            clinician availability and clinic hours.</p>
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
                        <h5>Site Assessment</h5>
                        <p class="text-muted">Detailed audit of the patient journey and identifying high-confusion zones.
                        </p>
                    </div>
                    <div class="process-step">
                        <h5>Wayfinding Strategy</h5>
                        <p class="text-muted">Creating a systematic logic for nomenclature and color-coding by department.
                        </p>
                    </div>
                    <div class="process-step">
                        <h5>Precision Fabrication</h5>
                        <p class="text-muted">Manufacturing using non-porous, medical-grade materials that resist bacteria.
                        </p>
                    </div>
                    <div class="process-step">
                        <h5>Planned Installation</h5>
                        <p class="text-muted">Execution during off-peak hours to ensure zero disruption to medical services.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sticky-column">
                        <div class="row g-3">
                            <div class="col-12">
                                <img src="{{ asset('frontend/Images/generated/hospital_hero.png') }}" class="gallery-img"
                                    alt="Hospital 1" style="height: auto; max-height: 80vh;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hospital Experience Section (Info Boxes) -->
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-dark">Patient-First <span class="text-brand-red">Experience</span></h2>
                <p class="text-black fw-bold">Strategic touchpoints that matter in healthcare.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-wheelchair fa-3x"></i></div>
                        <h4 class="fw-bold text-black">Accessibility Focus</h4>
                        <p class="text-black">ADA, Braille, and height-conscious placement ensuring every patient can
                            navigate without assistance.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-language fa-3x"></i></div>
                        <h4 class="fw-bold text-black">Multilingual Clarity</h4>
                        <p class="text-black">Visual icons and multi-language support for diverse patient demographics in
                            urban healthcare centers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                        <div class="mb-4 text-brand-red"><i class="fas fa-microscope fa-3x"></i></div>
                        <h4 class="fw-bold text-black">Clinical Grade</h4>
                        <p class="text-black">Signage fabricated using non-porous materials that withstand aggressive daily
                            chemical sanitization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Gallery Section (Enhanced Healthcare Excellence) -->
    <section class="py-5 bg-light" id="projects">
        <style>
            .project-card-hospital {
                position: relative;
                overflow: hidden;
                border-radius: 20px;
                height: 100%;
                cursor: pointer;
            }

            .project-card-hospital img {
                transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            }

            .project-card-hospital:hover img {
                transform: scale(1.1);
            }

            .project-overlay-hospital {
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

            .plus-icon-hospital {
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

            .project-card-hospital:hover .plus-icon-hospital {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        </style>
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold text-dark">Healthcare <span class="text-brand-red">Excellence</span></h2>
                <p class="text-muted">Delivering world-class wayfinding to India's premier healthcare chains.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="project-card-hospital shadow-lg" style="height: 500px;">
                        <img src="{{ asset('frontend/Images/generated/hospital_hero.png') }}"
                            class="w-100 h-100 object-fit-cover" alt="Large Hospital">
                        <div class="plus-icon-hospital"><i class="fas fa-plus fa-lg"></i></div>
                        <div class="project-overlay-hospital">
                            <span class="badge bg-brand-red mb-2 align-self-start">Full Campus Rollout</span>
                            <h3 class="fw-bold text-white mb-1">Apollo Hospitals Multispeciality</h3>
                            <p class="text-white-50 small mb-0">1,200+ Signage units installed across 15 floors.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-4 h-100">
                        <div class="col-12" style="height: 240px;">
                            <div class="project-card-hospital shadow">
                                <img src="{{ asset('frontend/Images/generated/hospital_internal.png') }}"
                                    class="w-100 h-100 object-fit-cover" alt="Clinic">
                                <div class="project-overlay-hospital">
                                    <h5 class="fw-bold text-white mb-0">Max Healthcare</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="height: 240px;">
                            <div class="project-card-hospital shadow">
                                <img src="{{ asset('frontend/Images/generated/hospital_hero.png') }}"
                                    class="w-100 h-100 object-fit-cover" alt="Fortis">
                                <div class="project-overlay-hospital">
                                    <h5 class="fw-bold text-white mb-0">Fortis Hospital</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: Hygiene Standards -->
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold text-black">Uncompromising <span class="text-brand-red">Hygiene
                            Standards</span></h2>
                    <p class="text-black fs-5 mb-4 fw-medium">In a sterile environment, even your signs must contribute to
                        patient safety. Our healthcare signage is built to outperform standard commercial products.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-brand-red bg-light">
                                <h6 class="fw-bold text-black mb-1">Anti-Bacterial Surface</h6>
                                <p class="small text-black mb-0">Specially treated acrylics that discourage bacterial
                                    growth.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-dark bg-light">
                                <h6 class="fw-bold text-black mb-1">UV Print Stability</h6>
                                <p class="small text-black mb-0">Graphics that don't fade under constant UV-C disinfection
                                    cycles.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-dark bg-light">
                                <h6 class="fw-bold text-black mb-1">Chem-Shield Coating</h6>
                                <p class="small text-black mb-0">Resistant to high-concentration IPA and bleach sanitizers.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-brand-red bg-light">
                                <h6 class="fw-bold text-black mb-1">Gapless Joinery</h6>
                                <p class="small text-black mb-0">Precision fabrication that leaves no crevices for dust
                                    accumulation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="{{ asset('frontend/Images/generated/hospital_internal.png') }}"
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
                                class="text-brand-red">Strict Compliance</span></h2>
                        <p class="text-black fs-5 mb-5 fw-medium">We ensure your medical facility meets all international
                            and local safety standards without compromise, combining aesthetic appeal with regulatory rigor.
                        </p>

                        <div class="d-flex align-items-center gap-4 mb-4">
                            <div class="p-3 bg-white shadow-sm rounded-circle">
                                <i class="fas fa-shield-alt text-brand-red fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="text-black fw-bold mb-0">99.9% Audit Pass Rate</h5>
                                <p class="text-black small mb-0">Trusted for NABH & JCI inspections.</p>
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
                                <h4 class="fw-bold text-black mb-3">Fire Rating</h4>
                                <p class="text-black small mb-0">All materials used are UL94 or equivalent fire-rated to
                                    ensure zero toxic fumes and maximum safety during emergencies.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-braille text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">Tactile/Braille</h4>
                                <p class="text-black small mb-0">Full compliance with global ADA standards, featuring
                                    precision-machined Grade 2 Braille and tactile characters.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-certificate text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">NABH Norms</h4>
                                <p class="text-black small mb-0">Signage layout and nomenclature designed strictly to meet
                                    NABH and JCI accreditation requirements for patient safety.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="p-4 bg-light border border-dark border-opacity-10 rounded-4 h-100 transition-hover">
                                <div class="mb-3">
                                    <i class="fas fa-bolt text-brand-red fa-2x"></i>
                                </div>
                                <h4 class="fw-bold text-black mb-3">Photo-luminescent</h4>
                                <p class="text-black small mb-0">Life-saving emergency exit signs that provide 8+ hours of
                                    independent visibility during complete power failure.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section (Fixed Slider) -->
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-4 text-center text-lg-start">
                    <h2 class="display-5 fw-bold text-dark">Trusted by <br><span class="text-brand-red">Healthcare
                            Leaders</span></h2>
                    <p class="text-dark fs-5 mt-4">Hear what facility managers and hospital directors say about our
                        delivery.</p>
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
                                            <p class="fs-5 text-dark mb-4">"The wayfinding logic implemented by Brand
                                                Signages reduced visitor confusion by 40%. The team is exceptionally
                                                professional."</p>
                                            <h6 class="fw-bold mb-0">Dr. Rajesh Kumar</h6>
                                            <p class="small text-muted mb-0">Director of Operations, Apollo</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-none d-md-block">
                                        <div class="p-5 bg-dark text-white rounded-4 shadow-sm h-100">
                                            <div class="mb-4 text-brand-red">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i>
                                            </div>
                                            <p class="fs-5 mb-4">"High-quality medical grade materials and professional
                                                installation. They are our go-to partner for chain branding needs."</p>
                                            <h6 class="fw-bold mb-0">Ms. Anita Sharma</h6>
                                            <p class="small text-white-50 mb-0">Facility Manager, Max Health</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div
                                            class="p-5 bg-light rounded-4 border-start border-5 border-brand-red shadow-sm h-100">
                                            <div class="mb-4 text-warning">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i>
                                            </div>
                                            <p class="fs-5 text-dark mb-4">"Installation was silent and didn't disrupt
                                                patient care. The Braille accuracy is perfect according to standards."</p>
                                            <h6 class="fw-bold mb-0">Mr. Vinay Gupta</h6>
                                            <p class="small text-muted mb-0">Operations Head, Fortis</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-none d-md-block">
                                        <div class="p-5 bg-dark text-white rounded-4 shadow-sm h-100">
                                            <div class="mb-4 text-brand-red">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i>
                                            </div>
                                            <p class="fs-5 mb-4">"Exceptional turn-around time on custom clinic signs.
                                                Their color matching with our brand identity was spot on."</p>
                                            <h6 class="fw-bold mb-0">Dr. S. Mukherjee</h6>
                                            <p class="small text-white-50 mb-0">Founder, City Clinics</p>
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
                <h2 class="display-5 fw-bold text-dark">Healthcare Signage <span class="text-brand-red">FAQs</span></h2>
                <div class="mx-auto bg-brand-red mt-3" style="width: 60px; height: 3px;"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion accordion-flush shadow-sm rounded-4 overflow-hidden" id="hospitalFaq">
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold py-4 px-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#hf1">
                                    Are your materials resistant to hospital-grade disinfectants?
                                </button>
                            </h2>
                            <div id="hf1" class="accordion-collapse collapse show" data-bs-parent="#hospitalFaq">
                                <div class="accordion-body p-4 text-muted">
                                    Yes, we use sub-surface graphics and non-porous medical-grade acrylics and metals that
                                    can be sanitized daily with aggressive chemical cleaners without fading or
                                    deteriorating.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold py-4 px-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#hf2">
                                    Do you provide ADA and Braille compliant signage?
                                </button>
                            </h2>
                            <div id="hf2" class="accordion-collapse collapse" data-bs-parent="#hospitalFaq">
                                <div class="accordion-body p-4 text-muted">
                                    Absolutely. All our room identifiers and public area signs are manufactured to meet ADA
                                    standards, including tactile letters and Grade 2 Braille for full accessibility.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold py-4 px-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#hf3">
                                    Can we update clinician names on room signs easily?
                                </button>
                            </h2>
                            <div id="hf3" class="accordion-collapse collapse" data-bs-parent="#hospitalFaq">
                                <div class="accordion-body p-4 text-muted">
                                    Yes, we offer modular slider systems or insert-based signs that allow your staff to
                                    update names or room functions in seconds without needing tools or professional help.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold py-4 px-4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#hf4">
                                    Do you install signage in functioning hospitals?
                                </button>
                            </h2>
                            <div id="hf4" class="accordion-collapse collapse" data-bs-parent="#hospitalFaq">
                                <div class="accordion-body p-4 text-muted">
                                    Yes, we specialize in "silent installations." Our teams work during off-peak hours
                                    (usually night shifts) with noiseless equipment to ensure zero disruption to patient
                                    care and surgeries.
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
            <h2 class="display-5 fw-bold mb-4">Standardize Your Facility's Signage Today</h2>
            <p class="mb-5 opacity-75 fs-5 mx-auto" style="max-width: 700px;">Join 500+ healthcare institutions that trust
                Brand Signages for their branding needs. Let's make your facility patient-friendly.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('contact_us') }}" class="btn btn-lg btn-brand-red fw-bold rounded-pill px-5 py-3">Get a
                    Site Audit</a>
                <a href="tel:+919900000000" class="btn btn-lg btn-outline-light fw-bold rounded-pill px-5 py-3">Call Our
                    Consultant</a>
            </div>
        </div>
    </section>
@endsection
