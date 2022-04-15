@extends('adminauto.master.manageMaster')
@section('navbar')
    @include('adminauto.partial.navbar')
@endsection
@section('main')
    <div class="product">
        <div class="container">
           {{-- <div class="row">
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
            </div>--}}
            <div class="row">
                <table class="table table-bordered ">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th colspan="5" class="h3">Cars Management</th>
                            <th colspan="3">
                                <button type="button" class="btn btn-primary"{{-- data-toggle="modal" data-target="#modalProduct"--}}>
                                        Add New Car
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <th>Images</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th colspan="3">Option</th>
                        </tr>
                        @foreach($cars as $c)
                            <tr class="text-center">
                                <th><img src="{{ asset($c->car_images) }}" alt="Product Images"></th>
                                    <td id="info-car">{{ $c->car_id }}</td>
                                    <td id="info-car">{{ $c->car_name }}</td>
                                    <td id="info-car">{{ $c->brand_name }}</td>
                                    <td id="info-car">{{ number_format($c->car_price,0,'.',',') }}</td>
                                    <td id="info-car"></td>
                                    <td id="info-car"></td>
                                    <td id="info-car"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
