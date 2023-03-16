<?php

namespace App\Http\Controllers;

use App\Models\AirStrip;
use App\Models\City;
use App\Models\Flight;
use App\Models\Ticket;
use App\Models\TypeOfTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function welcome()
    {

        $city = City::all();
        return view("/welcome", [
            "city" => $city
        ]);
    }

    public function filter(Request $request)
    {
        $request->validate([
            "takeoftime" => "required",
//            "returnday"=>"required",
            "takeofcity_id" => "required|numeric|min:1",
            "landingcity_id" => "required|numeric|min:1",
            "direction" => "required|numeric|min:1",
            "adults" => "required|numeric|min:1",

        ], [
            "required" => "Vui lòng nhập thông tin",
            "string" => "Phải nhập vào là một chuỗi văn bản",
            "min" => "Phải nhập :attribute  tối thiểu :min",
            "mimes" => "Vui lòng nhập đúng định dạng ảnh"
        ]);
        $takeofcity_id = $request->get("takeofcity_id");
        $landingcity_id = $request->get("landingcity_id");
        $takeoftime = $request->get("takeoftime");
        $returnday = $request->get("returnday");
        $adults = $request->get("adults");
        $direction = $request->get("direction");


        if ($takeofcity_id != $landingcity_id) {

            if ($direction == 1) {
                $asflight = AirStrip::AirStripFilter($landingcity_id, $takeofcity_id)
                    ->pluck("id")->toArray();


                $flight = Flight::FlightAirStripFilter($asflight)
                    ->TakeofTimeFilter($takeoftime)
                    ->orderBy("id", "desc")
                    ->get();


                for ($i = 0; $i < $flight->count(); $i++) {
                    $type = TypeOfTicket::with("Flight")
                        ->FlightFilter($flight[$i]->id)
                        ->get();
                    $c=0;
                    foreach ($type as $t){
                        if($t->ticketinstock>=$adults){
                            $c++;
                        }
                    }
                    if($c!=0){
                        $data[]=$flight[$i];

                    }

                }


                if (isset($data)) {
                    return view("flight-list", [
                        "data" => $data,
                        "adults"=>$adults
                    ])->with("success", "Success");

                } else {

                    $flight = Flight::FlightAirStripFilter($asflight)
                        ->whereDate("takeoftime",">=",now())
                        ->orderBy("id", "desc")
                        ->get();
                    for ($i = 0; $i < $flight->count(); $i++) {
                        $type = TypeOfTicket::with("Flight")
                            ->FlightFilter($flight[$i]->id)
                            ->get();

                        $c=0;
                        foreach ($type as $t){
                            if($t->ticketinstock>=$adults){
                                $c++;
                            }
                        }
                        if($c!=0){
                            $data[]=$flight[$i];
                        }

                    }

                    if (isset($data)) {
                       return view("flight-list", [
                            "data" => $data,
                           "adults"=>$adults
                        ])->with("success", "The entered time could not be found. We recommend some similar flights");
                    } else {
                        return redirect()->back()->with("error","Flight not found please find again");
                    }

                }


            }

            if ($direction == 2) {

                $asflight = AirStrip::AirStripFilter($landingcity_id, $takeofcity_id)
                    ->pluck("id")->toArray();
                $landingcity_id2=$takeofcity_id;
                $takeofcity_id2=$landingcity_id;

                $asflight2=AirStrip::AirStripFilter($landingcity_id2, $takeofcity_id2)
                    ->pluck("id")->toArray();

                $flight = Flight::FlightAirStripFilter($asflight)
                    ->TakeofTimeFilter($takeoftime)
                    ->orderBy("id", "desc")
                    ->get();
                $flight2 = Flight::FlightAirStripFilter($asflight2)
                    ->TakeofTimeFilter($returnday)
                    ->orderBy("id", "desc")
                    ->get();

                for ($i = 0; $i < $flight->count(); $i++) {
                    $type = TypeOfTicket::with("Flight")
                        ->FlightFilter($flight[$i]->id)
                        ->get();
                    $c=0;
                    foreach ($type as $t){
                        if($t->ticketinstock>=$adults){
                            $c++;
                        }
                    }
                    if($c!=0){
                        $data[]=$flight[$i];

                    }

                }
                for ($i = 0; $i < $flight2->count(); $i++) {
                    $type = TypeOfTicket::with("Flight")
                        ->FlightFilter($flight2[$i]->id)
                        ->get();
                    $c=0;
                    foreach ($type as $t){
                        if($t->ticketinstock>=$adults){
                            $c++;
                        }
                    }
                    if($c!=0){
                        $data2[]=$flight2[$i];

                    }

                }

                if (isset($data)||isset($data2)) {
                    return view("flight-list", [
                        "data" => $data,
                        "data2"=>$data2,
                        "adults"=>$adults
                    ])->with("success", "Success");

                } else {

                    $flight = Flight::FlightAirStripFilter($asflight)
                        ->whereDate("takeoftime",">=",now())
                        ->orderBy("id", "desc")
                        ->paginate(20);
                    $flight2 = Flight::FlightAirStripFilter($asflight2)
                        ->whereDate("takeoftime",">=",now())
                        ->orderBy("id", "desc")
                        ->paginate(20);

                    for ($i = 0; $i < $flight->count(); $i++) {
                        $type = TypeOfTicket::with("Flight")
                            ->FlightFilter($flight[$i]->id)
                            ->get();
                        $c=0;
                        foreach ($type as $t){
                            if($t->ticketinstock>=$adults){
                                $c++;
                            }
                        }
                        if($c!=0){
                            $data[]=$flight[$i];

                        }

                    }
                    for ($i = 0; $i < $flight2->count(); $i++) {
                        $type = TypeOfTicket::with("Flight")
                            ->FlightFilter($flight2[$i]->id)
                            ->get();
                        $c=0;
                        foreach ($type as $t){
                            if($t->ticketinstock>=$adults){
                                $c++;
                            }
                        }
                        if($c!=0){
                            $data2[]=$flight2[$i];

                        }

                    }
                    if (isset($data)&&isset($data2)) {
                        return view("flight-list", [
                            "data" => $data,
                            "data2"=>$data2,
                            "adults"=>$adults
                        ])->with("success", "The entered time could not be found. We recommend some similar flights");
                    }
                    else{
                        return redirect()->back("error","Flight not found please find again");
                    }

                }

            }

        }

    }

    public function addToCart(Flight $flight,Request $request)
    {
        $t=$request->get("type");
        $qty=$request->get("qty");
        $type=TypeOfTicket::where("id",$t)->first();
        $grandtotal=$type->price*$qty;

        $cart=session()->has("cart")&&is_array(session("cart"))?session("cart"):[];
        $flag=true;


        foreach ($cart as $item){

            if($item->id==$type->id){
                $flag=false;
                break;
            }
        }
        if($flag){
            $cart[]=$type;
        }


        session(["cart"=>$cart]);

        return view("user.cart",[
            "qty"=>$qty,
            "grand_total"=>$grandtotal,
            "cart"=>$cart,


        ]);
    }

//    public function shopcart(){
//        $cart=session()->has("cart")&&is_array(session("cart"))?session("cart"):[];
//        $can_checkout=true;
//        foreach ($cart as $item){
//
//            if($can_checkout&&count($cart)==0){
//                $can_checkout=false;
//            }
//        }
//        return view("user.cart",[
//            "cart"=>$cart,
//            "can_checkout"=>$can_checkout
//        ]);
//    }


    public function checkout(Request $request){
        $cart=session()->has("cart")&&is_array(session("cart"))?session("cart"):[];
        $grand_total=$request->get("grand_total");
        $qty=$request->get("qty");

        if(count($cart)==0){
            return redirect()->to("/");
        }
        return view("user.payment",[
            "cart"=>$cart,
            "grand_total"=>$grand_total,
            "qty"=>$qty,
        ]);
    }



}
