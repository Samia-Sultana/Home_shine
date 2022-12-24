@extends('masteruser')
@section('register')
        <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">Create an Account</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                        <div class="mb-4">
                            <form method="post" action="{{ route('register') }}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="FirstName">First Name</label>
                                            <input type="text" name="name" placeholder="" id="FirstName" autofocus="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="LastName">Last Name</label>
                                            <input type="text" name="lastname" placeholder="" id="LastName">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="CustomerEmail">Email</label>
                                            <input type="email" name="email" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="CustomerPassword">Password</label>
                                            <input type="password" value="" name="password" placeholder="" id="CustomerPassword" class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" class="btn mb-3" value="Create">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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



@endsection