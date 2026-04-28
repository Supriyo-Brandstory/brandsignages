@extends('admin.layout.main')

@section('title', 'Database Backups')

@section('content')
<div class="pagetitle d-flex justify-content-between align-items-center">
    <div>
        <h1>Database Backups</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Backups</li>
            </ol>
        </nav>
    </div>
    <div>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#importModal">
            <i class="bi bi-upload"></i> Import Backup
        </button>
        <a href="{{ route('admin.backups.create') }}" class="btn btn-primary">
            <i class="bi bi-play-fill"></i> Run Manual Backup
        </a>
    </div>
</div>

<section class="section">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Backup Email Settings</h5>
                    <form action="{{ route('admin.backups.settings') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="backup_emails" class="form-label">Email Addresses (Comma separated)</label>
                            <textarea class="form-control" name="backup_emails" id="backup_emails" rows="4" placeholder="e.g. admin@example.com, dev@example.com">{{ $backupEmails }}</textarea>
                        </div>
                        <p class="text-muted small">Backup files will be sent to these addresses automatically at the end of the day if changes occur.</p>
                        <button type="submit" class="btn btn-primary w-100">Save Settings</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Backup History</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date & Time</th>
                                    <th>Filename</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($backups as $backup)
                                    <tr>
                                        <td>{{ $backup->created_at->format('M d, Y H:i') }}</td>
                                        <td><span class="text-danger">{{ $backup->filename }}</span></td>
                                        <td><span class="badge bg-success">Success</span></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.backups.download', $backup->id) }}" class="btn btn-outline-primary btn-sm" title="Download">
                                                    <i class="bi bi-download"></i>
                                                </a>
                                                <a href="{{ route('admin.backups.email', $backup->id) }}" class="btn btn-outline-info btn-sm" title="Send Email">
                                                    <i class="bi bi-envelope"></i>
                                                </a>
                                                <form action="{{ route('admin.backups.destroy', $backup->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm show_confirm" title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4 text-muted">No backups found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Import Modal -->
<div class="modal fade" id="importModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.backups.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import Backup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> Importing a backup will overwrite your current database and storage files. Please ensure you have a recent backup before proceeding.
                    </div>
                    <div class="mb-3">
                        <label for="backup_file" class="form-label">Select Backup Zip File</label>
                        <input class="form-control" type="file" id="backup_file" name="backup_file" accept=".zip" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Import & Restore</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
