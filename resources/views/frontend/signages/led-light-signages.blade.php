@extends('frontend.layout.appLayout')
@section('content')
    <section class="hero-banner"
        style="background-image: url('{{ asset('/frontend/Images/home/led-signagesbengalor-banner.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Brilliant LED Name Boards That </br>Make Your Brand Shine</h1>
                    <p>Enhance your storefront with premium LED name boards. Designed for superior </br>visibility and
                        lasting performance, our creations ensure your brand never goes unnoticed.
                    </p>
                    <a href="https://brandsignages.com/contact-us">
                        <button class="contact-btn">Get Free Quote</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5" id="gallery-container">
            <h2 class="hero-title  mb-4">Shine Brighter, Get Noticed with LED Sign Boards</h2>
            <p class=" text-center mb-5">Make your brand impossible to ignore with LED name boards from <a
                    style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com"><strong>Brand
                        Signages</strong></a>. Designed to attract
                attention from every angle, our sign boards ensure your business stands out in crowded streets and busy
                commercial areas. With
                vibrant colors, sharp visuals, and eye-catching designs, these boards turn heads and leave a lasting
                impression on every passerby.<br></br>
                LED name boards are not just visually striking- they’re functional, energy-efficient, and built for
                longevity.
                Whether for <a style="color: #E43D12;text-decoration: none;"
                    href="https://brandsignages.com/indoor-signages"><strong>indoor branding</strong></a>, <a
                    style="color: #E43D12;text-decoration: none;"
                    href="https://brandsignages.com/name-board-designs-for-shops-bangalore"><strong>shop name
                        board</strong></a>, or <a style="color: #E43D12;text-decoration: none;"
                    href="https://brandsignages.com/outdoor-signages"><strong>outdoor sign board</strong></a>, they provide
                high visibility that communicates your brand message
                clearly, day or night. In a market where first impressions matter, investing in the right LED sign boards
                ensures your brand is seen,
                remembered, and trusted.<br></br>
                Our <a style="color: #E43D12;text-decoration: none;"
                    href="https://brandsignages.com/led-sign-board-in-bangalore"><strong>LED sign boards</strong></a>
                feature elegant typography, bold graphics, and full-color or classic-color options, tailored
                to reflect your business identity. From retail stores and restaurants to corporate offices and public
                spaces, our LED solutions cater to
                every industry.
            </p>

            <div class="row align-items-center new-lighbox">

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-1.webp')}}" data-lightbox="Acrylic LED Signboard Design"
                        data-title="Image 1">
                        <img src="{{asset('frontend/Images/acrylic-led-1.webp')}}" class="img-fluid"
                            alt="Acrylic LED Signboard Design" style="width: 100%;">
                        <span>Outdoor LED Sign Board</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-2.webp')}}" data-lightbox="LED Signboard Design"
                        data-title="Image 2">
                        <img src="{{asset('frontend/Images/led-2.webp')}}" class="img-fluid" alt="LED Signboard Design"
                            style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/message-board-3.webp')}}" data-lightbox="LED Message Board Design"
                        data-title="Image 3">
                        <img src="{{asset('frontend/Images/message-board-3.webp')}}" class="img-fluid"
                            alt="LED Message Board Design" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-lightbox-4.webp')}}" data-lightbox="LED Lightbox Design"
                        data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-lightbox-4.webp')}}" class="img-fluid"
                            alt="LED Lightbox Design" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-lightbox-5.webp')}}" data-lightbox="LED Lightbox Design"
                        data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-lightbox-5.webp')}}" class="img-fluid"
                            alt="LED Lightbox Design" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-6.webp')}}" data-lightbox="LED Signboard Design"
                        data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-6.webp')}}" class="img-fluid" alt="LED Signboard Design"
                            style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-signboard-4.webp')}}"
                        data-lightbox="Acrylic LED Signboard Design" data-title="Image 4">
                        <img src="{{asset('frontend/Images/acrylic-led-signboard-4.webp')}}" class="img-fluid"
                            alt="Acrylic LED Signboard Design" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-signboard-6.webp')}}"
                        data-lightbox="Acrylic LED Signboard Design" data-title="Image 4">
                        <img src="{{asset('frontend/Images/acrylic-led-signboard-6.webp')}}" class="img-fluid"
                            alt="Acrylic LED Signboard Design" style="width: 100%;">
                    </a>
                </div>


            </div>
        </div>
    </section>
    <section class="new-recent-works">
        <div class="container">
            <h2 class="hero-title  mb-4">Our Recent Works</h2>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="http://brandsignages.test/frontend/Images/new/Mumbai.webp"
                            alt="Best LED Signage Manufacturers" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Sagility Health</h4>
                            <a href="#">Start Project ➣</a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="http://brandsignages.test/frontend/Images/new/Mumbai.webp"
                            alt="Best LED Signage Manufacturers" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Sagility Health</h4>
                            <a href="#">Start Project ➣</a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="http://brandsignages.test/frontend/Images/new/Mumbai.webp"
                            alt="Best LED Signage Manufacturers" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Sagility Health</h4>
                            <a href="#">Start Project ➣</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#">
                    <button class="contact-btn">See All Projects</button>
                </a>
            </div>


        </div>
    </section>



    <section>
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">LED Name Boards: Merging Brilliance </br>with Modern Design</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-signage2.webp')}}" alt="Best LED Signage Manufacturers"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="brand-description">
                        LED name boards have become a defining element of modern branding, where light meets creativity to
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/indoor-signages"><strong>make your business shine</strong></a>.
                        <strong>Designed for maximum
                            visibility</strong>, these boards highlight your brand name and logo with exceptional clarity,
                        ensuring they stay etched in every viewer’s mind. For indoor
                        applications, acrylic LED name boards add a sleek and polished appeal, making them ideal for
                        reception areas, showrooms, and boutiques.
                    </p>
                    <p class="brand-description">
                        When it comes to outdoor branding, our weather-resistant LED sign boards ensure your message remains
                        bright and clear, even under challenging conditions.
                        Built with high-intensity illumination and premium materials, they make your storefront impossible
                        to miss, whether day or night.
                    </p>
                    <p class="brand-description">
                        Unlike conventional signage, LED name boards blend energy efficiency with durability and aesthetic
                        appeal. They’re customizable in design, color, and size,
                        making them a <strong>perfect fit for diverse industries</strong> such as <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/hospital-signages"><strong>healthcare</strong></a>, retail, and
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/restaurant-signages"><strong>restaurant</strong></a>. With Brand
                        Signages expertise, every LED name board becomes more
                        than just a sign, it becomes a statement of identity and innovation, built to captivate and last.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="BuiltToLast-section"
        style="background: url('{{ asset('frontend/Images/new/Premium-LED-Sign-bg.png') }}') no-repeat;">

        <div class="BuiltToLast-container">
            <h2 class="BuiltToLast-heading">Our Recent Projects: LED Name Boards by Brand Signages</h2>
            <p class="BuiltToLast-description">
                Make your brand unmissable with premium LED name boards by <strong>Brand Signages</strong>. Designed to
                impress at first glance, our boards combine
                vibrant illumination with refined craftsmanship to elevate your brand’s presence. Every LED board we create
                reflects <strong>precision, creativity,
                    and innovation</strong>, crafted to shine bright, enhance visibility, and make a powerful statement both
                day and night.
            </p>
            <div class="BuiltToLast-images">
                <div class="add-text">
                    <img src="{{asset('frontend/Images/new/cardamom-sign.webp')}}"
                        alt="Titan Showroom LED Sign Board Design" class="BuiltToLast-img">
                    <a href="#">Add Heding</a>

                </div>
                <div class="add-text">
                    <img src="{{asset('frontend/Images/new/congrats-sign.webp')}}"
                        alt="Fortis Healthcare LED Sign Board Design" class="BuiltToLast-img">
                    <a href="#">Add Heding</a>

                </div>
                <div class="add-text">
                    <img src="{{asset('frontend/Images/led-sign-3.webp')}}" alt="Café Mocha LED Sign Board Design"
                        class="BuiltToLast-img">
                    <a href="#">Add Heding</a>
                </div>
            </div>
        </div>
    </section>

    <section class="new_custom-why-choose pb-5">
        <div class="container">
            <h2 class="text-center mb-5 new_custom-heading">Why Choose Brand Signages for LED <br>Light Name Boards?</h2>
            <div class="row justify-content-center g-4">

                <!-- Expertise -->
                <div class="col-md-4 justify-content-between d-flex flex-column">
                    <div class="new_custom-box new_custom-light-box d-flex flex-column justify-content-between ">
                        <p>Backed by years of hands-on experience, we specialize in LED sign boards that blend functionality
                            with creativity.
                            Our experts ensures every design aligns with your brand identity.</p>
                        <h4 class="new_custom-title">Expert Craftsmanship</h4>
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
                            <h4 class="new_custom-title text-white">Tailored Solution</h4>
                            <p class="text-white">We believe no two brands are the same. That’s why every LED name board we
                                design is fully customizable,
                                whether you need a sleek indoor display for a boutique or a high-visibility outdoor sign for
                                a corporate space.</p>
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
                        <h4 class="new_custom-title">Superior Material</h4>
                        <p>We use only premium-grade acrylic, stainless steel, and advanced LED modules to ensure your
                            signage remains brilliant, long-lasting,
                            and energy-efficient. Each board is crafted to withstand time, weather, and constant visibility
                            demands.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="other-cities-section py-5">
        <div class="container">
            <h2 class="my-5">Led Sign Board in Other Cities</h2>
            <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
                <div class="other-cities-card">
                    <a href="https://brandsignages.com/led-display-board-in-mumbai" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="LED Sign Boards Mumbai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Mumbai</p>
                        </div>
                    </a>
                </div>
                <div class="other-cities-card">
                    <a href="https://brandsignages.com/led-display-board-in-chennai" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="LED Sign Boards Chennai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Chennai</p>
                        </div>
                    </a>
                </div>
                <div class="other-cities-card">
                    <a href="https://brandsignages.com/led-sign-board-in-bangalore" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="LED Sign Boards Bangalore">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Bangalore</p>
                        </div>
                    </a>
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
                    What are the advantages of using LED light sign boards? 
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <P>There are a few advantages of using LED light sign boards:</P>
                    <ul>
                        <ul>
                            <li>Low Energy Consumer: LED sign boards consume a low amount of electricity.</li>
                            <li>Weatherproof: it is weatherproof and safe to place in an outdoor palace.</li>
                            <li>Low Maintenance: They are easy to maintain and more effective to place in any location.</li>
                            <li>Customizable: You can easily personalize your light sign board according to your brand
                                image.</li>
                        </ul>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What types of LED signboards are ideal for businesses in Bangalore?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Businesses in Bangalore can benefit from various LED signboards, including 2D and 3D LED signs for
                        retail stores, glow signboards for restaurants and cafes, acrylic LED signs for corporate offices,
                        and digital signage for malls and commercial spaces. Brand Signages offers customized solutions with
                        a dedicated manufacturing facility to meet your specific needs.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are LED sign boards suitable for promoting my retail store?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Definitely! LED signboards are highly efficient for retail store promotion, as they are transparent
                        day and night, long-lasting, and energy-saving. They seize awareness and offer lucid information,
                        making them perfect for any enterprise.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can LED sign boards be customized for my business?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, you can easily customize your brand’s LED sign boards. You can choose color, design, style,
                        font, and lighting effects that match your brand identity effortlessly.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can I Use LED Light Sign Board for Outdoor Use?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, you can use LED light sign boards for outdoor places. They are weatherproof, long-lasting, which
                        offer superior visibility in a variety of outdoor settings. They are ideal for both during the day
                        and at night for boosting brand visibility because of their brilliant illumination.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    LED sign boards compared to traditional signage- which one is better in energy-efficient?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>It is one of the most significant questions that you should know when you choose LED sign boards. In
                        the matter of energy saving, LED sign boards are always top of the list. You can save electricity up
                        to 80% compared to neon signage. They are an environmentally and cost effective option for all types
                        of enterprises. Its lower maintenance and long-lasting lifespan make it suitable for any setting.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do LED light sign boards go for a long period?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, it can go on for a long period. However, there are a few factors that play a significant role in
                        the lifespan of LED light sign boards. They are- manufacturer of LED light signage boards and the
                        material that is used. It can be said, the LED light sign board’s lifespan can range from 4,000 to
                        13,000 hours. However, the industry standard is 10,000 hours which is more than 1 year.</p>
                </div>
            </div>

        </div>
    </section>
    <style>
        .new-lighbox {
            a {
                text-decoration: none;
                color: #000;
                align-items: center;
                text-align: center;
                justify-content: center;
                display: flex;
                flex-direction: column;
                gap: 15px;
                background: #fff;
                box-shadow: 0 8px 35px -5px rgb(228 61 18 / 11%);
                border-radius: 10px;
                padding: 0 0 20px;
                overflow: hidden;
            }

        }

        .new-recent-works {
            .box {
                padding: 0px 0px 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                background: white;
                border-radius: 20px;
                box-shadow: 0 20px 35px 0 rgb(228 61 18 / 12%);
                margin-bottom: 30px;
            }

            h4 {
                font-size: 20px;
                font-weight: 600;
                margin-top: 10px;
            }

            a {
                color: #E43D12;
                text-decoration: none;
                transition: all 0.3s ease;
                font-size: 20px;

            }

            a:hover {
                color: #ff5a2c;
                text-shadow: 0 0 8px rgba(228, 61, 18, 0.1),
                    0 0 8px rgba(228, 61, 18, 0.2);
            }

        }

        .BuiltToLast-images {
            .add-text {
                display: flex;
                flex-direction: column;
                background: #fff;
                box-shadow: 0 20px 35px 0 rgb(228 61 18 / 12%);
                border-radius: 20px;
                overflow: hidden;

                a {
                    text-decoration: none;
                    color: #E43D12;
                    font-size: 24px;
                    margin: 20px auto;
                    font-weight: 600; 
                }
            }
        }
    </style>

@endsection