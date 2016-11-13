@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    @section('meta')
        @parent
    @endsection

    @section('title', 'Hermes')

    <!-- Styles -->
    @section('css')
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
    @endsection

    <!-- Scripts -->
    @section('scripts-top')
        @parent
    @endsection
</head>
<body>

    @section('header')
        @parent
    @endsection

    @section('main')
        <main>
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
        </main>
    @endsection

    @section('footer')
        @parent
    @endsection

    <!-- Scripts -->
    @section('scripts-bottom')
        <script src="js/jquery-2.2.3.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/slider.js"></script>
    @endsection
</body>
</html>