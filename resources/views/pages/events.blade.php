@extends('layouts.master')

@section('title', 'Crystal Lake | About Us')

@section('content')
    {{-- <div id="wrapper">
        <div 
            id="page" 
            class="container">

            <div id="content">
                <div class="title">
                    <h2>Events</h2> 
                </div>

                <ul class="style1">
                    @foreach ($events as $event)

                    <li class="first">
                        <h2>
                            <a href="{{ $article->path() }}"> 
                                {{ $article->title }} 
                            </a>
                        </h2>
                        <br>
                        <p>
                            <img src="/images/banner.jpg" alt="" class="image image-full" /> 
                        </p>
                        <p>{{ $article->excerpt }}</p>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div> --}}



    <section class="milenia-section">
        <h3>Events For March 2019</h3>
        <!--================ Entities (Style 19) ================-->
        <div class="milenia-entities milenia-entities--style-19 milenia-entities--list">
          <div data-isotope-layout="masonry" class="milenia-grid milenia-grid--isotope milenia-grid--cols-3">
            <div class="milenia-grid-sizer"></div>
            <div class="milenia-grid-item">
              <!--================ Entity ================-->
              <article class="milenia-entity milenia-entity--format-image">
                <div class="milenia-entity-extra-data">
                  <div class="milenia-entity-date-date">2-3</div>
                  <div class="milenia-entity-date-month-year">March, 2019</div>
                </div>
                <div data-bg-image-src="images/events-image-1.jpg" class="milenia-entity-media"><a href="events_single.html" class="milenia-ln--independent"><img src="images/events-image-1.jpg" alt=""></a></div>
                <div class="milenia-entity-content milenia-aligner">
                  <div class="milenia-aligner-outer">
                    <div class="milenia-aligner-inner">
                      <header class="milenia-entity-header">
                        <div class="milenia-entity-price">Free</div>
                        <div class="milenia-entity-meta">
                          <div>
                            <time datetime="2019-03-02T05:00:00Z">March 2-3, 2019 @ 12:00 AM - 5:00 PM</time>
                          </div>
                          <div><a href="#" class="milenia-color--unchangeable">340 W 50th St, New York</a></div>
                        </div>
                        <h2 class="milenia-entity-title"><a href="events_single.html" class="milenia-color--unchangeable">Nemo Enim Ipsam Voluptatem</a></h2>
                      </header>
                      <div class="milenia-entity-body">
                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
                      </div>
                      <footer class="milenia-entity-footer"><a href="events_single.html" class="milenia-btn">More Details</a>
                        <div class="milenia-entity-extra-actions">
                          <button type="button" data-arctic-modal="#share-modal" class="milenia-icon-btn"><i class="icon icon-share2"></i></button><a href="#" class="milenia-ln--independent milenia-icon-btn"><i class="icon icon-map-marker"></i></a><a href="#" class="milenia-ln--independent milenia-icon-btn"><i class="icon icon-at-sign"></i></a>
                        </div>
                      </footer>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="milenia-grid-item">
              <!--================ Entity ================-->
              <article class="milenia-entity milenia-entity--format-image">
                <div class="milenia-entity-extra-data">
                  <div class="milenia-entity-date-date">14</div>
                  <div class="milenia-entity-date-month-year">March, 2019</div>
                </div>
                <div data-bg-image-src="images/events-image-2.jpg" class="milenia-entity-media"><a href="events_single.html" class="milenia-ln--independent"><img src="images/events-image-2.jpg" alt=""></a></div>
                <div class="milenia-entity-content milenia-aligner">
                  <div class="milenia-aligner-outer">
                    <div class="milenia-aligner-inner">
                      <header class="milenia-entity-header">
                        <div class="milenia-entity-price">$55.00</div>
                        <div class="milenia-entity-meta">
                          <div>
                            <time datetime="2019-03-14T05:00:00Z">March 14, 2019 @ 12:00 AM - 5:00 PM</time>
                          </div>
                          <div><a href="#" class="milenia-color--unchangeable">340 W 50th St, New York</a></div>
                        </div>
                        <h2 class="milenia-entity-title"><a href="events_single.html" class="milenia-color--unchangeable">Praesent Justo Dolor Lobortis</a></h2>
                      </header>
                      <div class="milenia-entity-body">
                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
                      </div>
                      <footer class="milenia-entity-footer"><a href="events_single.html" class="milenia-btn">More Details</a>
                        <div class="milenia-entity-extra-actions">
                          <button type="button" data-arctic-modal="#share-modal" class="milenia-icon-btn"><i class="icon icon-share2"></i></button><a href="#" class="milenia-ln--independent milenia-icon-btn"><i class="icon icon-map-marker"></i></a><a href="#" class="milenia-ln--independent milenia-icon-btn"><i class="icon icon-at-sign"></i></a>
                        </div>
                      </footer>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="milenia-grid-item">
              <!--================ Entity ================-->
              <article class="milenia-entity milenia-entity--format-image">
                <div class="milenia-entity-extra-data">
                  <div class="milenia-entity-date-date">17-19</div>
                  <div class="milenia-entity-date-month-year">March, 2019</div>
                </div>
                <div data-bg-image-src="images/events-image-3.jpg" class="milenia-entity-media"><a href="events_single.html" class="milenia-ln--independent"><img src="images/events-image-3.jpg" alt=""></a></div>
                <div class="milenia-entity-content milenia-aligner">
                  <div class="milenia-aligner-outer">
                    <div class="milenia-aligner-inner">
                      <header class="milenia-entity-header">
                        <div class="milenia-entity-price">Free</div>
                        <div class="milenia-entity-meta">
                          <div>
                            <time datetime="2019-03-17T05:00:00Z">March 17-19, 2019 @ 12:00 AM - 5:00 PM</time>
                          </div>
                          <div><a href="#" class="milenia-color--unchangeable">340 W 50th St, New York</a></div>
                        </div>
                        <h2 class="milenia-entity-title"><a href="events_single.html" class="milenia-color--unchangeable">Vestibulum Ante Ipsum</a></h2>
                      </header>
                      <div class="milenia-entity-body">
                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
                      </div>
                      <footer class="milenia-entity-footer"><a href="events_single.html" class="milenia-btn">More Details</a>
                        <div class="milenia-entity-extra-actions">
                          <button type="button" data-arctic-modal="#share-modal" class="milenia-icon-btn"><i class="icon icon-share2"></i></button><a href="#" class="milenia-ln--independent milenia-icon-btn"><i class="icon icon-map-marker"></i></a><a href="#" class="milenia-ln--independent milenia-icon-btn"><i class="icon icon-at-sign"></i></a>
                        </div>
                      </footer>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="milenia-grid-item">
              <!--================ Entity ================-->
              <article class="milenia-entity milenia-entity--format-image">
                <div class="milenia-entity-extra-data">
                  <div class="milenia-entity-date-date">24</div>
                  <div class="milenia-entity-date-month-year">March, 2019</div>
                </div>
                <div data-bg-image-src="images/events-image-4.jpg" class="milenia-entity-media"><a href="events_single.html" class="milenia-ln--independent"><img src="images/events-image-4.jpg" alt=""></a></div>
                <div class="milenia-entity-content milenia-aligner">
                  <div class="milenia-aligner-outer">
                    <div class="milenia-aligner-inner">
                      <header class="milenia-entity-header">
                        <div class="milenia-entity-price">Free</div>
                        <div class="milenia-entity-meta">
                          <div>
                            <time datetime="2019-03-24T05:00:00Z">March 24, 2019 @ 12:00 AM - 5:00 PM</time>
                          </div>
                          <div><a href="#" class="milenia-color--unchangeable">340 W 50th St, New York</a></div>
                        </div>
                        <h2 class="milenia-entity-title"><a href="events_single.html" class="milenia-color--unchangeable">Sed in Lacus ut Enim</a></h2>
                      </header>
                      <div class="milenia-entity-body">
                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
                      </div>
                      <footer class="milenia-entity-footer"><a href="events_single.html" class="milenia-btn">More Details</a>
                        <div class="milenia-entity-extra-actions">
                          <button type="button" data-arctic-modal="#share-modal" class="milenia-icon-btn"><i class="icon icon-share2"></i></button><a href="#" class="milenia-ln--independent milenia-icon-btn"><i class="icon icon-map-marker"></i></a><a href="#" class="milenia-ln--independent milenia-icon-btn"><i class="icon icon-at-sign"></i></a>
                        </div>
                      </footer>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="milenia-grid-item">
              <!--================ Entity ================-->
              <article class="milenia-entity milenia-entity--format-image">
                <div class="milenia-entity-extra-data">
                  <div class="milenia-entity-date-date">27-30</div>
                  <div class="milenia-entity-date-month-year">March, 2019</div>
                </div>
                <div data-bg-image-src="images/events-image-5.jpg" class="milenia-entity-media"><a href="events_single.html" class="milenia-ln--independent"><img src="images/events-image-5.jpg" alt=""></a></div>
                <div class="milenia-entity-content milenia-aligner">
                  <div class="milenia-aligner-outer">
                    <div class="milenia-aligner-inner">
                      <header class="milenia-entity-header">
                        <div class="milenia-entity-price">$120.00</div>
                        <div class="milenia-entity-meta">
                          <div>
                            <time datetime="2019-03-27T05:00:00Z">March 27-30, 2019 @ 12:00 AM - 5:00 PM</time>
                          </div>
                          <div><a href="#" class="milenia-color--unchangeable">340 W 50th St, New York</a></div>
                        </div>
                        <h2 class="milenia-entity-title"><a href="events_single.html" class="milenia-color--unchangeable">Donec Eget Tellus non Erat</a></h2>
                      </header>
                      <div class="milenia-entity-body">
                        <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
                      </div>
                      <footer class="milenia-entity-footer"><a href="events_single.html" class="milenia-btn">More Details</a>
                        <div class="milenia-entity-extra-actions">
                          <button type="button" data-arctic-modal="#share-modal" class="milenia-icon-btn"><i class="icon icon-share2"></i></button><a href="#" class="milenia-ln--independent milenia-icon-btn"><i class="icon icon-map-marker"></i></a><a href="#" class="milenia-ln--independent milenia-icon-btn"><i class="icon icon-at-sign"></i></a>
                        </div>
                      </footer>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
          </div>
        </div>
        <!--================ End of Entities (Style 19) ================-->
        <!--================ Pagination ================-->
        <footer class="text-center">
          <nav>
            <ul class="milenia-list--unstyled milenia-pagination milenia-pagination--stretched">
              <li class="milenia-pagination--pushed-to-left-md"><a href="#" class="prev page-numbers">February</a></li>
              <li><a href="#" class="middle page-numbers">+ Export Events</a></li>
              <li class="milenia-pagination--pushed-to-right-md"><a href="#" class="next page-numbers">April</a></li>
            </ul>
          </nav>
        </footer>
        <!--================ End of Pagination ================-->
      </section>
@endsection