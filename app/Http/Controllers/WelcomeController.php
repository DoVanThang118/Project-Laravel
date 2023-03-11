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
    public function welcome(){

        $city = City::all();
        return view("welcome",[
            "city"=>$city
        ]);
    }

    public function filter(Request $request)
    {
        $takeofcity_id = $request->get("takeofcity_id");
        $landingcity_id = $request->get("landingcity_id");
        $takeoftime = $request->get("takeoftime");
        $landingtime = $request->get("landingtime");
        $adults = $request->get("adults");
        $children = $request->get("children");



        if ($takeofcity_id != 0 && $landingcity_id != 0) {
            $asflight = AirStrip::AirStripFilter($landingcity_id, $takeofcity_id)
                ->pluck("id")->toArray();

            $flight = Flight::FlightAirStripFilter($asflight)
                ->LandingTimeFilter($landingtime)
                ->TakeofTimeFilter($takeoftime)
                ->orderBy("id", "desc")
                ->paginate(20);

            for($i=0;$i<$flight->count();$i++){
                $type[$i]=TypeOfTicket::with("Flight")
                    ->FlightFilter($flight[$i]->id)
                    ->pluck("id")->toArray();
                $ticket[$i] = Ticket::
                        TicketTypeFilter($type[$i])
                        ->TicketInStock()
                        ->get();
                if($ticket[$i]->count()>=$adults){
                    $data[]=$flight[$i];
                }
            }


            if(isset($data)){
                return view("flight-list", [
                    "data"=>$data,
                ]);
            }else{
                return redirect()->back();
            }





        }
    }

}
