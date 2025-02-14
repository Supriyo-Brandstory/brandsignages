@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/office-signage1.webp')}}" alt="Office Signage">
                <div class="carousel-caption-custom">
                    <h1>Office Signage Boards That Make a Statement</h1>
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
        <h2 class="hero-title">Why We Are the Best Office Signage <br> Provider</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/office-signage2.webp')}}" alt="Office Signage" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    Regardless of the industry, an office is more than just a workspace—it serves as a second home for employees and a key touchpoint for clients and 
                    business associates. A well-maintained, clean, and professionally designed office environment enhances productivity and leaves a lasting impression. 
                    One crucial element that contributes to this experience is office signboards.
                    <br>
                    At Brand Signages, we specialize in designing sophisticated, durable, and brand-aligned office signages that reflect your business identity. Whether 
                    it’s a office reception sign board, directional board, office nameplates, or meeting room plaque, we ensure that every sign seamlessly reflect aesthetics 
                    of your office. Our expert team focuses on high-quality materials and precision design to create signboards that enhance your office’s ambiance.
                </p>
                <p class="brand-description">
                    We know that every business has its unique branding needs. That’s why our corporate signage solutions are fully customizable to match your company’s identity. 
                    From logo signs that reinforce brand recognition to informational boards that improve workflow, our tailored approach ensures that your office signages serve both 
                    aesthetic and practical purposes.
                </p>
               
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Impactful & Professional Office Signage Boards</h2>
            <p class="card-text text-center">Brand Signage, with a team of experienced and qualified experts, offers a vast collection of <br> carefully crafted office sign boards that are professional and impactful at once.The factors that <br> make our office signage boards more impactful than ever are:</p>

        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/office-signage3.webp')}}" class="why-card-img-top"
                        alt="Elevate Your Office Aesthetics">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Elevate Your Office Aesthetics</h3>
                        <p class="card-text">Who doesn’t want a clean, well-maintained, and sophisticated space within the office? By offering high-end sign boards reflecting unique style statements,  we help you elevate your office aesthetics. <br> <br> <br></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/office-signage4.webp')}}" class="why-card-img-top"
                        alt="Make a Lasting First Impression">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Make a Lasting First Impression</h3>
                        <p class="card-text">Impress your clients and satisfy your employees in one go with the help of well-designed, stylish and easy-to-follow sign boards. Sign boards made by Brand Signage add a refreshing vibrancy to their professional activities.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-md-4">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/office-signage5.webp')}}" class="why-card-img-top"
                            alt="Ensure Effortless Office Navigation">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Ensure Effortless Office Navigation</h3>
                            <p class="card-text">An office includes multiple corners to attend to and perform tasks. Sign boards including branded lobby displays, reception signage, conference room signs, etc. can direct people to wherever they want to go.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/office-signage6.webp')}}" class="why-card-img-top"
                        alt="Customize as your needs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Customize as your needs</h3>
                        <p class="card-text">Integrate your brand tone, company logo and other elements and make your office sign boards unique. Understanding the exclusivity of every single brand, Brand Signage provides you with custom-made signage. Also, each of the sign boards are weather-resistant, sleek and long-lasting.</p>
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
                                <img src="{{asset('frontend/Images/office-signage3.webp')}}" class="why-card-img-top"
                                    alt="Elevate Your Office Aesthetics">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Elevate Your Office Aesthetics</h3>
                                    <p class="card-text">Who doesn’t want a clean, well-maintained, and sophisticated space within the office? By offering high-end sign boards reflecting unique style statements,  we help you elevate your office aesthetics. <br> <br> <br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/office-signage4.webp')}}" class="why-card-img-top"
                                    alt="Make a Lasting First Impression">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Make a Lasting First Impression</h3>
                                    <p class="card-text">Impress your clients and satisfy your employees in one go with the help of well-designed, stylish and easy-to-follow sign boards. Sign boards made by Brand Signage add a refreshing vibrancy to their professional activities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/office-signage5.webp')}}" class="why-card-img-top"
                                    alt="Ensure Effortless Office Navigation">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Ensure Effortless Office Navigation</h3>
                                    <p class="card-text">An office includes multiple corners to attend to and perform tasks. Sign boards including branded lobby displays, reception signage, conference room signs, etc. can direct people to wherever they want to go.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/office-signage4.webp')}}" class="why-card-img-top"
                                    alt="Make a Lasting First Impression">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Make a Lasting First Impression</h3>
                                    <p class="card-text">Impress your clients and satisfy your employees in one go with the help of well-designed, stylish and easy-to-follow sign boards. Sign boards made by Brand Signage add a refreshing vibrancy to their professional activities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/office-signage5.webp')}}" class="why-card-img-top"
                                    alt="Ensure Effortless Office Navigation">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Ensure Effortless Office Navigation</h3>
                                    <p class="card-text">An office includes multiple corners to attend to and perform tasks. Sign boards including branded lobby displays, reception signage, conference room signs, etc. can direct people to wherever they want to go.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/office-signage6.webp')}}" class="why-card-img-top"
                                    alt="Customize as your needs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Customize as your needs</h3>
                                    <p class="card-text">Integrate your brand tone, company logo and other elements and make your office sign boards unique. Understanding the exclusivity of every single brand, Brand Signage provides you with custom-made signage. Also, each of the sign boards are weather-resistant, sleek and long-lasting.</p>
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


