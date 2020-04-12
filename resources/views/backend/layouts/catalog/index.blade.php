@extends('backend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Daftar Informasi
                </div>
                <div class="card-tools">
                    <a href="{{ route('katalog.create') }}">
                        <button class="btn btn-warning btn-sm">
                            <i class="fa fa-trash"></i>
                            Trash Post
                        </button>
                        <button class="btn btn-primary btn-sm"><i class="fa fa-plus-circle mr-2"></i>Tambah Informasi</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID Page</th>
                      <th>Page Name</th>
                      <th>Created at</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($catalogs as $catalog)
                    <tr>
                        <td>{{ $catalog->id }}</td>
                        <td>{{$catalog->title}}</td>
                        <td>{{ $catalog->created_at }}</td>
                        <td class="text-center">
                            <a href="{{ route('katalog.edit' , $catalog->id) }}">
                                <button class="btn btn-outline-warning btn-sm">
                                    <i class="fa fa-pen-square mr-1"></i>
                                    Edit
                                </button>
                            </a>
                            <a href="{{ route('page.detail-page' , $catalog->slug) }}">
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="fa fa-eye mr-1"></i>
                                    View
                                </button>
                            </a>
                            <a href="{{ route('katalog.hapus' , $catalog->id) }}">
                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="fa fa-trash-alt mr-1"></i>
                                    Hapus
                                </button>
                            </a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID Page</th>
                        <th>Page Name</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
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
        "autoWidth": false,
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
