@extends('frontend.layout.appLayout')
@section('content')
<style>
    .process-list li::before {
    content: "";
    position: absolute;
    left: 0;
    color: #474747;
}
    </style>
    <section class="home-page">

        <section class="hero-banner"
            style="background-image: url('{{ asset('/frontend/Images/home/brandsignages-banner.webp') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="hero-banner_title">Empower Your Visibility with <br>Premium Sign Boards in Mumbai</h1>
                        <p>Draw attention and leave a mark with vibrant, interactive sign boards in Mumbai <br>that speak
                            loud and clear.</p>
                        <a href="https://brandsignages.com/contact-us">
                            <button class="contact-btn">Contact Us</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">We Are The Expert Signage Manufacturers in Mumbai</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="rounded">
                    <img src="{{asset('frontend/Images/skyline-of-mumbai-across-back-bay.webp')}}" alt="Skyline View of Mumbai from Back Bay" class="img-fluid rounded">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="We-Elevate-Brands-title">Trusted B2B Signage Partner for Businesses</h2>
                <p class="We-Elevate-Brands-text">
                 Looking for a reliable signage company in Mumbai? Brand Signages is the premier signage manufacturers in Mumbai with 10+ years of rich industry experience. As a leading signage company located in Worli, Mumbai, we design premium-quality
                 sign boards for top companies. We serve small businesses, SMEs, and large-scale businesses across Mumbai, <a href="{{route('signage_company_in_chennai')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">Chennai</a> , 
                 <a href="{{route('index')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">Bangalore</a>, and all over India.
                </p>
                <p class="We-Elevate-Brands-text">
                Signages & sign boards are the most powerful branding tools to introduce, inform, and guide potential audiences. We are proud of our proficiency 
                in signage design services in Mumbai for a decade. Our product range includes <a href="{{route('led_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">LED sign boards </a>,
                       <a href="{{route('digital_signages_manufacturer_in_mumbai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">digital signage </a>,
                       <a href="{{route('premium_acrylic_sign_boards_in_mumbai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">acrylic signage </a>,
                       <a href="{{route('neon_sign_board_in_mumbai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">neon signage </a>, and
                       <a href="{{route('stainless_steel_sign_board_manufacturer_mumbai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">metal signage </a>.  
                </p>
                <ul class="process-list">
                        <li>
                        </i><span style="text-decoration: unset; color: #E43D12; font-weight: bold;"><i class="fas fa-map-marker-alt "></i> Location:</span> 2nd Floor, Vasvani Chambers, WeWork, 264-265, Dr Annie Besant Rd, Worli Shivaji Nagar, Worli, Mumbai, Maharashtra- 400025 
                        </li>
                        <li>
                        <span style="text-decoration: unset; color: #E43D12; font-weight: bold;"><i class="fas fa-phone"></i> Phone: </span><a href="tel:8006606080" class="text-decoration-none text-black">+91
                        8006606080</a>
                        </li>
                        <li>
                        <span style="text-decoration: unset; color: #E43D12; font-weight: bold;"><i class="fas fa-envelope"></i>
                             Email: </span> <a href="mailto:info@brandsinage.com"
                        class="text-decoration-none text-black">sales@brandsignages.com</a>
                        </li>
                    </ul>
        </div>
    </div>
</section>

