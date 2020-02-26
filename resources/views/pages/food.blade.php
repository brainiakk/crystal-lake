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
                              <div data-bg-image-src="{{ asset('images/trybal_2.jpg') }}" class="milenia-entity-slide"></div>
                              <div data-bg-image-src="{{ asset('images/trybal_3.jpg') }}" class="milenia-entity-slide"></div>
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
      <div class="container">
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
                          <th>LUNCH/DINNER</th>
                          <th>PROTEINS</th>
                          <th>SNACKS</th>
                          <th>SOUPS</th>
                          <th>SPICY MEAT</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-cell-title="Heading 1">Indomie & Egg
                          </td>
                          <td data-cell-title="Heading 2">Pilaf rice
                          </td>
                          <td data-cell-title="Heading 3">Chicken
                          </td>
                          <td data-cell-title="Heading 4">Buns
                          </td>
                          <td data-cell-title="Heading 5">Egusi
                          </td>
                          <td data-cell-title="Heading 6">Peppered goat
                          </td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Fried Yam & Egg Sauce
                          </td>
                          <td data-cell-title="Heading 2">Jollof rice
                          </td>
                          <td data-cell-title="Heading 3">Goat meat (Mutton)
                          </td>
                          <td data-cell-title="Heading 4">Fish roll
                          </td>
                          <td data-cell-title="Heading 5">Okra
                          </td>
                          <td data-cell-title="Heading 6">Peppered chicken
                          </td>
                        </tr>
                        <tr>
                          <td data-cell-title="Heading 1">Boiled Yam & Egg Sauce
                          </td>
                          <td data-cell-title="Heading 2">White rice
                          </td>
                          <td data-cell-title="Heading 3">Beef
                          </td>
                          <td data-cell-title="Heading 4">Doughnut
                          </td>
                          <td data-cell-title="Heading 5">Ogbono
                          </td>
                          <td data-cell-title="Heading 6">Peppered beef
                          </td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Bread, Omelette & Tea
                          </td>
                          <td data-cell-title="Heading 2">Coconut rice
                          </td>
                          <td data-cell-title="Heading 3">Snail
                          </td>
                          <td data-cell-title="Heading 4">Meat pie
                          </td>
                          <td data-cell-title="Heading 5">Ofe Owerri
                          </td>
                          <td data-cell-title="Heading 6">Peppered assorted meat
                          </td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Fried Plantain & Tea
                          </td>
                          <td data-cell-title="Heading 2">Fried rice
                          </td>
                          <td data-cell-title="Heading 3">Gizzard
                          </td>
                          <td data-cell-title="Heading 4">Chips
                          </td>
                          <td data-cell-title="Heading 5">Vegetable
                          </td>
                          <td data-cell-title="Heading 6">Peppered gizzard
                          </td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Boiled Unripe Plantain & Vegetable Sauce
                          </td>
                          <td data-cell-title="Heading 2">Caribbean rice
                          </td>
                          <td data-cell-title="Heading 3">Stock fish
                          </td>
                          <td data-cell-title="Heading 4">Shawama (beef & chicken)
                          </td>
                          <td data-cell-title="Heading 5">Nsala
                          </td>
                          <td data-cell-title="Heading 6">Melusa fish
                          </td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Plantain Porridge
                          </td>
                          <th data-cell-title="Heading 2"><em>Hot starter
                          </em></th>
                          <td data-cell-title="Heading 3">Dried Fish
                          </td>
                          <td data-cell-title="Heading 4">Spring rolls
                          </td>
                          <td data-cell-title="Heading 5">Oha
                          </td>
                          <td data-cell-title="Heading 6">Fresh fish well-garnished
                          </td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Yam Porridge
                          </td>
                          <td data-cell-title="Heading 2">Cream chicken soup
                          </td>
                          <td data-cell-title="Heading 3">Cow leg
                          </td>
                          <td data-cell-title="Heading 4">Samosa
                          </td>
                          <th data-cell-title="Heading 5">Swallows 
                          </th>
                          <th data-cell-title="Heading 6">Dessert
                          </th>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Full English Breakfast
                          </td>
                          <td data-cell-title="Heading 2">Mushroom soup
                          </td>
                          <td data-cell-title="Heading 3">Cow tail
                          </td>
                          <td data-cell-title="Heading 4">Finger fish
                          </td>
                          <td data-cell-title="Heading 5">Wheat
                          </td>
                          <td data-cell-title="Heading 6">Tutti fruity
                          </td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Coffee & Tea
                          </td>
                          <td data-cell-title="Heading 2">Sweet corn soup
                          </td>
                          <td data-cell-title="Heading 3">Crocker fish
                          </td>
                          <td data-cell-title="Heading 4">Beef burger and chips
                          </td>
                          <td data-cell-title="Heading 5">Semo
                          </td>
                          <td data-cell-title="Heading 6">Fruit salad
                          </td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Liver Sauce
                          </td>
                          <td data-cell-title="Heading 2">French onion soup
                          </td>
                          <td data-cell-title="Heading 3">Cat fish
                          </td>
                          <td data-cell-title="Heading 4">Chicken burger and chips
                          </td>
                          <td data-cell-title="Heading 5">Pounded yam
                          </td>
                          <td data-cell-title="Heading 6">Fruit plater
                          </td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Parsley Potato
                          </td>
                          <td data-cell-title="Heading 2">Minestrone soup
                          </td>
                          <td data-cell-title="Heading 3">Tuna 
                          </td>
                          <td data-cell-title="Heading 4">Vegetable sandwich
                          </td>
                          <td data-cell-title="Heading 5">Pando
                          </td>
                          <td data-cell-title="Heading 6">Cream caramel
                          </td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Chicken Goujonnette with Tartar Sauce
                          </td>
                          <td data-cell-title="Heading 2">Chicken sweet corn
                          </td>
                          <td data-cell-title="Heading 3">Assorted meat 
                          </td>
                          <td data-cell-title="Heading 4">Club sandwich
                          </td>
                          <td data-cell-title="Heading 5">Garri
                          </td>
                          <td data-cell-title="Heading 6">Ice cream
                          </td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Kidney & Liver in Sesame Oil Sauce
                          </td>
                          <th data-cell-title="Heading 2"><em>Salad
                          </em></th>
                          <th data-cell-title="Heading 3"><em>Pepper soup</em></th>
                          <th data-cell-title="Heading 4"><em>Continental Soup</em></th>
                          <td data-cell-title="Heading 5">Plantain flour
                          </td>
                          <td data-cell-title="Heading 6"></td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Custard & Corn flacks
                          </td>
                          <td data-cell-title="Heading 2">Mixed vegetable salad
                          </td>
                          <td data-cell-title="Heading 3">Chicken pepper soup
                          </td>
                          <td data-cell-title="Heading 4">Cream of chicken soup
                          </td>
                          <td data-cell-title="Heading 5">Oat meal
                          </td>
                          <td data-cell-title="Heading 6"></td>
                        </tr><tr>
                          <td data-cell-title="Heading 1">Pancakes
                          </td>
                          <td data-cell-title="Heading 2">Cucumber salad
                          </td>
                          <td data-cell-title="Heading 3">Goat meat pepper soup
                          </td>
                          <td data-cell-title="Heading 4">Cream of mushroom soup
                          </td>
                          <td data-cell-title="Heading 5"></td>
                          <td data-cell-title="Heading 6"></td>
                        </tr><tr>
                          <td data-cell-title="Heading 1"></td>
                          <td data-cell-title="Heading 2">Chicken salad
                          </td>
                          <td data-cell-title="Heading 3">Cow tail pepper soup
                          </td>
                          <td data-cell-title="Heading 4">Sweet corn soup
                          </td>
                          <td data-cell-title="Heading 5"></td>
                          <td data-cell-title="Heading 6"></td>
                        </tr><tr>
                          <td data-cell-title="Heading 1"></td>
                          <td data-cell-title="Heading 2">Tuna salad
                          </td>
                          <td data-cell-title="Heading 3">Assorted meat pepper soup
                          </td>
                          <td data-cell-title="Heading 4">Cream of potato and carrot soup
                          </td>
                          <td data-cell-title="Heading 5"></td>
                          <td data-cell-title="Heading 6"></td>
                        </tr><tr>
                          <td data-cell-title="Heading 1"></td>
                          <td data-cell-title="Heading 2">Russian salad
                          </td>
                          <td data-cell-title="Heading 3">Catfish pepper soup (small, medium & large)
                          </td>
                          <td data-cell-title="Heading 4"></td>
                          <td data-cell-title="Heading 5"></td>
                          <td data-cell-title="Heading 6"></td>
                        </tr><tr>
                          <td data-cell-title="Heading 1"></td>
                          <td data-cell-title="Heading 2">Coleslaw salad
                          </td>
                          <td data-cell-title="Heading 3"></td>
                          <td data-cell-title="Heading 4"></td>
                          <td data-cell-title="Heading 5"></td>
                          <td data-cell-title="Heading 6"></td>
                        </tr>
                      </tbody>
                    </table>
                    <!--================ End of Table One ================-->
                  </div>
                </div>
              </section>
              <!--================ End of Content Section ================-->
            </div>
          </main>
        </div>
      </div>
      <!--================ End of Food Menu ================-->
      
  </div>
@endsection