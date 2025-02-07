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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Message</th>
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
                                        <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone_number }}</td>
                                        <td>{{ Str::limit($contact->message, 50) }}</td>
                                        <td>{{ \Carbon\Carbon::parse($contact->created_at)->isoFormat('Do MMMM YYYY, h:mm A') }}</td>
                                        <td>
                                            <a href="#" class="text-info view-contact" 
                                            data-id="{{ $contact->id }}"
                                            data-name="{{ $contact->first_name }} {{ $contact->last_name }}"
                                            data-email="{{ $contact->email }}"
                                            data-phone="{{ $contact->phone_number }}"
                                            data-message="{{ $contact->message }}"
                                            data-received="{{ \Carbon\Carbon::parse($contact->created_at)->isoFormat('Do MMMM YYYY, h:mm A') }}"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#contactModal">
                                             <i class="ri-eye-fill"></i>
                                         </a>
                                            <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" class="d-inline-block">
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
                    <p><strong>Name:</strong> <span id="contact-name"></span></p>
                    <p><strong>Email:</strong> <span id="contact-email"></span></p>
                    <p><strong>Phone:</strong> <span id="contact-phone"></span></p>
                    <p><strong>Message:</strong> <span id="contact-message"></span></p>
                    <p><strong>Received At:</strong> <span id="contact-received"></span></p>
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
                let name = $(this).data("name");
                let email = $(this).data("email");
                let phone = $(this).data("phone");
                let message = $(this).data("message");
                let received = $(this).data("received");

                $("#contact-name").text(name);
                $("#contact-email").text(email);
                $("#contact-phone").text(phone);
                $("#contact-message").text(message);
                $("#contact-received").text(received);
            });
        });
    </script>
@endsection
