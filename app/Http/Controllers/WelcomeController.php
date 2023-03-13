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
        return view("welcome", [
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
            "children" => "required|numeric|min:0",

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
        $children = $request->get("children");
        $direction = $request->get("direction");


        if ($takeofcity_id != $landingcity_id) {
            if ($direction == 1) {

                $asflight = AirStrip::AirStripFilter($landingcity_id, $takeofcity_id)
                    ->pluck("id")->toArray();

                $flight = Flight::FlightAirStripFilter($asflight)
                    ->TakeofTimeFilter($takeoftime)
                    ->orderBy("id", "desc")
                    ->paginate(20);

                for ($i = 0; $i < $flight->count(); $i++) {
                    $type[$i] = TypeOfTicket::with("Flight")
                        ->FlightFilter($flight[$i]->id)
                        ->pluck("id")->toArray();
                    $ticket[$i] = Ticket::
                    TicketTypeFilter($type[$i])
                        ->TicketInStock()
                        ->get();
                    if ($ticket[$i]->count() >= $adults) {
                        $data[] = $flight[$i];
                    }
                }

                if (isset($data)) {
                    return view("flight-list", [
                        "data" => $data,
                    ])->with("success", "Success");

                } else {

                    $flight = Flight::FlightAirStripFilter($asflight)
                        ->orderBy("id", "desc")
                        ->paginate(20);
                    for ($i = 0; $i < $flight->count(); $i++) {
                        $type[$i] = TypeOfTicket::with("Flight")
                            ->FlightFilter($flight[$i]->id)
                            ->pluck("id")->toArray();
                        $ticket[$i] = Ticket::
                        TicketTypeFilter($type[$i])
                            ->TicketInStock()
                            ->get();
                        if ($ticket[$i]->count() >= $adults) {
                            $data[] = $flight[$i];
                        }
                    }
                    if (isset($data)) {
                        return view("flight-list", [
                            "data" => $data,
                        ])->with("success", "The entered time could not be found. We recommend some similar flights");
                    } else {
                        return redirect()->back()->with("error","Please Search Again");
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
                    ->paginate(20);
                $flight2 = Flight::FlightAirStripFilter($asflight2)
                    ->TakeofTimeFilter($returnday)
                    ->orderBy("id", "desc")
                    ->paginate(20);

                for ($i = 0; $i < $flight->count(); $i++) {
                    $type[$i] = TypeOfTicket::with("Flight")
                        ->FlightFilter($flight[$i]->id)
                        ->pluck("id")->toArray();
                    $ticket[$i] = Ticket::
                    TicketTypeFilter($type[$i])
                        ->TicketInStock()
                        ->get();
                    if ($ticket[$i]->count() >= $adults) {
                        $data[] = $flight[$i];
                    }
                }
                for ($i = 0; $i < $flight2->count(); $i++) {
                    $type2[$i] = TypeOfTicket::with("Flight")
                        ->FlightFilter($flight2[$i]->id)
                        ->pluck("id")->toArray();
                    $ticket2[$i] = Ticket::
                    TicketTypeFilter($type2[$i])
                        ->TicketInStock()
                        ->get();
                    if ($ticket2[$i]->count() >= $adults) {
                        $data2[] = $flight2[$i];
                    }
                }

                if (isset($data)||isset($data2)) {
                    return view("flight-list", [
                        "data" => $data,
                        "data2"=>$data2
                    ])->with("success", "Success");

                } else {

                    $flight = Flight::FlightAirStripFilter($asflight)
                        ->orderBy("id", "desc")
                        ->paginate(20);
                    $flight2 = Flight::FlightAirStripFilter($asflight2)
                        ->orderBy("id", "desc")
                        ->paginate(20);

                    for ($i = 0; $i < $flight->count(); $i++) {
                        $type[$i] = TypeOfTicket::with("Flight")
                            ->FlightFilter($flight[$i]->id)
                            ->pluck("id")->toArray();
                        $ticket[$i] = Ticket::
                        TicketTypeFilter($type[$i])
                            ->TicketInStock()
                            ->get();
                        if ($ticket[$i]->count() >= $adults) {
                            $data[] = $flight[$i];
                        }
                    }
                    for ($i = 0; $i < $flight2->count(); $i++) {
                        $type2[$i] = TypeOfTicket::with("Flight")
                            ->FlightFilter($flight2[$i]->id)
                            ->pluck("id")->toArray();
                        $ticket2[$i] = Ticket::
                        TicketTypeFilter($type2[$i])
                            ->TicketInStock()
                            ->get();
                        if ($ticket2[$i]->count() >= $adults) {
                            $data2[] = $flight2[$i];
                        }
                    }
                    if (isset($data)&&isset($data2)) {
                        return view("flight-list", [
                            "data" => $data,
                            "data2"=>$data2
                        ])->with("success", "The entered time could not be found. We recommend some similar flights");
                    }
                    else{
                        return redirect()->back();
                    }

                }

            }


        }

    }
}
