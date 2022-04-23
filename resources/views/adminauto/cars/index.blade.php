@extends('adminauto.master.manageMaster')
@section('navbar')
    @include('adminauto.partial.navbar')
@endsection
@section('main')
    <div class="product">
        <div class="container">
            <div class="row">
                <table class="table table-bordered ">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th colspan="3" class="h4 col-md-6">Cars Management</th>
                            <th class="col-md-1">
                                <div class="dropdown">
                                    <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                        Brand
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @foreach($brands as $b)
                                            <a class="dropdown-item" href="{{ route('cars.searchByBrand', ['id' => $b->brand_id]) }}">
                                                {{ $b->brand_name }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </th>
                            <th colspan="2" class="col-md-2">
                                <a href="{{route('cars.create')}}">
                                    <button class="btn btn-info ">ADD New Car</button>
                                </a>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Price (VND)</th>
                            <th colspan="3">Option</th>
                        </tr>
                        @foreach($cars as $c)
                            <tr>
                                    <td id="info-car">{{ $c->car_name }}</td>
                                    <td id="info-car" class="text-center" >{{ $c->brand_name }}</td>
                                    <td id="info-car" class="text-center">{{ number_format($c->car_price,0,'.',',') }}</td>
                                {{--////////////// DETAIL BUTTON ///////////////////////////////--}}
                                    <td id="option-car" class="text-center">
                                        <a href="{{ route('cars.detail',['id' => $c->car_id]) }}">
                                            <button type="button" class="btn btn-primary">Detail</button>
                                        </a>
                                    </td>
                                {{--////////////// EDIT BUTTON ///////////////////////////////--}}
                                    <td id="option-car" class="text-center">
                                        <a href="{{ route('cars.edit',['id' => $c->car_id]) }}">
                                            <button type="button" class="btn btn-success">Edit</button>
                                        </a>
                                    </td>
                                {{--////////////// DELETE BUTTON ///////////////////////////////--}}
                                    <td id="option-car" class="text-center">
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


