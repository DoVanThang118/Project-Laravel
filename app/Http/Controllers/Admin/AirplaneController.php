<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AirplaneController extends Controller
{
    public function airplaneall(){
        return view("admin.airplane.airplane-all");
    }
    public function airplaneadd(){
        return view("admin.airplane.airplane-add");
    }
    public function airplaneedit(){
        return view("admin.airplane.airplane-edit");
    }
    public function seattypeadd(){
        return view("admin.airplane.seat-type-add");
    }
    public function seattypeall(){
        return view("admin.airplane.seat-type-all");
    }
    public function seattypeedit(){
        return view("admin.airplane.seat-type-edit");
    }

}
