@extends('adminauto.master.manageMaster')

@section('main')
    <div class="content">
        <div class="row">
            <table class="table table-bodered">
                <thead class="thead-dark">
                <tr>
                    <th colspan="7" class="text-center h4">Admin Manager</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>
                    <th scope="col">&nbsp</th>
                    <th scope="col">&nbsp</th>
                    <th scope="col">&nbsp</th>
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
                        <td class="text-center">
                            <a href="{{ route('adminManage.edit', ['user_name' => $c->user_name]) }}">
                                <button type="button" class="btn btn-success">Edit</button>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('adminManage.confirm', ['user_name' => $c->user_name]) }}">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
