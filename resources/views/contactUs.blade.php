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
						<a href="index.html"><i class="fa fa-home"></i> </a>
					</li>
					<li class="active"> Contact Us</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- Contact Map Start -->
<div class="section" data-aos="fade-up" data-aos-delay="300">

	<!-- Google Map Area Start -->
	<div class="google-map-area w-100">
		<iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15103.390104930804!2d75.28587665375834!3d12.073850746082808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba46beb26436349%3A0xdebe9c43c26dcb82!2sEmbate!5e1!3m2!1sen!2sbd!4v1683891512446!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<!-- Google Map Area Start -->

</div>
<!-- Contact Map End -->

<!-- Contact Us Section Start -->
<div class="section section-margin">
	<div class="container">
		<div class="row mb-n10">
			<div class="col-12 col-lg-6 mb-10 order-2 order-lg-1">

				<!-- Section Title Start -->
				<div class="contact-title pb-3" data-aos="fade-up" data-aos-delay="300">
					<h2 class="title">Tell Us Your Project</h2>
				</div>
				<!-- Section Title End -->

				<!-- Contact Form Wrapper Start -->
				<div class="contact-form-wrapper contact-form">
					<form action="#" id="contact-form" method="post">
						<div class="row">
							<div class="col-12">
								<div class="row">
									<div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
										<div class="input-area mb-4">
											<input class="input-item" type="text" placeholder="Your Name *" name="name">
										</div>
									</div>
									<div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
										<div class="input-area mb-4">
											<input class="input-item" type="email" placeholder="Email *" name="email">
										</div>
									</div>
									<div class="col-12" data-aos="fade-up" data-aos-delay="300">
										<div class="input-area mb-4">
											<input class="input-item" type="text" placeholder="Subject *" name="subject">
										</div>
									</div>
									<div class="col-12" data-aos="fade-up" data-aos-delay="400">
										<div class="input-area mb-8">
											<textarea cols="30" rows="5" class="textarea-item" name="message" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-12" data-aos="fade-up" data-aos-delay="500">
										<button type="submit" id="submit" name="submit" class="btn btn-secondary button-hover-primary">Send A Message</button>
									</div>
									<p class="col-8 form-message mb-0"></p>
								</div>
							</div>
						</div>
					</form>
					<p class="form-messege"></p>
				</div>
				<!-- Contact Form Wrapper End -->
				
			</div>
			<div class="col-12 col-lg-6 mb-10 order-1 order-lg-2">
				<!-- Section Title Start -->
				<div class="contact-title pb-3" data-aos="fade-up" data-aos-delay="300">
					<h2 class="title">Contact Us</h2>
				</div>
				<!-- Section Title End -->
				<div class="contact-content">
					<p data-aos="fade-up" data-aos-delay="200">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
					<address class="contact-block">
						<ul>
							<li data-aos="fade-up" data-aos-delay="200"><i class="fa fa-fax"></i> Mila Food Products <br>Embate, Pariyaram, Kannur</li>
							<li data-aos="fade-up" data-aos-delay="400"><i class="fa fa-phone"></i> <a href="tel:+919747006649">+919747006649</a></li>
							<li data-aos="fade-up" data-aos-delay="600"><i class="fa fa-envelope-o"></i> <a href="mailto:info.milafoods@gmail.com">info.milafoods@gmail.com</a></li>
						</ul>
					</address>

					<div class="working-time" data-aos="fade-up" data-aos-delay="600">
						<h6 class="title">Working Hours</h6>
						<p>Monday – Saturday : 08:00 AM – 10:00 PM</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Contact us Section End -->








@endsection