

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container mt-4 mb-5  ">
    <h2 class="process-title mb-0">Order Custom Signages</h2>
    <p class="card-text text-center mb-4 mt-3">Order custom signages tailored to your needs at Brand Signages. You can upload your design or hire our experts for a professional touch.</p>
    <form id="mainForm">
        <div id="successMessage" class="alert alert-success mt-3 text-center" style="display: none;">
           Your requirement submitted successfully! We will contact you soon!
        </div>
        @csrf
        <div class="row g-3">
            <div class="col-md-3">
                <select id="title" name="title" class="form-select" required>
                    <option value="">Choose Your Option</option>
                    <option value="Acrylic Signage">Acrylic Signage</option>
                    <option value="Digital Signage">Digital Signage</option>
                    <option value="Neon Signage">Neon Signage</option>
                    <option value="LED Signage">LED Signage</option>
                    <option value="Steel Signage">Steel Signage</option>


                </select>
                {{-- <div class="invalid-feedback">Title is required.</div> --}}
            </div>

            <div class="col-md-3">
                <input type="number" id="height" name="height" class="form-control mb-0" placeholder="Height (cm)" required>
                {{-- <div class="invalid-feedback">Height is required.</div> --}}
            </div>

            <div class="col-md-3">
                <input type="number" id="width" name="width" class="form-control mb-0" placeholder="Width (cm)" required>
                {{-- <div class="invalid-feedback">Width is required.</div> --}}
            </div>

            <div class="col-md-3 d-flex align-items-start">
                <button type="button" id="getStarted" class="custom-btn w-100 mt-0">Get Started</button>
            </div>
        </div>
    </form>
</div>

<!-- Success Message Alert -->


<!-- Popup Modal -->
<div id="popupModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Custom Signages</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="popupForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="modalTitle" name="title">
                    <input type="hidden" id="modalHeight" name="height">
                    <input type="hidden" id="modalWidth" name="width">

                    <label class="form-label">Choose Type</label>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="typeUpload" name="type" value="upload" required>
                            <label class="form-check-label" for="typeUpload">Upload Design</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="typeExpertise" name="type" value="expertise" required>
                            <label class="form-check-label" for="typeExpertise">Get Expert Help</label>
                        </div>
                    </div>

                    <div id="imageField" class="mt-3" style="display:none;">
                        <label for="image" class="form-label">Upload Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>

                    <label for="name" class="form-label mt-3">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                    <div class="invalid-feedback">Name is required.</div>

                    <label for="email" class="form-label mt-2">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                    <div class="invalid-feedback">Valid email is required.</div>

                    <label for="phone" class="form-label mt-2">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                    <div class="invalid-feedback">Phone is required.</div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var modal = new bootstrap.Modal(document.getElementById('popupModal'));

        $('#getStarted').click(function() {
            var isValid = true;

            // Validate all input fields
            $('#mainForm .form-control, #mainForm .form-select').each(function() {
                if (!$(this).val()) {
                    $(this).addClass('is-invalid');
                    $(this).next('.invalid-feedback').show();
                    isValid = false;
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).next('.invalid-feedback').hide();
                }
            });

            // If validation fails, don't show the modal
            if (!isValid) {
                return;
            }

            // Set values in the modal
            $('#modalTitle').val($('#title').val());
            $('#modalHeight').val($('#height').val());
            $('#modalWidth').val($('#width').val());

            // Show the modal
            modal.show();
        });

        // Remove error highlight when input is changed
        $('#mainForm .form-control, #mainForm .form-select').on('input change', function() {
            if ($(this).val()) {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').hide();
            }
        });

        // Show/Hide upload field based on type selection
        $('input[name="type"]').change(function() {
            if ($(this).val() === 'upload') {
                $('#imageField').show();
            } else {
                $('#imageField').hide();
            }
        });

        $('#popupForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('custom-inquiry.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.message) {
                        modal.hide();
                        $('#successMessage').fadeIn().delay(3000).fadeOut();
                        $('#mainForm')[0].reset();
                        $('#popupForm')[0].reset();
                        $('.form-control, .form-select').removeClass('is-invalid'); // Reset validation styles
                    }
                },
                error: function(xhr) {
                    alert('Something went wrong! Please try again.');
                }
            });
        });
    });
</script>