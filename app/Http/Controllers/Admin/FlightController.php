<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airplane;
use App\Models\AirStrip;
use App\Models\City;
use App\Models\Flight;
use App\Models\Seat;
use App\Models\Ticket;
use App\Models\TypeOfSeat;
use App\Models\TypeOfTicket;
use Illuminate\Http\Request;


class FlightController extends Controller
{
    public function flightall(){

        $data=Flight::orderBy("id","desc")
            ->paginate(20);

        return view("admin.flight.flight-all",[
            "data"=>$data
        ]);
    }

    public function flightview(Flight $flight,Request $request){
        $typeofticket_id=$request->get("typeofticket_id");
        $maxprice=$request->get("maxprice");
        $minprice=$request->get("minprice");
        $type=TypeOfTicket::with("Flight")
            ->FlightFilter($flight->id)
            ->get();
        if($typeofticket_id!=0){
            $data=Ticket::with("TypeOfTicket")
                ->TicketFilter($typeofticket_id)
                ->MaxPrice($maxprice)
                ->MinPrice($minprice)
                ->paginate(20);
        }else{
            $data = Ticket::with("TypeOfTicket")
                ->TypeOfTicketFilter($type)
                ->MaxPrice($maxprice)
                ->MinPrice($minprice)
                ->orderBy("id","desc")
                ->paginate(20);
        }


        return view("admin.flight.flight-view",[
            "type" => $type,
            "data"=>$data,
            "flight"=>$flight
        ]);
    }



    public function flightedit(Flight $flight){
        $airplane= Airplane::orderBy("id","desc")
            ->get();
        $airstrip = AirStrip::orderBy("id","desc")
            ->get();
        $cities=City::orderBy("id","desc")
        ->get();

        return view("admin.flight.flight-edit",[
            "flight"=>$flight,
            "cities"=>$cities,
            "airplane"=>$airplane,
            "airstrip"=>$airstrip
        ]);
    }

    public function flightupdate(Flight $flight,Request $request){
        $request->validate([
            "takeoftime"=>"required",
            "landingtime"=>"required",
            "description"=>"required|string|min:5",
            "airstrip_id"=>"required",
//            "airplane_id"=>"required"

        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=> "Phải nhập vào là một chuỗi văn bản",
            "min"=> "Phải nhập :attribute  tối thiểu :min",
            "mimes"=>"Vui lòng nhập đúng định dạng ảnh"
        ]);
        try{
            $flight->update([
            "takeoftime"=>$request->get("takeoftime"),
            "landingtime"=>$request->get("landingtime"),
                "description"=>$request->get("description"),
                "airstrip_id"=>$request->get("airstrip_id"),
//                "airplane_id"=>$request->get("airplane_id")
            ]);
//            $airplane=Airplane::where("id",$flight->airplane_id)
//                ->get();
//            $flight->update(["totalticket"=>$airplane[0]->totalseat]);

            return redirect()->to("admin/flight/flight-all");
        }
        catch (\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }
    }

    public function flightadd(){
        $airplane= Airplane::orderBy("id","asc")
            ->get();
        $airstrip = AirStrip::orderBy("id","asc")
            ->get();

        return view("admin.flight.flight-add",[
            "airplane"=>$airplane,
            "airstrip"=>$airstrip
        ]);

    }
    public function flightcreate(Request $request){
        $request->validate([
            "takeoftime"=>"required",
            "landingtime"=>"required",
            "description"=>"required|string|min:5",
            "airstrip_id"=>"required",
            "airplane_id"=>"required"

        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=> "Phải nhập vào là một chuỗi văn bản",
            "min"=> "Phải nhập :attribute  tối thiểu :min",
            "mimes"=>"Vui lòng nhập đúng định dạng ảnh"
        ]);
//        try{
            $flight = Flight::create([
                "takeoftime"=>$request->get("takeoftime"),
                "landingtime"=>$request->get("landingtime"),
                "description"=>$request->get("description"),
                "totalticket"=>0,
                "airstrip_id"=>$request->get("airstrip_id"),
                "airplane_id"=>$request->get("airplane_id")
            ]);
            $airplane=Airplane::where("id",$flight->airplane_id)
                ->get();
            $flight->update(["totalticket"=>$airplane[0]->totalseat]);

            $typeofseat=TypeOfSeat::with("Airplane")
                ->AirplaneFilter($flight->airplane_id)
                ->get();

            $seat= Seat::with("TypeOfSeat")
                ->TypeOfSeatFilter($typeofseat)
                ->get();
            for($i=0;$i<$typeofseat->count();$i++){
                if($typeofseat[$i]->name=="VIP"){
                $typeofticket[]=TypeOfTicket::create([
                    "name"=>$typeofseat[$i]->name,
                    "totalticket"=>$typeofseat[$i]->totalseat,
                    "image"=>null,
                    "description"=>null,
                    "price"=>$request->get("vip"),
                    "flight_id"=>$flight->id,
                    "typeofseat_id"=>$typeofseat[$i]->id
                ]);
                }
                if($typeofseat[$i]->name=="NORMAL"){
                    $typeofticket[]=TypeOfTicket::create([
                        "name"=>$typeofseat[$i]->name,
                        "totalticket"=>$typeofseat[$i]->totalseat,
                        "image"=>null,
                        "description"=>null,
                        "price"=>$request->get("normal"),
                        "flight_id"=>$flight->id,
                        "typeofseat_id"=>$typeofseat[$i]->id
                    ]);
                }
                if($typeofseat[$i]->name=="CHEAP"){
                    $typeofticket[]=TypeOfTicket::create([
                        "name"=>$typeofseat[$i]->name,
                        "totalticket"=>$typeofseat[$i]->totalseat,
                        "image"=>null,
                        "description"=>null,
                        "price"=>$request->get("cheap"),
                        "flight_id"=>$flight->id,
                        "typeofseat_id"=>$typeofseat[$i]->id
                    ]);
                }
            }

            for($i=0;$i<$typeofseat->count();$i++){
                for($j=0;$j<$typeofticket[$i]->totalticket;$j++){
                    $ticket[]=Ticket::create([
                        "status"=>0,
                        "price"=>$typeofticket[$i]->price,
                        "typeofticket_id"=>$typeofticket[$i]->id,
                        "order_id"=>null,
                        "seat_id"=>null
                    ]);
                }

            }

            return redirect()->to("admin/flight/flight-all");
//        }
//        catch (\Exception $e){
//            return redirect()->back()->with("error",$e->getMessage());
//        }
    }





}
