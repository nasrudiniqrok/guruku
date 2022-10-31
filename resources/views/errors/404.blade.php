<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GuruKu - Belajar Mudah dengan Gu Privat</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Page Wrapper -->
    <div id="app">

            <section class="section">
                <div class="container mt-5">
                    <div class="page-error">
                    <div class="page-inner">
                    <!-- 404 Error Text -->
                        <div class="text-center">
                            <div class="error mx-auto" data-text="404">404</div>
                            <p class="lead text-gray-800 mb-5">Halaman Tidak Ditemukan</p>
                            <a href="{{ url('/') }}">&larr;Kembali Ke Menu Dashboard</a>
                        </div>
                    </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            &copy; 2022
                            <a class="text-primary font-weight-bold" href="{{ url('/') }}">GuruKu</a>
                            PowerBy of
                            <a href="http://deasinergi.id/" target="_blank">Dea Sinergi</a>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

                </div>
            </section>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/svendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
