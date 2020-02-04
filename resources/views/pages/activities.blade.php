@extends('layouts.master')

@section('title', 'Crystal Lake | Activities')

{{-- font awesome cdn --}}
@section('fa-cdn')
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
@endsection

@section('content')
<!--================ Breadcrumb ================-->
<div   class="milenia-breadcrumb text-center milenia-colorizer--scheme-light">
    <div class="container">
      <h1 class="milenia-page-title">Activities</h1>
    </div>
  </div>
  <!--================ End of Breadcrumb ================-->
  <br>
  <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <ul class="milenia-list--icon milenia-list--icon-big">
        <li>Golfing<i class="fas fa-golf-ball"></i></li>
        <li>Swimming<i class="milenia-font-icon-swimming"></i></li>
        <li>Zipline<i class="milenia-font-icon-car"></i></li>
        
      </ul>
    </div>
    div class="col-sm-4">
      <ul class="milenia-list--icon milenia-list--icon-big">
        <li>Gaming<i class="fas fa-gamepad"></i></li>
        <li>Soccer<i class="fas fa-futbol"></i></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul class="milenia-list--icon milenia-list--icon-big">
        <li>Water Sliding<i class="milenia-font-icon-pool"></i></li>
        <li>Lawn Tennis<i class="milenia-font-icon-tennis"></i></li>
        <li>Table Tennis<i class="fas fa-table-tennis"></i></li>

        
        <li>Golf Cart Riding<i class="milenia-font-icon-car"></i></li>
        <li>Quad Bike Riding<i class="milenia-font-icon-car"></i></li>
        <li>Wonder Lake Tours (Cruise Boats, Jet Skis and more)<i class="fas fa-ship"></i></li>
        <li>Picnicking<i class="milenia-font-icon-picnic"></i></li>
        <li>Fishing<i class="milenia-font-icon-fish"></i></li>
        <li>Bonfire Night Jamz<i class="milenia-font-icon-music"></i></li>
      </ul>
    </div>
  </div>
</div>
<br>
@endsection