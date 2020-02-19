@extends('layouts.master')

@section('title', 'Crystal Lake | Photo Gallery')

@section('content')
<hr>
<body class="milenia-body--scheme-blue">
    <div class="milenia-preloader"></div>
    <div id="milenia-page-wrapper" class="milenia-page-wrapper">
    <div class="milenia-content  ">
        <div class="container">
          <div class="row justify-content-center">
            <div align="center" class="col-md-auto"> 
              <blockquote class="milenia-blockquote--style-2" style="color: white !important"><h3>Photo Gallery</h3></blockquote>
            </div>
          </div>
          <div class="row">
            <main class="col">
              <div class="milenia-entity-content">
                <!--================ Content Section ================-->
                <div class="milenia-section">
                  <!--================ Gallery ================-->
                  <div class="milenia-gallery">
                    <div data-isotope-layout="grid" class="milenia-grid milenia-grid--isotope milenia-grid--cols-4">
                      <div class="milenia-grid-sizer"></div>
                      <div class="milenia-grid-item milenia-category-rooms">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery1.jpg') }}" data-fancybox="gallery" data-caption="Nemo Enim Ipsam" class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery1.jpg') }}" alt=""></a>
                          {{-- 0<figcaption class="milenia-gallery-item-caption">Nemo Enim Ipsam</figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                      <div class="milenia-grid-item milenia-category-meetings-events">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery2.jpg') }}" data-fancybox="gallery" data-caption="Aliquam Erat Volutpat" class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery2.jpg') }}" alt=""></a>
                          {{-- <figcaption class="milenia-gallery-item-caption">Aliquam Erat Volutpat</figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                      <div class="milenia-grid-item milenia-category-activities">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery3.jpg') }}" data-fancybox="gallery" data-caption="Vestibulum Sed Ante" class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery3.jpg') }}" alt=""></a>
                          {{-- <figcaption class="milenia-gallery-item-caption">Vestibulum Sed Ante</figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                      <div class="milenia-grid-item milenia-category-restaurants">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery4.jpg') }}" data-fancybox="gallery" data-caption="Donec Sagittis Euismod Purus" class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery4.jpg') }}" alt=""></a>
                          {{-- <figcaption class="milenia-gallery-item-caption">Donec Sagittis Euismod Purus</figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                      <div class="milenia-grid-item milenia-category-spa-fitness">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery5.jpg') }}" data-fancybox="gallery" data-caption="Sed Ut Perspiciatis Sit" class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery5.jpg') }}" alt=""></a>
                          {{-- <figcaption class="milenia-gallery-item-caption">Sed Ut Perspiciatis Sit</figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                      <div class="milenia-grid-item milenia-category-restaurants">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery6.jpg') }}" data-fancybox="gallery" data-caption="Donec Eget Tellus Non" class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery6.jpg') }}" alt=""></a>
                          {{-- <figcaption class="milenia-gallery-item-caption">Donec Eget Tellus Non</figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                      <div class="milenia-grid-item milenia-category-restaurants">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery7.jpg') }}" data-fancybox="gallery" data-caption="Ut Pharetra Augue Nec" class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery7.jpg') }}" alt=""></a>
                          {{-- <figcaption class="milenia-gallery-item-caption">Ut Pharetra Augue Nec</figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                      <div class="milenia-grid-item milenia-category-pools-beach">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery8.jpg') }}" data-fancybox="gallery" data-caption="Sed Laoreet Aliquam " class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery8.jpg') }}" alt=""></a>
                          {{-- <figcaption class="milenia-gallery-item-caption">Sed Laoreet Aliquam </figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                      <div class="milenia-grid-item milenia-category-activities">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery9.jpg') }}" data-fancybox="gallery" data-caption="Nemo Enim Ipsam" class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery9.jpg') }}" alt=""></a>
                          {{-- <figcaption class="milenia-gallery-item-caption">Nemo Enim Ipsam</figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                      <div class="milenia-grid-item milenia-category-rooms">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery10.jpg') }}" data-fancybox="gallery" data-caption="Aliquam Erat Volutpat" class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery10.jpg') }}" alt=""></a>
                          {{-- <figcaption class="milenia-gallery-item-caption">Aliquam Erat Volutpat</figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                      <div class="milenia-grid-item milenia-category-pools-beach">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery11.jpg') }}" data-fancybox="gallery" data-caption="Vestibulum Sed Ante" class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery11.jpg') }}" alt=""></a>
                          {{-- <figcaption class="milenia-gallery-item-caption">Vestibulum Sed Ante</figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                      <div class="milenia-grid-item milenia-category-spa-fitness">
                        <!--================ Gallery Item ================-->
                        <figure class="milenia-gallery-item milenia-gallery-item--with-thumb"><a href="{{ asset('images/gallery12.jpg') }}" data-fancybox="gallery" data-caption="Donec Sagittis Euismod Purus" class="milenia-ln--independent milenia-gallery-item-link"><img src="{{ asset('images/gallery12.jpg') }}" alt=""></a>
                          {{-- <figcaption class="milenia-gallery-item-caption">Donec Sagittis Euismod Purus</figcaption> --}}
                        </figure>
                        <!--================ End of Gallery Item ================-->
                      </div>
                    </div>
                  </div>
                  <!--================ End of Gallery ================-->
                </div>
              </div>
            </main>
          </div>
        </div>
      </div>
    </div>
@endsection