@extends('layouts.master')

@section('title', 'Crystal Lake | About Us')

@section('content')
    <!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>About Us</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
							</a>
						</li>
						<li>About Us</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Explore Area -->
		<section class="explore-area ptb-100">
			<div class="container">
				<div class="section-title">
                    <h2>Welcome to Crystal Lake Resort and Tours</h2>
                    <span>Where Nature Meets Modern Hospitality.</span>
				</div>
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="explore-img">
							<img src="{{ asset('images/about_us_photo.jfif') }}" alt="Image">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="explore-content ml-30">
							<p>Crystal Lake Resort and Tours is situated within the beautiful island town of Oguta in Imo State, which is till date, arguably the best planned part of Nigeria, better in terms of roads and accessibility, than any other part of the country and home to the famous Oguta Lake with its clear blue colour, non-salty taste and the perfect holiday destination for splashing around, boat cruising and lots more. The second largest lake in Nigeria welcomes fun seekers, tourists and adventure lovers.</p>
                            
                            <p>Designed to carry on the age old tradition of hospitality and style that is a trademark of the Oguta people, Crystal Lake Resort and Tours was established in 2016 and has continued to be a pace setter within the hospitality industry, giving both walking guests and lodgers a different experience each time they visit. Whether you are planning a romantic getaway, a weekend alone, an action-packed adventure with friends, or a fun-filled family holiday, Crystal Lake Resort and Tours offers something for everyone. With an exciting array of activities and entertainment to choose from, guests will never have to wonder how to spend any second of their stay here.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Explore Area -->
@endsection