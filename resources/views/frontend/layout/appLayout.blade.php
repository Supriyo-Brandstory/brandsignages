<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://brandsignages.com/favicon-32x32.ico" sizes="32x32" type="image/x-icon" />
    <link rel="icon" href="https://brandsignages.com/favicon.ico" sizes="48x48" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="https://brandsignages.com/favicon-180x180.ico">


    @if(!empty($blogSeoData))
        <title>{{ $blogSeoData['title'] ?? 'Brand Signages' }}</title>
        <meta name="description"
            content="{{ $blogSeoData['meta_description'] ?? 'Discover why acrylic signage is the perfect choice for indoor and outdoor branding. Explore its durability, customization options, and cost-effective benefits for businesses.' }}">
        <link rel="canonical" href="{{ $blogSeoData['canonical_url'] ?? url()->current() }}">
        <meta name="author" content="Manoj Kaliyannan" />
        <meta property="og:title" content="{{ $blogSeoData['title'] ?? 'Brand Signages' }}" />
        <meta property="og:description"
            content="{{ $blogSeoData['meta_description'] ?? 'Discover why acrylic signage is the perfect choice for indoor and outdoor branding. Explore its durability, customization options, and cost-effective benefits for businesses.' }}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{ $blogSeoData['canonical_url'] ?? url()->current() }}" />
        @php
            $seoImage = !empty($blogSeoData['image']) ? asset('storage/' . $blogSeoData['image']) : asset('storage/blogs/default-image.webp');
        @endphp
        <meta property="og:image" content="{{ $seoImage }}" />

        <script type="application/ld+json">
                                            {
                                              "@context": "https://schema.org",
                                              "@type": "BlogPosting",
                                              "headline": "{{ $blogSeoData['title'] ?? 'Brand Signages' }}",
                                              "description": "{{ $blogSeoData['meta_description'] ?? 'Discover why acrylic signage is the perfect choice for indoor and outdoor branding. Explore its durability, customization options, and cost-effective benefits for businesses.' }}",
                                              "image": "{{ $seoImage }}",
                                              "author": {
                                                "@type": "Person",
                                                "name": "Manoj Kaliyannan",
                                                "url": "https://in.linkedin.com/in/manojkaliyannan"
                                              },
                                              "publisher": {
                                                "@type": "Organization",
                                                "name": "Brand Signages",
                                                "logo": {
                                                  "@type": "ImageObject",
                                                  "url": "{{ asset('frontend/Images/Brand-Signages-logo.png') }}"
                                                }
                                              },
                                              "datePublished": "{{ $blogSeoData['published_at'] ?? '2025-01-28' }}",
                                              "dateModified": "{{ $blogSeoData['updated_at'] ?? '2025-01-28' }}",
                                              "mainEntityOfPage": {
                                                "@type": "WebPage",
                                                "@id": "{{ $blogSeoData['canonical_url'] ?? url()->current() }}"
                                              }
                                            }
                                        </script>
    @else
        {!!$seo->script ?? '<title>#1 Sign Board Manufacturer in Bangalore | Brand Signages</title>'!!}
    @endif

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






    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/services.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.3.0-beta.4/css/lightgallery.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />



