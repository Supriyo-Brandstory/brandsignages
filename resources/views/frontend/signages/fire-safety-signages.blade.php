@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/safety-signages-1.webp')}}" alt="Bestseller Fire Safety Signages">
                <div class="carousel-caption-custom">
                    <h1>Bestseller Fire Safety Signages</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Significance of Fire Safety Signage</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/safety-signages-2.webp')}}" alt="Fire Safety Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Fire safety signage is critical in guaranteeing workspace security and alleviating risks during urgent situations. Easy-to-understand safety signs help workers and visitors, boosting efficient clearance and minimizing disorder. Well-positioned emergency exit door signs, fire safety sign boards, and fire extinguisher signage lead people toward escape routes, assembly points, and safe conditions, retaining precious time during problematic circumstances.</p>
                <p class="brand-description">
                    In abiding with legal norms, safety signs like action signs, warning signs, and equipment signs improve readiness by spotlighting the situation of fire-fighting equipment such as hose reels, dry risers, and ABC powder extinguishers. Moreover, fire point signage and prohibition signs assist in averting exploitation and guarantee security protocols are adhered to.
                    An efficient evacuation strategy depends on judicially positioned exit signs, double-sided assembly point signs, and route signs that make sure of its presence from all sides. Composing mandatory signs and emergency sign boards in your workspace promotes a culture of security while clinging to risk assessment and safety training needs.
                    By amalgamating extensive safety equipment and signage boards businesses not only save lives but also illustrate dedication to workstation security and legal abidance.</p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Buy Fire Safety Signs in Different Sizes</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/safety-signages-3.webp')}}" class="why-card-img-top"
                        alt="Collection of Sizes">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Collection of Sizes</h3>
                        <p class="card-text">Make sure of the workspace security with standardized fire safety signage available in different sizes like A4, A3, A1, and many more. In case you require fire extinguisher signage, emergency exit door signs, or fire point signage, we offer all-inclusive solutions customized to fulfill your requirements. Our safety signs are outlined to improve presence and guarantee to abide by safety rules.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/safety-signages-4.webp')}}" class="why-card-img-top"
                        alt="Multilingual Availability">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Multilingual Availability</h3>
                        <p class="card-text">Serving multiple workplaces, we provide signs in several languages, comprising Telugu, Bengali, Hindi, and English. Be it the assembly point signs or the equipment signs, our collection of fire safety sign boards includes alternatives for all industries and environments. Deliberately laid exit signs, route signs, and action notices enhance clearance productivity and reduce risks during uncertainties.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/safety-signages-5.webp')}}" class="why-card-img-top"
                            alt="Extensive Sign Selection">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Extensive Sign Selection</h3>
                            <p class="card-text">Our products also consist of prohibition signs, mandatory signs, and warning signs for particular dangers, together with double-sided signage boards for ultimate visibility. Centralize the situation of fire-fighting equipment like hose reels, dry risers, and ABC powder extinguishers with lucid and long-lasting extinguisher signs.</p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/safety-signages-6.webp')}}" class="why-card-img-top"
                        alt="Easy to Install">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Easy to Install</h3>
                        <p class="card-text">Outlined for simple installation, our safety signages foster safe circumstances, smoothen risk assessments, and improve your work environment’s evacuation plan. Fund in dependable, plurilingual fire safety signs to make sure of a shielded landscape for all.</p>
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
                                <img src="{{asset('frontend/Images/safety-signages-3.webp')}}" class="why-card-img-top"
                                    alt="Collection of Sizes">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Collection of Sizes</h3>
                                    <p class="card-text">Make sure of the workspace security with standardized fire safety signage available in different sizes like A4, A3, A1, and many more. In case you require fire extinguisher signage, emergency exit door signs, or fire point signage, we offer all-inclusive solutions customized to fulfill your requirements. Our safety signs are outlined to improve presence and guarantee to abide by safety rules.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/safety-signages-4.webp')}}" class="why-card-img-top"
                                    alt="Multilingual Availability">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Multilingual Availability</h3>
                                    <p class="card-text">Serving multiple workplaces, we provide signs in several languages, comprising Telugu, Bengali, Hindi, and English. Be it the assembly point signs or the equipment signs, our collection of fire safety sign boards includes alternatives for all industries and environments. Deliberately laid exit signs, route signs, and action notices enhance clearance productivity and reduce risks during uncertainties.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/safety-signages-5.webp')}}" class="why-card-img-top"
                                    alt="Extensive Sign Selection">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Extensive Sign Selection</h3>
                                    <p class="card-text">Our products also consist of prohibition signs, mandatory signs, and warning signs for particular dangers, together with double-sided signage boards for ultimate visibility. Centralize the situation of fire-fighting equipment like hose reels, dry risers, and ABC powder extinguishers with lucid and long-lasting extinguisher signs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/safety-signages-4.webp')}}" class="why-card-img-top"
                                    alt="Multilingual Availability">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Multilingual Availability</h3>
                                    <p class="card-text">Serving multiple workplaces, we provide signs in several languages, comprising Telugu, Bengali, Hindi, and English. Be it the assembly point signs or the equipment signs, our collection of fire safety sign boards includes alternatives for all industries and environments. Deliberately laid exit signs, route signs, and action notices enhance clearance productivity and reduce risks during uncertainties.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/safety-signages-5.webp')}}" class="why-card-img-top"
                                    alt="Extensive Sign Selection">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Extensive Sign Selection</h3>
                                    <p class="card-text">Our products also consist of prohibition signs, mandatory signs, and warning signs for particular dangers, together with double-sided signage boards for ultimate visibility. Centralize the situation of fire-fighting equipment like hose reels, dry risers, and ABC powder extinguishers with lucid and long-lasting extinguisher signs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/safety-signages-6.webp')}}" class="why-card-img-top"
                                    alt="Easy to Install">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Easy to Install</h3>
                                    <p class="card-text">Outlined for simple installation, our safety signages foster safe circumstances, smoothen risk assessments, and improve your work environment’s evacuation plan. Fund in dependable, plurilingual fire safety signs to make sure of a shielded landscape for all.</p>
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

