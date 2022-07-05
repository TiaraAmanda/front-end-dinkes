@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Semua Artikel</h5>
                </div>
                <div class="card mb-3" style="max-width: 650px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/image/berita8.png" class="img-fluid rounded-start" alt="..."
                                style="height: auto; width: 300px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="">
                                    <h6 class="card-title mb-3">Forum Germas Tingkat Provinsi</h6>
                                </a>
                                <p><small class="text-muted">Updated at 22 Februari 2022 |
                                        <a href="berita-view"> Baca Selengkapnya..</a></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 650px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/image/berita5.png" class="img-fluid rounded-start" alt="..."
                                style="height: auto; width: 300px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="">
                                    <h6 class="card-title mb-3">Si Dia Penyelamat Bumil</h6>
                                </a>
                                <p><small class="text-muted">Updated at 22 Februari 2022 |
                                        <a href="berita-view"> Baca Selengkapnya..</a></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 650px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/image/berita9.png" class="img-fluid rounded-start" alt="..."
                                style="height: auto; width: 300px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="">
                                    <h6 class="card-title mb-3">Penyusunan Rencana Kontijensi Pandemi Influenza_Pusat Krisis
                                    </h6>
                                </a>
                                <p><small class="text-muted">Updated at 22 Februari 2022 |
                                        <a href="berita-view"> Baca Selengkapnya..</a></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 650px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/image/berita4.png" class="img-fluid rounded-start" alt="..."
                                style="height: auto; width: 300px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="">
                                    <h6 class="card-title mb-3">Sinergitas Pembinaan Obat Tradisional Di Jawa Timur</h6>
                                </a>
                                <p><small class="text-muted">Updated at 22 Februari 2022 |
                                        <a href="berita-view"> Baca Selengkapnya..</a></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
