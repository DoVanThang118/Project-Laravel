<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function hotelall(){
        return view("admin.hotel.hotel-all");
    }
    public function hoteladd(){
        return view("admin.hotel.hotel-add");
    }
    public function hoteledit(){
        return view("admin.hotel.hotel-edit");
    }
    public function hotelroomtypeadd(){
        return view("admin.hotel.hotel-room-type-add");
    }
    public function hotelroomtypeall(){
        return view("admin.hotel.hotel-room-type-all");
    }
    public function hotelroomtypeedit(){
        return view("admin.hotel.hotel-room-type-edit");
    }

}
