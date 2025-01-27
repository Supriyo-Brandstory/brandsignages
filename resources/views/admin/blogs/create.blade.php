@extends('admin.layout.main')
@section('title', 'Create Blog | ')
@section('content')
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Blog</h5>
                        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf

                            <div class="row mb-3">
                                <label for="blogSubCategory" class="col-sm-2 col-form-label">Blog Subcategory</label>
                                <div class="col-sm-10">
                                    <select name="blog_sub_category_id" class="form-control" required>
                                        <option value="" selected disabled>Select Subcategory</option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('blog_sub_category_id')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" required>
                                    @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="content" class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <div id="editor" class="form-control" style="height: 200px;"></div>
                                    <input type="hidden" name="content" id="content">
                                    @error('content')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Upload Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="image" type="file" id="formFile" required>
                                    @error('image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="topic" class="col-sm-2 col-form-label">Topic</label>
                                <div class="col-sm-10">
                                    <input type="text" name="topic" class="form-control" required>
                                    @error('topic')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="readingTime" class="col-sm-2 col-form-label">Reading Time (mins)</label>
                                <div class="col-sm-10">
                                    <input type="number" name="reding_time" class="form-control" required>
                                    @error('reding_time')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Submit Form</button>
                                    <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

<script>
    // Initialize Quill editor
    var quill = new Quill('#editor', {
        theme: 'snow',
        placeholder: 'Enter content here...',
        modules: {
            toolbar: [
                [{ header: [1, 2, 3, 4, 5, 6, false] }],
                ['bold', 'italic', 'underline'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                ['link', 'image', 'code-block']

            ]
        }
    });

    // Sync Quill content to hidden input on form submit
    document.querySelector('form').onsubmit = function () {
        document.querySelector('#content').value = quill.root.innerHTML;
    };
</script>
@endsection
