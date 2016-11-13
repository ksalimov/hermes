<!DOCTYPE html>
<html lang="en">
<head>
    @section('meta')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @show


        <title>
            @section('title')
                {{ config('app.name', 'Laravel') }}
            @show
        </title>


    <!-- Styles -->
    @yield('css')

    <!-- Scripts -->
    @section('scripts-top')
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    @show
</head>
<body>
    @section('header')
        <header>
            <div class="clear"></div>

            <div class="container">
                <!--Registration/Log In top block in header start-->
                <div class="header-signing-wrapper">
                    @if(Auth::guest())
                        <div class="header-signing not-authorized">
                            <a href="{{ url('/register') }}" class="registration">Registration</a>
                            <span>/</span>
                            <a href="{{ url('/login') }}" class="login">Log In</a>
                        </div>
                    @else
                        <div class="header-signing authorized">
                            <a href="views/cabinet.php">Cabinet</a>
                            <span>/</span>
                            <a>Log Out</a>
                        </div>
                    @endif
                </div>
                <!--Registration/Log In top block in header end-->
            </div>

            <div class="clear"></div>

            <hr>
            <div class="container">
                <!--Header menu start-->
                <div class="header-menu-wrapper">
                    <a href="#" class="logo">
                        <img alt="HERMES" src="images/logo.png" />
                    </a>

                    <ul class="header-menu">
                        <li class="active">
                            <a href="#">HOME</a>
                        </li>
                        <li>
                            <a href="#">MEN</a>
                        </li>
                        <li>
                            <a href="#">WOMEN</a>
                        </li>
                        <li>
                            <a href="#">ACCESSORIES</a>
                        </li>
                        <li>
                            <a href="#">ABOUT US</a>
                        </li>
                        <li>
                            <a href="#">BLOG</a>
                        </li>
                    </ul>

                    <div class="header-right-elements-wrapper">
                        <ul class="header-right-elements">
                            <!--Search link start-->
                            <li class="header-search">
                                <a href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <!--Search link end-->
                            <!--Cart icon start-->
                            <li class="header-cart">
                                <a href="#">
                                    <div class="header-cart-counter">02</div>
                                    <i class="fa fa-shopping-basket icon" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!--Cart icon end-->
                        </ul>
                    </div>
                </div>
                <!--Header menu end-->
            </div>
        </header>
    @show

    @yield('main')

    @section('footer')
        <footer>
            <div class="container">
                <div class="clear"></div>

                <!--Section top start-->
                <div class="section top">

                    <!--Left block start-->
                    <div class="left-block">
                        <div class="logo">
                            <img alt="HERMES" src="images/logo-footer.png" />
                        </div>
                        <p class="description-item">Hermes is a premium eCommerce theme with advanced admin module.</p>
                        <div class="contacts">
                            <div class="line tel">
                                <i class="fa fa-phone"></i>
                                <p>Telephone: +84 988 992 085</p>
                            </div>
                            <div class="line email">
                                <i class="fa fa-envelope-o"></i>
                                <p>Email: lamhvdesigner@gmail.com</p>
                            </div>
                            <div class="line schedule">
                                <i class="fa fa-clock-o"></i>
                                <p>8:00 - 19:00, Monday - Saturday, Sunday - closed</p>
                            </div>
                        </div>
                        <a href="#">
                            <div class="by-this-theme">BY THIS THEME</div>
                        </a>
                    </div>
                    <!--Left block end-->

                    <!--Information, Service, My Account section start -->
                    <!--Information column start-->
                    <div class="column information-block">
                        <p class="column-header">INFORMATION</p>
                        <div class="decorative-line"></div>
                        <a href="#">About Us</a>
                        <a href="#" class="active">Shipping & Returns</a>
                        <a href="#">Privacy Notice</a>
                        <a href="#">Conditions of Use</a>
                        <a href="#">RSS</a>
                    </div>
                    <!--Information column end-->

                    <!--Service column start-->
                    <div class="column service-block">
                        <p class="column-header">SERVICE</p>
                        <div class="decorative-line"></div>
                        <a href="#">Online Support</a>
                        <a href="#">Help & FAQs</a>
                        <a href="#">Call Center</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Custom Link</a>
                    </div>
                    <!--Service column end-->

                    <!--My Account column start-->
                    <div class="column my-account-block">
                        <p class="column-header">MY ACCOUNT</p>
                        <div class="decorative-line"></div>
                        <a href="#">My Account</a>
                        <a href="#">Wish List</a>
                        <a href="#">Site Map</a>
                        <a href="#">Custom Link</a>
                        <a href="#">Custom Link</a>
                    </div>
                    <!--My Account column end-->
                </div>
                <!--Information, Service, My Account section end -->

                <div class="clear"></div>
                <!--Section top end-->

                <!--Section bottom start-->
                <div class="section bottom">
                    <!--Copyright-->
                    <div class="copyright">
                        <p>Copyright</p>
                        <p class="fa fa-copyright"></p>
                        <p class="copyright-end-part">2016 by <span class="text-highlighted">Pixel-Creative</span>. All Rights Reserved.</p>
                    </div>

                    <!--Site navigation links start-->
                    <ul class="site-navigation-links">
                        <li>
                            <a href="#" class="text-highlighted">Home</a></li>
                        <li>
                            <a href="#">New Arrival</a></li>
                        <li>
                            <a href="#">Site map</a>
                        </li>
                    </ul>
                    <!--Site navigation links end-->
                </div>

                <div class="clear"></div>
                <!--Section bottom end-->
            </div>
        </footer>
    @show

    <!-- Scripts -->
    @yield('scripts-bottom')
</body>
</html>
