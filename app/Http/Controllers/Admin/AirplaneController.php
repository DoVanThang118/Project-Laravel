<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airplane;
use App\Models\Seat;
use App\Models\TypeOfSeat;
use Illuminate\Http\Request;

class AirplaneController extends Controller
{
    public function airplaneall(){

        $data= Airplane::orderBy("id","asc")
            ->paginate(20);

        return view("admin.airplane.airplane-all",[
            "data"=>$data
        ]);
    }
    public function airplaneview(Airplane $airplane){

        $type = TypeOfSeat::with("Airplane")
            ->AirplaneFilter($airplane->id)
            ->get();

        $seat=Seat::with("TypeOfSeat")
            ->TypeOfSeatFilter($type)
            ->orderBy("typeofseat_id","desc")
            ->paginate(20);

        return view("admin.airplane.airplane-view",[
            "seat"=>$seat,
            "type"=>$type,
            "airplane"=>$airplane
        ]);

    }
    public function airplaneviewtype(Request $request){

        $typeofseat_id=$request->get("typeofseat_id");
        $type=TypeOfSeat::where("id",$typeofseat_id)->get();


        $seat=Seat::with("TypeOfSeat")
            ->TypeFilter($typeofseat_id)
            ->orderBy("id","desc")
            ->paginate(20);

        return view("admin.airplane.airplane-view-type",[
            "seat"=>$seat,
            "type"=>$type
        ]);

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
