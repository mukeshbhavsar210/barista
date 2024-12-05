<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Laravel Online Shop</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />

	<link rel="stylesheet" type="text/css" href="{{ 'assets/css/style.css' }}" />
	<link rel="stylesheet" type="text/css" href="{{ 'assets/css/vegas.min.css' }}" />
	<link rel="stylesheet" type="text/css" href="{{ 'assets/css/tooplate-barista.css' }}" />
	<link rel="stylesheet" type="text/css" href="{{ 'assets/css/bootstrap.min.css' }}" />
	<link rel="stylesheet" type="text/css" href="{{ 'assets/css/bootstrap-icons.css' }}" />
</head>
<body >

<header>
<nav class="navbar navbar-expand-lg">                
		<div class="container">
			<a class="navbar-brand d-flex align-items-center" href="index.html">
				<img src="{{ 'assets/images/coffee-beans.png' }}" class="navbar-brand-image img-fluid" alt="Barista Cafe Template">
				Barista
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-lg-auto">
					<li class="nav-item">
						<a class="nav-link click-scroll" href="#section_1">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link click-scroll" href="#section_2">About</a>
					</li>

					<li class="nav-item">
						<a class="nav-link click-scroll" href="#section_3">Our Menu</a>
					</li>

					<li class="nav-item">
						<a class="nav-link click-scroll" href="#section_4">Reviews</a>
					</li>

					<li class="nav-item">
						<a class="nav-link click-scroll" href="#section_5">Contact</a>
					</li>
				</ul>

				<div class="ms-lg-3">
					<a class="btn custom-btn custom-border-btn" href="reservation.html">
						Reservation
						<i class="bi-arrow-up-right ms-2"></i>
					</a>
				</div>

				<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
					@if (Route::has('login'))
						<div>
							@auth
								<a href="{{ url('/dashboard') }}">Dashboard</a>
							@else
								<a href="{{ route('login') }}">Log in</a>

								@if (Route::has('register'))
									<a href="{{ route('register') }}">Register</a>
								@endif
							@endauth
						</div>
					@endif
				</div>
			</div>
		</div>
	</nav>

	<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-lg-6 col-12 mx-auto">
					<em class="small-text">welcome to Barista.co</em>
					
					<h1>Cafe Klang</h1>

					<p class="text-white mb-4 pb-lg-2">
						your <em>favourite</em> coffee daily lives.
					</p>

					<a class="btn custom-btn custom-border-btn smoothscroll me-3" href="#section_2">
						Our Story
					</a>

					<a class="btn custom-btn smoothscroll me-2 mb-2" href="#section_3"><strong>Check Menu</strong></a>
				</div>

			</div>
		</div>

		<div class="hero-slides"></div>
	</section>
</header>

@yield('content')

<footer class="site-footer">
<div class="container">
	<div class="row">

		<div class="col-lg-4 col-12 me-auto">
			<em class="text-white d-block mb-4">Where to find us?</em>

			<strong class="text-white">
				<i class="bi-geo-alt me-2"></i>
				Bandra West, Mumbai, Maharashtra 400050, India
			</strong>

			<ul class="social-icon mt-4">
				<li class="social-icon-item">
					<a href="#" class="social-icon-link bi-facebook">
					</a>
				</li>

				<li class="social-icon-item">
					<a href="https://x.com/minthu" target="_new" class="social-icon-link bi-twitter">
					</a>
				</li>

				<li class="social-icon-item">
					<a href="#" class="social-icon-link bi-whatsapp">
					</a>
				</li>
			</ul>
		</div>

		<div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
			<em class="text-white d-block mb-4">Contact</em>

			<p class="d-flex mb-1">
				<strong class="me-2">Phone:</strong>
				<a href="tel: 305-240-9671" class="site-footer-link">
					(65) 
					305 2409 671
				</a>
			</p>

			<p class="d-flex">
				<strong class="me-2">Email:</strong>

				<a href="mailto:info@yourgmail.com" class="site-footer-link">
					hello@barista.co
				</a>
			</p>
		</div>


		<div class="col-lg-5 col-12">
			<em class="text-white d-block mb-4">Opening Hours.</em>

			<ul class="opening-hours-list">
				<li class="d-flex">
					Monday - Friday
					<span class="underline"></span>

					<strong>9:00 - 18:00</strong>
				</li>

				<li class="d-flex">
					Saturday
					<span class="underline"></span>

					<strong>11:00 - 16:30</strong>
				</li>

				<li class="d-flex">
					Sunday
					<span class="underline"></span>

					<strong>Closed</strong>
				</li>
			</ul>
		</div>

		<div class="col-lg-8 col-12 mt-4">
			<p class="copyright-text mb-0">Copyright © Barista Cafe 2048 
				- Design: <a rel="sponsored" href="https://www.tooplate.com" target="_blank">Tooplate</a></p>
		</div>
</div>
</footer>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- JAVASCRIPT FILES -->
<script src="{{ 'assets/js/jquery.min.js' }} "></script>
<script src="{{ 'assets/js/bootstrap.min.js' }} "></script>
<script src="{{ 'assets/js/jquery.sticky.js' }} "></script>
<script src="{{ 'assets/js/click-scroll.js' }} "></script>
<script src="{{ 'assets/js/vegas.min.js' }} "></script>
<script src="{{ 'assets/js/custom.js' }} "></script>

</body>
</html>