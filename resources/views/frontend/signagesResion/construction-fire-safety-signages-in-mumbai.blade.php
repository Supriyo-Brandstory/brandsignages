@extends('frontend.layout.appLayout')
@section('content')



<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-1.webp')}}" alt="Construction & Fire Safety signages in Mumbai">
                <div class="carousel-caption-custom">
                    <h1>Construction & Fire Safety signages in Mumbai </h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend/Images/new/hospital-and-medical-signages-in-mumbai-2.webp')}}" alt="Construction & Fire Safety signages in Mumbai">
                <div class="carousel-caption-custom">
                    <h1>Construction & Fire Safety signages in Mumbai </h1>
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
        <h2 class="hero-title">Industrial & Safety Signages  </h2>
        {{-- <p class="card-text text-center">Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.</p> --}}

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-2.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Safety is a primary concern in industrial places, and having the perfect safety signages in Mumbai confirms a safe atmosphere for all. Safety signage boards assist in interacting with critical directives, alerts, and provisions, making them crucial for workspaces. Whether you require construction signs for vigorous plots, fire safety signs for uncertainties or electrical safety notices to avert accidents, these equipment boost consciousness and abidance.  <br>
                    From exit sign boards and emergency exit lights to extinguisher signage, each safety sign plays an essential part in regulating order at times of emergencies. In high-risk sectors, floor safety signs and glow sign boards, provide crystal visual signs, guiding staff and visitors efficiently. Emergency safety characteristics such as exit signage boards and warning signs give important directions during contingencies, while road safety and security notice safety signs guarantee outdoor safeguarding.    
              </p>
              <p class="brand-description">
                Our collection of safety signs in Mumbai comprises persistent LED signs, glow signs, and industrial safety signage boards customized to fulfill several requirements. These sign boards are perfect for warehouses, factories, and construction plots. Comprehensible extinguisher signs and emergency exit signage are essential for fire safety, while tailored signage boards improve work area safety norms.  
                <br>Fund in dependable safety signage in Mumbai to make certain of a safe, well-structured industrial atmosphere.
              </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for Safety Signage Solutions in Mumbai?</h2>
            <p class="card-text text-center">Opt for us for trustworthy safety signages in Mumbai to improve the security and abidance of your accommodation with superior, traditional solutions.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
           
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-4.webp')}}" class="why-card-img-top"
                        alt="Expertise">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Expertise</h3>
                        <p class="card-text">With several years of experience in crafting and installing safety signages in Mumbai, we comprehend the crucial parts of safety signs. Our team of specialists makes sure that all signs fulfill the topmost safety levels for several industries, comprising construction signs, fire safety signs, and industrial safety signs.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-5.webp')}}" class="why-card-img-top"
                            alt="High-Quality Safety Signs">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">High-Quality Safety Signs</h3>
                            <p class="card-text">We offer safety signs in Mumbai that are built from superior substances for long-term durability. Whether it’s a sign board, LED sign, or safety signage board, our signs are made to bear rough atmospheres and confirm clear observability.  </p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-6.webp')}}" class="why-card-img-top"
                        alt="Custom Solutions">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Custom Solutions</h3>
                        <p class="card-text">We apprehend that each enterprise has exceptional safety requirements. We provide custom solutions for exit signage, extinguisher signage, emergency exit lights, and more. Our team labors with you to produce the ideal signage design personalized to your facility’s needs. </p>
                    </div>
                </div>
        </div>
          
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-7.webp')}}" class="why-card-img-top"
                        alt="Compliance with Safety Standards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Compliance with Safety Standards</h3>
                        <p class="card-text">All of our safety signage solutions abide by domestic safety rules and industry norms. Whether you require electrical safety signs, floor safety signs, or warning signs, we make certain that your signs assist your facility remain compliant and secure.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-8.webp')}}" class="why-card-img-top"
                        alt="Durable Materials">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Durable Materials</h3>
                        <p class="card-text">Our sign boards and safety signage boards are built from standardized substances, confirming longevity and opposition to weather circumstances. From glow sign boards to exit sign boards, our signs are crafted to be efficient and durable.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-3.webp')}}" class="why-card-img-top"
                        alt="Professional Installation">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Professional Installation</h3>
                        <p class="card-text"> Our team manages the whole installation method with professionalism and caution. We make sure all signs, comprising emergency exit and exit lights, are installed properly for ultimate safety and existence. </p>
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
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-4.webp')}}" class="why-card-img-top"
                                    alt="Expertise">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Expertise</h3>
                                    <p class="card-text">With several years of experience in crafting and installing safety signages in Mumbai, we comprehend the crucial parts of safety signs. Our team of specialists makes sure that all signs fulfill the topmost safety levels for several industries, comprising construction signs, fire safety signs, and industrial safety signs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-5.webp')}}" class="why-card-img-top"
                                    alt="Aesthetic Appeal">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">High-Quality Safety Signs</h3>
                                    <p class="card-text">
                                        We offer safety signs in Mumbai that are built from superior substances for long-term durability. Whether it’s a sign board, LED sign, or safety signage board, our signs are made to bear rough atmospheres and confirm clear observability.  

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-6.webp')}}" class="why-card-img-top"
                                alt="Custom Solutions">
                            <div class="card-body why-card-body px-0">
                                <h3 class="why-text-red mb-3">Custom Solutions</h3>
                                <p class="card-text">We apprehend that each enterprise has exceptional safety requirements. We provide custom solutions for exit signage, extinguisher signage, emergency exit lights, and more. Our team labors with you to produce the ideal signage design personalized to your facility’s needs. </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                       
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-7.webp')}}" class="why-card-img-top"
                                    alt="Compliance with Safety Standards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Compliance with Safety Standards</h3>
                                    <p class="card-text">All of our safety signage solutions abide by domestic safety rules and industry norms. Whether you require electrical safety signs, floor safety signs, or warning signs, we make certain that your signs assist your facility remain compliant and secure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-8.webp')}}" class="why-card-img-top"
                                    alt="Durable Materials">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Durable Materials</h3>
                                    <p class="card-text">Our sign boards and safety signage boards are built from standardized substances, confirming longevity and opposition to weather circumstances. From glow sign boards to exit sign boards, our signs are crafted to be efficient and durable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-3.webp')}}" class="why-card-img-top"
                                    alt="Professional Installation">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Professional Installation</h3>
                                    <p class="card-text"> Our team manages the whole installation method with professionalism and caution. We make sure all signs, comprising emergency exit and exit lights, are installed properly for ultimate safety and existence. </p>
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
        <h2 class="hero-title">Types of Safety Signs We Manufacture</h2>
        {{-- <p class="card-text text-center">Safety is a primary concern at construction plots, and having the appropriate safety signage in Chennai is critical to forbid accidents. Safety signs in Chennai render lucid notifications and guidelines to employees and guests, making certain of submission with safety protocols. Whether it’s construction signs or fire safety signs, a well-positioned signboard can make a considerable change in reducing dangers. Below are some main aspects and advantages of standardized safety signage boards for construction plots:</p> --}}

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-9.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Warning Signs  </h2>
                <p class="brand-description">
                     We produce a huge collection of warning signs that assist in averting accidents by warning people about potential risks. From road safety to electrical safety signs, these signs are outlined to draw attention and offer significant safety knowledge.   
                </p>
                <h2 class="brand-title">Hazard Signs</h2>
                <p class="brand-description">
                    Our hazard signs are crucial for determining risk zones in your accommodation. Whether it’s a floor safety sign or a warning sign for perilous chemicals, our signs guarantee people are informed of the dangers.
                </p>
                <h2 class="brand-title">Emergency Exit Signs</h2>
                <p class="brand-description">
                     Emergency exit signs are significant in case of clearance. We provide exit signage that precisely leads people to security. Our exit signage boards are simple to read and outlined to be observable even in dim light, assisting to support people in a contingency.
                </p>
                
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Site Access Signs</h2>
                <p class="brand-description">
                    Site access signs are significant for commanding entry to construction plots or limited sectors. We supply clear and long-lasting construction signs that assist in handling site approach and confirm the security of employees and visitors.
                </p>
                <h2 class="brand-title">Fire Exit Signs</h2>
                <p class="brand-description">
                    Fire exit signs are essential for supporting people to the closest exits in times of fire. We provide high-class fire safety signs and exit sign boards that are existent and submissive to fire safety laws.
                </p>
                <h2 class="brand-title">Fire Extinguisher Signs</h2>

                <p class="brand-description">
                    Extinguisher signage is significant in determining the position of fire extinguishers. We offer comprehensive extinguisher signs that assist people in promptly finding firefighting instruments in case of uncertainty.
                </p>
               
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-10.webp')}}" alt="Prohibitory Signages" class="img-fluid">
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
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-9.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Emergency Alarm Signs  </h2>
                <p class="brand-description">
                    Emergency alarm signs denote the position of alarm systems in times of calamity. Our safety sign boards and LED signage are outlined to specifically mark the place of emergency alarms for prompt reaction.    
                </p>
                 <p class="brand-description">
                    We focus on offering high-class safety signages in Mumbai for several industries. Whether you require safety signs in Mumbai for a construction plot or fire safety signs for a corporate building, we provide long-lasting, noticeable, and submissive signage solutions.
                </p>
                
            </div>
        </div>
    </div>
