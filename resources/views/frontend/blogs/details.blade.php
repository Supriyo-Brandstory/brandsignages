@extends('frontend.layout.appLayout')

@section('content')
    @php
        $catSlug = $blog->subCategory && $blog->subCategory->category ? $blog->subCategory->category->slug : ($blog->category_name ? Str::slug($blog->category_name) : 'blogs');
        $subCatSlug = $blog->subCategory ? $blog->subCategory->slug : ($blog->sub_category_name ? Str::slug($blog->sub_category_name) : 'articles');
        $categoryTitle = $blog->category_name ?? ($blog->subCategory && $blog->subCategory->category ? $blog->subCategory->category->name : 'Signages');
        $subCategoryTitle = $blog->sub_category_name ?? ($blog->subCategory ? $blog->subCategory->name : 'Guides');
        $readingTime = $blog->reding_time ?? max(1, ceil(str_word_count(strip_tags($blog->content)) / 200));
        $publishDate = \Carbon\Carbon::parse($blog->created_at ?? now())->format('M d, Y');
        $shareUrl = url()->current();
        $shareTitle = urlencode($blog->title);
    @endphp

    <!-- Top Reading Progress Bar -->
    <div id="readingProgressBar" class="reading-progress-bar" aria-hidden="true"></div>

    <main class="blog-details-wrapper">
        <div class="container-fluid px-3 px-md-4 px-lg-5 py-4">

            <!-- Breadcrumbs Header -->
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="bs-breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}"><i class="fa-solid fa-house me-1"></i>Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('blogsVaritaion', $catSlug) }}">{{ $categoryTitle }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('blogsVaritaion', $subCatSlug) }}">{{ $subCategoryTitle }}</a>
                    </li>
                    <li class="breadcrumb-item active text-truncate" aria-current="page" style="max-width: 320px;">
                        {{ $blog->title }}
                    </li>
                </ol>
            </nav>

            <!-- Main Blog Article Header -->
            <header class="blog-header-section mb-4">
                <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                    @if (!empty($blog->topic))
                        <span class="topic-pill">
                            <i class="fa-solid fa-tag me-1"></i>{{ strtoupper($blog->topic) }}
                        </span>
                    @endif
                    <span class="badge-category">
                        {{ $subCategoryTitle }}
                    </span>
                </div>

                <h1 class="blog-main-title">{{ $blog->title }}</h1>

                <!-- Meta row: Author, Date, Read Time, Share -->
                <div class="blog-meta-bar d-flex flex-wrap justify-content-between align-items-center gap-3 py-3 border-top border-bottom my-3">
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <div class="author-snippet d-flex align-items-center">
                            <div class="author-avatar-circle me-2">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div class="author-info">
                                <span class="text-muted d-block small">Written by</span>
                                <a href="{{ route('bala_kumaranan') }}" class="author-name fw-bold">Manoj Kaliyannan</a>
                            </div>
                        </div>

                        <div class="meta-divider d-none d-sm-block"></div>

                        <div class="meta-item text-muted small d-flex align-items-center">
                            <i class="fa-regular fa-calendar me-1 text-brand"></i>
                            <span>{{ $publishDate }}</span>
                        </div>

                        <div class="meta-divider d-none d-sm-block"></div>

                        <div class="meta-item text-muted small d-flex align-items-center">
                            <i class="fa-regular fa-clock me-1 text-brand"></i>
                            <span>{{ $readingTime }} min read</span>
                        </div>
                    </div>

                    <!-- Quick Share Icons -->
                    <div class="blog-share-actions d-flex align-items-center gap-2">
                        <span class="text-muted small fw-semibold d-none d-md-inline">Share:</span>
                        <a href="https://api.whatsapp.com/send?text={{ $shareTitle }}%20{{ urlencode($shareUrl) }}"
                           target="_blank" rel="noopener noreferrer" class="share-btn share-whatsapp" title="Share on WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($shareUrl) }}"
                           target="_blank" rel="noopener noreferrer" class="share-btn share-linkedin" title="Share on LinkedIn">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?text={{ $shareTitle }}&url={{ urlencode($shareUrl) }}"
                           target="_blank" rel="noopener noreferrer" class="share-btn share-twitter" title="Share on X">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($shareUrl) }}"
                           target="_blank" rel="noopener noreferrer" class="share-btn share-facebook" title="Share on Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <button type="button" class="share-btn share-copy js-copy-link" title="Copy Link" data-url="{{ $shareUrl }}">
                            <i class="fa-solid fa-link"></i>
                            <span class="copy-tooltip">Copied!</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Featured Media / Gallery Section -->
            <div class="blog-hero-media mb-4">
                @if ($blog->gallery_images && count($blog->gallery_images) > 0)
                    <!-- Desktop & Mobile Swiper Gallery -->
                    <div class="gallery-showcase-container">
                        <div class="swiper mainHeroSwiper rounded-4 overflow-hidden shadow-sm">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="hero-image-frame">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid hero-img">
                                    </div>
                                </div>
                                @foreach ($blog->gallery_images as $gallery_img)
                                    <div class="swiper-slide">
                                        <div class="hero-image-frame">
                                            <img src="{{ asset('storage/' . $gallery_img) }}" alt="{{ $blog->title }}" class="img-fluid hero-img">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Gallery Thumbnails -->
                        <div class="gallery-thumbs-slider-wrapper mt-3">
                            <div class="swiper blogThumbsSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide gallery-thumb-item">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                    </div>
                                    @foreach ($blog->gallery_images as $gallery_img)
                                        <div class="swiper-slide gallery-thumb-item">
                                            <img src="{{ asset('storage/' . $gallery_img) }}" alt="{{ $blog->title }}">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next custom-swiper-nav"></div>
                                <div class="swiper-button-prev custom-swiper-nav"></div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="hero-single-image-card rounded-4 overflow-hidden shadow-sm">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid w-100 hero-single-img">
                    </div>
                @endif
            </div>

            <!-- Main Content + Sticky Sidebar Layout -->
            <div class="row g-4 g-xl-5">

                <!-- Left: Article Content Body -->
                <div class="col-lg-8 order-last order-lg-first">
                    <article class="bs-blog-article">
                        @php
                            // Format headings to add slugs for TOC
                            $content = preg_replace_callback(
                                '/<h([1-3])>(.*?)<\/h[1-3]>/',
                                function ($matches) {
                                    $level = $matches[1];
                                    $title = $matches[2];
                                    $id = Str::slug(strip_tags($title));
                                    return "<h$level id='$id' class='blog-heading blog-h$level'>$title</h$level>";
                                },
                                $blog->content,
                            );

                            // Format tables with responsive scroll container & modern styling
                            $content = preg_replace('/<table([^>]*)>/i', '<div class="bs-table-wrapper"><table class="bs-custom-table"$1>', $content);
                            $content = str_replace('</table>', '</table></div>', $content);

                            echo $content;
                        @endphp
                    </article>

                    <!-- Article Footer: Topic Tags & Share Footer -->
                    <div class="article-footer-box p-4 rounded-4 my-4">
                        <div class="row align-items-center gy-3">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <span class="fw-bold text-dark small"><i class="fa-solid fa-tags text-brand me-1"></i>Topics:</span>
                                    <a href="{{ route('blogsVaritaion', $subCatSlug) }}" class="tag-pill-link">{{ $subCategoryTitle }}</a>
                                    @if (!empty($blog->topic))
                                        <a href="{{ route('blogsVaritaion', $catSlug) }}" class="tag-pill-link">{{ $blog->topic }}</a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <div class="d-inline-flex align-items-center gap-2">
                                    <span class="text-muted small fw-semibold">Share Article:</span>
                                    <a href="https://api.whatsapp.com/send?text={{ $shareTitle }}%20{{ urlencode($shareUrl) }}"
                                       target="_blank" rel="noopener noreferrer" class="share-btn share-whatsapp sm" title="WhatsApp">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($shareUrl) }}"
                                       target="_blank" rel="noopener noreferrer" class="share-btn share-linkedin sm" title="LinkedIn">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?text={{ $shareTitle }}&url={{ urlencode($shareUrl) }}"
                                       target="_blank" rel="noopener noreferrer" class="share-btn share-twitter sm" title="X">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <button type="button" class="share-btn share-copy sm js-copy-link" title="Copy link" data-url="{{ $shareUrl }}">
                                        <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Author Profile Bio Box -->
                    <div class="author-bio-card p-4 p-md-5 rounded-4 mb-4 text-center">
                        <div class="d-flex flex-column align-items-center gap-3">
                            <div class="author-bio-avatar">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div class="author-bio-details text-center">
                                <h4 class="mb-2 author-name-large">Manoj Kaliyannan</h4>
                                <div class="mb-3">
                                    <span class="author-role-badge">Signage Specialist & Founder</span>
                                </div>
                                <p class="author-bio-text text-muted mb-3 mx-auto" style="max-width: 620px;">
                                    With over 10+ years of hands-on expertise in architectural signage design, custom LED fabrication, and commercial brand installations across India, Manoj specializes in building impactful brand identities that command attention.
                                </p>
                                <div class="d-flex align-items-center justify-content-center gap-3">
                                    <a href="{{ route('bala_kumaranan') }}" class="view-author-link">
                                        <span>View Author Profile</span>
                                        <i class="fa-solid fa-arrow-right ms-1"></i>
                                    </a>
                                    <a href="https://in.linkedin.com/in/manojkaliyannan" target="_blank" rel="noopener noreferrer" class="text-secondary" title="LinkedIn Profile">
                                        <i class="fa-brands fa-linkedin fs-5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- High-Converting Bottom Signage CTA Banner -->
                    <div class="signage-consultation-banner rounded-4 p-4 p-md-5 my-4 position-relative overflow-hidden">
                        <div class="cta-glow-circle"></div>
                        <div class="row align-items-center position-relative" style="z-index: 2;">
                            <div class="col-lg-8 text-center text-lg-start mb-3 mb-lg-0">
                                <span class="cta-pill-label mb-2 d-inline-block">
                                    <i class="fa-solid fa-wand-magic-sparkles me-1"></i> Free Signage Consultation
                                </span>
                                <h3 class="cta-heading text-white mb-2">
                                    Ready to Elevate Your Brand Presence?
                                </h3>
                                <p class="cta-subtext text-white-50 mb-0">
                                    Get custom 3D design mockups, accurate material estimates, and fast PAN-India installation support for your business.
                                </p>
                            </div>
                            <div class="col-lg-4 text-center text-lg-end">
                                <a href="{{ route('contact_us') }}" class="btn cta-action-btn shadow-lg mb-2 mb-sm-0 me-sm-2 me-lg-0">
                                    <span>Get Free Quote</span>
                                    <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                                <div class="mt-2 text-center text-lg-end">
                                    <a href="tel:+918006606080" class="text-white small text-decoration-none d-inline-flex align-items-center gap-1 opacity-75 hover-opacity-100">
                                        <i class="fa-solid fa-phone text-brand"></i> Call: +91 8006606080
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile-Only Bottom Promo Widgets -->
                    <div class="mobile-bottom-widgets d-block d-lg-none mt-4">
                        <!-- Sidebar Quick Consultation Card -->
                        <div class="sidebar-widget quote-widget rounded-4 p-4 mb-4 text-center position-relative overflow-hidden">
                            <div class="quote-icon-bubble mb-3">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                            <h4 class="quote-title fw-bold mb-2">Need Custom Signage?</h4>
                            <p class="quote-desc text-muted small mb-3">
                                We design & manufacture premium LED boards, acrylic nameplates, metal letters, and digital displays.
                            </p>
                            <ul class="quote-perks list-unstyled small text-start mb-3 mx-auto" style="max-width: 240px;">
                                <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>100% Custom Tailored Designs</li>
                                <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Direct Manufacturer Pricing</li>
                                <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>5-Year Weatherproof Durability</li>
                            </ul>
                            <a href="{{ route('contact_us') }}" class="btn btn-brand w-100 py-2 fw-semibold">
                                <i class="fa-solid fa-paper-plane me-1"></i> Request Quote Now
                            </a>
                            <div class="mt-3 pt-2 border-top">
                                <a href="tel:+918006606080" class="call-direct-link text-decoration-none fw-bold small text-dark d-flex align-items-center justify-content-center gap-1">
                                    <i class="fa-solid fa-phone-volume text-brand"></i> +91 8006606080
                                </a>
                            </div>
                        </div>

                        <!-- Sidebar Category / Topics Pill Widget -->
                        <div class="sidebar-widget categories-widget rounded-4 p-4 mb-4">
                            <h4 class="widget-title fw-bold mb-3 pb-2 border-bottom d-flex align-items-center">
                                <i class="fa-solid fa-compass text-brand me-2"></i> Explore Signage Solutions
                            </h4>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ route('blogsVaritaion', 'led-sign-board') }}" class="category-chip">LED Sign Boards</a>
                                <a href="{{ route('blogsVaritaion', 'acrylic-signage') }}" class="category-chip">Acrylic Signage</a>
                                <a href="{{ route('blogsVaritaion', 'neon-sign-board') }}" class="category-chip">Neon Signs</a>
                                <a href="{{ route('blogsVaritaion', 'office-signages') }}" class="category-chip">Office Signs</a>
                                <a href="{{ route('blogsVaritaion', 'metal-signages') }}" class="category-chip">Metal Signages</a>
                                <a href="{{ route('blogsVaritaion', 'digital-signages') }}" class="category-chip">Digital Signages</a>
                                <a href="{{ route('blogsVaritaion', 'safety-signages') }}" class="category-chip">Safety Signs</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right: Modern Sticky Sidebar (Desktop) -->
                <div class="col-lg-4 order-first order-lg-last">
                    <aside class="blog-sidebar-sticky">

                        <!-- Table of Contents Card -->
                        @php
                            preg_match_all('/<h([1-3])>(.*?)<\/h[1-3]>/', $blog->content, $tocMatches, PREG_SET_ORDER);
                        @endphp

                        @if (count($tocMatches) > 0)
                            <div class="sidebar-widget toc-widget rounded-4 p-4 mb-4">
                                <div class="toc-header d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                                    <h3 class="toc-title mb-0 d-flex align-items-center">
                                        <i class="fa-solid fa-list-ol text-brand me-2"></i>
                                        <span>Table of Contents</span>
                                    </h3>
                                    <span class="badge bg-light text-dark rounded-pill px-2 py-1 small">{{ count($tocMatches) }} sections</span>
                                </div>

                                <div class="toc-scroll-area">
                                    <ul id="tocList" class="toc-list list-unstyled mb-0">
                                        @foreach ($tocMatches as $match)
                                            @php
                                                $level = $match[1];
                                                $title = strip_tags($match[2]);
                                                $slug = Str::slug($title);
                                            @endphp
                                            <li class="toc-item toc-depth-{{ $level }}">
                                                <a href="#{{ $slug }}" class="toc-link" data-target="{{ $slug }}">
                                                    <span class="toc-bullet"></span>
                                                    <span class="toc-text">{{ $title }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        <!-- Sidebar Quick Consultation Card (Desktop Only) -->
                        <div class="sidebar-widget quote-widget rounded-4 p-4 mb-4 text-center position-relative overflow-hidden d-none d-lg-block">
                            <div class="quote-icon-bubble mb-3">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                            <h4 class="quote-title fw-bold mb-2">Need Custom Signage?</h4>
                            <p class="quote-desc text-muted small mb-3">
                                We design & manufacture premium LED boards, acrylic nameplates, metal letters, and digital displays.
                            </p>
                            <ul class="quote-perks list-unstyled small text-start mb-3 mx-auto" style="max-width: 240px;">
                                <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>100% Custom Tailored Designs</li>
                                <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>Direct Manufacturer Pricing</li>
                                <li class="mb-1"><i class="fa-solid fa-check text-success me-2"></i>5-Year Weatherproof Durability</li>
                            </ul>
                            <a href="{{ route('contact_us') }}" class="btn btn-brand w-100 py-2 fw-semibold">
                                <i class="fa-solid fa-paper-plane me-1"></i> Request Quote Now
                            </a>
                            <div class="mt-3 pt-2 border-top">
                                <a href="tel:+918006606080" class="call-direct-link text-decoration-none fw-bold small text-dark d-flex align-items-center justify-content-center gap-1">
                                    <i class="fa-solid fa-phone-volume text-brand"></i> +91 8006606080
                                </a>
                            </div>
                        </div>

                        <!-- Sidebar Category / Topics Pill Widget (Desktop Only) -->
                        <div class="sidebar-widget categories-widget rounded-4 p-4 mb-4 d-none d-lg-block">
                            <h4 class="widget-title fw-bold mb-3 pb-2 border-bottom d-flex align-items-center">
                                <i class="fa-solid fa-compass text-brand me-2"></i> Explore Signage Solutions
                            </h4>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ route('blogsVaritaion', 'led-sign-board') }}" class="category-chip">LED Sign Boards</a>
                                <a href="{{ route('blogsVaritaion', 'acrylic-signage') }}" class="category-chip">Acrylic Signage</a>
                                <a href="{{ route('blogsVaritaion', 'neon-sign-board') }}" class="category-chip">Neon Signs</a>
                                <a href="{{ route('blogsVaritaion', 'office-signages') }}" class="category-chip">Office Signs</a>
                                <a href="{{ route('blogsVaritaion', 'metal-signages') }}" class="category-chip">Metal Signages</a>
                                <a href="{{ route('blogsVaritaion', 'digital-signages') }}" class="category-chip">Digital Signages</a>
                                <a href="{{ route('blogsVaritaion', 'safety-signages') }}" class="category-chip">Safety Signs</a>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>

            <!-- Related Articles Showcase -->
            @if (isset($relatedBlogs) && count($relatedBlogs) > 0)
                <section class="related-articles-section mt-5 pt-5 border-top">
                    <div class="section-header d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
                        <div>
                            <span class="section-subtitle text-brand fw-bold text-uppercase small tracking-wider">
                                Continue Reading
                            </span>
                            <h2 class="section-main-heading mb-1">Related Signage Articles & Insights</h2>
                            <p class="text-muted small mb-0">Discover more expert guides, industry trends, and architectural signage tips.</p>
                        </div>
                        <a href="{{ route('blogsVaritaion', $catSlug) }}" class="view-all-link mt-3 mt-md-0 fw-semibold">
                            <span>View All Articles</span>
                            <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <div class="row g-4">
                        @foreach ($relatedBlogs as $item)
                            @php
                                $itemReadTime = $item->reding_time ?? max(1, ceil(str_word_count(strip_tags($item->content)) / 200));
                                $itemDate = \Carbon\Carbon::parse($item->created_at ?? now())->format('M d, Y');
                            @endphp
                            <div class="col-lg-4 col-md-6">
                                <article class="related-blog-card h-100 rounded-4 overflow-hidden shadow-sm d-flex flex-column">
                                    <div class="card-media-wrapper position-relative">
                                        <a href="{{ route('blogsVaritaion', $item->slug) }}" class="d-block overflow-hidden">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="card-img-top-cover">
                                        </a>
                                        @if (!empty($item->topic))
                                            <span class="card-floating-badge">{{ strtoupper($item->topic) }}</span>
                                        @endif
                                    </div>
                                    <div class="card-body-content p-4 d-flex flex-column flex-grow-1">
                                        <div class="card-meta text-muted small d-flex align-items-center justify-content-between mb-2">
                                            <span><i class="fa-regular fa-calendar me-1"></i>{{ $itemDate }}</span>
                                            <span><i class="fa-regular fa-clock me-1"></i>{{ $itemReadTime }} min read</span>
                                        </div>
                                        <h3 class="related-card-title mb-3">
                                            <a href="{{ route('blogsVaritaion', $item->slug) }}" class="text-decoration-none">
                                                {{ $item->title }}
                                            </a>
                                        </h3>
                                        <div class="mt-auto pt-2 border-top d-flex align-items-center justify-content-between">
                                            <a href="{{ route('blogsVaritaion', $item->slug) }}" class="card-read-more-link">
                                                <span>Read Full Article</span>
                                                <i class="fa-solid fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

        </div>
    </main>

    <!-- Toast Notification for Copy Link -->
    <div id="copyToast" class="copy-toast-notification">
        <i class="fa-solid fa-circle-check me-2"></i> Article link copied to clipboard!
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // 1. Reading Progress Bar Logic
            const progressBar = document.getElementById("readingProgressBar");
            window.addEventListener("scroll", function() {
                const docElement = document.documentElement;
                const totalHeight = docElement.scrollHeight - docElement.clientHeight;
                const currentScroll = window.scrollY || docElement.scrollTop;
                if (totalHeight > 0 && progressBar) {
                    const scrollPercentage = (currentScroll / totalHeight) * 100;
                    progressBar.style.width = scrollPercentage + "%";
                }
            });

            // 2. Table of Contents Smooth Scroll & Active Scrollspy
            const tocLinks = document.querySelectorAll("#tocList .toc-link");
            const headings = [];

            tocLinks.forEach(link => {
                const targetId = link.getAttribute("data-target");
                const headingElem = document.getElementById(targetId);
                if (headingElem) {
                    headings.push({ link: link, element: headingElem });
                }

                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    if (headingElem) {
                        const topPos = headingElem.getBoundingClientRect().top + window.pageYOffset - 90;
                        window.scrollTo({
                            top: topPos,
                            behavior: "smooth"
                        });
                    }
                });
            });

            // Scrollspy Intersection Observer
            if (headings.length > 0) {
                const observerOptions = {
                    root: null,
                    rootMargin: "-95px 0px -70% 0px",
                    threshold: 0
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            tocLinks.forEach(l => l.classList.remove("active"));
                            const activeLink = document.querySelector(`#tocList .toc-link[data-target="${entry.target.id}"]`);
                            if (activeLink) {
                                activeLink.classList.add("active");
                            }
                        }
                    });
                }, observerOptions);

                headings.forEach(item => {
                    observer.observe(item.element);
                });
            }

            // 3. Swiper Gallery Initialization
            if (document.querySelector('.blogThumbsSwiper') && document.querySelector('.mainHeroSwiper')) {
                const thumbsSwiper = new Swiper(".blogThumbsSwiper", {
                    spaceBetween: 12,
                    slidesPerView: 4,
                    freeMode: true,
                    watchSlidesProgress: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        320: { slidesPerView: 3, spaceBetween: 8 },
                        576: { slidesPerView: 4, spaceBetween: 10 },
                        992: { slidesPerView: 5, spaceBetween: 12 },
                    }
                });

                new Swiper(".mainHeroSwiper", {
                    spaceBetween: 10,
                    effect: "fade",
                    fadeEffect: { crossFade: true },
                    autoplay: {
                        delay: 4500,
                        disableOnInteraction: false,
                    },
                    thumbs: {
                        swiper: thumbsSwiper,
                    },
                });
            }

            // 4. Copy to Clipboard Action
            const copyButtons = document.querySelectorAll(".js-copy-link");
            const copyToast = document.getElementById("copyToast");

            copyButtons.forEach(btn => {
                btn.addEventListener("click", function() {
                    const url = this.getAttribute("data-url") || window.location.href;
                    if (navigator.clipboard) {
                        navigator.clipboard.writeText(url).then(() => {
                            showToast();
                        }).catch(() => {
                            fallbackCopy(url);
                        });
                    } else {
                        fallbackCopy(url);
                    }
                });
            });

            function fallbackCopy(text) {
                const textArea = document.createElement("textarea");
                textArea.value = text;
                textArea.style.position = "fixed";
                textArea.style.opacity = "0";
                document.body.appendChild(textArea);
                textArea.select();
                try {
                    document.execCommand("copy");
                    showToast();
                } catch (err) {
                    console.error("Fallback copy failed", err);
                }
                document.body.removeChild(textArea);
            }

            function showToast() {
                if (copyToast) {
                    copyToast.classList.add("show");
                    setTimeout(() => {
                        copyToast.classList.remove("show");
                    }, 3000);
                }
            }

            // 5. Clean up old inline width styles on dynamically injected table cells
            document.querySelectorAll('.bs-blog-article table').forEach(function(table) {
                table.removeAttribute('width');
                table.querySelectorAll('td, th').forEach(function(cell) {
                    cell.removeAttribute('width');
                });
            });
        });
    </script>

    <style>
        /* ==========================================================================
           BRAND COLOR SYSTEM & TYPOGRAPHY TOKENS
           ========================================================================== */
        :root {
            --bs-brand-primary: #E43D12;
            --bs-brand-hover: #c7320c;
            --bs-brand-light: #fff1ed;
            --bs-brand-border: rgba(228, 61, 18, 0.18);
            --bs-dark-slate: #0f172a;
            --bs-body-color: #334155;
            --bs-heading-color: #1e293b;
            --bs-card-bg: #ffffff;
            --bs-card-border: #f1f5f9;
            --bs-card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.04), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
        }

        /* Top Reading Progress Bar */
        .reading-progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            width: 0%;
            background: linear-gradient(90deg, #E43D12 0%, #ff6b3d 100%);
            z-index: 99999;
            transition: width 0.1s ease-out;
            box-shadow: 0 1px 4px rgba(228, 61, 18, 0.4);
        }

        .blog-details-wrapper {
            background-color: #fafbfd;
            min-height: 100vh;
        }

        .text-brand {
            color: var(--bs-brand-primary) !important;
        }

        .btn-brand {
            background-color: var(--bs-brand-primary);
            border-color: var(--bs-brand-primary);
            color: #ffffff;
            border-radius: 8px;
            transition: all 0.25s ease;
        }

        .btn-brand:hover {
            background-color: var(--bs-brand-hover);
            border-color: var(--bs-brand-hover);
            color: #ffffff;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(228, 61, 18, 0.25);
        }

        /* ==========================================================================
           BREADCRUMBS
           ========================================================================== */
        .bs-breadcrumb {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 8px 16px;
            background: #ffffff;
            border: 1px solid #eef2f6;
            border-radius: 50px;
            font-size: 0.85rem;
            list-style: none;
            margin-bottom: 0;
            width: fit-content;
            box-shadow: 0 2px 6px rgba(0,0,0,0.02);
        }

        .bs-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
            content: "›";
            color: #94a3b8;
            font-size: 1.1rem;
            line-height: 1;
            padding: 0 8px;
        }

        .bs-breadcrumb a {
            color: #64748b;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .bs-breadcrumb a:hover {
            color: var(--bs-brand-primary);
        }

        .bs-breadcrumb .breadcrumb-item.active {
            color: var(--bs-brand-primary);
            font-weight: 600;
        }

        /* ==========================================================================
           HEADER & TITLE
           ========================================================================== */
        .topic-pill {
            display: inline-flex;
            align-items: center;
            background: var(--bs-brand-light);
            color: var(--bs-brand-primary);
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            padding: 4px 12px;
            border-radius: 50px;
            border: 1px solid var(--bs-brand-border);
        }

        .badge-category {
            background: #f1f5f9;
            color: #475569;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 50px;
        }

        .blog-main-title {
            color: #0f172a;
            letter-spacing: -0.02em;
        }

        @media (min-width: 992px) {
            .blog-main-title {
                font-size: 2.85rem;
            }
        }

        /* Author & Meta Bar */
        .author-avatar-circle {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: linear-gradient(135deg, #E43D12, #ff7a45);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            box-shadow: 0 4px 10px rgba(228, 61, 18, 0.2);
        }

        .author-name {
            color: #1e293b;
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.2s ease;
        }

        .author-name:hover {
            color: var(--bs-brand-primary);
        }

        .meta-divider {
            width: 1px;
            height: 24px;
            background-color: #e2e8f0;
        }

        /* Share Buttons */
        .share-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            text-decoration: none;
            font-size: 0.9rem;
            border: none;
            transition: all 0.25s ease;
            position: relative;
        }

        .share-btn:hover {
            transform: translateY(-2px);
            color: #ffffff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .share-btn.sm {
            width: 32px;
            height: 32px;
            font-size: 0.8rem;
        }

        .share-whatsapp { background-color: #25D366; }
        .share-linkedin { background-color: #0A66C2; }
        .share-twitter { background-color: #000000; }
        .share-facebook { background-color: #1877F2; }
        .share-copy { background-color: #64748b; }

        .copy-tooltip {
            position: absolute;
            bottom: 120%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #0f172a;
            color: #ffffff;
            padding: 3px 8px;
            font-size: 0.75rem;
            border-radius: 4px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: all 0.2s ease;
            pointer-events: none;
        }

        /* Toast Popup Notification */
        .copy-toast-notification {
            position: fixed;
            bottom: 24px;
            right: 24px;
            background-color: #0f172a;
            color: #ffffff;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 500;
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            z-index: 999999;
            transform: translateY(100px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            display: flex;
            align-items: center;
        }

        .copy-toast-notification.show {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        /* ==========================================================================
           HERO MEDIA / GALLERY
           ========================================================================== */
        .hero-image-frame,
        .hero-single-image-card {
            background-color: #f1f5f9;
            border: 1px solid #e2e8f0;
            max-height: 520px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-img,
        .hero-single-img {
            width: 100%;
            height: 100%;
            max-height: 520px;
            object-fit: cover;
            object-position: center;
            transition: transform 0.4s ease;
        }

        .hero-single-image-card:hover .hero-single-img {
            transform: scale(1.015);
        }

        .gallery-thumbs-slider-wrapper {
            position: relative;
            padding: 0 35px;
        }

        .gallery-thumb-item {
            cursor: pointer;
            border-radius: 10px;
            overflow: hidden;
            border: 2px solid #e2e8f0;
            height: 75px;
            opacity: 0.65;
            transition: all 0.25s ease;
        }

        .gallery-thumb-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-thumb-item.swiper-slide-thumb-active {
            border-color: var(--bs-brand-primary);
            opacity: 1;
            transform: scale(1.03);
            box-shadow: 0 4px 10px rgba(228, 61, 18, 0.25);
        }

        .custom-swiper-nav {
            color: var(--bs-brand-primary) !important;
            width: 28px !important;
            height: 28px !important;
        }

        .custom-swiper-nav::after {
            font-size: 14px !important;
            font-weight: bold;
        }

        /* ==========================================================================
           ARTICLE CONTENT STYLING (Modern Editorial)
           ========================================================================== */
        .bs-blog-article {
            font-family: 'Roboto', -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            font-size: 1.1rem;
            line-height: 1.85;
            color: #334155;
            background: #ffffff;
            padding: 36px;
            border-radius: 20px;
            border: 1px solid #edf2f7;
            box-shadow: var(--bs-card-shadow);
        }

        @media (max-width: 767px) {
            .bs-blog-article {
                padding: 20px 16px;
            }
        }

        .bs-blog-article p {
            margin-bottom: 1.5rem;
            color: #334155;
        }

        .bs-blog-article p:last-child {
            margin-bottom: 0;
        }

        /* Headings Inside Article */
        .bs-blog-article h1,
        .bs-blog-article h2,
        .bs-blog-article h3,
        .bs-blog-article h4 {
            font-family: 'Lora', Georgia, serif;
            color: #0f172a;
            font-weight: 700;
            margin-top: 2.4rem;
            margin-bottom: 1.1rem;
            scroll-margin-top: 100px;
            position: relative;
            line-height: 1.35;
        }

        .bs-blog-article h2 {
            font-size: 1.85rem;
            padding-left: 14px;
            border-left: 4px solid var(--bs-brand-primary);
        }

        .bs-blog-article h3 {
            font-size: 1.45rem;
            color: #1e293b;
        }

        .bs-blog-article h4 {
            font-size: 1.25rem;
        }

        .bs-blog-article a {
            color: var(--bs-brand-primary);
            text-decoration: underline;
            text-underline-offset: 3px;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .bs-blog-article a:hover {
            color: var(--bs-brand-hover);
        }

        /* Blockquotes */
        .bs-blog-article blockquote {
            background: linear-gradient(135deg, #fff7f4 0%, #ffffff 100%);
            border-left: 4px solid var(--bs-brand-primary);
            border-radius: 0 12px 12px 0;
            padding: 20px 24px;
            margin: 2rem 0;
            font-style: italic;
            color: #1e293b;
            font-size: 1.15rem;
            position: relative;
            box-shadow: 0 4px 12px rgba(228, 61, 18, 0.05);
        }

        /* Lists */
        .bs-blog-article ul,
        .bs-blog-article ol {
            padding-left: 1.5rem;
            margin-bottom: 1.6rem;
        }

        .bs-blog-article li {
            margin-bottom: 0.5rem;
            line-height: 1.75;
        }

        .bs-blog-article ul li::marker {
            color: var(--bs-brand-primary);
        }

        /* Images in Content */
        .bs-blog-article img {
            max-width: 100%;
            height: auto;
            border-radius: 14px;
            margin: 1.8rem 0;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
            border: 1px solid #f1f5f9;
        }

        /* ==========================================================================
           RESPONSIVE MODERN TABLES
           ========================================================================== */
        .bs-table-wrapper {
            width: 100% !important;
            max-width: 100% !important;
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch !important;
            margin: 2rem 0 !important;
            border-radius: 14px !important;
            border: 1px solid #e2e8f0 !important;
            box-shadow: 0 4px 14px rgba(0,0,0,0.03) !important;
            background: #ffffff !important;
        }

        .bs-custom-table {
            width: 100% !important;
            border-collapse: collapse !important;
            margin: 0 !important;
            font-size: 0.95rem !important;
            text-align: left !important;
        }

        .bs-custom-table th,
        .bs-custom-table td {
            padding: 14px 18px !important;
            border-bottom: 1px solid #edf2f7 !important;
            border-right: 1px solid #edf2f7 !important;
            color: #334155 !important;
            vertical-align: middle !important;
        }

        .bs-custom-table th:last-child,
        .bs-custom-table td:last-child {
            border-right: none !important;
        }

        .bs-custom-table tr:last-child td {
            border-bottom: none !important;
        }

        .bs-custom-table thead th,
        .bs-custom-table tr:first-child th,
        .bs-custom-table tr:first-child td {
            background-color: #f8fafc !important;
            color: #0f172a !important;
            font-weight: 700 !important;
            font-size: 0.98rem !important;
            letter-spacing: 0.2px !important;
            border-bottom: 2px solid #e2e8f0 !important;
        }

        .bs-custom-table tr:hover td {
            background-color: #f8fafc !important;
        }

        /* ==========================================================================
           ARTICLE FOOTER & AUTHOR BOX
           ========================================================================== */
        .article-footer-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
        }

        .tag-pill-link {
            background: #ffffff;
            color: #475569;
            border: 1px solid #e2e8f0;
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 0.8rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .tag-pill-link:hover {
            border-color: var(--bs-brand-primary);
            color: var(--bs-brand-primary);
        }

        .author-bio-card {
            background: #ffffff;
            border: 1px solid #edf2f7;
            box-shadow: var(--bs-card-shadow);
        }

        .author-bio-avatar {
            width: 70px;
            height: 70px;
            min-width: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, #E43D12 0%, #ff7a45 100%);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            box-shadow: 0 6px 16px rgba(228, 61, 18, 0.25);
            margin: 0 auto;
        }

        .author-name-large {
            font-family: 'Lora', Georgia, serif;
            font-weight: 700;
            font-size: 1.3rem;
            color: #0f172a;
        }

        .author-role-badge {
            background: var(--bs-brand-light);
            color: var(--bs-brand-primary);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 50px;
            display: inline-block;
        }

        .author-bio-text {
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .view-author-link {
            color: var(--bs-brand-primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            transition: transform 0.2s ease;
        }

        .view-author-link:hover {
            color: var(--bs-brand-hover);
            transform: translateX(3px);
        }

        /* Signage Consultation Banner */
        .signage-consultation-banner {
            background: linear-gradient(135deg, #111827 0%, #1e293b 100%);
            color: #ffffff;
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.15);
        }

        .cta-glow-circle {
            position: absolute;
            top: -40px;
            right: -40px;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(228, 61, 18, 0.4) 0%, rgba(228, 61, 18, 0) 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .cta-pill-label {
            background: rgba(228, 61, 18, 0.2);
            color: #ff8c6b;
            border: 1px solid rgba(228, 61, 18, 0.4);
            font-size: 0.8rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 50px;
        }

        .cta-heading {
            font-family: 'Lora', Georgia, serif;
            font-weight: 700;
            font-size: 1.6rem;
        }

        .cta-action-btn {
            background: linear-gradient(135deg, #E43D12 0%, #ff5722 100%);
            color: #ffffff !important;
            padding: 12px 26px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1rem;
            border: none;
            transition: all 0.25s ease;
            display: inline-flex;
            align-items: center;
        }

        .cta-action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(228, 61, 18, 0.4) !important;
            color: #ffffff !important;
        }

        /* ==========================================================================
           STICKY SIDEBAR & WIDGETS
           ========================================================================== */
        .blog-sidebar-sticky {
            position: sticky;
            top: 95px;
        }

        .sidebar-widget {
            background: #ffffff;
            border: 1px solid #edf2f7;
            box-shadow: var(--bs-card-shadow);
        }

        .toc-title,
        .widget-title {
            font-size: 1.15rem;
            color: #0f172a;
        }

        .toc-scroll-area {
            max-height: 380px;
            overflow-y: auto;
            padding-right: 6px;
        }

        .toc-scroll-area::-webkit-scrollbar {
            width: 4px;
        }

        .toc-scroll-area::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        .toc-list .toc-item {
            margin-bottom: 8px;
        }

        .toc-link {
            display: flex;
            align-items: flex-start;
            color: #64748b;
            text-decoration: none;
            font-size: 0.92rem;
            line-height: 1.4;
            padding: 6px 10px;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .toc-bullet {
            width: 6px;
            height: 6px;
            min-width: 6px;
            border-radius: 50%;
            background: #cbd5e1;
            margin-top: 6px;
            margin-right: 10px;
            transition: all 0.2s ease;
        }

        .toc-link:hover {
            color: var(--bs-brand-primary);
            background: #fff7f4;
        }

        .toc-link:hover .toc-bullet {
            background: var(--bs-brand-primary);
        }

        .toc-link.active {
            color: var(--bs-brand-primary);
            background: #fff1ed;
            font-weight: 600;
        }

        .toc-link.active .toc-bullet {
            background: var(--bs-brand-primary);
            transform: scale(1.4);
        }

        .toc-depth-2 { padding-left: 12px; }
        .toc-depth-3 { padding-left: 24px; font-size: 0.85rem; }

        /* Quote Widget */
        .quote-widget {
            background: linear-gradient(180deg, #ffffff 0%, #fff9f7 100%);
            border: 1px solid #ffdcd2;
        }

        .quote-icon-bubble {
            width: 50px;
            height: 50px;
            background: var(--bs-brand-light);
            color: var(--bs-brand-primary);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
        }

        .category-chip {
            background: #f8fafc;
            color: #475569;
            border: 1px solid #e2e8f0;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 0.83rem;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .category-chip:hover {
            background: var(--bs-brand-light);
            border-color: var(--bs-brand-primary);
            color: var(--bs-brand-primary);
            transform: translateY(-1px);
        }

        /* ==========================================================================
           RELATED ARTICLES SECTION
           ========================================================================== */
        .related-articles-section {
            border-color: #e2e8f0 !important;
        }

        .section-main-heading {
            font-family: 'Lora', Georgia, serif;
            font-weight: 700;
            font-size: 1.85rem;
            color: #0f172a;
        }

        .view-all-link {
            color: var(--bs-brand-primary);
            text-decoration: none;
            font-size: 0.95rem;
            transition: transform 0.2s ease;
        }

        .view-all-link:hover {
            color: var(--bs-brand-hover);
            transform: translateX(4px);
        }

        .related-blog-card {
            background: #ffffff;
            border: 1px solid #edf2f7;
            transition: all 0.3s ease;
        }

        .related-blog-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 30px rgba(0,0,0,0.08) !important;
            border-color: #ffdcd2;
        }

        .card-media-wrapper {
            height: 210px;
            background: #f1f5f9;
            overflow: hidden;
        }

        .card-img-top-cover {
            width: 100%;
            height: 210px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .related-blog-card:hover .card-img-top-cover {
            transform: scale(1.06);
        }

        .card-floating-badge {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(6px);
            color: #ffffff;
            font-size: 0.72rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 50px;
            letter-spacing: 0.5px;
        }

        .related-card-title {
            font-family: 'Lora', Georgia, serif;
            font-size: 1.18rem;
            font-weight: 700;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .related-card-title a {
            color: #0f172a;
            transition: color 0.2s ease;
        }

        .related-blog-card:hover .related-card-title a {
            color: var(--bs-brand-primary);
        }

        .card-read-more-link {
            color: var(--bs-brand-primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.88rem;
            display: inline-flex;
            align-items: center;
            transition: transform 0.2s ease;
        }

        .related-blog-card:hover .card-read-more-link {
            transform: translateX(4px);
        }
    </style>
@endsection
