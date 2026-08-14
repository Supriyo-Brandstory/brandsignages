@extends('frontend.layout.appLayout')

@push('styles')
<link rel="stylesheet" href="{{ asset('frontend/customstyle/neon-signages-2.css') }}">
@endpush

@section('content')
    <section class="simple-impact-hero">
        @php
            $slides = [
                [
                    'img' => 'sign-board-pro-1',
                    'title' => 'Complete Sign Board Solutions Under One Roof',
                    'desc' =>
                        'Get all-in-one signage support from design to installation, plus ongoing repair and maintenance.',
                ],
                [
                    'img' => 'sign-board-pro-2',
                    'title' => 'More Than a National Signage Company, We Build Brands',
                    'desc' =>
                        'Serving 1000+ real estate, healthcare, education, and government clients nationwide for 12+ years.',
                ],
                [
                    'img' => 'sign-board-pro-3',
                    'title' => 'Full Range of Signage Products & Services for Businesses',
                    'desc' =>
                        'LED signs, ACP signage, Neon sign, Digital signages and wayfinding systems built for standout visibility.',
                ],
            ];
        @endphp

        <div class="hero-slides-wrapper" id="heroSlider">
            @foreach ($slides as $slide)
                <div class="impact-slide {{ $loop->first ? 'active' : '' }}">
                    <img src="/frontend/Images/{{ $slide['img'] }}.webp" alt="{{ $slide['title'] }}">

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
            <h2>Custom Sign Board Design and Printing <br>Services- Brand Signages</h2>
            <p>We create custom signages with high-impact visibility, premium materials, design and printing. Trusted by 1000+ 
                leading brands across India in retail, healthcare, corporate, and manufacturing. What sets us apart is our 
                skilled team, attention to detail, and streamlined processes. We understand the unique branding needs of every 
                business and deliver signage to reflect their identity, space, and purpose. 
            </p>
            <p>We offer a diverse spectrum of bespoke signage solutions, from striking signboards and refined reception signs 
                to custom name plates, metal and ACP signage, directional and wayfinding systems, information directories, 
                frosted films, <a href="led-name-board-design" style="color:#E43D12; text-decoration:none;"><b>Led name board</b></a>, 
                <a href="arcylic-signages" style="color:#E43D12; text-decoration:none;"><b>acrylic signage</b></a>, and other custom signage solutions.</p>
            
                <img src="/frontend/Images/name-boards/largest-ever-signage-board-collection.webp"
                alt="Exclusive Office Name Board Design by Brand Signages" class="shop-image">
           
        <div class="text-center">
            <a href="#pricing">
                <button class="contact-btn">Size Specific Pricing</button>
            </a>
        </div>
    </section>

    <section class="led-signs-manufacturing">
        <div class="container pt-5">

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-imagex">
                        <img src="{{ asset('frontend/Images/home/led-sign-bg.webp') }}"
                            alt="Starbucks LED Sign board designed by Brand Signages" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="hero-title text-start">Sign Boards That Makes Your Brand Unforgettable</h2>
                    <p class="brand-description">
                        We turn brand identities into physical experiences through thoughtfully designed, precisely
                         manufactured, and professionally installed sign board and signage solutions. Know why we are 
                         the best sign board manufacturers in India for your business.:
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            <b>Custom Signage Solutions:</b> From illuminated facades and 3D lettering to indoor 
                            branding and directional signage, we create solutions tailored to your brand and space.
                        </li>
                        <li class="mb-3">
                            <b>Design & Fabrication:</b> Our team combines practical design, quality materials, 
                            and precision fabrication to deliver signage that looks right and performs reliably.
                        </li>
                        <li class="mb-3">
                            <b>Installation & Support:</b> From site measurement and installation to upgrades 
                            and maintenance, we ensure your signage is delivered and maintained to the right standards.
                        </li>
                        <li>
                            <b>End-to-End Execution:</b> From initial concept and fabrication to installation, we 
                            handle every detail with consistency and care.
                        </li>
                     </ul>
                        <div class="mt-4">
                            <a href="blogs/led-sign-board" class="custom-btn">Explore More</a>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <x-trust-features />

    <section class="We-Elevate-Brands-section py-5">
        <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">Explore Our Sign Board <br>Products and Services- Brand Signages</h2>
        </div>

        <div class="position-relative">
            <div class="swiper We-Elevate-Brands-swiper pt-60">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('frontend/Images/home/uhouse.webp')}}" class="card-img-center"
                                alt="Metal Signage">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/metal-signages">Metal & Steel Signages</a></h5>
                                <p class="We-Elevate-Brands-text">Stainless steel signage is one of the most affordable and
                                    durable signage. We design stainless steel signage for organizations with custom sizes
                                    and designs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('/frontend/Images/home/led-sign.webp')}}" class="card-img-center"
                                alt="Led Sign Board- Brand Signages">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/led-acrylic-3d-glow-sign-board">LED Sign Board</a></h5>
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
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/digital-signages">Digital Signage</a></h5>
                                <p class="We-Elevate-Brands-text">Digital displays are a dynamic and attention-grabbing transformation for 
                                    retail spaces. We design modern digital signage and digital displays for every industry. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('/frontend/Images/home/acrylic-sign.webp')}}" class="card-img-center"
                                alt="Acrylic Signage Board- Brand Signages">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/arcylic-signages">Acrylic Signage</a></h5>
                                <p class="We-Elevate-Brands-text">Acrylic signage is a preferred choice among industries for its glossy finish and durability. 
                                    We design acrylic signage with unmatched durability and precision. </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('/frontend/Images/home/neon-sign2.webp')}}" class="card-img-center"
                                alt="Neon Sign Board- Brand Signages">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/neon-signages">Neon Sign Board</a></h5>
                                <p class="We-Elevate-Brands-text">Neon signs are a go-to option for retail and restaurant businesses for all-around visibility. 
                                    We employ our precious experts to design the best neon signage designs in the city. </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('/frontend/Images/home/retail-sign.webp')}}" class="card-img-center"
                                alt="Shop Name Boards">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/name-board-designs-for-shops-bangalore">Shop Name Boards</a></h5>
                                <p class="We-Elevate-Brands-text">Shop name boards are the face of your brand or retail business. We create stylish & durable shop board designs to create a lasting first impression.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card We-Elevate-Brands-card ">
                            <img src="{{asset('/frontend/Images/home/outdoor-sign.webp')}}" class="card-img-center"
                                alt="Outdoor Business Signages">
                            <div class="card-body pt-0">
                                <h5 class="We-Elevate-Brands-title"><a href="https://brandsignages.com/outdoor-signages">Outdoor Signage</a></h5>
                                <p class="We-Elevate-Brands-text">Outdoor signages create immersive visual experiences, balancing visibility with powerful messaging. 
                                    These signage acts as a strategic marketing tools that truly engage audiences.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="We-Elevate-Brands-nav ">
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


    <section id="pricing" class="pb-5">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">Sign Board Pricing Based on <br>Size and Features</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/led-sign-board-signage.webp') }}" alt="Led Name Board Design"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fs-20">
                        The cost of a sign board depends on factors such as dimensions, materials, design, finish, mounting method, and
                         customization. Installation requirements and the type of sign board can also influence the overall price.
                    </p>

                   
                    <ul class="fs-20" style="padding-left: 18px;">
                        <li><b>Small Sign Boards:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹1,000 – ₹10,000)</li>
                        <li><b>Medium Sign Boards:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹10,000 – ₹25,000)</li>
                        <li><b>Large Sign Boards:</b> 4 ft x 8 ft (₹25,000 – ₹35,000)</li>
                        <li><b>Custom Dimensions:</b> Depends on your design & customization.</li>
                    </ul>

                    <p class="fs-20">
                        Our sign boards are built using durable, high-quality materials selected according to the application and 
                        installation environment. From simple business signage to large-format outdoor displays, we provide
                         customized solutions.
                    </p>

                    <a href="https://brandsignages.com/contact-us" bis_skin_checked="1">
                        <button class="contact-btn">Book Order Now</button>
                    </a>
                </div>


            </div>
        </div>
    </section>

        <section id="designs" class="why-bg-light-pink pt-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="hero-title">Sign Board Manufacturers, Suppliers, <br>and Signage Companies in India</h2>
                <p class="fs-20">Finding the right sign board manufacturer can make a significant difference to your brand’s visibility and overall 
                    presentation. From illuminated and LED signs to acrylic, metal, ACP, and 3D letter signage, sign board manufacturers offer a wide
                     range of options for different business requirements. In this guide, we explore 10 leading sign board manufacturers in India,
                      covering their expertise, product range, manufacturing capabilities. </p>
            </div>

            <div class="row con-fix2">
                <div class="row con-fix2">
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/sign-board-manufacturers-in-coimbatore" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/MjptHm4ugRe5H73mMmR1bQkwnQkILefuiBEjz7ij.webp" alt="10 Best Sign Board Manufacturers in Coimbatore (2026 Guide)">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">SIGN BOARD COIMBATORE</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Sign Board Manufacturers Coimbatore</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/sign-board-manufacturers-in-lucknow" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/9hckfrCqrTFrQwdefzOj7KyECugpNXmdXNHzIYot.webp" alt="10 Best Sign Board Manufacturers in Lucknow (2026 Guide)">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">SIGN BOARD LUCKNOW</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Sign Board Manufacturers Lucknow</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/sign-board-manufacturers-in-jaipur" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/rvtCOslMFqGFOayc0yzOWrs1tGs03gCuzvRNLBY7.webp" alt="Top 10 Best Sign Board Manufacturers in jaipur">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">SIGN BOARD JAIPUR</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Sign Board Manufacturers jaipur</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/sign-board-manufacturers-in-kolkata" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/wy5L6q4va72mSOrj83d7O1dvi21m2atfcxgDh2b7.webp" alt="Top 10 Sign Board Manufacturers in Kolkata, West Bengal">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">SIGN BOARD KOLKATA</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Sign Board Manufacturers Kolkata</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/top-10-best-sign-board-manufacturers-in-ahmedabad" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/6yHiaoTb55Xb2RWIchBrncgih0fY5yGDWb1KzC5E.webp" alt="Top 10 Best Sign Board Manufacturers in Ahmedabad">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">SIGN BOARD AHMEDABAD</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Sign Board Manufacturers Ahmedabad</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/top-10-best-sign-board-manufacturers-in-delhi" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/lEOz6i7m3eDbDvF2oqGpzDokifAhQ0qnsxJyPKSs.webp" alt="Top 10 Best Sign Board Manufacturers in Delhi">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">SIGN BOARD IN DELHI</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Sign Board Manufacturers Delhi</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/sign-board-manufacturers-in-pune-maharastra" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/7heG4fAaXPGGZsUFeNarc9wW8rKhmQE4I1mpHDx9.webp" alt="Top 10 Best Sign Board Manufacturers in Pune">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">SIGN BOARD PUNE</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Sign Board Manufacturers in Pune</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/sign-board-manufacturers-in-hyderabad" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/wSXAZ65VMzhbqUsMHCxmag6VaM3JnyDoBgZv6kHH.webp" alt="Top 10 Best Sign Board Manufacturers in Hyderabad">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">SIGN BOARD HYDERABAD</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Sign Board Manufacturers in Hyderabad</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/top-5-sign-board-manufacturers-in-mumbai-your-complete-guide" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/RRYK6CJoP7pd6sUMJ4X4EMcM5dJQUO2bGS12PvM7.webp" alt="Top 5 Sign Board Manufacturers in Mumbai: Your Complete Guide">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">SIGN BOARD MUMBAI</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 5 Sign Board Manufacturers in Mumbai</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                            </div>

                <div class="text-center">
                    <a href="blogs/sign-board-manufacturers">
                        <button class="contact-btn">Sign Board Manufacturers</button>
                    </a>
                </div>

            </div>



            <h3 class="hero-title pt-5">Led Sign Board Manufacturers, Suppliers, and <br>Signage Companies in India</h3>

                <div class="row con-fix2">
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-noida" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/TWKmmM60dNVYO4S8VONCMs3GPyRa9kzyv4Yn8l44.webp" alt="Top 10 Best Led sign board manufacturers in Noida">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGNS IN NOIDA</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Led sign board manufacturers Noida</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-kochi" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/AvuJ4ahNeSAceuXdT0Ns4zpJsx2MZGYdlagSZqFU.webp" alt="Top 10 Best Led sign board manufacturers in Kochi">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGNS IN KOCHI</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Led sign board manufacturers Kochi</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-indore" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/SM3SEMJCWggF0Tuucj1e7BZlDTrvUmkr1ABXHvsN.webp" alt="Top 10 Best Led Sign Board Manufacturers in Indore">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGNS IN INDORE</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Led Sign Board Manufacturers in Indore</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-mumbai" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/laQTOcE5vvTi6f2e5sAaHPw3ONRv7Xt1llVNXs73.webp" alt="Top 10 Best Led Sign Board Manufacturers in Mumbai">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGNS IN MUMBAI</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Led Sign Board Manufacturers Mumbai</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-pune" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/YWKDcqTQs0Sn6dP8nLfELKlQymX24ClZXEC3ZviD.webp" alt="Top 10 Best Led Sign Board Manufacturers in Pune">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGNS IN PUNE</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Led Sign Board Manufacturers Pune</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-delhi" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/aeOQFzjsiVvMA1lz9byIAdtZs7WxNMUFcRKKEQuE.webp" alt="Top 10 Best Led Sign Board Manufacturers in Delhi">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGNS IN DELHI</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Led Sign Board Manufacturers Delhi</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-ahmedabad" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/M5q60VXDEKX9cX79o6vZIHjS55ruJdcU2L2nq0xt.webp" alt="Top 10 Best Led Sign Board Manufacturers in Ahmedabad">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGNS IN AHMEDABAD</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Led Sign Board Manufacturers Ahmedabad</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-kolkata" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/8EUlCoLWWOBJ3qHC8YekaNUiKoK2EpzGXIbRPaPT.webp" alt="Top 10 Best Led Sign Board Manufacturers in Kolkata, West Bengal">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGNS IN KOLKATA</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Led Sign Board Manufacturers in Kolkata</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-jaipur" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/SncdbBCAzKEq4mfIV9Pcs38vUQUz1Hn4HOnQ1a7i.webp" alt="Top 10 Led Sign Board Manufacturers in Jaipur, Rajasthan">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGNS IN JAIPUR</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Led Sign Board Manufacturers in Jaipur, Rajasthan</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-lucknow" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/WlDx4AnFPmF13PhJLIAQdSwXuoPsMVBJJix81a4v.webp" alt="Top 10 Best Led Sign Board Manufacturers in Lucknow">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGNS IN LUCKNOW</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Led Sign Board Manufacturers Lucknow</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/led-sign-board-manufacturers-in-coimbatore" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/iZRNbgbeS18WVTUc4hBAxsv3AxQoSDjG0MxORNcx.webp" alt="Top 10 Best Led Sign Board Manufacturers in Coimbatore">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">LED SIGNS COIMBATORE</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Led Sign Board Manufacturers Coimbatore</h5>
                                </div>
                            </div>
                        </a>
                    </div>

            
                <div class="text-center">
                    <a href="/led-acrylic-3d-glow-sign-board">
                        <button class="contact-btn">LED Sign Boards</button>
                    </a>
                </div>

            </div>

            <h3 class="hero-title pt-5">Best Neon Sign Board Manufacturers, Suppliers, <br>and Signage Companies in India</h3>

            <div class="row con-fix2">
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-ahmedabad" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/9OVfHMZMlh5MUV7u8FgzNqEUZFAxGD3UvR7bw0li.webp" alt="Top 10 Best Neon sign board manufacturers in Ahmedabad">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEON SIGNS IN AHMEDABAD</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Ahmedabad</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-lucknow" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/zIvoh2wcjlcCWsstq4HM77jwgE4zbjuaYZZR0ULx.webp" alt="Top 10 Best Neon sign board manufacturers in Lucknow">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEON SIGNS IN LUCKNOW</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Lucknow</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-mumbai" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/ZjRGrfRgGOLWVxEU4fFWHQztcDlha77yaBiqfKnc.webp" alt="Top 10 Best Neon sign board manufacturers in Mumbai">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEON SIGNS IN MUMBAI</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Mumbai</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-jaipur" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/69Ls0zgqgo9bm7mWxZ3YIohKdrJOgq3cE7p3xPCH.webp" alt="Top 10 Best Neon sign board manufacturers in Jaipur">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEON SIGNS IN JAIPUR</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Jaipur</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-hyderabad" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/oh18CGVAWjmYU2DVCCd25AsmX8uaBrsVsmTRDMDQ.webp" alt="Top 10 Best Neon sign board manufacturers in Hyderabad">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEON SIGNS IN HYDERABAD</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Hyderabad</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-pune" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/WXEhDc2oS8XLgw463x7o9h2sZbSndWzemFhMx293.webp" alt="Top 10 Best Neon sign board manufacturers in Pune">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEON SIGNS IN PUNE</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Pune</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-delhi" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/3vTOtBIaYgsYAjs75LxbDcUvznJ5gAfOJ5h7Ekq0.webp" alt="Top 10 Best Neon sign board manufacturers in Delhi">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEON SIGNS IN DELHI</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Delhi</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-kolkata" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/Xi9ayJOomNKs5He8GBtA6GXaP6rWsr6vWG9RqrCw.webp" alt="Top 10 Best Neon sign board manufacturers in Kolkata">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEON SIGNS IN KOLKATA</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Kolkata</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-coimbatore" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/VuSHmdpNAjIqxlD5b9d0f3TckjRJtRYF2nFtdT4o.webp" alt="Top 10 Best Neon sign board manufacturers in Coimbatore">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEON SIGNS IN COIMBATORE</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Coimbatore</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-indore" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/xjccOQiYzmu2pdAuojgJtJYaFh7GldgF9oVQoi3w.webp" alt="Top 10 Best Neon sign board manufacturers in Indore">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEIN SIGNS IN INDORE</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Indore</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-surat" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/8zDCG1go2bv6y3jWZr3lo5Ji3BJLz6c30qaEnPJ5.webp" alt="Top 10 Best Neon sign board manufacturers in Surat">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEON SIGNS IN SURAT</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Surat</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                        <a href="https://brandsignages.com/blogs/neon-sign-board-manufacturers-in-noida" style="text-decoration: none;">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="https://brandsignages.com/storage/blogs/UTLbHkFUgZlmA0xDlVhL6S1PyvfCWNT1A5dtuabI.webp" alt="Top 10 Best Neon sign board manufacturers in Noida">
                                </div>
                                <div class="blog-card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge">NEON SIGNS IN NOIDA</span>
                                        <span class="time">2026 List</span>
                                    </div>
                                    <h5 class="blog-card-title">Top 10 Neon sign board manufacturers Noida</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                                    <div class="text-center">
                    <a href="/blogs/sign-board-manufacturers">
                        <button class="contact-btn">Neon Sign Board</button>
                    </a>
                </div>
            </div>
            <br><br>



        </div>
        </div>
    </section>


    <section class="new-recent-works">
        <div class="container">
            <h2 class="hero-title  mb-6">Our Recent Led Sign Board <br>Installation Projects</h2>
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


  <section class="we-deliver">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h2>Modern Business Sign Board- Brand Signages Expertise</h2>
                </div>
                <div class="col-md-8 col-12">

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                    class="img-fluid">
                                <h3>Striking Designs</h3>
                                <p>We are <a style="color: #ffff;text-decoration: underline;"
                                        href="https://brandsignages.com"><strong>Brand Signages</strong></a>, specialists
                                    in crafting impactful signage board that leave a lasting impression. Our sign boards go
                                    beyond simple identification- they reflect personality, enhance visibility, and elevate
                                    the overall appearance.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}"
                                    alt="Custom Craftmanship" class="img-fluid">
                                <h3>Custom Craftsmanship</h3>
                                <p>Every space has its own identity, and our designs reflect that. From modern <a
                                        style="color: #ffff;text-decoration: underline;"
                                        href="https://brandsignages.com/arcylic-signages"><strong>acrylic sign
                                            boards</strong></a> to timeless metal finishes, we customize every sign board
                                    design to match your style, purpose, and visual appeal.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}"
                                    alt="Highly Durable Sign Boards" class="img-fluid">
                                <h3>High Durability</h3>
                                <p>We use premium, weather-resistant and premium materials to ensure your sign board remains
                                    strong, vibrant, and long-lasting day and night even in demanding outdoor conditions.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/perfect-illu.webp') }}"
                                    alt="Perfect Illumination" class="img-fluid">
                                <h3>Perfect Illumination</h3>
                                <p> Add brilliance to your brand with our LED-lit and neon store sign boards, designed to
                                    shine bright day and night. Each design is engineered for maximum visibility, ensuring
                                    your brand stands out.
                            </div>
                        </div>


                    </div>
    </section>




    <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/name-boards/name-board-23.webp') }}"
                    alt="Neon sign board for client" class="img-fluid">
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


       

    <section class="other-cities-section py-5">
        <div class="container">
            <h2 class="hero-title">Our Office Locations<br> Across India- Brand Signages</h2>
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
    </section>

          <section class="ratings-reviews-section">
        <div class="container">
            <h2 class="text-center section-title">Ratings & Reviews</h2>

            <div class="row rating-summary-row align-items-center mb-5">
                <!-- Left Card: Overall Score -->
                <div class="col-lg-3 col-md-4 text-center rating-score-card mb-4 mb-md-0">
                    <div class="score-display">
                        <span class="score-num">4.6</span><span class="score-max">/5</span>
                    </div>
                    <div class="star-rating mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p class="review-count">Reviewed by 25 Users</p>
                </div>

                <!-- Middle Card: Star Breakdown -->
                <div class="col-lg-5 col-md-8 rating-bars-card mb-4 mb-lg-0">
                    <!-- 5 Star -->
                    <div class="rating-bar-row">
                        <span class="star-label">5★</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 64%;" aria-valuenow="64"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="percentage-label">64%</span>
                    </div>
                    <!-- 4 Star -->
                    <div class="rating-bar-row">
                        <span class="star-label">4★</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="percentage-label">20%</span>
                    </div>
                    <!-- 3 Star -->
                    <div class="rating-bar-row">
                        <span class="star-label">3★</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 12%;" aria-valuenow="12"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="percentage-label">12%</span>
                    </div>
                    <!-- 2 Star -->
                    <div class="rating-bar-row">
                        <span class="star-label">2★</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="percentage-label">0%</span>
                    </div>
                    <!-- 1 Star -->
                    <div class="rating-bar-row">
                        <span class="star-label">1★</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 4%;" aria-valuenow="4"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="percentage-label">4%</span>
                    </div>
                </div>

                <!-- Vertical Divider (only visible on large screens) -->
                <div class="col-lg-1 d-none d-lg-block text-center">
                    <div class="vertical-divider"></div>
                </div>

                <!-- Right Card: User Satisfaction -->
                <div class="col-lg-3 col-md-12 satisfaction-card mt-3 mt-lg-0">
                    <div class="satisfaction-header mb-3">
                        <i class="fa-solid fa-thumbs-up satisfaction-icon"></i>
                        <h3 class="satisfaction-title mb-0">User Satisfaction</h3>
                    </div>
                    <!-- Response -->
                    <div class="satisfaction-row">
                        <span class="sat-label">Response</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="percentage-label">100%</span>
                    </div>
                    <!-- Quality -->
                    <div class="satisfaction-row">
                        <span class="sat-label">Quality</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="percentage-label">100%</span>
                    </div>
                    <!-- Delivery -->
                    <div class="satisfaction-row">
                        <span class="sat-label">Delivery</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="percentage-label">75%</span>
                    </div>
                </div>
            </div>

            <!-- Most Relevant Reviews Header -->
            <h3 class="reviews-header mb-4">Most Relevant Reviews</h3>

            <!-- Individual Reviews Grid -->
            <div class="row reviews-grid mb-5">
                <!-- Review 1 -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="review-card h-100">
                        <div class="review-card-header mb-3">
                            <img src="{{ asset('frontend/Images/home/testimonial-1.webp') }}" alt="Michael"
                                class="avatar-circle">
                            <div class="reviewer-meta">
                                <div class="stars-date">
                                    <span class="stars-gold">★★★★★</span>
                                    <span class="review-date">10-March-26</span>
                                </div>
                                <h4 class="reviewer-name">Michael</h4>
                                <p class="reviewer-location">CEO, Technova Innovations</p>
                            </div>
                        </div>
                        <div class="review-card-body">
                            <p class="review-text mb-3">
                                "Our tech startup needed a signage solution that matched our innovative spirit. The Brand
                                Signages team didn't just create a sign; they captured our company's essence. The LED sign
                                board has become a conversation starter for clients and employees alike."
                            </p>
                            <p class="product-tag mb-0"><strong>Product Name :</strong> LED Sign Board</p>
                            <div class="review-badge-row">
                                <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Response</span>
                                <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Quality</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="review-card h-100">
                        <div class="review-card-header mb-3">
                            <img src="{{ asset('frontend/Images/home/testimonial-2.webp') }}" alt="Asish"
                                class="avatar-circle">
                            <div class="reviewer-meta">
                                <div class="stars-date">
                                    <span class="stars-gold">★★★★★</span>
                                    <span class="review-date">02-October-25</span>
                                </div>
                                <h4 class="reviewer-name">Asish</h4>
                                <p class="reviewer-location">CEO, A Hotel Chain</p>
                            </div>
                        </div>
                        <div class="review-card-body">
                            <p class="review-text mb-3">
                                "As a boutique hotel chain, brand consistency is everything. These custom signages
                                transformed our branding across multiple locations. The attention to detail is remarkable -
                                each piece feels uniquely crafted yet perfectly aligned with our brand identity."
                            </p>
                            <p class="product-tag mb-0"><strong>Product Name :</strong> Custom Signages</p>
                            <div class="review-badge-row">
                                <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Response</span>
                                <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Quality</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="col-lg-4 col-md-12">
                    <div class="review-card h-100">
                        <div class="review-card-header mb-3">
                            <img src="{{ asset('frontend/Images/home/testimonial-3.webp') }}" alt="Nandini"
                                class="avatar-circle">
                            <div class="reviewer-meta">
                                <div class="stars-date">
                                    <span class="stars-gold">★★★★★</span>
                                    <span class="review-date">13-June-25</span>
                                </div>
                                <h4 class="reviewer-name">Nandini</h4>
                                <p class="reviewer-location">CEO, A Real Estate Company</p>
                            </div>
                        </div>
                        <div class="review-card-body">
                            <p class="review-text mb-3">
                                "We needed a visually appealing sign for our office location, and Brand Signages delivered a
                                stunning LED sign board beyond our expectations. The direct communication and on-demand
                                design process was seamless and stress-free."
                            </p>
                            <p class="product-tag mb-2"><strong>Product Name :</strong> LED Sign Board</p>
                            <div class="review-badge-row">
                                <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Response</span>
                                <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Quality</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View More Reviews Button -->
            <div class="text-center">
                <a href="{{ route('testimonials') }}" class="view-more-btn">View More Reviews</a>
            </div>
        </div>
    </section>

    @once
        <style>
            .ratings-reviews-section {
                background-color: #fdf7e9;
                padding: 80px 0;
                font-family: 'Roboto', sans-serif;
            }

            .ratings-reviews-section .section-title {
                font-family: 'Lora', serif;
                font-size: 36px;
                font-weight: 700;
                color: #212121;
                margin-bottom: 50px;
                position: relative;
                display: inline-block;
                left: 50%;
                transform: translateX(-50%);
            }

            .ratings-reviews-section .section-title::after {
                content: '';
                position: absolute;
                bottom: -10px;
                left: 40%;
                width: 20%;
                height: 3px;
                background-color: #EFB11D;
                border-radius: 2px;
            }

            .rating-score-card {
                padding: 20px;
            }

            .score-display {
                line-height: 1.1;
                margin-bottom: 10px;
            }

            .score-num {
                font-family: 'Lora', serif;
                font-size: 64px;
                font-weight: 700;
                color: #212121;
            }

            .score-max {
                font-family: 'Lora', serif;
                font-size: 24px;
                font-weight: 500;
                color: #888;
            }

            .star-rating {
                font-size: 24px;
                color: #EFB11D;
            }

            .review-count {
                font-size: 14px;
                color: #666;
                margin: 0;
            }

            .rating-bars-card {
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            .rating-bar-row {
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .star-label {
                font-size: 16px;
                font-weight: 500;
                color: #212121;
                min-width: 25px;
            }

            .rating-bar-row .progress {
                flex-grow: 1;
                height: 10px;
                background-color: #EAEAEA;
                border-radius: 5px;
                overflow: hidden;
                border: none;
                box-shadow: none;
            }

            .rating-bar-row .progress-bar {
                background-color: #E43D12;
                border-radius: 5px;
            }

            .percentage-label {
                font-size: 14px;
                color: #555;
                min-width: 40px;
                text-align: right;
            }

            .vertical-divider {
                width: 1px;
                height: 140px;
                background-color: #E0E0E0;
                margin: 0 auto;
            }

            .satisfaction-card {
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            .satisfaction-header {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .satisfaction-icon {
                font-size: 20px;
                color: #E43D12;
            }

            .satisfaction-title {
                font-family: 'Lora', serif;
                font-size: 20px;
                font-weight: 600;
                color: #212121;
            }

            .satisfaction-row {
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .sat-label {
                font-size: 15px;
                font-weight: 500;
                color: #212121;
                min-width: 80px;
            }

            .satisfaction-row .progress {
                flex-grow: 1;
                height: 10px;
                background-color: #EAEAEA;
                border-radius: 5px;
                overflow: hidden;
                border: none;
                box-shadow: none;
            }

            .satisfaction-row .progress-bar {
                background-color: #E43D12;
                border-radius: 5px;
            }

            .reviews-header {
                font-family: 'Lora', serif;
                font-size: 24px;
                font-weight: 700;
                color: #212121;
                border-bottom: 2px solid #EAEAEA;
                padding-bottom: 12px;
                margin-top: 50px;
            }

            .review-card {
                background-color: #FFFFFF;
                border: 1px solid #EAEAEA;
                border-radius: 12px;
                padding: 24px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .review-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 24px rgba(228, 61, 18, 0.08);
            }

            .review-card-header {
                display: flex;
                gap: 15px;
                align-items: flex-start;
            }

            .avatar-circle {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                background-color: #F0F0F0;
                color: #444;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 18px;
                font-weight: 600;
                flex-shrink: 0;
                border: 1px solid #DDD;
                object-fit: cover;
            }

            .reviewer-meta {
                flex-grow: 1;
            }

            .stars-date {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 4px;
            }

            .stars-gold {
                color: #EFB11D;
                font-size: 14px;
                letter-spacing: 1px;
            }

            .star-grey {
                color: #E0E0E0;
            }

            .review-date {
                font-size: 12px;
                color: #888;
            }

            .reviewer-name {
                font-family: 'Lora', serif;
                font-size: 16px;
                font-weight: 700;
                color: #212121;
                margin: 0 0 2px 0;
            }

            .reviewer-location {
                font-size: 13px;
                color: #666;
                margin: 0;
            }

            .review-card-body .review-text {
                font-size: 14px;
                line-height: 1.6;
                color: #555555;
            }

            .review-card-body .product-tag {
                font-size: 14px;
                color: #212121;
                margin-top: 8px;
            }

            .review-badge-row {
                display: flex;
                gap: 10px;
                margin-top: 20px;
            }

            .review-sub-badge {
                display: inline-flex;
                align-items: center;
                gap: 5px;
                font-size: 12px;
                color: #E43D12;
                background-color: #FCECE7;
                padding: 4px 10px;
                border-radius: 20px;
                font-weight: 500;
            }

            .review-sub-badge i {
                font-size: 10px;
            }

            .view-more-btn {
                display: inline-block;
                padding: 12px 35px;
                border: 2px solid #E43D12;
                border-radius: 8px;
                color: #E43D12;
                font-weight: 600;
                text-decoration: none;
                transition: all 0.3s ease;
                font-family: 'Roboto', sans-serif;
                background-color: transparent;
            }

            .view-more-btn:hover {
                background-color: #E43D12;
                color: #FFFFFF !important;
                box-shadow: 0 4px 12px rgba(228, 61, 18, 0.2);
                text-decoration: none;
            }

            @media (max-width: 991px) {
                .vertical-divider {
                    display: none;
                }

                .ratings-reviews-section {
                    padding: 50px 20px;
                }

                .ratings-reviews-section .section-title {
                    font-size: 28px;
                    margin-bottom: 30px;
                }
            }
        </style>
        @endonce

    <section class="faq-section">
        <div class="container">
            <h1 class="faq-title">Frequently Asked Questions</h1>

            <div class="faq-item">
                <button class="faq-question">
                    What is Signage Board and Its Use Cases?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>
                        Signage boards are essential visual communication tools used by businesses to promote their brand,
                        attract customers, and share important information in a clear and impactful way.
                    </p>

                    <ul>
                        <li><strong>Purpose:</strong> Primarily used for branding, advertising, communication, and helping
                            customers locate a business.</li>
                        <li><strong>Components:</strong> Usually include business name, logo, tagline, and key information.
                        </li>
                        <li><strong>Types:</strong> Include small shop signs, indoor boards, outdoor signage, and large
                            billboards.</li>
                        <li><strong>Examples:</strong> Storefront signs, directional boards, promotional displays, and
                            notice boards.</li>
                        <li><strong>Definition:</strong> A signage board is a visual display placed in public or commercial
                            spaces to convey messages and enhance visibility.</li>
                    </ul>
                </div>
            </div>


            <div class="faq-item">
                <button class="faq-question">
                    Why is a Signage Board Important?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>A signage board is crucial because it directly influences how a business is perceived by customers.
                        It acts as the first point of visual communication, helping create a strong and lasting impression.
                        A well-designed signage board enhances brand visibility, ensures easy recognition, and communicates
                        professionalism and trustworthiness. It also helps guide customers effectively while reinforcing
                        brand identity in a competitive market. In essence, thoughtful signage not only attracts attention
                        but also strengthens brand recall and supports overall business growth. </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Types of Signage Boards are Available at Brand Signages?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We offer a wide range of signage board designs suitable for all types of businesses, including <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/top-mobile-shop-name-board-design-trends-to-attract-more-customers"><strong>office
                                sign board</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/best-tea-shop-name-board-design-trends-to-attract-customers-in-2025"><strong>shop
                                sign board</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/name-board-design-for-home-trends-styles-ideas-for-2026"><strong>sign
                                boards for home</strong></a>, and more. Our collection includes
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/arcylic-signages"><strong>acrylic signage boards</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/metal-signages"><strong>metal signage boards</strong></a>, <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/led-acrylic-3d-glow-sign-board"><strong>LED signage
                                boards</strong></a>, <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/arcylic-signages"><strong>neon signage</strong></a>, glow
                        signage
                        boards, and <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/digital-signages"><strong>digital signage</strong></a>, all
                        fully customizable to reflect your signage identity and enhance visibility.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Fast is The Installation and Delivery Process?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our process is efficient and end-to-end. Once the design is approved, we handle production,
                        installation, and finishing within a <strong>quick turnaround time, usually within 5-7
                            days</strong>, without compromising on quality.</p>
                </div>
            </div>



            <div class="faq-item">
                <button class="faq-question">
                    Which Local Vendor Provides Professional Signage Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Brand Signages is a trusted provider of professional signage board design services, known for
                        delivering premium-quality and customised solutions for businesses. From concept and design to
                        fabrication and installation, every signage board is crafted with precision and high professional
                        standards. With PAN India delivery within 48 hours, we ensure fast, reliable, and efficient service
                        for all signage board requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Materials Are Used in Sign Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We provide sign boards in a wide range of premium materials: Acrylic Signage, Stainless Steel (SS),
                        Aluminium Composite Panel (ACP), Wood Finish Boards, LED & Backlit Letters, Neon Signage. Material
                        selection depends on the installation location (indoor or semi-outdoor) and your interior theme.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are LED Sign Boards Suitable for Outdoor Use?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, LED sign boards are highly suitable for outdoor installation when manufactured using
                        weather-resistant and durable materials. These materials ensure protection against rain, dust,
                        sunlight, and humidity.</p>

                    <p>Common materials used for outdoor LED sign boards include:</p>
                    <ul>
                        <li>Acrylic panels with waterproof LED modules</li>
                        <li>Stainless Steel (304/316 grade) fabricated letters</li>
                        <li>ACP (Aluminium Composite Panel) backing sheets</li>
                        <li>Powder-coated metal frames for rust resistance</li>
                        <li>IP65-rated LED lighting components for outdoor durability</li>
                    </ul>

                    <p>When built with these materials, LED sign boards offer excellent nighttime visibility, energy
                        efficiency, and long-lasting performance even in challenging outdoor conditions.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can Sign Board Designs Be Fully Customized?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, customization is available for size, font style, material, finish, lighting, and color
                        combinations. A customized sign board ensures it aligns perfectly with your brand identity or
                        personal style.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Do I Choose the Right Signage Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Consider the installation location, viewing distance, lighting needs, brand personality, and
                        available space. You can browse from the trending designs in our website and choose or consult with
                        our profesisonal for custom signage board solutions.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Long Do Sign Boards Typically Last?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>High-quality sign boards made with durable materials can last between 4 to 8 years or more, depending
                        on environmental conditions and maintenance. At Brand Signages we offer signage boards with
                        premium-quality material and color finish with 48-month warranty.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Is Professional Installation Necessary?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Professional installation ensures proper alignment, secure mounting, and safe electrical setup for
                        illuminated boards. It improves durability and provides a clean, premium finish.</p>
                </div>
            </div>


            <div class="faq-item">
                <button class="faq-question">
                    Can Logos Be Included in Sign Board Designs?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, logos, icons, and brand elements can be integrated into the design. Adding a logo enhances brand
                        recognition and creates a stronger visual identity.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Why Choose Brand Signages for Sign Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Brand Signages combines creative signage board design expertise with high-quality materials and
                        precise installation. Backed by BrandStory’s 12+ years of expertise across all verticals, we deliver
                        durable, visually impactful, and fully customised signage board solutions.</p>
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

    {{-- ====================================================
         LIGHTBOX MODAL FOR GALLERY & REVIEW IMAGES
         ==================================================== --}}
    <div class="nr-modal" id="nrImageModal">
        <span class="nr-modal-close" id="nrModalClose">&times;</span>
        <button class="nr-modal-btn nr-modal-prev" id="nrModalPrev"><i class="fa-solid fa-chevron-left"></i></button>
        <div class="nr-modal-content-wrap">
            <img class="nr-modal-img" id="nrModalImg" src="" alt="Zoomed Review Image">
        </div>
        <button class="nr-modal-btn nr-modal-next" id="nrModalNext"><i class="fa-solid fa-chevron-right"></i></button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var modal = document.getElementById("nrImageModal");
            var modalImg = document.getElementById("nrModalImg");
            var closeBtn = document.getElementById("nrModalClose");
            var prevBtn = document.getElementById("nrModalPrev");
            var nextBtn = document.getElementById("nrModalNext");

            var imagesList = [];
            var activeIndex = -1;

            function refreshImagesList() {
                imagesList = [];
                var selectors = [
                    ".nr-sidebar-box img",
                    ".nr-card img"
                ];
                document.querySelectorAll(selectors.join(",")).forEach(function (el) {
                    if (imagesList.indexOf(el.src) === -1) {
                        imagesList.push(el.src);
                    }
                    el.style.cursor = "pointer";
                    el.addEventListener("click", function (e) {
                        e.stopPropagation();
                        var src = e.target.src;
                        activeIndex = imagesList.indexOf(src);
                        openModal(src);
                    });
                });

                // Camera icon box click
                var cameraBox = document.querySelector(".nr-sidebar-box .fa-camera");
                if (cameraBox) {
                    var boxContainer = cameraBox.closest("div");
                    if (boxContainer) {
                        boxContainer.style.cursor = "pointer";
                        boxContainer.addEventListener("click", function (e) {
                            e.stopPropagation();
                            if (imagesList.length > 0) {
                                activeIndex = 0;
                                openModal(imagesList[0]);
                            }
                        });
                    }
                }

                // Attach Read More click handlers
                document.querySelectorAll(".nr-readmore").forEach(function (btn) {
                    btn.style.cursor = "pointer";
                    btn.addEventListener("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var card = this.closest(".nr-card");
                        if (card) {
                            var desc = card.querySelector(".nr-review-desc");
                            if (desc) {
                                desc.classList.toggle("expanded");
                                if (desc.classList.contains("expanded")) {
                                    this.textContent = "Show less";
                                } else {
                                    this.textContent = "Read more";
                                }
                            }
                        }
                    });
                });
            }

            function openModal(src) {
                if (!modal || !modalImg) return;
                modal.style.display = "flex";
                modalImg.src = src;
                document.body.style.overflow = "hidden";
            }

            function closeModal() {
                if (!modal) return;
                modal.style.display = "none";
                document.body.style.overflow = "";
            }

            function showPrev() {
                if (imagesList.length === 0) return;
                activeIndex = (activeIndex - 1 + imagesList.length) % imagesList.length;
                modalImg.src = imagesList[activeIndex];
            }

            function showNext() {
                if (imagesList.length === 0) return;
                activeIndex = (activeIndex + 1) % imagesList.length;
                modalImg.src = imagesList[activeIndex];
            }

            if (closeBtn) closeBtn.addEventListener("click", closeModal);
            if (prevBtn) prevBtn.addEventListener("click", function(e) {
                e.stopPropagation();
                showPrev();
            });
            if (nextBtn) nextBtn.addEventListener("click", function(e) {
                e.stopPropagation();
                showNext();
            });

            if (modal) {
                modal.addEventListener("click", function (e) {
                    if (e.target === modal || e.target === document.querySelector('.nr-modal-content-wrap')) {
                        closeModal();
                    }
                });
            }

            document.addEventListener("keydown", function (e) {
                if (modal && modal.style.display === "flex") {
                    if (e.key === "Escape") closeModal();
                    if (e.key === "ArrowLeft") showPrev();
                    if (e.key === "ArrowRight") showNext();
                }
            });

            refreshImagesList();
        });
    </script>
@endsection
