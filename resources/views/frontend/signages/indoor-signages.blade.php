@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/indoor-signage.webp')}}" alt="Indoor Signs">
                <div class="carousel-caption-custom">
                    <h1>Premium-Quality Custom Indoor Signages</h1>
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
        <h2 class="hero-title">Indoor Signages for Office and Retail Spaces</h2>   
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/indoor-signage2.webp')}}" alt="Indoor Signs" class="img-fluid">
                </div>
            </div>
            
            <div class="col-lg-6">
                <p class="brand-description">
                Indoor signages are exceptional branding tool to elevate interior branding. This can be wayfinding signage, 
                reception signage, or nameplates that maintain a sleek and professional workspace. Whether it is an office space 
                or a retail store, indoor signage is a must-have for brands & businesses.<br>
                At Brand Signages, we transform indoor spaces with custom interior office signs for a jaw-dropping visual experience. 
                As industry leader in signage & sign manufacturing, we know how indoor signages can act as a strategic brand touchpoint. 
                We are here to reinforce your company and retail space’s identity with modern indoor signage solutions and leave a lasting first 
                impact. Crafted with premium materials and tailored to match your brand aesthetics, our signage solutions blend innovation with precision, making every indoor space an extension of your brand’s story. 
            </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        
        <div class="row align-items-center">
            
            <div class="col-lg-6 order-2 order-lg-1">
                <p class="brand-description">
                We offer indoor signages in a variety of materials designed to offer durability, 
                aesthetics, and premium look. Here are the options available at Brand Signages:
                </p>
                <p class="brand-description">
                <ul>
                    <li><a href="{{route('arcylic_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">Acrylic Sign Boards</a></li>
                    <li><a href="{{route('metal_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">Metal Sign Boards</a></li>
                    <li><a href="{{route('digital_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">Digital Signage</a></li>
                    <li><a href="{{route('led_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">LED Sign Boards</a></li>
                    <li><a href="{{route('neon_signages')}}" style="text-decoration: unset;color:#E43D12;font-weight: bold;">Neon Signage</a></li>
                </ul>
                As a reliable manufacturer of custom indoor business signs, we blend creativity and professional appeal to every design.
                </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/reception-indoor-sign.webp')}}" alt="Reception Indoor Signs" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>


<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Reasons for Choosing Our Indoor <br> Signs for Business</h2>
            <p class="card-text text-center">What do people look into when they enter your office? Office interior design plays a significant role in establishing brand identity. <br> Therefore choosing the right indoor signs for business can make a difference from others. Our indoor signage is crafted with long- <br> lasting durable material to meet the standard quality. Our signage solution is available in customized design as well and you can also <br> choose interior signage for business from our wide range of templates. Explore our collection for your latest indoor signage.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
           
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/indoor-signage4.webp')}}" class="why-card-img-top" alt="Durable Material">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Durable Material</h3>
                        <p class="card-text">Our office indoor signage is made with durable material that will last a long time. Whether you choose metal, acrylic, or wooden material, our office signage is your permanent solution. Share your preference, and get the best interior signage solutions for your business. Our interior office signs are not only a communication medium but also significant in building identity. </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/indoor-signage5.webp')}}" class="why-card-img-top" alt="Best Resolution Printing">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Best Resolution Printing</h3>
                        <p class="card-text">We use the best-resolution printing technology to deliver unmatched quality outdoor and indoor signage for your company. Whether it is an office lobby or a retail shop, every detail is maintained to provide long-standing indoor signage. It ensures interior signage will be close to your brand value, motivate your employees, and make a professional connection.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/indoor-signage6.webp')}}" class="why-card-img-top" alt="Customized Designs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Customized Designs</h3>
                        <p class="card-text">Understanding your business needs which help us to meet your requirements for interior office signs. So, connect with us for your personalized office signage that can express your brand identity to the world. You will get guidance from our experienced team and the best option for your business indoor signage.</p>
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
                                    <p class="card-text">Our office indoor signage is made with durable material that will last a long time. Whether you choose metal, acrylic, or wooden material, our office signage is your permanent solution. Share your preference, and get the best interior signage solutions for your business. Our interior office signs are not only a communication medium but also significant in building industry identity. Let us collaborate with you and enhance your brand presence!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/indoor-signage5.webp')}}" class="why-card-img-top" alt="Best Resolution Printing">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Best Resolution Printing</h3>
                                    <p class="card-text">We use the best-resolution printing technology to deliver unmatched quality outdoor and indoor signage for your company. Whether it is an office lobby or a retail shop, every detail is maintained to provide long-standing indoor signage. It ensures interior signage will be close to your brand value, motivate your employees, and make a professional connection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/indoor-signage6.webp')}}" class="why-card-img-top" alt="Customized Designs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Customized Designs</h3>
                                    <p class="card-text">Understanding your business needs which help us to meet your requirements for interior office signs. So, connect with us for your personalized office signage that can express your brand identity to the world. You will get guidance from our experienced team and the best option for your business indoor signage.</p>
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
        <h2 class="hero-title">Types of Indoor Signages We Offer</h2>
        <p class="card-text testimonial-card-text text-center pb-2">Brand Signages offers various types of indoor signage solutions tailored to meet various needs.<br> Here are the types in detail:</p>
        
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
                    <img src="{{asset('frontend/Images/digital-signage23.webp')}}" alt="Indoor Signs" class="img-fluid">
                </div>
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
            The right indoor signage, how do you choose it for your business?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>First, you have to understand branding and consider your target audience, including business goals, and space layout. Second, prioritize design alignment, visibility, and functionality to ensure indoor signage enhances customer experience and supports your brand.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            What are the main signage categories?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>The main signage categories are directional, branding, and purchase signage. Along with, informational signage, safety, and promotional signage are also used for educating visitors, building brand identity, providing information, and boosting sales.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            What material are signs made of?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Signs are made of different materials, such as PVC, wood, glass, metal, acrylic, and foam board for aesthetic & sleekness for outdoor and indoor signage. Which types of material are used in office signage, depends on the company’s types and its requirements. After understanding company value and business, we will give the durable material for outdoor- indoor signage.</p>
          </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            What is temporary signage?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Temporary signage is generally used for shirt time events or a one day event. For example, if you do a promotion or sale or any kind of deal for a short period, temporary signage is the best option to promote your offers or business. So, it can be said that temporary signage is used for marketing purposes.</p>
         </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            What is the difference between signs and signage?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
            <p>Sign Vs Signage-what is the difference between them- sign is used to convey some specific information like a brand logo or company name and is used to display directions. On the other hand, signage is the collective of signs. It is used together to convey messages.</p>
             </div>
      </div>
    </div>
  </section>
  @endsection