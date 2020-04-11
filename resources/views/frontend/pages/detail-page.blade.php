@extends('frontend.layouts.app')


@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
         <h1 class="display-4">{{ $page->title }}</h1>
        </div>
    </div>
    <div class="content-wrapper container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="content-wrapper">
                    <div class="card">

                        <div class="card-body">
                            <div class="meta">
                                <div class="card-text">
                                </div>
                            </div>
                            <div class="card-text">
                                {!! $page->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
