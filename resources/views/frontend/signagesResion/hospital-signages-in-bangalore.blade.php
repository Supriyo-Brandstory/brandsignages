@extends('frontend.layout.appLayout')
@section('content')

<section class="simple-impact-hero">
        @php
            $slides = [
                [
                    'img' => 'hospital-signage-1',
                    'title' => 'Hospital Signage Solutions for Modern Healthcare Spaces',
                    'desc' =>
                        'From reception signs and department to emergency exit and wayfinding signs, we design durable hospital sign boards for hospitals across India.',
                ],
                [
                    'img' => 'hospital-signage-2',
                    'title' => 'Custom Hospital Sign Boards Designed for Clear Navigation',
                    'desc' =>
                        'Enhance patient experience and hospital branding with custom hospital signage designed for clear communication and smooth navigation.',
                ],
                [
                    'img' => 'hospital-signage-3',
                    'title' => 'Custom-Made Hospital Signage with High-Visibility Branding',
                    'desc' =>
                        'From OPD signs to ICU signs and emergency wayfinding systems, our hospital signages are built for high-visibility and long-term performance.',
                ],
            ];
        @endphp

        <div class="hero-slides-wrapper" id="heroSlider">
            @foreach ($slides as $slide)
                <div class="impact-slide {{ $loop->first ? 'active' : '' }}">
                    <img src="/frontend/Images/new/{{ $slide['img'] }}.webp" alt="{{ $slide['title'] }}">

                    <div class="hero-dark-overlay">
                        <div class="container container-large">
                            <div class="hero-content-final">
                                <h1 class="hero-msg-title">{{ $slide['title'] }}</h1>
                                <p class="hero-msg-desc">{{ $slide['desc'] }}</p>

                                <div class="hero-msg-actions">
                                    <a href="{{ route('contact_us') }}" class="btn-impact primary">
                                        I am Interested <i class="fas fa-arrow-right"></i>
                                    </a>
                                    <a href="{{ route('contact_us') }}" class="btn-impact secondary">
                                        Get a Quote <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="hero-pagination-dots">
            @foreach ($slides as $index => $slide)
                <div class="dot {{ $index === 0 ? 'active' : '' }}" onclick="goToSlide({{ $index }})"></div>
            @endforeach
        </div>
    </section>

    <section class="instant-pricing ">
        <div class="container py-5">
            <h2>Hospital Signage Solutions for Better <br>Patient Navigation</h2>
            <p>Hospitals are busy environments where clear communication significantly improves patient comfort and overall
                 operational efficiency. Well-designed hospital signages help patients, visitors, and staff find departments,
                  emergency areas, waiting zones, and critical care units without confusion or delay. At Brand Signages, we create custom hospital signage solutions that combine functionality, visibility, and 
                modern healthcare aesthetics. From directional sign boards and department identifiers to <a href="/outdoor-signages" style="color:#E43D12; text-decoration:none;"><b>outdoor signage</b></a>, 
                reception branding, and safety signs, every <a href="/" style="color:#E43D12; text-decoration:none;"><b>signage board</b></a> is designed to support seamless navigation and improve 
                the overall patient experience.
            </p>
            <p>

            <p>Our hospital sign boards in Bangalore, India are manufactured using high-quality materials like <a href="/led-acrylic-3d-glow-sign-board" style="color:#E43D12; text-decoration:none;"><b>LED</b></a>, <a href="/arcylic-signages" style="color:#E43D12; text-decoration:none;"><b>acrylic</b></a>, 
            metal, and vinyl, with easy-to-read typography, durable finishes, and strategic placement planning. Whether it is a multi-speciality hospital, diagnostic center, or nursing home, we design signage systems that align with your hospital branding.</p>
            <!-- Product Impact Gallery Grid -->
            <div class="impact-gallery-grid mt-5">
                @php
                    $galleryItems = [
                        ['img' => 'hospital-signs-1', 'title' => 'Hospital Signage', 'class' => 'red-title'],
                        ['img' => 'hospital-signs-2', 'title' => 'Hospital Name Board', 'class' => 'red-title'],
                        ['img' => 'hospital-signs-3', 'title' => 'Hospital Sign Board', 'class' => 'red-title'],
                        ['img' => 'hospital-signs-4', 'title' => 'Hospital Signage Board', 'class' => 'red-title'],
                        ['img' => 'hospital-signages-5', 'title' => 'Hospital Sign Board', 'class' => 'red-title'],
                        ['img' => 'hospital-signages-6', 'title' => 'Hospital Signage', 'class' => 'red-title'],
                        ['img' => 'hospital-signages-7', 'title' => 'Hospital Signage', 'class' => 'red-title'],
                        ['img' => 'hospital-signages-8', 'title' => 'Hospital Signage', 'class' => 'red-title'],
                        ['img' => 'hospital-signages-9', 'title' => 'Hospital Signage', 'class' => 'red-title'],
                        ['img' => 'hospital-signages-10', 'title' => 'Hospital Signage', 'class' => 'red-title'],
                        ['img' => 'hospital-signages-11', 'title' => 'Hospital Signage', 'class' => 'red-title'],
                        ['img' => 'hospital-signages-12', 'title' => 'Hospital Signage', 'class' => 'red-title'],
                        ['img' => 'hospital-signages-13', 'title' => 'Hospital Sign Board', 'class' => 'red-title'],
                        ['img' => 'hospital-signages-14', 'title' => 'Hospital Signage', 'class' => 'red-title'],
                        ['img' => 'hospital-signage-15', 'title' => 'Restroom Signage', 'class' => 'red-title'],
                    ];
                @endphp

                @foreach ($galleryItems as $item)
                    <div class="impact-card buy-now-btn" data-product="{{ $item['title'] }}" style="cursor: pointer;">
                        <div class="impact-card-inner">
                            <img src="/frontend/Images/new/{{ $item['img'] }}.webp" alt="{{ $item['title'] }}"
                                class="impact-image">
                            <div class="impact-title-box">
                                <span class="{{ $item['class'] ?? '' }}">{{ $item['title'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="text-center">
            <a href="#pricing">
                <button class="contact-btn">Check Pricing</button>
            </a>
        </div>
    </section>

    <section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Benefits of Hospital Signage for Modern <br>Healthcare Facilities</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/hospital-2.webp')}}" alt="Premium Hospital Sign Boards - Brand Signages"
                        class="img-fluid sefimg-2">
                </div>
            </div>

            <div class="col-lg-6">
               
                <p class="fs-20">
                    Patients and visitors often struggle to locate departments in large healthcare facilities. Well-planned hospital signage placement helps people move through OPDs, ICUs, waiting areas, and consultation rooms without unnecessary confusion or delays. Clear and easy-to-read <a href="/indoor-signages" style="color:#E43D12; text-decoration:none;"><b>indoor signages</b></a> help reduce stress for patients and visitors by providing instant guidance.

                    </p>
                <p class="brand-description">
                    Informational and digital hospital signages are used to display healthcare services, announcements, doctor availability, emergency instructions, visiting timings, and patient guidance. This helps hospitals communicate more effectively across different touchpoints.
                </p>
                <p class="brand-description">Hospitals require proper safety communication in high-risk and emergency zones. <a href="/safety-signages" style="color:#E43D12; text-decoration:none;"><b>Safety signages</b></a> help identify emergency exits, restricted areas, fire safety equipment, hazard zones, and mandatory instructions, improving awareness and emergency preparedness throughout the facility.

                </p>    

            </div>
        </div>
    </div>
</section>

  <x-trust-features />

      <section class="We-Elevate-Brands-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="We-Elevate-Brands-heading fw-bold">Our Hospital Signage Solutions <br>By Use Type</h2>
            </div>

            <div class="position-relative">
                <div class="swiper We-Elevate-Brands-swiper pt-60">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                    <img src="{{ asset('frontend/Images/new/direction-sign.webp') }}"
                                        class="card-img-center" alt="Directional Signage">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title">Directional Signage</h5>
                                        <p class="We-Elevate-Brands-text">Directional sign boards help patients and visitors navigate hospitals easily.
                                             These hospital wayfinding signages are strategically placed to guide people across departments, wards, and
                                              facilities, reducing confusion and improving patient experience.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                    <img src="{{ asset('frontend/Images/new/identification.webp') }}"
                                        class="card-img-center" alt="Identification Signages">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title">Identification Signage</h5>
                                        <p class="We-Elevate-Brands-text">Our hospital identification signage helps patients and visitors easily identify 
                                            hospital addresses, consultation rooms, operation theaters, emergency wards, and other important areas within 
                                            the facility. Designed for clear visibility and communication.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <a href="2d-stencil-cut-acrylic-led-letters" style="text-decoration:none; color:inherit;">
                                    <img src="{{ asset('frontend/Images/new/information-board.webp') }}"
                                        class="card-img-center" alt="Information Signage">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title"><a
                                                href="2d-stencil-cut-acrylic-led-letters">Information Signage</a>
                                        </h5>
                                        <p class="We-Elevate-Brands-text">Communicate important information clearly with our hospital informational signages.
                                             From visiting hours and department details to hospital guidelines and safety instructions, these sign boards help
                                              patients and visitors stay informed throughout the facility. 
                                        </p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                    <img src="{{ asset('frontend/Images/new/safety-sign.webp') }}"
                                        class="card-img-center" alt="Safety Signage">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title">Safety Signage</h5>
                                        <p class="We-Elevate-Brands-text">Safety signages play a vital role in maintaining a secure healthcare environment
                                             for patients and visitors. Our hospital safety sign boards are designed to clearly communicate emergency exits, 
                                             fire safety instructions, restricted areas, & hazard warnings.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                    <img src="{{ asset('frontend/Images/new/way-finding.webp') }}"
                                        class="card-img-center" alt="Wayfinding Signage">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title">Wayfinding Signage</h5>
                                        <p class="We-Elevate-Brands-text">Our hospital wayfinding signage solutions are designed to simplify navigation across
                                             large healthcare facilities. These sign boards help patients, visitors, and staff move through different departments and 
                                             hospital areas easily and without confusion.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                    <img src="{{ asset('frontend/Images/new/hospital-8.webp') }}"
                                        class="card-img-center" alt="Digital Signage">
                                    <div class="card-body pt-0">
                                        <h5 class="We-Elevate-Brands-title">Digital Signage</h5>
                                        <p class="We-Elevate-Brands-text">Enhance hospital communication with our digital signage solutions designed for modern 
                                            healthcare environments. These dynamic digital displays help share real-time updates, announcements, directions, 
                                            and appointment information.</p>
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


        </div>
    </section>

    <section id="pricing" class="pb-5">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">Hospital Signage Size & Pricing <br>Explore Options</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/new/hospital-signage-117.webp') }}" alt="Hospital Signage Board Design"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fs-20">
                        The cost of any hospital sign board prices vary based on size, design complexity, lighting, and color options- includes material selection and installation.
                    </p>

                    <p class="fs-20"><strong>Popular Size Options Include:</strong></p>
                    <ul class="fs-20" style="padding-left: 18px;">
                        <li><b>Small Sign Boards:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹1,000 – ₹10,000)</li>
                        <li><b>Medium Sign Boards:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹10,000 – ₹25,000)</li>
                        <li><b>Large Sign Boards:</b> 4 ft x 8 ft (₹25,000 – ₹35,000)</li>
                        <li><b>Custom Dimensions:</b> Depends on your design & customization.</li>
                    </ul>

                    <p class="fs-20">
                        Our hospital signages are designed using high-quality, durable materials to ensure clear visibility and long-term performance in demanding healthcare environments. 
                        Built for both indoor and outdoor applications, these hospital signage offer excellent readability, weather resistance, and low maintenance.
                    </p>

                    <a href="https://brandsignages.com/contact-us" bis_skin_checked="1">
                        <button class="contact-btn">Book Order Now</button>
                    </a>
                </div>


            </div>
        </div>
    </section>

        <section class="new-recent-works">
        <div class="container">
            <h2 class="hero-title  mb-6">Our Recently Completed Projects</h2>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/case-studies/titan-store-sign-5.webp"
                            alt="Led Sign Board for Titan Watch- Brand Signages" class="img-fluid">
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

            <section class="we-deliver"
        style="background: url('{{ asset('frontend/Images/new/hospital-signage-118.webp') }}') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h2>Brand Signages Create Smarter Healthcare Space</h2>
                </div>
                <div class="col-md-8 col-12">

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/person-ico.webp') }}" alt="In-House Experts"
                                    class="img-fluid">
                                <h3>In-House Experts</h3>
                                <p>
                                    Brand Signages works with experienced signage professionals who understand the importance of clarity and accessibility in healthcare environments. We design customized hospital signages that improve navigation, communication, and experience.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/settings-ico.webp') }}"
                                    alt="Industry Grade Products" class="img-fluid">
                                <h3>Quality Manufacturing</h3>
                                <p>We use premium-quality materials and modern manufacturing to create hospital sign boards built for long-term performance. From wayfinding signs and department boards to reception branding, our solutions are designed for high visibility.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/trusted-ico.webp') }}"
                                    alt="10 Years of Expertise" class="img-fluid">
                                <h3>Industry Experience</h3>
                                <p>With 12+ years of expertise in signage manufacturing, we create hospital signage systems that support organized healthcare operations. Our sign boards are designed with clear typography, easy readability, and professional aesthetics.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/speed-ico.webp') }}"
                                    alt="Network and Customer Support" class="img-fluid">
                                <h3>End-to-End Support</h3>
                                <p>From design and production to installation and maintenance, Brand Signages provides complete support for hospital signage. We ensure timely delivery, precise execution, and seamless installation while maintaining high standards of quality.
                                </p>
                            </div>
                        </div>

                    </div>
    </section>



    <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/new/reception-signage.webp') }}"
                    alt="Irani Cafe LED Sign Board - Brand Signages">
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
                    <img src="{{ asset('frontend/Images/home/arrow-left.png') }}" alt="Arrow Left" width="40"
                        height="40">
                </div>
                <div class="new_testimonial-button-next">
                    <img src="{{ asset('frontend/Images/home/arrow-right.png') }}" alt="Arrow Right" width="40"
                        height="40">
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
                                    <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}"
                                        alt="Sneha Reddy- Our Client" class="rounded-circle me-3" width="50"
                                        height="50">
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
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50"
                                        height="50">
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
                                        alt="Sandeep Gupta - Our Client" class="rounded-circle me-3" width="50"
                                        height="50">
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



