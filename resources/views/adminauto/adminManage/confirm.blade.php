@extends('adminauto.master.manageMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete</h1>
        @include('adminauto.partial.adminDetail')
        <form action="{{ route('adminManage.destroy', ['user_name' => $admin->user_name]) }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$admin->user_name }}">
            <button type="submit" class="btn btn-danger">DELETE</button>
            <a href="{{ route('admin.index') }}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