<section class="container py-lg-5 py-md-3 py-sm-2 py-3">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Types of Office Sign Boards We Make</h2>
           
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/office-signage7.webp')}}" alt="Directional signage" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Directional signage</h5>
                            <p class="text-content">For a first-time visitor or a newcomer employee, directional signboards help everyone navigate the office smoothly. It makes the overall office activities less time-consuming and more productive.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/office-signage8.webp')}}" alt="Reception signage" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Reception signage</h5>
                            <p class="text-content">Your office reception is where people who are arrived at your office, recognizes the brand for the first time. So, keeping impressive office reception sign board out there helps your business brand stand out.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/office-signage9.webp')}}" alt="Conference room signage"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Conference room signage</h5>
                            <p class="text-content">Often, get-togethers, meetings, seminars and other office programs take place in the conference room. Placing customized signage for reserving seats for dignitaries, directing the company values, etc is helpful for the attendees at the events.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/office-signage10.webp')}}" alt="Wall signboards" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Wall signboards</h5>
                            <p class="text-content">Showcasing your company history, founders’ names, awards, achievements, employee success, etc. through wall signs is a wise idea to enhance company reliability. Office signage can be digital or traditional, vertical or horizontal, simple or artistic. Whatever type it is, we, at Brand Signage, make it unique and impressive.</p>
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
                        <p class="card-text testimonial-card-text">As a physician, I often recommend our hospital to patients and their families. The new informational signages throughout the facility are fantastic! They not only highlight our services but also provide valuable health tips and educational content. <br></p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/hospital-signage13.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Dr. Sanjay Tak</div>
                                <div class="client-role">CMO</div>
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
                        <p class="card-text testimonial-card-text">Implementing a new signage system in our hospital has been transformative. We received numerous comments from patients who found the new wayfinding signs incredibly helpful. One patient said</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/hospital-signage14.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Dr. Samira</div>
                                <div class="client-role">vavasvsfvas</div>
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
                        <p class="card-text testimonial-card-text">Hearing from parents about their experiences in our clinic is invaluable. One mother wrote, 'The colorful signs and friendly staff made my child feel at ease during what could have been a scary visit.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/hospital-signage15.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Richard Lee</div>
                                <div class="client-role">Hospital Director</div>
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
                        <p class="card-text testimonial-card-text">A recent comment from a patient stated, 'I felt cared for every step of the way during my treatment.' Such heartfelt feedback not only boosts staff morale but also helps us identify areas for improvement and innovation in our care delivery.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/hospital-signage16.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Dr. Lisa Nguyen</div>
                                <div class="client-role">Surgeon</div>
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
                        <p class="card-text testimonial-card-text">The digital displays in the hospital lobby are a game-changer! Not only do they provide important announcements and updates, but they also showcase patient success stories that inspire hope.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/hospital-signage17.webp')}}" alt="Client 1" class="client-img">
                            <div>
                                <div class="client-name">Dr. Arvind Nair</div>
                                <div class="client-role">Dermatologist</div>
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
                                    <p class="card-text testimonial-card-text">The best signage company ever. Brand Signage not only provides excellent products but also takes good care of customers’ queries and preferences</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/office-signage11.webp')}}" alt="Rajesh Verma" class="client-img">
                                        <div>
                                            <div class="client-name">Rajesh Verma</div>
                                            <div class="client-role">Software Engineer</div>
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
                                    <p class="card-text testimonial-card-text">Recently purchased some signboards for my office space from Brand Signage. All of them are exactly how I wanted them to be crafted. Thanks a lot!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/office-signage12.webp')}}" alt="Pooja Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Pooja Sharma</div>
                                            <div class="client-role">Interior Designer</div>
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
                                    <p class="card-text testimonial-card-text">If someone orders office signages from Brand Signage once, they can barely go to any other site for it.” The products are extremely durable, well-crafted and also customizable. Loved them!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/office-signage13.webp')}}" alt="Client 1" class="client-img">
                                        <div>
                                            <div class="client-name">Amit Patel</div>
                                            <div class="client-role">Civil Engineer</div>
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
                                    <p class="card-text testimonial-card-text">If someone orders office signages from Brand Signage once, they can barely go to any other site for it.” The products are extremely durable, well-crafted and also customizable. Loved them!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/office-signage13.webp')}}" alt="Amit Patel" class="client-img">
                                        <div>
                                            <div class="client-name">Amit Patel</div>
                                            <div class="client-role">Civil Engineer</div>
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
                                    <p class="card-text testimonial-card-text">Highly recommend Brand Signage for office signage and other diverse types of signage. The company offers best-in-class signboards that meet your purpose effectively.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/office-signage14.webp')}}" alt="Neha Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Neha Gupta</div>
                                            <div class="client-role">Teacher</div>
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
                                    <p class="card-text testimonial-card-text">Brand Signage creates a benchmark in the signage manufacturing industry by offering a vast range of amazing signboards for various personal and professional purposes.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/office-signage15.webp')}}" alt="Arjun Menon" class="client-img">
                                        <div>
                                            <div class="client-name">Arjun Menon</div>
                                            <div class="client-role">Architect</div>
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
                Why are office signage boards important?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Office signboards offer an effective visual representation of the brand. On the other hand, they ensure clear communication among employees, employers, and other people associated with the business.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What materials are used for office signage boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Materials that are often used for office signage boards include expanded PVC foam, forex, acrylic, corflute, foamcore etc. Also, polycarbonate, PETG sheets, etc. are used for an extra layer of protection.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How can office signage boards improve workplace navigation?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Office signboards especially the directional signs show people the right direction to different areas within an office. Also, nameplates and other signboards help people easily reach out to specific professionals.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Can office signage boards be customized to fit my branding?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Certainly, Brand Signage as a trusted signage manufacturing company, crafts office sign boards keeping personalized requirements in mind. Experts in our team ensure that the brand tone remains intact.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How do I maintain and clean my office signage boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>If it is an LED or 3D sign, frequent cleaning may harm its visibility. Hence, expert discretion is needed for such cases. Washing with mild detergent and water and wiping with microfibre clothes are fine for cleaning traditional signs.</p>
            </div>
        </div>

    </div>
</section>



@endsection