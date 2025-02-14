@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/neon-image.webp')}}" alt="Slide 1">
                <div class="carousel-caption-custom">
                    <h1>Best Neon Sign Manufacturers for Custom Signages</h1>
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
        <h2 class="hero-title">We are #1 Neon Sign Manufacturers</h2>
        
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/neon-image2.webp')}}" alt="Cafe Rosco Signage" class="img-fluid">
                </div>
            </div>
            
            <div class="col-lg-6">
                <p class="brand-description">
                Planning to decorate your personal or professional space with trendy and stylish neon signs?  With so many options available, choosing the right neon sign manufacturer can be challenging. That’s where Brand Signages stands out as a trusted name, offering a wide range of exquisite and durable neon lights. Top businesses rely on us for custom-made neon signs that perfectly combine quality and style.</p>
                <p class="brand-description">
                As a leading neon sign manufacturing company, Brand Signages offers exquisite neon signs for retail, office, and other spaces. Our experts pay close attention to your needs and preferences when making the signs. Thus, keeping our customers’ satisfaction a priority, we ensure that we provide top-notch neon signs that can create your dream ambiance with their dramatic and glowing appearance.</p>
                <p class="brand-description">
                    Whether it is neon signs for shops, and offices or neon lights for bedrooms, our every product undergoes detailed quality checks and thus we provide best-in-class neon signs for you. Being made of the highest-quality material, our neon signs can be used for diverse purposes including advertising, decoration, gifting, warning signs, etc. The artistic design curved on them and their illuminated aura make them a go-to signage option for you.</p>
                <p class="brand-description">
                Whether it is neon signs for shops and offices, our every product undergoes detailed quality checks and thus we provide best-in-class neon signs for you. Being made of the highest-quality material, our neon signs can be used for diverse purposes including advertising, decoration, gifting, etc. Get quality neon signs crafted according to your individual preferences from Brand Signage and enliven your space effortlessly.</p>
            </div>
        </div>
    </div>
</section>


<section class="why-bg-light-pink py-lg-5 py-md-3 py-sm-2 py-3">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for Custom-Made <br> Neon Signs</h2>
            <p class="card-text text-center">Neon signs are often mass-produced. Even if it is customised, personalisation options are not enough. Keeping this in mind, we decided <br> to produce neon signs with numerous customization options. However, Reasons why we are the first choice for neon signs include:</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/neon-image7.webp')}}" class="why-card-img-top" alt="Consulting">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Purchasing process</h3>
                        <p class="card-text">We, with an efficient team, maintain a smooth and transparent process whenever customers approach us to purchase neon signs for rooms, shops and other places in their homes and workplaces.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/neon-image6.webp')}}" class="why-card-img-top" alt="Designs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Best Quality Products</h3>
                        <p class="card-text">Regardless of what happens, Brand Signage does not prefer to compromise product quality. Instead of focusing only on maximising our revenue, we tend to pay keen attention to maximising the value we provide to our buyers.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/neon-image2.webp')}}" class="why-card-img-top" alt="Workforce">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Custom Options</h3>
                        <p class="card-text">We first understand what your specific choices and requirements are. Then, depending on your individual preferences, we offer you top-rated neon signs that serve your purposes well.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/neon-image5.webp')}}" class="why-card-img-top" alt="Workforce">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Top-class Craftmanship</h3>
                        <p class="card-text">Picking up the right talents and empowering them with the right resources is what we do at Brand Signage. This way, we are able to ensure that each of our products showcases top-class craftsmanship.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/neon-image4.webp')}}" class="why-card-img-top" alt="Quality">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Power Efficient</h3>
                        <p class="card-text">Our neon signs are known for their bright shine while being extremely energy efficient. Gorgeous bright ambience without high electricity bills is ensured with the neon signs we offer to you!</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/neon-image3.webp')}}" class="why-card-img-top" alt="Customer Service">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Guaranteed Customer Satisfaction</h3>
                        <p class="card-text">As one of the leading neon sign manufacturers, our aim is the complete satisfaction of our buyers. From selecting customisation options to getting the delivery in a hassle-free way- every step of our product delivery is supervised under expert discretion.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="signageCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-3 align-items-start">
                        <div class="col-md-4 d-flex">
                            <div class="why-card card flex-grow-1">
                                <img src="{{asset('frontend/Images/neon-image7.webp')}}" class="why-card-img-top" alt="Consulting">
                                <div class="card-body why-card-body">
                                    <h3 class="why-text-red mb-3">Purchasing Process</h3>
                                    <p class="card-text">We, with an efficient team, maintain a smooth and transparent process whenever customers approach us to purchase neon signs for rooms, shops and other places in their homes and workplaces.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="why-card card flex-grow-1">
                                <img src="{{asset('frontend/Images/neon-image6.webp')}}" class="why-card-img-top" alt="Designs">
                                <div class="card-body why-card-body">
                                    <h3 class="why-text-red mb-3">Best Quality Products</h3>
                                    <p class="card-text">Regardless of what happens, Brand Signage does not prefer to compromise product quality. Instead of focusing only on maximising our revenue, we tend to pay keen attention to maximising the value we provide to our buyers. <br> <br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="why-card card flex-grow-1">
                                <img src="{{asset('frontend/Images/neon-image5.webp')}}" class="why-card-img-top" alt="Workforce">
                                <div class="card-body why-card-body">
                                    <h3 class="why-text-red mb-3">Custom Options</h3>
                                    <p class="card-text">We first understand what your specific choices and requirements are. Then, depending on your individual preferences, we offer you top-rated neon signs that serve your purposes well.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-3 align-items-start">
                        <div class="col-md-4 d-flex">
                            <div class="why-card card flex-grow-1">
                                <img src="{{asset('frontend/Images/neon-image5.webp')}}" class="why-card-img-top" alt="Workforce">
                                <div class="card-body why-card-body">
                                    <h3 class="why-text-red mb-3">Top-class Craftsmanship</h3>
                                    <p class="card-text">Picking up the right talents and empowering them with the right resources is what we do at Brand Signage. This way, we are able to ensure that each of our products showcases top-class craftsmanship.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="why-card card flex-grow-1">
                                <img src="{{asset('frontend/Images/neon-image4.webp')}}" class="why-card-img-top" alt="Quality">
                                <div class="card-body why-card-body">
                                    <h3 class="why-text-red mb-3">Power Efficient</h3>
                                    <p class="card-text">Our neon signs are known for their bright shine while being extremely energy efficient. Gorgeous bright ambience without high electricity bills is ensured with the neon signs we offer to you!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="why-card card flex-grow-1">
                                <img src="{{asset('frontend/Images/neon-image3.webp')}}" class="why-card-img-top" alt="Customer Service">
                                <div class="card-body why-card-body">
                                    <h3 class="why-text-red mb-3">Guaranteed Customer Satisfaction</h3>
                                    <p class="card-text">As one of the leading neon sign manufacturers, our aim is the complete satisfaction of our buyers. From selecting customisation options to getting the delivery in a hassle-free way- every step of our product delivery is supervised under expert discretion.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="why-carousel-controls">
                <button class="why-carousel-control" type="button" data-bs-target="#signageCarousel" data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="why-carousel-control" type="button" data-bs-target="#signageCarousel" data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
    
            <div class="carousel-indicators why-carousel-indicators">
                <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#signageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
        </div>
    </div>