</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMB37QHX" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="custom-header sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light px-4">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{asset('frontend/Images/Brand-Signages-logo.png')}}" class="company-logo" alt="BrandSignages"
                    width="175">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('about_us')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('services')}}">Services</a>
                    </li>

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="signagesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Signages <i class="fas fa-chevron-down dropdown__arrow"
                                style="font-size: 12px;margin-left: 4px; margin-bottom: 3px;"></i>
                        </a>
                        <div class="dropdown-menu w-100 p-4" aria-labelledby="signagesDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="dropdown-header">Signages by Type</h6>
                                        <a class="dropdown-item" href="{{route('arcylic_signages')}}">Acrylic
                                            Signage</a>
                                        <a class="dropdown-item" href="{{route('metal_signages')}}">Metal Signages</a>
                                        <a class="dropdown-item" href="{{route('digital_signages')}}">Digital
                                            Signage</a>
                                        <a class="dropdown-item" href="{{route('outdoor_signages')}}">Outdoor
                                            Signages</a>
                                        <a class="dropdown-item" href="{{route('indoor_signages')}}">Interior
                                            Signages</a>
                                        <a class="dropdown-item" href="{{route('neon_signages')}}">Neon Glow
                                            Sign</a>
                                        <a class="dropdown-item" href="{{route('led_signages')}}">LED Sign Board</a>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="dropdown-header">Signages by Industry</h6>
                                        <a class="dropdown-item" href="{{route('hospital_signages')}}">Healthcare
                                            Sign</a>
                                        <a class="dropdown-item" href="{{route('restaurant_signages')}}">Hotels and
                                            Restaurants Sign</a>
                                        <a class="dropdown-item"
                                            href="{{route('construction_safety_signages')}}">Construction Safety
                                            Sign</a>
                                        <a class="dropdown-item" href="{{route('office_signages')}}">Office Sign</a>
                                        <a class="dropdown-item" href="{{route('shop_name_board_bangalore')}}">Shop Name Boards</a>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="dropdown-header">Signage by Use Type</h6>
                                        <a class="dropdown-item" href="{{route('fire_safety_signages')}}">Fire Safety
                                            Sign</a>
                                        <a class="dropdown-item" href="{{route('door_signages')}}">Door Signs</a>
                                        <a class="dropdown-item" href="{{route('house_number_signages')}}">House Number
                                            Signs</a>
                                        <a class="dropdown-item" href="{{route('nameplate_signages')}}">Custom
                                            Nameplates</a>
                                        <a class="dropdown-item" href="{{route('restroom_signages')}}">Restroom
                                            Signs</a>
                                        <a class="dropdown-item" href="{{route('prohibitory_signages')}}">Prohibitory
                                            Signs</a>
                                        {{-- <a class="dropdown-item" href="#">Office Desk Sign</a>
                                        <a class="dropdown-item" href="#">Floor Sign</a> --}}
                                        <a class="dropdown-item" href="{{route('room_name_plates')}}">Room Number
                                            Sign</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="#" id="regionDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Our Locations<i class="fas fa-chevron-down dropdown__arrow"
                                style="font-size: 12px; margin-left: 4px; margin-bottom: 3px;"></i>
                        </a>
                        <div class="dropdown-menu" style="width:max-content;" aria-labelledby="regionDropdown">
                            <div class="container">
                             <a class="dropdown-item" href="{{route('index')}}">➤ Signages in
                                    Bangalore</a>
                                <a class="dropdown-item" href="{{route('leading_signage_company_in_mumbai')}}">➤ Signages
                                    in Mumbai</a>
                                <a class="dropdown-item" href="{{route('signage_company_in_chennai')}}">➤ Signages
                                    in Chennai</a>
                            </div>
                            {{-- <div class="container">
                               
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="dropdown-header">Bangalore</h6>
                                        <a class="dropdown-item" href="{{route('signage_in_bangalore')}}">Signages in
                                            Bangalore</a>
                                        <a class="dropdown-item"
                                            href="{{route('acrylic_signage_manufacturer_bangalore')}}">Acrylic Signages
                                            in Bangalore</a>
                                        <a class="dropdown-item"
                                            href="{{route('steel_signage_manufacturer_bangalore')}}">Steel Signs in
                                            Bangalore</a>
                                        <a class="dropdown-item"
                                            href="{{route('digital_signage_company_bangalore')}}">Digital Signage in
                                            Bangalore</a>
                                        <a class="dropdown-item" href="{{route('neon_sign_board_bangalore')}}">Neon Sign
                                            Board in Bangalore</a>
                                        <a class="dropdown-item" href="{{route('led_sign_board_in_bangalore')}}">LED
                                            Sign Board in Bangalore</a>
                                        <a class="dropdown-item"
                                            href="{{route('hospital_signages_in_bangalore')}}">Hospital Signages in
                                            Bangalore</a>
                                        <a class="dropdown-item" href="{{route('safety_signages_in_bangalore')}}">Safety
                                            Signages in Bangalore</a>
                                        <a class="dropdown-item"
                                            href="{{route('name_plate_signages_in_bangalore')}}">Name Plate Signages in
                                            Bangalore</a>
                                        <a class="dropdown-item"
                                            href="{{route('restroom_signs_in_bangalore')}}">Restroom Signs in
                                            Bangalore</a>
                                        <a class="dropdown-item"
                                            href="{{route('office_desk_signs_in_bangalore')}}">Office Desk Signs in
                                            Bangalore</a>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="dropdown-header">Mumbai</h6>
                                        <a class="dropdown-item"
                                            href="{{route('leading_signage_company_in_mumbai')}}">Signages in Mumbai</a>
                                        <a class="dropdown-item"
                                            href="{{route('premium_acrylic_sign_boards_in_mumbai')}}">Acrylic Signages
                                            in Mumbai</a>
                                        <a class="dropdown-item"
                                            href="{{route('digital_signages_manufacturer_in_mumbai')}}">Digital Signages
                                            in Mumbai</a>
                                        <a class="dropdown-item" href="{{route('led_display_board_in_mumbai')}}">LED
                                            Display Boards in Mumbai</a>
                                        <a class="dropdown-item"
                                            href="{{route('hospital_and_medical_signages_in_mumbai')}}">Hospital and
                                            Medical in Mumbai</a>
                                        <a class="dropdown-item"
                                            href="{{route('construction_fire_safety_signages_in_mumbai')}}">Fire Safety
                                            Signage in Mumbai</a>
                                        <a class="dropdown-item"
                                            href="{{route('name_plate_signs_manufacturer_mumbai')}}">Name Plate Signages
                                            in Mumbai</a>
                                        <a class="dropdown-item" href="{{route('office_signages_in_mumbai')}}">Office
                                            Signages in Mumbai</a>
                                        <a class="dropdown-item"
                                            href="{{route('stainless_steel_sign_board_manufacturer_mumbai')}}">Stainless
                                            Steel Sign Board in Mumbai</a>
                                        <a class="dropdown-item" href="{{route('neon_sign_board_in_mumbai')}}">Neon Sign
                                            Board in Mumbai</a>
                                        <a class="dropdown-item" href="{{route('restroom_signs_in_mumbai')}}">Restroom
                                            Signs in Mumbai</a>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6 class="dropdown-header">Chennai</h6>
                                        <a class="dropdown-item" href="{{route('signage_company_in_chennai')}}">Signages
                                            in Chennai</a>
                                        <a class="dropdown-item" href="{{route('acrylic_signages_in_chennai')}}">Acrylic
                                            Signages in Chennai</a>
                                        <a class="dropdown-item" href="{{route('metal_sign_in_chennai')}}">Metal
                                            Signages in Chennai</a>
                                        <a class="dropdown-item"
                                            href="{{route('leading_digital_signages_manufacturer_in_chennai')}}">
                                            Digital Signage in Chennai</a>
                                        <a class="dropdown-item"
                                            href="{{route('custom_neon_sign_board_in_chennai')}}">Custom Neon Signage in
                                            Chennai</a>
                                        <a class="dropdown-item" href="{{route('led_display_board_in_chennai')}}">LED
                                            Display Board in Chennai</a>
                                        <a class="dropdown-item"
                                            href="{{route('hospital_medical_signages_chennai')}}">Hospital & Medical
                                            Signages Chennai</a>
                                        <a class="dropdown-item"
                                            href="{{route('high_quality_safety_signages_in_chennai')}}">Safety Signages
                                            in Chennai</a>
                                        <a class="dropdown-item"
                                            href="{{route('high_quality_restroom_signs_in_chennai')}}"> Restroom Signs
                                            in Chennai</a>


                                    </div>


                                </div>
                            </div> --}}
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blogs')}}">Blog</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li> --}}
                    <li class="nav-item ms-3">
                        <a href="{{route('contact_us')}}">
                            <button class="contact-btn">Contact Us</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')



    <section class="footer pb-2">
        <div class="container">
            <div class="row align-items-start text-start justify-content-between">

                <!-- Logo -->
                <div class="col-12 col-md-4 mb-5 mb-md-0 d-flex justify-content-center justify-content-md-start">
                    <a href="{{route('index')}}">
                        <img src="{{asset('frontend/Images/Brand-Signages-logo.png')}}" alt="Brand Signages Logo"
                            class="img-fluid" style="max-width: 200px;">
                    </a>
                </div>

                <!-- Contact Info + Address -->
                <div
                    class="col-12 col-md-8 d-flex flex-column flex-md-row gap-4 align-items-start justify-content-md-center text-start">

                    <!-- Contact Info -->
                    <div>
                        <a href="tel:+918006606080" class="mb-1" style="color: #E43D12; text-decoration: none;">
                            <i class="fas fa-mobile-screen-button icon" style="color: #E43D12; font-size: 20px;"></i>
                            <strong>Call :</strong> +918006606080
                        </a><br>
                        <a href="mailto:sales@brandsignages.com" class="mb-0"
                            style="color: #E43D12; text-decoration: none;">
                            <i class="fas fa-envelope icon" style="color: #E43D12; font-size: 20px;"></i>
                            <strong>Email :</strong> sales@brandsignages.com
                        </a>
                    </div>

                    <!-- Address -->
                    <div class="d-flex gap-2 align-items-start text-start">
                        <i class="fas fa-map-marker-alt icon fa-2x mt-1" style="color: #E43D12; font-size: 20px;"></i>
                        <a href="https://www.google.com/maps/dir//Brand+Signages-+Sign+Board+Manufacturers+in+Bangalore+%7C+LED+Sign+Board+Makers,+5th+Floor,+Brand+Signages,+BrandStory+Ventures,+Surya+Chambers,+34,+K.R.Colony,+Domlur+I+Stage,+Amarjyoti+Layout,+Domlur,+Bengaluru,+Karnataka+560071"
                            class="mb-0" style="color: #E43D12; text-decoration: none;">
                            Brand Signages, 5th Floor, BrandStory Ventures, Surya Chambers,<br>
                            34, Domlur I Stage, Amarjyoti Layout, Domlur, Bengaluru, <br>Karnataka 560071
                        </a>
                    </div>
                </div>
            </div>

            <hr style="color: #E43D12;" class="my-4">

            <div class="row mb-4 text-start">
                <!-- About Section -->
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="fw-bold">Brand Signages</h5>
                    <p>
                        Brand Signages is a premier signage manufacturing company serving
                        clients across Bangalore and India for 10+ years. We have a vast
                        portfolio and client base across different industries.
                    </p>
                    <div class='d-flex justify-content-left' style="gap: 10px;">
                        <a href="https://www.youtube.com/@BrandSignages" target="_blank"><i class="fab fa-youtube fa-2x"
                                style="color: red;"></i></a>
                        <a href="https://www.facebook.com/BrandSignagesIndia/" target="_blank"><i
                                class="fab fa-facebook fa-2x" style="color: #1877F2;"></i></a>
                    </div>
                </div>

                <!-- Service Locations -->
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="fw-bold">Service Locations</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{route('signage_in_bangalore')}}" class="text-decoration-none">Signages in
                                Bangalore</a></li>
                        <li><a href="{{route('leading_signage_company_in_mumbai')}}"
                                class="text-decoration-none">Signages in Mumbai</a></li>
                        <li><a href="{{route('signage_company_in_chennai')}}" class="text-decoration-none">Signages in
                                Chennai</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="fw-bold">Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{route('led_signages')}}" class="text-decoration-none">LED Sign Board</a></li>
                        <li><a href="{{route('digital_signages')}}" class="text-decoration-none">Digital Signage</a>
                        </li>
                        <li><a href="{{route('arcylic_signages')}}" class="text-decoration-none">Acrylic Signage</a>
                        </li>
                        <li><a href="{{route('neon_signages')}}" class="text-decoration-none">Neon Sign</a></li>
                        <li><a href="{{route('metal_signages')}}" class="text-decoration-none">Metal Signage</a></li>
                        <li><a href="{{route('indoor_signages')}}" class="text-decoration-none">Indoor Signage</a></li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="fw-bold">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-decoration-none">Home</a></li>
                        <li><a href="/about-us" class="text-decoration-none">About Us</a></li>
                        <li><a href="/contact-us" class="text-decoration-none">Contact Us</a></li>
                        <li><a href="/terms-and-conditions" class="text-decoration-none">Terms & Conditions</a></li>
                        <li><a href="/privacy-policy" class="text-decoration-none">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-center justify-content-md-between text-start text-md-start">
                <div class="col-12 text-center">
                    <span>© 2024 Brand Signages. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </section>


    <style>
        .footer a {
            color: #E43D12;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.3.0-beta.4/lightgallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('frontend/script.js') }}" defer></script>


    <script>
        lightGallery(document.getElementById("gallery-container"), {
            speed: 500,
            selector: "a",
            download: false
        });
    </script>
    <script>
        $(document).ready(function () {
            var popupModalEl = document.getElementById('popupModal');
            var modal = null;

            if (popupModalEl) {
                modal = new bootstrap.Modal(popupModalEl);
            }

            $('#getStarted').click(function () {
                var isValid = true;

                // Validate all input fields
                $('#mainForm .form-control, #mainForm .form-select').each(function () {
                    if (!$(this).val()) {
                        $(this).addClass('is-invalid');
                        $(this).next('.invalid-feedback').show();
                        isValid = false;
                    } else {
                        $(this).removeClass('is-invalid');
                        $(this).next('.invalid-feedback').hide();
                    }
                });

                // If validation fails, don't show the modal
                if (!isValid || !modal) {
                    return;
                }

                // Set values in the modal
                $('#modalTitle').val($('#title').val());
                $('#modalHeight').val($('#height').val());
                $('#modalWidth').val($('#width').val());

                // Show the modal
                modal.show();
            });

            // Remove error highlight when input is changed
            $('#mainForm .form-control, #mainForm .form-select').on('input change', function () {
                if ($(this).val()) {
                    $(this).removeClass('is-invalid');
                    $(this).next('.invalid-feedback').hide();
                }
            });

            // Show/Hide upload field based on type selection
            $('input[name="type"]').change(function () {
                if ($(this).val() === 'upload') {
                    $('#imageField').show();
                } else {
                    $('#imageField').hide();
                }
            });

            $('#popupForm').submit(function (e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: "{{ route('custom-inquiry.store') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.message) {
                            if (modal) modal.hide();
                            $('#successMessage').fadeIn().delay(3000).fadeOut();
                            $('#mainForm')[0].reset();
                            $('#popupForm')[0].reset();
                            $('.form-control, .form-select').removeClass('is-invalid'); // Reset validation styles
                        }
                    },
                    error: function (xhr) {
                        alert('Something went wrong! Please try again.');
                    }
                });
            });
        });
    </script>
</body>

</html>