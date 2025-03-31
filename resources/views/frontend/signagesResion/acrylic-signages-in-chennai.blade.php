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
                <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-1.webp')}}" alt="Hospital Signages in Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Acrylic Signages in Chennai</h1>
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
        <h2 class="hero-title">Uplift Your Branding with Acrylic <br>Sign Board Makers in Chennai</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-2.webp')}}" alt="Premium Hospital Sign Boards - Brand Signages"
                        class="img-fluid sefimg-2">
                </div>
            </div>

            <div class="col-lg-6">
               <h2 class="brand-title">#1 Acrylic Sign Board Makers in Chennai</h2>
                <p class="brand-description">
                    Acrylic sign boards are the most preferred choice for organizations, providing a trendy and sleek look. Whether you're seeking acrylic LED signages to produce an illuminating effect or acrylic nameplates to give a private feel, we have a variety of alternatives to match your requirements. Our acrylic wall signs are ideal for both indoor and outdoor spaces, enhancing observability and professional appeal.
  
                </p>
                <p class="brand-description">
                    Brand Signages is the premier acrylic <a href="{{route('signage_company_in_chennai')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">sign board manufacturers in Chennai</a>, offering premium signage solutions for top companies. From shining acrylic signage to spectacular acrylic LED signage boards, we offer top-quality solutions for every need. We design best-quality and weather-resistant acrylic signs to ensure a lasting performance. 
                </p>
                <p class="brand-description">Our acrylic display alternatives comprise wall-mounted acrylic sign boards, acrylic LED sign boards, and transparent sign boards, which are ideal for using indoor and outdoor spaces. Enhance your branding with high-class acrylic signages in Chennai from Brand Signages. </p>

            </div>
        </div>
    </div>
</section>




