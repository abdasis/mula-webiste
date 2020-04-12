@extends('backend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Tambah Kategori
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama_kategori">Nama Kategori</label>
                                <input type="text" name="category_name" class="form-control" placeholder="Nama Kategori">
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
                            @foreach ($categories as $categori)
                            <tr>
                                <td>{{ $categori->id }}</td>
                                <td>{{$categori->category_name}}</td>
                                <td>{{ $categori->created_at }}</td>
                                <td>{{ $categori->updated_at }}</td>
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
