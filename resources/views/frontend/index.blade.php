@extends('frontend.layout.appLayout')
@section('content')

    <section class="carousel-section">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('frontend/Images/banner1.webp')}}" alt="Signage Design for Engine Oil Brand by Our Signage Board Makers">
                    <div class="carousel-caption-custom">
                        <h1>Top-rated Signage Manufacturers in Bangalore</h1>
                        <div class="mt-4">
                        <a  href="tel:+91 8006606080" class="custom-btn">Get Free Quote</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('frontend/Images/Banner.webp')}}" alt="Signage Design for Coffee Brand by Our Signage Manufacturer">
                    <div class="carousel-caption-custom">
                        <h2>Best Signage Boards Bangalore: Quality That Speaks Volumes</h2>
                        <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get Free Quote</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('frontend/Images/banner3.webp')}}" alt="Signage Design Sample by Brand Signages">
                    <div class="carousel-caption-custom">
                        <h2>Premium Signage Solutions for Businesses Across Bangalore</h2>
                        <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <h2 class="hero-title">We are The Best <br>Signage Manufacturers in Bangalore</h2>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="showcase-image">
                        <img src="{{asset('frontend/Images/cafe-rosco-signage.webp')}}" alt="Cafe Rosco Signage" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="brand-title">One-Stop Shop for All Signage Needs</h2>
                    <p class="brand-description">
                    Brand Signages is the top-rated signage manufacturers in Bangalore. We have 10+ years of experience in signage design, manufacturing, and installation. We serve small businesses, SMEs, and large-scale businesses across Bangalore and operate across India. Our clientele includes industry leaders and top-tier brands from almost every sector.
                    </p>
                    <p class="brand-description">
                    Signages and signboards play an important role in brand recognition, improving visibility, and attracting customers. At Brand Signages, we follow the industry standards and utilize latest technologies in signage design. We are the trusted partner for personalized sign boards, designed to reflect your vision. We craft custom indoor and outdoor sign boards in all shapes and sizes to meet your specific needs.
                    </p>
                    <p class="brand-description">
                        With rich industry expertise and a passion for excellence, we design modern
                       <a href="{{route('led_sign_board_in_bangalore')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">LED sign boards </a>,
                       <a href="{{route('digital_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">digital signage </a>,
                       acrylic signage, <a href="{{route('neon_sign_board_bangalore')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">neon lights</a>, and
                       metal signage for almost every industry. Contact the best signage manufacturers in Bangalore near you today!
                    </p>
                    <div class="mt-4">
                        <a href="{{route('about_us')}}" class="custom-btn">Know About Us</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="process-section">
        <div class="container">
            <h2 class="process-title">The Difference We Deliver</h2>
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
                            signage delivery without compromising quality or design integrity.</p>
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

    <section>
        <div class="container my-5">
            <h2 class="text-center mb-5 card-heading">Our Product Range :Leading Sign Board <br>Makers in Bangalore, India</h2>
            <p class="card-text text-center">At Brand Signages, our creative signage designs and attention to detail ensure your brand message stands out in any setting, whether it's for retail, corporate, or outdoor use. We specialize in:</p>

            <div class="row g-4 cards-row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{asset('frontend/Images/retail-signages.webp')}}" class="card-img-top" alt="Retail Signages & Retail Branding">
                        <div class="card-body">
                            <h5 class="card-title">Retail Signages & Retail Branding</h5>
                            <p class="card-text">Our retail signage is the epitome of beauty and elegance. When placed
                                in entryways or archways, it attracts people's attention. These creations are bold,
                                energy-efficient, and easy to use and maintain for long-lasting performance. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{asset('frontend/Images/rectangular-signages.webp')}}" class="card-img-top" alt="Metal Signage Manufacturer in Bangalore">
                        <div class="card-body">
                            <h5 class="card-title">Metal & Steel Signages</h5>
                            <p class="card-text">As leading signage board makers, we craft stainless steel signs that deliver clean, professional messaging. 
                                Our expertise ensures versatile, sleek designs that provide maximum visual impact with crisp brand communication across 
                                various applications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{asset('frontend/Images/led-sign-new.webp')}}" class="card-img-top" alt="Storefront Signage">
                        <div class="card-body">
                            <h5 class="card-title">LED Signages</h5>
                            <p class="card-text">We have been named among top-tier LED sign board manufacturers for crafting stunning 
                                <a href="https://brandsignages.com/led-sign-board-in-bangalore" style="text-decoration: unset;color:#E43D12">LED Signages</a>. 
                                These transform your spaces into powerful visual statements, attracting potential customers with strategic designs that blend 
                                aesthetic appeal and compelling brand communication.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{asset('frontend/Images/window-graphics.webp')}}" class="card-img-top" alt="outdoor Signage Manufacturer in Bangalore">
                        <div class="card-body">
                            <h5 class="card-title">Outdoor Signages</h5>
                            <p class="card-text">As expert signage board makers, we turn ordinary glass into
                                extraordinary brand canvases. Our outdoor signages create immersive visual experiences,
                                balancing privacy with powerful messaging. These signage manufacturer innovations
                                transform windows into strategic marketing tools that truly engage audiences.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{asset('frontend/Images/interior-decals.webp')}}" class="card-img-top" alt="Interior Decals">
                        <div class="card-body">
                            <h5 class="card-title">Interior Decals</h5>
                            <p class="card-text">Our sign board manufacturing expertise creates more than mere
                                decorations, these <a href="https://brandsignages.com/indoor-signages" style="text-decoration: unset;color:#E43D12">interior signages</a> communicate brand personality, guide customer journeys, and
                                transform interior environments into compelling storytelling platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{asset('frontend/Images/digital-sign.webp')}}" class="card-img-top" alt="digital signage">
                        <div class="card-body">
                            <h5 class="card-title">Digital Signages</h5>
                            <p class="card-text">Signage manufacturers know the power of <a href="https://brandsignages.com/digital-signages" style="text-decoration: unset;color:#E43D12">digital display</a> - dynamic,
                                attention-grabbing installations that transform retail spaces. Our digital signage
                                solutions create interactive experiences that turn browsing into buying, delivering
                                marketing magic through creative and strategic visual storytelling.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{asset('frontend/Images/reflective-signs.webp')}}" class="card-img-top" alt="Construction Safety Signage Manufacturer in Bangalore">
                        <div class="card-body">
                            <h5 class="card-title">Reflective Signs</h5>
                            <p class="card-text">As innovative signage board makers in India, we engineer <a href="https://brandsignages.com/construction-safety-signages" style="text-decoration: unset;color:#E43D12">reflective construction safety signs</a> that
                                combine safety with visual communication. We ensure maximum visibility, delivering
                                critical information with clarity for high-impact, recognizable brand messaging.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{asset('frontend/Images/tradeshow-signage.webp')}}" class="card-img-top" alt="Event and Tradeshow Sign">
                        <div class="card-body">
                            <h5 class="card-title">Event and Tradeshow Sign</h5>
                            <p class="card-text">Our signage creates immersive experiences in crowded spaces.
                                Designed by expert signboard manufacturers, these displays transform temporary
                                environments into powerful platforms for compelling brand storytelling.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{asset('frontend/Images/retractable-banners.webp')}}" class="card-img-top" alt="Retractable Banners">
                        <div class="card-body">
                            <h5 class="card-title">Retractable Banners</h5>
                            <p class="card-text">Are you looking for compact, portable, and retractable banners? We can
                                provide high-quality graphics and robust design, these offer seamless portability
                                without compromising visual impact or brand messaging.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{asset('frontend/Images/indoor-outdoor-banner.webp')}}" class="card-img-top"
                            alt=" Indoor Signage Manufacturer in Bangalore">
                        <div class="card-body">
                            <h5 class="card-title">Indoor Signages</h5>
                            <p class="card-text">Indoor signages are versatile brand communicators for commercial and retail spaces. 
                                They can improve internal communication, and deliver consistent,
                                high-impact messaging. <a href="https://brandsignages.com/indoor-signages" style="text-decoration: unset;color:#E43D12">Indoor signages</a> can transform any space into a brand communication platform and offer lasting durability.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 contact-section">
                    <p class="card-text"><strong>Your brand identity is the silent ambassador of your business. At Brand Signages, we don’t just design sign boards, we craft designs that leave a lasting impression. As premier signage makers in Bangalore, we bring innovation, precision, and artistry to every design.</strong></p>
                    <a href="{{route('contact_us')}}">
                        <button class="contact-btn">Contact Us</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--<section>
    <div class="container py-5" id="gallery-container">
        <h2 class="hero-title  mb-4">Our Recent Signage Projects</h2>
        <p class=" text-center mb-5">At Brand Signages, we put our best efforts, skills, and precision into every signage board regardless of project size or budget. Here is some of our recent works:
        </p>            
        <div class="row align-items-center">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/portfolio-1.webp')}}" data-lightbox="Acrylic LED Signboard" data-title="Image 1">
                    <img src="{{asset('frontend/Images/portfolio-1.webp')}}" class="img-fluid" alt="Acrylic LED Signboard" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/portfolio-2.webp')}}" data-lightbox="LED Signboard Design" data-title="Image 2">
                    <img src="{{asset('frontend/Images/portfolio-2.webp')}}" class="img-fluid" alt="LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/portfolio-3.webp')}}" data-lightbox="LED Lightbox Design" data-title="Image 3">
                    <img src="{{asset('frontend/Images/portfolio-3.webp')}}" class="img-fluid" alt="LED Lightbox Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/portfolio-4.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/portfolio-4.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/portfolio-5.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/portfolio-5.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/portfolio-6.webp')}}" data-lightbox="Digital Signage Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/portfolio-6.webp')}}" class="img-fluid" alt="Digital Signage Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/portfolio-7.webp')}}" data-lightbox="Digital Signage Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/portfolio-7.webp')}}" class="img-fluid" alt="Digital Signage Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/portfolio-8.webp')}}" data-lightbox="Acrylic LED Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/portfolio-8.webp')}}" class="img-fluid" alt="Acrylic LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-sign-1.webp')}}" data-lightbox="Acrylic Signage Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/acrylic-led-sign-1.webp')}}" class="img-fluid" alt="Acrylic Signage Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/led-lightbox-5.webp')}}" data-lightbox="LED Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/led-lightbox-5.webp')}}" class="img-fluid" alt="LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-5.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-5.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/acrylic-led-sign-board-7.webp')}}" data-lightbox="Acrylic Signage Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/acrylic-led-sign-board-7.webp')}}" class="img-fluid" alt="Acrylic Signage Design"  style="width: 100%;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>-->

