<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use File;
use Auth;
use Image;
use Input;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::whereStatus('1')->paginate(5);
        return view('pages.events', ['events' => $events]);
    }

    public function adminIndex()
    {
        $events = Events::paginate(10);
        return view('admin.index', ['events' => $events]);
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

        $event = new Events;

        $event->user_id = \Auth::id();
        $event->title = $request->title;
        $event->desc = $request->desc;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->status = $request->status;
        $event->venue = $request->venue;
        $event->price = $request->price;

        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $filename = Carbon::now()->format('Y-m-d-H:i:s'). '.' . $image->getClientOriginalExtension();
            $location = public_path('event_images/') . $filename;

            Image::make($image)->save($location);

            $event->image = $filename;
        }


        if ($event->save()) {
            Session::flash('success', "Event Created Successfully!!");
            return Redirect::back();
        } else {
            Session::flash('error', "Event Creation Failed!!");
            return Redirect::back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show($eventId)
    {
        $event = Events::findOrFail($eventId);
        return view('pages.event')->withEvent($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit($eventId)
    {
        $event = Events::findOrFail($eventId);
        return view('admin.edit')->withEvent($event);

    }

    public function mail(Request $request)
    {

    $name = $request->input('name');
    $tel = $request->input('tel');
    $email = $request->input('email');
    $room_num = $request->input('room_num');
    $guest_num = $request->input('guest_num');
    $start_date = $request->input('start_date');
    $end_date = $request->input('end_date');

    Mail::to('generalmanager@crystallakeresortoguta.com')->send(new ReservationMail($name, $tel, $email, $room_num, $guest_num, $start_date, $end_date));

    if (count(Mail::failures()) > 0){
        Session::flash('error', "Email was not sent!!");
        return Redirect::back();
    } else {
        Session::flash('success', "Email was sent successfully!!");
        return Redirect::back();
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $eventId)
    {

        if (\Auth::user()->level) {
            $events = Events::findOrFail($eventId);
            $chk = Events::where('user_id', \Auth::id())->where('event_id', $eventId)->first();
            if (is_null($chk)) {
                Session::flash('error', "Event wasn't created by You!!");
                return Redirect::back();
            }else {
                $events = $chk;
            }
        } else {
            return redirect('/login');
        }


        if ($events->delete()) {
            Session::flash('success', "Event Deleted Successfully!!");
            return Redirect::back();
        } else {
            Session::flash('error', "Event Deletion Failed!!");
            return Redirect::back();
        }
    }
}
