@once
<style>
    .trust-features-section {
        background-color: #fff;
        padding: 100px 0;
    }
    .feature-icon-wrapper {
        width: 100px;
        height: 100px;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        border-radius: 24px;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .feature-item:hover .feature-icon-wrapper {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(228, 61, 18, 0.1);
        background: #fff8f6;
    }
    .feature-icon-wrapper svg {
        width: 50px;
        height: 50px;
        stroke-width: 1.5;
    }
    .feature-label {
        font-weight: 700;
        color: #1a202c;
        line-height: 1.4;
        margin-top: 10px;
    }
    .feature-desc {
        font-family: 'Roboto', sans-serif;
        font-size: 13px;
        color: #718096;
        line-height: 1.5;
        margin-top: 5px;
    }
    .startup-text {
        font-size: 14px;
        font-weight: 900;
        color: #E43D12;
    }

    .buyer-protection-card {
    background: #fdfdfd;
    border-radius: 30px;
    padding: 50px;
    border: 1px solid #edf2f7;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.04);
    height: 100%;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
    .buyer-protection-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: #e43d12;
    }
    .protection-icon svg {
        width: 65px;
        height: 65px;
        color: #3182ce;
    }
    .protection-title {
        color: #2c5282;
        font-size: 40px;
        letter-spacing: -1px;
    }
    .protection-list {
        list-style: none;
        padding: 0;
       margin-top: 20px;
    margin-left: 30px;
    }
    .protection-list li {
        font-size: 20px;
        color: #2d3748;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        font-weight: 500;
    }
    .protection-list li svg {
        color: #3182ce;
        margin-right: 20px;
        width: 28px;
        height: 28px;
        flex-shrink: 0;
        background: #ebf8ff;
        padding: 6px;
        border-radius: 8px;
    }

    @media (max-width: 991px) {
        .trust-features-section {
            padding: 60px 0;
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
        .protection-list{
margin-top: 20px;
    margin-left: 0px;
        }
    }
</style>
@endonce

<section class="trust-features-section">
    <div class="container">
        <div class="row align-items-stretch">
            <!-- Left Side: 8 Icons Grid -->
            <div class="col-lg-7">
                <div class="features-grid">
                    <div class="row g-4 g-lg-5">
                        <div class="col-6 col-md-3">
                            <div class="feature-item text-center">
                                <div class="feature-icon-wrapper">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#f6ad55" xmlns="http://www.w3.org/2000/svg"><path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m11.314 11.314l.707.707M12 8a4 4 0 100 8 4 4 0 000-8z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <p class="feature-label">UV Shield Tech</p>
                                <p class="feature-desc">Protects against fading & yellowing</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="feature-item text-center">
                                <div class="feature-icon-wrapper">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#4299e1" xmlns="http://www.w3.org/2000/svg"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <p class="feature-label">50k Hour Glow</p>
                                <p class="feature-desc">Long-lasting LED life span</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="feature-item text-center">
                                <div class="feature-icon-wrapper">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#e53e3e" xmlns="http://www.w3.org/2000/svg"><path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <p class="feature-label">Premium Build</p>
                                <p class="feature-desc">Industrial-grade materials</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="feature-item text-center">
                                <div class="feature-icon-wrapper">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#3182ce" xmlns="http://www.w3.org/2000/svg"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <p class="feature-label">Instant Setup</p>
                                <p class="feature-desc">Effortless plug & play design</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="feature-item text-center">
                                <div class="feature-icon-wrapper">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#ed8936" xmlns="http://www.w3.org/2000/svg"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <p class="feature-label">Vocal for Local</p>
                                <p class="feature-desc">Proudly made in Bangalore</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="feature-item text-center">
                                <div class="feature-icon-wrapper">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#48bb78" xmlns="http://www.w3.org/2000/svg"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <p class="feature-label">Transit Insured</p>
                                <p class="feature-desc">100% damage-free delivery</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="feature-item text-center">
                                <div class="feature-icon-wrapper">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#ed8936" xmlns="http://www.w3.org/2000/svg"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <p class="feature-label">Secure Pay</p>
                                <p class="feature-desc">Safe & encrypted transactions</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="feature-item text-center">
                                <div class="feature-icon-wrapper">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="#e53e3e" xmlns="http://www.w3.org/2000/svg"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <p class="feature-label">Express Dispatch</p>
                                <p class="feature-desc">Fastest turnaround in the city</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Buyer Protection Box -->
            <div class="col-lg-5 d-flex flex-column">
                <div class="buyer-protection-card flex-grow-1">
                    <div class="d-flex align-items-center mb-4">
                        <div class="protection-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="protection-title mb-0 ms-3">Buyer protection</h3>
                    </div>
                    <ul class="protection-list">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg> Full exchange within 30 days</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg> 24-Month product warranty</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg> 14-Day money back guarantee</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

