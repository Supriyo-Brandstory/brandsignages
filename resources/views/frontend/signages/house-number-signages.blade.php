@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/home-number-signage1.webp')}}" alt="House Number Signage">
                <div class="carousel-caption-custom">
                    <h1>House Number Signs for Every Home</h1>
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
        <h2 class="hero-title">Modern House Number & Address Signs <br> Customized for Your Needs</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/home-number-signage2.webp')}}" alt="House Number Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Exuding the appearance of a home’s exterior magnificently becomes possible when all elements are picked up and placed carefully. The house number and address sign are some of the most vital elements out there. Every home comes with a unique aura which can be cherished with well-crafted modern customized house address number signs. Hence, it has become essential nowadays to use a modern house number board or address signboard customized according to the house design, the homeowner’s taste, and the area’s architectural trends.
                </p>
                <p class="brand-description">
                    Brand Signage as a leading signage company understands the modern-day need to put creative thought and ideas into designing house number signs and offers an array of exclusive options for house address boards. The signs are available in different sizes and colors. The house number boards crafted by Brand Signage give your home the exact appeal that you’ve dreamt of. We also offer flexibility in choosing the perfect placement for your home’s numbers. Decorating the front, the home number sign from Brand Signage becomes an aesthetic addition to your living space. Impress your guests and ensure peace for the home’s residents with such customized house signboards.
                </p>    
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Why Choose Brand Signages for House Number Board?</h2>
            <p class="card-text text-center">While the primary purpose of placing a house number sign is to help people locate the home easily, the <br> signboard also becomes a significant way of highlighting the homeowners’ taste in art and decor. However,<br> why choose Brand Signage for house number signs? The answer to this question is below:</p>

        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/home-number-signage3.webp')}}" class="why-card-img-top"
                        alt="Long-lasting material">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Long-lasting material</h3>
                        <p class="card-text">Being an element to be placed in the exterior, house numbers are exposed to sunlight, rain, and other weather hazards. Hence, we offer high-quality house number boards made of durable materials that withstand regular weather upheavals and seasonal climate changes.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/home-number-signage4.webp')}}" class="why-card-img-top"
                        alt="Improve aesthetics">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Improve aesthetics</h3>
                        <p class="card-text">Our house sign boards, designed by skilled experts, contribute to the carb appeal, adding a finishing touch to the entrance’s visual presentation.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/home-number-signage5.webp')}}" class="why-card-img-top"
                            alt="Modern design">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Modern design</h3>
                            <p class="card-text">Those days of just marking the house number and address on the house signboards are gone. Now, creative and sleek designs are on trend. Brand Signage offers excellent options for modern house numbers that help homeowners go along with the trend.</p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/home-number-signage6.webp')}}" class="why-card-img-top"
                        alt="Worry-free installation">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Worry-free installation</h3>
                        <p class="card-text">Once you purchase house number signs from Brand Signage, sit back and relax. The signboards are flexible enough to be installed anywhere deemed right. Also, with pre-mounted adhesives the installation process ensures zero hassles.</p>
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
                                <img src="{{asset('frontend/Images/home-number-signage3.webp')}}" class="why-card-img-top"
                                    alt="Long-lasting material">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Long-lasting material</h3>
                                    <p class="card-text">Being an element to be placed in the exterior, house numbers are exposed to sunlight, rain, and other weather hazards. Hence, we offer high-quality house number boards made of durable materials that withstand regular weather upheavals and seasonal climate changes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/home-number-signage4.webp')}}" class="why-card-img-top"
                                    alt="Improve aesthetics">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Improve aesthetics</h3>
                                    <p class="card-text">Our house sign boards, designed by skilled experts, contribute to the carb appeal, adding a finishing touch to the entrance’s visual presentation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/home-number-signage5.webp')}}" class="why-card-img-top"
                                    alt="Modern design">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Modern design</h3>
                                    <p class="card-text">Those days of just marking the house number and address on the house signboards are gone. Now, creative and sleek designs are on trend. Brand Signage offers excellent options for modern house numbers that help homeowners go along with the trend.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/home-number-signage4.webp')}}" class="why-card-img-top"
                                    alt="Improve aesthetics">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Improve aesthetics</h3>
                                    <p class="card-text">Our house sign boards, designed by skilled experts, contribute to the carb appeal, adding a finishing touch to the entrance’s visual presentation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/home-number-signage5.webp')}}" class="why-card-img-top"
                                    alt="Modern design">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Modern design</h3>
                                    <p class="card-text">Those days of just marking the house number and address on the house signboards are gone. Now, creative and sleek designs are on trend. Brand Signage offers excellent options for modern house numbers that help homeowners go along with the trend.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/home-number-signage6.webp')}}" class="why-card-img-top"
                                    alt="Worry-free installation">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Worry-free installation</h3>
                                    <p class="card-text">Once you purchase house number signs from Brand Signage, sit back and relax. The signboards are flexible enough to be installed anywhere deemed right. Also, with pre-mounted adhesives the installation process ensures zero hassles.</p>
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


