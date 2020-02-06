@extends('layouts.master')

@section('title', 'Crystal Lake | Meetings')

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
                  <h3>MEETINGS AT CRYSTAL LAKE</h3>
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
                                <div data-bg-image-src="{{ asset('images/meetings_1.jpg') }}" class="milenia-entity-slide"></div>
                                <div data-bg-image-src="{{ asset('images/meetings_2.jpg') }}" class="milenia-entity-slide"></div>
                              </div>
                            </div>
                            <div class="milenia-entity-content milenia-aligner">
                              <div class="milenia-aligner-outer">
                                <div class="milenia-aligner-inner">
                                  <header class="milenia-entity-header">
                                    <h2 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable">Meetings</a></h2>
                                  </header>
                                  <div class="milenia-entity-body">
                                    <p>Our meeting spaces have been one of the reasons our guests keep coming back to host their events here. We also cater for and host Government functions. We remain first choice for other organizations, corporate or otherwise. With excellent staff support, flexible sitting arrangements, natural lighting and ultra-modern amenities, our executive-style Board Room and 800 Capacity Conference Hall gives you the perfect venue to host that event that will <strong>WOW</strong> your guests and keep them talking long after.</p>
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