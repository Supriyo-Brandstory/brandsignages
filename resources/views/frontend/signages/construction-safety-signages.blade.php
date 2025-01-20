@extends('frontend.layout.appLayout')
@section('content')
<style>
    .carousel-caption-custom {
        padding: 32px 64px 32px 64px;
    }

    @media (max-width: 576px) {
        .carousel-section .carousel-item img {
            margin-top: 10px;
        }

        .carousel-caption-custom {
            padding: 15px !important;
        }
    }

    .sefimg-2 {
        height: 442px !important;
        object-fit: cover;

    }

    .sefimg-3 {
        height: 387px !important;
        object-fit: cover;
    }

    .cndimag {

        height: 338px !important;
        object-fit: cover;
    }
</style>

<section class="carousel-section">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend/Images/cons-banner.webp')}}" alt="Construction Safety Signs">
                <div class="carousel-caption-custom">
                    <h1>Construction Safety Signs</h1>
                    <button class="custom-btn">Know More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title">Importance of Construction <br> Safety Signs</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/construction-safety-2.webp')}}" alt="Construction Safety Signs"
                        class="img-fluid sefimg-2">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Enhancing Workplace Safety</h2>
                <p class="brand-description">
                    Construction sites present a higher number of accidents and safety hazards. This is why people
                    must know all the safety regulations before working on the site. But how will they know that? Of
                    course, with construction site signs. These are considered visual cues and communication tools
                    to convey safety information. They help people navigate the place and work without worrying
                    about their safety, fostering an environment of awareness among workers and visitors. But what
                    information do they offer? Usually, potential hazards, guidelines on using safety gear, what to
                    do during emergencies, etc., are some of the information portrayed through these boards.</p>
                <p class="brand-description">
                    While creating these boards, we always try to ensure one thing, the information is clear for
                    everyone. We will also place these construction site signs at visibly unsafe/ dangerous
                    locations throughout the place. This will reduce workplace-related risks and confusion, ensuring
                    a safe and uniform passage. According to workplace regulations, these are necessary to show that
                    you are compliant with regulatory authorities. If you are a construction site manager, you can
                    show that you care about your people and visitors. Do you want to get one for your business? You
                    can work with a construction signage manufacturing company and place an order.</p>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Preventing Injuries & Accidents</h2>
                <p class="brand-description">
                    As we mentioned earlier, construction sites are unsafe/ hazardous, and people can suffer
                    injuries. But if people know how to remain vigilant, they can navigate the environment without
                    the likelihood. Construction safety signs can share knowledge, for instance, you can share
                    information about falling objects or electrical hazards. This will prompt additional vigilance
                    for both visitors and workers.</p>
                <h2 class="brand-title">Ensuring Compliance</h2>
                <p class="brand-description">
                    So far we have talked about how construction safety signs can be used as a preventative tool.
                    But what if something does happen? What will you do? You will know where to go, and how to
                    proceed to ensure a compliant and life-saving workplace environment.</p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/construction-safety-3.webp')}}" alt="Construction Safety Signs"
                        class="img-fluid sefimg-3">
                </div>
            </div>

        </div>
    </div>
</section>


