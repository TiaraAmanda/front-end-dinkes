@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="dateupdate" style="margin-bottom: 1rem;"></div>
            <div class="position-relative h-150">
                <h3 class="mb-5">Detail Pertanyaan</h3>
                <div class="card ">
                    <div class="card-body">
                        <h6 class="card-title"><b>Tiara Amanda </b>| Updated 22 Februari 2022</h6>
                        <div class="dropdown-divider"></div>
                        <p class="card-text"><b>Pertanyaan : </b> Tempat vaksinasi Astra Zeneca dosis 2 Surabaya?</p>
                        <p class="card-text mt-3"><b>Jawaban : </b> Terima kasih. Stock vaksin sesuai ketersediaan, silahkan
                            pilih link untuk informasi vaksin,dosis dan lokasinya untuk pendaftaran online,
                            https://dinkes.jatimprov.go.id/index.php?r=site/berita_detail&id=842, atau berkunjung di
                            instagram surabayasehatku dan bisa menghubungi Puskesmas dan Dinas Kesehatan Kab/Kota setempat.
                            Salam sehat</p>
                        <a href="/public-corner/semua">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
