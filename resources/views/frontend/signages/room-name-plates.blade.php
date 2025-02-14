@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/new/room-number-1.webp')}}" alt="Prohibition Signs for Workplace Safety">
                <div class="carousel-caption-custom">
                    <h1>Modern Room Number Signs</h1>
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
        <h2 class="hero-title">Premium Room Number Signs for Hotels</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/room-number-2.webp')}}" alt="room-number Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Improve the sophistication and operationality of your hotel with premium room number signs outlined for effortless steerage and fashion. At Brand Signages, we are experts in making contemporary, resistant room name plates and hotel room number plates that depict your brand’s recognition.  Our collection of room number signs comprises tailored patterns to match any decor, from polished stainless steel number plates to simple ADA-compliant braille room signs. Whether you require a fashionable hotel room number sign or a workable door number sign, our solutions ensure transparent observability and attainability for each visitor.  </p>
                <p class="brand-description">
                    Make your hotel door numbers unique with perfectly designed custom room numbers personalized to your extraordinary requirements. From door signs presenting braille signs for general to graceful number plates for luxury, our range provides something for each kind of hotel room.  Feel the ease of number signs that are simple to install, keep, and personalize. With innumerable alternatives for custom room number signs, you can produce an easy blend of operation and elegance.  Explore why our hotel room numbers get good customer reviews for their class and pattern. Update your room signs soon with our classy collection, shaped to leave a persisting impact on each visitor.</p>
               
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Personalize Your Room Number Signs</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/room-number-3.webp')}}" class="why-card-img-top"
                        alt="Enhance Impression">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Enhance Impression</h3>
                        <p class="card-text">Routine room number signs that merge usefulness, attainability, and fashion. At Brand Signages, we provide customized solutions to form extraordinary room name plates and hotel room number plates that match your brand’s individuality.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/room-number-4.webp')}}" class="why-card-img-top"
                        alt="No Mobile Phones Sign">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">No Mobile Phones Sign</h3>
                        <p class="card-text">Our tailored hotel room signs are available in several substances, including shiny stainless steel, contemporary acrylic, and wood coating. In case you require long-lasting door signs for busy sectors or fashionable number plates for a luxury feel, we design solutions that are unique.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/room-number-5.webp')}}" class="why-card-img-top"
                            alt="Inclusive Patterns">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Inclusive Patterns</h3>
                            <p class="card-text">Include braille signs to guarantee extensiveness and fulfill ADA sign norms. Make your hotel room numbers reachable to all visitors.</p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/room-number-6.webp')}}" class="why-card-img-top"
                        alt="Tailored Designs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Tailored Designs</h3>
                        <p class="card-text">From lavish door number signs to operational custom room numbers, each room door sign is crafted carefully. Select from several fonts, colors, and coatings to go with your decor. We make sure it's easy to navigate for guests.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/room-number-7.webp')}}" class="why-card-img-top"
                        alt="All-rounded Utility">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">All-rounded Utility</h3>
                        <p class="card-text">Our signs are perfect for hotel doors, showing translucent door numbers. Improve the all-rounded guest experience. Reform your hotel room number signs soon and make your hotel room an unforgettable go-to place. Let’s make your ideal custom room sign.</p>
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
                                <img src="{{asset('frontend/Images/new/room-number-3.webp')}}" class="why-card-img-top"
                                    alt="Enhance Impression">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Enhance Impression</h3>
                                    <p class="card-text">Routine room number signs that merge usefulness, attainability, and fashion. At Brand Signages, we provide customized solutions to form extraordinary room name plates and hotel room number plates that match your brand’s individuality.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/room-number-4.webp')}}" class="why-card-img-top"
                                    alt="No Mobile Phones Sign">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">No Mobile Phones Sign</h3>
                                    <p class="card-text">Our tailored hotel room signs are available in several substances, including shiny stainless steel, contemporary acrylic, and wood coating. In case you require long-lasting door signs for busy sectors or fashionable number plates for a luxury feel, we design solutions that are unique.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/room-number-5.webp')}}" class="why-card-img-top"
                                    alt="Inclusive Patterns">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Inclusive Patterns</h3>
                                    <p class="card-text">Include braille signs to guarantee extensiveness and fulfill ADA sign norms. Make your hotel room numbers reachable to all visitors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/room-number-5.webp')}}" class="why-card-img-top"
                                    alt="Inclusive Patterns">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Inclusive Patterns</h3>
                                    <p class="card-text">Include braille signs to guarantee extensiveness and fulfill ADA sign norms. Make your hotel room numbers reachable to all visitors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/room-number-6.webp')}}" class="why-card-img-top"
                                    alt="Tailored Designs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Tailored Designs</h3>
                                    <p class="card-text">From lavish door number signs to operational custom room numbers, each room door sign is crafted carefully. Select from several fonts, colors, and coatings to go with your decor. We make sure it's easy to navigate for guests.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/room-number-7.webp')}}" class="why-card-img-top"
                                    alt="All-rounded Utility">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">All-rounded Utility</h3>
                                    <p class="card-text">Our signs are perfect for hotel doors, showing translucent door numbers. Improve the all-rounded guest experience. Reform your hotel room number signs soon and make your hotel room an unforgettable go-to place. Let’s make your ideal custom room sign.</p>
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
        <h2 class="hero-title">Why Choose Brand Signages for Hotel <br>Room Signs?</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/room-number-8.webp')}}" alt="room-number Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Extensive Solutions for Hotel Signage</h2>
                <p class="brand-description">
                    We provide all in all from room number signs to room name plates and hotel room number plates, customized for bathrooms, dining places, and other areas. 
                </p>
                <h2 class="brand-title">Unique and Realistic Designs</h2>
                <p class="brand-description">
                    Our room number signs improve your hotel room’s beauty while making sure that there is clear steerage for guests.
                </p>
                <h2 class="brand-title">Standardized Substances</h2>
                <p class="brand-description">
                    From shiny stainless steel door signs to weather-resistant number plates, we make the best signage solutions.
                </p>
                <h2 class="brand-title">Longevity and Fashion</h2>
                <p class="brand-description">
                    Every room sign and door sign is designed with elegance and made to stand up to deterioration.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">United Room Numbers</h2>
                <p class="brand-description">
                    Our custom room number signs and door number signs guarantee a steady look throughout all sectors of your hotel.
                </p>
                <h2 class="brand-title">Favorable Customer Reviews</h2>
                <p class="brand-description">
                    Visitors and clients appreciate the high-class mastery of our room signs and number plates.  
                </p>
                <h2 class="brand-title">Tailored for Your Brand</h2>
                <p class="brand-description">
                    Generate a permanent impact with custom room number signs, house numbers, and hotel room number plates that depict your brand’s devotion to superiority.  
                </p>
                <p class="brand-description">
                    Select us for your hotel’s room door and door number requirements, and let our standardized room numbers and hotel door signs uplift your guests’ experience!
                </p>
                
                
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/room-number-9.webp')}}" alt="room-number Signages" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>



