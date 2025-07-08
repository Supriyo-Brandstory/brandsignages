@extends('frontend.layout.appLayout')
@section('content')
    <section class="hero-banner"
        style="background-image: url('{{ asset('/frontend/Images/home/led-signagesbengalor-banner.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Best LED Sign Board <br>Manufacturer in Bangalore</h1>

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
            <h2 class="hero-title">Illuminate Your Brand in Bangalore <br>with Premium LED Sign Boards</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/home/about-us.webp')}}" alt="Cafe Rosco Signage"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="brand-title">Supirior-quality Electronic Name Boards</h2>
                    <p class="brand-description">
                       Give your business a fresh look and present it in a way that truly connects with your audience. In today’s fast-evolving advertising landscape, we offer a wide range of <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/led-light-signages">cutting-edge LED sign boards</a> designed to elevate your brand and meet your business needs. Our product range includes digital LED signage, glow LED Signs, LED display boards, outdoor LED sign boards, etc. Every signboard is tailored to exhibit your brand's recognition at a lower cost while guaranteeing energy efficiency.
                    </p>
                    <p class="brand-description">
                       Renowned as a <a style="color: #E43D12;text-decoration: none;" href="/">signage manufacturer in Bangalore</a>, we have also evolved as a leading name in LED sign board manufacturing. We have achieved this landmark by providing unmatched customer satisfaction, commitment to quality, and the best-quality product range. At Brand Signages, we push our limits to bring your brand vision to life with stunning signage design solutions.
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="BuiltToLast-section"
        style="background: url('{{ asset('frontend/Images/new/Premium-LED-Sign-bg.png') }}') no-repeat;">

        <div class="BuiltToLast-container">
            <h2 class="BuiltToLast-heading">Premium LED Sign Boards in Bangalore–<br>Crafted to Shine, Built to Last</h2>
            <p class="BuiltToLast-description">
                A display board is often the first thing customers notice about your business. A well-designed digital LED
                signage builds brand awareness and helps increase sales and overall turnover. As a reliable name in LED sign
                board manufacturing in Bangalore, Brand Signages serve customers with the best quality products. We
                specialize in designing custom LED signage boards for outdoor spaces, indoor areas, and office branding.
            </p>
            <div class="BuiltToLast-images">
                <img src="{{asset('frontend/Images/new/cardamom-sign.webp')}}" alt="Cardamom LED Sign"
                    class="BuiltToLast-img">
                <img src="{{asset('frontend/Images/new/congrats-sign.webp')}}" alt="Congrats LED Sign"
                    class="BuiltToLast-img">
                <img src="{{asset('frontend/Images/new/scrolling-led.webp')}}" alt="Scrolling LED Sign"
                    class="BuiltToLast-img">
            </div>
        </div>
    </section>
  <section class="bgrowth-slider-section">
            <div class="bgrowth-header">
                <h2>Our LED Sign Board Product Range</h2>
                
            </div>

            <div class="swiper bgrowth-swiper container">
                <div class="swiper-pagination"></div> <!-- should be inside swiper, before swiper-wrapper -->
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/dutyfree.webp') }}" alt="Acrylic Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Acrylic Signage</h3>
                            <p>
                                Acrylic signage is a preferred choice among industries for its glossy finish and durability. 
                                We design acrylic signage with unmatched durability and precision. 
                            </p>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/steel-sign.webp') }}" alt="Metal Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Metal & Steel Signage</h3>
                            <p>
                                Stainless steel signage is one of the most affordable and durable types of signage. We design stainless steel 
                                signage for organizations with custom sizes and designs.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/led-sign-board.webp') }}" alt="LED Sign Board"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>LED Sign Board</h3>
                            <p>
                                LED sign boards are the most versatile option for modern branding. We are proven experts in LED sign board manufacturing 
                                to help you create the best LED nameboards. 
                            </p>
                        </div>
                    </div>
                    <!-- Slide 1 -->
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/digital-signages.webp') }}" alt="Digital Signages"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Digital Signage</h3>
                            <p>
                                Digital displays are a dynamic and attention-grabbing transformation for retail spaces. We design modern digital signage 
                                and digital displays for every industry.
                            </p>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/neon-sign.webp') }}" alt="Neon Sign Board"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Neon Sign Board</h3>
                            <p>
                               Neon signs are a go-to option for retail and restaurant businesses for all-around visibility. We employ our precious experts to 
                               design the best neon signage designs in the city.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/retail-signages.webp') }}" alt="retail Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Retail Signages</h3>
                            <p>
                               Retail signage is the epitome of beauty and elegance. These creations are bold, energy-efficient, and easy to use and maintain 
                               for long-lasting performance.
                            </p>
                        </div>
                    </div>
                     <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/indoor-signages.webp') }}" alt="Indoor Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Indoor Signages</h3>
                            <p>
                               Indoor signages are mostly used in corporate offices, retail spaces, financial institutions, and medical facilities. Interior signages communicate 
                               brand personality and transforms interior. 
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/outdoor-signages.webp') }}" alt="Outdoor Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Outdoor Signages</h3>
                            <p>
                               Outdoor signages create immersive visual experiences, balancing visibility with powerful messaging. These signage acts as a strategic marketing tools 
                               that truly engage audiences. 
                            </p>
                        </div>
                    </div>

                    <!-- Add more slides if needed -->
                </div>

            </div>
        </section>
          <section class="Maximum-Impact-section">
        <div class="container">
            <div class="swiper Maximum-Impact-swiper">

                <h2>LED Sign Boards That Create <br>Maximum Impact </h2>
                <p>Trusted by clients across Bangalore and India, we’ve worked on 100+ LED sign board projects with
                    excellence.
                    We are a proven leader in the B2B led sign board manufacturing with 10+ years of excellence. We design
                    modern tech-savvy LED sign boards that consume 7x less energy, backed with premium quality materials and
                    range of options.</p>
                <div class="swiper-wrapper">
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-4.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-3.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-1.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>

                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-4.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-3.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-1.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-5.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>
                    <div class="swiper-slide Maximum-Impact-swiper-slide">
                        <img src="{{ asset('frontend/Images/home/led-sign-2.webp') }}" alt="LED Sign Board designed by Brand Signages">
                    </div>



                </div>
            </div>
        </div>
    </section>
     <div class="inquery-from-section">
        <x-coustom-inquiry-form />
        </div>
                <section class="we-deliver" style="background:url('{{asset('frontend/Images/new/What-Makes-LED-Sign-Boards.webp')}}')  no-repeat; background-size: cover; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <h2>What Makes LED Sign Boards a Top Choice for Businesses</h2>
                    </div>
                    <div class="col-md-8 col-12">
                        <p>As a leading LED signage manufacturer, we ensure our signboards meet industry standards with innovative designs, energy efficiency, and durability, making them an ideal choice for businesses looking for high-impact and long-lasting branding solutions.</p>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                        class="img-fluid">
                                    <h3>Eye-Catching Designs</h3>
                                    <p>LED signage boards captivate attention with vibrant, high-resolution displays. These modern signages enhance brand visibility and leave a lasting impression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Timely Delive"
                                        class="img-fluid">
                                    <h3>Powerful Tool for Advertising</h3>
                                    <p>Bangalore's vibrant commercial landscape, with its tech hubs and bustling streets, makes LED signboards a perfect choice for businesses seeking high visibility. These illuminated displays enhance brand presence, attracting customers even in the city's dynamic environment.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Direct Purchase"
                                        class="img-fluid">
                                    <h3>Long-Lasting Durability </h3>
                                    <p>These signages are designed with energy-efficient technology to ensure low electricity consumption and extended lifespan.
                                    </p>
                                </div>
                            </div>
                             <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Direct Purchase"
                                        class="img-fluid">
                                    <h3>Installation & Maintenance </h3>
                                    <p> Other than traditional sign boards, it does not require upkeep. LED signage boards are lightweight and easy-to-install solutions.
                                    </p>
                                </div>
                            </div>
                            

                        </div>
        </section>
          <!-- testimonial Feedback Section -->
        <section class="new_testimonial-swiper-section">
            <div class="container">
                <h2 class="text-center mb-md-5 mb-3">The Impact We've Delivered for Clients</h2>

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
                                        Our tech startup needed a signage solution that matched our innovative spirit. The
                                        design team didn't just create a sign; they captured our company's entire essence.
                                        The LED-powered brand display has become a conversation starter for clients and
                                        employees alike.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/home/testimonial-1.webp') }}" alt="Michael, CEO, Technova Innovations"
                                            class="rounded-circle me-3" width="50" height="50">
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
                                        As a boutique hotel chain, brand consistency is everything. These custom signages transformed 
                                        our brand experience across multiple locations. The attention to detail is remarkable - each piece 
                                        feels uniquely crafted yet perfectly aligned with our brand identity.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/home/testimonial-2.webp') }}" alt="Asish, CEO, A Hotel Chain"
                                            class="rounded-circle me-3" width="50" height="50">
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
                                        We needed urgent signage for our new retail location, and they delivered beyond expectations. The direct 
                                        communication and on-demand design process made the experience seamless and stress-free.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/home/testimonial-3.webp') }}" alt="Nandini, CEO, A Real Estate Company"
                                            class="rounded-circle me-3" width="50" height="50">
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
                                        like Bhive. But what they delivered went far beyond expectations. They didn’t just create 
                                        signs – they crafted a visual identity that reflects our energy, innovation, and community spirit. 
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="{{ asset('frontend/Images/home/testimonial-4.webp') }}" alt="Manager, Bhive Workspace"
                                            class="rounded-circle me-3" width="50" height="50">
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
            <section class="other-cities-section mt-5">
    <div class="container">
        <h2 class="my-5">Led Sign Board in Other Cities</h2>
        <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
            <div class="other-cities-card">
                <a href="#" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Mumbai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Mumbai</p>
                </div>
            </a>
            </div>
            <div class="other-cities-card">
                <a href="#" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Chennai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Chennai</p>
                </div>
                </a>
            </div>
            <div class="other-cities-card">
                <a href="#" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="Bangalore">
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
                    <a href="{{ route('blogs') }}">
                        <button class="contact-btn">See All Blogs</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
         <section class="faq-section">
            <div class="container">
                <h1 class="faq-title">FAQs</h1>

                <div class="faq-item">
                    <button class="faq-question">
                        How Do I Choose a Signage?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Choosing a signage depends on many factors, including your business type, location, and branding
                            goals. Here's how to make the right choice:</p>
                        <ul>
                            <li>Purpose – Determine whether the signage is for branding, wayfinding, promotions, or safety.
                            </li>
                            <li>Location & Visibility – Choose signage that stands out in your environment, whether indoor
                                or outdoor.</li>
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
                        What are the types of signage products do you offer?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>As sign board makers, we provide a diverse range of solutions to businesses such as:</p>
                        <ul>
                            <li><a href="https://brandsignages.com/neon-sign-board-bangalore"
                                    style="text-decoration: unset;color:#E43D12">Neon sign</a></li>
                            <li>Acp signboard</li>
                            <li><a href="https://brandsignages.com/acrylic-signage-manufacturer-bangalore"
                                    style="text-decoration: unset;color:#E43D12">Acrylic Signage</a></li>
                            <li>Channel Letter signs</li>
                            <li><a href="https://brandsignages.com/digital-signage-company-bangalore"
                                    style="text-decoration: unset;color:#E43D12">Digital Signages</a></li>
                            <li><a href="https://brandsignages.com/steel-signage-manufacturer-bangalore"
                                    style="text-decoration: unset;color:#E43D12">Steel Signage</a></li>
                            <li><a href="https://brandsignages.com/safety-signages-in-bangalore"
                                    style="text-decoration: unset;color:#E43D12">Fire safety Signs</a></li>
                            <li><a href="https://brandsignages.com/led-sign-board-in-bangalore"
                                    style="text-decoration: unset;color:#E43D12">LED Sign Board</a></li>
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
                        Are your signage boards suitable for both indoor and outdoor use?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Our signage boards are designed with versatility in mind:</p>
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