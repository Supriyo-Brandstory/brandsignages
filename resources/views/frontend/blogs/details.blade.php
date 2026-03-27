@extends('frontend.layout.appLayout')
@section('content')
    <section class="blog-section">
        <div class="row">
            <div class="bredcum d-none d-md-block">
                <a href="{{ route('blogsVaritaion', $blog->subCategory->category->slug) }}"
                    style="color: #e43d12;">{{ $blog->category_name }}</a>
                <span class="divider">/</span>
                <a href="{{ route('blogsVaritaion', $blog->subCategory->slug) }}"
                    style="color: #e43d12;">{{ $blog->sub_category_name }}</a>
                <span class="divider">/</span>
                <a>{{ $blog->title }}</a>
            </div>
        </div>
        <h1 class="hero-title mb-1" style="text-align: left;">{{ $blog->title }}</h1>
        <p class="card-text" style="text-align: left;">By <a href="{{ route('bala_kumaranan') }}"
                style="color: #e43d12;">Manoj Kaliyannan</a> |
            {{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }} | {{ $blog->reding_time }} min read</p>
        <div class="blog-image-wrapper mb-3">
            @if ($blog->gallery_images && count($blog->gallery_images) > 0)
                <div class="swiper mainImageSliderMobile d-block d-lg-none">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                class="blogimg rounded">
                        </div>
                        @foreach ($blog->gallery_images as $gallery_img)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $gallery_img) }}" alt="{{ $blog->title }}"
                                    class="blogimg rounded">
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                    class="blogimg d-block d-lg-none">
            @endif
        </div>

        <div class="row main blog">






            <!-- Blog Content Column -->
            <div class="col-lg-8 order-last order-lg-first">

                <div class="blog-gallery-container mb-4">
                    @if ($blog->gallery_images && count($blog->gallery_images) > 0)
                        <div class="swiper mainImageSliderDesktop d-none d-lg-block">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                        class="blogimg rounded">
                                </div>
                                @foreach ($blog->gallery_images as $gallery_img)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/' . $gallery_img) }}" alt="{{ $blog->title }}"
                                            class="blogimg rounded">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="gallery-slider-wrapper mt-3">
                            <div class="swiper blogGallerySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide gallery-thumb"
                                        data-full="{{ asset('storage/' . $blog->image) }}">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                    </div>
                                    @foreach ($blog->gallery_images as $gallery_img)
                                        <div class="swiper-slide gallery-thumb"
                                            data-full="{{ asset('storage/' . $gallery_img) }}">
                                            <img src="{{ asset('storage/' . $gallery_img) }}" alt="{{ $blog->title }}">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    @else
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                            class="blogimg d-none d-lg-block" id="mainImageDesktop">
                    @endif
                </div>

                <article class="blog-content">
                    @php
                        $content = preg_replace_callback(
                            '/<h([1-3])>(.*?)<\/h[1-3]>/',
                            function ($matches) {
                                $level = $matches[1];
                                $title = $matches[2];
                                $id = Str::slug(strip_tags($title));
                                return "<h$level id='$id'>$title</h$level>";
                            },
                            $blog->content,
                        );
                        echo $content;
                    @endphp
                </article>
            </div>

            <!-- Table of Contents Column -->
            <div class="col-lg-4 order-first order-lg-last d-none d-md-block">
                <div class="table-of-contents">
                    <h2>Table of Contents</h2>
                    <ul id="toc">
                        @php
                            $content = $blog->content;
                            preg_match_all('/<h([1-3])>(.*?)<\/h[1-3]>/', $content, $matches, PREG_SET_ORDER);
                            foreach ($matches as $match) {
                                $level = $match[1];
                                $title = strip_tags($match[2]);
                                $slug = Str::slug($title);
                                echo "<li class='toc-item toc-level-$level'><a href='#$slug' style='color: #E43D12;'>$title</a></li>";
                            }
                        @endphp
                    </ul>
                </div>
            </div>


        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // TOC logic
            const tocLinks = document.querySelectorAll("#toc a");
            tocLinks.forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute("href").substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: "smooth"
                        });
                    }
                });
            });

            // Gallery slider logic
            if (document.querySelector('.blogGallerySwiper')) {
                const swiperThumbs = new Swiper(".blogGallerySwiper", {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    freeMode: true,
                    watchSlidesProgress: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 3
                        },
                        768: {
                            slidesPerView: 4
                        },
                        1024: {
                            slidesPerView: 6
                        },
                    },
                });

                const mainConfig = {
                    spaceBetween: 10,
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                    },
                    thumbs: {
                        swiper: swiperThumbs,
                    },
                };

                const swiperMainDesktop = new Swiper(".mainImageSliderDesktop", mainConfig);
                const swiperMainMobile = new Swiper(".mainImageSliderMobile", mainConfig);

                // Re-syncing logic for active class on thumbs
                swiperMainDesktop.on('slideChange', function() {
                    document.querySelectorAll('.gallery-thumb').forEach((t, i) => {
                        t.classList.toggle('active', i === swiperMainDesktop.activeIndex);
                    });
                });
                swiperMainMobile.on('slideChange', function() {
                    document.querySelectorAll('.gallery-thumb').forEach((t, i) => {
                        t.classList.toggle('active', i === swiperMainMobile.activeIndex);
                    });
                });
            }
        });
    </script>
    <style>
        img {
            max-width: 100%;
        }
    </style>
    <style>
        img.blogimg {
            max-width: 100%;
            object-fit: cover;
            height: auto;
            border-radius: 10px;
        }

        p.card-text {
            margin: 0px 0px 0px 5px;
        }

        img.blogimg {
            max-width: 100%;
            object-fit: cover;
            height: auto;
            border-radius: 10px;
            margin-top: 15px;
        }

        section.blog-section {
            padding: 35px 49px;

        }

        .bredcum {
            display: flex;
            background: #fcece7;
            width: auto;
            border-radius: 7px;
            align-items: center;
            justify-content: center;
            text-transform: capitalize;
            margin: 0px 10px;

        }

        .bredcum p {
            margin: 0;
            padding: 5px;
        }

        article.blog-content {
            margin-top: 10px;
            padding: 10PX;
        }

        span.divider {
            margin: 0 8px;
            color: black;
        }

        .table-of-contents {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 15px;

        }

        .table-of-contents h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .toc-item {
            margin: 5px 0;
        }

        .toc-level-1 {
            font-weight: bold;
        }

        .toc-level-2 {
            margin-left: 20px;
        }

        .toc-level-3 {
            margin-left: 40px;
        }

        .blog-content h1,
        .blog-content h2,
        .blog-content h3 {
            scroll-margin-top: 80px;
            /* Adjust the scroll position */
        }

        .ctaa-hov {
            background-color: #ffffff;
            color: #E43D12;
            font-size: 1.1rem;
            border: 2px solid #ffffff;
            width: 100%;
            max-width: 220px;
            transition: all 0.3s ease;
        }

        .ctaa-hov:hover {
            background-color: #E43D12;
            color: #ffffff;
            border: 2px solid #ffffff;

        }

        @media (max-width: 767px) {
            .bredcum {
                display: block;
                width: 93%;
                color: #e43d12;
                text-decoration: none;
                word-wrap: break-word;
                /* Allows text to wrap onto the next line */
                word-break: break-word;
                /* Breaks long words */
                overflow-wrap: break-word;
                /* Ensures long words wrap properly */
            }

            .hero-title {
                margin-bottom: 0px !important;
                margin-top: 18px;
            }
        }

        section.blog-section {
            padding: 35px 20px;
        }

        h1.hero-title.mb-1 {
            margin-top: 15px;
        }

        /* Gallery Styles */
        .gallery-thumb {
            cursor: pointer;
            border-radius: 8px;
            overflow: hidden;
            border: 2px solid transparent;
            transition: all 0.3s ease;
            height: 80px;
            opacity: 0.6;
        }

        .gallery-thumb.active,
        .blogGallerySwiper .swiper-slide-thumb-active {
            border-color: #E43D12;
            opacity: 1;
        }

        .gallery-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-slider-wrapper {
            position: relative;
            padding: 0 40px;
        }

        .blogGallerySwiper .swiper-button-next,
        .blogGallerySwiper .swiper-button-prev {
            color: #E43D12;
            width: 30px;
            height: 30px;
        }

        .blogGallerySwiper .swiper-button-next::after,
        .blogGallerySwiper .swiper-button-prev::after {
            font-size: 18px;
        }

        .blogGallerySwiper .swiper-button-prev {
            left: 0;
        }

        .blogGallerySwiper .swiper-button-next {
            right: 0;
        }
    </style>
@endsection
