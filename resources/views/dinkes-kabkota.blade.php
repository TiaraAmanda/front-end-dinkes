@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">Dinas Kesehatan Kabupaten Kota</h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://dinkes.batukota.go.id/web/">Website Dinas Kesehatan Kota Batu</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://www.dinkes.kedirikab.go.id/">Website Dinas Kesehatan Kota Kediri</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://www.bangkalankab.go.id/v5/dat_berita.php?nart=1042/">Website Dinas Kesehatan Kab
                                Bangkalan</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="https://www.nganjukkab.go.id/beranda/welcome/dinas_kesehatan">Website Dinas Kesehatan
                                Kab Nganjuk</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://www.jemberkab.go.id/dinas-kesehatan/">Website Dinas Kesehatan Kab Jember</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="https://dinkes.ponorogo.go.id/">Website Dinas Kesehatan Kab Ponorogo</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="https://dinkes.sampangkab.go.id/">Website Dinas Kesehatan Kab Sampang</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="https://dinkes.pamekasankab.go.id/">Website Dinas Kesehatan Kab Pamekasan</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="https://dinkes.pasuruankab.go.id/">Website Dinas Kesehatan Kab Pasuruan</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="https://dinkes.madiunkab.go.id/">Website Dinas Kesehatan Kab Madiun</a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@endsection
