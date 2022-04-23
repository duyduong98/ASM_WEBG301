<ul class="nav  navbar-expand-sm bg-dark navbar-dark justify-content-center">
    <div class="row ">
        {{--@foreach($brands as $b)--}}
            {{--<li class="nav-item col">
                <a class="nav-link h4 text-white" id="nav-brand" href="{{ route('cars.searchByBrand', ['id' => $b->brand_id]) }}" >
                    {{ $b->brand_name }}
                </a>
            </li>--}}
           {{-- <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    Brand Name
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @foreach($brands as $b)
                    <a class="dropdown-item" href="{{ route('cars.searchByBrand', ['id' => $b->brand_id]) }}">
                        {{ $b->brand_name }}
                    </a>
                    @endforeach
                </div>
            </div>--}}
        {{--@endforeach--}}
    </div>
</ul>

