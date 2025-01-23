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
                <img src="{{asset('frontend/Images/restroom-1.webp')}}" alt="Toilet/Restroom Signage In Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Toilet/Restroom Signage In Bangalore</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Enhance Your Space with Professional Restroom Signage</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/restroom-2.webp')}}" alt="Premium name-palets Sign Boards - Brand Signages"
                        class="img-fluid sefimg-2">
                </div>
            </div>

            <div class="col-lg-6">
               
                <p class="brand-description">
                    Seeking for top-class restroom signs in Bangalore? We've all for you! Restroom signages are not just signboards; they guarantee smooth steerage and uplift the professional look of your place. Whether you require unisex restroom signs for extensive places or office restroom signs to maintain setup, we offer the ideal solutions customized to your requirements.  
                    Our signboards are outlined with caution, merging style, transparency, and operationality. Each restroom sign is designed utilizing superior substances to ensure resistance and beautiful attraction. With thorough product descriptions and made-to-order alternatives, you can generate signage that exactly streamlines your space’s pattern and reason.  
                 </p>
                <p class="brand-description">
                    Why opt for us? We emphasize making unisex restroom signs that enhance extensiveness and office restroom signs that maintain competency. Whether you're renewing your office, retail outlet, or any corporate establishment, our restroom signs in Bangalore are the perfect choice to promote your landscape.  
                    <br>
                    Let us assist you make steerage simple and effective for all. Discover our product descriptions, share your needs, and we'll render signage that expresses your brand’s recognition. Modify your place today with exceptional restroom signages that merge usefulness with fashion. Contact us soon!
                </p>

            </div>
        </div>
    </div>
</section>




