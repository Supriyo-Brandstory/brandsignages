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
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-1.webp')}}" alt="Office Signages in Mumbai">
                <div class="carousel-caption-custom">
                    <h1>Office Signages in Mumbai </h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-2.webp')}}" alt="Office Signages in Mumbai">
                <div class="carousel-caption-custom">
                    <h1>Office Signages in Mumbai </h1>
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
        <h2 class="hero-title">Custom Office Signage Boards in Mumbai  </h2>
        {{-- <p class="card-text text-center">Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.</p> --}}

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-3.webp')}}" alt="Office Signages in Mumbai" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    We concentrate on designing outstanding office signage boards in Mumbai that complement the appearance and uprightness of your workplace. Whether you require reception signs, outdoor sign boards, or office desk signs, we supply customized solutions to fulfill your needs. Our designs are advanced, resistant, and ideal for generating a permanent impact on clients and guests.  Our collection of signage solutions comprises a variety of alternatives such as stainless steel signs, acrylic letters, and LED signage for indoor as well as outdoor usage. For a lively and remarkable charm, we also provide glow sign boards and acrylic LED designs. These are perfect for building signage, attaching a sense of elegance to your commercial area.    
                </p>
              <p class="brand-description">
                Safety is also a primary concern for us. We produce safety signs and digital signages that integrate operationality with fashion, guaranteeing your office fulfills the necessary norms. Our outdoor signage alternatives are weather-proof and crafted to be distinct, even from remote.  Utilizing modern technology, we provide private graphics and display signage solutions to give life to your brand's individuality. From SS signage to acrylic sign boards, each product is formed with accuracy and prime substances.Rely on us for creative office signages in Mumbai that merge design and usefulness. Let us assist you in modifying your work area today!     
            </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for Office Signages in Mumbai</h2>
            <p class="card-text text-center">Select Brand Signage for your office signages in Mumbai and experience top-class service, standards, and trends. Let us convert your dreams into reality!  </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
           
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-4.webp')}}" class="why-card-img-top"
                        alt="Expertise">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Expertise</h3>
                        <p class="card-text">With several years of experience, we focus on outlining traditional office signage boards in Mumbai. Our team of specialists comprehends the significance of generating operational, spectacular signs that line up with your brand’s recognition. Whether you require office desk signs, directional signs, or building signage, we have the skills to render.  </p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-5.webp')}}" class="why-card-img-top"
                            alt="Stylish Signage">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Stylish Signage</h3>
                            <p class="card-text">We provide a huge range of signage alternatives, comprising acrylic sign boards, LED signage, and stainless steel signs. Our signs are shaped to improve the beauty of your office area while catering to their purpose effectively. From polished SS signage to lively acrylic LED, we offer contemporary and fashionable signage solutions.</p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-6.webp')}}" class="why-card-img-top"
                        alt="Premium Quality">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Premium Quality</h3>
                        <p class="card-text">We utilize only superior substances like stainless steel, acrylic letters, and digital signage to confirm longevity and resistance. Our sign boards, comprising glow sign boards and outdoor sign boards, are made to endure for an extended period and the elements.  </p>
                    </div>
                </div>
        </div>
          
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-7.webp')}}" class="why-card-img-top"
                        alt="Timely Delivery  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Timely Delivery  </h3>
                        <p class="card-text">We comprehend the significance of satisfying deadlines. That’s why we make sure of immediate delivery of all your signage requirements. Whether it's outdoor signage or reception signs, we make sure to accomplish the project within the committed time duration.  </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-8.webp')}}" class="why-card-img-top"
                        alt="Installation & Support">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Installation & Support</h3>
                        <p class="card-text">We provide competent installation services for all our signage solutions, guaranteeing they are safely mounted and placed for optimal impression. Moreover, our team is always present for guidance and support whenever you require it. </p>
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
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-4.webp')}}" class="why-card-img-top"
                                    alt="Expertise">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Expertise</h3>
                                    <p class="card-text">With several years of experience, we focus on outlining traditional office signage boards in Mumbai. Our team of specialists comprehends the significance of generating operational, spectacular signs that line up with your brand’s recognition. Whether you require office desk signs, directional signs, or building signage, we have the skills to render.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-5.webp')}}" class="why-card-img-top"
                                    alt="Aesthetic Appeal">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Stylish Signage</h3>
                                    <p class="card-text">
                                        We provide a huge range of signage alternatives, comprising acrylic sign boards, LED signage, and stainless steel signs. Our signs are shaped to improve the beauty of your office area while catering to their purpose effectively. From polished SS signage to lively acrylic LED, we offer contemporary and fashionable signage solutions.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-6.webp')}}" class="why-card-img-top"
                                alt="Premium Quality">
                            <div class="card-body why-card-body px-0">
                                <h3 class="why-text-red mb-3">Premium Quality</h3>
                                <p class="card-text">We utilize only superior substances like stainless steel, acrylic letters, and digital signage to confirm longevity and resistance. Our sign boards, comprising glow sign boards and outdoor sign boards, are made to endure for an extended period and the elements.  </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                    <div class="col-md-4">
                        <div class="why-card card">
                            <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-6.webp')}}" class="why-card-img-top"
                            alt="Premium Quality">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Premium Quality</h3>
                            <p class="card-text">We utilize only superior substances like stainless steel, acrylic letters, and digital signage to confirm longevity and resistance. Our sign boards, comprising glow sign boards and outdoor sign boards, are made to endure for an extended period and the elements.  </p>
                        </div>
                        </div>
                    </div>
                       
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-7.webp')}}" class="why-card-img-top"
                                    alt="Timely Delivery  ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Timely Delivery  </h3>
                                    <p class="card-text">We comprehend the significance of satisfying deadlines. That’s why we make sure of immediate delivery of all your signage requirements. Whether it's outdoor signage or reception signs, we make sure to accomplish the project within the committed time duration.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-8.webp')}}" class="why-card-img-top"
                                    alt="Installation & Support">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Installation & Support</h3>
                                    <p class="card-text">We provide competent installation services for all our signage solutions, guaranteeing they are safely mounted and placed for optimal impression. Moreover, our team is always present for guidance and support whenever you require it. </p>
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
        <h2 class="hero-title">Types of Office Signage Boards You Can Choose From</h2>
        <p class="card-text text-center">Promote your workplace with thorough office signage boards in Mumbai. Select from our huge collection of alternatives to fit your taste and workability requirements. Our signage alternatives are designed to ensure longevity, design brilliance, and brand observability.</p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-9.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Acrylic Signs  </h2>
                <p class="brand-description">
                    Acrylic signs are universal and contemporary, ideal for indoor and outdoor sign boards. Built from persistent substances, these acrylic sign boards are weightless and can comprise acrylic letters or acrylic LED sparking for a noticeable attraction. Perfect for reception signs, commercial branding, and wayfinding reasons.  
                </p>
                <h2 class="brand-title">Digital Signs  </h2>
                <p class="brand-description">
                    For a groundbreaking feel, digital signage is the path to follow. These are ideal for showcasing immediate information or promotional news. Our display signage solutions are communicative, engrossing, and excellent for offices aspiring to remain ahead in technology while retaining an advanced appearance.  
                </p>
                <h2 class="brand-title">Stainless Steel (SS) Signs </h2>
                <p class="brand-description">
                    SS signage provides a polished and brilliant appearance, perfect for building signage and corporate areas. Built from long-lasting stainless steel, these signs are weather-proof and durable, making them ideal for outdoor signage. They give a sense of luxury to any atmosphere.   
                </p>
                
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">LED Signs  </h2>
                <p class="brand-description">
                    Illuminate your brand with bright LED signage. Whether it’s a glow sign board for an outdoor utility or an indoor LED sign board, these are highly noticeable and energy-saving. Excellent for making your office distinct day and night with a realistic glow.  
                </p>
                <h2 class="brand-title">Wooden Signs </h2>
                <p class="brand-description">
                    Wooden signs give an organic and ageless attraction to your office. Perfect for office desk signs and signage boards, they are ideal for generating a warm, embracing atmosphere with a sense of elegance. 
                </p>
                <h2 class="brand-title">3D Letter Signages </h2>

                <p class="brand-description">
                    For a bold and extensive view, 3D letter signage is a common preference. They formulate a robust visual influence and can be personalized in several packaging types and substances like acrylic signs or metal. These are outstanding for logos and branding. 
                </p>
                <p class="brand-description">Each kind of signage is proficiently crafted to illustrate your brand while promoting the beauty of your workplace. As reliable providers of office signages in Mumbai, we merge usefulness with trends to render unique outcomes. Let us assist you make a perpetual impact!</p>
               
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-10.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>



