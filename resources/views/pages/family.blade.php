@extends('layouts.master')

@section('title', 'Crystal Lake | Family Packages')

@section('content')
<hr>
<div class="milenia-preloader"></div>
    <div id="milenia-page-wrapper" class="milenia-page-wrapper">
      <div class="milenia-content  ">
        <div class="container">
          <div class="row">
            <main class="col">
              <div class="milenia-entity-content">
                <!--================ Content Section ================-->
                <section class="milenia-section milenia-body--scheme-lightbrown">
                  <h3>Family Reunions</h3>
                  <!--================ Tabbed Carousel ================-->
                  <div class="milenia-tabbed-carousel">
                    <!--================ Entities (Style 15) ================-->
                    <div class="milenia-entities milenia-entities--style-15 milenia-entities--with-tabbed-grid">
                      <div id="milenia-grid-tabbed-1" class="milenia-grid milenia-grid--cols-1 milenia-grid--tabbed milenia-grid--tabbed-loading">
                        <div class="milenia-grid-item">
                          <!--================ Entity ================-->
                          <article class="milenia-entity">
                            <div class="milenia-entity-media">
                              <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                                <div data-bg-image-src="{{ asset('images/family_reunion_1.jpeg') }}" class="milenia-entity-slide"></div>
                                <div data-bg-image-src="{{ asset('images/family_reunion_2.jpeg') }}" class="milenia-entity-slide"></div>
                              </div>
                            </div>
                            <div class="milenia-entity-content milenia-aligner">
                              <div class="milenia-aligner-outer">
                                <div class="milenia-aligner-inner">
                                  <header class="milenia-entity-header">
                                    <h2 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable"></a></h2>
                                  </header>
                                  <div class="milenia-entity-body">
                                      
                                    {{-- Text Content --}}
                                    <p>
                                        Picking the right place for your clan has always been the first move towards a successful family reunion. From budget-friendly options to luxurious suites, diverse culinary delights and activities like children’s programs, whole family game time with golfing, water games, arcade games, zip line running and lots more thrown in-between. Our family-friendly packages, free budget planning tips and excellent staff support will ensure you have that optimum family experience.
                                    </p>
                                    {{-- Text Content --}}

                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                          <!--================ End of Entity ================-->
                        </div>
        
                      </div>
                    </div>
                    <!--================ End of Entities (Style 15) ================-->
                  </div>
                </section>
                <!--================ End of Content Section ================-->
              </div>
            </main>
          </div>
        </div>
      </div>
    </div>
@endsection