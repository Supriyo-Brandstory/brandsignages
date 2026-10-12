@extends('admin.layout.main')
@section('title', 'Custom Pages | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Custom Pages</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        @if (Session::has('error'))
                            <p id="flash-error" class="alert alert-danger">{{ Session::get('error') }}</p>
                        @endif
                        <div class="mb-3 d-flex flex-wrap align-items-center gap-2">
                            <a class="btn btn-sm btn-outline-success" href="{{ route('custom-pages.create') }}">
                                <i class="ri-add-line"></i> Add Custom Page
                            </a>
                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#bulkUploadModal">
                                <i class="ri-upload-cloud-2-line"></i> Bulk Upload Pages
                            </button>
                            <a class="btn btn-sm btn-outline-secondary" href="{{ route('custom-pages.sample-file') }}">
                                <i class="ri-file-zip-line"></i> Download Sample ZIP (Pages + Images)
                            </a>
                            <a class="btn btn-sm btn-outline-dark ms-auto" href="{{ route('custom-pages.manage-css') }}">
                                <i class="ri-css3-line"></i> Manage CSS
                            </a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">CSS</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($pages->currentPage() - 1) * $pages->perPage() + 1;
                                @endphp
                                @foreach ($pages as $page)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $page->title }}</td>
                                        <td>{{ $page->slug }}</td>
                                        <td>{{ $page->custom_css ?? 'None' }}</td>
                                        <td>
                                            <a href="{{ route('custom_page.show', $page->slug) }}" target="_blank" class="me-2"><i class="ri-eye-fill"></i></a>
                                            <a href="{{ route('custom-pages.edit', $page->id) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('custom-pages.destroy', $page->id) }}" class="d-inline-block pl-2">
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
                        {{ $pages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bulk Upload Modal -->
    <div class="modal fade" id="bulkUploadModal" tabindex="-1" aria-labelledby="bulkUploadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('custom-pages.bulk-upload') }}" method="POST" enctype="multipart/form-data" id="bulk-upload-form">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="bulkUploadModalLabel">
                            <i class="ri-upload-cloud-2-line text-primary me-2"></i>Bulk Upload Custom Pages
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Instructions & Notice -->
                        <div class="alert alert-warning mb-3">
                            <h6 class="fw-bold mb-1"><i class="ri-alert-line me-1"></i> Important Guidelines (No Header & No Footer)</h6>
                            <ul class="mb-2 ps-3 small">
                                <li>Custom pages are automatically rendered inside the main website layout (which already includes the <strong>Header</strong> and <strong>Footer</strong>).</li>
                                <li><strong>Do NOT include</strong> <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;html&gt;</code>, or <code>&lt;body&gt;</code> in your files. Only include the main page body content/sections.</li>
                                <li><strong>Image Folder Support:</strong> You can upload a <code>.zip</code> containing your page files and an image folder (e.g., <code>images/</code>). Images will be automatically extracted to the website images directory and relative image paths (e.g. <code>images/banner.webp</code>) will be linked automatically.</li>
                                <li>If your files happen to include layout wrappers or <code>@@extends</code>, the uploader will automatically strip them out.</li>
                                <li>Title and Slug are automatically detected from top comments (e.g. <code>&lt;!-- Title: ... --&gt;</code>, <code>&lt;!-- Slug: ... --&gt;</code>), <code>&lt;h1&gt;</code>, or the filename itself (e.g., <code>surat_index.php</code> &rarr; slug: <code>surat</code>).</li>
                            </ul>
                            <a href="{{ route('custom-pages.sample-file') }}" class="btn btn-sm btn-outline-dark">
                                <i class="ri-file-zip-line"></i> Download Sample ZIP Template (.zip)
                            </a>
                        </div>

                        <!-- File Input -->
                        <div class="mb-3">
                            <label for="bulk_files" class="form-label fw-bold">Select Page Files & Images <span class="text-danger">*</span></label>
                            <input type="file" name="files[]" id="bulk_files" class="form-control" multiple accept=".php,.html,.htm,.blade.php,.zip,.csv,.jpg,.jpeg,.png,.webp,.svg,.gif,.avif" required>
                            <div class="form-text">
                                You can select multiple <code>.php</code> / <code>.html</code> files and images, a <code>.zip</code> archive containing pages and an image folder, or a <code>.csv</code> file.
                            </div>
                        </div>

                        <!-- Default CSS Selection -->
                        <div class="mb-3">
                            <label for="default_css" class="form-label fw-bold">Default CSS File (Optional)</label>
                            <select name="default_css" id="default_css" class="form-select">
                                <option value="">None (or auto-detect from file)</option>
                                @if(isset($cssFiles) && count($cssFiles) > 0)
                                    @foreach($cssFiles as $cssFile)
                                        <option value="{{ $cssFile }}">{{ $cssFile }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <div class="form-text">
                                Applied if a page doesn't specify its own custom CSS in <code>&lt;!-- CSS: ... --&gt;</code>.
                            </div>
                        </div>

                        <!-- Overwrite Existing Checkbox -->
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="overwrite" value="1" id="overwritePages" checked>
                            <label class="form-check-label" for="overwritePages">
                                <strong>Overwrite existing pages</strong> if a page with the same slug already exists
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="btn-submit-bulk">
                            <i class="ri-upload-2-line me-1"></i> Start Bulk Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
