@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/acrylic-bangalore1.webp')}}" alt="Acrylic Sign Board In Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Best Acrylic Sign Boards in Bangalore</h1>
                    <button class="custom-btn">Know More</button>
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
                    <img src="{{asset('frontend/Images/acrylic-bangalore2.webp')}}" alt="Acrylic Sign Boards" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                Brand Signages is a top-tier acrylic sign board manufacturer in Bangalore. We provide acrylic LED signs, transparent boards, acrylic wall signs, and custom acrylic sign board designs to fulfill your extraordinary requirements. Our experts design premium quality signage solutions that uplift your brand’s existence. Showcase your brand's identity with expertly designed acrylic sign boards from Brand Signages.
                </p>  
                <p class="brand-description">
                Famous for polished pattern and resistance, acrylic signages are popular in commercial offices, retail places, and outdoors. Whether you require acrylic LED signages for a bright appearance or acrylic nameplates for an expert feel, these boards are meant to meet the requirements. At Brand Signages, we emphasize producing high-quality acrylic sign boards to make your brand stand out from the rest. From glow sign boards to acrylic wall signs, our products are designed to excellence, utilizing modern aesthetics. We provide versatile, durable, and visually appealing signboards designed to amplify your brand identity.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">How Acrylic Signage Can <br> Enhance Your Space?</h2>

        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/acrylic-bangalore3.webp')}}" class="why-card-img-top"
                        alt="Advanced and Competent Appeal">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Advanced and Competent Appeal</h3>
                        <p class="card-text">Using an acrylic sign board adds a contemporary and polished touch to any space. Whether for a commercial office in Bangalore, retail outlet, or residential property, these high-quality signboards exude professionalism. Products like acrylic nameplates and acrylic wall signs offer a sleek appearance that enhances your branding. Their clean design makes them a popular choice for creating a lasting impression.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/acrylic-bangalore4.webp')}}" class="why-card-img-top"
                        alt="Flexible and Customizable Solutions">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Flexible and Customizable Solutions</h3>
                        <p class="card-text">Acrylic is known for its durability and effectiveness, making it an ideal material for display boards and acrylic glow signs. With Brand Signages, you can rely on premium-quality signage solutions. These boards are weather-resistant and low-maintenance, ensuring your signage remains visually appealing and functional for years to come.</p>
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
                            <p class="card-text">Acrylic is known for its durability and effectiveness, making it an ideal material for display boards and acrylic glow signs. With Brand Signages, you can rely on premium-quality signage solutions. These boards are weather-resistant and low-maintenance, ensuring your signage remains visually appealing and functional for years to come.</p>
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
                                    <p class="card-text">Using an acrylic sign board adds a contemporary and polished touch to any space. Whether for a commercial office in Bangalore, retail outlet, or residential property, these high-quality signboards exude professionalism. Products like acrylic nameplates and acrylic wall signs offer a sleek appearance that enhances your branding. Their clean design makes them a popular choice for creating a lasting impression.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/acrylic-bangalore4.webp')}}" class="why-card-img-top"
                                    alt="Flexible and Customizable Solutions">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Flexible and Customizable Solutions</h3>
                                    <p class="card-text">Acrylic signages in Bangalore are flexible and can be tailored to suit your extraordinary needs. From acrylic LED signages to acrylic ACP boards, these solutions serve several executions, consisting of indoor and outdoor usage. Glow sign boards and LED acrylic signs are especially efficient for enterprises seeking to be distinct with glowing displays. General acrylic letters and neon signs can also attach an innovative and bright aspect to your signage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/acrylic-bangalore5.webp')}}" class="why-card-img-top"
                                    alt="Longevity and Durable Quality">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Longevity and Durable Quality</h3>
                                    <p class="card-text">Acrylic is known for its durability and effectiveness, making it an ideal material for display boards and acrylic glow signs. With Brand Signages, you can rely on premium-quality signage solutions. These boards are weather-resistant and low-maintenance, ensuring your signage remains visually appealing and functional for years to come.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         
        </div>
    </div>
</section>


