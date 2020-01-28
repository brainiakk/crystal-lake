<!DOCTYPE html>
<html lang="en">
  <head>
    <!--================ Basic page needs ================-->
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--================ Mobile specific metas ================-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--================ Favicon ================-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}>
    <!--================ Google web fonts ================-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700|Open+Sans:200,300,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i">
    <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/milenia-icon-font.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/monkeysan-tooltip/monkeysan-jquery-tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/arcticmodal/jquery.arcticmodal-0.3.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/mediaelement/mediaelementplayer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/revolution/css/layers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/revolution/css/navigation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.min.css') }}">
    @yield('bs-cdn')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <!--================ Theme CSS ================-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!--================ Vendor JS ================-->
    </head>

  <body class="milenia-body--scheme-blue milenia-body--border-layout">
    <div class="milenia-preloader"></div>
    <!--================ Hidden Sidebar ================--><span class="milenia-sidebar-hidden-overlay"></span>
    <aside id="milenia-sidebar-hidden" aria-hidden="true" class="milenia--nice-scrolled milenia-sidebar milenia-sidebar-hidden milenia-sidebar-hidden--v2">
      <button type="button" data-sidebar-hidden="#milenia-sidebar-hidden" aria-expanded="false" aria-controls="milenia-sidebar-hidden" aria-haspopup="true" class="milenia-sidebar-hidden-close"><i class="icon icon-cross">   </i></button>
      <!--================ Hidden Sidebar Content ================-->
      <div class="milenia-sidebar-hidden-content milenia-grid milenia-grid--cols-1">
        <!--================ Widget ================-->
        <div class="milenia-grid-item milenia-widget">
          <div class="milenia-grid-item-inner">
            <div class="milenia-grid-item-content">
              <div class="milenia-sidebar-hidden-items">
                <div>
                  <ul class="milenia-sidebar-hidden-actions milenia-list--hr milenia-list--unstyled">
                    <li><a href="#" data-arctic-modal="#search-modal" class="milenia-ln--independent">Search</a></li>
                  </ul>
                </div>
                <div>
                  <ul class="milenia-social-icons milenia-social-icon--scheme-secondary milenia-list--unstyled">
                    <li><a href="https://web.facebook.com/crystallakeresortntours"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://instagram.com/crystallakeresortandtoursoguta"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--================ End of Widget ================-->
        <!--================ Widget ================-->
        <section class="milenia-grid-item milenia-widget">
          <div class="milenia-grid-item-inner">
            <div class="milenia-grid-item-content">
              <h5 class="milenia-widget-title">Room Types</h5>
              <ul>
                <li><a href="/rooms/standard">Standard Rooms</a></li>
                <li><a href="/rooms/executive">Executive Rooms</a></li>
                <li><a href="/rooms/studio">Studio Rooms</a></li>
                <li><a href="/rooms/deluxe">Deluxe Rooms</a></li>
                <li><a href="/rooms/royal">Royal Suites</a></li>
                <li><a href="/rooms/diplomatic">Diplomatic Suites</a></li>
                <li><a href="/rooms/2bedroom">2 Bedroom Suites</a></li>
              </ul>
            </div>
          </div>
        </section>
        <!--================ End of Widget ================-->
        <!--================ Widget ================-->
        <section class="milenia-grid-item milenia-widget">
          <div class="milenia-grid-item-inner">
            <div class="milenia-grid-item-content">
              <h5 class="milenia-widget-title">From Gallery</h5>
              <div class="gallery gallery-columns-2">
                <figure class="gallery-item">
                  <div class="gallery-icon"><a href="images/info-box-image-18.jpg"><img src="images/info-box-image-18.jpg" alt=""></a></div>
                </figure>
                <figure class="gallery-item">
                  <div class="gallery-icon"><a href="images/info-box-image-19.jpg"><img src="images/info-box-image-19.jpg" alt=""></a></div>
                </figure>
                <figure class="gallery-item">
                  <div class="gallery-icon"><a href="images/info-box-image-14.jpg"><img src="images/info-box-image-14.jpg" alt=""></a></div>
                </figure>
                <figure class="gallery-item">
                  <div class="gallery-icon"><a href="images/info-box-image-15.jpg"><img src="images/info-box-image-15.jpg" alt=""></a></div>
                </figure>
              </div><a href="#" class="milenia-btn milenia-btn--scheme-primary milenia-btn--link">More Photos</a>
            </div>
          </div>
        </section>
        <!--================ End of Widget ================-->
        <!--================ Widget ================-->
        <section class="milenia-grid-item milenia-widget milenia-widget--newsletter">
          <div class="milenia-grid-item-inner">
            <div class="milenia-grid-item-content">
              <h5 class="milenia-widget-title">Newsletter Sign Up</h5>
              <p>Sign up for news and special offers.</p>
              <form class="milenia-newsletter-form">
                <input type="email" name="email" placeholder="Enter Your Email Address">
                <button type="submit" class="milenia-btn milenia-btn--scheme-dark milenia-btn--icon"> <i class="icon icon-envelope"> </i>Subscribe</button>
              </form>
            </div>
          </div>
        </section>
        <!--================ End of Widget ================-->

      </div>
      <!--================ End of Hidden Sidebar Content ================-->
    </aside>
    <!--================ End of Hidden Sidebar ================-->
    <div id="milenia-page-wrapper" class="milenia-page-wrapper">
      <!--================ Search Modal ================-->
      <div class="milenia-d-none">
        <div id="search-modal" class="milenia-modal milenia-modal--search">
          <button type="button" class="milenia-icon-btn arcticmodal-close"><i class="icon icon-cross"></i></button>
          <h3>Find Everything</h3>
          <!--================ Search Form ================-->
          <form role="search" method="get" class="milenia-singlefield-form milenia-form--fields-white milenia-searchform">
            <input type="text" name="s" placeholder="Search">
            <button type="submit"><i class="icon icon-magnifier"></i></button>
          </form>
          <!--================ End of Search Form ================-->
        </div>
      </div>
      <!--================ End of Search Modal ================-->
      <!--================ Header ================-->
        <header id="milenia-header" class="milenia-header milenia-header--light">

        <div class="container">
          <!--================ Section ================-->
          <div class="milenia-header-section-md">
            <!--================ Column ================-->
            <div class="milenia-header-col milenia-aligner milenia-aligner--valign-middle milenia-header-col--content-align-left-md milenia-header-col--padding-default milenia-header-col--padding-average-md milenia-header-col--padding-no-bottom milenia-header-col--padding-no-left-md">
              <div class="milenia-aligner-outer">
                <div class="milenia-aligner-inner">
                  <div class="milenia-header-items">
                    <div>
                      <button type="button" data-sidebar-hidden="#milenia-sidebar-hidden" aria-expanded="false" aria-controls="milenia-sidebar-hidden" aria-haspopup="true" class="milenia-header-menu-btn milenia-sidebar-hidden-btn"><i class="icon icon-menu"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--================ End of Column ================-->
            <!--================ Column ================-->
            <div class="milenia-header-col milenia-aligner milenia-aligner--valign-middle milenia-header-col--padding-default milenia-header-col--padding-average-md milenia-header-col--padding-no-bottom">
              <div class="milenia-aligner-outer">
                <div class="milenia-aligner-inner">
                  <div class="milenia-header-items">
                    <div><a href="/" class="milenia-ln--independent"><img src="images/header_logo_crystallake.png" alt=""></a></div>
                  </div>
                </div>
              </div>
            </div>
            <!--================ End of Column ================-->
            <!--================ Column ================-->
            <div class="milenia-header-col milenia-aligner milenia-aligner--valign-middle milenia-header-col--content-align-right-md milenia-header-col--padding-default milenia-header-col--padding-average-md milenia-header-col--padding-no-bottom-md milenia-header-col--padding-no-right-md">
              <div class="milenia-aligner-outer">
                <div class="milenia-aligner-inner">
                  <div class="milenia-header-items">
                    <div>
                      <button type="button" data-arctic-modal="#search-modal" class="milenia-icon-btn"><i class="icon icon-magnifier"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--================ End of Column ================-->
          </div>
          <!--================ End of Section ================-->
          <!--================ Section ================-->
          <div class="milenia-header-section-md milenia-header-section--sticky-md">
            <!--================ Column ================-->
            <div class="milenia-header-col milenia-header-col--nav-vertical-sm milenia-header-col--padding-average milenia-header-col--padding-no-top milenia-header-col--padding-no-md">
              <div class="milenia-aligner-outer">
                <div class="milenia-aligner-inner">
                  <div class="milenia-header-items">
                    <div>

                      <!--================ Navigation ================-->
                      <nav class="milenia-navigation-container">
                        <ul class="milenia-navigation milenia-navigation--vertical-sm milenia-navigation--bottom-underlined">

                          <li class="menu-item menu-item-has-children {{ Request::path() === '/' ? 'current-menu-item' : '' }}"><a href="/" class="milenia-ln--independent">Home</a>
                            <!--================ Sub Menu ================-->
                            <ul class="sub-menu">
                              <li class="menu-item"><a href="/about" class="milenia-ln--independent">About Us</a>
                              </li>
                              <li class="menu-item"><a href="#" class="milenia-ln--independent">Finding Us</a>
                              </li>
                            </ul>
                            <!--================ End of Sub Menu ================-->
                          </li>

                          <li class="menu-item menu-item-has-children"><a href="#" class="milenia-ln--independent">Accommodation</a>
                            <!--================ Sub Menu ================-->
                            <ul class="sub-menu">
                              <li class="menu-item"><a href="/rooms/standard" class="milenia-ln--independent">Standard Rooms</a>
                              </li>
                              <li class="menu-item"><a href="/rooms/executive" class="milenia-ln--independent">Executive Rooms</a>
                              </li>
                              <li class="menu-item"><a href="/rooms/studio" class="milenia-ln--independent">Studio Rooms</a>
                              </li>
                              <li class="menu-item"><a href="/deluxe" class="milenia-ln--independent">Deluxe Rooms</a>
                              </li>
                              <li class="menu-item"><a href="/rooms/royal" class="milenia-ln--independent">Royal Suites</a>
                              </li>
                              <li class="menu-item"><a href="/rooms/diplomatic" class="milenia-ln--independent">Diplomatic Suites</a>
                              </li>
                              <li class="menu-item"><a href="/rooms/2bedroom" class="milenia-ln--independent">2 Bedroom Suites</a>
                              </li>
                            </ul>
                            <!--================ End of Sub Menu ================-->
                          </li>

                          <li class="menu-item menu-item-has-children"><a href="pages_about.html" class="milenia-ln--independent">Events</a>
                            <!--================ Sub Menu ================-->
                            <ul class="sub-menu">
                              <li class="menu-item"><a href="#" class="milenia-ln--independent">Events List</a>
                              </li>
                              <li class="menu-item"><a href="#" class="milenia-ln--independent">Meetings</a>
                              </li>
                              <li class="menu-item"><a href="/weddings" class="milenia-ln--independent">Weddings</a>
                              </li>
                              <li class="menu-item"><a href="#" class="milenia-ln--independent">Social Gatherings</a>
                              </li>
                            </ul>
                            <!--================ End of Sub Menu ================-->
                          </li>

                          <li class="menu-item menu-item-has-children"><a href="events_list.html" class="milenia-ln--independent">Facilities</a>
                            <!--================ Sub Menu ================-->
                            <ul class="sub-menu">
                              <li class="menu-item"><a href="#" class="milenia-ln--independent">Food and Drink</a>
                              </li>
                              <li class="menu-item"><a href="#" class="milenia-ln--independent">Conference Hall and Boardroom</a>
                              </li>
                              <li class="menu-item"><a href="/funspots" class="milenia-ln--independent">Fun Spots and Equipment</a>
                              </li>
                            </ul>
                            <!--================ End of Sub Menu ================-->
                          </li>

                          <li class="menu-item"><a href="#" class="milenia-ln--independent {{ Request::path() === '/activities' ? 'current-menu-item' : '' }}">Activities</a></li>

                          <li class="menu-item menu-item-has-children"><a href="#" class="milenia-ln--independent">Special Offers</a>
                            <!--================ Sub Menu ================-->
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="#" class="milenia-ln--independent">Family Packages</a></li>
                                <li class="menu-item"><a href="#" class="milenia-ln--independent">Singles Packages</a></li>
                                <li class="menu-item"><a href="#" class="milenia-ln--independent">Group Packages</a></li>
                            </ul>
                            <!--================ End of Sub Menu ================-->
                          </li>

                          <li class="menu-item"><a href="/reservation"  class="milenia-ln--independent">Make a Reservation</a></li>
                      </nav>
                      <!--================ End of Navigation ================-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--================ End of Column ================-->
          </div>
          <!--================ End of Section ================-->
        </div>
      </header>
      <!--================ End of Header ================-->
