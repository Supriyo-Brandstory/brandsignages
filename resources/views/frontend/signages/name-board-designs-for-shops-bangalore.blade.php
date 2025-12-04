@extends('frontend.layout.appLayout')
@section('content')


    <div class="newly-bannersection">
        <div class="bar">
            <h1 class="hero-banner_title">Shop Name Board</h1>

        </div>
        <!-- Slider -->
        <div class="slider-wrapper">

            <div class="main-slider">
                <div class="slide active">
                    <img src="/frontend/Images/name-boards/shop-name-boards--1.webp" alt="Acrylic LED Shop Name Boards- Venn Hussen, USPA Design">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/shop-name-logo-design.webp" alt="Acrylic LED Glow Shop Name Board - GI">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/shop-name-boards--3.webp" alt="Acrylic LED Glow Sign - Sufflolk Shop Name Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/shop-name-boards-4.webp" alt="Acrylic LED Glow Sign Board- Queens Restaurant Shop Name Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/shop-name-board-6.webp" alt="Neon Glow Sign Board for Shop">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/shop-name-board-7.webp" alt="Dotted LED Glow Sign Board - Biduria Chai Shop Name Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/shop-name-board-8.webp" alt="Acrylic Sign Board- Corporate Office">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/shop-name-boards--9.webp" alt="Acrylic LED Glow Sign Board- RJ Jewellery Shop Name Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/name-boards/shop-name-boards--10.webp" alt="patiala Hardware & Plywood Shop Name Board">
                </div>
                <div class="slide">
                    <img src="/frontend/Images/led-sign-board/acrylic-led-product-details.webp" alt="Acrylic LED Sign Board Spefifications">
                </div>
              
            </div>

            <!-- Navigation should be OUTSIDE -->
            <div class="nav-arrow prev">&#8249;</div>
            <div class="nav-arrow next">&#8250;</div>
        


            <div class="thumbnails">
                <img src="/frontend/Images/name-boards/shop-name-boards--1.webp" alt="Acrylic LED Shop Name Boards- Venn Hussen, USPA Shop Sign Board Design Sample" class="thumb active" data-index="0">
                <img src="/frontend/Images/name-boards/shop-name-logo-design.webp" alt="Acrylic LED Glow Shop Name Board - GI Shop Sign Logo Board Design Sample" class="thumb" data-index="1">
                <img src="/frontend/Images/name-boards/shop-name-boards--3.webp" alt="Acrylic LED Glow Sign - Sufflolk Shop Name Board" class="thumb" data-index="2">
                <img src="/frontend/Images/name-boards/shop-name-boards-4.webp" alt="Acrylic LED Glow Sign Board- Queens Restaurant Shop Name Board" class="thumb" data-index="3">
                <img src="/frontend/Images/name-boards/shop-name-board-6.webp" alt="Neon Glow Sign Board for Shop" class="thumb" data-index="4">
                <img src="/frontend/Images/name-boards/shop-name-board-7.webp" alt="Dotted LED Glow Sign Board - Biduria Chai Shop Name Board" class="thumb" data-index="5">
                <img src="/frontend/Images/name-boards/shop-name-board-8.webp" alt="Acrylic Sign Board- Corporate Office" class="thumb" data-index="6">
                <img src="/frontend/Images/name-boards/shop-name-boards--9.webp" alt="Acrylic LED Glow Sign Board- RJ Jewellery Shop Name Board" class="thumb" data-index="7">
                <img src="/frontend/Images/name-boards/shop-name-boards--10.webp" alt="patiala Hardware & Plywood Shop Name Board" class="thumb" data-index="8">
                <img src="/frontend/Images/led-sign-board/acrylic-led-product-details.webp" alt="Acrylic LED Sign Board Spefifications" class="thumb" data-index="9">
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <h1 class="hero-banner_title">Shop Name Board Designs</h1>
            <p class="subtitle"><b>Price: ₹1,000 - ₹30,000.00 + GST</b></p>

            <div class="divider"></div>
            <p class="fs-16">A shop name board plays a key role in setting the tone for your business. Your shop needs a sign boards 
                that feels aligned, clear to read, visually striking, durable, and customised to fit your space. When the design, 
                lighting, and materials work together, the shop sign board stands out effortlessly and helps pull more customers toward 
                the store.</p>
            <ul class="features">
                <li>100+ shop name board designs (Largest Collection in India)</li>
                <li>Crafted with quality material- acrylic, LEDs, Neon, & ACP</li>
                <li>3D Acrylic LED letters highlight your shop name & logo</li>
                <li>PAN India service including design & installation</li>
                <li>Support services round the clock</li>
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
            <h2>Explore Endless Shop Name Board Design Options</h2>
            <p>Brand Signages brings you the <b>largest ever collection</b> of shop sign board options for your storefront. We are 
                providing the most affordable shop sign boards & <a href="led-acrylic-3d-glow-sign-board" style="color:#E43D12; text-decoration:none;"><strong>LED name boards</strong></a> all over India with quick turnaround and expert installation 
                services. Our shop name boards come with <b>custom design</b>, <b>4-5 years warranty</b>, and transparent pricing options. 
            </p>
            <p>Featuring various <b>size formats</b>, <b>dynamic colour options</b>, and <b>superior lighting</b>, our shop name boards offer a standout visual 
                presence and make your business impossible to overlook. With a wide range of materials, including <b>acrylic LED, 
                        Flexible LED, neon LED, wood, metal, and vinyl</b>, we create signage that matches your style, durability needs, and budget 
                        while enhancing your brand presence.</p>
            <img src="/frontend/Images/name-boards/largest-ever-signage-board-collection.webp" alt="Exclusive Shop Name Board Design by Brand Signages" class="shop-image">

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
                        <img src="{{asset('frontend/Images/name-boards/name-board-for-shop.webp')}}"
                            alt="Shop Board designed by Brand Signages" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="hero-title text-start">Why Your Shop Deserves a Stunning Name Board</h2>
                    <p class="brand-description">
                        Every city street buzzes with local and global brands competing for attention, your shop signboard
                        design isn’t just a display, it’s your store’s first conversation with the audience. A stunning
                        outdoor advertising board
                        goes beyond showing your brand name, it sets the tone for what customers can expect inside.
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            <strong>First Impressions Matter:</strong> Your shop sign board design is often the first thing
                            people notice about your store, it sets the tone and creates
                            an instant perception of your brand’s quality and personality.
                        </li>
                        <li class="mb-3">
                            <strong>Silent Brand Ambassador:</strong> A well-designed shop board design works around the
                            clock, communicating your brand identity even when your shop is closed. 
                        </li>
                        <li>
                            <strong>Creates Trust:</strong> A premium, well-crafted shop sign board design signals
                            reliability and quality, two things every customer looks for before stepping inside.
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
                <h2 class="We-Elevate-Brands-heading fw-bold">Material Options </br>Premium Shop Name Boards</h2>
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
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/metal-signages">Metal Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Stainless steel shop boards are among the most durable
                                        & cost-effective options for businesses.
                                        We design stainless steel name boards in custom sizes and styles to reflect your
                                        brand.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/home/led-sign.webp')}}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/led-acrylic-3d-glow-sign-board">Acrylic LED Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">LED shop boards are a modern and versatile choice for
                                        impactful branding. We craft high-quality
                                        LED name boards that make your business shine bright, day and night. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/home/digital-signage2.webp')}}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/digital-signages">Digital Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Digital shop boards bring a dynamic and engaging touch
                                        to modern retail spaces. We create digital
                                        name boards that captivate attention and elevate brand communication. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/home/acrylic-sign.webp')}}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/led-acrylic-3d-glow-sign-board">Acrylic Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Acrylic shop boards are a popular choice for their
                                        sleek finish and long-lasting appeal. We
                                        design acrylic name boards with exceptional precision and durability.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card We-Elevate-Brands-card ">
                                <img src="{{asset('frontend/Images/home/neon-sign2.webp')}}" class="card-img-center"
                                    alt="Metal Signage">
                                <div class="card-body pt-0">
                                    <h5 class="We-Elevate-Brands-title"><a
                                            href="https://brandsignages.com/neon-signages">Neon Name Boards</a></h5>
                                    <p class="We-Elevate-Brands-text">Neon shop boards are the perfect choice for retail and
                                        restaurant spaces seeking vibrant,
                                        round-the-clock visibility. Our skilled designers craft neon name boards that add a
                                        timeless charm.</p>
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
            <h2 class="hero-title">Shop Name Board Pricing & Size Options</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board/led-name-board-design-1.webp')}}"
                            alt="Rivetoile LED Name Board Design" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
            <p class="fs-20">
                The cost of shop name boards includes materials, size, design complexity, and installation. Since signs like an 8-ft shop 
                board or 20-ft sky sign can not be handed over, we visit the site to measure the space accurately before 
                installation.
            </p>

    <p class="fs-20"><strong>Popular Size Options Include:</strong></p>
    <ul class="fs-20" style="padding-left: 18px;">
        <li><b>Small Name Board:</b> 1 ft x 2 ft, 1 ft x 3 ft (₹1,000 – ₹10,000)</li>
        <li><b>Medium Name Boards:</b> 2 ft x 4 ft, 3 ft x 5 ft (₹12,000 – ₹20,000)</li>
        <li><b>Large Name Boards:</b> 4 ft x 8 ft (₹20,000 – ₹30,000)</li>
        <li><b>Custom Dimension:</b> Depends on your material & design</li>
    </ul>

    <p class="fs-20">
        Each shop name board is crafted with <b>high-quality materials</b>, <b>exclusive design</b>, and weather-resistant finishes. 
        You can choose from different lighting styles, including <b>front-lit, backlit, edge-lit, or RGB color-changing LEDs</b>, 
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
                <h2 class="hero-title">Largest Collection of Shop Name <br>Board Designs in India</h2>
                <p class="fs-20">Your search for shop name board design ends with Brand Signages. You bring you the 
                    <b>largest collection of shop name board designs</b> in India. Explore designs, choose your preferred option, and start your 
                    shop name board project with us. From concept to design and installation, we ensure flawless process, quality, and long-lasting durability.</p>
            </div>

