@extends('layouts.master')

@section('title', 'Crystal Lake | Royal Suite')


@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Royal Suite</h2>            
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
            <span style="float: right;">From N50,000/night</span>
        </div>
        <br>
        <br>
        <div class="tab industries-list-tab" style="clear: both;">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="container" style="text-align: justify; text-justify: inter-word;">
                        <p>An offshoot from the Diplomatic Suites, our Royal Suites offer you the perfect accommodation to recharge between adventures and rest up before another day filled with getaway fun that is our trademark. In these spacious suites with plenty of spacious living spaces, sumptuous design and flawless attention to detail is just the start of your perfect vacation.</p>
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
                        <img src="{{ asset('images/royal-suite_1.png') }}" alt="">
                    </div>
                </div>
                <div class="city-view-single-item">
                    <div class="city-content">
                        <img src="{{ asset('images/royal-suite_2.png') }}" alt="">
                    </div>
                </div>
                <div class="city-view-single-item">
                    <div class="city-content">
                        <img src="{{ asset('images/royal-suite_3.png') }}" alt="">
                    </div>
                </div>
                <div class="city-view-single-item">
                    <div class="city-content">
                        <img src="{{ asset('images/royal-suite_4.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End City View Area -->
@endsection