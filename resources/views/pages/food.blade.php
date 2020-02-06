@extends('layouts.master')

@section('title', 'Crystal Lake | Fun Spots')

@section('content') 
    <!--================ Breadcrumb ================-->
    <div class="milenia-breadcrumb text-center milenia-colorizer--scheme-dark">
        <div class="container">
          <h1 class="milenia-page-title">Food and Drink</h1>
          <nav class="milenia-breadcrumb-path"><span>Two Restaurants on Site</span>
          </nav>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <br>
      <br>
          <!--================ Entities (Style 3) ================-->
          <div class="milenia-entities milenia-entities--style-3 milenia-entities--filled">
            <div class="milenia-grid milenia-grid--cols-1 milenia-grid--no-gutters">
                <!--================ Pool Bar Section ================-->
                <div class="milenia-grid-item">
                  <article class="milenia-entity milenia-entity--format-slideshow">
                    <div class="milenia-entity-media">
                      <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                        <div data-bg-image-src="{{ asset('images/greenwood_1.jpg') }}" class="milenia-entity-slide"></div>
                        <div data-bg-image-src="{{ asset('images/greenwood_2.jpg') }}" class="milenia-entity-slide"></div>
                      </div>
                    </div>
                    <div class="milenia-entity-content milenia-aligner">
                      <div class="milenia-aligner-outer">
                        <div class="milenia-aligner-inner">
                          <header class="milenia-entity-header">
                            <h6 class="milenia-entity-title">Greenwood Dining Room</h6>
                          </header>
                          <div class="milenia-entity-body">
                            <p>Our executive style Greenwood dining room gives you the perfect spot to sit back, relax and enjoy the romantic ambience; whether you choose to dine privately or treat your guests to a power lunch. Sitting arrangements vary from single to tables for thirty.  You can choose to pull back the curtains and soak in the view of both the swimming pool and the natural blue-green Lake, making it a favorite for both walk-in and lodging guests.</p>
                            <p align="left"><b>Food:</b> African, International</p>
                            <p align="left"><b>Open for:</b> 24 hours</p>
                            <p align="left"><b>Menu:</b> Buffet & À La Carte</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              <!--================ End of Pool Bar Section ================-->
              </div>
          </div>
          <!--================ End of Entities (Style 3) ================-->



          <div id="milenia-page-wrapper" class="milenia-page-wrapper">
            <div class="milenia-content  ">
              <div class="container">
                <div class="row">
                  <main class="col">
                    <div class="milenia-entity-content">
                      <!--================ Content Section ================-->
                      <section class="milenia-section milenia-body--scheme-lightbrown">
                        <h3></h3>
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
                                      <div data-bg-image-src="{{ asset('images/trybal_1.jpg') }}" class="milenia-entity-slide"></div>
                                      <div data-bg-image-src="{{ asset('images/trybal_2.jpg') }}" class="milenia-entity-slide"></div>
                                      <div data-bg-image-src="{{ asset('images/trybal_3.jpg') }}" class="milenia-entity-slide"></div>
                                      <div data-bg-image-src="{{ asset('images/trybal_4.jpg') }}" class="milenia-entity-slide"></div>
                                    </div>
                                  </div>
                                  <div class="milenia-entity-content milenia-aligner">
                                    <div class="milenia-aligner-outer">
                                      <div class="milenia-aligner-inner">
                                        <header class="milenia-entity-header">
                                          <h2 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable">Trybal Dining Room</a></h2>
                                        </header>
                                        <div class="milenia-entity-body">
                                          <p>Looking for that extra twist to your dining experience? Our Trybal dining room and bar located in the GENESIS building provides you with just that! Every inch of space, the décor and overall atmosphere was designed to give you the feeling of home-away-from-home. What’s more, with trained waiters available at your beck and call, soft music (group diners can even make their choice of songs) and a robust wine list to pick from……………….it’s always a Crystallized Experience.</p>
                                          <p align="left"><b>Food:</b> African, International</p>
                                          <p align="left"><b>Open for:</b> Lunch, Dinner, Cocktail hour</p>
                                          <p align="left"><b>Menu:</b> À La Carte</p>
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