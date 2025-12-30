@extends('frontend.layout.appLayout')
@section('content')
    <div class="commercial-display">
        <section class="hero-banner "
            style="background-image: url('{{ asset('frontend/Images/digital-signages-banner.webp') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1 class="hero-banner_title">Flat Panel Displays for Clear, <br>Professional Communication</h1>
                        <p class="fs-5 mb-4">Brand Signages designs and manufactures commercial-grade flat panel displays that deliver crisp visuals and 
                            consistent performance. Unlike consumer TVs, our flat panel displays are built for reliable, 
                            long-hour operation, offering sharp image quality and clean presentation.
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

                    <a href="/flat-panel-display" class="seo-marquee-item">Commercial Flat Panel</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/flat-panel-display" class="seo-marquee-item">Industrial Display Panel</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/flat-panel-display" class="seo-marquee-item">Ultra HD Display</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/flat-panel-display" class="seo-marquee-item">Indoor Display Panel</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/flat-panel-display" class="seo-marquee-item">Commercial LED Display</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/flat-panel-display" class="seo-marquee-item">Wall Mounted Display</a>
                    <span class="seo-marquee-sep">*</span>

                    <!-- duplicate for seamless loop -->
                    <a href="/flat-panel-display" class="seo-marquee-item">Commercial Flat Panel</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/flat-panel-display" class="seo-marquee-item">Industrial Display Panel</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/flat-panel-display" class="seo-marquee-item">Ultra HD Display</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/flat-panel-display" class="seo-marquee-item">Indoor Display Panel</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/flat-panel-display" class="seo-marquee-item">Commercial LED Display</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/flat-panel-display" class="seo-marquee-item">Wall Mounted Display</a>
                    <span class="seo-marquee-sep">*</span>

                </div>
            </div>
        </section>


<section class="py-80">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 why-text-heading">Flat Panel Displays for Clear, <br>Consistent Visual Communication</h2>
            <p class="lead text-muted max-w-800 mx-auto">
                Designed for professional environments, commercial flat panel displays offer high brightness, durable panels, and 24/7 operation. They
                 are ideal for digital signage, corporate communications, retail promotions, and public information displays where reliability and consistent
                  performance are essential.
            </p>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{ asset('frontend/Images/home/digital-standee-1.webp') }}"
                            alt="Interactive Touch Panels" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Interactive Displays</h5>
                            <p class="text-content">Interactive flat panel displays feature built-in touch technology that enables user interaction, 
                                collaboration, and real-time engagement. Commonly used in meeting rooms, classrooms, and training centers, they support 
                                presentations, annotations, video conferencing, and collaborative workflows.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="image-container position-relative">
                        <img src="{{ asset('frontend/Images/home/digital-standee-4.webp') }}"
                            alt="Smart Digital Signage" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Ultra HD Displays</h5>
                            <p class="text-content">Ultra HD flat panel displays deliver exceptional image clarity with 4K or higher resolution. These
                                 displays are suited for control rooms, boardrooms, luxury retail, and brand-focused environments where detailed visuals,
                                  sharp text, and premium presentation quality are critical.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="image-container position-relative">
                        <img src="{{ asset('frontend/Images/home/digital-standee-1.webp') }}"
                            alt="Vertical Digital Standees" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Interactive Video Walls</h5>
                            <p class="text-content">Built for engagement, these video walls combine touch or gesture-based interactivity with large-format 
                                visuals. Ideal for showrooms, museums, and experiential marketing spaces, they let users explore content, interact with 
                                applications, and immerse themselves in brand storytelling.
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
                <h2 class="solutions-heading">Industry-Specific Flat Panel<br>Display Solutions</h2>

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
                                    Flat panel displays in retail environments deliver sharp, high-brightness visuals for promotions, product
                                     highlights, and in-store communication. Installed as wall-mounted or freestanding units, they help brands attract
                                      attention, update offers instantly, and maintain consistent messaging across multiple store locations.
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
                                    For corporate offices, flat panel displays support professional communication through digital dashboards, internal 
                                    announcements, meeting room displays, and brand presentations. Designed for continuous use, they enhance workplace 
                                    communication while maintaining a clean, modern office aesthetic.
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
                                    Flat panel displays in hotels and hospitality spaces improve guest experience by showcasing welcome messages, 
                                    wayfinding information, service details, and promotional content. Their slim design and premium finish integrate
                                     seamlessly into lobbies, corridors, conference areas, and guest-facing zones.
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
                                    At events and exhibitions, flat panel displays provide flexible visual communication for brand messaging, product
                                     information, and real-time updates. Easy to install and reposition, they are ideal for temporary setups where clarity, 
                                     reliability, and visual impact are essential.
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
                <h2 class="text-center hero-title mb-5">Engineering Precision in Every <br>Flat Panel Displays</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>24/7 Stability</h4>
                            <p>Built for continuous operation, our flat panel displays feature industrial-grade components and advanced thermal management
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
                            <p>Equipped with HDMI, DisplayPort, Wi-Fi, and LAN, our video wall displays integrate seamlessly with software platforms, networks, and IT infrastructures,
                                 making deployment and maintenance hassle-free while supporting dynamic interactive content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-80">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="text-center hero-title mb-5">We are a Trusted<br>Digital Signage Manufacturers</h2>
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
                        What is the difference between a flat panel display and a regular TV?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Flat panel displays are built for commercial use, offering higher brightness, longer operating hours, and
                             better heat management than standard TVs. They are designed to run continuously in business environments 
                             without performance degradation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Where can flat panel displays be used effectively?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Flat panel displays are suitable for retail stores, corporate offices, hotels, events, exhibitions, and public
                             spaces. Their slim design and flexible mounting options make them ideal for both permanent installations
                              and temporary setups.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Can flat panel displays operate for long hours daily?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, commercial flat panel displays are engineered for extended usage, often supporting 16/7 or 24/7 operation. 
                            This makes them reliable for environments that require uninterrupted visual communication.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Do flat panel displays support centralized content management?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Flat panel displays can be integrated with content management systems that allow businesses to update and control
                             content remotely across single or multiple locations, ensuring consistent and timely messaging.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Are installation and on-site support available?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes. Flat panel display solutions typically include professional installation, calibration, and on-site 
                            support to ensure optimal performance, proper mounting, and long-term reliability.</p>
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
