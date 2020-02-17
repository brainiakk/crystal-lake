<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;
use Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function reservation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'tel' => 'required',
            'email' => 'required|email',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'guest_num' => 'required',
        ],
        [
        'name.required' => 'Name Field is required',
        'tel.required'  => 'Please provide a valid Phone Number',
        'email.required'  => 'Please provide a valid email address',
        'email.email'  => 'Email address provided is not valid',
        'start_date.required'  => 'Please provide Your date of arrival',
        'guest_num.required'  => 'Please provide number of guest',
        'end_date.required'  => 'Please provide Your date of departure',
        'start_date.date'  => 'Please provide a valid date of arrival',
        'end_date.date'  => 'Please provide a valid date of departure',
        ]);

        if ($validator->fails()) {
            return redirect('/reservation')
                        ->withErrors($validator)
                        ->withInput();
        }

    $name = $request->input('name');
    $tel = $request->input('tel');
    $email = $request->input('email');
    $guest_num = $request->input('guest_num');
    $start_date = $request->input('start_date');
    $end_date = $request->input('end_date');
    // $standard = $request->input('standard_num');
    // $executive = $request->input('executive_num');
    // $deluxe = $request->input('deluxe_num');
    // $studio = $request->input('studio_num');
    // $royal = $request->input('royal_num');
    // $diplomatic = $request->input('diplomatic_num');
    // $bedroom = $request->input('bedroom_num');

    if(!is_null($request->input('standard_num')) && $request->input('standard_num') != ""){
        $standard = $request->input('standard_num');
    }else{
        $standard = 0;
    }

    if(!is_null($request->input('executive_num')) && $request->input('executive_num') != ""){
        $executive = $request->input('executive_num');
    }else{
        $executive = 0;
    }

    if(!is_null($request->input('studio_num')) && $request->input('studio_num') != ""){
        $studio = $request->input('studio_num');
    }else{
        $studio = 0;
    }

    if(!is_null($request->input('deluxe_num')) && $request->input('deluxe_num') != ""){
        $deluxe = $request->input('deluxe_num');
    }else{
        $deluxe = 0;
    }

    if(!is_null($request->input('royal_num')) && $request->input('royal_num') != ""){
        $royal = $request->input('royal_num');
    }else{
        $royal = 0;
    }

    if(!is_null($request->input('diplomatic_num')) && $request->input('diplomatic_num') != ""){
        $diplomatic = $request->input('diplomatic_num');
    }else{
        $diplomatic = 0;
    }

    if(!is_null($request->input('bedroom_num')) && $request->input('bedroom_num') != ""){
        $bedroom = $request->input('bedroom_num');
    }else{
        $bedroom = 0;
    }

    Mail::to('reservations@crystallakeresortoguta.com')->send(new ReservationMail($name, $tel, $email, $guest_num, $start_date, $end_date, $standard, $deluxe, $studio, $royal, $diplomatic, $executive, $bedroom));

    if (count(Mail::failures()) > 0){
        Session::flash('error', "Email was not sent!!");
        return Redirect::back();
    } else {
        Session::flash('success', "Email was sent successfully!!");
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
