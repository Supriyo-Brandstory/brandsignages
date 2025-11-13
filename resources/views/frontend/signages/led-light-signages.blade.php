@extends('frontend.layout.appLayout')
@section('content')
    <section class="hero-banner"
        style="background-image: url('{{ asset('/frontend/Images/led-sign-board/led-sign-boards.webp') }}');">
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
            <p class=" text-center mb-5 fs-20">Make your brand impossible to ignore with LED name boards from <a
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
                    <a href="{{asset('frontend/Images/acrylic-led-signboard-6.webp')}}" data-lightbox="Custom LED Sign Board"
                        data-title="Image 1">
                        <img src="{{asset('frontend/Images/acrylic-led-signboard-6.webp')}}" class="img-fluid"
                            alt="Custom LED Sign Board" style="width: 100%;">
                        <span><b>Custom LED Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-sign-board/led-sign-board-1.webp')}}" data-lightbox="LED Sign Board"
                        data-title="Image 2">
                        <img src="{{asset('frontend/Images/led-sign-board/led-sign-board-1.webp')}}" class="img-fluid" alt="LED Sign Board"
                            style="width: 100%;">
                        <span><b>LED Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-sign-board/led-display-board.webp')}}" data-lightbox="LED Display Board Design"
                        data-title="Image 3">
                        <img src="{{asset('frontend/Images/led-sign-board/led-display-board.webp')}}" class="img-fluid"
                            alt="LED Display Board" style="width: 100%;">
                        <span><b>LED Display Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-sign-board/led-light-board.webp')}}" data-lightbox="LED Light Board"
                        data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-sign-board/led-light-board.webp')}}" class="img-fluid"
                            alt="LED Light Board" style="width: 100%;">
                        <span><b>LED Light Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-sign-board/custom-led-sign-board.webp')}}" data-lightbox="Custom LED Sign Board"
                        data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-sign-board/custom-led-sign-board.webp')}}" class="img-fluid"
                            alt="LED Light Board" style="width: 100%;">
                        <span><b>Cusom LED Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-sign-board/acrylic-led-sign-board.webp')}}" data-lightbox="Acrylic LED Name Board"
                        data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-sign-board/acrylic-led-sign-board.webp')}}" class="img-fluid" alt="Acrylic LED Name Board"
                            style="width: 100%;">
                        <span><b>Acrylic LED Name Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-sign-board/led-glow-sign-board.webp')}}"
                        data-lightbox="LED Glow Sign Board" data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-sign-board/led-glow-sign-board.webp')}}" class="img-fluid"
                            alt="LED Glow Sign Board" style="width: 100%;">
                        <span><b>LED Glow Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-sign-board/led-name-board.webp')}}"
                        data-lightbox="LED Name Board" data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-sign-board/led-name-board.webp')}}" class="img-fluid"
                            alt="LED Name Board" style="width: 100%;">
                        <span><b>LED Name Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-sign-board/outdoor-led-sign-board.webp')}}"
                        data-lightbox="Outdoor LED Sign Board" data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-sign-board/outdoor-led-sign-board.webp')}}" class="img-fluid"
                            alt="Outdoor LED Sign Board" style="width: 100%;">
                        <span><b>Outdoor LED Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-sign-board/indoor-led-sign-board.webp')}}"
                        data-lightbox="Indoor LED Sign Board" data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-sign-board/indoor-led-sign-board.webp')}}" class="img-fluid"
                            alt="Indoor LED Sign Board" style="width: 100%;">
                        <span><b>Indoor LED Sign Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-sign-board/led-office-name-board.webp')}}"
                        data-lightbox="LED Office Name Board" data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-sign-board/led-office-name-board.webp')}}" class="img-fluid"
                            alt="LED Office Name Board" style="width: 100%;">
                        <span><b>LED Office Name Board</b></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-sign-board/l-glow-name-board.webp')}}"
                        data-lightbox="LED Glow Name Board" data-title="Image 4">
                        <img src="{{asset('frontend/Images/led-sign-board/led-glow-name-board.webp')}}" class="img-fluid"
                            alt="LED Glow Sign Board" style="width: 100%;">
                        <span><b>LED Glow Name Board</b></span>
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
                        <img src="/frontend/Images/led-sign-board/led-sign-board-titan-watch.webp"
                            alt="LED Sign Board for Titan Watch- Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Titan Showroom</h4>
                            <a href="https://brandsignages.com/contact-us"><b>Start Your Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/led-sign-board/led-sign-board-fortis-hospital.webp"
                            alt="LED Sign Board for Fortis Hospital- Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Fortis Hospital</h4>
                            <a href="https://brandsignages.com/contact-us"><b><b>Start Your Project</b></b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="/frontend/Images/led-sign-board/led-sign-board-cafe-mocha.webp"
                            alt="LED Sign Board for Cafe Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Café Mocha</h4>
                            <a href="https://brandsignages.com/contact-us"><b>Start Your Project</b></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="https://brandsignages.com/contact-us">
                    <button class="contact-btn">Start Your Projects</button>
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
                        <img src="{{asset('frontend/Images/led-sign-board/led-name-board-design-1.webp')}}" alt="Rivetoile LED Name Board Design"
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
                        When it comes to outdoor branding, our weather-resistant <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/led-display-board-in-mumbai"><strong>LED sign boards</strong></a> ensure your message remains
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
                    <img src="{{asset('frontend/Images/led-sign-board/tanishq-led-sign-board.webp')}}"
                        alt="Tanishq Store LED Sign Board Design" class="BuiltToLast-img">
                    <a href="#">Tanishq</a>

                </div>
                <div class="add-text">
                    <img src="{{asset('frontend/Images/led-sign-board/prestidge-group-sign-board.webp')}}"
                        alt="Prestidge Group LED Sign Board Design" class="BuiltToLast-img">
                    <a href="#">Prestige Group</a>

                </div>
                <div class="add-text">
                    <img src="{{asset('frontend/Images/led-sign-board/medplus-sign-board-design.webp')}}" alt="MedPlus LED Sign Board Design"
                        class="BuiltToLast-img">
                    <a href="#">MedPlus Pharmacy</a>
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
                        <p>Backed by years of hands-on experience, we specialize in <a style="color: #000000ff;text-decoration: underline;"
                            href="https://brandsignages.com/led-display-board-in-chennai"><strong>LED sign boards</strong></a> that blend functionality
                            with creativity.
                            Our experts ensures every design aligns with your brand identity.</p>
                        <h4 class="new_custom-title">Expert Craftsmanship</h4>
                    </div>
                    <div class="why-choose-image-container">
                        <img src="{{ asset('frontend/Images/led-sign-board/hotwind-led-sign-board.webp') }}"
                            alt="why choose us as your LED Sign Board Partner" class="img-fluid mt-3">
                    </div>
                </div>

                <!-- Experience -->
                <div class="col-md-4">
                    <div class="new_custom-box new_custom-image-box"
                        style="background-image: url('{{ asset('frontend/Images/led-sign-board/optical-store-led-sign-board.webp') }}');">
                        <div class="new_custom-overlay">
                            <h4 class="new_custom-title text-white">Tailored Solution</h4>
                            <p class="text-white">We believe no two brands are the same. That’s why every <a style="color: #ffffffff;text-decoration: underline;"
                            href="https://brandsignages.com/led-sign-board-in-bangalore"><strong>LED name board</strong></a> we
                                design is fully customizable,
                                whether you need a sleek indoor display for a boutique or a high-visibility outdoor sign for
                                a corporate space.</p>
                        </div>
                    </div>
                </div>

                <!-- Excellence -->
                <div class="col-md-4 justify-content-between d-flex flex-column">
                    <div class="why-choose-image-container">
                        <img src="{{ asset('frontend/Images/led-sign-board/diner-led-sign-board.webp') }}"
                            alt="Outdoor LED sign board designed by our experts" class="img-fluid mb-3">
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
                <img src="{{ asset('frontend/Images/led-sign-board/irani-cafe-led-sign-board.webp') }}" alt="Irani Cafe LED Sign Board - Brand Signages">
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
            <h1 class="faq-title">LED Sign Board FAQs</h1>

            <div class="faq-item">
                <button class="faq-question">
                    How long will it take to deliver my LED sign board? 
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <P>The delivery time for your LED sign board typically ranges between <b>7 to 10 working days</b>, 
                        depending on the size, design complexity, and customization requirements. Our team ensures 
                        timely production and delivery while maintaining top-notch quality standards.</P>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can I customize my LED sign board according to my needs?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Absolutely. We offer <b>fully customized LED sign boards</b> tailored to your brand’s identity, including 
                        design, color, size, lighting type, and logo integration. Our team works closely with you to create 
                        a sign board that truly reflects your business personality.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do you deliver LED sign boards PAN India?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we deliver LED sign boards across Bangalore and <b>all over India within 10 Working Days</b>. Our logistics team ensures safe packaging 
                        and hassle-free delivery so that your signage reaches you in perfect condition.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do you provide installation support?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>YYes, we offer <b>complete installation services</b> for all LED sign boards. Our expert technicians ensure proper setup, alignment, and wiring 
                        to make your signage functional and visually appealing from day one.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can LED sign boards be used for outdoor branding?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Definitely. Our LED sign boards are designed for both indoor and outdoor use, built to withstand varying weather conditions while maintaining 
                        brightness and visual impact, making them perfect for outdoor branding.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are your LED sign boards energy-efficient?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, our LED sign boards are <b>highly energy-efficient and</b> designed to consume significantly less power compared 
                        to traditional lighting options. They deliver bright, consistent illumination while keeping electricity costs 
                        low, making them an eco-friendly and cost-effective branding solution for your business.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long do LED sign boards last?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>High-quality LED sign boards typically last for up to 5–7 years with proper maintenance. They are energy-efficient, 
                        durable, and designed to deliver long-lasting performance, ensuring great value for your investment.</p>
                </div>
            </div>

        </div>
    </section>


@endsection