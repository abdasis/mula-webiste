@extends('backend.layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (Session::has('status'))
                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_slider">Nama Slider</label>
                        <input type="text" value="{{ $slider->nama_slider }}" class="form-control @error('nama_slider') is-invalid @enderror" placeholder="Masukan Judul Slider" name="nama_slider">
                        @if ($errors->first('nama_slider'))
                            <small class="text-danger">{{ $errors->first('nama_slider') }}</small>
                        @endif
                    </div>

                    <img height="90" class="img-bordered-sm" src="{{ asset('banner') . '/' . $slider->gambar_slider }}" alt="">

                    <div class="form-group">
                        <label for="gambar_slider">Gambar Slider</label>
                        <div class="custom-file">
                            <input id="gambar_slider" class="custom-file-input" type="file" name="gambar_slider">
                            <label for="gambar_slider" class="custom-file-label">Pilih gambar</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-flat" type="submit"><i class="fa fa-save mr-1"></i>Simpan Slider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
