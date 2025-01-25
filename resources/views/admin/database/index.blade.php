@extends('admin.layout.main')

@section('content')

<div class="container mt-5">
    <h2>Export Database</h2>
    <p>Click the button below to export the entire database as CSV files.</p>

    <!-- Button to trigger export -->
    <a href="{{ route('export.database') }}" class="btn btn-primary">
        Export Database Zip
    </a>
    <a href="{{ route('export.csv') }}" class="btn btn-primary">
        Export Database CSV
    </a>
    <a href="{{ route('export.csv.all') }}" class="btn btn-primary">
        Export Database CSV (All in One)
    </a>
    <a href="{{route('export.mysql.all')}}"
    class="btn btn-primary">
        Export Database mysql (All in One)
    </a>
</div>

<div class="container mt-5">
    <h2>Download Database CSV Files</h2>
    <p>Click the links below to download the CSV files for each table.</p>

    <ul>
        @foreach ($csvFiles as $csvFile)
            <li>
                <a href="{{ asset('storage/database_exports/' . basename($csvFile)) }}" download>
                    Download {{ basename($csvFile) }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

@endsection
