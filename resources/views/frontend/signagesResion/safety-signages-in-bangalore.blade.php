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
                <img src="{{asset('frontend/Images/new/safety-1.webp')}}" alt="Safety signages in Bangalore">
                <div class="carousel-caption-custom">
                    <h1>Safety signages in Bangalore</h1>
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
        <h2 class="hero-title">Safety Signage for Construction Sites</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/safety-2.webp')}}" alt="Premium safety Sign Boards - Brand Signages"
                        class="img-fluid sefimg-2">
                </div>
            </div>

            <div class="col-lg-6">
               
                <p class="brand-description">
                    Guaranteeing security at construction plots is essential, and high-class safety signages in Bangalore play an essential part. We offer a huge collection of safety signs outlined to improve workspace security and avert accidents.  Our safety signage boards consist of warning signs, road safety signs, and fire safety signs. These signboards are perfect for focusing on dangers, supporting employees, and ensuring the certainty of abidance safety norms. From extinguisher signage boards to exit signage boards, we provide solutions customized to construction plots.  
                    </p>
                <p class="brand-description">
                    The main providing comprises prohibition signs, escape route signs, and assembly point boards to make sure that everyone is aware of how to remain safe during uncertainties. We also provide extinguisher signs and fighting equipment signs to make firefighting equipment simple to discover.  Whether you require resistant road signs for congested sectors or technicalized safety signage boards for device areas, we have everything for you. Our signs are built of powerful substances and designed with accuracy, guaranteeing they can bear a rough construction atmosphere.  <br>
                    Select Brand Signages for dependable construction signs and safety signages that retain your site safe. Contact us for the ideal safety signages in Bangalore and uplift your safety norms.</p>

            </div>
        </div>
    </div>
</section>




