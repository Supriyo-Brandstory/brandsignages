@extends('frontend.layout.appLayout')

@section('content')

    <section class="home-page">

        <section class="hero-banner"
            style="background-image: url('{{ asset('/frontend/Images/home/brandsignages-banner.webp') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="hero-banner_title">Best Sign Board Makers Near <br>Me Bangalore: Brand Signages</h1>
                        <p>Draw attention and leave a mark with vibrant, interactive sign boards <br>that speak
                            loud and clear.</p>
                        <a href="https://brandsignages.com/contact-us">
                            <button class="contact-btn">Know More</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section>
            <div class="container pt-5">
                <h2 class="hero-title">Welcome to Brand Signages <br>Best Signage Makers in Bangalore</h2>

                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="showcase-image">
                            <img src="{{asset('frontend/Images/home/about-us.webp')}}" alt="Cafe Rosco Signage"
                                class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h2 class="brand-title">Sign Board Makers Near Me | LED Sign Board</h2>
                        <p class="brand-description">
                            Brand Signages stands out as one of the top signage manufacturers in Bangalore. We help
                            businesses stand apart with the best signage advertising solutions. With over 10 years of
                            experience in signage design, manufacturing, and installation, our clientele includes small
                            businesses, industry leaders, and top-tier brands.
                        </p>
                        <p class="brand-description">
                            In today’s competitive market, your brand must stand out from others. Impactful signage and
                            signboards are key to boosting visibility, attracting customers, and strengthening brand
                            recognition. Brand Signages is among the leading premier sign board manufacturers in Bangalore,
                            offering custom-made LED sign boards for local brands and businesses.
                        </p>
                        <p class="brand-description">
                            Step forward with Brand Signages and engage your potential audience with
                            <a href="{{route('led_sign_board_in_bangalore')}}"
                                style="text-decoration: unset;color:#E43D12;font-weight: bold;">LED sign boards </a>,
                            <a href="{{route('digital_signages')}}"
                                style="text-decoration: unset;color:#E43D12;font-weight: bold;">digital signage </a>,
                            acrylic signage, <a href="{{route('neon_sign_board_bangalore')}}"
                                style="text-decoration: unset;color:#E43D12;font-weight: bold;">neon lights</a>, and
                            metal signage that leave a lasting impression and build enduring brand relationships.
                        </p>
                        {{-- <div class="mt-4">
                            <a href="{{route('about_us')}}" class="custom-btn">Know About Us</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

        <section class="container my-5 achievements-section">
            <h2 class="text-center">Our Achievements</h2>
            <div class="row g-3">

                <!-- Large Image Left -->
                <div class="col-lg-6 col-md-6">
                    <div class="achievement-box height-582">
                        <img src="{{ asset('frontend/Images/home/single-brandex.webp') }}" class="img-fluid" alt="Signage">
                    </div>
                </div>

                <!-- Top Right: 10+ Years -->
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div
                                class="achievement-box years height-270 text-center p-4 d-flex flex-column justify-content-center">
                                <h3>10+</h3>
                                <p class="mb-0">Years In Signage Design</p>
                            </div>
                        </div>
                        <!-- Top Right: 12,000+ Deliveries -->
                        <div class="col-lg-6 col-md-6">
                            <div
                                class="achievement-box  Deliveries text-center p-4 d-flex flex-column justify-content-center">
                                <h3 class="fs-2 fw-bold">12,000+</h3>
                                <p class="mb-0">Deliveries Done</p>
                            </div>
                        </div>

                        <!-- Top Right: Neon Quote -->
                        <div class="col-lg-6 col-md-6 pb-0">
                            <div class="achievement-box h-100">
                                <img src="{{ asset('frontend/Images/home/fortune-blue.webp') }}"
                                    class="img-fluid rounded-3 h-100 w-100 object-cover" alt="Quote">
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Bottom Left: Fashion Week -->
                <div class="col-lg-8 col-md-12">
                    <div class="achievement-box h-100">
                        <img src="{{ asset('frontend/Images/home/fashion-week.webp') }}"
                            class="img-fluid rounded-3 h-100 w-100 object-cover" alt="Fashion">
                    </div>
                </div>

                <!-- Bottom Right: Client Base -->
                <div class="col-lg-4 col-md-12">
                    <div class="achievement-box client-base text-dark p-4  d-flex flex-column justify-content-center">
                        <h3 class="fs-2 fw-bold">2,500+</h3>
                        <p class="mb-0">Client Base</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="pointing">
            <div class="container point">
                <div class="ledx pulse-point">
                    <span class="pulse"></span> <!-- White animated surface -->
                    <span class="pulse-center"></span> <!-- Red fixed center -->
                    <img class="pulse-hover-img ledx-img" src="{{ asset('frontend/Images/home/led-signage.png') }}"
                        alt="Hover Image">
                </div>
                <div class="outdoorx pulse-point">
                    <span class="pulse"></span> <!-- White animated surface -->
                    <span class="pulse-center"></span> <!-- Red fixed center -->
                    <img class="pulse-hover-img outdoorx-img" src="{{ asset('frontend/Images/home/outdoor-signage.png') }}"
                        alt="Hover Image">
                </div>
                <div class="digitalx pulse-point">
                    <span class="pulse"></span> <!-- White animated surface -->
                    <span class="pulse-center"></span> <!-- Red fixed center -->
                    <img class="pulse-hover-img digitalx-img" src="{{ asset('frontend/Images/home/digital-signage.png') }}"
                        alt="Hover Image">
                </div>
                <div class="metalx pulse-point">
                    <span class="pulse"></span> <!-- White animated surface -->
                    <span class="pulse-center"></span> <!-- Red fixed center -->
                    <img class="pulse-hover-img metalx-img" src="{{ asset('frontend/Images/home/metal-signage.png') }}"
                        alt="Hover Image">
                </div>
                <div class="acrylicx pulse-point">
                    <span class="pulse"></span> <!-- White animated surface -->
                    <span class="pulse-center"></span> <!-- Red fixed center -->
                    <img class="pulse-hover-img acrylicx-img" src="{{ asset('frontend/Images/home/acrylic-signage.png') }}"
                        alt="Hover Image">
                </div>




            </div>
        </section>
        <x-coustom-inquiry-form />

        <section class="we-deliver">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <h2>The Difference We Deliver</h2>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/on-demand.png') }}" alt="On-demand Design"
                                        class="img-fluid">
                                    <h3>On-demand Design</h3>
                                    <p>Our creative team of sign board makers delivers custom-made signage solutions. We
                                        transform your branding into compelling visual narratives with top-quality signages
                                        at minimal cost.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/timely-deliver.png') }}" alt="Timely Delive"
                                        class="img-fluid">
                                    <h3>Timely Deliver</h3>
                                    <p>We optimize workflows, maintain stringent timelines, and coordinate logistics to
                                        guarantee project completion without compromising quality or design integrity.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box">
                                    <img src="{{ asset('frontend/Images/home/direct-purchase.png') }}" alt="Direct Purchase"
                                        class="img-fluid">
                                    <h3>Direct Purchase</h3>
                                    <p>Our streamlined purchasing pathway eliminates complexity, connecting you straight to
                                        creative brilliance.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="deliver-box align-items-center">
                                    <a href="" class="button">Our Services</a>
                                </div>
                            </div>

                        </div>
        </section>

        <section class="bgrowth-slider-section">
            <div class="bgrowth-header">
                <h2>Signage Services : Custom Sign Boards <br> to Ignite Your Business Growth</h2>
                <p>
                    At Brand Signages, our creative signage designs and attention to detail ensure your brand message stands
                    out. We specialize in:
                </p>
            </div>

            <div class="swiper bgrowth-swiper container">
                <div class="swiper-pagination"></div> <!-- should be inside swiper, before swiper-wrapper -->
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/dutyfree.webp') }}" alt="Retail Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Retail Signages & Retail Branding</h3>
                            <p>
                                Our retail signage is the epitome of beauty and elegance. When placed in entryways or
                                archways, it attracts people's attention.
                                These creations are bold, energy-efficient, and easy to use and maintain for long-lasting
                                performance.
                            </p>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/steel-sign.webp') }}" alt="Metal Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Metal & Steel Signages</h3>
                            <p>
                                As leading signage board makers, we craft stainless steel signs that deliver clean,
                                professional messaging. Our expertise ensures
                                versatile, sleek designs that provide maximum visual impact with crisp brand communication
                                across various applications.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/steel-sign.webp') }}" alt="Metal Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Metal & Steel Signages</h3>
                            <p>
                                As leading signage board makers, we craft stainless steel signs that deliver clean,
                                professional messaging. Our expertise ensures
                                versatile, sleek designs that provide maximum visual impact with crisp brand communication
                                across various applications.
                            </p>
                        </div>
                    </div>
                    <!-- Slide 1 -->
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/dutyfree.webp') }}" alt="Retail Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Retail Signages & Retail Branding</h3>
                            <p>
                                Our retail signage is the epitome of beauty and elegance. When placed in entryways or
                                archways, it attracts people's attention.
                                These creations are bold, energy-efficient, and easy to use and maintain for long-lasting
                                performance.
                            </p>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/steel-sign.webp') }}" alt="Metal Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Metal & Steel Signages</h3>
                            <p>
                                As leading signage board makers, we craft stainless steel signs that deliver clean,
                                professional messaging. Our expertise ensures
                                versatile, sleek designs that provide maximum visual impact with crisp brand communication
                                across various applications.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide bgrowth-card">
                        <img src="{{ asset('frontend/Images/home/steel-sign.webp') }}" alt="Metal Signage"
                            class="bgrowth-img" />
                        <div class="bgrowth-content">
                            <h3>Metal & Steel Signages</h3>
                            <p>
                                As leading signage board makers, we craft stainless steel signs that deliver clean,
                                professional messaging. Our expertise ensures
                                versatile, sleek designs that provide maximum visual impact with crisp brand communication
                                across various applications.
                            </p>
                        </div>
                    </div>


                    <!-- Add more slides if needed -->
                </div>

            </div>
        </section>

        <section class="container">
            <div class="new-contacts-section">
                <div class="new-contacts-section-overlay">
                    <p class="new-contacts-section-text">
                        Your brand identity is the silent ambassador of your business. At Brand Signages, we don't just
                        design sign boards, we craft designs that leave a lasting impression. As premier signage makers in
                        Bangalore, we bring innovation, precision, and artistry to every design.
                    </p>
                    <button class="new-contacts-section-button">Contact Us</button>
                </div>
            </div>
        </section>




        <section class="instant-pricing">
            <div class="container">
                <h2>Signage Makers in Bangalore - 24-Hour Production & Instant Pricing!</h2>
                <p>Best Signage Manufacturers in Bangalore, what can we do for you?</p>
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
                        @endfor
                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose-signage">
            <div class="why-choose-container container">
                <h2 class="why-title">Why Choose Us for <br>Your Signage Needs?</h2>
                <p class="why-subtitle">
                    With a team of expert designers and skilled craftsmen, we deliver high-quality signage solutions.
                    Our expertise ensures your brand captures customer attention effectively.
                </p>

                <div class="why-grid">
                    <div class="why-box">
                        <img src="{{asset('frontend/Images/home/On-site-consulting.png')}}" alt="On-site consulting"
                            class="why-icon">
                        <h3>On-site consulting & planning</h3>
                        <p>
                            Our team will work closely with you and listen to your POV and brand message.
                            We will provide exactly what you need, no guesswork, no hassle, just personalized and strategic
                            planning for your business.
                        </p>
                    </div>

                    <div class="why-box">
                        <img src="{{asset('frontend/Images/home/Creative-Designs.png')}}" alt="Creative Designs"
                            class="why-icon">
                        <h3>Top-tier Creative Designs</h3>
                        <p>
                            As creators of brand signage, we think that signs should not be visually boring.
                            We will create visuals that will become the talk of the town. Our team members will marry
                            creativity and smart thinking to make your brand pop.
                        </p>
                    </div>

                    <div class="why-box">
                        <img src="{{asset('frontend/Images/home/Skilled-workforce.png')}}" alt="Skilled workforce"
                            class="why-icon">
                        <h3>Skilled workforce for installation</h3>
                        <p>
                            We treat signboards as art pieces, which means our work is not done with just the installations.
                            Moreover, we take special care while doing so, checking the placement is perfect from every
                            angle.
                        </p>
                    </div>

                    <div class="why-box">
                        <img src="{{asset('frontend/Images/home/Timely-Delivery.png')}}" alt="Timely Delivery"
                            class="why-icon">
                        <h3>Timely Delivery of signage boards</h3>
                        <p>
                            Delays and excuses are the bane of our existence. We know that a lot is riding on our signage
                            solutions,
                            and that’s why we deliver branding signage solutions within the deadline set ahead by the
                            clients.
                        </p>
                    </div>

                    <div class="why-box">
                        <img src="{{asset('frontend/Images/home/Quality-Material.png')}}" alt="Quality Material"
                            class="why-icon">
                        <h3>Quality material</h3>
                        <p>
                            We prioritize the material quality to ensure they can withstand harsh weather and normal wear
                            and tear.
                            Our flexes and outdoor signs will tell the story for years and keep the brand’s visual identity
                            sharp.
                        </p>
                    </div>

                    <div class="why-box cta-box">
                        <a href="#" class="cta-btn">Our Portfolio</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="new_client_section container">
            <h2 class="new_client_section-title">Our Clients</h2>
            <div class="row">
                <div class="col-md-5 new_client_section-image col-12">
                    <img src="{{ asset('frontend/Images/home/client-bg.webp') }}" alt="Our Clients">
                </div>
                <div class="col-md-7 new_client_section-scrolling col-12">

                    <div class="new_client_section-wrapper">
                        <!-- Row 1 (Left to Right) -->
                        <div class="new_client_section-row new_client_section-row-1">
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Client Logo">
                            </div>

                            <!-- Duplicates for seamless loop -->
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}" alt="Client Logo">
                            </div>

                        </div>

                        <!-- Row 2 (Right to Left) -->
                        <div class="new_client_section-row new_client_section-row-2">
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}" alt="Client Logo">
                            </div>

                            <!-- Duplicates for seamless loop -->
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}" alt="Client Logo">
                            </div>
                        </div>

                        <!-- Row 3 (Left to Right) -->
                        <div class="new_client_section-row new_client_section-row-3">
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}" alt="Client Logo">
                            </div>
                            <!-- Duplicates for seamless loop -->
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}" alt="Client Logo">
                            </div>
                            <div class="new_client_section-client">
                                <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}" alt="Client Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial Feedback Section -->
        <section class="new_testimonial-swiper-section">
            <div class="container">
                <h2 class="text-center mb-md-5 mb-3">Feedback from Our Valuable Clients</h2>

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
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client"
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
                                        Our tech startup needed a signage solution that matched our innovative spirit. The
                                        design team didn't just create a sign; they captured our company's entire essence.
                                        The LED-powered brand display has become a conversation starter for clients and
                                        employees alike.
                                    </p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client"
                                            class="rounded-circle me-3" width="50" height="50">
                                        <div>
                                            <h6 class="name">Michael</h6>
                                            <small class="text-muted">CEO, Technova Innovations</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Signage & Branding</h2>
                    <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the signage
                        designs through our articles.</p>
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
                        What is Signage Used for?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Signage or branding signs are used for various purposes across different industries to
                            communicate messages, enhance branding, and enhance navigation. Here are the key uses of
                            signage:</p>
                        <ul>
                            <li>Branding & Marketing – Businesses use signage to display their logo, promote offers, and
                                enhance brand visibility.</li>
                            <li>Wayfinding & Navigation – Helps people find directions in malls, hospitals, offices, and
                                public spaces.</li>
                            <li>Safety & Compliance – Includes fire safety signs, construction signs, and hazard warnings to
                                ensure safety.</li>
                            <li>Retail & Advertising – Digital and traditional signage in stores to promote products and
                                boost sales.</li>
                            <li>Corporate & Office Use – Nameplates, department signs, and meeting room displays for
                                organization and professionalism.</li>
                            <li>Event & Exhibition Signage – Used for banners, standees, and digital screens to guide
                                attendees.</li>
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
                        Is Digital Signage Expensive?
                        <i class="faq-icon fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>The cost of digital signage depends on various factors like screen size, technology, content
                            management software, and installation.
                            While the investment can be much higher than traditional signage, digital signage offers
                            long-term benefits such as dynamic content
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
                            <li><a href="https://brandsignages.com/neon-signages"
                                    style="text-decoration: unset;color:#E43D12">Glow signboard</a></li>
                            <li>Acp signboard</li>
                            <li><a href="https://brandsignages.com/arcylic-signages"
                                    style="text-decoration: unset;color:#E43D12">Acrylic LED signboards</a></li>
                            <li>Channel Letter signs</li>
                            <li><a href="https://brandsignages.com/digital-signages"
                                    style="text-decoration: unset;color:#E43D12">Digital signages</a></li>
                            <li><a href="https://brandsignages.com/metal-signages"
                                    style="text-decoration: unset;color:#E43D12">Steel letter</a></li>
                            <li><a href="https://brandsignages.com/fire-safety-signages"
                                    style="text-decoration: unset;color:#E43D12">Fire safety signs</a></li>
                            <li><a href="https://brandsignages.com/led-light-signages"
                                    style="text-decoration: unset;color:#E43D12">LED letter sign</a></li>
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