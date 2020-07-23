@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="callout callout-info">
            <h5>Bantuan Pengisian Loker</h5>
            <p>Silahkan gunakan fungsi list untuk mengisi kriteria yang dibutuhkan.</p>
          </div>
          @if (Session::get('status'))
              <div class="alert alert-success">{{ Session::get('status') }}</div>
          @endif
        <form action="{{ route('loker.update', $loker->id) }}" method="post">
            @method('PUT')
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Tambah Informasi Loker
                        </div>
                        <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label for="posisi">Posisi</label>
                                    <input type="text" value="{{ $loker->posisi }}" name="posisi" id="posisi" class="form-control" placeholder="Masukan Posisi Loker">
                                    <small class="text-danger">
                                        {{ $errors->first('posisi') }}
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="content-post">Kriteria Loker</label>
                                    <textarea  name="isi_keterangan">{{ $loker->isi_keterangan }}</textarea>
                                    <small class="text-danger">
                                        {{ $errors->first('isi_keterangan') }}
                                    </small>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Simpan Informasi</div>
                        <div class="card-body">
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-save mr-1"></i>Simpan</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection

@section('js-plugin')

     <script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

     <script>
        tinymce.init({
            statusbar: false,
            height : "350",
            menubar: false,
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
  </script>
@endsection

@section('css-plugin')
    <style>
        .note-editor.note-frame.panel.panel-default{
            width: 100%;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            box-shadow: inset 0 0 0 transparent;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
    </style>
@endsection
