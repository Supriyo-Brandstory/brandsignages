@extends('frontend.layout.appLayout')
@section('content')
    <div class="commercial-display">
        <section class="hero-banner "
            style="background-image: url('{{ asset('frontend/Images/digital-signages-banner.webp') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1 class="hero-banner_title">Advanced Commercial Display <br>and Business Display Solutions</h1>
                        <p class="fs-5 mb-4">Brand Signages is India's leading manufacturer of commercial-grade digital
                            displays.<br> We deliver high-brightness, 24/7 reliable UHD screens for retail, corporate, and public spaces.
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

            <a href="/commercial-display" class="seo-marquee-item">Commercial Display</a>
            <span class="seo-marquee-sep">*</span>

            <a href="/touch-screen-kiosk" class="seo-marquee-item">Touch Screen Kiosk</a>
            <span class="seo-marquee-sep">*</span>

            <a href="/digital-standee-display" class="seo-marquee-item">Digital Standee</a>
            <span class="seo-marquee-sep">*</span>

            <a href="/display-video-wall" class="seo-marquee-item">Video Wall Display</a>
            <span class="seo-marquee-sep">*</span>

            <a href="/outdoor-signage-display" class="seo-marquee-item">Outdoor Signage Display</a>
            <span class="seo-marquee-sep">*</span>

            <a href="/flat-panel-display" class="seo-marquee-item">Flat Panel Display</a>
            <span class="seo-marquee-sep">*</span>

            <!-- duplicate for seamless loop -->
            <a href="/commercial-display" class="seo-marquee-item">Commercial Display</a>
            <span class="seo-marquee-sep">*</span>

            <a href="/touch-screen-kiosk" class="seo-marquee-item">Touch Screen Kiosk</a>
            <span class="seo-marquee-sep">*</span>

            <a href="/digital-standee-display" class="seo-marquee-item">Digital Standee</a>
            <span class="seo-marquee-sep">*</span>

            <a href="/display-video-wall" class="seo-marquee-item">Video Wall Display</a>
            <span class="seo-marquee-sep">*</span>

            <a href="/outdoor-signage-display" class="seo-marquee-item">Outdoor Signage Display</a>
            <span class="seo-marquee-sep">*</span>

            <a href="/flat-panel-display" class="seo-marquee-item">Flat Panel Display</a>
            <span class="seo-marquee-sep">*</span>

        </div>
    </div>
