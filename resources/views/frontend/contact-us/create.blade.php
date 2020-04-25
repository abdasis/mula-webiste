@extends('frontend.layouts.app')

@section('content')
    {{-- section jumbuttron --}}
    <div class="jumbotron jumbotron-fluid text-center contact-banner">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

      {{-- end section  --}}
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 p-5">
                            <div class="left-content p-2">
                                <h3>Hubungi Kami</h3>
                                <p class="title-content">PT Mitra Utama Lestari Abadi</p>
                                <p class="sub-title-content"> Kantor Pusat (Head Office)</p>
                                <table class="table-borderless">
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>Komplek Ruko Griya Alifa Kav B-2 Jl. Puloribung Raya,
                                            Pekayon Bekasi 17148
                                            Jawa Barat - INDONESIA</td>
                                    </tr>
                                    <tr>
                                        <td>TELEPHONE</td>
                                        <td>:</td>
                                        <td><a href="tel:+622182742222">+622182742222</a></td>
                                    </tr>
                                    <tr>
                                        <td>FACSIMILE</td>
                                        <td>:</td>
                                        <td><a href="tel:+622182430419">+622182430419</a></td>
                                    </tr>
                                    <tr>
                                        <td>EMAIL (GENERAL)</td>
                                        <td>:</td>
                                        <td><a href="sales@mula.co.id">sales@mula.co.id</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 p-5">
                            <div class="container p-5 shadow-sm" style="border-top: 5px solid orange">
                                <h3 class="card-title mb-4">
                                    Form Kontak
                                </h3>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="">Nama Perusahaan</label>
                                        <input type="text" class="form-control form-control-md" placeholder="Masukan Nama Perusahaan">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-md" placeholder="Masukan Nama Lengkap">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Jabatan Perusahaan</label>
                                        <input type="text" class="form-control form-control-md" placeholder="Masukan Jabatan Diperusahaan">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Email Perusahaan</label>
                                        <input type="email" class="form-control form-control-md" placeholder="Masukan Email Perusahaan">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nomor Telepon</label>
                                        <input type="text" class="form-control form-control-md" placeholder="Masukan Nomor Telepon">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nomor Handphone</label>
                                        <input type="text" class="form-control form-control-md" placeholder="Masukan Nomor Handpohe">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama Alamat Lengkap</label>
                                        <textarea type="text" class="form-control form-control-md" rows="4" cols="10" placeholder="Masukan Alamat Lengkap"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-warning btn-block ">Kirim Pesan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
