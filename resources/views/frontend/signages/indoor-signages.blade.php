@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/new-indoor-business-sign.webp')}}" alt="Indoor Business Signs">
                <div class="carousel-caption-custom">
                    <h1>Indoor Business Signs for Modern Spaces</h1>
                     <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                        </div>
                </div>
            </div>

        </div>
    </div>
</section>




<section>
    <div class="container pb-0 pt-0 pb-lg-5 pt-lg-5 " id="gallery-container">
        <h2 class="hero-title  mb-4">Transform Your Space with Custom Indoor <br>Business Signs by Brand Signages </h2>
        <p class=" text-center mb-5">Indoor signage is an exceptional branding tool to elevate interior branding. While you need to choose the right signage company, 
            like <a href="{{route('index')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">Brand Signages</a>. We transform indoor spaces with custom indoor business signs for a jaw-dropping visual experience. As an industry leader in signboard 
            manufacturing, we know how indoor signage can act as a strategic touchpoint to grab customer attention.  
        
            <br>You can opt for wayfinding signage, reception signage, nameplates, or directly contact our experts for sleek and professional signage designs. Indoor 
            signage is a must-have for brands & businesses, while Brand Signages is your go-to option for interior branding.
            <br>Modern indoor signs are suitable for a range of businesses, like retail, corporate, hotels, and commercial spaces. Crafted with premium materials and 
            tailored to match your brand aesthetics, our signage solutions blend innovation with precision. Have a look at our recent works, find your option, or <a href="{{route('contact_us')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">connect 
            with us</a> for custom indoor signage solutions. 
        </p>    

        <div class=" align-items-center">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/office-sign-1.webp')}}" data-lightbox="Acrylic Logo Sign for Businesses" data-title="Image 1">
                    <img src="{{asset('frontend/Images/office-sign-1.webp')}}" class="img-fluid" alt="Acrylic Logo Sign for Businesses" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/office-sign-2.webp')}}" data-lightbox="Indoor Metal Sign Design" data-title="Image 2">
                    <img src="{{asset('frontend/Images/office-sign-2.webp')}}" class="img-fluid" alt="Indoor Metal Sign Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/office-sign-3.webp')}}" data-lightbox="Acrylic Indoor Sign Design" data-title="Image 3">
                    <img src="{{asset('frontend/Images/office-sign-3.webp')}}" class="img-fluid" alt="Acrylic Indoor Sign Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/office-sign-4.webp')}}" data-lightbox="LED Signage Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/office-sign-4.webp')}}" class="img-fluid" alt="LED indoor Signage Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/office-sign-5.webp')}}" data-lightbox="LED Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/office-sign-5.webp')}}" class="img-fluid" alt="LED Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/office-sign-6.webp')}}" data-lightbox="Indoor Logo Sign Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/office-sign-6.webp')}}" class="img-fluid" alt="Indoor Logo Sign Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/office-sign-7.webp')}}" data-lightbox="Stainless Steel Indoor Sign Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/office-sign-7.webp')}}" class="img-fluid" alt="Stainless Steel Indoor Sign Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/office-sign-8.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/office-sign-8.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section>


<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Brand Signages for <br>Indoor Business Signs?</h2>
            <p class="card-text text-center">Brand Signages is a premier indoor business signage maker working with brands across India. We design customized indoor signs for businesses on an affordable budget with unmatched quality. We have pre-designed templates, we also offer customized designs, bulk orders, exciting discounts, and on-time delivery. Brand Signages ensures that you get the best quality products at an affordable price.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
           
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/indoor-signage4.webp')}}" class="why-card-img-top" alt="Durable Material">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Durable Material</h3>
                        <p class="card-text">Our indoor business signs are made with durable materials, built to last, and ensure long-lasting performance. Our indoor signs are designed to meet quality standards and help you get a long-term solution for indoor use. Share your preferences and get the best interior signage solutions tailored for your business. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/indoor-signage5.webp')}}" class="why-card-img-top" alt="Best Resolution Printing">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Professional Appeal</h3>
                        <p class="card-text">Whether it's a corporate space, retail environment, or any indoor business setting, we ensure every detail is carefully crafted to deliver durable and impactful signage. Our indoor signs align with your brand values, enhance the ambiance, and foster a professional connection with customers and employees alike.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/indoor-signage6.webp')}}" class="why-card-img-top" alt="Customized Designs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Customized Designs</h3>
                        <p class="card-text">We take the time to analyze your needs, enabling us to deliver interior signs that align perfectly with your brand aesthetics. We design the best indoor signage for retail, commercial, and corporate offices that provides effective communication. Connect with our experts for personalized signage solutions to enhance your brand aesthetics.</p>
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
                                <img src="{{asset('frontend/Images/indoor-signage4.webp')}}" class="why-card-img-top" alt="Durable Material">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Durable Material</h3>
                                    <p class="card-text">Our indoor business signs are made with durable materials, built to last, and ensure long-lasting performance. Our indoor signs are designed to meet quality standards and help you get a long-term solution for indoor use. Share your preferences and get the best interior signage solutions tailored for your business. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/indoor-signage5.webp')}}" class="why-card-img-top" alt="Best Resolution Printing">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Professional Appeal</h3>
                                    <p class="card-text">Whether it's a corporate space, retail environment, or any indoor business setting, we ensure every detail is carefully crafted to deliver durable and impactful signage. Our indoor signs align with your brand values, enhance the ambiance, and foster a professional connection with customers and employees alike.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/indoor-signage6.webp')}}" class="why-card-img-top" alt="Customized Designs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Customized Designs</h3>
                                    <p class="card-text">We take the time to analyze your needs, enabling us to deliver interior signs that align perfectly with your brand aesthetics. We design the best indoor signage for retail, commercial, and corporate offices that provides effective communication. Connect with our experts for personalized signage solutions to enhance your brand aesthetics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>

        </div>
    </div>
