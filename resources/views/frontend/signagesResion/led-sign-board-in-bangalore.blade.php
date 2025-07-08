@extends('frontend.layout.appLayout')
@section('content')
    <section class="hero-banner"
        style="background-image: url('{{ asset('/frontend/Images/home/led-signagesbengalor-banner.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Best LED Sign Board <br>Manufacturer in Bangalore</h1>
                    <p>Brand Signages is a trusted B2B partner and a premium LED sign board manufacturer<br> in Bangalore, India.
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
            <h2 class="hero-title">Illuminate Your Brand in Bangalore <br>with Premium LED Sign Boards</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/led-sign-board-signage.webp')}}" alt="LED Sign Board Design"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="brand-title">Supirior-quality LED Name Boards</h2>
                    <p class="brand-description">
                       Give your business a fresh look and present it in a way that truly connects with your audience. In today’s fast-evolving advertising landscape, we offer a wide range of <a style="color: #E43D12;text-decoration: none;" href="https://brandsignages.com/led-light-signages">cutting-edge LED sign boards</a> designed to elevate your brand and meet your business needs. Our product range includes digital LED signage, glow LED Signs, LED display boards, outdoor LED sign boards, etc. Every signboard is tailored to exhibit your brand's recognition at a lower cost while guaranteeing energy efficiency.
                    </p>
                    <p class="brand-description">
                       Renowned as a <a style="color: #E43D12;text-decoration: none;" href="/">signage manufacturer in Bangalore</a>, we have also evolved as a leading name in LED sign board manufacturing. We have achieved this landmark by providing unmatched customer satisfaction, commitment to quality, and the best-quality product range. At Brand Signages, we push our limits to bring your brand vision to life with stunning signage design solutions.
                    </p>
                    <div class="mt-4">
                            <a href="{{route('about_us')}}" class="custom-btn">About Us</a>
                        </div>
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
                <img src="{{asset('frontend/Images/led-sign-3.webp')}}" alt="Scrolling LED Sign"
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
                        <img src="{{ asset('frontend/Images/acrylic-sign-board-1.webp') }}" alt="Acrylic LED Sign"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Acrylic LED Sign Board</h3>
                            <p>
                                Acrylic LED Sign Board is a visually appealing signage solution made from durable acrylic material, 
                                illuminated with LED lights. These are one of the most used signage boards for restaurants and cafes, 
                                retail stores, event exhibitions, corporate offices, hotel resorts, shopping malls, and outdoor advertising. 
                            </p>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/digital-led-signage-1.webp') }}" alt="Metal Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Digital LED Display Boards</h3>
                            <p>
                                Digital LED Display Boards use LED technology to display dynamic content, including text, images, and videos. 
                                Any type of retail store or outlet can use it to promote their offer or newly launched product with interactive 
                                digital LED screens. It can create an impressive customer experience and attract foot traffic.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/led-backlit-board-1.webp') }}" alt="LED Sign Board"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>LED Backlit Boards</h3>
                            <p>
                                LED Backlit Boards are illuminated signboards where LED lights are placed behind the display surface, creating a 
                                glowing effect. Digital backlit boards are the perfect choice for making brand names unforgettable. By placing 
                                them in strategic spots and striking design, backlit signs can establish a strong brand presence. 
                            </p>
                        </div>
                    </div>
                    <!-- Slide 1 -->
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/led-reverse-light.webp') }}" alt="Digital Signages"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>LED Reverse Light Sign</h3>
                            <p>
                                LED Reverse Light Signs are signage solutions where LED lights illuminate the design from the back, creating a halo 
                                or glow effect around the letters. LED Reverse Light Sign is perfect for storefronts, exhibitions, and vehicles. 
                                Strategically placed in high-traffic areas or mobile platforms, LED reverse light signs ensure your message stands 
                                out, day or night.
                            </p>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/led-message-boards.webp') }}" alt="Neon Sign Board"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>LED Message Boards</h3>
                            <p>
                               LED Message Boards are digital display boards that use LED technology to showcase customizable text and messages, ideal 
                               for real-time updates, advertisements, and information display. If you're looking for captivating message boards that can 
                               easily communicate with your customers or visitors, LED message boards are the best option.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/glow-sign-board.webp') }}" alt="retail Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Glowing Light Sign Boards</h3>
                            <p>
                               Glowing Light Sign Boards are illuminated signage solutions that use LED or neon lights to create a vibrant, eye-catching glow. 
                               Glowing light sign board is ideal for cafes, storefronts, exhibitions, malls, or event spaces.
                            </p>
                        </div>
                    </div>


                    <!-- Add more slides if needed -->
                </div>
             


            </div>
            
               <div class="text-center mt-4">
            <a href="https://brandsignages.com/services" class="btn-we-elevate">View All Services</a>
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
                <section class="we-deliver">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <h2>What Makes LED Sign Boards a Top Choice for Businesses</h2>
                    </div>
                    <div class="col-md-8 col-12">
                    
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