<section class="container py-5">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Why Select Us for Fire Safety Signs</h2>
        </div>

        <div class="col-lg-4">
            <div class="image-container position-relative">
                <img src="{{asset('frontend/Images/safety-signages-7.webp')}}" alt="Wide Range of Collection" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">Wide Range of Collection</h5>
                    <p class="text-content">When it's a matter of fire safety signage, opting for the perfect supplier is essential for your workspace's security. Our huge collection of fire extinguisher signage, emergency exit door signs, fire point signage, etc makes sure that you remain pliable with safety rules while rendering transparent, noticeable support during uncertainties.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/safety-signages-13.webp')}}" alt="Dual-sided Observability" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Dual-sided Observability</h5>
                            <p class="text-content">We provide a diversity of safety signs consisting of exit signs, point signs, action notices, and route signs shaped to boost emergency clearance. Our double-sided signage boards and assembly point signs assist in enhancing observability, making them ideal for indoor as well as outdoor utilization.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/safety-signages-8.webp')}}" alt="Multilingual Alternatives" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Multilingual Alternatives</h5>
                            <p class="text-content">Our devotion to standards stretches to provide multiple choices of safety signages in several languages, including Telugu, Bengali, Hindi, and English. This permits us to fulfill the requirements of workstations with plurilingual staff.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/safety-signages-9.webp')}}" alt="Extensive Product Range" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Extensive Product Range</h5>
                            <p class="text-content">You can rely on us to buy fire-fighting equipment signage like hose reels, dry risers, and ABC powder extinguishers to ensure the appropriate device is easily attainable. Moreover, we offer all mandatory signs, warning signs, and prohibition signs that are critical for retaining a healthy landscape.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/safety-signages-17.webp')}}" alt="Prompt Obtainability" class="w-100" style="height: 273px;">
                        <div class="overlay">
                            <h5 class="text-title">Prompt Obtainability</h5>
                            <p class="text-content">With the help of our products, you can execute an effective evacuation plan, guaranteeing safe conditions and being ready for emergencies with credibility. Shop with us immediately—stay safe, shop smart.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Best Fire Extinguisher Signage</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/safety-signages-11.webp')}}" alt="Fire Safety Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    When it's a matter of fire safety, fire extinguisher signage is indispensable in each building. These signs are essential for helping individuals to the exact location of fire-fighting devices during an uncertainty. Well-outlined fire safety signage, comprising extinguisher signs and fire point signage, guarantees that fire safety equipment is effortlessly recognizable and obtainable.</p>
                <p class="brand-description">
                    The ideal fire extinguisher sign boards are lucid, long-lasting, and extremely presented near fire extinguishers. They cater as action signs, assisting people immediately detect fire-fighting equipment such as ABC powder extinguishers and hose reels. These signs must be positioned on the same side as other safety signs, like emergency exit door signs and clearance path signs, to help people effectively at the time of an emergency evacuation.</p>
                <p class="brand-description">
                    Whether single-sided or double-sided, fire extinguisher signage must be seamlessly seen from divergent angles, subsequently,  make sure that the signage abides by legal necessities and safety norms, comprising transparent directives for emergency exits, assembly points, and escape paths. Periodic risk evaluations must be done to make sure that fire safety signages are the latest, comprising evacuation schemes, extinguisher signs, and assembly point signs. Security equipment signs must always be in the best state, making the building a secure landscape for all inside.</p>
            </div>
        </div>
    </div>
</section>



