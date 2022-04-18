@extends('adminauto.master.manageMaster')

@section('main')
    <div class="content">
        <div class="row">
            <table class="table table-bodered">
                <thead class="thead-dark">
                <tr>
                    <th colspan="3" class="text-center h4">Brand Manager</th>
                    <th colspan="2" class="text-center">
                        <a href="{{route('brands.create')}}">
                            <button class="btn btn-info" >New Brand</button>
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="text-center">
                    <th scope="col">Brand Logo</th>
                    <th scope="col">ID</th>
                    <th scope="col">Brand Name</th>
                    <th colspan="2">Option</th>
                </tr>
                @foreach($brands as $b)
                    <tr class="text-center">
                        <td>
                            <img id="brand-image" class="img-fluid" src="{{ asset($b->brand_logo)}}" alt="logo Image">

                        </td>
                        <td id="brand-id">{{$b->brand_id}}</td>
                        <td id="brand-id">{{$b->brand_name}}</td>
                        <td id="option-brand" class="text-center">
                            <a href="{{ route('brands.edit', ['brand_id' => $b->brand_id]) }}">
                                <button type="button" class="btn btn-success">Edit</button>
                            </a>
                        </td>
                        <td id="option-brand" class="text-center">
                            <a href="{{ route('brands.confirm', ['brand_id' => $b->brand_id]) }}">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
