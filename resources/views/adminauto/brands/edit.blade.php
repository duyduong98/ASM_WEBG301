@extends('adminauto.master.manageMaster')

@section('main')
    <div class="container">
        <h1 class="display-3">Update Brand</h1>
        @include('adminauto.partial.error')
        <form action="{{ route('brands.update', ['brand_id' => old('brand_id') ?? $brands->brand_id]) }}" method="post">
            @csrf
            @include('adminauto.partial.brandFields')
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
