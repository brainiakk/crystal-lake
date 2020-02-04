@extends('layouts.master')

@section('title', 'Crystal Lake | Activities')

@section('content')
    <div id="milenia-page-wrapper" class="milenia-page-wrapper">
      <div class="milenia-content">
        <!--================ Share Modal ================-->
        <div class="milenia-d-none">
          <div id="share-modal" aria-hidden="true" class="milenia-modal milenia-modal--share">
            <button type="button" class="milenia-icon-btn arcticmodal-close"><i class="icon icon-cross"></i></button>
            <h3>Share On:</h3>
            <div class="milenia-share-buttons"><a href="http://www.facebook.com/sharer.php?m2w&amp;amp;s=100&amp;url=&amp;title=" class="milenia-btn milenia-btn--icon milenia-btn--scheme-facebook">
                <div class="fab fa-facebook-f"></div>Facebook</a><a href="https://twitter.com/intent/tweet?text=text&amp;amp;url=url" class="milenia-btn milenia-btn--icon milenia-btn--scheme-twitter">
                <div class="fab fa-twitter"></div>Twitter</a><a href="https://plus.google.com/share?url=url" class="milenia-btn milenia-btn--icon milenia-btn--scheme-google-plus">
                <div class="fab fa-google-plus-g"></div>Google +</a><a href="https://pinterest.com/pin/create/button/?url=url&amp;media=media&amp;description=description" class="milenia-btn milenia-btn--icon milenia-btn--scheme-pinterest">
                <div class="fab fa-pinterest-p"></div>Pinterest</a><a href="mailto:#" class="milenia-btn milenia-btn--icon">
                <div class="fas fa-envelope"></div>Email to a Friend</a></div>
          </div>
        </div>
        <!--================ End of Share Modal ================-->
        <div class="container">
          <!--================ Content Section ================-->
          <div class="milenia-entity-single milenia-entity--event milenia-section milenia-section--py-small">
            <header class="milenia-entity-header">
              <h1 class="milenia-entity-title text-center">{{ $event->title }}</h1>
            </header>
            <div class="row">
              <main class="col-lg-8">
                <!--================ Event Image ================-->
                <div class="milenia-entity-media"><img src="images/events-image-6.jpg" alt=""></div>
                <!--================ End of Event Image ================-->
                <div class="milenia-entity-extra-data">
                  <div class="row">
                    <div class="col-lg-6">
                      <h6 class="milenia-fw-bold">Details</h6>
                      <ul class="milenia-details-list milenia-details-list--colors-reversed milenia-list--unstyled">
                        <li><span>Date:</span>
                          <time datetime="2019-04-15">{{ $event->start_date}} {{ $event->start_date === $event->end_date ? '' : "- $event->end_date" }}</time>
                        </li>
                        <li><span>Time:</span>
                          <time datetime="2019-04-15">{{ $event->start_time }} - {{ $event->end_time }}</time>
                        </li>
                        <li><span>Cost:</span>{{ $event->price }}</li>
                      </ul>
                    </div>
                    <div class="col-lg-6">
                      <h6 class="milenia-fw-bold">Organizer</h6>
                      <ul class="milenia-details-list milenia-details-list--colors-reversed milenia-list--unstyled">
                        <li><span>Organizer Name:</span>Company Name</li>
                        <li><span>Phone:</span>(932) 733-3390</li>
                        <li><span>Email:</span><a href="mailto:#">info@companyname.com</a></li>
                        <li><span>Website:</span><a href="#">http://www.companyname.com</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="milenia-entity-content">
                  <p>{{ $event->description }}</p>
                </div>
                <footer class="milenia-entity-footer">
                  <div class="milenia-share milenia-share--inline-sm">
                    <div class="milenia-share-caption">Share This:</div>
                    <div class="milenia-share-buttons"><a href="http://www.facebook.com/sharer.php?m2w&amp;amp;s=100&amp;url=portfolio&amp;title=portfolio" class="milenia-btn milenia-btn--icon milenia-btn--scheme-facebook">
                        <div class="fab fa-facebook-f"></div>Facebook</a><a href="https://twitter.com/intent/tweet?text=text&amp;amp;url=url" class="milenia-btn milenia-btn--icon milenia-btn--scheme-twitter">
                        <div class="fab fa-twitter"></div>Twitter</a><a href="https://plus.google.com/share?url=url" class="milenia-btn milenia-btn--icon milenia-btn--scheme-google-plus">
                        <div class="fab fa-google-plus-g"></div>Google +</a><a href="https://pinterest.com/pin/create/button/?url=url&amp;media=media&amp;description=description" class="milenia-btn milenia-btn--icon milenia-btn--scheme-pinterest">
                        <div class="fab fa-pinterest-p"></div>Pinterest</a><a href="mailto:#" class="milenia-btn milenia-btn--icon">
                        <div class="fas fa-envelope"></div>Email to a Friend</a></div>
                  </div>
                </footer>
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