<x-coustom-inquiry-form />

    <section class="why-bg-light-pink py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Why Choose Brand Signages for <br>Your Signage and Branding Needs?</h2>
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
                                riding on our signage solutions, and that’s why we deliver branding signage solutions
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
                                            branding signage solutions within the deadline set ahead by the clients.</p>
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




 


    <section class="container py-5">
        <div class="row g-4 d-flex flex-wrap justify-content-center">

            <div class="text-center ">
                <h2 class="display-4 mb-3 why-text-heading">Signage That Leaves a Lasting Impression</h2>
            </div>

            <div class="col-lg-4">
                <div class="image-container position-relative">
                    <img src="{{asset('frontend/Images/brand-signage.webp')}}" alt="Brand Signage" class="w-100 h-100">
                    <div class="overlay">
                        <h5 class="text-title">What is Brand Signage?</h5>
                        <p class="text-content">Brand signage is your company's visual ambassador- a strategic plot that
                            adds a compelling narrative touch to your corporate identity. Branding signs and branding banners combine perception and
                            experience, creating memorable touchpoints that speak volumes without saying a word.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="image-container position-relative">
                            <img src="{{asset('frontend/Images/pop-displays.webp')}}" alt="LED Signage Manufacturing Company in Bangalore" class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">LED Sign Boards</h5>
                                <p class="text-content">As a LED signboard manufacturer, we know that dynamic LED displays
                                    can change retail spaces into interactive brand stories. These eye-catching
                                    installations capture attention, especially with LED letters to drive impulse
                                    purchases and create immersive experiences. These will engage customers, and turn
                                    them into enthusiastic brand ambassadors.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-container position-relative">
                            <img src="{{asset('frontend/Images/event-signage.webp')}}" alt="Event Signage" class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Event Signage</h5>
                                <p class="text-content">Event signage is a go-to choice for your brand's live
                                    performance - a strategic communication tool that guides, inspires, and connects. We
                                    can create large-scale brand signages to create cohesive experiences, amplify your
                                    message, and leave a memorable impression.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="image-container position-relative">
                            <img src="{{asset('frontend/Images/corporate-offices.webp')}}" alt="Office Signage manufacturing Company in Bangalore" class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Corporate Offices</h5>
                                <p class="text-content">Corporate office signage reflects your company's theme-
                                    professionalism, innovation, and purpose-driven. As the best, sign board
                                    manufacturer, we will produce thoughtfully designed signs to communicate your
                                    organization's values, culture, and commitment to excellence.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{asset('frontend/Images/storefronts.webp')}}" alt="LED Signage manufacturing Company in Bangalore" class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Storefronts</h5>
                                <p class="text-content">Your storefront deserves glow sign boards for visual appeal,
                                    storytelling, professionalism, and promise. It transforms street-level visibility
                                    into an invitation that draws people into your unique business world.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial section ">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 mb-3 why-text-heading">Feedback from Our Valuable Clients</h2>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none ">
                <div class="col testimonial-small-div">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text">Our tech startup needed a signage solution that
                                matched our innovative spirit. The design team didn't just create a sign; they captured
                                our company's entire essence. The LED-powered brand display has become a conversation
                                starter for clients and employees alike</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{asset('frontend/Images/micheal.webp')}}" alt="Michael" class="client-img">
                                <div>
                                    <div class="client-name">Michael</div>
                                    <div class="client-role">CEO, Technova Innovations</div>
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
                            <p class="card-text testimonial-card-text">As a boutique hotel chain, brand consistency is
                                everything. These custom signages transformed our brand experience across multiple
                                locations. The attention to detail is remarkable - each piece feels uniquely crafted yet
                                perfectly aligned with our brand identity</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{asset('frontend/Images/ashish.webp')}}" alt="Ashish" class="client-img">
                                <div>
                                    <div class="client-name">Ashish</div>
                                    <div class="client-role">CEO of a hotel company</div>
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
                            <p class="card-text testimonial-card-text">We needed urgent signage for our new retail
                                location, and they delivered beyond expectations. The direct communication and on-demand
                                design process made the experience seamless and stress-free</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{asset('frontend/Images/nadini.webp')}}" alt="Nadini" class="client-img">
                                <div>
                                    <div class="client-name">Nadini</div>
                                    <div class="client-role">A Realtor</div>
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
                            <p class="card-text testimonial-card-text">I was skeptical about how a signage company could
                                truly understand our nonprofit's mission. But they did more than create a sign - they
                                created a visual story that speaks to our community's heart. The quality and emotional
                                resonance are unmatched 
                            </p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{asset('frontend/Images/gonzalez.webp')}}" alt="Gonzalez" class="client-img">
                                <div>
                                    <div class="client-name">Gonzalez</div>
                                    <div class="client-role">Executive Director, Real Estate</div>
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
                            <p class="card-text testimonial-card-text">The level of professionalism was extraordinary.
                                The materials they recommended perfectly suited our outdoor corporate environment,
                                withstanding harsh weather while maintaining vibrant brand representation</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{asset('frontend/Images/mayank.webp')}}" alt="Mayank" class="client-img">
                                <div>
                                    <div class="client-name">Mayank</div>
                                    <div class="client-role">Finance, IT company.</div>
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
                                        <p class="card-text testimonial-card-text">Our tech startup needed a signage
                                            solution that matched our innovative spirit. The design team didn't just
                                            create a sign; they captured our company's entire essence. The LED-powered
                                            brand display has become a conversation starter for clients and employees
                                            alike</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{asset('frontend/Images/micheal.webp')}}" alt="Michael" class="client-img">
                                            <div>
                                                <div class="client-name">Michael</div>
                                                <div class="client-role">CEO, Technova Innovations</div>
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
                                        <p class="card-text testimonial-card-text">As a boutique hotel chain, brand
                                            consistency is everything. These custom signages transformed our brand
                                            experience across multiple locations. The attention to detail is remarkable
                                            - each piece feels uniquely crafted yet perfectly aligned with our brand
                                            identity</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{asset('frontend/Images/ashish.webp')}}" alt="Ashish" class="client-img">
                                            <div>
                                                <div class="client-name">Ashish</div>
                                                <div class="client-role">CEO of a hotel company</div>
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
                                        <p class="card-text testimonial-card-text">We needed urgent signage for our new
                                            retail location, and they delivered beyond expectations. The direct
                                            communication and on-demand design process made the experience seamless and
                                            stress-free</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{asset('frontend/Images/nadini.webp')}}" alt="Nadini" class="client-img">
                                            <div>
                                                <div class="client-name">Nadini</div>
                                                <div class="client-role">A Realtor</div>
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
                                        <p class="card-text testimonial-card-text">We needed urgent signage for our new
                                            retail location, and they delivered beyond expectations. The direct
                                            communication and on-demand design process made the experience seamless and
                                            stress-free</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{asset('frontend/Images/nadini.webp')}}" alt="Nadini" class="client-img">
                                            <div>
                                                <div class="client-name">Nadini</div>
                                                <div class="client-role">A Realtor</div>
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
                                        <p class="card-text testimonial-card-text">I was skeptical about how a signage
                                            company could truly understand our nonprofit's mission. But they did more
                                            than create a sign - they created a visual story that speaks to our
                                            community's heart. The quality and emotional resonance are unmatched <br>
                                            <br>
                                        </p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{asset('frontend/Images/gonzalez.webp')}}" alt="Gonzalez" class="client-img">
                                            <div>
                                                <div class="client-name">Gonzalez</div>
                                                <div class="client-role">Executive Director, Real Estate</div>
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
                                        <p class="card-text testimonial-card-text">The level of professionalism was
                                            extraordinary. The materials they recommended perfectly suited our outdoor
                                            corporate environment, withstanding harsh weather while maintaining vibrant
                                            brand representation</p>
                                        <hr class="yellow-line">
                                        <div class="client-info">
                                            <img src="{{asset('frontend/Images/mayank.webp')}}" alt="Mayank" class="client-img">
                                            <div>
                                                <div class="client-name">Mayank</div>
                                                <div class="client-role">Finance, IT company.</div>
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
            <h1 class="faq-title">FAQs</h1>

            <div class="faq-item">
                <button class="faq-question">
                    What is Signage Used for?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Signage or branding signs are used for various purposes across different industries to communicate messages, enhance branding, and enhance navigation. Here are the key uses of signage:</p>
                    <ul>
                        <li>Branding & Marketing – Businesses use signage to display their logo, promote offers, and enhance brand visibility.</li>
                        <li>Wayfinding & Navigation – Helps people find directions in malls, hospitals, offices, and public spaces.</li>
                        <li>Safety & Compliance – Includes fire safety signs, construction signs, and hazard warnings to ensure safety.</li>
                        <li>Retail & Advertising – Digital and traditional signage in stores to promote products and boost sales.</li>
                        <li>Corporate & Office Use – Nameplates, department signs, and meeting room displays for organization and professionalism.</li>
                        <li>Event & Exhibition Signage – Used for banners, standees, and digital screens to guide attendees.</li>
                        <li>Informational Signage – Displays important messages, notices, or public announcements.</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How Do I Choose a Signage?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Choosing a signage depends on many factors, including your business type, location, and branding goals. Here’s how to make the right choice:</p>
                    <ul>
                        <li>Purpose – Determine whether the signage is for branding, wayfinding, promotions, or safety.</li>
                        <li>Location & Visibility – Choose signage that stands out in your environment, whether indoor or outdoor.</li>
                        <li>Right Material – Opt for durable materials based on weather conditions and usage.</li>
                        <li>Design & Readability – Ensure the signage has clear fonts, high-contrast colors, and an eye-catching design.</li>
                        <li>The Right Lighting – Consider LED or illuminated signs for better visibility, especially at night.</li>
                        <li>Hire Professionals – Collaborate with expert sign board manufacturers to get a high-quality, customized solution.</li>
                    </ul>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    Is Digital Signage Expensive?
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>The cost of digital signage depends on various factors like screen size, technology, content management software, and installation. 
                        While the investment can be much higher than traditional signage, digital signage offers long-term benefits such as dynamic content 
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
                    <p>As sign board makers, we provide a diverse range of solutions to businesses such as:</p>
                    <ul>
                        <li><a href="https://brandsignages.com/neon-signages" style="text-decoration: unset;color:#E43D12">Glow signboard</a></li>
                        <li>Acp signboard</li>
                        <li><a href="https://brandsignages.com/arcylic-signages" style="text-decoration: unset;color:#E43D12">Acrylic LED signboards</a></li>
                        <li>Channel Letter signs</li>
                        <li><a href="https://brandsignages.com/digital-signages" style="text-decoration: unset;color:#E43D12">Digital signages</a></li>
                        <li><a href="https://brandsignages.com/metal-signages" style="text-decoration: unset;color:#E43D12">Steel letter</a></li>
                        <li><a href="https://brandsignages.com/fire-safety-signages" style="text-decoration: unset;color:#E43D12">Fire safety signs</a></li>
                        <li><a href="https://brandsignages.com/led-light-signages" style="text-decoration: unset;color:#E43D12">LED letter sign</a></li>
                        <li><a href="https://brandsignages.com/neon-signages" style="text-decoration: unset;color:#E43D12">Neon sign board</a></li>
                        <li><a href="https://brandsignages.com/outdoor-signages" style="text-decoration: unset;color:#E43D12">Outdoor signs</a></li>
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
                        finalize the design and material, we’ll proceed with manufacturing 
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
                    <p>Yes, we also create signage for events and exhibitions in Bangalore. Whether it’s 
                        directional signage, banners, stands, or branded displays, we offer a range of options. 
                        We are a leading signage manufacturer in Bangalore & India to help you with any type of 
                        custom signage solutions. </p>
                </div>
            </div>

            </div>
        </div>
    </section>

<section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Signage & Branding</h2>
            <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the signage designs through our articles.</p>

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
                            <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') }}
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

    @endsection

    