@extends('frontend.layout.appLayout')
@section('content')
    <div class="commercial-display">
        <section class="hero-banner "
            style="background-image: url('{{ asset('frontend/Images/home/touch-screen-kiosk-1.webp') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1 class="hero-banner_title">Touch Screen Kiosks for <br>Smarter User Engagement</h1>
                        <p class="fs-5 mb-4">Brand Signages designs and manufactures advanced touch screen kiosks that enable self-service, guided navigation, and real-time 
                            interaction. Unlike passive display systems, our kiosks are built to respond, assist, and engage users instantly.
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

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Self Service Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Interactive Touch Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Digital Touch Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Information Display Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Wayfinding Touch Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Commercial Touch Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                    <!-- duplicate for seamless loop -->

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Self Service Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Interactive Touch Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Digital Touch Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Information Display Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Wayfinding Touch Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/touch-screen-kiosk" class="seo-marquee-item">Commercial Touch Kiosk</a>
                    <span class="seo-marquee-sep">*</span>

                </div>
            </div>
        </section>


        <section class="py-80">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 why-text-heading">Intelligent Touch Screen Kiosks for <br>Seamless Self-Service</h2>
                    <p class="lead text-muted max-w-800 mx-auto">
                        Empower customers and visitors with touch screen kiosks designed to simplify interactions and automate information access.
                         Built for continuous operation, these kiosks combine responsive touch technology, durable hardware, and intuitive interfaces
                          to support self-service, navigation, registrations, and digital assistance across retail, corporate, healthcare, and public
                           environments.
                    </p>
                </div>

                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="image-container position-relative">
                                <img src="{{ asset('frontend/Images/home/touch-screen-kiosk-2.webp') }}"
                                    alt="Interactive Touch Panels" class="w-100 h-100">
                                <div class="overlay">
                                    <h5 class="text-title">Self-Service Kiosks</h5>
                                    <p class="text-content">Designed to automate customer interactions, these kiosks enable users to check in, place orders,
                        make payments, or book appointments independently. They help reduce queues, improve efficiency,
                        and minimise manual intervention in high-traffic environments.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="image-container position-relative">
                                <img src="{{ asset('frontend/Images/home/touch-screen-kiosk-3.webp') }}"
                                    alt="Smart Digital Signage" class="w-100 h-100">
                                <div class="overlay">
                                    <h5 class="text-title">Information Wayfinding Kiosks</h5>
                                    <p class="text-content">These touch-enabled kiosks provide interactive directories, maps, and on-demand information to
                        guide visitors efficiently. Commonly used in malls, hospitals, campuses, and corporate offices,
                        they enhance navigation and improve overall visitor experience.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="image-container position-relative">
                                <img src="{{ asset('frontend/Images/home/touch-screen-kiosk-4.webp') }}"
                                    alt="Vertical Digital Standees" class="w-100 h-100">
                                <div class="overlay">
                                    <h5 class="text-title">Interactive Engagement Kiosks</h5>
                                    <p class="text-content">Built for immersive digital experiences, these kiosks support product exploration, brand
                        storytelling, feedback collection, and event engagement—making them ideal for showrooms,
                        exhibitions, museums, and experience centres.
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
                <h2 class="solutions-heading">Industry-Specific Touch Screen Kiosk Solutions</h2>

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
                            <img src="{{ asset('frontend/Images/home/touch-screen-kiosk-5.webp') }}"
                                alt="Shopiing Mall and Retail Shop Digital Standee Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Our touch screen kiosks for retail stores and shopping malls are designed to engage customers in high-traffic areas. With
                                     interactive displays and intuitive navigation, they help shoppers browse products, explore offers, and access store 
                                     information seamlessly.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Enterprise Tab -->
                    <div class="solution-panel" id="enterprise">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/home/touch-screen-kiosk-6.webp') }}"
                                alt="Enterprise Display Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Touch screen kiosks for corporate offices and enterprises streamline visitor management and internal communication. 
                                    They provide interactive directories, meeting room bookings, and information access, enhancing efficiency and professionalism.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Classroom Hub Tab -->
                    <div class="solution-panel" id="classroom">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/home/touch-screen-kiosk-7.webp') }}"
                                alt="Hotel and Restaurant Digital Standee Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Touch screen kiosks for healthcare facilities simplify patient interactions in waiting areas and lobbies. They enable self check-ins,
                                     appointment scheduling, and easy access to facility information, improving patient experience and reducing staff workload.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Command Center Tab -->
                    <div class="solution-panel" id="command-center">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/home/touch-screen-kiosk-8.webp') }}"
                                alt="Digital Standee for Events and Exhibitions" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Touch screen kiosks for events and exhibitions offer interactive brand experiences and visitor engagement. They support wayfinding, feedback
                                     collection, product exploration, and immersive digital storytelling to leave a lasting impression.
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
                <h2 class="text-center hero-title mb-5">Engineering Precision in Every <br>Touch Screen Kiosk</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>24/7 Stability</h4>
                            <p>Built for continuous operation, our touch screen kiosks feature industrial-grade components and advanced thermal management
                                 to prevent overheating and ensure consistent performance in high-traffic environments.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>Ultra HD Impact</h4>
                            <p>With responsive multi-touch screens and high-resolution IPS panels, these kiosks deliver vibrant, sharp visuals from every angle.
                                 Users can navigate menus, explore products, or access information smoothly, creating an interactive experience.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>Centralized Control</h4>
                            <p>Easily manage and update content across multiple kiosks through a single cloud-based dashboard. Schedule campaigns, push real-time
                                 updates, and maintain consistency of interactive applications and information across locations.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>Smart & Flexible Connectivity</h4>
                            <p>Equipped with HDMI, DisplayPort, Wi-Fi, and LAN, our kiosks integrate seamlessly with software platforms, networks, and IT infrastructures,
                                 making deployment and maintenance hassle-free while supporting dynamic interactive content.</p>
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
                        What industries can benefit from touch screen kiosks?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Touch screen kiosks are ideal for retail stores, shopping malls, corporate offices, healthcare facilities, hotels,
                             events, and exhibitions. They streamline interactions, provide self-service options, and enhance user engagement
                              across high-traffic environments.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Can these kiosks operate 24/7?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, our touch screen kiosks are built with industrial-grade components and advanced thermal management, ensuring reliable performance 
                            even during continuous, round-the-clock operation in busy locations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        How is content managed across multiple kiosks?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Content is managed via a cloud-based CMS dashboard, allowing you to update, schedule, and push content to multiple kiosks remotely.
                             This ensures consistency, efficiency, and real-time updates across all locations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Are these kiosks durable for public spaces?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Absolutely, our kiosks are constructed with robust enclosures and high-quality touch panels, making them resistant to frequent use
                             and suitable for public spaces like malls, airports, hospitals, and corporate lobbies.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        What connectivity options do the kiosks support?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>They support HDMI, DisplayPort, Wi-Fi, and LAN connectivity, allowing seamless integration with existing networks, media players,
                             and software platforms for smooth deployment and interactive experiences.</p>
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
