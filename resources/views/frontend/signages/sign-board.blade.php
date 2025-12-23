@extends('frontend.layout.appLayout')
@section('content')
    <section class="hero-banner" style="background-image: url('{{ asset('/frontend/Images/home/home-banner-bg.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Unmatched Sign Board Design<br> Solutions for Every Industry</h1>
                    <p>Brand Signages is a trusted B2B partner and a premium signage board manufacturer<br>
                        in Bangalore, India.
                    </p>
                    <a href="https://brandsignages.com/contact-us">
                        <button class="contact-btn">Know More</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="row g-4 d-flex flex-wrap justify-content-center">

            <div class="text-center ">
                <h2 class="display-4 mb-3 why-text-heading">Types of Metal Signages We Make</h2>
                <p class="card-text testimonial-card-text">At Brand Signages, we are the best metal and steel signage boards
                    manufacturer in India.
                    <br> Our premium quality and durable signage solutions create a professional, impactful statement for
                    your brand. Our metal signboards
                    <br>include options such as:
                </p>
            </div>

            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/metal-signage8.webp') }}" alt="Reverse Glow Signs"
                                class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Reverse Glow Signs</h5>
                                <p class="text-content">Reverse glow signs enhance the sign's visibility in low-light
                                    conditions but also add a modern touch to any environment. Ideal for businesses
                                    looking to make a statement at night, reverse glow signs are ideal for storefronts,
                                    restaurants, and event venues, ensuring your brand stands out after dark.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/metal-signage9.webp') }}" alt="Metal Backlit"
                                class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Metal Backlit</h5>
                                <p class="text-content">Metal backlit signs feature a light source behind the face,
                                    highlighting the graphics and text, making them pop. These are particularly
                                    effective in high-traffic areas and can be customized in various shapes and sizes.
                                    Whether used for outdoor advertising, these signs create an inviting atmosphere that
                                    draws customers in.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/metal-signage10.webp') }}" alt="Reflective Metal Signs"
                                class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Reflective Metal Signs</h5>
                                <p class="text-content">Reflective metal signage ensures high visibility even in dim
                                    lighting or nighttime conditions. These signs are essential for safety applications,
                                    such as traffic signs or emergency exit indicators, where visibility is critical.
                                    They can also be used creatively in promotional settings to enhance visibility
                                    during events or exhibitions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/metal-signage11.webp') }}"
                                alt="Premium Metal Letters and Signage" class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Premium Metal Letters and Signage</h5>
                                <p class="text-content">Our premium steel signage board can provide a sophisticated and
                                    upscale appearance. You can show the message with letters in various fonts, sizes,
                                    and finishes. Whether mounted on walls or used as standalones, they add a touch of
                                    elegance to your branding.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/metal-signage12.webp') }}" alt="Stainless Steel Signs"
                                class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Stainless Steel Signs</h5>
                                <p class="text-content">Stainless steel sign boards are best for internal and external
                                    usage, as they offer extensive versatility. Sign boards with a glossy finish can be
                                    used indoors, but large boards are best for outdoor visibility. Some sectors that
                                    might benefit like corporations, showrooms, buildings, hotels, hospitals, schools,
                                    and colleges.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/metal-signage13.webp') }}" alt="Aluminium Sign Boards"
                                class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Aluminium Sign Boards</h5>
                                <p class="text-content">Aluminum sign boards are resistant to rust and corrosion and can
                                    be easily customized with graphics, and logos. These are mainly used for directional
                                    signs to promotional displays and can provide versatility and longevity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="signage-journey">
        <h2 class="display-4 why-text-heading text-white my-4">Your Signage Journey, Perfected from Start to Finish
        </h2>
        <p class="fs-20 text-white text-center pb-4">
            At ARC India we bring you the best opportunities for your business, handle every step with care and bring you
            stunning results in terms of custom signages.
        </p>

        <div class="journey-steps">

            <!-- Step 1 -->
            <div class="step-card ">
                <div class="step-1">
                    <span class="icon">📍</span>
                    <h3>Site Survey & Permitting</h3>
                </div>
                <div class="step-2">
                    <span class="icon">�</span>
                    <h3>Site Survey & Permitting</h3>
                    <p>Site checks and permits ensure project readiness and compliance with all set requirements.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-card">
                <div class="step-1">
                    <span class="icon">🎨</span>
                    <h3>Design Finalization</h3>
                </div>
                <div class="step-2">
                    <span class="icon">🎨</span>
                    <h3>Design Finalization</h3>
                    <p>Translating your ideas into precision-perfect technical designs for production.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-card">
                <div class="step-1">
                    <span class="icon">�</span>
                    <h3>Permissions & Approvals</h3>
                </div>
                <div class="step-2">
                    <span class="icon">�</span>
                    <h3>Permissions & Approvals</h3>
                    <p>Managing all necessary regulatory approvals and legal formalities for you.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="step-card">
                <div class="step-1">
                    <span class="icon">⚙️</span>
                    <h3>Fabrication & Installation</h3>
                </div>
                <div class="step-2">
                    <span class="icon">⚙️</span>
                    <h3>Fabrication & Installation</h3>
                    <p>Custom fabrication and installation of the sign to ensure it is ready for use.</p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="step-card">
                <div class="step-1">
                    <span class="icon">⭐</span>
                    <h3>Final Check & Cleanup</h3>
                </div>
                <div class="step-2">
                    <span class="icon">⭐</span>
                    <h3>Final Check & Cleanup</h3>
                    <p>Final check and cleanup of the sign to ensure it is ready for use.</p>
                </div>
            </div>

        </div>
    </section>
    <section class="new-recent-works">
        <div class="container">
            <h2 class="hero-title  mb-6">Our Recent LED Sign Board <br>Installation Projects</h2>
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
    <section>
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/indoor-signage7.webp') }}" alt="Indoor Signs"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="brand-title">Directional Indoor Signages</h2>
                    <p class="brand-description">
                        We design custom directional and navigational indoor signages for offices, retail stores, buildings,
                        and hospitals. </p>
                    <p class="brand-description">
                        Whether it’s room number, floor directories, or path arrows, our indoor signages are designed to be
                        visually appealing. They are made with durable materials with a sleek design to be visible in
                        high-traffic areas.</p>
                    <h2 class="brand-title">Branding Interior Signages</h2>
                    <p class="brand-description">
                        Indoor signages like acrylic boards, neon lights, and digital displays are also used as a branding
                        tool in various industries. Whether it is a company logo, reception, or conference room, we design
                        custom signages to match your brand’s vision.
                    </p>
                    <p class="brand-description">
                        We strategically choose color, fonts, and typography to reinforce company ethos and brand image.
                        Whether it is metal base signage or acrylic signage, our custom indoor office signages will resonate
                        with brand value and identity.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="we-deliver mb-0 pb-0 mb-md-5" style="background: unset">
        <div class="container">
            <h2 class="brand-title text-center mb-5 text-black">Why Choose Us for Digital Signages</h2>

            <div class="row">
                <div class="col-md-5 col-12">
                    <img src="https://www.e-arc.in/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2025/04/Custom-Sign-Board-1.png.webp"
                        alt="" class="img-fluid w-100 h-100 rounded-3" />
                </div>
                <div class="col-md-7 col-12">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/In-House-Experts.png') }}" alt="In-House Experts"
                                    class="img-fluid">
                                <h3>In-House Manufacturing</h3>
                                <p class="text-black">
                                    With full in-house manufacturing, every digital signage system is produced, tested, and
                                    quality-checked by our expert team, ensuring unmatched durability, finish, and long-term
                                    performance.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/Industry-Grade-Products.png') }}"
                                    alt="Industry Grade Products" class="img-fluid">
                                <h3>Advanced Signage Platform</h3>
                                <p class="text-black">Our advanced cloud-based software lets you publish, schedule, and
                                    monitor content in real
                                    time, ensuring seamless display management across multiple locations without downtime or
                                    technical frustration.
                                </p>
                            </div>
                        </div>
                        <hr style="color: gray; margin: 0 32px; 
    width: 90%;">
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/10-Years-of-Expertise.png') }}"
                                    alt="10 Years of Expertise" class="img-fluid">
                                <h3>Expert Technical Team</h3>
                                <p class="text-black">Our trained digital signage engineers provide proactive support,
                                    quick issue resolution,
                                    and reliable maintenance, ensuring your digital signage network stays stable and
                                    responsive.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/Network-and-Customer-Support.png') }}"
                                    alt="Network and Customer Support" class="img-fluid">
                                <h3>Designed for Performance</h3>
                                <p class="text-black">Every screen, kiosk, and signage solution is custom-designed digital
                                    signage to match
                                    your branding, environment, viewing distance, and content goals creating a fully
                                    personalized experience.
                                </p>
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
                <a href="{{ route('contact_us') }}" class="new-contacts-section-button"
                    style="text-decoration: none;">Contact Us</a>


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
    <section>
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">Features of Effective Safety Signs</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/construction-safety-4.webp') }}"
                            alt="Construction Safety Signs" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2>Features of Effective Safety Signs</h2>
                    <p class="brand-description">
                        Clarity and visibility are one of the primary features of construction signage. Usually, these
                        signboards are designed in yellow, red, and green to indicate hazardous, moderately hazardous,
                        emphasize simple, easy-to-understand language and signs.</p>
                    <h4 class="mb-3">Case Study</h4>
                    <a href="#" class="brand-title d-flex justify-content-between w-100 border-bottom pb-2"
                        style="text-decoration: none;">
                        <span>case studies 1</span>
                        <span>↗️</span>
                    </a>
                    <a href="#" class="brand-title d-flex justify-content-between w-100 border-bottom pb-2"
                        style="text-decoration: none;">
                        <span>case studies 1</span>
                        <span>↗️</span>
                    </a>
                    <a href="#" class="brand-title d-flex justify-content-between w-100 border-bottom pb-2"
                        style="text-decoration: none;">
                        <span>case studies 1</span>
                        <span>↗️</span>
                    </a>
                </div>
            </div>
    </section>
    <section>
        <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
            <h2 class="hero-title">Features of Effective Safety Signs</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/construction-safety-4.webp') }}"
                            alt="Construction Safety Signs" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="brand-title">Clarity and Visibility</h2>
                    <p class="brand-description">
                        Clarity and visibility are one of the primary features of construction signage. Usually, these
                        signboards are designed in yellow, red, and green to indicate hazardous, moderately hazardous,
                        and safe zones/ materials. These boards should be appropriately sized to ensure they are visible
                        and legible even from a distance. What else should be included in these signs? We would
                        emphasize simple, easy-to-understand language and signs.</p>
                    <p class="brand-description">
                        We ensure that the signs are written in a high-contrast background to make the message visible
                        in clear print. This ensures minimal confusion among people, workers, and visitors alike. People
                        don’t have to read long texts to understand issues and problems related to working on these
                        sites. Also, these should be put in positions near hazards and similar places. As a
                        manufacturer, we know how to create these signs on construction sites and populate them with
                        personalized messages.</p>

                </div>
            </div>
            <div class="row align-items-center">


                <div class="col-lg-6">
                    <h2 class="brand-title">Clarity and Visibility</h2>
                    <p class="brand-description">
                        Clarity and visibility are one of the primary features of construction signage. Usually, these
                        signboards are designed in yellow, red, and green to indicate hazardous, moderately hazardous,
                        and safe zones/ materials. These boards should be appropriately sized to ensure they are visible
                        and legible even from a distance. What else should be included in these signs? We would
                        emphasize simple, easy-to-understand language and signs.</p>
                    <p class="brand-description">
                        We ensure that the signs are written in a high-contrast background to make the message visible
                        in clear print. This ensures minimal confusion among people, workers, and visitors alike. People
                        don’t have to read long texts to understand issues and problems related to working on these
                        sites. Also, these should be put in positions near hazards and similar places. As a
                        manufacturer, we know how to create these signs on construction sites and populate them with
                        personalized messages.</p>

                </div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{ asset('frontend/Images/construction-safety-4.webp') }}"
                            alt="Construction Safety Signs" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial section ">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Customer Testimonial</h2>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none ">
                <div class="col testimonial-small-div">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text">We’ve been using these safety signs on our
                                construction sites, and they’ve been a game-changer. The materials are durable, even in
                                harsh weather, and the visibility ensures everyone stays informed and safe!</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{ asset('frontend/Images/rajesh-k.webp') }}" alt="Rajesh K"
                                    class="client-img">
                                <div>
                                    <div class="client-name">Rajesh K</div>
                                    <div class="client-role">Project Manager</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col testimonial-small-div">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text">Since we installed these signs, our team has been
                                more mindful of safety protocols. They’re clear, and professional, and help us stay
                                compliant with all regulations</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{ asset('frontend/Images/anish-s.webp') }}" alt="Ashish S"
                                    class="client-img">
                                <div>
                                    <div class="client-name">Ashish S</div>
                                    <div class="client-role">Project Manager</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col testimonial-small-div">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text"> We love the customization options for our
                                site-specific hazards. The vibrant colors and bold lettering grab attention, making our
                                workplace significantly safer</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{ asset('frontend/Images/Michael.webp') }}" alt="Michael"
                                    class="client-img">
                                <div>
                                    <div class="client-name">Michael</div>
                                    <div class="client-role">Construction Manager</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col testimonial-small-div">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text">The pricing is competitive without compromising
                                on quality. These safety signs have lasted through months of heavy construction activity
                                and still look brand new!</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{ asset('frontend/Images/Amit.webp') }}" alt="Amit Pandit"
                                    class="client-img">
                                <div>
                                    <div class="client-name">Amit Pandit</div>
                                    <div class="client-role">Operations Head</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col testimonial-small-div">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text">The safety signage has reduced the number of
                                accidents on our sites. It’s an essential part of our safety measures, and we wouldn’t
                                work without it!</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{ asset('frontend/Images/Sushant.webp') }}" alt="Sushant M"
                                    class="client-img">
                                <div>
                                    <div class="client-name">Sushant M</div>
                                    <div class="client-role">Safety Officer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="testimonialCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">We’ve been using these safety signs
                                            on our construction sites, and they’ve been a game-changer. The materials
                                            are durable, even in harsh weather, and the visibility ensures everyone
                                            stays informed and safe!</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/rajesh-k.webp') }}" alt="Rajesh K"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Rajesh K</div>
                                                <div class="client-role">Project Manager</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">Since we installed these signs, our
                                            team has been more mindful of safety protocols. They’re clear, and
                                            professional, and help us stay compliant with all regulations</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/anish-s.webp') }}" alt="Ashish S"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Ashish S</div>
                                                <div class="client-role">Project Manager</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">We love the customization options for
                                            our site-specific hazards. The vibrant colors and bold lettering grab
                                            attention, making our workplace significantly safer</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/Michael.webp') }}" alt="Michael"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Michael</div>
                                                <div class="client-role">Construction Manager</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">We love the customization options for
                                            our site-specific hazards. The vibrant colors and bold lettering grab
                                            attention, making our workplace significantly safer <br> <br></p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/Michael.webp') }}" alt="Michael"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Michael</div>
                                                <div class="client-role">Construction Manager</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">The pricing is competitive without
                                            compromising on quality. These safety signs have lasted through months of
                                            heavy construction activity and still look brand new!</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/Amit.webp') }}" alt="Amit Pandit"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Amit Pandit</div>
                                                <div class="client-role">Operations Head</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-card card">
                                    <div class="yellow-circle">
                                        <img src="{{ asset('frontend/Images/comment-icon.webp') }}" alt="Comment"
                                            class="comment-img">
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="card-text testimonial-card-text">The safety signage has reduced the
                                            number of accidents on our sites. It’s an essential part of our safety
                                            measures, and we wouldn’t work without it!</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{ asset('frontend/Images/Sushant.webp') }}" alt="Sushant M"
                                                class="client-img">
                                            <div>
                                                <div class="client-name">Sushant M</div>
                                                <div class="client-role">Safety Officer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-carousel-controls">
                    <button id="prevButton" class="testimonial-carousel-control" type="button"
                        data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="nextButton" class="testimonial-carousel-control" type="button"
                        data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <div class="carousel-indicators testimonial-carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
            </div>
        </div>
    </section>



    <section class="faq-section">
        <div class="faq-container">
            <h1 class="faq-title">FAQS</h1>

            <div class="faq-item">
                <button class="faq-question">
                    Why are safety signs important on construction sites?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Safety signs are crucial on construction sites to communicate vital information about hazards,
                        guide safe navigation, and ensure compliance with regulations. Their presence minimizes
                        accidents, enhances worker awareness, and promotes a culture of safety among all personnel.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What are the different types of safety signs used in construction?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Construction sites use various safety signs, including mandatory signs (blue), prohibition signs
                        (red), warning signs (yellow), emergency information signs (green), and fire safety signs (red).
                        Each type communicates essential information to prevent accidents and ensure worker safety.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How can safety signs be customized for specific construction projects?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Construction site signs are made to address safety issues of different or specific sites.
                        However, they can also incorporate branding, corporate identity, and multilingual options. These
                        signs are meant to follow regulatory compliance and offer tailored instructional content.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What regulations govern the use of safety signs on construction sites?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Safety signs in construction are governed by workplace safety and health regulations, issued by
                        concerned authorities. We design, develop, and place this construction signage to comply with
                        safety and hazard regulations, and convey the same. Our team knows these regulations and how to
                        make the best of them.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How often should construction safety signs be inspected or replaced?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We suggest our clients check construction safety signs once a month or two to see if they are
                        visible and relevant to people. Although our signs are high-quality, we encourage them to check
                        for significant changes, like weather exposure, erosion, and fading. Also, you can tell us if
                        you want any changes in the sign boards after the inspection.</p>
                </div>
            </div>

        </div>
    </section>
@endsection
