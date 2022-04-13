@extends('adminauto.master.manageMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete</h1>
        @include('adminauto.partial.customerDetail')
        <form action="{{ route('customer.destroy', ['id' => $customer->cus_id]) }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$customer->cus_id }}">
            <button type="submit" class="btn btn-danger">DELETE</button>
            <a href="{{ route('customer.index') }}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
