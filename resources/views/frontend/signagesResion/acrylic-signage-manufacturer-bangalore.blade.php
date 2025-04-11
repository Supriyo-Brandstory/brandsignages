@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/acrylic-bangalore1.webp')}}" alt="Acrylic Sign Board In Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Acrylic Sign Board Manufacturers in Bangalore- Brand Signages</h1>
                    <div class="mt-3">
                        
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Modern Acrylic Sign Boards in Bangalore - Perfect <br>Blend of Style and Strength</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/acrylic-sign-bangalore.webp')}}" alt="Acrylic Sign Boards" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    <a href="{{route('index')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">Brand Signages </a>is a top-tier acrylic sign board manufacturer in Bangalore. We provide acrylic LED signs, transparent boards, acrylic wall signs, and custom acrylic sign board designs to fulfill your extraordinary requirements. Our experts design premium quality acrylic sign boards that uplift your brand’s existence. Showcase your brand's identity with expertly designed acrylic sign boards from Brand Signages.
    
                    </p>
                <p class="brand-description">
                    Using an acrylic sign board adds a contemporary and polished touch to any space. Whether for a commercial office in Bangalore, retail outlet, or residential property, these high-quality signboards exude professionalism. Products like acrylic nameplates and acrylic wall signs offer a sleek appearance that enhances your branding. Their clean design makes them a popular choice for creating a lasting impression.

                </p>  
                
                <p class="brand-description">
                    At Brand Signages, we understand the essence of creating a lasting impact through effective branding. Our <a href="{{route('arcylic_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">acrylic sign boards </a>are crafted with innovation & precision, ensuring they not only enhance the aesthetic of your space but also communicate your brand’s values.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="container py-5">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Custom Acrylic Signage Boards for <br>Every Business Need</h2>
        </div>

        <div class="col-lg-4">
            <div class="image-container position-relative">
                <img src="{{asset('frontend/Images/acrylic-bangalore6.webp')}}" alt="Acrylic LED Signage" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">Acrylic LED Signage</h5>
                    <p class="text-content">Acrylic LED signages are perfect for creating stunning displays, enhancing visibility for corporate offices and retail spaces. These illuminated signboards offer a sleek, professional look and are suitable for both indoor and outdoor use. Combining acrylic letters with LED lighting ensures a vibrant and eye-catching appearance.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-bangalore7.webp')}}" alt="Non-Backlit Acrylic Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Non-Backlit Acrylic Signs</h5>
                            <p class="text-content">Acrylic signboards are an excellent choice for businesses. These high-quality signage solutions are sleek and durable, making them ideal for corporate branding, office signage, and acrylic nameplates.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-bangalore8.webp')}}" alt="Mounted Sign Boards" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Mounted Sign Boards</h5>
                            <p class="text-content">Mounted signage boards are long-lasting and flexible, generally utilized as acrylic wall signs or outdoor displays. These display boards can be tailored to fit any business's requirements, guaranteeing a durable signage solution.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-bangalore9.webp')}}" alt="Acrylic 3D Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Acrylic 3D Signs</h5>
                            <p class="text-content">Acrylic 3D signs provide extensiveness and dimension, forming an evident visual influence. These premium quality acrylic signages are ideal for logos or emphasizing any branding needs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-bangalore10.webp')}}" alt="Acrylic Logo Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Acrylic Logo Signs</h5>
                            <p class="text-content">Showcase your brand with classic acrylic logo signs. These illuminated signboards enhance your business with a blend of elegance, durability, and lasting impact.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Enhance Your Interior & Exterior <br>with Sleek Acrylic Signs</h2>

        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/acrylic-bangalore3.webp')}}" class="why-card-img-top"
                        alt="Advanced and Competent Appeal">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Advanced and Competent Appeal</h3>
                        <p class="card-text">Using an acrylic sign board adds a contemporary and polished touch to any space. Whether for a commercial office in Bangalore, retail outlet, or residential property, these high-quality signboards exude professionalism. Products like acrylic nameplates and acrylic wall signs offer a sleek appearance that enhances your branding.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/acrylic-bangalore4.webp')}}" class="why-card-img-top"
                        alt="Flexible and Customizable Solutions">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Flexible and Customizable Solutions</h3>
                        <p class="card-text">Acrylic signages in Bangalore are flexible and can be tailored to suit your extraordinary needs. From acrylic LED signages to acrylic ACP boards, these solutions serve several executions, consisting of indoor and outdoor usage. Glow sign boards and LED acrylic signs are especially efficient for enterprises seeking to be distinct with modern signages.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-md-4">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/acrylic-bangalore5.webp')}}" class="why-card-img-top"
                            alt="Longevity and Durable Quality">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Longevity and Durable Quality</h3>
                            <p class="card-text">Acrylic is known for its durability and effectiveness, making it an ideal material for display boards and acrylic glow signs. These boards are weather-resistant and low-maintenance, ensuring your signage remains visually appealing and functional for years to come.</p>
                        </div>
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
                                <img src="{{asset('frontend/Images/acrylic-bangalore3.webp')}}" class="why-card-img-top"
                                    alt="Advanced and Competent Appeal">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Advanced and Competent Appeal</h3>
                                    <p class="card-text">Using an acrylic sign board adds a contemporary and polished touch to any space. Whether for a commercial office in Bangalore, retail outlet, or residential property, these high-quality signboards exude professionalism. Products like acrylic nameplates and acrylic wall signs offer a sleek appearance that enhances your branding.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/acrylic-bangalore4.webp')}}" class="why-card-img-top"
                                    alt="Flexible and Customizable Solutions">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Flexible and Customizable Solutions</h3>
                                    <p class="card-text">Acrylic signages in Bangalore are flexible and can be tailored to suit your extraordinary needs. From acrylic LED signages to acrylic ACP boards, these solutions serve several executions, consisting of indoor and outdoor usage. Glow sign boards and LED acrylic signs are especially efficient for enterprises seeking to be distinct with modern signages.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/acrylic-bangalore5.webp')}}" class="why-card-img-top"
                                    alt="Longevity and Durable Quality">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Longevity and Durable Quality</h3>
                                    <p class="card-text">Acrylic is known for its durability and effectiveness, making it an ideal material for display boards and acrylic glow signs. These boards are weather-resistant and low-maintenance, ensuring your signage remains visually appealing and functional for years to come.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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



