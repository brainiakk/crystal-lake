@extends('layouts.master')

@section('title', 'Crystal Lake | Social Gatherings')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Social Gatherings</h2>            
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
                            <img src="{{ asset('images/socialgatherings_1.jpeg') }}" alt="Image">
                        </div>
                        <div class="single-services-imgs">
                            <img src="{{ asset('images/socialgatherings_2.jpeg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-sidebar-area">
                    <div class="service-list service-card">
                        <h3 class="service-details-title">Social Gatherings</h3>
                        <ul>
                            <li>
                                Be it for your Parties (Birthday, Graduation, Promotion, Engagement) or Social Functions (Book unveiling, Beauty Pageant, etc.), Crystal Lake Resort and Tours gives you a variety of spots to pick from. From our ultra-modern conference hall to an executive-style Boardroom or even the white sand beach if you have a crowd of outdoor lovers. What’s more, we’ll help take your fun, joyous, wonderful, sophisticated and personal ideas and turn them into the special occasion they deserve;  from custom decorating to creative catering, resulting in a flawless event that reflects you and your group perfectly.
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