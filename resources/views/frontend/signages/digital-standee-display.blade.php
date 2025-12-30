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

        <section class="solutions-tailored-section">
            <div class="container">
                <h2 class="solutions-heading">Industry-Specific Digital Standee Solutions</h2>

                <!-- Tab Navigation -->
                <div class="solutions-tabs">
                    <button class="solution-tab active" data-tab="shopping-mall">Retail & Shopping Malls</button>
                    <button class="solution-tab" data-tab="enterprise">Corporate & Enterprises</button>
                    <button class="solution-tab" data-tab="classroom">Hospitality & Hotels</button>
                    <button class="solution-tab" data-tab="command-center">Events & Exhibitions</button>
                </div>

                <!-- Tab Content -->
                <div class="solutions-content">
                    <!-- Shopping Mall Tab -->
                    <div class="solution-panel active" id="shopping-mall">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/home/standee-1.webp') }}"
                                alt="Shopiing Mall and Retail Shop Digital Standee Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Our digital standees for retail stores and shopping malls are designed to capture attention in high-traffic 
                                    environments. With bright visuals and dynamic content, they highlight products, offers, and brand stories in
                                     a compelling way.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Enterprise Tab -->
                    <div class="solution-panel" id="enterprise">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/home/standee-3.webp') }}"
                                alt="Enterprise Display Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Digital standees in corporate offices display announcements, updates, and brand messaging clearly in reception and 
                                    common areas, ensuring consistent communication in a professional environment.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Classroom Hub Tab -->
                    <div class="solution-panel" id="classroom">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/home/standee-2.webp') }}"
                                alt="Hotel and Restaurant Digital Standee Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Digital standees for hotels and restaurants showcase menus, offers, and guest information with visually engaging 
                                    content. They enhance guest experience by delivering timely updates, promotions, and directions in a clear, modern format.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Command Center Tab -->
                    <div class="solution-panel" id="command-center">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/home/standee-4.webp') }}"
                                alt="Digital Standee for Events and Exhibitions" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Digital standees for events and exhibitions attract attention, display schedules, promotions, and brand messaging, and help 
                                    guide visitors efficiently. They support real-time updates and create an engaging experience across booths and venues.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Key Benefits Section -->
        <section class="py-80 bg-light">
            <div class="container">
                <h2 class="text-center hero-title mb-5">Engineering Excellence in Every Digital Standee</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>24/7 Stability</h4>
                            <p>Built for round-the-clock performance, our digital standees feature advanced thermal management and industrial-grade components 
                                that prevent screen burn-in and overheating, ensuring reliable operations.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>Ultra HD Impact</h4>
                            <p>Powered by 4K IPS displays with wide viewing angles, the digital standee delivers sharp, vibrant visuals that remain clear
                                 and engaging from every direction, perfect for high-traffic spaces.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>Centralized Control</h4>
                            <p>Manage and update content across multiple digital standees effortlessly from a single, cloud-based CMS dashboard. Schedule 
                                campaigns, push real-time updates, and maintain brand consistency.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>Smart & Flexible Connectivity</h4>
                            <p>Equipped with HDMI, DisplayPort, Wi-Fi, and LAN support, the digital standee integrates seamlessly with various media 
                                players, networks, and IT infrastructures for hassle-free deployment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-80">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="text-center hero-title mb-5">We are a Trusted<br>Digital Standee Manufacturers</h2>
                    <p class="text-muted">Brand Signages offers advanced digital standee solutions that combine sleek design with high-impact visuals. Perfect for 
                        retail spaces, events, and corporate environments, our digital standees display dynamic content, promotions, and announcements in real time.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="industry-card">
                            <div class="industry-icon">
                                <i class="fa-solid fa-anchor"></i>
                            </div>
                            <h5 class="fw-bold text-orange">Trusted Manufacturers</h5>
                            <p>As one of the top commercial display brands, we deliver reliable, high-quality display solutions trusted by businesses across industries.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="industry-card">
                            <div class="industry-icon">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <h5 class="fw-bold text-orange">Display Technology Experts</h5>
                            <p>Our team specializes in professional display solutions, offering innovative enterprise display systems tailored to enhance operational efficiency.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="industry-card">
                            <div class="industry-icon">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                            <h5 class="fw-bold text-orange">Industry-Leading Solutions</h5>
                            <p>Recognized as a global display supplier and display industry leader, we provide cutting-edge technology and support for seamless business interactions.</p>
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

        <section class="other-cities-section py-5">
            <div class="container">
                <h2 class="my-5">Serving PAN India Location</h2>
                <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
                    <div class="other-cities-card">
                        <a href="https://brandsignages.com/digital-signages-manufacturer-in-mumbai" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Sign Boards in Mumbai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Mumbai</p>
                        </div>
                    </a>
                    </div>
                    <div class="other-cities-card">
                        <a href="https://brandsignages.com/leading-digital-signage-in-chennai" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Sign Boards in Chennai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Chennai</p>
                        </div>
                        </a>
                    </div>
                    <div class="other-cities-card">
                        <a href="https://brandsignages.com/digital-signage-company-bangalore" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="Sign Boards in Bangalore">
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
                        What type of content can be displayed on a digital standee?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Digital standees support images, videos, slideshows, menus, promotions, and real-time updates,
                             making them ideal for dynamic communication across different environments.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Is the digital standee suitable for continuous daily operation?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, digital standees are built for extended usage and can run for long hours daily, making 
                            them reliable for retail, hospitality, corporate, and public spaces.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Can content be updated instantly when campaigns change?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Content can be updated quickly, allowing businesses to switch promotions, announcements,
                             or information without reprinting or manual effort.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Do digital standees support both indoor and semi-outdoor environments?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Digital standees are available in configurations suitable for indoor use and controlled 
                            outdoor or semi-outdoor locations, depending on brightness and enclosure type.</p>
                    </div>
                </div>

            </div>
        </section>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.solution-tab');
            const panels = document.querySelectorAll('.solution-panel');

            if (tabs.length === 0) return;

            tabs.forEach((tab, index) => {
                tab.addEventListener('click', function() {
                    // Update tabs
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');

                    // Update panels
                    panels.forEach(p => p.classList.remove('active'));

                    const targetId = this.getAttribute('data-tab');
                    const targetPanel = document.getElementById(targetId);

                    if (targetPanel) {
                        // Small timeout to trigger CSS animations if any
                        setTimeout(() => {
                            targetPanel.classList.add('active');
                        }, 50);
                    }
                });
            });
        });
    </script>
@endsection
