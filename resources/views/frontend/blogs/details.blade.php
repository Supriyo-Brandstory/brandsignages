@extends('frontend.layout.appLayout')
@section('content')
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
    scroll-margin-top: 80px; /* Adjust the scroll position */
}
@media (max-width: 767px) {
    .bredcum {
        display: block;
        width: 93%;
    color: #e43d12;
    text-decoration: none;
    word-wrap: break-word; /* Allows text to wrap onto the next line */
    word-break: break-word; /* Breaks long words */
    overflow-wrap: break-word; /* Ensures long words wrap properly */
}

    .hero-title {
        margin-bottom: 0px !important;
        margin-top: 18px;
    }
}
section.blog-section {
    padding: 35px 41px;
}
h1.hero-title.mb-1 {
    margin-top: 15px;
}

    </style>
<section class="blog-section">
    <div class="row">
        <div class="bredcum">
            <a href="{{route('blogsVaritaion', $blog->subCategory->category->slug)}}" style="color: #e43d12;">{{$blog->category_name}}</a>
            <span class="divider">/</span>
            <a href="{{route('blogsVaritaion', $blog->subCategory->slug)}}" style="color: #e43d12;">{{$blog->sub_category_name}}</a>
            <span class="divider">/</span>
            <a>{{$blog->title}}</a>
        </div>
    </div>
    <h1 class="hero-title mb-1" style="text-align: left;">{{$blog->title}}</h1>
    <p class="card-text" style="text-align: left;">By <a href="{{route('bala_kumaranan')}}" style="color: #e43d12;">Bala Kumaran</a> | {{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }} | {{$blog->reding_time}} min read</p>
    <img src="{{asset('storage/'.$blog->image)}}" alt="{{$blog->title}}" class="blogimg  d-block d-lg-none">

    <div class="row main blog">






  <!-- Blog Content Column -->
  <div class="col-lg-8 order-last order-lg-first">
   
    <img src="{{asset('storage/'.$blog->image)}}" alt="{{$blog->title}}" class="blogimg d-none d-lg-block">
    
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
                $blog->content
            );
            echo $content;
        @endphp
    </article>
</div>

        <!-- Table of Contents Column -->
        <div class="col-lg-4 order-first order-lg-last">
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
    document.addEventListener("DOMContentLoaded", function () {
        const tocLinks = document.querySelectorAll("#toc a");
        tocLinks.forEach(link => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                const targetId = this.getAttribute("href").substring(1); // Get the ID from the href
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    // Scroll to the target element with an offset for the header
                    window.scrollTo({
                        top: targetElement.offsetTop - 80, // 20px padding at the top
                        behavior: "smooth" // Smooth scrolling
                    });
                }
            });
        });
    });
</script>


@endsection