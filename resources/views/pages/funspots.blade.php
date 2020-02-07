@extends('layouts.master')

@section('title', 'Crystal Lake | Fun Spots')

@section('content')
    <!--================ Breadcrumb ================-->
    <div class="milenia-breadcrumb text-center milenia-colorizer--scheme-dark">
        <div class="container">
          <h1 class="milenia-page-title">Fun Spots & Equipment</h1>
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
                        <div data-bg-image-src="{{ asset('images/poolbar.jpeg') }}" class="milenia-entity-slide"></div>
                        <div data-bg-image-src="{{ asset('images/poolbar_2.jpg') }}" class="milenia-entity-slide"></div>
                        <div data-bg-image-src="{{ asset('images/poolbar_3.jpeg') }}" class="milenia-entity-slide"></div>
                        <div data-bg-image-src="{{ asset('images/poolbar_4.jpeg') }}" class="milenia-entity-slide"></div>
                        <div data-bg-image-src="{{ asset('images/poolbar_5.jpeg') }}" class="milenia-entity-slide"></div>
                      </div>
                    </div>
                    <div class="milenia-entity-content milenia-aligner">
                      <div class="milenia-aligner-outer">
                        <div class="milenia-aligner-inner">
                          <header class="milenia-entity-header">
                            <h2 class="milenia-entity-title"><a href="undefined" class="milenia-color--unchangeable">Pool Bar</a></h2>
                          </header>
                          <div class="milenia-entity-body">
                            <p>DJ spinning, wine list updated, sea breeze caressing your body and the surrounding vista surpassing your imaginations…………welcome to our Poolside bar. Strategically positioned between the swimming pool, lake, basketball and lawn tennis courts; this particular spot checks all your boxes for a fun-filled resort relaxation.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              <!--================ End of Pool Bar Section ================-->
              <!--================ Dividing space ================-->
              <div class="milenia-grid-item">
                <br>
                <br>
              </div>
              <!--================ End of Dividing space ================-->
              <!--================ Golf Course Section ================-->
              <div class="mt-2 milenia-grid-item">
                <article class="milenia-entity milenia-entity--format-image">
                  <div class="milenia-entity-media"><a href="#" aria-labelledby="entity-heading-10" data-bg-image-src="{{ asset('images/golf_course.png') }}" class="milenia-entity-link milenia-ln--independent"></a></div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h2 id="entity-heading-10" class="milenia-entity-title"><a href="undefined" class="milenia-color--unchangeable">Golf Course</a></h2>
                        </header>
                        <div class="milenia-entity-body">
                          <p>Built primarily on former farm and forest lands, the Crystal Lake Resort & Tours 9-Hole Golf course offers a variety of settings as you walk this relatively flatland layout. Each hole has its own distinct character and will challenge golfers of all skill levels.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <!--================ End of Golf Course Section ================-->
              <!--================ Dividing space ================-->
              <div class="milenia-grid-item">
                <br>
                <br>
              </div>
              <!--================ End of Dividing space ================-->
              <!--================ Swimming Pool Section ================-->
              <div class="milenia-grid-item">
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                      <div data-bg-image-src="{{ asset('images/swimming_pool.png') }}" class="milenia-entity-slide"></div>
                      <div data-bg-image-src="{{ asset('images/swimming_pool_2.png') }}" class="milenia-entity-slide"></div>
                      <div data-bg-image-src="{{ asset('images/swimming_pool_3.jpeg') }}" class="milenia-entity-slide"></div>
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h2 class="milenia-entity-title"><a href="undefined" class="milenia-color--unchangeable">Swimming Pool</a></h2>
                        </header>
                        <div class="milenia-entity-body">
                          <p>Classy key-shaped adult swimming pool adjourns smaller pool for toddlers to splash around. Life guards, jackets and other pool toys are also available for optimum swimming experience. Large water slide drops right into the pool for that roller coaster experience……….1,2,3 SPLASH! KABOOM!!!</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <!--================ End of Swimming Pool Section ================-->
              <!--================ Dividing space ================-->
              <div class="milenia-grid-item">
                <br>
                <br>
              </div>
              <!--================ End of Dividing space ================-->
              <!--================ Jet Ski Section ================-->
              <div class="milenia-grid-item">
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                      <div data-bg-image-src="{{ asset('images/jetski.jpg') }}" class="milenia-entity-slide"></div>
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h2 class="milenia-entity-title"><a href="undefined" class="milenia-color--unchangeable">Jet Ski</a></h2>
                        </header>
                        <div class="milenia-entity-body">

                          {{-- Text content --}}
                          <p></p>
                          {{-- Text content --}}

                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <!--================ End of Jet Ski Section ================-->
              <!--================ Dividing space ================-->
              <div class="milenia-grid-item">
                <br>
                <br>
              </div>
              <!--================ End of Dividing space ================-->
              <!--================ White Sand Beach Section ================-->
              <div class="milenia-grid-item">
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                      <div data-bg-image-src="{{ asset('images/white_sand_beach.jpg') }}" class="milenia-entity-slide"></div>
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h2 class="milenia-entity-title"><a href="undefined" class="milenia-color--unchangeable">White Sand Beach</a></h2>
                        </header>
                        <div class="milenia-entity-body">

                          {{-- Text content --}}
                          <p></p>
                          {{-- Text content --}}

                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <!--================ End of White Sand Beach Section ================-->
              <!--================ Dividing space ================-->
              <div class="milenia-grid-item">
                <br>
                <br>
              </div>
              <!--================ End of Dividing space ================-->
              <!--================ Wonder Lake Tours Section ================-->
              <div class="milenia-grid-item">
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                      <div data-bg-image-src="{{ asset('images/wonder_lake_tours.jpg') }}" class="milenia-entity-slide"></div>
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h2 class="milenia-entity-title"><a href="undefined" class="milenia-color--unchangeable">Wonder Lake Tours</a></h2>
                        </header>
                        <div class="milenia-entity-body">

                          {{-- Text content --}}
                          <p></p>
                          {{-- Text content --}}

                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <!--================ End of Wonder Lake Tours Section ================-->
              <!--================ Dividing space ================-->
              <div class="milenia-grid-item">
                <br>
                <br>
              </div>
              <!--================ End of Dividing space ================-->
              <!--================ Cruise Boat Section ================-->
              <div class="milenia-grid-item">
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                      <div data-bg-image-src="{{ asset('images/cruise_boat.jpg') }}" class="milenia-entity-slide"></div>
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h2 class="milenia-entity-title"><a href="undefined" class="milenia-color--unchangeable">Cruise Boat</a></h2>
                        </header>
                        <div class="milenia-entity-body">

                          {{-- Text content --}}
                          <p></p>
                          {{-- Text content --}}

                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <!--================ End of Cruise Boat Section ================-->
              <!--================ Dividing space ================-->
              <div class="milenia-grid-item">
                <br>
                <br>
              </div>
              <!--================ End of Dividing space ================-->
              <!--================ Playground Section ================-->
              <div class="milenia-grid-item">
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                      <div data-bg-image-src="{{ asset('images/playground_1.jpeg') }}" class="milenia-entity-slide"></div>
                      <div data-bg-image-src="{{ asset('images/playground_2.jpeg') }}" class="milenia-entity-slide"></div>
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h2 class="milenia-entity-title"><a href="undefined" class="milenia-color--unchangeable">Playground</a></h2>
                        </header>
                        <div class="milenia-entity-body">

                          {{-- Text content --}}
                          <p></p>
                          {{-- Text content --}}

                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <!--================ End of Playground Section ================-->
              <!--================ Dividing space ================-->
              <div class="milenia-grid-item">
                <br>
                <br>
              </div>
              <!--================ End of Dividing space ================-->
              <!--================ Arcade Section ================-->
              <div class="milenia-grid-item">
                <article class="milenia-entity milenia-entity--format-slideshow">
                  <div class="milenia-entity-media">
                    <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                      <div data-bg-image-src="{{ asset('images/arcade_1.jpeg') }}" class="milenia-entity-slide"></div>
                    </div>
                  </div>
                  <div class="milenia-entity-content milenia-aligner">
                    <div class="milenia-aligner-outer">
                      <div class="milenia-aligner-inner">
                        <header class="milenia-entity-header">
                          <h2 class="milenia-entity-title"><a href="undefined" class="milenia-color--unchangeable">Arcade</a></h2>
                        </header>
                        <div class="milenia-entity-body">

                          {{-- Text content --}}
                          <p>
                            Our fully equipped arcade house for the game lovers features an assortment of racing simulators, shooting arcade games, PlayStation4, dual-hoop indoor basketball arcade games and more…………. Yes! We do mean it when we say there’s something for everyone.
                          </p>
                          {{-- Text content --}}

                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <!--================ End of Arcade Section ================-->
            </div>
          </div>
          <!--================ End of Entities (Style 3) ================-->
@endsection