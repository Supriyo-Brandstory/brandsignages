@extends('frontend.layout.appLayout')

@section('content')
    @if($page->custom_css)
        <link rel="stylesheet" href="{{ asset('frontend/customstyle/' . $page->custom_css) }}">
    @endif

    <div class="custom-page-content">
        {!! $page->content !!}
    </div>
@endsection