<section class="mt-lg-5">
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Catalogue</h2>
        
        <!-- First Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/safety-signages-12.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/safety-signages-13.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/safety-signages-14.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/safety-signages-15.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/safety-signages-16.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/safety-signages-17.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/safety-signages-18.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/safety-signages-19.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">We bought fire safety signage for our workplace, and the quality is extraordinary. The exit and extinguisher signs are lucid and simple to comprehend</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/john-d.webp')}}" alt="John D" class="client-img">
                            <div>
                                <div class="client-name">John D</div>
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
                        <p class="card-text testimonial-card-text">The emergency exit door sign and safety sign boards reached us promptly. Great brightness, ideal for our office building's security needs</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/priya.webp')}}" alt="Priya K" class="client-img">
                            <div>
                                <div class="client-name">Priya K</div>
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
                        <p class="card-text testimonial-card-text">We like the diversity of fire point signage and route signs obtainable. They have assisted us in smoothening our evacuation plan and following the safety norms</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/rajesh.webp')}}" alt="Rajesh M" class="client-img">
                            <div>
                                <div class="client-name">Rajesh M</div>
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
                        <p class="card-text testimonial-card-text">The assembly point signs and action notices are very well-shaped. It's promising to be aware that we’re completely ready for an immediate clearance</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/anita.webp')}}" alt="Anita R" class="client-img">
                            <div>
                                <div class="client-name">Anita R</div>
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
                        <p class="card-text testimonial-card-text">The fire-fighting equipment signals, comprising a hose reel and dry riser, are strong and simple to install. These signs assist in maintaining a secure state in our workspace</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/kuntal.webp')}}" alt="Sushant M" class="client-img">
                            <div>
                                <div class="client-name">Kunal S</div>
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
                                    <p class="card-text testimonial-card-text">We bought fire safety signage for our workplace, and the quality is extraordinary. The exit and extinguisher signs are lucid and simple to comprehend</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/john-d.webp')}}" alt="John D" class="client-img">
                                        <div>
                                            <div class="client-name">John D</div>
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
                                    <p class="card-text testimonial-card-text">The emergency exit door sign and safety sign boards reached us promptly. Great brightness, ideal for our office building's security needs</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/priya.webp')}}" alt="Priya K" class="client-img">
                                        <div>
                                            <div class="client-name">Priya K</div>
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
                                    <p class="card-text testimonial-card-text">We like the diversity of fire point signage and route signs obtainable. They have assisted us in smoothening our evacuation plan and following the safety norms</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/rajesh.webp')}}" alt="Rajesh M" class="client-img">
                                        <div>
                                            <div class="client-name">Rajesh M</div>
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
                                    <p class="card-text testimonial-card-text">We like the diversity of fire point signage and route signs obtainable. They have assisted us in smoothening our evacuation plan and following the safety norms</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/rajesh.webp')}}" alt="Rajesh M" class="client-img">
                                        <div>
                                            <div class="client-name">Rajesh M</div>
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
                                    <p class="card-text testimonial-card-text">The assembly point signs and action notices are very well-shaped. It's promising to be aware that we’re completely ready for an immediate clearance</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/anita.webp')}}" alt="Anita R" class="client-img">
                                        <div>
                                            <div class="client-name">Anita R</div>
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
                                    <p class="card-text testimonial-card-text">The fire-fighting equipment signals, comprising a hose reel and dry riser, are strong and simple to install. These signs assist in maintaining a secure state in our workspace</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/kuntal.webp')}}" alt="Sushant M" class="client-img">
                                        <div>
                                            <div class="client-name">Kunal S</div>
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
                What is the reason behind fire safety signage in buildings?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Fire safety signage, like fire extinguisher signage, emergency exit door signs, and evacuation route signs, have a crucial part in supporting occupants to security at the time of a fire. These safety sign boards emphasize fire-fighting devices, emergency exits, and assembly points, guaranteeing immediate and effective evacuation.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are fire safety signs compulsory by law in all workstations?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, fire safety signs are compulsory in many workstations as per domestic fire safety rules. This consists of exit signs, extinguisher signs, and safety equipment signs, which guide to fulfill safety norms and render lucid instructions in uncertainties.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How do fire safety signs assist at the time of an immediate evacuation?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Fire safety signs, such as emergency exit signs, assembly point signs, and evacuation plan sign boards, assist in directing individuals to secure ways and exits. In uncertainties, these visual tips, along with action notices and left/right arrows, prohibit chairs and make sure of prompt evacuation.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What are the various categories of fire safety signs, and what do they imply?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Fire safety signage includes several categories, like warning signs (e.g., fire point signage), compulsory signs (e.g., extinguisher signs), and action signs (e.g., hose reel signs). Every kind caters to a particular reason to support, alert, and guide people during an emergency.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How frequently should fire safety signs be scrutinized or upgraded?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Fire safety signs must be scrutinized periodically, at least yearly, to make sure they stay observable, comprehensible, and applicable. Periodic checks assist in making sure that signs like emergency exits, assembly points, and fire-fighting equipment signs are upgraded and in good state.</p>
            </div>
        </div>

    </div>
</section>

@endsection