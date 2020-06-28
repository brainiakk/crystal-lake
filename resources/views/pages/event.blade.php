@extends('layouts.master')

@section('title', 'Crystal Lake | '.$event->title)

@section('content')

		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>{{ $event->title }}</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home
							</a>
						</li>
						<li>Events</li>
						<li>{{ $event->title }}</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start News Details Area -->
        <section class="news-details-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="news-details-desc">
							<div class="article-image">
								<img src="{{ asset('/event_images/'.$event->image) }}" alt="image">
							</div>

							<div class="article-content">
								<div class="entry-meta">
									<ul>
                                        <li><span>Cost:</span>
                                            <a href="#">
                                                @if ( $event->price != "" || !is_null($event->price) )
                                                ₦{{ $event->price }}
                                                @else
                                                    FREE
                                                @endif
                                            </a>
                                        </li>
                                        <li><span>Date:</span>
                                            <a href="#">
                                                @if ($event->start_date->format('d') == $event->end_date->format('d'))
                                                    {{ $event->start_date->format('dS') }}
                                                @else
                                                {{ $event->start_date->format('d') }}-{{ $event->end_date->format('d') }}
                                                @endif
                                                @if ($event->start_date->format('M') == $event->end_date->format('M'))
                                                {{ $event->start_date->format('M') }}
                                                @else
                                                    {{ $event->start_date->format('M') }} to {{ $event->end_date->format('M') }}
                                                @endif
                                                , {{ $event->start_date->format('Y') }}
                                            </a>
                                        </li>
                                        <li><span>Time:</span>
                                            <a href="#">
                                                @if ($event->start_time == $event->end_time)
                                                    {{ date('h:i A', strtotime($event->start_time)) }}
                                                @else
                                                {{ date('h:i A', strtotime($event->start_time)) }} - {{ date('h:i A', strtotime($event->end_time)) }}
                                                @endif

                                            </a>
                                        </li>
                                        <li><span>Venue:</span>
                                            <a href="#">
                                                <i class="flaticon-home"></i>
                                                {{ $event->venue }}
                                            </a>
                                        </li>
									</ul>
								</div>

								<h3>{{ $event->title }}</h3>

								{!! $event->desc !!}

							</div>


						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End News Details Area -->
@endsection
