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
        style="background-image: url('{{ asset('/frontend/Images/digital-signages-banner.webp') }}'); ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Digital Signage Manufacturers<br> for High-Impact Displays</h1>
                    <p>Brand Signages is a premier digital signage manufacturer with 12+ years <br>of experience. 
                    We create digital displays, interactive kiosk for all industries. With <br>in-house manufacturing setup 
                    in Bangalore, we deliver PAN India services.
                    </p>
                    <a href="https://brandsignages.com/contact-us">
                        <button class="contact-btn">Book a Demo Call</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
        <section class="We-Elevate-Brands-section py-5">
        <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Explore Commercial-Grade Digital Signages <br>with Inbuilt Smart Software</h2>
        </div>

        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/commercial-display.webp')}}" class="card-img-center"
                                alt="Commercial Display">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="#">Commercial Display</a></h5>
                                <p class="We-Elevate-Brands-text">High-brightness commercial displays, Full HD clarity to Ultra HD brilliance, available in screens size as 98-inch, perfect
                                     for dynamic digital signage, delivering vibrant visuals and experiences.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/corporate-digital-signage.webp')}}" class="card-img-center"
                                alt="Metal Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="#">Touch Screen Kiosk</a></h5>
                                <p class="We-Elevate-Brands-text">Engage customers with touch-screen kiosk. Sleek rectangular frame, this interactive kiosk functions as an intuitive input 
                                    device. Like a smartphone, it runs CMS software, providing real-time assistance and information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/digital-signage2.webp')}}" class="card-img-center"
                                alt="Digital Standee Display">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="#">Digital Standee Display</a></h5>
                                <p class="We-Elevate-Brands-text">Our digital standees feature customizable colors and branding, offering commercial-grade displays in India. Enjoy an immersive
                                     viewing experience with crisp visuals, superior audio, and high-quality video wall performance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/video-walls.webp')}}" class="card-img-center"
                                alt="Digital Video Walls">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="#">Display Video Wall</a></h5>
                                <p class="We-Elevate-Brands-text">Showcase your products and services with our high-brightness video walls, available in 26” and 55” screens. Designed for commercial 
                                    impact, these walls deliver stunning visuals and immersive experiences. </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/outdoor-sign.webp')}}" class="card-img-center"
                                alt="Outdoor Signage Display">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="#">Outdoor Signage Display</a></h5>
                                <p class="We-Elevate-Brands-text">Experience durable, all-weather signage built for maximum visibility and impact. We provide premium outdoor and indoor display boards, including
                                     digital notice boards, successfully deployed across India’s major cities. </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/flat-panel-display.webp')}}" class="card-img-center"
                                alt="Flat Panel Display">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="#">Flat Panel Display</a></h5>
                                <p class="We-Elevate-Brands-text">Enhance engagement with our Interactive Flat Panel Display, featuring cutting-edge visuals and advanced touch technology. Comes with integrated 
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
    <!-- About Section -->
         <section class="Sign_Boards">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">

                </div>
                <div class="col-md-8 col-12 right-col">
                    <h2>The Home of Premium Digital Signage- Excellence Beyond Expectations</h2>
                    <p>Brand Signages is a premier <b>digital signage brand</b> with 12+ years of expertise. With a long-standing foundation,
                         we have manufacturing excellence for digital displays, interactive kiosks, commercial displays, and more. We are committed to deliver products with
                          unmatched quality and  work with long-term business principles putting 100% efforts in digital signage manufacturing.  </p>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/premium-quality.png') }}"
                                    alt="Brand Signages Provides Supitor Quality Materials" class="img-fluid">
                                <h3>Superior Quality</h3>
                                <p>We craft digital signage using premium materials and advanced technology, ensuring long-lasting 
                                    performance, high clarity, and exceptional visual appeal.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/premium-quality.png') }}"
                                    alt="We work with Expert Precision " class="img-fluid">
                                <h3>Technical Expertise</h3>
                                <p>Our tech-focused team invests in continuous R&D to deliver innovative, modern, and highly efficient
                                     digital signage solutions for every business.  
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/premium-quality.png') }}"
                                    alt="Our products are of Premium Quality " class="img-fluid">
                                <h3>Unmatched Expertise</h3>
                                <p>With 12+ years in the digital and LED signage industry, we deliver deep expertise and trend-forward 
                                    solutions for every project. 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/premium-quality.png') }}"
                                    alt="We provide Transparent Pricing and Timely Delivery" class="img-fluid">
                                <h3>Transparent Pricing</h3>
                                <p>We provide clear, detailed, and competitive pricing with no hidden charges, helping you plan
                                     confidently and know exactly what you receive.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="bgrowth-slider-section">
        <div class="bgrowth-header">
            <h2>Smart and Impactful Digital Signage <br>Solutions for Every Industry</h2>

        </div>

        <div class="swiper bgrowth-swiper-2 container">
            <div class="swiper-pagination"></div> <!-- should be inside swiper, before swiper-wrapper -->
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-5 pb-0">
                            <img src="{{ asset('frontend/Images/home/digital-signage-restaurant.webp') }}"
                                alt="Smart-Digital-Displays" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-7  d-flex flex-column justify-content-center ">
                            <div class="bgrowth-content ">
                                <h3 class="mb-3">Hotels, Restaurants, & QSRs</h3>
                                <p>
                                 Effective advertising are important for hotels and restaurants. Engaging visuals, videos, and promotional 
                                 campaigns capture attention. With our customized <b>Digital Displays</b>, restaurants and hotels across India can showcase
                                  dynamic content. We provide in-built Signage Software for <b>real-time updates</b>, ensuring your messages 
                                  stay fresh and relevant. Our digital signage solutions include:</p>
                                    <ul class="fs-20">
                                    <li>Digital Menu Boards</li>
                                    <li>Self-Ordering Kiosks</li>
                                    <li>Digital Standees</li>
                                    <li>Custom Digital Walls</li>
                                    </ul>
                                <a href="contact-us">
                            <button class="contact-btn">Book Your Order</button>
                        </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-6 pb-0">
                            <img src="{{ asset('frontend/Images/home/digital-signage-retail.webp') }}"
                                alt="smart-digital-Specifications" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                            <div class="bgrowth-content">
                                <h3 class="mb-3">Retail Kiosk</h3>
                                <p>
                                 Brand Signages delivers advanced hardware and software solutions for retail, enabling <b>dynamic kiosks</b> and <b>digital signage</b>.
                                  Retail businesses can <b>showcase products</b>, promotions, and engaging content in one place, capturing attention, enhancing
                                   engagement, and boosting sales with visually immersive, flexible, and modern in-store experiences. Our 
                                   digital signage solutions include:</p>
                                   <ul class="fs-20">
                                    <li>Display LED Wall</li>
                                    <li>Digital Standee</li>
                                    <li>Custom Window Displays</li>
                                    <li>Interactive Displays</li>
                                    </ul>
                                    <a href="contact-us">
                            <button class="contact-btn">Book Your Order</button>
                        </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-6 pb-0">
                            <img src="{{ asset('frontend/Images/home/digital-signage-hospital.webp') }}"
                                alt="Digital Signage Display for Hospital" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-6  d-flex flex-column justify-content-center ">
                            <div class="bgrowth-content">
                                <h3 class="mb-3">Digital Signage for Hospitals</h3>
                                <p>
                                 Brand Signages Digital Signage transforms hospitals with <b>interactive solutions</b> like wayfinding, self-service kiosks, and digital walls.
                                  Display informative content about <b>doctors, services</b>, and <b>health tips</b>, enhancing patient engagement while reducing stress and improving overall
                                   hospital experience. Our digital signage solutions include:</p>
                                   <ul class="fs-20">
                                        <li>Touch Screen Kiosk</li>
                                        <li>Digital Standees</li>
                                        <li>Video Wall</li>
                                        <li>Queue Management Display</li>
                                        </ul>
                                        <a href="contact-us">
                            <button class="contact-btn">Book Your Order</button>
                        </a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-6 pb-0">
                            <img src="{{ asset('frontend/Images/home/digital-display-for-bank.webp') }}"
                                alt="Digital Signage for Banks" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-6  d-flex flex-column justify-content-center ">
                            <div class="bgrowth-content">
                                <h3 class="mb-3">Bank & Financial Kisok</h3>
                                <p>
                                 Brand Signages digital signage transforms banks and financial institutions by streamlining information updates and reducing
                                  customer wait times. These solutions <b>improve operational efficiency</b>, elevate brand presence, and deliver a modern, <b>seamless
                                   experience</b> for every customer. Our digital signage solutions include:</p>
                                   <ul class="fs-20">
                                    <li>Commercial Display TV</li>
                                    <li>Digital Standees</li>
                                    <li>Custom LED Scrollers</li>
                                    <li>Digital Notice Board</li>
                                    <li>Self Service Kiosk</li>
                                    </ul>
                                    <a href="contact-us">
                            <button class="contact-btn">Book Your Order</button>
                        </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-6 pb-0">
                            <img src="{{ asset('frontend/Images/home/digital-signage-classroom.webp') }}"
                                alt="Digital Signage for Classrooms" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-6  d-flex flex-column justify-content-center ">
                            <div class="bgrowth-content">
                                <h3 class="mb-3">Smart Classroom Solutions</h3>
                                <p>
                                 Brand Signages helps educational institutes transition from <b>paper to digital platforms</b>, offering smart 
                                 olutions like interactive kiosks, digital standees, and <b>smart classroom technologies</b> with projectors, digital
                                  whiteboards, and advanced learning software to streamline communication and teaching experiences. Our digital 
                                  signage solutions include:</p>
                                   <ul class="fs-20">
                                    <li>Interactive Flat Panel Display</li>
                                    <li>Digital Standees</li>
                                    <li>Custom Seminar Hall Solutions</li>
                                    <li>Digital Notice Board</li>
                                    </ul>
                                    <a href="contact-us">
                            <button class="contact-btn">Book Your Order</button>
                        </a>

                            </div>
                        </div>
                    </div>
                </div>

                                <div class="swiper-slide bgrowth-card">
                    <div class="row align">
                        <div class="col-12 col-md-6 pb-0">
                            <img src="{{ asset('frontend/Images/home/corporate-office-display.webp') }}"
                                alt="Digital Signage for Corporate Office" class="bgrowth-img-2" />
                        </div>
                        <div class="col-12 col-md-6  d-flex flex-column justify-content-center ">
                            <div class="bgrowth-content">
                                <h3 class="mb-3">Corporate Office Solutions</h3>
                                <p>
                                 Brand Signages enables corporate offices to embrace digital transformation with solutions like <b>interactive displays</b>, 
                                 large-format signage, and smart meeting management tools, <b>improving communication</b>, boosting collaboration, and creating 
                                 modern, efficient, and engaging workplace environments. Our digital signage solutions include:</p>
                                   <ul class="fs-20">
                                    <li>Video Conferencing Solution</li>
                                    <li>Big Commercial Displays</li>
                                    <li>Custom Meeting Scheduler</li>
                                    <li>Digital Standee</li>
                                    </ul>
                                    <a href="contact-us">
                            <button class="contact-btn">Book Your Order</button>
                        </a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add more slides if needed -->
            </div>

        </div>
    </section>

       <section>
        <div class="container pt-5">
            <h2 class="hero-title">We Have Full Scale Manufacturing <br>Expertise for Digital Signages</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/home/digital-signage-manufacture.webp')}}" alt="Digital Signage manufacturing Machine"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fs-20">
                        Brand Signages is the best digital signage manufacturer, transforms every screen into an interactive experience, helping brands connect effortlessly with their audience.
                    <p class="fs-20">
                        We have advanced in-house manufacturing unit to handle the complete production from metal fabrication and powder coating to <b>display integration</b>, 
                        <b>PCB assembly</b>, <b>wiring</b>, <b>testing</b>, and <b>quality inspection</b>. Every digital signage display product is engineered with precision, using commercial-grade components
                         and proper <b>QC processes</b> to ensure durability, long operational life, and flawless performance.
                    </p>
                    <p class=" fs-20">
                        Our cloud-powered digital signage software (Scala, Panasonic’s SignEdge CMS) gives you complete control over every screen from anywhere. It allows you to schedule 
                        content, manage playlists, push real-time updates, monitor device health, and automate campaigns with ease.
                    </p>
                    <a href="contact-us">
                            <button class="contact-btn">Book Your Order</button>
                        </a>
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
                                <h3>In-House Manufacturing</h3>
                                <p>
                                    With full in-house manufacturing, every digital signage system is produced, tested, and quality-checked by our expert team, ensuring unmatched durability, finish, and long-term performance.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/Industry-Grade-Products.png') }}"
                                    alt="Industry Grade Products" class="img-fluid">
                                <h3>Advanced Signage Platform</h3>
                                <p>Our advanced cloud-based software lets you publish, schedule, and monitor content in real time, ensuring seamless display management across multiple locations without downtime or technical frustration.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/10-Years-of-Expertise.png') }}"
                                    alt="10 Years of Expertise" class="img-fluid">
                                <h3>Expert Technical Team</h3>
                                <p>Our trained digital signage engineers provide proactive support, quick issue resolution, and reliable maintenance, ensuring your digital signage network stays stable and responsive.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/Network-and-Customer-Support.png') }}"
                                    alt="Network and Customer Support" class="img-fluid">
                                <h3>Designed for Performance</h3>
                                <p>Every screen, kiosk, and signage solution is custom-designed digital signage to match your branding, environment, viewing distance, and content goals creating a fully personalized experience.
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
            <h2 class="text-center mb-md-5 mb-3">What Our Clients Say</h2>

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