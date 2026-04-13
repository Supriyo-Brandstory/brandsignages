@extends('admin.layout.main')
@section('title', 'Edit Custom Page | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Custom Page</h5>
                        <form action="{{ route('custom-pages.update', $page->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ $page->title }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" name="slug" id="slug" class="form-control" value="{{ $page->slug }}" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">HTML Body</label>
                                <textarea name="content" id="content" class="form-control" rows="10">{{ $page->content }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="custom_css" class="form-label">Choose CSS</label>
                                <div class="input-group">
                                    <select name="custom_css" id="custom_css" class="form-control">
                                        <option value="">Select CSS</option>
                                        @foreach($cssFiles as $file)
                                            <option value="{{ $file }}" {{ $page->custom_css == $file ? 'selected' : '' }}>{{ $file }}</option>
                                        @endforeach
                                    </select>
                                    <a href="{{ route('custom-pages.manage-css') }}" class="btn btn-outline-secondary">Manage CSS</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Page</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
