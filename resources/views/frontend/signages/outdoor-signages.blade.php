@extends('frontend.layout.appLayout')
@section('content')
<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/outdoor-signage.png')}}" alt="Outdoor Signages">
                <div class="carousel-caption-custom">
                    <h1>Outdoor Signage Boards That Capture Attention</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Why Use Outdoor Signage for <br> Your Business</h2>
        <p class="card-text testimonial-card-text text-center pb-3">Among multiple marketing and advertising tools
            for reinforcing businesses, outdoor signage is one of the most effective <br> options. A well-designed,
            clearly visible, and thoughtful outdoor sign board can communicate your brand and engage your <br>
            audience in a way that they cannot resist stopping by the signage board and sometimes checking out the
            brand more. <br>
            However, to be more specific, the reasons why businesses should pay attention to using outdoor signage
            boards are as follows:</p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/outdoor-signage2.png')}}" alt="Outdoor Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Aware people about the brand’s latest offers</h2>
                <p class="brand-description">
                    A digital outdoor signboard works as a messenger to your target audiences and existing customers
                    informing them of seasonal offers, sales events and special discounts. If the signage were not
                    there, they would probably pass by the road without checking out your brand store.</p>
                <h2 class="brand-title">Notify that the store is open</h2>
                <p class="brand-description">
                    Outdoor sign boards are a powerful method to indicate that the store is open even when it is
                    late. Motorists, car drivers and even pedestrians are nowadays extremely busy in their daily
                    schedule. Hence, to let your potential customers know that the store is open and they can shop
                    late if they want, outdoor signage is a must!</p>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Creates a long-lasting brand impression</h2>
                <p class="brand-description">
                    Outdoor signage can instantly attract customers and eventually create a long-lasting brand
                    impression. It establishes a brand’s presence in an area with permanent fixtures. A signboard
                    outdoors becomes an easy-to-identify landmark for local residents and occasional visitors in
                    that area.</p>
                <h2 class="brand-title">Ensures durability and versatility as a marketing tool</h2>
                <p class="brand-description">
                    Unlike many other marketing methods like posters or pamphlets, outdoor board signs are durable
                    and showcase versatility. With its different types, you can use the outdoor signages the way you
                    want. <br>
                    Outdoor signage boards are an ideal way to improve customer service, promote your brand and
                    ensure sustainable business growth.</p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/outdoor-signage3.png')}}" alt="Outdoor Signages" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>



