<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function reservation(Request $request)
    {

    $name = $request->input('name');
    $tel = $request->input('tel');
    $email = $request->input('email');
    $room_num = $request->input('room_num');
    $guest_num = $request->input('guest_num');
    $start_date = $request->input('start_date');
    $end_date = $request->input('end_date');

    Mail::to('generalmanager@crystallakeresortoguta.com')->send(new ReservationMail($name, $tel, $email, $room_num, $guest_num, $start_date, $end_date));

    return 'Email was sent';

    if (count(Mail::failures()) > 0){
        Session::flash('error', "Event Creation Failed!!");
        return Redirect::back();
    } else {
        Session::flash('success', "Event Created Successfully!!");
        return Redirect::back();
    }
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
