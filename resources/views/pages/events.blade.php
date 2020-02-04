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
        <h3>EVENTS</h3>
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
                        <div class="milenia-entity-price">{{ $event->price }}</div>
                        <div class="milenia-entity-meta">
                          <div>
                            <time datetime="2019-03-02T05:00:00Z">{{ $event->start_date}} {{ $event->start_date === $event->end_date ? '' : "- {{ $event->end_date }}" }}</time>
                          </div>
                          <h4 class="milenia-color--unchangeable">{{ $event->venue }}</h4>
                        </div>
                        <h2 class="milenia-entity-title"><a href="events_single.html" class="milenia-color--unchangeable">{{ $event->title }}</a></h2>
                      </header>
                      <div class="milenia-entity-body">
                        <p>{{ $event->description }}</p>
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