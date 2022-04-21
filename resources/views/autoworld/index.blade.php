@extends('autoworld.masterAuto.masterNav')

@section('main')
    @include('autoworld.partial.carouselSlide')

    <div class="product">
        <div class="container">
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
                            <a href="" class="btn btn-success">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