</section>

        <!--<section class="new_custom-stats-section">
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
        </section>-->

        <section class="py-80 product-highlights-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="hero-title text-white mb-3">Premium Commercial Display Solutions</h2>
                    <p class="text-white fs-5">Discover advanced commercial display solutions crafted for diverse industry needs. Our products include
                         industry-specific display solutions, business displays, and specialized commercial screens engineered for clarity, durability, and
                          performance. With expertise in vertical market digital signage, we provide custom display integrations that fit seamlessly into 
                          business environments, enhancing visual and operational efficiency.</p>
                </div>

                <div class="row g-4">
                    <!-- LED Displays -->
                    <div class="col-lg-4 col-md-4">
                        <a href="https://brandsignages.com/commercial-display">
                        <div class="product-highlight-card">
                            <div class="product-highlight-content">
                                <h3 class="product-highlight-title">Display Video Wall</h3>
                            </div>
                            <div class="product-highlight-img-wrapper">
                                <img src="{{ asset('frontend/Images/digital-display-1.webp') }}"
                                    alt="LED Displays" class="product-highlight-img">
                            </div>

                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 ">
                        <a href="https://brandsignages.com/flat-panel-display">
                        <div class="product-highlight-card">
                            <div class="product-highlight-content">
                                <h3 class="product-highlight-title">LED Interactive Display</h3>
                            </div>
                            <div class="product-highlight-img-wrapper">
                                <img src="{{ asset('frontend/Images/digital-display-2.webp') }}"
                                    alt="WonderHub Interactive Display" class="product-highlight-img">
                            </div>

                        </div>
                        </a>
                    </div>

                    <!-- WonderHub Interactive Display -->
                    <div class="col-lg-4 col-md-4 d-flex gap-4 flex-column justify-content-between">
                        <a href="https://brandsignages.com/digital-standee-display">
                        <div class="product-highlight-card">
                            <div class="product-highlight-content">
                                <h3 class="product-highlight-title">Digital Standee</h3>
                            </div>
                            <div class="product-highlight-img-wrapper">
                                <img src="{{ asset('frontend/Images/digital-display-4.webp') }}"
                                    alt="Digital Signage" class="product-highlight-img">
                            </div>

                        </div>
                        </a>
                        <a href="https://brandsignages.com/touch-screen-kiosk">
                        <div class="product-highlight-card">
                            <div class="product-highlight-content">
                                <h3 class="product-highlight-title">Touch Screen Kiosk</h3>
                            </div>
                            <div class="product-highlight-img-wrapper">
                                <img src="{{ asset('frontend/Images/digital-display-3.webp') }}"
                                    alt="LCD Displays" class="product-highlight-img">
                            </div>

                        </div>
                        </a>
                    </div>



                    <!-- LCD Displays -->

                </div>
            </div>
        </section>

        <!-- Solutions Tailored Section -->

        <section class="solutions-tailored-section">
            <div class="container">
                <h2 class="solutions-heading">Industry-Specific Commercial Display Solutions</h2>

                <!-- Tab Navigation -->
                <div class="solutions-tabs">
                    <button class="solution-tab active" data-tab="shopping-mall">Retail Shops</button>
                    <button class="solution-tab" data-tab="enterprise">Enterprises</button>
                    <button class="solution-tab" data-tab="classroom">Classrooms</button>
                    <button class="solution-tab" data-tab="command-center">Healthcare</button>
                </div>

                <!-- Tab Content -->
                <div class="solutions-content">
                    <!-- Shopping Mall Tab -->
                    <div class="solution-panel active" id="shopping-mall">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/digital-display-shopping-mall.webp') }}"
                                alt="Shopiing Mall and Retail Shop Digital Display Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Our commercial displays for retail shops enhance customer engagement with vibrant visuals and interactive content. Designed
                                     for high footfall areas, they showcase products, promotions, and brand messages effectively, driving sales and improving
                                      the shopping experience.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Enterprise Tab -->
                    <div class="solution-panel" id="enterprise">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/digital-display-corporate-office.webp') }}"
                                alt="Enterprise Display Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Elevate your enterprise with smart commercial displays designed for corporate office presentations, team collaboration, and seamless communication
                                     across departments, enhancing productivity and workplace efficiency.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Classroom Hub Tab -->
                    <div class="solution-panel" id="classroom">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/digital-display-calssroom.webp') }}"
                                alt="Classroom Hub Display Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Interactive displays designed for modern classrooms, enhancing engagement and participation. 
                                    Smart solutions enable collaborative learning and support seamless digital transformation.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Command Center Tab -->
                    <div class="solution-panel" id="command-center">
                        <div class="solution-card">
                            <img src="{{ asset('frontend/Images/digital-display-medical.webp') }}"
                                alt="Command Center Display Solution" class="solution-img">
                            <div class="solution-overlay">
                                <p class="solution-description">
                                    Interactive displays for healthcare facilities streamline patient check-ins and provide clear information. 
                                    Smart kiosks enhance workflow, support appointment management, and improve overall patient experience.
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
                <h2 class="text-center hero-title mb-5">Engineering Excellence in Every Panel</h2>
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
                    <h2 class="text-center hero-title mb-5">Discover Our Expertise as <br>Commercial Display Manufacturers</h2>
                    <p class="text-muted">At Brand Signages, we combine innovation, quality, and industry knowledge to deliver professional display solutions. Trusted by 
                        businesses across Bangalore and India, we help businesses transform spaces with cutting-edge enterprise display systems.</p>
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
                <h2 class="hero-title mb-4 text-white">Ready to Modernize Your Communication?</h2>
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
                        What makes a commercial display different from a standard TV?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Commercial displays are purpose-built for 16/7 or 24/7 operation, deliver significantly higher brightness
                             (350–3000 nits), and use industrial-grade thermal management. They support portrait and landscape orientation,
                              professional I/O connectivity, and exclude consumer broadcast tuners ensuring reliability, control, and 
                              uninterrupted business use.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        What services do you provide as commercial display manufacturers?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>As commercial display manufacturers, we design, build, and deploy complete display solutions, not just screens. 
                            This includes custom enclosure design, hardware and software integration, installation support, and ongoing lifecycle
                             management to ensure long-term performance in real business environments.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        How do I identify a trusted commercial display supplier?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>A trusted supplier demonstrates proven deployment scale, commercial-grade certifications, transparent technical 
                            specifications, consistent panel sourcing, and structured post-installation support rather than focusing on short-term 
                            pricing alone.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Are commercial displays suitable for large-scale and multi-location deployments?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes. Commercial displays are designed for centralized content control, remote diagnostics, and uniform performance, 
                            making them ideal for enterprises managing multiple sites or nationwide networks.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        What future technologies are shaping the commercial display industry?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>The industry is advancing toward microLED panels, AI-driven content optimization, IoT-connected displays, 
                            energy-efficient manufacturing, and purpose-built screens for smart cities and enterprise ecosystems.</p>
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
