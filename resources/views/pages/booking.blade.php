@extends('layouts.master')

@section('title', 'Crystal Lake | Room Reservation')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Make a Reservation</h2>
            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li>Reservation</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Check Area -->
{{--  <div class="checks-area ptb-100">
    <div class="container">
        <form class="check-form">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="check-content">
                        <p>Arrival Date</p>
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker-1">
                                <i class="flaticon-calendar"></i>
                                <input type="text" class="form-control" placeholder="29/02/2020">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="check-content">
                        <p>Departure Date</p>
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker-2">
                                <i class="flaticon-calendar"></i>
                                <input type="text" class="form-control" placeholder="29/02/2020">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-th"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="check-content">
                                <p>Adults</p>
                                <div class="form-group">
                                    <select name="adult" class="form-content">
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="check-content">
                                <p>Children</p>
                                <div class="form-group">
                                    <select name="adult" class="form-content">
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="check-btn check-content mb-0">
                        <button class="default-btn">
                            Check Availability
                            <i class="flaticon-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>  --}}
<!-- End Check Section -->

<!-- Start Book Table Area -->
<section class="book-table-area-three">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="books-froms-wrap">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="book-from books-froms">
                                <h3>Book your Table</h3>
                                <form action="{{ route('send.booking') }}" method="POST">

                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li style="list-style-type:none; ">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (Session::has('success') )
                                    <div class="alert alert-info alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ Session::get('success') }}</strong>
                                    </div>
                                    @elseif (Session::has('error') )
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ Session::get('error') }}</strong>
                                    </div>
                                    @endif
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel">Phone Number</label>
                                        <input type="text" class="form-control" name="tel" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-box">
                                            <i class='bx bx-user'></i>
                                            <select class="form-control">
                                                <option value="5">Number of  People</option>
                                                <option value="1">5</option>
                                                <option value="2">10</option>
                                                <option value="0">15</option>
                                                <option value="3">20</option>
                                                <option value="4">25</option>
                                                <option value="5">30</option>
                                                <option value="6">35</option>
                                                <option value="7">40</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br/>
                                    <hr>
                                    <div class="form-group">
                                      <div class="col-md-12"><h4 class="text-center" style="font-family: sans-serif; font-size: 18px;">Room Category</h4></div>
                                      <div class="col-md-12"><p class="text-center" style="font-family: sans-serif; font-size: 14px;">Select a Room Type and enter the Number of Rooms below it.</p></div>
                                    <hr>
                                      <div class="row">
                                      <div class="col-md-6 col-xs-12">
                                            <input class="form-check-input" type="checkbox" value="1" name="standard" id="standard">
                                            <label class="form-check-label" style="font-size: 15px;" for="standard">
                                                Standard
                                            </label>
                                            <input min="0" type="number" class="form-control" id="standard-input" placeholder="0" name="standard_num" disabled>
                                      </div>
                                      <div class="col-md-6 col-xs-12">
                                            <input class="form-check-input" type="checkbox" value="1" name="deluxe" id="deluxe">
                                            <label class="form-check-label" style="font-size: 15px;" for="deluxe">
                                                Deluxe
                                            </label>
                                        <input min="0" type="number" class="form-control" id="deluxe-input" placeholder="0" name="deluxe_num" disabled>
                                      </div>
                                      <div class="col-md-4 col-xs-12">
                                            <input class="form-check-input" type="checkbox" value="1" id="executive" name="executive">
                                            <label class="form-check-label" style="font-size: 15px;" for="executive">
                                                Executive
                                            </label>
                                        <input min="0" type="number" class="form-control" id="executive-input" placeholder="0" name="executive_num" disabled>
                                    </div>
                                    </div>
                                      </div>
                                    <br/>
                                    <div class="form-group">
                                      <div class="col-md-4 col-sm-12">
                                            <input class="form-check-input" type="checkbox" value="1" name="studio" id="studio">
                                            <label class="form-check-label" style="font-size: 15px;" for="studio">
                                                Studio
                                            </label>
                                            <input min="0" type="number" class="form-control" id="studio-input" placeholder="0" name="studio_num" disabled>
                                            </div>
                                      <div class="col-md-4 col-sm-12">
                                            <input class="form-check-input" type="checkbox" value="1" name="royal" id="royal">
                                            <label class="form-check-label" style="font-size: 15px;" for="royal">
                                                Royal
                                            </label>
                                        <input min="0" type="number" class="form-control" id="royal-input" placeholder="0" name="royal_num" disabled>
                                    </div>
                                      <div class="col-md-4 col-sm-12">
                                            <input class="form-check-input" type="checkbox" value="1" id="diplomatic" name="diplomatic">
                                            <label class="form-check-label" style="font-size: 15px;" for="diplomatic">
                                                Diplomatic
                                            </label>
                                        <input min="0" type="number" class="form-control" id="diplomatic-input" placeholder="0" name="diplomatic_num" disabled>
                                    </div>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                      <div class="col-md-4 col-sm-12">
                                            <input class="form-check-input" type="checkbox" value="1" id="bedroom" name="bedroom">
                                            <label class="form-check-label" style="font-size: 15px;" for="bedroom">
                                                2 Bedroom
                                            </label>
                                        <input min="0" type="number" class="form-control" id="bedroom-input" placeholder="0" name="bedroom_num" disabled>
                                    </div>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <div class="select-box">
                                            <i class='bx bx-calendar'></i>
                                            <div class="input-group date" id="datetimepicker-3">
                                                <input type="text" class="form-control" placeholder="Date">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-box">
                                            <i class='bx bx-calendar'></i>
                                            <select class="form-control">
                                                <option value="1">Time</option>
                                                <option value="2">09.00 AM To 10.00 AM</option>
                                                <option value="0">10.00 AM To 11.00 AM</option>
                                                <option value="3">11.00 AM To 12.00 PM</option>
                                                <option value="4">12.00 PM To 01.00 PM</option>
                                                <option value="5">01.00 PM To 03.00 PM</option>
                                                <option value="6">04.00 PM To 06.00 PM</option>
                                                <option value="7">07.00 PM To 10.00 PM</option>
                                                <option value="8">10.00 PM To 11.00 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="select-box">
                                            <i class='bx bx-group'></i>
                                            <select class="form-control">
                                                <option value="5">Number of Table</option>
                                                <option value="1">01</option>
                                                <option value="1">01</option>
                                                <option value="1">01</option>
                                                <option value="1">01</option>
                                                <option value="1">01</option>
                                                <option value="1">01</option>
                                                <option value="1">01</option>
                                                <option value="1">01</option>
                                                <option value="1">01</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="default-btn">
                                        Find A Table
                                        <i class="flaticon-right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  Book Table Area -->

