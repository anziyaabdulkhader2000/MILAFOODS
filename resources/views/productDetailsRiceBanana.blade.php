@extends('layouts.user')
@section('userContents')

<!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-primary">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-home"></i> </a>
                        </li>
                        <li class="active">Home Made Rice Banana Dates Mix</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->


    <!-- Single Product Section Start -->
    <div class="section section-margin-top">
        <div class="container">

            <div class="row">
                <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2">

                    <!-- Product Details Image Start -->
                    <div class="product-details-img">

                        <!-- Single Product Image Start -->
                        <div class="single-product-img swiper-container product-gallery-top">
                            <div class="swiper-wrapper popup-gallery">
                                <a class="swiper-slide w-100" href="{{url('public/assets/images/products/c.png')}}">
                                    <img class="w-100" src="{{url('public/assets/images/products/c.png')}}">
                                </a>
                                <a class="swiper-slide w-100" href="{{url('public/assets/images/products/c.png')}}">
                                    <img class="w-100" src="{{url('public/assets/images/products/c.png')}}" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="{{url('public/assets/images/products/c.png')}}">
                                    <img class="w-100" src="{{url('public/assets/images/products/c.png')}}" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="{{url('public/assets/images/products/c.png')}}">
                                    <img class="w-100" src="{{url('public/assets/images/products/c.png')}}" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="{{url('public/assets/images/products/c.png')}}">
                                    <img class="w-100" src="{{url('public/assets/images/products/c.png')}}" alt="Product">
                                </a>
                            </div>
                        </div>
                        <!-- Single Product Image End -->

                        <!-- Single Product Thumb Start -->
                        <div class="single-product-thumb swiper-container product-gallery-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{url('public/assets/images/products/c.png')}}" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{url('public/assets/images/products/c.png')}}" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{url('public/assets/images/products/c.png')}}" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{url('public/assets/images/products/c.png')}}" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{url('public/assets/images/products/c.png')}}" alt="Product">
                                </div>
                            </div>

                            <!-- Next Previous Button Start -->
                            <div class="swiper-button-next swiper-button-white"><i class="pe-7s-angle-right"></i></div>
                            <div class="swiper-button-prev swiper-button-white"><i class="pe-7s-angle-left"></i></div>
                            <!-- Next Previous Button End -->

                        </div>
                        <!-- Single Product Thumb End -->

                    </div>
                    <!-- Product Details Image End -->

                </div>
                <div class="col-lg-7">

                    <!-- Product Summery Start -->
                    <div class="product-summery position-relative">

                        <!-- Product Head Start -->
                        <div class="product-head mb-3">
                            <h2 class="product-title">Home Made Rice Banana Dates Mix</h2>
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
                            <span class="regular-price">₹ 250</span>
                            <!-- <span class="old-price"><del>$90.00</del></span> -->
                        </div>
                        <!-- Price Box End -->

                        <!-- SKU Start -->
                        <div class="sku mb-3">
                            <span>SKU: 12345</span>
                        </div>
                        <!-- SKU End -->

                        <!-- Product Inventory Start -->
                        <div class="product-inventroy mb-3">
                            <span class="inventroy-title"> <strong>Availability:</strong></span>
                            <span class="inventory-varient">12 Left in Stock</span>
                        </div>
                        <!-- Product Inventory End -->

                        <!-- Description Start -->
                        <p class="desc-content mb-5">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <!-- Description End -->

                        <!-- Product Coler Variation Start -->
                        <div class="product-color-variation mb-5">
                            <span> <strong>Color: </strong></span>
                            <button type="button" class="btn bg-danger"></button>
                            <button type="button" class="btn bg-primary"></button>
                            <button type="button" class="btn bg-dark"></button>
                            <button type="button" class="btn bg-success"></button>
                        </div>
                        <!-- Product Coler Variation End -->

                        <!-- Product Size Start -->
                        <div class="product-size mb-5">
                            <span><strong>Size :</strong></span>
                            <a href="#" class="size-ratio active">m</a>
                            <a href="#" class="size-ratio">l</a>
                            <a href="#" class="size-ratio">xl</a>
                            <a href="#" class="size-ratio">xxl</a>
                        </div>
                        <!-- Product Size End -->

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
                                <a class="btn btn-dark btn-hover-primary" href="cart.html">Add to cart</a>
                            </div>
                        </div>
                        <!-- Cart Button End -->

                        <!-- Action Button Start -->
                        <div class="actions border-bottom mb-4 pb-4">
                            <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-refresh-2"></i> Compare</a>
                            <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i> Wishlist</a>
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

            <div class="row section-margin">
                <!-- Single Product Tab Start -->
                <div class="col-lg-12 single-product-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#connect-3" role="tab" aria-selected="false">Shipping Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab" data-bs-toggle="tab" href="#connect-4" role="tab" aria-selected="false">Size Chart</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="desc-content p-3">
                                <p class="mb-3">Baby food rice banana dates mix is a type of baby food that is made from a combination of rice, banana, and dates. It is a popular food for infants and young children, particularly in many parts of the Middle East and South Asia.</p>
                                <p>To make baby food rice banana dates mix, rice is first cooked until it is soft and tender. Then, bananas and dates are mashed and added to the rice. The mixture is then pureed to create a smooth consistency that is easy for infants to digest.</p>
                                <p>One of the benefits of using baby food rice banana dates mix is that it is a good source of carbohydrates, fiber, and essential vitamins and minerals, such as potassium and vitamin C. It can also be a good source of natural sweetness, which can help make the baby food more appealing to infants and young children</p>
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Start Single Content -->
                            <div class="product_tab_content border p-3">
                                <!-- Start Single Review -->
                                <div class="single-review d-flex mb-4">

                                    <!-- Review Thumb Start -->
                                    <div class="review_thumb">
                                        <img alt="review images" src="assets/images/review/1.jpg">
                                    </div>
                                    <!-- Review Thumb End -->

                                    <!-- Review Details Start -->
                                    <div class="review_details">
                                        <div class="review_info mb-2">

                                            <!-- Rating Start -->
                                            <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                            <!-- Rating End -->

                                            <!-- Review Title & Date Start -->
                                            <div class="review-title-date d-flex">
                                                <h5 class="title">Admin - </h5><span> January 19, 2022</span>
                                            </div>
                                            <!-- Review Title & Date End -->

                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex, vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel. Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit amet quam tincidunt iaculis.</p>
                                    </div>
                                    <!-- Review Details End -->

                                </div>
                                <!-- End Single Review -->

                                <!-- Rating Wrap Start -->
                                <div class="rating_wrap">
                                    <h5 class="rating-title mb-2">Add a review </h5>
                                    <p class="mb-2">Your email address will not be published. Required fields are marked *</p>
                                    <h6 class="rating-sub-title mb-2">Your Rating</h6>

                                    <!-- Rating Start -->
                                    <span class="ratings justify-content-start mb-3">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(2)</span>
                                    </span>
                                    <!-- Rating End -->

                                </div>
                                <!-- Rating Wrap End -->

                                <!-- Comments ans Replay Start -->
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-custom">

                                            <!-- Comment form Start -->
                                            <form action="#" class="comment-form-area">
                                                <div class="row comment-input">

                                                    <!-- Input Name Start -->
                                                    <div class="col-md-6 col-custom comment-form-author mb-3">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input type="text" required="required" name="Name">
                                                    </div>
                                                    <!-- Input Name End -->

                                                    <!-- Input Email Start -->
                                                    <div class="col-md-6 col-custom comment-form-emai mb-3">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input type="text" required="required" name="email">
                                                    </div>
                                                    <!-- Input Email End -->

                                                </div>
                                                <!-- Comment Texarea Start -->
                                                <div class="comment-form-comment mb-3">
                                                    <label>Comment</label>
                                                    <textarea class="comment-notes" required="required"></textarea>
                                                </div>
                                                <!-- Comment Texarea End -->

                                                <!-- Comment Submit Button Start -->
                                                <div class="comment-form-submit">
                                                    <button class="btn btn-dark btn-hover-primary">Submit</button>
                                                </div>
                                                <!-- Comment Submit Button End -->

                                            </form>
                                            <!-- Comment form End -->

                                        </div>
                                    </div>
                                </div>
                                <!-- Comments ans Replay End -->

                            </div>
                            <!-- End Single Content -->
                        </div>
                        <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                            <!-- Shipping Policy Start -->
                            <div class="shipping-policy mb-n2 p-3">
                                <h4 class="title-3 mb-4">Shipping policy for our store</h4>
                                <p class="desc-content mb-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p>
                                <ul class="policy-list mb-2">
                                    <li>1-2 business days (Typically by end of day)</li>
                                    <li><a href="#">30 days money back guaranty</a></li>
                                    <li>24/7 live support</li>
                                    <li>odio dignissim qui blandit praesent</li>
                                    <li>luptatum zzril delenit augue duis dolore</li>
                                    <li>te feugait nulla facilisi.</li>
                                </ul>
                                <p class="desc-content mb-2">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
                                <p class="desc-content mb-2">claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                                <p class="desc-content mb-2">seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                            <!-- Shipping Policy End -->
                        </div>
                        <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                            <div class="size-tab table-responsive-lg p-3">
                                <h4 class="title-3 mb-4">Size Chart</h4>
                                <table class="table border mb-0">
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
                <!-- Single Product Tab End -->
            </div>

        </div>
    </div>
    <!-- Single Product Section End -->






@endsection 