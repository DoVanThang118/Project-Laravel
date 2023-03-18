<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airplane;
use App\Models\AirStrip;
use App\Models\City;
use App\Models\Flight;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\TypeOfTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(){

        $air = Airplane::orderBy("id","desc")
            ->paginate(20);
        $ticket=Ticket::all();
        $airstrip = AirStrip::orderBy("id","desc")->paginate(20);
        $cities= City::all();
        $flight=Flight::orderBy("id","desc")
            ->paginate(20);
        for($i=0;$i<$flight->count();$i++){
            $data[]=Ticket::leftJoin("typeoftickets","typeoftickets.id","=","tickets.typeofticket_id")
                ->leftJoin("flights","flights.id","=","typeoftickets.flight_id")
                ->where("flight_id",$flight[$i]->id)
                ->select(["tickets.*","typeoftickets.name as typeofticket_name"])
                ->get();

            $t=Ticket::leftJoin("typeoftickets","typeoftickets.id","=","tickets.typeofticket_id")
                ->leftJoin("flights","flights.id","=","typeoftickets.flight_id")
                ->where("flight_id",$flight[$i]->id)
                ->where("order_id",null)
                ->select(["tickets.*","typeoftickets.name as typeofticket_name"])
                ->get();
            $t->count();
            $f[$i]=[$flight[$i],$t->count()];

        }
//        dd($f);


        $ticketinstock=Ticket::TicketInStock()->get();
        $ticketsold=Ticket::where("order_id",">",0)->get();
        $order=Order::all();
        $revenue=0;
        for ($i=0;$i<$ticketsold->count();$i++){
            $revenue+=$order[$i]->totalmoney;
        }
        $expected=0;
        for ($i=0;$i<$ticketinstock->count();$i++){
            $expected+=$ticketinstock[$i]->price;
        }

        if(!isset($f)){
            $f=[];
        }
        return view("admin.dashboard.dashboardhome",[
            "air" => $air,
            "ticket"=>$ticket,
            "ticketinstock"=>$ticketinstock,
            "ticketsold"=>$ticketsold,
            "revenue"=>$revenue,
            "expected"=>$expected,
            "flight"=>$flight,
            "f"=>$f

        ]);
    }

}
