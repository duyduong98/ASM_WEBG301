@extends('adminauto.master.manageMaster')
@section('navbar')
    @include('adminauto.partial.navbar')
@endsection
@section('main')
    <div class="{{--container--}}">
        <h1 class="display-3">Are you sure you want to delete this car?</h1>
        <div class="content">
            @include('adminauto.partial.carDetail')
            <br>
            <form action="{{ route('cars.destroy', ['id' => $cars->car_id]) }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $cars->car_id }}">
                <button type="submit" class="btn btn-danger">DELETE</button>
                <a href="{{ route('cars.index') }}" class="btn btn-info">Cancel</a>
            </form>
        </div>
    </div>
    <br>
@endsection
