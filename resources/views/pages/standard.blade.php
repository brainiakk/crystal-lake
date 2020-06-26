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

    <!-- End Service Details Area -->
    <section class="service-details-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-sidebar-area">
                        <div class="service-list service-card">
                            <h3 class="service-details-title">From N30,000/night</h3>
                            <ul>
                                <li>
                                    Our Standard Rooms at the GENESIS building offer privacy, a view of greenery, infusing calm with all the modern comforts at Crystal Lake Resort and Tours.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap ">
                        <div class="service-img-wrap owl-carousel owl-theme mb-30">
                            <div class="single-services-imgs">
                                <img src="{{ asset('images/standard_room_1.jpg') }}" alt="Image">
                            </div>
                            <div class="single-services-imgs">
                                <img src="{{ asset('images/standard_room_2.jpg') }}" alt="Image">
                            </div>
                            <div class="single-services-imgs">
                                <img src="{{ asset('images/standard_room_3.jpg') }}" alt="Image">
                            </div>
                            <div class="single-services-imgs">
                                <img src="{{ asset('images/standard_room_4.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Details Area -->
@endsection