<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for Acrylic Signages in Chennai?</h2>
            <p class="why-text-description">When it comes to acrylic signages, we provide the ideal mix of durability, elegance, and craftsmanship to enhance your brand visibility. Our proficient team makes sure that every product is designed with care, utilizing the finest materials, to fulfill your exact requirements. We are proud to provide signage solutions that promote your brand's presence and create a permanent impact. Here’s why we’re the preferred choice for acrylic signages in Chennai:            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-3.webp')}}" class="why-card-img-top"
                        alt="Expert Craftsmanship and Design">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Expert Craftsmanship and Design</h3>
                        <p class="card-text">Our team concentrates on forming acrylic signage with premium artistry. From acrylic LED signages to acrylic name plates, we make sure that each design is glossy, masterly, and customized to your brand.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-4.webp')}}" class="why-card-img-top"
                        alt="High-Quality Materials">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">High-Quality Materials</h3>
                        <p class="card-text">We utilize only the best-quality substances for all our products. Whether you require acrylic wall signs, acrylic signage boards, or acrylic sign boards, we guarantee longevity and durable quality.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-5.webp')}}" class="why-card-img-top"
                        alt="Customization to Fit Your Needs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Customization to Fit Your Needs</h3>
                        <p class="card-text">We comprehend that each enterprise has exceptional needs. Whether it's a glow sign, neon signboard, or acrylic letters, we provide full personalization. From red acrylic to stainless steel, we offer substances that align with your vision.</p>
                    </div>
                </div>
            </div>
       
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-6.webp')}}" class="why-card-img-top"
                        alt="Fast Turnaround Time">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Fast Turnaround Time</h3>
                        <p class="card-text">We consider your time, which is why we provide a prompt production method. You can trust us for instant delivery without adjusting on quality. We apprehend the priority of projects, specifically when you require a sign board or acrylic display for a new place.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-7.webp')}}" class="why-card-img-top"
                        alt="Affordable and Transparent Pricing">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Affordable and Transparent Pricing</h3>
                        <p class="card-text">We offer combative costs for all our products. From led sign boards to letter sign boards, we count on to offer high-class products at reasonable prices. There are no additional charges, and we keep full clarity in all our transactions.</p>
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
                                <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-3.webp')}}" class="why-card-img-top"
                                    alt="Expert Craftsmanship and Design">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Expert Craftsmanship and Design</h3>
                                    <p class="card-text">Our team concentrates on forming acrylic signage with premium artistry. From acrylic LED signages to acrylic name plates, we make sure that each design is glossy, masterly, and customized to your brand.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-4.webp')}}" class="why-card-img-top"
                                    alt="High-Quality Materials">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">High-Quality Materials</h3>
                                    <p class="card-text">We utilize only the best-quality substances for all our products. Whether you require acrylic wall signs, acrylic signage boards, or acrylic sign boards, we guarantee longevity and durable quality.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-5.webp')}}" class="why-card-img-top"
                                    alt="Customization to Fit Your Needs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Customization to Fit Your Needs</h3>
                                    <p class="card-text">We comprehend that each enterprise has exceptional needs. Whether it's a glow sign, neon signboard, or acrylic letters, we provide full personalization. From red acrylic to stainless steel, we offer substances that align with your vision.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-5.webp')}}" class="why-card-img-top"
                                    alt="Customization to Fit Your Needs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Customization to Fit Your Needs</h3>
                                    <p class="card-text">We comprehend that each enterprise has exceptional needs. Whether it's a glow sign, neon signboard, or acrylic letters, we provide full personalization. From red acrylic to stainless steel, we offer substances that align with your vision.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-6.webp')}}" class="why-card-img-top"
                                    alt="Fast Turnaround Time">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Fast Turnaround Time</h3>
                                    <p class="card-text">We consider your time, which is why we provide a prompt production method. You can trust us for instant delivery without adjusting on quality. We apprehend the priority of projects, specifically when you require a sign board or acrylic display for a new place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-7.webp')}}" class="why-card-img-top"
                                    alt="Affordable and Transparent Pricing">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Affordable and Transparent Pricing</h3>
                                    <p class="card-text">We offer combative costs for all our products. From led sign boards to letter sign boards, we count on to offer high-class products at reasonable prices. There are no additional charges, and we keep full clarity in all our transactions.</p>
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
        <h2 class="hero-title">Our Range of Acrylic Signages in Chennai</h2>
        <p class="card-text text-center">We provide a wide range of acrylic signages in Chennai to cater to business-specific needs. Our selection comprises several kinds of acrylic signage that are persistent, tailored, and crafted to improve the presence and beauty of your space. Whether you're seeking a distinctive acrylic sign board or a sober acrylic glow sign, we have something for every requirement. See what services we provide as a leading acrylic sign board manufacturer in Chennai:        </p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-8.webp')}}" alt="Hospital Signages in Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Acrylic LED Signages</h2>
                <p class="brand-description">
                    Sparkle your brand with acrylic LED signages. These LED sign boards give vibrant, translucent observability and are perfect for generating an influential existence in both indoor and outdoor surroundings.
                </p>
                <h2 class="brand-title">Acrylic Name Plates</h2>
                    <p class="brand-description">
                        Make a robust initial impact with acrylic nameplates. Be it for your office or home, these acrylic signage boards attach a sense of brilliance and sophistication.</p>
                <h2 class="brand-title">Acrylic Wall Signs</h2>
                    <p class="brand-description">
                        Our acrylic wall signs are ideal for showcasing your company’s name, instructions, or vital information. These acrylic sign boards are wall mounted, confirming they are noticeable and resistant.
                    </p>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Acrylic Door Signs</h2>
                <p class="brand-description">
                    Support guests with fashionable acrylic door signs. These general signs are built from high-class acrylic and can be personalized to suit your requirements.
                </p>
                <h2 class="brand-title">Acrylic Wayfinding Signages</h2>
               
                <p class="brand-description">
                    Make certain of simple steerage with acrylic wayfinding signages. These signs are outlined to assist people locate their path, and their acrylic sign board coating offers an advanced, tidy look.
                </p>
                <h2 class="brand-title">Acrylic Logo Signages</h2>
                    <p class="brand-description">
                        Exhibit your brand with traditional acrylic logo signages. Created with acrylic letters and stainless steel or red acrylic, these signs are shaped to mirror your company’s exceptional recognition. We also provide alternatives like glow sign boards and LED signage to make your log more distinguished.
                    </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-9.webp')}}" alt="Hospital Signages in Bangalore"
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
                <a href="{{asset('frontend/Images/new/acrylic-signages-in-chennai-15.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-15.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/acrylic-signages-in-chennai-16.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-16.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/acrylic-signages-in-chennai-17.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-17.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/acrylic-signages-in-chennai-18.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-18.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%; height: 195px;">
                </a>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/acrylic-signages-in-chennai-19.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-19.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/acrylic-signages-in-chennai-20.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-20.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/acrylic-signages-in-chennai-21.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-21.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/acrylic-signages-in-chennai-22.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                    <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-22.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">I’m fully content with the acrylic signage we got. The acrylic LED signages that we bought have given a contemporary feel to our office. Highly suggested!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-10.webp')}}" alt="Rajesh Kumar" class="client-img">
                            <div>
                                <div class="client-name">Rajesh Kumar</div>
                             
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
                        <p class="card-text testimonial-card-text">Thank you for the wonderful acrylic nameplates. The standard is top-class, and they are really distinctive. Our office now has a competent look.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-11.webp')}}" alt="Priya Mehta" class="client-img">
                            <div>
                                <div class="client-name">Priya Mehta</div>
                               
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
                        <p class="card-text testimonial-card-text">We placed the order for traditional acrylic wall signs for our outlet, and they are superb. The acrylic sign boards are resistant, and the colors are bright. Ideal for our branding!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-12.webp')}}" alt="Arvind Shah" class="client-img">
                            <div>
                                <div class="client-name">Arvind Shah</div>

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
                        <p class="card-text testimonial-card-text">The acrylic LED sign board which we purchased is just what we needed! The glow sign appears superb at night, and it’s simple to see from a distance.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-13.webp')}}" alt="Anjali Reddy" class="client-img">
                            <div>
                                <div class="client-name">Anjali Reddy</div>
                               
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
                        <p class="card-text testimonial-card-text">We opted for this company for acrylic signages in Chennai and were intrigued by their attention to minute things. The acrylic signage board that we got has made our business unique.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-14.webp')}}" alt="Manish Patil" class="client-img">
                            <div>
                                <div class="client-name">Manish Patil</div>
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
                                    <p class="card-text testimonial-card-text">I’m fully content with the acrylic signage we got. The acrylic LED signages that we bought have given a contemporary feel to our office. Highly suggested!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-10.webp')}}" alt="Rajesh Kumar"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Rajesh Kumar</div>
                                            
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
                                    <p class="card-text testimonial-card-text">Thank you for the wonderful acrylic nameplates. The standard is top-class, and they are really distinctive. Our office now has a competent look.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-11.webp')}}" alt="Priya Mehta"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Priya Mehta</div>
                                           
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
                                    <p class="card-text testimonial-card-text">We placed the order for traditional acrylic wall signs for our outlet, and they are superb. The acrylic sign boards are resistant, and the colors are bright. Ideal for our branding!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-12.webp')}}" alt="Arvind Shah"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Arvind Shah</div>
                                           
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
                                    <p class="card-text testimonial-card-text">We placed the order for traditional acrylic wall signs for our outlet, and they are superb. The acrylic sign boards are resistant, and the colors are bright. Ideal for our branding!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-12.webp')}}" alt="Arvind Shah"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Arvind Shah</div>

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
                                    <p class="card-text testimonial-card-text">Anjali ReddyThe acrylic LED sign board which we purchased is just what we needed! The glow sign appears superb at night, and it’s simple to see from a distance.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-13.webp')}}" alt="Anjali Reddy"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Anjali Reddy</div>
                                            
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
                                    <p class="card-text testimonial-card-text">We opted for this company for acrylic signages in Chennai and were intrigued by their attention to minute things. The acrylic signage board that we got has made our business unique.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/acrylic-signages-in-chennai-14.webp')}}" alt="Manish Patil"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Manish Patil</div>
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
                What types of acrylic signage do you create?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We provide a multiple collection of acrylic signages in Chennai ranging from acrylic name plates and acrylic wall signs to acrylic LED signages, and many other products. Our products are outlined to fulfill your specific requirements.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I personalize the acrylic signage to suit my branding?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we focus on personalization. Whether you require acrylic sign boards, acrylic letters, or red acrylic, we make certain that your acrylic signage board mirrors your brand’s extraordinary trend.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are the acrylic LED signages appropriate for outdoor usage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, our LED sign boards are outlined for both indoor and outdoor sign usage. The led light technology makes sure of observability in several lighting circumstances, making them ideal for business signage.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How resistant are the acrylic sign boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our acrylic sign boards are built from standardized substances such as stainless steel, guaranteeing they are durable and persistent to weather situations. We provide acrylic glow signs for extra longevity and trend.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How quickly can I anticipate my acrylic signage order to be accomplished?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We are proud of ourselves for a fast turnaround time without adjusting to quality. Whether you’re purchasing letter sign boards or acrylic displays, we strive to finish your order quickly and effectively.</p>
            </div>
        </div>

    </div>
</section>

@endsection 