@extends('frontend.layout.appLayout')
@section('content')
    <style>
        .hero-bannerr {
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            color: white;
            position: relative;
        }

        .py-80 {
            padding: 80px 0;
        }

        .py-120 {
            padding: 120px 0;
        }

        @media (max-width: 768px) {
            .py-80 {
                padding: 40px 0;
            }

            .py-120 {
                padding: 60px 0;
            }

            .hero-bannerr_title {
                font-size: 2.2rem !important;
            }
        }

        .hero-bannerr::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-bannerr .container {
            position: relative;
            z-index: 2;
        }

        .hero-bannerr_title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .contact-btn {
            background-color: #ff5e14;
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 5px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.3s;
        }

        .contact-btn:hover {
            background-color: #e44d00;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 94, 20, 0.4);
        }

        .new_custom-stats-section {
            background: #222;
            padding: 50px 0;
            margin-top: -50px;
            position: relative;
            z-index: 10;
        }

        .new_custom-stats-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #ff5e14;
        }

        .new_custom-stats-label {
            font-size: 1rem;
            color: #ccc;
            margin-bottom: 0;
        }

        .image-container {
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            height: 300px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
            color: white;
            opacity: 0;
            transition: 0.3s;
        }

        .image-container:hover .overlay {
            opacity: 1;
        }

        .text-title {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .text-content {
            font-size: 0.85rem;
            line-height: 1.4;
            margin-bottom: 0;
        }

        .benefit-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: 0.3s;
            border: 1px solid #f0f0f0;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
            border-color: #ff5e14;
        }

        .benefit-card h4 {
            font-weight: 700;
            margin-bottom: 15px;
            color: #111;
        }

        .benefit-card p {
            color: #666;
            margin-bottom: 0;
        }

        .industry-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            height: 100%;
            border-bottom: 3px solid transparent;
            transition: 0.3s;
        }

        .industry-card:hover {
            border-bottom-color: #ff5e14;
            transform: scale(1.03);
        }

        .faq-section {
            background: #fdfdfd;
            padding: 80px 0;
        }

        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .faq-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 50px;
        }

        .faq-item {
            background: white;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            overflow: hidden;
        }

        .faq-question {
            width: 100%;
            padding: 20px 25px;
            text-align: left;
            background: none;
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
        }

        .faq-answer {
            padding: 0 25px 20px;
            color: #555;
            display: none;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        .why-text-heading {
            font-weight: 800;
            color: #111;
        }

        .bg-primary-custom {
            background: linear-gradient(135deg, #ff5e14, #ff8c00);
            padding: 80px 0;
        }

        .other-cities-section {
            background: #fff;
        }

        .other-cities-img {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            height: 200px;
        }

        .other-cities-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .other-cities-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .other-cities-title {
            position: absolute;
            bottom: 15px;
            left: 20px;
            color: white;
            font-weight: 700;
            margin: 0;
            font-size: 1.2rem;
        }

        .text-orange {
            color: #ff5e14;
        }
    </style>

    <section class="hero-bannerr"
        style="background-image: url('{{ asset('frontend/Images/digital-signages-banner.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="hero-bannerr_title">Interactive Touch Screen <br>Kiosks for Seamless Service</h1>
                    <p class="fs-5 mb-4">Empower your customers with self-service excellence. Our premium kiosks combine <br>
                        intuitive touch technology with industrial-grade durability for 24/7 engagement.</p>
                    <a href="https://brandsignages.com/contact-us">
                        <button class="contact-btn">Explore Kiosk Models</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="new_custom-stats-section">
        <div class="container">
            <div class="row text-center text-white">
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <h2 class="new_custom-stats-number">10+</h2>
                    <p class="new_custom-stats-label">Kiosk Variants</p>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0 position-relative">
                    <div class="new_custom-divider-left d-none d-md-block"></div>
                    <h2 class="new_custom-stats-number">8,000+</h2>
                    <p class="new_custom-stats-label">Kiosks Installed</p>
                    <div class="new_custom-divider-right d-none d-md-block"></div>
                </div>
                <div class="col-12 col-md-4">
                    <h2 class="new_custom-stats-number">10ms</h2>
                    <p class="new_custom-stats-label">Ultra-Low Touch Latency</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-80">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 why-text-heading">Types of Interactive Kiosks</h2>
                <p class="lead text-muted max-w-800 mx-auto">
                    From wayfinding to self-checkout, our kiosks are engineered to enhance operational efficiency.
                </p>
            </div>

            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/home/corporate-digital-signage.webp') }}"
                                alt="Self-Service Information Kiosk" class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Self-Service Info Kiosks</h5>
                                <p class="text-content">Ideally suited for libraries, museums, and corporate lobbies to
                                    provide visitors with instant access to information, registration, or check-in flows.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/home/digital-signage-hospital.webp') }}"
                                alt="Hospital Wayfinding Kiosk" class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Wayfinding & Directory Kiosks</h5>
                                <p class="text-content">Equipped with 3D map software to guide patients and visitors through
                                    complex facilities like hospitals, malls, and tech parks.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/Images/home/digital-display-for-bank.webp') }}"
                                alt="Transactional Banking Kiosk" class="w-100 h-100">
                            <div class="overlay">
                                <h5 class="text-title">Banking & Payment Kiosks</h5>
                                <p class="text-content">Secure, rugged kiosks designed for cash/card transactions, statement
                                    printing, and account inquiries in financial institutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-80 bg-light">
        <div class="container">
            <h2 class="text-center display-5 fw-bold mb-5">Why Choose Our Kiosk Solutions?</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="benefit-card">
                        <h4>Capacitive Touch</h4>
                        <p>10-point PCAP touch technology provides a smartphone-like smooth experience with high precision.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="benefit-card">
                        <h4>Rugged Build</h4>
                        <p>Heavy-duty cold-rolled steel enclosures with powder coating for scratch and impact resistance.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="benefit-card">
                        <h4>Remote Monitoring</h4>
                        <p>Track kiosk health, reboot systems, and update applications remotely from a central cloud server.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="benefit-card">
                        <h4>Component Ready</h4>
                        <p>Integrated slots for scanners, thermal printers, cameras, and card readers as per requirement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Served -->
    <section class="py-80">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Built for Every Vertical</h2>
                <p class="text-muted">Our touch kiosks are optimized for specific industry needs.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <h5 class="fw-bold text-orange">Retail & QSR</h5>
                        <p>Self-ordering systems and loyalty registration to improve customer flow and upsell.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <h5 class="fw-bold text-orange">Healthcare</h5>
                        <p>Self-check-in to reduce hospital desk congestion and automate patient registration.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <h5 class="fw-bold text-orange">Tech Parks & Corporate</h5>
                        <p>Interactive wayfinding and visitor management systems for large corporate campuses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary-custom text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-4">Transform Your Customer Journey</h2>
            <p class="lead mb-5 max-w-800 mx-auto">Looking for a custom kiosk design? Talk to our product engineers today.
            </p>
            <a href="https://brandsignages.com/contact-us">
                <button class="btn btn-light btn-lg px-5 py-3 fw-bold text-orange">Get Custom Quote</button>
            </a>
        </div>
    </section>

    <section class="other-cities-section py-80">
        <div class="container">
            <h2 class="mb-5 why-text-heading">Serving Digital Signs Across India</h2>
            <div class="other-cities-wrapper d-flex gap-4 justify-content-between flex-wrap">
                <div class="other-cities-card flex-fill">
                    <a href="https://brandsignages.com/stainless-steel-sign-board-manufacturer-mumbai"
                        class="text-decoration-none">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Commercial Displays Mumbai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Mumbai</p>
                        </div>
                    </a>
                </div>
                <div class="other-cities-card flex-fill">
                    <a href="https://brandsignages.com/metal-and-stainless-steel-sign-boards-in-chennai"
                        class="text-decoration-none">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Commercial Displays Chennai">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Chennai</p>
                        </div>
                    </a>
                </div>
                <div class="other-cities-card flex-fill">
                    <a href="https://brandsignages.com/steel-signage-manufacturer-bangalore" class="text-decoration-none">
                        <div class="other-cities-img">
                            <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}"
                                alt="Commercial Displays Bangalore">
                            <div class="other-cities-overlay"></div>
                            <p class="other-cities-title">Bangalore</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="faq-container">
            <h2 class="faq-title">Kiosk FAQs</h2>
            <div class="faq-item">
                <button class="faq-question">What screen sizes are available for kiosks? <i
                        class="faq-icon fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>We offer kiosks in standard sizes of 19”, 21.5”, 32”, 43”, and 55”. Custom sizes can be manufactured
                        for specific projects.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Can the kiosk run our existing web application? <i
                        class="faq-icon fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Yes, our kiosks support Windows, Android, and Linux. Most web applications can be run in "Kiosk Mode"
                        to restrict user access to other system functions.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const faqItem = button.parentElement;
                faqItem.classList.toggle('active');
            });
        });
    </script>
@endsection