<section class="container my-5 achievements-section">
            <h2 class="text-center">Milestones That Define Us</h2>
            <div class="row g-3">

                <!-- Large Image Left -->
                <div class="col-lg-6 col-md-6">
                    <div class="achievement-box height-582">
                        <img src="{{ asset('frontend/Images/home/single-brandex.webp') }}" class="img-fluid" alt="Signage Design">
                    </div>
                </div>

                <!-- Top Right: 10+ Years -->
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div
                                class="achievement-box years height-270 text-center p-4 d-flex flex-column justify-content-center">
                                <h3>10+</h3>
                                <p class="mb-0">Years In Signage Design</p>
                            </div>
                        </div>
                        <!-- Top Right: 12,000+ Deliveries -->
                        <div class="col-lg-6 col-md-6">
                            <div
                                class="achievement-box  Deliveries text-center p-4 d-flex flex-column justify-content-center">
                                <h3 class="fs-2 fw-bold">12,000+</h3>
                                <p class="mb-0">Deliveries Done</p>
                            </div>
                        </div>

                        <!-- Top Right: Neon Quote -->
                        <div class="col-lg-6 col-md-6 pb-0">
                            <div class="achievement-box h-100">
                                <img src="{{ asset('frontend/Images/home/fortune-blue.webp') }}"
                                    class="img-fluid rounded-3 h-100 w-100 object-cover" alt="Signage Design">
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Bottom Left: Fashion Week -->
                <div class="col-lg-8 col-md-12">
                    <div class="achievement-box h-100">
                        <img src="{{ asset('frontend/Images/home/fashion-week.webp') }}"
                            class="img-fluid rounded-3 h-100 w-100 object-cover" alt="Fashion Week Signage">
                    </div>
                </div>

                <!-- Bottom Right: Client Base -->
                <div class="col-lg-4 col-md-12">
                    <div class="achievement-box client-base text-dark p-4  d-flex flex-column justify-content-center">
                        <h3 class="fs-2 fw-bold">2,500+</h3>
                        <p class="mb-0">Client Base</p>
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
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/uhouse.webp')}}" class="card-img-center"
                                alt="Metal Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/stainless-steel-sign-board-manufacturer-mumbai">Metal & Steel Signages</a></h5>
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
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/led-display-board-in-mumbai">LED Sign Board</a></h5>
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
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/digital-signages-manufacturer-in-mumbai">Digital Signage</a></h5>
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
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/premium-acrylic-sign-boards-in-mumbai">Acrylic Signage</a></h5>
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
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/neon-sign-board-in-mumbai">Neon Sign Board</a></h5>
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
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/leading-signage-company-in-mumbai">Retail Signage</a></h5>
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
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/leading-signage-company-in-mumbai">Outdoor Signage</a></h5>
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
            <a href="https://brandsignages.com/services" class="btn-we-elevate">View All Services</a>
        </div>
        </div>
    </section>

<x-coustom-inquiry-form />

<section class="pointing mt-5">
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
        </section>

    <section class="new-recent-works">
        <div class="container">
            <h2 class="hero-title  py-5">Our Recent Sign Board <br>Installation Projects</h2>
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





