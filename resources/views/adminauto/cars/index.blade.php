@extends('adminauto.master.manageMaster')
@section('navbar')
    @include('adminauto.partial.navbar')
@endsection
@section('main')
    <div class="product">
        <div class="">
            <div class="row">
                <table class="table table-bordered ">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th colspan="5" class="h3">Cars Management</th>
                            <th colspan="3">
                                <a href="{{route('cars.create')}}">
                                    <button class="btn btn-info">ADD New Car</button>
                                </a>
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
                                <th><img class="img-fluid" src="{{ asset($c->car_images) }}" alt="Product Images"></th>
                                    <td id="info-car">{{ $c->car_id }}</td>
                                    <td id="info-car">{{ $c->car_name }}</td>
                                    <td id="info-car">{{ $c->brand_name }}</td>
                                    <td id="info-car">{{ number_format($c->car_price,0,'.',',') }}</td>
                                {{--////////////// DETAIL BUTTON ///////////////////////////////--}}
                                    <td id="option-car">
                                        <a href="{{ route('cars.detail',['id' => $c->car_id]) }}">
                                            <button type="button" class="btn btn-primary">Detail</button>
                                        </a>
                                    </td>
                                {{--////////////// EDIT BUTTON ///////////////////////////////--}}
                                    <td id="option-car">
                                        <a href="#">
                                            <button type="button" class="btn btn-success">Edit</button>
                                        </a>
                                    </td>
                                {{--////////////// DELETE BUTTON ///////////////////////////////--}}
                                    <td id="option-car">
                                        <a href="{{route('cars.confirm',['id' => $c->car_id])}}">
                                            <button type="button" class="btn btn-danger">DELETE</button>
                                        </a>
                                    </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


