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
        $request->validate([
            "vipqty" => "required|numeric|min:0",
            "normalqty" => "required|numeric|min:0",
            "cheapqty" => "required|numeric|min:0"
        ]);
        $vipqty = $request->get("vipqty");
        $normalqty = $request->get("normalqty");
        $cheapqty = $request->get("cheapqty");
        $cart = session()->has("cart") && is_array(session("cart")) ? session("cart") : [];
        $typevip = TypeOfTicket::with("Flight")
            ->FlightFilter($flight->id)->where("name", "VIP")->get();
        $typenormal = TypeOfTicket::with("Flight")
            ->FlightFilter($flight->id)->where("name", "NORMAL")->get();
        $typecheap = TypeOfTicket::with("Flight")
            ->FlightFilter($flight->id)->where("name", "CHEAP")->get();
        if ($vipqty > 0) {
            $ticketvipselect = Ticket::with("TypeOfTicket")
                ->TicketFilter($typevip[0]->id)->TicketInStock()->limit($request->get("vipqty"))->orderBy("id","desc")->get();
        }
        if ($normalqty > 0) {
            $ticketnormalselect = Ticket::with("TypeOfTicket")
                ->TicketFilter($typenormal[0]->id)->TicketInStock()->limit($request->get("normalqty"))->orderBy("id","desc")->get();
        }
        if ($cheapqty > 0) {
            $ticketcheapselect = Ticket::with("TypeOfTicket")
                ->TicketFilter($typecheap[0]->id)->TicketInStock()->limit($request->get("cheapqty"))->orderBy("id","desc")->get();
        }
        if (isset($ticketvipselect)) {
            for ($i = 0; $i < $ticketvipselect->count(); $i++) {
                $ticket[] = $ticketvipselect[$i];
            }
        }
        if (isset($ticketnormalselect)) {
            for ($i = 0; $i < $ticketnormalselect->count(); $i++) {
                $ticket[] = $ticketnormalselect[$i];
            }
        }
        if (isset($ticketcheapselect)) {
            for ($i = 0; $i < $ticketcheapselect->count(); $i++) {
                $ticket[] = $ticketcheapselect[$i];
            }
        }
//        dd($ticket);

        $cart = session()->has("cart") && is_array(session("cart")) ? session("cart") : [];

        if(isset($ticket)){
        for ($i = 0; $i <count($ticket); $i++) {
            $flag = true;
            if (in_array($ticket[$i], $cart)) {
                $flag = false;
            }
            if ($flag) {
                $cart[] = $ticket[$i];
            }

        }
            session(["cart" => $cart]);
            return redirect()->to("/user/cart");
        }
    }

    public function shopcart(){
        $cart=session()->has("cart")&&is_array(session("cart"))?session("cart"):[];
        $grand_total=0;
        $can_checkout=true;
        foreach ($cart as $item){
            $grand_total+=$item->price;
            if($can_checkout&&count($cart)==0){
                $can_checkout=false;
            }
        }
        return view("user.cart",[
            "grand_total"=>$grand_total,
            "cart"=>$cart,
            "can_checkout"=>$can_checkout
        ]);
    }


    public function checkout(){
        $cart=session()->has("cart")&&is_array(session("cart"))?session("cart"):[];
        if(count($cart)==0){
            return redirect()->to("user/cart");
        }
        $grand_total=0;
        foreach ($cart as $item){
            $grand_total+=$item->price;
        }
        return view("user.checkout",[
            "grand_total"=>$grand_total,
            "cart"=>$cart
        ]);
    }
    public function remove(Ticket $ticket){
        $cart = session()->has("cart") && is_array(session("cart"))?session("cart"):[];
        foreach ($cart as $key=>$item){
            if($item->id == $ticket->id){
                unset($cart[$key]);
                break;
            }
        }
        session(["cart"=>$cart]);
        return redirect()->back();
    }



}
