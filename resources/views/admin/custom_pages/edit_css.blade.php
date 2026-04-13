@extends('admin.layout.main')
@section('title', 'Edit CSS | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit CSS: {{ $filename }}</h5>
                        <form action="{{ route('custom-pages.update-css', $filename) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <textarea name="content" id="content" class="form-control" rows="20" style="font-family: monospace;">{{ $content }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update CSS</button>
                            <a href="{{ route('custom-pages.manage-css') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
