<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.index');
    }
    
    public function about() {
        return view('pages.about');
    }

    public function events() {
        return view('pages.events');
    }

    public function weddings() {
        return view('pages.weddings');
    }

    public function activities() {
        return view('pages.activities');
    }

    public function funspots() {
        return view('pages.funspots');
    }

    public function booking()
    {
        return view('pages.booking');
    }

    public function meetings()
    {
        return view('pages.meetings');
    }

    public function socialgatherings()
    {
        return view('pages.socialgatherings');
    }

    public function singles()
    {
        return view('pages.singles');
    }

    public function groups()
    {
        return view('pages.groups');
    }

    public function food()
    {
        return view('pages.food');
    }

    public function conference()
    {
        return view('pages.conference');
    }

    public function family()
    {
        return view('pages.family');
    }
}
