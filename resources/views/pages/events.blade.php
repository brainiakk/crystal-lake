@extends('layouts.master')
@section('title', 'Crystal Lake | Events')
@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>News Grid</h2>
            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li>Events</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- End News Area -->
<section class="news-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Our Events</span>
            <h2>Events & Promos updates </h2>
        </div>
        <div class="row">
            @forelse ($events as $event)
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="news-img">
                        <a href="news-details.html">
                            <img src="{{ asset('assets/img/news/1.jpg') }}" alt="Image">
                        </a>
                        <div class="dates">
                            <span>HOTEL</span>
                        </div>
                    </div>
                    <div class="news-content-wrap">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="flaticon-user"></i>
                                    Admin
                                </a>
                            </li>
                            {{--  <li>
                                <a href="#">
                                    <i class="flaticon-conversation"></i>
                                    Comment
                                </a>
                            </li>  --}}
                        </ul>
                        <a href="news-details.html">
                            <h3>{{ $event->title }}</h3>
                        </a>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis.</p>
                        <a class="read-more" href="news-details.html">
                            Read More
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            {{--  <div class="col-lg-12">
                <div class="page-navigation-area">
                    <nav aria-label="Page navigation example text-center">
                        <ul class="pagination">
                           {{ $events->links() }}
                        </ul>
                    </nav>
                </div>
            </div>  --}}

            @empty
            <div class="alert alert-warning"><i class="flaticon-info"></i> Oops!! No Events or promos found.</div>

            @endforelse
            <div class="col-lg-12">
                <div class="page-navigation-area">
                    <nav aria-label="Page navigation example text-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link page-links" href="#">
                                    <i class='bx bx-chevrons-left'></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class='bx bx-chevrons-right'></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News Area -->
@endsection
