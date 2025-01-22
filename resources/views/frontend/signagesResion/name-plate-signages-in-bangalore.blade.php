@extends('frontend.layout.appLayout')
@section('content')
<style>
    .carousel-caption-custom {
        padding: 32px 64px 32px 64px;
    }

    @media (max-width: 576px) {
        .carousel-section .carousel-item img {
            margin-top: 10px;
        }

        .carousel-caption-custom {
            padding: 15px !important;
        }
    }

    .sefimg-2 {
        height: 442px !important;
        object-fit: cover;

    }

    .sefimg-3 {
        height: 387px !important;
        object-fit: cover;
    }

    .cndimag {

        height: 338px !important;
        object-fit: cover;
    }
</style>

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/new/name-palets-1.webp')}}" alt="Custom Name Plates in Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Custom Name Plates in Bangalore</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Name Plate Makers in Bangalore</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/name-palets-2.webp')}}" alt="Premium name-palets Sign Boards - Brand Signages"
                        class="img-fluid sefimg-2">
                </div>
            </div>

            <div class="col-lg-6">
               
                <p class="brand-description">
                    Seeking for the finest name plate makers in Bangalore? We focus on designing high-class nameplates personalized to your office requirements. From engraved nameplates to luxurious laser-cut designs, our products are built to have a permanent impact.  
                    Our team provides a huge collection of nameplate designs in Bangalore, comprising contemporary stainless steel alternatives and modern wooden house plates perfect for professional landscapes. Whether you require a resistant name plate for your private limited company or a polished alternative for your beginning, we have all for you.  
                    </p>
                <p class="brand-description">
                    We are proud of ourselves for offering inventive solutions. Select from signboards, plate designs, or even exceptional gift items for your commercial partners. Every nameplate is shaped with accuracy to fit your fashion sense and branding.  
                    Our signboards and plates are outlined to improve your office’s professional reflection. With many years of experience, we are one of the most reliable nameplate makers in Bangalore, renowned for our standards and innovation.  
                    Connect with us today to discover our comprehensive range and personalize your ideal name plate in Bangalore. Make the grade with the best handwork and unparalleled service.</p>

            </div>
        </div>
    </div>
</section>




