@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/digitalsign-bangalore1.webp')}}" alt="Digital Signage Manufacturer in Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Digital Signage Manufacturer in Bangalore</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Elevate Your Brand with Digital Signage Displays</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/digitalsign-bangalore2.webp')}}" alt="Digital Signage Manufacturer in Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Make your brand reach new peaks with digital signage displays that allure and engross your viewers. As prominent digital signage company in Bangalore we offer creative digital signage solutions to fulfill your business requirements. Whether you require a digital standee in Bangalore, a polished touchscreen kiosk, or a lively LED video wall, we have the ideal digital signage solution for you. Our contributions comprise floor-standing signage displays, rectangle digital displays, and LCD digital signage with extraordinary contrast ratios to guarantee that your message is exceptional.
                </p>  
                <p class="brand-description">
                    From digital signage boards, video walls to digital standee, we emphasize best signage displays that match your branding. We also render modern signage software for effortless content creation and handling. Whether it’s a spectacular video wall or a long-lasting floor stand display board, our products render unparalleled standards and output. Select Brand Signage for standardized digital signage displays in Bangalore, outlined to promote your advertising policy. With our inventive LED and digital signage kiosks, your brand will glow blazing throughout any channel. Let us modify your dream into reality with our innovative signage solutions today!
                </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for Digital Signages</h2>
            <p class="card-text text-center">With Brand Signages, a pioneer in digital signage solutions, you get flexible, dependable, and creative signage displays that uplift your marketing scheme seamlessly.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digitalsign-bangalore3.webp')}}" class="why-card-img-top"
                        alt="Easy to Install">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Easy Installation</h3>
                        <p class="card-text">Our digital signage solutions are designed for prompt and trouble-free installation. Whether it’s a digital standee or a touch screen kiosk, the installation procedure is easy and effective. As a reliable digital signage company in Bangalore, we make sure that all digital displays are easily operated and ready to go.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/digitalsign-bangalore4.webp')}}" class="why-card-img-top"
                        alt="Original Packing Screen with Versatile Compatibility">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Original Packing Screen & Compatibility</h3>
                        <p class="card-text">Each digital signage display is available with its standard packaging to guarantee security during transportation. Our signage displays support an array of equipment, comprising CF cards, SD cards, and USB ports, making content movement effortless. This aspect is perfect for generating vibrant advertising displays and engrossing sign boards.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-md-4">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/digitalsign-bangalore5.webp')}}" class="why-card-img-top"
                            alt="liable Design and Standardized Display">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Standardized Display</h3>
                            <p class="card-text">Our digital signage, LED digital signage, and LCD digital signage are formulated for resistance and rendition. Matched with progressive signage software, these displays render high-class contrast ratios and spirited visuals. From video walls to floor-standing display boards, we offer personalized solutions for influential branding.</p>
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
                                <img src="{{asset('frontend/Images/digitalsign-bangalore3.webp')}}" class="why-card-img-top"
                                    alt="Easy to Install">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Easy Installation</h3>
                                    <p class="card-text">Our digital signage solutions are designed for prompt and trouble-free installation. Whether it’s a digital standee or a touch screen kiosk, the installation procedure is easy and effective. As a reliable digital signage company in Bangalore, we make sure that all digital displays are easily operated and ready to go.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digitalsign-bangalore4.webp')}}" class="why-card-img-top"
                                    alt="Original Packing Screen with Versatile Compatibility">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Original Packing Screen & Compatibility</h3>
                                    <p class="card-text">Each digital signage display is available with its standard packaging to guarantee security during transportation. Our signage displays support an array of equipment, comprising CF cards, SD cards, and USB ports, making content movement effortless. This aspect is perfect for generating vibrant advertising displays and engrossing sign boards.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/digitalsign-bangalore5.webp')}}" class="why-card-img-top"
                                    alt="liable Design and Standardized Display">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Standardized Display</h3>
                                    <p class="card-text">Our digital signage, LED digital signage, and LCD digital signage are formulated for resistance and rendition. Matched with progressive signage software, these displays render high-class contrast ratios and spirited visuals. From video walls to floor-standing display boards, we offer personalized solutions for influential branding.</p>
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
            <h2 class="display-4 mb-3 why-text-heading">Industries We Serve</h2>
            <p class="card-text text-center">Brand Signages is a leading digital signage company in Bangalore providing flexible signage <br>solutions tailored to your needs. .</p>
        </div>

        <div class="col-lg-4">
            <div class="image-container position-relative">
                <img src="{{asset('frontend/Images/digitalsign-bangalore6.webp')}}" alt="Retail & BPO" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">Retail & BPO</h5>
                    <p class="text-content">In the retail and BPO areas, digital signage displays assist in producing vibrant advertisements and immediate information notifications. From communicative digital standees Bangalore to lively LED digital signage, organizations can fascinate clients and line up interaction.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digitalsign-bangalore7.webp')}}" alt="Transport Industries" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Transport Industries</h5>
                            <p class="text-content">Transport centers such as airports, bus terminals, and railway stations utilize digital displays for timetables, declarations, and pathfinding. Rectangle digital signage and video walls are extraordinary for rendering transparent and engrossing messages to travelers.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digitalsign-bangalore8.webp')}}" alt="Video Walls" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Outdoor Ads</h5>
                            <p class="text-content">For influential branding and advertising, LED video walls are commonly utilized in malls, stadiums, and commercial occurrences. These wide-ranging signage displays provide unique contrast ratios and realistic illustrations, making them perfect for forming mesmerizing experiences.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digitalsign-bangalore9.webp')}}" alt="Banking" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Banking</h5>
                            <p class="text-content">Banks utilize digital signage solutions for depicting informational offers, strategy updates, and queue management. Sign boards, LCD digital signage, and touch screen kiosks smoothen information distribution, improving customer contentment.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/digitalsign-bangalore10.webp')}}" alt="White Boards for Education" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">White Boards for Education</h5>
                            <p class="text-content">In educational establishments, digital signage boards are enlarged as communicative whiteboards.</p>
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
                        <p class="card-text testimonial-card-text">Brand Signages modified our retail store with their digital signage solutions. The LED digital signage has enhanced customer engagement considerably, making our outlet vibrant and user-friendly. <br> <br> </p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/digitalsign-bangalore11.webp')}}" alt="Amit Sharma" class="client-img">
                            <div>
                                <div class="client-name">Amit Sharma</div>
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
                        <p class="card-text testimonial-card-text">The digital standee Bangalore we bought is glossy, resistant, and easy to operate. It’s ideal for showcasing promotions in our outlet, fascinating more focus from consumers.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/digitalsign-bangalore12.webp')}}" alt="Priya" class="client-img">
                            <div>
                                <div class="client-name">Priya</div>
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
                        <p class="card-text testimonial-card-text">Their digital signage display in Bangalore is first-class. The rectangle digital signage and video walls are lively, competent, and have enhanced all-rounded brand presentation substantially.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/digitalsign-bangalore13.webp')}}" alt="Rahul Gupta" class="client-img">
                            <div>
                                <div class="client-name">Rahul Gupta</div>
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
                        <p class="card-text testimonial-card-text">From sign boards to touch screen kiosks, we got extraordinary signage displays for our transit company, which has considerably impacted the consumer experience and steerage.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/digitalsign-bangalore14.webp')}}" alt="Deepa Iyer" class="client-img">
                            <div>
                                <div class="client-name">Deepa Iyer</div>
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
                        <p class="card-text testimonial-card-text">We’re intrigued with the digital signage software that permits us to handle our advertising displays seamlessly. Genuinely the finest digital signage company in Bangalore, providing dependable and effective solutions.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/digitalsign-bangalore15.webp')}}" alt="Karan Malhotra" class="client-img">
                            <div>
                                <div class="client-name">Karan Malhotra</div>
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
                                    <p class="card-text testimonial-card-text">Brand Signages modified our retail store with their digital signage solutions. The LED digital signage has enhanced customer engagement considerably, making our outlet vibrant and user-friendly. <br> <br> </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/digitalsign-bangalore11.webp')}}" alt="Amit Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Amit Sharma</div>
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
                                    <p class="card-text testimonial-card-text">The digital standee Bangalore we bought is glossy, resistant, and easy to operate. It’s ideal for showcasing promotions in our outlet, fascinating more focus from consumers.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/digitalsign-bangalore12.webp')}}" alt="Priya" class="client-img">
                                        <div>
                                            <div class="client-name">Priya</div>
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
                                    <p class="card-text testimonial-card-text">Their digital signage display in Bangalore is first-class. The rectangle digital signage and video walls are lively, competent, and have enhanced all-rounded brand presentation substantially.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/digitalsign-bangalore13.webp')}}" alt="Rahul Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Rahul Gupta</div>
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
                                    <p class="card-text testimonial-card-text">Their digital signage display in Bangalore is first-class. The rectangle digital signage and video walls are lively, competent, and have enhanced all-rounded brand presentation substantially.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/digitalsign-bangalore13.webp')}}" alt="Rahul Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Rahul Gupta</div>
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
                                    <p class="card-text testimonial-card-text">From sign boards to touch screen kiosks, we got extraordinary signage displays for our transit company, which has considerably impacted the consumer experience and steerage.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/digitalsign-bangalore14.webp')}}" alt="Deepa Iyer" class="client-img">
                                        <div>
                                            <div class="client-name">Deepa Iyer</div>
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
                                    <p class="card-text testimonial-card-text">We’re intrigued with the digital signage software that permits us to handle our advertising displays seamlessly. Genuinely the finest digital signage company in Bangalore, providing dependable and effective solutions.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/digitalsign-bangalore15.webp')}}" alt="Karan Malhotra" class="client-img">
                                        <div>
                                            <div class="client-name">Karan Malhotra</div>
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
                <a href="{{asset('frontend/Images/digitalsign-bangalore16.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/digitalsign-bangalore16.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/digitalsign-bangalore17.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                <img src="{{asset('frontend/Images/digitalsign-bangalore17.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/digitalsign-bangalore18.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                <img src="{{asset('frontend/Images/digitalsign-bangalore18.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/digitalsign-bangalore19.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                <img src="{{asset('frontend/Images/digitalsign-bangalore19.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/digitalsign-bangalore2.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                <img src="{{asset('frontend/Images/digitalsign-bangalore2.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/digitalsign-bangalore21.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                <img src="{{asset('frontend/Images/digitalsign-bangalore21.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/digitalsign-bangalore22.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                <img src="{{asset('frontend/Images/digitalsign-bangalore22.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/digitalsign-bangalore23.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                <img src="{{asset('frontend/Images/digitalsign-bangalore23.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
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
                What are the advantages of utilizing a digital standee for my business in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>A digital standee in Bangalore promotes communication with customers by displaying vibrant content such as proposals and promotions. It’s a reasonable advertising display that grasps awareness in retail, events, or hospitality.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How can a digital signage display in Bangalore enhance customer involvement?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>A digital signage display in Bangalore offers spirited illustrations and prompt updates. Organizations utilize signage displays to dispense promotions, menus, or proclamations, generating an unforgettable experience for clients.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is the standard lifetime of a digital signage system?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Standardized digital signages such as LED digital signage or rectangle digital signage have a standard lifetime of 5-7 years, based on the utility and upkeep.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How do digital signage solutions improve the all-rounded branding of an enterprise?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>By utilizing digital display signage, organizations can put forward steady, high-class illustrations. Made-to-order sign boards and video walls form a competent and advanced brand reflection.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What aspects should I contemplate when selecting a digital signage company?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Seek a dependable digital signage company in Bangalore like Brand Signages. Ponder over aspects such as product quality, support services, signage software empathy, and personalization alternatives.</p>
            </div>
        </div>

    </div>
</section>
@endsection