@extends('masterUser')
@section('userWelcome')

        <!--Body Content-->
        <div id="page-content">

            <!--Home slider-->
            <div class="slideshow slideshow-wrapper pb-section">
                <div class="home-slideshow">
                @foreach($slider as $item)
                    @if($item->status == "enable")
                    <div class="slide">
                        <div class="blur-up lazyload">
                            <img class="blur-up lazyload" data-src="{{url('photos/'.$item->image)}}" src="{{url('photos/'.$item->image)}}" alt="interior" title="slider" />
                            <!-- <div class="slideshow__text-wrap slideshow__overlay classic middle">
                                <div class="slideshow__text-content middle">
                                    <div class="container">
                                        <div class="wrap-caption right">
                                            <h2 class="h1 mega-title slideshow__title">Wedding bands</h2>
                                            <span class="mega-subtitle slideshow__subtitle">Wedding bands will be one of the most tangible elements of your wedding<br> day, and a lasting symbol of your love.</span>
                                            <span class="btn">Shop now</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    @endif
                @endforeach
                    
                </div>
            </div>
            <!--End Home slider-->


            <!--Products-->
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2 heading-font">Products</h2>
                                <!-- <p>Jewellery is the next best thing to Love!</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="productSlider-style2 grid-products">
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img src="{{asset(' asset/images/products/bed1.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="variants add">
                                    <img style="display: none;" src="{{asset(' asset/images/products/bed1.jpg')}}" alt="image">
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
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img src="{{asset(' asset/images/products/bed2.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="variants add">
                                    <img style="display: none;" src="{{asset(' asset/images/products/bed2.jpg')}}" alt="image">
                                    <input type="hidden" id="pname" value="bed2">
                                    <input type="hidden" value="20000" id="pprice">
                                    <input type="hidden" value="2" id="pid">
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
                                    <span class="price">20000</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img src="{{asset(' asset/images/products/bed3.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="variants add">
                                    <img style="display: none;" src="{{asset(' asset/images/products/bed3.jpg')}}" alt="image">
                                    <input type="hidden" id="pname" value="bed3">
                                    <input type="hidden" value="25000" id="pprice">
                                    <input type="hidden" value="3" id="pid">
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
                                    <span class="price">25000</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img src="{{asset(' asset/images/products/bs1.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="variants add">
                                    <img style="display: none;" src="{{asset(' asset/images/products/bs1.jpg')}}" alt="image">
                                    <input type="hidden" id="pname" value="bed3">
                                    <input type="hidden" value="15000" id="pprice">
                                    <input type="hidden" value="4" id="pid">
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
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img src="{{asset(' asset/images/products/bs2.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="variants add">
                                    <img style="display: none;" src="{{asset(' asset/images/products/bs2.jpg')}}" alt="image">
                                    <input type="hidden" id="pname" value="bed3">
                                    <input type="hidden" value="12000" id="pprice">
                                    <input type="hidden" value="5" id="pid">
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
                                    <span class="price">12000</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img src="{{asset(' asset/images/products/bed1.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="variants add">
                                    <img style="display: none;" src="{{asset(' asset/images/products/bed1.jpg')}}" alt="image">
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
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img src="{{asset(' asset/images/products/bed2.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="variants add">
                                    <img style="display: none;" src="{{asset(' asset/images/products/bed2.jpg')}}" alt="image">
                                    <input type="hidden" id="pname" value="bed2">
                                    <input type="hidden" value="20000" id="pprice">
                                    <input type="hidden" value="2" id="pid">
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
                                    <span class="price">20000</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img src="{{asset(' asset/images/products/bed3.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="variants add">
                                    <img style="display: none;" src="{{asset(' asset/images/products/bed3.jpg')}}" alt="image">
                                    <input type="hidden" id="pname" value="bed3">
                                    <input type="hidden" value="25000" id="pprice">
                                    <input type="hidden" value="3" id="pid">
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
                                    <span class="price">25000</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img src="{{asset(' asset/images/products/bs1.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="variants add">
                                    <img style="display: none;" src="{{asset(' asset/images/products/bs1.jpg')}}" alt="image">
                                    <input type="hidden" id="pname" value="bed3">
                                    <input type="hidden" value="15000" id="pprice">
                                    <input type="hidden" value="4" id="pid">
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
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img src="{{asset(' asset/images/products/bs2.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <div class="variants add">
                                    <img style="display: none;" src="{{asset(' asset/images/products/bs2.jpg')}}" alt="image">
                                    <input type="hidden" id="pname" value="bed3">
                                    <input type="hidden" value="12000" id="pprice">
                                    <input type="hidden" value="5" id="pid">
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
                                    <span class="price">12000</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                    <div class="view-all-btn-area" style="width: 20%;margin: 20px auto;">
                        <a href="" class="btn" style="width: 100%;">View All</a>
                    </div>
                </div>
            </div>
            <!--End Hot picks-->


            <!--Hero Banner With Text-->
            <div class="section hero hero--medium hero__overlay bg-size bg-banner">
                <!-- <img class="bg-img" src="assets/images/banner/banner1.jpg" alt="banner" /> -->
                <div class="hero__inner">
                    <div class="container">
                        <div class="wrap-text center text-medium font-bold">
                            <h2 class="h2 mega-title">About The Company</h2>
                            <div class="rte-setting mega-subtitle">Make your jewels even more meaningful by <br> personalizing them with a name, monogram, coordinates, date,<br> or a special message.</div>
                            <a href="#" class="btn">Read Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Hero Banner With Text-->
            <!--Store Feature-->

            <div class="store-feature section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <ul class="display-table store-info">
                                <li class="display-table-cell">
                                    <i class="icon anm anm-truck-l"></i>
                                    <h5>Free Shipping Worldwide</h5>
                                    <span class="sub-text">
                            		Diam augue augue in fusce voluptatem
                            	</span>
                                </li>
                                <li class="display-table-cell">
                                    <i class="icon anm anm-money-bill-ar"></i>
                                    <h5>Money Back Guarantee</h5>
                                    <span class="sub-text">
                                	Use this text to display your store information
                                </span>
                                </li>
                                <li class="display-table-cell">
                                    <i class="icon anm anm-comments-l"></i>
                                    <h5>24/7 Help Center</h5>
                                    <span class="sub-text">
                                	Use this text to display your store information
                                </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Store Feature-->





        </div>
        <!--End Body Content-->

    




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


@endsection