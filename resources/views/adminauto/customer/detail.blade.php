@extends('adminauto.master.manageMaster')

@section('main')
    <div class="container">
        <h1 class="display-3">Customer Detail</h1>
        <div class="content">
            @include('adminauto.partial.customerDetail')
            <a type="button" href="{{ route('customer.index') }}" class="btn btn-info">Index</a>
        </div>
    </div>
@endsection
