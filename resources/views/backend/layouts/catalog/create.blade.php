@extends('backend.layouts.app')


@section('content')
    <div class="container-fluid">
        <form action="{{ route('katalog.store') }}" method="POST">
            <div class="row row-cols-2">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                            <i class="fa fa-pencil-alt mr-2"></i> Tambah Informasi
                            </div>
                        </div>
                        <div class="card-body">
                            
                                <div class="form-group">
                                    <label for="judul-post">Title Informasi</label>
                                    <input type="text" class="form-control" placeholder="Masukan Judul Disini" name="title_post" id="judul-post">
                                </div>

                                <div class="form-group">
                                    <label for="content-post">Isi Informasi</label>
                                    <textarea id="summernote" name="content_post"></textarea>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Option</div>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-outline-primary btn-block"><i class="fa fa-save mr-2"></i>Simpan Informasi</button>

                            <hr>
                            {{-- kategori form  --}}
                            <div class="form-group mt-2">
                                <label>Kategori</label>
                                <select class="custom-select">
                                  <option>Pilih Kategori</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <!-- <label for="customFile">Custom File</label> -->
                                <label for="">Pilih Thumbnail</label>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="customFile">
                                  <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                              </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js-plugin')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 400

            });
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