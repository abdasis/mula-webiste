<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('backend/dist/css/style.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/backend/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/ionicons.min.css">
    <title>PT MITRA LESTARI ABADI | OFFICIAL SITE</title>
</head>

<body>
        <nav class="wrapper">
        <!-- top navbar -->
        <nav class="navbar navbar-expand-lg navbar-light p-4" style="background: #fff;" id="top-nav">
            <div class="container">
                <a class="navbar-brand" href="#">PT MITRA LESTARI ABADI</a>
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                        id="search-form" />
                    <button class="btn btn-primary  my-2 my-sm-0" type="submit" id="btn-search">
                        Search
                    </button>
                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse "  id="navbarSupportedContent" >
                    <ul class="navbar-nav mr-auto d-md-none d-lg-none d-sm-block">
                        <li class="nav-item">
                            <a class="nav-link nav-link-color active" href="#">MULA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-color" href="#">PRODUCT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-color" href="#">SERVICE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-color" href="{{ route('home.industri') }}">INDUSTRI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-color" href="{{ route('home.partner') }}">PATNER PERUSAHAAN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-color" href="{{ route('home.berita') }}">BERITA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-color" href="{{ route('home.loker') }}">LOWONGAN KERJA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-color" href="#">HUBUNGI KAMI</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- end top navbar  -->
        <!-- start button nav  -->
        @include('frontend.includes.navbar')
        @yield('content')
        <section class="footer">
            <div class="container">
                <div class="footer-widget">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="widget-content">
                                <div class="widget-title">
                                    <h1 class="text-light">About Us</h1>
                                </div>
                                <div class="content-widget">
                                    <p>
                                        <i class="fa fa-map-marked-alt mr-2"></i>
                                        Ruko Griya Alifa Kav B-2
                                        Jl Puloribung Pekayon Jaya
                                        Bekasi Selatan INDONESIA
                                    </p>
                                    <p><i class="fa fa-phone-alt mr-2"></i>+62 21 8274 2222</p>
                                    <p>
                                        <i class="fa fa-fax mr-2"></i>+62 21 8243 0419
                                    </p>
                                    <p><i class="fa fa-envelope mr-2"></i>sales@mula.co.id</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12"></div>
                        <div class="col-md-3 col-sm-12"></div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ url('/') }}/assets/js/jquery-3.4.1.slim.min.js">
    </script>
    <script src="{{ url('/') }}/assets/js/popper.min.js">
    </script>
    <script src="{{ url('/') }}/assets/js/bootstrap.min.js">
    </script>
</body>

</html>
