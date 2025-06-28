
<div class="container order-custom-signage-form">
    <div class="row ">
        <div class="col-md-6 col-12 ">
            <img src="{{ asset('frontend/Images/home/inquery.webp') }}" class="img-fluid custom-enquery-img" alt="Custom Signages"
                >
        </div>
        <div class="col-md-6 col-12 ">
            <h2>Order Custom Signages</h2>
            <p class="text-muted">At Brand Signages we provide high-quality custom sign board design services customized
                to your specific needs.You can upload your preferred design or talk to our experts for an eye-catching
                and professional touch.</p>
            <form id="mainForm">
                <div id="successMessage" class="alert alert-success mt-3 text-center" style="display: none;">
                    Your requirement submitted successfully! We will contact you soon!
                </div>
                @csrf
                <div class="row g-3">
                    <div class="col-md-12">
                        <select id="title" name="title" class="form-select fromfiled" required>
                            <option value="">Choose Your Option</option>
                            <option value="Acrylic Signage">Acrylic Signage</option>
                            <option value="Digital Signage">Digital Signage</option>
                            <option value="Neon Signage">Neon Signage</option>
                            <option value="LED Signage">LED Signage</option>
                            <option value="Steel Signage">Steel Signage</option>


                        </select>
                        {{-- <div class="invalid-feedback">Title is required.</div> --}}
                    </div>

                    <div class="col-md-12">
                        <input type="number" id="height" name="height" class="form-control mb-0 fromfiled"
                            placeholder="Height (cm)" required>
                        {{-- <div class="invalid-feedback">Height is required.</div> --}}
                    </div>

                    <div class="col-md-12">
                        <input type="number" id="width" name="width" class="form-control mb-0 fromfiled" placeholder="Width (cm)"
                            required>
                        {{-- <div class="invalid-feedback">Width is required.</div> --}}
                    </div>

                    <div class="col-md-12 d-flex mobile align-items-start ">
                        <div class="">
                            <button type="button" id="getStarted" class="custom-btn w-100 mt-0">Get Started</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

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
                            <input class="form-check-input" type="radio" id="typeUpload" name="type" value="upload"
                                required>
                            <label class="form-check-label" for="typeUpload">Upload Design</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="typeExpertise" name="type"
                                value="expertise" required>
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

