<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cw-2</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
</head>
<body>
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

    <!--Main slider section start-->
    <div class="main-slider">
        <a href="#">
            <div class="slider"></div>
        </a>

        <!--Button next-->
        <div class="button-next">
            <img src="images/next-arrow.png">
        </div>
        <!--Button previous-->
        <div class="button-previous">
            <img src="images/previous-arrow.png">
        </div>
        <!--Slides numeration icons-->
        <div class="slides-numeration"></div>
    </div>
    <!--Main slider section end-->

    <!--Main content section start-->
    <div class="main-content">
        <div class="container">

            <!--Section top-->
            <div class="section-top">
                <h1>OUR PRODUCTS</h1>
                <p>Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <!--Menu start-->
            <ul class="main-content-menu">
                <li>
                    <a href="#">ALL</a>
                </li>
                <li>
                    <a href="#">CLOTHING</a>
                </li>
                <li>
                    <a href="#">SHOES</a>
                </li>
                <li>
                    <a href="#">HAT</a>
                </li>
                <li>
                    <a href="#">ACCESSORIES</a>
                </li>
            </ul>
            <!--Menu end-->

            <!--Products section start-->
            <div class="main-content-products">
                <!--First row start-->
                <!--Product container start-->
                @foreach($products as $product)
                    <div class="product-container product-{{ $product['id'] }}">
                        <a href="#">
                            <div class="product-image">
                                <div class="product-image-label">{{ ucfirst(strtolower($product['status'])) }}</div>
                                <a href="#" class="product-quick-view">Quick view</a>
                            </div>
                        </a>
                        <!--Caption block-->
                        <div class="product-image-caption">
                            <p class="caption-name">{{ $product['description'] }}</p>
                            <div class="caption-price-block">
                                <p class="caption-price">$ {{ $product['price'] }}</p>
                                <p class="caption-price-old">
                                    @if($product['old_price'])
                                        $ {{ $product['old_price'] }}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <!--Add to cart block start-->
                        <hr>
                        <a href="" class="product-add-to-cart-wrapper">
                            <div class="product-add-to-cart">
                                <div class="product-add-to-cart-plus">
                                    <img src="images/plus.png" />
                                </div>
                                <p>ADD TO CART</p>
                            </div>
                        </a>
                        <!--Add to cart block end-->
                    </div>
                @endforeach
            <!--Product container end-->
            </div>
            <!--Products section end-->
        </div>

        <div class="button-up">
            <img src="images/up-arrow.png">
        </div>
    </div>
    <!--Main content section end-->

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


    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>