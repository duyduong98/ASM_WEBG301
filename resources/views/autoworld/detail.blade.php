@extends('autoworld.masterAuto.masterNav')
@section('main')
    <div class="container" id="product-detail">
    <div class="card">
        <div class="content" id="product-content">
            <h1 class="display-3">Car Detail</h1>
            <div class="contaier">
                <h1 class="product-title entry-title text-uppercase">{{ $cars->car_name }}</h1>
                <div class="row" >
                    <div class="col">
                        <img class="img-fluid" src="{{ asset($cars->car_images) }}" alt="Car Images">
                    </div>
                    <div class="col">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>Brand</th>
                                <td>{{$cars->brand_name}}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{ number_format($cars->car_price,0,'.',',') }} VND</td>
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td>{{$cars->car_color}}</td>
                            </tr>
                            @php
                                list($origin, $status) = explode(',', $cars->car_descrip)
                            @endphp
                            <tr>
                                <th>Origin</th>
                                <td>{{$origin}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$status}}</td>
                            </tr>
                            <tr>
                                <th> <a type="button" href="{{ route('autoworld.index') }}" class="btn btn-success">Home Page</a></th>
                                <td> <a type="button" href="{{ route('autoworld.register') }}" class="btn btn-danger">Booking Now</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
@endsection
