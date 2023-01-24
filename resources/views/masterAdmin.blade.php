<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  
    <!-- Page Title  -->
    <title></title>
    <!-- StyleSheets  -->
     <!-- Fonts -->
     <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('adminFrontend/assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/plugins/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/plugins/owlcarousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/plugins/fontawesome/css/all.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap4.min.css">

    
    <link rel="stylesheet" href="{{asset('adminFrontend/assets/css/style.css')}}">


    

 

    
</head>



@include('admin.adminNavbar')


@yield('adminDashboard')
@yield('adminLogo')
@yield('adminSlider')
@yield('adminNavbar')
@yield('adminSmedia')
@yield('blog')
@yield('blogGrid')
@yield('catagory')
@yield('contactView')
@yield('faqview')
@yield('photos')
@yield('createSupplier')
@yield('supplierList')
@yield('createProduct')
@yield('productList')
@yield('createPurchase')
@yield('purchaseList')
@yield('createOrder')
@yield('orderList')
@yield('generateBarcode')
@yield('saleReport')
@yield('purchaseReport')
@yield('invoiceReport')
@yield('catagoryList')



@include('admin.adminFooter')



<!-- JavaScript -->
<script src="{{asset('adminFrontend/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/js/feather.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js02"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    
    <script src="{{asset('adminFrontend/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/js/script.js')}}"></script>






</html>