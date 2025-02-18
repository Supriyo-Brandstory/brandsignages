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
                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-1.webp')}}" alt="Office Signages in Mumbai">
                <div class="carousel-caption-custom">
                    <h1>Restroom Signs in Mumbai</h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-2.webp')}}" alt="Office Signages in Mumbai">
                <div class="carousel-caption-custom">
                    <h1>Restroom Signs in Mumbai </h1>
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
        <h2 class="hero-title">Importance of Restroom Signs    </h2>
        {{-- <p class="card-text text-center">Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.</p> --}}

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-3.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Restroom signs play an essential part in retaining comfort and attainability in public places. Whether it’s a workspace, a restaurant, or a shopping mall, transparent and observable restroom signs in Mumbai make certain that people can immediately find the facilities they require. They are crucial for generating a structured and dynamic atmosphere. Unisex restroom signs, for instance, boost equality and serve multiple requirements, making them perfect for advanced offices and public spaces.In commercial settings, office restroom signs not only support workers and guests but also give a competent feel. Superior substances like LED signs or polished signboards can improve the aesthetic charm while being operational. Contemporary LED sign boards are especially efficient as they are simple to locate and energy-saving.      
                </p>
              <p class="brand-description">
                Moreover, properly positioned washroom signs and toilet signs are crucial for maintaining cleanliness norms. Translucent indicators reduce chaos and smoothen foot congestion, especially in hectic locations like airports and shopping hubs. In Mumbai, where places are overflowing and lively, funding in high-class restroom signs is a smart selection for organizations and property managers.From trendy designs to modern LED alternatives, restroom signs offer transparency and fashion. Opting for the appropriate sign board confirms improved attainability and a favorable user experience for all.     
            </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Types of Restroom Signs We Deliver  </h2>
            <p class="card-text text-center">We focus on offering a huge collection of standardized restroom signs customized to your requirements. Whether you are seeking polished designs for offices or diplomatic alternatives for public areas, we guarantee simplicity, usefulness, and trend. Our restroom signs in Mumbai are crafted to fit every landscape, from corporate surroundings to commercial systems. Discover the kinds of restroom signs we render below to get the ideal solution for your place.    </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
           
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-4.webp')}}" class="why-card-img-top"
                        alt="Gender-Specific Restroom Signs ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Gender-Specific Restroom Signs </h3>
                        <p class="card-text">These restroom signs simply denote male and female washrooms, making sure of comfort and minimizing chaos. Obtained in a variety of patterns, comprising advanced LED signs and trendy signboards, they are ideal for offices, malls, schools, and other public places that emphasize transparent signage.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-5.webp')}}" class="why-card-img-top"
                            alt="Unisex Restroom Signs  ">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Unisex Restroom Signs  </h3>
                            <p class="card-text">Enhance extensiveness with our unisex restroom signs, which are appropriate for workspaces, restaurants, and retail outlets. These washroom signs are outlined to serve everyone, confirming fairness and attainability in common facilities while lining up with contemporary space design styles.</p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-6.webp')}}" class="why-card-img-top"
                        alt="Accessible Restroom Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Accessible Restroom Signs</h3>
                        <p class="card-text">Our obtainable restroom signs help people with special requirements, making public places more comprehensive. These toilet signs usually present raised dots or globally acknowledged symbols, making sure of simple illustration for all and abiding with accessibility norms.   </p>
                    </div>
                </div>
        </div>
        <div class="col">
            <div class="why-card card">
                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-7.webp')}}" class="why-card-img-top"
                    alt="Office Restroom Signs ">
                <div class="card-body why-card-body px-0">
                    <h3 class="why-text-red mb-3">Office Restroom Signs </h3>
                    <p class="card-text">Give a competent feel to your workspace with our office restroom signs. From glossy designs to glowing LED sign boards, we provide alternatives that mix operationality with beauty, producing a sleek and embracing appearance for your corporate atmosphere. Promote the functionality and visual attraction of your office with our superior signage solutions.  </p>
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
                                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-4.webp')}}" class="why-card-img-top"
                                    alt="Gender-Specific Restroom Signs ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Gender-Specific Restroom Signs </h3>
                                    <p class="card-text">These restroom signs simply denote male and female washrooms, making sure of comfort and minimizing chaos. Obtained in a variety of patterns, comprising advanced LED signs and trendy signboards, they are ideal for offices, malls, schools, and other public places that emphasize transparent signage.
                                 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-5.webp')}}" class="why-card-img-top"
                                    alt="Aesthetic Appeal">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Unisex Restroom Signs  </h3>
                                    <p class="card-text">
                                        Enhance extensiveness with our unisex restroom signs, which are appropriate for workspaces, restaurants, and retail outlets. These washroom signs are outlined to serve everyone, confirming fairness and attainability in common facilities while lining up with contemporary space design styles.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-6.webp')}}" class="why-card-img-top"
                                alt="Accessible Restroom Signs">
                            <div class="card-body why-card-body px-0">
                                <h3 class="why-text-red mb-3">Accessible Restroom Signs</h3>
                                <p class="card-text">Our obtainable restroom signs help people with special requirements, making public places more comprehensive. These toilet signs usually present raised dots or globally acknowledged symbols, making sure of simple illustration for all and abiding with accessibility norms.   </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-5.webp')}}" class="why-card-img-top"
                                    alt="Aesthetic Appeal">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Unisex Restroom Signs  </h3>
                                    <p class="card-text">
                                        Enhance extensiveness with our unisex restroom signs, which are appropriate for workspaces, restaurants, and retail outlets. These washroom signs are outlined to serve everyone, confirming fairness and attainability in common facilities while lining up with contemporary space design styles.

                                    </p>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-4">
                        <div class="why-card card">
                            <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-6.webp')}}" class="why-card-img-top"
                            alt="Accessible Restroom Signs">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Accessible Restroom Signs</h3>
                            <p class="card-text">Our obtainable restroom signs help people with special requirements, making public places more comprehensive. These toilet signs usually present raised dots or globally acknowledged symbols, making sure of simple illustration for all and abiding with accessibility norms.   </p>
                        </div>
                        </div>
                    </div>
                       
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-7.webp')}}" class="why-card-img-top"
                                    alt="Office Restroom Signs ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Office Restroom Signs </h3>
                                    <p class="card-text">Give a competent feel to your workspace with our office restroom signs. From glossy designs to glowing LED sign boards, we provide alternatives that mix operationality with beauty, producing a sleek and embracing appearance for your corporate atmosphere. Promote the functionality and visual attraction of your office with our superior signage solutions.  </p>
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





