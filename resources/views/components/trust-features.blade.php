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
            font-size: 16px;
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
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: 8 Icons Grid -->
            <div class="col-lg-9">
                <div class="row g-3">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                               <img src="{{ asset('frontend/Images/icon-1.svg') }}" alt=""/>

                            </div>
                            <h5 class="feature-label">UV Shield Coating</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#4299e1" xmlns="http://www.w3.org/2000/svg"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                            <h5 class="feature-label">50k Hour Glow</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#e53e3e" xmlns="http://www.w3.org/2000/svg"><path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                            <h5 class="feature-label">Heavy-Duty Build</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#3182ce" xmlns="http://www.w3.org/2000/svg"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                            <h5 class="feature-label">Instant Plug Setup</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#ed8936" xmlns="http://www.w3.org/2000/svg"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                            <h5 class="feature-label">Made in Bangalore</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#48bb78" xmlns="http://www.w3.org/2000/svg"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                            <h5 class="feature-label">Fully Transit Insured</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#ed8936" xmlns="http://www.w3.org/2000/svg"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                            <h5 class="feature-label">Secure Online Pay</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#e53e3e" xmlns="http://www.w3.org/2000/svg"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                            <h5 class="feature-label">Express Delivery</h5>
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
                        <h3 class="protection-title mb-0 ms-2" >Buyer protection</h3>
                    </div>
                    <ul class="protection-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg> Full exchange 30 days</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg> 24-Month warranty</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg> 14-Day money back</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


