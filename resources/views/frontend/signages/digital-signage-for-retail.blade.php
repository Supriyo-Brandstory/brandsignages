@extends('frontend.layout.appLayout')
@section('content')

<style>
    .why-carousel-controls, .testimonial-carousel-controls {
        position: absolute;
        top: -34px;
        right: 15px;
        transform: translateY(0);
    }
</style>

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://placehold.co/600x400.png" alt="Digital Signage for Retail">
                <div class="carousel-caption-custom">
                    <h1>Enhance Your Retail Experience with Digital Signage - Brand Signages</h1>
                    <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <h2 class="hero-title">Boost Retail Sales with <br> Digital Signage Solutions</h2>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="https://placehold.co/600x400.png" alt="Retail Digital Signage" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="brand-title">#1 Digital Signage for Retail in Bangalore, India</h2>
                <p class="brand-description">
                    Digital signage is revolutionizing retail by offering dynamic, eye-catching ways to engage customers and drive sales. At Brand Signages, we specialize in creating premium-quality digital signage solutions tailored for retail environments. With over 10 years of expertise, we are the top digital signage provider in Bangalore, India, helping retailers enhance their brand presence and increase foot traffic.
                </p>
                <p class="brand-description">
                    Our digital signage solutions for retail include vibrant product displays, promotional screens, and interactive kiosks. These tools allow retailers to showcase new arrivals, highlight special offers, and create immersive shopping experiences that boost impulse purchases and customer loyalty.
                </p>
                <p class="brand-description">
                    As a leading digital signage company, we integrate state-of-the-art technology, real-time content updates, and dynamic visuals to make your retail space stand out. Whether you run a small boutique or a large chain, our solutions are designed to elevate your brand and maximize sales.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Top Digital Signage Solutions <br> for Retail Stores</h2>
            <p class="card-text text-center">Brand Signages offers commercial-grade digital signage solutions designed specifically for retail. Our custom displays enhance product visibility, promote offers, and improve customer engagement, making them ideal for retail advertising and in-store communication.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Retail Displays">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Retail Displays</h3>
                        <p class="card-text">Our versatile retail displays deliver stunning visuals to showcase products, promotions, and brand messaging. Fully customizable, they fit seamlessly into any store layout and branding requirement.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Digital Standees">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Digital Standees</h3>
                        <p class="card-text">Portable and attention-grabbing, digital standees are perfect for highlighting in-store promotions or guiding customers to key areas. Ideal for seasonal campaigns or events.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Interactive Kiosks">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Interactive Kiosks</h3>
                        <p class="card-text">Engage customers with interactive kiosks that allow browsing catalogs, checking stock, or exploring promotions. A modern way to enhance the shopping experience.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Outdoor Retail Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Outdoor Retail Signage</h3>
                        <p class="card-text">Built to withstand the elements, our outdoor signage delivers vibrant promotions visible even in sunlight, driving foot traffic into your store.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Video Walls">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Video Walls</h3>
                        <p class="card-text">Create immersive retail experiences with video walls that combine multiple screens for large, high-impact displays. Perfect for flagship stores or high-traffic areas.</p>
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
                                <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Retail Displays">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Retail Displays</h3>
                                    <p class="card-text">Our versatile retail displays deliver stunning visuals to showcase products, promotions, and brand messaging. Fully customizable, they fit seamlessly into any store layout and branding requirement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Digital Standees">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Digital Standees</h3>
                                    <p class="card-text">Portable and attention-grabbing, digital standees are perfect for highlighting in-store promotions or guiding customers to key areas. Ideal for seasonal campaigns or events.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Interactive Kiosks">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Interactive Kiosks</h3>
                                    <p class="card-text">Engage customers with interactive kiosks that allow browsing catalogs, checking stock, or exploring promotions. A modern way to enhance the shopping experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Interactive Kiosks">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Interactive Kiosks</h3>
                                    <p class="card-text">Engage customers with interactive kiosks that allow browsing catalogs, checking stock, or exploring promotions. A modern way to enhance the shopping experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Outdoor Retail Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Outdoor Retail Signage</h3>
                                    <p class="card-text">Built to withstand the elements, our outdoor signage delivers vibrant promotions visible even in sunlight, driving foot traffic into your store.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Video Walls">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Video Walls</h3>
                                    <p class="card-text">Create immersive retail experiences with video walls that combine multiple screens for large, high-impact displays. Perfect for flagship stores or high-traffic areas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-carousel-controls">
                <button id="prevButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel" data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="nextButton" class="why-carousel-control" type="button" data-bs-target="#signageCarousel" data-bs-slide="next">
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

