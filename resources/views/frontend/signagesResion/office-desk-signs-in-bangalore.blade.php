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
                <img src="{{asset('frontend/Images/new/desk-1.webp')}}" alt="Office Desk Signs Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Office Desk Signs Bangalore</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Enhance Your Workplace with Office Desk Signs in Bangalore</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/desk-2.webp')}}" alt="Premium desk Sign Boards - Brand Signages"
                        class="img-fluid sefimg-2">
                </div>
            </div>

            <div class="col-lg-6">
               
                <p class="brand-description">
                    An arranged and professional workplace mirrors your company's worth and boosts usefulness. Office desk signs in Bangalore play an essential part in creating a well-organized office space, guaranteeing workers and guests can seamlessly determine people, posts, or departments. These signs attach a sense of professionalism to your office table arrangement and improve all-rounded effectiveness.  <br>
                    We provide a divergence of desk nameplates outlined to fit contemporary office elegance. Whether you require desk plates with names for workers or table name boards for conference rooms, our solutions are customized to your requirements. Select from substances such as stainless steel, Improved Organization, and wood for a long-lasting and fashionable finish.  <br>
                    Made-to-order alternatives permit you to add names, titles, and logos, lining up the design with your brand recognition. These signboards are not just operational but also assist in generating a coordinated and structured landscape.  <br>
                    Our office desk signs in Bangalore are ideal for small organizations, commercial offices, and co-working places. Keeping in mind every minute detail and superior substances, we confirm your desk name plates are distinct while retaining a professional look.  <br>
                    Seeking to uplift your office desk arrangement? Contact us for customized designs and high-class table name boards that make your office space more effective and embracing.
                </p>

            </div>
        </div>
    </div>
</section>




