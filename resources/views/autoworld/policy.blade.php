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
        h2{
            color: darkred;
        }
        h5{
            color: darkblue;
        }
        p b{
            color: red;
        }
        #h1{
            color: red;
        }
        #policy-main{
            padding: 25px 0;
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
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <span class="bi bi-search"></span>
                            </button>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Fanpage <span class="bi bi-facebook"></span></button>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('autoworld.register') }}" class="btn btn-info" role="button" >
                                Registration <span class="bi bi-person-circle"></span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
</div>
<div class="main-bg container" id="policy-main">
    <main role="main">
        <div class="card" style="padding: 25px 40px" id="policy-info">
            <h1 STYLE="text-align: center" id="h1"><b>POLICY OF AUTOWORLD</b></h1>
            &nbsp;
            <h2 style="text-align: center" ><strong>PURPOSE OF POLICIES</strong></h2>
            <div class="col-md-12">
                <p>Ensure the rights and interests of customers in using our products.</p>
                <p>To ensure that the goods of <b>Autoworld</b> Company are not degraded in value when problems arise, warranty must be carried out.</p>
                <p>Product warranty: Overcoming defects and technical problems caused by manufacturer's fault.</p>
                <p>Maintenance and servicing: Including cleaning and sanitizing the product, checking the system, repairing minor repairable failures (excluding equipment replacement). Time and cost of maintenance and maintenance depends on the agreement between <b>Autoworld</b> and customers.</p>
                &nbsp;
                <p style="text-align: center">--------------------------------------------------------------------------------------</p>
            </div>
            &nbsp;
            <h2 style="text-align: center"><strong>WARRANTY POLICY</strong></h2>
            <div class="col-md-12">
                <p>Each device or tool has its own operating principle, and for long-term use, it also requires periodic care and maintenance. The same goes for cars, in order to have a beautiful and durable car, you have to focus on maintenance and warranty.</p>
                &nbsp;
                <p style="text-align: center">-----------------------------------------------------------</p>
                &nbsp;
                <h5 style="text-align: center"><strong><i class="bi bi-exclamation-diamond"></i> CAR WARRANTY PRINCIPLES <i class="bi bi-exclamation-diamond"></i></strong></h5>
                <p>Service after a car is delivered to customers is extremely important, that's why dealers always try to improve warranty policy. In order to bring customers a durable car over time.</p>
                <p>Customers need to maintain the vehicle maintenance time according to the schedule specified for each individual vehicle model. At the same time, you need to perform a vehicle inspection before receiving the vehicle from the dealer to ensure that the vehicle is in good working order.</p>
                <p>Conditions you have car warranty: your car must keep the original design of the manufacturer, do not arbitrarily change the structure of the car. Also comply with the documentation on the use of the car. When the car has a problem, it is necessary to immediately notify the dealer to promptly overcome the consequences and repair quickly.</p>
                &nbsp;
                <p style="text-align: center">-----------------------------------------------------------</p>
                &nbsp;
                <h5 style="text-align: center"><strong><i class="bi bi-exclamation-diamond"></i> CAR WARRANTY SCOPE <i class="bi bi-exclamation-diamond"></i></strong></h5>
                <p>Car warranty policy is implemented from 12 months, 36 months from the date of purchase. Or it will be based on the number of kilometers that the customer has used equivalent: 20,000 km, 50,000km, 100,000km, etc. In case you transfer the owner, the warranty policy will still apply to the person who is transferring the car. bowl. In the process of using your car, there are problems with spare parts or technical quality. Your car will be repaired or replaced with faulty components. Under the warranty any replacement or repair will be free of charge.</p>
                &nbsp;
                <p style="text-align: center">-----------------------------------------------------------</p>
                &nbsp;
                <h5 style="text-align: center"><strong><i class="bi bi-exclamation-diamond"></i> TERMS NOT IN THE WARRANTY SCOPE <i class="bi bi-exclamation-diamond"></i></strong></h5>
                <p>Your vehicle has been identified as the cause of an accident or failure due to a lack of routine maintenance. You use the vehicle for the wrong purpose and do not have a proper maintenance and maintenance regime.</p>
                <p>Using or replacing the vehicle's parts that are not correct by the manufacturer or using the vehicle for improper purposes. Besides, there are wear and tear over time in paint color, cushion cover or worn out spare parts such as spark plugs, brake pads, etc.</p>
                <p>In the process of using the car, you should pay attention to the warranty policy as well as the period of periodic maintenance for the car. Let your car always be beautiful over time and you will be the smartest and safest car user.</p>
            </div>
        </div>
    </main>
</div>

<footer class="footer bg-dark" id="footer-1">
    <div class="grid">
        <div class="grid_row">
            <div class="grid_column-2-4">
                <h7 class="footer_heading"><b>Customer Care</b></h7>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item-link">Contact</a>
                    </li>
                    <li class="footer-item">
                        <a href="{{route('autoworld.policy')}}" class="footer-item-link">Regulations - Policies</a>
                    </li>
                    <li class="footer-item">
                        <a href="{{route('autoworld.installment')}}" class="footer-item-link">Loans support</a>
                    </li>
                </ul>
            </div>
            <div class="grid_column-2-4">
                <h7 class="footer_heading"><b>About Us</b></h7>
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
                <h7 class="footer_heading"><b>Support Call Center</b></h7>
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
                <h7 class="footer_heading"><b>Operating Time</b></h7>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a class="footer-item-link">
                            <i class="bi bi-calendar"></i>
                            Opening: from Monday to Friday
                        </a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-item-link">
                            Address: số 3 Phạm Văn Bạch - Cầu Giấy - Hà Nội
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

