@extends('adminauto.master.manageMaster')

@section('main')
    <div class="container">
        <h1 class="display-3">Update Admin</h1>
        @include('adminauto.partial.error')
        <form action="{{ route('adminManage.update', ['user_name' => old('user_name') ?? $admin->user_name]) }}" method="POST">
            @csrf
            @include('adminauto.partial.adminFields')
            <div class="form-group">
            <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
@endsection
