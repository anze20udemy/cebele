<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Bootstrap4, Multipurpose, Bee, Beekeeping, Honey, Honey Bee, responsive, template, Beekeeper, Hive, html, html5, css" />
    <meta name="author" content="web24service">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/assets/images/fevicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="/assets/css/animate.min.css">

    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">

    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">

    <!-- chat CSS -->
    <link rel="stylesheet" href="/assets/css/chat.css">

    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="/assets/css/slicknav.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- jQuery -->
    <script src="/assets/js/jquery-2.1.3.min.js"></script>

    @yield('extra-css')
</head>
<body>
<!-- Main Wrapper Start -->
<div class="main-wrapper">

    <!-- skiptocontent start ( This section for blind and Google SEO, Also for page speed )-->
    <a id="skiptocontent" href="#maincontent">skip navigation</a>
    <!-- skiptocontent End -->

    <!-- Preloader start -->
    <div class="bee-site-preloader-wrapper">
        <div class="preloder-logo"><img src="/assets/images/logo.png" alt="Čebelarstvo Zupanek"/></div>
        <div class="spinner">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header area start -->
@include('partials.header')
    <!-- Header area End -->

    <!-- Main menu start -->
@include('partials.navigation')
    <!-- Main menu end -->

@include('partials.breadcrumbs')


@yield('content')

@include('partials.newsletter')


    <!-- Footer start -->
@include('partials.footer')
    <!-- Footer end -->
</div>
<!-- Main Wrapper end -->

<!-- Start scroll top -->
<div class="scrollup"><i class="fa fa-angle-up"></i></div>
<!-- End scroll top -->

<!-- Tether JS -->
<script src="/assets/js/tether.min.js"></script>




<!-- OwlCarousel JS -->
<script src="/assets/js/owl.carousel.min.js"></script>

<!-- Magnific Popup JS (za shop product details)-->
<script src="/assets/js/jquery.magnific-popup.min.js"></script>

<!-- Gallery Filter -->
<script src="/assets/js/jquery.mixitup.min.js"></script>

<!-- Easy Zoom JS -->
<script src="/assets/js/easyzoom.js"></script>

<!-- WOW JS -->
<script src="/assets/js/wow-1.3.0.min.js"></script>



<!-- Coming Soon JS -->
<script src="/assets/js/coming-soon.js"></script>

<!-- SlickNav JS -->
<script src="/assets/js/jquery.slicknav.min.js"></script>

<!-- Active JS -->
<script src="/assets/js/active.js"></script>

<!-- Bootstrap JS -->
<script src="/assets/js/bootstrap.min.js"></script>

@yield('extra-js')
</body>
</html>