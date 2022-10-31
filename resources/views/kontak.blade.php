@extends('layouts.user')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
    <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
    >
        <h3 class="display-3 font-weight-bold text-white">Kontak Kami</h3>
        <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="{{ url('/') }}">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Kontak</p>
        </div>
    </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <p class="section-title px-5">
                <span class="px-2">Hubungi Kami</span>
            </p>
            <h1 class="mb-4">Silakan Ajukan Pertanyaan</h1>
        </div>
        <div class="row">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
            <div id="success"></div>
            <form action="{{ route('kontaks.store') }}" method="post">
                @csrf
                <div class="control-group">
                <input
                    type="text"
                    class="form-control" name="nama"
                    id="nama"
                    placeholder="Namamu"
                    required="required"
                    data-validation-required-message="Silakan isi namamu"
                />
                <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Emailmu"
                    required="required"
                    data-validation-required-message="Silakan isi emailmu"
                />
                @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                <textarea
                    class="form-control"
                    rows="6"
                    id="komentar"
                    name="komentar"
                    placeholder="Pesan"
                    required="required"
                    data-validation-required-message="Silakan isi pesanmu"
                ></textarea>
                @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <p class="help-block text-danger"></p>
                </div>
                <div>
                <button
                    class="btn btn-primary py-2 px-4"
                    type="submit"
                    id="sendMessageButton"
                >
                    Kirim Pesan
                </button>
                </div>
            </form>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <p>
            Labore sea amet kasd diam justo amet ut vero justo. Ipsum ut et
            kasd duo sit, ipsum sea et erat est dolore, magna ipsum et magna
            elitr. Accusam accusam lorem magna, eos et sed eirmod dolor est
            eirmod eirmod amet.
            </p>
            <div class="d-flex">
            <i
                class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
                <h5>Alamat</h5>
                <p>Sumorame, Candi Sidoarjo</p>
            </div>
            </div>
            <div class="d-flex">
            <i
                class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
                <h5>Email</h5>
                <p>guruku@gmail.com</p>
            </div>
            </div>
            <div class="d-flex">
            <i
                class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
                <h5>Telepon</h5>
                <p>+012 345 67890</p>
            </div>
            </div>
            <div class="d-flex">
            <i
                class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
                <h5>Jam Kerja</h5>
                <strong>Senin - Sabtu:</strong>
                <p class="m-0">08:00 AM - 05:00 PM</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Contact End -->
@endsection
