<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightListController extends Controller
{
    public function index()
    {
        return view('hotel-list');
    }
}
