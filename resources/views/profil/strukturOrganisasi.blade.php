@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="dateupdate" style="margin-bottom: 1rem;">Diperbarui Pada 22 Maret 2022</div>
            <div class="position-relative h-150">
                <img class="w-100 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/image/StrukturOrganisasi.png"
                    style="object-fit: cover;">
                <div class="text-center"><a
                        href="https://dinkes.jatimprov.go.id/userimage/dokumen/Pergub%20No.%2074%20Thn%202016%20tentang%20Tupoksi%20Dinas%20Kesehatan.pdf">TUGAS
                        POKOK DAN FUNGSI DINAS KESEHATAN PROVINSI JAWA TIMUR</a>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
