<?php
require_once 'classes/Product.php';
$products = Product::all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Alan - Kitchen Accessories Bootstrap 5 HTML Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,400i,500,600,700" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Themify Icons CSS ==-->
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <!--== Font-awesome Icons CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Ionicons CSS ==-->
    <link href="assets/css/ionicons.min.css" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--== Aos CSS ==-->
    <link href="assets/css/aos.css" rel="stylesheet" />
    <!--== FancyBox CSS ==-->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet" />
    <!--== Slicknav CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />

</head>

<body>

    <!--wrapper start-->
    <div class="wrapper home-default-wrapper">

        <!--== Start Preloader Content ==-->
        <div class="preloader-wrap">
            <div class="preloader">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!--== End Preloader Content ==-->

        <!--== Start Header Wrapper ==-->
        <header class="header-area header-default sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5 col-sm-3 col-md-3 col-lg-2 pr-0">
                        <div class="header-logo-area">
                            <a href="index.html">
                                <img class="logo-main" src="assets/img/logo.png" alt="Logo" />
                                <img class="logo-light" src="assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col-7 col-sm-9 col-md-9 col-lg-10">
                        <div class="header-align">
                            <div class="header-navigation-area">
                                <ul class="main-menu nav justify-content-center">
                                    <li class="active">
                                        <a href="index.php">Home</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-action-area">
                                <div class="header-action-usermenu">
                                    <div class="icon-usermenu">
                                        <i class="ti-settings"></i>
                                    </div>
                                    <ul class="user-menu">
                                        <li><a href="page/auth/login.php">Login</a></li>
                                    </ul>
                                </div>

                                <button class="btn-menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->

        <main class="main-content">
            <!--== Start Hero Area Wrapper ==-->
            <section class="home-slider-area slider-default">
                <div class="home-slider-content">
                    <div class="swiper-container home-slider-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Start Slide Item -->
                                <div class="home-slider-item bg-img-cover" data-bg-img="assets/img/slider/1.png">
                                    <div class="slider-content-area">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="content m-auto">
                                                        <div class="inner-content">
                                                            <div class="tittle-wrp">
                                                                <h2>Ice Cream Coop <br>New item</h2>
                                                            </div>
                                                            <div class="btn-wrp">
                                                                <a href="shop.html" class="btn-link">Shop Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Slide Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start Slide Item -->
                                <div class="home-slider-item bg-img-cover" data-bg-img="assets/img/slider/2.png">
                                    <div class="slider-content-area">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="content m-auto">
                                                        <div class="inner-content">
                                                            <div class="tittle-wrp">
                                                                <h2>Kitchen tool crock <br>Featured Item</h2>
                                                            </div>
                                                            <div class="btn-wrp">
                                                                <a href="shop.html" class="btn-link">Shop Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Slide Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Hero Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area latest-product-area" data-aos="fade-up" data-aos-duration="1000">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-6 m-auto">
                            <div class="section-title text-center">
                                <h2 class="title">Latest product</h2>
                                <p>Our latest item collection of 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper-container product4-slider-container">
                                <div class="swiper-wrapper">
                                    <?php foreach ($products as $product) : ?>
                                        <div class="swiper-slide">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <a href="detail.php?id=<?= $product->id ?>">
                                                        <img src="assets/img/shop/1.png" alt="Alan-Shop">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4 class="title">
                                                        <a href="detail.php?id=<?= $product->id ?>">
                                                            <?= $product->name ?></a>
                                                    </h4>
                                                    <div class="prices">
                                                        <span class="price">Rp. <?= number_format($product->sell_price, 0, ',', '.') ?></span>
                                                        <del class="price-old">Rp. <?= number_format($product->purchase_price, 0, ',', '.') ?></del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!--== Start Offer Area Wrapper ==-->
            <section class="offer-area" data-aos="fade-up" data-aos-duration="1000">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-offer">
                                <div class="thumb">
                                    <a href="shop-single-product.html">
                                        <img src="assets/img/shop/offer-1.webp" alt="Alan-Shop">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-offer">
                                <div class="thumb">
                                    <a href="shop-single-product.html">
                                        <img src="assets/img/shop/offer-2.webp" alt="Alan-Shop">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Offer Area Wrapper ==-->

            <!--== Start Featured Product Area Wrapper ==-->
            <section class="product-area featured-product-area" data-aos="fade-up" data-aos-duration="1000">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-6 m-auto">
                            <div class="section-title text-center">
                                <h2 class="title">Featured Product</h2>
                                <p>Best selling item in our collection</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($products as $product) : ?>
                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="detail.php?id=<?= $product->id ?>">
                                            <img src="assets/img/shop/1.png" alt="Alan-Shop">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="title">
                                            <a href="detail.php?id=<?= $product->id ?>">
                                                <?= $product->name ?></a>
                                        </h4>
                                        <div class="prices">
                                            <span class="price">Rp. <?= number_format($product->sell_price, 0, ',', '.') ?></span>
                                            <del class="price-old">Rp. <?= number_format($product->purchase_price, 0, ',', '.') ?></del>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!--== End Featured Product Area Wrapper ==-->
        </main>

        <!--== Start Footer Area Wrapper ==-->
        <footer class="footer-area">
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-content">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="widget-copyright text-center">
                                    <p>© 2025 <span>Alan</span>. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://www.hasthemes.com/">HasThemes</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--== End Footer Area Wrapper ==-->

        <!--== Scroll Top Button ==-->
        <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

        <!--== Start Side Menu ==-->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <div class="off-canvas-overlay"></div>
                <!-- Start Off Canvas Content Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="logo-area">
                            <a href="index.html"><img src="assets/img/logo.png" alt="Logo" /></a>
                        </div>
                        <div class="close-action">
                            <button class="btn-close"><i class="fa fa-close"></i></button>
                        </div>
                    </div>

                    <div class="off-canvas-item">
                        <!-- Start Mobile Menu Wrapper -->
                        <div class="res-mobile-menu menu-active-one">
                            <!-- Note Content Auto Generate By Jquery From Main Menu -->
                        </div>
                        <!-- End Mobile Menu Wrapper -->
                    </div>
                    <!-- Off Canvas Footer -->
                    <div class="off-canvas-footer"></div>
                </div>
                <!-- End Off Canvas Content Wrapper -->
            </div>
        </aside>
        <!--== End Side Menu ==-->
    </div>

    <!--=======================Javascript============================-->

    <!--=== Modernizr Min Js ===-->
    <script src="assets/js/modernizr.js"></script>
    <!--=== jQuery Min Js ===-->
    <script src="assets/js/jquery-main.js"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="assets/js/jquery-migrate.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== jquery Appear Js ===-->
    <script src="assets/js/jquery.appear.js"></script>
    <!--=== jquery Swiper Min Js ===-->
    <script src="assets/js/swiper.min.js"></script>
    <!--=== jquery Fancybox Min Js ===-->
    <script src="assets/js/fancybox.min.js"></script>
    <!--=== jquery Aos Min Js ===-->
    <script src="assets/js/aos.min.js"></script>
    <!--=== jquery Slicknav Js ===-->
    <script src="assets/js/jquery.slicknav.js"></script>
    <!--=== jquery Countdown Js ===-->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!--=== jquery Wow Min Js ===-->
    <script src="assets/js/wow.min.js"></script>
    <!--=== jQuery Zoom Min Js ===-->
    <script src="assets/js/jquery-zoom.min.js"></script>

    <!--=== Custom Js ===-->
    <script src="assets/js/custom.js"></script>

</body>

</html>