@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/new/led-sign-1.webp')}}" alt="LED Sign Board">
                <div class="carousel-caption-custom">
                    <h1>Leading LED Sign Board Manufacturer in Bangalore</h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Custom LED Sign Boards in Bangalore <br>to Keep Your Brand Visible 24/7
        </h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/led-sign-2.webp')}}" alt="LED Sign Board" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Order LED sign boards in Bangalore</h2>
                <p class="brand-description">
                    LED sign boards are designed to provide better visibility around the clock, making them an ideal solution for businesses. Vibrant colors and customizable designs of LED sign boards ensure your brand stands out.  
                </p>
                <p class="brand-description">
                    Brand Signages offers premium LED sign boards in Bangalore for SMEs and top businesses. Our product range includes acrylic LED letter signs, digital LED displays, LED backlit sign boards, and glow sign boards. Every sign board is tailored to exhibit your brand's recognition while guaranteeing energy efficiency and durability.   
                </p>
                    <p class="brand-description">
                    As expert LED display board makers in Bangalore, we integrate modern technology and striking designs to create signages. Whether you require a glow LED sign board for outdoor branding or an acrylic LED sign board for your retail store, we offer solutions that line up with your needs. Opt for Brand Signages for your LED signage 
                    requirements and experience the ideal mix of technology, sophistication, and longevity.
                    </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for LED Sign Boards</h2>
            <p class="card-text text-center">When it's a matter of LED sign boards in Bangalore, we are your dependable associate for superior-quality, endurable, and inventive signage solutions. Here’s why organizations opt for us: </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
           
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/led-sign-3.webp')}}" class="why-card-img-top" alt="Premium Quality LEDs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Premium Quality LEDs</h3>
                        <p class="card-text">Our LED signs are shaped by progressive technology and the best substances, comprising LED glow signs, digital LED signs, and acrylic LED signs. Whether you require a polished display board or a noticeable glow sign board, we supply unique quality that improves your brand’s observability.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/led-sign-4.webp')}}" class="why-card-img-top" alt="2-Year Warranty">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">2-Year Warranty</h3>
                        <p class="card-text">We back up our products with a 2-year warranty, providing you with mental peace. From LED display boards to acrylic sign boards, our signage boards are made to persist, warranting long-run worth for your capital.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/led-sign-5.webp')}}" class="why-card-img-top" alt="Expert Support">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Expert Support</h3>
                        <p class="card-text">Our proficient team provides tailored solutions, from unique designs to installation services. Whether it’s a light signboard or an entire signage system, we support you at every phase, guaranteeing an effortless occurrence.  </p>
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
                                <img src="{{asset('frontend/Images/new/led-sign-3.webp')}}" class="why-card-img-top" alt="Premium Quality LED Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Premium Quality LEDs</h3>
                                    <p class="card-text">Our LED signs in Bangalore are shaped by progressive technology and the best substances, comprising acrylic LED signs, LED glow signs, and digital LED signs. Whether you require a polished display board or a noticeable glow sign board, we supply unique quality that improves your brand’s observability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/led-sign-4.webp')}}" class="why-card-img-top" alt="2-Year Warranty">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">2-Year Warranty</h3>
                                    <p class="card-text">2-Year WarrantyWe back up our products with a 2-year warranty, providing you with mental peace. From LED display boards to acrylic LED sign boards, our signage boards are made to persist, warranting long-run worth for your capital.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/led-sign-5.webp')}}" class="why-card-img-top" alt="Expert Support">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Expert Support</h3>
                                    <p class="card-text">Our proficient team provides tailored solutions, from unique designs to installation services. Whether it’s a light signboard or an entire signage system, we support you at every phase, guaranteeing an effortless occurrence.  </p>
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
            <h2 class="display-4 mb-3 why-text-heading">Types of LED Sign Boards We Make </h2>
            <p class="card-text text-center">Brand Signages offers premium-quality LED sign boards in Bangalore for SMEs and renowned brands. Whether you need indoor or outdoor signage, our LED solutions are designed for maximum visibility, lasting performance, and aesthetic. Here are the types of LED signboards we offer:</p>
        </div>

        <div class="col-lg-4">
            <div class="image-container position-relative">
                <img src="{{asset('frontend/Images/new/led-sign-6.webp')}}" alt="LED Display Board" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">LED Display Board</h5>
                    <p class="text-content">Ideal for displaying real-time information, our LED display boards in Bangalore are perfect for digital messaging, advertisements, and important announcements. These boards are versatile and easy to update, making them a smart choice for branding.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/led-sign-7.webp')}}" alt="LED Glow Sign Board" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">LED Glow Sign Board</h5>
                            <p class="text-content">Our LED glow sign boards are designed to shine brightly, even in low-light conditions. These energy-efficient sign boards are perfect for capturing attention and creating a strong visual presence for your brand.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/led-sign-8.webp')}}" alt="Digital LED Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Digital LED Signs</h5>
                            <p class="text-content">These are perfect for businesses that need instant updates for effective communication. From price displays to event announcements, digital LED signs can be programmed to meet your specific messaging needs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/led-sign-9.webp')}}" alt="Acrylic LED Backlit Boards" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Acrylic LED Backlit Boards</h5>
                            <p class="text-content">Our acrylic LED backlit boards provide a sleek and stylish solution for both indoor and outdoor use. These versatile sign boards come with options like digital LED or neon backlighting, ensuring they align perfectly with your brand's identity.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/new/led-sign-10.webp')}}" alt="Acrylic LED Backlit Boards" class="w-100" style="height: 273px;">
                        <div class="overlay">
                            <h5 class="text-title">Neon Backlit Board</h5>
                            <p class="text-content">For organizations that desire a contemporary yet retro appearance, our neon backlit boards render an exceptional design with lively, remarkable colors. </p>
                        </div>
                    </div>
                </div>
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
                <img src="{{asset('frontend/Images/new/led-sign-25.webp')}}" class="img-fluid" alt="LED sign board manufacturers in Bangalore" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-18.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-18.webp')}}" class="img-fluid" alt="LED sign board manufacturers in Domlur"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-19.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-19.webp')}}" class="img-fluid" alt="LED sign board manufacturers in Bangalore"  style="width: 100%;">
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
                <img src="{{asset('frontend/Images/new/led-sign-21.webp')}}" class="img-fluid" alt="LED sign board manufacturers in Domlur"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-22.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-22.webp')}}" class="img-fluid" alt="LED sign board manufacturers in Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/led-sign-23.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/led-sign-23.webp')}}" class="img-fluid" alt="LED sign board manufacturers in Bangalore"  style="width: 100%;">
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
        <h1 class="faq-title">FAQS</h1>

        <div class="faq-item">
            <button class="faq-question">
                What is the delivery time for a signboard order in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The delivery span for a signboard to any place in Bangalore generally lies between 5 to 7 working days, based on the intricacy of the pattern and order volume.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What kinds of LED signboards are appropriate for use in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We provide a variety of LED signs in Bangalore, comprising LED display boards, glow sign boards, acrylic LED signs, and digital signage boards. These alternatives are ideal for indoor and outdoor utility, certifying ultimate transparency.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are LED sign boards suitable for promoting my organization?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Definitely! LED signboards are highly efficient in promoting your organization, as they are transparent day and night, long-lasting, and energy-saving. They seize awareness and offer lucid information, making them perfect for any enterprise.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Is it feasible to showcase custom images on an LED signboard?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we can generate LED signage boards that showcase traditional images, logos, and messages. Our LED display boards are outlined to be highly adaptable to fit your extraordinary branding requirements.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you render installation services for the LED sign boards you supply?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we provide full installation services for all our LED sign boards in Bangalore. Our competent team ensures that your signage board is installed free from any danger at the location of your preference.</p>
            </div>
        </div>

    </div>
</section>

@endsection