<section class="why-bg-light-pink py-5" style="background-color: #fff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Bulk Order Room Number Plates Online </h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/room-number-10.webp')}}" class="why-card-img-top"
                        alt="Reasons for Conventional Prohibition Safety Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Reasons for Conventional Prohibition Safety Signs</h3>
                        <p class="card-text">
                            Room number plates are designed for longevity with resistant patterns that ensure lasting durability, fashion with classy alternatives that add an elegant appearance, and reachability with transparent and easily attainable signage solutions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/room-number-11.webp')}}" class="why-card-img-top"
                        alt="Elegant Hotel Room Number Plates">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Elegant Hotel Room Number Plates</h3>
                        <p class="card-text">
                            High-class hotel room number plates are shaped to fulfill the extraordinary needs of your property, featuring shiny stainless steel designs or tailored room name plates personalized to reflect your brand.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/room-number-12.webp')}}" class="why-card-img-top"
                        alt="Inclusive Pattern Alternatives for Each Need">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Inclusive Pattern Alternatives for Each Need</h3>
                        <p class="card-text">
                            Our bulk order options include furnishing each room door with transparent and functional room number signs, incorporating door signs with Braille for inclusivity, and offering ADA-compliant designs or superior finishes to add sophistication to your hotel doors.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/room-number-13.webp')}}" class="why-card-img-top"
                        alt="Customized Solution for Prompt and Efficient Ordering">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Customized Solution for Prompt and Efficient Ordering</h3>
                        <p class="card-text">
                            Our bulk order process offers personalized room signs and door numbers, including custom designs that enhance your hotel's aesthetic appeal. Whether for small inns or large resorts, our hotel room numbers simplify navigation while elevating the guest experience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/room-number-14.webp')}}" class="why-card-img-top"
                        alt="Trusted by Clients">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Trusted by Clients</h3>
                        <p class="card-text text-start">
                            Join countless satisfied clients who have praised our unique number plates and exceptional service through excellent customer reviews. Place your order for hotel room number signs online soon for an effortless, reasonable solution that emphasizes class and fashion.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="signageCarouselNew" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/room-number-10.webp')}}" class="why-card-img-top"
                                    alt="Reasons for Conventional Prohibition Safety Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Reasons for Conventional Prohibition Safety Signs</h3>
                                    <p class="card-text">
                                        Room number plates are designed for longevity with resistant patterns that ensure lasting durability, fashion with classy alternatives that add an elegant appearance, and reachability with transparent and easily attainable signage solutions.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/room-number-11.webp')}}" class="why-card-img-top"
                                    alt="Elegant Hotel Room Number Plates">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Elegant Hotel Room Number Plates</h3>
                                    <p class="card-text">
                                        High-class hotel room number plates are shaped to fulfill the extraordinary needs of your property, featuring shiny stainless steel designs or tailored room name plates personalized to reflect your brand.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/room-number-12.webp')}}" class="why-card-img-top"
                                    alt="Inclusive Pattern Alternatives for Each Need">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Inclusive Pattern Alternatives for Each Need</h3>
                                    <p class="card-text">
                                        Our bulk order options include furnishing each room door with transparent and functional room number signs, incorporating door signs with Braille for inclusivity, and offering ADA-compliant designs or superior finishes to add sophistication to your hotel doors.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/room-number-12.webp')}}" class="why-card-img-top"
                                    alt="Inclusive Pattern Alternatives for Each Need">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Inclusive Pattern Alternatives for Each Need</h3>
                                    <p class="card-text">
                                        Our bulk order options include furnishing each room door with transparent and functional room number signs, incorporating door signs with Braille for inclusivity, and offering ADA-compliant designs or superior finishes to add sophistication to your hotel doors.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/room-number-13.webp')}}" class="why-card-img-top"
                                    alt="Customized Solution for Prompt and Efficient Ordering">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Customized Solution for Prompt and Efficient Ordering</h3>
                                    <p class="card-text">
                                        Our bulk order process offers personalized room signs and door numbers, including custom designs that enhance your hotel's aesthetic appeal. Whether for small inns or large resorts, our hotel room numbers simplify navigation while elevating the guest experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/room-number-14.webp')}}" class="why-card-img-top"
                                    alt="Trusted by Clients">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Trusted by Clients</h3>
                                    <p class="card-text">
                                        Join countless satisfied clients who have praised our unique number plates and exceptional service through excellent customer reviews. Place your order for hotel room number signs online soon for an effortless, reasonable solution that emphasizes class and fashion.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-carousel-controls">
                <button id="prevButtonNew" class="why-carousel-control" type="button" data-bs-target="#signageCarouselNew"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="nextButtonNew" class="why-carousel-control" type="button" data-bs-target="#signageCarouselNew"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="carousel-indicators why-carousel-indicators">
                <button type="button" data-bs-target="#signageCarouselNew" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#signageCarouselNew" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
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
                        <p class="card-text testimonial-card-text">We placed the order for custom room name plates and hotel room number signs for our boutique hotel, and they came to be ideal! The stainless steel number plates were glossy and resistant, making our hotel doors appear shiny and competent. Highly suggested!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/room-number-15.webp')}}" alt="John Miller" class="client-img">
                            <div>
                                <div class="client-name">John Miller</div>
                              
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
                        <p class="card-text testimonial-card-text">The cautiousness to each little thing in the door number signs and braille room signs was extraordinary. Our guests have remarked on how simple it is to use the room doors, and the class reveals a lot about the service. Superb work!</p>

                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/room-number-16.webp')}}" alt="Sophia Clarke" class="client-img">
                            <div>
                                <div class="client-name">Sophia Clarke</div>
                                
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
                        <p class="card-text testimonial-card-text">The hotel room number plates that we bought were definitely what we wanted. The custom room number signs matched our décor entirely and have received good customer reviews from guests. Unique product and service!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/room-number-17.webp')}}" alt="David Brown" class="client-img">
                            <div>
                                <div class="client-name">David Brown</div>
                               
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
                        <p class="card-text testimonial-card-text">Thank you for making such beautiful number signs for our place. From the room number signs to the door signs, all were customized to excellence. Exceptional experience!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/room-number-18.webp')}}" alt="Emma Johnson" class="client-img">
                            <div>
                                <div class="client-name">Emma Johnson</div>
                              
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
                        <p class="card-text testimonial-card-text">The hotel room numbers with ADA signs were a superb preference for our new hotel. The blend of contemporary pattern and reachability was perfect, and the number plates were of premium quality. Highly content!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/room-number-19.webp')}}" alt="Liam Anderson" class="client-img">
                            <div>
                                <div class="client-name">Liam Anderson</div>
                                
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
                                                  <p class="card-text testimonial-card-text">We placed the order for custom room name plates and hotel room number signs for our boutique hotel, and they came to be ideal! The stainless steel number plates were glossy and resistant, making our hotel doors appear shiny and competent. Highly suggested!</p>

                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/room-number-15.webp')}}" alt="John Miller" class="client-img">
                                        <div>
                                            <div class="client-name">John Miller</div>
                                           
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
                                    <p class="card-text testimonial-card-text">The cautiousness to each little thing in the door number signs and braille room signs was extraordinary. Our guests have remarked on how simple it is to use the room doors, and the class reveals a lot about the service. Superb work!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/room-number-16.webp')}}" alt="Sophia Clarke" class="client-img">
                                        <div>
                                            <div class="client-name">Sophia Clarke</div>
                                          
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
                        <p class="card-text testimonial-card-text">The hotel room number plates that we bought were definitely what we wanted. The custom room number signs matched our décor entirely and have received good customer reviews from guests. Unique product and service!</p>
                                   
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/room-number-17.webp')}}" alt="David Brown" class="client-img">
                                        <div>
                                            <div class="client-name">David Brown</div>
                                            
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
                                    <p class="card-text testimonial-card-text">The hotel room number plates that we bought were definitely what we wanted. The custom room number signs matched our décor entirely and have received good customer reviews from guests. Unique product and service!</p>

                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/room-number-17.webp')}}" alt="David Brown" class="client-img">
                                        <div>
                                            <div class="client-name">David Brown</div>
                                         
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
                                    <p class="card-text testimonial-card-text">Thank you for making such beautiful number signs for our place. From the room number signs to the door signs, all were customized to excellence. Exceptional experience!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/room-number-18.webp')}}" alt="Emma Johnson" class="client-img">
                                        <div>
                                            <div class="client-name">Emma Johnson</div>
                                        
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
                                    <p class="card-text testimonial-card-text">The hotel room numbers with ADA signs were a superb preference for our new hotel. The blend of contemporary pattern and reachability was perfect, and the number plates were of premium quality. Highly content!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/room-number-19.webp')}}" alt="Liam Anderson" class="client-img">
                                        <div>
                                            <div class="client-name">Liam Anderson</div>
                                           
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
                <a href="{{asset('frontend/Images/new/room-number-20.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/room-number-20.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/room-number-21.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/room-number-21.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/room-number-22.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/room-number-22.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/room-number-23.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/room-number-23.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/room-number-24.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/room-number-24.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/room-number-25.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/room-number-25.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/room-number-26.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/room-number-26.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/room-number-27.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/room-number-27.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
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
                What are the types of signage products do you offer? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We use standardized substances like acrylic, wood, stainless steel, and aluminum for our room number signs and hotel room number plates. These substances guarantee longevity, beauty, and a superior coating for hotel doors and other places.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I personalize room name plates and room number signs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we provide completely personalizable alternatives for room name plates, custom room numbers, and door signs. You can opt for fonts, colors, sizes, and patterns to suit your hotel room theme and brand recognition.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What are the types of signage products do you offer? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Definitely! We offer braille room signs and ADA signs to make sure that there is reachability for all visitors. These signs are shaped to fulfill regulatory norms while keeping a fashionable look.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you take bulk orders for hotel room signs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we specialize in bulk orders for hotel room number signs, door number signs, and number plates. This is best for large hotels and resorts seeking to maintain consistency and class throughout all room doors.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How do guests appraise your room number plates?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our customer reviews steadily highlight the superb mastery, contemporary patterns, and longevity of our number signs and hotel room numbers. Guests praise the effortless mix of usefulness and fashion.</p>
            </div>
        </div>

    </div>
</section>
@endsection