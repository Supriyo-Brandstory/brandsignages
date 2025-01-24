@extends('admin.layout.main')
@section('title', 'Categories | ')
@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">All Categories</h5>
                    @if (Session::has('msg'))
                        <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
                    <a class="btn btn-sm btn-outline-success float-end" href="{{ route('categories.create') }}">Add Category</a>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Subcategories</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($categories->currentPage() - 1) * $categories->perPage() + 1;
                                @endphp
                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <ul class="list-group sortable-category" id="category-{{ $category->id }}">
                                                @if($category->subCategories && $category->subCategories->isNotEmpty())
                                                    @foreach ($category->subCategories as $subCategory)
                                                        <li class="my-2 list-group-item d-flex justify-content-between align-items-center"
                                                            data-id="{{ $subCategory->id }}">
                                                            <div class="col-8">
                                                                {{ $subCategory->name }}
                                                            </div>
                                                            <div class="col-4 d-flex justify-content-between align-items-center">
                                                                <span class="badge bg-primary rounded-pill">Drag</span>
                                                                <a href="{{ route('categories.edit', ['id' => $subCategory->id, 'type' => 1]) }}">
                                                                    <i class="ri-pencil-fill"></i>
                                                                </a>
                                                                <form method="POST" action="{{ route('subcategories.destroy', $subCategory->id) }}" class="d-inline-block">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="delete-icon show_confirm" data-toggle="tooltip" title="Delete">
                                                                        <i class="ri-delete-bin-2-fill"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li class="bg-warning text-white my-2 list-group-item d-flex justify-content-between align-items-center">
                                                        No subcategories available.
                                                    </li>
                                                @endif
                                            </ul>
                                            
                                        </td>
                                        <td>
                                            <a href="{{ route('categories.edit', ['id' => $category->id, 'type' => 0]) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('categories.destroy', $category->id) }}" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-icon show_confirm" data-toggle="tooltip" title='Delete'>
                                                    <i class="ri-delete-bin-2-fill"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
<style>
    .list-group-item+.list-group-item {
    border-top-width: 1px;
    border-width: 1;
}
</style>
    {{-- Drag-and-drop script --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    

    <script>
        $(function() {
            // Enable drag-and-drop for all sortable-category lists
            $(".sortable-category").sortable({
                connectWith: ".list-group", // Allow connecting lists for drag-and-drop
                placeholder: "ui-state-highlight",
                update: function(event, ui) {
                    let subcategoryIds = $(this).sortable('toArray', { attribute: 'data-id' });
                    let categoryId = $(this).attr('id').split('-')[1]; // Get the category ID
    
                    // Send the updated order to the backend
                    if (subcategoryIds.length > 0) { // Ensure there are subcategories to update
                        axios.post('{{ route('categories.updateOrder') }}', {
                            category_id: categoryId,
                            order: subcategoryIds
                        }).then(response => {
                            if (response.data.success) {
                                // Show success message only once
                                toastr.clear(); // Clear previous messages
                                toastr.success(response.data.message);
                            } else {
                                toastr.clear();
                                toastr.error('Failed to update the order.');
                            }
                        }).catch(error => {
                            console.error(error);
                            toastr.clear();
                            toastr.error('Something went wrong while updating the order.');
                        });
                    }
                }
            }).disableSelection();
    
            // Display flash messages with a timeout
           
        });
    </script>
    

</section>
@endsection
