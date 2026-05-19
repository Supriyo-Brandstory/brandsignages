@extends('frontend.layout.appLayout')
@section('content')
    <!-- Meta and SEO scripts will be injected here automatically via appLayout -->

    <!-- Custom CSS for Testimonials Page -->
    <style>
        :root {
            --brand-red: #E43D12;
            --brand-dark-red: #c2330f;
            --brand-gold: #EFB11D;
            --text-dark: #212121;
            --text-muted: #666;
            --bg-light-peach: #fdf7e9;
            --bg-white: #ffffff;
        }

        .testimonials-page {
            font-family: 'Roboto', sans-serif;
            color: var(--text-dark);
            background-color: #fafafa;
        }

        /* Hero Banner Section */
        .testimonials-hero {
            background: linear-gradient(135deg, #111111 0%, #291510 100%);
            padding: 80px 0;
            text-align: center;
            color: #ffffff;
            position: relative;
            overflow: hidden;
        }

        .testimonials-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 70% 30%, rgba(228, 61, 18, 0.15) 0%, transparent 60%);
            pointer-events: none;
        }

        .testimonials-hero .hero-title {
            font-family: 'Lora', serif;
            font-size: 48px;
            font-weight: 700;
            letter-spacing: -0.5px;
            margin-bottom: 20px;
            background: linear-gradient(120deg, #ffffff, #ffd8cc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .testimonials-hero .hero-subtitle {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
            color: #d1d1d1;
            line-height: 1.6;
        }

        /* Ratings Summary Card Section */
        .ratings-summary-sec {
            background-color: var(--bg-light-peach);
            padding: 60px 0;
            border-bottom: 1px solid #f0e6cf;
        }

        .summary-card-container {
            background-color: var(--bg-white);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            padding: 40px;
        }

        .ratings-summary-sec .section-title {
            font-family: 'Lora', serif;
            font-size: 32px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .ratings-summary-sec .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--brand-gold);
            border-radius: 2px;
        }

        .rating-score-card {
            padding: 20px;
        }

        .score-display {
            line-height: 1.1;
            margin-bottom: 10px;
        }

        .score-num {
            font-family: 'Lora', serif;
            font-size: 64px;
            font-weight: 700;
            color: var(--text-dark);
        }

        .score-max {
            font-family: 'Lora', serif;
            font-size: 24px;
            font-weight: 500;
            color: #888;
        }

        .star-rating {
            font-size: 24px;
            color: var(--brand-gold);
        }

        .review-count {
            font-size: 14px;
            color: var(--text-muted);
            margin: 0;
        }

        .rating-bars-card {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .rating-bar-row {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .star-label {
            font-size: 16px;
            font-weight: 500;
            color: var(--text-dark);
            min-width: 25px;
        }

        .rating-bar-row .progress {
            flex-grow: 1;
            height: 10px;
            background-color: #EAEAEA;
            border-radius: 5px;
            overflow: hidden;
            border: none;
            box-shadow: none;
        }

        .rating-bar-row .progress-bar {
            background-color: var(--brand-red);
            border-radius: 5px;
        }

        .percentage-label {
            font-size: 14px;
            color: #555;
            min-width: 40px;
            text-align: right;
        }

        .vertical-divider {
            width: 1px;
            height: 140px;
            background-color: #E0E0E0;
            margin: 0 auto;
        }

        .satisfaction-card {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .satisfaction-header {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .satisfaction-icon {
            font-size: 20px;
            color: var(--brand-red);
        }

        .satisfaction-title {
            font-family: 'Lora', serif;
            font-size: 20px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .satisfaction-row {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .sat-label {
            font-size: 15px;
            font-weight: 500;
            color: var(--text-dark);
            min-width: 80px;
        }

        .satisfaction-row .progress {
            flex-grow: 1;
            height: 8px;
            background-color: #EAEAEA;
            border-radius: 4px;
            overflow: hidden;
            border: none;
            box-shadow: none;
        }

        .satisfaction-row .progress-bar {
            background-color: var(--brand-gold);
            border-radius: 4px;
        }

        .reviewer-avatar-img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 2px solid var(--brand-gold);
        }

        /* All Reviews List Section */
        .all-reviews-section {
            padding: 80px 0;
            background-color: #f7f9fc;
        }

        .all-reviews-section .section-title {
            font-family: 'Lora', serif;
            font-size: 36px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }

        .all-reviews-section .section-subtitle {
            font-size: 16px;
            color: var(--text-muted);
            text-align: center;
            max-width: 600px;
            margin: 0 auto 50px auto;
        }

        /* Filter Controls Bar */
        .filter-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 40px;
        }

        .filter-btn {
            background-color: #ffffff;
            color: #444;
            border: 1px solid #ddd;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover {
            border-color: var(--brand-red);
            color: var(--brand-red);
        }

        .filter-btn.active {
            background-color: var(--brand-red);
            color: #ffffff;
            border-color: var(--brand-red);
            box-shadow: 0 4px 15px rgba(228, 61, 18, 0.2);
        }

        /* Review Grid and Cards */
        .reviews-list-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            padding: 80px 0px;
        }

        .review-item-card {
            background-color: var(--bg-white);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            padding: 30px;
            border: 1px solid #eaeaea;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease;
        }

        .review-item-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            border-color: #e0e0e0;
        }

        .card-header-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .reviewer-identity {
            display: flex;
            align-items: center;
        }

        /* Dynamic Avatar Generator via CSS Gradients */
        .avatar-placeholder {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 16px;
            color: #ffffff;
            margin-right: 15px;
            text-transform: uppercase;
            background: linear-gradient(135deg, var(--brand-red), #ff6b4a);
        }

        .avatar-placeholder.grad-2 {
            background: linear-gradient(135deg, #EFB11D, #f7ce68);
        }

        .avatar-placeholder.grad-3 {
            background: linear-gradient(135deg, #1b3a4b, #2e5c75);
        }

        .avatar-placeholder.grad-4 {
            background: linear-gradient(135deg, #472d30, #723c43);
        }

        .avatar-placeholder.grad-5 {
            background: linear-gradient(135deg, #007791, #00b4d8);
        }

        .identity-details h6 {
            font-size: 16px;
            font-weight: 700;
            margin: 0 0 3px 0;
            color: var(--text-dark);
        }

        .identity-details p {
            font-size: 12px;
            color: var(--text-muted);
            margin: 0;
        }

        .stars-badge {
            background-color: rgba(239, 177, 29, 0.1);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 700;
            color: #d19400;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .stars-badge i {
            color: var(--brand-gold);
        }

        .review-body-text {
            font-size: 15px;
            line-height: 1.6;
            color: #4a4a4a;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .review-footer-metadata {
            border-top: 1px solid #f0f0f0;
            padding-top: 15px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .product-badge {
            background-color: #f1f3f5;
            color: #495057;
            font-size: 12px;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 6px;
            border: 1px solid #e9ecef;
        }

        .feature-badge-row {
            display: flex;
            gap: 6px;
        }

        .review-sub-badge {
            font-size: 11px;
            background-color: #e6fcf5;
            color: #0ca678;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .review-sub-badge i {
            font-size: 10px;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .vertical-divider {
                display: none;
            }

            .rating-bars-card {
                margin-bottom: 30px;
            }

            .summary-card-container {
                padding: 30px;
            }
        }

        @media (max-width: 767px) {
            .testimonials-hero .hero-title {
                font-size: 36px;
            }

            .testimonials-hero {
                padding: 60px 0;
            }

            .summary-card-container {
                padding: 20px;
            }

            .reviews-list-grid {
                grid-template-columns: 1fr;
            }

            .score-num {
                font-size: 50px;
            }
        }
    </style>

    <div class="testimonials-page">

        <!-- Hero Header -->
        <section class="testimonials-hero">
            <div class="container">
                <h1 class="hero-title">Client Stories & Feedback</h1>
                <p class="hero-subtitle">At Brand Signages, we take pride in delivering exceptional visual experiences. Read
                    the stories and testimonials of businesses across India who trust us to elevate their brands.</p>
            </div>
        </section>

        <!-- Ratings & Reviews Summary Dashboard -->
        <section class="ratings-summary-sec">
            <div class="container">
                <div class="summary-card-container">
                    <h2 class="section-title">Ratings & Reviews Summary</h2>

                    <div class="row align-items-center">
                        <!-- Left Column: Overall score -->
                        <div class="col-lg-3 col-md-4 text-center rating-score-card mb-4 mb-md-0">
                            <div class="score-display">
                                <span class="score-num">4.6</span><span class="score-max">/5</span>
                            </div>
                            <div class="star-rating mb-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <p class="review-count">Based on 25 Verified Reviews</p>
                        </div>

                        <!-- Middle Column: Star Breakdown -->
                        <div class="col-lg-5 col-md-8 rating-bars-card mb-4 mb-lg-0">
                            <!-- 5 Star -->
                            <div class="rating-bar-row">
                                <span class="star-label">5★</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 64%;" aria-valuenow="64"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">64%</span>
                            </div>
                            <!-- 4 Star -->
                            <div class="rating-bar-row">
                                <span class="star-label">4★</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">20%</span>
                            </div>
                            <!-- 3 Star -->
                            <div class="rating-bar-row">
                                <span class="star-label">3★</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 12%;" aria-valuenow="12"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">12%</span>
                            </div>
                            <!-- 2 Star -->
                            <div class="rating-bar-row">
                                <span class="star-label">2★</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">0%</span>
                            </div>
                            <!-- 1 Star -->
                            <div class="rating-bar-row">
                                <span class="star-label">1★</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 4%;" aria-valuenow="4"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">4%</span>
                            </div>
                        </div>

                        <!-- Vertical Divider (only visible on large screens) -->
                        <div class="col-lg-1 d-none d-lg-block text-center">
                            <div class="vertical-divider"></div>
                        </div>

                        <!-- Right Column: User Satisfaction -->
                        <div class="col-lg-3 col-md-12 satisfaction-card">
                            <div class="satisfaction-header mb-3">
                                <i class="fa-solid fa-thumbs-up satisfaction-icon"></i>
                                <h3 class="satisfaction-title mb-0">User Satisfaction</h3>
                            </div>
                            <!-- Response -->
                            <div class="satisfaction-row">
                                <span class="sat-label">Response</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">100%</span>
                            </div>
                            <!-- Quality -->
                            <div class="satisfaction-row">
                                <span class="sat-label">Quality</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">100%</span>
                            </div>
                            <!-- Delivery -->
                            <div class="satisfaction-row">
                                <span class="sat-label">Delivery</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">75%</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="container">
            <!-- Reviews Listing Grid -->
            <div class="reviews-list-grid" id="reviewsGrid">

                <!-- Featured Review 1 (Sneha Reddy) -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <img src="{{ asset('frontend/Images/sneha-reddy.webp') }}" alt="Sneha Reddy"
                                class="reviewer-avatar-img">
                            <div class="identity-details">
                                <h6>Sneha Reddy</h6>
                                <p>Bangalore, Karnataka • 12-Mar-26</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Our tech startup needed a signage solution that matched our innovative
                        spirit. The design team didn't just create a sign; they captured our company's entire essence. The
                        LED-powered brand display has become a conversation starter for clients and employees alike."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">LED Sign Board</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Response</span>
                        </div>
                    </div>
                </div>

                <!-- Featured Review 2 (Seema Nayak) -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <img src="{{ asset('frontend/Images/seema.webp') }}" alt="Seema Nayak"
                                class="reviewer-avatar-img">
                            <div class="identity-details">
                                <h6>Seema Nayak</h6>
                                <p>Mumbai, Maharashtra • 18-Feb-26</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"We needed stunning, durable, and regulation-compliant signage for our
                        hospital, and Brand Signages delivered exactly what we asked for. Their attention to detail is
                        excellent, which helped us enhance the patient experience."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Hospital Signage</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Compliance</span>
                        </div>
                    </div>
                </div>

                <!-- Featured Review 3 (Sandeep Gupta) -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <img src="{{ asset('frontend/Images/sandeep-gupta.webp') }}" alt="Sandeep Gupta"
                                class="reviewer-avatar-img">
                            <div class="identity-details">
                                <h6>Sandeep Gupta</h6>
                                <p>Chennai, Tamil Nadu • 05-Jan-26</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"From initial conceptualization to execution, they executed our café
                        signage project seamlessly. They perfectly captured the aesthetics of our brand with vibrant acrylic
                        signs and a neon board that has quickly become an Instagram favorite among local people."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Acrylic Sign & Neon Board</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Design</span>
                        </div>
                    </div>
                </div>

                <!-- Featured Review 4 (Vikram Sharma) -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <img src="{{ asset('frontend/Images/vikram-sharma.webp') }}" alt="Vikram Sharma"
                                class="reviewer-avatar-img">
                            <div class="identity-details">
                                <h6>Vikram Sharma</h6>
                                <p>Hyderabad, Telangana • 28-Nov-25</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"We needed elegant indoor and outdoor corporate signage that matched our
                        branding. Brand Signages impressed us with their quick turnaround, premium finish, and seamless
                        coordination throughout the signage project."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Corporate Signage</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Premium Finish</span>
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Response</span>
                        </div>
                    </div>
                </div>

                <!-- Review 1 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-1">KL</div>
                            <div class="identity-details">
                                <h6>Krishne Gowda Lavanya</h6>
                                <p>Bengaluru, Karnataka • 10-Mar-26</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Excellent quality of materials used! We ordered a custom banner stand for
                        our new products, and the structure is extremely sturdy, professional, and captures details
                        beautifully. Seamless transaction!"</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Banner Stand</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-2">VK</div>
                            <div class="identity-details">
                                <h6>Vijay Kumar</h6>
                                <p>Bengaluru, Karnataka • 02-Oct-25</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Great response rate and high-quality build. The whiteboard stand delivered
                        is highly durable, rotates flawlessly, and the writing surface is glossy and perfect. Highly
                        recommended."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Whiteboard Stand</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Response</span>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="review-item-card" data-rating="4">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-3">SU</div>
                            <div class="identity-details">
                                <h6>Sudheer</h6>
                                <p>Bengaluru, Karnataka • 13-Jun-25</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            4.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"The stainless steel nameplate looks wonderful on our corporate office main
                        door. It is highly resistant to wear and weather. Excellent response time and prompt support during
                        design customization."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Stainless Steel Nameplate</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Response</span>
                            <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-4">PR</div>
                            <div class="identity-details">
                                <h6>Prem Raj</h6>
                                <p>Bengaluru, Karnataka • 17-Jun-25</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"We ordered branded wooden key holders for our administrative office keys.
                        The finish, spacing, and craftsmanship are highly durable and elegantly matching our workspace
                        interiors."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Key Holders</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="review-item-card" data-rating="4">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-5">JP</div>
                            <div class="identity-details">
                                <h6>Jayaprakash</h6>
                                <p>Bengaluru, Karnataka • 16-Apr-25</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            4.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Prompt service and very professional execution. The signs were delivered
                        in excellent packing. The quality and colors are exactly as we had designed. Highly satisfied."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Signages</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-1">SC</div>
                            <div class="identity-details">
                                <h6>Sai Chandra</h6>
                                <p>Bengaluru, Karnataka • 03-Mar-23</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"The whiteboards ordered for our training classes are outstanding.
                        High-quality double-sided magnetic board that cleans completely without ghosting. Prompt delivery
                        and active customer response."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Whiteboard</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Response</span>
                            <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 7 -->
                <div class="review-item-card" data-rating="4">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-2">VM</div>
                            <div class="identity-details">
                                <h6>Vivek M</h6>
                                <p>Bengaluru, Karnataka • 04-Apr-22</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            4.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Premium quality steel letters with LED halo illumination. Perfect
                        execution and the installation team did an outstanding job aligning and concealing wires on our
                        glass panel."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Steel Letters</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Quality</span>
                            <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Delivery</span>
                        </div>
                    </div>
                </div>

                <!-- Review 8 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-3">NI</div>
                            <div class="identity-details">
                                <h6>Nikitha</h6>
                                <p>Bengaluru, Karnataka • 29-Jun-21</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"From design modifications to final installation, the entire team showed
                        amazing professionalism. The glow signs look extremely classy at night and have boosted walk-in
                        traffic dramatically."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Glow Signages</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Response</span>
                            <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 9 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-4">AP</div>
                            <div class="identity-details">
                                <h6>Arshad Pasha</h6>
                                <p>Bengaluru, Karnataka • 20-Jun-20</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Excellent quality sign boards! Our storefront signage is now two years old
                        and is still extremely bright with no fading or yellowing. Amazing build quality and premium
                        materials."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Sign Boards</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 10 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-5">UR</div>
                            <div class="identity-details">
                                <h6>Ugam Raj</h6>
                                <p>Bengaluru, Karnataka • 12-May-20</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"The requirement was executed in the shortest possible time. Whiteboard
                        quality is superb, marker leaves absolutely zero stain, and magnetic hooks work extremely well. A+
                        service."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Writing Board</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Fast Delivery</span>
                        </div>
                    </div>
                </div>

                <!-- Review 11 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-1">CI</div>
                            <div class="identity-details">
                                <h6>Chithrashekar</h6>
                                <p>Tumakuru, Karnataka • 11-Oct-19</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Ordered standard roll-up display stands for exhibitions. Highly durable
                        mechanisms and solid aluminum base. They responded to all design tweaks instantly and shipped
                        early."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Roll Up Display Stand</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Response</span>
                        </div>
                    </div>
                </div>

                <!-- Review 12 -->
                <div class="review-item-card" data-rating="1">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-2">RC</div>
                            <div class="identity-details">
                                <h6>Rinku Chaudhary</h6>
                                <p>Hoskote, Karnataka • 06-Oct-25</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            1.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"The display board delivery was delayed by a week due to shipping
                        constraints. However, once it arrived, the product quality was excellent, though communication
                        during transport could be improved."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Display Boards</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge" style="background-color: #ffeef0; color: #e8590c;"><i
                                    class="fa-solid fa-triangle-exclamation"></i> Delayed Delivery</span>
                        </div>
                    </div>
                </div>

                <!-- Review 13 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-3">SG</div>
                            <div class="identity-details">
                                <h6>Subhash Gowda</h6>
                                <p>Bengaluru, Karnataka • 02-Feb-25</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Stunning acrylic display board with flawless edge-polishing and shiny
                        metallic studs. It perfectly fits our corporate office hallway. Thank you for this top-quality
                        work!"</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Acrylic Display Board</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 14 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-4">VE</div>
                            <div class="identity-details">
                                <h6>Varalakshmi Enterprises</h6>
                                <p>Bengaluru, Karnataka • 23-Jan-25</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Excellent glossy finish and smooth texture. We installed these whiteboards
                        in all our executive cabins. Zero residue left when erasing. Robust packaging during shipment."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">White Marker Board</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 15 -->
                <div class="review-item-card" data-rating="4">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-5">PP</div>
                            <div class="identity-details">
                                <h6>Praveen Pandey</h6>
                                <p>Bengaluru, Karnataka • 04-Dec-24</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            4.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Great options in font sizes and designs for house name plates. The
                        brass-embossed design looks highly premium. Will order again for other properties."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">House Name Plates</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Design</span>
                        </div>
                    </div>
                </div>

                <!-- Review 16 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-1">SB</div>
                            <div class="identity-details">
                                <h6>Santosh Bandigani</h6>
                                <p>Mahalingpur, Karnataka • 20-Feb-24</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Very rigid and high-quality banner stand framework. The tension brackets
                        hold the banner perfectly straight without any wrinkles. Absolutely premium quality!"</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Banner Stand</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 17 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-2">SU</div>
                            <div class="identity-details">
                                <h6>Subash</h6>
                                <p>Bengaluru, Karnataka • 16-Feb-24</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Order for wooden and metal combination lecture stand was executed with
                        high-class carpentry and smooth polished surfaces. Perfect height and comfortable mic placement
                        layout."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Lecture Stand</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Finish</span>
                        </div>
                    </div>
                </div>

                <!-- Review 18 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-3">BA</div>
                            <div class="identity-details">
                                <h6>Balasubramanian</h6>
                                <p>Bengaluru, Karnataka • 10-Feb-24</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Super reflective high-intensity grade directional boards ordered for
                        parking and fire escape routing. Outstanding visible glow at night. The alignment was executed
                        seamlessly."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Direction Sign Board</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Visibility</span>
                        </div>
                    </div>
                </div>

                <!-- Review 19 -->
                <div class="review-item-card" data-rating="4">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-4">MM</div>
                            <div class="identity-details">
                                <h6>Manohar M</h6>
                                <p>Bengaluru, Karnataka • 11-Apr-22</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            4.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Top class 304 grade stainless steel house name plate. The laser engraving
                        is absolutely precise, and the letters look bold, crisp, and high-end. Delivered on time."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">SS House Name Plate</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Precision</span>
                        </div>
                    </div>
                </div>

                <!-- Review 20 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-5">RP</div>
                            <div class="identity-details">
                                <h6>Rahul Pandey</h6>
                                <p>Bengaluru, Karnataka • 08-Oct-20</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Premium double-sided writing board for conference presentations. Aluminum
                        frames are robust and have perfect joint finishes. Very happy with the purchase!"</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Whiteboard</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 21 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-1">HP</div>
                            <div class="identity-details">
                                <h6>Hariprasad</h6>
                                <p>Bengaluru, Karnataka • 16-Jul-20</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Custom acrylic name plates with clear background and metallic studs. The
                        gloss look gives a high-end feel in corridors. Communication was easy and supportive."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Acrylic Name Plate</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Style</span>
                        </div>
                    </div>
                </div>

                <!-- Review 22 -->
                <div class="review-item-card" data-rating="3">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-2">DS</div>
                            <div class="identity-details">
                                <h6>Digital Seva Services</h6>
                                <p>Bengaluru, Karnataka • 26-Dec-19</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            3.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"The display board works fine, but we had a small mismatch in the exact
                        neon color shade we wanted. They quickly resolved it, though the first transit took time."</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Neon Display</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Support</span>
                        </div>
                    </div>
                </div>

                <!-- Review 23 -->
                <div class="review-item-card" data-rating="5">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-3">PR</div>
                            <div class="identity-details">
                                <h6>Prateek</h6>
                                <p>Bengaluru, Karnataka • 07-Aug-18</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            5.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Top-grade whiteboard that has been under constant heavy use for over 3
                        years in our coding room. Surface remains pristine and easy to erase. Worth every single rupee!"</p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">White Marker Board</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Lifespan</span>
                        </div>
                    </div>
                </div>

                <!-- Review 24 -->
                <div class="review-item-card" data-rating="3">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-4">VP</div>
                            <div class="identity-details">
                                <h6>Vasuki Pv</h6>
                                <p>Sira, Karnataka • 09-Jun-18</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            3.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Ordered acrylic signs. The alignment is great but needed slightly more
                        instructions for manual wall drilling. Sturdy materials and perfect logo reproduction otherwise."
                    </p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Acrylic Sign</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-check"></i> Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Review 25 -->
                <div class="review-item-card" data-rating="3">
                    <div class="card-header-row">
                        <div class="reviewer-identity">
                            <div class="avatar-placeholder grad-5">SM</div>
                            <div class="identity-details">
                                <h6>Shaik Meeran</h6>
                                <p>Bengaluru, Karnataka • 25-Jul-17</p>
                            </div>
                        </div>
                        <div class="stars-badge">
                            3.0 <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="review-body-text">"Magnetic blackboard quality is standard. The frame was slightly scratched
                        in transit but customer care offered a direct replacement panel very quickly. Outstanding response."
                    </p>
                    <div class="review-footer-metadata">
                        <span class="product-badge">Magnetic Whiteboard</span>
                        <div class="feature-badge-row">
                            <span class="review-sub-badge"><i class="fa-solid fa-thumbs-up"></i> Support</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    </section>

    </div>

    <!-- Client-side Interactive Filter Script -->
    <script>
        function filterReviews(rating) {
            // Toggle Active Button Styles
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => {
                btn.classList.remove('active');
                if (btn.getAttribute('onclick').includes(rating)) {
                    btn.classList.add('active');
                }
            });

            // Filter Grid Cards
            const cards = document.querySelectorAll('.review-item-card');
            cards.forEach(card => {
                const cardRating = card.getAttribute('data-rating');
                if (rating === 'all') {
                    card.style.display = 'flex';
                    // Trigger smooth fade-in animation
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                } else if (cardRating === rating) {
                    card.style.display = 'flex';
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                } else {
                    card.style.display = 'none';
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95)';
                }
            });
        }
    </script>
@endsection