<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title">Frequently Asked Questions</h1>

        <div class="faq-item">
            <button class="faq-question">
                What kinds of hospital signages do you provide?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We provide an extensive array of hospital signage solutions across India, comprising hospital wayfinding signage for lucid steerage, hospital digital signage for immediate interaction, and traditional hospital signage boards customized to improve your facility's organization and patient experience.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Why is hospital wayfinding signage important?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Hospital wayfinding signages help patients, visitors, and staff easily navigate through different departments and hospital areas. Clear directional sign boards reduce confusion, save time, and make it easier for people to find consultation rooms, emergency wards, pharmacies, and other important locations within the facility.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you provide digital signage for hospitals?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, our hospital digital signage solutions showcase prompt updates, proclamations, and directions. These digital signage boards promote interaction, match operations, and create a contemporary, effective landscape for workers, patients, and guests alike.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you provide custom hospital signage boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we design and manufacture customized hospital signage boards tailored to your specific requirements. From hospital name boards and department signs to wayfinding, safety, and informational signages, our solutions are designed to match your hospital branding while improving navigation and communication.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What Makes Brand Signages’ hospital sign boards different?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our hospital sign boards are designed with a strong focus on visibility, durability, and functionality for modern healthcare environments. At Brand Signages, we use high-quality materials, clear typography, and customized designs to create signages that improve navigation, communication, and overall patient experience.</p>
            </div>
        </div>

    </div>