</section>



<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Clear & Captivating Indoor Signs for Every Space</h2>
        <p class="card-text testimonial-card-text text-center pb-2">Your interior branding has an impact on how people perceive your retail store or office. Indoor office signs are the best way to enhance your indoor space. Brand Signages offers various alternatives of indoor signage solutions tailored to meet various needs. We also offer customized indoor signage solutions in a variety of sizes, materials, and designs for brands across India.</p>
        
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/indoor-signage7.webp')}}" alt="Indoor Signs" class="img-fluid">
                </div>
            </div>
            
            <div class="col-lg-6">
                <h2 class="brand-title">Directional Indoor Signages</h2>
                <p class="brand-description">
                    We design custom directional and navigational indoor signages for offices, retail stores, buildings, and hospitals. </p>
                <p class="brand-description">
                    Whether it’s room number, floor directories, or path arrows, our indoor signages are designed to be visually appealing. They are made with durable materials with a sleek design to be visible in high-traffic areas.</p>
                <h2 class="brand-title">Branding Interior Signages</h2>
                <p class="brand-description">
                    Indoor signages like acrylic boards, neon lights, and digital displays are also used as a branding tool in various industries. Whether it is a company logo, reception, or conference room, we design custom signages to match your brand’s vision.     
                </p>
                <p class="brand-description">
                    We strategically choose color, fonts, and typography to reinforce company ethos and brand image. Whether it is metal base signage or acrylic signage, our custom indoor office signages will resonate with brand value and identity.     
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        
        <div class="row align-items-center">
            
            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Point of Purchase Signages</h2>
                <p class="brand-description">
                    Point of Purchase Signages or POP displays are a must-have part of your marketing strategy to influence buyers. These signs generally present promotional offers, price displays, or product information. 
                </p>
                <p class="brand-description">
                    This type of signage is placed near outlets, product displays, shopping malls, or checkout counters. Our purchase signages will meet your business needs by successfully engaging with your customers or clients.  
                </p>
                <p class="brand-description">
                    Connect with Brand Signage and make your interior signage an effective way of communication.  
                </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/digital-signage-benefits.webp')}}" alt="Indoor Signs" class="img-fluid">
                </div>
            </div>

            <div class="mt-4">
                <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
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
                        <p class="card-text testimonial-card-text">I got the best quality branding interior signage which turned out amazing! I love the sleek design that perfectly blends the company's values and has received countless compliments from visitors. It truly enhances our office space!</p> 
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/anil-kumar.webp')}}" alt="Anil Kumar" class="client-img">
                            <div>
                                <div class="client-name">Anil Kumar</div>
                                <div class="client-role">Home Decor Brand Founder</div>
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
                        <p class="card-text testimonial-card-text">I purchased interior office signs from Brand Signage. It helped us highlight promotions effectively. Sales have noticeably increased, and customers find it easier to navigate our store. I am happy with the final results after putting it up!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/nitesh-r.webp')}}" alt="Nitish R" class="client-img">
                            <div>
                                <div class="client-name">Nitish R</div>
                                <div class="client-role">Businessman</div>
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
                        <p class="card-text testimonial-card-text">From consultation to installation, the team of Brand Signage was professional and efficient. Their suggestions gave us the best custom indoor signs which are durable and beautifully crafted. We’ll return for future projects!</p> 
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/sudip-gupta.webp')}}" alt="Sudip Gupta" class="client-img">
                            <div>
                                <div class="client-name">Sudip Gupta</div>
                                <div class="client-role">Businessman</div>
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
                        <p class="card-text testimonial-card-text">Our new sign board and wall graphics have transformed our workspace. They’re eye-catching and trendy, making a strong impression on everyone who walks in.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/baibhab-s.webp')}}" alt="Baibhab S" class="client-img">
                            <div>
                                <div class="client-name">Baibhab S</div>
                                <div class="client-role">Agency Founder</div>
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
                        <p class="card-text testimonial-card-text">The indoor signage was worth the money. It attracts a lot of customers and has increased our sales significantly. It also adds a premium look to our brand. I highly recommend it!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/dhruva.webp')}}" alt="Dhruva" class="client-img">
                            <div>
                                <div class="client-name">Dhruva</div>
                                <div class="client-role">Store Owner</div>
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
                                    <p class="card-text testimonial-card-text">I got the best quality branding interior signage which turned out amazing! I love the sleek design that perfectly blends the company's values and has received countless compliments from visitors. It truly enhances our office space!</p> 
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/anil-kumar.webp')}}" alt="Anil Kumar" class="client-img">
                                        <div>
                                            <div class="client-name">Anil Kumar</div>
                                            <div class="client-role">Home Decor Brand Founder</div>
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
                                    <p class="card-text testimonial-card-text">I purchased interior office signs from Brand Signage. It helped us highlight promotions effectively. Sales have noticeably increased, and customers find it easier to navigate our store. I am happy with the final results after putting it up!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/nitish-r.webp')}}" alt="Nitish R" class="client-img">
                                        <div>
                                            <div class="client-name">Nitish R</div>
                                            <div class="client-role">Businessman</div>
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
                                    <p class="card-text testimonial-card-text">From consultation to installation, the team of Brand Signage was professional and efficient. Their suggestions gave us the best custom indoor signs which are durable and beautifully crafted. We’ll return for future projects!</p> 
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/sudip-gupta.webp')}}" alt="Sudip Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Sudip Gupta</div>
                                            <div class="client-role">Businessman</div>
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
                                    <p class="card-text testimonial-card-text">From consultation to installation, the team of Brand Signage was professional and efficient. Their suggestions gave us the best custom indoor signs which are durable and beautifully crafted. We’ll return for future projects!</p> 
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/sudip-gupta.webp')}}" alt="Sudip Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Sudip Gupta</div>
                                            <div class="client-role">Businessman</div>
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
                                    <p class="card-text testimonial-card-text">Our new sign board and wall graphics have transformed our workspace. They’re eye-catching and trendy, making a strong impression on everyone who walks in.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/baibhab-s.webp')}}" alt="Baibhab S" class="client-img">
                                        <div>
                                            <div class="client-name">Baibhab S</div>
                                            <div class="client-role">Agency Founder</div>
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
                                    <p class="card-text testimonial-card-text">The indoor signage was worth the money. It attracts a lot of customers and has increased our sales significantly. It also adds a premium look to our brand. I highly recommend it!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/dhruva.webp')}}" alt="Dhruva" class="client-img">
                                        <div>
                                            <div class="client-name">Dhruva</div>
                                            <div class="client-role">Store Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <div class="testimonial-carousel-controls">
                <button id="prevButton" class="testimonial-carousel-control" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i> 
                </button>
                <button id="nextButton" class="testimonial-carousel-control" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i> 
                </button>
            </div>

            <div class="carousel-indicators testimonial-carousel-indicators">
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
      <h1 class="faq-title">FAQS</h1>
      
      <div class="faq-item">
        <button class="faq-question">
            What are indoor business signs, and why are they important for my brand?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Indoor business signs are visual displays placed inside offices, retail stores, or commercial buildings to communicate, guide customers, and improve brand identity. They play a key role in creating a professional environment, improving navigation, and leaving a lasting impression on visitors and customers.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
         Which types of indoor signs are commonly used in offices & retail spaces?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Common types include reception signs, directional signs, acrylic logo signs, wall graphics, room identification signs, safety signs, and digital displays. These signs enhance aesthetics while ensuring efficient internal communication and brand visibility.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
           What materials are typically used to create durable indoor business signs?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Indoor signs are made from materials like acrylic, PVC, foam board, aluminum, glass, vinyl, and LED panels. The choice depends on design preferences, branding needs, durability, and budget. Acrylic and LED are especially popular for modern, premium indoor signage.</p>
          </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
           Can indoor business signs be customized to match my brand identity?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Yes, indoor signs can be fully customized in terms of color, size, typography, material, and lighting to reflect your brand’s personality. Custom signage ensures consistency in branding across all physical touchpoints within your business premises.</p>
         </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
           Do indoor business signs require maintenance or replacement over time?W
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
            <p>While indoor signs are more protected from weather elements, regular cleaning and occasional maintenance help preserve their appearance. Over time, you may need to update them to match rebranding, design upgrades, or wear and tear.</p>
             </div>
      </div>
    </div>
  </section>


  @endsection