@extends('frontend.layout.appLayout')
@section('content')



    <section class="hero-banner"
        style="background-image: url('{{ asset('/frontend/Images/digital-signages-banner.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h1 class="hero-banner_title">Archives: Latest Case Studies</h1>

                    
                </div>
            </div>
        </div>
    </section>

<section>
    <div class="container py-md-5 pt-4">
       
        <h2 class="hero-title mb-4">Latest Case Studies- <br>Recent Projects by Brand Signages</h2>

    </div>
</section>

    <section class="new-recent-works">
        <div class="container">
          
            <div class="row">
                    <!-- 1 -->
                    <div class="col-12 col-lg-4">
                        <div class="box">
                        <img src="/frontend/Images/led-sign-board/led-sign-board-titan-watch.webp"
                            alt="LED Sign Board for Titan Watch - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Titan Showroom</h4>
                            <a href="https://brandsignages.com/case-studies/titan-showroom-sign-board"><b>Explore Project</b></a>
                        </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="col-12 col-lg-4">
                        <div class="box">
                        <img src="/frontend/Images/led-sign-board/led-sign-board-fortis-hospital.webp"
                            alt="LED Sign Board for Fortis Hospital - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Fortis Hospital</h4>
                            <a href="https://brandsignages.com/case-studies/fortis-hospital-sign-board"><b>Explore Project</b></a>
                        </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="col-12 col-lg-4">
                        <div class="box">
                        <img src="/frontend/Images/led-sign-board/cafe-mocha-led-sign-board.webp"
                            alt="LED Sign Board for Café Mocha - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Café Mocha</h4>
                            <a href="https://brandsignages.com/case-studies/cafe-mocha-sign-board"><b>Explore Project</b></a>
                        </div>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="col-12 col-lg-4">
                        <div class="box mt-4 mt-lg-0">
                        <img src="/frontend/Images/led-sign-board/medplus-sign-board-design.webp"
                            alt="LED Sign Board for MedPlus - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>MedPlus</h4>
                            <a href="https://brandsignages.com/case-studies/medplus-pharmacy-sign-board"><b>Explore Project</b></a>
                        </div>
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="col-12 col-lg-4">
                        <div class="box mt-4 mt-lg-0">
                        <img src="/frontend/Images/led-sign-board/prestidge-group-sign-board.webp"
                            alt="LED Sign Board for Prestige Office - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Prestige Office</h4>
                            <a href="https://brandsignages.com/case-studies/prestidge-group-sign-board"><b>Explore Project</b></a>
                        </div>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="col-12 col-lg-4">
                        <div class="box mt-4 mt-lg-0">
                        <img src="/frontend/Images/led-sign-board/tanishq-led-sign-board.webp"
                            alt="LED Sign Board for Tanishq Showroom - Brand Signages" class="img-fluid">
                        <div class="w-100 d-flex align-items-center justify-content-between px-4 mt-2">
                            <h4>Tanishq Showroom</h4>
                            <a href="https://brandsignages.com/case-studies/tanishq-sign-board"><b>Explore Project</b></a>
                        </div>
                        </div>
                    </div>
                    </div>


                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="https://brandsignages.com/contact-us">
                    <button class="contact-btn">Start Your Projects</button>
                </a>
            </div>


        </div>
    </section>


<section class="process-section">

    <div class="container py-lg-5 py-md-3 py-sm-2 py-3">
        <h2 class="hero-title mb-3">Our Signage Success Stories
          </h2>
        <p class="card-text text-center">At Brand Signages, every project tells a story of creativity, precision, 
            and impact. From LED sign boards for retail brands to corporate name boards and outdoor installations, 
            we design and deliver signage solutions that elevate brand visibility and make lasting impressions. Explore 
            our case studies to see how we’ve helped leading businesses bring their brand identity to life through thoughtful 
            design, expert craftsmanship, and seamless execution.
        </p>

     <div class="text-center">
        <a href="{{route('contact_us')}}">
            <button class="contact-btn">Contact Us</button>
        </a>
     </div>
    </div>
</section>



   
@endsection