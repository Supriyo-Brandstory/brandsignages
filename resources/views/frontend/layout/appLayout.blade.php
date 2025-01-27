<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="icon" href="{{asset('frontend/Images/brandsignages-favicon.png')}}" type="image/png">

    {{-- <link rel="icon" href="{{asset('frontend/Images/brandsignages-favicon.png')}}" type="image/x-icon"> --}}
{!!$seo->script ?? '<title>#1 Sign Board Manufacturer in Bangalore | Brand Signages</title>'!!}
    

    <meta name="google-site-verification" content="k2zT6vzjGmv5Qj_C5YPVg4YbcQNoHooAF5smISxk2qA" />

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PMB37QHX');</script>
    <!-- End Google Tag Manager -->


    

 
        

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/services.css')}}">
    <!-- Lightbox2 CSS -->

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/lightgallery@2.3.0-beta.4/css/lightgallery.min.css"
   />
   


 
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMB37QHX" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="custom-header sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light px-4">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{asset('frontend/Images/Brand-Signages-logo.png')}}" class="company-logo" alt="BrandSignages" width="175">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="signagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Signages <i class="fas fa-chevron-down dropdown__arrow" style="font-size: 12px;margin-left: 4px; margin-bottom: 3px;"></i>
                        </a>
                        <div class="dropdown-menu w-100 p-4" aria-labelledby="signagesDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="dropdown-header">Signage by Type</h6>
                                        <a class="dropdown-item" href="{{route('arcylic_signages')}}">Acrylic Signages</a>
                                        <a class="dropdown-item" href="{{route('metal_signages')}}">Metal Signages</a>
                                        <a class="dropdown-item" href="{{route('digital_signages')}}">Digital Signages</a>
                                        <a class="dropdown-item" href="{{route('outdoor_signages')}}">Outdoor Signages</a>
                                        <a class="dropdown-item" href="{{route('indoor_signages')}}">Interior Signages</a>
                                        <a class="dropdown-item" href="{{route('neon_signages')}}">Neon Glowing Signage</a>
                                        <a class="dropdown-item" href="{{route('led_signages')}}">LED Sign</a>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="dropdown-header">Signages by Industry</h6>
                                        <a class="dropdown-item" href="{{route('hospital_signages')}}">Healthcare Sign</a>
                                        <a class="dropdown-item" href="{{route('restaurant_signages')}}">Hotels and Restaurants Sign</a>
                                        <a class="dropdown-item" href="{{route('construction_safety_signages')}}">Construction Safety Sign</a>
                                        <a class="dropdown-item" href="{{route('office_signages')}}">Office Sign</a>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="dropdown-header">Signage by Use Type</h6>
                                        <a class="dropdown-item" href="{{route('fire_safety_signages')}}">Fire Safety Sign</a>
                                        <a class="dropdown-item" href="{{route('door_signages')}}">Door Signs</a>
                                        <a class="dropdown-item" href="{{route('house_number_signages')}}">House Number Signs</a>
                                        <a class="dropdown-item" href="{{route('nameplate_signages')}}">Custom Nameplates</a>
                                        <a class="dropdown-item" href="{{route('restroom_signages')}}">Restroom Signs</a>
                                        <a class="dropdown-item" href="{{route('prohibitory_signages')}}">Prohibitory Signs</a>
                                        {{-- <a class="dropdown-item" href="#">Office Desk Sign</a>
                                        <a class="dropdown-item" href="#">Floor Sign</a> --}}
                                        <a class="dropdown-item" href="{{route('room_name_plates')}}">Room Number Signs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="regionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Signages by Region <i class="fas fa-chevron-down dropdown__arrow" style="font-size: 12px; margin-left: 4px; margin-bottom: 3px;"></i>
                        </a>
                        <div class="dropdown-menu w-100 p-4" aria-labelledby="regionDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="dropdown-header">Bangalore</h6>
                                        <a class="dropdown-item" href="{{route('signage_in_bangalore')}}">Signages in Bangalore</a>
                                        <a class="dropdown-item" href="{{route('acrylic_signage_manufacturer_bangalore')}}">Acrylic Signages in Bangalore</a>
                                        <a class="dropdown-item" href="{{route('steel_signage_manufacturer_bangalore')}}">Steel Signs in Bangalore</a>
                                        <a class="dropdown-item" href="{{route('digital_signage_company_bangalore')}}">Digital Signage in Bangalore</a>
                                        <a class="dropdown-item" href="{{route('neon_sign_board_bangalore')}}">Neon Sign Board in Bangalore</a>
                                        <a class="dropdown-item" href="{{route('led_sign_board_in_bangalore')}}">LED Sign Board in Bangalore</a>
                                        <a class="dropdown-item" href="{{route('hospital_signages_in_bangalore')}}">Hospital Signages in Bangalore</a>
                                        <a class="dropdown-item" href="{{route('safety_signages_in_bangalore')}}">Safety Signages in Bangalore</a>
                                        <a class="dropdown-item" href="{{route('name_plate_signages_in_bangalore')}}">Name Plate Signages in Bangalore</a>
                                        <a class="dropdown-item" href="{{route('restroom_signs_in_bangalore')}}">Restroom Signs in Bangalore</a>
                                        <a class="dropdown-item" href="{{route('office_desk_signs_in_bangalore')}}">Office Desk Signs in Bangalore</a>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="dropdown-header">Mumbai</h6>
                                        <a class="dropdown-item" href="#">Signages in Mumbai</a>
                                        <a class="dropdown-item" href="#">Acrylic Signages in Mumbai</a>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="dropdown-header">Chennai</h6>
                                        <a class="dropdown-item" href="#">Signages in Chennai</a>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="dropdown-header">Delhi</h6>
                                        <a class="dropdown-item" href="#">Signages in Delhi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blogs')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="tel:8006606080">
                            <button class="contact-btn">Contact Us</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')



    <section class="footer">
        <div class="container">

            <div class="row text-lg-start p-4 p-lg-2 ">

                <div class="col-12 col-lg-4 col-md-6 mb-3 mb-lg-0">
                    <h6 class="fw-bold">Address</h6>
                    <a href="https://g.co/kgs/6RzVfm1" target="_blank" style="text-decoration:unset"> 
                    <p class="text-black">Brand Signages, 5th Floor, BrandStory<br> Ventures, Surya Chambers, 34, Domlur I
                        <br>Stage, Amarjyoti Layout, Domlur,<br> Bengaluru, Karnataka 560071</p>
                    </a>
                </div>

                <div class="col-12 col-lg-4 col-md-6  mb-3 mb-lg-0">
                    <h6 class="fw-bold">Contact Number</h6>
                    <p class="text-black"><a href="tel:8006606080" class="text-decoration-none text-black">+91
                            8006606080</a></p>
                </div>

                <div class="col-12 col-lg-4 col-md-6  mb-3 mb-lg-0">
                    <h6 class="fw-bold">Email</h6>
                    <p class="text-black"><a href="mailto:info@brandsinage.com"
                            class="text-decoration-none text-black">sales@brandsignages.com</a></p>
                </div>
            </div>


            <div class="row align-items-center justify-content-between text-center text-sm">
                <div
                    class="col-12 col-md-auto d-flex justify-content-center justify-content-md-start align-items-center mb-3 mb-md-0 order-last order-md-first">
                    <span class="ms-2 copyright">© 2024 BrandSignages, LLC.</span>
                </div>

                <div class="col-12 col-md-auto">
                    <nav class="footer-nav">
                        <a href="{{route('termsAndConditions')}}">Terms</a>
                        <a href="{{route('privacyPolicy')}}">Privacy</a>
                        <a href="#">Support</a>
                        <a href="#">About</a>
                        <a href="#">Resources</a>
                        <a href="#">Contact</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('frontend/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.3.0-beta.4/lightgallery.min.js"></script>

    <script>
        // Initialize LightGallery
        lightGallery(document.getElementById("gallery-container"), {
            speed: 500,
            selector: "a",
            download: false
        });
    </script>
     <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>