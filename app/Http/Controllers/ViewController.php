<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function hcmCity(){
        return view("user.destinations.hcm");
    }

    public function haNoi(){
        return view("user.destinations.hanoi");
    }

    public function phuquoc(){
        return view("user.destinations.phuQuoc");
    }

    public function danang(){
        return view("user.destinations.daNang");
    }

    public function dalat(){
        return view("user.destinations.daLat");
    }

    public function london(){
        return view("user.destinations.london");
    }

    public function paris(){
        return view("user.destinations.paris");
    }

    public function newyork(){
        return view("user.destinations.sanFrancisco");
    }

    public function bangkok(){
        return view("user.destinations.bangkok");
    }

    public function singapore(){
        return view("user.destinations.singapore");
    }

}
