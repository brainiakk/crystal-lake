@extends('layouts.master')

@section('title', 'Crystal Lake | Events')

@section('content')
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
                        <div data-bg-image-src="{{ asset('/event_images/'.$event->image) }}" class="milenia-entity-media"><a href="" class="milenia-ln--independent"><img src="{{ asset('/event_images/'.$event->image) }}" alt=""></a></div>
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
                            <div><a href="#" class="milenia-color--unchangeable">{{ $event->venue }}</a></div>
                                </div>
                            <h2 class="milenia-entity-title"><a href="{{ url('/events', $event->event_id) }}" class="milenia-color--unchangeable">{{ $event->title }}</a></h2>
                            </header>
                            <div class="milenia-entity-body">
                                <p>{{ \Str::limit($event->desc, 200) }}</p>
                            </div>
                            <footer class="milenia-entity-footer"><a href="{{ url('/events', $event->event_id) }}" class="milenia-btn">More Details</a>

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
              <li class="milenia-pagination--pushed-to-right-md"><a href="#" class="next page-numbers">April</a></li>
            </ul>
          </nav>
        </footer>
        <!--================ End of Pagination ================-->
      </section>
@endsection
