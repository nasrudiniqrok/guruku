@extends('layouts.user')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
    <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
    >
        <h3 class="display-3 font-weight-bold text-white">Tentang Kami</h3>
        <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="{{ url('/') }}">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Tentang</p>
        </div>
    </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-5">
            <img
            class="img-fluid rounded mb-5 mb-lg-0"
            src="{{ asset('assets/img/about-1.jpg') }}"
            alt=""
            />
        </div>
        <div class="col-lg-7">
            <p class="section-title pr-5">
            <span class="pr-2">Tentang Kami</span>
            </p>
            <h1 class="mb-4">Program Pembelajaan Secara Prifat</h1>
            <p>
            Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
            dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
            Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
            dolor
            </p>
            <div class="row pt-2 pb-4">
            <div class="col-6 col-md-4">
                <img class="img-fluid rounded" src="img/about-2.jpg" alt="" />
            </div>
            </div>
            <a href="" class="btn btn-primary mt-2 py-2 px-4">Selengkapnya</a>
        </div>
        </div>
    </div>
    </div>
    <!-- About End -->

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
        <p class="section-title px-5">
            <span class="px-2">Artikel Kami</span>
        </p>
        <h1 class="mb-4">Kegiatan Kami</h1>
        </div>
        <div class="row pb-3">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
            <img class="card-img-top mb-2" src="{{ asset('assets/img/blog-1.jpg') }}" alt="" />
            <div class="card-body bg-light text-center p-4">
                <h4 class="">Diam amet eos at no eos</h4>
                <div class="d-flex justify-content-center mb-3">
                <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                >
                <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                >
                <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                >
                </div>
                <p>
                Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="" class="btn btn-primary px-4 mx-auto my-2"
                >Selengkapnya</a
                >
            </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
            <img class="card-img-top mb-2" src="{{ asset('assets/img/blog-2.jpg') }}" alt="" />
            <div class="card-body bg-light text-center p-4">
                <h4 class="">Diam amet eos at no eos</h4>
                <div class="d-flex justify-content-center mb-3">
                <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                >
                <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                >
                <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                >
                </div>
                <p>
                Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="" class="btn btn-primary px-4 mx-auto my-2"
                >Selengkapnya</a
                >
            </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
            <img class="card-img-top mb-2" src="{{ asset('assets/img/blog-3.jpg') }}" alt="" />
            <div class="card-body bg-light text-center p-4">
                <h4 class="">Diam amet eos at no eos</h4>
                <div class="d-flex justify-content-center mb-3">
                <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                >
                <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                >
                <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                >
                </div>
                <p>
                Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="" class="btn btn-primary px-4 mx-auto my-2"
                >Selengkapnya</a
                >
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Blog End -->
@endsection
