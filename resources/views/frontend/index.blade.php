@extends('frontend.layouts.app')

@section('content')
    <!-- start section slider  -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach (App\Models\Slider::paginate(3) as $key => $slider)
            <div class="carousel-item {{ $key== 0  ? 'active' : ''  }}">
                <img src="{{ asset('/banner' . '/' . $slider->gambar_slider) }}" class="d-block w-100 img-fluid image-slider" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>{{ $slider->nama_slider }}</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            @endforeach
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
                <div class="row">
                    <div class="col-md-3 col-sm-12 mb-2">
                        <div class="card service-box">
                            <div class="card-body  text-center">
                                <i class="fa fa-home fa-3x icon-service"></i>
                                <h1 class="service-title">Professional Builde
                                </h1>
                                <p class="service-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-2">
                        <div class="card service-box">
                            <div class="card-body  text-center">
                                <i class="fa fa-building fa-3x icon-service"></i>
                                <h1 class="service-title">We Deliver Quality
                                </h1>
                                <p class="service-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-2">
                        <div class="card service-box">
                            <div class="card-body  text-center">
                                <i class="fa fa-clock fa-3x icon-service"></i>
                                <h1 class="service-title">Always On Time

                                </h1>
                                <p class="service-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-2">
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
                        <div class="col-md-4 mb-2">
                            <div class="card shadow-sm box-content text-center">
                                <img src="{{ asset('/service-img/cns-1.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">BUILDING CUSTRUCTION</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                            </div>
                              </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card shadow-sm box-content text-center">
                                <img src="{{ asset('/service-img/cns-2.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">PROJECT PLANNING</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                            </div>
                              </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card shadow-sm box-content text-center">
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
@endsection
