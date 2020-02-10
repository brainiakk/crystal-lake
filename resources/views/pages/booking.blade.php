@extends('layouts.master')

@section('title', 'Crystal Lake | Room Reservation')

@section('bs-cdn')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section('content')
<hr>
<div class="row my-4">
    <div class="col-md-6 offset-md-3 col-sm-12">
        <div class="card">
            <div class="card-title mt-3"><h4 class="text-center">Room Reservation</h4></div>
            <div class="card-body">
                
                

             <form action="{{ route('send.booking') }}" method="POST" class="m-2 px-5">

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
                <br/>
                <hr>
                <div class="form-group">
                  <div class="col-md-12"><h4 class="text-center" style="font-family: sans-serif; font-size: 18px;">Room Category</h4></div>
                  <div class="col-md-12"><p class="text-center" style="font-family: sans-serif; font-size: 14px;">Select a Room Type and enter the Number of Rooms below it.</p></div>
                <hr>
                  <div class="col-md-4 col-sm-12">
                        <input class="form-check-input" type="checkbox" value="1" name="standard" id="standard">
                        <label class="form-check-label" style="font-size: 15px;" for="standard">
                            Standard
                        </label>
                        <input min="0" type="number" class="form-control" id="standard-input" placeholder="0" name="standard_num" disabled>
                  </div>
                  <div class="col-md-4 col-sm-12">
                        <input class="form-check-input" type="checkbox" value="1" name="deluxe" id="deluxe">
                        <label class="form-check-label" style="font-size: 15px;" for="deluxe">
                            Deluxe
                        </label>
                    <input min="0" type="number" class="form-control" id="deluxe-input" placeholder="0" name="deluxe_num" disabled>
                  </div>
                  <div class="col-md-4 col-sm-12">
                        <input class="form-check-input" type="checkbox" value="1" id="executive" name="executive">
                        <label class="form-check-label" style="font-size: 15px;" for="executive">
                            Executive
                        </label>
                    <input min="0" type="number" class="form-control" id="executive-input" placeholder="0" name="executive_num" disabled>
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
                    <label for="start_date">Arrival Date</label>
                    <input type="text" name="start_date" class="form-control start_date" data-provide='datepicker' required autocomplete="off">
                    {{-- <div class="col-md-12 date_show" style="height: 90%;"></div> --}}
                </div>
                <div class="form-group">
                    <label for="end_date">Departure Date</label>
                    <input type="text" name="end_date" class="form-control end_date" data-provide='datepicker' required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="guest_num">Number of Guests</label>
                    <input type="text" class="form-control" name="guest_num" required>
                </div>
                <br>
                <div class="form-group" style="float:right">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
