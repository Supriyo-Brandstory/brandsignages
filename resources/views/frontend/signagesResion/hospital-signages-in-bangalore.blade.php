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
                <img src="{{asset('frontend/Images/new/hospital-1.webp')}}" alt="Hospital Signages in Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Hospital Signages in Bangalore</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Premium Hospital Sign Boards -<br> Brand Signages</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/hospital-2.webp')}}" alt="Premium Hospital Sign Boards - Brand Signages"
                        class="img-fluid sefimg-2">
                </div>
            </div>

            <div class="col-lg-6">
               
                <p class="brand-description">
                    Sign boards have an important part in promoting the patient experience in hospitals. At our company, we focus on outlining Hospital Signages in Bangalore that are not only operational but also visually attractive. Our skillfulness encloses everything from hospital digital signage to hospital wayfinding signage, ensuring each guest can steer seamlessly.  
                    We comprehend the significance of crystal interaction in healthcare arrangements. Our hospital signage boards are designed accurately, keeping luminosity and persistence in mind. Whether you require entrance **sign boards**, emergency direction signs, or signage boards for inside departments, we provide solutions customized to your hospital's wants.  
                    Our hospital sign boards in Bangalore are outlined utilizing standardized substances and contemporary patterns, generating a competent appearance that lines up with your brand. With our inventive digital signage, hospitals can share immediate updates, proclamations, or directions effortlessly.  
                    
                    </p>
                <p class="brand-description">
                    Allow us to assist your hospital in boosting its reflection and operationality with proficiently shaped sign boards. From wayfinding signage to digital signage, we make certain every board is calculated and influential. Rely on us to render brilliance in hospital signage that brings about a change.Contact us to uplift your hospital's branding with superior hospital signage boards in Bangalore!</p>

            </div>
        </div>
    </div>
</section>




