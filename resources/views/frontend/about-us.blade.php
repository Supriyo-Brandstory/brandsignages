@extends('frontend.layout.appLayout')
@section('content')



<section class="carousel-section">
 

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/new/about-us.webp')}}" alt="custom_neon_sign_board_in_chennai">
                
            </div>

       

            
        </div>
    </div>
</section>
<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
       
        <h2 class="hero-title mb-3">Transforming Spaces with Premium Sign Board Solutions</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <p class="number"><span class="counter">12000</span> +</p>
                <p class="card-text text-center">Projects Completed</p>
            </div>
            <div class="col-md-4">
                <p class="number"><span class="counter">10</span> +</p>
                <p class="card-text text-center">Years of Experience</p>
            </div>
            <div class="col-md-4">
                <p class="number"><span class="counter">2500</span> +</p>
                <p class="card-text text-center">Happy Clients</p>
            </div>
        
        </div>
    </div>
</section>
<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
             <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/Production-house.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Empower Your Branding with No. 1 Sign Boards</h2>
                <p class="brand-description">
                  Signages are the forefront of your business that play a vital role in brand visibility. At Brand Signages, we create visually appealing signage that reflects your brand’s vision and mission into a visual identity. With a focus on standards, longevity, and creativity, we focus on creating sign boards that impact and engage the audience. As a leading signage company, we collaborate.                </p>
                
               
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container pb-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Our Story</h2>
                <p class="brand-description">
                    Established in 2014, Brand Signage started with an outlook to reorganize the signboard industry by supplying high-class, creative, and tailored signage solutions. As a premier sign board manufacturer in Bangalore & India, we know how signage can assist organizations improve their observability. 
                    With a strong commitment to artistry and technology, we strive to create efficient signboards that seamlessly blend elegance with functionality.

                </p>
                <h2 class="brand-title">Mission & Vision  
                </h2>
                <p class="brand-description">
                    We mix invention, artistry, and technology to generate superior signboard solutions that assist organizations in being distinguished. Our mission is to deliver high-class signboard solutions that enhance brand recognition and customer engagement. We are committed to innovation and adapting to current trends, ensuring that organizations receive the best signboard designs. Our vision is to be a trusted signboard provider in Bangalore and across India, helping businesses transform their spaces with impactful, high-quality signboards.

                
                </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/about-us-3.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>
<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Meet Our Expert Team - Brand Signages 
            </h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/design-team.webp')}}" class="why-card-img-top"
                        alt="Skillfulness & Experience  ">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Skillfulness & Experience  </h3>
                        
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/Production-team.webp')}}" class="why-card-img-top"
                        alt="Production Team">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Production Team</h3>
                     
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/Installation.webp')}}" class="why-card-img-top"
                            alt="Installation Team ">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Installation Team </h3>
                           
                           
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
                                <img src="{{asset('frontend/Images/new/design-team.webp')}}" class="why-card-img-top"
                                    alt="Skillfulness & Experience  ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Skillfulness & Experience  </h3>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/Production-team.webp')}}" class="why-card-img-top"
                                    alt="Production Team">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Production Team</h3>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/Installation.webp')}}" class="why-card-img-top"
                                    alt="Installation Team ">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Installation Team </h3>
                                    
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
        <h2 class="hero-title mb-3">We are Committed to Quality & Sustainability - Reach Us
          </h2>
        <p class="card-text text-center">At Brand Signages, we prioritize quality, durability, and eco-friendliness in every signboard solution we create. As a leading signboard manufacturer in Bangalore, we utilize advanced technology to craft visually striking and long-lasting signage. Whether you need a vibrant storefront sign or a dynamic digital display, we ensure superior craftsmanship with minimal environmental impact. Contact us today to discuss your signage needs and enhance your brand’s visibility with innovative, high-quality signboard solutions designed for lasting impact.
        </p>

     <div class="text-center">
        <a href="{{route('contact_us')}}">
            <button class="contact-btn">Contact Us</button>
        </a>
     </div>
    </div>
</section>

    <script>document.addEventListener("DOMContentLoaded", function () {
        const counters = document.querySelectorAll(".counter");
        const speed = 500; // Adjust speed for slower or faster counting
    
        const startCounter = (counter) => {
            const target = +counter.innerText;
            let count = 0;
            const increment = target / speed;
    
            const updateCounter = () => {
                count += increment;
                if (count < target) {
                    counter.innerText = Math.ceil(count);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.innerText = target;
                }
            };
    
            updateCounter();
        };
    
        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        startCounter(entry.target);
                        observer.unobserve(entry.target); // Stop observing once started
                    }
                });
            },
            { threshold: 0.5 }
        );
    
        counters.forEach((counter) => {
            observer.observe(counter);
        });
    });
</script>    
@endsection