<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Brand Signages for Office Desk Name Plates?   </h2>
            <p class="why-text-description">Opt for Brand Signage for all your office desk signs in Bangalore. Whether you require a polished stainless steel design or a general desk name plate, we ensure a product that improves your office space.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/desk-3.webp')}}" class="why-card-img-top"
                        alt="Custom Designs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Custom Designs</h3>
                        <p class="card-text">We provide a huge collection of custom designs for office desk signs in Bangalore. Whether you require a classic or contemporary appearance, our desk nameplates can be customized to fit your office's fashion and needs. You can also add logos, text, and color schemes that suit your branding.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/desk-4.webp')}}" class="why-card-img-top"
                        alt="High-Class Materials">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">High-Class Materials</h3>
                        <p class="card-text">Our desk plates with names are formed from persistent materials such as stainless steel and superior Improved Organization. These substances ensure that your office desk nameplate is strong, durable, and looks appealing in your office space.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/desk-5.webp')}}" class="why-card-img-top"
                        alt="Prompt Turnaround and Delivery">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Prompt Turnaround and Delivery</h3>
                        <p class="card-text">We comprehend that time is crucial in a busy office atmosphere. Brand Signages provides a quick turnaround time, rendering your table name board within days. We ensure punctual delivery, so your office is prepared with all the essential signage.</p>
                    </div>
                </div>
            </div>
       
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/desk-7.webp')}}" class="why-card-img-top"
                        alt="Reasonable Pricing">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Reasonable Pricing</h3>
                        <p class="card-text">Get high-class office table nameplates at reasonable prices. We consider that professional signboards should be attainable, without compromising on standards. Our pricing is combative, giving you extraordinary worth for your investment.</p>
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
                                <img src="{{asset('frontend/Images/new/desk-3.webp')}}" class="why-card-img-top"
                                    alt="Custom Designs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Custom Designs</h3>
                                    <p class="card-text">Our Custom Designs are easy to understand and comprehensive, assisting individuals immediately find the accommodations. Designed with persistent substances, these signboards attach a professional feel to your office or corporate place in Bangalore.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/desk-4.webp')}}" class="why-card-img-top"
                                    alt="High-Class Materials">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">High-Class Materials</h3>
                                    <p class="card-text">Our desk plates with names are formed from persistent materials such as stainless steel and superior Improved Organization. These substances ensure that your office desk nameplate is strong, durable, and looks appealing in your office space.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/desk-5.webp')}}" class="why-card-img-top"
                                    alt="Prompt Turnaround and Delivery">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Prompt Turnaround and Delivery</h3>
                                    <p class="card-text">We comprehend that time is crucial in a busy office atmosphere. Brand Signages provides a quick turnaround time, rendering your table name board within days. We ensure punctual delivery, so your office is prepared with all the essential signage.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/desk-4.webp')}}" class="why-card-img-top"
                                    alt="High-Class Materials">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">High-Class Materials</h3>
                                    <p class="card-text">Our desk plates with names are formed from persistent materials such as stainless steel and superior Improved Organization. These substances ensure that your office desk nameplate is strong, durable, and looks appealing in your office space.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/desk-5.webp')}}" class="why-card-img-top"
                                    alt="Prompt Turnaround and Delivery">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Prompt Turnaround and Delivery</h3>
                                    <p class="card-text">We comprehend that time is crucial in a busy office atmosphere. Brand Signages provides a quick turnaround time, rendering your table name board within days. We ensure punctual delivery, so your office is prepared with all the essential signage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/desk-6.webp')}}" class="why-card-img-top"
                                    alt="Reasonable Pricing">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Reasonable Pricing</h3>
                                    <p class="card-text">Get high-class office table nameplates at reasonable prices. We consider that professional signboards should be attainable, without compromising on standards. Our pricing is combative, giving you extraordinary worth for your investment.</p>
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
        <h2 class="hero-title">Types of Office Name Plates</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/desk-7.webp')}}" alt="Office Desk Signs Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Nameplates for Workers</h2>
                <p class="brand-description">
                    Customise your office with desk name plates for each staff member. Our office desk signs in Bangalore are built of resistant substances such as stainless steel and Improved Organization, guaranteeing a competent and permanent look. These desk plates with names are ideal for demoralized workers and for maintaining a well-structured office space.
                </p>
                <h2 class="brand-title">Directional Desk Signs</h2>
                    <p class="brand-description">
                        Assist guests steer your office with directional desk signs. These table name boards can be positioned on desks or walls to assist people to several departments or zones. Our office desk signs are transparent and simple to read, making it easier for both employees and guests to locate their route around your office.
                    </p>
                    
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Custom Branding Desk Signs</h2>
                <p class="brand-description">Be proud of your company's brand with custom branding desk signs. These desk plates with names can comprise your company logo, colors, and fonts to give your office desk an exceptional and professional sense. We design these signboards to line up accurately with your commercial identity, generating a coordinated and fashionable appearance for your office space.</p>
                    <h2 class="brand-title">Reusable Desk Signs</h2>
                <p class="brand-description">
                    For pliable and affordable solutions, opt for reusable desk signs. These table name boards can be effortlessly upgraded with new names or titles, making them perfect for offices with altering staff or posts. The stainless steel base guarantees long-run usage, while the detachable name plates provide comfort.
                </p>
                            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/desk-8.webp')}}" alt="Office Desk Signs Bangalore"
                        class="img-fluid sefimg-3">
                </div>
            </div>

        </div>
    </div>
