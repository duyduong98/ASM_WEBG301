@extends('adminauto.master.manageMaster')

@section('main')
    <div class="container">
        <h1 class="display-3">Update Customer</h1>
        @include('adminauto.partial.error')
        <form action="{{ route('customer.update', ['id' => old('id') ?? $customer->cus_id]) }}" method="POST">
            @csrf
            @include('adminauto.partial.customerFields')
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
