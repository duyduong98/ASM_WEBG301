@extends('adminauto.master.manageMaster')
@section('navbar')
    @include('adminauto.partial.navbar')
@endsection
@section('main')
    <div class="container">
        <h1 class="display-3">Edit An Exiting Car</h1>
        @include('adminauto.partial.error')
        <form action="{{ route('cars.update',['id' => $cars->car_id]) }}" method="post">
            @csrf
            @include('adminauto.partial.carFields')
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
        <br>
    </div>
@endsection
