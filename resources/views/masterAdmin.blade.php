<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('adminFrontend/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>DashLite Template</title>
    <!-- StyleSheets  -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="{{ asset('adminFrontend/assets/css/dashlite.css?ver=3.1.1')}}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('adminFrontend/assets/css/theme.css?ver=3.1.1')}}">
</head>




@include('admin.adminNavbar')


@yield('adminDashboard')
@yield('adminLogo')
@yield('adminSlider')
@yield('adminNavbar')
@yield('adminSmedia')
@yield('adminProduct')
@yield('adminOrder')
@yield('adminNavbar')
@yield('blog')
@yield('blogGrid')
@yield('catagory')
@yield('contactView')
@yield('faqview')



@include('admin.adminFooter')




 <!-- Including Jquery -->
 <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery.cookie.js')}}"></script>
        <script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/instagram-feed.js')}}"></script>
        <!-- Including Javascript -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/lazysizes.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/cart.js')}}"></script>
        <script src="{{asset('assets/alertifyjs/alertify.min.js')}}"></script>
        <!--End Instagram Js-->

   
    
    <script src="{{ asset('//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js')}}"></script>
    <script src="{{ asset('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js')}}"> </script>
    <script src="{{ asset('http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap-modal.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap-transition.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


</html>