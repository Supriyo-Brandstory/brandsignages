@extends('frontend.layout.appLayout')
@section('content')

<style>
    .faq-header {
        background: linear-gradient(135deg, #E43D12 0%, #9a290d 100%);
        padding: 80px 0;
        color: #fff;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .faq-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
        pointer-events: none;
    }
    .faq-header h1 {
        font-size: 48px;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 20px;
    }
    .faq-section {
        padding: 80px 0;
        background-color: #f9f9f9;
    }
    .accordion-item {
        border: none;
        margin-bottom: 15px;
        border-radius: 15px !important;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .accordion-button {
        padding: 20px 25px;
        font-size: 20px;
        color: #1a202c;
        background-color: #fff;
    }
    .accordion-button:not(.collapsed) {
        background-color: #E43D12;
        color: #fff;
        box-shadow: none;
    }
    .accordion-button:after {
        background-size: 20px;
    }
    .accordion-button:not(.collapsed):after {
        filter: brightness(0) invert(1);
    }
    .accordion-body {
        padding: 25px;
        font-size: 16px;
        line-height: 1.8;
        color: #4a5568;
        background-color: #fff;
    }
    .faq-contact-box {
        background: #fff;
        padding: 40px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border-top: 5px solid #E43D12;
    }
    .faq-contact-box h3 {
        font-weight: 800;
        margin-bottom: 15px;
    }
    .card-text, .lead{
        color: #fff;
    }
</style>

<section class="faq-header">
    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <p class="lead">Find answers to the most common questions about our signage solutions and services.</p>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="faqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What types of sign boards do you manufacture?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We manufacture a wide range of premium sign boards, including LED sign boards, custom Neon signs, Acrylic sign boards, Metal/Stainless Steel sign boards, 3D letters, Digital signage displays, and specialized safety/industrial signs for various business sectors.
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How long does it take to complete a custom signage project?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Typically, custom signage projects take between 7 to 14 business days from the date of design approval. The exact timeline depends on the complexity of the design, material availability, and the scale of the installation. We always provide a committed timeline before starting the production.
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you provide professional installation services?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we have a dedicated in-house installation team. We provide professional, safe, and efficient installation services for all our signage products across major cities including Bangalore, Chennai, Mumbai, and Hyderabad.
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Are your LED sign boards energy efficient?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely. Our LED sign boards are designed using the latest energy-saving technology, making them up to 7X more energy-efficient than traditional fluorescent or neon lighting. This results in significant cost savings on electricity bills while maintaining high brightness and visibility.
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What is the warranty period for your signage products?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We stand behind our quality with a comprehensive warranty of 12 to 24 months on most of our signage products. This warranty typically covers electrical components like LEDs and power supplies, as well as any manufacturing defects.
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Can you create a custom sign board based on my brand's logo?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, customization is our expertise. Our design team works closely with you to transform your existing brand logo into high-impact signage. Whether it's a 3D LED letter sign or a vibrant neon board, we ensure the final product perfectly reflects your brand's identity and colors.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-contact-box mt-5">
                    <h3 class="text-black">Still have questions?</h3>
                    <p class="text-black">If you couldn't find the answer to your question, feel free to reach out to us. Our team is here to help you.</p>
                    <a href="{{route('contact_us')}}" class="custom-btn mt-3">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
