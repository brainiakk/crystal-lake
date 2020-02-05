@extends('layouts.master')

@section('title', 'Crystal Lake | Deluxe Room')

@section('content')
<hr>
    <div class="milenia-content">
        <header class="milenia-page-header milenia-entity-single milenia-entity--room">
            <div class="row align-items-center milenia-columns-aligner--edges-lg">
            <div class="col-lg-9">
                <h1>Deluxe Room</h1>
            </div>
            <div class="col-lg-3">
                <div class="milenia-entity-meta">
                    <div>from <strong class="milenia-entity-price">N45,000</strong>/night</div>
                </div>
            </div>
            </div>
        </header>
        <!--================ Content Section ================-->
        <div class="milenia-section milenia-has-sidebar">
            <div class="row">
            <main class="col-lg-9 col-md-8 milenia-entity-single milenia-entity--room">
                <div class="milenia-entity-content">
                <div id="simple-slideshow-1" class="owl-carousel milenia-simple-slideshow"><img src="{{ asset('images/deluxe-room_1.png') }}" alt=""><img src="{{ asset('images/deluxe-room_2.png') }}" alt="">
                </div>
                <div data-sync="#simple-slideshow-1" class="owl-carousel owl-carousel--nav-edges owl-carousel--nav-onhover owl-carousel--nav-small milenia-simple-slideshow-thumbs"><img src="{{ asset('images/deluxe-room_1.png') }}" alt=""><img src="{{ asset('images/deluxe-room_2.png') }}" alt="">
                </div>
                <!--================ Tabs ================-->
                <div class="milenia-tabs milenia-tabs--style-2 milenia-tabs--tour-sections-lg">
                    <!--================ Tabs Navigation ================-->
                    <div role="tablist" aria-label="Tour Sections v1" class="milenia-tabs-nav">
                        <span class="milenia-active"><a id="tab-description-link" href="#tab-description" role="tab" aria-selected="false" aria-controls="tab-description" class="milenia-ln--independent milenia-tab-link">Description</a></span>
                        <span><a id="tab-amenities-link" href="#tab-amenities" role="tab" aria-selected="true" aria-controls="tab-amenities" class="milenia-ln--independent milenia-tab-link">Amenities</a></span>
                        <span><a id="tab-reviews-link" href="#tab-reviews" role="tab" aria-selected="false" aria-controls="tab-reviews" class="milenia-ln--independent milenia-tab-link"></a></span></div>
                    <!--================ End of Tabs Navigation ================-->
                    <!--================ Tabs Container ================-->
                    <div class="milenia-tabs-container">
                    <!--================ Tab ================-->
                    <div id="tab-description" tabindex="0" role="tabpanel" aria-labelledby="tab-description-link" class="milenia-tab">
                        <p>Our Deluxe Rooms are designed to reflect the peaceful, laid back atmosphere of its lake view setting. Reflecting a romantic atmosphere, the Deluxe Room features sumptuous soft furnishings, elegant décor, views of greenery, swimming pool or the Lake.</p><a href="#" data-fancybox-album-src="[{&quot;src&quot;: &quot;images/floor-plan.png&quot;, &quot;opts&quot;: {&quot;caption&quot;: &quot;The floor plan&quot;}}]" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary"></a>
                    </div>
                    <!--================ End of Tab ================-->
                    <!--================ Tab ================-->
                    <div id="tab-amenities" tabindex="0" role="tabpanel" aria-labelledby="tab-amenities-link" class="milenia-tab">
                        <div class="row">
                        <div class="col-sm-6">
                            <ul class="milenia-list--icon milenia-list--icon-big">
                            <li>King size bed<i class="milenia-font-icon-double-bed"></i></li>
                            <li>Bathroom<i class="milenia-font-icon-bathtub"></i></li>
                            <li>Shower<i class="milenia-font-icon-shower"></i></li>
                            <li>Shampoo and soap<i class="milenia-font-icon-soap"></i></li>
                            
                            
                            <li>Wardrobe<i class="milenia-font-icon-hanger"></i></li>
                            <li>Working table<i class="milenia-font-icon-table"></i></li>
                            <li>Mini-bar<i class="milenia-font-icon-bottle-glasses"></i></li>
                            <li>Satellite TV<i class="milenia-font-icon-tv"></i></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="milenia-list--icon milenia-list--icon-big">
                            <li>Telephone<i class="milenia-font-icon-phone"></i></li>
                            <li>Wireless connect<i class="milenia-font-icon-wi-fi"></i></li>
                            <li>Air conditioner<i class="milenia-font-icon-air-conditioner"></i></li>
                            
                            <li>Mini Fridge<i class="milenia-font-icon-safe"></i></li>
                            
                            
                            
                            <li>24h room service (Free)<i class="milenia-font-icon-dish2"></i></li>
                            <li>Laundry service (at extra charge)<i class="milenia-font-icon-washer"></i></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!--================ End of Tab ================-->
                    <!--================ Tab ================-->
                    <div id="tab-rates" tabindex="0" role="tabpanel" aria-labelledby="tab-rates-link" class="milenia-tab">
                        <table aria-labelledby="table-label-1" class="milenia-table milenia-table--responsive-lg">
                        <tbody>
                            <tr>
                            <td data-cell-title="Season" class="milenia-color--black">Main season 1</td>
                            <td data-cell-title="Period">10 Mar – 30 Apr 2018</td>
                            <td data-cell-title="Price" class="milenia-color--black">N30,000/night</td>
                            </tr>
                            <tr>
                            <td data-cell-title="Season" class="milenia-color--black">Christmas &amp; New Year's</td>
                            <td data-cell-title="Period">22 Dec 2018 - 6 Jan 2019</td>
                            <td data-cell-title="Price" class="milenia-color--black">N30,000/night</td>
                            </tr>
                        
                            </tr>
                            <tr>
                            <td data-cell-title="Season" class="milenia-color--black">Weekend only</td>
                            <td data-cell-title="Period">Thursday through Sunday</td>
                            <td data-cell-title="Price" class="milenia-color--black">N30,000/night</td>
                            </tr>
                        </tbody>
                        </table><small id="table-label-1" class="milenia-table-label">All prices are exclusive of GST. 15% Goods and Services tax is applicable above the standard rates.</small>
                    </div>
                    <!--================ End of Tab ================-->
                    <!--================ Tab ================-->
                    <div id="tab-reviews" tabindex="0" role="tabpanel" aria-labelledby="tab-reviews-link" class="milenia-tab">
                        <div class="milenia-section milenia-section--py-medium">
                        <!--================ Estimate ================-->
                        <div class="milenia-estimate milenia-estimate--horizontal-xl">
                            <div class="milenia-estimate-mark milenia-aligner milenia-aligner--valign-middle">
                            <div class="milenia-aligner-outer">
                                <div class="milenia-aligner-inner">7.0<em class="milenia-estimate-mark-text">Good</em></div>
                            </div>
                            </div>
                            <div class="milenia-estimate-bars">
                            <!--================ Progress Bars ================-->
                            <div class="milenia-progress-bars milenia-progress-bars--style-2">
                                <div class="milenia-progress-bars-item"><strong id="progress-bar-title-1" data-value="7.5" class="milenia-progress-bar-title">Accommodation</strong>
                                <div role="progressbar" aria-valuenow="7.5" aria-valuemin="0" aria-valuemax="10" aria-labelledby="progress-bar-title-1" class="milenia-progress-bar">
                                    <div style="width: 75%" class="milenia-progress-bar-indicator"></div>
                                </div>
                                </div>
                                <div class="milenia-progress-bars-item"><strong id="progress-bar-title-2" data-value="5.5" class="milenia-progress-bar-title">Location</strong>
                                <div role="progressbar" aria-valuenow="5.5" aria-valuemin="0" aria-valuemax="10" aria-labelledby="progress-bar-title-2" class="milenia-progress-bar">
                                    <div style="width: 55%" class="milenia-progress-bar-indicator"></div>
                                </div>
                                </div>
                                <div class="milenia-progress-bars-item"><strong id="progress-bar-title-3" data-value="9.0" class="milenia-progress-bar-title">Meals</strong>
                                <div role="progressbar" aria-valuenow="9.0" aria-valuemin="0" aria-valuemax="10" aria-labelledby="progress-bar-title-3" class="milenia-progress-bar">
                                    <div style="width: 90%" class="milenia-progress-bar-indicator"></div>
                                </div>
                                </div>
                                <div class="milenia-progress-bars-item"><strong id="progress-bar-title-4" data-value="6.0" class="milenia-progress-bar-title">Facilities</strong>
                                <div role="progressbar" aria-valuenow="6.0" aria-valuemin="0" aria-valuemax="10" aria-labelledby="progress-bar-title-4" class="milenia-progress-bar">
                                    <div style="width: 60%" class="milenia-progress-bar-indicator"></div>
                                </div>
                                </div>
                            </div>
                            <!--================ End of Progress Bars ================-->
                            </div>
                        </div>
                        <!--================ End of Estimate ================-->
                        </div>
                        <div class="milenia-section milenia-section--py-medium">
                        <h5>Reviews</h5>
                        <ol class="comments-list">
                            <li class="comment">
                            <div class="comment-body">
                                <div class="comment-author-avatar"><a href="#" class="milenia-color--unchangeable"><img src="images/author-image-4.png" alt="Camala Haddon"></a></div>
                                <div class="comment-author-info">
                                <cite class="fn milenia-text-color--dark">Camala Haddon</cite>
                                <div class="comment-meta row milenia-columns-aligner--edges-md align-items-center">
                                    <div class="col-md-8">
                                    <time datetime="2018-10-17">October 17, 2018 at 2:41 pm</time>
                                    </div>
                                    <div class="col-md-4">
                                    <div data-estimate="4" class="milenia-rating milenia-rating--independent"></div>
                                    </div>
                                </div>
                                <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. </p>
                                </div>
                            </div>
                            </li>
                            <li class="comment">
                            <div class="comment-body">
                                <div class="comment-author-avatar"><a href="#" class="milenia-color--unchangeable"><img src="images/author-image-5.png" alt="Bradley Grosh"></a></div>
                                <div class="comment-author-info">
                                <cite class="fn milenia-text-color--dark">Bradley Grosh</cite>
                                <div class="comment-meta row milenia-columns-aligner--edges-md align-items-center">
                                    <div class="col-md-8">
                                    <time datetime="2018-10-17">October 17, 2018 at 2:41 pm</time>
                                    </div>
                                    <div class="col-md-4">
                                    <div data-estimate="5" class="milenia-rating milenia-rating--independent"></div>
                                    </div>
                                </div>
                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                </div>
                            </div>
                            </li>
                        </ol>
                        </div>
                        <div class="milenia-section milenia-section--py-medium">
                        <h5>Add a Review</h5><small class="form-caption">Your email address will not be published. Fields marked with an * are required.</small>
                        <form name="review">
                            <div class="form-group">
                            <div class="form-col">
                                <label for="review_name">Your Name *</label>
                                <input type="text" id="review_name" name="review_name" class="form-control">
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-col">
                                <label for="review_email">Your Email *</label>
                                <input type="email" id="review_email" name="review_email" class="form-control">
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-col">
                                <label>Rating</label>
                                <div class="milenia-rating-field">
                                <div data-estimate="4" class="milenia-rating milenia-rating--independent"></div>
                                <input type="hidden" name="review_rating" value="4">
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-col">
                                <label for="review_comment">Comment *</label>
                                <textarea id="review_comment" name="review_comment" rows="4" class="form-control"></textarea>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="form-col">
                                <button type="submit" class="milenia-btn">Submit Review</button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!--================ End of Tab ================-->
                    </div>
                    <!--================ End of Tabs Container ================-->
                </div>
                <!--================ End of Tabs ================-->
                </div>
            </main>
            <!--================ Sidebar ================-->
            <aside id="milenia-sidebar" class="milenia-sidebar col-lg-3 col-md-4">
                <div class="milenia-grid">
                <!--================ Widget ================-->
                <section class="milenia-grid-item milenia-widget">
                    <div class="milenia-grid-item-inner">
                    <div class="milenia-grid-item-content">
                        <h5 class="milenia-widget-title">Other Rooms</h5>
                        <!--================ Entities ================-->
                        <div class="milenia-entities milenia-entities--rooms">
                        <!--================ Entity ================-->
                        <article class="milenia-entity">
                            <div class="milenia-entity-media"><a href="{{ url('/rooms/standard') }}" class="milenia-ln--independent"><img src="{{ asset('images/standard_room_1.jpg') }}" alt=""></a></div>
                            <div class="milenia-entity-content">
                            <div class="milenia-entity-header">
                                <div class="milenia-entity-meta">
                                <div>From N30,000/night</div>
                                </div>
                                <h2 class="milenia-entity-title"><a href="{{ url('/rooms/standard') }}" class="milenia-color--unchangeable">Standard Room</a></h2>
                            </div>
                            </div>
                        </article>
                        <!--================ End of Entity ================-->
                        <!--================ Entity ================-->
                        <article class="milenia-entity">
                            <div class="milenia-entity-media"><a href="{{ url('/rooms/executive') }}" class="milenia-ln--independent"><img src="{{ asset('images/executive-room_1.png') }}" alt=""></a></div>
                            <div class="milenia-entity-content">
                            <div class="milenia-entity-header">
                                <div class="milenia-entity-meta">
                                <div>From N35,000/night</div>
                                </div>
                                <h2 class="milenia-entity-title"><a href="{{ url('/rooms/executive') }}" class="milenia-color--unchangeable">Executive Room</a></h2>
                            </div>
                            </div>
                        </article>
                        <!--================ End of Entity ================-->
                        <!--================ Entity ================-->
                        <article class="milenia-entity">
                            <div class="milenia-entity-media"><a href="{{ url('/rooms/studio') }}" class="milenia-ln--independent"><img src="{{ asset('images/studio-room_1.png') }}" alt=""></a></div>
                            <div class="milenia-entity-content">
                            <div class="milenia-entity-header">
                                <div class="milenia-entity-meta">
                                <div>From N40,000/night</div>
                                </div>
                                <h2 class="milenia-entity-title"><a href="{{ url('/rooms/studio') }}" class="milenia-color--unchangeable">Studio Room</a></h2>
                            </div>
                            </div>
                        </article>
                        <!--================ End of Entity ================--> 
                        <!--================ Entity ================-->
                        <article class="milenia-entity">
                            <div class="milenia-entity-media"><a href="{{ url('/rooms/royal') }}" class="milenia-ln--independent"><img src="{{ asset('images/royal-suite_1.png') }}" alt=""></a></div>
                            <div class="milenia-entity-content">
                            <div class="milenia-entity-header">
                                <div class="milenia-entity-meta">
                                <div>From N50,000/night</div>
                                </div>
                                <h2 class="milenia-entity-title"><a href="{{ url('/rooms/royal') }}" class="milenia-color--unchangeable">Royal Suite</a></h2>
                            </div>
                            </div>
                        </article>
                        <!--================ End of Entity ================--> 
                        <!--================ Entity ================-->
                        <article class="milenia-entity">
                            <div class="milenia-entity-media"><a href="{{ url('/rooms/diplomatic') }}" class="milenia-ln--independent"><img src="{{ asset('images/diplomatic-suite_1.png') }}" alt=""></a></div>
                            <div class="milenia-entity-content">
                            <div class="milenia-entity-header">
                                <div class="milenia-entity-meta">
                                <div>From N55,000/night</div>
                                </div>
                                <h2 class="milenia-entity-title"><a href="{{ url('/rooms/diplomatic') }}" class="milenia-color--unchangeable">Diplomatic Suite</a></h2>
                            </div>
                            </div>
                        </article>
                        <!--================ End of Entity ================-->
                        <!--================ Entity ================-->
                        <article class="milenia-entity">
                            <div class="milenia-entity-media"><a href="{{ url('/rooms/2bedroom') }}" class="milenia-ln--independent"><img src="{{ asset('images/') }}" alt=""></a></div>
                            <div class="milenia-entity-content">
                            <div class="milenia-entity-header">
                                <div class="milenia-entity-meta">
                                <div>From N80,000/night</div>
                                </div>
                                <h2 class="milenia-entity-title"><a href="{{ url('/rooms/2bedroom') }}" class="milenia-color--unchangeable">Two-Bedroom Suite</a></h2>
                            </div>
                            </div>
                        </article>
                        <!--================ End of Entity ================-->
                        </div>
                        <!--================ End of Entities ================-->
                    </div>
                    </div>
                </section>
                <!--================ End of Widget ================-->
                </div>
            </aside>
            <!--================ End of Sidebar ================-->
            </div>
        </div>
        <!--================ End of Content Section ================-->
    </div>
@endsection