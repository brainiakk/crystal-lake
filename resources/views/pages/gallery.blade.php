@extends('layouts.master')

@section('title', 'Crystal Lake | Photo Gallery')


@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Photo Gallery</h2>            
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Gallery Area -->
<section class="gallery-area ptb-100">
    <div class="container">
        <div class="gallery-wrap">
            <div class="shorting">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery1.jpg') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery2.jpg') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery3.jpg') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery4.jpg') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery5.jpg') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery6.jpg') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery7.jpg') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery8.jpg') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery9.jpg') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery10.jpg') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery11.jpg') }});">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix certified used">
                        <div class="single-gallery">
                            <div class="gallery-image" style="background-image: url({{ asset('images/gallery12.jpg') }});">
                            </div>
                        </div>
                    </div>               
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Gallery Area -->
@endsection