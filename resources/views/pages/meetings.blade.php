@extends('layouts.master')

@section('title', 'Crystal Lake | Meetings')


@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Meetings</h2>            
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- End Service Details Area -->
<section class="service-details-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/meetings_1.jpg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/meetings_2.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Meetings at Crystal Lake</h3>
                        <ul>
                            <li>
                                Our meeting spaces have been one of the reasons our guests keep coming back to host their events here. We also cater for and host Government functions. We remain first choice for other organizations, corporate or otherwise. With excellent staff support, flexible sitting arrangements, natural lighting and ultra-modern amenities, our executive-style Board Room and 800 Capacity Conference Hall gives you the perfect venue to host that event that will <strong>WOW</strong> your guests and keep them talking long after.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Details Area -->
@endsection