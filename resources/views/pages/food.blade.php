@extends('layouts.master')

@section('title', 'Crystal Lake | Fun Spots')

@section('content') 

  <div class="milenia-content">
      <!--================ Breadcrumb ================-->
      <div class="milenia-breadcrumb text-center milenia-colorizer--scheme-dark">
        <div class="container">
          <h1 class="milenia-page-title">Food and Drink</h1>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      
      <!--================ Restaurants Section ================-->
      <div class="container">
        <div class="row">
          <main class="col">
            <div class="milenia-entity-content">
              <!--================ Content Section ================-->
              <section class="milenia-section milenia-body--scheme-blue">
                <h3>Two Restaurants on Site</h3>

                
                <!--================ Greenwood Restaurant Section ================-->
                <!--================ Tabbed Carousel ================-->
                <div class="milenia-tabbed-carousel">
                  <!--================ Entities (Style 15) ================-->
                  <div class="milenia-entities milenia-entities--style-15 milenia-entities--with-tabbed-grid">
                    <div id="milenia-grid-tabbed-1" class="milenia-grid milenia-grid--cols-1 milenia-grid--tabbed milenia-grid--tabbed-loading">
                      <div class="milenia-grid-item">
                        <!--================ Entity ================-->
                        <article class="milenia-entity">
                          <div class="milenia-entity-media">
                            <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                              <div data-bg-image-src="{{ asset('images/greenwood_2.jpg') }}" class="milenia-entity-slide"></div>
                              <div data-bg-image-src="{{ asset('images/greenwood_1.jpg') }}" class="milenia-entity-slide"></div>
                            </div>
                          </div>
                          <div class="milenia-entity-content milenia-aligner">
                            <div class="milenia-aligner-outer">
                              <div class="milenia-aligner-inner">
                                <header class="milenia-entity-header">
                                  <h2 class="milenia-entity-title">Greenwood Dining Room</h2>
                                </header>
                                <div class="milenia-entity-body">
                                  <p>Our executive style Greenwood dining room gives you the perfect spot to sit back, relax and enjoy the romantic ambience; whether you choose to dine privately or treat your guests to a power lunch. Sitting arrangements vary from single to tables for thirty.  You can choose to pull back the curtains and soak in the view of both the swimming pool and the natural blue-green Lake, making it a favorite for both walk-in and lodging guests.</p>
                                  <p align="left"><b>Food:</b> African, International</p>
                                  <p align="left"><b>Open for:</b> 24 hours</p>
                                  <p align="left"><b>Menu:</b> Buffet & À La Carte</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        <!--================ End of Entity ================-->
                      </div>
      
                    </div>
                  </div>
                  <!--================ End of Entities (Style 15) ================-->
                </div>
                <!--================ End of Greenwood Restaurant Section ================-->

                <br>
                <br>

                <!--================ Trybal Restaurant Section ================-->
                <!--================ Tabbed Carousel ================-->
                <div class="milenia-tabbed-carousel">
                  <!--================ Entities (Style 15) ================-->
                  <div class="milenia-entities milenia-entities--style-15 milenia-entities--with-tabbed-grid">
                    <div id="milenia-grid-tabbed-1" class="milenia-grid milenia-grid--cols-1 milenia-grid--tabbed milenia-grid--tabbed-loading">
                      <div class="milenia-grid-item">
                        <!--================ Entity ================-->
                        <article class="milenia-entity">
                          <div class="milenia-entity-media">
                            <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                              <div data-bg-image-src="{{ asset('images/trybal_1.jpg') }}" class="milenia-entity-slide"></div>
                              <div data-bg-image-src="{{ asset('images/trybal_2.jpg') }}" class="milenia-entity-slide"></div>
                              <div data-bg-image-src="{{ asset('images/trybal_3.jpg') }}" class="milenia-entity-slide"></div>
                              <div data-bg-image-src="{{ asset('images/trybal_4.jpg') }}" class="milenia-entity-slide"></div>
                            </div>
                          </div>
                          <div class="milenia-entity-content milenia-aligner">
                            <div class="milenia-aligner-outer">
                              <div class="milenia-aligner-inner">
                                <header class="milenia-entity-header">
                                  <h2 class="milenia-entity-title">Trybal Dining Room</h2>
                                </header>
                                <div class="milenia-entity-body">
                                  <p>Looking for that extra twist to your dining experience? Our Trybal dining room and bar located in the GENESIS building provides you with just that! Every inch of space, the décor and overall atmosphere was designed to give you the feeling of home-away-from-home. What’s more, with trained waiters available at your beck and call, soft music (group diners can even make their choice of songs) and a robust wine list to pick from……………….it’s always a Crystallized Experience.</p>
                                  <p align="left"><b>Food:</b> African, International</p>
                                  <p align="left"><b>Open for:</b> Lunch, Dinner, Cocktail hour</p>
                                  <p align="left"><b>Menu:</b> À La Carte</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        <!--================ End of Entity ================-->
                      </div>
      
                    </div>
                  </div>
                  <!--================ End of Entities (Style 15) ================-->
                </div>
                <!--================ End of Trybal Restaurant Section ================-->
              </section>

              <div class="owl-carousel owl-carousel--nav-edges owl-carousel--nav-onhover owl-carousel--nav-small milenia-simple-slideshow-thumbs"><img src="{{ asset('images/food_1.jpg') }}" alt=""><img src="{{ asset('images/food_3.jpg') }}" alt=""><img src="{{ asset('images/food_2.jpg') }}" alt=""><img src="{{ asset('images/food_4.jpg') }}" alt=""><img src="{{ asset('images/food_7.jpg') }}" alt=""><img src="{{ asset('images/food_5.jpg') }}" alt=""><img src="{{ asset('images/food_8.jpg') }}" alt=""><img src="{{ asset('images/food_6.jpg') }}" alt="">
              </div>

              
              <!--================ End of Content Section ================-->
              <!--================ Content Section ================-->
              <section class="milenia-section milenia-body--scheme-blue">
                <!--================ Crystal Kitchen Service Section ================-->
                <!--================ Tabbed Carousel ================-->
                <div class="milenia-tabbed-carousel">
                  <!--================ Entities (Style 15) ================-->
                  <div class="milenia-entities milenia-entities--style-15 milenia-entities--with-tabbed-grid">
                    <div id="milenia-grid-tabbed-1" class="milenia-grid milenia-grid--cols-1 milenia-grid--tabbed milenia-grid--tabbed-loading">
                      <div class="milenia-grid-item">
                        <!--================ Entity ================-->
                        <article class="milenia-entity">
                          <div class="milenia-entity-media">
                            <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                              <div data-bg-image-src="{{ asset('images/food_1.jpg') }}" class="milenia-entity-slide"></div>
                              <div data-bg-image-src="{{ asset('images/food_2.jpg') }}" class="milenia-entity-slide"></div>
                              <div data-bg-image-src="{{ asset('images/food_7.jpg') }}" class="milenia-entity-slide"></div>
                              <div data-bg-image-src="{{ asset('images/food_5.jpg') }}" class="milenia-entity-slide"></div>
                              <div data-bg-image-src="{{ asset('images/food_6.jpg') }}" class="milenia-entity-slide"></div>
                            </div>
                          </div>
                          <div class="milenia-entity-content milenia-aligner">
                            <div class="milenia-aligner-outer">
                              <div class="milenia-aligner-inner">
                                <header class="milenia-entity-header">
                                  <h2 class="milenia-entity-title">Crystal Kitchen Service</h2>
                                </header>
                                <div class="milenia-entity-body">
                                  <p>Led by the internationally renowned Beninese Chef, John Azonde, the Crystal kitchen operates round the clock and has been the recipient of unsolicited praise from both lodging and walk-in guests, redefining the art of dining and impressing even the most critiquing palates.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        <!--================ End of Entity ================-->
                      </div>
      
                    </div>
                  </div>
                  <!--================ End of Entities (Style 15) ================-->
                </div>
                <!--================ End of Crystal Kitchen Service Section ================-->
              
              </div>
          </main>
        </div>
                
      </div>
      <!--================ End of Restaurants ================-->

      
      
      <!--================ Food Menu ================-->
      {{-- <div class="container">
        <div class="row">
          <main class="col">
            <div class="milenia-entity-content">
              <!--================ Content Section ================-->
              <section class="milenia-section">
                <div class="row">
                  <div class="col">
                    <h3>KITCHEN MENU</h3>
                    <!--================ Table One ================-->
                    <table class="milenia-table--responsive-md">
                      <thead>
                        <tr>
                          <th>BREAKFAST</th>
                          <th>LUNCH</th>
                          <th>DINNER</th>
                          <th>DINNER</th>
                          <th>DINNER</th>
                          <th>DINNER</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-cell-title="Heading 1">Boiled Yam</td>
                          <th data-cell-title="Heading 2"><em>Starter</em></th>
                          <th data-cell-title="Heading 3"><em>Starter</em></th>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Egg Sauce</td>
                          <td data-cell-title="Heading 2">Goat Meat Peppered Soup</td>
                          <td data-cell-title="Heading 3">Assorted Meat Pepper Soup</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Pastry Potatoes</td>
                          <td data-cell-title="Heading 2">Cream of Sweet Corn Soup</td>
                          <td data-cell-title="Heading 3">Cream of Chicken Soup</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Sausage Sauce</td>
                          <th data-cell-title="Heading 2"><em>Main Dish</em></th>
                          <th data-cell-title="Heading 3"><em>Main Dish</em></th>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Custard</td>
                          <td data-cell-title="Heading 2">Jollof Rice & Plantain</td>
                          <td data-cell-title="Heading 3">Coconut Rice</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Fresh Bread</td>
                          <td data-cell-title="Heading 2">Fried Rice</td>
                          <td data-cell-title="Heading 3">White Rice</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Lipton, Green Tea</td>
                          <td data-cell-title="Heading 2">Pounded Yam</td>
                          <td data-cell-title="Heading 3">Porridge Plantain</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Ginger Tea</td>
                          <td data-cell-title="Heading 2">Beans Pottage</td>
                          <td data-cell-title="Heading 3">Moi–Moi</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Noodles</td>
                          <td data-cell-title="Heading 2">Semo</td>
                          <td data-cell-title="Heading 3">Poundo & Garri</td>
                        </tr>
                        <tr>
                          <th data-cell-title="Heading 1"><em>Tea Break</em></th>
                          <td data-cell-title="Heading 2">Nsala Soup</td>
                          <td data-cell-title="Heading 3">Goat Meat Concasse</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Sardine Sandwich</td>
                          <td data-cell-title="Heading 2">Bitter Leaf Soup</td>
                          <td data-cell-title="Heading 3">Roasted Fish</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Finger Fish</td>
                          <td data-cell-title="Heading 2">Fried Chicken/Beef</td>
                          <td data-cell-title="Heading 3">Nsala & Egusi Soup</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Coffee & Milk</td>
                          <td data-cell-title="Heading 2">Coleslaw Salad</td>
                          <td data-cell-title="Heading 3">Mixed Vegetable Salad</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1"></td>
                          <th data-cell-title="Heading 2"><em>Dessert</em></th>
                          <th data-cell-title="Heading 3"><em>Dessert</em></th>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1"></td>
                          <td data-cell-title="Heading 2">Fruit Salad</td>
                          <td data-cell-title="Heading 3">Fruit Plata</td>
                        </tr>
                      </tbody>
                    </table>
                    <!--================ End of Table One ================-->
                    <br>
                    <br>
                    <!--================ Table Two ================-->
                    <table class="milenia-table--responsive-md">
                      <thead>
                        <tr>
                          <th>Breakfast</th>
                          <th>Lunch</th>
                          <th>Dinner</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-cell-title="Heading 1">Boiled Yam</td>
                          <td data-cell-title="Heading 2"><b>Starter</b></td>
                          <td data-cell-title="Heading 3"><b>Starter</b></td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Boiled Yam</td>
                          <td data-cell-title="Heading 2">Nemo enim ipsam</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 2</td>
                          <td data-cell-title="Heading 2">Voluptatem quia</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                      </tbody>
                    </table>
                    <!--================ End of Table Two ================-->
                    <br>
                    <br>
                    <!--================ Table Three ================-->
                    <table class="milenia-table--responsive-md">
                      <thead>
                        <tr>
                          <th>Breakfast</th>
                          <th>Lunch</th>
                          <th>Dinner</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-cell-title="Heading 1">Boiled Yam</td>
                          <td data-cell-title="Heading 2"><b>Starter</b></td>
                          <td data-cell-title="Heading 3"><b>Starter</b></td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Boiled Yam</td>
                          <td data-cell-title="Heading 2">Nemo enim ipsam</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 2</td>
                          <td data-cell-title="Heading 2">Voluptatem quia</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                      </tbody>
                    </table>
                    <!--================ End of Table Three ================-->
                    <br>
                    <br>
                    <!--================ Table Four ================-->
                    <table class="milenia-table--responsive-md">
                      <thead>
                        <tr>
                          <th>Breakfast</th>
                          <th>Lunch</th>
                          <th>Dinner</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-cell-title="Heading 1">Boiled Yam</td>
                          <td data-cell-title="Heading 2"><b>Starter</b></td>
                          <td data-cell-title="Heading 3"><b>Starter</b></td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Boiled Yam</td>
                          <td data-cell-title="Heading 2">Nemo enim ipsam</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 2</td>
                          <td data-cell-title="Heading 2">Voluptatem quia</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Item 3</td>
                          <td data-cell-title="Heading 2">Sit aspernatur</td>
                          <td data-cell-title="Heading 3">$5.99</td>
                        </tr>
                      </tbody>
                    </table>
                    <!--================ End of Table Four ================-->
                  </div>
                </div>
              </section>
              <!--================ End of Content Section ================-->
            </div>
          </main>
        </div>
      </div> --}}
      <!--================ End of Food Menu ================-->
      
  </div>
@endsection