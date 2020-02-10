@extends('layouts.master')

@section('title', 'Crystal Lake | Hall & Boardroom')

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
                <section class="milenia-section milenia-body--scheme-blue">
                  <h3>CONFERENCE HALL AND BOARDROOM</h3>
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
                                <div data-bg-image-src="{{ asset('images/conference_room_1.jpeg') }}" class="milenia-entity-slide"></div>
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
                                    <p></p>
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
                  <br>
                  <br>
                  <br>
                  <br>

                  <h3>EVENTS HALL</h3>
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
                                <div data-bg-image-src="{{ asset('images/events_hall.jpeg') }}" class="milenia-entity-slide"></div>
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
                                      <ul class="milenia-list--icon">
                                          <li>Our largest indoor venue, the Crystal Events Hall, can accommodate 1000 attendees. <i class="milenia-tc--primary icon icon-check"></i></li>
                                          <li>Serene just about describes our surroundings <i class="milenia-tc--primary icon icon-check"></i></li>
                                          <li>Our security team is top notch<i class="milenia-tc--primary icon icon-check"></i></li>
                                          <li>Our AV equipment and technical support is upgraded every third quarter of the year.<i class="milenia-tc--primary icon icon-check"></i></li>
                                          <li>We provide customized catering for our guests<i class="milenia-tc--primary icon icon-check"></i></li>
                                          <li>We give you value for your money……..plus more.<i class="milenia-tc--primary icon icon-check"></i></li>
                                      </ul>
                                    </p>
                                    <br>
                                    <br>
                                    <span><h6><strong>Other Services:</strong></h6></span>
                                    <br>
                                    <div>
                                      <ul class="milenia-list--icon">
                                        <li>Typing<i class="milenia-tc--primary icon icon-check"></i></li>
                                        <li>Photocopying<i class="milenia-tc--primary icon icon-check"></i></li>
                                        <li>Printing<i class="milenia-tc--primary icon icon-check"></i></li>
                                        <li>Scanning<i class="milenia-tc--primary icon icon-check"></i></li>
                                        <li>Wi-Fi<i class="milenia-tc--primary icon icon-check"></i></li>
                                      </ul>
                                    </div>
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