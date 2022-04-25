@extends('adminauto.master.manageMaster')

@section('main')
    <div class="container">
        @include('adminauto.partial.error')
        <h1 class="display-4">Are you sure you want to delete</h1>
        <form action="{{ route('brands.destroy', ['brand_id' => $brands->brand_id]) }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$brands->brand_id }}">
            <div class="row">
                <div class="col-3">
                    <h5>Brand Name: {{$brands->brand_name}}</h5>
                    <img style="width: 300px" src="{{ asset($brands->brand_logo) }}" alt="Brand Logo">
                    <div style="padding-top: 30px">
                    <button type="submit" class="btn btn-danger">DELETE</button>
                    <a href="{{ route('brands.index') }}" class="btn btn-info">Cancel</a>
                    </div>
                </div>
        </form>
    </div>
@endsection
