@extends('admin.layout.main')
@section('title', 'Dashboard | ')
@section('content')
    <section class="section dashboard">

        <div class="row">

          
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">

                   <div class="card-body">
                        <h5 class="card-title">Total Leads</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="ri-group-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>Enquiry</h6><span class="h3">{{ $enquery }}</span>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">

                   <div class="card-body">
                        <h5 class="card-title">Total Articals</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="ri-book-2-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>Blogs</h6><span class="h3">{{ $blog }}</span>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">

                   <div class="card-body">
                        <h5 class="card-title">Total Pages</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="ri-file-text-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>SEO</h6><span class="h3">{{ $seo }}</span>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