<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Hospital Signages by Use Type</h2>
            <p class="why-text-description">Hospitals need efficient and well-outlined sign boards to support patients and guests effectively. We offer a huge collection of Hospital Signages in Bangalore, customized to serve the exceptional requirements of healthcare accommodations. Our solutions consist ofWith a concentration on class and invention, our hospital signage boards are designed to improve usefulness and appeal. Whether you require custom sign boards or modern digital signage, we are your reliable partner. Contact us soon for superior hospital signage in Bangalore that will bring about a change!</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-3.webp')}}" class="why-card-img-top"
                        alt="Directional Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Directional Signage</h3>
                        <p class="card-text">Directional sign boards confirm that patients and guests locate their path comfortably. These hospital wayfinding signages are judiciously positioned to help people in several departments, wards, or facilities. They alleviate chaos and save time, improving the all-around patient experience.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-4.webp')}}" class="why-card-img-top"
                        alt="Identification Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Identification Signage</h3>
                        <p class="card-text">Our hospital signage boards assist in determining particular sectors like consultation rooms, operation theaters, or emergency wards. These signage boards are simple, competent, and line up with your hospital's branding.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-5.webp')}}" class="why-card-img-top"
                        alt="Informational Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Informational Signage</h3>
                        <p class="card-text">Convey important information efficiently with our informational signage boards. From visiting timings to hospital rules, these hospital sign boards in Bangalore confirm that guests and patients are fully aware.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-6.webp')}}" class="why-card-img-top"
                        alt="Emergency Exits">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Safety and Regulatory Signage</h3>
                        <p class="card-text">Security is of utmost importance in healthcare. Our security and regulatory hospital signage fulfill abidance norms, delivering definite guides for emergency exits, fire safety, and constrained zones.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-7.webp')}}" class="why-card-img-top"
                        alt="Wayfinding Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Wayfinding Signage</h3>
                        <p class="card-text">Our hospital wayfinding signage solutions are crafted to smoothen steerage in large hospital units. These sign boards make it easy to move across the facility hassle-free for all.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/hospital-8.webp')}}" class="why-card-img-top"
                        alt="Emergency Exits">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Hospital Digital Signs</h3>
                        <p class="card-text">Establish communication by moving forward in leaps and bounds with our hospital digital signage solutions. These vibrant depictions offer immediate updates, proclamations, and directions, providing adaptability and contemporary attraction.</p>
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
                                <img src="{{asset('frontend/Images/new/hospital-3.webp')}}" class="why-card-img-top"
                                    alt="Directional Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Directional Signage</h3>
                                    <p class="card-text">Directional sign boards confirm that patients and guests locate their path comfortably. These hospital wayfinding signages are judiciously positioned to help people in several departments, wards, or facilities. They alleviate chaos and save time, improving the all-around patient experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/hospital-4.webp')}}" class="why-card-img-top"
                                    alt="Identification Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Identification Signage</h3>
                                    <p class="card-text">Our hospital signage boards assist in determining particular sectors like consultation rooms, operation theaters, or emergency wards. These signage boards are simple, competent, and line up with your hospital's branding.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/hospital-5.webp')}}" class="why-card-img-top"
                                    alt="Informational Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Informational Signage</h3>
                                    <p class="card-text">Convey important information efficiently with our informational signage boards. From visiting timings to hospital rules, these hospital sign boards in Bangalore confirm that guests and patients are fully aware.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/hospital-6.webp')}}" class="why-card-img-top"
                                    alt="Identification Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Safety and Regulatory Signage</h3>
                                    <p class="card-text">Security is of utmost importance in healthcare. Our security and regulatory hospital signage fulfill abidance norms, delivering definite guides for emergency exits, fire safety, and constrained zones.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/hospital-7.webp')}}" class="why-card-img-top"
                                    alt="Wayfinding Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Wayfinding Signage</h3>
                                    <p class="card-text">Our hospital wayfinding signage solutions are crafted to smoothen steerage in large hospital units. These sign boards make it easy to move across the facility hassle-free for all.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/hospital-8.webp')}}" class="why-card-img-top"
                                    alt="Emergency Exits">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Hospital Digital Signs</h3>
                                    <p class="card-text">Establish communication by moving forward in leaps and bounds with our hospital digital signage solutions. These vibrant depictions offer immediate updates, proclamations, and directions, providing adaptability and contemporary attraction.</p>
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
        <h2 class="hero-title">Why Choose Us for Hospital Signages</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/hospital-9.webp')}}" alt="Hospital Signages in Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Skillfulness in Personalized Sign Boards</h2>
                <p class="brand-description">
                    We design high-class hospital signage in Bangalore that fulfills the exceptional requirements of healthcare accommodation. From hospital wayfinding signage to entry and departmental sign boards, our patterns are useful, resistant, and visually fascinating. Each hospital signage board is tailored to improve steerage and enhance patient experience.</p>
                <h2 class="brand-title">Creative Digital Signage Solutions</h2>
                    <p class="brand-description">
                        Go in advance with our ultra-modern hospital digital signage solutions. These contemporary signage boards offer immediate updates, minimize chaos, and enhance interaction within your hospital. Whether it's exhibiting declarations, room obtainability, or directional support, our digital signage promotes your hospital's productivity and masterliness.</p>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Dependable for Top Hospitals in Bangalore</h2>
                <p class="brand-description">
                    With many years of experience, we are a dependable name for Hospital Sign Boards in Bangalore. Our dedication to class and punctual delivery has converted us to a favorable selection. From indoor to outdoor sign boards, we utilize superior substances to warranty durable outcomes that line up with your hospital's brand</p>
               
                <p class="brand-description">
                    Select us for trustworthy, inventive, and influential hospital signage solutions. Permit us to assist you in producing an effortless landscape for patients, guests, and workers with masterly shaped signage boards. Contact us soon to know more!</p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/hospital-10.webp')}}" alt="Hospital Signages in Bangalore"
                        class="img-fluid sefimg-3">
                </div>
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
                <a href="{{asset('frontend/Images/new/hospital-16.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                    <img src="{{asset('frontend/Images/new/hospital-16.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-17.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                    <img src="{{asset('frontend/Images/new/hospital-17.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-18.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                    <img src="{{asset('frontend/Images/new/hospital-18.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-19.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                    <img src="{{asset('frontend/Images/new/hospital-19.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%; height: 195px;">
                </a>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-20.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                    <img src="{{asset('frontend/Images/new/hospital-20.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-21.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                    <img src="{{asset('frontend/Images/new/hospital-21.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-22.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                    <img src="{{asset('frontend/Images/new/hospital-22.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/hospital-23.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                    <img src="{{asset('frontend/Images/new/hospital-23.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">The hospital signage in Bangalore we purchased from this company is ideal! It’s translucent, advanced, resistant, and assists our patients comfortably locate their path.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/hospital-11.webp')}}" alt="Dr. Rajesh Menon" class="client-img">
                            <div>
                                <div class="client-name">Dr. Rajesh Menon</div>
                             
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
                        <p class="card-text testimonial-card-text">We were overwhelmed by the standard of the hospital wayfinding signage. The pattern is user-centric, the substances are persistent, and the installation was immediate.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/hospital-12.webp')}}" alt="Sneha Gupta" class="client-img">
                            <div>
                                <div class="client-name">Sneha Gupta</div>
                               
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
                        <p class="card-text testimonial-card-text">Their hospital digital signage has modified how we interact with guests. The sign boards are polished, visually attractive, and very efficient for supporting people.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/hospital-13.webp')}}" alt="Priya Sharma" class="client-img">
                            <div>
                                <div class="client-name">Priya Sharma</div>

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
                        <p class="card-text testimonial-card-text">The hospital signage board installed at our chamber is superb! Patients usually compliment how simple it is to steer and locate important departments.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/hospital-14.webp')}}" alt="Dr. Avinash Kulkarni" class="client-img">
                            <div>
                                <div class="client-name">Dr. Avinash Kulkarni</div>
                               
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
                        <p class="card-text testimonial-card-text">We selected them for hospital sign boards in Bangalore, and it was the finest resolution. Their signage board solutions are affordable as well as superior quality.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/hospital-15.webp')}}" alt="Nandini Ramesh" class="client-img">
                            <div>
                                <div class="client-name">Nandini Ramesh</div>
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
                                    <p class="card-text testimonial-card-text">We’ve been using these safety signs
                                        on our construction sites, and they’ve been a game-changer. The materials
                                        are durable, even in harsh weather, and the visibility ensures everyone
                                        stays informed and safe!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/hospital-11.webp')}}" alt="Dr. Rajesh Menon"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Dr. Rajesh Menon</div>
                                            
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
                                    <p class="card-text testimonial-card-text">We were overwhelmed by the standard of the hospital wayfinding signage. The pattern is user-centric, the substances are persistent, and the installation was immediate.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/hospital-12.webp')}}" alt="Sneha Gupta"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Sneha Gupta</div>
                                           
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
                                    <p class="card-text testimonial-card-text">Their hospital digital signage has modified how we interact with guests. The sign boards are polished, visually attractive, and very efficient for supporting people.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/hospital-13.webp')}}" alt="Priya Sharma"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Priya Sharma</div>
                                           
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
                                    <p class="card-text testimonial-card-text">Their hospital digital signage has modified how we interact with guests. The sign boards are polished, visually attractive, and very efficient for supporting people.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/hospital-13.webp')}}" alt="Priya Sharma"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Priya Sharma</div>

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
                                    <p class="card-text testimonial-card-text">The hospital signage board installed at our chamber is superb! Patients usually compliment how simple it is to steer and locate important departments.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/hospital-14.webp')}}" alt="Dr. Avinash Kulkarni"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Dr. Avinash Kulkarni</div>
                                            
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
                                    <p class="card-text testimonial-card-text">We selected them for hospital sign boards in Bangalore, and it was the finest resolution. Their signage board solutions are affordable as well as superior quality.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/hospital-15.webp')}}" alt="Nandini Ramesh"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Nandini Ramesh</div>
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
                What kinds of hospital signages in Bangalore do you provide?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We provide an extensive array of hospital signage solutions, comprising hospital wayfinding signage for lucid steerage, hospital digital signage for immediate interaction, and traditional hospital signage boards customized to improve your facility's organization and patient experience.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Why is hospital wayfinding signage significant?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Hospital wayfinding signage is essential for supporting patients and guests through intricate layouts. Crystalline sign boards reduce chaos, minimize stress, save time, and confirm a simple experience, making hospitals more attainable and easy to operate for all.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you provide digital signage for hospitals?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, our hospital digital signage solutions showcase prompt updates, proclamations, and directions. These digital signage boards promote interaction, match operations, and create a contemporary, effective landscape for workers, patients, and guests alike.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can you generate traditional hospital signage boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Definitely! We emphasize designing customized signage boards, comprising hospital sign boards in Bangalore, outlined to mirror your hospital's extraordinary branding, enhance operationality, and fulfill particular structural and exquisite needs.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What makes your sign boards distinct from others?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our hospital signage boards stand aloof because of their premium resistance, standardized substances, and readable patterns. We focus on transparency, usefulness, and abidance with industry norms to render dependable solutions customized to your hospital's requirements.</p>
            </div>
        </div>

    </div>
</section>

@endsection 