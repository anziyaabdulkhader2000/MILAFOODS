@extends('layouts.user')
@section('userContents')

<!-- Hero/Intro Slider Start -->
<div class="section">
	<div class="hero-slider swiper-container">
		<div class="swiper-wrapper">

			<div class="hero-slide-item swiper-slide">
				<div class="hero-slide-bg">
					<img src="{{url('public/assets/images/slider/slider1-1.png')}}" alt="Slider Image" />
				</div>
				<div class="container">
					<div class="hero-slide-content">
						<h2 class="title m-0">Get -30% off</h2>
						<p>Latest baby product & toy collections.</p>
						<a href="shop.html" class="btn btn-primary btn-hover-light">Shop Now</a>
					</div>
				</div>
			</div>

			<div class="hero-slide-item swiper-slide">
				<div class="hero-slide-bg">
					<img src="{{url('public/assets/images/slider/slider1-2.png')}}" alt="Slider Image" />
				</div>
				<div class="container">
					<div class="hero-slide-content">
						<h2 class="title m-0"> New Arrivals <br />Get flat 50% off </h2>
						<a href="shop.html" class="btn btn-primary btn-hover-light">Shop Now</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Swiper Pagination Start -->
		<div class="swiper-pagination d-lg-none"></div>
		<!-- Swiper Pagination End -->

		<!-- Swiper Navigation Start -->
		<div class="home-slider-prev swiper-button-prev main-slider-nav d-lg-flex d-none"><i class="pe-7s-angle-left"></i></div>
		<div class="home-slider-next swiper-button-next main-slider-nav d-lg-flex d-none"><i class="pe-7s-angle-right"></i></div>
		<!-- Swiper Navigation End -->
	</div>
</div>
<!-- Hero/Intro Slider End -->

<!-- Banner Section Start -->
<div class="section section-margin">
	<div class="container">
		<!-- Banners Start -->
		<div class="row mb-n6 d-none">

			<!-- Banner Start -->
			<div class="col-md-6 col-12 mb-6 pe-lg-2 pe-md-3">
				<a href="shop.html" class="banner" data-aos="fade-up" data-aos-delay="200">
					<img src="{{url('public/assets/images/banner/1.png')}}" alt="Banner Image" />
				</a>
			</div>
			<!-- Banner End -->

			<!-- Banner Start -->
			<div class="col-md-6 col-12 mb-6 ps-lg-2 ps-md-3">
				<a href="shop.html" class="banner" data-aos="fade-up" data-aos-delay="400">
					<img src="{{url('public/assets/images/banner/2.png')}}" alt="Banner Image" />
				</a>
			</div>
			<!-- Banner End -->

		</div>
		<!-- Banners End -->
	</div>
</div>
<!-- Banner Section End -->

