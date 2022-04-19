@extends('adminauto.master.manageMaster')

@section('main')
    <div class="container">
        <div class="row ">
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th colspan="2" class="text-center h4">Brand Manager</th>
                    <th colspan="2" class="text-center">
                        <a href="{{route('brands.create')}}">
                            <button class="btn btn-info" >New Brand</button>
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="text-center">
                    <th class="col-2">Brand Name</th>
                    <th class="col-9">Description</th>
                    <th colspan="2" class="col">Option</th>
                </tr>
                @foreach($brands as $b)
                    <tr>
                        <td class="text-center" id="brand-id">{{$b->brand_name}}</td>
                        <td id="brand-id">{{$b->brand_descrip}}</td>
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
