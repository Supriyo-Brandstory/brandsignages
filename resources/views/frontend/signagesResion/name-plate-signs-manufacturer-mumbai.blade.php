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
                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-1.webp')}}" alt="Name Plate Signages in Mumbai">
                <div class="carousel-caption-custom">
                    <h1>Name Plate Signs Manufacturer Mumbai </h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-2.webp')}}" alt="Name Plate Signages in Mumbai">
                <div class="carousel-caption-custom">
                    <h1>Name Plate Signs Manufacturer Mumbai </h1>
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
        <h2 class="hero-title">We Design The Right Name Plate for Your Space   </h2>
        {{-- <p class="card-text text-center">Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.</p> --}}

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-3.webp')}}" alt="Name Plate Signages in Mumbai" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    At our company, we emphasize manufacturing traditional nameplates personalized to promote your place. Whether it’s for your house or office, we craft nameplates that mix trends and operationality. If you’re searching for a nameplate in Mumbai, our proficient team confirms that each pattern mirrors your character or brand recognition.  <br>
                    We are one of the pioneering name plate makers in Mumbai, providing a huge collection of substances and coatings. From sophisticated stainless steel nameplates to contemporary acrylic LED alternatives, we supply resistant and visually attractive solutions. Our designs are ideal for residential places, commercial offices, and corporate establishments.     
                </p>
              <p class="brand-description">
                Our creative perspective on nameplate design in Mumbai is sure of an effortless mix of innovation and accuracy. Whether you choose a classic imprinted appearance or an advanced design with signboards, we can tailor the plate to suit your taste. We also provide signboard solutions for organizations, guaranteeing professional branding that is distinct. <br>
                Each nameplate and plate sign is designed with high-class substances to make sure of durability and luxury. With our skillfulness and dedication to customer contentment, we aspire to be your first option for name plate solutions in Mumbai. Let us outline the ideal nameplate for your place today! 
              </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us  </h2>
            <p class="card-text text-center">Selecting the appropriate partner for your nameplate requirements is significant. Here's why we are the reliable preference for nameplates in Mumbai.Opt for Brand Signage for inventive designs, premium artistry, and unmatched service in Mumbai. Let us assist you generate the ideal name plate for your house or office today!  </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
           
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-4.webp')}}" class="why-card-img-top"
                        alt="Expertise">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Expertise</h3>
                        <p class="card-text">We focus on making exceptional and personalized name plate designs in Mumbai that fit your taste and place needs. Whether you choose polished stainless steel, lively acrylic LED, or luxurious imprinted alternatives, our team guarantees that each design is exclusive.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-5.webp')}}" class="why-card-img-top"
                            alt="High-Quality Safety Signs">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">High-Quality Safety Signs</h3>
                            <p class="card-text">We offer safety signs in Mumbai that are built from superior substances for long-term durability. Whether it’s a sign board, LED sign, or safety signage board, our signs are made to bear rough atmospheres and confirm clear observability.  </p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-6.webp')}}" class="why-card-img-top"
                        alt="Timely Delivery  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Timely Delivery  </h3>
                        <p class="card-text">We comprehend the worth of your time. That’s why we guarantee immediate delivery of your nameplate in Mumbai. From the first consultation to the last stage of production, we keep in mind the deadlines without adjusting to standards. </p>
                    </div>
                </div>
        </div>
          
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-7.webp')}}" class="why-card-img-top"
                        alt="Professional Installation  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Professional Installation  </h3>
                        <p class="card-text">We deliver easy installation services for all our signboards and nameplates. Our executives make sure that your sign board is safely and accurately positioned, giving your area a competent finish.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-8.webp')}}" class="why-card-img-top"
                        alt="Warranty for Peace of Mind  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Warranty for Peace of Mind  </h3>
                        <p class="card-text">We take charge of the grades of our products. Our nameplates are available with a warranty, confirming that you get dependable and resistant solutions.</p>
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
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-4.webp')}}" class="why-card-img-top"
                                    alt="Expertise">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Expertise</h3>
                                    <p class="card-text">We focus on making exceptional and personalized name plate designs in Mumbai that fit your taste and place needs. Whether you choose polished stainless steel, lively acrylic LED, or luxurious imprinted alternatives, our team guarantees that each design is exclusive.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-5.webp')}}" class="why-card-img-top"
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
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-6.webp')}}" class="why-card-img-top"
                                alt="Timely Delivery  ">
                            <div class="card-body why-card-body px-0">
                                <h3 class="why-text-red mb-3">Timely Delivery  </h3>
                                <p class="card-text">We comprehend the worth of your time. That’s why we guarantee immediate delivery of your nameplate in Mumbai. From the first consultation to the last stage of production, we keep in mind the deadlines without adjusting to standards. </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-6.webp')}}" class="why-card-img-top"
                                alt="Timely Delivery  ">
                            <div class="card-body why-card-body px-0">
                                <h3 class="why-text-red mb-3">Timely Delivery  </h3>
                                <p class="card-text">We comprehend the worth of your time. That’s why we guarantee immediate delivery of your nameplate in Mumbai. From the first consultation to the last stage of production, we keep in mind the deadlines without adjusting to standards. </p>
                            </div>
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-7.webp')}}" class="why-card-img-top"
                                    alt="Professional Installation  ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Professional Installation  </h3>
                                    <p class="card-text">We deliver easy installation services for all our signboards and nameplates. Our executives make sure that your sign board is safely and accurately positioned, giving your area a competent finish.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-8.webp')}}" class="why-card-img-top"
                                    alt="Warranty for Peace of Mind  ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Warranty for Peace of Mind  </h3>
                                    <p class="card-text">We take charge of the grades of our products. Our nameplates are available with a warranty, confirming that you get dependable and resistant solutions.</p>
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
        <h2 class="hero-title">Types of Name Plates We Deliver </h2>
        <p class="card-text text-center">We provide a huge variety of nameplates in Mumbai, outlined to fit several choices and requirements. As one of the prominent name plate makers in Mumbai, we make certain of the quality, inventiveness, and longevity of each design. Here are the kinds of nameplates we provide:</p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-9.webp')}}" alt="Name Plate Signages in Mumbai" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Metal Name Plates    </h2>
                <p class="brand-description">
                    Metal nameplates are a top selection for their glossy and competent appearance. We make use of premier substances such as stainless steel, brass, and aluminum to create persistent and luxurious nameplates. These are best for residential as well as commercial spaces. Metal nameplates are resistant to weather and damage, making them perfect for outdoor utility.
                </p>
                <h2 class="brand-title">Wooden Name Plates</h2>
                <p class="brand-description">
                    Wooden nameplates eradicate warmth and countless attractions. Designed from standardized wood, they are ideal for houses, offices, and corporate spaces. Our nameplate design in Mumbai comprises sculpted and etched wooden plates with excellent finishes that give elegance to any setting.
                </p>
               
                
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Acrylic Name Plates</h2>
                <p class="brand-description">
                    For an advanced and bright appearance, acrylic nameplates are a top preference. They can be personalized with acrylic LED lighting for a spectacular outcome. These nameplates are weightless, persistent, and come in several colors and patterns, making them a flexible choice.  
                </p>
                <h2 class="brand-title">Glass Name Plates</h2>
                <p class="brand-description">
                    Glass name plates render a shiny and modern design. Ideal for elegant houses and offices, they give a luxurious feel to your area. Our plate sign design characterizes frosted, engraved, or painted glass alternatives for an exceptional and fashionable finish.
                </p>
                
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-10.webp')}}" alt="Name Plate Signages in Mumbai" class="img-fluid">
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
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-9.webp')}}" alt="Name Plate Signages in Mumbai" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Stone Name Plates </h2>
                <p class="brand-description">
                    Stone nameplates are ideal for generating a bold and ageless impact. Built from granite, marble, or slate, these nameplates are long-lasting and weather-proof. They are perfect for outdoor areas, attaching a classic and powerful charm to your house or organization.  
                </p>
                 <p class="brand-description">
                    Whether you require a signboard, signboard, or a trendy nameplate in Mumbai, we provide designs that fit your choice and pocket. Rely on us to supply standardized nameplates that promote your space with fashion and usefulness.
                </p>
                
            </div>
        </div>
    </div>
