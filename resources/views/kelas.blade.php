@extends('layouts.user')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
    <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
    >
        <h3 class="display-3 font-weight-bold text-white">Kelasmu</h3>
        <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="{{ url('/') }}">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Kelas</p>
        </div>
    </div>
    </div>
    <!-- Header End -->

    <!-- Class Start -->
    <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
        <p class="section-title px-5">
            <span class="px-2">Kelas Populer</span>
        </p>
        <h1 class="mb-4">Kelas Untukmu</h1>
        </div>
        <div class="row">
        @forelse ($kelas as $kel)
            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                <img class="card-img-top mb-2" src="{{ Storage::url($kel->gambar) }}" alt="Gambar Kelas" />
                <div class="card-body text-center">
                    <h4 class="card-title">{{ $kel->nama_kelas }}</h4>
                    <h6>{{ $kel->harga }}</h6>
                </div>
                <div class="card-footer bg-transparent py-4 px-5">
                    <p class="card-text">
                        {{ $kel->deskripsi }}
                    </p>
                </div>
                <a href="https://api.whatsapp.com/send?phone=62895366884004&text=Halo%20Admin!%0ASaya%20ingin%20daftar%20les%20privat%20*{{ $kel->nama_kelas }}*" class="btn btn-primary px-4 mx-auto mb-4">Pesan Kelas</a>
                </div>
            </div>
        @empty
        <p class="card-body text-center">Tidak Ada Data...</p>
        @endforelse
        </div>
    </div>
    </div>
    <!-- Class End -->
@endsection
