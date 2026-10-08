@extends('frontend.layout.appLayout')

@section('content')
    <div id="homeHeroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeHeroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeHeroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeHeroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <section class="hero-banner" style="background-image: url('{{ asset('/frontend/Images/home/home-banner-bg.webp') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="hero-banner_title">Sign Board Makers in<br> Bangalore for Every Industry</h1>
                                <p>India's most Trusted B2B sign board manufacturer in Bangalore- LED, <br>Acrylic, Neon, Metal & Digital Signage (12,000+ Deliveries PAN India).
                                </p>
                                <a href="https://brandsignages.com/contact-us" class="contact-btn text-decoration-none d-inline-block">Explore More</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <section class="hero-banner" style="background-image: url('{{ asset('/frontend/Images/banner-002.webp') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="hero-banner_title">Custom Signage Design <br>& Printing Services (PAN India)</h2>
                                <p>Explore our custom sign board design solutions, from LED acrylic, neon signs, <br>digital signages, name boards, safety signs and much more.</p>
                                <a href="https://brandsignages.com/sign-board-design-bangalore" class="contact-btn text-decoration-none d-inline-block">Explore More</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <section class="hero-banner" style="background-image: url('{{ asset('/frontend/Images/banner-003.webp') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="hero-banner_title">Best LED Name Board and <br>Banner Boards for Businesses</h2>
                                <p>Explore eye-catching LED sign board and name board options for effective branding <br>and clear messaging at Brand Signages with 200+ design options.</p>
                                <a href="https://brandsignages.com/led-acrylic-3d-glow-sign-board" class="contact-btn text-decoration-none d-inline-block">Explore More</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#homeHeroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeHeroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="Sign_Boards">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">

                </div>
                <div class="col-md-8 col-12 right-col">
                    <h2>Welcome to Brand Signages - Your Go-to Choice for Premium-quality Sign Boards</h2>
                    <p>We are among the exclusive <a href="/sign-board-design-bangalore" style="text-decoration: unset;color:#ffff; font-weight: bold;">signage board designer</a> & manufacturers in India with a long-standing foundation in
                        Bangalore. We design custom sign boards to meet the exact needs of customers with no compromise in
                        quality and delivery time. Our core principle lies in 4 strong pillars that make us the #1 sign
                        board company in the region.  </p>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/creative-design.png') }}"
                                    alt="Brand Signages Provides Creative Design" class="img-fluid">
                                <h3>Creative Design</h3>
                                <p>Our creative team provides flexible, personalized signage design, transforming your
                                    conceptual ideas into compelling visual narratives.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/expert-precision.png') }}"
                                    alt="We work with Expert Precision " class="img-fluid">
                                <h3>Expert Precision </h3>
                                <p>We master sign board manufacturing with 10+ years of experience, well-known in the
                                    industry for LED sign board, digital signage, acrylic, and neon sign board mastery.  
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/premium-quality.png') }}"
                                    alt="Our products are of Premium Quality " class="img-fluid">
                                <h3>Premium Quality </h3>
                                <p>Quality is our primary benchmark that we maintain being a consistent leader in the
                                    signage industry. Commitment to quality is a practice we follow at our core principles. 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="Sign_Boards-box">
                                <img src="{{ asset('frontend/Images/home/timely-deliver-2.png') }}"
                                    alt="We provide Timely Delivery for all products" class="img-fluid">
                                <h3>Timely Delivery</h3>
                                <p>We optimize workflows, maintain stringent timelines for the delivery of signage products.
                                    We measure our growth metrics based on customer satisfaction, and timing is a part of
                                    it.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="led-signs-manufacturing">
        <div class="container pt-5">

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-imagex">
                        <img src="{{asset('frontend/Images/home/led-sign-bg.webp')}}"
                            alt="Starbucks LED Sign board designed by Brand Signages" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="hero-title text-start">Best Signage Board Manufacturer in Bangalore, India </h2>
                    <p class="brand-description">
                        Brand Signages was established in 2014 with a vision to empower brands with signage solutions that
                        are unmatched in quality and design. We are meeting the deadlines in 2026 as the best-rated signage
                        manufacturer, working with the top brands across India. Our hustle is going on, and we work
                        tirelessly to hold the title and remain a signage superpower. 
                    </p>
                    <ul class="brand-list">
                        <li class="mb-3">
                            The process begins with conceptualisation. Our designers collaborate closely with clients to
                            understand the target audience and design objectives.
                        </li>
                        <li class="mb-3">
                            At our signage manufacturing facility, we create the final product, including the desired colour
                            palettes, typography, and logo placement. 
                        </li>
                        <li>
                            The final stage involves quality control, where each signage piece is meticulously inspected to
                            ensure it perfectly represents the brand's visual standards.
                        </li>
                        <div class="mt-4">
                            <a href="{{route('about_us')}}" class="custom-btn">Know About Us</a>
                        </div>
                </div>
            </div>
        </div>
    </section>

        <section class="premium-catalog-section py-5">
        <div class="container">
            <h2 class="We-Elevate-Brands-heading fw-bold mb-5 text-center">Custom Signage, Sign Boards and<br> Marketing
                Materials</h2>

            <div class="catalog-list">
                <!-- Item 1: Office Signage Board -->
                <div class="catalog-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="catalog-card-img-wrapper">
                                <img src="{{ asset('frontend/Images/Office-Signage-Board.webp') }}"
                                    alt="Office Signage Board" class="catalog-card-img">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h3 class="catalog-card-title">Office Signage Board</h3>
                            <div class="catalog-card-price-box">
                                <span class="catalog-card-price">₹1,500</span>
                                <span class="catalog-card-unit">/Sqft</span>
                                <p class="catalog-card-moq">Minimum Order Quantity: 10 Sqft</p>
                            </div>
                            <p class="catalog-card-desc">
                                Office sign boards are the symbol of elegance and brand identity. We provide requirement-specific signage board designs for receptions, entrances, cabins, and corporate spaces, they are durable, visually striking, and energy-efficient.
                            </p>
                            <table class="catalog-specs-table">
                                <tr>
                                    <td class="catalog-spec-label">Usage</td>
                                    <td class="catalog-spec-value">Receptions, Entrances, Cabins, Corporate spaces</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Material</td>
                                    <td class="catalog-spec-value">Acrylic, Stainless Steel, LED, ACP</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Features</td>
                                    <td class="catalog-spec-value">3D LED letters, Durable, Energy-efficient</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Visibility</td>
                                    <td class="catalog-spec-value">High-impact brand recognition</td>
                                </tr>
                            </table>
                            <div class="catalog-card-actions">
                                <button class="btn-catalog-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <i class="fas fa-phone-alt me-2"></i> Request a Call Back
                                </button>
                                <a href="/name-board-design-for-office-bangalore" class="btn-catalog-secondary">
                                    Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Indoor Signage Board -->
                <div class="catalog-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="catalog-card-img-wrapper">
                                <img src="{{ asset('frontend/Images/Indoor-Signage-Board.webp') }}"
                                    alt="Indoor Signage Board" class="catalog-card-img">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h3 class="catalog-card-title">Indoor Signage Board</h3>
                            <div class="catalog-card-price-box">
                                <span class="catalog-card-price">₹800</span>
                                <span class="catalog-card-unit">/Sqft</span>
                                <p class="catalog-card-moq">Minimum Order Quantity: 5 Sqft</p>
                            </div>
                            <p class="catalog-card-desc">
                                Indoor signage boards improve branding, navigation, and customer experience across offices, retail stores, malls, restaurants, and hospitals. Designed for clear visibility and premium aesthetics, our indoor signages are durable and stylish.
                            </p>
                            <table class="catalog-specs-table">
                                <tr>
                                    <td class="catalog-spec-label">Usage</td>
                                    <td class="catalog-spec-value">Offices, Retail, Malls, Restaurants, Hospitals</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Aesthetics</td>
                                    <td class="catalog-spec-value">Premium, Stylish, Durable</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Function</td>
                                    <td class="catalog-spec-value">Branding, Navigation, Customer Experience</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Visibility</td>
                                    <td class="catalog-spec-value">Clear visibility and premium finishing</td>
                                </tr>
                            </table>
                            <div class="catalog-card-actions">
                                <button class="btn-catalog-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <i class="fas fa-phone-alt me-2"></i> Request a Call Back
                                </button>
                                <a href="https://brandsignages.com/indoor-signages" class="btn-catalog-secondary">
                                    Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Shop Sign Board -->
                <div class="catalog-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="catalog-card-img-wrapper">
                                <img src="{{ asset('frontend/Images/Shop-Sign-Board.webp') }}"
                                    alt="Shop Sign Board" class="catalog-card-img">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h3 class="catalog-card-title">Shop Sign Board</h3>
                            <div class="catalog-card-price-box">
                                <span class="catalog-card-price">₹2,500</span>
                                <span class="catalog-card-unit">/Sqft</span>
                                <p class="catalog-card-moq">Minimum Order Quantity: 10 Sqft</p>
                            </div>
                            <p class="catalog-card-desc">
                                We are named among top-tier sign board manufacturers for shop signage boards in India. Our signage board transforms storefronts into powerful visual displays, attracting customers with eye-catching designs and strong brand visibility.
                            </p>
                            <table class="catalog-specs-table">
                                <tr>
                                    <td class="catalog-spec-label">Usage</td>
                                    <td class="catalog-spec-value">Retail shops & showrooms</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Material</td>
                                    <td class="catalog-spec-value">Acrylic, Stainless Steel, LED, ACP</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Features</td>
                                    <td class="catalog-spec-value">3D LED letters, Durable, Efficient</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Visibility</td>
                                    <td class="catalog-spec-value">Day & night visibility, premium finish</td>
                                </tr>
                            </table>
                            <div class="catalog-card-actions">
                                <button class="btn-catalog-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <i class="fas fa-phone-alt me-2"></i> Request a Call Back
                                </button>
                                <a href="/name-board-designs-for-shops-bangalore" class="btn-catalog-secondary">
                                    Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4: Outdoor Signage Board -->
                <div class="catalog-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="catalog-card-img-wrapper">
                                <img src="{{ asset('frontend/Images/Outdoor-Signage-1.webp') }}"
                                    alt="Outdoor Signage Board" class="catalog-card-img">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h3 class="catalog-card-title">Outdoor Signage Board</h3>
                            <div class="catalog-card-price-box">
                                <span class="catalog-card-price">₹2,200</span>
                                <span class="catalog-card-unit">/Sqft</span>
                                <p class="catalog-card-moq">Minimum Order Quantity: 15 Sqft</p>
                            </div>
                            <p class="catalog-card-desc">
                                As top-level signage board experts, we create outdoor signages that turn business spaces into brand landmarks. Our outdoor signage boards are designed for visibility, combining durability and impactful branding to engage customers.
                            </p>
                            <table class="catalog-specs-table">
                                <tr>
                                    <td class="catalog-spec-label">Usage</td>
                                    <td class="catalog-spec-value">Building, storefronts, outdoor branding</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Material</td>
                                    <td class="catalog-spec-value">ACP, MS frame, acrylic, LED</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Features</td>
                                    <td class="catalog-spec-value">Weatherproof, illuminated, durable</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Visibility</td>
                                    <td class="catalog-spec-value">Long-distance outdoor visibility</td>
                                </tr>
                            </table>
                            <div class="catalog-card-actions">
                                <button class="btn-catalog-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <i class="fas fa-phone-alt me-2"></i> Request a Call Back
                                </button>
                                <a href="/outdoor-signages" class="btn-catalog-secondary">
                                    Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 5: LED Sign Board -->
                <div class="catalog-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="catalog-card-img-wrapper">
                                <img src="{{ asset('frontend/Images/LED-Sign-Board.webp') }}"
                                    alt="LED Sign Board" class="catalog-card-img">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h3 class="catalog-card-title">LED Sign Board</h3>
                            <div class="catalog-card-price-box">
                                <span class="catalog-card-price">₹3,500</span>
                                <span class="catalog-card-unit">/Sqft</span>
                                <p class="catalog-card-moq">Minimum Order Quantity: 10 Sqft</p>
                            </div>
                            <p class="catalog-card-desc">
                                Our LED sign board delivers more than just illumination- they create high-impact brand visibility. Designed for lasting performance, these signages feature with vibrant displays, energy efficiency, and powerful visual communication.
                            </p>
                            <table class="catalog-specs-table">
                                <tr>
                                    <td class="catalog-spec-label">Usage</td>
                                    <td class="catalog-spec-value">Retail stores, malls, restaurants, showrooms</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Material</td>
                                    <td class="catalog-spec-value">2nd Gen LED, acrylic, ACP, SS</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Features</td>
                                    <td class="catalog-spec-value">Bright illumination, energy-efficient, durable</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Visibility</td>
                                    <td class="catalog-spec-value">High visibility day & night</td>
                                </tr>
                            </table>
                            <div class="catalog-card-actions">
                                <button class="btn-catalog-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <i class="fas fa-phone-alt me-2"></i> Request a Call Back
                                </button>
                                <a href="/led-acrylic-3d-glow-sign-board" class="btn-catalog-secondary">
                                    Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 6: Neon Sign Board -->
                <div class="catalog-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="catalog-card-img-wrapper">
                                <img src="{{ asset('frontend/Images/Neon-Sign-Board.webp') }}"
                                    alt="Neon Sign Board" class="catalog-card-img">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h3 class="catalog-card-title">Neon Sign Board</h3>
                            <div class="catalog-card-price-box">
                                <span class="catalog-card-price">₹4,000</span>
                                <span class="catalog-card-unit">/Piece</span>
                                <p class="catalog-card-moq">Minimum Order Quantity: 1 Piece</p>
                            </div>
                            <p class="catalog-card-desc">
                                Our neon sign boards combine vibrant illumination with creative branding to create visually striking business displays. Designed to capture attention instantly, these signages add a modern, stylish, and energetic appeal while enhancing engagement.
                            </p>
                            <table class="catalog-specs-table">
                                <tr>
                                    <td class="catalog-spec-label">Usage</td>
                                    <td class="catalog-spec-value">Cafes, salons, bars, retail interiors</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Material</td>
                                    <td class="catalog-spec-value">LED neon flex, acrylic, PVC</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Features</td>
                                    <td class="catalog-spec-value">Glow effect, custom shapes, energy-efficient</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Visibility</td>
                                    <td class="catalog-spec-value">Vibrant indoor & outdoor visibility</td>
                                </tr>
                            </table>
                            <div class="catalog-card-actions">
                                <button class="btn-catalog-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <i class="fas fa-phone-alt me-2"></i> Request a Call Back
                                </button>
                                <a href="/neon-signages" class="btn-catalog-secondary">
                                    Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 7: Metal Signage Board -->
                <div class="catalog-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="catalog-card-img-wrapper">
                                <img src="{{ asset('frontend/Images/Metal-Signage-Board.webp') }}"
                                    alt="Metal Signage Board" class="catalog-card-img">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h3 class="catalog-card-title">Metal Signage Board</h3>
                            <div class="catalog-card-price-box">
                                <span class="catalog-card-price">₹2,800</span>
                                <span class="catalog-card-unit">/Sqft</span>
                                <p class="catalog-card-moq">Minimum Order Quantity: 10 Sqft</p>
                            </div>
                            <p class="catalog-card-desc">
                                Our metal signage boards feature strength, elegance, and premium craftsmanship to create a lasting brand presence. Designed for durability and high visual impact, these signages deliver a sleek professional appearance with clear brand communication.
                            </p>
                            <table class="catalog-specs-table">
                                <tr>
                                    <td class="catalog-spec-label">Usage</td>
                                    <td class="catalog-spec-value">Offices, buildings, storefronts</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Material</td>
                                    <td class="catalog-spec-value">Stainless steel, brass, aluminum, ACP</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Features</td>
                                    <td class="catalog-spec-value">Rust-resistant, durable, premium finish</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Visibility</td>
                                    <td class="catalog-spec-value">Professional & high-end appearance</td>
                                </tr>
                            </table>
                            <div class="catalog-card-actions">
                                <button class="btn-catalog-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <i class="fas fa-phone-alt me-2"></i> Request a Call Back
                                </button>
                                <a href="/metal-signages" class="btn-catalog-secondary">
                                    Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 8: Acrylic Signage Board -->
                <div class="catalog-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="catalog-card-img-wrapper">
                                <img src="{{ asset('frontend/Images/Acrylic-Signage-Board.webp') }}"
                                    alt="Acrylic Signage Board" class="catalog-card-img">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h3 class="catalog-card-title">Acrylic Signage Board</h3>
                            <div class="catalog-card-price-box">
                                <span class="catalog-card-price">₹1,200</span>
                                <span class="catalog-card-unit">/Sqft</span>
                                <p class="catalog-card-moq">Minimum Order Quantity: 5 Sqft</p>
                            </div>
                            <p class="catalog-card-desc">
                                Our acrylic signages combine modern aesthetics with premium brand presentation. Designed with precision and clarity, these signboards create sleek, visually appealing displays that enhance brand visibility and deliver a sophisticated impression.
                            </p>
                            <table class="catalog-specs-table">
                                <tr>
                                    <td class="catalog-spec-label">Usage</td>
                                    <td class="catalog-spec-value">Retail stores, offices, indoor branding</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Material</td>
                                    <td class="catalog-spec-value">Acrylic, LED, vinyl, ACP</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Features</td>
                                    <td class="catalog-spec-value">Glossy finish, lightweight, custom designs</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Visibility</td>
                                    <td class="catalog-spec-value">Elegant & high-clarity branding</td>
                                </tr>
                            </table>
                            <div class="catalog-card-actions">
                                <button class="btn-catalog-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <i class="fas fa-phone-alt me-2"></i> Request a Call Back
                                </button>
                                <a href="/arcylic-signages" class="btn-catalog-secondary">
                                    Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 9: Promotional Banners -->
                <div class="catalog-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="catalog-card-img-wrapper">
                                <img src="{{ asset('frontend/Images/Promotional-Banners.webp') }}"
                                    alt="Promotional Banners" class="catalog-card-img">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h3 class="catalog-card-title">Promotional Banners</h3>
                            <div class="catalog-card-price-box">
                                <span class="catalog-card-price">₹100</span>
                                <span class="catalog-card-unit">/Sqft</span>
                                <p class="catalog-card-moq">Minimum Order Quantity: 50 Sqft</p>
                            </div>
                            <p class="catalog-card-desc">
                                Are you looking for compact, portable, and promotional banners? We provide high-quality graphics and durable designs that offer seamless portability without compromising visual impact, brand visibility, or powerful marketing communication.
                            </p>
                            <table class="catalog-specs-table">
                                <tr>
                                    <td class="catalog-spec-label">Usage</td>
                                    <td class="catalog-spec-value">Events, promotions, outdoor advertising</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Material</td>
                                    <td class="catalog-spec-value">Flex, vinyl, fabric, PVC</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Features</td>
                                    <td class="catalog-spec-value">High-resolution printing, weather-resistant</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Visibility</td>
                                    <td class="catalog-spec-value">Large-format high-impact visibility</td>
                                </tr>
                            </table>
                            <div class="catalog-card-actions">
                                <button class="btn-catalog-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <i class="fas fa-phone-alt me-2"></i> Request a Call Back
                                </button>
                                <a href="/banner-printing" class="btn-catalog-secondary">
                                    Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 10: Safety Signage Board -->
                <div class="catalog-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="catalog-card-img-wrapper">
                                <img src="{{ asset('frontend/Images/Safety-Signage-Board.webp') }}"
                                    alt="Safety Signage Board" class="catalog-card-img">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <h3 class="catalog-card-title">Safety Signage Board</h3>
                            <div class="catalog-card-price-box">
                                <span class="catalog-card-price">₹500</span>
                                <span class="catalog-card-unit">/Sqft</span>
                                <p class="catalog-card-moq">Minimum Order Quantity: 20 Sqft</p>
                            </div>
                            <p class="catalog-card-desc">
                                These signage boards are designed to ensure safety, awareness, and compliance across various environments. Safety signages provide clear, highly visible instructions and warning signs to protect individuals, and improve navigation.
                            </p>
                            <table class="catalog-specs-table">
                                <tr>
                                    <td class="catalog-spec-label">Usage</td>
                                    <td class="catalog-spec-value">Factories, construction sites, workplaces</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Material</td>
                                    <td class="catalog-spec-value">ACP, reflective vinyl, acrylic, PVC</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Features</td>
                                    <td class="catalog-spec-value">Reflective, durable, weatherproof</td>
                                </tr>
                                <tr>
                                    <td class="catalog-spec-label">Visibility</td>
                                    <td class="catalog-spec-value">Clear safety communication day & night</td>
                                </tr>
                            </table>
                            <div class="catalog-card-actions">
                                <button class="btn-catalog-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <i class="fas fa-phone-alt me-2"></i> Request a Call Back
                                </button>
                                <a href="/banner-printing" class="btn-catalog-secondary">
                                    Explore More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact CTA Box Below List -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="contact-cta-box text-center p-5"
                        style="background-color: #fff; border: 1px solid #e0e0e0; border-radius: 6px;">
                        <p class="cta-text mb-4" style="font-size: 20px; color: #555;">We design signage board with
                            high-quality print to keep your graphics sharp, vibrant, and visually impactful for years. Our
                            custom signage boards are crafted to deliver clear brand communication with premium finishes.
                        </p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="{{ route('contact_us') }}" class="contact-btn px-4 py-2"
                                style="border-radius: 8px; font-weight: 700; background-color: #E43D12; border: none;">Contact
                                Us Now</a>
                            <a href="tel:+918006606080" class="btn btn-outline-dark px-4 py-2"
                                style="border-radius: 8px; font-weight: 700;">Call: +91 8006606080</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="signage-manufacturer-section py-5">
        <div class="container">
            <h2 class="We-Elevate-Brands-heading fw-bold">Custom Signage, Sign Boards and<br> Marketing Materials</h2><br>
            <div class="row g-4">

               
                <div class="col-lg-3 col-md-6">
                    <div class="manufacturer-card">
                        <div class="card-img-wrapper">
                            <a href="/led-acrylic-3d-glow-sign-board">
                            <img src="{{ asset('frontend/Images/home/led-sign.webp') }}" alt="LED Sign Board">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="/led-acrylic-3d-glow-sign-board" style="text-decoration: none;">
                            <h3>LED Sign Board</h3>
                            </a>
                            <p>Our LED sign board delivers more than just illumination- they create high-impact brand visibility. Designed for lasting performance, these signages feature with vibrant displays, energy efficiency, and powerful visual communication.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="manufacturer-card">
                        <div class="card-img-wrapper">
                            <a href="/neon-signages">
                            <img src="{{ asset('frontend/Images/home/neon-sign2.webp') }}" alt="Neon Signage Board">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="/neon-signages" style="text-decoration: none;">
                            <h3>Neon Sign Board</h3>
                            </a>
                            <p>Our neon sign boards combine vibrant illumination with creative branding to create visually striking business displays. Designed to capture attention instantly, these signages add a modern, stylish, and energetic appeal while enhancing engagement.</p>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-6">
                    <div class="manufacturer-card">
                        <div class="card-img-wrapper">
                            <a href="/metal-signages">
                            <img src="{{ asset('/frontend/Images/home/uhouse.webp') }}" alt="Metal Signage Board- Brand Signages">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="/metal-signages" style="text-decoration: none;">
                            <h3>Metal Signage Board</h3>
                            </a>
                            <p>Our metal signage boards feature strength, elegance, and premium craftsmanship to create a lasting brand presence. Designed for durability and high visual impact, these signages deliver a sleek professional appearance with clear brand communication. </p>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-3 col-md-6">
                    <div class="manufacturer-card">
                        <div class="card-img-wrapper">
                                <a href="/arcylic-signages">
                            <img src="{{ asset('frontend/Images/home/acrylic-sign.webp') }}" alt="Event Signage- Acrylic Signage Board">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="/arcylic-signages" style="text-decoration: none;">
                            <h3>Acrylic Signage Board</h3>
                            </a>
                            <p>Our acrylic signages combine modern aesthetics with premium brand presentation. Designed with precision and clarity, these signboards create sleek, visually appealing displays that enhance brand visibility and deliver a sophisticated impression.</p>
                        </div>
                    </div>
                </div>

                               
                <div class="col-lg-3 col-md-6">
                    <div class="manufacturer-card">
                        <div class="card-img-wrapper">
                            <a href="/name-board-design-for-office-bangalore">
                            <img src="{{ asset('frontend/Images/name-boards/metal-office-name-board.webp') }}" alt="Office Signage Board">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="/name-board-design-for-office-bangalore" style="text-decoration: none;">
                            <h3>Office Signage Board</h3>
                            </a>
                            <p>Office sign boards are the symbol of elegance and brand identity. We provide requirement-specific signage board designs for receptions, entrances, cabins, and corporate spaces, they are durable, visually striking, and energy-efficient.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="manufacturer-card">
                        <div class="card-img-wrapper">
                            <a href="/indoor-signages">
                            <img src="{{ asset('frontend/Images/office-sign-2.webp') }}" alt="Indoor Signage Board">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="/indoor-signages" style="text-decoration: none;">
                            <h3>Indoor Signage Board</h3>
                            </a>
                            <p>Indoor signage boards improve branding, navigation, and customer experience across offices, retail stores, malls, restaurants, and hospitals. Designed for clear visibility and premium aesthetics, our indoor signages are durable and stylish. </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="manufacturer-card">
                        <div class="card-img-wrapper">
                            <a href="/name-board-designs-for-shops-bangalore">
                            <img src="{{ asset('frontend/Images/case-studies/cafe-mocha-name-board-4.webp') }}" alt="Storefront Signage">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="/name-board-designs-for-shops-bangalore" style="text-decoration: none;">
                            <h3>Storefront Signage</h3>
                            </a>
                            <p>We are named among top-tier sign board manufacturers for shop signage boards in India. Our signage board transforms storefronts into powerful visual displays, attracting customers with eye-catching designs and strong brand visibility.</p>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-3 col-md-6">
                    <div class="manufacturer-card">
                        <div class="card-img-wrapper">
                            <a href="/outdoor-signages">
                            <img src="{{ asset('frontend/Images/outdoor-signage-board.webp') }}" alt="Window Graphics- Outdoor Signage Board">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="/outdoor-signages" style="text-decoration: none;">
                            <h3>Outdoor Signage Board</h3>
                            </a>
                            <p>As top-level signage board experts, we create outdoor signages that turn business spaces into brand landmarks. Our outdoor signage boards are designed for visibility, combining durability and impactful branding to engage customers.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="manufacturer-card">
                        <div class="card-img-wrapper">
                            <a href="/banner-printing">
                            <img src="{{ asset('frontend/Images/large-graphics/bp-13.webp') }}" alt="Retractable Banners">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="/banner-printing" style="text-decoration: none;">
                            <h3>Promotional Banners</h3>
                            </a>
                            <p>Are you looking for compact, portable, and promotional banners? We provide high-quality graphics and durable designs that offer seamless portability without compromising visual impact, brand visibility, or powerful marketing communication.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="manufacturer-card">
                        <div class="card-img-wrapper">
                            <a href="/safety-signages">
                            <img src="{{ asset('frontend/Images/safety-signage.webp') }}" alt="Safety Signage">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="/safety-signages" style="text-decoration: none;">
                            <h3>Safety Signage Board</h3>
                            </a>
                            <p>These signage boards are designed to ensure safety, awareness, and compliance across various environments. Safety signages provide clear, highly visible instructions and warning signs to protect individuals, and improve navigation. </p>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-6 col-md-12">
                    <div class="contact-cta-box text-center">
                        <p class="cta-text">Your signage board creates the first impression of your brand. With 1000+ signage board design options for retail stores, offices, showrooms, and commercial spaces, Brand Signages is setting new benchmarks in signage board design in India. Our signages feature premium materials and vibrant visuals that help your brand stand out.</p>
                        <a href="/sign-board-design-bangalore" class="contact-btn-red">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!--<section class="We-Elevate-Brands-section py-5">
        <div class="container">
        <div class="text-center mb-4">
            <h2 class="We-Elevate-Brands-heading fw-bold">We Elevate Brands with Quality Signage Board <br>That Makes a Lasting Impression  </h2>
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
    </section>-->

             <section id="recent_projects" class="new-recent-works">
        <div class="container mb-5">
            <h2 class="hero-title  mb-6">Our Recent Signage and Branding<br> Design Projects</h2>

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
                <a href="/contact-us" class="contact-btn text-decoration-none d-inline-block">Start Your Project</a>
            </div>


        </div>
    </section>

    
    <section class="new_custom-stats-section">
        <div class="container">
            <div class="row text-center text-white">
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <h2 class="new_custom-stats-number">10+</h2>
                    <p class="new_custom-stats-label">Years In Signage Design</p>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0 position-relative">
                    <div class="new_custom-divider-left d-none d-md-block"></div>
                    <h2 class="new_custom-stats-number">12,000+</h2>
                    <p class="new_custom-stats-label">Deliveries Done</p>
                    <div class="new_custom-divider-right d-none d-md-block"></div>
                </div>
                <div class="col-12 col-md-4">
                    <h2 class="new_custom-stats-number">2,500+</h2>
                    <p class="new_custom-stats-label">Client Base</p>
                </div>
            </div>
        </div>
    </section>
    


    <section class="new_custom-why-choose">
        <div class="container">
            <h2 class="text-center mb-5 new_custom-heading">Why Choose Brand Signages as Your<br> Signage Board Companion?</h2>
            <div class="row justify-content-center g-4">

                <!-- Expertise -->
                <div class="col-md-4 justify-content-between d-flex flex-column">
                    <div class="new_custom-box new_custom-light-box d-flex flex-column justify-content-between ">
                        <p>We are among the best when it comes to <a href="/sign-board-design-bangalore" style="text-decoration: unset;color:#E43D12; font-weight: bold;">signage board design</a> and manufacturing. We craft signage designs that speak
                            volumes and attract audience from a distance.</p>
                        <h4 class="new_custom-title">Expertise</h4>
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
                            <h4 class="new_custom-title text-white">Experience</h4>
                            <p class="text-white">We have 10 years of experience in the signage industry and have worked
                                with major brands across India in various industries and verticals.</p>
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
                        <h4 class="new_custom-title">Excellence</h4>
                        <p>Our excellence lies in 4 core pillars, and we see ourselves as an unmatched competitor in <b>signage
                            board</b> design and manufacturing.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

        <section class="container py-5">
            <div class="new-contacts-section">
                <div class="new-contacts-section-overlay">
                    <p class="new-contacts-section-text">
                        Your brand identity is the silent ambassador of your business. At Brand Signages, we don't just
                        design sign boards, we craft designs that leave a lasting impression. As premier signage makers in
                        Bangalore, we bring innovation, precision, and artistry to every design.
                    </p>
                    <a href="{{route('contact_us')}}" class="new-contacts-section-button" style="text-decoration: none;">Contact Us</a>
                    

                </div>
            </div>
        </section>

    


    <section class="instant-pricing">
            <div class="container">
                <h2>Best Signage Board Makers in Bangalore - 24 Hour Production Line</h2>
                <p>We are the best <b>Signage Board</b> Manufacturers in Bangalore with 24-hours production capability and expertise.</p>
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

    <!-- Marketing Platforms Section (Brand Theme) -->
    <section class="marketing-platforms-section">
        <div class="container">
            <!-- Section Header -->
            <div class="row mb-5">
                <div class="col-lg-10 col-xl-9">
                    <span class="mps-subtitle-badge">
                        <i class="fa-solid fa-bullhorn me-1"></i> Omnichannel Digital Growth
                    </span>
                    <h2 class="mps-main-heading">
                        We Turn Every Platform Into Your <span class="mps-heading-accent">Sales Channel</span>: Google, Meta, TikTok & More
                    </h2>
                    <p class="mps-header-desc">
                        Marketing has evolved, and your customers are already searching on Google, scrolling through Meta, and making business decisions on LinkedIn. As a full-service marketing agency, Brand Signages brings you access to the world's most powerful digital channels under one roof.
                    </p>
                </div>
            </div>

            <!-- Tabs and Content Panels -->
            <div class="row g-4 align-items-stretch">
                <!-- Left Column: Navigation Tabs & Mobile Inline Content -->
                <div class="col-lg-5 col-md-12">
                    <div class="mps-tabs-list" role="tablist" aria-label="Marketing Platforms">
                        <!-- 01: Google Marketing -->
                        <div class="mps-tab-wrapper">
                            <button type="button" class="mps-tab-item active" role="tab" data-target="tab-google" aria-selected="true" aria-controls="tab-google">
                                <div class="mps-tab-left">
                                    <span class="mps-tab-num">01</span>
                                    <span class="mps-tab-divider">—</span>
                                    <span class="mps-tab-title">Google Marketing</span>
                                </div>
                                <div class="mps-tab-icon">
                                    <i class="fa-brands fa-google"></i>
                                </div>
                            </button>
                            <!-- Mobile Inline Content for Tab 1 -->
                            <div class="mps-mobile-content d-lg-none active" id="mobile-tab-google">
                                <div class="mps-mobile-card">
                                    <div class="mps-panel-tag">
                                        <i class="fa-brands fa-google text-danger"></i> Google Partner Agency
                                    </div>
                                    <h3 class="mps-panel-title">Google Marketing</h3>
                                    <p class="mps-panel-desc">
                                        Brand Signages is a Google Partner agency running campaigns across Google Search Ads, Display, YouTube, Shopping and Performance Max. We study your brand and your target audience, then optimize every campaign to get more leads, sales, and maximum ROI.
                                    </p>
                                    <div class="mps-features-grid">
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> High-Intent Search & Performance Max
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> YouTube Video & Display Reach
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Google Merchant & Shopping Feeds
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Conversion & ROI Bid Optimization
                                        </div>
                                    </div>
                                    <div class="mps-action-buttons">
                                        <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                            <span>Get a Free Strategy Proposal</span>
                                            <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </button>
                                        <a href="tel:+919008504821" class="mps-btn-secondary">
                                            <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 02: Facebook Marketing -->
                        <div class="mps-tab-wrapper">
                            <button type="button" class="mps-tab-item" role="tab" data-target="tab-facebook" aria-selected="false" aria-controls="tab-facebook">
                                <div class="mps-tab-left">
                                    <span class="mps-tab-num">02</span>
                                    <span class="mps-tab-divider">—</span>
                                    <span class="mps-tab-title">Facebook Marketing</span>
                                </div>
                                <div class="mps-tab-icon">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </div>
                            </button>
                            <!-- Mobile Inline Content for Tab 2 -->
                            <div class="mps-mobile-content d-lg-none" id="mobile-tab-facebook">
                                <div class="mps-mobile-card">
                                    <div class="mps-panel-tag">
                                        <i class="fa-brands fa-facebook-f text-primary"></i> Meta Business Partner
                                    </div>
                                    <h3 class="mps-panel-title">Facebook Marketing</h3>
                                    <p class="mps-panel-desc">
                                        Tap into billions of daily active users with precision-targeted Facebook ad campaigns. We build custom funnels, lookalike audiences, and high-converting creative ad formats that drive verified leads, direct purchases, and exponential business growth.
                                    </p>
                                    <div class="mps-features-grid">
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Full-Funnel Lead Gen Architecture
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> AI-Powered Lookalike Targeting
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Dynamic Carousel & Video Ads
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Lower CPL & Scalable ROAS
                                        </div>
                                    </div>
                                    <div class="mps-action-buttons">
                                        <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                            <span>Get a Free Strategy Proposal</span>
                                            <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </button>
                                        <a href="tel:+919008504821" class="mps-btn-secondary">
                                            <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 03: Instagram Marketing -->
                        <div class="mps-tab-wrapper">
                            <button type="button" class="mps-tab-item" role="tab" data-target="tab-instagram" aria-selected="false" aria-controls="tab-instagram">
                                <div class="mps-tab-left">
                                    <span class="mps-tab-num">03</span>
                                    <span class="mps-tab-divider">—</span>
                                    <span class="mps-tab-title">Instagram Marketing</span>
                                </div>
                                <div class="mps-tab-icon">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                            </button>
                            <!-- Mobile Inline Content for Tab 3 -->
                            <div class="mps-mobile-content d-lg-none" id="mobile-tab-instagram">
                                <div class="mps-mobile-card">
                                    <div class="mps-panel-tag">
                                        <i class="fa-brands fa-instagram text-danger"></i> Visual Brand Growth
                                    </div>
                                    <h3 class="mps-panel-title">Instagram Marketing</h3>
                                    <p class="mps-panel-desc">
                                        Turn visual storytelling into revenue with impactful Instagram advertising. From Reels ads and Story campaigns to shopping catalog integrations and influencer co-branding, we captivate your ideal demographics and convert engagement into sales.
                                    </p>
                                    <div class="mps-features-grid">
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Viral Reels & Interactive Stories
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Integrated Instagram Shopping
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Creator Collaborations & UGC
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> High Direct-to-Consumer Conversion
                                        </div>
                                    </div>
                                    <div class="mps-action-buttons">
                                        <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                            <span>Get a Free Strategy Proposal</span>
                                            <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </button>
                                        <a href="tel:+919008504821" class="mps-btn-secondary">
                                            <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 04: LinkedIn Marketing -->
                        <div class="mps-tab-wrapper">
                            <button type="button" class="mps-tab-item" role="tab" data-target="tab-linkedin" aria-selected="false" aria-controls="tab-linkedin">
                                <div class="mps-tab-left">
                                    <span class="mps-tab-num">04</span>
                                    <span class="mps-tab-divider">—</span>
                                    <span class="mps-tab-title">LinkedIn Marketing</span>
                                </div>
                                <div class="mps-tab-icon">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </div>
                            </button>
                            <!-- Mobile Inline Content for Tab 4 -->
                            <div class="mps-mobile-content d-lg-none" id="mobile-tab-linkedin">
                                <div class="mps-mobile-card">
                                    <div class="mps-panel-tag">
                                        <i class="fa-brands fa-linkedin-in text-info"></i> B2B Enterprise Growth
                                    </div>
                                    <h3 class="mps-panel-title">LinkedIn Marketing</h3>
                                    <p class="mps-panel-desc">
                                        Reach high-intent decision makers, executives, and enterprise buyers with B2B LinkedIn Marketing. We craft hyper-targeted account-based marketing (ABM), sponsored content, and lead gen forms that consistently generate premium pipeline opportunities.
                                    </p>
                                    <div class="mps-features-grid">
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Account-Based Marketing (ABM)
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> C-Suite & Job Title Precision
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Sponsored InMail & Document Ads
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> High-Ticket B2B Deal Pipeline
                                        </div>
                                    </div>
                                    <div class="mps-action-buttons">
                                        <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                            <span>Get a Free Strategy Proposal</span>
                                            <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </button>
                                        <a href="tel:+919008504821" class="mps-btn-secondary">
                                            <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 05: TikTok Marketing -->
                        <div class="mps-tab-wrapper">
                            <button type="button" class="mps-tab-item" role="tab" data-target="tab-tiktok" aria-selected="false" aria-controls="tab-tiktok">
                                <div class="mps-tab-left">
                                    <span class="mps-tab-num">05</span>
                                    <span class="mps-tab-divider">—</span>
                                    <span class="mps-tab-title">TikTok Marketing</span>
                                </div>
                                <div class="mps-tab-icon">
                                    <i class="fa-brands fa-tiktok"></i>
                                </div>
                            </button>
                            <!-- Mobile Inline Content for Tab 5 -->
                            <div class="mps-mobile-content d-lg-none" id="mobile-tab-tiktok">
                                <div class="mps-mobile-card">
                                    <div class="mps-panel-tag">
                                        <i class="fa-brands fa-tiktok text-dark"></i> Viral Video Scale
                                    </div>
                                    <h3 class="mps-panel-title">TikTok Marketing</h3>
                                    <p class="mps-panel-desc">
                                        Scale fast with viral-ready short-form video ads on TikTok. We leverage trend-jacking, creator collaborations, and Spark Ads to connect with younger, highly engaged consumers and turn views into immediate cart checkouts.
                                    </p>
                                    <div class="mps-features-grid">
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Spark Ads & In-Feed Placements
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Trend-Driven Video Production
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Gen-Z & Millennial Audience Reach
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Rapid Direct-Response Conversions
                                        </div>
                                    </div>
                                    <div class="mps-action-buttons">
                                        <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                            <span>Get a Free Strategy Proposal</span>
                                            <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </button>
                                        <a href="tel:+919008504821" class="mps-btn-secondary">
                                            <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 06: Amazon and Noon Ads -->
                        <div class="mps-tab-wrapper">
                            <button type="button" class="mps-tab-item" role="tab" data-target="tab-amazon" aria-selected="false" aria-controls="tab-amazon">
                                <div class="mps-tab-left">
                                    <span class="mps-tab-num">06</span>
                                    <span class="mps-tab-divider">—</span>
                                    <span class="mps-tab-title">Amazon and Noon Ads</span>
                                </div>
                                <div class="mps-tab-icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </button>
                            <!-- Mobile Inline Content for Tab 6 -->
                            <div class="mps-mobile-content d-lg-none" id="mobile-tab-amazon">
                                <div class="mps-mobile-card">
                                    <div class="mps-panel-tag">
                                        <i class="fa-solid fa-cart-shopping text-warning"></i> Marketplace Domination
                                    </div>
                                    <h3 class="mps-panel-title">Amazon and Noon Ads</h3>
                                    <p class="mps-panel-desc">
                                        Dominate e-commerce marketplaces with profit-driven Amazon and Noon advertising. We optimize sponsored products, sponsored brands, storefronts, and buy-box bidding strategies to accelerate your product rankings and multiply seller revenue.
                                    </p>
                                    <div class="mps-features-grid">
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Sponsored Products & Brands
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Buy-Box & Keyword Bid Tuning
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> High-Converting Brand Storefronts
                                        </div>
                                        <div class="mps-feature-item">
                                            <i class="fa-solid fa-circle-check"></i> Lower TACoS & High Sales Velocity
                                        </div>
                                    </div>
                                    <div class="mps-action-buttons">
                                        <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                            <span>Get a Free Strategy Proposal</span>
                                            <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </button>
                                        <a href="tel:+919008504821" class="mps-btn-secondary">
                                            <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Detail Panels (Desktop Only) -->
                <div class="col-lg-7 col-md-12 d-none d-lg-block">
                    <div class="mps-content-card">
                        <!-- Panel 1: Google Marketing -->
                        <div class="mps-panel active" id="tab-google" role="tabpanel">
                            <div class="mps-panel-tag">
                                <i class="fa-brands fa-google text-danger"></i> Google Partner Agency
                            </div>
                            <h3 class="mps-panel-title">Google Marketing</h3>
                            <p class="mps-panel-desc">
                                Brand Signages is a Google Partner agency running campaigns across Google Search Ads, Display, YouTube, Shopping and Performance Max. We study your brand and your target audience, then optimize every campaign to get more leads, sales, and maximum ROI.
                            </p>
                            <div class="mps-features-grid">
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> High-Intent Search & Performance Max
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> YouTube Video & Display Reach
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Google Merchant & Shopping Feeds
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Conversion & ROI Bid Optimization
                                </div>
                            </div>
                            <div class="mps-action-buttons">
                                <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <span>Get a Free Strategy Proposal</span>
                                    <i class="fa-solid fa-arrow-right ms-2"></i>
                                </button>
                                <a href="tel:+919008504821" class="mps-btn-secondary">
                                    <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                </a>
                            </div>
                        </div>

                        <!-- Panel 2: Facebook Marketing -->
                        <div class="mps-panel" id="tab-facebook" role="tabpanel">
                            <div class="mps-panel-tag">
                                <i class="fa-brands fa-facebook-f text-primary"></i> Meta Business Partner
                            </div>
                            <h3 class="mps-panel-title">Facebook Marketing</h3>
                            <p class="mps-panel-desc">
                                Tap into billions of daily active users with precision-targeted Facebook ad campaigns. We build custom funnels, lookalike audiences, and high-converting creative ad formats that drive verified leads, direct purchases, and exponential business growth.
                            </p>
                            <div class="mps-features-grid">
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Full-Funnel Lead Gen Architecture
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> AI-Powered Lookalike Targeting
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Dynamic Carousel & Video Ads
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Lower CPL & Scalable ROAS
                                </div>
                            </div>
                            <div class="mps-action-buttons">
                                <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <span>Get a Free Strategy Proposal</span>
                                    <i class="fa-solid fa-arrow-right ms-2"></i>
                                </button>
                                <a href="tel:+919008504821" class="mps-btn-secondary">
                                    <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                </a>
                            </div>
                        </div>

                        <!-- Panel 3: Instagram Marketing -->
                        <div class="mps-panel" id="tab-instagram" role="tabpanel">
                            <div class="mps-panel-tag">
                                <i class="fa-brands fa-instagram text-danger"></i> Visual Brand Growth
                            </div>
                            <h3 class="mps-panel-title">Instagram Marketing</h3>
                            <p class="mps-panel-desc">
                                Turn visual storytelling into revenue with impactful Instagram advertising. From Reels ads and Story campaigns to shopping catalog integrations and influencer co-branding, we captivate your ideal demographics and convert engagement into sales.
                            </p>
                            <div class="mps-features-grid">
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Viral Reels & Interactive Stories
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Integrated Instagram Shopping
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Creator Collaborations & UGC
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> High Direct-to-Consumer Conversion
                                </div>
                            </div>
                            <div class="mps-action-buttons">
                                <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <span>Get a Free Strategy Proposal</span>
                                    <i class="fa-solid fa-arrow-right ms-2"></i>
                                </button>
                                <a href="tel:+919008504821" class="mps-btn-secondary">
                                    <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                </a>
                            </div>
                        </div>

                        <!-- Panel 4: LinkedIn Marketing -->
                        <div class="mps-panel" id="tab-linkedin" role="tabpanel">
                            <div class="mps-panel-tag">
                                <i class="fa-brands fa-linkedin-in text-info"></i> B2B Enterprise Growth
                            </div>
                            <h3 class="mps-panel-title">LinkedIn Marketing</h3>
                            <p class="mps-panel-desc">
                                Reach high-intent decision makers, executives, and enterprise buyers with B2B LinkedIn Marketing. We craft hyper-targeted account-based marketing (ABM), sponsored content, and lead gen forms that consistently generate premium pipeline opportunities.
                            </p>
                            <div class="mps-features-grid">
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Account-Based Marketing (ABM)
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> C-Suite & Job Title Precision
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Sponsored InMail & Document Ads
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> High-Ticket B2B Deal Pipeline
                                </div>
                            </div>
                            <div class="mps-action-buttons">
                                <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <span>Get a Free Strategy Proposal</span>
                                    <i class="fa-solid fa-arrow-right ms-2"></i>
                                </button>
                                <a href="tel:+919008504821" class="mps-btn-secondary">
                                    <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                </a>
                            </div>
                        </div>

                        <!-- Panel 5: TikTok Marketing -->
                        <div class="mps-panel" id="tab-tiktok" role="tabpanel">
                            <div class="mps-panel-tag">
                                <i class="fa-brands fa-tiktok text-dark"></i> Viral Video Scale
                            </div>
                            <h3 class="mps-panel-title">TikTok Marketing</h3>
                            <p class="mps-panel-desc">
                                Scale fast with viral-ready short-form video ads on TikTok. We leverage trend-jacking, creator collaborations, and Spark Ads to connect with younger, highly engaged consumers and turn views into immediate cart checkouts.
                            </p>
                            <div class="mps-features-grid">
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Spark Ads & In-Feed Placements
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Trend-Driven Video Production
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Gen-Z & Millennial Audience Reach
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Rapid Direct-Response Conversions
                                </div>
                            </div>
                            <div class="mps-action-buttons">
                                <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <span>Get a Free Strategy Proposal</span>
                                    <i class="fa-solid fa-arrow-right ms-2"></i>
                                </button>
                                <a href="tel:+919008504821" class="mps-btn-secondary">
                                    <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                </a>
                            </div>
                        </div>

                        <!-- Panel 6: Amazon and Noon Ads -->
                        <div class="mps-panel" id="tab-amazon" role="tabpanel">
                            <div class="mps-panel-tag">
                                <i class="fa-solid fa-cart-shopping text-warning"></i> Marketplace Domination
                            </div>
                            <h3 class="mps-panel-title">Amazon and Noon Ads</h3>
                            <p class="mps-panel-desc">
                                Dominate e-commerce marketplaces with profit-driven Amazon and Noon advertising. We optimize sponsored products, sponsored brands, storefronts, and buy-box bidding strategies to accelerate your product rankings and multiply seller revenue.
                            </p>
                            <div class="mps-features-grid">
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Sponsored Products & Brands
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Buy-Box & Keyword Bid Tuning
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> High-Converting Brand Storefronts
                                </div>
                                <div class="mps-feature-item">
                                    <i class="fa-solid fa-circle-check"></i> Lower TACoS & High Sales Velocity
                                </div>
                            </div>
                            <div class="mps-action-buttons">
                                <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                                    <span>Get a Free Strategy Proposal</span>
                                    <i class="fa-solid fa-arrow-right ms-2"></i>
                                </button>
                                <a href="tel:+919008504821" class="mps-btn-secondary">
                                    <i class="fa-solid fa-phone me-2"></i> Talk to Specialist
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agency Comparison Section (Brand Theme) -->
    <section class="agency-comparison-section">
        <div class="container">
            <!-- Section Header -->
            <div class="row mb-4">
                <div class="col-lg-10 col-xl-9">
                    <span class="comp-subtitle-badge">
                        <i class="fa-solid fa-scale-balanced me-1"></i> Competitive Benchmark
                    </span>
                    <h2 class="comp-main-heading">
                        Brand Signages vs Other Agencies: <span class="comp-heading-accent">The Real Difference</span>
                    </h2>
                    <p class="comp-header-desc">
                        Compare our dedicated in-house execution, advanced marketing capabilities, and transparent ROI delivery against traditional agency models.
                    </p>
                </div>
            </div>

            <!-- Comparison Table Card -->
            <div class="comp-table-wrapper">
                <div class="comp-table-responsive">
                    <table class="comp-table">
                        <thead>
                            <tr>
                                <th class="th-feature">Feature / Service</th>
                                <th class="th-highlight">
                                    Brand Signages
                                    <span class="badge bg-white text-dark ms-2 fw-bold" style="color: #E43D12 !important; font-size: 11px; padding: 4px 8px; border-radius: 12px; vertical-align: middle;">Leader</span>
                                </th>
                                <th class="th-competitor">Agency 1</th>
                                <th class="th-competitor">Agency 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 1 -->
                            <tr>
                                <td class="td-feature">Dubai & UAE Market Expertise</td>
                                <td class="td-highlight">
                                    <span class="comp-icon check"><i class="fa-solid fa-check"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr>
                                <td class="td-feature">Full-Service Marketing Experience</td>
                                <td class="td-highlight">
                                    <span class="comp-icon check"><i class="fa-solid fa-check"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon check"><i class="fa-solid fa-check"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr>
                                <td class="td-feature">In-house Marketing and Production Team</td>
                                <td class="td-highlight">
                                    <span class="comp-icon check"><i class="fa-solid fa-check"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr>
                                <td class="td-feature">AI-Led Marketing Expertise</td>
                                <td class="td-highlight">
                                    <span class="comp-icon check"><i class="fa-solid fa-check"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr>
                                <td class="td-feature">Cutting-Edge Tech Adoption</td>
                                <td class="td-highlight">
                                    <span class="comp-icon check"><i class="fa-solid fa-check"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                            </tr>

                            <!-- Row 6 -->
                            <tr>
                                <td class="td-feature">Niche Expertise in Every Industry</td>
                                <td class="td-highlight">
                                    <span class="comp-icon check"><i class="fa-solid fa-check"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                            </tr>

                            <!-- Row 7 -->
                            <tr>
                                <td class="td-feature">Cost Efficiency and ROI Delivery</td>
                                <td class="td-highlight">
                                    <span class="comp-icon check"><i class="fa-solid fa-check"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                            </tr>

                            <!-- Row 8 -->
                            <tr>
                                <td class="td-feature">Accurate Conversion Tracking</td>
                                <td class="td-highlight">
                                    <span class="comp-icon check"><i class="fa-solid fa-check"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                                <td class="td-competitor">
                                    <span class="comp-icon cross"><i class="fa-solid fa-xmark"></i></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Bottom CTA Row -->
            <div class="comp-bottom-cta">
                <div class="comp-bottom-cta-text">
                    <h4>Looking for proven marketing that actually moves the needle?</h4>
                    <p>Partner with an agency that prioritizes transparent reporting, speed, and real revenue generation.</p>
                </div>
                <button type="button" class="mps-btn-primary" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                    <span>Work With Brand Signages</span>
                    <i class="fa-solid fa-arrow-right ms-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Premium Social Feed Showcase Section -->
    <section class="premium-social-feed-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side: 3-Column Endless Scrolling Grid of Images -->
                <div class="col-lg-8">
                    <div class="premium-social-grid">
                        <!-- Column 1: Upwards (di-01 to di-04) -->
                        <div class="scroll-column column-up">
                            <div class="scroll-track">
                                <img src="{{ asset('frontend/Images/di-01.webp') }}" alt="Showcase 1" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-02.webp') }}" alt="Showcase 2" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-03.webp') }}" alt="Showcase 3" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-04.webp') }}" alt="Showcase 4" loading="lazy" decoding="async">
                                <!-- Loop repeats for seamless transition -->
                                <img src="{{ asset('frontend/Images/di-01.webp') }}" alt="Showcase 1" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-02.webp') }}" alt="Showcase 2" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-03.webp') }}" alt="Showcase 3" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-04.webp') }}" alt="Showcase 4" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <!-- Column 2: Downwards (di-05 to di-08) -->
                        <div class="scroll-column column-down">
                            <div class="scroll-track">
                                <img src="{{ asset('frontend/Images/di-05.webp') }}" alt="Showcase 5" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-06.webp') }}" alt="Showcase 6" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-07.webp') }}" alt="Showcase 7" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-08.webp') }}" alt="Showcase 8" loading="lazy" decoding="async">
                                <!-- Loop repeats for seamless transition -->
                                <img src="{{ asset('frontend/Images/di-05.webp') }}" alt="Showcase 5" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-06.webp') }}" alt="Showcase 6" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-07.webp') }}" alt="Showcase 7" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-08.webp') }}" alt="Showcase 8" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <!-- Column 3: Upwards (di-09 to di-12) -->
                        <div class="scroll-column column-up">
                            <div class="scroll-track">
                                <img src="{{ asset('frontend/Images/di-09.webp') }}" alt="Showcase 9" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-10.webp') }}" alt="Showcase 10" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-11.webp') }}" alt="Showcase 11" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-12.webp') }}" alt="Showcase 12" loading="lazy" decoding="async">
                                <!-- Loop repeats for seamless transition -->
                                <img src="{{ asset('frontend/Images/di-09.webp') }}" alt="Showcase 9" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-10.webp') }}" alt="Showcase 10" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-11.webp') }}" alt="Showcase 11" loading="lazy" decoding="async">
                                <img src="{{ asset('frontend/Images/di-12.webp') }}" alt="Showcase 12" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Brand Story Join Community -->
                <div class="col-lg-4">
                    <div class="premium-social-brand-wrap">
                        <h2 class="premium-social-brand-title">BRAND SIGNAGES</h2>
                        <p class="premium-social-join-text">#1 Sign Board Manufacturer in Bangalore</p>
                        <div class="premium-social-icons-row">
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/brandsignages/" target="_blank"
                                class="premium-social-icon-link" aria-label="Instagram">
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z" />
                                </svg>
                            </a>
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/BrandSignagesIndia/" target="_blank"
                                class="premium-social-icon-link" aria-label="Facebook">
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                </svg>
                            </a>
                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/company/brandsignages/" target="_blank"
                                class="premium-social-icon-link" aria-label="LinkedIn">
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <!-- YouTube -->
                            <a href="https://www.youtube.com/@BrandSignages" target="_blank"
                                class="premium-social-icon-link" aria-label="YouTube">
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.108C19.53 3.5 12 3.5 12 3.5s-7.53 0-9.388.555A3.002 3.002 0 0 0 .502 6.163C0 8.07 0 12 0 12s0 3.93.502 5.837a3.002 3.002 0 0 0 2.11 2.108C4.47 20.5 12 20.5 12 20.5s7.53 0 9.388-.555a3.002 3.002 0 0 0 2.11-2.108C24 15.93 24 12 24 12s0-3.93-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                            <!-- Pinterest -->
                            <a href="https://in.pinterest.com/brandsignages/" target="_blank"
                                class="premium-social-icon-link" aria-label="Pinterest">
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M12 0C5.373 0 0 5.373 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 0 1 .083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12 0-6.627-5.373-12-12-12z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Real Estate Digital Marketing: Where You Should Invest Section -->
    <section class="real-estate-investment-section">
        <div class="container">
            <!-- Section Header -->
            <div class="row mb-5">
                <div class="col-lg-10 col-xl-9">
                    <span class="rei-subtitle-badge">
                        <i class="fa-solid fa-chart-line me-1"></i> Strategic Growth Channels
                    </span>
                    <h2 class="rei-main-heading">
                        Real Estate Digital Marketing: <span class="rei-heading-accent">Where You Should Invest</span>
                    </h2>
                    <p class="rei-header-desc">
                        Maximize your buyer pipeline, property visibility, and high-value deal velocity with proven marketing solutions built specifically for property developers and real estate businesses.
                    </p>
                </div>
            </div>

            <!-- Two-Column Accordion Grid (7 + 7) -->
            <div class="row g-4">
                <!-- Left Column (Items 1 to 7) -->
                <div class="col-lg-6 col-md-12">
                    <div class="rei-accordion-list">
                        <!-- Item 1: Local SEO and Google Business Profile -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Local SEO and Google Business Profile</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Dominate location-based searches for properties and new developments. We optimize local citations, Google Maps rankings, geo-targeted keywords, and high-intent local queries so qualified property seekers find your projects first.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2: Virtual Tours and 3D Walkthroughs -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Virtual Tours and 3D Walkthroughs</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Engage remote and international buyers with immersive Matterport and 3D virtual walkthroughs. Increase viewing duration and pre-qualify serious buyers before they even step foot on-site.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3: PPC and Google Ads for Listings -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">PPC and Google Ads for Listings</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Capture active buyers searching for luxury homes, commercial spaces, and pre-launch developments. Target exact neighborhoods, price points, and buyer intent with precision Google Search & Display ad campaigns.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4: Social Media Marketing and Video -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Social Media Marketing and Video</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Showcase architecture, amenities, and lifestyle visuals through engaging Instagram Reels, YouTube video tours, and Meta ad funnels that build trust and drive high-volume inquiries.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5: CRM and Lead Nurturing Automation -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">CRM and Lead Nurturing Automation</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Never let a property lead slip away. Set up automated CRM pipelines with instant WhatsApp notifications, SMS triggers, and intelligent sales routing that connects agents to hot buyers within minutes.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 6: Chatbots and AI Lead Qualification -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Chatbots and AI Lead Qualification</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Deploy 24/7 intelligent AI chatbots on your landing pages to instantly qualify buyer budgets, move-in timelines, and financing requirements before automatically scheduling site visits.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 7: Email Marketing and Drip Campaigns -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Email Marketing and Drip Campaigns</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Send personalized property brochures, construction updates, and investment yield analyses directly to investor inboxes with highly targeted automated drip sequences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Items 8 to 14) -->
                <div class="col-lg-6 col-md-12">
                    <div class="rei-accordion-list">
                        <!-- Item 8: Content Marketing and Blogging -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Content Marketing and Blogging</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Build authority and organic traffic with comprehensive neighborhood guides, property investment analyses, and market forecasts that educate and attract high-net-worth investors.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 9: Reputation Management and Reviews -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Reputation Management and Reviews</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Establish rock-solid trust with proactive review generation, developer brand monitoring, and client video testimonials that give prospective buyers absolute confidence.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 10: Retargeting and Programmatic Ads -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Retargeting and Programmatic Ads</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Keep your developments top-of-mind. Re-engage past website visitors across premium publications and news portals with tailored floor plans, discount offers, and payment plan updates.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 11: Drone Photography and Aerial Content -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Drone Photography and Aerial Content</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Highlight master developments, connectivity, green landscapes, and surrounding infrastructure with cinematic 4K drone cinematography and panoramic aerial views.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 12: Voice Search Optimization -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Voice Search Optimization</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Optimize your project pages and FAQ content for natural language voice queries on Google Assistant, Alexa, and Siri to capture early conversational inquiries.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 13: Marketing Analytics and ROI Tracking -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Marketing Analytics and ROI Tracking</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Measure full-funnel performance from ad impressions to finalized agreements. Track Cost Per Lead (CPL), Cost Per Site Visit (CPSV), and marketing ROAS with transparent real-time dashboards.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 14: Mobile-First Property Search -->
                        <div class="rei-accordion-item">
                            <button type="button" class="rei-accordion-header" aria-expanded="false">
                                <div class="rei-header-left">
                                    <span class="rei-badge-chevron">»</span>
                                    <span class="rei-item-title">Mobile-First Property Search</span>
                                </div>
                                <span class="rei-toggle-icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="rei-accordion-body">
                                <div class="rei-body-content">
                                    <p>Deliver blazing-fast mobile experiences with intuitive touch filters, mobile floor plan viewers, and 1-tap WhatsApp inquiry buttons designed for on-the-go property seekers.</p>
                                </div>
                            </div>
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

