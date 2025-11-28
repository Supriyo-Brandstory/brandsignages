@extends('frontend.layout.appLayout')
@section('content')

    <div class="newly-bannersection">
        <div class="bar">
            <h1 class="hero-banner_title">LED Dot Matrix Displays</h1>

        </div>
        <!-- Slider -->
        <div class="slider-wrapper">

            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/led-sign-board/open-dot-leds-1.webp" alt="Open Dot LED Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/open-dot-led-2.webp" alt="Open Dot LED Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/open-dot-led-3.webp" alt="Open Dot LED Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/open-dot-led-4.webp" alt="Open Dot LED Sign Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/open-dot-led-5.webp" alt="Open Dot LED Sign Board">
                </div>
              
            </div>

            <!-- Navigation should be OUTSIDE -->
            <div class="nav-arrow prev">&#8249;</div>
            <div class="nav-arrow next">&#8250;</div>
        


            <div class="thumbnails">
                <img src="/frontend/Images/led-sign-board/open-dot-leds-1.webp" class="thumb active" data-index="0" alt="Open Dot LED Sign Board">
                <img src="/frontend/Images/led-sign-board/open-dot-led-2.webp" class="thumb" data-index="1" alt="Open Dot LED Sign Board">
                <img src="/frontend/Images/led-sign-board/open-dot-led-3.webp" class="thumb" data-index="2" alt="Open Dot LED Sign Board">
                <img src="/frontend/Images/led-sign-board/open-dot-led-4.webp" class="thumb" data-index="3" alt="Open Dot LED Sign Board">
                <img src="/frontend/Images/led-sign-board/open-dot-led-5.webp" class="thumb" data-index="4" alt="3Open Dot LED Sign Board">
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <h1 class="hero-banner_title">Best-rated LED Dot Matrix Display</h1>
            <p class="subtitle"><b>Price: ₹1000 - ₹20,000.00 + GST</b></p>

            <div class="divider"></div>
            <p class="fs-16">Enhance your storefront with dynamic and high-performance LED dot matrix displays, designed for real-time communication. Built with advanced LED modules, 
                this delivers crisp text, animations, and live updates. LED dot matrix displays are perfect for attention-grabbing messaging. Available in multiple
                 pixel pitches, they support multilingual text, custom graphics, and adjustable brightness. </p>
            <ul class="features">
                <li>High-brightness LED modules for long-range readability</li>
                <li>Programmable- scrolling text, animations, and real-time updates</li>
                <li>Adjustable brightness for indoor and outdoor environments</li>
                <li>Weatherproof, dust-resistant, and built for 24/7 operation</li>
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
            <h2 class="We-Elevate-Brands-heading fw-bold">LED Dot Matrix Displays- Dynamic<br> Attention-Grabs Messaging</h2>
            <p class=" text-center fs-20">Transform the way you communicate with customers- vibrant <b>LED Dot Matrix Displays</b> are designed to deliver scrolling messages, promotions, and live
                 updates with absolute clarity. Dot matrix displays keep content moving making them impossible to ignore. With programmable settings, multiple font styles, adjustable 
                 speed, and multilingual support, your messages stay relevant, impactful, and always visible.</p>
                <p class=" text-center fs-20">At <b>Brand Signages</b>, we design and manufacture fully customized dot matrix displays for indoor, semi-outdoor, and outdoor environments. From 
                    selecting size, pixel pitch, brightness level, and display color to integrating <b>automation</b>, <b>sensors</b>, and <b>remote connectivity</b>, we handle everything from engineering 
                    to installation. Additionally, our pan-India delivery and support ensure a seamless experience from start to finish.</p>

        </div>
    </section>


    <section>
        <div class="container pt-5">
            <h2 class="hero-title">Key Highlights of LED Dot Matrix Displays</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board/open-dot-led-6.webp')}}" alt="Open Dot LED Sign Boards by Brand Signages"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">

                   <ul>
                    

                        <li class="fs-20">
                            <strong>Dynamic & Programmable</strong><br>
                            LED dot matrix displays allow real-time content updates, including scrolling messages, alerts,
                             promotions, countdowns, and multilingual text, making them ideal for indoor & outdoor spaces.
                        </li>

                        <li class="fs-20">
                            <strong>High-Contrast Visibility</strong><br>
                            Built with high-luminance LEDs and optimized pixel spacing, these displays ensure clear readability
                             from close or long distances, even under bright daylight or nighttime environments.
                        </li>

                        <li class="fs-20">
                            <strong>Energy-Efficient</strong><br>
                            Using advanced LED technology, dot matrix displays operate with low power consumption while 
                            delivering bright, continuous output, making them cost-effective for 24/7 communication.
                        </li>

                        <li class="fs-20">
                            <strong>Durable & Weather-Resistant</strong><br>
                            Manufactured with robust materials and protective coatings, these displays withstand exposure
                             to dust, rain, humidity, and temperature, ensuring consistent performance indoors or outdoors.
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
                            <h2>Advantages of LED Dot Matrix Displays</h2>
                        </div>
                        <div class="col-md-8 col-12">

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                            class="img-fluid">
                                        <h3>Real-Time Content Control</h3>
                                        <p>LED dot matrix displays allow instant message updates, making them ideal for dynamic environments 
                                            where schedules, alerts, or announcements that need immediate visibility. 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Custom Craftmanship"
                                            class="img-fluid">
                                        <h3>Long-Range Readability</h3>
                                        <p>With bright, high-contrast LED output and clear pixel formatting, these displays remain visible 
                                            from significant distances, ensuring information is easy to read in any lighting condition.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Highly Durable Name Boards"
                                            class="img-fluid">
                                        <h3>Energy-Efficient Comm.</h3>
                                        <p>Engineered for continuous operation, dot matrix displays consume minimal power while delivering bright
                                             visuals, making them a cost-effective choice for long-term, 24/7 messaging. 
                                        </p>
                                    </div>
                                </div>
                                 <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/perfect-illu.webp') }}" alt="Perfect Illumination"
                                            class="img-fluid">
                                        <h3>Customization Options</h3>
                                        <p>Users can customize text speed, font size, brightness level, and animation effects, creating engaging 
                                            content that suits specific environments, audiences, and communication needs.
                                    </div>
                                </div>


                            </div>
            </section>



    <section id="pricing">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">Affordable LED Dot Matrix- <br>Pricing Breakdown</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board/open-dot-led-7.webp')}}"
                            alt="Open Dot LED Sign Board" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
    <p class="fs-20">
        LED dot matrix display pricing depends on screen size, pixel pitch, LED type, display color (single/bi/multicolor), mounting 
        requirements, and software features. Costs are calculated per square foot and may vary based on brightness level, connectivity 
        options, and installation complexity.
    </p>
    <ul class="fs-20" style="padding-left: 18px;">
        <li><b>Single-Color Display:</b> ₹400 - ₹3,500 per sq. ft</li>
        <li><b>Bi-Color Display:</b> ₹2,500 - ₹5,800 per sq. ft</li>
        <li><b>Full-Color (RGB) Display:</b> ₹4,000 – ₹12,500 per sq. ft</li>
    </ul>

    <p class="fs-20">
        As a trusted <a href="/led-acrylic-3d-glow-sign-board" style="color: #E43D12; text-decoration: none;"><strong>LED sign board manufacturers</strong></a> in India, we design solutions built for durability, clarity, and long-term performance.
         Whether used for transport terminals, retails, hospitals, industrial facilities, schools, or public display systems, 
         LED dot matrix boards deliver  real-time programmable messaging and 24/7 visibility.
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
            <h1 class="faq-title">LED Dot Matrix Displays- FAQs</h1>

            <div class="faq-item">
                <button class="faq-question">
                    What is an LED dot matrix display? 
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <P>An LED dot matrix display is an electronic signage system that uses a grid of LED pixels to show 
                        scrolling messages, numbers, alerts, animations, or real-time information.</P>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can the LED dot matrix display content be updated remotely?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, depending on the model, content can be updated through USB, Wi-Fi, software interface, or 
                        cloud-based systems, making it easy to manage messages anytime.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are LED dot matrix displays suitable for outdoor use?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Absolutely, outdoor models are built with waterproof housings, high-brightness LEDs, and weatherproof 
                        components to withstand rain, dust, temperature variations, and sunlight exposure.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                     What sizes and colors are available?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>LED dot matrix displays are available in multiple sizes, pixel pitches, and color formats single-color,
                         bi-color, and full RGB to suit different viewing distances and applications.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How energy-efficient are these displays?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>LED dot matrix displays are designed for low-power consumption and continuous operation, 
                        making them energy-efficient even when running 24/7.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do LED Dot Matrix Boards support multiple languages?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, these displays support multilingual text, including English, Hindi, regional languages,
                         and even numeric or symbolic communication such as arrows, icons, and countdowns.</p>
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