<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">How Safety Signage Creates Safer Environments</h2>
            <p class="why-text-description">Fund high-class safety signage boards to generate a secure, more effective atmosphere.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/safety-3.webp')}}" class="why-card-img-top"
                        alt="Clear Communication of Hazards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Clear Communication of Hazards</h3>
                        <p class="card-text">Safety signages in Bangalore efficiently interact to convey probable hazards. From warning signs to prohibition signs, they guarantee employees and guests are knowledgeable of hazards. At construction plots, construction signs and road safety signs lead the movement and concentrate on risky areas, reducing accidents and minimizing workspace accidents. The exact placement of these sign boards ensures they are effortlessly observable, making them highly efficient.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/safety-4.webp')}}" class="why-card-img-top"
                        alt="Quick Emergency Response">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Quick Emergency Response</h3>
                        <p class="card-text">Emergency safety signs such as exit signage, assembly point boards, and extinguisher signage boards facilitate smooth action during calamities. These signs reveal escape paths, situations of fighting equipment, and sectors for safe assembly, guaranteeing that all are aware of how to react in the event of a fire or other disasters. Transparent safety signages assist avert chaos and save important time during crucial times.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/safety-5.webp')}}" class="why-card-img-top"
                        alt="Compliance and Organization">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Compliance and Organization</h3>
                        <p class="card-text">Exact safety sign boards make certain that your plot abides with rules. Whether it’s a fire safety sign or a road safety sign, arranged signage enhances workflow and security. Trustworthy sign boards from reliable providers assist retain competency and safety, even for big projects by private limited companies. Funding for long-lasting safety signage boards also alleviates long-run replacement expenses.</p>
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
                                <img src="{{asset('frontend/Images/new/safety-3.webp')}}" class="why-card-img-top"
                                    alt="Clear Communication of Hazards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Clear Communication of Hazards</h3>
                                    <p class="card-text">Safety signages in Bangalore efficiently interact to convey probable hazards. From warning signs to prohibition signs, they guarantee employees and guests are knowledgeable of hazards. At construction plots, construction signs and road safety signs lead the movement and concentrate on risky areas, reducing accidents and minimizing workspace accidents. The exact placement of these sign boards ensures they are effortlessly observable, making them highly efficient.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/safety-4.webp')}}" class="why-card-img-top"
                                    alt="Quick Emergency Response">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Quick Emergency Response</h3>
                                    <p class="card-text">Emergency safety signs such as exit signage, assembly point boards, and extinguisher signage boards facilitate smooth action during calamities. These signs reveal escape paths, situations of fighting equipment, and sectors for safe assembly, guaranteeing that all are aware of how to react in the event of a fire or other disasters. Transparent safety signages assist avert chaos and save important time during crucial times.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/safety-5.webp')}}" class="why-card-img-top"
                                    alt="Compliance and Organization">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Compliance and Organization</h3>
                                    <p class="card-text">Exact safety sign boards make certain that your plot abides with rules. Whether it’s a fire safety sign or a road safety sign, arranged signage enhances workflow and security. Trustworthy sign boards from reliable providers assist retain competency and safety, even for big projects by private limited companies. Funding for long-lasting safety signage boards also alleviates long-run replacement expenses.</p>
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
        <h2 class="hero-title">Types of Safety Signs  </h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/safety-7.webp')}}" alt="Safety signages in Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Prohibition Signs</h2>
                <p class="brand-description">
                    Prohibition signs are utilized to constrain particular actions to forbid accidents. These safety signs include messages such as “No Smoking” or “No Entry.” They are critical at construction plots, guaranteeing employees abide by guidelines. Transparent prohibition signs on safety signage boards enhance security and abidance, assisting generate a safer atmosphere for everyone. These signs are compulsory in high-risk areas to avert accidents.</p>
                <h2 class="brand-title">Fire Safety Signs</h2>
                    <p class="brand-description">
                        Fire safety signs help people during disasters. Examples comprise extinguisher signage boards, exit signs, and fighting equipment labels. These sign boards lead people to fire extinguishers, escape routes, and assembly points, guaranteeing prompt and arranged shifting at times of fires. Suitably positioned fire safety signs not only minimize panic but also save lives by giving obvious guidelines during crucial circumstances.</p>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Warning Signs</h2>
                <p class="brand-description">
                    Warning signs emphasize probable risks in particular sectors. They are essential for denoting risks such as “Caution: Wet Floor” or “High Voltage.” These safety signboards are usually used in safety signages in Bangalore and assist in minimizing accidents at workplaces and public places. These signs are shaped with dynamic colors and bold text for seamless observability.</p>
                    <h2 class="brand-title">Hazardous Material Signs</h2>
                <p class="brand-description">
                    Dangerous substance signs determine zones or containers with hazardous materials. These safety signs are crucial at industrial plots to guarantee accurate management and storage. Translucent symbols and bold text on safety signage boards minimize dangers and confirm worker security. These signs are essential for averting mishaps and complying with safety norms.</p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/safety-8.webp')}}" alt="Safety signages in Bangalore"
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
                    <img src="{{asset('frontend/Images/new/safety-9.webp')}}" alt="Safety signages in Bangalore" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Directional Signs</h2>
                <p class="brand-description">
                    Directional signs assist people steer spaces efficiently. Examples comprise road safety signs, exit signage boards, and arrows signifying emergency assembly points. These signboards are important for keeping order in huge sectors such as construction sites or office buildings. By helping individuals to safety, these signs support a well-structured and secure atmosphere.</p>
               
                    <p class="brand-description">
                        Funding in high-class safety signages in Bangalore improves safety and guarantees abidance with norms. Dependable safety signage boards from reliable providers such as Brand Signage provide longevity, transparency, and usefulness, making them an important part of workspace security.</p>

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
                <a href="{{asset('frontend/Images/new/safety-10.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                    <img src="{{asset('frontend/Images/new/safety-10.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/safety-11.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                    <img src="{{asset('frontend/Images/new/safety-11.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/safety-12.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                    <img src="{{asset('frontend/Images/new/safety-12.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/safety-13.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                    <img src="{{asset('frontend/Images/new/safety-13.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%; height: 195px;">
                </a>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/safety-14.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                    <img src="{{asset('frontend/Images/new/safety-14.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/safety-15.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                    <img src="{{asset('frontend/Images/new/safety-15.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/safety-16.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                    <img src="{{asset('frontend/Images/new/safety-16.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/safety-17.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                    <img src="{{asset('frontend/Images/new/safety-17.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">The safety signages in Bangalore we bought from Brand Signage have been superb. Their safety signs assisted us abide by rules, ensuring the security of all our employees.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/safety-18.webp')}}" alt="Rajesh Kumar" class="client-img">
                            <div>
                                <div class="client-name">Rajesh Kumar</div>
                                <div class="client-role">Project Manager, Private Limited</div>
                             
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
                        <p class="card-text testimonial-card-text">We required lucid construction signs for our plot and got exceptional sign boards. The exit signage boards were simple to read, even from a far place.
                        </p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/safety-19.webp')}}" alt="Priya S" class="client-img">
                            <div>
                                <div class="client-name">Priya S</div>
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
                        <p class="card-text testimonial-card-text">Our company utilizes fire safety signs comprising extinguisher signage boards and escape route markers. They have enhanced security and assisted us remain compliant.
                        </p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/safety-20.webp')}}" alt="Naveen Sharma" class="client-img">
                            <div>
                                <div class="client-name">Naveen Sharma</div>
                                <div class="client-role">Facility Manager</div>


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
                        <p class="card-text testimonial-card-text">The road safety signs and prohibition signs which we got have improved our site's security norms. We praise their high-class signage boards.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/safety-21.webp')}}" alt="Ramesh Yadav" class="client-img">
                            <div>
                                <div class="client-name">Ramesh Yadav</div>
                                <div class="client-role">Safety Officer</div>

                               
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
                        <p class="card-text testimonial-card-text">We selected them for safety sign boards in Bangalore, and it was the finest resolution. Their signage board solutions are affordable as well as superior quality.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/safety-22.webp')}}" alt="Anjali Mehta" class="client-img">
                            <div>
                                <div class="client-name">Anjali Mehta</div>
                                <div class="client-role">HR Manager</div>

                                
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
                                    <p class="card-text testimonial-card-text">The safety signages in Bangalore we bought from Brand Signage have been superb. Their safety signs assisted us abide by rules, ensuring the security of all our employees.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/safety-18.webp')}}" alt="Rajesh Kumar"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Rajesh Kumar</div>
                                <div class="client-role">Project Manager, Private Limited</div>

                                            
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
                                    <p class="card-text testimonial-card-text">We required lucid construction signs for our plot and got exceptional sign boards. The exit signage boards were simple to read, even from a far place.
                                    </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/safety-19.webp')}}" alt="Priya S"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Priya S</div>
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
                                    <p class="card-text testimonial-card-text">Our company utilizes fire safety signs comprising extinguisher signage boards and escape route markers. They have enhanced security and assisted us remain compliant.
                                    </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/safety-20.webp')}}" alt="Naveen Sharma"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Naveen Sharma</div>
                                <div class="client-role">Facility Manager</div>

                                           
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
                                    <p class="card-text testimonial-card-text">Our company utilizes fire safety signs comprising extinguisher signage boards and escape route markers. They have enhanced security and assisted us remain compliant.
                                    </p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/safety-20.webp')}}" alt="Naveen Sharma"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Naveen Sharma</div>
                                <div class="client-role">Facility Manager</div>


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
                                    <p class="card-text testimonial-card-text">The road safety signs and prohibition signs which we got have improved our site's security norms. We praise their high-class signage boards.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/safety-21.webp')}}" alt="Ramesh Yadav"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Ramesh Yadav</div>
                                            <div class="client-role">Safety Officer</div>
                                            
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
                                    <p class="card-text testimonial-card-text">We were intrigued with the safety signage boards we got. The exit signs and assembly point markers are transparent and well-positioned, making our workspace secure.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/safety-22.webp')}}" alt="Anjali Mehta"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Anjali Mehta</div>
                                            <div class="client-role">HR Manager</div>

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
                What are safety signages utilized for?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Safety signages are utilized to convey risks, give directions, and ensure abiding with security rules. They assist guide employees and guests to safety during disasters, by utilizing exit signs, extinguisher signage boards, and assembly points.</p>
            </div>
        </div>


        <div class="faq-item">
            <button class="faq-question">
                What kinds of safety signs are obtainable?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>There are several kinds of safety signs, including warning signs, prohibition signs, fire safety signs, and construction signs. These signs assist warn of probable hazards, constrain insecure actions, and guide uncertain reactions such as escape routes and fighting equipment locations.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are safety sign boards made-to-order?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, sign boards can be made-to-order with particular guidelines, logos, and patterns. Whether you require road safety signs, prohibition signs, or exit signage boards, traditional designs assist in fulfilling the exceptional requirements of your workplace.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can I attain safety signage for my construction plot?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Definitely. You can attain construction signs, fire safety signs, and safety signage boards customized to your site’s needs, ensuring employee security and abiding by rules.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                How long do security signboards persist?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The life cycle of safety signboards is based on the substances used. High-class substances such as stainless steel and laser-cut signs are resistant and persistent to wear, ensuring durable observability.</p>
            </div>
        </div>

    </div>
</section>

@endsection 