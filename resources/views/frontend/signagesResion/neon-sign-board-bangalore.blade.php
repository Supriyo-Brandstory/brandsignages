@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/neonsign-bangalore1.webp')}}" alt="Neon Light Sign Boards in Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Neon Light Sign Boards in Bangalore</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Custom Neon Signs Bangalore - Neon Signs Boards</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/neonsign-bangalore2.webp')}}" alt="Neon Light Sign Boards in Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    
                    Modify your space with high-spirited and spectacular custom neon signs in Bangalore. Whether it’s for a corporate office, cafe, or retail store, our neon signs bring a 
                    unique charm to any setting. Designed to captivate and enhance visibility, our vibrant signage solutions ensure that your brand or personal space stands out. At Brand Signages, 
                    we specialize in designing and manufacturing high-quality, customized neon light signboards designed to your exact needs. From outdoor neon signs to sleek acrylic neon boards, 
                    our solutions enhance both branding and decor. Our neon glow signboards are perfect for businesses looking to make a statement with eye-catching, fashionable, and durable signage.
                </p>  
                <p class="brand-description">
                    Our neon lights are not just visually appealing but also energy-efficient, long-lasting, and available in a variety of colors and design patterns. Choose from acrylic neon boards, 
                    neon glow signage boards, or custom neon designs to achieve the perfect look for your brand. Whether you need a single sign or bulk orders, we cater to all requirements with precision and excellence.
                    <br>
                    Enhance your signage with the perfect blend of style and functionality. Trust Brand Signages for the best neon sign boards in Bangalore and signage boards that shine brilliantly!
                </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Brand Signages for Neon Light Signs</h2>
            <p class="card-text text-center">We are among the best neon sign board makers in Bangalore. Our solutions comprise everything from <br> glow sign boards to acrylic neon sign boards, personalized to fulfill your particular requirements. Whether it’s a corporate office, retail store, or <br> private place, our neon light signs are the ideal preference for generating permanent influences.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/neonsign-bangalore3.webp')}}" class="why-card-img-top"
                        alt="Energy Efficiency">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Energy Efficiency</h3>
                        <p class="card-text">Our neon signs are designed to utilize modern LED neon technology, providing unique radiance while absorbing the least energy. These neon lights not only minimize electricity expenses but are also sustainable, making them ideal for organizations and houses in the same way.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/neonsign-bangalore4.webp')}}" class="why-card-img-top"
                        alt="Durability">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Durability</h3>
                        <p class="card-text">Made with high-class substances such as acrylic LED and powerful styles, our neon sign boards in Bangalore are created to persist. Whether for indoor utility or as an outdoor neon sign, they confront altering weather circumstances without losing their shine or attraction. You can have faith in our glow signage boards for long-run output.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-md-4">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/neonsign-bangalore5.webp')}}" class="why-card-img-top"
                            alt="2-Year Warranty">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">2-Year Warranty</h3>
                            <p class="card-text">We stick to the standards of our custom neon signs by providing a 2-year warranty. This secures mental peace for our clients, being aware that their neon LED signs and sign boards are approved by dependable support.</p>
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
                                <img src="{{asset('frontend/Images/neonsign-bangalore3.webp')}}" class="why-card-img-top"
                                    alt="Energy Efficiency">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Energy Efficiency</h3>
                                    <p class="card-text">Our neon signs are designed to utilize modern LED neon technology, providing unique radiance while absorbing the least energy. These neon lights not only minimize electricity expenses but are also sustainable, making them ideal for organizations and houses in the same way.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/neonsign-bangalore4.webp')}}" class="why-card-img-top"
                                    alt="Durability">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Durability</h3>
                                    <p class="card-text">Made with high-class substances such as acrylic LED and powerful styles, our neon sign boards in Bangalore are created to persist. Whether for indoor utility or as an outdoor neon sign, they confront altering weather circumstances without losing their shine or attraction. You can have faith in our glow signage boards for long-run output.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/neonsign-bangalore5.webp')}}" class="why-card-img-top"
                                    alt="2-Year Warranty">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">2-Year Warranty</h3>
                                    <p class="card-text">We stick to the standards of our custom neon signs by providing a 2-year warranty. This secures mental peace for our clients, being aware that their neon LED signs and sign boards are approved by dependable support.</p>
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
            <h2 class="display-4 mb-3 why-text-heading">Custom-Made Neon Light Signs for Your Space</h2>
            <p class="card-text text-center">We produce high-class neon lights in Bangalore for all setups. Redesign your place with glow <br> signage shaped just for you!</p>
        </div>

        <div class="col-lg-4">
            <div class="image-container position-relative">
                <img src="{{asset('frontend/Images/neonsign-bangalore6.webp')}}" alt="Neon Signs for Bar" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">Neon Signs for Bar</h5>
                    <p class="text-content">Attach lively energy to your bar with fashionable neon signs in Bangalore. Formulate an embracing environment with regular neon sign boards depicting bold colors and stunning designs.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore7.webp')}}" alt="Neon Lights for Restaurants" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Lights for Restaurants</h5>
                            <p class="text-content">Promote your restaurant’s atmosphere with extraordinary neon lights in Bangalore. Best suited for signage or decor, these custom neon signs in Bangalore give a feel of contemporary elegance to your dining area.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore8.webp')}}" alt="Neon Sign Logo" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Sign Logo</h5>
                            <p class="text-content">Stand aloof with a customized neon sign logo for your brand. Whether for a corporate office or a retail shop, our glow sign boards implant life in your logo in a shining, unforgettable manner.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore9.webp')}}" alt="Neon Sign Party Decor" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Sign Party Decor</h5>
                            <p class="text-content">Spice up your parties with innovative neon LED signs. From birthdays to weddings, our custom neon signs make for memorable party decor that brightens up your festivities.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore10.webp')}}" alt="Neon Signs for Home" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Signs for Home</h5>
                            <p class="text-content">Give individuality to your living area with tailored neon sign boards. Whether for a comfort zone or your entertainment zone, these LED signage pieces are ideal for home decor.</p>
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
            <h2 class="display-4 mb-3 why-text-heading">Customer Testimonial</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none ">
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The custom neon signs in Bangalore we purchased from Brand Signages entirely changed our bar’s ambiance. The lively colors and class are unparalleled, inserting an exceptional and high-spirited environment that fascinates more customers! </p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/neonsign-bangalore11.webp')}}" alt="Ravi S" class="client-img">
                            <div>
                                <div class="client-name">Ravi S</div>
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
                        <p class="card-text testimonial-card-text">I required a neon signboard in Bangalore for my restaurant, got it delivered and it was far ahead of my expectations. The shine and simplicity are mind-blowing, and the sign has become a predominant aspect of our establishment!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/neonsign-bangalore12.webp')}}" alt="Madhuri" class="client-img">
                            <div>
                                <div class="client-name">Madhuri</div>
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
                        <p class="card-text testimonial-card-text">The neon lights in Bangalore we installed at our corporate office appear to be polished and competent. They’re energy-saving and exactly fit our branding requirements, rendering an advanced, luxurious feel to our office place.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/neonsign-bangalore13.webp')}}" alt="Arjun K" class="client-img">
                            <div>
                                <div class="client-name">Arjun K</div>
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
                        <p class="card-text testimonial-card-text">Our wedding decor was improved by eye-catching custom neon signs. The team delivered immense support and were on time, making our auspicious day even more remarkable with customized, shining designs!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/neonsign-bangalore14.webp')}}" alt="Megha P" class="client-img">
                            <div>
                                <div class="client-name">Megha P</div>
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
                        <p class="card-text testimonial-card-text">I bought a glow signage board for my house, and it’s the main attraction of my living space. The contemporary design and alluring shine create the ideal ambiance. Thank you!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/neonsign-bangalore15.webp')}}" alt="Nikhil T" class="client-img">
                            <div>
                                <div class="client-name">Nikhil T</div>
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
                                    <p class="card-text testimonial-card-text">The custom neon signs in Bangalore we purchased from Brand Signages entirely changed our bar’s ambiance. The lively colors and class are unparalleled, inserting an exceptional and high-spirited environment that fascinates more customers! </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore11.webp')}}" alt="Ravi S" class="client-img">
                                        <div>
                                            <div class="client-name">Ravi S</div>
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
                                    <p class="card-text testimonial-card-text">I required a neon signboard in Bangalore for my restaurant, got it delivered and it was far ahead of my expectations. The shine and simplicity are mind-blowing, and the sign has become a predominant aspect of our establishment!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore12.webp')}}" alt="Madhuri" class="client-img">
                                        <div>
                                            <div class="client-name">Madhuri</div>
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
                                    <p class="card-text testimonial-card-text">The neon lights in Bangalore we installed at our corporate office appear to be polished and competent. They’re energy-saving and exactly fit our branding requirements, rendering an advanced, luxurious feel to our office place.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore13.webp')}}" alt="Arjun K" class="client-img">
                                        <div>
                                            <div class="client-name">Arjun K</div>
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
                                    <p class="card-text testimonial-card-text">The neon lights in Bangalore we installed at our corporate office appear to be polished and competent. They’re energy-saving and exactly fit our branding requirements, rendering an advanced, luxurious feel to our office place. <br> <br> </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore13.webp')}}" alt="Arjun K" class="client-img">
                                        <div>
                                            <div class="client-name">Arjun K</div>
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
                                    <p class="card-text testimonial-card-text">Our wedding decor was improved by eye-catching custom neon signs. The team delivered immense support and were on time, making our auspicious day even more remarkable with customized, shining designs!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore14.webp')}}" alt="Megha P" class="client-img">
                                        <div>
                                            <div class="client-name">Megha P</div>
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
                                    <p class="card-text testimonial-card-text">I bought a glow signage board for my house, and it’s the main attraction of my living space. The contemporary design and alluring shine create the ideal ambiance. Thank you!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neonsign-bangalore15.webp')}}" alt="Nikhil T" class="client-img">
                                        <div>
                                            <div class="client-name">Nikhil T</div>
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
                <a href="{{asset('frontend/Images/neon-sign111.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/neon-sign111.webp')}}" class="img-fluid" alt="Neon sign board Bangalore" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neon-sign112.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                <img src="{{asset('frontend/Images/neon-sign112.webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neonsign-bangalore18.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                <img src="{{asset('frontend/Images/neonsign-bangalore18.webp')}}" class="img-fluid" alt="neon sign board Nangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neon-sign113.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                <img src="{{asset('frontend/Images/neon-sign113.webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neon-signs114.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                <img src="{{asset('frontend/Images/neon-signs114.webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neon-signs115.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                <img src="{{asset('frontend/Images/neon-signs115.webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neonsign-bangalore22.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                <img src="{{asset('frontend/Images/neonsign-bangalore22.webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/neonsign-bangalore23.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                <img src="{{asset('frontend/Images/neonsign-bangalore23.webp')}}" class="img-fluid" alt="neon sign board Bangalore"  style="width: 100%;">
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
                What is the normal delivery span for a neon sign order?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The delivery span for neon sign boards in Bangalore generally is between 7-10 business days, based on the personalization and order size.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Is it possible to customize my neon LED signage to fulfill my business requirements?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we provide complete personalization of neon lights to align with your individual business needs, consisting of exceptional shapes, designs, and colors.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What extraordinary acrylic aspects are available when merged with neon signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our acrylic LED neon signs offer a polished finish and resistance. You can opt for lucid or colored acrylic bases for a competent or lively appearance.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I get my company logo and name modified into a general neon sign?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Definitely! We are experts in creating custom neon signs in Bangalore, comprising company logos and names that promote your branding and presence.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you deliver neon sign boards to Kerala for orders given?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we supply neon signs to Kerala and other places. Our team guarantees your glow sign board reaches you safely and securely punctually.At Brand Signages, we aim to offer top-class LED signage solutions customized to your requirements. Reach out to us soon!</p>
            </div>
        </div>

    </div>
</section>
@endsection