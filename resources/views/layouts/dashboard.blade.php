<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg" data-preloader="disable"
    data-theme="modern" data-topbar="light" data-bs-theme="light">


<head>
    <meta charset="utf-8">
    <title>SHIF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:wght@300;400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.min.css')}}">

</head>

<body>
    <div id="layout-wrapper">
        @include('components.sidebar')
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('images/sha.svg')}}" style="height: 70px;" alt="" srcset="">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('images/sha.svg')}}" style="height: 70px;" alt="" srcset="">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('images/sha.svg')}}" style="height: 70px;" alt="" srcset="">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('images/sha.svg')}}" style="height: 70px;" alt="" srcset="">
                                </span>
                            </a>
                        </div>
                        <div class="p-2">
                            <img src="{{asset('images/sha.svg')}}" style="height: 50px;" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © SHA.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <button class="btn btn-dark btn-icon" id="back-to-top">
        <i class="bi bi-caret-up fs-3xl"></i>
    </button>
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="assets/libs/simplebar/simplebar.min.js"></script> --}}
    <script src="assets/js/plugins.js"></script>



    <script src="assets/js/pages/password-addon.init.js"></script>

    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/pages/swiper.init.js"></script>
</body>

</html>