</section>
<section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Benefits of Table Name Boards</h2>
            <p class="card-text text-center">Funding in office desk signs in Bangalore is an efficient method to enhance the operationality and competency of your office. Whether it's for improved organization, a sleek look, or better interaction, desk nameplates are an exclusive solution for any workplace.</p>

        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/desk-9.webp')}}" class="why-card-img-top"
                        alt="Improved Organization">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Improved Organization</h3>
                        <p class="card-text">Table name boards assist in maintaining your office space. By visibly showcasing names and designations, these office desk signs in Bangalore make certain that all are aware of where they fit in. It minimizes chaos and enhances all-rounded office effectiveness, making it simpler for workers and guests to determine the appropriate desks.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/desk-10.webp')}}" class="why-card-img-top"
                        alt="Professional Look">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Professional Look</h3>
                        <p class="card-text">A well-planned desk name plate gives a professional feel to your office desk. Built from standardized substances such as stainless steel, these desk plates with names are glossy, persistent, and make a favorable impact on clients, guests, and employees. A neat, arranged office space with clear signage improves the general office reflection.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-md-4">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/desk-11.webp')}}" class="why-card-img-top"
                            alt="Enhanced Communication">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Enhanced Communication</h3>
                            <p class="card-text">Table name boards enhance communication in the office by evidently showcasing staff names and posts. This assists in addressing coworkers by their posts and generating a more convenient work landscape. Whether it’s a desk plate with a name or a directional sign, these office desk signs make knowledge easily attainable for all in the office.</p>
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
                                <img src="{{asset('frontend/Images/new/desk-9.webp')}}" class="why-card-img-top"
                                    alt="Improved Organization">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Improved Organization</h3>
                                    <p class="card-text">Table name boards assist in maintaining your office space. By visibly showcasing names and designations, these office desk signs in Bangalore make certain that all are aware of where they fit in. It minimizes chaos and enhances all-rounded office effectiveness, making it simpler for workers and guests to determine the appropriate desks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/desk-10.webp')}}" class="why-card-img-top"
                                    alt="Professional Look">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Professional Look</h3>
                                    <p class="card-text">A well-planned desk name plate gives a professional feel to your office desk. Built from standardized substances such as stainless steel, these desk plates with names are glossy, persistent, and make a favorable impact on clients, guests, and employees. A neat, arranged office space with clear signage improves the general office reflection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/desk-11.webp')}}" class="why-card-img-top"
                                    alt="Enhanced Communication">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Enhanced Communication</h3>
                                    <p class="card-text">Table name boards enhance communication in the office by evidently showcasing staff names and posts. This assists in addressing coworkers by their posts and generating a more convenient work landscape. Whether it’s a desk plate with a name or a directional sign, these office desk signs make knowledge easily attainable for all in the office.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <a href="{{asset('frontend/Images/new/desk-12.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                    <img src="{{asset('frontend/Images/new/desk-12.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/desk-13.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                    <img src="{{asset('frontend/Images/new/desk-13.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/desk-14.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                    <img src="{{asset('frontend/Images/new/desk-14.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/desk-15.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                    <img src="{{asset('frontend/Images/new/desk-15.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%; height: 195px;">
                </a>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/desk-16.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                    <img src="{{asset('frontend/Images/new/desk-16.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/desk-17.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                    <img src="{{asset('frontend/Images/new/desk-17.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/desk-23.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                    <img src="{{asset('frontend/Images/new/desk-23.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/desk-24.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                    <img src="{{asset('frontend/Images/new/desk-24.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">“I placed the order for office desk signs in Bangalore for our new office, and the attributes were excellent. The desk nameplates gave a professional feel to our office space. Highly suggested!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/desk-18.webp')}}" alt="Rina Sharma" class="client-img">
                            <div>
                                <div class="client-name">Rina Sharma</div>
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
                        <p class="card-text testimonial-card-text">The desk plate with the name which we bought is ideal for our office desks. The design is polished, and the substance is resistant. Superb value for money!
                        </p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/desk-19.webp')}}" alt=" Arun Patel" class="client-img">
                            <div>
                                <div class="client-name"> Arun Patel</div>
                                <div class="client-role">Operations Director</div>

                               
                               
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
                        <p class="card-text testimonial-card-text">We required evident table name boards for our office, and these suit ideally. The stainless steel coating gives an advanced appearance to our office desk, and they’re very simple to maintain.
                        </p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/desk-20.webp')}}" alt="Priya Mehta" class="client-img">
                            <div>
                                <div class="client-name">Priya Mehta</div>
                                <div class="client-role">Marketing Head</div>
         


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
                        <p class="card-text testimonial-card-text">“Brand Signages delivered wonderful service. The office desk signs were supplied on time and the design we visualized was streamlined. They genuinely modified our office space.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/desk-21.webp')}}" alt="Rahul Joshi" class="client-img">
                            <div>
                                <div class="client-name">Rahul Joshi</div>
                                <div class="client-role">CEO</div>


                               
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
                        <p class="card-text testimonial-card-text">The desk name plates are durable and look wonderful in our office. We selected the custom branding alternatives, and the result was intriguing. Absolutely a good investment for our office desk space.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/desk-22.webp')}}" alt="Neha Gupta" class="client-img">
                            <div>
                                <div class="client-name">Neha Gupta</div>
                                <div class="client-role">Project Manager</div>


                                
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
                                    <p class="card-text testimonial-card-text">“I placed the order for office desk signs in Bangalore for our new office, and the attributes were excellent. The desk nameplates gave a professional feel to our office space. Highly suggested!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/desk-18.webp')}}" alt="Rina Sharma"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Rina Sharma</div>
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
                                    <p class="card-text testimonial-card-text">We required unisex restroom signs for our co-working area, and Brand Signages did a splendid job. The product details were spot on, the design was advanced, and the standard was wonderful.
                                    </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/desk-19.webp')}}" alt=" Arun Patel"
                                            class="client-img">
                                        <div>
                                            <div class="client-name"> Arun Patel</div>
                                <div class="client-role">Operations Director</div>

                                           
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
                                    <p class="card-text testimonial-card-text">We required evident table name boards for our office, and these suit ideally. The stainless steel coating gives an advanced appearance to our office desk, and they’re very simple to maintain.
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/desk-20.webp')}}" alt="Priya Mehta"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Priya Mehta</div>
                                            <div class="client-role">Marketing Head</div>


                                           
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
                                    <p class="card-text testimonial-card-text">We required evident table name boards for our office, and these suit ideally. The stainless steel coating gives an advanced appearance to our office desk, and they’re very simple to maintain.
                                    </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/desk-20.webp')}}" alt="Priya Mehta"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Priya Mehta</div>
                                <div class="client-role">Marketing Head</div>



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
                                    <p class="card-text testimonial-card-text">“Brand Signages delivered wonderful service. The office desk signs were supplied on time and the design we visualized was streamlined. They genuinely modified our office space.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/desk-21.webp')}}" alt="Rahul Joshi"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Rahul Joshi</div>
                                            <div class="client-role">CEO</div>

                                            
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
                                    <p class="card-text testimonial-card-text">The desk name plates are durable and look wonderful in our office. We selected the custom branding alternatives, and the result was intriguing. Absolutely a good investment for our office desk space.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/desk-22.webp')}}" alt="Neha Gupta"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Neha Gupta</div>
                                            <div class="client-role">Project Manager</div>

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
                Does Brand Signages provide routine signage solutions for organizations in Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we are experts in providing routine signage solutions for organizations of all sizes. As credible signage makers in Bangalore, we shape sign boards, lead sign boards, and more to fulfill your branding requirements.</p>
            </div>
        </div>


        <div class="faq-item">
            <button class="faq-question">
                Can you render signage installation services throughout Bangalore?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Definitely! We not only produce high-class signage in Bangalore, but we also deliver competent installation services for all kinds of signage boards, comprising outdoor signs, indoor signage, and glow sign boards.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What kinds of substances are utilized for producing resistant and high-class signages?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We utilize the best quality substances such as stainless steel, acrylic signs, and advanced LED displays to ensure longevity and top-class standards in our sign boards.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How can I request a custom design or quote for my signage requirements?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>You can simply contact us to talk about your needs. Whether you require a pylon sign, acrylic sign board, or letter signage, our team will assist you through the method and offer a custom quote.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                What industries do you cater to in your signage solutions?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We serve several industries, consisting of apartments, banks, restaurants, hospitals, and corporate offices, rendering customized signage designs for each requirement.</p>
            </div>
        </div>

    </div>
</section>

@endsection 
