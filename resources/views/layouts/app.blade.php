<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">


    <title>Martplace -  @yield('title')</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('default/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('default/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('default/css/fontello.css')}}">
    <link rel="stylesheet" href="{{ asset('default/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('default/css/lnr-icon.css')}}">
    <link rel="stylesheet" href="{{ asset('default/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('default/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('default/css/trumbowyg.min.css')}}">
    <link rel="stylesheet" href="{{ asset('default/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('default/style.css')}}">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('default/images/favicon.png')}}">
</head>

<body class="preload home1 mutlti-vendor">

    <!-- ================================
    START MENU AREA
================================= -->
    <!-- start menu-area -->
        @include('includes.menubar')
    <!-- end /.menu-area -->
    <!--================================
    END MENU AREA
=================================-->

    <!--================================
    START HERO AREA
=================================-->
    @yield('content')
    <!--================================
    END CALL TO ACTION AREA
=================================-->

    <!--================================
    START FOOTER AREA
=================================-->
    @include('includes.footer')
    <!--================================
    END FOOTER AREA
=================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    <!-- inject:js -->
    <script src="{{ asset('default/js/vendor/jquery/jquery-1.12.3.js')}}"></script>
    <script src="{{ asset('default/js/vendor/jquery/popper.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/jquery/uikit.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/chart.bundle.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/grid.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/jquery.barrating.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/jquery.easing1.3.js')}}"></script>
    <script src="{{ asset('default/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/slick.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/tether.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/trumbowyg.min.js')}}"></script>
    <script src="{{ asset('default/js/vendor/waypoints.min.js')}}"></script>
    <script src="{{ asset('default/js/dashboard.js')}}"></script>
    <script src="{{ asset('default/js/main.js')}}"></script>
    <script src="{{ asset('default/js/map.js')}}"></script>
    <!-- endinject -->
</body>

</html>