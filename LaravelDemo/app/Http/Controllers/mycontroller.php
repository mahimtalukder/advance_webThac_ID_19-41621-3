<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    function viewCon()
    {
        return "<h1>Controller called</h1>";
    }
}
