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
    padding: 20px 49px;
    
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
    </style>
<section class="blog-section">
    <div class="row">
        <div class="bredcum">
            <a href="{{route('blogsVaritaion', $blog->subCategory->category->slug)}}" style="color: #e43d12;">{{$blog->category_name}}</a>
           
            <span class="divider">/</span><a href="{{route('blogsVaritaion', $blog->subCategory->slug)}}" style="color: #e43d12;">{{$blog->sub_category_name}}</a>

            <span class="divider">/</span><a>{{$blog->title}}</a>

        </div>
    </div>
    <div class="main blog ">
        <div class="col-lg-12">
            <h1 class="hero-title mb-1" style="text-align: left;">{{$blog->title}}</h1>
            <p class="card-text" style="text-align: left;">By Bala Kumaran Sir UPDATED: {{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }} | {{$blog->reding_time}} min read</p>
            <img src="{{asset('storage/'.$blog->image)}}" alt="{{$blog->title}}" class="blogimg">
        </div>

        <article class="blog-content">
            {!! $blog->content !!}
        </article>
    </div>
</section>
       

@endsection