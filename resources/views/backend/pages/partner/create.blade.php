@extends('backend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('status'))
                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Tambah Data Perusahaan</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('partner-perusahaan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_perusahaan">Nama Perusahaan</label>
                                <input type="text" class="form-control" placeholder="Masukan nama perusahaan" name="nama_perusahaan">
                            </div>

                            <div class="form-group">
                                <label for="kantor_perusahaan">Kantor Perusahaan</label>
                                <input type="text" class="form-control" placeholder="Masukan kantor perusahaan" name="kantor_perusahaan">
                            </div>

                            <div class="form-group">
                                <label for="website_perusahaan">Website Perusahaan</label>
                                <input type="text" class="form-control" placeholder="Masukan website perusahaan" name="website_perusahaan">
                            </div>

                            <div class="form-group">
                                <label for="tentnag_perusahaan">Tentang Perusahaan</label>
                                <textarea placeholder="Masukan tentnag Perusahaan" name="tentang_perusahaan">

                                  </textarea>
                                  <script>
                                    tinymce.init({
                                      selector: 'textarea',
                                      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                                      toolbar_mode: 'floating',
                                      menubar: false,
                                      height: 400
                                    });
                                  </script>
                            </div>

                            <div class="form-group">
                                <label for="logo_perusahaan">Logo Perusahaan</label>
                                <div class="custom-file">
                                    <input id="logo_perusahaan" class="custom-file-input" type="file" name="logo_perusahaan">
                                    <label for="logo_perusahaan" class="custom-file-label">Pilih Logo</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Simpan Data</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
