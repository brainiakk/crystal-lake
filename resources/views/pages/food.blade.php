@extends('layouts.master')

@section('title', 'Crystal Lake | Fun Spots')


@section('content') 
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Food</h2>            
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
                        <h3 class="service-details-title">Two Restaurants on Site</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Greenwood Dining Room</h3>
                        <ul>
                            <li>
                                Our executive style Greenwood dining room gives you the perfect spot to sit back, relax and enjoy the romantic ambience; whether you choose to dine privately or treat your guests to a power lunch. Sitting arrangements vary from single to tables for thirty.  You can choose to pull back the curtains and soak in the view of both the swimming pool and the natural blue-green Lake, making it a favorite for both walk-in and lodging guests. <br>
                                <b>Food:</b> African, International <br>
                                <b>Open for:</b> 24 hours <br>
                                <b>Menu:</b> Buffet & À La Carte <br>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/greenwood_2.jpg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/greenwood_1.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Trybal Dining Room</h3>
                        <ul>
                            <li>
                                Looking for that extra twist to your dining experience? Our Trybal dining room and bar located in the GENESIS building provides you with just that! Every inch of space, the décor and overall atmosphere was designed to give you the feeling of home-away-from-home. What’s more, with trained waiters available at your beck and call, soft music (group diners can even make their choice of songs) and a robust wine list to pick from……………….it’s always a Crystallized Experience.<br>
                                <b>Food:</b> African, International <br>
                                <b>Open for:</b> Lunch, Dinner, Cocktail hour <br>
                                <b>Menu:</b> Buffet & À La Carte <br>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/trybal_1.jpg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/trybal_2.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Crystal Kitchen Service</h3>
                        <ul>
                            <li>
                                Led by the internationally renowned Beninese Chef, John Azonde, the Crystal kitchen operates round the clock and has been the recipient of unsolicited praise from both lodging and walk-in guests, redefining the art of dining and impressing even the most critiquing palates.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/food_1.jpg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/food_2.jpg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/food_3.jpg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/food_4.jpg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/food_5.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Details Area -->
@endsection