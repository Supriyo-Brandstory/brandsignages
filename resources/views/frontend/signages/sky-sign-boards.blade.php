@extends('frontend.layout.appLayout')
@section('content')

    <div class="newly-bannersection">
        <div class="bar">
            <h1 class="hero-banner_title">Sky Signs</h1>

        </div>
        <!-- Slider -->
        <div class="slider-wrapper">

            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/led-sign-board/sky-sign-boards-1.webp" alt="Sky Sign Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/sky-sign-boards-2.webp" alt="Sky Sign Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/sky-sign-boards-3.webp" alt="Sky Sign Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/sky-sign-boards-4.webp" alt="Sky Sign Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/sky-sign-boards-5.webp" alt="Sky Sign Boards">
                </div>
              
            </div>

            <!-- Navigation should be OUTSIDE -->
            <div class="nav-arrow prev">&#8249;</div>
            <div class="nav-arrow next">&#8250;</div>
        


            <div class="thumbnails">
                <img src="/frontend/Images/led-sign-board/sky-sign-boards-1.webp" class="thumb active" data-index="0" alt="Sky Sign Boards">
                <img src="/frontend/Images/led-sign-board/sky-sign-boards-2.webp" class="thumb" data-index="1" alt="Sky Sign Boards">
                <img src="/frontend/Images/led-sign-board/sky-sign-boards-3.webp" class="thumb" data-index="2" alt="Sky Sign Boards">
                <img src="/frontend/Images/led-sign-board/sky-sign-boards-4.webp" class="thumb" data-index="3" alt="Sky Sign Boards">
                <img src="/frontend/Images/led-sign-board/sky-sign-boards-5.webp" class="thumb" data-index="4" alt="Sky Sign Boards">
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <h1 class="hero-banner_title">Best-rated Sky Sign Boards</h1>
            <p class="subtitle"><b>Price: ₹5,000 - ₹40,000.00 + GST</b></p>

            <div class="divider"></div>
            <p class="fs-16">Make your brand highly visible with Sky Signs, premium three-dimensional acrylic and LED letters designed for long-range impact. Sky Signs
                 signs are engineered to be seen from highways, rooftops, and city skylines, delivering maximum visibility. We create fully customizable, Sky Signs 
                 tailored in size, font, illumination style, and LED effects.</p>
            <ul class="features">
                <li>High-grade acrylic and framing for stability at elevated heights</li>
                <li>Bright, energy-efficient LEDs with long-range visibility</li>
                <li>Supports customized LED animations and color effects</li>
                <li>Weatherproof, UV-resistant, & wind-load tested for outdoor use</li>
                <li>PAN India delivery and round-the-clock support services</li>
            </ul>

            <div class="buttons">
                <a href="#pricing" class="btn">Check Pricing</a>
                <a href="{{ route('contact_us') }}" class="btn">Get Quote</a>
            </div>
        </div>
    </div>

    <section>
        <div class="container" id="">
            <h2 class="We-Elevate-Brands-heading fw-bold">Sky Sign Boards – Elevated Branding<br> That Commands Attention</h2>
            <p class=" text-center fs-20">Take your brand to new heights with Sky Sign Boards, expertly crafted three-dimensional acrylic letters and <a href="/led-acrylic-3d-glow-sign-board" style="color: #E43D12; text-decoration: none;"><strong>LED light boards</strong></a> designed for high-altitude visibility. 
                Built for rooftops, building facades, and long-range placement, Sky Signs combine striking visual appeal with durable construction, ensuring your brand stands out across city 
                skylines, highways, and commercial districts.</p>
                <p class=" text-center fs-20">At Brand Signages, we specialize in fully customizable Sky Sign Boards to match your branding vision. From selecting letter size, font style, acrylic thickness, 
                    and LED lighting type to adding dynamic effects and color-changing animations, we manage the entire process <b>precision fabrication</b>, <b>secure mounting</b>, and <b>professional installation</b>.</p>

        </div>
    </section>


    <section>
        <div class="container pt-5">
            <h2 class="hero-title">Key Highlights of Sky Sign Boards</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board/sky-sign-boards-6.webp')}}" alt="Sky Sign Board by Brand Signages"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">

                   <ul>
                    

                        <li class="fs-20">
                            <strong>Maximum Visibility</strong><br>
                            Sky sign boards are engineered for long-distance visibility using bold lettering, illumination, 
                            and elevated placement, ensuring brands remain noticeable from public spaces, and aerial 
                            viewpoints.
                        </li>

                        <li class="fs-20">
                            <strong>Structural Integrity</strong><br>
                            Manufactured with durable aluminium, galvanized steel, and weather-resistant LED systems, these sign 
                            boards withstand strong winds, outdoor exposure, and reliable for high-rise
                             installations.
                        </li>

                        <li class="fs-20">
                            <strong>Custom Design & Branding</strong><br>
                            Each sky sign board is fully customizable in scale, font, illumination style, and structure, ensuring 
                            a perfect match to corporate branding while complementing building architecture and skyline aesthetics.
                        </li>

                        <li class="fs-20">
                            <strong>Premium Brand Impact</strong><br>
                            Mounted at the highest visible point, sky sign boards deliver unmatched brand authority, serving as a 
                            lasting landmark that enhances recognition, visibility, and overall brand presence across the cityscape.
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
                            <h2>Advantages of Sky Sign Boards</h2>
                        </div>
                        <div class="col-md-8 col-12">

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                            class="img-fluid">
                                        <h3>Long-Range Exposure</h3>
                                        <p>Sky sign boards provide superior visibility from great distances, helping businesses stand out
                                             in crowded cityscapes and ensuring consistent brand exposure in both day and night conditions.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Custom Craftmanship"
                                            class="img-fluid">
                                        <h3>Long-Term Efficiency</h3>
                                        <p>Using energy-saving LEDs and durable materials, sky signage delivers long operational life with 
                                            minimal maintenance, reducing overall ownership cost while keeping brand visibility uninterrupted.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Highly Durable Name Boards"
                                            class="img-fluid">
                                        <h3>Enhanced Brand Authority</h3>
                                        <p>Their elevated installation instantly elevates brand perception, making businesses appear more established,
                                             credible, and dominant within competitive commercial environments or high-traffic urban regions. 
                                        </p>
                                    </div>
                                </div>
                                 <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/perfect-illu.webp') }}" alt="Perfect Illumination"
                                            class="img-fluid">
                                        <h3>Adaptability & Scalability</h3>
                                        <p>Sky sign boards can be tailored to various building heights, design styles, and lighting requirements, ensuring
                                             flexibility for future expansions, rebranding, or architectural upgrades.
                                    </div>
                                </div>


                            </div>
            </section>



    <section id="pricing">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">Affordable Sky Sign Boards- <br>Pricing Breakdown</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board/sky-sign-boards-7.webp')}}"
                            alt="Sky Sign Board Designed by Board Design" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
    <p class="fs-20">
        Sky sign board pricing depends on several technical factors such as letter height, 
        illumination type, requirements, wind load structure, and access conditions. Charges 
        are calculated per running inch and may increase based on size and lighting specification. 
    </p>
    <ul class="fs-20" style="padding-left: 18px;">
        <li><b>Front-Lit Sky Letters:</b> ₹900 - ₹3,500 per inch</li>
        <li><b>Halo Glow Sky Letters:</b> ₹1,500 - ₹4,200 per inch</li>
        <li><b>Dual-Lit (Front + Halo):</b> ₹2,800 - ₹6,500+ per inch</li>
        <li><b>Logo Structure/ Box Type:</b> Pricing on inspection</li>
    </ul>

    <p class="fs-20">
        As a trusted provider of premium sky signage solutions in India, we manufacture and install high-performance sky sign 
        boards. Ideal for corporate towers, IT parks, shopping complexes, hospitals, airports, and commercial properties, sky 
        sign boards transform rooftops into powerful advertising spaces.
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
            <h1 class="faq-title">Sky Sign Boards- FAQs</h1>

            <div class="faq-item">
                <button class="faq-question">
                    What is a sky sign board? 
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <P>A sky sign board is a large-format signage system installed on high-rise 
                        buildings or rooftops, designed for long-distance visibility and 24/7 
                        brand exposure.</P>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How durable are sky sign boards in extreme weather?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Sky signage is engineered using wind-load tested frames, rust-proof metals, 
                        and weather-resistant LEDs, ensuring long-term performance against rain, heat, 
                        storms, and coastal humidity.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What materials are used to manufacture sky sign boards?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Common materials include stainless steel (SS304/316), aluminium, ACP panels, acrylic
                         faces, galvanized steel structures, and high-efficiency LED lighting modules.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do sky sign boards require government approval?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, most sky sign installations require permissions from municipal authorities and
                         building management due to height, electrical, and safety regulations.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does installation take?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Depending on size, design, permissions, and mounting complexity, a sky sign board 
                        may take 3-8 weeks from design finalization to safe installation.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can sky sign boards be customized with logos and lighting effects?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Absolutely, sky signs can be designed with 3D letters, custom logos, animation effects, 
                        front glow, halo effects, or dual-lit illumination to suit branding needs.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What type of maintenance is required for sky sign boards?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Routine checks include LED performance, electrical safety, structural inspection, and surface
                         cleaning. Most installations require servicing only once or twice a year.
                    </p>
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