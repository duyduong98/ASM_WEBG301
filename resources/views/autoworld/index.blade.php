@extends('autoworld.masterAuto.masterNav')

@section('main')
    {{--@include('autoworld.partial.carouselSlide')--}}

    <div class="top-product" style="padding-top: 20px">
        <div class="container">
            <h2 class="title text-center" style="color: white">
                Featured Products
            </h2>
            <div class="row">
                @foreach($mostCars as $m)
                <div class="most-product col-md-4">
                    <div class="card">
                        <a href="{{route('autoworld.detail', ['id' => $m->car_id])}}"><img id="img-featured" src="{{asset($m->car_images)}}" alt="Product Images"></a>
                        <div class="caption">
                            <h5>{{ $m->car_name }}</h5>
                            <div class="text-danger font-weight-bold p-1">
                                <strong>{{ number_format($m->car_price,0,'.',',') }} VND</strong>
                            </div>
                            <div class="option">
                                <a href="{{ route('autoworld.detail', ['id' => $m->car_id]) }}" class="btn btn-info">Detail</a>
                                <a href="" class="btn btn-success">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="product" style="padding-top: 20px">
        <div class="container">
            <h2 class="title text-center" style="color: white">
                Popular Products
            </h2>
            <div class="row">
                @foreach($cars as $c)
                <div class="popular-product col-md-3">
                    <div class="card">
                        <a href=""><img src="{{asset($c->car_images)}}" alt="Product Images"></a>
                        <div class="caption">
                            <h7>{{ $c->car_name }}</h7><br>
                            <div class="text-danger font-weight-bold p-1">
                            <strong>{{ number_format($c->car_price,0,'.',',') }} VND</strong>
                            </div>
                            <div class="option">
                            <a href="{{ route('autoworld.detail', ['id' => $c->car_id]) }}" class="btn btn-info">Detail</a>
                            <a href="" class="btn btn-success">Booking Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
