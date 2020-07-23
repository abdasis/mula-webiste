@extends('frontend.layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid text-center contact-banner">
    <div class="container">
        <h1 class="display-4 text-white">Partner Perusahaan</h1>
        <p class="lead text-white"><i class="fa fa-home"></i>/ Partner Perusahaan</p>
    </div>
</div>
<section class="content">
    <div class="container">
        @foreach ($partners as $partner)
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('logo-partner') . '/' . $partner->logo_perusahaan }}" class="img-responsive" width="100%">
            </div>
            <div class="col-sm-8">
                <h4>SPECIAL INDUCTION REFRACTORIES LTD UK</h4>
                <p>Wednesbury West Midland UK<br>Website: <a href="http://www.sir-ltd.co.uk" target="_blank">http://www.sir-ltd.co.uk</a><br>Manufactures Dry ramming material for Coreless &amp; Channel induction furnaces for Steel Alloys, Iron alloys, Copper Alloys, Alumunium Alloys, such as spinel lining (Alumina), Alumina Silica (Mullite), Silica Lining, and also Cement Coil Mudding, Plastic Materials, Patching Materials, Mica, Zircon Washcoat. SIR also has the service capabilities to do the furnace coil repair, comissioning services, inductor box &amp; power lead services, and furnace repairs.<br>*sole agent</p>
              </div>
        </div>
        <hr>
        @endforeach
    </div>
</section>
@endsection
