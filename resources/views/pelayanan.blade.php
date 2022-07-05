@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">{{ $title }}</h5>
                    </div>
                    <div class="card2 mb-3">
                        <div class="card2-header">
                            <a class="card2-link" data-toggle="collapse" href="#menuone" aria-expanded="false"
                                aria-controls="menuone">
                                Pelayanan Pengaduan
                            </a>
                        </div>
                        <div id="menuone" class="collapse">
                            <div class="card2-body">
                                <a href="file/SK Tim Koordinasi Pengelola Pengaduan.pdf" class="btn btn-primary"
                                    target="_blank" rel="noopener" style="margin-right: 10px;">SOP</a>
                            </div>
                        </div>
                    </div>
                    <div class="card2 mb-3">
                        <div class="card2-header">
                            <a class="card2-link" data-toggle="collapse" href="#menu2" aria-expanded="false"
                                aria-controls="menu2">
                                Pelayanan Penerbitan Surat Tanda Registrasi Tenaga Teknis Kefarmasian (STRTTK)
                            </a>
                        </div>
                        <div id="menu2" class="collapse">
                            <div class="card2-body">
                                <a href="file/SP STRTTK.pdf" class="btn btn-primary" style="margin-right: 10px;"
                                    target="_blank" rel="noopener">Standar Pelayanan</a>
                                <a href="file/SOP STRTTK 2021.pdf" class="btn btn-primary" style="margin-right: 10px;"
                                    target="_blank" rel="noopener">SOP</a>
                                <a href="/strttk" class="btn btn-primary">Survey Kepuasan Pelayanan STRTTK</a>
                            </div>
                        </div>
                    </div>
                    <div class="card2 mb-3">
                        <div class="card2-header">
                            <a class="card2-link" data-toggle="collapse" href="#menu7" aria-expanded="false"
                                aria-controls="menu7">
                                Pelayanan Penerbitan Rekomendasi Registrasi Puskesmas
                            </a>
                        </div>
                        <div id="menu7" class="collapse">
                            <div class="card2-body">
                                <a href="file/SP REGISTRASI PUSKESMAS.pdf" class="btn btn-primary"
                                    style="margin-right: 10px;" target="_blank" rel="noopener">Standar Pelayanan</a>
                                <a href="file/SOP Registrasi baru puskesmas.pdf" class="btn btn-primary"
                                    style="margin-right: 10px;" target="_blank" rel="noopener">SOP Baru</a>
                                <a href="file/SOP registrasi ulang Puskesmas.pdf" class="btn btn-primary"
                                    style="margin-right: 10px;" target="_blank" rel="noopener">SOP Ulang</a>
                                <a href="/puskesmas" class="btn btn-primary">Survey Kepuasan Masyarakat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@endsection