<section class="why-bg-light-pink py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Where to Use Construction Site Signs</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/construction-safety-slide-1.webp')}}" class="why-card-img-top"
                        alt="Entry and Exit Points">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Entry and Exit Points</h3>
                        <p class="card-text">Construction safety signs should be placed strategically, especially at
                            the entry and exit points of these sites. You need to write the safety precautions,
                            protocols, and hazards on these boards. This will ensure that everyone entering the area
                            is aware of the safety concerns. As a manager, you can invest in boards indicating “No
                            Entry” or “Authorized Personnel Only” to control sensitive areas. You can also place
                            these boards on roads to mark areas for vehicles and pedestrian traffic. This will lower
                            the chances of accidents, and other issues.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/construction-safety-slide-2.webp')}}" class="why-card-img-top"
                        alt="Hazardous Zones">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Hazardous Zones</h3>
                        <p class="card-text">So why do you need construction signage in hazardous zones? You need to
                            tell people the areas to steer clear of. Otherwise, they might come across dangerous
                            materials, which might hamper their safety and health. These boards should be placed all
                            across the place to alert others of potential dangers.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/construction-safety-slide-3.webp')}}" class="why-card-img-top"
                        alt="Equipment and Machinery Areas">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Equipment and Machinery Areas</h3>
                        <p class="card-text">Areas where heavy machinery or equipment is in use require specific
                            signage to ensure safety. Signs should indicate operational protocols, such as "Keep
                            Clear" or "Do Not Operate Without Authorization," to prevent unauthorized access and
                            accidents. Additionally, instructional signs detailing safe operating procedures for
                            equipment should be placed near machinery to guide workers in proper usage, thereby
                            reducing the likelihood of injuries.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/construction-safety-slide-4.webp')}}" class="why-card-img-top"
                        alt="Emergency Exits">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Emergency Exits</h3>
                        <p class="card-text">Emergency exit signs are necessary to encourage people to evacuate
                            quickly, especially during a hazardous event. You can use them to lead people away from
                            fires and structural failures, without causing panic and crowds. These boards will tell
                            people about how to leave and where to assemble for safety.</p>
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
                                <img src="{{asset('frontend/Images/construction-safety-slide-1.webp')}}" class="why-card-img-top"
                                    alt="Entry and Exit Points">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Entry and Exit Points</h3>
                                    <p class="card-text">Construction safety signs should be placed strategically,
                                        especially at the entry and exit points of these sites. You need to write
                                        the safety precautions, protocols, and hazards on these boards. This will
                                        ensure that everyone entering the area is aware of the safety concerns. As a
                                        manager, you can invest in boards indicating “No Entry” or “Authorized
                                        Personnel Only” to control sensitive areas. You can also place these boards
                                        on roads to mark areas for vehicles and pedestrian traffic. This will lower
                                        the chances of accidents, and other issues.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/construction-safety-slide-2.webp')}}" class="why-card-img-top"
                                    alt="Hazardous Zones">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Hazardous Zones</h3>
                                    <p class="card-text">So why do you need construction signage in hazardous zones?
                                        You need to tell people the areas to steer clear of. Otherwise, they might
                                        come across dangerous materials, which might hamper their safety and health.
                                        These boards should be placed all across the place to alert others of
                                        potential dangers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/construction-safety-slide-3.webp')}}" class="why-card-img-top"
                                    alt="Equipment and Machinery Areas">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Equipment and Machinery Areas</h3>
                                    <p class="card-text">Areas where heavy machinery or equipment is in use require
                                        specific signage to ensure safety. Signs should indicate operational
                                        protocols, such as "Keep Clear" or "Do Not Operate Without Authorization,"
                                        to prevent unauthorized access and accidents. Additionally, instructional
                                        signs detailing safe operating procedures for equipment should be placed
                                        near machinery to guide workers in proper usage, thereby reducing the
                                        likelihood of injuries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/construction-safety-slide-2.webp')}}" class="why-card-img-top"
                                    alt="Hazardous Zones">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Hazardous Zones</h3>
                                    <p class="card-text">So why do you need construction signage in hazardous zones?
                                        You need to tell people the areas to steer clear of. Otherwise, they might
                                        come across dangerous materials, which might hamper their safety and health.
                                        These boards should be placed all across the place to alert others of
                                        potential dangers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/construction-safety-slide-3.webp')}}" class="why-card-img-top"
                                    alt="Equipment and Machinery Areas">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Equipment and Machinery Areas</h3>
                                    <p class="card-text">Areas where heavy machinery or equipment is in use require
                                        specific signage to ensure safety. Signs should indicate operational
                                        protocols, such as "Keep Clear" or "Do Not Operate Without Authorization,"
                                        to prevent unauthorized access and accidents. Additionally, instructional
                                        signs detailing safe operating procedures for equipment should be placed
                                        near machinery to guide workers in proper usage, thereby reducing the
                                        likelihood of injuries. <br> <br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/construction-safety-slide-4.webp')}}" class="why-card-img-top"
                                    alt="Emergency Exits">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Emergency Exits</h3>
                                    <p class="card-text">Emergency exit signs are necessary to encourage people to
                                        evacuate quickly, especially during a hazardous event. You can use them to
                                        lead people away from fires and structural failures, without causing panic
                                        and crowds. These boards will tell people about how to leave and where to
                                        assemble for safety.</p>
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
        <h2 class="hero-title">Features of Effective Safety Signs</h2>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/construction-safety-4.webp')}}" alt="Construction Safety Signs" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <h2 class="brand-title">Clarity and Visibility</h2>
                <p class="brand-description">
                    Clarity and visibility are one of the primary features of construction signage. Usually, these
                    signboards are designed in yellow, red, and green to indicate hazardous, moderately hazardous,
                    and safe zones/ materials. These boards should be appropriately sized to ensure they are visible
                    and legible even from a distance. What else should be included in these signs? We would
                    emphasize simple, easy-to-understand language and signs.</p>
                <p class="brand-description">
                    We ensure that the signs are written in a high-contrast background to make the message visible
                    in clear print. This ensures minimal confusion among people, workers, and visitors alike. People
                    don’t have to read long texts to understand issues and problems related to working on these
                    sites. Also, these should be put in positions near hazards and similar places. As a
                    manufacturer, we know how to create these signs on construction sites and populate them with
                    personalized messages.</p>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">
                <h2 class="brand-title">Standardized Symbols and Colors</h2>
                <p class="brand-description">
                    Utilizing standardized symbols and colors enhances the effectiveness of safety signs. For
                    example, red typically indicates danger or prohibition, yellow warns of caution, blue mandates
                    actions, and green signifies safety information. The shape can also convey important
                    information; for instance, triangular signs often indicate warnings, while circular signs may
                    denote mandatory actions.</p>
                <h2 class="brand-title">Weather-Resistant Materials</h2>
                <p class="brand-description">
                    Construction safety signs should be developed from materials that offer outstanding performance
                    against harsh weather, such as rain, wind, or snowstorms. Materials should also be chosen to
                    prevent fading from sunlight or other environmental factors.</p>
            </div>

            <div class="col-lg-6 mb-4 mb-lg-0  order-1 order-lg-2">
                <div class="showcase-image">
                    <img src="{{asset('frontend/Images/construction-safety-5.webp')}}" alt="Construction Safety Signs"
                        class="img-fluid sefimg-3">
                </div>
            </div>

        </div>
    </div>
