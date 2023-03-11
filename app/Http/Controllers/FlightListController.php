<?php

namespace App\Http\Controllers;

use App\Models\AirStrip;
use App\Models\City;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightListController extends Controller
{
    public function index(Request $request)
    {
        $airstrip = AirStrip::all();
        $city = City::orderBy("id","asc")->get();

        $takeOfTime = $request->get("takeoftime");
        $landingTime = $request->get("landingtime");
        $takeOfCity_id = $request->get("takeofcity_id");
        $landingCity_id = $request->get("landingcity_id");
        $qty = $request->get("qty");

        if($takeOfCity_id!=0&&$landingCity_id!=0){
            $asflight = AirStrip::AirStripFilter($landingCity_id,$takeOfCity_id)
                ->pluck("id")->toArray();

            $data=Flight::FlightAirStripFilter($asflight)
                ->LandingTimeFilter($landingTime)
                ->TakeofTimeFilter($takeOfTime)
                ->orderBy("id","desc")
                ->paginate(20);
        }else{
            $data=Flight::LandingTimeFilter($landingTime)
                ->TakeofTimeFilter($takeOfTime)
                ->orderBy("id","desc")
                ->paginate(20);
        }

        return view('flight-list',[
            "data"=>$data,
            "airstrip"=>$airstrip,
            "city"=>$city,
            "qty"=>$qty
        ]);
    }
}
