@extends('layouts.user')
@section('content')
<body>
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
    <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
    >
        <h3 class="display-3 font-weight-bold text-white">Album</h3>
        <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="{{ url('/') }}">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Album</p>
        </div>
    </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center pb-2">
        <p class="section-title px-5">
            <span class="px-2">Album</span>
        </p>
        <h1 class="mb-4">Album Kegiatan</h1>
        </div>
        <div class="row">
        <div class="col-12 text-center mb-2">
            <ul class="list-inline mb-4" id="portfolio-flters">
            <li class="btn btn-outline-primary m-1 active" data-filter="*">
                All
            </li>
            <li class="btn btn-outline-primary m-1" data-filter=".playing">
                Playing
            </li>
            <li class="btn btn-outline-primary m-1" data-filter=".drawing">
                Drawing
            </li>
            <li class="btn btn-outline-primary m-1" data-filter=".reading">
                Reading
            </li>
            </ul>
        </div>
        </div>
        <div class="row portfolio-container">
            @forelse ($albums as $album)
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item {{ $album->kategori }}">
                    <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid w-65" src="{{ Storage::url($album->gambar) }}" alt="gambar album" />
                    <div
                        class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
                    >
                        <a href="{{ Storage::url($album->gambar) }}" data-lightbox="portfolio">
                        <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                        </a>
                    </div>
                    </div>
                </div>
            @empty
            <p class="card-body text-center">Tidak Ada Data...</p>
            @endforelse
        </div>
    </div>
    </div>
    <!-- Gallery End -->
@endsection
