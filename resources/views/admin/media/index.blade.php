@extends('admin.layout.main')

@section('title', 'Media Manager')

@section('content')
@if(isset($pickerMode) && $pickerMode)
<style>
    #header, #sidebar, .header, .sidebar { display: none !important; }
    #main { margin-left: 0 !important; margin-top: 0 !important; padding-top: 20px !important; }
    .footer { display: none !important; }
</style>
@endif

<div class="pagetitle">
    <h1>Media Manager</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.media.index') }}">Media</a></li>
            @foreach($breadcrumb as $crumb)
                <li class="breadcrumb-item"><a href="{{ route('admin.media.index', ['path' => $crumb['path']]) }}">{{ $crumb['name'] }}</a></li>
            @endforeach
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body pt-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="actions">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                <i class="bi bi-upload"></i> Upload Files
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#folderModal">
                                <i class="bi bi-folder-plus"></i> New Folder
                            </button>
                        </div>
                        <div>
                            @if($path)
                                <a href="{{ route('admin.media.index', ['path' => dirname($path) == '.' ? '' : dirname($path)]) }}" class="btn btn-secondary btn-sm">
                                    <i class="bi bi-arrow-left"></i> Back
                                </a>
                            @endif
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success mt-2" id="flash-message">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger mt-2" id="flash-message">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3 mt-2">
                        @forelse($items as $item)
                            <div class="col">
                                <div class="card h-100 text-center border-0 shadow-sm item-card">
                                    <div class="card-body p-2 d-flex flex-column align-items-center justify-content-center">
                                        @if($item['type'] == 'folder')
                                            <a href="{{ $item['url'] }}" class="text-decoration-none text-dark d-block mb-2 mt-2">
                                                <i class="bi bi-folder-fill text-warning" style="font-size: 3rem;"></i>
                                            </a>
                                        @else
                                            <div class="mb-2 mt-2 position-relative folder-item">
                                                @if($item['is_image'])
                                                    <img src="{{ $item['url'] }}" alt="{{ $item['name'] }}" class="img-fluid rounded" style="height: 60px; object-fit: cover;">
                                                @else
                                                    <i class="bi bi-file-earmark-text text-primary" style="font-size: 3rem;"></i>
                                                @endif
                                            </div>
                                        @endif
                                        <p class="small text-truncate w-100 mb-1" title="{{ $item['name'] }}">{{ $item['name'] }}</p>
                                        @if($item['type'] == 'file')
                                            <span class="text-muted" style="font-size: 0.7rem;">{{ $item['size'] }}</span>
                                        @endif
                                        
                                        <div class="mt-2 d-flex gap-1">
                                            @if(isset($pickerMode) && $pickerMode && $item['type'] == 'file' && $item['is_image'])
                                                <button type="button" class="btn btn-sm btn-success p-1 select-media" data-url="{{ $item['url'] }}" data-name="{{ $item['name'] }}" title="Select Image">
                                                    <i class="bi bi-check-circle"></i> Select
                                                </button>
                                            @else
                                                @if($item['type'] == 'file')
                                                    <button type="button" class="btn btn-sm btn-outline-info p-1 copy-url" data-url="{{ $item['url'] }}" title="Copy URL">
                                                        <i class="bi bi-link-45deg"></i>
                                                    </button>
                                                @endif
                                                <form action="{{ route('admin.media.delete') }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="path" value="{{ $item['path'] }}">
                                                    <input type="hidden" name="type" value="{{ $item['type'] }}">
                                                    <button type="submit" class="btn btn-sm btn-outline-danger p-1 show_confirm" title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5">
                                <i class="bi bi-folder-x text-muted" style="font-size: 3rem;"></i>
                                <p class="mt-2">No items found.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upload Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.media.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="path" value="{{ $path }}">
                <div class="modal-header">
                    <h5 class="modal-title">Upload Files</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="files" class="form-label">Select Files</label>
                        <input type="file" name="files[]" id="files" class="form-control" multiple required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Folder Modal -->
<div class="modal fade" id="folderModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.media.folder') }}" method="POST">
                @csrf
                <input type="hidden" name="path" value="{{ $path }}">
                <div class="modal-header">
                    <h5 class="modal-title">New Folder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Folder Name</label>
                        <input type="text" name="name" id="name" class="form-control" required placeholder="Enter folder name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .item-card {
        transition: transform 0.2s;
    }
    .item-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1) !important;
    }
    .folder-item i {
        line-height: 1;
    }
</style>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Picker mode selection
        const selectButtons = document.querySelectorAll('.select-media');
        selectButtons.forEach(button => {
            button.addEventListener('click', function() {
                const url = this.getAttribute('data-url');
                const name = this.getAttribute('data-name');
                const fullUrl = url.startsWith('http') ? url : window.location.origin + url;
                
                if (window.opener) {
                    window.opener.postMessage({
                        type: 'media_manager_select',
                        url: fullUrl,
                        name: name
                    }, '*');
                    window.close();
                }
            });
        });

        // Copy URL functionality
        const copyButtons = document.querySelectorAll('.copy-url');
        copyButtons.forEach(button => {
            button.addEventListener('click', function() {
                const url = this.getAttribute('data-url');
                const fullUrl = url.startsWith('http') ? url : window.location.origin + url;
                
                // Fallback for insecure contexts (like http://*.test) where navigator.clipboard is missing
                if (navigator.clipboard && window.isSecureContext) {
                    navigator.clipboard.writeText(fullUrl).then(() => {
                        swal("Copied!", "URL has been copied to clipboard", "success");
                    }).catch(err => {
                        console.error('Could not copy text: ', err);
                        swal("Error", "Failed to copy URL", "error");
                    });
                } else {
                    // Fallback using textarea
                    let textArea = document.createElement("textarea");
                    textArea.value = fullUrl;
                    textArea.style.position = "fixed";
                    textArea.style.left = "-9999px";
                    textArea.style.top = "0";
                    document.body.appendChild(textArea);
                    textArea.focus();
                    textArea.select();
                    try {
                        document.execCommand('copy');
                        swal("Copied!", "URL has been copied to clipboard", "success");
                    } catch (err) {
                        console.error('Fallback: Oops, unable to copy', err);
                        swal("Error", "Failed to copy URL", "error");
                    }
                    document.body.removeChild(textArea);
                }
            });
        });
    });
</script>
@endsection