</section>


<section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Customized Safety Signs for <br> Construction Sites</h2>
            <p class="card-text text-center">Nowadays, a wide range of materials are used to manufacture door signs.
                Among them, the most popular ones are:</p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-md-none">
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/construction-safety-6.webp')}}" class="why-card-img-top"
                        alt="Site-Specific Hazards">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Site-Specific Hazards</h3>
                        <p class="card-text">Customized safety signs allow construction companies to address unique
                            hazards present at their job sites. For instance, if a site has specific risks related
                            to heavy machinery or hazardous materials, signs can be designed to provide clear
                            warnings and instructions relevant to those dangers. Customized signs can be updated or
                            replaced easily to reflect any changes in safety protocols or new hazards that may arise
                            during the project lifecycle.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="why-card card">
                    <img src="{{asset('frontend/Images/construction-safety-7.webp')}}" class="why-card-img-top"
                        alt="Company Information">
                    <div class="card-body why-card-body px-0">
                        <h3 class="why-text-red mb-3">Company Information</h3>
                        <p class="card-text">Incorporating company logos and colors into safety signage not only
                            promotes brand visibility but also reinforces a professional image on-site. Custom signs
                            can feature contact information, which is crucial for ensuring that workers know whom to
                            reach out to in case of emergencies or safety concerns.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-md-4">
                    <div class="why-card card">
                        <img src="{{asset('frontend/Images/construction-safety-8.webp')}}" class="why-card-img-top"
                            alt="Multilingual Signs">
                        <div class="card-body why-card-body px-0">
                            <h3 class="why-text-red mb-3">Multilingual Signs</h3>
                            <p class="card-text">In many construction environments, teams comprise workers from
                                various linguistic backgrounds. If you place construction signage in one language,
                                others might not understand it, leading to confusion. If you don’t want that to
                                happen, you must place multilingual boards, to ensure you comply with occupational
                                health and safety regulations.</p>
                        </div>
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
                                <img src="{{asset('frontend/Images/construction-safety-6.webp')}}" class="why-card-img-top"
                                    alt="Site-Specific Hazards">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Site-Specific Hazards</h3>
                                    <p class="card-text">Customized safety signs allow construction companies to
                                        address unique hazards present at their job sites. For instance, if a site
                                        has specific risks related to heavy machinery or hazardous materials, signs
                                        can be designed to provide clear warnings and instructions relevant to those
                                        dangers. Customized signs can be updated or replaced easily to reflect any
                                        changes in safety protocols or new hazards that may arise during the project
                                        lifecycle.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/construction-safety-7.webp')}}" class="why-card-img-top"
                                    alt="Company Information">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Company Information</h3>
                                    <p class="card-text">Incorporating company logos and colors into safety signage
                                        not only promotes brand visibility but also reinforces a professional image
                                        on-site. Custom signs can feature contact information, which is crucial for
                                        ensuring that workers know whom to reach out to in case of emergencies or
                                        safety concerns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="why-card card">
                                <img src="{{asset('frontend/Images/construction-safety-8.webp')}}" class="why-card-img-top"
                                    alt="Multilingual Signs">
                                <div class="card-body why-card-body px-0">
                                    <h3 class="why-text-red mb-3">Multilingual Signs</h3>
                                    <p class="card-text">In many construction environments, teams comprise workers
                                        from various linguistic backgrounds. If you place construction signage in
                                        one language, others might not understand it, leading to confusion. If you
                                        don’t want that to happen, you must place multilingual boards, to ensure you
                                        comply with occupational health and safety regulations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container py-5">
    <div class="row g-4 d-flex flex-wrap justify-content-center">

        <div class="text-center ">
            <h2 class="display-4 mb-3 why-text-heading">Benefits of Using Construction Safety Signs</h2>
        </div>
        <div class="col-lg-12">
            <div class="row g-4">

                <div class="col-lg-5">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/construction-safety-9.webp')}}" alt="Reducing Liability Risks"
                            class="w-100 h-100">
                        <div class="overlay">
                            <h5 class="text-title">Reducing Liability Risks</h5>
                            <p class="text-content">Construction sites might face legal repercussions if they don’t
                                have these placed at your workplace. It shows that you are taking all the necessary
                                precautions to ensure employee safety and avoid legal issues. If you are not
                                compliant, you might suffer from legal issues. It is not a preferred outcome for any
                                construction team. If you want to create a secure and safe environment that promotes
                                healthy communication, you need to consider getting these industrial safety signs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/construction-safety-10.webp')}}" alt="Promoting a Culture of Safety"
                            class="w-100 h-100 cndimag">
                        <div class="overlay">
                            <h5 class="text-title">Promoting a Culture of Safety</h5>
                            <p class="text-content">Construction workers should be vigilant about their
                                surroundings. As a manager, you can foster a cultural environment through
                                construction signage. You can reinforce it regularly, and ensure your employees
                                enforce it, thus creating a responsible workforce.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="image-container position-relative">
                        <img src="{{asset('frontend/Images/construction-safety-11.webp')}}" alt="Increasing Efficiency and Productivity"
                            class="w-100 cndimag">
                        <div class="overlay">
                            <h5 class="text-title">Increasing Efficiency and Productivity</h5>
                            <p class="text-content">How to boost workplace productivity and efficiency? By reducing
                                workplace accidents or incidents. Okay, now the second question, how to do this? You
                                can strategically place these industrial safety signs to ensure smooth operations.
                            </p>
                        </div>
                    </div>
                </div>
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
                <img src="{{asset('frontend/Images/construction-safety-12.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/construction-safety-13.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/construction-safety-14.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%; ">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/construction-safety-15.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%; height: 195px;">
            </div>
        </div>

        <!-- Second Row -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/construction-safety-16.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/construction-safety-17.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/construction-safety-18.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img src="{{asset('frontend/Images/construction-safety-19.webp')}}" class="img-fluid" alt="Catalogue" style="width: 100%;">
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
                        <p class="card-text testimonial-card-text">We’ve been using these safety signs on our
                            construction sites, and they’ve been a game-changer. The materials are durable, even in
                            harsh weather, and the visibility ensures everyone stays informed and safe!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/rajesh-k.webp')}}" alt="Rajesh K" class="client-img">
                            <div>
                                <div class="client-name">Rajesh K</div>
                                <div class="client-role">Project Manager</div>
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
                        <p class="card-text testimonial-card-text">Since we installed these signs, our team has been
                            more mindful of safety protocols. They’re clear, and professional, and help us stay
                            compliant with all regulations</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/anish-s.webp')}}" alt="Ashish S" class="client-img">
                            <div>
                                <div class="client-name">Ashish S</div>
                                <div class="client-role">Project Manager</div>
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
                        <p class="card-text testimonial-card-text"> We love the customization options for our
                            site-specific hazards. The vibrant colors and bold lettering grab attention, making our
                            workplace significantly safer</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/Michael.webp')}}" alt="Michael" class="client-img">
                            <div>
                                <div class="client-name">Michael</div>
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
                        <p class="card-text testimonial-card-text">The pricing is competitive without compromising
                            on quality. These safety signs have lasted through months of heavy construction activity
                            and still look brand new!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/Amit.webp')}}" alt="Amit Pandit" class="client-img">
                            <div>
                                <div class="client-name">Amit Pandit</div>
                                <div class="client-role">Operations Head</div>
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
                        <p class="card-text testimonial-card-text">The safety signage has reduced the number of
                            accidents on our sites. It’s an essential part of our safety measures, and we wouldn’t
                            work without it!</p>
                        <hr class="yellow-line">
                        <div class="client-info">
                            <img src="{{asset('frontend/Images/Sushant.webp')}}" alt="Sushant M" class="client-img">
                            <div>
                                <div class="client-name">Sushant M</div>
                                <div class="client-role">Safety Officer</div>
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
                                    <p class="card-text testimonial-card-text">We’ve been using these safety signs
                                        on our construction sites, and they’ve been a game-changer. The materials
                                        are durable, even in harsh weather, and the visibility ensures everyone
                                        stays informed and safe!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/rajesh-k.webp')}}" alt="Rajesh K"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Rajesh K</div>
                                            <div class="client-role">Project Manager</div>
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
                                    <p class="card-text testimonial-card-text">Since we installed these signs, our
                                        team has been more mindful of safety protocols. They’re clear, and
                                        professional, and help us stay compliant with all regulations</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/anish-s.webp')}}" alt="Ashish S"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Ashish S</div>
                                            <div class="client-role">Project Manager</div>
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
                                    <p class="card-text testimonial-card-text">We love the customization options for
                                        our site-specific hazards. The vibrant colors and bold lettering grab
                                        attention, making our workplace significantly safer</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/Michael.webp')}}" alt="Michael"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Michael</div>
                                            <div class="client-role">Construction Manager</div>
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
                                    <p class="card-text testimonial-card-text">We love the customization options for
                                        our site-specific hazards. The vibrant colors and bold lettering grab
                                        attention, making our workplace significantly safer <br> <br></p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/Michael.webp')}}" alt="Michael"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Michael</div>
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
                                    <p class="card-text testimonial-card-text">The pricing is competitive without
                                        compromising on quality. These safety signs have lasted through months of
                                        heavy construction activity and still look brand new!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/Amit.webp')}}" alt="Amit Pandit"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Amit Pandit</div>
                                            <div class="client-role">Operations Head</div>
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
                                    <p class="card-text testimonial-card-text">The safety signage has reduced the
                                        number of accidents on our sites. It’s an essential part of our safety
                                        measures, and we wouldn’t work without it!</p>
                                    <hr class="yellow-line">
                                    <div class="client-info">
                                        <img src="{{asset('frontend/Images/Sushant.webp')}}" alt="Sushant M"
                                            class="client-img">
                                        <div>
                                            <div class="client-name">Sushant M</div>
                                            <div class="client-role">Safety Officer</div>
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
                Why are safety signs important on construction sites?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Safety signs are crucial on construction sites to communicate vital information about hazards,
                    guide safe navigation, and ensure compliance with regulations. Their presence minimizes
                    accidents, enhances worker awareness, and promotes a culture of safety among all personnel.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What are the different types of safety signs used in construction?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Construction sites use various safety signs, including mandatory signs (blue), prohibition signs
                    (red), warning signs (yellow), emergency information signs (green), and fire safety signs (red).
                    Each type communicates essential information to prevent accidents and ensure worker safety.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How can safety signs be customized for specific construction projects?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Construction site signs are made to address safety issues of different or specific sites.
                    However, they can also incorporate branding, corporate identity, and multilingual options. These
                    signs are meant to follow regulatory compliance and offer tailored instructional content.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                What regulations govern the use of safety signs on construction sites?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>Safety signs in construction are governed by workplace safety and health regulations, issued by
                    concerned authorities. We design, develop, and place this construction signage to comply with
                    safety and hazard regulations, and convey the same. Our team knows these regulations and how to
                    make the best of them.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                How often should construction safety signs be inspected or replaced?
                <i class="faq-icon fa-solid fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>We suggest our clients check construction safety signs once a month or two to see if they are
                    visible and relevant to people. Although our signs are high-quality, we encourage them to check
                    for significant changes, like weather exposure, erosion, and fading. Also, you can tell us if
                    you want any changes in the sign boards after the inspection.</p>
            </div>
        </div>

    </div>
</section>
@endsection