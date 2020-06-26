@extends('layouts.master')

@section('title', 'Crystal Lake | Standard Room')


@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Standard Room</h2>            
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
            <span style="float: right;">From N30,000/night</span>
        </div>
        <br>
        <br>
        <div class="tab industries-list-tab" style="clear: both;">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="container" style="text-align: justify; text-justify: inter-word;">
                        <p>Our Standard Rooms at the GENESIS building offer privacy, a view of greenery, infusing calm with all the modern comforts at Crystal Lake Resort and Tours.</p>
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
                        <img src="{{ asset('images/standard_room_1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="city-view-single-item">
                    <div class="city-content">
                        <img src="{{ asset('images/standard_room_2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="city-view-single-item">
                    <div class="city-content">
                        <img src="{{ asset('images/standard_room_3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="city-view-single-item">
                    <div class="city-content">
                        <img src="{{ asset('images/standard_room_4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="city-view-single-item">
                    <div class="city-content">
                        <img src="{{ asset('images/standard_room_5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End City View Area -->
@endsection