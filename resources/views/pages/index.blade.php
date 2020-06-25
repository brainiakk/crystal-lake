@extends('layouts.master')

@section('title', 'Crystal Lake | Home')

@section('content')

		<!-- Start Ecorik Slider Area -->
		<section class="eorik-slider-area">
			<div class="eorik-slider owl-carousel owl-theme">
				<div class="eorik-slider-item slider-item-bg-1">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden one eorik-slider-text-one">
									<h1>Welcome to Crystal Lake Resort and Tours</h1>
									<span>A UNIQUE BLEND OF PRIVACY, SECURITY AND COMFORT</span>
									<div class="slider-btn">
										<a class="default-btn white" href="{{ url('/about') }}">
											Discover More
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-2">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden two eorik-slider-text-one">
									<h1>Welcome to Crystal Lake Resort and Tours</h1>
									<span>Where Dreams &amp; Emotions Live</span>
									<div class="slider-btn">
										<a class="default-btn white" href="{{ url('/about') }}">
											Discover More
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-3">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden three eorik-slider-text-one">
									<h1>Welcome to Crystal Lake Resort and Tours</h1>
									<span>The Essence of a Smooth Glamour</span>
									<div class="slider-btn">
										<a class="default-btn white" href="{{ url('/about') }}">
											Discover More
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-4">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden three eorik-slider-text-one">
									<h1>Clean Natural Surroundings</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-5">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden three eorik-slider-text-one">
									<h1>Spectacular Views</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-6">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden three eorik-slider-text-one">
									<h1>Fun-filled Adventures</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-7">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden three eorik-slider-text-one">
									<h1>Great fun spots</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-8">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden three eorik-slider-text-one">
									<h1>Secluded getaway spots</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="white-shape">
				<img src="{{ asset('images/white-shape.png') }}" alt="Image">
			</div>
			<div class="social-link">
				<ul>
					<li>
						<a href="https://web.facebook.com/crystallakeresortntours">
							<i class="bx bxl-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://instagram.com/crystallakeresortandtoursoguta">
							<i class="bx bxl-instagram"></i> <!-- others twitter, linkedin -->
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- End Ecorik Slider Area -->

		<!-- Start Check Area -->
        <div class="check-area mb-minus-70">
            <div class="container">
                <form class="check-form">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-6">
							<div class="check-content">
								<p>Arrival Date</p>
								<div class="form-group">
									<div class="input-group date" id="datetimepicker-1">
										<i class="flaticon-calendar"></i>
										<input type="text" class="form-control" placeholder="29/02/2020">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-th"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
									
						<div class="col-lg-3 col-sm-6">
							<div class="check-content">
								<p>Departure Date</p>
								<div class="form-group">
									<div class="input-group date" id="datetimepicker-2">
										<i class="flaticon-calendar"></i>
										<input type="text" class="form-control" placeholder="29/02/2020">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-th"></i>
										</span>
									</div>
								</div>
							</div> 
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="check-content">
										<p>Adults</p>
										<div class="form-group">
											<select name="adult" class="form-content">
												<option value="1">01</option>
												<option value="2">02</option>
												<option value="3">03</option>
												<option value="4">04</option>
												<option value="5">05</option>
											</select>
										</div>
									</div> 
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="check-content">
										<p>Children</p>
										<div class="form-group">
											<select name="adult" class="form-content">
												<option value="1">01</option>
												<option value="2">02</option>
												<option value="3">03</option>
												<option value="4">04</option>
												<option value="5">05</option>
											</select>
										</div>
									</div> 
								</div>
							</div>
						</div>
                        <div class="col-lg-3">
							<div class="check-btn check-content mb-0">
								<button class="default-btn">
									Check Availability
									<i class="flaticon-right"></i>
								</button>
							</div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Check Section -->

		<!-- Start Explore Area -->
		<section class="explore-area pt-170 pb-100">
			<div class="container">
				<div class="section-title">
					<h2>Welcome To Crystal Lake Resort</h2>
					<span>Where Nature Meets Modern Hospitality!</span>
				</div>
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="explore-img">
							<img src="{{ asset('images/front-view.png') }}" alt="Image">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="explore-content ml-30">
							<p>Whether you are planning a romantic getaway, a weekend alone, an action-packed adventure with friends, or a fun-filled family holiday, Crystal Lake Resort and Tours offers something for everyone.With an exciting array of activities and entertainment to choose from, guests will never have to wonder how to spend any second of their stay here.</p>

							<img src="{{ asset('images/sign-1.png') }}" alt=""><br>
							<small style="margin-top: -90px; padding-bottom: 20px;">General Manager</small><br>

							<a href="{{ url('/') }}" class="default-btn">
								Explore More
								<i class="flaticon-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Explore Area -->

		
@endsection