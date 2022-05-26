<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('indexPage');
    }

    public function aboutMe()
    {
        return view('aboutMe');
    }
}
