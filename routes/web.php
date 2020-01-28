<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');
// Route::get('/mail', 'Reservation@mail');
Route::get('/rmail', 'ReservationController@reservation');
Route::get('/reservation', 'PagesController@booking');
Route::get('/about', 'PagesController@about');
Route::get('/events', 'EventsController@index');
Route::get('/events/{eventId}', 'EventsController@show');
Route::get('/weddings', 'PagesController@weddings');
Route::get('/activities', 'PagesController@activities');
Route::get('/funspots', 'PagesController@funspots');
Route::get('/rooms/standard', 'RoomsController@standard');
Route::get('/rooms/executive', 'RoomsController@executive');
Route::get('/rooms/studio', 'RoomsController@studio');
Route::get('/rooms/deluxe', 'RoomsController@deluxe');
Route::get('/rooms/royal', 'RoomsController@royal');
Route::get('/rooms/diplomatic', 'RoomsController@diplomatic');
Route::get('/rooms/2bedroom', 'RoomsController@two_bedroom');


/* Admin backend routes - CRUD for posts, categories, and approving/deleting submitted comments */
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('', function(){
        return view('admin.index');
    });
});

// Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
