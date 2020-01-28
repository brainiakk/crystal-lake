@extends('layouts.master')

@section('title', 'Crystal Lake | Home')

@section('bs-cdn')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section('content')
<div class="row my-4">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-title mt-3"><h4 class="text-center">Room Reservation</h4></div>
            <div class="card-body">
            <form action="" method="POST" class="m-2 px-5">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="tel">Phone Number</label>
                    <input type="text" class="form-control" name="tel">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="room_num">Number of Rooms</label>
                    <input type="text" class="form-control" name="room_num">
                </div>
                <div class="form-group">
                    <label for="start_date">Arrival Date</label>
                    <input type="text" name="start_date" class="form-control start_date" data-provide='datepicker'>
                    {{-- <div class="col-md-12 date_show" style="height: 90%;"></div> --}}
                </div>
                <div class="form-group">
                    <label for="end_date">Departure Date</label>
                    <input type="text" name="end_date" class="form-control end_date" data-provide='datepicker'>
                </div>
                <div class="form-group">
                    <label for="guest_num">Number of Guests</label>
                    <input type="text" class="form-control" name="guest_num">
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