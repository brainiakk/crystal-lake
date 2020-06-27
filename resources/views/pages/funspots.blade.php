@extends('layouts.master')

@section('title', 'Crystal Lake | Fun Spots')


@section('content')
 <!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Fun Spots & Equipment</h2>            
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- End Service Details Area -->
<section class="service-details-area pt-100">
    <div class="container">

        {{-- Pool Bar --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Pool Bar</h3>
                        <ul>
                            <li>
                                DJ spinning, wine list updated, sea breeze caressing your body and the surrounding vista surpassing your imaginations…………welcome to our Poolside bar. Strategically positioned between the swimming pool, lake, basketball and lawn tennis courts; this particular spot checks all your boxes for a fun-filled resort relaxation.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/poolbar.jpeg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/poolbar_2.jpg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/poolbar_3.jpeg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/poolbar_4.jpeg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/poolbar_5.jpeg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Golf Course --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Golf Course</h3>
                        <ul>
                            <li>
                                Built primarily on former farm and forest lands, the Crystal Lake Resort & Tours 9-Hole Golf course offers a variety of settings as you walk this relatively flatland layout. Each hole has its own distinct character and will challenge golfers of all skill levels.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/golf_course.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Swimming Pool --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Swimming Pool</h3>
                        <ul>
                            <li>
                                Classy key-shaped adult swimming pool adjourns smaller pool for toddlers to splash around. Life guards, jackets and other pool toys are also available for optimum swimming experience. Large water slide drops right into the pool for that roller coaster experience……….1,2,3 SPLASH! KABOOM!!!
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/swimming_pool.png') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/swimming_pool_2.png') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/swimming_pool_3.jpeg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Jet Ski --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <ul>
                            <li>
                                <h5>Jet Ski</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/jetski.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- White Sand Beach --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <ul>
                            <li>
                                <h5>White Sand Beach</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/white_sand_beach.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Wonder Lake Tours --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <ul>
                            <li>
                                <h5>Wonder Lake Tours</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/wonder_lake_tours.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Cruise Boat --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <ul>
                            <li>
                                <h5>Cruise Boat</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/cruise_boat.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Playground --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <ul>
                            <li>
                                <h5>Playground</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/playground_1.jpeg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/playground_2.jpeg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Arcade --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Arcade</h3>
                        <ul>
                            <li>
                                Our fully equipped arcade house for the game lovers features an assortment of racing simulators, shooting arcade games, PlayStation4, dual-hoop indoor basketball arcade games and more…………. Yes! We do mean it when we say there’s something for everyone.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details-wrap ">
                    <div class="service-img-wrap owl-carousel owl-theme mb-30">
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/Arcade_1.jpeg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Details Area -->
@endsection