@extends('layouts.master')

@section('title', 'Crystal Lake | Activities')

{{-- font awesome cdn --}}
@section('fa-cdn')
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
@endsection

@section('content')
<!--================ Breadcrumb ================-->
<div   class="milenia-breadcrumb text-center milenia-colorizer--scheme-light">
    <div class="container">
      <h1 class="milenia-page-title">Activities</h1>
    </div>
  </div>
  <!--================ End of Breadcrumb ================-->
  <br>
  
  <div class="container">
    {{-- Activities List Icons --}}
  <div class="row">
    <div class="col-sm-4">
      <ul class="milenia-list--icon milenia-list--icon-big">
        <li>Golfing<i class="fas fa-golf-ball"></i></li>
        <li>Swimming<i class="milenia-font-icon-swimming"></i></li>
        <li>Table Tennis<i class="fas fa-table-tennis"></i></li>
        <li>Quad Bike Riding<i class="milenia-font-icon-car"></i></li>
        <li>Fishing<i class="milenia-font-icon-fish"></i></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul class="milenia-list--icon milenia-list--icon-big">
        <li>Arcade Gaming<i class="fas fa-gamepad"></i></li>
        <li>Soccer<i class="fas fa-futbol"></i></li>
        <li>Zipline<i class="milenia-font-icon-car"></i></li>
        <li>Bonfire Night Jamz<i class="milenia-font-icon-music"></i></li>
        <li>Playground Activities<i class="milenia-font-icon-palms"></i></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul class="milenia-list--icon milenia-list--icon-big">
        <li>Water Sliding<i class="milenia-font-icon-pool"></i></li>
        <li>Lawn Tennis<i class="milenia-font-icon-tennis"></i></li>
        <li>Golf Cart Riding<i class="milenia-font-icon-car"></i></li>
        <li>Picnicking<i class="milenia-font-icon-picnic"></i></li>
        <li>Wonder Lake Tours (Cruise Boats, Jet Skis <br> and more)<i class="fas fa-ship"></i></li>
      </ul>
    </div>
  </div>
  {{-- End of Activities List Icons --}}

  {{-- Activities Photos --}}
  <div class="row">
    <main class="col">
      <div class="milenia-entity-content">
        <!--================ Content Section ================-->
        <section class="milenia-section milenia-body--scheme-blue">
          <!--================ Top 2 Photos ================-->
          <div class="milenia-entities milenia-entities--style-1">
            <div class="milenia-grid milenia-grid--cols-3">
              <div class="milenia-grid-item">
                <!--================ Entity ================-->
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel milenia-simple-slideshow"><img src="{{ asset('images/boating.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h6 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable">Boating</a></h6>
                        </header>
                        <div class="milenia-entity-body">
                          <p></p>
                        </div>
                        <footer class="milenia-entity-footer"><a href="#" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary"></a></footer>
                      </div>
                    </div>
                  </div>
                </article>
                <!--================ End of Entity ================-->
              </div>
              <div class="milenia-grid-item">
                <!--================ Entity ================-->
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel milenia-simple-slideshow"><img src="{{ asset('images/activities_golf_cart.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h4 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable">Golf Cart Riding</a></h4>
                        </header>
                        <div class="milenia-entity-body">
                          <p></p>
                        </div>
                        <footer class="milenia-entity-footer"><a href="#" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary"></a></footer>
                      </div>
                    </div>
                  </div>
                </article>
                <!--================ End of Entity ================-->
              </div>
              <div class="milenia-grid-item">
                <!--================ Entity ================-->
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel milenia-simple-slideshow"><img src="{{ asset('images/activities_kids_pool.jpg') }}" alt=""><img src="{{ asset('images/activities_kids_pool_2.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h4 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable"></a>Swimming</h4>
                        </header>
                        <div class="milenia-entity-body">
                          <p></p>
                        </div>
                        <footer class="milenia-entity-footer"><a href="#" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary"></a></footer>
                      </div>
                    </div>
                  </div>
                </article>
                <!--================ End of Entity ================-->
              </div>
            </div>
          </div>
          <!--================ End of Top 2 Photos ================-->
          <!--================ Bottom 2 Photos ================-->
          {{-- <div class="milenia-entities milenia-entities--style-1">
            <div class="milenia-grid milenia-grid--cols-3">
              <div class="milenia-grid-item">
                <!--================ Entity ================-->
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel milenia-simple-slideshow"><img src="{{ asset('images/activities_cruise.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h2 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable">Boat Cruise</a></h2>
                        </header>
                        <div class="milenia-entity-body">
                          <p></p>
                        </div>
                        <footer class="milenia-entity-footer"><a href="#" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary"></a></footer>
                      </div>
                    </div>
                  </div>
                </article>
                <!--================ End of Entity ================-->
              </div>
              <div class="milenia-grid-item">
                <!--================ Entity ================-->
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel milenia-simple-slideshow"><img src="{{ asset('images/fishing.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h2 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable">Fishing Activities</a></h2>
                        </header>
                        <div class="milenia-entity-body">
                          <p></p>
                        </div>
                        <footer class="milenia-entity-footer"><a href="#" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary"></a></footer>
                      </div>
                    </div>
                  </div>
                </article>
                <!--================ End of Entity ================-->
              </div>
            </div>
          </div> --}}
          <!--================ End of Bottom 2 Photos ================-->
        </section>
        <!--================ End of Content Section ================-->
      </div>
    </main>
  </div>
  {{-- End of Activities Photos --}}
</div>
  
  
@endsection