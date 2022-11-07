@extends('layouts.user')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
        <h4 class="text-white mb-4 mt-5 mt-lg-0">GuruKu</h4>
        <h1 class="display-3 font-weight-bold text-white">
            Program pengajaran privat belajar
        </h1>
        <p class="text-white mb-4">
            Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed
            sit. Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed
            ipsum at ipsum nonumy amet. Clita lorem dolore sed stet et est justo
            dolore.
        </p>
        <a href="" class="btn btn-secondary mt-1 py-3 px-5">Selengkapnya</a>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
        <img class="img-fluid mt-5" src="{{ asset('assets/img/header.png') }}" alt="" />
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

    <!-- Team Start -->
    <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
        <p class="section-title px-5">
            <span class="px-2">Gurumu</span>
        </p>
        <h1 class="mb-4">Ketemu Guru Kamu</h1>
        </div>
        <div class="row">
            @forelse ($gurus as $guru)
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div
                    class="position-relative overflow-hidden mb-4"
                    style="border-radius: 100%"
                    >
                    <img class="img-fluid w-100" src="{{ Storage::url($guru->gambar) }}" alt="Gambar Anggota" />
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                    >
                        <a
                        class="btn btn-outline-light text-center mr-2 px-0"
                        style="width: 38px; height: 38px"
                        href="#"
                        ><i class="fab fa-twitter"></i
                        ></a>
                        <a
                        class="btn btn-outline-light text-center mr-2 px-0"
                        style="width: 38px; height: 38px"
                        href="#"
                        ><i class="fab fa-facebook-f"></i
                        ></a>
                        <a
                        class="btn btn-outline-light text-center px-0"
                        style="width: 38px; height: 38px"
                        href="#"
                        ><i class="fab fa-instagram"></i
                        ></a>
                    </div>
                    </div>
                    <h4>{{ $guru->nama }}</h4>
                    <i>{{ $guru->jenis_guru }}</i>
                </div>
            @empty
            <p class="card-body text-center">Tidak Ada Data...</p>
            @endforelse
        </div>
    </div>
    </div>
    <!-- Team End -->

    <!-- Berlangganan Awal -->
    <!-- <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
        <h1 class="mb-4">Cara Berlanggan Les Privat</h1>
        </div>
        <div class="row">
        <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="img/fomulir.jpg" alt="" />
            <div class="card-body">
                <h4 class="card-title">1. Lengkapi formulir pemesanan</h4>
                <p class="card-text">
                Lengkapi formulir untuk melakukan pemesanan
                </p>
            </div>
            </div>
        </div>
        <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="img/bayar.jpg" alt="" />
            <div class="card-body">
                <h4 class="card-title">2. Pembayaran</h4>
                <p class="card-text">
                Silakan lakukan pembayaran sesuai tagihan
                </p>
            </div>
            </div>
        </div>
        <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="img/guru.jpg" alt="" />
            <div class="card-body">
                <h4 class="card-title">3. Sesi belajar</h4>
                <p class="card-text">
                Proses pembelajaran privat dengan pengajar dimulai
                </p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div> -->
    <!-- Berlangganan Akhir -->
@endsection
