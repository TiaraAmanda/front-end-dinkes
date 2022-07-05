@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="dateupdate" style="margin-bottom: 1rem;">Diperbarui Pada 22 Maret 2022</div>
            <div class="row g-3.5 position-relative h-150 d-inline">
                <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/image/Penghargaan1.png"
                    style="object-fit: cover;">
                <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/image/Penghargaan2.png"
                    style="object-fit: cover;">
                <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/image/Penghargaan3.png"
                    style="object-fit: cover;">
                <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/image/Penghargaan4.png"
                    style="object-fit: cover;">
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
