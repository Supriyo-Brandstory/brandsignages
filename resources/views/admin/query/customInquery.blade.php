@extends('admin.layout.main')
@section('title', 'Contacts | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Contacts</h5>
                        
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Received At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($contacts->currentPage() - 1) * $contacts->perPage() + 1;
                                @endphp
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $contact->title }} </td>
                                         <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        
                                        <td>{{ \Carbon\Carbon::parse($contact->created_at)->isoFormat('Do MMMM YYYY, h:mm A') }}</td>
                                        <td>
                                            <a href="#" class="text-info view-contact" 
                                            data-id="{{ $contact->id }}"
                                            data-product="{{ $contact->title }}"
                                            data-height="{{ $contact->height }}"
                                            data-width="{{ $contact->width }}"
                                            data-name="{{ $contact->name }}"
                                            data-email="{{ $contact->email }}"
                                            data-phone="{{ $contact->phone }}"
                                            data-image="{{ $contact->image }}"
                                            data-received="{{ \Carbon\Carbon::parse($contact->created_at)->isoFormat('Do MMMM YYYY, h:mm A') }}"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#contactModal">
                                             <i class="ri-eye-fill"></i>
                                         </a>
                                            <form method="POST" action="{{ route('custom-inquiries.destroy', $contact->id) }}" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-icon show_confirm" data-toggle="tooltip" title="Delete">
                                                    <i class="ri-delete-bin-2-fill text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $contacts->links() }}
                        <!-- End Table -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Details Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Product:</strong> <span id="contact-product"></span></p>
                    <p><strong>Height(cm):</strong> <span id="contact-height"></span></p>
                    <p><strong>Width(cm):</strong> <span id="contact-width"></span></p>
                    <p><strong>Name:</strong> <span id="contact-name"></span></p>
                    <p><strong>Email:</strong> <span id="contact-email"></span></p>
                    <p><strong>Phone:</strong> <span id="contact-phone"></span></p>
                    <p><strong>Received At:</strong> <span id="contact-received"></span></p>
                    <div id="contact-image"></div>

                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS (Ensure it's included AFTER jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".view-contact").click(function () {
                let product = $(this).data("product");
                let height = $(this).data("height");
                let width = $(this).data("width");
                let name = $(this).data("name");
                let email = $(this).data("email");
                let phone = $(this).data("phone");
                let image = $(this).data("image");
                let received = $(this).data("received");

                $("#contact-product").text(product);
                $("#contact-height").text(height);
                $("#contact-width").text(width);
                $("#contact-name").text(name);
                $("#contact-email").text(email);
                $("#contact-phone").text(phone);
                
                $("#contact-received").text(received);
                if (image) {
                    $("#contact-image").html('<a target="_blank" href="' + "{{ asset('storage/') }}" + '/' + image + '"><img src="' + "{{ asset('storage/') }}" + '/' + image + '" alt="Contact Image" style="max-width: 100%; height: 200px; object-fit:cover;"> </a>');

            } else {
                $("#contact-image").html("No image available");
            }
            });
        });
        
    </script>
@endsection
