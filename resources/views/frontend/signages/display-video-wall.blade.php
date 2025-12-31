@extends('frontend.layout.appLayout')
@section('content')
    <div class="commercial-display">
        <section class="hero-banner "
            style="background-image: url('{{ asset('frontend/Images/home/video-wall-1.webp') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1 class="hero-banner_title">Video Wall Displays for <br>Maximum Visual Impact</h1>
                        <p class="fs-5 mb-4">Brand Signages designs and manufactures high-resolution video wall displays that transform any space into
                             an immersive visual experience. Unlike standard screens, our video walls are built to deliver seamless, large-scale visuals
                              that capture attention, communicate messages effectively.
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

                    <a href="/display-video-wall" class="seo-marquee-item">LED Video Wall</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/display-video-wall" class="seo-marquee-item">Large Format Display</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/display-video-wall" class="seo-marquee-item">Ultra HD Video Wall</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/display-video-wall" class="seo-marquee-item">Indoor Video Wall</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/display-video-wall" class="seo-marquee-item">Outdoor Video Wall</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/display-video-wall" class="seo-marquee-item">Modular Video Wall</a>
                    <span class="seo-marquee-sep">*</span>

                    <!-- duplicate for seamless loop -->
                    <a href="/display-video-wall" class="seo-marquee-item">LED Video Wall</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/display-video-wall" class="seo-marquee-item">Large Format Display</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/display-video-wall" class="seo-marquee-item">Ultra HD Video Wall</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/display-video-wall" class="seo-marquee-item">Indoor Video Wall</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/display-video-wall" class="seo-marquee-item">Outdoor Video Wall</a>
                    <span class="seo-marquee-sep">*</span>

                    <a href="/display-video-wall" class="seo-marquee-item">Modular Video Wall</a>
                    <span class="seo-marquee-sep">*</span>

                </div>
            </div>
        </section>


<section class="py-80">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 why-text-heading">Immersive Video Wall Displays<br> for Maximum Impact</h2>
            <p class="lead text-muted max-w-800 mx-auto">
                Transform spaces with high-resolution video wall displays designed to deliver large-scale, seamless visuals that 
                capture attention and convey messages effectively. Built for continuous operation, these displays combine ultra HD 
                panels, modular design, and reliable hardware to support advertising, information broadcasting, brand storytelling,
                 and real-time content.
            </p>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{ asset('frontend/Images/home/video-wall-2.webp') }}"
                            alt="Interactive Touch Panels" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">LED Video Walls</h5>
                            <p class="text-content">Our LED video walls deliver bright, seamless visuals ideal for high-traffic environments.
                                 Perfect for retail spaces, corporate lobbies, and public areas, they showcase advertisements, brand messaging,
                                  and dynamic content with unmatched clarity and impact.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{ asset('frontend/Images/home/video-wall-3.webp') }}"
                            alt="Smart Digital Signage" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Modular Video Walls</h5>
                            <p class="text-content">These video walls feature customizable panels that can be arranged in any size or configuration.
                                 Designed for flexibility, they allow businesses to create large-scale displays for exhibitions, events, control
                                  rooms, or corporate presentations, while maintaining uniform image quality.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{ asset('frontend/Images/home/video-wall-4.webp') }}"
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
                <h2 class="solutions-heading">Industry-Specific Video Wall <br>Display Solutions</h2>

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
                            <img src="{{ asset('frontend/Images/home/video-wall-5.webp') }}"
                                alt="Shopiing Mall and Retail Shop Digital Standee Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Our video wall displays for retail stores and shopping malls are designed to capture attention 
                                    in high-traffic areas. With large-format, high-resolution visuals and dynamic content, they showcase products,
                                     promotions, and brand messaging in a compelling, immersive way that enhances the in-store experience.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Enterprise Tab -->
                    <div class="solution-panel" id="enterprise">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/home/video-wall-6.webp') }}"
                                alt="Enterprise Display Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Video wall displays for corporate offices and enterprises enhance internal communication and brand presence at scale.
                                     They are ideal for showcasing corporate messaging, performance dashboards, announcements, and visual storytelling in 
                                     lobbies, boardrooms, and common areas, creating a professional and impactful environment.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Classroom Hub Tab -->
                    <div class="solution-panel" id="classroom">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/home/video-wall-7.webp') }}"
                                alt="Hotel and Restaurant Digital Standee Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Video wall displays for healthcare facilities enhance communication in waiting areas and lobbies by presenting clear, large-format
                                     information. They are ideal for displaying health awareness content, appointment updates, wayfinding guidance, and important announcements,
                                      helping improve patient experience while supporting efficient information flow.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Command Center Tab -->
                    <div class="solution-panel" id="command-center">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/home/video-wall-8.webp') }}"
                                alt="Digital Standee for Events and Exhibitions" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Video wall displays for events and exhibitions create powerful visual experiences that draw attention and elevate brand presence. They are ideal for
                                     live feeds, product showcases, motion graphics, and immersive brand storytelling, helping captivate audiences and leave a strong, lasting impression.
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
                <h2 class="text-center hero-title mb-5">Engineering Precision in Every <br>Video Wall Displays</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="benefit-card">
                            <h4>24/7 Stability</h4>
                            <p>Built for continuous operation, our video wall displays feature industrial-grade components and advanced thermal management
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
                        What is a video wall display used for?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Video wall displays are used to present large-scale, high-impact visuals for advertising, brand communication,
                             information broadcasting, and live content. They are commonly installed in retail spaces, corporate offices, 
                             hospitality venues, healthcare facilities, events, and public areas.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Can video wall displays operate continuously?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, commercial-grade video wall displays are designed for 24/7 operation, using industrial-quality panels and
                             thermal management systems to ensure stable performance in high-traffic environments.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Are video walls customisable in size and layout?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Absolutely, video walls are built using modular panels, allowing custom configurations in size, shape, and orientation
                             to suit different spaces and viewing requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        How is content managed on a video wall?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Content can be managed through a centralised control system or CMS, enabling remote updates, scheduling, and real-time 
                            content playback across single or multiple video wall installations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Where are video wall displays most effective?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Video wall displays are highly effective in retail stores, corporate lobbies, hotels, hospitals, control rooms, events, 
                            and exhibitions, where large-format visuals are needed to capture attention and communicate information clearly.</p>
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
