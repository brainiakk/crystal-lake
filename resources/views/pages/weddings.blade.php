@extends('layouts.master')

@section('title', 'Weddings')


@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Weddings</h2>            
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
                        <h3 class="service-details-title">Planning</h3>
                        <ul>
                            <li>
                                Wedding planning, while exciting, can be a major source of stress. Let Us help you check those boxes on your list, sort your guests accordingly during reservations and check-ins and also arrange for your rehearsal dinners if you choose to, as our professionals here will make sure no detail is overlooked in creating your perfect day.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/wedding_1.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Receptions</h3>
                        <ul>
                            <li>
                                Let the magic of the day continue as you toast your new beginning. “Relax, Calm Breaths, We Got You Covered”. That’s the promise we never fail to keep throughout the planning and execution stages of your wedding reception, here at Crystal Lake Resort and Tours. Our stylish venues, expert planning and romantic ambience ensures that your day will remain an unforgettable experience.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/wedding_2.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Honeymoon</h3>
                        <ul>
                            <li>
                                You made it official now and it’s time to unwind. After all the excitement, the last thing you want is to arrive at your honeymoon destination and realize it is only open in high season. Crystal Lake Resort and Tours provides you with the perfect opportunity to relax connect and recoup your energy. Stay in one of our Diplomatic Suites or any of our tastefully furnished deluxe rooms and choose from our amazing array of fun activities.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/wedding_3.jfif') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Details Area -->
@endsection