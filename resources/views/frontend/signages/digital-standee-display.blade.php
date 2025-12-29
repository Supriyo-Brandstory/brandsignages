@extends('frontend.layout.appLayout')
@section('content')
    <div class="commercial-display">
        <section class="hero-banner "
            style="background-image: url('{{ asset('frontend/Images/digital-signages-banner.webp') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1 class="hero-banner_title">Digital Standee Displays <br>for High-Impact Communication</h1>
                        <p class="fs-5 mb-4">Brand Signages is a trusted manufacturer of commercial-grade digital standee built for modern <br>business environments. Our sleek, free-standing displays deliver high-brightness, UHD visuals with 24/7 reliability.
                        </p>
                        <a href="https://brandsignages.com/contact-us">
                            <button class="contact-btn">Get a Free Quote</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="seo-marquee">
            <div class="seo-marquee-wrapper">
                <div class="seo-marquee-track">

                    <a href="/digital-standee-display" class="seo-marquee-item">Indoor Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/digital-standee-display" class="seo-marquee-item">Outdoor Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/digital-standee-display" class="seo-marquee-item">Interactive Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/digital-standee-display" class="seo-marquee-item">Touch Screen Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/digital-standee-display" class="seo-marquee-item">Portable Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/digital-standee-display" class="seo-marquee-item">Floor Standing Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                    <!-- duplicate for seamless loop -->
                    <a href="/digital-standee-display" class="seo-marquee-item">Indoor Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/digital-standee-display" class="seo-marquee-item">Outdoor Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/digital-standee-display" class="seo-marquee-item">Interactive Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/digital-standee-display" class="seo-marquee-item">Touch Screen Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/digital-standee-display" class="seo-marquee-item">Portable Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/digital-standee-display" class="seo-marquee-item">Floor Standing Digital Standee</a>
                    <span class="seo-marquee-sep">*</span>

                </div>
            </div>
        </section>


        <section class="py-80">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 why-text-heading">Interactive & Smart Digital Standees- Brand Signages</h2>
                    <p class="lead text-muted max-w-800 mx-auto">
                        Enhance your commercial spaces with Digital Standees and interactive smart displays. Designed for 24/7 reliability, these 
                        solutions offer high visibility, seamless content management, and engaging experiences for retail, corporate, and public
                         environments.
                    </p>
                </div>

                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="image-container position-relative">
                                <img src="{{ asset('frontend/Images/home/digital-standee-1.webp') }}"
                                    alt="Interactive Touch Panels" class="w-100 h-100">
                                <div class="overlay">
                                    <h5 class="text-title">Static (Standard) Digital Standees</h5>
                                    <p class="text-content">These are non-interactive displays used primarily for broadcasting scheduled content like images, 
                                        videos, and advertisements. They are common in retail for product showcasing and in hospitals or corporate lobbies
                                         for announcements.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="image-container position-relative">
                                <img src="{{ asset('frontend/Images/home/digital-standee-4.webp') }}"
                                    alt="Smart Digital Signage" class="w-100 h-100">
                                <div class="overlay">
                                    <h5 class="text-title">Interactive (Touchscreen) Standees</h5>
                                    <p class="text-content">These units feature touch-sensitive screens (often with 10-point multi-touch) that allow users to
                                        engage directly with the content. They are widely used as wayfinding kiosks in malls, self-service stations in restaurants,
                                         and information hubs at exhibitions.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="image-container position-relative">
                                <img src="{{ asset('frontend/Images/home/digital-standee-3.webp') }}"
                                    alt="Vertical Digital Standees" class="w-100 h-100">
                                <div class="overlay">
                                    <h5 class="text-title">Outdoor Digital Standees</h5>
                                    <p class="text-content">Built to withstand environmental factors, these are weather-resistant and feature "high bright" screens
                                         (measured in candela) to remain visible under direct sunlight.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Key Benefits Section -->
        <section class="py-80 bg-light">
            <div class="container">
                <h2 class="text-center display-5 fw-bold mb-5">Engineering Excellence in Every Panel</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>24/7 Stability</h4>
                            <p>Designed for continuous operation with advanced cooling systems to prevent screen burn-in and
                                overheating.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>Ultra HD Brilliance</h4>
                            <p>Leverage 4K IPS panels with wide viewing angles, ensuring your content looks great from any
                                position.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>Centralized Control</h4>
                            <p>Update content across your entire network from a single dashboard using our cloud-based CMS
                                software.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>Smart Connectivity</h4>
                            <p>Supports HDMI, DisplayPort, Wi-Fi, and LAN for seamless integration with any media source or
                                IT
                                environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Industries Served -->
        <section class="py-80">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold">Built for Every Vertical</h2>
                    <p class="text-muted">Our commercial displays are optimized for specific industry needs.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="industry-card">
                            <h5 class="fw-bold text-orange">Retail & QSR</h5>
                            <p>Digital menu boards and window signage to drive footfall and impulse purchases.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="industry-card">
                            <h5 class="fw-bold text-orange">Corporate & BFSI</h5>
                            <p>Lobby branding, meeting room schedulers, and real-time financial data dashboards.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="industry-card">
                            <h5 class="fw-bold text-orange">Healthcare</h5>
                            <p>Wayfinding kiosks and informative displays to improve patient experience and flow.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-primary-custom text-white">
            <div class="container text-center">
                <h2 class="display-5 fw-bold mb-4">Ready to Modernize Your Communication?</h2>
                <p class="lead mb-5 max-w-800 mx-auto text-white">Join 500+ brands that trust Brand Signages for premium
                    display
                    technology. Request a site survey or a virtual demo today.</p>
                <a href="https://brandsignages.com/contact-us">
                    <button class="btn btn-light btn-lg px-5 py-3 fw-bold text-orange">Request a Quote</button>
                </a>
            </div>
        </section>

        <section class="other-cities-section py-80">
            <div class="container">
                <h2 class="mb-5 why-text-heading">Serving Digital Signs Across India</h2>
                <div class="other-cities-wrapper d-flex gap-4 justify-content-between flex-wrap">
                    <div class="other-cities-card flex-fill">
                        <a href="https://brandsignages.com/stainless-steel-sign-board-manufacturer-mumbai"
                            class="text-decoration-none">
                            <div class="other-cities-img">
                                <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}"
                                    alt="Commercial Displays Mumbai">
                                <div class="other-cities-overlay"></div>
                                <p class="other-cities-title">Mumbai</p>
                            </div>
                        </a>
                    </div>
                    <div class="other-cities-card flex-fill">
                        <a href="https://brandsignages.com/metal-and-stainless-steel-sign-boards-in-chennai"
                            class="text-decoration-none">
                            <div class="other-cities-img">
                                <img src="{{ asset('frontend/Images/new/Chennai.webp') }}"
                                    alt="Commercial Displays Chennai">
                                <div class="other-cities-overlay"></div>
                                <p class="other-cities-title">Chennai</p>
                            </div>
                        </a>
                    </div>
                    <div class="other-cities-card flex-fill">
                        <a href="https://brandsignages.com/steel-signage-manufacturer-bangalore"
                            class="text-decoration-none">
                            <div class="other-cities-img">
                                <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}"
                                    alt="Commercial Displays Bangalore">
                                <div class="other-cities-overlay"></div>
                                <p class="other-cities-title">Bangalore</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-section">
            <div class="faq-container">
                <h2 class="faq-title">Frequently Asked Questions</h2>

                <div class="faq-item">
                    <button class="faq-question">
                        What makes a Commercial Display different from a standard TV?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Commercial displays are engineered for long-duration use (16/7 or 24/7), feature higher
                            brightness
                            (350-3000 nits), and contain industrial-grade cooling systems. Unlike standard TVs, they also
                            come
                            with landscape/portrait flexibility and lack distracting "smart TV" broadcast tuners, focusing
                            on
                            professional connectivity.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Can I manage my screens remotely from a different city?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes. Our commercial displays come with integrated CMS (Content Management System) compatibility.
                            You
                            can login to our web-based dashboard from anywhere and push images, videos, or real-time ticker
                            data
                            to one or thousands of screens instantly.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Are these displays sunlight-readable?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>For window-facing or outdoor displays, we provide "Ultra-High Brightness" models with 2000 to
                            3000
                            nits. These are specifically designed to remain visible even under direct sunlight, featuring
                            anti-reflective glass and thermal management.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Do you provide installation and on-site support?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Absolutely. We offer PAN-India installation services. Our team handles everything from
                            wall-mounting
                            and structure fabrication to cabling and CMS software training. We also provide on-site warranty
                            support.</p>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
