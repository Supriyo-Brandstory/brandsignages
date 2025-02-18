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
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-1.webp')}}" alt="Stainless Steel Sign Board Manufacturer Mumbai">
                <div class="carousel-caption-custom">
                    <h1>Stainless Steel Sign Board Manufacturer Mumbai </h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-2.webp')}}" alt="Stainless Steel Sign Board Manufacturer Mumbai">
                <div class="carousel-caption-custom">
                    <h1>Stainless Steel Sign Board Manufacturer Mumbai </h1>
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
        <h2 class="hero-title">Premium Stainless Steel Sign Boards in Mumbai  </h2>
        {{-- <p class="card-text text-center">Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.</p> --}}

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-3.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Are you searching for long-lasting and fashionable stainless steel sign boards in Mumbai? We are reliable steel sign board makers in Mumbai, emphasizing high-class ss sign boards outlined to uplift your brand existence.  Our metal sign boards are ideal for businesses seeking superior outdoor signage solutions. Whether it's a polished stainless steel board, an illuminating LED letter sign, or a traditional steel letter sign, we design each product with accuracy and caution.  
                </p>
              <p class="brand-description">
                From sophisticated stainless steel letters to bright glow sign boards, we serve multiple requirements. Our ss signage alternatives, comprising direction signs and letter signs, are perfect for indoor as well as outdoor usage. The resistant steel boards make certain of a durable influence, while the contemporary designs improve observability. For organizations that require exceptional sign boards, our steel LED signs and glow signs generate a fascinating impact, day or night. Rely on us for specialized metal signs, tailored to your instructions, whether it’s a stainless steel letter, ss letters, or an elegant steel sign board.Contact us soon to get masterly designed signage boards that depict your brand’s recognition and grasp attention seamlessly!
            </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for SS Sign Boards</h2>
            <p class="card-text text-center">When it comes to exclusive Ss sign boards, we are a reputable steel sign board maker in Mumbai. Here’s why enterprises rely on us.Select Brand Signage for trustworthy, cost-effective, and fashionable signage boards. Contact us soon for long-lasting ss signage that improves your brand's presence.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
           
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-4.webp')}}" class="why-card-img-top"
                        alt="Tailored Solutions ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Tailored Solutions </h3>
                        <p class="card-text">We generate extraordinary stainless steel sign boards customized to your particular requirements. Whether you require a metal sign board, a steel LED sign, or luxurious stainless steel letters, we supply made-to-order patterns to suit your choice. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-5.webp')}}" class="why-card-img-top"
                            alt="Quality Materials ">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Quality Materials </h3>
                            <p class="card-text">Our sign boards are built from the best stainless steel, ensuring persistence and durability to wear. From ss letters to glow sign boards, each product is designed with accuracy and premier substances.  </p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-6.webp')}}" class="why-card-img-top"
                        alt="Timely Delivery  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Timely Delivery  </h3>
                        <p class="card-text">We comprehend the significance of deadlines. Our team makes certain of immeiacy delivery of your outdoor signage, consisting of direction signs, LED letter signs, and steel boards, so your business is distinct without obstruction.   </p>
                    </div>
                </div>
        </div>
          
            
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-8.webp')}}" class="why-card-img-top"
                        alt="Reasonable Pricing">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Reasonable Pricing</h3>
                        <p class="card-text">Standardization doesn’t have to be costly. We provide combative costs on all Ss sign boards, from metal signs to stainless steel boards, making top-class signage attainable to everyone.  </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-8.webp')}}" class="why-card-img-top"
                        alt="2-Year Warranty  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">2-Year Warranty  </h3>
                        <p class="card-text">Our steel sign boards are available with a 2-year warranty, giving you a state of mental peace with each stainless steel letter sign or led sign board.  
                        </p>
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
                                    alt="Tailored Solutions ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Tailored Solutions </h3>
                                    <p class="card-text">We generate extraordinary stainless steel sign boards customized to your particular requirements. Whether you require a metal sign board, a steel LED sign, or luxurious stainless steel letters, we supply made-to-order patterns to suit your choice. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-5.webp')}}" class="why-card-img-top"
                                    alt="Aesthetic Appeal">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Quality Materials </h3>
                                    <p class="card-text">
                                        Our sign boards are built from the best stainless steel, ensuring persistence and durability to wear. From ss letters to glow sign boards, each product is designed with accuracy and premier substances.  

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-6.webp')}}" class="why-card-img-top"
                                alt="Timely Delivery  ">
                            <div class="card-body why-card-body px-0">
                                <h3 class="why-text-red mb-3">Timely Delivery  </h3>
                                <p class="card-text">We comprehend the significance of deadlines. Our team makes certain of immeiacy delivery of your outdoor signage, consisting of direction signs, LED letter signs, and steel boards, so your business is distinct without obstruction.   </p>
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
                            alt="Timely Delivery  ">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Timely Delivery  </h3>
                            <p class="card-text">We comprehend the significance of deadlines. Our team makes certain of immeiacy delivery of your outdoor signage, consisting of direction signs, LED letter signs, and steel boards, so your business is distinct without obstruction.   </p>
                        </div>
                        </div>
                    </div>
                       
                     
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-8.webp')}}" class="why-card-img-top"
                                    alt="Reasonable Pricing">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Reasonable Pricing</h3>
                                    <p class="card-text">Standardization doesn’t have to be costly. We provide combative costs on all Ss sign boards, from metal signs to stainless steel boards, making top-class signage attainable to everyone.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-8.webp')}}" class="why-card-img-top"
                                    alt="2-Year Warranty  ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">2-Year Warranty  </h3>
                                    <p class="card-text">Our steel sign boards are available with a 2-year warranty, giving you a state of mental peace with each stainless steel letter sign or led sign board.  
                                    </p>
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
        <h2 class="hero-title">Types of Steel Sign Boards </h2>
        <p class="card-text text-center">Steel sign boards are the ideal solution for organizations seeking persistent, fashionable, and influential signage. As prominent steel sign board makers in Mumbai, we provide a number of alternatives to fulfill your requirements.  </p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-9.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Stainless Steel (SS) Sign Boards   </h2>
                <p class="brand-description">
                    Our ss sign boards are outlined with high-class stainless steel for longevity and a sleek appearance. These stainless steel signs are perfect for indoor and outdoor signage, guaranteeing durable sophistication.
                </p>
                <h2 class="brand-title">Etched Steel Sign Boards  </h2>
                <p class="brand-description">
                    Etched metal sign boards are designed with complex details, making them ideal for exhibiting logos or designs. Their luxurious look gives a feel of class to any signboard.  
                </p>
                <h2 class="brand-title">Backlit Steel Sign Boards   </h2>
                <p class="brand-description">
                    Improve observability with our steel LED signs. These LED sign boards glow from behind, producing a remarkable glow outcome that grasps awareness day or night.
                </p>
                
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Steel Letter Sign Boards </h2>
                <p class="brand-description">
                    Made-to-order steel letter signs are ideal for brand names and logos. These letter signs, built with exact cut ss letters or stainless steel letters, make sure of a distinct appearance for your enterprise. 
                </p>
                <h2 class="brand-title">Steel Frame Sign Boards </h2>
                <p class="brand-description">
                    Our steel frame sign boards render a vigorous structure with polished designs. These metal signs are flexible, merging power and fashion for indoor and outdoor usage. 
                </p>
                <h2 class="brand-title">Powder-Coated Steel Sign Boards   </h2>

                <p class="brand-description">
                    For a contemporary coating, our powder-coated steel boards are an extraordinary selection. They are long-lasting to deterioration and are available in a variety of colors, guaranteeing that your signage board is exclusive.
                </p>
                <p class="brand-description">Whether you require a direction sign, glow sign, or general led letter sign, we supply personalized solutions. Contact us to explore the ideal ss sign board for your organization. Let us give life to your brand with superior steel sign boards!</p>
               
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-10.webp')}}" alt="Prohibitory Signages" class="img-fluid">
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
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-17.webp')}}" data-lightbox="catalogue" data-title="Image 3">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-17.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-18.webp')}}" data-lightbox="catalogue" data-title="Image 4">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-18.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-19.webp')}}" data-lightbox="catalogue" data-title="Image 5">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-19.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-20.webp')}}" data-lightbox="catalogue" data-title="Image 6">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-20.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
           
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-21.webp')}}" data-lightbox="catalogue" data-title="Image 7">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-21.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-22.webp')}}" data-lightbox="catalogue" data-title="Image 8">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-22.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-23.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-23.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/new/office-signages-in-mumbai-24.webp')}}" data-lightbox="catalogue" data-title="Image 2">
                <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-24.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">I required a resistant and sophisticated stainless steel sign for my office, and they rendered far ahead of our expectations. The ss sign board looks excellent!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Rajesh Mehta</div>
                                
                                
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
                        <p class="card-text testimonial-card-text">Their minute details in shaping my steel letter sign were intriguing. I strongly suggest them for any person looking for standardized sign boards.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Anita Kapoor</div>
                               
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
                        <p class="card-text testimonial-card-text">Our new LED letter sign has absolutely modified our storefront. The team are the finest steel sign board makers in Mumbai!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <div>
                                <div class="client-name">Siddharth Shah</div>
                                
                               
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
                        <p class="card-text testimonial-card-text">I wished to have a fashionable metal sign board for my restaurant, and they supplied the ideal solution. Excellent work on the ss signage!</p>
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
                        <p class="card-text testimonial-card-text">The general glow sign board they built for us is remarkable. It’s persistent, sophisticated, and exactly what we require for our outdoor signage.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/office-signages-in-mumbai-33.webp')}}" alt="Vikram Desai" class="client-img">
                            <div>
                                <div class="client-name">Vikram Desai</div>
                               
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
                                    <p class="card-text testimonial-card-text">I required a resistant and sophisticated stainless steel sign for my office, and they rendered far ahead of our expectations. The ss sign board looks excellent!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Rajesh Mehta</div>
                                            
                                           
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
                                    <p class="card-text testimonial-card-text">Their minute details in shaping my steel letter sign were intriguing. I strongly suggest them for any person looking for standardized sign boards.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Anita Kapoor</div>
                                            
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
                                    <p class="card-text testimonial-card-text">Our new LED letter sign has absolutely modified our storefront. The team are the finest steel sign board makers in Mumbai!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Siddharth Shah</div>
                                            
                                          
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
                                    <p class="card-text testimonial-card-text">Our new LED letter sign has absolutely modified our storefront. The team are the finest steel sign board makers in Mumbai!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Siddharth Shah</div>
                                            
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
                                    <p class="card-text testimonial-card-text">I wished to have a fashionable metal sign board for my restaurant, and they supplied the ideal solution. Excellent work on the ss signage!</p>
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
                                    <p class="card-text testimonial-card-text">The general glow sign board they built for us is remarkable. It’s persistent, sophisticated, and exactly what we require for our outdoor signage.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <div>
                                            <div class="client-name">Vikram Desai</div>
                                           
                                           
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
                What is the price of attaining a general steel signboard built in Mumbai?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    
                    The price of a general steel signboard is based on aspects such as size, design intricacy, and varnish. As pioneering steel sign board makers in Mumbai, we offer reasonable costs for all kinds of metal sign boards, making certain that they are worth the money.
                </p>
            </div>
        </div>


        <div class="faq-item">
            <button class="faq-question">
                How much time does it take to produce and install a steel signboard in Mumbai? 
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Generally, it takes 7–10 days to outline, produce, and install a custom ss signboard. Time durations may alter as per design intricacy and personalization.  
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What are the advantages of utilizing stainless steel for signboards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Stainless steel signs are long-lasting, erosion-proof, and low upkeep. They have kept their polished look for years, making them perfect for outdoor signage and long-run utility.    
                </p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">
                Can I personalize the size, design, and coating of my steel sign board?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Yes, we provide full personalization. From stainless steel letters and steel LED signs to exceptional coatings and sizes, your sign board can be customized to fulfill your particular requirements.
                </p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are steel sign boards appropriate for indoor as well as outdoor usage?  
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>
                    Definitely! SS sign boards are flexible and shaped for indoor and outdoor signs. Their longevity and fashionable attraction make them ideal for all atmospheres.  
                </p>
                <p>If you’re seeking premier signboards, contact us soon. We emphasize designing high-class SS signage to fulfill your business needs.</p>
            </div>
        </div>
       
    </div>
</section>

@endsection