</section>


<script>
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.impact-slide');
            const dots = document.querySelectorAll('.dot');
            let current = 0;
            let slideInterval;

            function showImpactSlide(n) {
                slides[current].classList.remove('active');
                dots[current].classList.remove('active');
                current = (n + slides.length) % slides.length;
                slides[current].classList.add('active');
                dots[current].classList.add('active');
            }

            window.goToSlide = function(n) {
                showImpactSlide(n);
                resetInterval();
            }

            function nextImpactSlide() {
                showImpactSlide(current + 1);
            }

            function resetInterval() {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextImpactSlide, 5000);
            }

            resetInterval();
        });
    </script>


    <script>
        document.addEventListener('click', function(e) {
            var button = e.target.closest('.buy-now-btn');
            if (button) {
                e.preventDefault();
                var productInfo = button.getAttribute('data-product');

                var modalEl = document.getElementById('globalContactPopup');
                if (modalEl && typeof bootstrap !== 'undefined') {
                    var myModal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                    var messageField = document.querySelector(
                        '#globalPopupForm textarea[name="message"]');
                    if (messageField) {
                        messageField.value = 'I am interested in ' + productInfo +
                            '. Please provide more details.';
                    }
                    myModal.show();
                }
            }
        });
    </script>

<style>
    .carousel-caption-custom {
        padding: 32px 64px 32px 64px;
    }

    @media (max-width: 576px) {
        .carousel-section .carousel-item img {
            margin-top: 10px;
        }

        .carousel-caption-custom {
            padding: 15px !important;
        }
    }

    .sefimg-2 {
        height: 442px !important;
        object-fit: cover;

    }

    .sefimg-3 {
        height: 387px !important;
        object-fit: cover;
    }

    .cndimag {

        height: 338px !important;
        object-fit: cover;
    }
</style>

@endsection 