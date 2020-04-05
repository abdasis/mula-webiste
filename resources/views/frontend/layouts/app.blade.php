<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('backend/dist/css/style.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/backend/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <title>PT MITRA LESTARI ABADI | OFFICIAL SITE</title>
</head>

<body>
    <nav class="wrapper">
        <!-- top navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-4" style="background: #f1f3ee;" id="top-nav">
            <div class="container">
                <a class="navbar-brand" href="#">PT MITRA LESTARI ABADI</a>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                        id="search-form" />
                    <button class="btn btn-primary  my-2 my-sm-0" type="submit" id="btn-search">
                        Search
                    </button>
                </form>
            </div>
        </nav>
        <!-- end top navbar  -->
        <!-- start button nav  -->
        <nav class="navbar navbar-expand-lg bg-dark-custom text-dark" "
            >
            <div class=" container">
            <div class="row">
                <ul class="nav justify-content-center">
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
                        <a class="nav-link nav-link-color" href="#">INDUSTRI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-color" href="#">PATNER PERUSAHAAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-color" href="#">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-color" href="#">LOWONGAN KERJA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-color" href="#">HUBUNGI KAMI</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>

        <!-- start section slider  -->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('/banner/slide-2.jpg') }}" class="d-block w-100 img-fluid image-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('/banner/slide-3.jpg') }}" class="d-block w-100 img-fluid image-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('/banner/slide-4.jpg') }}" class="d-block w-100 img-fluid image-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
          <!-- end slider  -->

          <!-- section service  -->
        <section class="layanan margin-section">
            <div class="container">
                <div class="container">
                    <div class="row row-cols-4">
                        <div class="col">
                            <div class="card service-box">
                                <div class="card-body  text-center">
                                    <i class="fa fa-home fa-3x icon-service"></i>
                                    <h1 class="service-title">Professional Builde
                                    </h1>
                                    <p class="service-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card service-box">
                                <div class="card-body  text-center">
                                    <i class="fa fa-building fa-3x icon-service"></i>
                                    <h1 class="service-title">We Deliver Quality
                                    </h1>
                                    <p class="service-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card service-box">
                                <div class="card-body  text-center">
                                    <i class="fa fa-clock fa-3x icon-service"></i>
                                    <h1 class="service-title">Always On Time

                                    </h1>
                                    <p class="service-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card service-box">
                                <div class="card-body  text-center">
                                    <i class="fa fa-thumbs-up fa-3x icon-service"></i>
                                    <h1 class="service-title">We Are Pasionate

                                    </h1>
                                    <p class="service-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section serve  -->

        <!-- section penawaran  -->
        <section class="penawaran margin-section">
            <div class="container">
                <div class="header-section">
                    <h1 class="text-center">
                        WHAT WE OFFER
                    </h1>
                    <p class="sub-header-title text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <div class="box-penawaran">
                    <div class="penawaran-wrapper">
                        <div class="row p-4">
                            <div class="col-md-4">
                                <div class="card box-content text-center">
                                    <img src="{{ asset('/service-img/cns-1.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">BUILDING CUSTRUCTION</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                            </div>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card box-content text-center">
                                    <img src="{{ asset('/service-img/cns-2.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">PROJECT PLANNING</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                            </div>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card box-content text-center">
                                    <img src="{{ asset('/service-img/cns-3.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">HOUSE RENOVATION</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                            </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="container">
                <div class="footer-widget">
                    <div class="row row-cols-3">
                        <div class="col-">
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
                        <div class="col-"></div>
                        <div class="col-"></div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
