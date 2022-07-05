@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">{{ $title }}</h5>
                    </div>
                    <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/image/call1.jpeg"
                        style="object-fit: cover;">
                    <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/image/call2.jpeg"
                        style="object-fit: cover;">
                    <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/image/call3.jpeg"
                        style="object-fit: cover;">
                    <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/image/call4.jpeg"
                        style="object-fit: cover;">
                    <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/image/call5.jpeg"
                        style="object-fit: cover;">

                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
