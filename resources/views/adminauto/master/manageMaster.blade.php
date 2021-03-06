<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AUTO WORD ADMIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style type="text/css">
        #web-slogan{
            padding-top: 1%;
        }
        #content-header{
            padding-left: 5%;
        }
        .form-group{
            padding-left: 15px;
        }
        .header-right{

        }
        #nav-brand:hover {
            color: #e0d9b2 !important;
        }
        .product{
            padding: 10px;
        }
        .card a img{
            width: 100%;
            height: 180px;
            padding: 5px;
        }
        .popular-product{
            padding-bottom: 20px;
        }
        .option{
            padding: 5px;
        }

    </style>
</head>
<body>
<div id="header-dt" class="d-none d-md-block">
    <header id="header-1" class="header-1 bg-dark">
            <div class="row" id="content-header">
                <div class="col-3 info-solo text-white" id="web-slogan">
                    <h1>AutoWorld</h1>
                    <p>Kingdom of high-rise cars</p>
                </div>
                <div class="col-4" style="padding-top: 1%">
                    <div class="d-flex justify-content-center">
                        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link h4" href="{{ route('cars.index') }}" >
                                        Cars
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link h4" href="{{ route('brands.index') }}" >
                                        Brands
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link h4" href="{{ route('customer.index') }}" >
                                        Customer
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link h4" href="{{route('admin.index')}}" >
                                        Admin
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-5" style="padding-top: 1%">
                    <div class="d-flex justify-content-end">
                        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <form action="{{ route('cars.searchByName') }}" class="form-inline" method="get" >
                                        <div class="form-group">
                                            <input type="text" name="key" class="form-control" placeholder="Search Car...">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success"><span class="bi bi-search"></span></button>
                                        </div>
                                    </form>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link h4" href="#">
                                        <i class="bi bi-person"></i>
                                        {{\Illuminate\Support\Facades\Session::get('username')}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link h4" href="{{route('auth.signout')}}">
                                        <i class="bi bi-box-arrow-left"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
    </header>
</div>

<nav role="navbar" style="margin-top: 1px">
    @yield('navbar')
</nav>

<main role="main" style="padding:0 5%">
    @yield('main')
</main>

</body>
</html>
