<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="images/favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{URL::asset('css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
		<title>Grand Taxi</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="">Grand <span>Taxi</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="">Home</a>
						</li>
						<!-- <li><a class="nav-link" href="shop.html">Shop</a></li>
						<li><a class="nav-link" href="about.html">About us</a></li>
						<li><a class="nav-link" href="services.html">Services</a></li>-->
						<li><a class="nav-link" href="{{ route('register') }}">sign up</a></li>
						<li><a class="nav-link" href="{{ route('login') }}">login</a></li> 
					</ul>

					<!-- <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link " href="login.html"><img src="images/user.svg"></a></li>
						 <li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li> 
					</ul> -->
				</div>
			</div>
				
		</nav>

		
		<div class="hero" style="background-image: url('images/taxi.webp'); background-size: cover; background-position: center;">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5 mt-5">
						<div class="intro-excerpt">
							<h1>Ride the city's heartbeat with our taxis</h1>
							<p class="mb-4">Embark on a seamless journey through city streets with our reliable taxi services. Where every ride is an adventure, and every destination is just a click away.</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		
		
		

		<!-- <div class="product-section">
			<div class="container">
				<div class="row">

					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
						<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
						<p><a href="shop.html" class="btn">Explore</a></p>
					</div> 

					
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/product-1.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<strong class="product-price">$50.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 

					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/product-2.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<strong class="product-price">$78.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>

					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="images/product-3.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Ergonomic Chair</h3>
							<strong class="product-price">$43.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>

				</div>
			</div>
		</div> -->

		<!-- Start Why Choose Us Section -->
		<!-- <div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Free Shipping</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Hassle Free Returns</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div> -->
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section mt-5">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<!-- Embedded map from OpenStreetMap -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d35555.71593939394!2d-9.219944988040638!3d32.28698295671652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1707226220520!5m2!1sen!2sma" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">Discover Convenient Transportation Solutions</h2>
						<p>Explore various transportation options tailored to your needs and preferences. Whether you're commuting to work, heading to a social event, or running errands, find the perfect transportation solution to get you there safely and comfortably.</p>
		
						<ul class="list-unstyled custom-list my-4">
							<li>Efficient ride-sharing services</li>
							<li>Convenient public transportation routes</li>
							<li>Accessible bike-sharing stations</li>
							<li>Flexible rental car options</li>
						</ul>
						<p><a href="#" class="btn btn-primary">Find Taxi</a></p>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product mt-5">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-1.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Nordic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-2.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Kruzo Aero Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-3.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Ergonomic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Popular Product -->

			

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">
				<div>
					<div class="row pt-4">
						<div class="col-lg-6 text-center text-lg-start">
							<p class="mb-2">Copyright &copy;. All Rights Reserved. Created By <a href="">ahmed benseddiq</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- End Footer Section -->	

		
		<script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{URL::asset('js/tiny-slider.js')}}"></script>
		<script src="{{URL::asset('js/custom.js')}}"></script>
	</body>

</html>