<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Types of Nameplates  </h2>
            <p class="why-text-description">Seeking the ideal nameplate in Bangalore for your office? Discover a range of competent nameplate alternatives provided by the best nameplate makers in Bangalore, comprising Brand Signage. Here are the common types of nameplates to take into account</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-palets-3.webp')}}" class="why-card-img-top"
                        alt="Desk Nameplates">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Desk Nameplates</h3>
                        <p class="card-text">Desk name plates give a feel of masterliness to your workplace. Designed utilizing substances like stainless steel, engraved nameplates, or even laser-cut coatings, these are perfect for personal recognition or post designation. They are glossy, persistent, and made-to-order.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-palets-4.webp')}}" class="why-card-img-top"
                        alt="Wall-Mounted Nameplates">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Wall-Mounted Nameplates</h3>
                        <p class="card-text">Ideal for entrances or office branding, wall-mounted nameplates are an important preference. Whether you require a wooden house plate design or a contemporary plate design, these nameplates make your business to be noticeable.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-palets-5.webp')}}" class="why-card-img-top"
                        alt="Door Nameplates">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Door Nameplates</h3>
                        <p class="card-text">Door nameplates render definite validation for rooms or departments. Select from an array of substances, consisting of stainless steel and acrylic, to suit your style. They are a great selection for private limited offices, improving corporate attraction.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-palets-6.webp')}}" class="why-card-img-top"
                        alt="Sliding Nameplates">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Sliding Nameplates</h3>
                        <p class="card-text">Sliding nameplates are flexible and operational, providing pliability for shared places or meeting rooms. They are attainable in laser-cut or engraved nameplate designs and are ideal for vibrant office atmosphere.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-palets-7.webp')}}" class="why-card-img-top"
                        alt="Digital Nameplates">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Digital Nameplates</h3>
                        <p class="card-text">Attach creativity to your workplace with digital nameplates. These advanced solutions combine effortlessly with technology, making them a distinct alternative for broad-minded businesses.</p>
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
                                <img src="{{asset('frontend/Images/new/name-palets-3.webp')}}" class="why-card-img-top"
                                    alt="Desk Nameplates">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Desk Nameplates</h3>
                                    <p class="card-text">Desk name plates give a feel of masterliness to your workplace. Designed utilizing substances like stainless steel, engraved nameplates, or even laser-cut coatings, these are perfect for personal recognition or post designation. They are glossy, persistent, and made-to-order.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-palets-4.webp')}}" class="why-card-img-top"
                                    alt="Wall-Mounted Nameplates">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Wall-Mounted Nameplates</h3>
                                    <p class="card-text">Ideal for entrances or office branding, wall-mounted nameplates are an important preference. Whether you require a wooden house plate design or a contemporary plate design, these nameplates make your business to be noticeable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-palets-5.webp')}}" class="why-card-img-top"
                                    alt="Door Nameplates">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Door Nameplates</h3>
                                    <p class="card-text">Door nameplates render definite validation for rooms or departments. Select from an array of substances, consisting of stainless steel and acrylic, to suit your style. They are a great selection for private limited offices, improving corporate attraction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-palets-5.webp')}}" class="why-card-img-top"
                                    alt="Door Nameplates">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Door Nameplates</h3>
                                    <p class="card-text">Door nameplates render definite validation for rooms or departments. Select from an array of substances, consisting of stainless steel and acrylic, to suit your style. They are a great selection for private limited offices, improving corporate attraction.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-palets-6.webp')}}" class="why-card-img-top"
                                    alt="Sliding Nameplates">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Sliding Nameplates</h3>
                                    <p class="card-text">Sliding nameplates are flexible and operational, providing pliability for shared places or meeting rooms. They are attainable in laser-cut or engraved nameplate designs and are ideal for vibrant office atmosphere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-palets-7.webp')}}" class="why-card-img-top"
                                    alt="Digital Nameplates">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Digital Nameplates</h3>
                                    <p class="card-text">Attach creativity to your workplace with digital nameplates. These advanced solutions combine effortlessly with technology, making them a distinct alternative for broad-minded businesses.</p>
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
        <h2 class="hero-title">Elevate Your Office Space with Custom Name Plate Designs </h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/name-palets-8.webp')}}" alt="Custom Name Plates in Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Modify Your Office Place with Premium Name Plates</h2>
                <p class="brand-description">
                  <ul>
                    <li>Modify your office place with superior name plate designs in Bangalore outlined to mirror your completism. </li>
                    <li>At Brand Signages, we are known name plate makers in Bangalore, providing products that mix operationality with fashion. </li>
                  </ul>
                </p>
                <h2 class="brand-title">Unique Design</h2>
                    <p class="brand-description">
                       <ul>
                        <li>We emphasize producing unique nameplates that align with your brand recognition. 
                            You can pick out any of these options.</li>
                            <li>Glossy stainless steel coating.</li>
                            <li>Contemporary laser-cut designs.</li>
                            <li>Countless wooden house plates.</li>
                       </ul>
                    </p>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Devotion to Brilliance</h2>
                <p class="brand-description">We guarantee each plate design is exceptional.</p>
                    <h2 class="brand-title">Durable and Reliable</h2>
                <p class="brand-description">
                <ul>
                    <li>Our nameplates are designed from standardized substances to confirm longevity. 
                        It may be any of these:</li>
                    <li>Engraved nameplate for your private limited company.</li>
                    <li>Bold sign boards</li>
                </ul>
                </p>
                <h2 class="brand-title">Made to Resist</h2>
                <p class="brand-description">Our products are made to stand for a very long time. </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/name-palets-9.webp')}}" alt="Custom Name Plates in Bangalore"
                        class="img-fluid sefimg-3">
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/name-palets-10.webp')}}" alt="Custom Name Plates in Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Warranty for Peace of Mind</h2>
                <p class="brand-description">
                <ul>
                    <li>Assured Standards: We symbolize the stand-by of our work, providing security on all our nameplates. </li>
                    <li>Dependability Guaranteed: You can rely on us to render the best nameplate in Bangalore with guaranteed contentment. </li>
                </ul>
                </p>
               <h2 class="brand-title">Make a Permanent Impact</h2>

                    <p class="brand-description">
                    <ul>
                        <li>Promote your office place today with made-to-order alternatives crafted to make an impression. From competent signboards to emotional commercial gift items, our nameplates are ideal for making a perpetual influence. </li>
                        <li>Have faith in our experts for all your nameplate requirements.</li>
                    </ul>
                    </p>

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
                <a href="{{asset('frontend/Images/new/name-palets-11.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                    <img src="{{asset('frontend/Images/new/name-palets-11.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-palets-12.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                    <img src="{{asset('frontend/Images/new/name-palets-12.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-palets-13.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                    <img src="{{asset('frontend/Images/new/name-palets-13.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-palets-14.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                    <img src="{{asset('frontend/Images/new/name-palets-14.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%; height: 195px;">
                </a>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-palets-15.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                    <img src="{{asset('frontend/Images/new/name-palets-15.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-palets-16.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                    <img src="{{asset('frontend/Images/new/name-palets-16.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-palets-17.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                    <img src="{{asset('frontend/Images/new/name-palets-17.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-palets-18.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                    <img src="{{asset('frontend/Images/new/name-palets-18.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">Brand Signage’s delivered a glossy stainless steel name plate for our office. The standard and artistry are unparalleled!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/name-palets-19.webp')}}" alt="Ramesh Kumar" class="client-img">
                            <div>
                                <div class="client-name">Ramesh Kumar</div>
                               
                             
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
                        <p class="card-text testimonial-card-text">“I was intrigued by their exceptional plate designs and competent service. The engraved nameplate for our private limited company is ideal
                        </p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/name-palets-20.webp')}}" alt=" Priya Sharma" class="client-img">
                            <div>
                                <div class="client-name"> Priya Sharma</div>
                                <div class="client-role">Site Supervisor</div>
                               
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
                        <p class="card-text testimonial-card-text">Our company utilizes fire name-palets signs comprising extinguisher signage boards and escape route markers. They have enhanced security and assisted us remain compliant.
                        </p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/name-palets-21.webp')}}" alt="Vikram Jain" class="client-img">
                            <div>
                                <div class="client-name">Vikram Jain</div>
         


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
                        <p class="card-text testimonial-card-text">We placed the order for a wooden house nameplate, and the coating is excellent. Highly suggest Brand Signages for nameplate designs in Bangalore.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/name-palets-22.webp')}}" alt="Anjali Menon" class="client-img">
                            <div>
                                <div class="client-name">Anjali Menon</div>

                               
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
                        <p class="card-text testimonial-card-text">We selected them for name-palets sign boards in Bangalore, and it was the finest resolution. Their signage board solutions are affordable as well as superior quality.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/name-palets-23.webp')}}" alt="Siddharth Rao" class="client-img">
                            <div>
                                <div class="client-name">Siddharth Rao</div>

                                
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
                                    <p class="card-text testimonial-card-text">Brand Signage’s delivered a glossy stainless steel name plate for our office. The standard and artistry are unparalleled!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/name-palets-19.webp')}}" alt="Ramesh Kumar"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Ramesh Kumar</div>
           

                                            
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
                                    <p class="card-text testimonial-card-text">“I was intrigued by their exceptional plate designs and competent service. The engraved nameplate for our private limited company is ideal
                                    </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/name-palets-20.webp')}}" alt=" Priya Sharma"
                                            class="client-img">
                                        <div>
                                            <div class="client-name"> Priya Sharma</div>
                                <div class="client-role">Site Supervisor</div>

                                           
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
                                    <p class="card-text testimonial-card-text">The nameplate makers in Bangalore at Brand Signages provided an excellent laser-cut sign board that has uplifted our office place.
                                    </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/name-palets-21.webp')}}" alt="Vikram Jain"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Vikram Jain</div>

                                           
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
                                    <p class="card-text testimonial-card-text">Our company utilizes fire name-palets signs comprising extinguisher signage boards and escape route markers. They have enhanced security and assisted us remain compliant.
                                    </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/name-palets-21.webp')}}" alt="Vikram Jain"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Vikram Jain</div>


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
                                    <p class="card-text testimonial-card-text">We placed the order for a wooden house nameplate, and the coating is excellent. Highly suggest Brand Signages for nameplate designs in Bangalore.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/name-palets-22.webp')}}" alt="Anjali Menon"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Anjali Menon</div>
                                            
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
                                    <p class="card-text testimonial-card-text">We have exceptional sign boards and personalized gift items for our clients. Their devotion to standard is praiseworthy.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/name-palets-23.webp')}}" alt="Siddharth Rao"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Siddharth Rao</div>

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
                What are the most common substances used for name plates?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The most common substances for nameplate designs in Bangalore comprise of stainless steel, acrylic, wood, and brass. These substances are persistent and provide a professional appearance appropriate for offices and sign boards.</p>
            </div>
        </div>


        <div class="faq-item">
            <button class="faq-question">
                Can name plates be tailored with logos and exceptional designs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, most name plate makers in Bangalore, offer alternatives to tailor plate designs with logos, company names, and exceptional styles. Techniques such as laser cutting and engraving confirm a superior finish.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How do I select the perfect size and style of a nameplate for my office?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Contemplate the reason and location. For an entrance, a larger sign board is perfect. For desks or doors, smaller, polished alternatives such as engraved nameplates or wooden house plates look great.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are there reasonable name plate makers in Bangalore providing standardized designs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, Bangalore has various reasonable providers who render high-class nameplates in Bangalore, integrating reasonability with artistry.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                What is the general lifespan of several types of nameplates?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Substances such as stainless steel and engraved designs can last for more than a decade with the least upkeep, while wooden and acrylic alternatives have slightly shorter lifespans</p>
            </div>
        </div>

    </div>
</section>

@endsection 