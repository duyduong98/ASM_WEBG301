@extends('adminauto.master.manageMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete</h1>
        @include('adminauto.partial.adminDetail')
        <form action="{{ route('brands.destroy', ['brand_id' => $brands ->brand_id]) }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$brands->brand_id }}">
            <button type="submit" class="btn btn-danger">DELETE</button>
            <a href="{{ route('brands.index') }}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
