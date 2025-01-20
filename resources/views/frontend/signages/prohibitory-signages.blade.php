@extends('frontend.layout.appLayout')
@section('content')

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/new/prohibitory-1.webp')}}" alt="Prohibition Signs for Workplace Safety">
                <div class="carousel-caption-custom">
                    <h1>Prohibition Signs for Workplace Safety</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Custom Prohibition Signs and Symbols</h2>
        <p class="card-text testimonial-card-text text-center pb-3">Prohibition Sign and its Significance for Workspace Security</p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/prohibitory-2.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <p class="brand-description">
                    A prohibition sign is a particular kind of safety sign outlined to convey measures that are not permitted in a specific zone. Popular instances comprise no smoking signage and no entry signage, which are crucial in balancing secure and cooperative work surroundings. These signs, generally recognized by their round shape with a red border and diagonal line, cater as a lucid visual hint to workers and visitors, guaranteeing prompt acknowledgment of banned activities.</p>
                <p class="brand-description">
                    In work areas, prohibition safety signs are critical for alleviating risks and averting mishappenings. For example, a deliberately positioned no-smoking sign in combustible sectors assists in avoiding probable fire dangers, while a no-entry sign prohibits an unsanctioned approach to hazardous areas. Merged with other safety signs such as warning signs and mandatory signs, they produce an extensive security interaction system.</p>
                <p class="brand-description">
                    Personalizing prohibition signage makes sure that messages match with particular workspace needs. Tailored patterns sanction organizations to remit extraordinary perils, boosting compliance with security rules. Be it a smoking sign for constricted areas or an area sign for illogical zones, traditional solutions improve lucidity and imposition. <br>
                    By funding customized prohibition safety signs, enterprises save their human resources, encounter submission norms, and boost a culture of security.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Types of Prohibition Signs and Symbols</h2>
            <p class="card-text text-center">Prohibition signs have a crucial part in guaranteeing security and stabilizing law in workspaces and public places. They specify <br> constrained operations to obstruct mishappenings, ensure deference, and foster consciousness. Undermentioned are some <br> popular kinds of prohibition signage and their significance</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/prohibitory-3.webp')}}" class="why-card-img-top"
                        alt="No Smoking Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">No Smoking Signs</h3>
                        <p class="card-text">These are the most universally used prohibition safety signs, that stop smoking in limited sectors to prevent fire risks and preserve healthy surroundings. No smoking signage is important in factories, hospitals, and public places.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/prohibitory-4.webp')}}" class="why-card-img-top"
                        alt="No Mobile Phones Sign">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">No Mobile Phones Sign</h3>
                        <p class="card-text">Outlined to restrict diversions and promote concentration, these signs are usually observed in workstations needing exactness, such as laboratories or construction plots.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/new/prohibitory-5.webp')}}" class="why-card-img-top"
                            alt="No Machinery Sign">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">No Machinery Sign</h3>
                            <p class="card-text">These prohibition signs limit the usage of unsanctioned machinery in particular zones, hampering misapplication and probable impairments.</p>
                        </div>
                    </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/prohibitory-6.webp')}}" class="why-card-img-top"
                        alt="No Dogs Sign">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">No Dogs Sign</h3>
                        <p class="card-text">Utilized in food planning sectors, parks, and hospitals, this area sign guarantees cleanliness and abidance with rules.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/prohibitory-7.webp')}}" class="why-card-img-top"
                        alt="No Food & Drink Sign">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">No Food & Drink Sign</h3>
                        <p class="card-text">Crucial for nurturing tidiness and security in laboratories, production fields, and device areas, these signs minimize pollution hazards.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/prohibitory-8.webp')}}" class="why-card-img-top"
                        alt="Access Awareness Sign">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Access Awareness Sign</h3>
                        <p class="card-text">These safety signs constrain unofficial ingress, warranting just experienced staff approach high-peril areas. Instances comprise no entry signage and hazard-centric cautions.</p>
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
                                <img src="{{asset('frontend/Images/new/prohibitory-3.webp')}}" class="why-card-img-top"
                                    alt="No Smoking Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">No Smoking Signs</h3>
                                    <p class="card-text">These are the most universally used prohibition safety signs, that stop smoking in limited sectors to prevent fire risks and preserve healthy surroundings. No smoking signage is important in factories, hospitals, and public places.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/prohibitory-4.webp')}}" class="why-card-img-top"
                                    alt="No Mobile Phones Sign">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">No Mobile Phones Sign</h3>
                                    <p class="card-text">Outlined to restrict diversions and promote concentration, these signs are usually observed in workstations needing exactness, such as laboratories or construction plots.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/prohibitory-5.webp')}}" class="why-card-img-top"
                                    alt="No Machinery Sign">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">No Machinery Sign</h3>
                                    <p class="card-text">These prohibition signs limit the usage of unsanctioned machinery in particular zones, hampering misapplication and probable impairments.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/prohibitory-6.webp')}}" class="why-card-img-top"
                                    alt="No Dogs Sign">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">No Dogs Sign</h3>
                                    <p class="card-text">Utilized in food planning sectors, parks, and hospitals, this area sign guarantees cleanliness and abidance with rules.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/prohibitory-7.webp')}}" class="why-card-img-top"
                                    alt="No Food & Drink Sign">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">No Food & Drink Sign</h3>
                                    <p class="card-text">Crucial for nurturing tidiness and security in laboratories, production fields, and device areas, these signs minimize pollution hazards.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/prohibitory-8.webp')}}" class="why-card-img-top"
                                    alt="Access Awareness Sign">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Access Awareness Sign</h3>
                                    <p class="card-text">These safety signs constrain unofficial ingress, warranting just experienced staff approach high-peril areas. Instances comprise no entry signage and hazard-centric cautions. <br> <br> </p>
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

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">When Do You Use Prohibition Signs?</h2>
        <p class="card-text text-center">Acrylic LED signages are the talk of the town because they combine aesthetics and practical functionality. <br> These offer great value for money and provide a long-standing performance in any condition:</p>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/prohibitory-9.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Reason for Prohibition signs</h2>
                <p class="brand-description">
                    <ul>
                        <li>Convey limited activities, warranting protection, and submissiveness in several landscapes.</li>
                        <li>These safety signs are utilized at times when specific conducts or operations could create dangers to people or assets.</li>
                    </ul>
                </p>
                <h2 class="brand-title">In Work Areas</h2>
                <p class="brand-description">
                    Prohibition safety signs are essential for supporting risk-free surroundings.  <br>
                    For example:
                    <ul>
                        <li>No smoking signage- Compulsory in zones with burnable substances or tools to alleviate fire dangers. Same way.</li>
                        <li>No-entry signage- Averts unofficial ingress to banned areas, shielding workers and guests from probable perils.</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">In Public places</h2>
                <p class="brand-description">
                    Prohibition signs maintain orderliness and security.<br>
                    For example:
                    <ul>
                        <li>No smoking signs-Imposed in selected no-smoking areas.</li>
                        <li>No Dogs Signs: Utilized in parks where pets are constrained.</li>
                        <li>No Food and Drink Signs: Found in sectors where tidiness is important.</li>
                    </ul>
                </p>
                <h2 class="brand-title">Amalgamating prohibition signs</h2>
                <p class="brand-description">
                    Warning signs and mandatory signs produce an extensive transmission structure, efficiently conveying welfare matters.<br>
                    For instance:
                    <ul>
                        <li>No-machinery signs can limit the unsanctioned usage of heavy devices.</li>
                        <li>No mobile phone sign guarantees emphasis in high-danger sectors like laboratories or construction plots.</li>
                    </ul>
                </p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/prohibitory-10.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/new/prohibitory-11.webp')}}" alt="Prohibitory Signages" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Tailored zone signs</h2>
                <p class="brand-description">
                    <ul>
                        <li>Your atmosphere and organizations can precisely transmit laws, and foster submissiveness.</li>
                        <li>Forbid mishappenings, warranting an attaining and effective workstation.</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="why-bg-light-pink py-5" style="background-color: #fff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Types of Prohibition Signs and Symbols</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/prohibitory-12.webp')}}" class="why-card-img-top"
                        alt="Reasons for Conventional Prohibition Safety Signs">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Reasons for Conventional Prohibition Safety Signs</h3>
                        <p class="card-text">
                            <ul class="text-start">
                                <li>Important for workspace and public protection, outlined to transmit definite messages that match extraordinary landscapes.</li>
                                <li>These safety signs precisely demonstrate averted operations, guaranteeing abidance with laws and stopping mishappenings.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/prohibitory-13.webp')}}" class="why-card-img-top"
                        alt="Customized Solutions by Brand Signages">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Customized Solutions by Brand Signages</h3>
                        <p class="card-text">
                            <ul class="text-start">
                                <li>Personalized prohibition signage to your requirements, and you can remit site-centric risks efficiently. </li>
                                <li>For example, traditional no-smoking signage can be shaped for zones with combustible substances.</li>
                                <li>exquisite no-entry signage ensures that non-certified staff are kept away from constricted areas. </li>
                                <li>These formal signs improve lucidity and minimize the peril of misimpression.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/prohibitory-14.webp')}}" class="why-card-img-top"
                        alt="Flexibility throughout Industries">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Flexibility throughout Industries</h3>
                        <p class="card-text">
                            <ul class="text-start">
                                <li>Traditional prohibition signs are beneficial throughout industries, from production to wellness programs, and public places such as parks or shopping malls. </li>
                                <li>They amalgamate effortlessly with other security transmission systems, comprising warning signs and mandatory signs, to supply extensive risk management.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/prohibitory-15.webp')}}" class="why-card-img-top"
                        alt="Effective and Resistant Solution">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Effective and Resistant Solution</h3>
                        <p class="card-text">
                            <ul class="text-start">
                                <li>Whether it's a smoking sign for fire-affected sectors or an area sign for limited approach areas, traditional solutions help organizations balance protection and acceptance. </li>
                                <li>Standardized patterns, long-lasting substances, and clear messaging guarantee these signs stay efficient under difficult circumstances.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/new/prohibitory-16.webp')}}" class="why-card-img-top"
                        alt="Dedication to Security">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Dedication to Security</h3>
                        <p class="card-text text-start">
                            <ul class="text-start">
                                <li>Funding in formal prohibition safety signs depicts a dedication to security, saving workers and guests at the same time fulfilling regulatory norms.  </li>
                                <li>Let your shielding steps mirror your competitors and alertness to minute things.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="signageCarouselNew" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/prohibitory-12.webp')}}" class="why-card-img-top"
                                    alt="Reasons for Conventional Prohibition Safety Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Reasons for Conventional Prohibition Safety Signs</h3>
                                    <p class="card-text">
                                        <ul>
                                            <li>Important for workspace and public protection, outlined to transmit definite messages that match extraordinary landscapes.</li>
                                            <li>These safety signs precisely demonstrate averted operations, guaranteeing abidance with laws and stopping mishappenings.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/prohibitory-13.webp')}}" class="why-card-img-top"
                                    alt="Customized Solutions by Brand Signages">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Customized Solutions by Brand Signages</h3>
                                    <p class="card-text">
                                        <ul>
                                            <li>Personalized prohibition signage to your requirements, and you can remit site-centric risks efficiently. </li>
                                            <li>For example, traditional no-smoking signage can be shaped for zones with combustible substances.</li>
                                            <li>exquisite no-entry signage ensures that non-certified staff are kept away from constricted areas. </li>
                                            <li>These formal signs improve lucidity and minimize the peril of misimpression.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/prohibitory-14.webp')}}" class="why-card-img-top"
                                    alt="Flexibility throughout Industries">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Flexibility throughout Industries</h3>
                                    <p class="card-text">
                                        <ul>
                                            <li>Traditional prohibition signs are beneficial throughout industries, from production to wellness programs, and public places such as parks or shopping malls. </li>
                                            <li>They amalgamate effortlessly with other security transmission systems, comprising warning signs and mandatory signs, to supply extensive risk management.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/prohibitory-14.webp')}}" class="why-card-img-top"
                                    alt="Flexibility throughout Industries">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Flexibility throughout Industries</h3>
                                    <p class="card-text">
                                        <ul>
                                            <li>Traditional prohibition signs are beneficial throughout industries, from production to wellness programs, and public places such as parks or shopping malls. </li>
                                            <li>They amalgamate effortlessly with other security transmission systems, comprising warning signs and mandatory signs, to supply extensive risk management. <br> <br> </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/prohibitory-15.webp')}}" class="why-card-img-top"
                                    alt="Effective and Resistant Solution">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Effective and Resistant Solution</h3>
                                    <p class="card-text">
                                        <ul>
                                            <li>Whether it's a smoking sign for fire-affected sectors or an area sign for limited approach areas, traditional solutions help organizations balance protection and acceptance. </li>
                                            <li>Standardized patterns, long-lasting substances, and clear messaging guarantee these signs stay efficient under difficult circumstances.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/new/prohibitory-16.webp')}}" class="why-card-img-top"
                                    alt="Dedication to Security">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Dedication to Security</h3>
                                    <p class="card-text">
                                        <ul>
                                            <li>Funding in formal prohibition safety signs depicts a dedication to security, saving workers and guests at the same time fulfilling regulatory norms.  </li>
                                            <li>Let your shielding steps mirror your competitors and alertness to minute things.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why-carousel-controls">
                <button id="prevButtonNew" class="why-carousel-control" type="button" data-bs-target="#signageCarouselNew"
                    data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="nextButtonNew" class="why-carousel-control" type="button" data-bs-target="#signageCarouselNew"
                    data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="carousel-indicators why-carousel-indicators">
                <button type="button" data-bs-target="#signageCarouselNew" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#signageCarouselNew" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
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
                        <p class="card-text testimonial-card-text">The prohibition signage we bought was beyond our expectations. The team generated personalized no-smoking signage for our factory that ideally aligned with our needs. Superb quality and longevity!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/prohibitory-17.webp')}}" alt="Rahul Sharma" class="client-img">
                            <div>
                                <div class="client-name">Rahul Sharma</div>
                                <div class="client-role">Construction Manager</div>
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
                        <p class="card-text testimonial-card-text">We wanted prohibition safety signs for our warehouse, and the service was extraordinary. The no-entry signage was precise and efficiently constrained unsanctioned approach</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/prohibitory-18.webp')}}" alt="Emily Carter" class="client-img">
                            <div>
                                <div class="client-name">Emily Carter</div>
                                <div class="client-role">Warehouse Supervisor</div>
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
                        <p class="card-text testimonial-card-text">The conventional prohibition signs, consisting of smoking signs and area signs, have considerably enhanced protection in our workspace. Workers find them simple to comprehend</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/prohibitory-19.webp')}}" alt="John Peterson" class="client-img">
                            <div>
                                <div class="client-name">John Peterson</div>
                                <div class="client-role">Safety Officer</div>
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
                        <p class="card-text testimonial-card-text">The safety signs we bought, such as the mandatory signs and warning signs, are resistant and highly observable. They have improved submissiveness in our accommodation</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/prohibitory-20.webp')}}" alt="Anita Desai" class="client-img">
                            <div>
                                <div class="client-name">Anita Desai</div>
                                <div class="client-role">Compliance Manager</div>
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
                        <p class="card-text testimonial-card-text">The prohibition signage we purchased, comprising no entry and no smoking signage, reached promptly and was completely what we required. Highly suggested!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/new/prohibitory-21.webp')}}" alt="Mark Johnson" class="client-img">
                            <div>
                                <div class="client-name">Mark Johnson</div>
                                <div class="client-role">Operations Head</div>
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
                                    <p class="card-text testimonial-card-text">The prohibition signage we bought was beyond our expectations. The team generated personalized no-smoking signage for our factory that ideally aligned with our needs. Superb quality and longevity!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/prohibitory-17.webp')}}" alt="Rahul Sharma" class="client-img">
                                        <div>
                                            <div class="client-name">Rahul Sharma</div>
                                            <div class="client-role">Construction Manager</div>
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
                                    <p class="card-text testimonial-card-text">We wanted prohibition safety signs for our warehouse, and the service was extraordinary. The no-entry signage was precise and efficiently constrained unsanctioned approach</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/prohibitory-18.webp')}}" alt="Emily Carter" class="client-img">
                                        <div>
                                            <div class="client-name">Emily Carter</div>
                                            <div class="client-role">Warehouse Supervisor</div>
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
                                    <p class="card-text testimonial-card-text">The conventional prohibition signs, consisting of smoking signs and area signs, have considerably enhanced protection in our workspace. Workers find them simple to comprehend</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/prohibitory-19.webp')}}" alt="John Peterson" class="client-img">
                                        <div>
                                            <div class="client-name">John Peterson</div>
                                            <div class="client-role">Safety Officer</div>
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
                                    <p class="card-text testimonial-card-text">The conventional prohibition signs, consisting of smoking signs and area signs, have considerably enhanced protection in our workspace. Workers find them simple to comprehend</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/prohibitory-19.webp')}}" alt="John Peterson" class="client-img">
                                        <div>
                                            <div class="client-name">John Peterson</div>
                                            <div class="client-role">Safety Officer</div>
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
                                    <p class="card-text testimonial-card-text">The safety signs we bought, such as the mandatory signs and warning signs, are resistant and highly observable. They have improved submissiveness in our accommodation</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/prohibitory-20.webp')}}" alt="Anita Desai" class="client-img">
                                        <div>
                                            <div class="client-name">Anita Desai</div>
                                            <div class="client-role">Compliance Manager</div>
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
                                    <p class="card-text testimonial-card-text">The prohibition signage we purchased, comprising no entry and no smoking signage, reached promptly and was completely what we required. Highly suggested!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/new/prohibitory-21.webp')}}" alt="Mark Johnson" class="client-img">
                                        <div>
                                            <div class="client-name">Mark Johnson</div>
                                            <div class="client-role">Operations Head</div>
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
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Catalogue</h2>
        
        <!-- First Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/new/prohibitory-22.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/new/prohibitory-23.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/new/prohibitory-24.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/new/prohibitory-25.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
        </div>
        
        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/new/prohibitory-26.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/new/prohibitory-27.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/new/prohibitory-28.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/new/prohibitory-29.webp')}}" class="img-fluid" alt="Catalogue"  style="width: 100%;">
            </div>
        </div>

    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <h1 class="faq-title">FAQS</h1>

        <div class="faq-item">
            <button class="faq-question">
                What are the most popular categories of prohibition signs used in work areas?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>The most popular prohibition safety signs are no smoking signage, no entry signage, and area signs that prohibit definite actions or approaches. These safety signs guarantee workspace risks are reduced and laws are precisely transmitted.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How can I personalize prohibition signs to cater to my workstation's requirements?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Traditional prohibition signage can be customized to comprise particular messages, colors, and symbols applicable to your industry. For instance, producing exclusive smoking signs for fire-affected sectors or area signs for constrained zones improves defense and docility.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Are prohibition signs needed by law in some industries?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Yes, some industries, like manufacturing, wellness programs, and production, are legally required to show prohibition signs and mandatory signs to abide by work area safety rules.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What substances are generally utilized for long-lasting prohibition signs?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Long-lasting prohibition safety signs are frequently constructed from substances like aluminum, acrylic, or PVC, warranting they can bear tough atmospheres while supporting visibility.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How do I make sure my workspace is submissive to safety signage rules?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>To guarantee acceptance, lead safety checks at intervals, and update prohibition signage as desired. You can match your safety signs with legal norms and ideal procedures that have warning signs and compulsory notices.</p>
            </div>
        </div>

    </div>
</section>
@endsection