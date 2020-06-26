@extends('layouts.master')

@section('title', 'Crystal Lake | Two-Bedroom Suites')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Two-Bedroom Suites</h2>            
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- End Service Details Area -->
<section class="service-details-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">From N80,000/night</h3>
                        <ul>
                            <li>
                                Our 150-square-meter suite also has its own pantry equipped for preparation and serving of in-room meals, with a central living room and double king size bedrooms large enough for a family of 8-10. Secluded from the rest of the resort facilities and thoughtfully furnished with all the trappings of the perfect condo, it has become a favorite for the vacationing family.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/2bedroom_1.jpg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/2bedroom_2.jpg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/2bedroom_3.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Details Area -->
@endsection