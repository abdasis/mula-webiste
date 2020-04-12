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
                        <form action="{{ route('category.create') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama_kategori">Nama Kategori</label>
                                <input type="text" class="form-control" placeholder="Nama Kategori">
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
                            @foreach ($categories as $categori)
                            <tr>
                                <td>{{ $categori->id }}</td>
                                <td>{{$categori->category_name}}</td>
                                <td>{{ $categori->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{ route('katalog.edit' , $categori->id) }}">
                                        <button class="btn btn-outline-warning btn-sm">
                                            <i class="fa fa-pen-square mr-1"></i>
                                            Edit
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
        </div>
    </div>
@endsection
