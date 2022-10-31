<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>GuruKu - Belajar Mudah dengan Gu Privat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
    href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
    rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    rel="stylesheet"
    />


    <!-- Flaticon Font -->
    <link href="{{ asset('assets/lib/flaticon/font/flaticon.css') }}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" />
</head>
<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
    >
        <a
        href="{{ url('/') }}"
        class="navbar-brand font-weight-bold text-secondary"
        style="font-size: 50px"
        >
        <i class="flaticon-032-book"></i>
        <span class="text-primary">GuruKu</span>
        </a>
        <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div
        class="collapse navbar-collapse justify-content-between"
        id="navbarCollapse"
        >
        <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Beranda</a>
            <a href="{{ url('tentang') }}" class="nav-item nav-link">Tentang</a>
            <a href="{{ url('kelas') }}" class="nav-item nav-link">Kelas</a>
            <a href="{{ url('guru') }}" class="nav-item nav-link">Guru</a>
            <a href="{{ url('album') }}" class="nav-item nav-link">Album</a>
            <a href="{{ url('kontak') }}" class="nav-item nav-link">Kontak</a>
        </div>
        <a href="https://api.whatsapp.com/send?phone=62895366884004&text=Halo%20Admin!%0ASaya%20ingin%20daftar%20les%20privat%20Anda" class="btn btn-primary px-4">Pesan Kelas</a>
        </div>
    </nav>
    </div>
    <!-- Navbar End -->

    <body>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer Start -->
    <div
    class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5"
    >
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
        <a
            href=""
            class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
            style="font-size: 40px; line-height: 40px"
        >
            <i class="flaticon-032-book"></i>
            <span class="text-white">GuruKu</span>
        </a>
        <p>
            Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea
            dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr
            stet diam duo eos rebum ipsum diam ipsum elitr.
        </p>
        <div class="d-flex justify-content-start mt-4">
            <a
            class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
            style="width: 38px; height: 38px"
            href="#"
            ><i class="fab fa-twitter"></i
            ></a>
            <a
            class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
            style="width: 38px; height: 38px"
            href="#"
            ><i class="fab fa-facebook-f"></i
            ></a>
            <a
            class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
            style="width: 38px; height: 38px"
            href="#"
            ><i class="fab fa-linkedin-in"></i
            ></a>
            <a
            class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
            style="width: 38px; height: 38px"
            href="#"
            ><i class="fab fa-instagram"></i
            ></a>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
        <h3 class="text-primary mb-4">Hubungi Kami</h3>
        <div class="d-flex">
            <h4 class="fa fa-map-marker-alt text-primary"></h4>
            <div class="pl-3">
            <h5 class="text-white">Tempat</h5>
            <p>Sumorame, Candi Sidoarjo</p>
            </div>
        </div>
        <div class="d-flex">
            <h4 class="fa fa-envelope text-primary"></h4>
            <div class="pl-3">
            <h5 class="text-white">Email</h5>
            <p>guruku@gmail.com</p>
            </div>
        </div>
        <div class="d-flex">
            <h4 class="fa fa-phone-alt text-primary"></h4>
            <div class="pl-3">
            <h5 class="text-white">Telepon</h5>
            <p>+012 345 67890</p>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
        <h3 class="text-primary mb-4">Tentang</h3>
        <div class="d-flex flex-column justify-content-start">
            <a class="text-white mb-2" href="{{ url('/') }}"
            ><i class="fa fa-angle-right mr-2"></i>Beranda</a
            >
            <a class="text-white mb-2" href="{{ url('tentang') }}"
            ><i class="fa fa-angle-right mr-2"></i>Tentang</a
            >
            <a class="text-white mb-2" href="{{ url('kelas') }}"
            ><i class="fa fa-angle-right mr-2"></i>Kelas</a
            >
            <a class="text-white mb-2" href="{{ url('guru') }}"
            ><i class="fa fa-angle-right mr-2"></i>Guru</a
            >
            <a class="text-white mb-2" href="{{ url('album') }}"
            ><i class="fa fa-angle-right mr-2"></i>Album</a
            >
            <a class="text-white" href="{{ url('kontak') }}"
            ><i class="fa fa-angle-right mr-2"></i>Kontak</a
            >
        </div>
        </div>
    </div>
    <div
        class="container-fluid pt-5"
        style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;"
    >
        <p class="m-0 text-center text-white">
        &copy; 2022
        <a class="text-primary font-weight-bold" href="{{ url('/') }}">GuruKu</a>

        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        PowerBy of
        <a href="http://deasinergi.id/" target="_blank">Dea Sinergi</a>
        </p>
    </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
    ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>
