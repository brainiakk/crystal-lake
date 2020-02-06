@extends('layouts.master')

@section('title', 'Crystal Lake | Social Gatherings')

@section('content')
    <div id="milenia-page-wrapper" class="milenia-page-wrapper">
        <div class="milenia-content milenia-content--no-py ">
        <div class="milenia-fullscreen-area">
            <div class="container">
                <div class="row">
                  <main class="col">
                    <div class="milenia-entity-content">
                      <!--================ Content Section ================-->
                      <section class="milenia-section milenia-body--scheme-lightbrown">
                        <h3>Social Gatherings</h3>
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
                                      <div data-bg-image-src="{{ asset('images/socialgatherings_1.jpeg') }}" class="milenia-entity-slide"></div>
                                      <div data-bg-image-src="{{ asset('images/socialgatherings_2.jpeg') }}" class="milenia-entity-slide"></div>
                                    </div>
                                  </div>
                                  <div class="milenia-entity-content milenia-aligner">
                                    <div class="milenia-aligner-outer">
                                      <div class="milenia-aligner-inner">
                                        <header class="milenia-entity-header">
                                          <h2 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable"></a></h2>
                                        </header>
                                        <div class="milenia-entity-body">
                                            <p>Be it for your Parties:</p><br><i class="fa fa-comment-dots"></i><span>Birthday, Graduation, Promotion, Engagement</span>
                                            <p>Or Social Functions:</p><br><i class="fa fa-comment-dots"></i><span>unveiling, Beauty Pageant, etc.</span><br>
                                            <p>Crystal Lake Resort and Tours gives you a variety of spots to pick from. From our ultra-modern conference hall to an executive-style Boardroom or even the white sand beach if you have a crowd of outdoor lovers. What’s more, we’ll help take your fun, joyous, wonderful, sophisticated and personal ideas and turn them into the special occasion they deserve;  from custom decorating to creative catering, resulting in a flawless event that reflects you and your group perfectly.</p>                                
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
    </div>
@endsection