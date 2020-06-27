@extends('layouts.master')

@section('title', 'Crystal Lake | Hall & Boardroom')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Event Venues</h2>            
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
                        <h3 class="service-details-title">CONFERENCE HALL AND BOARDROOM</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/conference_room_1.jpeg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">EVENTS HALL</h3>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i> &nbsp; Our largest indoor venue, the Crystal Events Hall, can accommodate 1000 attendees. <br>
                                <i class="bx bx-check"></i> &nbsp; Serene just about describes our surroundings <br>
                                <i class="bx bx-check"></i> &nbsp; Our security team is top notch<br>
                                <i class="bx bx-check"></i> &nbsp; Our AV equipment and technical support is upgraded every third quarter of the year.<br>
                                <i class="bx bx-check"></i> &nbsp; We provide customized catering for our guests <br>
                                <i class="bx bx-check"></i> &nbsp; We give you value for your money...plus more. <br>
                                <br>
                                <span><h5>Other Services:</h5></span>                                
                                <i class="bx bx-check"></i> &nbsp; Typing <br>
                                <i class="bx bx-check"></i> &nbsp; Photocopying <br>
                                <i class="bx bx-check"></i> &nbsp; Printing <br>
                                <i class="bx bx-check"></i> &nbsp; Scanning <br>
                                <i class="bx bx-check"></i> &nbsp; Wi-Fi
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/events_hall.jpeg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Details Area -->
@endsection