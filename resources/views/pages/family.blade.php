@extends('layouts.master')

@section('title', 'Crystal Lake | Family Packages')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Family Packages</h2>            
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
                        <h3 class="service-details-title">Family Reunions</h3>
                        <ul>
                            <li>
                                Picking the right place for your clan has always been the first move towards a successful family reunion. From budget-friendly options to luxurious suites, diverse culinary delights and activities like children’s programs, whole family game time with golfing, water games, arcade games, zip line running and lots more thrown in-between. Our family-friendly packages, free budget planning tips and excellent staff support will ensure you have that memorable family experience.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/family_reunion_1.jpeg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/family_reunion_2.jpeg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Details Area -->
@endsection