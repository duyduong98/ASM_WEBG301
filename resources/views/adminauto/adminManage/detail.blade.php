@extends('adminauto.master.manageMaster')

@section('main')
    <div class="container">
        <h1 class="display-3">Admin Detail</h1>
        <div class="content">
            @include('adminauto.partial.adminDetail')
            <a type="button" href="{{ route('adminManage.index') }}" class="btn btn-info">Admin Index</a>
        </div>
    </div>
@endsection
