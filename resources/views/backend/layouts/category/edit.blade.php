@extends('backend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (Session::has('status'))
                    <div class="alert alert-info">{{ Session::get('status') }}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Tambah Kategori
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.update', $categori->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_kategori">Nama Kategori</label>
                                <input type="text" name="category_name" value="{{ $categori->category_name }}" class="form-control @error('category_name') is-invalid @enderror" placeholder="Nama Kategori">
                                @if ($errors->has('category_name'))
                                    <small class="text-danger">{{ $errors->first('category_name') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i>
                                    Simpan Kategori
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Daftar Kategori
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-sm table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Nama </th>
                              <th>Nama Kategori</th>
                              <th>Tanggal</th>
                              <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($categories as $key => $categori)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{$categori->category_name}}</td>
                                <td>{{ $categori->created_at }}</td>
                                <td>
                                    <div class="row">
                                        <form action="{{ route('category.destroy', $categori->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-link"><i class="fa fa-trash-alt text-danger"></i></button>
                                        </form>
                                        <a href="{{ route('category.edit', $categori->id) }}">
                                            <button class="btn btn-link btn-edit" ><i class="fa fa-pencil-alt text-warning"></i></button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('css-plugin')
<link rel="stylesheet" href="{{ url('/') }}/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ url('/') }}/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection

@section('js-plugin')
<script src="{{ url('/') }}/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('/') }}/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": true,
        "searching": false,

      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>


@endsection