<section class="container py-5">
    <div class="row g-4 d-flex flex-wrap justify-content-center">
        <div class="text-center">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Us for Retail Digital Signage</h2>
        </div>
        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="https://placehold.co/600x200.png" alt="On-time Installation" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">On-time Installation</h5>
                            <p class="text-content">We ensure quick and efficient installation of digital signage in your retail space, minimizing disruptions and helping you start engaging customers immediately.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="https://placehold.co/300x200.png" alt="Industry Grade Products" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Industry Grade Products</h5>
                            <p class="text-content">Our retail signage solutions are built with high-quality materials and cutting-edge technology, ensuring durability and performance in busy store environments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="https://placehold.co/300x200.png" alt="Experienced Professionals" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Experienced Professionals</h5>
                            <p class="text-content">Our team of experts designs innovative retail signage solutions that drive customer engagement and boost sales with dynamic, high-impact content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="https://placehold.co/600x200.png" alt="Happy Customer Base" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Happy Customer Base</h5>
                            <p class="text-content">Retailers across India trust us for tailored signage solutions that elevate their stores. Our focus on quality and service has earned us a loyal following in the retail sector.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Tailored Digital Signage for Retail</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Product Showcases">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Product Showcases</h3>
                        <p class="card-text">Highlight new arrivals and best-sellers with vibrant digital displays that attract customers and encourage purchases.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Promotional Screens">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Promotional Screens</h3>
                        <p class="card-text">Display real-time offers and seasonal campaigns to drive impulse buys and increase store revenue.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card card">
                    <img src="https://placehold.co/300x200.png" class="why-card-img-top" alt="Interactive Experiences">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Interactive Experiences</h3>
                        <p class="card-text">Engage shoppers with interactive signage that offers product info, directions, or personalized recommendations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Retail Customer Testimonials</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="https://placehold.co/50x50.png" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">Digital signage transformed our boutique. The displays highlight our latest collections beautifully, and customers love the modern vibe. Sales are up since we installed them!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="https://placehold.co/50x50.png" alt="Anita Sharma" class="client-img">
                            <div>
                                <div class="client-name">Anita Sharma</div>
                                <div class="client-role">Store Manager</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="https://placehold.co/50x50.png" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">Our retail chain saw a 25% increase in foot traffic after adding outdoor digital signage. The vibrant promotions really draw people in!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="https://placehold.co/50x50.png" alt="Rajiv Menon" class="client-img">
                            <div>
                                <div class="client-name">Rajiv Menon</div>
                                <div class="client-role">Retail Director</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="https://placehold.co/50x50.png" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The interactive kiosks we got from Brand Signages have been a hit. Customers can browse our catalog easily, and it’s boosted our in-store engagement.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="https://placehold.co/50x50.png" alt="Priya Desai" class="client-img">
                            <div>
                                <div class="client-name">Priya Desai</div>
                                <div class="client-role">Marketing Head</div>
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
                                    <img src="https://placehold.co/50x50.png" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">Digital signage transformed our boutique. The displays highlight our latest collections beautifully, and customers love the modern vibe. Sales are up since we installed them!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="https://placehold.co/50x50.png" alt="Anita Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Anita Sharma</div>
                                            <div class="client-role">Store Manager</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="https://placehold.co/50x50.png" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">Our retail chain saw a 25% increase in foot traffic after adding outdoor digital signage. The vibrant promotions really draw people in!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="https://placehold.co/50x50.png" alt="Rajiv Menon" class="client-img">
                                        <div>
                                            <div class="client-name">Rajiv Menon</div>
                                            <div class="client-role">Retail Director</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="https://placehold.co/50x50.png" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">The interactive kiosks we got from Brand Signages have been a hit. Customers can browse our catalog easily, and it’s boosted our in-store engagement.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="https://placehold.co/50x50.png" alt="Priya Desai" class="client-img">
                                        <div>
                                            <div class="client-name">Priya Desai</div>
                                            <div class="client-role">Marketing Head</div>
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
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title">FAQs - Digital Signage for Retail</h1>

        <div class="faq-item">
            <button class="faq-question">
                How Does Digital Signage Benefit Retail Stores?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Digital signage in retail increases foot traffic, promotes products, and enhances customer engagement with dynamic visuals, real-time offers, and interactive features tailored to shoppers.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can Retail Digital Signage Be Customized?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we offer fully customizable solutions including product showcases, promotional displays, interactive kiosks, screen sizes, and content tailored to your brand and store needs.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What Content Can Be Shown on Retail Signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Retail signage can display product videos, promotional offers, customer reviews, store maps, and live social media feeds to engage shoppers and drive sales.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How Easy Is It to Update Retail Signage Content?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>With our cloud-based system, you can update promotions, product info, or schedules instantly from any device, keeping your retail displays fresh and relevant.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What Is the Lifespan of Retail Digital Signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our retail signage lasts 50,000 to 100,000 hours (5-10 years) with proper care, offering long-term value for your store’s marketing efforts.</p>
            </div>
        </div>
    </div>
</section>
@endsection