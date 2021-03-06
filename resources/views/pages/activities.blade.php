@extends('layouts.master')

@section('title', 'Crystal Lake | Activities')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Activities</h2>            
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Icon Details Area -->
<section class="service-details-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <ul>
                            <li>
                                <i class="diff flaticon-golf-stick"></i> &nbsp;&nbsp;&nbsp; Golfing
                            </li>
                            <li>
                                <i class="diff flaticon-swimming"></i> &nbsp;&nbsp;&nbsp; Swimming
                            </li>
                            <li>
                                <i class="diff flaticon-table-tennis"></i> &nbsp;&nbsp;&nbsp; Table Tennis 
                            </li>    
                            <li>
                                <i class="diff flaticon-quad"></i> &nbsp;&nbsp;&nbsp; Quad Bike Riding
                            </li>
                            <li>
                                <i class="diff flaticon-fishing"></i> &nbsp;&nbsp;&nbsp; Fishing
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <ul>
                            <li>
                                <i class="diff flaticon-gaming"></i> &nbsp;&nbsp;&nbsp; Arcade Gaming
                            </li>
                            <li>
                                <i class="diff flaticon-football"></i> &nbsp;&nbsp;&nbsp; Soccer
                            </li>
                            <li>
                                <i class="diff flaticon-clothes-line"></i> &nbsp;&nbsp;&nbsp; Zipline 
                            </li>    
                            <li>
                                <i class="diff flaticon-dj"></i> &nbsp;&nbsp;&nbsp; Bonfire Night Jamz
                            </li>
                            <li>
                                <i class="diff flaticon-swing"></i> &nbsp;&nbsp;&nbsp; Kiddies Playground
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 ">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <ul>
                            <li>
                                <i class="diff flaticon-water-slide"></i> &nbsp;&nbsp;&nbsp; Water Sliding
                            </li>
                            <li>
                                <i class="diff flaticon-tennis-racket"></i> &nbsp;&nbsp;&nbsp; Lawn Tennis
                            </li>
                            <li>
                                <i class="diff flaticon-golf-cart"></i> &nbsp;&nbsp;&nbsp; Golf Cart Riding 
                            </li>    
                            <li>
                                <i class="diff flaticon-camping"></i> &nbsp;&nbsp;&nbsp; Picnicking
                            </li>
                            <li>
                                <i class="diff flaticon-yacht"></i> &nbsp;&nbsp;&nbsp; Wonder Lake Tours (Cruise Boats, Jet Skis
                                and more)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Icon Details Area -->

<!-- End Service Details Area -->
<section class="service-details-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Boating</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/boating.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Golf Cart Riding</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/activities_golf_cart.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Swimming</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/activities_kids_pool.jpg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/activities_kids_pool_2.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Details Area -->
@endsection