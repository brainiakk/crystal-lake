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

<!-- Start Our Rooms Area -->
<br>
<br>
<section class="our-rooms-area pb-100">
    <div class="container">
        <div class="section-title">
            <span style="float: right;">From N80,000/night</span>
        </div>
        <br>
        <br>
        <div class="tab industries-list-tab" style="clear: both;">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="container" style="text-align: justify; text-justify: inter-word;">
                        <p>Our 150-square-meter suite also has its own pantry equipped for preparation and serving of in-room meals, with a central living room and double king size bedrooms large enough for a family of 8-10. Secluded from the rest of the resort facilities and thoughtfully furnished with all the trappings of the perfect condo, it has become a favorite for the vacationing family.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Rooms Area -->

<!-- Start City View Area -->
<section class="city-view-area pb-100">
    <div class="container">
        <div class="city-wrap">
            <div class="single-city-item owl-carousel owl-theme">
                <div class="city-view-single-item">
                    <div class="city-content">
                        <img src="{{ asset('images/2bedroom_1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="city-view-single-item">
                    <div class="city-content">
                        <img src="{{ asset('images/2bedroom_2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="city-view-single-item">
                    <div class="city-content">
                        <img src="{{ asset('images/2bedroom_3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End City View Area -->
@endsection