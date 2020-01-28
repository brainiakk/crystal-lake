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
    
    public function standard()
    {
        return view('pages.standard');
    }

}
