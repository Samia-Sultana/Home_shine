                <body class="font-sans antialiased">
                    <div id="global-loader">
                        <div class="whirly-loader"> </div>
                    </div>

                    <div class="main-wrapper">

                        <div class="header">

                            <div class="header-left active">
                                <a href="index.html" class="logo logo-normal">
                                    <img src="{{asset('adminFrontend/assets/img/logo.png')}}" alt="">
                                </a>
                                <a href="index.html" class="logo logo-white">
                                    <img src="{{asset('adminFrontend/assets/img/logo-white.png')}}" alt="">
                                </a>
                                <a href="index.html" class="logo-small">
                                    <img src="{{asset('adminFrontend/assets/img/logo-small.png')}}" alt="">
                                </a>
                                <a id="toggle_btn" href="javascript:void(0);">
                                </a>
                            </div>

                            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>

                            <ul class="nav user-menu">

                                <li class="nav-item">
                                    <div class="top-nav-search">
                                        <a href="javascript:void(0);" class="responsive-search">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <form action="#">
                                            <div class="searchinputs">
                                                <input type="text" placeholder="Search Here ...">
                                                <div class="search-addon">
                                                    <span><img src="{{asset('adminFrontend/assets/img/icons/closes.svg')}}" alt="img"></span>
                                                </div>
                                            </div>
                                            <a class="btn" id="searchdiv"><img src="{{asset('adminFrontend/assets/img/icons/search.svg')}}" alt="img"></a>
                                        </form>
                                    </div>
                                </li>


                                <li class="nav-item dropdown has-arrow main-drop">
                                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                                        <span class="user-img"><img src="{{asset('adminFrontend/assets/img/profiles/avator1.jpg')}}" alt="">
                                            <span class="status online"></span></span>
                                    </a>
                                    <div class="dropdown-menu menu-drop-user">
                                        <div class="profilename">
                                            <div class="profileset">
                                                <span class="user-img"><img src="{{asset('adminFrontend/assets/img/profiles/avator1.jpg')}}" alt="">
                                                    <span class="status online"></span></span>
                                                <div class="profilesets">
                                                    <h6>John Doe</h6>
                                                    <h5>Admin</h5>
                                                </div>
                                            </div>
                                            <hr class="m-0">
                                            <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My
                                                Profile</a>
                                            <a class="dropdown-item" href="generalsettings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
                                            <hr class="m-0">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    logout
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>


                            <div class="dropdown mobile-user-menu">
                                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="profile.html">My Profile</a>
                                    <a class="dropdown-item" href="generalsettings.html">Settings</a>
                                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                                </div>
                            </div>

                        </div>


                        <div class="sidebar" id="sidebar">
                            <div class="sidebar-inner slimscroll">
                                <div id="sidebar-menu" class="sidebar-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="{{route('dashboard')}}"><img src="{{asset('adminFrontend/assets/img/icons/dashboard.svg')}}" alt="img"><span>
                                                    Dashboard</span> </a>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/product.svg')}}" alt="img"><span>
                                                    Supplier</span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="{{route('addSupplierPage')}}">Add Supplier</a></li>
                                                <li><a href="{{route('supplierList')}}">Supplier List</a></li>

                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/product.svg')}}" alt="img"><span>
                                                    Product</span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="{{route('catagory')}}">Catagory</a></li>
                                                <li><a href="{{route('catagoryList')}}">Catagory List</a></li>
                                                <li><a href="{{route('subCatagoryList')}}">Sub-catagory List</a></li>
                                                <li><a href="{{route('addProductPage')}}">Add Product</a></li>
                                                <li><a href="{{route('productList')}}">Product List</a></li>
                                                <li><a href="{{route('barcode')}}">Print Barcode</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/sales1.svg')}}" alt="img"><span>
                                                    Order</span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="{{route('addOrderPage')}}">Add Order </a></li>
                                                <li><a href="{{route('orderList')}}">Order List</a></li>

                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/purchase1.svg')}}" alt="img"><span>
                                                    Purchase</span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="{{route('addPurchasePage')}}">Add Purchase</a></li>
                                                <li><a href="{{route('purchaseList')}}">Purchase List</a></li>


                                            </ul>
                                        </li>





                                        <li class="submenu">
                                            <a href="javascript:void(0);"><img src="{{asset('adminFrontend/assets/img/icons/time.svg')}}" alt="img"><span>
                                                    Report</span> <span class="menu-arrow"></span></a>
                                            <ul>


                                                <li><a href="{{route('saleReport')}}">Sales Report</a></li>

                                                <li><a href="{{route('purchaseReport')}}">Purchase Report</a></li>


                                            </ul>
                                        </li>
                                        <li><a href="{{ route('logo') }}">Logo</a></li>
                                        <li><a href="{{ route('navbar') }}">Navbar</a></li>
                                        <li><a href="{{ route('slider') }}">Slider</a></li>
                                        <li><a href="{{ route('socialMedia') }}">Social Media</a></li>
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
                                        <li><a href="{{ route('viewContact') }}">Contact us message</a></li>
                                        <li><a href="{{ route('viewFaq') }}">Question and Answer</a></li>
                                        <li><a href="{{ route('photos') }}">Gallery</a></li>




                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>

                
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

    <script src="{{asset('adminFrontend/assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/js/script.js')}}"></script>












                    <!----------------------------------------------- Body Part Start ---------------------------------------------->