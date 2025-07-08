@extends('frontend.layout.appLayout')

@section('content')
    <section class="hero-banner" style="background-image: url('{{ asset('/frontend/Images/home/home-banner-bg.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Unmatched Sign Board Design<br>Solutions for Every Industry</h1>
                    <p>Brand Signages is a trusted B2B partner and a premium signage manufacturer in Bangalore, India.
                    </p>
                    <a href="https://brandsignages.com/contact-us">
                        <button class="contact-btn">Know More</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="Sign_Boards">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">

                </div>
                <div class="col-md-8 col-12 right-col">
                    <h2>Welcome to Brand Signages - Your Go-to Choice for Premium-quality Sign Boards</h2>
                    <p>We are among the exclusive signage manufacturers in India with a long-standing foundation in
                        Bangalore. We design custom sign boards to meet the exact needs of customers with no compromise in
                        quality and delivery time. Our core principle lies in 4 strong pillars that make us the #1 sign
                        board company in the region.  </p>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/creative-design.png') }}"
                                    alt="Brand Signages Provides Creative Design" class="img-fluid">
                                <h3>Creative Design</h3>
                                <p>Our creative team provides flexible, personalized signage design, transforming your
                                    conceptual ideas into compelling visual narratives.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/expert-precision.png') }}"
                                    alt="We work with Expert Precision " class="img-fluid">
                                <h3>Expert Precision </h3>
                                <p>We master sign board manufacturing with 10+ years of experience, well-known in the
                                    industry for LED sign board, digital signage, acrylic, and neon sign board mastery.  
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/premium-quality.png') }}"
                                    alt="Our products are of Premium Quality " class="img-fluid">
                                <h3>Premium Quality </h3>
                                <p>Quality is our primary benchmark that we maintain being a consistent leader in the
                                    signage industry. Commitment to quality is a practice we follow at our core principles. 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/timely-deliver-2.png') }}"
                                    alt="We provide Timely Delivery for all products" class="img-fluid">
                                <h3>Timely Delivery</h3>
                                <p>We optimize workflows, maintain stringent timelines for the delivery of signage products.
                                    We measure our growth metrics based on customer satisfaction, and timing is a part of
                                    it.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="led-signs-manufacturing">
        <div class="container pt-5">

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-imagex">
                        <img src="{{asset('frontend/Images/home/led-sign-bg.webp')}}"
                            alt="Starbucks LED Sign board designed by Brand Signages" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="hero-title text-start">Top-rated Signage Manufacturer with a Decade of Expertise </h2>
                    <p class="brand-description">
                        Brand Signages was established in 2014 with a vision to empower brands with signage solutions that
                        are unmatched in quality and design. We are meeting the deadlines in 2025 as the best-rated signage
                        manufacturer, working with the top brands across India. Our hustle is going on, and we work
                        tirelessly to hold the title and remain a signage superpower. 
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            The process begins with conceptualisation. Our designers collaborate closely with clients to
                            understand the target audience and design objectives.
                        </li>
                        <li class="mb-3">
                            At our signage manufacturing facility, we create the final product, including the desired colour
                            palettes, typography, and logo placement. 
                        </li>
                        <li>
                            The final stage involves quality control, where each signage piece is meticulously inspected to
                            ensure it perfectly represents the brand's visual standards.
                        </li>
                        <div class="mt-4">
                            <a href="{{route('about_us')}}" class="custom-btn">About Us</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new_custom-stats-section">
        <div class="container">
            <div class="row text-center text-white">
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <h2 class="new_custom-stats-number">10+</h2>
                    <p class="new_custom-stats-label">Years In Signage Design</p>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0 position-relative">
                    <div class="new_custom-divider-left d-none d-md-block"></div>
                    <h2 class="new_custom-stats-number">12,000+</h2>
                    <p class="new_custom-stats-label">Deliveries Done</p>
                    <div class="new_custom-divider-right d-none d-md-block"></div>
                </div>
                <div class="col-12 col-md-4">
                    <h2 class="new_custom-stats-number">2,500+</h2>
                    <p class="new_custom-stats-label">Client Base</p>
                </div>
            </div>
        </div>
    </section>
    <section class="We-Elevate-Brands-section py-5">
        <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">We Elevate Brands with Quality Signages <br>That Makes a Lasting Impression  </h2>
        </div>

        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/uhouse.webp')}}" class="card-img-center"
                                alt="Metal Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/metal-signages">Metal & Steel Signages</a></h5>
                                <p class="We-Elevate-Brands-text">Stainless steel signage is one of the most affordable and
                                    durable signage. We design stainless steel signage for organizations with custom sizes
                                    and designs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/led-sign.webp')}}" class="card-img-center"
                                alt="Metal Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/led-light-signages">LED Sign Board</a></h5>
                                <p class="We-Elevate-Brands-text">LED sign boards are the most versatile option for modern branding. 
                                    We are proven experts in LED sign board manufacturing to help you create the best LED nameboards. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/digital-signage2.webp')}}" class="card-img-center"
                                alt="Metal Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/digital-signages">Digital Signage</a></h5>
                                <p class="We-Elevate-Brands-text">Digital displays are a dynamic and attention-grabbing transformation for 
                                    retail spaces. We design modern digital signage and digital displays for every industry. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/acrylic-sign.webp')}}" class="card-img-center"
                                alt="Metal Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/arcylic-signages">Acrylic Signage</a></h5>
                                <p class="We-Elevate-Brands-text">Acrylic signage is a preferred choice among industries for its glossy finish and durability. 
                                    We design acrylic signage with unmatched durability and precision. </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/neon-sign2.webp')}}" class="card-img-center"
                                alt="Metal Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/neon-signages">Neon Sign Board</a></h5>
                                <p class="We-Elevate-Brands-text">Neon signs are a go-to option for retail and restaurant businesses for all-around visibility. 
                                    We employ our precious experts to design the best neon signage designs in the city. </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/retail-sign.webp')}}" class="card-img-center"
                                alt="Retail Signages">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/">Retail Signage</a></h5>
                                <p class="We-Elevate-Brands-text">Retail signage is the epitome of beauty and elegance. These creations are bold, energy-efficient, 
                                    and easy to use and maintain for long-lasting performance. </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/outdoor-sign.webp')}}" class="card-img-center"
                                alt="Outdoor Business Signages">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/outdoor-signages">Outdoor Signage</a></h5>
                                <p class="We-Elevate-Brands-text">Outdoor signages create immersive visual experiences, balancing visibility with powerful messaging. 
                                    These signage acts as a strategic marketing tools that truly engage audiences.</p>
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
            <a href="https://brandsignages.com/" class="btn-we-elevate">View All Services</a>
        </div>
        </div>
    </section>


    <section class="new_custom-why-choose">
        <div class="container">
            <h2 class="text-center mb-5 new_custom-heading">Why Choose Brand Signages as Your<br> Signage Companion?</h2>
            <div class="row justify-content-center g-4">

                <!-- Expertise -->
                <div class="col-md-4 justify-content-between d-flex flex-column">
                    <div class="new_custom-box new_custom-light-box d-flex flex-column justify-content-between ">
                        <p>We are among the best when it comes to signage manufacturing. We craft signage designs that speak
                            volumes and attract audience from a distance.</p>
                        <h4 class="new_custom-title">Expertise</h4>
                    </div>
                    <div class="why-choose-image-container">
                        <img src="{{ asset('frontend/Images/home/why-choose.webp') }}"
                            alt="why choose us as your signage partner in Bangalore" class="img-fluid mt-3">
                    </div>
                </div>

                <!-- Experience -->
                <div class="col-md-4">
                    <div class="new_custom-box new_custom-image-box"
                        style="background-image: url('{{ asset('frontend/Images/home/why-choose-2.webp') }}');">
                        <div class="new_custom-overlay">
                            <h4 class="new_custom-title text-white">Experience</h4>
                            <p class="text-white">We have 10 years of experience in the signage industry and have worked
                                with major brands across India in various industries and verticals.</p>
                        </div>
                    </div>
                </div>

                <!-- Excellence -->
                <div class="col-md-4 justify-content-between d-flex flex-column">
                    <div class="why-choose-image-container">
                        <img src="{{ asset('frontend/Images/home/why-choose-3.webp') }}"
                            alt="Outdoor sign board designed by our experts" class="img-fluid mb-3">
                    </div>
                    <div class="new_custom-box new_custom-light-box-3 d-flex flex-column justify-content-between">
                        <h4 class="new_custom-title">Excellence</h4>
                        <p>Our excellence lies in 4 core pillars, and we see ourselves as an unmatched competitor in signage
                            design and manufacturing.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="home-page mb-5">
         <div class="pointing">
            <div class="container point">
                <div class="ledx pulse-point">
                    <span class="pulse"></span> <!-- White animated surface -->
                    <span class="pulse-center"></span> <!-- Red fixed center -->
                    <img class="pulse-hover-img ledx-img" src="{{ asset('frontend/Images/home/led-signage.png') }}"
                        alt="LED Sign Board">
                </div>
                <div class="outdoorx pulse-point">
                    <span class="pulse"></span> <!-- White animated surface -->
                    <span class="pulse-center"></span> <!-- Red fixed center -->
                    <img class="pulse-hover-img outdoorx-img" src="{{ asset('frontend/Images/home/outdoor-signage.png') }}"
                        alt="Outdoor Signage">
                </div>
                <div class="digitalx pulse-point">
                    <span class="pulse"></span> <!-- White animated surface -->
                    <span class="pulse-center"></span> <!-- Red fixed center -->
                    <img class="pulse-hover-img digitalx-img" src="{{ asset('frontend/Images/home/digital-signage.png') }}"
                        alt="Digital Signage">
                </div>
                <div class="metalx pulse-point">
                    <span class="pulse"></span> <!-- White animated surface -->
                    <span class="pulse-center"></span> <!-- Red fixed center -->
                    <img class="pulse-hover-img metalx-img" src="{{ asset('frontend/Images/home/metal-signage.png') }}"
                        alt="Metal Signage">
                </div>
                <div class="acrylicx pulse-point">
                    <span class="pulse"></span> <!-- White animated surface -->
                    <span class="pulse-center"></span> <!-- Red fixed center -->
                    <img class="pulse-hover-img acrylicx-img" src="{{ asset('frontend/Images/home/acrylic-signage.png') }}"
                        alt="Acrylic Signage">
                </div>




            </div>
        </div>
    </section>
    {{-- <section class="Maximum-Impact-section">
        <div class="container">
            <div class="swiper Maximum-Impact-swiper">

                <h2>LED Sign Boards That Create <br>Maximum Impact </h2>
                <p>Trusted by clients across Bangalore and India, we’ve worked on 100+ LED sign board projects with
                    excellence.
                    We are a proven leader in the B2B led sign board manufacturing with 10+ years of excellence. We design
                    modern tech-savvy LED sign boards that consume 7x less energy, backed with premium quality materials and
                    range of options.</p>
                <div class="swiper-wrapper">
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-4.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-3.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-1.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>

                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-4.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-3.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-1.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>



                </div>
            </div>
        </div>
    </section> --}}

      <section class="instant-pricing">
            <div class="container">
                <h2>Best Signage Makers in Bangalore - 24 Hour Active Production Line</h2>
                <p>We are the best Signage Manufacturers in Bangalore with 24-hours production capability and expertise.</p>
                <div class="scroll-loop-wrapper">
                    <div class="scroll-loop-track">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/panting.webp') }}" alt="Painting">
                                <p>Painting</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/MetalEtching.webp') }}" alt="Metal Etching">
                                <p>Metal Etching</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/MetalLaserCutting.webp') }}" alt="Metal Laser Cutting">
                                <p>Metal Laser Cutting</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/AcrylicLaser.webp') }}" alt="Acrylic Laser">
                                <p>Acrylic Laser</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/latex-printing.webp') }}" alt="Latex Printing">
                                <p>Latex Printing</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/uv-flat-print.webp') }}" alt="UV Flat Printing">
                                <p>UV Flat Printing</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/plotting.webp') }}" alt="Plotting">
                                <p>Plotting</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/channel-letter.webp') }}" alt="Channel Letters">
                                <p>Channel Letters</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/epoxy-letter.webp') }}" alt="Epoxy Letters">
                                <p>Channel Letters</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/3d-printing.webp') }}" alt="3D printing">
                                <p>3D Printing</p>
                            </div>
                            <div class="scroll-card">
                                <img src="{{ asset('frontend/Images/home/led-letters.webp') }}" alt="LED Letters">
                                <p>LED Letters</p>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>

             <section class="container">
            <div class="new-contacts-section">
                <div class="new-contacts-section-overlay">
                    <p class="new-contacts-section-text">
                        Your brand identity is the silent ambassador of your business. At Brand Signages, we don't just
                        design sign boards, we craft designs that leave a lasting impression. As premier signage makers in
                        Bangalore, we bring innovation, precision, and artistry to every design.
                    </p>
                    <a href="{{route('contact_us')}}" class="new-contacts-section-button" style="text-decoration: none;">Contact Us</a>
                    

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
    <section class="new_testimonial-swiper-section">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-3">Feedback from Our Valuable Clients</h2>

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
                                    <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy- Our Client"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sneha Reddy</h6>
                                        <small class="text-muted">Marketing Head – Urban Retail Co.</small>
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
                                    We needed stunning, durable, and regulation-compliant signage for our hospital,
                                    and Brand Signages delivered exactly what we asked for. Their attention to detail
                                    is excellent, which helped us enhance the patient experience.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema - Our Client"
                                        class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Seema Nayak</h6>
                                        <small class="text-muted">Operations Manager– Horizon Hospitals</small>
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
                                    From initial conceptualization to execution, they executed our café signage project
                                    seamlessly. They perfectly captured the aesthetics of our brand with vibrant acrylic
                                    signs and a neon board that has quickly become an Instagram favorite among local people.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}"
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sandeep Gupta</h6>
                                        <small class="text-muted">Founder – Café Bloom</small>
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
                                    We needed elegant indoor and outdoor corporate signage that matched our branding.
                                    Brand Signages impressed us with their quick turnaround, premium finish, and seamless
                                    coordination throughout the signage project.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}"
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50" height="50">
                                    <div>
                                        <h6 class="name">Sandeep Gupta</h6>
                                        <small class="text-muted">Director– Nova Consulting Group</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Signage & Branding</h2>
                <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the signage designs
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
        <div class="container">
            <h1 class="faq-title">FAQs</h1>

            <div class="faq-item">
                <button class="faq-question">
                    What is the difference between a sign board and signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Signage and sign boards are interchangeable terms as both refer to visual displays. 
                        While "sign board" usually points to individual display units, and "signage" refers 
                        to the broader category of all types of signs, they ultimately serve the same purpose: 
                        effective visual communication.</p>
                    <p>At Brand Signages, we specialize in both sign board and signage manufacturing. We are 
                        exclusive sign board manufacturers providing complete signage solutions. Whether you need 
                        a single shop board, indoor branding sign boards, or outdoor sign boards, we design the best 
                        signage in the city, tailored to specific business needs.  </p>    
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do I choose a sign board for my business?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Choosing a signage or sign board for your business depends on many factors, including your business type, location, and branding
                        goals. Here's how to make the right choice:</p>
                    <ul>
                        <li>Purpose – Determine whether the signage is for branding, wayfinding, promotions, or safety.</li>
                        <li>Location & Visibility – Choose signage that stands out in your environment, whether indoor or
                            outdoor.</li>
                        <li>Right Material – Opt for durable materials based on weather conditions and usage.</li>
                        <li>Design & Readability – Ensure the signage has clear fonts, high-contrast colors, and an
                            eye-catching design.</li>
                        <li>The Right Lighting – Consider LED or illuminated signs for better visibility, especially at
                            night.</li>
                        <li>Hire Professionals – Collaborate with expert sign board manufacturers to get a high-quality,
                            customized solution.</li>
                    </ul>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    Is digital signage expensive?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>The cost of digital signage depends on various factors like screen size, technology, content
                        management software, and installation.
                        While the investment can be much higher than traditional signage, digital signage offers long-term
                        benefits such as dynamic content
                        updates, scalability, and better engagement.</p>
                    <ul>
                        <li>Basic Digital Signage (Small Screens): Starts from ₹15,000 to ₹50,000.</li>
                        <li>Large LED Walls & Interactive Displays: Can cost ₹1,00,000 to ₹10,00,000+ </li>
                        <li>Ongoing Costs: Ranging from ₹5,000 to ₹50,000 per month based on requirements</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What are the types of signage products do you offer?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Brand Signages is exclusively known as an <a href="https://brandsignages.com/" style="text-decoration: unset;color:#E43D12">LED sign board manufacturer in Bangalore</a>. 
                    We also have a high-level portfolio for designing all other types of signage and sign boards. Our product range includes:</p>
                    <ul>
                        <li><a href="https://brandsignages.com/neon-signages"
                                style="text-decoration: unset;color:#E43D12">Glow signboard</a></li>
                        <li><a href="https://brandsignages.com/arcylic-signages"
                                style="text-decoration: unset;color:#E43D12">Acrylic LED signboards</a></li>
                        <li><a href="https://brandsignages.com/digital-signages"
                                style="text-decoration: unset;color:#E43D12">Digital signages</a></li>
                        <li><a href="https://brandsignages.com/metal-signages"
                                style="text-decoration: unset;color:#E43D12">Steel letter</a></li>
                        <li><a href="https://brandsignages.com/fire-safety-signages"
                                style="text-decoration: unset;color:#E43D12">Fire safety signs</a></li>
                        <li><a href="https://brandsignages.com/led-light-signages"
                                style="text-decoration: unset;color:#E43D12">LED letter sign</a></li>
                        <li><a href="https://brandsignages.com/neon-signages"
                                style="text-decoration: unset;color:#E43D12">Neon sign board</a></li>
                        <li><a href="https://brandsignages.com/outdoor-signages"
                                style="text-decoration: unset;color:#E43D12">Outdoor signs</a></li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How can I customize a signage board to fit my specific requirements?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our team would meet for the initial consultation and begin working on the custom design mockups.
                        Depending on your choice, we will select the material and dimensions, and add text and graphics
                        to the signboard. We will send the final design for approval and also work on the installation.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is the process for ordering and purchasing signage boards directly?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our signage ordering process is designed to be straightforward and customer-friendly:</p>
                    <ul>
                        <li>Schedule a free consultation (online or on-site)</li>
                        <li>Discuss your specific signage needs</li>
                        <li>Receive initial design concepts</li>
                        <li>Digital mockups and proof review</li>
                        <li>Unlimited design iterations until you are satisfied</li>
                        <li>Transparent pricing breakdown</li>
                        <li>Delivery and installation</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are your sign boards suitable for both indoor and outdoor use?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our sign boards are designed with versatility in mind:</p>
                    <ul>
                        <li>Outdoor Signs:</li>
                        <ul>
                            <li>Weather-resistant materials</li>
                            <li>UV-protected coatings</li>
                            <li>Durable against harsh environmental conditions</li>
                        </ul>
                        <li>Indoor Signs:</li>
                        <ul>
                            <li>Sleek, polished finishes</li>
                            <li>Adaptable to various interior settings</li>
                            <li>Multiple mounting options</li>
                            <li>Different lighting configurations</li>
                            <li>Premium aesthetic materials</li>
                        </ul>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do you offer any warranties or guarantees on your signage products?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our comprehensive warranty ensures your confidence:</p>
                    <ul>
                        <li>Material and installation Guarantee</li>
                        <li>Color and finish durability protection</li>
                        <li>Performance assurance against environmental damage</li>
                        <li>Quick claim resolution process</li>
                        <li>Transparent terms and conditions</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How can I get a cost-effective solution for bulk signage orders?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We offer volume-based pricing discounts, custom package negotiations, and standardized design
                        options. We prioritize providing top-notch customer service in terms of flexible payment terms
                        and complimentary consultation. It is our goal to not compromise on quality and extend a
                        competitive pricing guarantee.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can you install signage boards at my location in Bangalore?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we provide signage board installation services in Bangalore and all over India. When you
                        order from us, you can expect:</p>
                    <ul>
                        <li>High-Quality Signage: We use durable, premium materials</li>
                        <li>Customized Designs: We understand your brand's unique needs</li>
                        <li>Timely Installation: We guarantee prompt and efficient installation</li>
                        <li>Expert Team: We handle the entire process, from design to manufacturing</li>
                        <li>Nationwide Reach: We provide coverage for signage installation services</li>
                        <li>Affordable Pricing: Competitive rates without compromising on quality</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can I request a sample before placing a bulk order for signage boards?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, you can definitely order a single piece as a sample before placing a bulk order.
                        This allows you to evaluate the quality, design, and material of the signage boards
                        firsthand. We want you to be completely satisfied with your choice, so feel free to
                        request a sample to ensure it meets your expectations before making a larger
                        commitment.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to manufacture and deliver a signage board?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>It takes almost 7-10 business days to deliver signage. After you
                        finalize the design and material, we'll proceed with manufacturing
                        and delivery of the signages. We ensure a hassle-free experience during the
                        entire process. </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can you create signage for events and exhibitions in Bangalore?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we also create signage for events and exhibitions in Bangalore. Whether it's
                        directional signage, banners, stands, or branded displays, we offer a range of options.
                        We are a leading signage manufacturer in Bangalore & India to help you with any type of
                        custom signage solutions. </p>
                </div>
            </div>
        </div>
    </section>
@endsection