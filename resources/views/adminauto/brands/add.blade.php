@extends('adminauto.master.manageMaster')
@section('main')
    <div class="container">
        <h1 class="display-3">Create New Brand</h1>
        @include('adminauto.partial.error')
        <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('adminauto.partial.brandFields')
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
        <br>
    </div>
@endsection
