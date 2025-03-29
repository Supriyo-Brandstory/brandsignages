@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/led-sign-boards-bangalore.webp')}}" alt="LED Sign Board manufacturers in Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Best LED Sign Board Manufacturers in Bangalore- Brand Signages</h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get Started</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Illuminate Your Brand <br>with LED Sign Boards</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/led-signboard1.webp')}}" alt="LED Sign Board Manufacturers in Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Electronic Name Boards in Bangalore</h2>
                <p class="brand-description">
                LED sign boards are modern digital signage solutions for better visibility around the clock. With customizable options and vibrant colors,<a href="{{route('led_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">LED sign boards </a> are widely used in different industry settings like retail stores, healthcare facilities, and other businesses.  
                </p>
                <p class="brand-description">
                As a premier signage company and a leading name in LED sign board manufacturing in Bangalore, we work for top companies. Our product range includes digital LED signage, glow LED Sign Boards, LED display boards, outdoor LED sign boards, and more. Every signboard is tailored to exhibit your brand's recognition while guaranteeing energy efficiency and durability.   
                </p>
                <p class="brand-description">
                We integrate modern technology and striking designs to create signages. Whether you require a glow LED sign board for outdoor branding or an acrylic LED sign board for your retail store, we offer solutions that line up with your needs. At Brand Signages, we provide high-quality LED signage that combines advanced technology, sleek design, and long-lasting durability.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="process-section">
        <div class="container">
            <h2 class="process-title">Hassle-Free Signage Solutions for Your Business</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="process-card">
                        <div class="icon-design">
                            <img src="{{asset('frontend/Images/graphic-designer.webp')}}" alt="On-demand Design">
                        </div>
                        <h3>On-demand Design</h3>
                        <p>Our creative team of sign board makers in Bangalore offers flexible, personalized signage solutions. We transform your ideas into compelling visual narratives that strengthen your brand presence.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="process-card">
                        <div class="icon-deliver">
                            <img src="{{asset('frontend/Images/on-time.webp')}}" alt="Timely Deliver">
                        </div>
                        <h3>Timely Deliver</h3>
                        <p>We optimize workflows, maintain stringent timelines, and coordinate logistics to guarantee
                            project completion without compromising quality or design integrity.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="process-card">
                        <div class="icon-purchase">
                            <img src="{{asset('frontend/Images/transaction.webp')}}" alt="Direct Purchase">
                        </div>
                        <h3>Direct Purchase</h3>
                        <p>Our streamlined purchasing pathway eliminates complexity, connecting you straight to creative
                            brilliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Types of LED Signage Boards We Make</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage3.webp')}}" class="why-card-img-top"
                        alt="Acrylic LED Sign Board">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Acrylic LED Sign Board</h3>
                        <p class="card-text">Acrylic LED Sign Board is a visually appealing signage solution made from durable acrylic material, illuminated with LED lights. These are one of the most used signage boards for restaurants and cafes, retail stores, event exhibitions, corporate offices, hotel resorts, shopping malls, and outdoor advertising. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage4.webp')}}" class="why-card-img-top" alt="Digital LED Display Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Digital LED Display Boards</h3>
                        <p class="card-text">Digital LED Display Boards use LED technology to display dynamic content, including text, images, and videos. Any type of retail store or outlet can use it to promote their offer or newly launched product with interactive digital LED screens. It can create an impressive customer experience and attract foot traffic. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage5.webp')}}" class="why-card-img-top"
                        alt="Digital Backlit Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">LED Backlit Boards</h3>
                        <p class="card-text">LED Backlit Boards are illuminated signboards where LED lights are placed behind the display surface, creating a glowing effect. Digital backlit boards are the perfect choice for making brand names unforgettable. By placing them in strategic spots and striking design, backlit signs can establish a strong brand presence.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage6.webp')}}" class="why-card-img-top"
                        alt="LED Reverse Light Sign">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">LED Reverse Light Sign</h3>
                        <p class="card-text">LED Reverse Light Signs are signage solutions where LED lights illuminate the design from the back, creating a halo or glow effect around the letters. LED Reverse Light Sign is perfect for storefronts, exhibitions, and vehicles. Strategically placed in high-traffic areas or mobile platforms, LED reverse light signs ensure your message stands out, day or night.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage7.webp')}}" class="why-card-img-top"
                        alt="LED Message Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">LED Message Boards</h3>
                        <p class="card-text">LED Message Boards are digital display boards that use LED technology to showcase customizable text and messages, ideal for real-time updates, advertisements, and information display. If you're looking for captivating message boards that can easily communicate with your customers or visitors, LED message boards are the best option. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/led-signage8.webp')}}" class="why-card-img-top"
                        alt="Glowing Light Sign Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Glowing Light Sign Boards</h3>
                        <p class="card-text">Glowing Light Sign Boards are illuminated signage solutions that use LED or neon lights to create a vibrant, eye-catching glow. Glowing light sign board is ideal for cafes, storefronts, exhibitions, malls, or event spaces.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="signageCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage3.webp')}}" class="why-card-img-top"
                                    alt="Acrylic LED Sign Board">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Acrylic LED Sign Board</h3>
                                    <p class="card-text">Acrylic LED Sign Board is a visually appealing signage solution made from durable acrylic material, illuminated with LED lights. These are one of the most used signage boards for restaurants and cafes, retail stores, event exhibitions, corporate offices, hotel resorts, shopping malls, and outdoor advertising. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage4.webp')}}" class="why-card-img-top" alt="Digital LED Display Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Digital LED Display Boards</h3>
                                    <p class="card-text">Digital LED Display Boards use LED technology to display dynamic content, including text, images, and videos. Any type of retail store or outlet can use it to promote their offer or newly launched product with interactive digital LED screens. It can create an impressive customer experience and attract foot traffic.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage5.webp')}}" class="why-card-img-top"
                                    alt="Digital Backlit Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">LED Backlit Boards</h3>
                                    <p class="card-text">LED Backlit Boards are illuminated signboards where LED lights are placed behind the display surface, creating a glowing effect. Digital backlit boards are the perfect choice for making brand names unforgettable. By placing them in strategic spots and striking design, backlit signs can establish a strong brand presence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage6.webp')}}" class="why-card-img-top"
                                    alt="LED Reverse Light Sign">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">LED Reverse Light Sign</h3>
                                    <p class="card-text">LED Reverse Light Signs are signage solutions where LED lights illuminate the design from the back, creating a halo or glow effect around the letters. LED Reverse Light Sign is perfect for storefronts, exhibitions, and vehicles. Strategically placed in high-traffic areas or mobile platforms, LED reverse light signs ensure your message stands out, day or night.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage7.webp')}}" class="why-card-img-top"
                                    alt="LED Message Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">LED Message Boards</h3>
                                    <p class="card-text">LED Message Boards are digital display boards that use LED technology to showcase customizable text and messages, ideal for real-time updates, advertisements, and information display. If you're looking for captivating message boards that can easily communicate with your customers or visitors, LED message boards are the best option. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/led-signage8.webp')}}" class="why-card-img-top"
                                    alt="Glowing Light Sign Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Glowing Light Sign Boards</h3>
                                    <p class="card-text">Glowing Light Sign Boards are illuminated signage solutions that use LED or neon lights to create a vibrant, eye-catching glow. Glowing light sign board is ideal for cafes, storefronts, exhibitions, malls, or event spaces.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-carousel-controls">
                <button id="prevButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="nextButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="carousel-indicators why-carousel-indicators">
                <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
        </div>
    </div>