<section class="other-cities-section mt-5">
    <div class="container">
        <h2 class="my-5">Sign Board in Other Cities</h2>
        <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
            <div class="other-cities-card">
                <a href="https://brandsignages.com/leading-signage-company-in-mumbai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Sign Boards in Mumbai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Mumbai</p>
                </div>
            </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/signage-in-chennai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Sign Boards in Chennai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Chennai</p>
                </div>
                </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="Sign Boards in Bangalore">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Bangalore</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
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
                    <a href="{{ route('blogs') }}" class="contact-btn text-decoration-none d-inline-block">See All Blogs</a>
                </div>
            </div>
        </div>
</section>
<section class="faq-section">
        <div class="container">
            <h2 class="faq-title">Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question">
                    What is Signage Board?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Signage board is a visual display board used to communicate information, promote a brand, identify
                         a business, or guide people in a particular location. Signage boards are commonly used for shop 
                         name boards, office branding, advertising, directional guidance, safety instructions, and promotional 
                         displays. They can be made using materials like acrylic, metal, LED, vinyl, or digital screens depending
                          on the purpose and environment. From storefront sign boards and LED sign boards to safety and wayfinding
                           signs, signage boards play a major role in improving visibility, brand recognition, and customer 
                           engagement.</p>  
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is the difference between a sign board and signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Signage and sign boards are interchangeable terms as both refer to visual displays. 
                        While "sign board" usually points to individual display units, and "signage" refers 
                        to the broader category of all types of signs, they ultimately serve the same purpose: 
                        effective visual communication.</p>
                    <p>At Brand Signages, we specialize in both sign board and signage manufacturing. We are 
                        exclusive <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/"><strong>sign board manufacturers</strong></a> providing complete signage solutions. Whether you need 
                        a single shop board, indoor branding sign boards, or outdoor sign boards, we design the best 
                        signage in the city, tailored to specific business needs.  </p>    
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do I choose a sign board for my business?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Choosing a sign board or <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/name-board-designs-for-shops-bangalore"><strong>shop board design</strong></a> for your business depends on many factors, including your business type, location, and branding
                        goals. Here's how to make the right choice:</p>
                    <ul>
                        <li>Purpose – Determine whether the signage is for branding, wayfinding, promotions, or safety.</li>
                        <li>Location & Visibility – Choose signage that stands out in your environment, whether indoor or
                            outdoor.</li>
                        <li>Right Material – Opt for durable materials based on weather conditions and usage.</li>
                        <li>Design & Readability – Ensure the signage has clear fonts, high-contrast colors, and an
                            eye-catching design.</li>
                        <li>The Right Lighting – Consider LED or illuminated signs for better visibility, especially at
                            night.</li>
                        <li>Hire Professionals – Collaborate with expert sign board manufacturers to get a high-quality,
                            customized solution.</li>
                    </ul>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    Is digital signage expensive?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>The cost of digital signage depends on various factors like screen size, technology, content
                        management software, and installation.
                        While the investment can be much higher than traditional signage, digital signage offers long-term
                        benefits such as dynamic content
                        updates, scalability, and better engagement.</p>
                    <ul>
                        <li>Basic Digital Signage (Small Screens): Starts from ₹15,000 to ₹50,000.</li>
                        <li>Large LED Walls & Interactive Displays: Can cost ₹1,00,000 to ₹10,00,000+ </li>
                        <li>Ongoing Costs: Ranging from ₹5,000 to ₹50,000 per month based on requirements</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What are the types of signage products do you offer?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Brand Signages is exclusively known as a leading <a href="https://brandsignages.com/" style="text-decoration: unset;color:#E43D12">digital signage manufacturer in Bangalore</a>. 
                    We also have a high-level portfolio for designing all other types of signage and sign boards. Our product range includes:</p>
                    <ul>
                        <li><a href="https://brandsignages.com/neon-signages"
                                style="text-decoration: unset;color:#E43D12">Glow signboard</a></li>
                        <li><a href="https://brandsignages.com/arcylic-signages"
                                style="text-decoration: unset;color:#E43D12">Acrylic LED signboards</a></li>
                        <li><a href="https://brandsignages.com/digital-signages"
                                style="text-decoration: unset;color:#E43D12">Digital signages</a></li>
                        <li><a href="https://brandsignages.com/metal-signages"
                                style="text-decoration: unset;color:#E43D12">Steel letter</a></li>
                        <li><a href="https://brandsignages.com/fire-safety-signages"
                                style="text-decoration: unset;color:#E43D12">Fire safety signs</a></li>
                        <li><a href="https://brandsignages.com/led-acrylic-3d-glow-sign-board"
                                style="text-decoration: unset;color:#E43D12">LED sign board</a></li>
                        <li><a href="https://brandsignages.com/neon-signages"
                                style="text-decoration: unset;color:#E43D12">Neon sign board</a></li>
                        <li><a href="https://brandsignages.com/outdoor-signages"
                                style="text-decoration: unset;color:#E43D12">Outdoor signs</a></li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How can I customize a signage board to fit my specific requirements?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our team would meet for the initial consultation and begin working on the custom design mockups.
                        Depending on your choice, we will select the material and dimensions, and add text and graphics
                        to the signboard. We will send the final design for approval and also work on the installation.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is the process for ordering and purchasing signage boards directly?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our signage ordering process is designed to be straightforward and customer-friendly:</p>
                    <ul>
                        <li>Schedule a free consultation (online or on-site)</li>
                        <li>Discuss your specific signage needs</li>
                        <li>Receive initial design concepts</li>
                        <li>Digital mockups and proof review</li>
                        <li>Unlimited design iterations until you are satisfied</li>
                        <li>Transparent pricing breakdown</li>
                        <li>Delivery and installation</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are your sign boards suitable for both indoor and outdoor use?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our sign boards are designed with versatility in mind:</p>
                    <ul>
                        <li>Outdoor Signs:</li>
                        <ul>
                            <li>Weather-resistant materials</li>
                            <li>UV-protected coatings</li>
                            <li>Durable against harsh environmental conditions</li>
                        </ul>
                        <li>Indoor Signs:</li>
                        <ul>
                            <li>Sleek, polished finishes</li>
                            <li>Adaptable to various interior settings</li>
                            <li>Multiple mounting options</li>
                            <li>Different lighting configurations</li>
                            <li>Premium aesthetic materials</li>
                        </ul>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do you offer any warranties or guarantees on your signage products?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our comprehensive warranty ensures your confidence:</p>
                    <ul>
                        <li>Material and installation Guarantee</li>
                        <li>Color and finish durability protection</li>
                        <li>Performance assurance against environmental damage</li>
                        <li>Quick claim resolution process</li>
                        <li>Transparent terms and conditions</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How can I get a cost-effective solution for bulk signage orders?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We offer volume-based pricing discounts, custom package negotiations, and standardized design
                        options. We prioritize providing top-notch customer service in terms of flexible payment terms
                        and complimentary consultation. It is our goal to not compromise on quality and extend a
                        competitive pricing guarantee.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can you install signage boards at my location in Bangalore?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we provide signage board installation services in Bangalore and all over India. When you
                        order from us, you can expect:</p>
                    <ul>
                        <li>High-Quality Signage: We use durable, premium materials</li>
                        <li>Customized Designs: We understand your brand's unique needs</li>
                        <li>Timely Installation: We guarantee prompt and efficient installation</li>
                        <li>Expert Team: We handle the entire process, from design to manufacturing</li>
                        <li>Nationwide Reach: We provide coverage for signage installation services</li>
                        <li>Affordable Pricing: Competitive rates without compromising on quality</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can I request a sample before placing a bulk order for signage boards?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, you can definitely order a single piece as a sample before placing a bulk order.
                        This allows you to evaluate the quality, design, and material of the signage boards
                        firsthand. We want you to be completely satisfied with your choice, so feel free to
                        request a sample to ensure it meets your expectations before making a larger
                        commitment.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to manufacture and deliver a signage board?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>It takes almost 7-10 business days to deliver signage. After you
                        finalize the design and material, we'll proceed with manufacturing
                        and delivery of the signages. We ensure a hassle-free experience during the
                        entire process. </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can you create signage for events and exhibitions in Bangalore?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we also create signage for events and exhibitions in Bangalore. Whether it's
                        directional signage, banners, stands, or branded displays, we offer a range of options.
                        We are a leading signage manufacturer in Bangalore & India to help you with any type of
                        custom signage solutions. </p>
                </div>
            </div>
        </div>
</section>




@endsection