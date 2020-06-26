@extends('layouts.master')

@section('title', 'Crystal Lake | Studio Room')


@section('content')
        <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Studio Room</h2>            
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
                            <h3 class="service-details-title">From N40,000/night</h3>
                            <ul>
                                <li>
                                    Wake up to a morning of comfort in one of our spacious, pastel toned and tastefully furnished Studio rooms, pull up the window blinds to enjoy the view, and if you choose, we can also have your rich, complementary breakfast, delivered to your room.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-wrap ">
                        <div class="service-img-wrap owl-carousel owl-theme mb-30">
                            <div class="single-services-imgs">
                                <img src="{{ asset('images/studio-room_1.png') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Details Area -->
@endsection