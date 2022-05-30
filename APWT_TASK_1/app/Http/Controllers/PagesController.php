<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('page.index.landing_page');
    }

    public function service()
    {
        return view('product.service');
    }
}