<!--<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Best Signage Solutions for Businesses in Mumbai</h2>
            <p class="card-text text-center">
                We offer customized signage solutions for several industries, making certain that your brand is highlighted. As expert sign board manufacturers, we provide a huge array of signage alternatives to fulfill your needs. We guarantee that our sign boards are long-lasting, efficient, and noticeable. Let us assist your business in making a lasting influence!
                </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-4.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Mumbai  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Healthcare Industry  </h3>
                        <p class="card-text">We outline signage boards that assist in supporting patients and guests, along with wayfinding signage, building signage, and digital signage for hospitals, clinics, and healthcare centers.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-5.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Mumbai">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Restaurant & Hospitality</h3>
                        <p class="card-text">Our sign work comprises LED signage boards, outdoor signs, and acrylic signage that improves the ambiance and assists customers in seamlessly steering your restaurant, cafe, or hotel.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-55.webp')}}" class="why-card-img-top"
                            alt="Signage Manufacturing Company in Mumbai">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3"> Retail Businesses</h3>
                            <p class="card-text">We generate custom signage solutions such as acrylic LED letters, LED displays, and corrugated box signage that pull attention to your outlet, boosting your products and services efficiently.</p>
                        </div>
                    </div>
            </div>
            
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-6.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Mumbai">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Corporate Offices</h3>
                        <p class="card-text"> We offer polished and competent signage alternatives like stainless steel and ACP sign boards for your office or building. These consist of directional signage, office branding, and informative signage.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-77.webp')}}" class="why-card-img-top"
                        alt="Signage Manufacturing Company in Mumbai">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Custom Signage  </h3>
                        <p class="card-text">Whether you require an LED sign, ACP sign, or acrylic signage, our team of proficient designers will produce a solution that suits your brand flawlessly. From sign boards to ignited displays, we provide back-to-back signage pattern and installation services.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="signageCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-4.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Healthcare Industry  </h3>
                                    <p class="card-text">We outline signage boards that assist in supporting patients and guests, along with wayfinding signage, building signage, and digital signage for hospitals, clinics, and healthcare centers.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-5.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Restaurant & Hospitality</h3>
                                    <p class="card-text">Our sign work comprises LED signage boards, outdoor signs, and acrylic signage that improves the ambiance and assists customers in seamlessly steering your restaurant, cafe, or hotel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-55.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3"> Retail Businesses</h3>
                                    <p class="card-text">We generate custom signage solutions such as acrylic LED letters, LED displays, and corrugated box signage that pull attention to your outlet, boosting your products and services efficiently.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/events-mumbai.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Event Signage</h3>
                                    <p class="card-text">Event signage is a go-to choice for your brand's live performance - a strategic communication tool that guides, inspires, and connects. We can create large-scale brand signages to create cohesive experiences, amplify your message, and leave a memorable impression.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-6.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Corporate Offices</h3>
                                    <p class="card-text">Corporate office signage reflects your company's theme- professionalism, innovation, and purpose-driven. As the best, sign board manufacturer, we will produce thoughtfully designed signs to communicate your organization's values, culture, and commitment to excellence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/leading-signage-company-mumbai-77.webp')}}" class="why-card-img-top"
                                    alt="Signage Manufacturing Company in Mumbai">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Custom Signage  </h3>
                                    <p class="card-text">Whether you require an LED sign, ACP sign, or acrylic signage, our team of proficient designers will produce a solution that suits your brand flawlessly. From sign boards to ignited displays, we provide back-to-back signage pattern and installation services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-carousel-controls" style="top: -45px;">
                <button id="prevButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="nextButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="carousel-indicators why-carousel-indicators">
                <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
        </div>
    </div>
</section>-->

<section class="we-deliver">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <h2>The Difference We Deliver</h2>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                        class="img-fluid">
                                    <h3>On-demand Design</h3>
                                    <p>Our expert team provides flexible, personalized signage design and manufacturing services, 
                                        transforming your conceptual ideas into compelling visual narratives that elevate your brand.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Timely Delive"
                                        class="img-fluid">
                                    <h3>Timely Delivery</h3>
                                    <p>We optimize workflows, maintain stringent timelines, and coordinate with the manufacturing team 
                                        to guarantee project completion without compromising quality or design integrity.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Direct Purchase"
                                        class="img-fluid">
                                    <h3>Direct Purchase</h3>
                                    <p>Connect with us and get a quick consultation for your signage project. Our streamlined purchasing pathway 
                                        eliminates all complexity, connecting you straight to the creative brilliance.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box align-items-center">
                                    <a href="https://brandsignages.com/contact-us" class="button">Contact Us</a>
                                </div>
                            </div>

                        </div>
        </section>

