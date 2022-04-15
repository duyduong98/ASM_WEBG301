@extends('autoworld.masterAuto.masterNav')

@section('main')
    <div class="slide">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="qc">
                            <img  src="{{ asset('images\slide-auto\hinh-anh-o-to-con.jpg') }}" alt="First slide">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="qc">
                            <img src="{{ asset('images\slide-auto\hinh-nen-xe-oto-dep-1.jpg') }}" alt="Second slide">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="qc">
                            <img src="{{ asset('images\slide-auto\o-to-moi-4.jpg') }}" alt="Third slide">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

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
                            <strong>{{ number_format($c->car_price,0,'.',',') }}</strong>
                            </div>
                            <div class="option">
                            <a href="" class="btn btn-info">Detail</a>
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
