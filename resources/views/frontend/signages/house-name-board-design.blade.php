@extends('frontend.layout.appLayout')
@section('content')
    <div class="newly-bannersection">
        <div class="bar">
            <h1 class="hero-banner_title">House Name Board Design</h1>

        </div>
        <!-- Slider -->
        <div class="slider-wrapper">

            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/name-boards/shop-name-boards--3.webp"
                        alt="Acrylic LED Shop Name Boards- Venn Hussen, USPA Shop Sign Board Design Sample">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/shop-name-logo-design.webp"
                        alt="Acrylic LED Glow Shop Name Board - GI Shop Sign Logo Board Design Sample">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/shop-name-board-8.webp"
                        alt="Acrylic LED Glow Sign - Sufflolk Shop Name Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/office-name-b1.webp" alt="Office Name Board - Brand Signages">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/office-name-board-design-1.jpg"
                        alt="Office Name Board - Brand Signages">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/office-name-b4.webp" alt="Office Name Board - Brand Signages">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/name-board-office-1.webp"
                        alt="Acrylic Sign Board- Corporate Office">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/house-name-board-1.webp" alt="House Name Board Design">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/house-name-board-2.webp" alt="House Name Board Design">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/house-name-board-3.webp" alt="House Name Board Design">
                </div>

            </div>

            <!-- Navigation should be OUTSIDE -->
            <div class="nav-arrow prev">&#8249;</div>
            <div class="nav-arrow next">&#8250;</div>



            <div class="thumbnails">
                <img src="/frontend/Images/name-boards/shop-name-boards--3.webp"
                    alt="Acrylic LED Shop Name Boards- Venn Hussen, USPA Shop Sign Board Design Sample" class="thumb active"
                    data-index="0">
                <img src="/frontend/Images/name-boards/shop-name-logo-design.webp"
                    alt="Acrylic LED Glow Shop Name Board - GI Shop Sign Logo Board Design Sample" class="thumb"
                    data-index="1">
                <img src="/frontend/Images/name-boards/shop-name-board-8.webp"
                    alt="Acrylic LED Glow Sign - Sufflolk Shop Name Board" class="thumb" data-index="2">
                <img src="/frontend/Images/name-boards/office-name-b1.webp" alt="Office Name Board - Brand Signages"
                    class="thumb" data-index="3">
                <img src="/frontend/Images/name-boards/office-name-board-design-1.jpg"
                    alt="Office Name Board - Brand Signages" class="thumb" data-index="4">
                <img src="/frontend/Images/name-boards/office-name-b4.webp" alt="Office Name Board - Brand Signages"
                    class="thumb" data-index="5">
                <img src="/frontend/Images/name-boards/name-board-office-1.webp" alt="Acrylic Sign Board- Corporate Office"
                    class="thumb" data-index="6">
                <img src="/frontend/Images/name-boards/house-name-board-1.webp" alt="House Name Board Design" class="thumb"
                    data-index="7">
                <img src="/frontend/Images/name-boards/house-name-board-2.webp" alt="House Name Board Design" class="thumb"
                    data-index="8">
                <img src="/frontend/Images/name-boards/house-name-board-3.webp" alt="House Name Board Design" class="thumb"
                    data-index="9">
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <h1 class="hero-banner_title">200+ House Name Board Designs</h1>
            <p class="subtitle"><b>Price: ₹1,000 - ₹30,000.00 + GST</b></p>

            <div class="divider"></div>
            <p class="fs-16">A well-crafted name board design defines your identity. Whether for a shop, office, or home,
                it should align
                with your brand personality, be clear to read, visually striking, durable, and suited to your space. Modern
                name board designs
                for 2026 range from minimalist acrylic and LED-lit styles to traditional wood and stainless steel, often
                enhanced with 3D lettering
                or subtle cultural motifs.</p>
            <ul class="features">
                <li>200+ House Name Board Designs (Largest Collection in India)</li>
                <li>Crafted with quality material- Acrylic, LEDs, Neon, & ACP</li>
                <li>3D LED letters to highlight your name, brand, or logo</li>
                <li>Customized based on space and visibility requirements</li>
                <li>PAN India service including design & installation</li>
            </ul>

            <div class="buttons">
                <a href="#pricing" class="btn">Explore Pricing</a>
                <a href="{{ route('contact_us') }}" class="btn">Place Order</a>
            </div>
        </div>
    </div>

    <!-- About Section -->

    <section class="instant-pricing">
        <div class="container pt-5">
            <h2>Explore Endless House Name Board Design Options</h2>
            <p>Brand Signages brings you one of the largest collections of name board design options for <a
                    href="blogs/name-board-design-for-home-trends-styles-ideas-for-2026"
                    style="color:#E43D12; text-decoration:none;"><strong>house name boards</strong></a>,
                <a href="name-board-designs-for-shops-bangalore" style="color:#E43D12; text-decoration:none;"><strong>shop
                        name board</strong></a>,
                <a href="/name-board-design-for-office-bangalore"
                    style="color:#E43D12; text-decoration:none;"><strong>office name plates</strong></a>, and commercial
                spaces.
                We offer affordable, customized name board solutions across India with quick delivery times and professional
                installation services.
                Every name board is crafted with precision, comes with transparent pricing, and includes up to 4 years
                warranty for long-term reliability.
            </p>
            <p>Choose from multiple size formats, elegant color combinations, and <strong>advanced lighting styles</strong>,
                our name board designs ensure a strong and lasting visual
                impression. From modern acrylic LED and flexible LED boards to neon LED, wood, metal, and vinyl options, we
                create name board designs that perfectly
                match your style, durability requirements, and budget- while enhancing your identity with clarity and
                sophistication.</p>
            <img src="/frontend/Images/name-boards/sign-board.webp"
                alt="Exclusive Shop House Name Board Design by Brand Signages" class="shop-image">

            <!-- <div class="scroll-loop-wrapper">
                                    <div class="gridbox">
                                       
                                            <div class="scroll-card">
                                                <img src="{{ asset('frontend/Images/name-boards/shop-name-boards-1.webp') }}"
                                                   alt="Premium Shop Name Boards for Outdoor Advertising">
                                            </div>
                                               <div class="scroll-card">
                                                <img src="{{ asset('frontend/Images/name-boards/shop-name-boards-7.webp') }}"
                                                   alt="Premium Shop Name Boards for Outdoor Advertising">
                                            </div>
                                               <div class="scroll-card">
                                                <img src="{{ asset('frontend/Images/name-boards/shop-name-boards-9.webp') }}"
                                                   alt="Premium Shop Name Boards for Outdoor Advertising">
                                            </div>
                                        
                                    </div>-->


            <div class="text-center">
                <a href="#designs">
                    <button class="contact-btn">Browse Latest Designs</button>
                </a>
            </div>

        </div>
        </div>
    </section>

    <section class="led-signs-manufacturing">
        <div class="container pt-5">

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-imagex">
                        <img src="{{ asset('frontend/Images/name-boards/name-boards.webp') }}"
                            alt="Name Board designed by Brand Signages" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="hero-title text-start">Why You Deserve a Perfect House Name Board Design</h2>
                    <p class="brand-description">
                        Every street, residential block, and commercial area is filled with properties competing for
                        attention.
                        Your name board design is not just a display- it is the first visual interaction people have with
                        your home,
                        office, or shop. A thoughtfully designed name board goes beyond showing a name or logo- it sets
                        expectations
                        and reflects brand identity instantly.
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            <strong>First Impressions Matter:</strong> Your name board design is often the first detail
                            people
                            notice. It sets the tone and creates an immediate perception of your style, professionalism,
                            and overall quality.
                        </li>
                        <li class="mb-3">
                            <strong>Silent Identity Statement:</strong> A well-crafted name board design works around the
                            clock,
                            consistently representing your identity whether for a home, office, or business- even when
                            no one is present.
                        </li>
                        <li>
                            <strong>Builds Trust & Credibility:</strong> A clean, premium, and professionally finished name
                            board
                            design signals reliability and attention to detail- qualities that leave a positive and lasting
                            impression.
                        </li>
                        <div class="mt-4">
                            <a href="#designs" class="custom-btn">Start Your Project</a>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <section class="We-Elevate-Brands-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="We-Elevate-Brands-heading fw-bold">Material Options for</br>Exlcusive House Name Board
                    Designs
                </h2>
            </div>

            <div class="position-relative">
                <div class="swiper We-Elevate-Brands-swiper pt-60">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{ asset('frontend/Images/home/uhouse.webp') }}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/metal-signages">Metal Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Metal name boards are among the most durable and
                                        long-lasting options for homes, offices,
                                        and commercial spaces. Stainless steel name boards offer a sleek, modern finish
                                        while maintaining strength and weather resistance.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{ asset('frontend/Images/home/led-sign.webp') }}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/led-acrylic-3d-glow-sign-board">Acrylic LED
                                            Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Acrylic LED name boards are a modern and versatile
                                        choice for creating a strong
                                        visual impression. We craft high-quality LED name board designs that enhance
                                        visibility and add a refined glow
                                        to your space.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{ asset('frontend/Images/home/digital-signage2.webp') }}"
                                    class="card-img-center" alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/digital-signages">Digital Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Digital signage solutions are ideal for commercial,
                                        offices, malls, and corporate
                                        environments where modern presentation matter. Digital name displays
                                        allow you to showcase changing information & visuals. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{ asset('frontend/Images/home/acrylic-sign.webp') }}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/led-acrylic-3d-glow-sign-board">Acrylic Name
                                            Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Acrylic name boards are a popular choice for their
                                        sleek appearance and versatile
                                        design options. We design acrylic name boards for homes, offices, apartments, and
                                        commercial spaces
                                        in custom sizes, colors, and styles.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{ asset('frontend/Images/home/neon-sign2.webp') }}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/neon-signages">Neon Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Neon name boards bring a vibrant and eye-catching
                                        appeal to modern spaces. Perfect
                                        for boutiques, cafés, home décor, and creative workspaces, neon designs create a
                                        bold visual statement with clarity
                                        and style.</p>
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

    <section id="pricing">
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3 pb-5">
            <h2 class="hero-title">House Name Board Design Pricing & Size Options</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/name-boards/name-board-design.webp') }}"
                            alt="Rivetoile LED House Name Board Design" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fs-20">
                        The cost of a name board design depends on the material, size, lettering style, lighting, and
                        installation requirements.
                        Since every space is different, whether for a home, office, or building exterior- accurate
                        measurement is essential.
                    </p>

                    <p class="fs-20"><strong>Popular Size Options Include:</strong></p>
                    <ul class="fs-20" style="padding-left: 18px;">
                        <li><b>Small Name Board:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹1,000 – ₹10,000)</li>
                        <li><b>Medium Name Boards:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹12,000 – ₹20,000)</li>
                        <li><b>Large Name Boards:</b> 4 ft x 8 ft (₹20,000 – ₹30,000)</li>
                        <li><b>Custom Dimension:</b> Based on size, material, and design</li>
                    </ul>

                    <p class="fs-20">
                        Each name board is crafted with <b>high-quality materials</b>, <b>exclusive design</b>, and
                        weather-resistant finishes.
                        You can choose from different lighting styles, including <b>front-lit, backlit, edge-lit, or RGB
                            color-changing LEDs</b>,
                        to match your brand’s identity.
                    </p>

                    <a href="https://brandsignages.com/contact-us" bis_skin_checked="1">
                        <button class="contact-btn">Book Order Now</button>
                    </a>
                </div>

    </section>

    <section id="designs" class="why-bg-light-pink pt-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="hero-title">Explore The Largest Collection of House Name <br>Board Designs in India</h2>
                <p class="fs-20">Your search for the <strong>perfect name board design</strong> ends with us We bring you
                    one of the
                    largest collections of <strong>name board designs in India</strong>, crafted for homes, offices, shops,
                    and commercial spaces. We are Brand Signages, specialists in crafting impactful name board designs that
                    leave a lasting impression.
                    Our name boards go beyond simple identification- they reflect personality, <strong>enhance
                        visibility</strong>, and elevate the overall
                    appearance of your space.</p>
            </div>

            <h3 class="hero-title">House Name Board Designs</h3>

            <div class="row con-fix2">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/name-board-design-for-home-trends-styles-ideas-for-2026"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/CXgjjm792bm771k2Dup0XK0CPTiFSPkjP6sx0QA3.webp"
                                    alt="House Name Board Design for Home: Trends, Styles &amp; Ideas for 2026">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">HOUSE NAME BOARD</span>
                                    <span class="time">4 mins 🕘</span>
                                </div>
                                <h5 class="blog-card-title">House Name Board Design for Home: Trends, Styles &amp; Ideas
                                    for 2026
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/house-name-plate-design-30-stunning-ideas-for-homes-2026"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/Bs3ERW4ugJPPtc8LHJjpnyGGmqGuhfhS9Vgvq9d5.webp"
                                    alt="House Name Plate Design Trends for 2026: 50+ Stunning Ideas for Homes">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">HOUSE NAME BOARD</span>
                                    <span class="time">4 mins 🕘</span>
                                </div>
                                <h5 class="blog-card-title">House Name Plate Design Trends for 2026: 50+ Stunning Ideas for
                                    Homes</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/guide-to-signage-board-design-inspiring-sign-board-design-ideas"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/5xbcHD87sUvd005ZCSV6EEeRrxKJSf5TSaxMgzZV.jpg"
                                    alt="Guide to Signage Board Design: Inspiring Sign Board Design Ideas">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">SIGN BOARD DESIGN</span>
                                    <span class="time">3 mins 🕘</span>
                                </div>
                                <h5 class="blog-card-title">Guide to Signage Board Design: Inspiring Sign Board Design
                                    Ideas</h5>
                            </div>
                        </div>
                    </a>
                </div>

            </div>



            <h3 class="hero-title pt-5">Best Shop House Name Board Designs</h3>

            <div class="row con-fix2">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/hardware-shop-name-board-designs-styles-branding-ideas"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/KZUz5AdxHY3etfmnnVofNmDbvMCsEnajXQNgqxGN.jpg"
                                    alt="Hardware Shop Name Board: Designs, Styles &amp; Branding Ideas">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">HARDWARE SHOP BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Hardware Shop Name Board: Designs, Styles & Branding</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/electrical-shop-name-board-design-ideas-trends-branding"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/czZlKe3qxGW7OjbfyzHpqi5XIOF0m2Rx8UXtXg80.jpg"
                                    alt="Electrical Shop House Name Board Design: Ideas, Trends &amp; Branding">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">ELECTRICAL SHOP NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Electrical Shop House Name Board Design: Ideas, Trends &
                                    Branding
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/stationery-shop-name-board-designs-for-2025-creative-functional-signage"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/M3JSag0ffZlQY0hpxHLYnbg3th2jCmwI3iH3dONC.jpg"
                                    alt="Stationery Shop House Name Board Designs for 2025: Creative &amp; Functional Signage">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">STATIONARY SHOP BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Stationery Shop Name Board: Creative Signage Options</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/juice-shop-name-board-design-fresh-eye-catching-ideas-for-modern-juice-bars"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/jqHQ3GpleIVRKQOokMDqXJTItm4tnWe7UEJmubbs.jpg"
                                    alt="Juice Shop House Name Board Design: Fresh &amp; Eye-Catching Ideas for Modern Juice Bars">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">JUICE SHOP NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Juice Shop Name Board: Fresh & Eye-Catching Designs</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/jewellery-shop-name-board-design-stunning-ideas-to-elevate-your-storefront"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/YLlD9KPySbesKpFmHVbQNbJMSJs6pPuESFXh1UWz.jpg"
                                    alt="Jewellery Shop House Name Board Design: Stunning Ideas to Elevate Your Storefront">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">JEWELLERY SHOP BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Jewellery Shop Name Board: Explore Stunning Designs</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/furniture-shop-name-board-designs-ideas-trends-for-storefronts"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/lU7J8x6Xaw3PFA96HpSnw83469lv1UZKz8UMiJnG.jpg"
                                    alt="Furniture Shop Name Board: Designs, Ideas &amp; Trends for Storefronts">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">FURNITURE SHOP NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Furniture Shop Name Board: Explore Designs for Storefronts</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/footwear-shop-name-board-designs-modern-ideas-styles-trends"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/cnzodI522kb6tbIIPog1iaEnIBYVHdqKSDaYzMZD.jpg"
                                    alt="Footwear Shop House Name Board Designs: Modern Ideas, Styles &amp; Trends">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">SHOE SHOP NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Footwear Shop Name Board: Modern Designs & Trends</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/medical-shop-name-board-design-modern-styles-trends-best-practices"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/I2GGnNeqzJ8qwyjNNo9ugxvYECkBNPkPV9jyOHd0.jpg"
                                    alt="Medical Shop House Name Board Design:  Modern Styles, Trends &amp; Best Practices">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">MEDICAL SHOP NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Medical Shop Name Board: Explore Modern Styles and Trends</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/xerox-shop-name-board-designs-a-complete-guide-with-modern-ideas"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/bIBl9w7DWlATxF3Al89DcsfZcgBgcaREKdtNCi36.jpg"
                                    alt="Xerox Shop House Name Board Designs: A Complete Guide with Modern Ideas">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">XEROX SHOP NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Xerox Shop Name Board: Discover Exclusive Modern Designs</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/cloth-saree-shop-name-board-design-trends-for-2025-a-detailed-guide"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/8EoUieeF7xynHtzKAGKLckAuFX6VywWoRxYsy5Ek.jpg"
                                    alt="Cloth &amp; Saree Shop House Name Board Design Trends for 2025: A Detailed Guide">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">CLOTH SHOP NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Cloth & Saree Shop Name Board: Trending Designs for 2025</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/creative-tailoring-shop-name-board-design-ideas-to-elevate-your-brand-in-2025"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/M7AJuSSHinwNNbRQOBSpB5OBxWvsVN5E7nQrvsNZ.jpg"
                                    alt="Creative Tailoring Shop House Name Board Design Ideas to Elevate Your Brand in 2025">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">TAILOR SHOP NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Creative Tailoring Shop Name Board: Find Out Trending Designs
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/top-mobile-shop-name-board-design-trends-to-attract-more-customers"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/oEU2NPTGhVJeQigszQFXz2tr0Bb4Dmu6bmizmFav.jpg"
                                    alt="Mobile Shop House Name Board Design Ideas in 2025: Attract More Customers">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">MOBILE SHOP BOARDS</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Mobile Shop House Name Board Design: Attract More Customers
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <h3 class="hero-title pt-5">Best Office House Name Board Designs <br>for Modern Workspaces</h3>

            <div class="row con-fix2">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/office-name-board-design-trends-for-2026-a-detailed-guide"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/l255RB71MFD9eTn4bSqRhiCuKXsi8Dn6Ik1pSexq.jpg"
                                    alt="Office House Name Board Design Trends for 2026: A Detailed Guide">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">OFFICE NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Office House Name Board Design Trends for 2026: A Detailed
                                    Guide</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/corporate-office-name-board-a-guide-to-design-materials-branding"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/EsV2OTzrEUUAGjrpOXzsCa6sBs1CPae4g0O5hWja.jpg"
                                    alt="Corporate Office Name Board: A Guide to Design, Materials &amp; Branding">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">OFFICE NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Corporate Office Name Board: A Guide to Design, Materials &amp;
                                    Branding</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/architect-office-name-board-style-purpose-and-design-inspiration"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/46IixlgPvKVGIEvL1ChMVL6sqJj7tRARQVryKvoj.jpg"
                                    alt="Architect Office Name Board: Style, Purpose, and Design Inspiration">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">ARCHITECT NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Architect Office Name Board: Style, Purpose, and Design
                                    Inspiration</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/construction-office-name-board-materials-design-best-practices"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/mqJg5KUos0Cforc8V53lCsXb2DRu6Q8N9aRyQWt8.jpg"
                                    alt="Construction Office Name Board: Materials, Design &amp; Best Practices">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">CONSTRUCTION COMPANY BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Construction Office Name Board: Materials, Design &amp; Best
                                    Practices</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/advocate-office-name-board-design-elements-for-professional-identity"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/0JkmK0VAmreB2vOgbjL5wVkz98ObfFbFkVQpauYj.jpg"
                                    alt="Advocate Office Name Board: Design Elements for Professional Identity">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">ADVOCATE NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Advocate Office Name Board: Design Elements for Professional
                                    Identity</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/acrylic-name-board-for-office-modern-workspace-branding-essential"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/ndCP4QNacZLWFXX24t18HCjgPVEkTsek1zsZMgKT.jpg"
                                    alt="Acrylic Name Board for Office: Modern Workspace Branding Essential">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">ACRYLIC OFFICE SIGNAGE</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Acrylic Name Board for Office: Modern Workspace Branding
                                    Essential</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/glass-name-board-for-office-stylish-and-professional-branding"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/wXN0JgRl1EJSXleQL7pPnA053DqrAeuou6rNuGN7.jpg"
                                    alt="Glass Name Board for Office: Stylish and Professional Branding">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">GLASS NAME BOARDS</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Glass Name Board for Office: Stylish and Professional Branding
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/ultimate-guide-to-office-reception-signage-make-the-right-first-impression"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/FLAAtgEPuON6RRCIHNI3ECWvChlzu9z5mC9sy2sD.jpg"
                                    alt="Office Reception Signage: Why It Matters and How It Shapes Your Brand">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">RECEPTION SIGNAGE</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Office Reception Signage: Why It Matters and How It Shapes Your
                                    Brand</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/office-name-board-design-ideas-modern-inspiration-for-workplace"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/128OGM4WHmoCSgngsw8ZeEfzQ4FPfQDOnNPGWgFt.jpg"
                                    alt="Office House Name Board Design Ideas: Modern Inspiration for Workplace">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">OFFICE NAME BOARD</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Office House Name Board Design Ideas: Modern Inspiration for
                                    Workplace</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/name-board-for-office-table-designs-materials-pricing-buyers-guide"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/qAUgJK6EM4OPF9K9uFY40E2EpxhoVBeNYa4BGmkb.jpg"
                                    alt="Name Board for Office Table: Designs, Materials, Pricing &amp; Buyer's Guide">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">NAME PLATE FOR OFFICE TABLE</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">Name Board for Office Table: Designs, Materials, Pricing &amp;
                                    Buyer's Guide</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/5-must-have-indoor-office-signs-for-a-functional-workspace"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/svt9mVEW6sVkDQNCINeyUZXL7iPdR34MKZxQPFPk.webp"
                                    alt="5 Must-Have Indoor Office Signs for a Functional Workspace">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">OFFICE SIGNAGES</span>
                                    <span class="time">Exclusive Designs</span>
                                </div>
                                <h5 class="blog-card-title">5 Must-Have Indoor Office Signs for a Functional Workspace</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                    <a href="https://brandsignages.com/blogs/hospital-sign-board-design-trends-for-2026-a-detailed-guide"
                        style="text-decoration: none;">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <img src="https://brandsignages.com/storage/blogs/fuVyiWyGSy2QcmiXWnzb8dHPEChuMBTbAKiU92Ro.jpg"
                                    alt="Hospital Sign Board Design Trends for 2026: A Detailed Guide">
                            </div>
                            <div class="blog-card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge">HOSPITAL SIGNAGE DESIGN</span>
                                    <span class="time">3 mins 🕘</span>
                                </div>
                                <h5 class="blog-card-title">Hospital Sign Board Design Trends for 2026: A Detailed Guide
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>



        </div>
        </div>
    </section>

    <section id="recent_projects" class="new-recent-works">
        <div class="container pt-5">
            <h2 class="hero-title  mb-6">Our Recent Name Board <br>Design Projects</h2>

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


    </section>

    <section class="we-deliver">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h2>Premium House Name Board Design Solutions</h2>
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
                                    in crafting impactful name board designs that leave a lasting impression. Our name
                                    boards go beyond simple identification- they reflect personality, enhance visibility,
                                    and elevate the overall appearance.
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
                                        href="https://brandsignages.com/arcylic-signages"><strong>acrylic name
                                            boards</strong></a> to timeless metal finishes, we customize every name board
                                    design to match your style, purpose, and visual appeal.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}"
                                    alt="Highly Durable Name Boards" class="img-fluid">
                                <h3>High Durability</h3>
                                <p>We use premium, weather-resistant and premium materials to ensure your name board remains
                                    strong, vibrant, and long-lasting day and night even in demanding outdoor conditions.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/home/perfect-illu.webp') }}"
                                    alt="Perfect Illumination" class="img-fluid">
                                <h3>Perfect Illumination</h3>
                                <p> Add brilliance to your brand with our LED-lit and neon store name boards, designed to
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
                <img src="{{ asset('frontend/Images/name-boards/name-board-23.webp') }}" alt="Neon name board for client"
                    class="img-fluid">
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

                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4 p-md-5 rounded-4 position-relative shadow-sm">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/Images/home/quote-icon.png') }}" alt="Quote Icon"
                                        width="40" height="40">
                                </div>
                                <p class="description">
                                    Our tech startup needed a signage solution that matched our innovative spirit. The Brand
                                    Signages team didn't just
                                    create a sign; they captured our company's essence. The LED sign board has become a
                                    conversation starter for clients
                                    and employees alike.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-1.webp') }}"
                                        alt="Michael, CEO, Technova Innovations" class="rounded-circle me-3"
                                        width="50" height="50">
                                    <div>
                                        <h6 class="name">Michael</h6>
                                        <small class="text-muted">CEO, Technova Innovations</small>
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
                                    As a boutique hotel chain, brand consistency is everything. These custom signages
                                    transformed
                                    our branding across multiple locations. The attention to detail is remarkable - each
                                    piece
                                    feels uniquely crafted yet perfectly aligned with our brand identity.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-2.webp') }}"
                                        alt="Asish, CEO, A Hotel Chain" class="rounded-circle me-3" width="50"
                                        height="50">
                                    <div>
                                        <h6 class="name">Asish</h6>
                                        <small class="text-muted">CEO, A Hotel Chain</small>
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
                                    We needed a visually appealing sign for our office location, and Brand Signages
                                    delivered a
                                    stunning LED sign board beyond our expectations. The direct communication and on-demand
                                    design
                                    process was seamless and stress-free.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-3.webp') }}"
                                        alt="Nandini, CEO, A Real Estate Company" class="rounded-circle me-3"
                                        width="50" height="50">
                                    <div>
                                        <h6 class="name">Nandini</h6>
                                        <small class="text-muted">CEO, A Real Estate Company</small>
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
                                    We weren’t sure if a signage company could capture the essence of a dynamic workspace
                                    like Bhive. But what they delivered went far beyond expectations. They didn’t just
                                    create
                                    signs – they crafted a visual identity that reflects our energy, innovation, and
                                    community spirit.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-4.webp') }}"
                                        alt="Manager, Bhive Workspace" class="rounded-circle me-3" width="50"
                                        height="50">
                                    <div>
                                        <h6 class="name">Sai Teja</h6>
                                        <small class="text-muted">Manager, Bhive Workspace</small>
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
        <div class="container">
            <h1 class="faq-title">Frequently Asked Questions</h1>



            <div class="faq-item">
                <button class="faq-question">
                    What Types of Name Boards are Available at Brand Signages?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We offer a wide range of name board designs suitable for all types of businesses, including <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/top-mobile-shop-name-board-design-trends-to-attract-more-customers"><strong>office
                                name board</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/best-tea-shop-name-board-design-trends-to-attract-customers-in-2025"><strong>shop
                                name board</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/name-board-design-for-home-trends-styles-ideas-for-2026"><strong>name
                                boards for home</strong></a>, and more. Our collection includes
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/arcylic-signages"><strong>acrylic name boards</strong></a>, <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/metal-signages"><strong>metal sign boards</strong></a>, <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/led-acrylic-3d-glow-sign-board"><strong>LED sign
                                boards</strong></a>, <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/arcylic-signages"><strong>neon signage</strong></a>, glow sign
                        boards, and <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/digital-signages"><strong>digital signage</strong></a>, all
                        fully customizable to reflect your name board identity and enhance visibility.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are Brand Signages Boards Weatherproof and Durable?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, every shop board design we craft is made from premium, weather-resistant materials that
                        withstand changing climate, be it rain, heat, or humidity- while maintaining long-term color
                        brilliance and structure.</p>
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
                    Why is a House Name Board Design Important?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>A professionally designed name board creates a powerful first impression. It reflects your identity,
                        enhances visibility, and adds credibility to your home, office, or commercial space. A strong design
                        ensures people recognize and remember your name easily.</p>
                </div>
            </div>


            <div class="faq-item">
                <button class="faq-question">
                    Which Local Vendor Provides Professional House Name Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Brand Signages is a trusted local provider known for delivering premium-quality name board designs.
                        From consultation and design to fabrication and installation, every step is handled with precision
                        and professional standards.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Materials Are Used in House Name Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We provide name boards in a wide range of premium materials: Acrylic Signage, Stainless Steel (SS),
                        Aluminium Composite Panel (ACP), Wood Finish Boards, LED & Backlit Letters, Neon Signage. Material
                        selection depends on the installation location (indoor or semi-outdoor) and your interior theme.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are House Name Board Designs Suitable for Outdoor Use?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, House Name Board Designs are highly suitable for outdoor installation when manufactured using
                        weather-resistant and durable materials. These materials ensure protection against rain, dust,
                        sunlight, and humidity.</p>

                    <p>Common materials used for outdoor House Name Board Designs include:</p>
                    <ul>
                        <li>Acrylic panels with waterproof LED modules</li>
                        <li>Stainless Steel (304/316 grade) fabricated letters</li>
                        <li>ACP (Aluminium Composite Panel) backing sheets</li>
                        <li>Powder-coated metal frames for rust resistance</li>
                        <li>IP65-rated LED lighting components for outdoor durability</li>
                    </ul>

                    <p>When built with these materials, House Name Board Designs offer excellent nighttime visibility,
                        energy
                        efficiency, and long-lasting performance even in challenging outdoor conditions.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can House Name Board Designs Be Fully Customized?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, customization is available for size, font style, material, finish, lighting, and color
                        combinations. A customized name board ensures it aligns perfectly with your brand identity or
                        personal style.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Do I Choose the Right House Name Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Consider the installation location, viewing distance, lighting needs, brand personality, and
                        available space. A professional assessment helps determine the most suitable design for maximum
                        impact.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Long Do Name Boards Typically Last?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>High-quality name boards made with durable materials can last between 4 to 8 years or more, depending
                        on environmental conditions and maintenance.</p>
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
                    What Size Should a Name Board Be?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>The size depends on the facade width, viewing distance, and placement area. Proper measurement
                        ensures the name board is proportionate and easily readable from a distance.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can Logos Be Included in House Name Board Designs?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, logos, icons, and brand elements can be integrated into the design. Adding a logo enhances brand
                        recognition and creates a stronger visual identity.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Why Choose Brand Signages for House Name Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Brand Signages combines creative name board design expertise with high-quality materials and precise
                        installation. The focus is on delivering durable, visually impactful, and customized name board
                        solutions that help your brand stand out.</p>
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
@endsection