<section class="new_client_section container">
            <h2 class="new_client_section-title">Our Valuable Clients Across India</h2>
            <div class="row">
                <div class="col-md-5 new_client_section-image col-12">
                    <img src="{{ asset('frontend/Images/home/client-bg.webp') }}" alt="Our Clients">
                </div>
                <div class="col-md-7 new_client_section-scrolling col-12">

                    <div class="new_client_section-wrapper">
                        <!-- Row 1 (Left to Right) -->
                        <div class="new_client_section-row new_client_section-row-1">
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}" alt="White Gold - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}" alt="Manthan - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Sobha - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Societe Generale - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}" alt="HashedIn - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Innoviti - Our Signage Client">
                            </div>

                            <!-- Duplicates for seamless loop -->
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}" alt="White Gold - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}" alt="Manthan - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Sobha - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Societe Generale - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}" alt="HashedIn - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Innoviti - Our Signage Client">
                            </div>

                        </div>

                        <!-- Row 2 (Right to Left) -->
                        <div class="new_client_section-row new_client_section-row-2">
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}" alt="Puravankara - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}" alt="Flipkart - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}" alt="VYMO - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}" alt="Indusface - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}" alt="Chargebee - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}" alt="Puravankara - Our Signage Client">
                            </div>

                            <!-- Duplicates for seamless loop -->
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}" alt="Puravankara - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}" alt="Flipkart - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}" alt="VYMO - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}" alt="Indusface - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}" alt="Chargebee - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}" alt="Puravankara - Our Signage Client">
                            </div>
                        </div>

                        <!-- Row 3 (Left to Right) -->
                        <div class="new_client_section-row new_client_section-row-3">
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}" alt="Natural - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}" alt="Vakil Search - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}" alt="Bhive Workspace - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Apollo Hospitals - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}" alt="Adarsh Developers - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}" alt="New Horizon Educational Institution - Our Signage Client">
                            </div>
                            <!-- Duplicates for seamless loop -->
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}" alt="Natural - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}" alt="Vakil Search - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}" alt="Bhive Workspace - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Apollo Hospitals - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}" alt="Adarsh Developers - Our Signage Client">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}" alt="New Horizon Educational Institution - Our Signage Client">
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
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The acrylic signage board we bought from this signage company in Mumbai entirely modified our office! The design and installation were ideal. Highly suggested!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                           
                            <div>
                                <div class="client-name">Rajesh Kapoor</div>
                                <div class="client-role">Corporate Manager</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">We required an outdoor sign for our restaurant, and this team supplied an excellent LED sign board that genuinely is outstanding. Superb service and standard!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Priya Sharma</div>
                                <div class="client-role">Restaurant Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">“I’ve worked with various signage companies, but these sign board manufacturers in Mumbai truly intrigued me with their inventive signage design and punctual delivery.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                           
                            <div>
                                <div class="client-name">Amit Verma</div>
                                <div class="client-role">Retailer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">Our new LED signage board has given so much observability to our outlet. The team was competent, and the acrylic LED letters are high-spirited and resistant.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                           
                            <div>
                                <div class="client-name">Natasha Mehra</div>
                                <div class="client-role">Business Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The ACP sign board they supplied for our building signage was far ahead of our expectations. The standard of the substances and the all-rounded coating was extraordinary.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                           
                            <div>
                                <div class="client-name">Sanjay Desai</div>
                                <div class="client-role">Property Developer</div>
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
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The acrylic signage board we bought from this signage company in Mumbai entirely modified our office! The design and installation were ideal. Highly suggested!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                      
                                        <div>
                                            <div class="client-name">Rajesh Kapoor</div>
                                            <div class="client-role">Corporate Manager</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">We required an outdoor sign for our restaurant, and this team supplied an excellent LED sign board that genuinely is outstanding. Superb service and standard!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        
                                        <div>
                                            <div class="client-name">Priya Sharma</div>
                                            <div class="client-role">Restaurant Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">“I’ve worked with various signage companies, but these sign board manufacturers in Mumbai truly intrigued me with their inventive signage design and punctual delivery.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                       
                                        <div>
                                            <div class="client-name">Amit Verma</div>
                                            <div class="client-role">Retailer</div>
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
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">“I’ve worked with various signage companies, but these sign board manufacturers in Mumbai truly intrigued me with their inventive signage design and punctual delivery. <br> <br> </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                       
                                        <div>
                                            <div class="client-name">Amit Verma</div>
                                            <div class="client-role">Retailer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">Our new LED signage board has given so much observability to our outlet. The team was competent, and the acrylic LED letters are high-spirited and resistant.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                       
                                        <div>
                                            <div class="client-name">Natasha Mehra</div>
                                            <div class="client-role">Business Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The ACP sign board they supplied for our building signage was far ahead of our expectations. The standard of the substances and the all-rounded coating was extraordinary.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                       
                                        <div>
                                            <div class="client-name">Sanjay Desai</div>
                                            <div class="client-role">Property Developer</div>
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

 <section class="other-cities-section mt-5">
    <div class="container">
        <h2 class="my-5">Sign Board in Other Cities</h2>
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

