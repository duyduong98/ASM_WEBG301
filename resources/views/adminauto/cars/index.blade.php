@extends('adminauto.master.manageMaster')
@section('navbar')
    @include('adminauto.partial.navbar')
@endsection
@section('main')
    <div class="product">
        <div class="container">
            <div class="row">
                @foreach($cars as $c)
                    <div class="popular-product col-md-3">
                        <div class="card">
                            <a href=""><img src="{{asset($c->car_images)}}" alt="Product Images"></a>
                            <div class="caption">
                                <h7>{{ $c->car_name }}</h7><br>
                                <div class="option">
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
