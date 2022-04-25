<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoWorld</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style type="text/css">
        #web-slogan{
            padding-top: 1%;
        }
        #content-header{
            padding:0 5%;
        }
        .form-group{
            padding-left: 5px;
            margin-top: 5px;
        }
        .header-right{
            margin-top: 27px;
            padding-left: 15%;
        }
        #nav-brand:hover {
            color: #e0d9b2 !important;
        }
        .product{
            padding: 10px;
        }
        #img-featured{
            width: 100%;
            height: 250px;
            padding: 5px;
        }
        .card a img{
            width: 100%;
            height: 180px;
            padding: 5px;
        }
       /* main{
            background-color: #585d5a;
        }
        .main-bg{
            background-color: #585d5a;
        }*/
        body{
            background-color: #585d5a;
            /*margin-left: 0px !important;*/
        }
        .popular-product{
            padding-bottom: 20px;
        }
        .option{
            padding: 5px;
        }

        .grid{
            width: 1200px;
            max-width: 100%;
            margin: 0 auto;
        }
        .grid_row{
            display: flex;
            flex-wrap: wrap;
            margin-left: -5px;
            margin-right: -5px;
        }
        .grid_column-2-4{
            padding-right: 5px;
            padding-left: 5px;
            width: 25%;

        }
        .grid_column-2-4 ul li a{
            color: white !important;

        }
        .footer{
            color: #ffffff;
        }
        #product-detail{
            padding: 30px 0;
        }
        #product-content{
            padding: 30px;
        }
        #header-option{
            padding-top: 1.7%;
        }
        .slide{
           padding:0px 5px;
            margin-top: 1px;
        }
        #footer-1{
            position: sticky;
            top: 100%;
            padding: 1rem;
            flex-shrink: 0;
        }
        #regis-info{
            padding: 10px 15px;
        }

    </style>
</head>
<body class="d-flex flex-column min-vh-100">
<div id="header-dt" class="d-none d-md-block">
    <header id="header-1" class="header-1 bg-dark">
            <div class="row" id="content-header">
                <div class="col-2">
                    <a class="logo" href="{{route('autoworld.index')}}" rel="home" aria-label="logo">
                        <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class=" col-3 info-solo text-white" id="web-slogan">
                    <h1>AutoWorld</h1>
                    <p>Kingdom of high-rise cars</p>
                </div>
                <div class="col-7" id="header-option">
                    <div class="d-flex justify-content-end">
                        <form action="{{ route('autoworld.searchByName') }}" method="get" class="form-inline">
                            <div class="form-group">
                                <input type="text" name="key" class="form-control" placeholder="Search Car...">
                            </div>
                            {{-- /////--}}
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <span class="bi bi-search"></span>
                            </button>
                            </div>
                           {{-- /////--}}
                            <div class="form-group">
                                <a href="{{ route('autoworld.register') }}" class="btn btn-info" role="button" >
                                    Registration <span class="bi bi-pencil-square"></span>
                                </a>
                            </div>
                            {{-- /////--}}
                            <div class="form-group">
                                <a href="{{ route('autoworld.aboutus') }}" class="btn btn-primary" role="button" >
                                    About Us <span class="bi bi-person-circle"></span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </header>
</div>

<ul class="nav bg-dark navbar-dark justify-content-center" style=" margin-top: 1px">
    <div class="row ">
        @foreach($brands as $b)
            <li class="nav-item col">
                <a class="nav-link h4 text-white" id="nav-brand" href="{{ route('autoworld.searchByBrand', ['id' => $b->brand_id]) }}" >
                    {{ $b->brand_name }}
                </a>
            </li>
        @endforeach
    </div>
</ul>
<div class="main-bg">
<main role="main">
    @yield('main')
</main>

<div role="other">
    @yield('other')
</div>
</div>


<footer class="footer bg-dark" id="footer-1">
    <div class="grid">
        <div class="grid_row">
            <div class="grid_column-2-4">
                <h7 class="footer_heading">Chăm sóc khách hàng</h7>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item-link">Liên hệ</a>
                    </li>
                    <li class="footer-item">
                        <a href="{{route('autoworld.policy')}}" class="footer-item-link">Quy định, chính sách</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item-link">Điều Khoản</a>
                    </li>
                </ul>
            </div>
            <div class="grid_column-2-4">
                <h7 class="footer_heading">Về chúng tôi</h7>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-facebook"></i>
                                facebook
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-instagram"></i>
                            instagram
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-twitter"></i>
                            twitter
                        </a>
                    </li>
                </ul>
            </div>
            <div class="grid_column-2-4">
                <h7 class="footer_heading">Tổng đài hỗ trợ</h7>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-headphones"></i>
                            0912345678
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-headphones"></i>
                            0987654321
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-telephone"></i>
                            +8412344566
                        </a>
                    </li>
                </ul>
            </div>
            <div class="grid_column-2-4">
                <h7 class="footer_heading">Thời gian hoạt động</h7>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a class="footer-item-link">
                            <i class="bi bi-calendar"></i>
                            Mở cửa: thứ 2 đến thứ 6
                        </a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-item-link">
                            Địa điểm: số 3 Phạm Văn Bạch - Cầu Giấy - Hà Nội
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
