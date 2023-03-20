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

        $order=Order::all();

        $allticket=Ticket::where("expiredtime","<=",now())->where("status",1)->get();
        if(!isset($allticket)){
            for($i=0;$i<$allticket->count();$i++){
                $orderdelete[] = Order::where("id",$allticket[$i]->order_id)->first();
                $type[]=TypeOfTicket::where("id",$allticket[$i]->typeofticket_id)->first();
            }

            for($i=0;$i<$allticket->count();$i++){
                $allticket[$i]->update([
                    "status"=>0,
                    "name"=>null,
                    "birthday"=>null,
                    "cccd"=>null,
                    "phone"=>null,
                    "order_id"=>null
                ]);
            }
            for($i=0;$i<count($orderdelete);$i++){
                $orderdelete[$i]->delete();
            }
            for($i=0;$i<count($type);$i++){
                $type[$i]->update([
                    "ticketinstock"=>$type[$i]->ticketinstock+1
                ]);
            }
        }




        $flight=Flight::orderBy("id","desc")
            ->paginate(20);
        $ticketinstock=Ticket::where("order_id",null)->get();
        $ticketsold=Ticket::where("order_id",">",0)->get();

//        for($i=0;$i<$flight->count();$i++){
//            $data[]=Ticket::leftJoin("typeoftickets","typeoftickets.id","=","tickets.typeofticket_id")
//                ->leftJoin("flights","flights.id","=","typeoftickets.flight_id")
//                ->where("flight_id",$flight[$i]->id)
//                ->select(["tickets.*","typeoftickets.name as typeofticket_name"])
//                ->get();
//
//            $t=Ticket::leftJoin("typeoftickets","typeoftickets.id","=","tickets.typeofticket_id")
//                ->leftJoin("flights","flights.id","=","typeoftickets.flight_id")
//                ->where("flight_id",$flight[$i]->id)
//                ->where("order_id",null)
//                ->select(["tickets.*","typeoftickets.name as typeofticket_name"])
//                ->get();
//            $t->count();
//            $f[$i]=[$flight[$i],$t->count()];
//        }
//        dd($f);



        $order=Order::all();
        $revenue=0;
        for ($i=0;$i<$order->count();$i++){
            $revenue+=$order[$i]->totalmoney;
        }
        $expected=0;
        for ($i=0;$i<$ticketinstock->count();$i++){
            $expected+=$ticketinstock[$i]->price;
        }


        return view("admin.dashboard.dashboardhome",[
            "air" => $air,
            "ticket"=>$ticket,
            "ticketinstock"=>$ticketinstock,
            "ticketsold"=>$ticketsold,
            "revenue"=>$revenue,
            "expected"=>$expected,
            "flight"=>$flight

        ]);
    }

}
