@once
<style>
    .trust-features-section {
        background-color: #fff;
        padding: 80px 0;
    }
    .feature-item {
        display: flex;
        align-items: center;
        gap: 5px;
        transition: transform 0.3s ease;
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
    }
    .feature-item:hover {
        transform: translateX(10px);
    }
    .feature-icon {
        flex-shrink: 0;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .feature-icon svg, .feature-icon img {
        width: 45px;
        height: 45px;
        stroke-width: 1.5;
    }
    .feature-label {
        line-height: 1.2;
        font-size: 18px;
        margin: 0;
    }

    .buyer-protection-card {
        background: #e43d12;
        border-radius: 30px;
        padding: 30px;
        border: 1px solid #edf2f7;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.04);
        height: 100%;
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
  
    .protection-icon svg {
        width: 40px;
        height: 40px;
        color: #fff;
    }
    .protection-title {
        color: #fff;
        font-size: 24px;
    }
    .protection-list {
        list-style: none;
        padding: 0;
        margin-top: 0px;
        margin-left: 10px;
            margin-bottom: 0
    }
    .protection-list li {
        font-size: 16px;
        display: flex;
        align-items: center;
        margin-top:10px ;
        color: #fff;
    }
    .protection-list li svg {
    color: #000;
    margin-right: 20px;
    width: 23px;
    height: 23px;
    flex-shrink: 0;
    background: #fff;
    padding: 6px;
    border-radius: 8px;
}

    @media (max-width: 991px) {
        .trust-features-section {
            padding: 60px 0;
        }
        .feature-item {
            gap: 15px;
        }
        .feature-icon svg {
            width: 35px;
            height: 35px;
        }
        .feature-label {
            font-size: 18px;
        }
        .buyer-protection-card {
            margin-top: 60px;
            padding: 40px 30px;
        }
        .protection-title {
            font-size: 32px;
        }
        .protection-list li {
            font-size: 18px;
        }
        .protection-list {
            margin-top: 20px;
            margin-left: 0px;
        }
    }
</style>
@endonce

<section class="trust-features-section">
    <h1 class="faq-title">Exceptional Features</h1>
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: 8 Icons Grid -->
            <div class="col-lg-9">
                <div class="row g-3">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                               <img src="{{ asset('frontend/Images/icon-1.svg') }}" alt="1000+ Unique Custom Design Options"/>

                            </div>
                            <h5 class="feature-label">1,000+ Unique Designs</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend/Images/icon-2.png') }}" alt="UV Protection Shield"/>
                            </div>
                            <h5 class="feature-label">UV Protection Shield</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend/Images/icon-3.png') }}" alt="Heavy-Duty Build Quality"/>
                            </div>
                            <h5 class="feature-label">Heavy-Duty Build Quality</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend/Images/icon-4.png') }}" alt="48-Hour Express Delivery"/>
                            </div>
                            <h5 class="feature-label">48-Hour Express Delivery</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend/Images/icon-5.png') }}" alt="5 Times Energy Efficient"/>
                        </div>
                            <h5 class="feature-label">5 Times Energy Efficient</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend/Images/icon-6.png') }}" alt="100% Transit Insurance"/>
                        </div>
                            <h5 class="feature-label">100% Transit Insurance</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend/Images/icon-7.png') }}" alt="Secure Payments Online"/>
                            </div>
                            <h5 class="feature-label">Secure Payments Online</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend/Images/icon-8.png') }}" alt="5X Brighter LED Glow"/>
                        </div>
                            <h5 class="feature-label">5X Brighter LED Glow</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Buyer Protection Box -->
            <div class="col-lg-3 d-flex flex-column">
                <div class="buyer-protection-card flex-grow-1">
                    <div class="d-flex align-items-center mb-2">
                        <div class="protection-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" ><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="protection-title mb-0 ms-2" ><b>Buyer Protection</b></h3>
                    </div>
                    <ul class="protection-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg> 14-Day Risk-Free Return</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg> 24-Month Warranty</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg> Strict Quality Checks</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