<!-- Start Booking Area -->
<section class="bokking-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Booking</span>
            <h2>Direct booking benefits</h2>
        </div>
        <div class="row">
            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#exampleModalCenter-1" data-toggle="modal">
                        <i class="book-icon flaticon-online-booking"></i>
                        <span class="booking-title">Free cost</span>
                        <h3>No booking fee</h3>
                    </a>
                    <div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">No booking fee</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="book.html" class="default-btn">
                                        Book Now
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#exampleModalCenter-2" data-toggle="modal">
                        <i class="book-icon flaticon-podium"></i>
                        <span class="booking-title">Free cost</span>
                        <h3>Best rate guarantee</h3>
                    </a>
                    <div class="modal fade" id="exampleModalCenter-2" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Best rate guarantee</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="book.html" class="default-btn">
                                        Book Now
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#exampleModalCenter-3" data-toggle="modal">
                        <i class="book-icon flaticon-airport"></i>
                        <span class="booking-title">Free cost</span>
                        <h3>Reservations 24/7</h3>
                    </a>
                    <div class="modal fade" id="exampleModalCenter-3" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Reservations 24/7</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="book.html" class="default-btn">
                                        Book Now
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#exampleModalCenter-4" data-toggle="modal">
                        <i class="book-icon flaticon-slow"></i>
                        <span class="booking-title">Free cost</span>
                        <h3>High-speed Wi-Fi</h3>
                    </a>
                    <div class="modal fade" id="exampleModalCenter-4" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">High-speed Wi-Fi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="book.html" class="default-btn">
                                        Book Now
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#exampleModalCenter-5" data-toggle="modal">
                        <i class="book-icon flaticon-coffee-cup-1"></i>
                        <span class="booking-title">Free cost</span>
                        <h3>Free breakfast</h3>
                    </a>
                    <div class="modal fade" id="exampleModalCenter-5" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Free breakfast</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo neque eum tempore ducimus odit esse porro aperiam, delectus sunt omnis sed quod alias. Natus voluptate nemo explicabo fugiat quibusdam cupiditate quod alias. Natus voluptate.</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="book.html" class="default-btn">
                                        Book Now
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Booking Area -->
@endsection
