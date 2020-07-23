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
            <div class="col-12">
            <div class="card">
                    <div class="card-header">
                        Daftar Slider
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-sm table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>No. </th>
                              <th>Nama</th>
                              <th>Kantor</th>
                              <th>Website</th>
                              <th>Dibuat</th>
                              <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($partners as $key => $partner)
                                <tr>
                                    <td class="align-middle">{{ $key+1 }}</td>
                                    <td class="align-middle">{{$partner->nama_perusahaan}}</td>
                                    <td class="align-middle text-center">{{ $partner->kantor_perusahaan }}</td>
                                    <td class="align-middle">{{ $partner->website_perusahaan }}</td>
                                    <td class="align-middle">{{ $partner->created_at }}</td>
                                    <td class="align-middle">
                                        <div class="row justify-content-center">
                                            <form action="{{ route('partner-perusahaan.destroy', $partner->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-link"><i class="fa fa-trash-alt text-danger"></i></button>
                                            </form>
                                            <a href="{{ route('partner-perusahaan.edit', $partner->id) }}">
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
