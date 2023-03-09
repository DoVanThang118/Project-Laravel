<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function welcome(){
        return view("welcome");
    }

}
