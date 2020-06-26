@extends('layouts.master')

@section('title', 'Crystal Lake | Executive Room')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Executive Room</h2>            
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
                            <h3 class="service-details-title">From N35,000/night</h3>
                            <ul>
                                <li>
                                    Warm color schemes, matching hand-woven cane chairs with soft cushions thrown in for extra comfort, soft lighting, king size bed and other ultra-modern amenities, give our Executive rooms an ideal setting for our guests.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap ">
                        <div class="service-img-wrap owl-carousel owl-theme mb-30">
                            <div class="single-services-imgs">
                                <img src="{{ asset('images/executive-room_1.png') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Details Area -->
@endsection