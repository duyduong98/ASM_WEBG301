<div class="contaier">
    <h1 class="product-title entry-title text-uppercase">{{ $cars->car_name }}</h1>
    <div class="row">
        <div class="col">
            <img src="{{ asset($cars->car_images) }}" alt="Car Images">
        </div>
        <div class="col">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <th>Brand</th>
                    <td>{{$cars->brand_name}}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ number_format($cars->car_price,0,'.',',') }}</td>
                </tr>
                <tr>
                    <th>Color</th>
                    <td>{{$cars->car_color}}</td>
                </tr>
                @php
                    list($made, $uses) = explode(',', $cars->car_descrip)
                @endphp
                <tr>
                    <th>Origin</th>
                    <td>{{$made}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$uses}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
