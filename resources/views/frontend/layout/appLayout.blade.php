<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://brandsignages.com/favicon-32x32.ico" sizes="32x32" type="image/x-icon" />
    <link rel="icon" href="https://brandsignages.com/favicon.ico" sizes="48x48" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="https://brandsignages.com/favicon-180x180.ico">


    @php
        if (empty($blogSeoData) && !empty($blogseodata)) {
            $blogSeoData = $blogseodata;
        }
    @endphp

    @if (!empty($blogSeoData))
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
            $seoImage = !empty($blogSeoData['image'])
                ? asset('storage/' . $blogSeoData['image'])
                : asset('storage/blogs/default-image.webp');
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
        {!! $seo->script ?? '<title>#1 Sign Board Manufacturer in Bangalore | Brand Signages</title>' !!}
    @endif

    @if (!empty($blogSeoData['style']))
        {!! $blogSeoData['style'] !!}
    @endif

    <meta name="google-site-verification" content="k2zT6vzjGmv5Qj_C5YPVg4YbcQNoHooAF5smISxk2qA" />
    <meta name="p:domain_verify" content="cc033e9186a2749560bbbcb4d4d906ad" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PMB37QHX');
    </script>
    <!-- End Google Tag Manager -->






    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/services.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/megamenu.css') }}">
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
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('frontend/Images/Brand-Signages-logo.png') }}" class="company-logo"
                    alt="BrandSignages" width="175">
            </a>

            <button class="navbar-toggler" type="button" data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    @foreach ($headerMenus as $menu)
                        @php
                            $menuUrl = str_starts_with($menu->url, 'javascript') ? $menu->url : url($menu->url);
                        @endphp
                        @if ($menu->menu_type == 'standard')
                            @if ($menu->children->count() > 0)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ Request::is(trim($menu->url, '/')) ||$menu->children->contains(function ($child) {return Request::is(trim($child->url, '/'));})? 'active': '' }}"
                                        href="{{ $menuUrl }}" id="navbarDropdown-{{ $menu->id }}"
                                        role="button" aria-expanded="false">
                                        {{ $menu->title }} <i
                                            class="fas fa-chevron-down dropdown__arrow js-mobile-toggle"
                                            style="font-size: 12px;margin-left: 4px; margin-bottom: 3px; cursor: pointer;"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown-{{ $menu->id }}">
                                        @foreach ($menu->children as $child)
                                            <li><a class="dropdown-item {{ Request::is(trim($child->url, '/')) ? 'active' : '' }}"
                                                    href="{{ str_starts_with($child->url, 'javascript') ? $child->url : url($child->url) }}">{{ $child->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is(trim($menu->url, '/')) ? 'active' : '' }}"
                                        aria-current="page" href="{{ $menuUrl }}">{{ $menu->title }}</a>
                                </li>
                            @endif
                        @elseif($menu->menu_type == 'mega-parent')
                            <li class="nav-item dropdown dropdown-mega position-static">
                                <a class="nav-link dropdown-toggle" href="{{ $menuUrl }}"
                                    id="menu-target-{{ $menu->id }}" role="button">
                                    {{ $menu->title }} <i class="fas fa-chevron-down dropdown__arrow"
                                        style="font-size: 12px;margin-left: 4px; margin-bottom: 3px;"></i>
                                </a>
                                <div class="dropdown-menu mega-menu-container {{ $menu->title == 'Our Locations' ? 'location-mega-wrapper' : '' }} border-0 p-0"
                                    aria-labelledby="menu-target-{{ $menu->id }}">
                                    <div class="mega-split-container">
                                        <!-- Column 1: Categories (Left) -->
                                        <div class="mega-col mega-col-1">
                                            <div class="mega-col-header">
                                                <span
                                                    class="mega-col-label">{{ $menu->title == 'Signages' ? 'Explore Catalog' : 'Choose Your City' }}</span>
                                            </div>

                                            <div class="mega-category-items">
                                                @foreach ($menu->children as $category)
                                                    <a href="{{ str_starts_with($category->url, 'javascript') ? $category->url : url($category->url) }}"
                                                        class="mega-item-entry {{ $loop->first ? 'active' : '' }}"
                                                        data-target="menu-target-{{ $category->id }}">
                                                        @if ($category->tag)
                                                            <span class="entry-tag">{{ $category->tag }}</span>
                                                        @endif
                                                        <span class="entry-title">{{ $category->title }}</span>
                                                        @if ($category->description)
                                                            <span
                                                                class="entry-desc">{{ $category->description }}</span>
                                                        @endif
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>

                                        <!-- Column 2: Items (Right) -->
                                        <div class="mega-col mega-col-2">
                                            <div class="mega-col-header">
                                                <span
                                                    class="mega-col-label">{{ $menu->title == 'Signages' ? 'Specialties' : 'Localized Services' }}</span>
                                            </div>

                                            @foreach ($menu->children as $category)
                                                <div class="specialties-pane {{ $loop->first ? 'active' : '' }}"
                                                    id="menu-target-{{ $category->id }}">

                                                    <!-- Category title for mobile -->
                                                    <div class="mobile-mega-section-header d-lg-none">
                                                        <a href="{{ str_starts_with($category->url, 'javascript') ? 'javascript:void(0)' : url($category->url) }}"
                                                            class="mobile-cat-title">
                                                            {{ $category->title }}
                                                        </a>
                                                        <div class="mobile-cat-toggle">
                                                            <i class="fas fa-chevron-down"></i>
                                                        </div>
                                                    </div>

                                                    <div class="mobile-mega-collapsible">
                                                        @if ($menu->title == 'Our Locations')
                                                            <div class="specialty-grid-links"
                                                                style="display: grid; grid-template-columns: 1fr 1fr; gap: 4px;">
                                                                @foreach ($category->children as $locItem)
                                                                    <a href="{{ str_starts_with($locItem->url, 'javascript') ? $locItem->url : url($locItem->url) }}"
                                                                        class="specialty-link">{{ $locItem->title }}</a>
                                                                @endforeach
                                                            </div>
                                                        @else
                                                            <div class="specialty-list">
                                                                @foreach ($category->children as $item)
                                                                    @if ($item->children->count() > 0)
                                                                        <div class="specialty-item-wrapper has-flyout">
                                                                            <a href="{{ str_starts_with($item->url, 'javascript') ? $item->url : url($item->url) }}"
                                                                                class="specialty-link">
                                                                                <div class="specialty-icon-box"><i
                                                                                        class="{{ $item->icon }}"></i>
                                                                                </div>
                                                                                <div class="specialty-content">
                                                                                    <span
                                                                                        class="specialty-title">{{ $item->title }}</span>
                                                                                    <span
                                                                                        class="specialty-desc">{{ $item->description }}</span>
                                                                                </div>
                                                                                <i
                                                                                    class="fas fa-chevron-right flyout-indicator"></i>
                                                                            </a>
                                                                            <div class="mega-flyout-menu">
                                                                                <ul class="flyout-list">
                                                                                    @foreach ($item->children as $subItem)
                                                                                        <li><a
                                                                                                href="{{ str_starts_with($subItem->url, 'javascript') ? $subItem->url : url($subItem->url) }}">{{ $subItem->title }}</a>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    @else
                                                                        <a href="{{ str_starts_with($item->url, 'javascript') ? $item->url : url($item->url) }}"
                                                                            class="specialty-link">
                                                                            <div class="specialty-icon-box"><i
                                                                                    class="{{ $item->icon }}"></i>
                                                                            </div>
                                                                            <div class="specialty-content">
                                                                                <span
                                                                                    class="specialty-title">{{ $item->title }}</span>
                                                                                <span
                                                                                    class="specialty-desc">{{ $item->description }}</span>
                                                                            </div>
                                                                        </a>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div> <!-- End mobile-mega-collapsible -->
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                    <li class="nav-item ms-3">
                        <a href="{{ route('contact_us') }}">
                            <button class="contact-btn">Contact Us</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')



    {{-- <section class="footer pb-2">
        <div class="container">
            <div class="row align-items-start text-start justify-content-between">

                <!-- Logo -->
                <div class="col-12 col-md-4 mb-5 mb-md-0 d-flex justify-content-center justify-content-md-start">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('frontend/Images/Brand-Signages-logo.png') }}" alt="Brand Signages Logo"
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
                        <a href="https://www.youtube.com/@BrandSignages" target="_blank"><i
                                class="fab fa-youtube fa-2x" style="color: red;"></i></a>
                        <a href="https://www.facebook.com/BrandSignagesIndia/" target="_blank"><i
                                class="fab fa-facebook fa-2x" style="color: #1216e4ff;"></i></a>
                        <a href="https://in.pinterest.com/brandsignages/" target="_blank"><i
                                class="fab fa-pinterest fa-2x" style="color: #E43D12;"></i></a>
                    </div>
                </div>

                @foreach ($footerMenus as $footerMenu)
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="fw-bold">{{ $footerMenu->title }}</h5>
                        <ul class="list-unstyled">
                            @foreach ($footerMenu->children as $child)
                                <li>
                                    <a href="{{ str_starts_with($child->url, 'http') ? $child->url : url($child->url) }}"
                                        class="text-decoration-none">{{ $child->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center justify-content-md-between text-start text-md-start">
                <div class="col-12 text-center">
                    <span>© 2024 Brand Signages. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="footer pb-2">
        <div class="container">
            <div class="row align-items-start text-start justify-content-between">

                <!-- Logo -->
                <div class="col-12 col-md-4 mb-5 mb-md-0 d-flex justify-content-center justify-content-md-start">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('frontend/Images/Brand-Signages-logo.png') }}" alt="Brand Signages Logo"
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
                        <a href="https://www.youtube.com/@BrandSignages" target="_blank"><i
                                class="fab fa-youtube fa-2x" style="color: red;"></i></a>
                        <a href="https://www.facebook.com/BrandSignagesIndia/" target="_blank"><i
                                class="fab fa-facebook fa-2x" style="color: #1216e4ff;"></i></a>
                        <a href="https://in.pinterest.com/brandsignages/" target="_blank"><i
                                class="fab fa-pinterest fa-2x" style="color: #E43D12;"></i></a>
                    </div>
                </div>

                <!-- Service Locations -->
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="fw-bold">Service Locations</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('signage_in_bangalore') }}" class="text-decoration-none">Signages in
                                Bangalore</a></li>
                        <li><a href="{{ route('leading_signage_company_in_mumbai') }}"
                                class="text-decoration-none">Signages in Mumbai</a></li>
                        <li><a href="{{ route('signage_company_in_chennai') }}" class="text-decoration-none">Signages
                                in
                                Chennai</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="fw-bold">Products</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('led_acrylic_glow_sign') }}" class="text-decoration-none">LED Sign
                                Board</a></li>
                        <li><a href="{{ route('digital_signages') }}" class="text-decoration-none">Digital
                                Signage</a>
                        </li>
                        <li><a href="{{ route('arcylic_signages') }}" class="text-decoration-none">Acrylic
                                Signage</a>
                        <li><a href="{{ route('acrylic_letters') }}" class="text-decoration-none">Acrylic Letter</a>
                        </li>
                        </li>
                        <li><a href="{{ route('neon_signages') }}" class="text-decoration-none">Neon Sign</a></li>
                        <li><a href="{{ route('metal_signages') }}" class="text-decoration-none">Metal Signage</a>
                        </li>
                        <li><a href="{{ route('indoor_signages') }}" class="text-decoration-none">Indoor Signage</a>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="fw-bold">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-decoration-none">Home</a></li>
                        <li><a href="/about-us" class="text-decoration-none">About Us</a></li>
                        <li><a href="/contact-us" class="text-decoration-none">Contact Us</a></li>
                        <li><a href="/case-studies" class="text-decoration-none">Recent Projects</a></li>
                        <li><a href="href={{ asset('/frontend/Brand Signages Brochure-.pdf') }}"
                                class="text-decoration-none">Download Brochure</a></li>
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





    <a href="tel:+918006606080" class="call-btn"><i class="fas fa-phone"></i></a>






    <style>
        .footer a {
            color: #E43D12;
        }

        .call-btn {
            position: fixed;
            bottom: 80px;
            /* moved higher */
            right: 20px;
            width: 67px;
            height: 67px;
            background: #E43D12;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            text-decoration: none;
            z-index: 9999;
        }

        .call-btn:hover {
            background: #bf3310;
            color: #fff;
            text-decoration: none;
        }


        @media (max-width:768px) {
            .call-btn {
                bottom: 100px;
                right: 15px;
            }
        }
    </style>

    @if (
        (!isset($exception) || (method_exists($exception, 'getStatusCode') && $exception->getStatusCode() !== 404)) &&
            !Request::is('privacy-policy*') &&
            !Request::is('sitemap*') &&
            !Request::is('terms-and-conditions*') &&
            !Request::is('contact-us*') &&
            !Request::is('about-us*') &&
            !Request::is('blogs*'))
        <!-- Popup Modal -->
        <div class="modal fade" id="globalContactPopup" tabindex="-1" aria-labelledby="globalContactPopupLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="row g-0 ">
                            <div class="col-md-12 p-4">
                                <h3 class="mb-3" style="font-family: 'Lora', serif; color: #E43D12;">Request a Quote
                                </h3>
                                <p class="mb-4">Need More Info? Please Contact Us and We'll Do Our Best to Help.</p>

                                <form id="globalPopupForm" action="{{ route('contact.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="first_name"
                                            placeholder="Full Name*" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="tel" class="form-control" name="phone_number"
                                            placeholder="Phone Number*" required>
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="message" rows="3" placeholder="Your Requirements..." required></textarea>
                                    </div>

                                    <!-- CAPTCHA for Popup -->
                                    <div class="mb-3">
                                        <div class="d-block d-md-flex align-items-center mb-2 gap-2">
                                            <div class="d-flex gap-2 align-items-center mb-3 mb-md-0 w-100">
                                                <img src="{{ captcha_src('flat') }}" id="popup-captcha-image"
                                                    class="img-thumbnail" style="cursor: pointer; height: 60px;"
                                                    onclick="refreshPopupCaptcha()">
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    onclick="refreshPopupCaptcha()">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control mb-0" name="captcha"
                                                placeholder="Enter CAPTCHA" required>

                                        </div>
                                    </div>

                                    <div id="popup-msg" class="alert alert-success d-none">Thank you! Your message has
                                        been sent.</div>
                                    <div id="popup-err" class="alert alert-danger d-none">Something went wrong. Please
                                        try again.</div>
                                    <div class="text-center">
                                        <button type="submit" class="btn w-50 text-white"
                                            style="background-color: #E43D12;">Get in Touch</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function refreshPopupCaptcha() {
                var timestamp = Date.now();
                var img = document.getElementById('popup-captcha-image');
                if (img) {
                    img.src = '{{ captcha_src() }}?' + timestamp;
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                var globalPopupEl = document.getElementById('globalContactPopup');
                if (globalPopupEl) {
                    var myModal = new bootstrap.Modal(globalPopupEl, {
                        keyboard: false
                    });

                    setTimeout(function() {
                        myModal.show();
                    }, 99999);
                }

                // AJAX Submission for Global Popup
                $('#globalPopupForm').submit(function(e) {
                    e.preventDefault();
                    var form = $(this);
                    var submitBtn = form.find('button[type="submit"]');
                    var originalBtnText = submitBtn.text();

                    // Reset errors
                    form.find('.form-control').removeClass('is-invalid');
                    $('#popup-msg, #popup-err').addClass('d-none');

                    submitBtn.prop('disabled', true).text('Sending...');

                    $.ajax({
                        url: form.attr('action'),
                        type: 'POST',
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.success) {
                                $('#popup-msg').removeClass('d-none').text(response.message);
                                form[0].reset();
                                refreshPopupCaptcha();
                                // Optional: Hide form content after success
                                setTimeout(function() {
                                    if (myModal) myModal.hide();
                                }, 3000);
                            }
                        },
                        error: function(xhr) {
                            $('#popup-err').removeClass('d-none').text(
                                'Something went wrong. Please check your inputs.');

                            if (xhr.status === 422) {
                                var errors = xhr.responseJSON.errors;
                                $.each(errors, function(key, value) {
                                    var input = form.find('[name="' + key + '"]');
                                    input.addClass('is-invalid');
                                    // You could append error message divs here if needed
                                });
                            }
                            refreshPopupCaptcha(); // Refresh captcha on error
                        },
                        complete: function() {
                            submitBtn.prop('disabled', false).text(originalBtnText);
                        }
                    });
                });
            });
        </script>
    @endif

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
        $(document).ready(function() {
            var popupModalEl = document.getElementById('popupModal');
            var modal = null;

            if (popupModalEl) {
                modal = new bootstrap.Modal(popupModalEl);
            }

            $('#getStarted').click(function() {
                var isValid = true;

                // Validate all input fields
                $('#mainForm .form-control, #mainForm .form-select').each(function() {
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
            $('#mainForm .form-control, #mainForm .form-select').on('input change', function() {
                if ($(this).val()) {
                    $(this).removeClass('is-invalid');
                    $(this).next('.invalid-feedback').hide();
                }
            });

            // Show/Hide upload field based on type selection
            $('input[name="type"]').change(function() {
                if ($(this).val() === 'upload') {
                    $('#imageField').show();
                } else {
                    $('#imageField').hide();
                }
            });

            $('#popupForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: "{{ route('custom-inquiry.store') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.message) {
                            if (modal) modal.hide();
                            $('#successMessage').fadeIn().delay(3000).fadeOut();
                            $('#mainForm')[0].reset();
                            $('#popupForm')[0].reset();
                            $('.form-control, .form-select').removeClass(
                                'is-invalid'); // Reset validation styles
                        }
                    },
                    error: function(xhr) {
                        alert('Something went wrong! Please try again.');
                    }
                });
            });
        });
    </script>
</body>

</html>
