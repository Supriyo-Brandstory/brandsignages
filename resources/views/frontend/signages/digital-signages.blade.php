@extends('frontend.layout.appLayout')
@section('content')

    <style>
        .why-carousel-controls,
        .testimonial-carousel-controls {
            position: absolute;
            top: -34px;
            right: 15px;
            transform: translateY(0);
        }
    </style>

    <section class="hero-banner"
        style="background-image: url('{{ asset('/frontend/Images/digital-signages-banner.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h1 class="hero-banner_title">Best Digital Signage Manufacturers for High-Impact Displays</h1>

                    <a href="https://brandsignages.com/contact-us" class="mt-3 d-block">
                        <button class="contact-btn ">Get Free Quote</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section>
        <div class="container pt-5">
            <h2 class="hero-title">Transform Your Brand Visibility with <br>#1 Digital Signage India</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/digital-signages-banner-1.webp')}}" alt="Digital Signage installed in retail space by Brand Signages"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">

                    <p class="brand-description">
                        Digital signage offers an engaging way to showcase your brand, grabbing attention with vibrant visuals, 
                        dynamic content, and real-time updates. From digital display boards and interactive video walls to sleek 
                        digital standees, modern digital signage displays can enhance customer engagement and create lasting brand 
                        impressions.
                    </p>
                    <p class="brand-description">
                        <a href="https://brandsignages.com/" style="color: #E43D12">Brand Signages</a> is the pioneering digital signage manufacturer, providing inventive and personalized digital
                         signage solutions for organizations. We have full-scale facility for digital signage display manufacturing, 
                         software, and CMS technology experts. We are certified digital signage vendors, offering digital signage 
                         services in pan India.
                    </p>
                    <p>Whether it's a dynamic video wall or a modern floor-standing display board, our digital signage products offer exceptional clarity and reliability. Our expertise is powered by 
                        advanced technology and flexible customization options, tailored to meet the evolving needs of modern businesses.</p>
                    <div class="mt-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bgrowth-slider-section">
        <div class="bgrowth-header">
            <h2>Digital Signage Display Features</h2>

        </div>

        <div class="swiper bgrowth-swiper-2 container">
            <div class="swiper-pagination"></div> <!-- should be inside swiper, before swiper-wrapper -->
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-5 pb-0">
                            <img src="{{ asset('frontend/Images/Smart-Digital-Displays.webp') }}"
                                alt="Smart-Digital-Displays" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-7  d-flex flex-column justify-content-center ">
                            <div class="bgrowth-content ">
                                <h3 class="mb-3">Smart Digital Displays</h3>
                                <p>
                                    <b>Built-In Playback:</b> Operates smoothly without the need for external media players.
                                </p>
                                <p><b>Remote Control:</b> Easily control, update, or reboot displays from any location.</p>
                                <p><b>Wide Compatibility:</b> Compatible with Android, LG webOS, Samsung Tizen, and Windows.</p>
                                <p class=""><b>Easy Scheduling:</b> Effortlessly schedule playlists, media content, and campaigns.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-6 pb-0">
                            <img src="{{ asset('frontend/Images/smart-digital-Specifications.webp') }}"
                                alt="smart-digital-Specifications" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                            <div class="bgrowth-content">
                                <h3 class="mb-3">Specifications</h3>
                                <p><b>Display Type:</b> LED / OLED / E-Ink (Customizable)</p>
                                <p><b>Body Material:</b> Aluminum, acrylic, Polycarbonate, Glass</p>
                                <p><b>Lighting Type:</b> LED / Backlit LCD for superior brightness</p>
                                <p><b>Available Sizes:</b> 15-inch, 18-inch, 24-inch, 32-inch, 55-inch</p>
                                <p><b>Shape Options:</b> Rectangle, Square, Curved, Ultra-Wide</p>
                                <p><b>Viewing Angle:</b> 178° - 270° for maximum visibility</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-6 pb-0">
                            <img src="{{ asset('frontend/Images/smar-digital-Installation-Support.webp') }}"
                                alt="Digital Signage Installation and Support" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-6  d-flex flex-column justify-content-center ">
                            <div class="bgrowth-content">
                                <h3 class="mb-3">Installation & Support</h3>
                                <p><b>Site Planning:</b> We evaluate your space to recommend optimal screen placement.</p>
                                <p><b>Professional Installation:</b> Secure and clean setup tailored to your environment.</p>
                                <p><b>System Setup:</b> Complete hardware and software configuration for smooth performance.</p>
                                <p><b>After-Sales Support:</b> Ongoing assistance to ensure uninterrupted operation.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Add more slides if needed -->
            </div>

        </div>
    </section>

    <section class="why-choose-signage">
        <div class="why-choose-container container">
            <h2 class="why-title">Customized Solutions for Every<br>Industry</h2>


            <div class="why-grid">
                <div class="why-box">
                    <img src="{{asset('frontend/Images/Corporate-Office.png')}}" alt="Corporate Office" class="why-icon">
                    <h3>Corporate Office</h3>
                    <p>
                        We provide digital signage solutions for corporate offices, designed to enhance internal communication and 
                        boost workplace engagement. Perform real-time announcements and performance metrics to internal updates and branding 
                        messages with our digital signage solutions for corporate office.
                    </p>
                </div>

                <div class="why-box">
                    <img src="{{asset('frontend/Images/Retail.png')}}" alt="Retail" class="why-icon">
                    <h3>Retail</h3>
                    <p>
                        We provide vibrant digital display boards that attract customers and promote products. Our solutions
                        enable retailers to showcase promotions, highlight new arrivals, and create an engaging shopping
                        experience that drives sales.
                    </p>
                </div>

                <div class="why-box">
                    <img src="{{asset('frontend/Images/Hospitality.png')}}" alt="Hospitality" class="why-icon">
                    <h3>Hospitality</h3>
                    <p>
                        Our interactive digital signages elevate the guest experience across hospitality venues by offering
                        dynamic, real-time information. Simplifying check-ins and wayfinding to promoting on-site
                        dining, amenities, and events with our digital signages.
                    </p>
                </div>

                <div class="why-box">
                    <img src="{{asset('frontend/Images/Food.png')}}" alt="Food" class="why-icon">
                    <h3>Food</h3>
                    <p>
                        We design <a href="https://brandsignages.com/restaurant-signages" style="color: #E43D12">digital
                            menu boards</a> to be placed in restaurants and cafes to boost customer engagement. These boards serve up menus, prices, and offers in real time, fresh, and up-to-date.
                    </p>
                </div>

                <div class="why-box">
                    <img src="{{asset('frontend/Images/Banking.png')}}" alt="Banking" class="why-icon">
                    <h3>Banking</h3>
                    <p>
                        In banking, digital signage can streamline customer interactions by displaying wait times, service
                        information, and promotional offers. Our solutions help banks improve customer service while
                        maintaining a professional appearance.
                    </p>
                </div>
                <div class="why-box">
                    <img src="{{asset('frontend/Images/Education.png')}}" alt="Education" class="why-icon">
                    <h3>Education</h3>
                    <p>
                        As a digital signage company, our products enhance communication among students, staff, and
                        visitors. You can use them to display schedules and promote events to create an informed campus
                        environment.
                    </p>
                </div>


            </div>
        </div>
    </section>


    <section>
        <div class="container pt-5">
            <h2 class="hero-title">Benefits of Digital Signages for Businesses</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/Benefits-of-Digital-Signages-for-Branding.webp')}}"
                            alt="Benefits of Digital Signages for Businesses" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">

                    <p class="brand-description">
                        Brand Signages is a premier digital signage manufacturer with a decade of industry expertise. We
                        understand every business is unique and creates digital signage solutions tailored to your brand’s
                        specific needs, ensuring maximum engagement. </p>
                    <div class="faq-item active">
                        <button class="faq-question active">
                            Customer Engagement
                            <i class="faq-icon fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer active">
                            <p>Digital signage employs dynamic visual content and videos to attract customer attention.
                                Digital displays help in improving customer engagement, visibility, and retention using
                                interactive visuals.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Real-time Content
                            <i class="faq-icon fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Digital signage employs dynamic visual content and videos to attract customer attention.
                                Digital displays help in improving customer engagement, visibility, and retention using
                                interactive visuals.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Long-term Benefits
                            <i class="faq-icon fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Digital signage employs dynamic visual content and videos to attract customer attention.
                                Digital displays help in improving customer engagement, visibility, and retention using
                                interactive visuals.</p>

                        </div>
                    </div>
                    <div class="mt-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="we-deliver"
        style="background: url('{{ asset('frontend/Images/Why-Choose-Us-for-Digital-Signages.webp') }}') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h2>Why Choose Us for Digital Signages</h2>
                </div>
                <div class="col-md-8 col-12">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/In-House-Experts.png') }}" alt="In-House Experts"
                                    class="img-fluid">
                                <h3>In-House Experts</h3>
                                <p>
                                    From digital displays to CMS software integration, and installation, we have a dedicated manufacturing unit
                                    and in-house team of experts. We provide digital signage installation and support
                                    services across PAN India.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/Industry-Grade-Products.png') }}"
                                    alt="Industry Grade Products" class="img-fluid">
                                <h3>Industry Grade Products</h3>
                                <p>Our digital signages combine advanced display technology and dedicated
                                    Content Management System. This ensures smooth content delivery and easy real-time updates.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/10-Years-of-Expertise.png') }}"
                                    alt="10 Years of Expertise" class="img-fluid">
                                <h3>10 Years of Expertise</h3>
                                <p>We are among the best digital signage companies with expertise in digital signage
                                    display solutions. We have a modern manufacturing facility for digital signage production.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/Network-and-Customer-Support.png') }}"
                                    alt="Network and Customer Support" class="img-fluid">
                                <h3>Network and Customer Support</h3>
                                <p>Being among the best digital signage companies in India, we prioritize understanding your
                                    specific requirements and delivering digital signage solutions that exceed expectations.
                                    We utilize a wide partner network for better support and services.
                                </p>
                            </div>
                        </div>

                    </div>
    </section>

         <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve B2B Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/home/client-bg.webp') }}" alt="Our Clients">
            </div>
            <div class="col-md-7 new_client_section-scrolling col-12">

                <div class="new_client_section-wrapper">
                    <!-- Row 1 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-1">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}"
                                alt="White Gold - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}"
                                alt="Manthan - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}"
                                alt="Sobha - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}"
                                alt="Societe Generale - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}"
                                alt="HashedIn - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}"
                                alt="Innoviti - Our Signage Client">
                        </div>

                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}"
                                alt="White Gold - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}"
                                alt="Manthan - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}"
                                alt="Sobha - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}"
                                alt="Societe Generale - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}"
                                alt="HashedIn - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}"
                                alt="Innoviti - Our Signage Client">
                        </div>

                    </div>

                    <!-- Row 2 (Right to Left) -->
                    <div class="new_client_section-row new_client_section-row-2">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}"
                                alt="Flipkart - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}"
                                alt="VYMO - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}"
                                alt="Indusface - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}"
                                alt="Chargebee - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>

                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}"
                                alt="Flipkart - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}"
                                alt="VYMO - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}"
                                alt="Indusface - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}"
                                alt="Chargebee - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                    </div>

                    <!-- Row 3 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-3">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}"
                                alt="Natural - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}"
                                alt="Vakil Search - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}"
                                alt="Bhive Workspace - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}"
                                alt="Apollo Hospitals - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}"
                                alt="Adarsh Developers - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}"
                                alt="New Horizon Educational Institution - Our Signage Client">
                        </div>


                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}"
                                alt="Natural - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}"
                                alt="Vakil Search - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}"
                                alt="Bhive Workspace - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}"
                                alt="Apollo Hospitals - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}"
                                alt="Adarsh Developers - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}"
                                alt="New Horizon Educational Institution - Our Signage Client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   


    <!-- testimonial Feedback Section -->
    <section class="new_testimonial-swiper-section">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-3">Customer Testimonial</h2>

            <div class="position-relative">

                <!-- Navigation Arrows (placed OUTSIDE swiper container) -->
                <div class="new_testimonial-button-prev">
                    <img src="{{ asset('frontend/Images/home/arrow-left.png') }}" alt="Arrow Left" width="40" height="40">
                </div>
                <div class="new_testimonial-button-next">
                    <img src="{{ asset('frontend/Images/home/arrow-right.png') }}" alt="Arrow Right" width="40" height="40">
                </div>

                <!-- Swiper -->
                <div class="swiper new_testimonial-swiper">
                    <div class="swiper-wrapper">

                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    Our tech startup needed a signage solution that matched our innovative spirit. The
                                    design team didn't just create a sign; they captured our company's entire essence.
                                    The LED-powered brand display has become a conversation starter for clients and
                                    employees alike.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-1.webp') }}"
                                        alt="Michael, CEO, Technova Innovations" class="rounded-circle me-3" width="50"
                                        height="50">
                                    <div>
                                        <h6 class="name">Michael</h6>
                                        <small class="text-muted">CEO, Technova Innovations</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Duplicate Slide -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    As a boutique hotel chain, brand consistency is everything. These custom signages
                                    transformed
                                    our brand experience across multiple locations. The attention to detail is remarkable -
                                    each piece
                                    feels uniquely crafted yet perfectly aligned with our brand identity.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-2.webp') }}"
                                        alt="Asish, CEO, A Hotel Chain" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Asish</h6>
                                        <small class="text-muted">CEO, A Hotel Chain</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    We needed urgent signage for our new retail location, and they delivered beyond
                                    expectations. The direct
                                    communication and on-demand design process made the experience seamless and stress-free.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-3.webp') }}"
                                        alt="Nandini, CEO, A Real Estate Company" class="rounded-circle me-3" width="50"
                                        height="50">
                                    <div>
                                        <h6 class="name">Nandini</h6>
                                        <small class="text-muted">CEO, A Real Estate Company</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    We weren’t sure if a signage company could capture the essence of a dynamic workspace
                                    like Bhive. But what they delivered went far beyond expectations. They didn’t just
                                    create
                                    signs – they crafted a visual identity that reflects our energy, innovation, and
                                    community spirit.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-4.webp') }}"
                                        alt="Manager, Bhive Workspace" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sai Teja</h6>
                                        <small class="text-muted">Manager, Bhive Workspace</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="other-cities-section mt-5">
    <div class="container">
        <h2 class="my-5">Digital Signages in Other Cities</h2>
        <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
            <div class="other-cities-card">
                <a href="https://brandsignages.com/digital-signages-manufacturer-in-mumbai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Digital Signages Mumbai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Mumbai</p>
                </div>
            </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/leading-digital-signage-in-chennai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Digital Signages Chennai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Chennai</p>
                </div>
                </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/digital-signage-company-bangalore" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="Digital Signages Bangalore">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Bangalore</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>


    <section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Digital Signage</h2>
                <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the digital signage
                    through our articles.</p>

            </div>

            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="{{ route('blogsVaritaion', $blog->slug) }}" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">{{ strtoupper($blog->topic) }}</span>
                                        <span class="time">{{ $blog->reding_time }} mins 🕘</span>
                                    </div>
                                    <h5 class="blog-card-title">{{ $blog->title }}</h5>
                                    <p class="card-text">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="text-center">
                    <a href="{{ route('blogs') }}">
                        <button class="contact-btn">See All Blogs</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-section">
        <div class="faq-container">
            <h1 class="faq-title">FAQS</h1>

            <div class="faq-item">
                <button class="faq-question">
                    What Digital Signage Solutions Do You Offer for Businesses?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We offer comprehensive solutions including hardware (displays, screens),
                        software (content management), custom content creation, installation, technical support,
                        strategy consulting, and industry-specific digital communication solutions tailored to enhance
                        brand visibility and audience engagement across multiple platforms and environments</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Does Digital Signage Enhance Customer Engagement?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage boosts customer engagement by delivering dynamic, interactive visual content that
                        captures attention, personalizes messaging, provides real-time information, and creates
                        immersive brand experiences across multiple touchpoints, transforming traditional communication
                        into compelling, memorable interactions.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can Digital Signage be Customized for Specific Business Needs?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>A digital sign company offers extensive customization across multiple dimensions:</p>
                    <ul>
                        <P>1. Industry-Specific Solutions:</P>
                        <ul>
                            <ul>
                                <li>Retail: Product showcases, promotions, interactive catalogs</li>
                                <li>Healthcare: Patient information, wayfinding, queue management</li>
                                <li>Corporate: Internal communications, performance dashboards</li>
                                <li>Education: Campus announcements, event schedules</li>
                                <li>Hospitality: Menu boards, guest information, event details</li>
                            </ul>
                        </ul>
                        <p>2. Content Customization:</p>
                        <ul>
                            <ul>
                                <li>Brand-aligned design aesthetics</li>
                                <li>Dynamic content scheduling</li>
                                <li>Real-time updates</li>
                                <li>Multilingual support</li>
                                <li>Personalized messaging</li>
                                <li>Interactive elements</li>
                            </ul>
                        </ul>
                        <p>3. Technical Customization:</p>
                        <ul>
                            <ul>
                                <li>Screen size and configuration</li>
                                <li>Mounting options</li>
                                <li>Integration with existing systems</li>
                                <li>Cloud-based or local content management</li>
                                <li>Mobile device compatibility</li>
                                <li>Custom hardware configurations</li>
                            </ul>
                        </ul>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Types of Content Can be Displayed on Digital Signage Screens?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage display screens can display a wide variety of content, enhancing engagement and
                        communication. This includes text-based content, visual content like images and infographics,
                        and multimedia content—including videos, slideshows, and live feeds—provides dynamic
                        storytelling opportunities that engage viewers on multiple sensory levels.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Easy is It to Update and Manage Content on Digital Signage Systems?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Users can remotely update displays in real time, schedule content, and access templates for
                        consistency. Analytics tools also provide insights into performance, enabling businesses to
                        optimize messaging and enhance audience engagement efficiently.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    What Industries Can Benefit from Digital Signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage can be a game changer in branding for many industries. Here’s a breakdown:</p>
                    <ul>
                        <li>Retail stores use digital signage to showcase new arrivals and exclusive offers.</li>
                        <li>Restaurants use digital boards to showcase menus and special offers.</li>
                        <li>Hospitals and clinics use them to provide essential information to patients.</li>
                        <li>Hotels use it to highlight amenities, services, and guide guests.</li>
                        <li>Banks utilize digital signage to inform customers about their services.</li>
                    </ul>
                    <p>Digital signage systems offer potential advantages for nearly all businesses aiming to enhance
                        communication with both customers and employees.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Industries Can Benefit from Digital Signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>A digital signage system needs some key hardware components. These are:</p>
                    <ul>
                        <li>First, a screen like an LED or LCD monitor to show the content.</li>
                        <li>Second, a multimedia or computer player to store and play content.</li>
                        <li>Third, a content management system (CMS) to organize and update what appears on the screen.</li>
                        <li>Many advanced systems also need an Internet connection for remote updates.</li>
                    </ul>
                    <p>Assembly equipment or supports may be required to install the screens correctly. According to the
                        configuration, extra accessories can be integrated such as
                        touch screens and speakers so that the signage is more communicative and appealing to users.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is The Average Lifespan of Digital Signage Displays?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>The lifespan of a digital display is based on its usage and quality. Most digital screens last
                        between 50,000
                        and 100,000 hours and work for 5 to 10 years with sufficient attention. LED screens usually last
                        longer than
                        LCD screens. If you are used indoors with moderate brightness, screens last longer. Outdoor screens
                        bear climatic
                        conditions, so they may require extra protection. Periodic upkeep, such as cleaning and software
                        updates, assists
                        in extending the life of the screen and keeping it working effectively.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    Can Digital Signage Display Content in Multiple Languages?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, you can show content in several languages with digital signage. Digital signage systems present
                        textual content
                        alongside images and videos in various languages to achieve superior communication effectiveness.
                        Confirms that customers,
                        workers, and visitors comprehend essential information clearly, irrespective of the language they
                        speak, enhancing their
                        experience with the business or service. </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Can Digital Signage Help Improve In-store Sales?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Digital signage is super effective in grabbing customer attention immediately. With bright and
                        striking screens you can show discounts,
                        and special offers to attract foot traffic. Contents like product demonstrations or customer reviews
                        can generate trust. In restaurants,
                        digital menus make the order easier and highlight best-selling items. Stores can wear interactive
                        screens to highlight desired products.
                        Digital signage also permits companies to update promotions promptly without printing new posters.
                    </p>
                </div>
            </div>

        </div>
    </section>
@endsection