</section>




<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Multicolor Neon Lights and Signs for <br> Every Space</h2>
  
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/neon-image8.webp')}}" alt="Cafe Rosco Signage" class="img-fluid">
                </div>
            </div>
            
            <div class="col-lg-6">
                <p class="brand-description">
                    If you’re looking for an illuminated sign with different colours combined in one design, check out premium quality multicolour neon lights and signs from us. With an added touch of personalisation, these neon signs and lights are ideal for your indoor and outdoor spaces.</p>
             
                <p class="brand-description">
                    The comprehensive range of diverse colours makes the multicoloured neon lights and signs more special than others. Whether it’s a get-together at your drawing room, a house party in the broad hallway, or an event on your rooftop, multicolour neon lights from Brand Signage can create the ambience you look for.</p>
             
                <p class="brand-description">
                    To illuminate your space in your desired way, you must rely upon trusted neon light manufacturers as they offer long-lasting yet stylish products. However, if you have made up your mind to purchase multi-colour neon signs for personal or professional spaces, we are here with the best collections of them.</p>
                
                <p class="brand-description">
                    Brighten your space and rejuvenate your mind with our exclusive neon signs suitable for all purposes</p>
                
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-2">
        <h2 class="hero-title">Transform Your Brand with Brand<br> Signages Custom Neon Sign Boards</h2>
        <div class="row align-items-center">
            
            <div class="col-lg-6 order-2 order-lg-1">

                <p class="brand-description">
                Stand out and illuminate your business space with Brand Signages custom-made neon signage boards—designed to captivate attention. 
                Whether you're looking to elevate your brand presence or add a modern touch to your space, our neon signages are the perfect blend 
                of style and functionality.
                Modern neon signage is a dynamic tool for businesses across industries, from co-working spaces that ignite creativity to cafes, bars, 
                and restaurants that elevate ambiance with vibrant neon art. Beauty salons, retail stores, yoga studios, and nightclubs all turn to neon 
                signs for a sleek, modern edge. Neon & LED neon sign brings your branding to life, whether through inspiring word lights, bold logos, or 
                unique, themed decor pieces.
                Brand Signages is India's most affordable supplier of neon light signs for home, office, and retail spaces. With less power consumption and 
                minimal heat emission, our neon signs offer a safe, long-lasting solution that’s perfect for any setting. Plus, they're lightweight and simple 
                to install, whether you're mounting them on walls or setting them up on display stands.</p>
             
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/neon-image9.webp')}}" alt="Cafe Rosco Signage" class="img-fluid">
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
                        <p class="card-text testimonial-card-text">Recently, I bought a set of customized neon light signs from Brand Signage. And I must say the products are mind-blowing. Highly recommend it!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/arun-prakash.webp')}}" alt="Arun Prakash" class="client-img">
                            <div>
                                <div class="client-name">Arun Prakash</div>
                                <div class="client-role">Hotel Chain Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="col-md-4">
                    <div class="testimonial-card card">
                        <div class="yellow-circle">
                            <img src="{{asset('frontend/Images/comment-icon.webp')}}" alt="Comment" class="comment-img">
                        </div>
                        <div class="card-body px-0">
                            <p class="card-text testimonial-card-text">If you’re looking for the best quality neon signs, Brand Signage should be your first choice. Excellent products they offer with various customization options</p>
                            <hr class="yellow-line">
                            <div class="client-info">
                                <img src="{{asset('frontend/Images/neha-kapoor.webp')}}" alt="Neha Kapoor" class="client-img">
                                <div>
                                    <div class="client-name">Neha Kapoor</div>
                                    <div class="client-role">Salon and Spa Owner</div>
                                </div>
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
                        <p class="card-text testimonial-card-text">Amazing neon light signs I received from Brand Signages a few days ago. The neon light signs are stunning —absolutely love them!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/vikram-sharma.webp')}}" alt="Vikram Sharma" class="client-img">
                            <div>
                                <div class="client-name">Vikram Sharma</div>
                                <div class="client-role">Restaurant Chain Owner</div>
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
                                    <p class="card-text testimonial-card-text">Recently, I bought a set of customized neon light signs from Brand Signage. And I must say the products are mind-blowing. Highly recommend it!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/arun-prakash.webp')}}" alt="Arun Prakash" class="client-img">
                                        <div>
                                            <div class="client-name">Arun Prakash</div>
                                            <div class="client-role">Hotel Chain Owner</div>
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
                                    <p class="card-text testimonial-card-text">If you’re looking for the best quality neon signs, Brand Signage should be your first choice. Excellent products they offer with various customization options</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/neha-kapoor.webp')}}" alt="Neha Kapoor" class="client-img">
                                        <div>
                                            <div class="client-name">Neha Kapoor</div>
                                            <div class="client-role">Salon and Spa Owner</div>
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
                                    <p class="card-text testimonial-card-text">Amazing neon light signs I received from Brand Signages a few days ago. The neon light signs are stunning —absolutely love them!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/vikram-sharma.webp')}}" alt="Vikram Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Vikram Sharma</div>
                                            <div class="client-role">Restaurant Chain Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="faq-section">
    <div class="faq-container">
      <h1 class="faq-title">FAQS</h1>
      
      <div class="faq-item">
        <button class="faq-question">
            What are neon light signs made of?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs are manufactured from glass tubes filled with inert gases like neon, mercury vapor, and argon. 
            When an electric current goes through the gases, they ionize and emit light. Different gases create different colors, 
            with neon gas producing the classic red-orange glow. We also provide modern alternatives like LED technology for better 
            energy efficiency and durability.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            How long do neon light signs typically last?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs generally have a lifespan of approximately 15,000 to 30,000 hours, depending on several factors such as usage, 
            environment, and the materials used. Proper maintenance & care can extend the lifespan, ensuring the sign remains vibrant and 
            functional for years. It's worth noting that LED neon signs, which are energy-efficient alternatives, can last significantly longer, 
            often reaching up to 50,000 hours or more.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            Can neon light signs be used outdoors?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Yes, neon light signs can be used outdoors if they are specifically designed with durable, weather-resistant materials and waterproof features. Whether it is a garden party or an open-air rooftop dinner, neon lights can illuminate the space with their bright charm.</p>
           </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            Are neon light signs energy-efficient?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs are energy-efficient compared to incandescent lighting. They consume less power due to the use of inert gases and low voltage. However, modern alternatives like LED neon signs are even more energy-efficient, offering lower power consumption and longer lifespans while maintaining vibrant illumination.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            How much do custom neon signs cost?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
            <p>The cost of custom neon signs is influenced by several key factors:</p>
            <ul>
                <li>Larger signs require more materials and time to manufacture, resulting in higher costs.</li>
                <li>Detailed, intricate designs with multiple colors or graphics typically increase the price.</li>
                <li>The choice of materials, such as premium LEDs or high-quality silicone tubing, can impact the cost.</li>
                <li>Fully custom signs tailored to specific branding or design preferences often come at a higher price</li>
                <li>Optional features, such as adjustable brightness or motion effects, can also lead to a higher cost</li>
                <li>Transparent pricing breakdown</li>
                <li>Delivery and installation</li>
            </ul>
            <p>On average, custom neon signs can range from ₹4,000 to ₹50,000 or more, depending on these factors. For a precise quote, 
                it's advisable to contact the manufacturer directly to discuss your specific design requirements.</p>
        </div>
      </div>
    </div>
  </section>
@endsection