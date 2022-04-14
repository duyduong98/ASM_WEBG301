@extends('adminauto.master.manageMaster')

@section('main')
    <div class="content">
        <div class="row">
            <table class="table table-bodered">
                <thead class="thead-dark">
                <tr>
                    <th colspan="4" class="text-center h4">Product  Manager</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="col">&nbsp</th>
                    <th scope="col">&nbsp</th>
                    <th scope="col">&nbsp</th>
                    <th scope="col">&nbsp</th>
                </tr>
                @foreach($customer as $c)
                    <tr>
                        <td>{{ $c->cus_name}}</td>
                        <td>{{ $c->cus_dob }}</td>
                        @if($c->cus_gender == "M")
                            <td>Male</td>
                        @elseif($c->cus_gender == "F")
                            <td>Female</td>
                        @elseif($c->cus_gender == "O")
                            <td>Other</td>
                        @endif
                        <td>{{ $c->cus_address }}</td>
                        <td>{{ $c->cus_email }}</td>
                        <td>{{ $c->cus_phone }}</td>
                        <td class="text-center">
                            <a href="{{ route('customer.detail', ['id' => $c->cus_id]) }}">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('customer.edit', ['id' => $c->cus_id]) }}">
                                <button type="button" class="btn btn-success">Edit</button>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('customer.confirm', ['id' => $c->cus_id]) }}">
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