<section class="why-bg-light-pink py-5" style="background-color: #fff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Office Signs by Use Types </h2>
            <p class="card-text text-center">Improve the workability and beauty of your work area with our extensive selection of office signages in Mumbai. Outlined to satisfy multiple requirements, our signs are designed with accuracy and superior substances. Discover the several usage types below.Each type of sign is cautiously designed to mix usefulness with fashion, ensuring your workstation is unique. Have faith in us for superior office signages in Mumbai that uplift your office atmosphere. Let us support you in producing a motivating and structured workspace today!</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-11.webp')}}" class="why-card-img-top"
                        alt="Office Desk Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Office Desk Signs</h3>
                        <p class="card-text">
                         Ideal for customizing workspaces, office desk signs are perfect for exhibiting names, designations, or departments. These signs are attainable in stainless steel, acrylic letters, or wood for a competent feel. They are compressed, made-to-order, and an outstanding method to create a tailored workstation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-12.webp')}}" class="why-card-img-top"
                        alt="Construction ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Room Identification Signs   </h3>
                        <p class="card-text">
                            Smoothen steerage in your office with room recognition signs. Whether it’s conference rooms, washrooms, or personal offices, these signs offer transparency and promote organization. We provide alternatives like acrylic sign boards, digital signage, and SS signage for longevity and fashion. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-13.webp')}}" class="why-card-img-top"
                        alt="Directional Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Directional Signs</h3>
                        <p class="card-text">
                            Assist visitors and workers locate their route with lucid and brief directional signs. From outdoor signage to indoor display signage, these signs are crucial for big office buildings. Select from LED signage and glow sign boards for ultimate observability and efficiency.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-14.webp')}}" class="why-card-img-top"
                        alt="Office Signage Boards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Office Signage Boards</h3>
                        <p class="card-text">
                          For branding and information reasons, office signage boards in Mumbai are mandatory. These signs can comprise acrylic LED, reception signs, and other general alternatives customized to suit your corporate recognition. Our signage solutions make certain that your brand is exclusive with sophistication and excellence.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-15.webp')}}" class="why-card-img-top"
                        alt="Building Signage ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Building Signage  </h3>
                        <p class="card-text">
                            Make your presence known with standardized building signage. These are crafted for exterior usage and built with weather-proof substances like stainless steel and acrylic signs. Ideal for exhibiting your company’s name or logo remarkably, outdoor sign boards ensure your brand gets observed.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-16.webp')}}" class="why-card-img-top"
                        alt="Wall-Mounted Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Wall-Mounted Signage</h3>
                        <p class="card-text">
                            Use wall areas efficiently with wall-mounted signage. Perfect for depicting your company’s vision, goals, or other significant details, these signs are attainable in LED sign boards, acrylic signs, or SS signage. They give elegance to your interiors while catering to empirical reasons. 
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
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-11.webp')}}" class="why-card-img-top"
                                    alt="Office Desk Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Office Desk Signs</h3>
                                    <p class="card-text">
                                     Ideal for customizing workspaces, office desk signs are perfect for exhibiting names, designations, or departments. These signs are attainable in stainless steel, acrylic letters, or wood for a competent feel. They are compressed, made-to-order, and an outstanding method to create a tailored workstation.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-12.webp')}}" class="why-card-img-top"
                                    alt="Construction ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Room Identification Signs   </h3>
                                    <p class="card-text">
                                        Smoothen steerage in your office with room recognition signs. Whether it’s conference rooms, washrooms, or personal offices, these signs offer transparency and promote organization. We provide alternatives like acrylic sign boards, digital signage, and SS signage for longevity and fashion. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-13.webp')}}" class="why-card-img-top"
                                    alt="Directional Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Directional Signs</h3>
                                    <p class="card-text">
                                        Assist visitors and workers locate their route with lucid and brief directional signs. From outdoor signage to indoor display signage, these signs are crucial for big office buildings. Select from LED signage and glow sign boards for ultimate observability and efficiency.
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
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-14.webp')}}" class="why-card-img-top"
                                    alt="Office Signage Boards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Office Signage Boards</h3>
                                    <p class="card-text">
                                      For branding and information reasons, office signage boards in Mumbai are mandatory. These signs can comprise acrylic LED, reception signs, and other general alternatives customized to suit your corporate recognition. Our signage solutions make certain that your brand is exclusive with sophistication and excellence.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-15.webp')}}" class="why-card-img-top"
                                    alt="Building Signage ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Building Signage  </h3>
                                    <p class="card-text">
                                        Make your presence known with standardized building signage. These are crafted for exterior usage and built with weather-proof substances like stainless steel and acrylic signs. Ideal for exhibiting your company’s name or logo remarkably, outdoor sign boards ensure your brand gets observed.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-16.webp')}}" class="why-card-img-top"
                                    alt="Wall-Mounted Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Wall-Mounted Signage</h3>
                                    <p class="card-text">
                                        Use wall areas efficiently with wall-mounted signage. Perfect for depicting your company’s vision, goals, or other significant details, these signs are attainable in LED sign boards, acrylic signs, or SS signage. They give elegance to your interiors while catering to empirical reasons. 
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
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-17.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-17.webp')}}" class="img-fluid" alt="Office Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-18.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-18.webp')}}" class="img-fluid" alt="Office Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-19.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-19.webp')}}" class="img-fluid" alt="Office Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-20.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-20.webp')}}" class="img-fluid" alt="Office Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
           
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-21.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-21.webp')}}" class="img-fluid" alt="Office Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-22.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-22.webp')}}" class="img-fluid" alt="Office Signages in Mumbai"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-23.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-23.webp')}}" class="img-fluid" alt="Office Signages in Mumbai" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-24.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-24.webp')}}" class="img-fluid" alt="Office Signages in Mumbai"  style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">The office signage in Mumbai delivered by this company is of superior quality.  Strongly suggested!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Priya Sharma</div>
                                <div class="client-role">Graphic Designer, Graphics Private Limited</div>
                                
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
                        <p class="card-text testimonial-card-text">We required general Office Desk Signs for our reception place, and the team provided an attractive acrylic sign board with illuminating LED signage. Their service is unparalleled!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Rakesh Kumar</div>
                               <div class="client-role">Manager, Private Limited.</div>
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
                        <p class="card-text testimonial-card-text">The outdoor signage boards they supplied for our building are long-lasting and efficient. We utilized their LED sign board and glow sign board, and they’ve made a considerable impression on our clients!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Anita Desai</div>
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
                        <p class="card-text testimonial-card-text">“I’m really intrigued with their signage solutions. The glow sign board they manufactured for our office was built from standardized substances.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Sunil Mehta</div>
                                <div class="client-role">CEO, Private Limited.</div>
                                
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
                        <p class="card-text testimonial-card-text">We placed an order for safety signs and office signage boards in Mumbai from this company, and we couldn't be more happy. The quality of their digital signages and outdoor sign board has improved our workstation.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-33.webp')}}" alt="Sandeep Yadav" class="client-img">
                            <div>
                                <div class="client-name">Sandeep Yadav</div>
                                <div class="client-role">Operations Manager</div>
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
                                    <p class="card-text testimonial-card-text">The office signage in Mumbai delivered by this company is of superior quality.  Strongly suggested!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Priya Sharma</div>
                                            <div class="client-role">Graphic Designer, Graphics Private Limited</div>
                                           
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
                                    <p class="card-text testimonial-card-text">We required general Office Desk Signs for our reception place, and the team provided an attractive acrylic sign board with illuminating LED signage. Their service is unparalleled!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Rakesh Kumar</div>
                                            <div class="client-role">Manager, Private Limited.</div>
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
                                            <div class="client-name">Anita Desai</div>
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
                                    <p class="card-text testimonial-card-text">I’m intrigued with the LED sign and emergency exit lights they supplied. The exit sign board was particularly useful for our workers to seamlessly steer during contingencies</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Anita Desai</div>
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
                                    <p class="card-text testimonial-card-text">“I’m really intrigued with their signage solutions. The glow sign board they manufactured for our office was built from standardized substances.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Sunil Mehta</div>
                                            <div class="client-role">CEO, Private Limited.</div>
                                         
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
                                    <p class="card-text testimonial-card-text">We placed an order for safety signs and office signage boards in Mumbai from this company, and we couldn't be more happy. The quality of their digital signages and outdoor sign board has improved our workstation.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Sandeep Yadav</div>
                                            <div class="client-role">Operations Manager</div>
                                           
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
                What kinds of substances are utilized for office signages in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    
                    We provide a variety of substances for office signages in Mumbai, comprising:
                    <ul>
