@extends('adminauto.master.manageMaster')

@section('main')
    <div class="container">
        <div class="row">
            <table class="table table-bodered">
                <thead class="thead-dark">
                <tr>
                    <th colspan="4" class="text-center h4">Admin Manager</th>
                    <th class="text-center">
                            <a href="{{route('adminManage.edit',['user_name'=>\Illuminate\Support\Facades\Session::get('username')])}}">
                                <button type="submit" class="btn btn-info">Manager your Acount</button></a>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>

                </tr>
                @foreach($adminManage as $c)
                    <tr>
                        <td>{{ $c->user_name }}</td>
                        <td>{{ $c->email }}</td>
                        <td>{{ $c->address }}</td>
                        <td>{{ $c->contact }}</td>
                        <td class="text-center">
                            <a href="{{ route('adminManage.detail', ['user_name' => $c->user_name]) }}">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