<!-- Product Section Start -->
<div class="section section-margin mt-0 position-relative">
	<div class="container">
		<!-- Section Title & Tab Start -->
		<div class="row mb-lg-8 mb-6">
			<!-- Section Title Start -->
			<div class="col-lg col-12">
				<div class="section-title mb-0 text-center" data-aos="fade-up" data-aos-delay="200">
					<h2 class="title mb-2">Featured Collection</h2>
					<p>Add featured products to weekly lineup</p>
				</div>
			</div>
			<!-- Section Title End -->

		</div>
		<!-- Section Title & Tab End -->

		<!-- Products Tab Start -->
		<div class="row">
			<div class="col" data-aos="fade-up" data-aos-delay="600">
				<div class="product-carousel arrow-outside-container">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<!-- Product Start -->
							<div class="swiper-slide">
								<div class="product-wrapper">
									<div class="product mb-6">
										<div class="thumb">
											<a href="#" class="image">
												<img class="fit-image" src="{{url('public/assets/images/products/a.png')}}" alt="Product" />
												<!-- <img class="second-image fit-image" src="assets/images/products/medium-product/3.jpg" alt="Product" /> -->
											</a>
											<span class="badges">
												<span class="sale">-18%</span>
											</span>
											<div class="actions">
												<a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
												<a href="#" class="action compare"><i class="pe-7s-refresh-2"></i></a>
												<a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view1"><i class="pe-7s-search"></i></a>
											</div>
											<div class="add-cart-btn">
												<button class="btn btn-whited btn-hover-primary text-capitalize add-to-cart">Add To Cart</button>
											</div>
										</div>
										<div class="content">
											<h5 class="title"><a href="{{route('productDetailsRagi')}}">Home Made Ragi Powder</a></h5>
											<span class="price">
												<span class="new">
													₹ 110
												</span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<!-- Product End -->

							<!-- Product Start -->
							<div class="swiper-slide">
								<div class="product-wrapper">
									<div class="product mb-6">
										<div class="thumb">
											<a href="#" class="image">
												<img class="fit-image" src="{{url('public/assets/images/products/b.png')}}" alt="Product" />
												<!-- <img class="second-image fit-image" src="assets/images/products/medium-product/7.jpg" alt="Product" /> -->
											</a>
											<span class="badges">
												<span class="sale">-20%</span>
											</span>
											<div class="actions">
												<a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
												<a href="#" class="action compare"><i class="pe-7s-refresh-2"></i></a>
												<a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view1"><i class="pe-7s-search"></i></a>
											</div>
											<div class="add-cart-btn">
												<button class="btn btn-sm btn-whited btn-hover-primary text-capitalize add-to-cart">Add To Cart</button>
											</div>
										</div>
										<div class="content">
											<h5 class="title"><a href="{{route('productDetailsBanana')}}">Home Made Banana Powder</a></h5>
											<span class="price">
												<span class="new">₹ 230</span>
												<!-- <span class="old">$42.85</span> -->
											</span>
										</div>
									</div>
								</div>
							</div>
							<!-- Product End -->

							<!-- Product Start -->
							<div class="swiper-slide">
								<div class="product-wrapper">
									<div class="product mb-6">
										<div class="thumb">
											<a href="single-product.html" class="image">
												<img class="fit-image" src="{{url('public/assets/images/products/c.png')}}" alt="Product" />
												<!-- <img class="second-image fit-image" src="assets/images/products/medium-product/10.jpg" alt="Product" /> -->
											</a>
											<span class="badges">
												<span class="new">New</span>
											</span>
											<div class="actions">
												<a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
												<a href="#" class="action compare"><i class="pe-7s-refresh-2"></i></a>
												<a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view1"><i class="pe-7s-search"></i></a>
											</div>
											<div class="add-cart-btn">
												<button class="btn btn-sm btn-whited btn-hover-primary text-capitalize add-to-cart">Add To Cart</button>
											</div>
										</div>
										<div class="content">
											<h5 class="title"><a href="{{route('productDetailsRiceBanana')}}">Home Made Rice Banana Dates Mix</a></h5>
											<span class="price">
												<span class="new">
													₹ 250
												</span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<!-- Product End -->

							<!-- Product Start -->
							<div class="swiper-slide">
								<div class="product-wrapper">
									<div class="product mb-6">
										<div class="thumb">
											<a href="single-product.html" class="image">
												<img class="fit-image" src="{{url('public/assets/images/products/d.png')}}" alt="Product" />
												<!-- <img class="second-image fit-image" src="assets/images/products/medium-product/1.jpg" alt="Product" /> -->
											</a>
											<div class="actions">
												<a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
												<a href="#" class="action compare"><i class="pe-7s-refresh-2"></i></a>
												<a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view1"><i class="pe-7s-search"></i></a>
											</div>
											<div class="add-cart-btn">
												<button class="btn btn-sm btn-whited btn-hover-primary text-capitalize add-to-cart">Add To Cart</button>
											</div>
										</div>
										<div class="content">
											<h5 class="title"><a href="{{route('productDetailsKannakaya')}}">Home Made Kannakaya Powder</a></h5>
											<span class="price">
												<span class="new">
													₹ 245
												</span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<!-- Product End -->
						</div>

						<div class="swiper-pagination d-block d-md-none"></div>
						<div class="swiper-button-prev swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-left"></i></div>
						<div class="swiper-button-next swiper-nav-button d-none d-md-flex"><i class="pe-7s-angle-right"></i></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Products Tab End -->
	</div>
