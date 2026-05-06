@extends('frontend.layout.appLayout')
@section('content')
    <section class="hero-banner"
        style="background-image: linear-gradient(to top right, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1)), url('{{ asset('/frontend/Images/new/led-display-board-in-chennai-1.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">High-Impact LED Display Boards <br>in Chennai | 7X Energy Efficient</h1>
                    <p>Brand Signages is a trusted B2B premium LED display board manufacturer<br> in Chennai, India. Shine brighter in the city with high-impact LED display boards.
                    </p>
                    <a href="https://brandsignages.com/contact-us">
                        <button class="contact-btn">Get Free Quote</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section>
        <div class="container py-5">
            <h2 class="hero-title">Stand Out in Chennai’s Cityscape with<br> High-Impact LED Display Boards</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/new/led-display-board-in-chennai-2.webp')}}" alt="LED Display Board Design"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="brand-title">#1 LED Display Board Manufacturers in Chennai</h2>
                    <p class="brand-description">
                       In a world full of visual noise, your business must make an impact offline to stand out from competitors. 
                       Sign boards act as the first point of interaction, and LED display boards are the talk of the town, boosting 
                       brand visibility and capturing attention instantly.
                    </p>
                       <p class="brand-description">
                       Brand Signages is a leading LED sign board manufacturers in Chennai, serving B2B customers with 7X energy-efficient striking visual displays. We provide a wide range of comprehensive <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/led-acrylic-3d-glow-sign-board"><strong>LED sign boards</strong></a> for our customers at affordable prices. As a trusted provider of LED signboards in Chennai, we deliver solutions tailored to make an impact.
                    </p>
                    <p class="brand-description">
                       Being a prominent leader in <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/led-acrylic-3d-glow-sign-board"><strong>signage services</strong></a>, we have become trusted name in LED sign board manufacturing. We value our core principles, serve each customer with utmost priority, and bring your brand to life with captivating graphics and impactful visual storytelling. 
                    </p>
                    <div class="mt-4">
                            <a href="{{route('about_us')}}" class="custom-btn">Know About Us</a>
                        </div>
                </div>
            </div>
        </div>
    </section>

  
        <section class="We-Elevate-Brands-section py-5">
        <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Leaders in Premium LED Sign <br>Board Manufacturing</h2>
        </div>

        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/3d-acrylic-letters-mounted-on-acp-base-frame-2.webp')}}" class="card-img-center"
                                alt="Acrylic LED Letters">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="3d-led-acrylic-letters">3D Acrylic LED Letters</a></h5>
                                <p class="We-Elevate-Brands-text">Our acrylic LED letter sign boards combine bright illumination, clean edges, and long-lasting durability. 
                                    Ideal for high-impact business name boards, they deliver excellent visibility with a modern, professional finish.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/aluminum-channel-letters-acp-2.webp')}}" class="card-img-center"
                                alt="Aluminum LED Channel Letters">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="led-aluminum-channel-letters">Aluminum LED Letters</a></h5>
                                <p class="We-Elevate-Brands-text">Our aluminium channel letter sign boards feature a premium 3D profile with front-lit LED illumination.
                                     Available in black, gold, silver, or multi-colour finishes, they are perfect for retail and boutique branding.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/2d-stencil-cut-letters-2.webp')}}" class="card-img-center"
                                alt="2D Stencil Cut Sign Boards">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="2d-stencil-cut-acrylic-led-letters">2D Stencil Cut Sign Board</a></h5>
                                <p class="We-Elevate-Brands-text">2D stencil cut LED sign boards offer flush-mounted designs with concealed LED lighting. Cost-effective
                                     and elegant, they are well-suited for minimalist branding and fine typography.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/crystal-led-6.webp')}}" class="card-img-center"
                                alt="3D Crystal LED Letters">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="3d-crystal-led-letters">3D Crystal LED Letters</a></h5>
                                <p class="We-Elevate-Brands-text">3D crystal LED letter sign boards feature crystal-infused acrylic faces with layered depth and backlit 
                                    LEDs. Designed for luxury brands, they deliver a refined, high-visibility signage experience.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/sky-sgn-board-2.webp')}}" class="card-img-center"
                                alt="Sky LED Sign Boards">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="sky-sign-boards">Sky LED Sign Boards</a></h5>
                                <p class="We-Elevate-Brands-text">Our sky LED sign boards are large-format rooftop installations built with weather-resistant materials
                                     and high-intensity LEDs. Engineered for long-distance visibility, they strengthen corporate brand presence.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/open-dot-led-sign-1.webp')}}" class="card-img-center"
                                alt="LED Dot Matrix Displays">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="led-dot-matrix-display">LED Dot Matrix Displays</a></h5>
                                <p class="We-Elevate-Brands-text">Our LED dot matrix display boards use exposed high-brightness LEDs with programmable
                                     RGB effects. They are ideal for dynamic messaging in commercial and retail environments.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/flexibile-led-1.webp')}}" class="card-img-center"
                                alt="Outdoor Business Signages">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="flexible-led-display-boards">Flexible LED Displays</a></h5>
                                <p class="We-Elevate-Brands-text">Flexible LED display boards support curved installations and real-time 
                                    content updates. Available in RGB or single-colour options, they suit both indoor and outdoor branding needs.</p>
                            </div>
                        </div>
                    </div>
                     <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/led-sign-board/neon-sign-board-4.webp')}}" class="card-img-center"
                                alt="Neon LED Signs">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="neon-signages">Neon LED Signs</a></h5>
                                <p class="We-Elevate-Brands-text">LED neon sign boards use durable, shatter-resistant LED tubing to deliver vibrant neon-style
                                     illumination. Energy-efficient and long-lasting, they offer a modern alternative to traditional neon signage.</p>
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
            <a href="contact-us" class="btn-we-elevate">Start Your Project</a>
        </div>
       
        </div>
    </section>


          <section class="Maximum-Impact-section">
        <div class="container">
            <div class="swiper Maximum-Impact-swiper">

                <h2>LED Display Boards That Create <br>Maximum Impact </h2>
                <p>Trusted by clients across Chennai and India, we’ve worked on 100+ LED sign board projects with
                    excellence.
                    We are a proven leader in the B2B led sign board manufacturing with 10+ years of excellence. We design
                    modern tech-savvy LED sign boards that consume 7x less energy, backed with premium quality materials and
                    range of options.</p>
                <div class="swiper-wrapper">
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-4.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-3.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-1.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>

                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-4.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-3.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-1.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Display Board designed by Brand Signages">
                    </div>



                </div>
            </div>
        </div>
    </section>
    
    <section class="new-recent-works">
        <div class="container">
            <h2 class="hero-title  mb-6">Our Recent LED Display Board <br>Projects in Chennai</h2>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="{{asset('frontend/Images/new/led-display-board-in-chennai-12.webp')}}"
                            alt="LED Display Board Project in Chennai" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Retail Signage</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="{{asset('frontend/Images/new/led-display-board-in-chennai-13.webp')}}"
                            alt="LED Display Board Project in Chennai" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Corporate Branding</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="{{asset('frontend/Images/new/led-display-board-in-chennai-14.webp')}}"
                            alt="LED Display Board Project in Chennai" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Outdoor LED Display</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="{{asset('frontend/Images/new/led-display-board-in-chennai-15.webp')}}"
                            alt="LED Display Board Project in Chennai" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Hospital Signage</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="{{asset('frontend/Images/new/led-display-board-in-chennai-16.webp')}}"
                            alt="LED Display Board Project in Chennai" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Restaurant Display</h4>
                            <a href="/case-studies"><b>Explore Project</b></a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="box">
                        <img src="{{asset('frontend/Images/new/led-display-board-in-chennai-17.webp')}}"
                            alt="LED Display Board Project in Chennai" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Boutique LED Sign</h4>
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


            <section class="container py-5">
            <div class="new-contacts-section">
                <div class="new-contacts-section-overlay">
                    <p class="new-contacts-section-text">
                        We don’t just create LED display boards, we craft illuminated designs that command attention. As leading LED sign board makers in Chennai, we 
                        combine innovative lighting, precise detailing, and modern aesthetics to deliver LED sign boards that elevate your brand visibility day and
                         night.
                    </p>

                    

                </div>
            </div>
        </section>


         <div class="inquery-from-section">
        <x-coustom-inquiry-form />
        </div>
                <section class="we-deliver">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <h2>Why Choose Brand Signages for LED Light Sign Boards</h2>
                    </div>
                    <div class="col-md-8 col-12">
                    
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                        class="img-fluid">
                                    <h3>Customized Designs</h3>
                                    <p>Every LED light name board is thoughtfully designed to match your brand identity, ensuring the layout, lighting, and overall look align with your business image.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Timely Deliver"
                                        class="img-fluid">
                                    <h3>High Visibility Attention</h3>
                                    <p>Chennai's vibrant commercial landscape, with its industrial hubs and bustling streets, makes our LED signboards a perfect choice for businesses seeking high visibility.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Direct Purchase"
                                        class="img-fluid">
                                    <h3>Long-Lasting Durability </h3>
                                    <p>Our LED sign boards are designed with energy-efficient LED technology to ensure low electricity consumption and extended lifespan.
                                    </p>
                                </div>
                            </div>
                             <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Direct Purchase"
                                        class="img-fluid">
                                    <h3>Installation & Maintenance </h3>
                                    <p>We ensure quick production and smooth installation, while our LED signage boards require very little upkeep compared to traditional sign boards.
                                    </p>
                                </div>
                            </div>
                            

                        </div>
        </section>


            <section class="instant-pricing">
            <div class="container">
                <h2>LED Display Board Manufacturers in Chennai- 24 Hour Production Line</h2>
                <p>We are the best LED Display Board Manufacturers in Chennai, backed by 24-hour production capability and proven expertise. Our in-house team ensures fast turnaround, 
                    consistent quality, and <b>high-impact LED signage</b> solutions tailored to meet diverse business requirements.</p>
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

          <!-- testimonial Feedback Section -->
        <section class="new_testimonial-swiper-section">
            <div class="container">
                <h2 class="text-center mb-md-5 mb-3">What Our Clients Say About Us</h2>

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

                            <!-- Slide Item 1 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                    <div class="mb-4">
                                        <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                            width="40" height="40">
                                    </div>
                                    <p class="description">
                                        The LED display board in Chennai that we bought from this company has modified our outlet. The lively digital signage allures more customers each day!
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/new/led-display-board-in-chennai-20.webp') }}" alt="Ravi Kumar"
                                            class="rounded-circle me-3" width="50" height="50">
                                        <div>
                                            <h6 class="name">Ravi Kumar</h6>
                                            <small class="text-muted">Business Owner</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide Item 2 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                    <div class="mb-4">
                                        <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                            width="40" height="40">
                                    </div>
                                    <p class="description">
                                        We needed an extraordinary neon sign board for our boutique, and this company rendered far ahead of our expectations. The LED neon and rope light consequences gave an ideal touch to our branding.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/new/led-display-board-in-chennai-20.webp') }}" alt="Anita Sharma"
                                            class="rounded-circle me-3" width="50" height="50">
                                        <div>
                                            <h6 class="name">Anita Sharma</h6>
                                            <small class="text-muted">Boutique Owner</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide Item 3 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                    <div class="mb-4">
                                        <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                            width="40" height="40">
                                    </div>
                                    <p class="description">
                                        I was intrigued by their information and service. The industrial LED display installed at our factory is long-lasting, dependable, and performs faultlessly.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/new/led-display-board-in-chennai-20.webp') }}" alt="Suresh Patel"
                                            class="rounded-circle me-3" width="50" height="50">
                                        <div>
                                            <h6 class="name">Suresh Patel</h6>
                                            <small class="text-muted">Factory Manager</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide Item 4 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                    <div class="mb-4">
                                        <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                            width="40" height="40">
                                    </div>
                                    <p class="description">
                                        Their LED video walls are excellent! We’ve utilized them in our events, and they always leave a permanent impact on our audience.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/new/led-display-board-in-chennai-21.webp') }}" alt="Meera Singh"
                                            class="rounded-circle me-3" width="50" height="50">
                                        <div>
                                            <h6 class="name">Meera Singh</h6>
                                            <small class="text-muted">Event Planner</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- Slide Item 5 -->
                             <div class="swiper-slide">
                                <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                    <div class="mb-4">
                                        <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                            width="40" height="40">
                                    </div>
                                    <p class="description">
                                        The outdoor LED display for our corporate office appears competent and advanced. The LED signboard at the entrance genuinely improves our brand reputation.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/new/led-display-board-in-chennai-22.webp') }}" alt="Arun Joshi"
                                            class="rounded-circle me-3" width="50" height="50">
                                        <div>
                                            <h6 class="name">Arun Joshi</h6>
                                            <small class="text-muted">Corporate Executive</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
            
    <section class="other-cities-section mt-5">
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

<section class="faq-section">
    <div class="container">
        <h1 class="faq-title">LED Display Board FAQs</h1>

        <div class="faq-item">
            <button class="faq-question">
                What kinds of LED signage do you provide?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We offer a huge range of solutions, comprising LED display boards in Chennai, custom LED signs, digital boards, video walls, and outdoor LED displays to satisfy multiple requirements. </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are your LED sign boards made-to-order?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we focus on custom LED signs customized to your needs. Whether it’s a display sign board for your organization or an exceptional LED digital solution, we guarantee that it aligns with your brand exactly.
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How resistant are your outdoor LED displays?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Our outdoor LED displays are formed with superior substances, outlined to bear rough weather situations while rendering glowing and lively visuals. They are perfect for long-run usage in outdoor surroundings.
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you offer installation services?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Definitely! We provide back-to-back services, comprising the installation of LED sign boards, display boards, LED video walls, and industrial LED displays, confirming effortless combination.

                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What industries can take advantage of your LED signage solutions?

                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our LED display boards serve several industries, comprising retail, hospitality, healthcare, commercial, and education. From message displays to digital signage, we generate solutions to improve noticeability and interaction.
                </p>
            </div>
        </div>
       
    </div>
</section>

@endsection