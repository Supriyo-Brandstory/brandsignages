@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/neon-image.webp')}}" alt="Slide 1">
                <div class="carousel-caption-custom">
                    <h1>Best Neon Sign Boards : Creative & Bright Neons</h1>
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
        <h2 class="hero-title">Best Neon Sign Board Manufacturers <br>for Eye-Catching Signages</h2>
        
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/neon-image2.webp')}}" alt="Neon sign boards " class="img-fluid">
                </div>
            </div>
            
            <div class="col-lg-6">
            <h2 class="brand-title">#1 Neon Sign Boards</h2>
                <p class="brand-description">
                Neon signage has become a trending element of modern branding, enhancing both personal & professional spaces. Neon sign boards are designed to add a vibrant touch and make your space visually appealing. These are used in restaurants, retail stores, offices, homes, and events to create a vibrant & eye-catching ambiance. It can be a perfect go-to option to create your unique brand identity and attract customers.</p>
                <p class="brand-description">
                Brand Signages is a leading name in neon sign board  
                
                <a href="{{route('neon_sign_board_bangalore')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">Bangalore </a>, 
                <a href="{{route('neon_sign_board_in_mumbai')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;"> Mumbai </a>, and
                 <a href="{{route('custom_neon_sign_board_in_chennai')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;"> Chennai </a>,
             offering custom neon signage design options. Top businesses rely on us for custom-made neon signs that perfectly combine quality and style. Our expert custom neon sign manufacturers pay close attention to your needs and preferences when making the signs. Thus, we ensure that you get top-notch neon signs that can bring your dream ambiance to life with stunning illumination.</p>
                <p class="brand-description">
                Whether it is neon signs for shops and offices, our every product undergoes detailed quality checks and thus we provide best-in-class neon signs for you. Being made of the highest-quality material, our neon signs can be used for diverse purposes including advertising, decoration, gifting, etc. Get quality neon signs crafted according to your individual preferences from Brand Signage and enliven your space effortlessly.</p>
                <ul class="process-list">
                        <li>
                            We craft the best-quality, custom neon signages to meet your needs.
                        </li>
                        <li>
                            Our neon signages are energy-efficient, durable, and visually appealing.
                        </li>
                        <li>
                            We offer expert design and installation services for a seamless experience.
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Custom-Made Neon Light Signs for Your Space</h2>
            <p class="card-text text-center">We produce high-class neon lights in Bangalore for all setups. Redesign your place with glow <br> signage shaped just for you!</p>
        </div>

        <div class="col-lg-4">
            <div class="image-container position-relative">
                <img src="{{asset('frontend/Images/neonsign-bangalore6.webp')}}" alt="Neon Signs for Bar" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">Neon Signs for Bar</h5>
                    <p class="text-content">Add vibrant energy to your bar with stylish neon signs. Create an inviting atmosphere with custom neon sign boards featuring bold colors and eye-catching designs.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore7.webp')}}" alt="Neon Lights for Restaurants" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Lights for Restaurants</h5>
                            <p class="text-content">Elevate your restaurant’s atmosphere with bold, custom neon lights that seamlessly blend style and function. With their sleek, modern appeal, neon lights bring a fresh energy to any restaurant setting.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore8.webp')}}" alt="Neon Sign Logo" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Sign Logo</h5>
                            <p class="text-content">Stand aloof with a customized neon sign logo for your brand. Whether for a corporate office or a retail shop, sign boards implant life in your logo in a shining, unforgettable manner.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore9.webp')}}" alt="Neon Sign Party Decor" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Sign Party Decor</h5>
                            <p class="text-content">Spice up your parties with innovative neon LED signs. From birthdays to weddings, our custom neon signs make for memorable party decor that brightens up your festivities.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/neonsign-bangalore10.webp')}}" alt="Neon Signs for Home" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Neon Signs for Home</h5>
                            <p class="text-content">Give individuality to your living area with tailored neon sign boards. Whether for a comfort zone or your entertainment zone, these LED signage pieces are ideal for home decor.</p>
                        </div>
                    </div>
                </div>
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
        <h2 class="hero-title">Illuminate Your Space with <br>Custom-Made Neon Signages</h2>
        <div class="row align-items-center">
            
            <div class="col-lg-6 order-2 order-lg-1">

                <p class="brand-description">
                Illuminate your space with custom-made neon signage boards by Brand Signages. 
                If you're looking to elevate your brand or add a modern touch to your space, 
                our neon signages are the perfect blend of style and aesthetics. Neon signage is 
                mostly used in cafes, bars, and restaurants to elevate ambiance with vibrant neon art. 
                We also make neon signages for beauty salons, retail stores, and yoga studios. Brand Signages 
                is India's most affordable supplier of neon light signs for home, office, and retail spaces. 
                With less power consumption our neon signages offer a long-lasting solution that’s perfect for 
                your space. Whether you're looking to mount them on walls or set them up on display stands, we 
                provide a full-scale solution from design to installation. 
            </p>
             
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
            What are Neon Light Signs Made of?
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
            What is The Delivery Timing for a Neon Sign Order?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>The delivery timing for neon sign boards  generally is between 7-10 business days, based on the personalization and order size.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            How Long Do Neon Light Signs Typically Last?
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
            Can Neon Light Signs be Used Outdoors?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Yes, neon light signs can be used outdoors if they are specifically designed with durable, weather-resistant materials and waterproof features. Whether it is a garden party or an open-air rooftop dinner, neon lights can illuminate the space with their bright charm.</p>
           </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            Are Neon Light Signs Energy-efficient?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs are energy-efficient compared to incandescent lighting. They consume less power due to the use of inert gases and low voltage. However, modern alternatives like LED neon signs are even more energy-efficient, offering lower power consumption and longer lifespans while maintaining vibrant illumination.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            How Much Do Custom Neon Signs Cost?
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

      <div class="faq-item">
        <button class="faq-question">
            What is The Installation Process for Neon Light Signs?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon signs are usually mounted on a wall, hung from ceilings, or placed on supports. The installation process involves securing 
            the sign, connecting the power supply, and ensuring proper wiring. Traditional neon signs require an expert installation due to the 
            glass tube and high voltage requirements. LED neon signs are easier to install, frequently using easy wall supports or adhesive backing. 
            For outdoor usage, proactive coating is necessary. It is essential to follow safety guidelines and work with experts for safe installation 
            and lasting durability.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            What Maintenance is Required for Neon Light Signs?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs require cleaning to remove dust, keeping them bright and visible. Use a smooth fabric or a dry brush to clean the tubes gently. 
            Avoid using strong water jets or harsh chemicals, mainly in conventional neon signs. Periodically, check the power supply and connections to ensure 
            proper functioning. LED neon signs require minimal preservation as compared to conventional neon, which may require gas refills over time. With 
            proper care, neon signs can last for years at the same time as retaining their brightness and effectiveness.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            What are The Benefits of Using Neon Light Signs for Branding?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
            <ul>
                <li>Neon light signs attract attention with their vivid and colorful brightness, helping businesses stand out.</li>
                <li>They add an exceptional and elegant element, improving the brand's identity.</li>
                <li>Neon signs work well for both interior and external use, attracting customers day and night.</li>
                <li>They can be personalized to match the colors of the brand or logos.</li>
                <li>Neon LED signs are efficient in energy and durable, offering an affordable branding solution.</li>
            </ul>
            <p>Whether for a restaurant, retail store, bar, or event, neon signage companies create unforgettable impressions and boost visibility.</p>
        </div>
      </div>

    </div>
  </section>

  <section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Signage & Branding</h2>
            <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the signage designs through our articles.</p>

        </div>

        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="{{ route('blogsVaritaion', $blog->slug) }}" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">{{ strtoupper($blog->topic) }}</span>
                                <span class="time">{{ $blog->reding_time }} mins 🕘</span>
                            </div>
                            <h5 class="blog-card-title">{{ $blog->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="text-center">
            <a href="{{ route('blogs') }}">
                <button class="contact-btn">See All Blogs</button>
            </a>
            </div>
        </div>
    </div>
</section>

@endsection