<!--<section class="mt-lg-5">
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3" id="gallery-container">
        <h2 class="hero-title">Catalogue</h2>
        
       
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore17.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore17.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore18.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore18.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore19.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore19.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore20.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore20.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore21.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore21.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore22.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore22.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore23.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore23.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/acrylic-bangalore24.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/acrylic-bangalore24.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>

    </div>
</section>-->


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
                        <p class="card-text testimonial-card-text">We placed an order for an acrylic sign board in Bangalore, and the standard goes beyond our expectations. The pattern was glossy, and the service was wonderful!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/acrylic-bangalore12.webp')}}" alt="Ramesh K" class="client-img">
                            <div>
                                <div class="client-name">Ramesh K</div>
                                <div class="client-role">Corporate office owner</div>
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
                        <p class="card-text testimonial-card-text">The acrylic LED signages modified our shopfront. The dazzling and lively lighting genuinely makes us distinct at night!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/acrylic-bangalore13.webp')}}" alt="Meera S" class="client-img">
                            <div>
                                <div class="client-name">Meera S</div>
                                <div class="client-role">Retail Business Owner</div>
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
                        <p class="card-text testimonial-card-text">The acrylic LED signages modified our shopfront. The dazzling and lively lighting genuinely makes us distinct at night!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/acrylic-bangalore14.webp')}}" alt="Priya T" class="client-img">
                            <div>
                                <div class="client-name">Priya T</div>
                                <div class="client-role">HR Manager</div>
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
                        <p class="card-text testimonial-card-text">The team delivered beautiful acrylic wall signs that aligned our branding flawlessly. Their board manufacturer skillfulness is noticeable in the details</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/acrylic-bangalore15.webp')}}" alt="Rohan Gupta" class="client-img">
                            <div>
                                <div class="client-name">Rajeev P</div>
                                <div class="client-role">Marketing Manager</div>
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
                        <p class="card-text testimonial-card-text">From shaping to installation, their service was effortless. The acrylic signages Bangalore we bought have genuinely uplifted our business existence.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/acrylic-bangalore16.webp')}}" alt="Ishita Mehta" class="client-img">
                            <div>
                                <div class="client-name">Suman G</div>
                                <div class="client-role">Entrepreneur</div>
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
                                    <p class="card-text testimonial-card-text">We placed an order for an acrylic sign board in Bangalore, and the standard goes beyond our expectations. The pattern was glossy, and the service was wonderful!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore12.webp')}}" alt="Ramesh K" class="client-img">
                                        <div>
                                            <div class="client-name">Ramesh K</div>
                                            <div class="client-role">Corporate office owner</div>
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
                                    <p class="card-text testimonial-card-text">The acrylic LED signages modified our shopfront. The dazzling and lively lighting genuinely makes us distinct at night!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore13.webp')}}" alt="Meera S" class="client-img">
                                        <div>
                                            <div class="client-name">Meera S</div>
                                            <div class="client-role">Retail Business Owner</div>
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
                                    <p class="card-text testimonial-card-text">The acrylic LED signages modified our shopfront. The dazzling and lively lighting genuinely makes us distinct at night!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore14.webp')}}" alt="Priya T" class="client-img">
                                        <div>
                                            <div class="client-name">Priya T</div>
                                            <div class="client-role">HR Manager</div>
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
                                    <p class="card-text testimonial-card-text">The acrylic LED signages modified our shopfront. The dazzling and lively lighting genuinely makes us distinct at night! <br> <br> </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore14.webp')}}" alt="Priya T" class="client-img">
                                        <div>
                                            <div class="client-name">Priya T</div>
                                            <div class="client-role">HR Manager</div>
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
                                    <p class="card-text testimonial-card-text">The team delivered beautiful acrylic wall signs that aligned our branding flawlessly. Their board manufacturer skillfulness is noticeable in the details</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore15.webp')}}" alt="Rohan Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Rajeev P</div>
                                            <div class="client-role">Marketing Manager</div>
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
                                    <p class="card-text testimonial-card-text">From shaping to installation, their service was effortless. The acrylic signages Bangalore we bought have genuinely uplifted our business existence.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/acrylic-bangalore16.webp')}}" alt="Ishita Mehta" class="client-img">
                                        <div>
                                            <div class="client-name">Suman G</div>
                                            <div class="client-role">Entrepreneur</div>
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
        <h1 class="faq-title"> Acrylic Signage FAQS</h1>

        <div class="faq-item">
            <button class="faq-question">
                Are acrylic signages appropriate for outdoor usage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, acrylic signages are perfect for outdoor usage. Our outdoor acrylic products, comprising acrylic LED signages and ACP sign boards, are weather-proof and long-lasting, making them ideal for all sorts of environmental circumstances.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you provide acrylic signage installation services in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we offer acrylic signage installation services in Bangalore and PAN India. Our experienced team ensures safe installation, whether it's for office branding, retail stores, reception areas, or outdoor displays. Our experts handle everything from delivery to setup, so you get a hassle-free experience.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is the delivery time for acrylic sign boards in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We deliver acrylic sign boards across Bangalore within 3 to 10 days. The delivery time depends on factors such as design complexity, order volume, and customization. You can talk to our team about your requirements, and we will confirm to deliver your signage at the earliest. </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                  Do you offer bulk order discounts for acrylic signage in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we provide discounted pricing on bulk orders for acrylic signage in Bangalore. The exact discount varies based on factors such as the quantity, design complexity, and customization requirements of the order. To learn more about our bulk pricing options, please contact our team with your specific requirements.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                 How does acrylic signage compare to other materials like ACP or metal boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic signage offers a sleek and aesthetic appearance with gloss and clarity, ideal for indoor branding, name plates, and reception signage. Compared to Aluminium Composite Panel or metal boards:
                </p>
                <ul>
                    <li><strong>Acrylic:</strong> Lightweight, versatile, and great for detailed laser cutting and vibrant printing. Ideal for indoor branding and decorative signage.</li>
                    <li><strong>ACP Boards:</strong> More durable for large outdoor displays and offer better weather resistance. Suitable for shopfronts, hoardings, and external branding.</li>
                    <li><strong>Metal Boards:</strong> Strong, long-lasting, and best suited for industrial or heavy-duty signage needs. Commonly used in factories and outdoor infrastructure.</li>
                </ul>
                <p>You must choose the right option depending on your requirements, use cases, and branding needs. Contact our experts for a detailed consultation.</p> 

            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Is maintenance required for acrylic signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Upkeeping acrylic signage boards is simple. Just clean them with a soft cloth and light detergent to keep their appearance like new. No exceptional maintenance is needed.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I request a sample before placing a bulk order for signage boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, you can definitely order a single piece as a sample before placing a bulk order. This allows you to evaluate the quality, design, and material of the signage boards firsthand. We want you to be completely satisfied with your choice, so feel free to request a sample to ensure it meets your expectations before making a larger commitment.</p>
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