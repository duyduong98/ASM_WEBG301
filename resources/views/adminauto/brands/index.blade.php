@extends('adminauto.master.manageMaster')

@section('main')
    <div class="content">
        <div class="row">
            <table class="table table-bodered">
                <thead class="thead-dark">
                <tr>
                    <th colspan="5" class="text-center h4">Brand Manager</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Logo</th>
                    <th scope="col">&nbsp</th>
                    <th scope="col">&nbsp</th>
                </tr>
                @foreach($brands as $b)
                    <tr>
                        <td>{{$b->brand_id}}</td>
                        <td>{{$b->brand_name}}</td>
                        <td>{{$b->brand_logo}}</td>
                        <td class="text-center">
                            <a href="{{ route('$brands.edit', ['brand_id' => $b->brand_id]) }}">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('$brands.confirm', ['brand_id' => $b->brand_id]) }}">
                                <button type="button" class="btn btn-primary">Delete</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

