@extends('frontend.layout.appLayout')
@section('content')

<style>
    .why-carousel-controls, .testimonial-carousel-controls {
        position: absolute;
        top: -34px;
        right: 15px;
        transform: translateY(0);
    }
    .menu-card {
        transition: transform 0.3s;
    }
    .menu-card:hover {
        transform: scale(1.05);
    }
    .feature-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
    }
</style>

<!-- Hero Carousel Section -->
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://placehold.co/1200x500.png" alt="Digital Menu Boards for Restaurants" class="img-fluid">
                <div class="carousel-caption-custom">
                    <h1>Transform Your Restaurant with Digital Menu Boards</h1>
                    <div class="mt-4">
                        <a href="{{route('contact_us')}}" class="custom-btn">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section>
    <div class="container py-5">
        <h2 class="hero-title">Elevate Dining with <br> Digital Menu Solutions</h2>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="https://placehold.co/600x400.png" alt="Restaurant Digital Menu" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="brand-title">#1 Digital Menu Boards in Bangalore, India</h2>
                <p class="brand-description">
                    Upgrade your restaurant with dynamic digital menu boards that captivate diners and streamline operations. At Brand Signages, we specialize in tailored digital solutions for restaurants, offering vibrant displays, real-time updates, and interactive features. With over a decade of expertise, we’re the leading provider in Bangalore, India.
                </p>
                <p class="brand-description">
                    Our menu boards showcase daily specials, highlight signature dishes, and promote upsell items with stunning visuals. Designed for ease of use, they allow instant updates to prices, availability, or promotions—perfect for fast-paced restaurant environments.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Menu Board Features Section -->
<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Top Digital Menu Board Solutions <br> for Restaurants</h2>
            <p class="card-text text-center">Our restaurant-grade digital menu boards enhance visibility, promote specials, and engage diners with interactive, customizable displays.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="why-card card menu-card">
                    <img src="https://placehold.co/200x200.png" class="why-card-img-top" alt="Dynamic Menus">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Dynamic Menus</h3>
                        <p class="card-text">Display vibrant, rotating menus with real-time updates for specials, combos, or sold-out items.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card menu-card">
                    <img src="https://placehold.co/200x200.png" class="why-card-img-top" alt="Interactive Ordering">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Interactive Ordering</h3>
                        <p class="card-text">Let customers browse, customize, and order directly from touch-enabled menu boards.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card menu-card">
                    <img src="https://placehold.co/200x200.png" class="why-card-img-top" alt="Promotional Displays">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Promotional Displays</h3>
                        <p class="card-text">Highlight limited-time offers or upsell desserts and drinks with eye-catching animations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="display-4 mb-3 why-text-heading">Why Choose Our Menu Boards</h2>
    </div>
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="image-container position-relative menu-card">
                <img src="https://placehold.co/200x200.png" alt="Real-Time Updates" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">Real-Time Updates</h5>
                    <p class="text-content">Change menu items, prices, or specials instantly via our cloud-based system.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="image-container position-relative menu-card">
                <img src="https://placehold.co/200x200.png" alt="Durable Design" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">Durable Design</h5>
                    <p class="text-content">Built to withstand kitchen heat, grease, and high-traffic dining areas.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="image-container position-relative menu-card">
                <img src="https://placehold.co/200x200.png" alt="User-Friendly" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">User-Friendly</h5>
                    <p class="text-content">Intuitive interface for staff to manage content with minimal training.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Section 1: Menu Board Customization Options -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Customize Your Menu Boards</h2>
            <p class="card-text text-center">Personalize your digital menu boards to reflect your restaurant’s unique style and offerings.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="feature-card menu-card text-center">
                    <img src="https://placehold.co/200x200.png" alt="Themed Layouts" class="mb-3">
                    <h4 class="why-text-red">Themed Layouts</h4>
                    <p>Choose layouts that match your cuisine—rustic for Italian, sleek for fine dining, or vibrant for fast food.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-card menu-card text-center">
                    <img src="https://placehold.co/200x200.png" alt="Multi-Language Support" class="mb-3">
                    <h4 class="why-text-red">Multi-Language Support</h4>
                    <p>Display menus in multiple languages to cater to diverse customers.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-card menu-card text-center">
                    <img src="https://placehold.co/200x200.png" alt="Nutrition Info" class="mb-3">
                    <h4 class="why-text-red">Nutrition Info</h4>
                    <p>Add calorie counts or allergen alerts with a tap, enhancing transparency for diners.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- New Section 3: Success Stories -->
<section class="py-5 bg-light-pink">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Success Stories</h2>
            <p class="card-text text-center">See how our digital menu boards have transformed restaurants like yours.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="feature-card menu-card">
                    <img src="https://placehold.co/600x400.png" alt="Fast Food Chain" class="mb-3 w-100">
                    <h4 class="why-text-red">Fast Food Chain</h4>
                    <p>A popular chain reduced order times by 30% with interactive menu boards, boosting throughput during peak hours.</p>
                </div>
            </div>
            <div class="col">
                <div class="feature-card menu-card">
                    <img src="https://placehold.co/600x400.png" alt="Fine Dining Restaurant" class="mb-3 w-100">
                    <h4 class="why-text-red">Fine Dining Restaurant</h4>
                    <p>A luxury eatery increased wine sales by 20% using promotional screens to showcase pairings.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonial section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Restaurant Owner Testimonials</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="testimonial-card card menu-card">
                    <div class="yellow-circle">
                        <img src="https://placehold.co/50x50.png" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The digital menu boards have made updating our specials a breeze. Customers love the visuals, and we’ve seen a spike in dessert orders!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="https://placehold.co/50x50.png" alt="Vikram Rao" class="client-img">
                            <div>
                                <div class="client-name">Vikram Rao</div>
                                <div class="client-role">Restaurant Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="testimonial-card card menu-card">
                    <div class="yellow-circle">
                        <img src="https://placehold.co/50x50.png" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">Interactive ordering cut our wait times in half. Diners enjoy customizing their meals right on the screen!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="https://placehold.co/50x50.png" alt="Sneha Patel" class="client-img">
                            <div>
                                <div class="client-name">Sneha Patel</div>
                                <div class="client-role">Café Manager</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="testimonial-card card menu-card">
                    <div class="yellow-circle">
                        <img src="https://placehold.co/50x50.png" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">The vibrant displays make our dishes pop. We’ve had more customers asking about specials since installing them.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="https://placehold.co/50x50.png" alt="Arjun Nair" class="client-img">
                            <div>
                                <div class="client-name">Arjun Nair</div>
                                <div class="client-role">Head Chef</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="faq-section py-5">
    <div class="faq-container container">
        <h1 class="faq-title text-center">FAQs - Digital Menu Boards</h1>

        <div class="faq-item">
            <button class="faq-question">
                How Do Digital Menu Boards Benefit Restaurants?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>They enhance visibility, promote specials, reduce wait times with interactive ordering, and allow instant updates to keep menus fresh.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can Menu Boards Be Customized for My Restaurant?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, we offer tailored designs, layouts, and content to match your restaurant’s theme, cuisine, and branding.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How Easy Is It to Update Menu Content?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Our cloud-based platform lets you update prices, items, or specials instantly from any device.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are These Boards Durable in Kitchen Settings?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, they’re built to resist heat, moisture, and grease, ensuring long-term use in restaurant environments.</p>
            </div>
        </div>
    </div>
</section>

@endsection