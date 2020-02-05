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
        <section class="milenia-section milenia-body--scheme-lightbrown">
          <div class="milenia-section">
            <!--================ Entities (Style 14) ================-->
            <div class="milenia-entities milenia-entities--style-14">
              <div class="milenia-grid milenia-grid--cols-2">
                <div class="milenia-grid-item">
                  <!--================ Entity ================-->
                  <article class="milenia-entity milenia-entity--with-thumb">
                    {{-- <div class="milenia-entity-media"><a href="#" aria-labelledby="rooms-6-heading-0" class="milenia-entity-link milenia-ln--independent"><img src="{{ asset('images/boating.jpg') }}" alt=""></a></div> --}}
                    <div class="milenia-entity-content milenia-aligner">
                      <div class="milenia-aligner-outer">
                        <div class="milenia-aligner-inner">
                          <header class="milenia-entity-header">
                            {{-- <h4 id="rooms-6-heading-0" class="milenia-entity-title">Boating</h4> --}}
                          </header>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!--================ End of Entity ================-->
                </div>
                <div class="milenia-grid-item">
                  <!--================ Entity ================-->
                  <article class="milenia-entity milenia-entity--with-thumb">
                    {{-- <div class="milenia-entity-media"><a href="#" aria-labelledby="rooms-6-heading-1" class="milenia-entity-link milenia-ln--independent"><img src="{{ asset('images/fishing.jpg') }}" alt=""></a></div> --}}
                    <div class="milenia-entity-content milenia-aligner">
                      <div class="milenia-aligner-outer">
                        <div class="milenia-aligner-inner">
                          <header class="milenia-entity-header">
                            {{-- <h4 id="rooms-6-heading-0" class="milenia-entity-title">Fishing Activities</h4> --}}
                          </header>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!--================ End of Entity ================-->
                </div>
                <div class="milenia-grid-item">
                  <!--================ Entity ================-->
                  <article class="milenia-entity milenia-entity--with-thumb">
                  {{-- <div class="milenia-entity-media"><a href="#" aria-labelledby="rooms-6-heading-2" class="milenia-entity-link milenia-ln--independent"><img src="{{ asset('images/activities_cruise.jpg') }}" alt=""></a></div> --}}
                    <div class="milenia-entity-content milenia-aligner">
                      <div class="milenia-aligner-outer">
                        <div class="milenia-aligner-inner">
                          <header class="milenia-entity-header">
                            <!-- <h4 id="rooms-6-heading-0" class="milenia-entity-title">Classic Balcony Room</h4> -->
                          </header>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!--================ End of Entity ================-->
                </div>
                <div class="milenia-grid-item">
                  <!--================ Entity ================-->
                  <article class="milenia-entity milenia-entity--with-thumb">
                    {{-- <div class="milenia-entity-media"><a href="#" aria-labelledby="rooms-6-heading-3" class="milenia-entity-link milenia-ln--independent"><img src="{{ asset('images/activities_golf_cart.jpg') }}" alt=""></a></div> --}}
                    <div class="milenia-entity-content milenia-aligner">
                      <div class="milenia-aligner-outer">
                        <div class="milenia-aligner-inner">
                          <header class="milenia-entity-header">
                            <!-- <h4 id="rooms-6-heading-0" class="milenia-entity-title">Classic Balcony Room</h4> -->
                          </header>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!--================ End of Entity ================-->
                </div>
                <div class="milenia-grid-item">
                  <!--================ Entity ================-->
                  <article class="milenia-entity milenia-entity--with-thumb">
                    <div class="milenia-entity-media"><a href="#" aria-labelledby="rooms-6-heading-3" class="milenia-entity-link milenia-ln--independent"><img src="{{ asset('images/activities_kids_pool.jpg') }}" alt=""></a></div>
                    <div class="milenia-entity-content milenia-aligner">
                      <div class="milenia-aligner-outer">
                        <div class="milenia-aligner-inner">
                          <header class="milenia-entity-header">
                            <!-- <h4 id="rooms-6-heading-0" class="milenia-entity-title">Classic Balcony Room</h4> -->
                          </header>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!--================ End of Entity ================-->
                </div>
                <div class="milenia-grid-item">
                  <!--================ Entity ================-->
                  <article class="milenia-entity milenia-entity--with-thumb">
                    <div class="milenia-entity-media"><a href="#" aria-labelledby="rooms-6-heading-3" class="milenia-entity-link milenia-ln--independent"><img src="{{ asset('images/activities_kids_pool_2.jpg') }}" alt=""></a></div>
                    <div class="milenia-entity-content milenia-aligner">
                      <div class="milenia-aligner-outer">
                        <div class="milenia-aligner-inner">
                          <header class="milenia-entity-header">
                            <!-- <h4 id="rooms-6-heading-0" class="milenia-entity-title">Classic Balcony Room</h4> -->
                          </header>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!--================ End of Entity ================-->
                </div>
              </div>
            </div>
            <!--================ End of Entities (Style 14) ================-->


          </div>
        </section>
        <!--================ End of Content Section ================-->
      </div>
    </main>
  </div>
  {{-- End of Activities Photos --}}
</div>
  
  
@endsection