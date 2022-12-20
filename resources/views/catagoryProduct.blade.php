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

<body class="template-index home8-jewellery belle">
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->
        <!--Top Header-->
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                        <p class="phone-no"><i class="anm anm-phone-s"></i> +440 0(111) 044 833</p>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                        <div class="text-center">
                            <!-- <p class="top-header_middle-text"> Worldwide Express Shipping</p> -->
                        </div>
                    </div>
                    <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                        <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                        <ul class="customer-links list-inline">
                            <li><a href="customer-account.html">Account</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Create Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->
        <!--Header-->
        <div class="header-wrap animated d-flex">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!--Desktop Logo-->
                    <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                        <a href="index.html">
                            <img src="assets/images/logo/logo.png" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                        <div class="d-block d-lg-none">
                            <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                        </div>
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <!-- for mobile -->
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="index.html">Home <i class="anm anm-angle-down-l"></i></a>
                                </li>

                                <li class="lvl1 parent dropdown"><a href="#">Products <i class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="shop.html" class="site-nav">Bed</a></li>
                                        <li><a href="shop.html" class="site-nav">Showcase</a></li>
                                        <li><a href="shop.html" class="site-nav">Wall Cabinet</a></li>
                                    </ul>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="service.html">Services <i class="anm anm-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="about-us.html">About <i class="anm anm-plus-l"></i></a>
                                    <li class="lvl1 parent megamenu"><a href="contact-us.html">Contact <i class="anm anm-plus-l"></i></a></li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">
                            <a href="#" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list"></ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money" id="cartTotal">$0.00</span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Minicart Popup-->
                        </div>
                        <div class="site-header__search">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header-->

        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="index.html">Home </a>
                </li>
                <li class="lvl1 parent dropdown"><a href="#">Products <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="shop.html" class="site-nav">Bed</a></li>
                        <li><a href="shop.html" class="site-nav">Showcase </a></li>
                        <li><a href="shop.html" class="site-nav">Wall Cabinet</a></li>

                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="service.html">Services </i></a></li>
                <li class="lvl1 parent megamenu"><a href="about-us.html">About </i></a></li>
                <li class="lvl1 parent megamenu"><a href="contact-us.html">Contact </i></a></li>
            </ul>
        </div>
        <!--End Mobile Menu-->

        <!--Body Content-->
        <div id="page-content">
            <!--Collection Banner-->
            <div class="collection-header">
                <div class="collection-hero">
                    <div class="collection-hero__image"><img height="100" width="100" style="object-fit: cover;" class="blur-up lazyload" data-src="assets/images/slideshow-banners/home5-banner1.jpg" src="assets/images/slideshow-banners/home5-banner1.jpg" alt="Women" title="Women" /></div>
                    <div class="collection-hero__title-wrapper">
                        <h1 class="collection-hero__title page-width">Shop </h1>
                    </div>
                </div>
            </div>
            <!--End Collection Banner-->

            <div class="container  mt-5">
                <div class="row">
                    <!--Sidebar-->
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                        <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                        <div class="sidebar_tags">
                            <!--Categories-->
                            <div class="sidebar_widget categories filter-widget">
                                <div class="widget-title">
                                    <h2>Categories</h2>
                                </div>
                                <div class="widget-content">
                                    <ul class="sidebar_categories">
                                        <li class="lvl-1"><a href="#;" class="site-nav">Bed</a></li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Bookshelf</a></li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Cabinet</a></li>
                                        <li class="lvl-1"><a href="#;" class="site-nav">Chair</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Categories-->
                        </div>
                    </div>
                    <!--End Sidebar-->
                    <!--Main Content-->
                    <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                        <!-- <div class="category-description">
                            <h3>Category Description</h3>

                        </div>
                        <hr> -->
                        <div class="productList product-load-more">
                            <!--Toolbar-->
                            <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                            <div class="toolbar">
                                <div class="filters-toolbar-wrapper">
                                    <div class="row">
                                        <div class="col-6 col-md-4 col-lg-6 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                            <span class="filters-toolbar__product-count">Showing: 22</span>
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-6 text-right">
                                            <div class="filters-toolbar__item">
                                                <label for="SortBy" class="hidden">Sort</label>
                                                <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                <option>Price, low to high</option>
                                                <option>Price, high to low</option>
                                               
                                      		</select>
                                                <input class="collection-header__default-sort" type="hidden" value="manual">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--End Toolbar-->
                            <div class="grid-products grid--view-items">
                                <div class="row">

                                    <div class="col-12 col-md-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="product-layout-1.html" class="grid-view-item__link">
                                                <!-- image -->
                                                <img src="assets/images/products/bed1.jpg" alt="image" title="product">
                                                <!-- End image -->
                                            </a>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="variants add">
                                                <img style="display: none;" src="assets/images/products/bed1.jpg" alt="image">
                                                <input type="hidden" id="pname" value="bed1">
                                                <input type="hidden" value="15000" id="pprice">
                                                <input type="hidden" value="1" id="pid">
                                                <input type="hidden" value="1" id="qty">
                                                <button class="btn btn-addto-cart cart-btn-alert" type="button" tabindex="0">Add To Cart</button>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-layout-1.html">Double bed</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">15000</span>
                                            </div>
                                            <!-- End product price -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 col-md-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="product-layout-1.html" class="grid-view-item__link">
                                                <!-- image -->
                                                <img src="assets/images/products/bed1.jpg" alt="image" title="product">
                                                <!-- End image -->
                                            </a>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="variants add">
                                                <img style="display: none;" src="assets/images/products/bed1.jpg" alt="image">
                                                <input type="hidden" id="pname" value="bed1">
                                                <input type="hidden" value="15000" id="pprice">
                                                <input type="hidden" value="1" id="pid">
                                                <input type="hidden" value="1" id="qty">
                                                <button class="btn btn-addto-cart cart-btn-alert" type="button" tabindex="0">Add To Cart</button>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-layout-1.html">Double bed</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">15000</span>
                                            </div>
                                            <!-- End product price -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 col-md-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="product-layout-1.html" class="grid-view-item__link">
                                                <!-- image -->
                                                <img src="assets/images/products/bed1.jpg" alt="image" title="product">
                                                <!-- End image -->
                                            </a>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="variants add">
                                                <img style="display: none;" src="assets/images/products/bed1.jpg" alt="image">
                                                <input type="hidden" id="pname" value="bed1">
                                                <input type="hidden" value="15000" id="pprice">
                                                <input type="hidden" value="1" id="pid">
                                                <input type="hidden" value="1" id="qty">
                                                <button class="btn btn-addto-cart cart-btn-alert" type="button" tabindex="0">Add To Cart</button>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-layout-1.html">Double bed</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">15000</span>
                                            </div>
                                            <!-- End product price -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 col-md-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="product-layout-1.html" class="grid-view-item__link">
                                                <!-- image -->
                                                <img src="assets/images/products/bed1.jpg" alt="image" title="product">
                                                <!-- End image -->
                                            </a>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="variants add">
                                                <img style="display: none;" src="assets/images/products/bed1.jpg" alt="image">
                                                <input type="hidden" id="pname" value="bed1">
                                                <input type="hidden" value="15000" id="pprice">
                                                <input type="hidden" value="1" id="pid">
                                                <input type="hidden" value="1" id="qty">
                                                <button class="btn btn-addto-cart cart-btn-alert" type="button" tabindex="0">Add To Cart</button>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-layout-1.html">Double bed</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">15000</span>
                                            </div>
                                            <!-- End product price -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 col-md-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="product-layout-1.html" class="grid-view-item__link">
                                                <!-- image -->
                                                <img src="assets/images/products/bed1.jpg" alt="image" title="product">
                                                <!-- End image -->
                                            </a>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="variants add">
                                                <img style="display: none;" src="assets/images/products/bed1.jpg" alt="image">
                                                <input type="hidden" id="pname" value="bed1">
                                                <input type="hidden" value="15000" id="pprice">
                                                <input type="hidden" value="1" id="pid">
                                                <input type="hidden" value="1" id="qty">
                                                <button class="btn btn-addto-cart cart-btn-alert" type="button" tabindex="0">Add To Cart</button>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-layout-1.html">Double bed</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">15000</span>
                                            </div>
                                            <!-- End product price -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 col-md-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="product-layout-1.html" class="grid-view-item__link">
                                                <!-- image -->
                                                <img src="assets/images/products/bed1.jpg" alt="image" title="product">
                                                <!-- End image -->
                                            </a>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="variants add">
                                                <img style="display: none;" src="assets/images/products/bed1.jpg" alt="image">
                                                <input type="hidden" id="pname" value="bed1">
                                                <input type="hidden" value="15000" id="pprice">
                                                <input type="hidden" value="1" id="pid">
                                                <input type="hidden" value="1" id="qty">
                                                <button class="btn btn-addto-cart cart-btn-alert" type="button" tabindex="0">Add To Cart</button>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-layout-1.html">Double bed</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">15000</span>
                                            </div>
                                            <!-- End product price -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="infinitpaginOuter">
                            <div class="infinitpagin">
                                <a href="#" class="btn loadMore">Load More</a>
                            </div>
                        </div>
                    </div>
                    <!--End Main Content-->
                </div>
            </div>

        </div>
        <!--End Body Content-->

        <!--Footer-->
        <footer id="footer" class="footer-3">
            <div class="site-footer">
                <div class="container">
                    <!--Footer Links-->
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                                <h4 class="h4">Contact Us</h4>
                                <ul class="addressFooter">
                                    <li><i class="icon anm anm-map-marker-al"></i>
                                        <p>55 abs,<br>232 steet, 1209 Dhaka</p>
                                    </li>
                                    <li class="phone"><i class="icon anm anm-phone-s"></i>
                                        <p>(+88) 000 000 0000</p>
                                    </li>
                                    <li class="email"><i class="icon anm anm-envelope-l"></i>
                                        <p>example@yousite.com</p>
                                    </li>
                                </ul>
                                <div class="footer-social">
                                    <h4 class="h4">Stay Connected</h4>
                                    <ul class="list--inline site-footer__social-icons social-icons">
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Informations</h4>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Terms &amp; condition</a></li>
                                    <li><a href="#">My Account</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Customer Services</h4>
                                <ul>
                                    <li><a href="#">Request Personal Data</a></li>
                                    <li><a href="#">FAQ's</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Orders and Returns</a></li>
                                    <li><a href="#">Support Center</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="display-table">
                                    <div class="display-table-cell footer-newsletter">
                                        <form action="#" method="post">
                                            <label class="h4">Newsletter</label>
                                            <p>Be the first to hear about new trending and offers and see how you've helped.</p>
                                            <div class="input-group">
                                                <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                                <span class="input-group__btn">
                                            <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Footer Links-->
                    <hr>
                    <div class="footer-bottom">
                        <div class="row">
                            <!--Footer Copyright-->
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 copyright text-center"><span>Design and Developed By: </span> <a href="https://aveenirit.com">Aveenir IT</a></div>
                            <!--End Footer Copyright-->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer-->
        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->





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
    </div>
</body>

</html>