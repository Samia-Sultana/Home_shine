<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/home8-jewellery.html   11 Nov 2019 12:30:11 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Shine Interiors Design & Decoration</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png' )}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png' )}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png' )}}">
    <link rel="manifest" href="/{{ asset('assets/images/favicon/site.webmanifest') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css ' )}}">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css' )}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets/alertifyjs/css/alertify.min.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets/alertifyjs/css/themes/default.min.css' )}}">

    <style>
        body {
            background-color: #f5f5f5;
        }
    </style>
</head>

@include('user.userNavbar')


@yield('userWelcome')






@include('user.userFooter')

<!-- Including Jquery -->
<script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js' )}}"></script>
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js' )}}"></script>
<script src="{{ asset('assets/js/vendor/jquery.cookie.js' )}}"></script>
<script src="{{ asset('assets/js/vendor/wow.min.js' )}}"></script>
<script src="{{ asset('assets/js/vendor/instagram-feed.js' )}}"></script>
<!-- Including Javascript -->
<script src="{{ asset('assets/js/bootstrap.min.js' )}}"></script>
<script src="{{ asset('assets/js/plugins.js' )}}"></script>
<script src="{{ asset('assets/js/popper.min.js' )}}"></script>
<script src="{{ asset('assets/js/lazysizes.js' )}}"></script>
<script src="{{ asset('assets/js/main.js' )}}"></script>
<script src="{{ asset('assets/js/cart.js' )}}"></script>
<script src="{{ asset('assets/alertifyjs/alertify.min.js' )}}"></script>
<!--End Instagram Js-->

</html>