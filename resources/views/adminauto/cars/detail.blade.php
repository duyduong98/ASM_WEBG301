@extends('adminauto.master.manageMaster')
@section('navbar')
    @include('adminauto.partial.navbar')
@endsection
@section('main')
    <div class="{{--container--}}">
        <h1 class="display-3">Car Detail</h1>
        <div class="content">
            @include('adminauto.partial.carDetail')
            <br>
            <a type="button" href="{{ route('cars.index') }}" class="btn btn-info"><< Index <<</a>
            <br>
            <br>
        </div>
    </div>
@endsection
