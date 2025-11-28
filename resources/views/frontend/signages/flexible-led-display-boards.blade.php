@extends('frontend.layout.appLayout')
@section('content')

    <div class="newly-bannersection">
        <div class="bar">
            <h1 class="hero-banner_title">Flexible LED Display</h1>

        </div>
        <!-- Slider -->
        <div class="slider-wrapper">

            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/led-sign-board/programmable-led-sign-1.webp" alt="Flexible LED Display Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/programmable-led-sign-2.webp" alt="Flexible LED Display Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/programmable-led-sign-3.webp" alt="Flexible LED Display Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/programmable-led-sign-4.webp" alt="Flexible LED Display Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/programmable-led-sign-5.webp" alt="Flexible LED Display Boards">
                </div>
              
            </div>

            <!-- Navigation should be OUTSIDE -->
            <div class="nav-arrow prev">&#8249;</div>
            <div class="nav-arrow next">&#8250;</div>
        


            <div class="thumbnails">
                <img src="/frontend/Images/led-sign-board/programmable-led-sign-1.webp" class="thumb active" data-index="0" alt="Flexible LED Display Boards">
                <img src="/frontend/Images/led-sign-board/programmable-led-sign-2.webp" class="thumb" data-index="1" alt="Flexible LED Display Boards">
                <img src="/frontend/Images/led-sign-board/programmable-led-sign-3.webp" class="thumb" data-index="2" alt="Flexible LED Display Boards">
                <img src="/frontend/Images/led-sign-board/programmable-led-sign-4.webp" class="thumb" data-index="3" alt="Flexible LED Display Boards">
                <img src="/frontend/Images/led-sign-board/programmable-led-sign-5.webp" class="thumb" data-index="4" alt="Flexible LED Display Boards">
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <h1 class="hero-banner_title">Best-rated Fleible LED Display Boards</h1>
            <p class="subtitle"><b>Price: ₹1000 - ₹20,000.00 + GST</b></p>

            <div class="divider"></div>
            <p class="fs-16">Upgrade your space with versatile Flexible LED Display Boards that bend, curve, and adapt to any surface. Designed for seamless visual impact
                , these displays deliver vivid text, graphics, animations, and video content, making them ideal for dynamic, creative, and interactive advertising. Their 
                flexibility allows unique curved, cylindrical, or irregular installations without compromising brightness or clarity.</p>
            <ul class="features">
                <li>Flexible LED display panels for custom installations</li>
                <li>High-resolution visuals with animations, videos, and live content</li>
                <li>Adjustable brightness & viewing angles suitable for all environments</li>
                <li>Lightweight, durable, and engineered for 24/7 operation</li>
                <li>PAN India delivery, installation, and technical support</li>
            </ul>

            <div class="buttons">
                <a href="#pricing" class="btn">Check Pricing</a>
                <a href="{{ route('contact_us') }}" class="btn">Get Quote</a>
            </div>
        </div>
    </div>

    <section>
        <div class="container" id="">
            <h2 class="We-Elevate-Brands-heading fw-bold">Flexible LED Displays- Visual Communication<br> for Modern Businesses</h2>
            <p class=" text-center fs-20">Elevate your brand presence with <b>programmable LED display</b> boards for flexibility and real-time updates. Also known as flexible LED display boards, these 
                boards bend, curve, and conform to unique surfaces, enabling eye-catching installations. Suitable for <b>outdoor advertising</b>, flexible LED displays deliver scrolling text, animations, 
                videos, and live updates with clarity.</p>
                <p class=" text-center fs-20"><b>Brand Signages</b> provides fully customizable solutions, allowing you to choose size, pixel pitch, display color, brightness, and content type. We create 
                    the best LED sign boards that are lightweight, durable, and engineered for <b>24/7 visibility</b>. Our products range spans across multiple industries- commercial spaces, events, 
                    exhibitions, and creative signage. </p>

        </div>
    </section>


    <section>
        <div class="container pt-5">
            <h2 class="hero-title">Key Highlights of Flexible LED Displays</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board/open-dot-led-5.webp')}}" alt="Flexible LED Display Boards"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">

                   <ul>
                    

                        <li class="fs-20">
                            <strong>Seamless Curved Design</strong><br>
                            Flexible LED displays can bend, wrap, and adapt to curved walls, columns, cylinders, and irregular surfaces,
                             creating immersive installations with smooth, continuous visual flow.
                        </li>

                        <li class="fs-20">
                            <strong>High-Resolution Output</strong><br>
                            With advanced pixel technology and vibrant color reproduction, these displays support HD content- animations, 
                            text, graphics, and video ensuring every visual stands out with clarity.
                        </li>

                        <li class="fs-20">
                            <strong>Lightweight & Modular Build</strong><br>
                            Designed with soft, lightweight modules, flexible LED displays are easy to transport, install, and maintain, 
                            making them ideal for creative events, exhibitions, and architectural branding.
                        </li>

                        <li class="fs-20">
                            <strong>Versatile Content Control</strong><br>
                            With programmable interfaces, brightness adjustment, and support for live content streaming, these displays 
                            allow full creative freedom for dynamic branding and real-time communication.
                        </li>
                        </ul>

                    
                </div>
            </div>
        </div>
    </section>


       <section class="we-deliver">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <h2>Advantages of Flexible LED Displays</h2>
                        </div>
                        <div class="col-md-8 col-12">

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                            class="img-fluid">
                                        <h3>Surface-Conforming Impact</h3>
                                        <p>Suitable to any surface, enabling curved, cylindrical, or irregular installations that create 
                                            immersive visuals and unique brand experiences without extensive structural changes.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Custom Craftmanship"
                                            class="img-fluid">
                                        <h3>Light Modular Installation</h3>
                                        <p>Lightweight modular panels simplify transport, handling, and installation, reducing labour time and 
                                            costs while allowing rapid assembly for temporary events or permanent architectural displays.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Highly Durable Name Boards"
                                            class="img-fluid">
                                        <h3>High-Tech Curved Imagery</h3>
                                        <p>High-resolution pixel options and flexible pixel pitches deliver crisp visuals and smooth motion on curved
                                             surfaces, preserving image quality for video, animation, and text across viewing distances. 
                                        </p>
                                    </div>
                                </div>
                                 <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/perfect-illu.webp') }}" alt="Perfect Illumination"
                                            class="img-fluid">
                                        <h3>Smart Content Control</h3>
                                        <p>Integrated control systems enable remote programming, dynamic scheduling, and real-time updates, giving 
                                            marketers instant campaign control while supporting sensors, interactivity, and multi-display networks.
                                    </div>
                                </div>


                            </div>
            </section>



    <section id="pricing">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">Affordable Flexible LED Displays<br> Cost & Configuration Guide</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board/open-dot-led-6.webp')}}"
                            alt="Flexible LED Display Boards" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
    <p class="fs-20">
        Flexible LED display pricing varies based on panel size, pixel pitch, bend radius capability, brightness level, 
        LED type, and mounting configuration. Costs are typically calculated per square foot and may change depending 
        on the complexity.
    </p>
    <ul class="fs-20" style="padding-left: 18px;">
        <li><b>Indoor LED Display:</b> ₹400 - ₹3,500 per sq. ft</li>
        <li><b>Semi-Outdoor LED Display:</b> ₹2,500 - ₹5,800 per sq. ft</li>
        <li><b>Outdoor Display (Weather-Sealed): </b> ₹6,000 - ₹20,000 per sq. ft</li>
    </ul>

    <p class="fs-20">
        As a reputable <a href="/led-acrylic-3d-glow-sign-board" style="color: #E43D12; text-decoration: none;"><strong>LED sign board makers</strong></a> in India, 
        we build flexible LED displays engineered for durability, seamless curvature, and immersive visual performance. From event stages and retail brand experiences to 
        architectural displays and smart advertising walls, flexible LED technology enables limitless creative possibilities with dynamic, programmable content 
        and 24/7 impact.
    </p>

    <a href="https://brandsignages.com/contact-us" bis_skin_checked="1">
            <button class="contact-btn">Book Order Now</button>
    </a>
   