</section>


<section class="why-bg-light-pink py-5" style="background-color: #fff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Benefits of Effective Safety Signage  </h2>
            <p class="card-text text-center">Funding in standards safety signage assists organizations to balance industrial safety, enhance worker safety, and make sure of abidance with governmental norms. Whether it’s road safety, fire exit signs, or safety signage boards, efficient signage improves consciousness and alleviates perils, keeping your workspace secure.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-11.webp')}}" class="why-card-img-top"
                        alt="Enhanced Safety">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Enhanced Safety</h3>
                        <p class="card-text">
                            Safety signages in Mumbai are crucial in generating a secure atmosphere. Whether it’s a safety sign board or emergency exit light, lucid and noticeable signs assist people to steer harmlessly through your establishment. They avert accidents and confirm that everyone is aware of what to do in case of uncertainty.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-12.webp')}}" class="why-card-img-top"
                        alt="Construction ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Risk Mitigation  </h3>
                        <p class="card-text">
                            By utilizing fire safety signs, warning signs, and exit signage boards, organizations can efficiently alleviate hazards. Signs warn people of probable risks, like electrical safety perils or dangerous tools, minimizing the chance of mishappenings or injuries.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-13.webp')}}" class="why-card-img-top"
                        alt="Compliance with Regulations">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Compliance with Regulations</h3>
                        <p class="card-text">
                            Efficient safety signs in Mumbai assist enterprises abide by domestic rules. From construction signs to extinguisher signage, our signs make certain that your work area abides by safety norms. Submissiveness not only confirms safety but also safeguards organizations from legal accountabilities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-23.webp')}}" class="why-card-img-top"
                        alt="Improved Awareness">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Improved Awareness</h3>
                        <p class="card-text">
                            Transparent safety signage assists in creating consciousness of probable perils. Emergency exit signs, floor safety signs, and exit sign boards make sure that people are always informed of evacuation paths and safety codes. This enhances the all-rounded safety practice and readiness in any atmosphere.
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
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-11.webp')}}" class="why-card-img-top"
                                    alt="Enhanced Safety">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Enhanced Safety</h3>
                                    <p class="card-text">
                                        Safety signages in Mumbai are crucial in generating a secure atmosphere. Whether it’s a safety sign board or emergency exit light, lucid and noticeable signs assist people to steer harmlessly through your establishment. They avert accidents and confirm that everyone is aware of what to do in case of uncertainty.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-12.webp')}}" class="why-card-img-top"
                                    alt="Construction ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Risk Mitigation  </h3>
                                    <p class="card-text">
                                        By utilizing fire safety signs, warning signs, and exit signage boards, organizations can efficiently alleviate hazards. Signs warn people of probable risks, like electrical safety perils or dangerous tools, minimizing the chance of mishappenings or injuries.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-13.webp')}}" class="why-card-img-top"
                                    alt="Compliance with Regulations">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Compliance with Regulations</h3>
                                    <p class="card-text">
                                        Efficient safety signs in Mumbai assist enterprises abide by domestic rules. From construction signs to extinguisher signage, our signs make certain that your work area abides by safety norms. Submissiveness not only confirms safety but also safeguards organizations from legal accountabilities.
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
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-12.webp')}}" class="why-card-img-top"
                                    alt="Construction ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Risk Mitigation  </h3>
                                    <p class="card-text">
                                        By utilizing fire safety signs, warning signs, and exit signage boards, organizations can efficiently alleviate hazards. Signs warn people of probable risks, like electrical safety perils or dangerous tools, minimizing the chance of mishappenings or injuries.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-13.webp')}}" class="why-card-img-top"
                                    alt="Compliance with Regulations">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Compliance with Regulations</h3>
                                    <p class="card-text">
                                        Efficient safety signs in Mumbai assist enterprises abide by domestic rules. From construction signs to extinguisher signage, our signs make certain that your work area abides by safety norms. Submissiveness not only confirms safety but also safeguards organizations from legal accountabilities.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-23.webp')}}" class="why-card-img-top"
                                    alt="Improved Awareness">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Improved Awareness</h3>
                                    <p class="card-text">
                                        Transparent safety signage assists in creating consciousness of probable perils. Emergency exit signs, floor safety signs, and exit sign boards make sure that people are always informed of evacuation paths and safety codes. This enhances the all-rounded safety practice and readiness in any atmosphere.
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

            <div class="carousel-indicators why-carousel-indicators" style="margin-bottom: -0.8rem;">
                <button type="button" data-bs-target="#signageCarouselNew" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#signageCarouselNew" data-bs-slide-to="1"
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
                <a href="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-15.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-15.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-16.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-16.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-17.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-17.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-18.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-18.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-19.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-19.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-20.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-20.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-21.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-21.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-22.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-22.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">Co-ordinating with this company was a wonderful experience! Their safety signages in Mumbai are top-class. We now have comprehensive fire safety signs and exit signage boards throughout our establishment</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Rajesh Mehta</div>
                                <div class="client-role">Safety Manager</div>
                                
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
                        <p class="card-text testimonial-card-text">“We required dependable construction signs and warning signs for our plot. Their team rendered high-class safety sign boards that were simple to install and fulfilled all governmental needs</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Priya Sharma</div>
                               <div class="client-role">Project Supervisor</div>
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
                        <p class="card-text testimonial-card-text">I’m intrigued with the LED sign and emergency exit lights they supplied. The exit sign board was particularly useful for our workers to seamlessly steer during contingencies</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Ravi Gupta</div>
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
                        <p class="card-text testimonial-card-text">The extinguisher signage and floor safety signs they installed have converted our workspace much secure one. It’s reconfirming being aware that we’re compliant with security rules</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Neha Patel</div>
                                <div class="client-role">Facility Manage</div>
                                
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
                        <p class="card-text testimonial-card-text">The safety signage board and emergency exit signs we got were definitely what we required for our new office. I strongly suggest them for safety signages in Mumbai</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/high-quality-safety-signages-in-chennai-33.webp')}}" alt="Amit Desai" class="client-img">
                            <div>
                                <div class="client-name">Amit Desai</div>
                                <div class="client-role">Business Owner</div>
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
                                    <p class="card-text testimonial-card-text">Co-ordinating with this company was a wonderful experience! Their safety signages in Mumbai are top-class. We now have comprehensive fire safety signs and exit signage boards throughout our establishment</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Rajesh Mehta</div>
                                            <div class="client-role">Safety Manager</div>
                                           
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
                                    <p class="card-text testimonial-card-text">“We required dependable construction signs and warning signs for our plot. Their team rendered high-class safety sign boards that were simple to install and fulfilled all governmental needs</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Priya Sharma</div>
                                            <div class="client-role">Project Supervisor</div>
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
                                    <p class="card-text testimonial-card-text">I’m intrigued with the LED sign and emergency exit lights they supplied. The exit sign board was particularly useful for our workers to seamlessly steer during contingencies</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Ravi Gupta</div>
                                            <div class="client-role">Operations Director</div>
                                          
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
                                    <p class="card-text testimonial-card-text">I’m intrigued with the LED sign and emergency exit lights they supplied. The exit sign board was particularly useful for our workers to seamlessly steer during contingencies</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Ravi Gupta</div>
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
                                    <p class="card-text testimonial-card-text">The extinguisher signage and floor safety signs they installed have converted our workspace much secure one. It’s reconfirming being aware that we’re compliant with security rules</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Neha Patel</div>
                                            <div class="client-role">Facility Manage</div>
                                         
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
                                    <p class="card-text testimonial-card-text">The safety signage board and emergency exit signs we got were definitely what we required for our new office. I strongly suggest them for safety signages in Mumbai</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Amit Desai</div>
                                            <div class="client-role">Business Owner</div>
                                           
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
                What are the crucial kinds of safety signages for workspaces in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Crucial safety signages in Mumbai comprise exit signage, fire safety signs, warning signs, emergency exit lights, extinguisher signage, and floor safety signs. These signs assist workers steer and react to emergencies harmlessly.</p>
            </div>
        </div>


        <div class="faq-item">
            <button class="faq-question">
                Why are construction signs critical for security on-site?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Construction signs are important for security on-site as they give significant information like risk warnings, instructions, and emergency paths. They make sure that employees are informed of probable perils like electrical security, and fire dangers, and assist in accident aversion.
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What rules control the usage of fire safety signs in Mumbai? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    In Mumbai, fire safety signs must abide by domestic safety rules and norms. These rules confirm that fire extinguisher signs, exit signage, and other emergency safety signs are noticeable, transparent, and positioned suitably to avoid accidents and support people during a contingency.
                </p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">
                How do safety signs help in workspace submissiveness and avoiding accidents?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Genuine safety signage boards confirm that workspaces abide by rules. They assist in minimizing accidents by offering comprehensive instructions and alerts, like warning signs for risky sectors and emergency exit signs, guaranteeing safe clearance during uncertainties.  
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can safety signages be personalized for particular industries or needs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Yes, safety signages in Mumbai can be personalized to fulfill the particular requirements of several industries. Whether it's road safety for construction plots or industrial safety for factories, sign boards, and safety signage can be customized to fit multiple safety needs.    
                </p>
            </div>
        </div>
       
    </div>
</section>

@endsection