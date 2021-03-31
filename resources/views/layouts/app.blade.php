<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OZDROWO</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/partials/header-common.css" type="text/css">
    <link rel="stylesheet" href="css/general.css" type="text/css">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src=https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js></script>
    <script src="js/partials/header-common.js"></script>
</head>
<body>

    <!--Navbar-->
    <div class="navbar transparent navbar-inverse navbar-fixed-top">
        <nav class="navbar-inner">
            <div id="logo">
                <h4>
                <a href="/">
                    <img src="img/logo_small.png">
                </a>
                </h4>
            </div>
            <ul class="nav-links">
                <li><a href="#">Zdrowie</a></li>
                <li><a href="#">Umysł</a></li>
                <li><a href="#">Uroda</a></li>
                <li>
                    <a id="facebook" class="nav-link" href="https://www.facebook.com/OZDROWO" target="_blank">
                        <i class="fa fa-facebook" style="font-size: 29px;"></i>
                    </a>
                </li>
                <li>
                    <a id="instagram" class="nav-link" href="https://www.instagram.com/ozdrowo_blog/" target="_blank">
                        <i class="fa fa-instagram" style="font-size: 30px;"></i>
                    </a>
                </li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </div>
    
    @yield('content')
    
    <!--Footer-->
    <footer class="text-center">
        <div class="row">
            <div class="col-sm-12">
                <p id="copyright"></p>
            </div>
        </div>
    </footer>
</body>
</html>