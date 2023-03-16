<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function hcmCity(){
        return view("user.destinations.hcm");
    }
}