</section>


<section class="why-bg-light-pink py-5" style="background-color: #fff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Customization Options </h2>
            <p class="card-text text-center">We render an array of personalization alternatives to make sure that your nameplate in Mumbai is as exclusive as your place. Here’s how we assist you produce an ideal nameplate.With these personalization choices, we assist you in formulating a plate sign or sign board that exactly denotes your taste and place. Let us craft your perfect nameplate soon!</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-11.webp')}}" class="why-card-img-top"
                        alt="Material Choices ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Material Choices </h3>
                        <p class="card-text">
                           Select from a number of high-class materials, consisting of stainless steel, wood, glass, acrylic, and stone. Whether you pick an advanced appearance or a vintage trend, our materials are resistant and outlined to suit your choice.  
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-12.webp')}}" class="why-card-img-top"
                        alt="Construction ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Engraving and Etching  </h3>
                        <p class="card-text">
                           Customize your nameplate design in Mumbai with exact carving or etching. Our modern methods formulate complex details, guaranteeing an adept and sophisticated finish. Whether it's your name, logo, or any other design, we give life to your visions with brilliance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-13.webp')}}" class="why-card-img-top"
                        alt="Color and Finish ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Color and Finish </h3>
                        <p class="card-text">
                           Choose from a huge collection of colors and finishes to suit your elegant choices. From matte and glossy coatings to metallic and textured alternatives, we design nameplates that are striking. Give acrylic LED lighting for an advanced feel or opt for natural tones for an ageless charm.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-15.webp')}}" class="why-card-img-top"
                        alt="Fonts and Styles ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Fonts and Styles </h3>
                        <p class="card-text">
                           Tailor your nameplate with a number of fonts and styles. Whether you choose bold and protruding letters or complicated and artistic designs, our name plate makers in Mumbai confirm faultless outcomes.
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
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-11.webp')}}" class="why-card-img-top"
                                    alt="Material Choices ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Material Choices </h3>
                                    <p class="card-text">
                                       Select from a number of high-class materials, consisting of stainless steel, wood, glass, acrylic, and stone. Whether you pick an advanced appearance or a vintage trend, our materials are resistant and outlined to suit your choice.  
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-12.webp')}}" class="why-card-img-top"
                                    alt="Construction ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Engraving and Etching  </h3>
                                    <p class="card-text">
                                       Customize your nameplate design in Mumbai with exact carving or etching. Our modern methods formulate complex details, guaranteeing an adept and sophisticated finish. Whether it's your name, logo, or any other design, we give life to your visions with brilliance.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-13.webp')}}" class="why-card-img-top"
                                    alt="Color and Finish ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Color and Finish </h3>
                                    <p class="card-text">
                                       Choose from a huge collection of colors and finishes to suit your elegant choices. From matte and glossy coatings to metallic and textured alternatives, we design nameplates that are striking. Give acrylic LED lighting for an advanced feel or opt for natural tones for an ageless charm.
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
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-12.webp')}}" class="why-card-img-top"
                                    alt="Construction ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Engraving and Etching  </h3>
                                    <p class="card-text">
                                       Customize your nameplate design in Mumbai with exact carving or etching. Our modern methods formulate complex details, guaranteeing an adept and sophisticated finish. Whether it's your name, logo, or any other design, we give life to your visions with brilliance.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-13.webp')}}" class="why-card-img-top"
                                    alt="Color and Finish ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Color and Finish </h3>
                                    <p class="card-text">
                                       Choose from a huge collection of colors and finishes to suit your elegant choices. From matte and glossy coatings to metallic and textured alternatives, we design nameplates that are striking. Give acrylic LED lighting for an advanced feel or opt for natural tones for an ageless charm.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-15.webp')}}" class="why-card-img-top"
                                    alt="Fonts and Styles ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Fonts and Styles </h3>
                                    <p class="card-text">
                                       Tailor your nameplate with a number of fonts and styles. Whether you choose bold and protruding letters or complicated and artistic designs, our name plate makers in Mumbai confirm faultless outcomes.
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
                <a href="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-16.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-16.webp')}}" class="img-fluid" alt="Name Plate Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-17.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-17.webp')}}" class="img-fluid" alt="Name Plate Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-18.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-18.webp')}}" class="img-fluid" alt="Name Plate Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-19.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-19.webp')}}" class="img-fluid" alt="Name Plate Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
        
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-20.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-20.webp')}}" class="img-fluid" alt="Name Plate Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-21.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-21.webp')}}" class="img-fluid" alt="Name Plate Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-22.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-22.webp')}}" class="img-fluid" alt="Name Plate Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-23.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-23.webp')}}" class="img-fluid" alt="Name Plate Signages in Mumbai" style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">“I recently bought a stainless steel nameplate in Mumbai, and it was far ahead of my expectations. The finish was perfect, and it was supplied on time. Strongly suggest their service!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Rohit Sharma</div>
                               
                                
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
                        <p class="card-text testimonial-card-text">The team crafted a traditional acrylic LED name plate for my office. It came to be excellent and has attached an advanced feel to the area. They are genuinely the finest nameplate makers in Mumbai.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Priya Menon</div>
                               
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
                        <p class="card-text testimonial-card-text">“We required a long-lasting plate sign for our house. The wooden nameplate design in Mumbai they delivered is wonderful and suits exactly. Superb artistry!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Anjali Desai</div>
                                
                               
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
                        <p class="card-text testimonial-card-text">I purchased a sign board for my enterprise, and the grade is extraordinary. They assisted us with the outline and installation, making the procedure effortless.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Vikas Kapoor</div>
                               
                                
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
                        <p class="card-text testimonial-card-text">The glass name plate they built for our apartment is sophisticated and fashionable. If you require a nameplate in Mumbai, this is the destination to visit!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/name-plate-signs-manufacturer-mumbai-33.webp')}}" alt="Sana Khan" class="client-img">
                            <div>
                                <div class="client-name">Sana Khan</div>
                                
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
                                    <p class="card-text testimonial-card-text">“I recently bought a stainless steel nameplate in Mumbai, and it was far ahead of my expectations. The finish was perfect, and it was supplied on time. Strongly suggest their service!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Rohit Sharma</div>
                                           
                                           
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
                                    <p class="card-text testimonial-card-text">The team crafted a traditional acrylic LED name plate for my office. It came to be excellent and has attached an advanced feel to the area. They are genuinely the finest nameplate makers in Mumbai.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Priya Menon</div>
                                            
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
                                    <p class="card-text testimonial-card-text">“We required a long-lasting plate sign for our house. The wooden nameplate design in Mumbai they delivered is wonderful and suits exactly. Superb artistry!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Anjali Desai</div>
                                            
                                          
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
                                    <p class="card-text testimonial-card-text">“We required a long-lasting plate sign for our house. The wooden nameplate design in Mumbai they delivered is wonderful and suits exactly. Superb artistry!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Anjali Desai</div>
                                            
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
                                    <p class="card-text testimonial-card-text">I purchased a sign board for my enterprise, and the grade is extraordinary. They assisted us with the outline and installation, making the procedure effortless.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Vikas Kapoor</div>
                                           
                                         
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
                                    <p class="card-text testimonial-card-text">The glass name plate they built for our apartment is sophisticated and fashionable. If you require a nameplate in Mumbai, this is the destination to visit!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Sana Khan</div>
                                            
                                           
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
               What substances are utilized for nameplates in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We utilize superior substances such as stainless steel, wood, acrylic, glass, and stone for producing resistant and trendy nameplates in Mumbai. Each substance is cautiously chosen to fit various spaces and choices.</p>
            </div>
        </div>


        <div class="faq-item">
            <button class="faq-question">
              Can I personalize the pattern and size of my nameplate?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Yes, we emphasize tailored nameplate design in Mumbai. You can pick out the substance, size, fonts, and finishes, and even attach attributes like acrylic LED lighting to make your nameplate exceptional.  
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How much time does it take to get a custom nameplate dropped in Mumbai? 
                    <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    The delivery span for traditional nameplates is based on the design and substance. Usually, it takes 7–10 working days. We guarantee immediate service while retaining quality.    
                </p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">
                Do you provide installation services for nameplates in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Yes, we offer professional installation services. Whether it’s a plate sign for your house or a sign board for your office, our team guarantees it is safely and accurately positioned. 
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is the price of outlining and creating a general nameplate?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    The price of a general nameplate in Mumbai alters based on the substance, size, and design intricacy. We provide reasonable pricing for standardized products produced by   
                </p>
            </div>
        </div>
       
    </div>
</section>

@endsection