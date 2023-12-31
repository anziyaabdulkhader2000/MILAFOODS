<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mila Foods</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{url('public/assets/images/logo/milaFoodsLogo.png')}}o">

    <!-- Vendor CSS (Icon Font) -->

    <link rel="stylesheet" href="{{url('public/assets/css/vendor/fontawesome.min.css')}}" />
    <link rel="stylesheet" href="{{url('public/assets/css/vendor/pe-icon-7-stroke.min.css')}}" />


    <!-- Plugins CSS (All Plugins Files) -->


    <link rel="stylesheet" href="{{url('public/assets/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{url('public/assets/css/plugins/animate.min.css')}}" />
    <link rel="stylesheet" href="{{url('public/assets/css/plugins/lightgallery.min.css')}}" />
    <link rel="stylesheet" href="{{url('public/assets/css/plugins/aos.min.css')}}" />
    <link rel="stylesheet" href="{{url('public/assets/css/plugins/nice-select.min.css')}}" />


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/style.css')}}" />
</head>

<body>

    <!-- Header Section Start -->
    <div class="header section">

        <!-- Header Top Start -->
        <div class="header-top bg-primary d-none">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Header Top Message Start -->
                    <div class="col-12">    </div>
                    <!-- Header Top Message End -->
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="header-sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">

                        <!-- Header Logo Start -->
                        <div class="col-md-6 col-lg-3 col-xl-2 col-6">
                            <div class="header-logo">
                                <a href="{{route('home')}}"><img src="{{url('public/assets/images/logo/milaFoodsLogo.png')}}" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="col-lg-6 d-none d-lg-block">

                            <div class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{route('home')}}">Home </a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Shop </a>
                                    </li> -->
                                    <li><a href="{{route('aboutUs')}}">About</a></li>
                                    <li><a href="{{route('contactUs')}}">Contact</a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Action Start -->
                        <div class="col-md-6 col-lg-3 col-xl-4 col-6 justify-content-end">
                            <div class="header-actions">
                                
                                <a href="#" class="header-action-btn header-action-btn-wishlist">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">
                                    <i class="pe-7s-cart"></i>
                                    <span class="header-action-num">3</span>
                                </a>
                                <!-- Mobile Menu Hambarger Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-lg-none d-md-block">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <!-- Mobile Menu Hambarger Action Button End -->

                            </div>
                        </div>
                        <!-- Header Action End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

        <!-- Offcanvas Search Start -->
        <div class="offcanvas-search">
            <div class="offcanvas-search-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Search Form Start -->
                <form class="offcanvas-search-form" action="#">
                    <input type="text" placeholder="Search Product..." class="offcanvas-search-input">
                </form>
                <!-- Offcanvas Search Form End -->

            </div>
        </div>
        <!-- Offcanvas Search End -->

        <!-- Cart Offcanvas Start -->
        <div class="cart-offcanvas-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Cart Offcanvas Inner Start -->
            <div class="cart-offcanvas-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Cart Content Start -->
                <div class="offcanvas-cart-content">

                    <!-- Cart Product/Price Start -->
                    <div class="cart-product-wrapper mb-4 pb-4 border-bottom">

                        <!-- Single Cart Product Start -->
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="#"><img src="{{url('public/assets/images/products/small-product/1.jpg')}}" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                <h3 class="title"><a href="#">New badge product</a></h3>
                                <div class="product-quty-price">
                                    <span class="cart-quantity">3 <strong> × </strong></span>
                                    <span class="price">
                                            <span class="new">$70.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cart Product End -->

                        <!-- Product Remove Start -->
                        <div class="cart-product-remove">
                            <a href="#"><i class="pe-7s-close"></i></a>
                        </div>
                        <!-- Product Remove End -->

                    </div>
                    <!-- Cart Product/Price End -->

                    <!-- Cart Product/Price Start -->
                    <div class="cart-product-wrapper mb-4 pb-4 border-bottom">

                        <!-- Single Cart Product Start -->
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="#"><img src="{{url('public/assets/images/products/small-product/2.jpg')}}" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                <h3 class="title"><a href="#">Soldout new product</a></h3>
                                <div class="product-quty-price">
                                    <span class="cart-quantity">4 <strong> × </strong></span>
                                    <span class="price">
                                            <span class="new">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cart Product End -->

                        <!-- Product Remove Start -->
                        <div class="cart-product-remove">
                            <a href="#"><i class="pe-7s-close"></i></a>
                        </div>
                        <!-- Product Remove End -->

                    </div>
                    <!-- Cart Product/Price End -->

                    <!-- Cart Product/Price Start -->
                    <div class="cart-product-wrapper mb-4 pb-4 border-bottom">

                        <!-- Single Cart Product Start -->
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="#"><img src="{{url('public/assets/images/products/small-product/1.jpg')}}" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                <h3 class="title"><a href="#">New badge product</a></h3>
                                <div class="product-quty-price">
                                    <span class="cart-quantity">2 <strong> × </strong></span>
                                    <span class="price">
                                            <span class="new">$50.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cart Product End -->

                        <!-- Product Remove Start -->
                        <div class="cart-product-remove">
                            <a href="#"><i class="pe-7s-close"></i></a>
                        </div>
                        <!-- Product Remove End -->

                    </div>
                    <!-- Cart Product/Price End -->

                    <!-- Cart Product Total Start -->
                    <div class="cart-product-total mb-4 pb-4 border-bottom">
                        <span class="value">Total</span>
                        <span class="price">220$</span>
                    </div>
                    <!-- Cart Product Total End -->

                    <!-- Cart Product Button Start -->
                    <div class="cart-product-btn mt-4">
                        <a href="#" class="btn btn-light btn-hover-primary w-100"><i class="fa fa-shopping-cart"></i> View cart</a>
                        <a href="#" class="btn btn-light btn-hover-primary w-100 mt-4"><i class="fa fa-share"></i> Checkout</a>
                    </div>
                    <!-- Cart Product Button End -->

                </div>
                <!-- Offcanvas Cart Content End -->

            </div>
            <!-- Cart Offcanvas Inner End -->
        </div>
        <!-- Cart Offcanvas End -->

    </div>
    <!-- Header Section End -->



    @yield('userContents')

    <!-- Footer Section Start -->
    <footer class="section footer-section">
        <!-- Footer Top Start -->
        <div class="footer-top bg-primary section-padding">
            <div class="container">
                <div class="row mb-n8">
                    <div class="col-12 col-sm-6 col-lg-3 mb-8">
                        <div class="single-footer-widget">
                            <h1 class="widget-title">About Us</h1>
                            <p class="desc-content">We are a team of designers and developers that create high quality wordpress, shopify, Opencart</p>
                            <!-- Soclial Link Start -->
                            <div class="widget-social justify-content-start mb-n2">
                                <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                            <!-- Social Link End -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-8">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Contact Us</h2>
                            <ul class="contact-links">
                                <li><i class="pe-7s-home"></i> <span>Mila Food Products<br>Embate, Pariyaram, Kannur</span> </li>
                                <li><i class="pe-7s-mail"></i><a href="mailto:info.milafoods@gmail.com"> info.milafoods@gmail.com</a></li>
                                <li><i class="pe-7s-call"></i><a href="tel:+919747006649"> +919747006649</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-8">
                        <div class="single-footer-widget aos-init aos-animate">
                            <h2 class="widget-title">Information</h2>
                            <ul class="widget-list">
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Payment Methode</a></li>
                                <li><a href="#">Product Warranty</a></li>
                                <li><a href="#">Return Process</a></li>
                                <li><a href="#">Payment Security</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-8">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Signup for newsletter</h2>
                            <div class="widget-body">
                                <!-- Newsletter Form Start -->
                                <div class="newsletter-form-wrap pt-1">
                                    <form id="mc-form" class="mc-form">
                                        <input type="email" id="mc-email" class="form-control email-box mb-4" placeholder="demo@example.com" name="EMAIL">
                                        <button id="mc-submit" class="newsletter-btn" type="submit">Subscribe</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                                <!-- Newsletter Form End -->
                                <p class="desc-content mb-0">Join over 1,000 people who get free and fresh content delivered automatically each time we publish</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom bg-secondary pt-4 pb-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <div class="copyright-content">
                            <p class="mb-0">© <?php echo date('Y');?> <strong>Mila Foods </strong> Made with <i class="fa fa-heart text-danger"></i> by <a href="https://teqdad.com/">Teqdad</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer Section End -->


    <!-- Modal Start  -->
    <div class="modalquickview modal fade" id="quick-view" tabindex="-1" aria-labelledby="quick-view" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="btn close" data-bs-dismiss="modal">×</button>
                <div class="row">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            <!-- Single Product Image Start -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="{{url('public/assets/images/products/large-product/1.jpg')}}" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="{{url('public/assets/images/products/large-product/2.jpg')}}" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="{{url('public/assets/images/products/large-product/3.jpg')}}" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="{{url('public/assets/images/products/large-product/4.jpg')}}" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="{{url('public/assets/images/products/large-product/5.jpg')}}" alt="Product">
                                    </a>
                                </div>

                                <!-- Swiper Pagination Start -->
                                <!-- <div class="swiper-pagination d-md-none"></div> -->
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                            <!-- Single Product Image End -->

                        </div>
                        <!-- Product Details Image End -->

                    </div>
                    <div class="col-md-6 col-12 overflow-hidden position-relative">

                        <!-- Product Summery Start -->
                        <div class="product-summery position-relative">

                            <!-- Product Head Start -->
                            <div class="product-head mb-3">
                                <h2 class="product-title">Sample product title</h2>
                            </div>
                            <!-- Product Head End -->

                            <!-- Rating Start -->
                            <span class="ratings justify-content-start mb-2">
                            <span class="rating-wrap">
                                <span class="star" style="width: 100%"></span>
                            </span>
                            <span class="rating-num">(4)</span>
                            </span>
                            <!-- Rating End -->

                            <!-- Price Box Start -->
                            <div class="price-box mb-2">
                                <span class="regular-price">$80.00</span>
                                <span class="old-price"><del>$90.00</del></span>
                            </div>
                            <!-- Price Box End -->

                            <!-- Description Start -->
                            <p class="desc-content mb-5">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <!-- Description End -->

                            <!-- Quantity Start -->
                            <div class="quantity d-flex align-items-center mb-5">
                                <span class="me-2"><strong>Qty: </strong></span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"></div>
                                    <div class="inc qtybutton"></div>
                                </div>
                            </div>
                            <!-- Quantity End -->

                            <!-- Cart Button Start -->
                            <div class="cart-btn mb-4">
                                <div class="add-to_cart">
                                    <a class="btn btn-dark btn-hover-primary" href="#">Add to cart</a>
                                </div>
                            </div>
                            <!-- Cart Button End -->

                            <!-- Action Button Start -->
                            <div class="actions border-bottom mb-4 pb-4">
                                <a href="#" title="Compare" class="action compare"><i class="pe-7s-refresh-2"></i> Compare</a>
                                <a href="#" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i> Wishlist</a>
                            </div>
                            <!-- Action Button End -->

                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <span><strong>Social: </strong></span>
                                <a href="#" class="facebook-color"><i class="fa fa-facebook"></i> Like</a>
                                <a href="#" class="twitter-color"><i class="fa fa-twitter"></i> Tweet</a>
                                <a href="#" class="pinterest-color"><i class="fa fa-pinterest"></i> Save</a>
                            </div>
                            <!-- Social Shear End -->

                            <!-- Payment Option Start -->
                            <div class="payment-option mt-4 d-flex">
                                <span><strong>Payment: </strong></span>
                                <a href="#">
                                    <img class="fit-image ms-1" src="assets/images/payment/payment.png" alt="Payment Option Image">
                                </a>
                            </div>
                            <!-- Payment Option End -->

                            <!-- Product Delivery Policy Start -->
                            <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                                <li> <i class="fa fa-check-square"></i> <span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                                <li><i class="fa fa-truck"></i><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                                <li><i class="fa fa-refresh"></i><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                            </ul>
                            <!-- Product Delivery Policy End -->

                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->

    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top pe-7s-angle-up-circle"></i>
        <i class="arrow-bottom pe-7s-angle-up-circle"></i>
    </a>

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Mobile Menu Inner Wrapper Start -->
            <div class="mobile-menu-inner-wrapper">
                <!-- Mobile Menu Search Box Start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input class="search-input-offcanvas" type="text" placeholder="Search product...">
                        <button class="search-btn"><i class="pe-7s-search"></i></button>
                    </form>
                </div>
                <!-- Mobile Menu Search Box End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="has-children">
                                <a href="{{route('home')}}">Home </a>
                            </li>
                            <!-- <li>
                                <a href="#">Shop</a>
                            </li> -->
                            <li><a href="{{route('aboutUs')}}">About</a></li>
                            <li><a href="{{route('contactUs')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->

                <!-- Language, Currency & Link Start -->
                <div class="offcanvas-lag-curr mb-6"></div>
                <!-- Language, Currency & Link End -->

                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto bottom-0">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                    </ul>
                    <!-- Contact Links End -->

                    <!-- Social Widget Start -->
                    <div class="widget-social">
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    <!-- Social Widget Ende -->
                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner Wrapper End -->

        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->

    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->


    <script src="{{url('public/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{url('public/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{url('public/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('public/assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{url('public/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>



    <!-- Plugins JS -->


    <script src="{{url('public/assets/js/plugins/aos.min.js')}}"></script>
    <script src="{{url('public/assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('public/assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{url('public/assets/js/plugins/nice-select.min.js')}}"></script>
    <script src="{{url('public/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{url('public/assets/js/plugins/countdown.min.js')}}"></script>
    <script src="{{url('public/assets/js/plugins/lightgallery-all.min.js')}}"></script>

    <!--Main JS-->
    <script src="{{url('public/assets/js/main.js')}}"></script>
</body>

</html>