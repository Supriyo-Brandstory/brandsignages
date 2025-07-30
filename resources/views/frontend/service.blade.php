@extends('frontend.layout.appLayout')

@section('content')
    <section class="hero-banner"
        style="background-image: url('{{asset('frontend/Images/new/service-banner.webp')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-banner_title">Signage Design Services</h1>

                </div>
            </div>
        </div>
    </section>
    <div class="container new_servicespage-wrapper py-5">
        <h2 class="text-center mb-5 new_servicespage-title">
            Delivering Signages To Help You <br> Grow Your Business
        </h2>
        <div class="row g-4">
            <!-- Each signage item -->
            <!--<div class="col-6 col-md-4 col-lg-4 new_servicespage-card">
            <a href="https://brandsignages.com/" style="text-decoration: unset;">

                <div class="new_servicespage-box">
                    <img src="{{asset('frontend/Images/new/service-1.webp')}}" alt="Retail Signages" class="img-fluid">
                    <p class="new_servicespage-caption">Retail Signages & Retail Branding</p>
                </div>
            </div>-->
            <div class="col-6 col-md-4 col-lg-4 new_servicespage-card">
            <a href="https://brandsignages.com/metal-signages" style="text-decoration: unset;">

                <div class="new_servicespage-box">
                    <img src="{{asset('frontend/Images/new/service-10.webp')}}" alt="Metal & Steel Signages"
                        class="img-fluid">
                    <p class="new_servicespage-caption">Metal & Steel Signages</p>
                </div>
            </a>

            </div>

            <div class="col-6 col-md-4 col-lg-4 new_servicespage-card">
                  <a href="https://brandsignages.com/led-light-signages" style="text-decoration: unset;">
                <div class="new_servicespage-box">
                    <img src="{{asset('frontend/Images/new/service-9.webp')}}" alt="LED Sign Board" class="img-fluid">
                    <p class="new_servicespage-caption">LED Sign Board</p>
                </div>
                  </a>
            </div>

            <div class="col-6 col-md-4 col-lg-4 new_servicespage-card">
                  <a href="https://brandsignages.com/outdoor-signages" style="text-decoration: unset;">
                <div class="new_servicespage-box">
                    <img src="{{asset('frontend/Images/new/service-8.webp')}}" alt="Outdoor Signages" class="img-fluid">
                    <p class="new_servicespage-caption">Outdoor Signages</p>
                </div>
                  </a>
            </div>

            <div class="col-6 col-md-4 col-lg-4 new_servicespage-card">
                  <a href="https://brandsignages.com/arcylic-signages" style="text-decoration: unset;">
                <div class="new_servicespage-box">
                    <img src="{{asset('frontend/Images/new/service-7.webp')}}" alt="Interior Decals" class="img-fluid">
                    <p class="new_servicespage-caption">Interior Signages</p>
                </div>
                  </a>
            </div>

            <div class="col-6 col-md-4 col-lg-4 new_servicespage-card">
                  <a href="https://brandsignages.com/digital-signages" style="text-decoration: unset;">
                <div class="new_servicespage-box">
                    <img src="{{asset('frontend/Images/new/service-6.webp')}}" alt="Digital Signages" class="img-fluid">
                    <p class="new_servicespage-caption">Digital Signages</p>
                </div>
                  </a>
            </div>

            <div class="col-6 col-md-4 col-lg-4 new_servicespage-card">
                  <a href="https://brandsignages.com/construction-safety-signages" style="text-decoration: unset;">
                <div class="new_servicespage-box">
                    <img src="{{asset('frontend/Images/new/service-5.webp')}}" alt="Reflective Signs" class="img-fluid">
                    <p class="new_servicespage-caption">Construction Safety Signs</p>
                </div>
                  </a>
            </div>

            <div class="col-6 col-md-4 col-lg-4 new_servicespage-card">
                  <a href="https://brandsignages.com/" style="text-decoration: unset;">
                <div class="new_servicespage-box">
                    <img src="{{asset('frontend/Images/new/service-4.webp')}}" alt="Event and Tradeshow Sign"
                        class="img-fluid">
                    <p class="new_servicespage-caption">Event and Tradeshow Sign</p>
                </div>
                  </a>
            </div>

            <div class="col-6 col-md-4 col-lg-4 new_servicespage-card">
                  <a href="https://brandsignages.com/" style="text-decoration: unset;">
                <div class="new_servicespage-box">
                    <img src="{{asset('frontend/Images/new/service-3.webp')}}" alt="Retractable Banners" class="img-fluid">
                    <p class="new_servicespage-caption">Retractable Banners</p>
                </div>
                  </a>
            </div>

            <!--<div class="col-6 col-md-4 col-lg-4 new_servicespage-card">
                  <a href="https://brandsignages.com/arcylic-signages" style="text-decoration: unset;">
                <div class="new_servicespage-box">
                    <img src="{{asset('frontend/Images/new/service-2.webp')}}" alt="Indoor Signages" class="img-fluid">
                    <p class="new_servicespage-caption">Indoor Signages</p>
                </a>
                </div>-->


            </div>
        </div>
    </div>
    <style>
        .new_servicespage-wrapper {
            background-color: #fff;
        }

        .new_servicespage-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #111;
        }

        .new_servicespage-box {
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            background: #f9f9f9;
            transition: transform 0.3s ease;
            position: relative;
        }

        .new_servicespage-box:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .new_servicespage-box img {
            width: 100%;
            object-fit: cover;
            aspect-ratio: 4/3;
            height: 475px;
            object-fit: cover;
        }

        .new_servicespage-caption {
            margin: 0;
            color: #fff;
            position: absolute;
            bottom: 0;
            width: 100%;
            font-family: 'Lora';
            font-weight: 600;
            font-size: 24px;
            line-height: 120%;
            letter-spacing: 0%;
                padding: 10%;
        }
    </style>

@endsection