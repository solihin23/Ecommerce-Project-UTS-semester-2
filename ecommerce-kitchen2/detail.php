<?php
require_once 'classes/Product.php';
$id = $_GET['id'];
$product = new Product;
$result = $product->find($id);
$products = $product->all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Product Single - Alan - Kitchen Accessories Bootstrap 5 HTML Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,400i,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,600,700" rel="stylesheet">

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

        <main class="main-content site-wrapper-reveal">
            <!--== Start Page Title Area ==-->
            <section class="page-title-area" data-bg-img="assets/img/photos/bg-page-title.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title-content text-center">
                                <h2 class="title text-white"><?php echo $result->name ?></h2>
                                <div class="bread-crumbs">
                                    <a href="index.php">Home<span class="breadcrumb-sep">/</span></a><span class="active"><?php echo $result->name ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Page Title Area ==-->

            <!--== Start Shop Area ==-->
            <section class="product-area shop-single-product">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-product-slider">
                                <div class="single-product-thumb">
                                    <div class="swiper-container single-product-thumb-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide zoom zoom-hover">
                                                <div class="thumb-item">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/details/1.jpg">
                                                        <img src="assets/img/shop/details/7.png" alt="Image-HasTech">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide zoom zoom-hover">
                                                <div class="thumb-item">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/details/2.jpg">
                                                        <img src="assets/img/shop/details/8.png" alt="Image-HasTech">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide zoom zoom-hover">
                                                <div class="thumb-item">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/details/3.jpg">
                                                        <img src="assets/img/shop/details/9.png" alt="Image-HasTech">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide zoom zoom-hover">
                                                <div class="thumb-item">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/details/4.jpg">
                                                        <img src="assets/img/shop/details/10.jpg" alt="Image-HasTech">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide zoom zoom-hover">
                                                <div class="thumb-item">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/details/5.jpg">
                                                        <img src="assets/img/shop/details/5.jpg" alt="Image-HasTech">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide zoom zoom-hover">
                                                <div class="thumb-item">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/details/6.jpg">
                                                        <img src="assets/img/shop/details/6.jpg" alt="Image-HasTech">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-nav">
                                    <div class="swiper-container single-product-nav-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="nav-item">
                                                    <img src="assets/img/shop/details/nav7.png" alt="Image-HasTech">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="nav-item">
                                                    <img src="assets/img/shop/details/nav8.png" alt="Image-HasTech">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="nav-item">
                                                    <img src="assets/img/shop/details/nav9.jpg" alt="Image-HasTech">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="nav-item">
                                                    <img src="assets/img/shop/details/nav10.jpg" alt="Image-HasTech">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="nav-item">
                                                    <img src="assets/img/shop/details/nav5.jpg" alt="Image-HasTech">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="nav-item">
                                                    <img src="assets/img/shop/details/nav6.jpg" alt="Image-HasTech">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-product-info product-info-variable">
                                <h4 class="title"><?php echo $result->name ?></h4>
                                <div class="product-ratting">
                                    <div class="ratting-icons">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="ratting-caption">7 Reviews</div>
                                </div>
                                <div class="prices">
                                    <span class="price">Rp. <?= number_format($result->sell_price, 0, ',', '.') ?></span>
                                    <span class="price-old">Rp. <?= number_format($result->purchase_price, 0, ',', '.') ?></span>
                                </div>
                                <div class="product-number">
                                    SKU: <span><?= $result->sku ?>
                                </div>
                                <div class="product-number">
                                    Type: <span><?= $result->product_type_name ?>
                                </div>
                                <p class="product-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <div class="product-action-size">
                                    <span class="title">Size :</span>
                                    <ul>
                                        <li class="active">S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                    </ul>
                                </div>
                                <div class="product-action-color">
                                    <span class="title">Color :</span>
                                    <ul>
                                        <li class="bg-color-purple active"></li>
                                        <li class="bg-color-violet"></li>
                                        <li class="bg-color-black"></li>
                                        <li class="bg-color-pink"></li>
                                        <li class="bg-color-orange"></li>
                                    </ul>
                                </div>
                                <div class="product-action-material">
                                    <span class="title">Material :</span>
                                    <ul>
                                        <li class="active">Metal</li>
                                        <li>Resin</li>
                                        <li>Leather</li>
                                        <li>Slag</li>
                                        <li>Fiber</li>
                                    </ul>
                                </div>
                                <div class="quick-product-action mt-0">

                                    <div class="action-bottom">
                                        <a class="btn-theme" href="javascript:;">Buy it now</a>
                                    </div>
                                </div>
                                <div class="payment-support">
                                    <h5>Guaranteed Safe Checkout</h5>
                                    <ul class="payment-items">
                                        <li class="payment-item">
                                            <svg class="payment-icon-name" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa">
                                                <title id="pi-visa">Visa</title>
                                                <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path>
                                                <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
                                                <path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path>
                                            </svg>
                                        </li>
                                        <li class="payment-item">
                                            <svg class="payment-icon-name" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master">
                                                <title id="pi-master">Mastercard</title>
                                                <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path>
                                                <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
                                                <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                                                <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                                                <path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path>
                                            </svg>
                                        </li>
                                        <li class="payment-item">
                                            <svg class="payment-icon-name" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal">
                                                <title id="pi-paypal">PayPal</title>
                                                <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path>
                                                <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
                                                <path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"></path>
                                                <path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"></path>
                                                <path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"></path>
                                            </svg>
                                        </li>
                                        <li class="payment-item">
                                            <svg class="payment-icon-name" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-discover">
                                                <title id="pi-discover">Discover</title>
                                                <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"></path>
                                                <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"></path>
                                                <path d="M37 16.95V21c0 1.1-.9 2-2 2H23.228c7.896-1.815 12.043-4.601 13.772-6.05z" fill="#EDA024"></path>
                                                <path fill="#494949" d="M9 11h20v2H9z"></path>
                                                <path d="M22 12c0 1.7-1.3 3-3 3s-3-1.4-3-3 1.4-3 3-3c1.7 0 3 1.3 3 3z" fill="#EDA024"></path>
                                            </svg>
                                        </li>
                                        <li class="payment-item">
                                            <svg class="payment-icon-name" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express">
                                                <title id="pi-american_express">American Express</title>
                                                <g fill="none">
                                                    <path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"></path>
                                                    <path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"></path>
                                                    <path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"></path>
                                                </g>
                                            </svg>
                                        </li>
                                        <li class="payment-item">
                                            <svg class="payment-icon-name" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" x="0" y="0" width="38" height="24" viewBox="0 0 165.521 105.965" xml:space="preserve" aria-labelledby="pi-apple_pay">
                                                <title id="pi-apple_pay">Apple Pay</title>
                                                <path fill="#000" d="M150.698 0H14.823c-.566 0-1.133 0-1.698.003-.477.004-.953.009-1.43.022-1.039.028-2.087.09-3.113.274a10.51 10.51 0 0 0-2.958.975 9.932 9.932 0 0 0-4.35 4.35 10.463 10.463 0 0 0-.975 2.96C.113 9.611.052 10.658.024 11.696a70.22 70.22 0 0 0-.022 1.43C0 13.69 0 14.256 0 14.823v76.318c0 .567 0 1.132.002 1.699.003.476.009.953.022 1.43.028 1.036.09 2.084.275 3.11a10.46 10.46 0 0 0 .974 2.96 9.897 9.897 0 0 0 1.83 2.52 9.874 9.874 0 0 0 2.52 1.83c.947.483 1.917.79 2.96.977 1.025.183 2.073.245 3.112.273.477.011.953.017 1.43.02.565.004 1.132.004 1.698.004h135.875c.565 0 1.132 0 1.697-.004.476-.002.952-.009 1.431-.02 1.037-.028 2.085-.09 3.113-.273a10.478 10.478 0 0 0 2.958-.977 9.955 9.955 0 0 0 4.35-4.35c.483-.947.789-1.917.974-2.96.186-1.026.246-2.074.274-3.11.013-.477.02-.954.022-1.43.004-.567.004-1.132.004-1.699V14.824c0-.567 0-1.133-.004-1.699a63.067 63.067 0 0 0-.022-1.429c-.028-1.038-.088-2.085-.274-3.112a10.4 10.4 0 0 0-.974-2.96 9.94 9.94 0 0 0-4.35-4.35A10.52 10.52 0 0 0 156.939.3c-1.028-.185-2.076-.246-3.113-.274a71.417 71.417 0 0 0-1.431-.022C151.83 0 151.263 0 150.698 0z"></path>
                                                <path fill="#FFF" d="M150.698 3.532l1.672.003c.452.003.905.008 1.36.02.793.022 1.719.065 2.583.22.75.135 1.38.34 1.984.648a6.392 6.392 0 0 1 2.804 2.807c.306.6.51 1.226.645 1.983.154.854.197 1.783.218 2.58.013.45.019.9.02 1.36.005.557.005 1.113.005 1.671v76.318c0 .558 0 1.114-.004 1.682-.002.45-.008.9-.02 1.35-.022.796-.065 1.725-.221 2.589a6.855 6.855 0 0 1-.645 1.975 6.397 6.397 0 0 1-2.808 2.807c-.6.306-1.228.511-1.971.645-.881.157-1.847.2-2.574.22-.457.01-.912.017-1.379.019-.555.004-1.113.004-1.669.004H14.801c-.55 0-1.1 0-1.66-.004a74.993 74.993 0 0 1-1.35-.018c-.744-.02-1.71-.064-2.584-.22a6.938 6.938 0 0 1-1.986-.65 6.337 6.337 0 0 1-1.622-1.18 6.355 6.355 0 0 1-1.178-1.623 6.935 6.935 0 0 1-.646-1.985c-.156-.863-.2-1.788-.22-2.578a66.088 66.088 0 0 1-.02-1.355l-.003-1.327V14.474l.002-1.325a66.7 66.7 0 0 1 .02-1.357c.022-.792.065-1.717.222-2.587a6.924 6.924 0 0 1 .646-1.981c.304-.598.7-1.144 1.18-1.623a6.386 6.386 0 0 1 1.624-1.18 6.96 6.96 0 0 1 1.98-.646c.865-.155 1.792-.198 2.586-.22.452-.012.905-.017 1.354-.02l1.677-.003h135.875"></path>
                                                <g>
                                                    <g>
                                                        <path fill="#000" d="M43.508 35.77c1.404-1.755 2.356-4.112 2.105-6.52-2.054.102-4.56 1.355-6.012 3.112-1.303 1.504-2.456 3.959-2.156 6.266 2.306.2 4.61-1.152 6.063-2.858"></path>
                                                        <path fill="#000" d="M45.587 39.079c-3.35-.2-6.196 1.9-7.795 1.9-1.6 0-4.049-1.8-6.698-1.751-3.447.05-6.645 2-8.395 5.1-3.598 6.2-.95 15.4 2.55 20.45 1.699 2.5 3.747 5.25 6.445 5.151 2.55-.1 3.549-1.65 6.647-1.65 3.097 0 3.997 1.65 6.696 1.6 2.798-.05 4.548-2.5 6.247-5 1.95-2.85 2.747-5.6 2.797-5.75-.05-.05-5.396-2.101-5.446-8.251-.05-5.15 4.198-7.6 4.398-7.751-2.399-3.548-6.147-3.948-7.447-4.048"></path>
                                                    </g>
                                                    <g>
                                                        <path fill="#000" d="M78.973 32.11c7.278 0 12.347 5.017 12.347 12.321 0 7.33-5.173 12.373-12.529 12.373h-8.058V69.62h-5.822V32.11h14.062zm-8.24 19.807h6.68c5.07 0 7.954-2.729 7.954-7.46 0-4.73-2.885-7.434-7.928-7.434h-6.706v14.894z"></path>
                                                        <path fill="#000" d="M92.764 61.847c0-4.809 3.665-7.564 10.423-7.98l7.252-.442v-2.08c0-3.04-2.001-4.704-5.562-4.704-2.938 0-5.07 1.507-5.51 3.82h-5.252c.157-4.86 4.731-8.395 10.918-8.395 6.654 0 10.995 3.483 10.995 8.89v18.663h-5.38v-4.497h-.13c-1.534 2.937-4.914 4.782-8.579 4.782-5.406 0-9.175-3.222-9.175-8.057zm17.675-2.417v-2.106l-6.472.416c-3.64.234-5.536 1.585-5.536 3.95 0 2.288 1.975 3.77 5.068 3.77 3.95 0 6.94-2.522 6.94-6.03z"></path>
                                                        <path fill="#000" d="M120.975 79.652v-4.496c.364.051 1.247.103 1.715.103 2.573 0 4.029-1.09 4.913-3.899l.52-1.663-9.852-27.293h6.082l6.863 22.146h.13l6.862-22.146h5.927l-10.216 28.67c-2.34 6.577-5.017 8.735-10.683 8.735-.442 0-1.872-.052-2.261-.157z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </li>
                                        <li class="payment-item">
                                            <svg class="payment-icon-name" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-shopify_pay">
                                                <title id="pi-shopify_pay">Shop Pay</title>
                                                <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000"></path>
                                                <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z" fill="#5A31F4"></path>
                                                <path d="M21.382 9.713c0 1.668-1.177 2.858-2.821 2.858h-1.549a.133.133 0 00-.12.08.127.127 0 00-.01.049v2.192a.129.129 0 01-.13.129h-1.084a.13.13 0 01-.13-.13V6.986a.127.127 0 01.08-.12.129.129 0 01.05-.01h2.9c1.637 0 2.814 1.19 2.814 2.858v-.001zm-1.352 0c0-.958-.658-1.658-1.55-1.658h-1.468a.13.13 0 00-.13.13v3.05a.127.127 0 00.038.092.129.129 0 00.092.038h1.468c.892.005 1.55-.695 1.55-1.652zm1.674 3.791a1.527 1.527 0 01.647-1.317c.423-.316 1.084-.48 2.055-.514l1.033-.036v-.303c0-.607-.41-.863-1.068-.863-.658 0-1.075.231-1.17.61a.127.127 0 01-.125.09h-1.022a.13.13 0 01-.126-.092.125.125 0 01-.004-.055c.152-.898.904-1.58 2.494-1.58 1.692 0 2.303.783 2.303 2.276v3.172a.13.13 0 01-.132.129h-1.03a.13.13 0 01-.13-.13v-.236a.096.096 0 00-.061-.091.1.1 0 00-.107.022c-.31.334-.808.575-1.607.575-1.175 0-1.95-.607-1.95-1.657zm3.735-.687v-.246l-1.339.07c-.705.036-1.115.326-1.115.816 0 .444.376.69 1.034.69.893 0 1.42-.48 1.42-1.33zm2.316 4.6v-.919a.13.13 0 01.049-.1.132.132 0 01.108-.027c.158.029.318.044.479.044a1.229 1.229 0 001.245-.876l.067-.211a.133.133 0 000-.088l-2.145-5.471a.13.13 0 01.06-.165.13.13 0 01.062-.015h1.04a.132.132 0 01.123.085l1.456 3.859a.131.131 0 00.125.088.133.133 0 00.125-.088l1.265-3.848a.13.13 0 01.126-.09h1.076a.134.134 0 01.132.116.134.134 0 01-.008.063l-2.295 6.076c-.528 1.413-1.433 1.773-2.43 1.773a1.959 1.959 0 01-.561-.066.132.132 0 01-.1-.14h.001zM8.57 6.4a5.363 5.363 0 00-3.683 1.427.231.231 0 00-.029.31l.618.839a.236.236 0 00.362.028 3.823 3.823 0 012.738-1.11c2.12 0 3.227 1.584 3.227 3.15 0 1.7-1.163 2.898-2.835 2.921-1.292 0-2.266-.85-2.266-1.974a1.908 1.908 0 01.713-1.48.231.231 0 00.033-.324l-.65-.815a.236.236 0 00-.339-.034 3.43 3.43 0 00-.942 1.183 3.39 3.39 0 00-.337 1.47c0 1.935 1.655 3.452 3.775 3.464h.03c2.517-.032 4.337-1.884 4.337-4.415 0-2.247-1.667-4.64-4.752-4.64z" fill="#fff"></path>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget-social-icons">
                                    <a class="facebook" href="#/"><i class="ion-social-facebook"></i> Facebook</a>
                                    <a class="twitter" href="#/"><i class="ion-social-twitter"></i> Twitter</a>
                                    <a class="google-plus" href="#/"><i class="ion-social-googleplus-outline"></i> Google+</a>
                                    <a class="pinterest" href="#/"><i class="ion-social-pinterest"></i> Pinterest</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Shop Area ==-->

            <!--== Start Shop Tab Area ==-->
            <section class="product-area product-description-review-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-description-review">
                                <ul class="nav nav-tabs product-description-tab-menu" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab" data-bs-target="#productDesc" type="button" role="tab" aria-controls="productDesc" aria-selected="true">Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="product-review-tab" data-bs-toggle="tab" data-bs-target="#productReview" type="button" role="tab" aria-controls="productReview" aria-selected="false">Reviews</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="product-comment-tab" data-bs-toggle="tab" data-bs-target="#commentProduct" type="button" role="tab" aria-controls="commentProduct" aria-selected="false">Comments</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="product-custom-tab" data-bs-toggle="tab" data-bs-target="#productCustom" type="button" role="tab" aria-controls="productCustom" aria-selected="false">Shipping Policy</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="product-info-tab" data-bs-toggle="tab" data-bs-target="#productInfo" type="button" role="tab" aria-controls="productInfo" aria-selected="false">Size chart</button>
                                    </li>
                                </ul>
                                <div class="tab-content product-description-tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="productDesc" role="tabpanel" aria-labelledby="product-desc-tab">
                                        <div class="product-desc">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="productReview" role="tabpanel" aria-labelledby="product-review-tab">
                                        <div class="product-review">
                                            <div class="review-header">
                                                <h4 class="title">Customer Reviews</h4>
                                                <div class="review-info">
                                                    <ul class="review-rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <span class="review-caption">Based on 1 review</span>
                                                    <span class="review-write-btn">Write a review</span>
                                                </div>
                                            </div>
                                            <div class="product-review-form">
                                                <h4 class="title">Write a review</h4>
                                                <form action="#" method="post">
                                                    <div class="review-form-content">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="reviewFormName">Name</label>
                                                                    <input class="form-control" id="reviewFormName" type="text" placeholder="Enter your name" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="reviewFormEmail">Email</label>
                                                                    <input class="form-control" id="reviewFormEmail" type="email" placeholder="john.smith@example.com" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="rating">
                                                                    <span class="rating-title">Rating</span>
                                                                    <span>
                                                                        <a class="fa fa-star-o" href="#/"></a>
                                                                        <a class="fa fa-star-o" href="#/"></a>
                                                                        <a class="fa fa-star-o" href="#/"></a>
                                                                        <a class="fa fa-star-o" href="#/"></a>
                                                                        <a class="fa fa-star-o" href="#/"></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="reviewReviewTitle">Review Title</label>
                                                                    <input class="form-control" id="reviewReviewTitle" type="text" placeholder="Give your review a title" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="reviewFormTextarea">Body of Review <span>(1500)</span></label>
                                                                    <textarea class="form-control textarea" id="reviewFormTextarea" name="comment" rows="7" placeholder="Write your comments here" required=""></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group pull-right">
                                                                    <button class="btn btn-theme" type="submit">Submit Review</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="review-content">
                                                <div class="review-item">
                                                    <ul class="review-rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <h4 class="title">Cobus Bester</h4>
                                                    <h5 class="review-date"><span>Cobus Bester</span> on <span>Mar 03, 2021</span></h5>
                                                    <p>Can’t wait to start mixin’ with this one! Irba-irr-Up-up-up-up-date your theme!</p>
                                                    <a class="review-report" href="#/">Report as Inappropriate</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="commentProduct" role="tabpanel" aria-labelledby="product-comment-tab">
                                        <div class="product-comment">
                                            <form action="#">
                                                <div class="product-comment-content">
                                                    <img src="assets/img/shop/comment.png" alt="Image-HasTech">
                                                    <textarea name="con_message" placeholder="Start the discussion…"></textarea>
                                                </div>
                                                <button class="btn btn-theme" type="submit">Post as Product</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="productCustom" role="tabpanel" aria-labelledby="product-custom-tab">
                                        <div class="product-shipping-policy">
                                            <div class="section-title">
                                                <h2 class="title">Shipping policy for our store</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p>
                                            </div>
                                            <ul class="shipping-policy-list">
                                                <li>1-2 business days (Typically by end of day)</li>
                                                <li><a href="#">30 days money back guaranty</a></li>
                                                <li>24/7 live support</li>
                                                <li>odio dignissim qui blandit praesent</li>
                                                <li>luptatum zzril delenit augue duis dolore</li>
                                                <li>te feugait nulla facilisi.</li>
                                            </ul>
                                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
                                            <p>claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                                            <p>seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="productInfo" role="tabpanel" aria-labelledby="product-info-tab">
                                        <div class="product-size-chart">
                                            <h4>Size Chart</h4>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="cun-name"><span>UK</span></td>
                                                        <td>18</td>
                                                        <td>20</td>
                                                        <td>22</td>
                                                        <td>24</td>
                                                        <td>26</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cun-name"><span>European</span></td>
                                                        <td>46</td>
                                                        <td>48</td>
                                                        <td>50</td>
                                                        <td>52</td>
                                                        <td>54</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cun-name"><span>usa</span></td>
                                                        <td>14</td>
                                                        <td>16</td>
                                                        <td>18</td>
                                                        <td>20</td>
                                                        <td>22</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cun-name"><span>Australia</span></td>
                                                        <td>28</td>
                                                        <td>10</td>
                                                        <td>12</td>
                                                        <td>14</td>
                                                        <td>16</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cun-name"><span>Canada</span></td>
                                                        <td>24</td>
                                                        <td>18</td>
                                                        <td>14</td>
                                                        <td>42</td>
                                                        <td>36</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Shop Tab Area ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area latest-product-area pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-6 m-auto">
                            <div class="section-title text-center">
                                <h2 class="title">Related Product</h2>
                                <p>Add your Description here</p>
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