<div class="row con-fix2">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/hardware-shop-name-board-designs-styles-branding-ideas" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/KZUz5AdxHY3etfmnnVofNmDbvMCsEnajXQNgqxGN.jpg" alt="Hardware Shop Name Board: Designs, Styles &amp; Branding Ideas">
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
            <a href="https://brandsignages.com/blogs/electrical-shop-name-board-design-ideas-trends-branding" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/czZlKe3qxGW7OjbfyzHpqi5XIOF0m2Rx8UXtXg80.jpg" alt="Electrical Shop Name Board Design: Ideas, Trends &amp; Branding">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">ELECTRICAL SHOP NAME BOARD</span>
                            <span class="time">Exclusive Designs</span>
                        </div>
                        <h5 class="blog-card-title">Electrical Shop Name Board Design: Ideas, Trends & Branding</h5>
                    </div>
                </div>
            </a>
        </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/stationery-shop-name-board-designs-for-2025-creative-functional-signage" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/M3JSag0ffZlQY0hpxHLYnbg3th2jCmwI3iH3dONC.jpg" alt="Stationery Shop Name Board Designs for 2025: Creative &amp; Functional Signage">
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
            <a href="https://brandsignages.com/blogs/juice-shop-name-board-design-fresh-eye-catching-ideas-for-modern-juice-bars" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/jqHQ3GpleIVRKQOokMDqXJTItm4tnWe7UEJmubbs.jpg" alt="Juice Shop Name Board Design: Fresh &amp; Eye-Catching Ideas for Modern Juice Bars">
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
            <a href="https://brandsignages.com/blogs/jewellery-shop-name-board-design-stunning-ideas-to-elevate-your-storefront" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/YLlD9KPySbesKpFmHVbQNbJMSJs6pPuESFXh1UWz.jpg" alt="Jewellery Shop Name Board Design: Stunning Ideas to Elevate Your Storefront">
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
            <a href="https://brandsignages.com/blogs/furniture-shop-name-board-designs-ideas-trends-for-storefronts" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/lU7J8x6Xaw3PFA96HpSnw83469lv1UZKz8UMiJnG.jpg" alt="Furniture Shop Name Board: Designs, Ideas &amp; Trends for Storefronts">
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
            <a href="https://brandsignages.com/blogs/footwear-shop-name-board-designs-modern-ideas-styles-trends" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/cnzodI522kb6tbIIPog1iaEnIBYVHdqKSDaYzMZD.jpg" alt="Footwear Shop Name Board Designs: Modern Ideas, Styles &amp; Trends">
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
            <a href="https://brandsignages.com/blogs/medical-shop-name-board-design-modern-styles-trends-best-practices" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/I2GGnNeqzJ8qwyjNNo9ugxvYECkBNPkPV9jyOHd0.jpg" alt="Medical Shop Name Board Design:  Modern Styles, Trends &amp; Best Practices">
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
            <a href="https://brandsignages.com/blogs/xerox-shop-name-board-designs-a-complete-guide-with-modern-ideas" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/bIBl9w7DWlATxF3Al89DcsfZcgBgcaREKdtNCi36.jpg" alt="Xerox Shop Name Board Designs: A Complete Guide with Modern Ideas">
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
            <a href="https://brandsignages.com/blogs/cloth-saree-shop-name-board-design-trends-for-2025-a-detailed-guide" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/8EoUieeF7xynHtzKAGKLckAuFX6VywWoRxYsy5Ek.jpg" alt="Cloth &amp; Saree Shop Name Board Design Trends for 2025: A Detailed Guide">
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
            <a href="https://brandsignages.com/blogs/creative-tailoring-shop-name-board-design-ideas-to-elevate-your-brand-in-2025" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/M7AJuSSHinwNNbRQOBSpB5OBxWvsVN5E7nQrvsNZ.jpg" alt="Creative Tailoring Shop Name Board Design Ideas to Elevate Your Brand in 2025">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">TAILOR SHOP NAME BOARD</span>
                            <span class="time">Exclusive Designs</span>
                        </div>
                        <h5 class="blog-card-title">Creative Tailoring Shop Name Board: Find Out Trending Designs</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
            <a href="https://brandsignages.com/blogs/top-mobile-shop-name-board-design-trends-to-attract-more-customers" style="text-decoration: none;">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <img src="https://brandsignages.com/storage/blogs/oEU2NPTGhVJeQigszQFXz2tr0Bb4Dmu6bmizmFav.jpg" alt="Mobile Shop Name Board Design Ideas in 2025: Attract More Customers">
                    </div>
                    <div class="blog-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge">MOBILE SHOP BOARDS</span>
                            <span class="time">Exclusive Designs</span>
                        </div>
                        <h5 class="blog-card-title">Mobile Shop Name Board Design: Attract More Customers</h5>
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
            <h2 class="hero-title  mb-6">Our Recent Shop Name Board <br>Design Projects</h2>

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
                            <h2>Brand Signages- Premium Sign Boards for Shops</h2>
                        </div>
                        <div class="col-md-8 col-12">

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                            class="img-fluid">
                                        <h3>Striking Designs</h3>
                                        <p>We are <a style="color: #ffff;text-decoration: underline;" href="https://brandsignages.com"><strong>Brand Signages</strong></a>, the best in creating shop and store boards that captivate every visitor. Our shop sign boards go beyond visuals, they capture brand’s personality & enhance visibility. 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Custom Craftmanship"
                                            class="img-fluid">
                                        <h3>Custom Craftsmanship</h3>
                                        <p>Every business is unique, and so are our designs. From modern <a style="color: #ffff;text-decoration: underline;" href="https://brandsignages.com/arcylic-signages"><strong>acrylic name boards</strong></a> to classic metal finishes, we tailor every shop board design to reflect your brand’s tone and target audience.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Highly Durable Name Boards"
                                            class="img-fluid">
                                        <h3>High Durability</h3>
                                        <p>We use premium, durable, weather-resistant materials that ensure your shop sign board stays vibrant and long-lasting, even in challenging outdoor conditions. 
                                        </p>
                                    </div>
                                </div>
                                 <div class="col-md-6 col-12">
                                    <div class="deliver-box">
                                        <img src="{{ asset('frontend/Images/home/perfect-illu.webp') }}" alt="Perfect Illumination"
                                            class="img-fluid">
                                        <h3>Perfect Illumination</h3>
                                        <p> Add brilliance to your brand with our LED-lit and neon store name boards, designed to shine bright day and night. Each design is engineered for maximum visibility, ensuring your brand stands out.
                                    </div>
                                </div>


                            </div>
            </section>

    <!--<section>
            <div class="container py-5">
                <h2 class="hero-title">Crafting Shop Boards That <br>Speak Your Brand’s Language</h2>

                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="showcase-image">
                            <img src="{{asset('frontend/Images/name-boards/home-ground-name-board-design.webp')}}" alt="Home Ground Bakery Business- Name Board Design Project by Brand Signages"
                                class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h2 class="brand-title">Premium-quality Store Boards</h2>
                        <p class="brand-description">
                           Your storefront deserves more than just a name, it deserves an identity. At <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/services"><strong>Brand Signages</strong></a>, 
                           we design <strong>shop/store name boards</strong> that capture attention, reflect your brand’s essence, and create a lasting impression. We are the best name board design company known for our <b>creative approach</b> to shop sign board manufacturing. 
                        </p>
                           <p class="brand-description">
                           Whether it’s a <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/hospital-signages"><strong>healthcare</strong></a>, <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/restaurant-signages"><strong>restaurant</strong></a>, retail outlet, or <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/office-desk-signs-in-bangalore"><strong>office sign board</strong></a>, our name boards for shops blend creativity, craftsmanship, and visibility to turn every glance into curiosity and every visit into trust. With us, your shop sign board doesn’t just stand out, it stands apart.
                        </p>
                        <p class="brand-description">
                           Being a prominent leader in sign board design services, we have become a trusted name in shop sign board manufacturing. We value our core principles, serve each customer with utmost priority, and bring your brand to life with captivating graphics and impactful visual storytelling.
                        </p>
                        <div class="mt-4">
                                <a href="https://brandsignages.com/contact-us" class="custom-btn">Start Your Project</a>
                            </div>
                    </div>
                </div>
            </div>
        </section>-->

    <!--<section>
        <div class="container pb-5">
            <h2 class="hero-title">Why Businesses Trust Brand Signages for <br>Shop Name Board Design</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/name-boards/bakery-shop-sign-baord.webp')}}"
                            alt="Brand Signages Latest Design - Wenzel's Bakery Shop Name Board" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">

                    <p class="fs-20">
                        Shop name boards are one of the most powerful ways for outdoor advertising. At <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com"><strong>Brand
                        Signages</strong></a>, we design impactful, high-quality boards that help businesses stand out effortlessly and attract customers to step inside.
                    </p>
                    <div class="faq-item active">
                        <button class="faq-question active">
                            Brand-Focused Approach
                            <i class="faq-icon fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer active">
                            <p>We take the time to understand your business personality, customer base, and market positioning, ensuring every 
                                shop name board reflects who you are and what you stand for.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Smooth, Hassle-Free Execution
                            <i class="faq-icon fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>From concept to design, fabrication, and installation, our team handles every stage with precision and professionalism, 
                                making the entire process quick, seamless, and worry-free for business owners.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Transparent & Instant Pricing
                            <i class="faq-icon fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Businesses appreciate our quick and clear pricing system that eliminates guesswork. With Brand Signages, you know the 
                                cost upfront- no hidden charges, no delays, just instant quotes that help you plan with confidence.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!--<section class="home-page mb-5">
        <div class="pointing">
            <div class="container point">
                <div class="ledx pulse-point">
                    <span class="pulse"></span> 
                    <span class="pulse-center"></span>
                    <img class="pulse-hover-img ledx-img" src="{{ asset('frontend/Images/home/led-signage.png') }}"
                        alt="Shop Board Design- LED Sign Board">
                </div>
                <div class="outdoorx pulse-point">
                    <span class="pulse"></span> 
                    <span class="pulse-center"></span> 
                    <img class="pulse-hover-img outdoorx-img" src="{{ asset('frontend/Images/home/outdoor-signage.png') }}"
                        alt="Shop Board Design- Outdoor Signage">
                </div>
                <div class="digitalx pulse-point">
                    <span class="pulse"></span> 
                    <span class="pulse-center"></span> 
                    <img class="pulse-hover-img digitalx-img" src="{{ asset('frontend/Images/home/digital-signage.png') }}"
                        alt="Shop Board Design- Digital Signage">
                </div>
                <div class="metalx pulse-point">
                    <span class="pulse"></span> 
                    <span class="pulse-center"></span> 
                    <img class="pulse-hover-img metalx-img" src="{{ asset('frontend/Images/home/metal-signage.png') }}"
                        alt="Shop Board Design- Metal Signage">
                </div>
                <div class="acrylicx pulse-point">
                    <span class="pulse"></span> 
                    <span class="pulse-center"></span> 
                    <img class="pulse-hover-img acrylicx-img" src="{{ asset('frontend/Images/home/acrylic-signage.png') }}"
                        alt="Shop Board Design- Acrylic Signage">
                </div>

            </div>
        </div>
    </section>-->



    <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/name-boards/chai-cafe-shop-name-board.webp') }}" alt="Our Clients">
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
                                    Our tech startup needed a signage solution that matched our innovative spirit. The Brand
                                    Signages team didn't just
                                    create a sign; they captured our company's essence. The LED sign board has become a
                                    conversation starter for clients
                                    and employees alike.
                                </p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="{{ asset('frontend/Images/home/testimonial-1.webp') }}"
                                        alt="Michael, CEO, Technova Innovations" class="rounded-circle me-3" width="50"
                                        height="50">
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
                                        alt="Asish, CEO, A Hotel Chain" class="rounded-circle me-3" width="50" height="50">
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
                                        alt="Nandini, CEO, A Real Estate Company" class="rounded-circle me-3" width="50"
                                        height="50">
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
                                        alt="Manager, Bhive Workspace" class="rounded-circle me-3" width="50" height="50">
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
    <!--<section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Signage & Branding</h2>
                <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the signage designs
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
    </section>-->

    <section class="faq-section">
        <div class="container">
            <h1 class="faq-title">Frequently Asked Questions</h1>

            <div class="faq-item">
                <button class="faq-question">
                    Why is a Shop Name Board Design Important for Your Business?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>A well-designed shop/store name board is the face of your business, it creates the first
                        impression and communicates your brand’s personality before customers step inside.
                        It enhances visibility, builds trust, and helps your store stand out amid
                        competitive retail landscape.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How to Order Personalized Shop Name Boards Online in India?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>At Brand Signages, you can easily order your personalized shop name boards online. Simply share your
                        business name,
                        logo, preferred material, and size. Our design team will create a digital mock-up for approval
                        before production.
                        Once confirmed, your board will be fabricated using premium materials and delivered or installed at
                        your location.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Which Local Vendor Provides Shop Name Board Branding Solutions?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Brand Signages is one of the leading <b>signage manufacturers in India</b> offering complete shop
                        board design and branding
                        solutions- from design to installation. We create customized boards for retail stores, restaurants,
                        showrooms,
                        and offices with options in acrylic, LED, and metal finishes.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Where to Buy Eco-friendly Shop Name Boards with Fast Delivery?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>If you’re looking for sustainable solutions, Brand Signages offers <b>eco-friendly shop name
                            boards</b> made with recyclable materials
                        and energy-efficient LED lighting. We ensure quick fabrication and fast delivery across major Indian
                        cities.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Which Company Offers Custom Shop Board Name Designs Nearby?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Whether you’re in <b>Bangalore, Chennai, Mumbai, or Delhi</b>, Brand Signages is your nearby expert
                        for custom shop name boards. Our in-house
                        design and fabrication team ensures your sign reflects your brand identity perfectly and stands out
                        on any high street.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is The Cost of An Acrylic Shop Name Board Design with Installation?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>The cost of an acrylic shop name board design in India depends on size, lighting, and mounting
                        requirements. At Brand Signages,
                        prices typically start from <b>₹1,500 per sq. ft (including LED)</b> and vary based on design and
                        customization. Contact our
                        team for an exact quote with installation included.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How to Choose Shop Name Board Designs That Attract Customers?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>To attract customers, your shop name board design should be clear,
                        well-lit, and visually aligned with your brand identity.
                        We recommend using <b>high-contrast colors, readable fonts,
                            and elegant LED illumination</b>. Brand Signages helps you design
                        boards that grab attention without being overwhelming.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is The Best Material for Durable Shop Name Board Design in India?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>For long-lasting performance, materials like <b>acrylic, aluminum composite panels (ACP), stainless
                            steel,
                            and LED modules</b> work best. At Brand Signages, we combine these durable materials with
                        weather-resistant
                        finishes to ensure your shop board stays bright and beautiful for years.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is The Standard Size of a Shop Name Board?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>There’s no fixed size for shop name boards- it depends on your storefront width, local regulations,
                        and viewing distance.
                        However, most boards range <b>between 6x2 ft to 10x3 ft.</b> Our experts at Brand Signages can
                        recommend the ideal dimensions for
                        maximum visibility and balance.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Can I Make My Shop Name Board Design Stand Out?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>To make your shop name board design stand out, <b>use 3D lettering, LED backlighting, clean design,
                            and premium finishes.</b> Add your brand logo and keep
                        the layout minimal yet impactful. Brand Signages specializes in designing visually striking boards
                        that help businesses get noticed and remembered.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can I Customize My Shop Board Design?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Absolutely! we specialize in custom shop name boards <strong>tailored to your business type, size,
                            and theme</strong>. From fonts and materials to lighting styles and finishes, every element is
                        designed to reflect your unique brand identity.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do You Offer LED and Illuminated Sign Boards?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we offer a wide range of <strong>LED sign boards, neon lights, and backlit name board</strong>
                        options that give your storefront a premium glow. These illuminated designs help your brand stay
                        visible even after dark, making them ideal for high-footfall areas.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What Types of Store Name Boards are Available at Brand Signages?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We offer a wide range of shop name board designs suitable for all types of businesses, including <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/top-mobile-shop-name-board-design-trends-to-attract-more-customers"><strong>mobile
                                shop</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/best-tea-shop-name-board-design-trends-to-attract-customers-in-2025"><strong>tea
                                shop</strong></a>,
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/creative-tailoring-shop-name-board-design-ideas-to-elevate-your-brand-in-2025"><strong>tailoring
                                shop</strong></a>, or
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/blogs/cloth-saree-shop-name-board-design-trends-for-2025-a-detailed-guide"><strong>cloth
                                shop name board</strong></a>, xerox shops, footwear shops, medical shops, furniture stores,
                        jewellery shops, and more. Our collection includes
                        <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/arcylic-signages"><strong>acrylic name boards</strong></a>, <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/metal-signages"><strong>metal sign boards</strong></a>, <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/led-light-signages"><strong>LED sign boards</strong></a>, <a
                            style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/arcylic-signages"><strong>neon signage</strong></a>, glow sign
                        boards, and <a style="color: #E43D12;text-decoration: none;"
                            href="https://brandsignages.com/digital-signages"><strong>digital signage</strong></a>, all
                        fully customizable to reflect your brand identity and enhance your storefront visibility.
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
                    Are Multilingual Shop Boards Available?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we create multilingual shop name boards in <strong>English, Kannada, Hindi, or any preferred
                            language</strong> to help your business connect better with local and diverse audiences across.
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



@endsection