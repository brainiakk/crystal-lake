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
						<img src="{{ asset('images/mobile-logo.png') }}" alt="Logo">
					</a>
				</div>
				<!-- Menu For Desktop Device -->
				<div class="main-nav">
					<nav class="navbar navbar-expand-md navbar-light">
						<div class="container">
							<a class="navbar-brand" href="/">
								<img src="{{ asset('images/header_logo_crystallake.png') }}" alt="Logo">
							</a>
							<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="{{ url('/') }}" class="nav-link dropdown-toggle {{ Request::path() === '/' ? 'active' : '' }}">
											Home
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="{{ url('/about') }}" class="nav-link active">About Us</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											Accommodation
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="{{ url('/rooms/standard') }}" class="nav-link">Standard Rooms</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/rooms/executive') }}" class="nav-link">Executive Rooms</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/rooms/studio') }}" class="nav-link">Studio Rooms</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/rooms/deluxe') }}" class="nav-link">Deluxe Rooms</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/rooms/royal') }}" class="nav-link">Royal Suites</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/rooms/diplomatic') }}" class="nav-link">Diplomatic Suites</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/rooms/2bedroom') }}" class="nav-link">Two-Bedroom Suites</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="/events" class="nav-link dropdown-toggle">
											Events
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="{{ url('/events') }}" class="nav-link">Events List</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/meetings') }}" class="nav-link">Meetings</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/weddings') }}" class="nav-link">Weddings</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/socialgatherings') }}" class="nav-link">Social Gatherings</a>
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
									<a class="call-us" href="tel: +2349068116377">
										<i class="bx bx-phone-call bx-tada"></i>
										09068116377
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

		      

		<!-- Start Sidebar Modal -->
		<div class="sidebar-modal">  
			<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									<i class="bx bx-x"></i>
								</span>
							</button>
							<h2 class="modal-title" id="myModalLabel2">
								<a href="/">
									<img src="{{ asset('images/header_logo_crystallake.png') }}" alt="Logo">
								</a>
							</h2>
						</div>
						<div class="modal-body">
							<div class="sidebar-modal-widget">
								<h3 class="title">About Us</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, asperiores doloribus eum laboriosam praesentium delectus unde magni aut perspiciatis cumque deserunt dolore voluptate, autem pariatur? Dicta pariatur.</p>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Additional Links</h3>
								<ul>
									<li>
										<a href="log-in.html">Log In</a>
									</li>
									<li>
										<a href="sign-up.html">Sign Up</a>
									</li>
									<li>
										<a href="faq.html">FAQ</a>
									</li>
									<li>
										<a href="#">Logout</a>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Contact Info</h3>
								<ul class="contact-info">
									<li>
										<i class="bx bx-location-plus"></i>
										Address
										<span>New York - 1060, Str. First 78 Great Western Road</span>
									</li>
									<li>
										<i class="bx bx-envelope"></i>
										Email
										<span>hello@prevoz.com</span>
									</li>
									<li>
										<i class="bx bxs-phone-call"></i>
										Phone
										<span>+502-464-679, +265-497-466</span>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Connect With Us</h3>
								<ul class="social-list">
									<li>
										<a href="#">
											<i class='bx bxl-twitter'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-facebook'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-instagram'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-linkedin'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-youtube'></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Sidebar Modal -->