<section class="container py-5">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Advantages of Installing House Number Signs</h2>
            <p class="card-text text-center">Once started decades ago, house number signs provide various benefits even today. With modern designs and new-age features, the <br> list of advantages becomes longer than before. The major advantages include:</p>
        </div>

        <div class="col-lg-4">
            <div class="image-container position-relative">
                <img src="{{asset('frontend/Images/home-number-signage7.webp')}}" alt="Improved exterior design" class="w-100 h-100">
                <div class="overlay">
                    <h5 class="text-title">Improved exterior design</h5>
                    <p class="text-content">Whether a stylish and modern house number sign or a traditional, rustic address board, it can add a touch of elegance to the home.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/home-number-signage8.webp')}}" alt="Convenient and solid identification" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Convenient and solid identification</h5>
                            <p class="text-content">With clearly visible house address number signs, you can help people identify your home conveniently, even if it is loathed in an unfamiliar area.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/home-number-signage9.webp')}}" alt="Property value" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Property value</h5>
                            <p class="text-content">A home showcasing house number prominently enhances the perceived value of the property, as it creates a positive impact on potential investors’ minds.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/home-number-signage10.webp')}}" alt="Fast safety measures in emergencies" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Fast safety measures in emergencies</h5>
                            <p class="text-content">During emergencies, homes with easy-to-read house number signs help to get fast responses from rescuers or saviors. <br> All these benefits can be leveraged effectively when the signs are purchased from a reliable signage company like Brand Signage.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/home-number-signage11.webp')}}" alt="Do Not Disturb" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Efficient delivery</h5>
                            <p class="text-content">Whether it is a newcomer delivery personnel or an experienced one, a house number board makes their task of locating a house easier. Postal workers can also deliver mail quickly without any hassle.</p>
                        </div>
                    </div>
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
                        <p class="card-text testimonial-card-text">“ Excellent signage company! I bought my house number sign from Brand Signage. It is durable and stylish. Highly recommend this.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/home-number-signage12.webp')}}" alt="Aarav Sharma" class="client-img">
                            <div>
                                <div class="client-name">Aarav Sharma</div>
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
                        <p class="card-text testimonial-card-text">“If you’re planning to add finesse to your home entrance, don’t forget to get a house number board from Brand Signage. They are known for their expertise in crafting excellent house number boards, office signage, neon signages, and so on</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/home-number-signage13.webp')}}" alt="Karan Singh" class="client-img">
                            <div>
                                <div class="client-name">Karan Singh</div>
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
                        <p class="card-text testimonial-card-text">I would love to come back to Brand Signage again and again for all types of signboard needs.” <br> “Very good product and excellent customer service. I love the wide range of house number boards of different types at Brand Signage</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/home-number-signage23.webp')}}" alt="Rohan Gupta" class="client-img">
                            <div>
                                <div class="client-name">Rohan Gupta</div>
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
                        <p class="card-text testimonial-card-text">Wonderful signboards. Brand Signage is a trusted signage manufacturing brand for all types of signboards including house number boards.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/door-signage14.webp')}}" alt="Ishita Mehta" class="client-img">
                            <div>
                                <div class="client-name">Ishita Mehta</div>
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
                                    <p class="card-text testimonial-card-text">“ Excellent signage company! I bought my house number sign from Brand Signage. It is durable and stylish. Highly recommend this.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/home-number-signage12.webp')}}" alt="Aarav Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Aarav Sharma</div>
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
                                    <p class="card-text testimonial-card-text">“If you’re planning to add finesse to your home entrance, don’t forget to get a house number board from Brand Signage. They are known for their expertise in crafting excellent house number boards, office signage, neon signages, and so on</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/home-number-signage13.webp')}}" alt="Karan Singh" class="client-img">
                                        <div>
                                            <div class="client-name">Karan Singh</div>
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
                                    <p class="card-text testimonial-card-text">I would love to come back to Brand Signage again and again for all types of signboard needs.” <br> “Very good product and excellent customer service. I love the wide range of house number boards of different types at Brand Signage</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/home-number-signage23.webp')}}" alt="Rohan Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Rohan Gupta</div>
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
                                    <p class="card-text testimonial-card-text">“If you’re planning to add finesse to your home entrance, don’t forget to get a house number board from Brand Signage. They are known for their expertise in crafting excellent house number boards, office signage, neon signages, and so on</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/home-number-signage13.webp')}}" alt="Karan Singh" class="client-img">
                                        <div>
                                            <div class="client-name">Karan Singh</div>
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
                                    <p class="card-text testimonial-card-text">I would love to come back to Brand Signage again and again for all types of signboard needs.” <br> “Very good product and excellent customer service. I love the wide range of house number boards of different types at Brand Signage</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/home-number-signage24.webp')}}" alt="Rohan Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Rohan Gupta</div>
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
                                    <p class="card-text testimonial-card-text">Wonderful signboards. Brand Signage is a trusted signage manufacturing brand for all types of signboards including house number boards.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/home-number-signage14.webp')}}" alt="Ishita Mehta" class="client-img">
                                        <div>
                                            <div class="client-name">Ishita Mehta</div>
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