</section>


<section class="why-bg-light-pink py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Why Choose Brand Signages for <br>Your Signage Needs?</h2>
                <p class="card-text">With a team of expert designers and skilled craftsmen, we deliver high-quality signage solutions. 
                    Our expertise ensures your brand captures customer attention effectively.</p>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
                <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/on-site-consulting.webp')}}" class="why-card-img-top" alt="Consulting">
                        <div class="card-body px-0">
                            <h3 class="why-text-red mb-3">On-site consulting & planning</h3>
                            <p class="card-text">Our team will work closely with you and listen to your POV and brand
                                message. We will provide exactly what you need, no guesswork, no hassle, just
                                personalized and strategic planning for your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/top-tier-designs.webp')}}" class="why-card-img-top" alt="Designs">
                        <div class="card-body px-0">
                            <h3 class="why-text-red mb-3">Top-tier Creative Designs</h3>
                            <p class="card-text">As creators of brand signage, we think that signs should not be
                                visually boring. We will create visuals that will become the talk of the town. Our team
                                members will marry creativity and smart thinking to make your brand pop.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/skilled-workforce.webp')}}" class="why-card-img-top" alt="Support">
                        <div class="card-body px-0">
                            <h3 class="why-text-red mb-3">Skilled workforce for installation</h3>
                            <p class="card-text">We treat signboards as art pieces, which means our work is not done
                                with just the installations. Moreover, we take special care while doing so, checking the
                                placement is perfect from every angle.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/time-delivery.webp')}}" class="why-card-img-top" alt="Quality">
                        <div class="card-body px-0">
                            <h3 class="why-text-red mb-3">Timely Delivery of signage boards</h3>
                            <p class="card-text">Delays and excuses are the bane of our existence. We know that a lot is
                                riding on our signage solutions, and that’s why we deliver digital signage solutions
                                within the deadline set ahead by the clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/quality-material.webp')}}" class="why-card-img-top" alt="Customer Service">
                        <div class="card-body px-0">
                            <h3 class="why-text-red mb-3">Quality material</h3>
                            <p class="card-text">We prioritize the material quality to ensure they can withstand harsh
                                weather and normal wear and tear. Our flexes and outdoor signs will tell the story for
                                years and keep the brand’s visual identity sharp.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="signageCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/on-site-consulting.webp')}}" class="why-card-img-top" alt="Consulting">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">On-site consulting & planning</h3>
                                        <p class="card-text">Our team will work closely with you and listen to your POV
                                            and brand message. We will provide exactly what you need, no guesswork, no
                                            hassle, just personalized and strategic planning for your business.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/top-tier-designs.webp')}}" class="why-card-img-top" alt="Designs">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Top-tier Creative Designs</h3>
                                        <p class="card-text">As creators of brand signage, we think that signs should
                                            not be visually boring. We will create visuals that will become the talk of
                                            the town. Our team members will marry creativity and smart thinking to make
                                            your brand pop.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/skilled-workforce.webp')}}" class="why-card-img-top" alt="Workforce">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Skilled workforce for installation</h3>
                                        <p class="card-text">We treat signboards as art pieces, which means our work is
                                            not done with just the installations. Moreover, we take special care while
                                            doing so, checking the placement is perfect from every angle.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/skilled-workforce.webp')}}" class="why-card-img-top" alt="Support">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Skilled workforce for installation</h3>
                                        <p class="card-text">We treat signboards as art pieces, which means our work is
                                            not done with just the installations. Moreover, we take special care while
                                            doing so, checking the placement is perfect from every angle. <br> <br> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/time-delivery.webp')}}" class="why-card-img-top" alt="Quality">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Timely Delivery of signage boards</h3>
                                        <p class="card-text">Delays and excuses are the bane of our existence. We know
                                            that a lot is riding on our signage solutions, and that’s why we deliver
                                            digital signage solutions within the deadline set ahead by the clients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="why-card card">
                                    <img src="{{asset('frontend/Images/quality-material.webp')}}" class="why-card-img-top" alt="Customer Service">
                                    <div class="card-body why-card-body px-0">
                                        <h3 class="why-text-red mb-3">Quality material</h3>
                                        <p class="card-text">We prioritize the material quality to ensure they can
                                            withstand harsh weather and normal wear and tear. Our flexes and outdoor
                                            signs will tell the story for years and keep the brand’s visual identity
                                            sharp.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="why-carousel-controls">
                    <button id="prevButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel"
                        data-bs-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="nextButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel"
                        data-bs-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <div class="carousel-indicators why-carousel-indicators">
                    <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
            </div>
        </div>
    </section>

    <section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Benefits of LED Sign Boards for Businesses</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/led-signage13.webp')}}" alt="LED Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    <b>Eye-Catching Designs -</b> LED signage boards use dynamic digital screens and make your brand stand out.</p>
                <p class="brand-description">
                    <b>Powerful Tool for Advertising -</b> LED signboards offer customized content and illuminated options for attracting customers and boosting visibility.</p>
                <p class="brand-description">
                    <b>Long-Lasting Durability -</b> These signages are designed with energy-efficient technology to ensure low electricity consumption and extended lifespan. 
                </p>
                <p class="brand-description">
                    <b>Installation & Maintenance -</b> Other than traditional sign boards, it does not require upkeep. LED signage boards are lightweight and easy-to-install solutions. 
                </p>    
                <p class="brand-description">
                As a premier LED signage manufacturer company, we stay updated with industry standards. We have a team of experienced designers and a management unit to maintain 
                operations.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="mt-lg-5">
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3" id='gallery-container'>
        <h2 class="hero-title">Catalogue</h2>
        
        <!-- First Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-25.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-25.webp')}}" class="img-fluid" alt="LED sign board in Bangalore" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-18.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-18.webp')}}" class="img-fluid" alt="LED sign board in Domlur"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-19.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-19.webp')}}" class="img-fluid" alt="LED sign board in Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-20.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-20.webp')}}" class="img-fluid" alt="Electronic name board in Bangalore"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-21.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-21.webp')}}" class="img-fluid" alt="LED sign board in Domlur"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-22.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-22.webp')}}" class="img-fluid" alt="LED sign board in Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-23.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-23.webp')}}" class="img-fluid" alt="LED sign board in Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-24.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-24.webp')}}" class="img-fluid" alt="Electronic name board in Bangalore"  style="width: 100%;">
                </a>
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
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The LED sign board in Bangalore we bought was superb. The LED signage is dazzling and transparent, making our store more noticeable. Highly suggest!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/led-sign-12.webp')}}" alt="Rajesh K" class="client-img">
                            <div>
                                <div class="client-name">Rajesh K</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">We placed an order for a glow sign board, and the outcomes are excellent. The LED light gives our outlet a competent appearance. Thanks for the superb service!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/led-sign-13.webp')}}" alt="Anita Sharma" class="client-img">
                            <div>
                                <div class="client-name">Anita Sharma</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The LED display board in Bangalore we purchased has been ideal for showcasing prompt updates. It’s highly operational and looks unique. Very contented!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/led-sign-14.webp')}}" alt="Pradeep Rao" class="client-img">
                            <div>
                                <div class="client-name">Pradeep Rao</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">Teaming up with this sign board manufacturer has been a wonderful experience. The acrylic LED sign,  which we got has surpassed our expectations in standard and pattern.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/led-sign-15.webp')}}" alt="Nandita Patel" class="client-img">
                            <div>
                                <div class="client-name">Nandita Patel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The LED sign boards which we bought for our enterprise are high-standard. The stainless steel coating is endurable and fashionable. Ideal selection for any organization!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/led-sign-16.webp')}}" alt="Sushant M" class="client-img">
                            <div>
                                <div class="client-name">Harish Verma</div>
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
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The LED sign board in Bangalore we bought was superb. The LED signage is dazzling and transparent, making our store more noticeable. Highly suggest!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/led-sign-12.webp')}}" alt="Rajesh K" class="client-img">
                                        <div>
                                            <div class="client-name">Rajesh K</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">We placed an order for a glow sign board, and the outcomes are excellent. The LED light gives our outlet a competent appearance. Thanks for the superb service!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/led-sign-13.webp')}}" alt="Anita Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Anita Sharma</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The LED display board in Bangalore we purchased has been ideal for showcasing prompt updates. It’s highly operational and looks unique. Very contented!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/led-sign-14.webp')}}" alt="Pradeep Rao" class="client-img">
                                        <div>
                                            <div class="client-name">Pradeep Rao</div>
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
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The LED display board in Bangalore we purchased has been ideal for showcasing prompt updates. It’s highly operational and looks unique. Very contented!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/led-sign-14.webp')}}" alt="Pradeep Rao" class="client-img">
                                        <div>
                                            <div class="client-name">Pradeep Rao</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">Teaming up with this sign board manufacturer has been a wonderful experience. The acrylic LED sign,  which we got has surpassed our expectations in standard and pattern.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/led-sign-15.webp')}}" alt="Nandita Patel" class="client-img">
                                        <div>
                                            <div class="client-name">Nandita Patel</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The LED sign boards which we bought for our enterprise are high-standard. The stainless steel coating and spectra sign systems are endurable and fashionable. Ideal selection for any organization!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/led-sign-16.webp')}}" alt="Sushant M" class="client-img">
                                        <div>
                                            <div class="client-name">Harish Verma</div>
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
        <h1 class="faq-title">LED Signboard FAQS</h1>

        <div class="faq-item">
            <button class="faq-question">
                What is the delivery time for a signboard order in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The delivery time for a signboards generally between 5 to 7 working days, based on the design complexity and order volume.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What types of LED signboards are ideal for businesses in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Businesses in Bangalore can benefit from various LED signboards, including 2D and 3D LED signs for retail stores, glow signboards for restaurants and cafes, acrylic LED signs for corporate offices, and digital signage for malls and commercial spaces. Brand Signages offers customized solutions with a dedicated manufacturing facility to meet your specific needs.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are LED sign boards suitable for promoting my retail store?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Definitely! LED signboards are highly efficient for retail store promotion, as they are transparent day and night, long-lasting, and energy-saving. They seize awareness and offer lucid information, making them perfect for any enterprise.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                    Which businesses can benefit the most from LED signages?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>LED signboards are ideal for retail stores, restaurants, corporate offices, shopping malls, hospitals, and hotels. They help enhance brand visibility, provide clear communication, and create a strong impression on potential customers.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you provide installation services for the LED sign boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we provide installation and maintenance services for all our LED sign boards in Bangalore. Our competent team ensures that your signage board is installed free from any danger at the location of your preference.</p>
            </div>
        </div>

    </div>
</section>

@endsection