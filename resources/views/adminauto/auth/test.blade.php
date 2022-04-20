<dl class="row">
    <dd class="col-md-9">{{ $admin->username}}</dd>
    <dd class="col-md-9">{{ $admin->password}}</dd>
@foreach($key as $k)
        <dd class="col-md-9">{{ $k}}</dd>
    @endforeach
</dl>

