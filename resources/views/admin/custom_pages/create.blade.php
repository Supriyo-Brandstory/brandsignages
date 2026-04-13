@extends('admin.layout.main')
@section('title', 'Create Custom Page | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Custom Page</h5>
                        <form action="{{ route('custom-pages.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" required onkeyup="generateSlug(this.value)">
                                </div>
                                <div class="col-md-6">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" name="slug" id="slug" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">HTML Body</label>
                                <textarea name="content" id="content" class="form-control" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="custom_css" class="form-label">Choose CSS</label>
                                <div class="input-group">
                                    <select name="custom_css" id="custom_css" class="form-control">
                                        <option value="">Select CSS</option>
                                        @foreach($cssFiles as $file)
                                            <option value="{{ $file }}">{{ $file }}</option>
                                        @endforeach
                                    </select>
                                    <a href="{{ route('custom-pages.manage-css') }}" class="btn btn-outline-secondary">Manage CSS</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Page</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function generateSlug(title) {
            const slug = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            document.getElementById('slug').value = slug;
        }
    </script>
@endsection
