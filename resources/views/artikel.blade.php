@extends('layouts.user')
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
<div
class="d-flex flex-column align-items-center justify-content-center"
style="min-height: 400px"
>
<h3 class="display-3 font-weight-bold text-white">Detail Tentang</h3>
<div class="d-inline-flex text-white">
    <p class="m-0"><a class="text-white" href="{{ url('/') }}">Beranda</a></p>
    <p class="m-0 px-2">/</p>
    <p class="m-0"><a class="text-white" href="{{ url('/tentang') }}">Tentang</a></p>
    <p class="m-0 px-2">/</p>
    <p class="m-0">Detail Tentang</p>
</div>
</div>
</div>
<!-- Header End -->

<!-- Detail Start -->
<div class="container py-5">
<div class="row pt-5">
<div class="col-lg-12">
    <div class="d-flex flex-column text-left mb-3">
    <p class="section-title pr-5">
        <span class="pr-2">Detail Artikel</span>
    </p>
    <h1 class="mb-3">{{ $tentang->judul }}</h1>
    <div class="d-flex">
        <p class="mr-3"><i class="fa fa-calendar text-primary"></i> {{ $tentang->tgl }}</p>
        {{-- <p class="mr-3">
        <i class="fa fa-folder text-primary"></i> Web Design
        </p> --}}
    </div>
    </div>
    <div class="mb-5">
    <img
        class="img-fluid rounded w-50 mb-4"
        src="{{ Storage::url($tentang->gambar) }}"
        alt="gambar artikel"
    />
    <p>{{ $tentang->deskripsi }}</p>
    </div>
</div>

</div>
</div>
<!-- Detail End -->
@endsection
