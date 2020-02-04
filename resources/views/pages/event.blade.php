@extends('layouts.master')

@section('title', 'Crystal Lake | '.$event->title)

@section('content')
    <div id="milenia-page-wrapper" class="milenia-page-wrapper">
      <div class="milenia-content">
        <div class="container">
          <!--================ Content Section ================-->
          <div class="milenia-entity-single milenia-entity--event milenia-section milenia-section--py-small">
            <header class="milenia-entity-header">
              <h3 class="milenia-entity-title text-center">{{ $event->title }}</h3>
            </header>
            <div class="row">
              <main class="col-lg-8">
                <!--================ Event Image ================-->
                <div class="milenia-entity-media"><img src="{{ asset('/event_images/'. $event->image) }}" alt=""></div>
                <!--================ End of Event Image ================-->
                <div class="milenia-entity-extra-data">
                  <div class="row">
                    <div class="col-lg-6">
                      <h6 class="milenia-fw-bold">Details </h6>
                      <ul class="milenia-details-list milenia-details-list--colors-reversed milenia-list--unstyled">
                        <li><span>Date:</span>
                          <time datetime="{{ $event->start_date}}">
                              {{ $event->start_date->format('dS M Y') }} {{ $event->start_date->format('d M Y') == $event->end_date->format('d M Y') ? '' : "-". $event->end_date->format('dS M Y') }}</time>
                        </li>
                        <li><span>Time:</span>
                          <time datetime="2019-04-15">{{ $event->start_time }} - {{ $event->end_time }}</time>
                        </li>
                        <li><span>Cost:</span>
                            @if ($event->price != "" || !is_null($event->price) )
                                ₦{{ $event->price }}
                            @else
                                FREE
                            @endif
                        </li>
                      </ul>
                    </div>
                    {{-- <div class="col-lg-6">
                      <h6 class="milenia-fw-bold">Organizer</h6>
                      <ul class="milenia-details-list milenia-details-list--colors-reversed milenia-list--unstyled">
                        <li><span>Organizer Name:</span>Company Name</li>
                        <li><span>Phone:</span>(932) 733-3390</li>
                        <li><span>Email:</span><a href="mailto:#">info@companyname.com</a></li>
                        <li><span>Website:</span><a href="#">http://www.companyname.com</a></li>
                      </ul>
                    </div> --}}
                  </div>
                </div>
                <div class="milenia-entity-content">
                  <p>{{ $event->desc }}</p>
                </div>
              </main>
            </div>
          </div>
          <!--================ End of Content Section ================-->
          <!--================ Content Section ================-->
          <div class="milenia-section">
            <nav>
              <ul class="milenia-list--unstyled milenia-pagination milenia-pagination--stretched">
                <li class="milenia-pagination--pushed-to-left-md"><a href="#" class="prev page-numbers">Previous Event</a></li>
                <li class="milenia-pagination--pushed-to-right-md"><a href="#" class="next page-numbers">Next Event</a></li>
              </ul>
            </nav>
          </div>
          <!--================ End of Content Section ================-->
        </div>
      </div>
    </div>
@endsection
