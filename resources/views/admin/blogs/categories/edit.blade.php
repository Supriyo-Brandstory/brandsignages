@extends('admin.layout.main')
@section('title', 'Edit Category | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Edit Category</h5>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('categories.update', $category->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="category_name" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="category_name" name="category_name"
                                    value="{{ old('category_name', $category->name) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="category_slug" class="form-label">Category Slug</label>
                                <input type="text" class="form-control" id="category_slug" name="category_slug"
                                    value="{{ old('category_slug', $category->slug) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="category_description" class="form-label">Category Description</label>
                                <textarea class="form-control" id="category_description" name="category_description">{{ old('category_description', $category->description) }}</textarea>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="is_subcategory" name="is_subcategory" onclick="return false;"
                                    {{ old('is_subcategory', $category->blog_category_id ? true : false) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_subcategory">Is this a Subcategory?</label>
                            </div>
                        

                            <div id="parent_category_div" class="mb-3" style="display: {{ old('is_subcategory', $category->blog_category_id ? true : false) ? 'block' : 'none' }};">
                                <label for="parent_category_id" class="form-label">Select Parent Category</label>
                                <select class="form-control" id="parent_category_id" name="parent_category_id" 
                                    {{ old('is_subcategory', $category->blog_category_id ? true : false) ? 'required' : '' }}>
                                    <option value="">Select a Parent Category</option>
                                    @foreach ($categories as $parentCategory)
                                        <option value="{{ $parentCategory->id }}" 
                                            {{ old('parent_category_id', $category->blog_category_id) == $parentCategory->id ? 'selected' : '' }}>
                                            {{ $parentCategory->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Show/Hide Parent Category field based on the "Is Subcategory" checkbox
        document.getElementById('is_subcategory').addEventListener('change', function () {
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
    </script>
@endsection