</div>



            </div>
        </div>
    </section>

    <section class="We-Elevate-Brands-section">
        <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Explore Our LED Sign Board <br>Product Range</h2>
        </div>

        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/uhouse.webp')}}" class="card-img-center"
                                alt="ACP Mounted Acrylic Letters">
                            <div class="card-body pt-0">
                                <a href="3d-led-acrylic-letters" class="We-Elevate-Brands-title">LED Acrylic Letters with ACP</a>
                                <p class="We-Elevate-Brands-text">Custom 3D acrylic box with LED letters with a metallic finish and internal LED illumination, mounted on a 
                                    sleek ACP frame. This premium, glowing sign offers a modern and professional look for corporate or retail spaces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/led-sign.webp')}}" class="card-img-center"
                                alt="3D Acrylic Channel Letters">
                            <div class="card-body pt-0">
                                <a href="led-aluminum-channel-letters" class="We-Elevate-Brands-title">Aluminum Channel Letters</a>
                                <p class="We-Elevate-Brands-text">Premium LED illuminated aluminum channel letter signage with professional 3D construction, featuring aluminum profiles 
                                    and acrylic faces, ideal for corporate offices and retail store branding.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/stencil-cut-sign.webp')}}" class="card-img-center"
                                alt="Stencil Cut Acrylic Signage">
                            <div class="card-body pt-0">
                                <a href="2d-stencil-cut-acrylic-led-letters" class="We-Elevate-Brands-title">2D Stencil Cut Letters</a>
                                <p class="We-Elevate-Brands-text">2D Stencil Cut Acrylic LED Sign boards, perfect for intricate details and multi-content displays. Ideal for shop fronts 
                                    requiring information like timings, contact details, and taglines.</p>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/retail-sign.webp')}}" class="card-img-center"
                                alt="Backlit Metal Letter Signs">
                            <div class="card-body pt-0">
                                <a href="metal-led-letters" class="We-Elevate-Brands-title">Metal LED Letters</a>
                                <p class="We-Elevate-Brands-text">Premium metal letter signs in luxury finishes like gold and chrome, featuring a subtle LED back-glow for elegant accent 
                                    lighting. Ideal for sophisticated interiors and well-lit corporate spaces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/crystal-led.webp')}}" class="card-img-center"
                                alt="Glittering Acrylic Letters">
                            <div class="card-body pt-0">
                                <a href="3d-crystal-led-letters" class="We-Elevate-Brands-title">Crystal LED Letters</a>
                                <p class="We-Elevate-Brands-text">Sparkling crystal-accented 3D LED acrylic letters that create a luxurious, glittering effect. Ideal for adding festive bling 
                                    to jewellery stores, boutiques, and premium restaurants.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/programmable-led.webp')}}" class="card-img-center"
                                alt="Glittering Acrylic Letters">
                            <div class="card-body pt-0">
                                <a href="flexible-led-display-boards" class="We-Elevate-Brands-title">Flexible LED Displays</a>
                                <p class="We-Elevate-Brands-text">Dynamic, programmable LED displays capable of displaying scrolling text, animations, real-time updates, and motion graphics.
                                     Perfect for businesses that need attention-grabbing digital communication.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/neon-sign2.webp')}}" class="card-img-center"
                                alt="Vibrant LED Neon Signage">
                            <div class="card-body pt-0">
                                <a href="neon-signages" class="We-Elevate-Brands-title">LED Neon Sign</a>
                                <p class="We-Elevate-Brands-text">Vibrant LED neon signs with their iconic glow, perfect for creating a retro, high-energy atmosphere. Ideal for bars, lounges,
                                     and entertainment venues seeking standout visual appeal.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/dot-matrix.webp')}}" class="card-img-center"
                                alt="Open LED Dot Matrix Signs">
                            <div class="card-body pt-0">
                                <a href="led-dot-matrix-display" class="We-Elevate-Brands-title">Open Dot LED Signs</a>
                                <p class="We-Elevate-Brands-text">Open Dot LED signs feature exposed, intensely bright pinpoints of light for maximum visibility. This bold, high-impact solution 
                                    ensures your shop front stands out, ideal for creating a flashy display.</p>
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
            <a href="led-acrylic-3d-glow-sign-board" class="btn-we-elevate">View All Services</a>
        </div>
       
        </div>
    </section>
    

     <section class="new-recent-works">
        <div class="container">
            <h2 class="hero-title  mb-6">Our Recent Sign Board Projects</h2>
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

    <!--<section class="other-cities-section py-5">
        <div class="container">
            <h2 class="my-5">Led Sign Board in Other Cities</h2>
            <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
                <div class="other-cities-card">
                    <a href="/led-display-board-in-mumbai" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="LED Sign Boards Mumbai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Mumbai</p>
                        </div>
                    </a>
                </div>
                <div class="other-cities-card">
                    <a href="/led-display-board-in-chennai" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="LED Sign Boards Chennai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Chennai</p>
                        </div>
                    </a>
                </div>
                <div class="other-cities-card">
                    <a href="/led-sign-board-in-bangalore" style="text-decoration: none;">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="LED Sign Boards Bangalore">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Bangalore</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>-->

    <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/led-sign-board/irani-cafe-led-sign-board.webp') }}"
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



    <section class="faq-section">
        <div class="faq-container">
            <h1 class="faq-title">Flexible LED Displays- FAQs</h1>

            <div class="faq-item">
                <button class="faq-question">
                    What is a flexible LED display? 
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <P>A flexible LED display is a bendable digital screen made from soft circuit boards
                         and modular LED panels. It can curve, wrap, or shape around cylindrical, wavy, 
                         or irregular surfaces for immersive visual effects.</P>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can flexible LED displays bend without damaging the screen?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, these displays are designed with soft PCB technology and protective materials 
                        that allow safe bending within a specified radius. However, they should not be folded 
                        sharply or bent beyond the recommended limit.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Where can flexible LED displays be used?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>They are ideal for shopping malls, exhibitions, stage backdrops, showrooms, museums, event
                         branding, architectural installations, retail façades, and creative advertising environments 
                         that require curved or non-flat digital displays.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                     Are flexible LED displays suitable for outdoor use?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, outdoor-grade flexible LEDs are available with waterproofing, UV protection, and high-brightness
                         modules. Indoor and outdoor variants differ in pixel pitch, durability, and brightness.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What pixel pitch options are available?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Flexible LED displays commonly range from P1.8 to P10, with lower pixel pitch offering higher resolution 
                        for close viewing and larger pitch being suitable for viewing from a longer distance.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is the lifespan and maintenance requirement?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Quality flexible LED displays typically last 50,000–100,000 hours depending on usage conditions. Maintenance 
                        includes periodic cleaning, pixel checks, module replacement (if needed), and ventilation checks for 
                        optimal performance.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can I schedule or automate updates on a programmable LED display?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, programmable LED displays support scheduling features that allow you to set automatic content playback based on time,
                         date, or events. Using dedicated software or cloud control, you can automate scrolling text, announcements, promotions,
                          and real-time updates without manually changing content each time.</p>
                </div>
            </div>


        </div>
    </section>

    <script>
    let current = 0;
        const slides = document.querySelectorAll('.slide');
        const thumbs = document.querySelectorAll('.thumb');

        function show(i) {
        slides[current].classList.remove('active');
        current = i;
        slides[current].classList.add('active');
        }

        document.querySelector('.next').onclick = () =>
        show((current + 1) % slides.length);

        document.querySelector('.prev').onclick = () =>
        show((current - 1 + slides.length) % slides.length);

        thumbs.forEach((t, i) => (t.onclick = () => show(i)));
    </script>

<script>
    document.querySelectorAll('.product-gallery').forEach(gallery => {
        const mainImg = gallery.querySelector('.main-preview img');
        const thumbs = gallery.querySelectorAll('.thumbnail-row img');

        thumbs.forEach(thumb => {
            thumb.addEventListener('click', () => {
                mainImg.src = thumb.src;
                mainImg.alt = thumb.alt;
            });
        });
    });
</script>




@endsection