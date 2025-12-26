@extends('frontend.layout.appLayout')
@section('content')
    <div class="commercial-display">
        <section class="hero-banner "
            style="background-image: url('{{ asset('frontend/Images/digital-signages-banner.webp') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1 class="hero-banner_title">Elite Commercial Display <br>Solutions for Modern Brands</h1>
                        <p class="fs-5 mb-4">Brand Signages is India's leading manufacturer of commercial-grade digital
                            displays.
                            <br>
                            We deliver high-brightness, 24/7 reliable UHD screens for retail, corporate, and public spaces.
                        </p>
                        <a href="https://brandsignages.com/contact-us">
                            <button class="contact-btn">Get a Technical Quote</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="new_custom-stats-section">
            <div class="container">
                <div class="row text-center text-white">
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <h2 class="new_custom-stats-number">12+</h2>
                        <p class="new_custom-stats-label">Years of Innovation</p>
                    </div>
                    <div class="col-12 col-md-4 mb-4 mb-md-0 position-relative">
                        <div class="new_custom-divider-left d-none d-md-block"></div>
                        <h2 class="new_custom-stats-number">15,000+</h2>
                        <p class="new_custom-stats-label">Screens Deployed</p>
                        <div class="new_custom-divider-right d-none d-md-block"></div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h2 class="new_custom-stats-number">500+</h2>
                        <p class="new_custom-stats-label">Enterprise Clients</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="We-Elevate-Brands-section py-80">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="We-Elevate-Brands-heading fw-bold">Explore Commercial-Grade Digital Signages <br>with Inbuilt
                        Smart Software</h2>
                </div>

                <div class="position-relative">
                    <div class="swiper We-Elevate-Brands-swiper pt-60">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="card We-Elevate-Brands-card ">
                                    <img src="{{ asset('frontend/Images/home/commercial-display.webp') }}"
                                        class="card-img-center" alt="Commercial Display">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="#">Commercial Display</a></h5>
                                        <p class="We-Elevate-Brands-text">High-brightness commercial displays, Full HD
                                            clarity to Ultra HD brilliance, available in screens size as 98-inch, perfect
                                            for dynamic digital signage, delivering vibrant visuals and experiences.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card We-Elevate-Brands-card ">
                                    <img src="{{ asset('frontend/Images/home/corporate-digital-signage.webp') }}"
                                        class="card-img-center" alt="Metal Signage">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="#">Touch Screen Kiosk</a></h5>
                                        <p class="We-Elevate-Brands-text">Engage customers with touch-screen kiosk. Sleek
                                            rectangular frame, this interactive kiosk functions as an intuitive input
                                            device. Like a smartphone, it runs CMS software, providing real-time assistance
                                            and information.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card We-Elevate-Brands-card ">
                                    <img src="{{ asset('frontend/Images/home/digital-signage2.webp') }}"
                                        class="card-img-center" alt="Digital Standee Display">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="#">Digital Standee Display</a>
                                        </h5>
                                        <p class="We-Elevate-Brands-text">Our digital standees feature customizable colors
                                            and branding, offering commercial-grade displays in India. Enjoy an immersive
                                            viewing experience with crisp visuals, superior audio, and high-quality video
                                            wall performance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card We-Elevate-Brands-card ">
                                    <img src="{{ asset('frontend/Images/home/video-walls.webp') }}" class="card-img-center"
                                        alt="Digital Video Walls">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="#">Display Video Wall</a></h5>
                                        <p class="We-Elevate-Brands-text">Showcase your products and services with our
                                            high-brightness video walls, available in 26” and 55” screens. Designed for
                                            commercial
                                            impact, these walls deliver stunning visuals and immersive experiences. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card We-Elevate-Brands-card ">
                                    <img src="{{ asset('frontend/Images/home/outdoor-sign.webp') }}" class="card-img-center"
                                        alt="Outdoor Signage Display">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="#">Outdoor Signage Display</a>
                                        </h5>
                                        <p class="We-Elevate-Brands-text">Experience durable, all-weather signage built for
                                            maximum visibility and impact. We provide premium outdoor and indoor display
                                            boards, including
                                            digital notice boards, successfully deployed across India’s major cities. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card We-Elevate-Brands-card ">
                                    <img src="{{ asset('frontend/Images/home/flat-panel-display.webp') }}"
                                        class="card-img-center" alt="Flat Panel Display">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a href="#">Flat Panel Display</a></h5>
                                        <p class="We-Elevate-Brands-text">Enhance engagement with our Interactive Flat Panel
                                            Display, featuring cutting-edge visuals and advanced touch technology. Comes
                                            with integrated
                                            digital signage software, delivering complete, seamless signage solutions.</p>
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

                <div class="text-center mt-4">
                    <a href="contact-us" class="btn-we-elevate">Book a Demo Call</a>
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