<section class="container py-5">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Types of Acrylic Signage Boards We Deliver</h2>
        </div>

        <div class="col-lg-4">
            <div class="image-container position-relative">
                <img src="{{asset('frontend/Images/acrylic-bangalore6.webp')}}" alt="Acrylic LED Signage" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">Acrylic LED Signage</h5>
                    <p class="text-content">Acrylic LED signages are ideal for generating spectacular displays. These glowing signboards improve observability and are perfect for corporate offices and retail places. Merging acrylic letters with LED acrylic lighting makes sure of a competent appearance that works well indoors and outdoors.</p>
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
                            <p class="text-content">For a tidy and luxurious look, non-backlit acrylic sign boards in Bangalore are an extraordinary preference. These high-quality signage boards are easy yet efficient, making them perfect for branding in corporate offices or as acrylic nameplates.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-bangalore8.webp')}}" alt="Mounted Sign Boards" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Mounted Sign Boards</h5>
                            <p class="text-content">Mounted signage boards are long-lasting and flexible, generally utilized as acrylic wall signs or outdoor displays. These display boards can be tailored to fit any business's requirements, guaranteeing a durable and fashionable signage solution.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-bangalore9.webp')}}" alt="Acrylic 3D Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Acrylic 3D Signs</h5>
                            <p class="text-content">Acrylic 3D signs provide extensiveness and dimension, forming an evident visual influence. These premium quality acrylic signages in Bangalore are ideal for logos or emphasizing particular branding aspects.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/acrylic-bangalore10.webp')}}" alt="Acrylic Logo Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Acrylic Logo Signs</h5>
                            <p class="text-content">Exhibit your brand with traditional acrylic logo signs. Outlined by the best board manufacturers, these glow sign boards improve your organization with sophistication and longevity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Why Choose Brand Signages <br>for Acrylic Sign Boards in Bangalore?</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/acrylic-bangalore11.webp')}}" alt="Acrylic Sign Boards" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                Brand Signages stands out as the best acrylic sign board manufacturer in Bangalore for its premium quality, creative designs, and commitment to customer satisfaction. We emphasize offering high-quality acrylic sign boards that are ideal for organizations seeking to make a lasting impression. Whether you're seeking acrylic LED signage or acrylic wall signs, we provide custom signage designs to meet your requirements.  Our acrylic signage solutions comprise everything from acrylic nameplates to glow sign boards, outlined to improve your brand identity. We utilize modern technology to design acrylic letters and LED acrylic patterns that are long-lasting as well as visually fascinating.
                </p>  
                <p class="brand-description">
                    At Brand Signages, we comprehend that each enterprise requires an exceptional signage solution. Our team toils closely with customers to ensure that their vision converts to reality with premium quality substances like acrylic ACP and neon signs.  With products such as acrylic sign boards, acrylic LED, and outdoor acrylic, we provide flexible alternatives appropriate for indoor and outdoor implementations. Select us for your upcoming project, and discover how our premium acrylic signages can uplift your brand identity.
                </p>
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

<section class="mt-lg-5">
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3" id="gallery-container">
        <h2 class="hero-title">Catalogue</h2>
        
        <!-- First Row -->
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
        
        <!-- Second Row -->
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
</section>

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title">FAQS</h1>

        <div class="faq-item">
            <button class="faq-question">
                Are acrylic signages appropriate for outdoor landscapes?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, acrylic signage in Bangalore is perfect for outdoor usage. Our outdoor acrylic products, comprising acrylic LED signages and ACP sign boards, are weather-proof and long-lasting, making them ideal for all sorts of environmental circumstances.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What diversities of acrylic signage alternatives does Brand Signages provide?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Brand Signages provides a huge collection of acrylic signage alternatives, comprising acrylic sign boards, acrylic wall signs, acrylic name plates, glow sign boards, LED sign boards, and acrylic LED signs. We offer order-made designs to suit your business requirements.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How long can acrylic signage bear environmental circumstances?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Acrylic sign boards are highly persistent and can last for a number of years, even in difficult outdoor situations. Our premium quality acrylic signage is made to bear rough weather, UV rays, and other environmental aspects.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Is any exceptional maintenance needed to maintain acrylic signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Upkeeping acrylic signage boards is simple. Just clean them with a soft cloth and light detergent to keep their appearance like new. No exceptional maintenance is needed.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How fast can Brand Signages provide a traditional acrylic signage order?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We provide instant delivery for traditional acrylic signage orders. According to the design and intricacy, we usually deliver in a few days or a week.</p>
            </div>
        </div>

    </div>
</section>

@endsection