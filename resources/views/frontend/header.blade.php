<!doctype html>
<html lang="en">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Beautiful Fonts CSS --> 
        <link rel="stylesheet" href="{{ asset('css/beautiful-fonts.css') }}">
        <!-- Owl Theme Default CSS --> 
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <!-- Owl Carousel CSS --> 
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <!-- Owl Magnific CSS --> 
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- Boxicons CSS --> 
		<link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}"> 
        <!-- Flaticon CSS --> 
		<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
		<!-- Date Picker CSS -->
        <link rel="stylesheet" href="{{ asset('css/date-picker.css') }}">
		<!-- Odometer CSS-->
		<link rel="stylesheet" href="{{ asset('css/odometer.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
		
        <!-- TITLE -->
        <title>@yield('title')</title>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- End Preloader Area -->
	
		<!-- Start Ecorik Navbar Area -->
		<div class="eorik-nav-style fixed-top">
			<div class="navbar-area">
				<!-- Menu For Mobile Device -->
				<div class="mobile-nav">
					<a href="{{ url('/') }}" class="logo">
						<img src="{{ asset('img/mobile-manu-logo.png') }}" alt="Logo">
					</a>
				</div>
				<!-- Menu For Desktop Device -->
				<div class="main-nav">
					<nav class="navbar navbar-expand-md navbar-light">
						<div class="container">
							<a class="navbar-brand" href="index-2.html">
								<img src="assets/img/home-one/logo.jpg" alt="Logo">
							</a>
							<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle active">
											Home
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="index-2.html" class="nav-link active">Home One</a>
											</li>
											<li class="nav-item">
												<a href="index-3.html" class="nav-link">Home Two</a>
											</li>
											<li class="nav-item">
												<a href="index-4.html" class="nav-link">Home Three</a>
											</li>
											<li class="nav-item">
												<a href="index-5.html" class="nav-link">Home Four</a>
											</li>
											<li class="nav-item">
												<a href="index-6.html" class="nav-link">Home Five</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											Pages
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="about.html" class="nav-link">About Us</a>
											</li>
											<li class="nav-item">
												<a href="team.html" class="nav-link">Team</a>
											</li>
											<li class="nav-item">
												<a href="pricing.html" class="nav-link">Pricing</a>
											</li>
											<li class="nav-item">
												<a href="faq.html" class="nav-link">FAQ</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link dropdown-toggle">
													Shop
													<i class='bx bx-chevron-down'></i>
												</a>
												<ul class="dropdown-menu">
													<li class="nav-item">
														<a href="product-grid.html" class="nav-link">Product Grid</a>
													</li>
													<li class="nav-item">
														<a href="checkout.html" class="nav-link">Checkout</a>
													</li>
													<li class="nav-item">
														<a href="cart.html" class="nav-link">Cart</a>
													</li>
													<li class="nav-item">
														<a href="single-product.html" class="nav-link">Single Product</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="testimonial.html" class="nav-link">Testimonial</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link dropdown-toggle">
													User
													<i class='bx bx-chevron-down'></i>
												</a>
												<ul class="dropdown-menu">
													<li class="nav-item">
														<a href="log-in.html" class="nav-link">Log In</a>
													</li>
													<li class="nav-item">
														<a href="sign-up.html" class="nav-link">Sign Up</a>
													</li>
													<li class="nav-item">
														<a href="recover-password.html" class="nav-link">Recover Password</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="book-table.html" class="nav-link">Book Table</a>
											</li>
											<li class="nav-item">
												<a href="terms-conditions.html" class="nav-link">Terms Conditions</a>
											</li>
											<li class="nav-item">
												<a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
											</li>
											<li class="nav-item">
												<a href="coming-soon.html" class="nav-link">Coming Soon</a>
											</li>
											<li class="nav-item">
												<a href="404.html" class="nav-link">404 Error</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											Rooms
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="room-grid-view.html" class="nav-link">Room Grid View</a>
											</li>
											<li class="nav-item">
												<a href="room-style-one.html" class="nav-link">Room Style One</a>
											</li>
											<li class="nav-item">
												<a href="room-style-two.html" class="nav-link">Room Style Two</a>
											</li>
											<li class="nav-item">
												<a href="room-details-left-sidebar.html" class="nav-link">Room Details Left Sidebar</a>
											</li>
											<li class="nav-item">
												<a href="room-details-right-sidebar.html" class="nav-link">Room Details Right Sidebar</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											Gallery
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="gallery-columns-two.html" class="nav-link">Gallery Columns Two</a>
											</li>
											<li class="nav-item">
												<a href="gallery-columns-three.html" class="nav-link">Gallery Columns Three</a>
											</li>
											<li class="nav-item">
												<a href="gallery-columns-four.html" class="nav-link">Gallery Columns Four</a>
											</li>
											<li class="nav-item">
												<a href="gallery-light-box.html" class="nav-link">Gallery Light Box</a>
											</li>
											<li class="nav-item">
												<a href="gallery-masonry.html" class="nav-link">Gallery Masonry</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											Services
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="service-style-one.html" class="nav-link">Service Style One</a>
											</li>
											<li class="nav-item">
												<a href="service-style-two.html" class="nav-link">Service Style Two</a>
											</li>
											<li class="nav-item">
												<a href="service-style-three.html" class="nav-link">Service Style Three</a>
											</li>
											<li class="nav-item">
												<a href="service-style-four.html" class="nav-link">Service Style Four</a>
											</li>
											<li class="nav-item">
												<a href="service-details.html" class="nav-link">Service Details</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											News
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="news-grid.html" class="nav-link">News Grid</a>
											</li>
											<li class="nav-item">
												<a href="news-columns-two.html" class="nav-link">News Columns Two</a>
											</li>
											<li class="nav-item">
												<a href="news-left-sidebar.html" class="nav-link">News Left Sidebar</a>
											</li>
											<li class="nav-item">
												<a href="news-right-sidebar.html" class="nav-link">News Right Sidebar</a>
											</li>
											<li class="nav-item">
												<a href="news-details.html" class="nav-link">News Details</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											Contacts
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="contact-style-one.html" class="nav-link">Contact Style One</a>
											</li>
											<li class="nav-item">
												<a href="contact-style-two.html" class="nav-link">Contact Style Two</a>
											</li>
										</ul>
									</li>
								</ul>
								<!-- Start Other Option -->
								<div class="others-option">
									<a class="call-us" href="tel:+009-8765-4332">
										<i class="bx bx-phone-call bx-tada"></i>
										+009 8765 4332
									</a>
								</div>
								<!-- End Other Option -->
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- End Ecorik Navbar Area -->