<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding-left: 5%">
    <div class="container">
        <ul class="navbar-nav">
                <div class="row">
                    @foreach($brands as $b)
                    <li class="nav-item col">
                        <a class="nav-link h4 text-white" id="nav-brand" href="{{ route('cars.searchByBrand', ['id' => $b->brand_id]) }}" >
                            {{ $b->brand_name }}
                        </a>
                    </li>
                @endforeach
                </div>
        </ul>
    </div>
</nav>
