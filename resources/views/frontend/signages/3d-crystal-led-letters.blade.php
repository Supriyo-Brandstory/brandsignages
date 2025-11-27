@extends('frontend.layout.appLayout')
@section('content')

    <div class="newly-bannersection">
        <div class="bar">
            <h1 class="hero-banner_title">3D Crystal Letters</h1>

        </div>
        <!-- Slider -->
        <div class="slider-wrapper">

            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/led-sign-board/3d-led-acrylic-letters-1.webp" alt="3D Acrylic LED Letter for LED Sign Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/3d-led-acrylic-letters-2.webp" alt="3D Acrylic LED Letter for LED Sign Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/3d-led-acrylic-letters-3.webp" alt="3D Acrylic LED Letter for LED Sign Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/3d-led-acrylic-letters-4.webp" alt="3D Acrylic LED Letter for LED Sign Boards">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/3d-led-acrylic-letters-5.webp" alt="3D Acrylic LED Letter for LED Sign Boards">
                </div>
              
            </div>

            <!-- Navigation should be OUTSIDE -->
            <div class="nav-arrow prev">&#8249;</div>
            <div class="nav-arrow next">&#8250;</div>
        


            <div class="thumbnails">
                <img src="/frontend/Images/led-sign-board/3d-led-acrylic-letters-1.webp" class="thumb active" data-index="0" alt="3D Acrylic LED Letter for LED Sign Boards">
                <img src="/frontend/Images/led-sign-board/3d-led-acrylic-letters-2.webp" class="thumb" data-index="1" alt="3D Acrylic LED Letter for LED Sign Boards">
                <img src="/frontend/Images/led-sign-board/3d-led-acrylic-letters-3.webp" class="thumb" data-index="2" alt="3D Acrylic LED Letter for LED Sign Boards">
                <img src="/frontend/Images/led-sign-board/3d-led-acrylic-letters-4.webp" class="thumb" data-index="3" alt="3D Acrylic LED Letter for LED Sign Boards">
                <img src="/frontend/Images/led-sign-board/3d-led-acrylic-letters-5.webp" class="thumb" data-index="4" alt="3D Acrylic LED Letter for LED Sign Boards">
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <h1 class="hero-banner_title">Best-rated Crystal LED Letters</h1>
            <p class="subtitle"><b>Price: ₹200 - ₹2,000.00 + GST</b></p>

            <div class="divider"></div>
            <p class="fs-16">Make your signage unforgettable with stunning Crystal LED Letters, crafted from premium-grade solid acrylic for a crystal-clear finish. Powered with 
                high-intensity LEDs that illuminate with a clean, vibrant glow, ensuring exceptional visibility. We design fully customizable, crystal letters support animation, 
                RGB colors, and dynamic lighting effects for a premium appearance.</p>
            <ul class="features">
                <li>Crafted from solid acrylic (crystal-finish) for a premium effect</li>
                <li>High-brightness LEDs with even edge-to-edge illumination</li>
                <li>Supports RGB, color-changing, & animation effects for modern branding</li>
                <li>UV-resistant and impact-resistant design for long-lasting performance</li>
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
            <h2 class="We-Elevate-Brands-heading fw-bold">Crystal LED Letter Sign Boards<br> A Premium Modern Glow</h2>
            <p class=" text-center fs-20">Bring a premium look and aesthetics to your business with <b>Crystal LED Letters</b> for premium, glass-like glow. The crystalline structure refracts light 
                beautifully, creating a three-dimensional luminous effect that stands out both day and night- making them a favourite for <b>luxury boutiques</b>, <b>showrooms, hospitality spaces</b>, corporate 
                offices, and high-end retail environments.</p>

                <p class=" text-center fs-20">At Brand Signages, we manufacture customizable Crystal LED letters designed to match your branding vision perfectly. From size, thickness, typefaces, and color 
                    temperature to lighting formats like <b>edge-lit</b>, <b>backlit halo</b>, or <b>front-glow illumination</b>, every detail is tailored for precision. Whether you want a soft premium glow or attention-grabbing RGB 
                    animated lighting effects, we manage fabrication, finishing, installation, and <b>PAN-India delivery</b>.</p>

        </div>
    </section>


    <section>
        <div class="container pt-5">
            <h2 class="hero-title">Key Highlights of Crystal LED Letters</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board/acrylic-led-letter-showcase.webp')}}" alt="3D LED Acrylic Letters Designed by Brand Signages"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">

                   <ul>
                    

                        <li class="fs-20">
                            <strong>Luxury Glass-Like Aesthetics</strong><br>
                            Crafted from high-clarity solid acrylic, Crystal LED letters create a premium glass 
                            effect with depth, smooth edges, and a refined illuminated finish that enhances modern 
                            luxury environments.
                        </li>

                        <li class="fs-20">
                            <strong>Light & Brightness</strong><br>
                            Integrated high-efficiency LEDs ensure uniform brightness with soft diffusion, 
                            eliminating hotspots and creating a clean, polished glow visible from multiple 
                            angles- day or night.
                        </li>

                        <li class="fs-20">
                            <strong>Premium Custom Finishes</strong><br>
                            Available in edge-lit, front-glow, backlit halo, or dual-illumination styles
                             with customizable font thickness, LED color choices, and RGB animation options 
                             for dynamic branding impact.
                        </li>

                        <li class="fs-20">
                            <strong>Durable & Weather-Resistant</strong><br>
                            Crystal LED letters are engineered using durable acrylic and sealed LED modules
                             that are resistant to UV, dust, and moisture, making them suitable for indoor 
                             and outdoor installations.
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
                            <h2>Advantages of Crystal LED Sign Boards</h2>
                        </div>
                        <div class="col-md-8 col-12">

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                            class="img-fluid">
                                        <h3>Luxury Aesthetics</h3>
                                        <p>Crystal LED letters offer a polished, upscale appearance with a smooth glossy surface that 
                                            reflects light beautifully. They are often chosen by luxury boutiques, hotels, spas, and premium 
                                            establishments. 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Custom Craftmanship"
                                            class="img-fluid">
                                        <h3>Enhanced Light Refraction</h3>
                                        <p>Unlike metal or acrylic-only letters, crystal letters bend and refract LED light to create a subtle glowing edge and 
                                            prism effect. This makes the signage look brighter, deeper, and more visually engaging.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Highly Durable Name Boards"
                                            class="img-fluid">
                                        <h3>Seamless Integration</h3>
                                        <p>Crystal LED letters blend effortlessly with modern & minimalistic interiors. The transparent edges
                                             allow them to work well with any wall texture- marble, wooden panels, glass partitions, or matte surfaces. 
                                        </p>
                                    </div>
                                </div>
                                 <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/perfect-illu.webp') }}" alt="Perfect Illumination"
                                            class="img-fluid">
                                        <h3>Smooth, Silent Performance</h3>
                                        <p>The flush-mounted design ensures wiring, LED modules, and fixings remain hidden, giving the sign a seamless floating
                                             appearance. Once installed, they operate silently and efficiently, requiring minimal upkeep.
                                    </div>
                                </div>


                            </div>
            </section>



    <section id="pricing">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">Affordable Crystal LED letters <br>Pricing Breakdown</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board/led-name-board-design-1.webp')}}"
                            alt="Rivetoile LED Name Board Design" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
    <p class="fs-20">
        Crystal LED letter pricing depends on acrylic thickness, LED illumination style, letter height, edge-finish 
        detailing, and installation method. The cost is calculated per running inch and may vary based on complexity.
    </p>
    <ul class="fs-20" style="padding-left: 18px;">
        <li><b>Non-Lit Crystal Letters:</b> ₹200 – ₹950 per inch</li>
        <li><b>Front-Lit Crystal LEDs:</b> ₹400 - ₹1,800 per inch</li>
        <li><b>Side-Lit Crystal LEDs:</b> ₹700 - ₹2,200 per inch</li>
        <li><b>Dual-Lit (Front + Edge Glow):</b> ₹1,400 - ₹3,200+ per inch</li>
        <li><b>Pixel-Controlled Crystal LEDs:</b> ₹1,800 – ₹4,500+ per inch</li>
    </ul>

    <p class="fs-20">
       At Brand Signages, we bring precision engineering, premium materials, and high-grade illumination together to craft
        signage that stands out effortlessly. Whether for luxury retail interiors, hotel lounges, corporate lobbies, aesthetic
         storefronts, or architectural features <a href="/led-acrylic-3d-glow-sign-board" style="color: #E43D12; text-decoration: none;"><strong>premium LED letters</strong></a> 
        offer unmatched elegance, clarity, and visibility.
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
            <h1 class="faq-title">Crystal LED Letters- FAQs</h1>

            <div class="faq-item">
                <button class="faq-question">
                    What exactly are Crystal LED Letters? 
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <P>Crystal LED letters are precision-cut solid acrylic letters illuminated using 
                        high-brightness LEDs. The clear acrylic absorbs and emits light through its edges, 
                        creating a premium glowing effect that looks sleek, modern, and highly 
                        eye-catching.</P>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are Crystal LED letters suitable for outdoor usage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, Crystal LED letters are built using weatherproof acrylic and sealed LED modules,
                         making them resistant to rain, heat, UV rays, and humidity. With proper installation, 
                         they maintain clarity and brightness outdoors for years.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What lighting styles are available for Crystal LED Letters?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>These letters can be customized with front-lit, edge-lit (neon glow), halo-lit, or 
                        dual-lit illumination. RGB and programmable lighting options are also available for 
                        animation, color changes, and reactive effects.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can Crystal LED letters be customized in size, color, and design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Absolutely, you can customize the font style, acrylic thickness, illumination style, LED color, 
                        finish, and mounting type nsuring the signage aligns perfectly with your brand identity and 
                        space aesthetics.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How energy-efficient are the LEDs used in Crystal Letter boards?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Crystal LED letters use low-voltage, high-efficiency LED modules designed for 24/7 visibility with 
                        minimal power consumption. The lighting remains bright while significantly reducing long-term 
                        electricity and maintenance costs.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Where are Crystal LED Letters commonly used?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>They are widely used for luxury retail stores, reception branding, high-end showrooms, corporate 
                        offices, hospitals, hospitality spaces, interior décor, malls, and premium wayfinding signage.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is the expected lifespan of Crystal LED Acrylic Letters?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>With high-quality LEDs and premium optical-grade acrylic, Crystal LED signage typically lasts 5-7+ 
                        years outdoors and even longer indoors. LEDs can be serviced if needed without replacing the entire sign.
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