<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Explore Outdoor Board Signs by <br> Use Type</h2>
            <p class="card-text text-center">With key elements like bright colours, strong LED lights, easy-to-read
                and dynamic texts, 3D designs, motion graphics and so on, outdoor <br> signage boards can impress
                audiences on the road instantly. Here are some of the different types of outdoor signs that
                businesses can <br> use according to their business nature and goals.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/outdoor-signage4.png')}}" class="why-card-img-top" alt="Freestanding Outdoor Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Freestanding Outdoor Signs</h3>
                        <p class="card-text">A freestanding sign, anchored directly to the ground without being
                            attached to any building or establishment, comes in different forms like pylon or pole
                            signs, monoliths, and monuments. Pylons can be seen at a great height, whereas monoliths
                            are closed box structures and monuments.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/outdoor-signage5.png')}}" class="why-card-img-top" alt="Outdoor Banners">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Outdoor Banners</h3>
                        <p class="card-text">Simple banners placed outside your store are a cost-effective yet
                            useful way to make the passerby audiences stop at the store and decide about buying the
                            products or services.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/outdoor-signage6.png')}}" class="why-card-img-top"
                        alt="Illuminated Outdoor Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Illuminated Outdoor Signage</h3>
                        <p class="card-text">With attractive LED lights attached to the signages, the visibility of
                            the signages can be doubled. The illuminated boards comprise neon, LED or other
                            fluorescent lights and deliver maximum impact even in a busy area.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/outdoor-signage7.png')}}" class="why-card-img-top" alt="PVC Outdoor Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">PVC Outdoor Signage</h3>
                        <p class="card-text">Made of polyvinyl chloride, PVC outdoor signage works as a durable,
                            lightweight, low-maintenance and affordable marketing tool. Being suitable for diverse
                            weather conditions, these outdoor board signs can be used for multiple purposes
                            including yard signs, tradeshow displays, directional signages and so on.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/outdoor-signage8.png')}}" class="why-card-img-top" alt="Vinel Shop Front Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Vinel Shop Front Signs</h3>
                        <p class="card-text">Also known as fascia, a shopfront sign is a type of highly visible
                            outdoor business signage. By appearing at the front side of a business premise, this
                            signboard at outdoor promotes services, events and special offers.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/outdoor-signage9.png')}}" class="why-card-img-top" alt="Aluminium Outdoor Signage">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Aluminium Outdoor Signage</h3>
                        <p class="card-text">Made of composite aluminium sheets strengthened with polyethylene
                            plastic from the core, this type of outdoor signage is lightweight and durable. It is
                            ideal for cases where strong and permanent outdoor board signs are needed.</p>
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
                                <img src="{{asset('frontend/Images/outdoor-signage4.png')}}" class="why-card-img-top"
                                    alt="Freestanding Outdoor Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Freestanding Outdoor Signs</h3>
                                    <p class="card-text">A freestanding sign, anchored directly to the ground
                                        without being attached to any building or establishment, comes in different
                                        forms like pylon or pole signs, monoliths, and monuments. Pylons can be seen
                                        at a great height, whereas monoliths are closed box structures and monuments
                                        are often known for little or no open space between the signage and the
                                        ground.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/outdoor-signage5.png')}}" class="why-card-img-top" alt="Outdoor Banners">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Outdoor Banners</h3>
                                    <p class="card-text">Simple banners placed outside your store are a
                                        cost-effective yet useful way to make the passerby audiences stop at the
                                        store and decide about buying the products or services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/outdoor-signage6.png')}}" class="why-card-img-top"
                                    alt="Illuminated Outdoor Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Illuminated Outdoor Signage</h3>
                                    <p class="card-text">With attractive LED lights attached to the signages, the
                                        visibility of the signages can be doubled. The illuminated boards comprise
                                        neon, LED or other fluorescent lights and deliver maximum impact even in a
                                        busy area.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/outdoor-signage7.png')}}" class="why-card-img-top"
                                    alt="PVC Outdoor Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">PVC Outdoor Signage</h3>
                                    <p class="card-text">Made of polyvinyl chloride, PVC outdoor signage works as a
                                        durable, lightweight, low-maintenance and affordable marketing tool. Being
                                        suitable for diverse weather conditions, these outdoor board signs can be
                                        used for multiple purposes including yard signs, tradeshow displays,
                                        directional signages and so on. <br> <br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/outdoor-signage8.png')}}" class="why-card-img-top"
                                    alt="Vinel Shop Front Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Vinel Shop Front Signs</h3>
                                    <p class="card-text">Also known as fascia, a shopfront sign is a type of highly
                                        visible outdoor business signage. By appearing at the front side of a
                                        business premise, this signboard at outdoor promotes services, events and
                                        special offers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/outdoor-signage9.png')}}" class="why-card-img-top"
                                    alt="Aluminium Outdoor Signage">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Aluminium Outdoor Signage</h3>
                                    <p class="card-text">Made of composite aluminium sheets strengthened with
                                        polyethylene plastic from the core, this type of outdoor signage is
                                        lightweight and durable. It is ideal for cases where strong and permanent
                                        outdoor board signs are needed.</p>
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
            <h2 class="display-4 mb-3 why-text-heading">Your Guide to Perfect Outdoor Signage Boards</h2>
            <p class="card-text testimonial-card-text">According to a survey report, around 64% of women aged 18-24
                report missing their destinations due to unclear signages. So, whether it <br> is opening a new
                store, launching a grand PR event for an established business, or announcing a lucrative offer,
                choosing the right <br> board for outdoors plays a vital role in every occasion. However, below are
                the things that you need to remember while finding a perfect <br> outdoor signage board for your
                business:</p>
        </div>

        <div class="col-lg-12">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/outdoor-signage10.png')}}" alt="Reverse Glow Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Get Sample Packs</h5>
                            <p class="text-content">Before you decide which signage company you should rely upon,
                                get some sample packages from different brands. Thus, you can look at the materials,
                                cost, and efficacy of the boards from a close distance and select which one is most
                                suitable for your business.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/outdoor-signage11.png')}}" alt="Metal Backlit" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Bespoke Services</h5>
                            <p class="text-content">Not all signage brands that provide good-quality products are
                                reliable enough to go for! The reason is unprofessional and poor customer service.
                                Buy from a leading signage manufacturer or supplier who offers prompt and efficient
                                services for customers.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/outdoor-signage12.png')}}" alt="Premium Metal Letters and Signage"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Paper Size Guide</h5>
                            <p class="text-content">There are certain standard paper sizes for preparing outdoor
                                board signs. Consult with experts and decide which size of the paper is suitable for
                                the signage that you intend to get for your business.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/outdoor-signage13.png')}}" alt="Stainless Steel Signs" class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Sustainable Printing</h5>
                            <p class="text-content">As we are moving toward a future where sustainability becomes a
                                primary concern, focusing on sustainable printing in signage boards is important.
                                Eco-friendly boards with elements soothing to the eyes are helpful to carry forward
                                your business mission toward a secure future.</p>
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
                        <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">Excellent products with exclusive
                            features. I loved the beautiful outdoor signage boards I purchased from
                            Brand Signage. They are durable, attractive and perfectly aligned with my
                            business brand <br> <br></p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/rohit-verma.svg')}}" alt="Rohit Verma" class="client-img">
                            <div>
                                <div class="client-name">Rohit Verma</div>
                                <div class="client-role">Event Management Company Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">Brand Signage has a wide collection
                            of outdoor signage. I recently bought some of their products for my shop and
                            I must say they provide the best quality signage options</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/priya-menon.svg')}}" alt="Priya Menon" class="client-img">
                            <div>
                                <div class="client-name">Priya Menon</div>
                                <div class="client-role">Boutique Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">I appreciate the products as well as
                            the customer service! If you are looking for high-quality outdoor signage
                            boards, Brand Signage should be your first choice.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/karan-mehta.svg')}}" alt="Karan Mehta" class="client-img">
                            <div>
                                <div class="client-name">Karan Mehta</div>
                                <div class="client-role">Gym and Fitness Studio Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">“Highly impressive! Good products,
                            smooth delivery process and prompt customer service. I enjoyed my shopping
                            experience with Brand Signage.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/ananya-reddy.svg')}}" alt="Ananya Reddy" class="client-img">
                            <div>
                                <div class="client-name">Ananya Reddy</div>
                                <div class="client-role">Cafe Chain Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col testimonial-small-div">
                <div class="testimonial-card card">
                    <div class="yellow-circle">
                        <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text testimonial-card-text">One of the most trusted destinations
                            for signage boards. The diversity in the product catalogue, customization
                            options, and hassle-free purchasing process make me feel like coming back to
                            Brand Signage again.</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/sandeep-gupta.svg')}}" alt="Sandeep Gupta" class="client-img">
                            <div>
                                <div class="client-name">Sandeep Gupta</div>
                                <div class="client-role">Automobile Workshop Owner</div>
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
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">Excellent products with exclusive
                                        features. I loved the beautiful outdoor signage boards I purchased from
                                        Brand Signage. They are durable, attractive and perfectly aligned with my
                                        business brand <br> <br></p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/rohit-verma.svg')}}" alt="Rohit Verma" class="client-img">
                                        <div>
                                            <div class="client-name">Rohit Verma</div>
                                            <div class="client-role">Event Management Company Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">Brand Signage has a wide collection
                                        of outdoor signage. I recently bought some of their products for my shop and
                                        I must say they provide the best quality signage options</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/priya-menon.svg')}}" alt="Priya Menon" class="client-img">
                                        <div>
                                            <div class="client-name">Priya Menon</div>
                                            <div class="client-role">Boutique Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">I appreciate the products as well as
                                        the customer service! If you are looking for high-quality outdoor signage
                                        boards, Brand Signage should be your first choice.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/karan-mehta.svg')}}" alt="Karan Mehta" class="client-img">
                                        <div>
                                            <div class="client-name">Karan Mehta</div>
                                            <div class="client-role">Gym and Fitness Studio Owner</div>
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
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">I appreciate the products as well as
                                        the customer service! If you are looking for high-quality outdoor signage
                                        boards, Brand Signage should be your first choice.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/karan-mehta.svg')}}" alt="Karan Mehta" class="client-img">
                                        <div>
                                            <div class="client-name">Karan Mehta</div>
                                            <div class="client-role">Gym and Fitness Studio Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">“Highly impressive! Good products,
                                        smooth delivery process and prompt customer service. I enjoyed my shopping
                                        experience with Brand Signage.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/ananya-reddy.svg')}}" alt="Ananya Reddy" class="client-img">
                                        <div>
                                            <div class="client-name">Ananya Reddy</div>
                                            <div class="client-role">Cafe Chain Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card card">
                                <div class="yellow-circle">
                                    <img src="{{asset('frontend/Images/comment-icon.svg')}}" alt="Comment" class="comment-img">
                                </div>
                                <div class="card-body px-0">
                                    <p class="card-text testimonial-card-text">One of the most trusted destinations
                                        for signage boards. The diversity in the product catalogue, customization
                                        options, and hassle-free purchasing process make me feel like coming back to
                                        Brand Signage again.</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/sandeep-gupta.svg')}}" alt="Sandeep Gupta" class="client-img">
                                        <div>
                                            <div class="client-name">Sandeep Gupta</div>
                                            <div class="client-role">Automobile Workshop Owner</div>
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
                What fonts should we use for outdoor signage boards?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Talk with a signage expert or research on your own to find a font that is easy to read, clearly
                    visible and legible. Also, it must align with your brand tone and be attractive enough to grab
                    people’s attention at the very first impression.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is waterproof material for signage?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Outdoor signages made of materials like PVC board, vinyl acrylic or plexiglass and aluminium can
                    stand the test of time. Being waterproof, they can withstand rainfall along with other weather
                    hazards.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What is the difference between regular signage vs. digital signboards for outdoor marketing?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>A regular signboard for the outdoors includes static text and/or images to showcase a brand
                    message whereas a digital signboard includes dynamic videos, pictures and texts sometimes with
                    lighting attached to the board.</p>
            </div>
        </div>

    </div>
</section>


@endsection