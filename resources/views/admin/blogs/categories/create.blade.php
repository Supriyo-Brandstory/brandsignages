@extends('admin.layout.main')
@section('title', 'Create Category | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Create New Category</h5>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('categories.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="category_name" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="category_name" name="category_name"
                                    value="{{ old('category_name') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="category_description" class="form-label">Category Description</label>
                                <textarea class="form-control rich-text-editor" id="category_description" name="category_description"
                                    style="height: 300px;">{{ old('category_description') }}</textarea>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="is_subcategory" name="is_subcategory"
                                    {{ old('is_subcategory') ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_subcategory">Is this a Subcategory?</label>
                            </div>

                            <div id="parent_category_div" class="mb-3"
                                style="display: {{ old('is_subcategory') ? 'block' : 'none' }};">
                                <label for="parent_category_id" class="form-label">Select Parent Category</label>
                                <select class="form-control" id="parent_category_id" name="parent_category_id"
                                    {{ old('is_subcategory') ? 'required' : '' }}>
                                    <option value="">Select a Parent Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('parent_category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Category</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        // Show/Hide Parent Category field based on the "Is Subcategory" checkbox
        document.getElementById('is_subcategory').addEventListener('change', function() {
            var parentCategoryDiv = document.getElementById('parent_category_div');
            var parentCategorySelect = document.getElementById('parent_category_id');
            if (this.checked) {
                parentCategoryDiv.style.display = 'block';
                parentCategorySelect.setAttribute('required', 'required');
            } else {
                parentCategoryDiv.style.display = 'none';
                parentCategorySelect.removeAttribute('required');
            }
        });

        if (typeof tinymce !== 'undefined') {
            tinymce.init({
                selector: 'textarea.rich-text-editor',
                height: 300,
                plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
                toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl | code',
                toolbar_sticky: true,
                image_advtab: true,
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        }
    </script>
@endsection
