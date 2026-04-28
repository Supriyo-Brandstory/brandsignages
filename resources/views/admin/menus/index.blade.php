@extends('admin.layout.main')
@section('title', 'Menus | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Menus</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('menus.create') }}">Add Menu</a>

                        <div class="dd" id="nestable" style="margin-top: 50px;">
                            <ol class="dd-list">
                                @foreach ($menus as $menu)
                                    @include('admin.menus.menu_item', ['menu' => $menu])
                                @endforeach
                            </ol>
                        </div>
                        @if ($menus->count() == 0)
                            <p class="text-center mt-3">No menus found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.js"></script>

    <style>
        .dd {
            max-width: 100%;
        }

        .dd-item {
            height: auto;
        }

        /* Ensure item height adjusts */
        .dd-handle {
            height: 50px;
            line-height: 30px;
            border: 1px solid #ccc;
            background: #fafafa;
            border-radius: 3px;
            margin-bottom: 5px;
            padding: 10px;
            cursor: move;
        }

        .dd-handle:hover {
            color: #2ea8e5;
            background: #fff;
        }

        .dd-actions {
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 999;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#nestable').nestable({
                maxDepth: 5
            }).on('change', function() {
                var menu = $('#nestable').nestable('serialize');
                $.ajax({
                    url: "{{ route('menus.updateOrder') }}",
                    type: "POST",
                    data: {
                        menu: menu,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log('Order updated');
                        // Optional: show a toast or notification
                    },
                    error: function(xhr) {
                        console.log('Error updating order');
                    }
                });
            });
        });
    </script>
@endsection
