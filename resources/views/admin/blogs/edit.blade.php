@extends('admin.layout.main')
@section('title', 'Edit Blog | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Blog</h5>
                        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row mb-3">
                                <label for="blogSubCategory" class="col-sm-2 col-form-label">Blog Subcategory</label>
                                <div class="col-sm-10">
                                    <select name="blog_sub_category_id" class="form-control" required>
                                        <option value="" selected disabled>Select Subcategory</option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}"
                                                {{ $blog->blog_sub_category_id == $subcategory->id ? 'selected' : '' }}>
                                                {{ $subcategory->name }}
                                            </option>
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
                                    <input type="text" name="title" class="form-control" value="{{ $blog->title }}"
                                        required>
                                    @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                                <div class="col-sm-10">
                                    <input type="text" name="slug" class="form-control" value="{{ $blog->slug }}"
                                        required>
                                    @error('slug')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="content" class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea name="content" class="form-control rich-text-editor" style="height: 400px;">{!! $blog->content !!}</textarea>
                                    @error('content')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Upload Featured Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="image" type="file" id="formFile">
                                    @if ($blog->image)
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" height="50px"
                                            width="50px" class="mt-2">
                                    @endif
                                    @error('image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gallery_images" class="col-sm-2 col-form-label">Upload Gallery Images
                                    (Optional)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="gallery_images[]" type="file" id="gallery_images"
                                        multiple>
                                    @if ($blog->gallery_images)
                                        <div class="mt-2 d-flex flex-wrap gap-2">
                                            @foreach ($blog->gallery_images as $index => $img)
                                                <div class="gallery-image-wrapper position-relative"
                                                    id="gallery-image-{{ $index }}">
                                                    <img src="{{ asset('storage/' . $img) }}" alt="Gallery Image"
                                                        height="80px" width="80px" class="rounded border">
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm position-absolute top-0 end-0 delete-gallery-img"
                                                        data-id="{{ $blog->id }}" data-index="{{ $index }}"
                                                        style="padding: 0px 5px; line-height: 1.2; font-size: 14px; border-radius: 0 4px 0 4px;">&times;</button>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    @error('gallery_images.*')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="topic" class="col-sm-2 col-form-label">Topic</label>
                                <div class="col-sm-10">
                                    <input type="text" name="topic" class="form-control" value="{{ $blog->topic }}"
                                        required>
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
                                    <input type="number" name="reding_time" class="form-control"
                                        value="{{ $blog->reding_time }}" required>
                                    @error('reding_time')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Update
                                        Blog</button>
                                    <a href="{{ route('blogs.index') }}"
                                        class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        if (typeof tinymce !== 'undefined') {
            tinymce.init({
                selector: 'textarea.rich-text-editor',
                height: 400,
                plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
                toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl | code',
                toolbar_sticky: true,
                image_advtab: true,
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        }

        document.querySelectorAll('.delete-gallery-img').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                if (!confirm('Are you sure you want to delete this image?')) return;

                const id = this.getAttribute('data-id');
                const index = this.getAttribute('data-index');
                const wrapper = document.getElementById(`gallery-image-${index}`);

                fetch(`/admin/blogs/${id}/gallery/${index}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            wrapper.remove();
                        } else {
                            alert('Could not delete image: ' + (data.message || 'Unknown error'));
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
@endsection