<li>Stainless Steel (SS): Long-lasting and polished, perfect for building signage and reception signs.</li>
<li>Acrylic: All-inclusive and made-to-order, appropriate for acrylic sign boards and acrylic letters.</li>
<li>LED: Energy-saving and bright, ideal for LED signage and glow sign boards.</li>
<li>Wood: Gives an organic feel and is usually used for office desk signs and outdoor signage.</li>
<li>Glass: Offers a sophisticated view, generally used for display signage and safety signs.</li>
                    </ul>
                </p>
            </div>
        </div>


        <div class="faq-item">
            <button class="faq-question">
                Can office signage be personalized to suit my brand?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Yes, we concentrate on producing general office signage boards in Mumbai that line up with your brand recognition. We provide several packaging types, colors, fonts, and finishes to make sure that your signage mirrors your company's reflection.  
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Do you offer installation services for office signage boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Definitely. We provide competent installation services for all our signage solutions, guaranteeing that your sign boards are safely mounted and placed for ultimate observability.                </p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">
                How much time does it take to produce and deliver office signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    The manufacturing and delivery time differs based on the intricacy and quantity of the order. For example, some manufacturers provide a delivery time of 7-8 days for office and building signage boards. We make an attempt to finish and render your order as soon as possible.  
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is the price of generating traditional office desk signs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    The price is based on aspects such as substances, size, design intricacy, and quantity. For instance, acrylic sign boards are attainable at several price points, with some manufacturers providing them at Rs 200 per inch. We offer competitive pricing and will provide a detailed quote according to your particular needs.  
                </p>
            </div>
        </div>
       
    </div>
</section>

@endsection