<section class="why-bg-light-pink py-5" style="background-color: #fff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Our Restroom Signage Services in Mumbai  </h2>
            <p class="card-text text-center">We render top-class restroom signage services to satisfy the multiple requirements of enterprises and public spaces. Whether you require fashionable office restroom signs or comprehensive unisex restroom signs, we are proficient in supplying standardized solutions. Our restroom signs in Mumbai are crafted to improve productivity, elegance, and attainability for any atmosphere. Discover the characteristics of our services below.  </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-8.webp')}}" class="why-card-img-top"
                        alt="Wide Range of Designs  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Wide Range of Designs  </h3>
                        <p class="card-text">
                        We provide a variety of designs to fit various spaces and choices. From advanced LED signs to exemplary signboards, our selection comprises washroom signs and toilet signs that merge fashion and simplicity. We also personalize designs to line up with your branding or space needs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-9.webp')}}" class="why-card-img-top"
                        alt="Quality and Durability   ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Quality and Durability     </h3>
                        <p class="card-text">
                           Our restroom signs are designed utilizing high-quality substances to ensure longevity and resistance. Whether it's an LED sign board or a customary signboard, our products bear regular wear and tear while retaining their visual charm.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-10.webp')}}" class="why-card-img-top"
                        alt="Installation and Maintenance">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Installation and Maintenance</h3>
                        <p class="card-text">
                          We offer competitive installation services for all our restroom signs in Mumbai to guarantee they are safely positioned and seamlessly visible. Moreover, we provide upkeep support to keep your signage in an extraordinary state over time.  
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-11.webp')}}" class="why-card-img-top"
                        alt="Product Warranty  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Product Warranty  </h3>
                        <p class="card-text">
                          All our restroom signage is available with a product warranty, giving you mental peace about standards and outcomes. Whether it’s unisex restroom signs or professional office restroom signs, our warranty confirms full contentment and dependability.
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
                                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-8.webp')}}" class="why-card-img-top"
                                    alt="Wide Range of Designs  ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Wide Range of Designs  </h3>
                        <p class="card-text">
                        We provide a variety of designs to fit various spaces and choices. From advanced LED signs to exemplary signboards, our selection comprises washroom signs and toilet signs that merge fashion and simplicity. We also personalize designs to line up with your branding or space needs.
                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-9.webp')}}" class="why-card-img-top"
                                    alt="Quality and Durability   ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Quality and Durability     </h3>
                                    <p class="card-text">
                                       Our restroom signs are designed utilizing high-quality substances to ensure longevity and resistance. Whether it's an LED sign board or a customary signboard, our products bear regular wear and tear while retaining their visual charm.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-10.webp')}}" class="why-card-img-top"
                                    alt="Installation and Maintenance">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Installation and Maintenance</h3>
                                    <p class="card-text">
                                      We offer competitive installation services for all our restroom signs in Mumbai to guarantee they are safely positioned and seamlessly visible. Moreover, we provide upkeep support to keep your signage in an extraordinary state over time.  
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
                                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-9.webp')}}" class="why-card-img-top"
                                    alt="Quality and Durability   ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Quality and Durability     </h3>
                                    <p class="card-text">
                                       Our restroom signs are designed utilizing high-quality substances to ensure longevity and resistance. Whether it's an LED sign board or a customary signboard, our products bear regular wear and tear while retaining their visual charm.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-10.webp')}}" class="why-card-img-top"
                                    alt="Installation and Maintenance">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Installation and Maintenance</h3>
                                    <p class="card-text">
                                      We offer competitive installation services for all our restroom signs in Mumbai to guarantee they are safely positioned and seamlessly visible. Moreover, we provide upkeep support to keep your signage in an extraordinary state over time.  
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-11.webp')}}" class="why-card-img-top"
                                    alt="Product Warranty  ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Product Warranty  </h3>
                                    <p class="card-text">
                                      All our restroom signage is available with a product warranty, giving you mental peace about standards and outcomes. Whether it’s unisex restroom signs or professional office restroom signs, our warranty confirms full contentment and dependability.
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
                <a href="{{asset('frontend/Images/new/restroom-signs-in-mumbai-12.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-12.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-signs-in-mumbai-13.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-13.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-signs-in-mumbai-14.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-14.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-signs-in-mumbai-15.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-15.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
           
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-signs-in-mumbai-16.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-16.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-signs-in-mumbai-17.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-17.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-signs-in-mumbai-18.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-18.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/restroom-signs-in-mumbai-19.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-19.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">We placed the order for an office restroom sign for our corporate building, and the class was far ahead of our expectations. The LED sign boards are advanced, reliable, and exactly fit our interior design.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
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
                        <p class="card-text testimonial-card-text">Their unisex restroom signs were a transformative breakthrough for our restaurant. They are extensive, trendy, and simple to locate. Highly suggest their signboard services!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Arjun Mehta</div>
                               
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
                        <p class="card-text testimonial-card-text">“Seeking trustworthy restroom signs in Mumbai was demanding until we got this company. Their washroom signs are standardized and absolutely fitted for our bustling shopping center.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Neha Patel</div>

                               
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
                        <p class="card-text testimonial-card-text">The toilet signs we bought were tailored for attainability, and they comprised raised dots. The team was technical, and the installation was prompt and effortless./p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Rohan Desai</div>
                               
                                
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
                        <p class="card-text testimonial-card-text">The polished LED signs for our office restrooms gave a competitive feel to our workstation. These sign boards are visually attractive and highly operational.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/restroom-signs-in-mumbai-33.webp')}}" alt="Anita Roy" class="client-img">
                            <div>
                                <div class="client-name">Anita Roy</div>
                              
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
                                    <p class="card-text testimonial-card-text">We placed the order for an office restroom sign for our corporate building, and the class was far ahead of our expectations. The LED sign boards are advanced, reliable, and exactly fit our interior design.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
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
                                    <p class="card-text testimonial-card-text">Their unisex restroom signs were a transformative breakthrough for our restaurant. They are extensive, trendy, and simple to locate. Highly suggest their signboard services!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Arjun Mehta</div>
                                            
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
                                    <p class="card-text testimonial-card-text">We placed the order for an office restroom sign for our corporate building, and the class was far ahead of our expectations. The LED sign boards are advanced, reliable, and exactly fit our interior design.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Neha Patel</div>
            
                                          
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
                                    <p class="card-text testimonial-card-text">We placed the order for an office restroom sign for our corporate building, and the class was far ahead of our expectations. The LED sign boards are advanced, reliable, and exactly fit our interior design.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Neha Patel</div>
            
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
                                    <p class="card-text testimonial-card-text">The toilet signs we bought were tailored for attainability, and they comprised raised dots. The team was technical, and the installation was prompt and effortless./p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Rohan Desai</div>
                                            
                                         
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
                                    <p class="card-text testimonial-card-text">The polished LED signs for our office restrooms gave a competitive feel to our workstation. These sign boards are visually attractive and highly operational.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Anita Roy</div>
                                          
                                           
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
                What substances are usually utilized for restroom signs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    We utilize high-class substances such as acrylic, metal, wood, and plastic for restroom signs. For advanced places, LED signs are a common preference due to their observability and fashion. Our signboards are crafted to persist, confirming longevity in congested sectors like offices and malls.  
                </p>
            </div>
        </div>


        <div class="faq-item">
            <button class="faq-question">
                Can restroom signs be tailored to suit office interiors?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Yes, we provide tailoring services for office restroom signs. You can select from several designs, colors, and substances to suit your interior decor. Whether it’s a glossy LED sign board or an exemplary signboard, we confirm it mixes effortlessly with your office elegance.   
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are unisex restroom signs appropriate for all kinds of commercial places? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Definitely. Unisex restroom signs are universal and perfect for workspaces, restaurants, and shopping hubs. They enhance extensiveness and comfort in shared accommodations, serving multiple requirements. </p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">
                Do you offer ADA-restrained restroom signs in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Yes, we offer ADA-restrained restroom signs in Mumbai. These signs comprise raised dots, tactile factors, and simple symbols, guaranteeing attainability for all, including people with disabilities.  
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How much time does it take to craft and render restroom signs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    The time span is based on the kind and personalization of the washroom signs. Usually, we outline and render within 7-10 working days, guaranteeing standardized toilet signs for your place.
                </p>
            </div>
        </div>
       
    </div>
</section>

@endsection