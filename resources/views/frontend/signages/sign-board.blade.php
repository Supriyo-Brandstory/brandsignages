@extends('frontend.layout.appLayout')
@section('content')
    <section class="hero-banner" style="background-image: url('{{ asset('/frontend/Images/home/home-banner-bg.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Signature-Quality Custom Signs<br> Your Brand Deserves the Best</h1>
                    <p>Make a powerful first impression with crafted custom sign boards for <br>offices, luxury retail
                         spaces, high-end showrooms, and commercial <br>properties.
                    </p>
                    <a href="https://brandsignages.com/contact-us">
                        <button class="contact-btn">Know More</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="row g-4 d-flex flex-wrap justify-content-center">

            <div class="text-center ">
                <h2 class="hero-title  mb-4">Premium-grade Signages Built for Visibility<br> and Longevity</h2>
                <p class=" brand-description text-center mb-5">At <a href="{{route('index')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">Brand Signages</a>, we create sign boards that are designed to get you noticed and remembered. We create premium 
                    <a href="/indoor-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">indoor signage</a> and <a href="/outdoor-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">outdoor signages</a> to strengthen your brand presence, guide audiences, and elevate branding. With a fully <b>in-house team of designers</b>, 
                    <b>fabricators</b>, and <b>installation specialists</b>, we manage the entire signage lifecycle with precision, from concept development and material selection to 
                    <b>execution and on-site installation</b>. Every detail is handled with intent, ensuring consistency, quality, and long-term performance.
                </p>
                <p class=" brand-description text-center mb-5">
                    Our expertise includes a refined range of signature signage solutions: <a href="/arcylic-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">acrylic signage</a>, <a href="/led-acrylic-3d-glow-sign-board" style="text-decoration: unset;color:#E43D12; font-weight: bold;">LED sign boards</a>, <a href="/acrylic-letters" style="text-decoration: unset;color:#E43D12; font-weight: bold;">3D lettering</a>, <a href="/digital-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">digital signage</a>, <a href="/neon-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">neon glow signs</a>,
                     and much more. We work with a diverse range of industries delivering signage solutions for <a href="/office-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">corporate offices</a>, <b>IT hubs</b>, <a href="/hospital-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">hospitals and healthcare facilities</a>, 
                     <b>banks and financial institutions</b>, <b>airports</b>, <a href="/restaurant-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">restaurants</a>, <a href="/name-board-designs-for-shops-bangalore" style="text-decoration: unset;color:#E43D12; font-weight: bold;">retail shops</a>, <b>real estate developments</b>, <b>educational institutions</b>, and <b>large commercial spaces</b>.</p>
            </div>

            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/acrylic-signagess.webp') }}" alt="Acrylic LED Sign Board"
                                class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Acrylic LED Sign</h5>
                                <p class="text-content">Acrylic LED signage combines high-gloss acrylic with clean LED illumination to create a sleek, 
                                    modern brand display. It delivers sharp visibility and a refined finish, making it ideal for premium indoor
                                     and outdoor environments.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/neon-signagess.webp') }}" alt="Neon LED Signage"
                                class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Neon LED Signage</h5>
                                <p class="text-content">Neon LED signs delivers bold, vibrant illumination inspired by classic neon aesthetics while 
                                    using modern, energy-efficient LED technology. It adds character, color, and visual energy to spaces, making it ideal 
                                    for creating memorable brand moments without the maintenance demands of traditional neon.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/metal-signagess.webp') }}" alt="Metal Signage"
                                class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Metal Signage</h5>
                                <p class="text-content">Metal signage offers a bold, refined presence through precision-crafted aluminum and metal finishes. 
                                    Built to withstand weather and environmental exposure, it delivers a clean, sophisticated look ideal for contemporary 
                                    facades and long-term outdoor branding.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/digital-signagess.webp') }}"
                                alt="Digital Signage" class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Digital Signage</h5>
                                <p class="text-content">Digital signage delivers dynamic, high-resolution visuals designed to capture attention and communicate
                                     in real time. Ideal for high-traffic environments, it enables flexible content updates, enhanced engagement, and a modern 
                                     brand presence across indoor and commercial spaces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/office-signagess.webp') }}" alt="Office Name Board"
                                class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Office Name Board</h5>
                                <p class="text-content">Office name boards present your business identity with clarity and professionalism at first glance. Designed
                                     with clean layouts and premium finishes, they create a polished impression while ensuring easy recognition for visitors 
                                     and staff.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/safety-signss.webp') }}" alt="Safety Signage"
                                class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Safety Signage</h5>
                                <p class="text-content">Safety signage provides clear, compliant visual communication designed to promote awareness and
                                     prevent risks in workplaces and public environments. Built for high visibility and durability, it ensures critical 
                                     instructions, warnings, and directions are easily understood and consistently maintained.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="signage-journey">
        <h2 class="display-4 why-text-heading text-white my-4">End-to-End Signage Solutions for Your Business
        </h2>
        <p class="fs-20 text-white text-center pb-4">
            At Brand Signages, we manage every stage of your signage journey with precision and expertise delivering thoughtfully crafted, 
            custom signage solutions that create lasting visual impact for your business.
        </p>

        <div class="journey-steps">

            <!-- Step 1 -->
            <div class="step-card ">
                <div class="step-1">
                    <span class="icon">📍</span>
                    <h3>Site Assessment & Approval</h3>
                </div>
                <div class="step-2">
                    <span class="icon">�</span>
                    <h3>Site Assessment & Approval</h3>
                    <p>Site evaluations and approval ensure full compliance with requirements.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-card">
                <div class="step-1">
                    <span class="icon">🎨</span>
                    <h3>Design Approval</h3>
                </div>
                <div class="step-2">
                    <span class="icon">🎨</span>
                    <h3>Design Approval</h3>
                    <p>Turning your ideas into precise, production-ready technical designs.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-card">
                <div class="step-1">
                    <span class="icon">�</span>
                    <h3>Permissions & Approvals</h3>
                </div>
                <div class="step-2">
                    <span class="icon">�</span>
                    <h3>Permissions & Approvals</h3>
                    <p>Managing all necessary regulatory approvals and legal formalities needed.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="step-card">
                <div class="step-1">
                    <span class="icon">⚙️</span>
                    <h3>Manufacturing & Installation</h3>
                </div>
                <div class="step-2">
                    <span class="icon">⚙️</span>
                    <h3>Manufacturing & Installation</h3>
                    <p>Custom manufacturing and installation of the sign boards and make ready for use.</p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="step-card">
                <div class="step-1">
                    <span class="icon">⭐</span>
                    <h3>Final Check & Cleanup</h3>
                </div>
                <div class="step-2">
                    <span class="icon">⭐</span>
                    <h3>Final Check & Cleanup</h3>
                    <p>Final check and cleanup of the sign to ensure it is ready for use.</p>
                </div>
            </div>

        </div>
    </section>

      <section class="instant-pricing">
            <div class="container">
                <h2>Best Signage Board Makers with 24 Hour <br>Production Line</h2>
                <p>We are the best <b>Signage Board</b> Manufacturers with 24-hours active production capability and expertise.</p>
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

    <section class="new-recent-works">
        <div class="container">
            <h2 class="hero-title  mb-6">Our Recent LED Sign Board <br>Installation Projects</h2>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/titan-store-sign-5.webp"
                            alt="LED Sign Board for Titan Watch- Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Titan Showroom</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/fortis-hospital-name-board-5.webp"
                            alt="LED Sign Board for Fortis Hospital- Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Fortis Hospital</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/cafe-mocha-name-board-4.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Café Mocha</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/tanishq.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Tanishq Showroom</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/prestidge-group-sign-board-5.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Prestige Group</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/medplus-shop-name-board-design.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>MedPlus Pharmacy</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="/contact-us">
                    <button class="contact-btn">Start Your Project</button>
                </a>
            </div>


        </div>
    </section>
    <section class="other-cities-section mt-5">
        <div class="container">
            <h2 class="my-5">We Serve Across All Major Locations<br> in India</h2>
            <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
                <div class="other-cities-card">
                    <a href="https://brandsignages.com/leading-signage-company-in-mumbai" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Sign Boards in Mumbai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Mumbai</p>
                        </div>
                    </a>
                </div>
                <div class="other-cities-card">
                    <a href="https://brandsignages.com/signage-in-chennai" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Sign Boards in Chennai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Chennai</p>
                        </div>
                    </a>
                </div>
                <div class="other-cities-card">
                    <a href="https://brandsignages.com/" style="text-decoration: none;">
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

        <section class="We-Elevate-Brands-section py-5">
        <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">We Create Custom Signage Solutions for<br> Every Industry</h2>
        </div>

        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/healthcare-signss.webp')}}" class="card-img-center"
                                alt="Healthcare Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="/hospital-signages">Healthcare Signage</a></h5>
                                <p class="We-Elevate-Brands-text">Healthcare signage is essential for clear communication and safety. We design custom healthcare
                                     signs for hospitals, clinics, and medical centers, tailored in size and style to suit every facility.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/hotel-restaurant-signs.webp')}}" class="card-img-center"
                                alt="Hotel & Restaurant Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="/restaurant-signages">Hotel & Restaurant</a></h5>
                                <p class="We-Elevate-Brands-text">Make your hotel or restaurant stand out with elegant, custom signage. We create tailored signs 
                                    that match your brand’s style and leave a lasting impression on your guests.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/corporate-office-signs.webp')}}" class="card-img-center"
                                alt="Corporate Office Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="/office-signages">Corporate Office</a></h5>
                                <p class="We-Elevate-Brands-text">Professional corporate office signage that reflects your brand identity. We design custom signs 
                                    that enhance your workspace, impress clients, and create a cohesive office environment. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/retail-shop-sign.webp')}}" class="card-img-center"
                                alt="Retail Shop & Malls Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="/name-board-designs-for-shops-bangalore">Retail Shop & Malls</a></h5>
                                <p class="We-Elevate-Brands-text">Eye-catching retail signage designed to attract customers and boost sales. We create custom
                                     signs that perfectly showcase your store’s brand and style.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/real-estate-signs.webp')}}" class="card-img-center"
                                alt="Real Estate Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/">Real Estate</a></h5>
                                <p class="We-Elevate-Brands-text">Custom real estate signage that highlights your properties and brand. We design durable, 
                                    professional signs to attract buyers and make a lasting impression.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/bank-signage.webp')}}" class="card-img-center"
                                alt="Banking and Finance Signages">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/">Banks & Finance</a></h5>
                                <p class="We-Elevate-Brands-text">Signage solutions that reflect stability and professionalism for banks and financial 
                                    institutions. We create custom signs that strengthen your brand and inspire client confidence.</p>
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
            <a href="/contact-us" class="btn-we-elevate">Start You Project</a>
        </div>
        </div>
    </section>

   
    <section class="we-deliver mb-0 pb-0 mb-md-5" style="background: unset">
        <div class="container">
            <h2 class="brand-title text-center mb-5 text-black">Why Businesses Across India Trust <br>Brand Signages</h2>

            <div class="row">
                <div class="col-md-5 col-12">
                    <img src="{{ asset('frontend/Images/why-brand-signages.webp') }}"
                        alt="" class="img-fluid w-100 h-100 rounded-3" />
                </div>
                <div class="col-md-7 col-12">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/In-House-Experts.png') }}" alt="In-House Experts"
                                    class="img-fluid">
                                <h3>In-House Manufacturing</h3>
                                <p class="text-black">From concept to production, every signage is designed, manufactured, and quality-checked by our 
                                     skilled in-house team, ensuring superior durability, finish, and long-lasting performance.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/Industry-Grade-Products.png') }}"
                                    alt="Industry Grade Products" class="img-fluid">
                                <h3>Premium Materials</h3>
                                <p class="text-black">We use high-quality, industry-grade materials and the latest technology to craft 
                                    signs that are not only visually striking but also built to withstand for a long time and any environment.
                                </p>
                            </div>
                        </div>
                        <hr style="color: gray; margin: 0 32px; 
    width: 90%;">
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/10-Years-of-Expertise.png') }}"
                                    alt="10 Years of Expertise" class="img-fluid">
                                <h3>10+ Years of Experience</h3>
                                <p class="text-black">With over a decade in the signage industry, our expert team delivers professional 
                                    guidance, timely execution, and dependable support for every project.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/Network-and-Customer-Support.png') }}"
                                    alt="Network and Customer Support" class="img-fluid">
                                <h3>Custom Designs & Support</h3>
                                <p class="text-black">Every screen, kiosk, and signage solution is custom-designed digital
                                    signage to match
                                    your branding, environment, viewing distance, and content goals creating a fully
                                    personalized experience.
                                </p>
                            </div>
                        </div>

                    </div>
    </section>

    <section class="container py-5">
        <div class="new-contacts-section">
            <div class="new-contacts-section-overlay">
                <p class="new-contacts-section-text">
                    Your brand identity is the silent ambassador of your business. At Brand Signages, we don't just
                    design sign boards, we craft designs that leave a lasting impression. As premier signage makers in
                    Bangalore, we bring innovation, precision, and artistry to every design.
                </p>
                <a href="{{ route('contact_us') }}" class="new-contacts-section-button"
                    style="text-decoration: none;">Contact Us</a>


            </div>
        </div>
    </section>

    <section>
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            
            <h2 class="hero-title">Clear, Bold & Effective: Brand Signages</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/signage-projects.webp') }}"
                            alt="Signage Projects" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    
                    <p class="brand-description">
                        Brand Signages delivers premium sign board solutions across diverse industries, including 
                        <a href="/office-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">corporate offices</a>, healthcare, education, <a href="/name-board-designs-for-shops-bangalore" style="text-decoration: unset;color:#E43D12; font-weight: bold;">retail shops</a>, hospitality, and real estate. Our expertly 
                        designed directional, safety, <a href="/indoor-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">indoor</a>, outdoor, and <a href="/led-acrylic-3d-glow-sign-board" style="text-decoration: unset;color:#E43D12; font-weight: bold;">LED sign boards</a> enhance navigation, improve safety, and 
                        strengthen brand presence with clarity and visual impact.</p>
                    <h4 class="mb-3">Case Studies</h4>
                  <a href="/case-studies/prestidge-group-sign-board" style="text-decoration: unset;color:#E43D12; font-weight: bold;">
                    <p class="fs-20 d-flex justify-content-between w-100 border-bottom pb-2 mb-0">
                        <span>Prestige Group Office</span>
                        <span>↗️</span>
                    </p>
                    </a>

                    <a href="/case-studies/tanishq-sign-board" style="text-decoration: unset;color:#E43D12; font-weight: bold;">
                    <p class="fs-20 d-flex justify-content-between w-60 border-bottom pb-2 mb-0">
                        <span>Tanishq Showroom</span>
                        <span>↗️</span>
                    </p>
                    </a>

                   <a href="/case-studies/fortis-hospital-sign-board" style="text-decoration: unset;color:#E43D12; font-weight: bold;">
                     <p class="fs-20 d-flex justify-content-between w-100 border-bottom pb-2 mb-0">
                        <span>Fortis Hospital</span>
                        <span>↗️</span>
                    </p>
                    </a>

                </div>
            </div>
    </section>

    <section>
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">Custom Signage for Indoor and <br>Outdoor Impact</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/indoor-signagess.webp') }}"
                            alt="Construction Safety Signs" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="brand-title"><b>Purpose-Driven Indoor Signages</b></h2>
                    <p class="brand-description">
                        Brand Signages creates indoor signage that enhances spaces, guides visitors, and reinforces brand presence. 
                        From illuminated <a href="/led-acrylic-3d-glow-sign-board" style="text-decoration: unset;color:#E43D12; font-weight: bold;">LED sign boards</a> to wall-mounted graphics and <a href="/arcylic-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">acrylic signages</a>, our solutions are designed to 
                        complement your interiors while delivering clear communication.</p>
                    <p class="brand-description">
                        Every indoor sign is carefully crafted to suit your layout, audience movement, and brand tone. Built with quality
                         materials and precise execution, <a href="/" style="text-decoration: unset;color:#E43D12; font-weight: bold;">our signage</a> performs consistently in high-traffic environments and leaves a 
                         lasting visual impression. Our end-to-end approach covers concept development, design, fabrication, and installation,
                          ensuring consistency at every stage.</p>
                        <a href="/indoor-signages">
                    <button class="contact-btn">Know More</button>
                </a>
                </div>
            </div>

            <div class="row align-items-center py-5">


                <div class="col-lg-6">
                    <h2 class="brand-title">Outdoor Signages That Command Attention</h2>
                    <p class="brand-description">
                        Brand Signages designs and manufactures outdoor signage built to perform in demanding environments. From high-visibility LED signboards to premium acrylic and <a href="/metal-signages" style="text-decoration: unset;color:#E43D12; font-weight: bold;">metal signage</a>, our solutions are created 
                        to deliver clarity, impact, and durability across streets, campuses, and commercial spaces.</p>
                    <p class="brand-description">
                        Every project begins with understanding your brand goals and location requirements. Our team transforms ideas into visually striking signage using advanced fabrication techniques and weather-resistant
                         materials, ensuring long-lasting performance in all conditions, whether installed in high-traffic urban areas, corporate complexes, or <a href="/name-board-designs-for-shops-bangalore" style="text-decoration: unset;color:#E43D12; font-weight: bold;">retail exteriors</a>.</p>
                        <a href="/outdoor-signages">
                    <button class="contact-btn">Know More</button>
                    </a>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/outdoor-signagess.webp') }}"
                            alt="Construction Safety Signs" class="img-fluid">
                    </div>
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
    
    
    <section class="testimonial section ">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Customer Testimonial</h2>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none ">
                <div class="col testimonial-small-div">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text">We’ve been using these safety signs on our
                                construction sites, and they’ve been a game-changer. The materials are durable, even in
                                harsh weather, and the visibility ensures everyone stays informed and safe!</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{ asset('frontend/Images/rajesh-k.webp') }}" alt="Rajesh K"
                                    class="client-img">
                                <div>
                                    <div class="client-name">Rajesh K</div>
                                    <div class="client-role">Project Manager</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col testimonial-small-div">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text">Since we installed these signs, our team has been
                                more mindful of safety protocols. They’re clear, and professional, and help us stay
                                compliant with all regulations</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{ asset('frontend/Images/anish-s.webp') }}" alt="Ashish S"
                                    class="client-img">
                                <div>
                                    <div class="client-name">Ashish S</div>
                                    <div class="client-role">Project Manager</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col testimonial-small-div">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text"> We love the customization options for our
                                site-specific hazards. The vibrant colors and bold lettering grab attention, making our
                                workplace significantly safer</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{ asset('frontend/Images/Michael.webp') }}" alt="Michael"
                                    class="client-img">
                                <div>
                                    <div class="client-name">Michael</div>
                                    <div class="client-role">Construction Manager</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col testimonial-small-div">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text">The pricing is competitive without compromising
                                on quality. These safety signs have lasted through months of heavy construction activity
                                and still look brand new!</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{ asset('frontend/Images/Amit.webp') }}" alt="Amit Pandit"
                                    class="client-img">
                                <div>
                                    <div class="client-name">Amit Pandit</div>
                                    <div class="client-role">Operations Head</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col testimonial-small-div">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text">The safety signage has reduced the number of
                                accidents on our sites. It’s an essential part of our safety measures, and we wouldn’t
                                work without it!</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{ asset('frontend/Images/Sushant.webp') }}" alt="Sushant M"
                                    class="client-img">
                                <div>
                                    <div class="client-name">Sushant M</div>
                                    <div class="client-role">Safety Officer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="testimonialCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">We’ve been using these safety signs
                                            on our construction sites, and they’ve been a game-changer. The materials
                                            are durable, even in harsh weather, and the visibility ensures everyone
                                            stays informed and safe!</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/rajesh-k.webp') }}" alt="Rajesh K"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Rajesh K</div>
                                                <div class="client-role">Project Manager</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">Since we installed these signs, our
                                            team has been more mindful of safety protocols. They’re clear, and
                                            professional, and help us stay compliant with all regulations</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/anish-s.webp') }}" alt="Ashish S"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Ashish S</div>
                                                <div class="client-role">Project Manager</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">We love the customization options for
                                            our site-specific hazards. The vibrant colors and bold lettering grab
                                            attention, making our workplace significantly safer</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/Michael.webp') }}" alt="Michael"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Michael</div>
                                                <div class="client-role">Construction Manager</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">We love the customization options for
                                            our site-specific hazards. The vibrant colors and bold lettering grab
                                            attention, making our workplace significantly safer <br> <br></p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/Michael.webp') }}" alt="Michael"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Michael</div>
                                                <div class="client-role">Construction Manager</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">The pricing is competitive without
                                            compromising on quality. These safety signs have lasted through months of
                                            heavy construction activity and still look brand new!</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/Amit.webp') }}" alt="Amit Pandit"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Amit Pandit</div>
                                                <div class="client-role">Operations Head</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">The safety signage has reduced the
                                            number of accidents on our sites. It’s an essential part of our safety
                                            measures, and we wouldn’t work without it!</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/Sushant.webp') }}" alt="Sushant M"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Sushant M</div>
                                                <div class="client-role">Safety Officer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-carousel-controls">
                    <button id="prevButton" class="testimonial-carousel-control" type="button"
                        data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="nextButton" class="testimonial-carousel-control" type="button"
                        data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <div class="carousel-indicators testimonial-carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
            </div>
        </div>
    </section>



    <section class="faq-section">
        <div class="faq-container">
            <h1 class="faq-title">FAQS</h1>

            <div class="faq-item">
                <button class="faq-question">
                    Why are safety signs important on construction sites?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Safety signs are crucial on construction sites to communicate vital information about hazards,
                        guide safe navigation, and ensure compliance with regulations. Their presence minimizes
                        accidents, enhances worker awareness, and promotes a culture of safety among all personnel.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What are the different types of safety signs used in construction?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Construction sites use various safety signs, including mandatory signs (blue), prohibition signs
                        (red), warning signs (yellow), emergency information signs (green), and fire safety signs (red).
                        Each type communicates essential information to prevent accidents and ensure worker safety.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How can safety signs be customized for specific construction projects?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Construction site signs are made to address safety issues of different or specific sites.
                        However, they can also incorporate branding, corporate identity, and multilingual options. These
                        signs are meant to follow regulatory compliance and offer tailored instructional content.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What regulations govern the use of safety signs on construction sites?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Safety signs in construction are governed by workplace safety and health regulations, issued by
                        concerned authorities. We design, develop, and place this construction signage to comply with
                        safety and hazard regulations, and convey the same. Our team knows these regulations and how to
                        make the best of them.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How often should construction safety signs be inspected or replaced?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We suggest our clients check construction safety signs once a month or two to see if they are
                        visible and relevant to people. Although our signs are high-quality, we encourage them to check
                        for significant changes, like weather exposure, erosion, and fading. Also, you can tell us if
                        you want any changes in the sign boards after the inspection.</p>
                </div>
            </div>

        </div>
    </section>
@endsection