<section class="mt-lg-5">
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3" id="gallery-container">
        <h2 class="hero-title">Catalogue</h2>
        
        <!-- First Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/home-number-signage15.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/home-number-signage15.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/home-number-signage16.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/home-number-signage16.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/home-number-signage17.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/home-number-signage17.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/home-number-signage18.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/home-number-signage18.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/home-number-signage19.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/home-number-signage19.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/home-number-signage20.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/home-number-signage20.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/home-number-signage21.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/home-number-signage21.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="{{asset('frontend/Images/home-number-signage22.webp')}}" data-lightbox="catalogue" data-title="Image 1">
                <img src="{{asset('frontend/Images/home-number-signage22.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
                </a>
            </div>
        </div>

    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title">FAQS</h1>

        <div class="faq-item">
            <button class="faq-question">
                Why are house number signs important?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>House number signs are important to locate a house, identify it, and also it enhance the beauty of its exterior. With a house number board aligned with the home’s design elements, a home often stands out in the neighborhood.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can house number signs be customized?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, most trusted brands like Brand Signage provide customized house number signs. The house number boards are crafted with your preferences and requirements in mind.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What materials are commonly used for house number signs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Depending on the average weather condition of the area, overall house aesthetics, and the homeowners’ personal taste, the material for house number signs is chosen. The commonly used materials for making the signs include steel, PVC, wood, etc.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are house number signs weather-resistant?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes. The number boards are mostly weather-resistant. If your area is more likely to be affected by weather hazards than others, make sure to customize the number boards with advanced durability.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How should I install a house number sign?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Installing a house number sign is easy if you buy it from a reliable company like Brand Signage. The house number plates they offer are flexible and easy to install. The pre-mounted adhesives are helpful to initiate the installation process.</p>
            </div>
        </div>

    </div>
</section>
@endsection