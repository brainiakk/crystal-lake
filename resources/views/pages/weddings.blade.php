@extends('layouts.master')

@section('title', 'Weddings')

@section('content')
    <!--================ Breadcrumb ================-->
    <div   class="milenia-breadcrumb text-center milenia-colorizer--scheme-dark">
        <div class="container">
          <h1 class="milenia-page-title">Weddings</h1>
          <nav class="milenia-breadcrumb-path"><span><a href="{{ url('/') }}">Home</a></span>/<span>Weddings</span>
          </nav>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="milenia-content milenia-content--no-pt ">
        <div class="container">
          <div class="row">
            <main class="col">
              <div class="milenia-entity-content">
                <!--================ Content Section ================-->
                <div class="milenia-section">
                  <!--================ Filter ================-->
                  <nav class="milenia-filter-wrap text-center">
                    <ul id="pricing-tables-filter" class="milenia-filter milenia-list--unstyled">
                      <li><a href="#" data-filter="*" class="milenia-active"><!--All---></a></li>
                      <li><a href="#" data-filter=".milenia-grid-item--category-family"><!---Family--></a></li>
                      <li><a href="#" data-filter=".milenia-grid-item--category-spa-fitness"><!--Spa &amp; Fitness--></a></li>
                      <li><a href="#" data-filter=".milenia-grid-item--category-sport"><!---Sport---></a></li>
                    </ul>
                  </nav>
                  <!--================ End of Filter ================-->
                  <!--================ Pricing Tables ================-->
                  <div class="milenia-pricing-tables">
                    <div data-isotope-layout="grid" data-isotope-filter="#pricing-tables-filter" class="milenia-grid milenia-grid--isotope milenia-grid--cols-3">
                      <div class="milenia-grid-item milenia-grid-item--category-family">
                        <!--================ Pricing Table ================-->
                        <article class="milenia-pricing-table">
                          <div class="milenia-pricing-table-media"><a href="#" class="milenia-pricing-table-link milenia-ln--independent"><img src="images/wedding_1.jpg" alt=""></a></div>
                          <div class="milenia-pricing-table-content milenia-outline-over">
                            <h2 class="milenia-pricing-table-title milenia-color--unchangeable">Planning</h2>
                            <p>Wedding planning, while exciting, can be a major source of stress. Let Us help you check those boxes on your list, sort your guests accordingly during reservations and check-ins and also arrange for your rehearsal dinners if you choose to, as our professionals here will make sure no detail is overlooked in creating your perfect day.</p><strong class="milenia-pricing-table-price"><!--$299--></strong><a href="#" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary"><!--More Details--></a>
                          </div>
                        </article>
                        <!--================ Pricing Table ================-->
                      </div>
                      <div class="milenia-grid-item milenia-grid-item--category-sport">
                        <!--================ Pricing Table ================-->
                        <article class="milenia-pricing-table">
                          <div class="milenia-pricing-table-media"><a href="#" class="milenia-pricing-table-link milenia-ln--independent"><img src="images/wedding_2.jpg" alt=""></a></div>
                          <div class="milenia-pricing-table-content milenia-outline-over">
                            <h2 class="milenia-pricing-table-title milenia-color--unchangeable">Receptions</h2>
                            <p>Let the magic of the day continue as you toast your new beginning. “Relax, Calm Breaths, We Got You Covered”. That’s the promise we never fail to keep throughout the planning and execution stages of your wedding reception, here at Crystal Lake Resort and Tours. Our stylish venues, expert planning and romantic ambience ensures that your day will remain an unforgettable experience.</p><strong class="milenia-pricing-table-price"><!---$99--></strong><a href="#" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary"><!--More Details--></a>
                          </div>
                        </article>
                        <!--================ Pricing Table ================-->
                      </div>
                      <div class="milenia-grid-item milenia-grid-item--category-sport">
                        <!--================ Pricing Table ================-->
                        <article class="milenia-pricing-table">
                          <div class="milenia-pricing-table-media"><a href="#" class="milenia-pricing-table-link milenia-ln--independent"><img src="images/wedding_3.jfif" alt=""></a></div>
                          <div class="milenia-pricing-table-content milenia-outline-over">
                            <h2 class="milenia-pricing-table-title milenia-color--unchangeable">Honeymoon</h2>
                            <p>You made it official now and it’s time to unwind. After all the excitement, the last thing you want is to arrive at your honeymoon destination and realize it is only open in high season. Crystal Lake Resort and Tours provides you with the perfect opportunity to relax connect and recoup your energy. Stay in one of our Diplomatic Suites or any of our tastefully furnished deluxe rooms and choose from our amazing array of fun activities.</p><strong class="milenia-pricing-table-price"><!---$199--></strong><a href="#" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary"><!--More Details--></a>
                          </div>
                        </article>
                        </article>
                </div>
                <!--================ End of Content Section ================-->
                <!--================ End of Content Section ================-->
              </div>
            </main>
          </div>
        </div>
      </div>
@endsection