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
        .form-group{
            padding-left: 15px;
        }
        .header-right{
            margin-top: 15px
        }
    </style>
</head>
<body>
<div id="header-dt" class="d-none d-md-block">
    <header id="header-1" class="header-1 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-3 info-solo text-white">
                    <h1>AutoWorld</h1>
                    <p>Kingdom of high-rise cars</p>
                </div>
                <div class="col-8 text-right header-right">
                    <form action="#" class="form-inline" method="" >
                        <div class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="Search Car...">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><span class="bi bi-search"></span></button>
                        </div>
                        <div class="form-group">
                            <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding-left: 5%">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link h4" href="#" >
                                            Cars
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link h4" href="#" >
                                            Brands
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link h4" href="#" >
                                            Customer
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link h4" href="#" >
                                            Admin
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
</div>
<main role="main" style="padding:0 5%">
    @yield('main')
</main>

<div role="other">
    @yield('other')
</div>
</body>
</html>
