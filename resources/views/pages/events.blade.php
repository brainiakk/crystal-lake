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
                @if (count($events) > 0)
                @foreach ($events as $event)
                    <!--================ Entity ================-->
                    <article class="milenia-entity milenia-entity--format-image">
                        <div class="milenia-entity-extra-data">
                        <div class="milenia-entity-date-date">
                            @if ($event->start_date->format('d') == $event->end_date->format('d'))
                                {{ $event->start_date->format('dS') }}
                            @else
                            {{ $event->start_date->format('d') }}-{{ $event->end_date->format('d') }}
                            @endif
                        </div>
                        <div class="milenia-entity-date-month-year">
                            @if ($event->start_date->format('M') == $event->end_date->format('M'))
                                {{ $event->start_date->format('M') }}
                            @else
                                {{ $event->start_date->format('M') }} to {{ $event->end_date->format('M') }}
                            @endif
                            , {{ $event->start_date->format('Y') }}</div>
                        </div>
                        <div data-bg-image-src="images/events-image-1.jpg" class="milenia-entity-media"><a href="events_single.html" class="milenia-ln--independent"><img src="images/events-image-1.jpg" alt=""></a></div>
                        <div class="milenia-entity-content milenia-aligner">
                        <div class="milenia-aligner-outer">
                            <div class="milenia-aligner-inner">
                            <header class="milenia-entity-header">
                                <div class="milenia-entity-price">
                                    @if ($event->price != "" || !is_null($event->price) )
                                        ₦{{ $event->price }}
                                    @else
                                        FREE
                                    @endif
                                </div>
                                <div class="milenia-entity-meta">
                                <div>
                                    <time datetime="2019-03-02T05:00:00Z">March 2-3, 2019 @ 12:00 AM - 5:00 PM</time>
                                </div>
                                <div><a href="#" class="milenia-color--unchangeable">340 W 50th St, New York</a></div>
                                </div>
                            <h2 class="milenia-entity-title"><a href="events_single.html" class="milenia-color--unchangeable">{{ $event->title }}</a></h2>
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
                <br/>
                @endforeach
                @else
                    <article><h5>No Events</h5></article>
                @endif
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