<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Types of Restroom Signage We Offer   </h2>
            <p class="why-text-description">Each restroom sign is outlined keeping in mind the minute details, guaranteeing transparent communication and elegant attraction. We utilize high-quality substances and offer entire product details to ensure the topmost quality. Our office restroom signs and unisex restroom signs are designed to fulfill multiple needs and uplift any atmosphere.Are you seeking restroom signs in Bangalore? From office restroom signs to unisex restroom signs, we have solutions for each requirement. Contact us soon to discover our product details and modify your place with professional restroom signage!</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/restroom-3.webp')}}" class="why-card-img-top"
                        alt="Male and Female Restroom Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Male and Female Restroom Signs</h3>
                        <p class="card-text">Our male and female restroom signs are easy to understand and comprehensive, assisting individuals immediately find the accommodations. Designed with persistent substances, these signboards attach a professional feel to your office or corporate place in Bangalore. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/restroom-4.webp')}}" class="why-card-img-top"
                        alt="Attainable Restroom Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Attainable Restroom Signage</h3>
                        <p class="card-text">Guarantee extensiveness with our accessible restroom signs. These are outlined to help people with distinct requirements, making your place more embracing and abiding with accessibility norms.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/restroom-5.webp')}}" class="why-card-img-top"
                        alt="Directional Restroom Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Directional Restroom Signage</h3>
                        <p class="card-text">Make steerage effortless with our directional restroom signs. Perfect for big offices, malls, and public places, these signboards simply lead guests to the closest restrooms, ensuring comfort.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/restroom-6.webp')}}" class="why-card-img-top"
                        alt="Unisex Restroom Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Unisex Restroom Signs</h3>
                        <p class="card-text">Our unisex restroom signs boost inclusivity and are perfect for modern offices and establishments. They are carefully outlined to serve multiple requirements while maintaining a professional look. These restroom signs are a topmost preference for organizations in Bangalore.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/restroom-7.webp')}}" class="why-card-img-top"
                        alt="Themed Restroom Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Themed Restroom Signs</h3>
                        <p class="card-text">Give an exceptional feel to your place with themed restroom signs. Whether you like a comic, luxurious, or branded appearance, our tailored signboards line up with your dream and promote the all-rounded ambiance.</p>
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
                                <img src="{{asset('frontend/Images/restroom-3.webp')}}" class="why-card-img-top"
                                    alt="Male and Female Restroom Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Male and Female Restroom Signs</h3>
                                    <p class="card-text">Our male and female restroom signs are easy to understand and comprehensive, assisting individuals immediately find the accommodations. Designed with persistent substances, these signboards attach a professional feel to your office or corporate place in Bangalore.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/restroom-4.webp')}}" class="why-card-img-top"
                                    alt="Attainable Restroom Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Attainable Restroom Signage</h3>
                                    <p class="card-text">Guarantee extensiveness with our accessible restroom signs. These are outlined to help people with distinct requirements, making your place more embracing and abiding with accessibility norms.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/restroom-5.webp')}}" class="why-card-img-top"
                                    alt="Directional Restroom Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Directional Restroom Signage</h3>
                                    <p class="card-text">Make steerage effortless with our directional restroom signs. Perfect for big offices, malls, and public places, these signboards simply lead guests to the closest restrooms, ensuring comfort.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/restroom-5.webp')}}" class="why-card-img-top"
                                    alt="Directional Restroom Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Directional Restroom Signage</h3>
                                    <p class="card-text">Make steerage effortless with our directional restroom signs. Perfect for big offices, malls, and public places, these signboards simply lead guests to the closest restrooms, ensuring comfort.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/restroom-6.webp')}}" class="why-card-img-top"
                                    alt="Unisex Restroom Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Unisex Restroom Signs</h3>
                                    <p class="card-text">Our unisex restroom signs boost inclusivity and are perfect for modern offices and establishments. They are carefully outlined to serve multiple requirements while maintaining a professional look. These restroom signs are a topmost preference for organizations in Bangalore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/restroom-7.webp')}}" class="why-card-img-top"
                                    alt="Themed Restroom Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Themed Restroom Signs</h3>
                                    <p class="card-text">Give an exceptional feel to your place with themed restroom signs. Whether you like a comic, luxurious, or branded appearance, our tailored signboards line up with your dream and promote the all-rounded ambiance.</p>
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
        <h2 class="hero-title">Why Choose Brand Signages for<br> Restroom Signs?</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/restroom-8.webp')}}" alt="Toilet/Restroom Signage In Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Expertise</h2>
                <p class="brand-description">
                    With many years of experience, we focus on producing standardized restroom signs in Bangalore, comprising unisex restroom signs and office restroom signs.
                </p>
                <h2 class="brand-title">Superior Quality</h2>
                    <p class="brand-description">
                        Our signboards are designed from top-class substances, making sure of longevity and a sleek appearance. Every restroom sign is shaped to fulfill your expectations for usefulness and fashion.
                    </p>
                    <h2 class="brand-title">2 Year Warranty</h2>
                    <p class="brand-description">
                        Enjoy a calm state of mind with our dependable warranty on all restroom signs, safeguarding your investment against manufacturing failures. 
                    </p>
                    <h2 class="brand-title">Personalized Solutions</h2>
                    <p class="brand-description">
                         We offer traditional restroom sign alternatives that line up with your exceptional branding and area needs. Share your product descriptions, and we’ll render signage that suits accurately.
                    </p>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Delivery and Installation</h2>
                <p class="brand-description">We concentrate on prompt delivery and competent installation, making certain that your restroom signs are available for usage without any hindrances.  </p>
                    <h2 class="brand-title">Extensive Designs</h2>
                <p class="brand-description">
                    Our unisex restroom signs enhance attainability and extensiveness, making them perfect for contemporary offices and corporate places.  
                </p>
                <h2 class="brand-title">Improved Navigation</h2>
                <p class="brand-description">Our office restroom signs assist workers and guests efficiently, enhancing the all-rounded experience in your accommodation. </p>
                <p class="brand-description">Select Brand Signages for restroom signs in Bangalore that integrate skillfulness, class, and punctual service. Contact us soon to discover product descriptions and get started!</p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/restromm-9.webp')}}" alt="Toilet/Restroom Signage In Bangalore"
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
                <a href="{{asset('frontend/Images/restroom-10.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                    <img src="{{asset('frontend/Images/restroom-10.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/restroom-11.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                    <img src="{{asset('frontend/Images/restroom-11.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/restroom-12.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                    <img src="{{asset('frontend/Images/restroom-12.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/restroom-13.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                    <img src="{{asset('frontend/Images/restroom-13.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%; height: 195px;">
                </a>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/restroom-14.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                    <img src="{{asset('frontend/Images/restroom-14.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/restroom-15.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                    <img src="{{asset('frontend/Images/restroom-15.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/restroom-16.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                    <img src="{{asset('frontend/Images/restroom-16.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/restroom-17.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                    <img src="{{asset('frontend/Images/restroom-17.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
        </div>
    </div>
</section>


   

<section class="testimonial section ">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Customer Testimonial </h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none ">
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">Brand Signages provided the finest restroom signs in Bangalore for our office. Their signboards were translucent, professionally designed, and installed punctually. Highly suggest their services for all your signage requirements!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/restroom-18.webp')}}" alt="Karan S" class="client-img">
                            <div>
                                <div class="client-name">Karan S</div>
                               
                             
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
                        <p class="card-text testimonial-card-text">We required unisex restroom signs for our co-working area, and Brand Signages did a splendid job. The product details were spot on, the design was advanced, and the standard was wonderful.
                        </p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/restroom-19.webp')}}" alt=" Meera D" class="client-img">
                            <div>
                                <div class="client-name"> Meera D</div>
                               
                               
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
                        <p class="card-text testimonial-card-text">Their office restroom signs were far ahead of our expectations. The restroom signs were fashionable, resistant, simple to install, and ideally aligned with our office decor. Excellent customer service all through the process!
                        </p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/restroom-20.webp')}}" alt="Arjun P" class="client-img">
                            <div>
                                <div class="client-name">Arjun P</div>
         


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
                        <p class="card-text testimonial-card-text">We placed the order for themed restroom signs for our cafe, and they attached an extraordinary fascination. The signboards were supplied on time, were innovatively designed, and of high-class quality.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/restroom-21.webp')}}" alt="Sonia R" class="client-img">
                            <div>
                                <div class="client-name">Sonia R</div>

                               
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
                        <p class="card-text testimonial-card-text">Our experience with Brand Signages for restroom signs in Bangalore was exclusive. The unisex restroom signs were cautiously crafted, and inclusive, and assisted us in generating an embracing atmosphere. Attention to each minute detail!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/restroom-22.webp')}}" alt="Rohini T" class="client-img">
                            <div>
                                <div class="client-name">Rohini T</div>

                                
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
                                    <p class="card-text testimonial-card-text">Brand Signages provided the finest restroom signs in Bangalore for our office. Their signboards were translucent, professionally designed, and installed punctually. Highly suggest their services for all your signage requirements!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/restroom-18.webp')}}" alt="Karan S"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Karan S</div>
           

                                            
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
                                    <p class="card-text testimonial-card-text">We required unisex restroom signs for our co-working area, and Brand Signages did a splendid job. The product details were spot on, the design was advanced, and the standard was wonderful.
                                    </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/restroom-19.webp')}}" alt=" Meera D"
                                            class="client-img">
                                        <div>
                                            <div class="client-name"> Meera D</div>
                                

                                           
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
                                    <p class="card-text testimonial-card-text">Their office restroom signs were far ahead of our expectations. The restroom signs were fashionable, resistant, simple to install, and ideally aligned with our office decor. Excellent customer service all through the process!
                                    </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/restroom-21.webp')}}" alt="Arjun P"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Arjun P</div>

                                           
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
                                    <p class="card-text testimonial-card-text">Their office restroom signs were far ahead of our expectations. The restroom signs were fashionable, resistant, simple to install, and ideally aligned with our office decor. Excellent customer service all through the process!
                                    </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/restroom-20.webp')}}" alt="Arjun P"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Arjun P</div>


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
                                    <p class="card-text testimonial-card-text">We placed the order for themed restroom signs for our cafe, and they attached an extraordinary fascination. The signboards were supplied on time, were innovatively designed, and of high-class quality.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/restroom-21.webp')}}" alt="Sonia R"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Sonia R</div>
                                            
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
                                    <p class="card-text testimonial-card-text">Our experience with Brand Signages for restroom signs in Bangalore was exclusive. The unisex restroom signs were cautiously crafted, and inclusive, and assisted us in generating an embracing atmosphere. Attention to each minute detail!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/restroom-22.webp')}}" alt="Rohini T"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Rohini T</div>

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
                What substances are utilized for restroom signage?  
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We utilize high-class substances like acrylic, metal, and wood to design long-lasting and fashionable restroom signs. These substances guarantee the signboard is persistent to wear and tear, maintains its coating with time, and improves the elegant attraction of your place.</p>
            </div>
        </div>


        <div class="faq-item">
            <button class="faq-question">
                Do your restroom signs abide by accessibility norms (e.g., ADA)?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, all our restroom signs are shaped to fulfill ADA compliance and other accessibility norms. This ensures that your facilities are extensive for people with disabilities, offering clear and readable signboards with symbols and braille where required.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I personalize the design of restroom signs for my enterprise?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, of course! We provide fully made-to-order restroom signs in Bangalore. From choosing exceptional shapes to attaching your business logo, we permit you to produce customized designs. Whether you require unisex restroom signs or office restroom signs, we guarantee the signage elevates your branding.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you supply installation services for restroom signage in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we supply back-to-back services, comprising installation, for restroom signs in Bangalore. Our specialists make sure that the signboards are installed properly and in the perfect location, complying to layout and visibility needs.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                How much time does it take to produce and supply restroom signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The time is based on the intricacy of your design. Generally, we finish and deliver restroom signs within 7-10 working days. Immediate orders can also be adjusted upon request.  
                    For more product details or to discuss your needs, contact us soon. Whether you’re modifying your place with office restroom signs or making modern unisex restroom signs, we’re here to assist! </p>
            </div>
        </div>

    </div>
</section>

@endsection 
