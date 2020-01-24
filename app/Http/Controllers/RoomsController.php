<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function standard()
    {
        return view('pages.standard');
    }

    public function executive()
    {
        return view('pages.executive');
    }

    public function studio()
    {
        return view('pages.studio');
    }

    public function deluxe()
    {
        return view('pages.deluxe');
    }

    public function royal()
    {
        return view('pages.royal');
    }

    public function diplomatic()
    {
        return view('pages.diplomatic');
    }

    public function two_bedroom()
    {
        return view('pages.2bedroom');
    }
    
}