<section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Signage & Branding</h2>
            <p class="text-center We-Elevate-Brands-text">Explore the latest trends, tips, and expert insights in the signage designs through our articles.</p>

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
                            <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') }}
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
        <h1 class="faq-title">Signage Mumbai - FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">
            What is Signage Used For in Different Industries?
            <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Signages are used in various industries for different purposes. The primary goal is to enhance branding, communicate messages, 
                    and improve navigation. Here are the key uses mentioned:</p>
                <ul>
                    <li>Branding & Marketing – Businesses use signage to display their logo, promote offers, and enhance brand visibility.</li>
                    <li>Wayfinding & Navigation – Helps people find directions in malls, hospitals, offices, and public spaces.</li>
                    <li>Safety & Compliance – Includes fire safety signs, construction signs, and hazard warnings to ensure safety.</li>
                    <li>Retail & Advertising – Digital and traditional signage in stores to promote products and boost sales.</li>
                    <li>Corporate & Office Use – Nameplates, department signs, and meeting room displays for organization and professionalism.</li>
                    <li>Event & Exhibition Signage – Used for banners, standees, and digital screens to guide attendees.</li>
                    <li>Informational Signage – Displays important messages, notices, or public announcements.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How to Choose a Signage?  
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Selecting the right signage board depends on business location, type, and branding requirements. You can choose a signage by:</p>
                <ul>
                    <li><strong>Requirements</strong> - First identify the requirements and based on that choose from various materials.</li>
                    <li><strong>Location & Visibility</strong> - Choose signage that stands out in your environment, whether you use it for indoors or outdoors.</li>
                    <li><strong>Design & Readability</strong> - Ensure the signage has fonts, high-contrast colors, and an eye-catching design.</li>
                    <li><strong>Hire Professionals</strong> - Collaborate with expert sign board manufacturers to get a high-quality and customized solution.</li>
                </ul>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What Type of Signage Products do You Provide in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>As a top-tier signage maker, we provide all types of indoor and outdoor signage. Our comprehensive range of signage services include:</p>
                <ul>
                    <li>Acrylic Signage</li>
                    <li>Metal Signage (Aluminum, Steel)</li>
                    <li>Neon Glow Signages</li>
                    <li>LED Signages</li>
                    <li>Digital Signages</li>
                </ul>
                <p>We also offer installation and maintenance support for all types of signage in Mumbai.</p> 
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is the Time Period for Manufacturing and Delivering Signages?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The design and manufacturing time for a signboard is based on the size and complexity of the project. On average, it can take approximately 7 to 15 days for a sign board maker in Mumbai to finish a custom sign, along with installation.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is The Process for Bulk Signage Orders in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>You can also place bulk signage orders in Mumbai. We provide volume-based pricing model and custom pricing packages for signages. Whether you need a single piece or place bulk orders, we provide top-notch customer support services. We guarantee the most affordable signage solutions without compromising quality standards.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can You Install Signage Boards at My Location in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we provide signage installation to any specific location in Mumbai. As a reliable signage manufacturer, we guarantee a full-scale solution from design to manufacturing and installation. You can reach our customer support for any other queries.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                How Can Signage be Profitable for My Business in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Signage in Mumbai plays a major part in enhancing your brand presence and attracting customers. A well-designed sign board can grasp awareness and promote customer experience, fostering all-rounded business victory.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I Get a Sample before Placing a Bulk Order?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, you can definately place order for a single piece. This will help you know about the quality, durability, and design of our signage products before placing bulk ordwers. We want you to be completely satisfied with your choice, so feel free to request a sample to ensure it meets your expectations before making a commitment.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can You Create Signage for Events and Exhibitions in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we also provide signage for events and exhibitions in Mumbai. Whether you need banners, standees, directional signages, we have the right resources to meet your specific needs. As a industry leading signage manufacturer in Mumbai and india we provide custom signage solutions. </p>
            </div>
        </div>

    </div>
</section>



@endsection