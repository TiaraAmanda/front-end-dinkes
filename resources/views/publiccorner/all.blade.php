@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <h3 class="mb-5">Semua Pertanyaan</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"><b>Tiara Amanda </b>| Updated 22 Februari 2022</div>
                        <p class="card-text">Pertanyaan : Tempat vaksinasi Astra Zeneca dosis 2 Surabaya?</p>
                        <p class="card-text">Jawaban : Terima kasih. Stock vaksin sesuai ketersediaan, silahkan pilih link
                            untuk informasi vaksin, dosis dan lokasinya untuk pendaftaran...</p>
                        <a href="view">Baca Selengkapnya..</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"><b>Tiara</b>| Updated 22 Februari 2022</div>
                        <p class="card-text">Pertanyaan : Tempat vaksinasi Astra Zeneca dosis 2 Surabaya?</p>
                        <p class="card-text">Jawaban : Terima kasih. Stock vaksin sesuai ketersediaan, silahkan pilih link
                            untuk informasi vaksin, dosis dan lokasinya untuk pendaftaran...</p>
                        <a href="/view">Baca Selengkapnya..</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"><b>Amanda </b>| Updated 22 Februari 2022</div>
                        <p class="card-text">Pertanyaan : Tempat vaksinasi Astra Zeneca dosis 2 Surabaya?</p>
                        <p class="card-text">Jawaban : Terima kasih. Stock vaksin sesuai ketersediaan, silahkan pilih link
                            untuk informasi vaksin, dosis dan lokasinya untuk pendaftaran...</p>
                        <a href="/view">Baca Selengkapnya..</a>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