</div>
<!-- Product Section End -->

<!-- Testimonial Section Start -->
<div class="section testimonial-bg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section Title Start -->
				<div class="section-title text-center" data-aos="fade-up" data-aos-delay="200">
					<h2 class="title text-white">Testimonials</h2>
					<p class="sub-title text-white">What they say</p>
				</div>
				<!-- Section Title End -->

				<!-- Testimonial Carousel Start -->
				<div class="testimonial-carousel" data-aos="fade-up" data-aos-delay="400">
					<div class="swiper-container testimonial-gallery-thumbs">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="{{url('public/assets/images/testimonial/thumb-1.png')}}" alt="Product Image">
							</div>
							<div class="swiper-slide">
								<img src="{{url('public/assets/images/testimonial/thumb-2.png')}}" alt="Product Image">
							</div>
							<div class="swiper-slide">
								<img src="{{url('public/assets/images/testimonial/thumb-3.png')}}" alt="Product Image">
							</div>
							<div class="swiper-slide">
								<img src="{{url('public/assets/images/testimonial/thumb-4.png')}}" alt="Product Image">
							</div>
						</div>
					</div>
					<div class="swiper-container testimonial-gallery-top">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<!-- Testimonial Content Start -->
								<div class="testimonial-content text-center">
									<p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci augue nec sapien. Cum sociis natoque</p>
									<span class="ratings justify-content-center mb-3">
										<span class="rating-wrap text-white">
											<span class="star text-warning" style="width: 80%"></span>
										</span>
										<span class="rating-num text-light">(3)</span>
									</span>
									<h4 class="testimonial-author mb-0">Anamika lusy</h4>
								</div>
								<!-- Testimonial Content End -->
							</div>
							<div class="swiper-slide">
								<!-- Testimonial Content Start -->
								<div class="testimonial-content text-center">
									<p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci augue nec sapien. Cum sociis natoque</p>
									<span class="ratings justify-content-center mb-3">
										<span class="rating-wrap text-white">
											<span class="star text-warning" style="width: 80%"></span>
										</span>
										<span class="rating-num text-light">(3)</span>
									</span>
									<h4 class="testimonial-author mb-0">Tinsy Nilom</h4>
								</div>
								<!-- Testimonial Content End -->
							</div>
							<div class="swiper-slide">
								<!-- Testimonial Content Start -->
								<div class="testimonial-content text-center">
									<p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci augue nec sapien. Cum sociis natoque</p>
									<span class="ratings justify-content-center mb-3">
										<span class="rating-wrap text-white">
											<span class="star text-warning" style="width: 80%"></span>
										</span>
										<span class="rating-num text-light">(3)</span>
									</span>
									<h4 class="testimonial-author mb-0">Cristal Aryan</h4>
								</div>
								<!-- Testimonial Content End -->
							</div>
							<div class="swiper-slide">
								<!-- Testimonial Content Start -->
								<div class="testimonial-content text-center">
									<p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed venenatis orci augue nec sapien. Cum sociis natoque</p>
									<span class="ratings justify-content-center mb-3">
										<span class="rating-wrap text-white">
											<span class="star text-warning" style="width: 80%"></span>
										</span>
										<span class="rating-num text-light">(3)</span>
									</span>
									<h4 class="testimonial-author mb-0">Jems Jhon</h4>
								</div>
								<!-- Testimonial Content End -->
							</div>
						</div>
						<!-- Add Arrows -->
						<div class="swiper-button-next swiper-button-white d-none"></div>
						<div class="swiper-button-prev swiper-button-white d-none"></div>
					</div>
				</div>
				<!-- Testimonial Carousel End -->
			</div>
		</div>
	</div>
</div>
<!-- Testimonial Section End -->


@endsection