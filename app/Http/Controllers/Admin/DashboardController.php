<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airplane;
use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $air = Airplane::orderBy("id","desc")
            ->paginate(20);
        $ticket=Ticket::all();

        $ticketinstock=Ticket::TicketInStock(null)->get();
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


        return view("admin.dashboard.dashboardhome",[
            "air" => $air,
            "ticket"=>$ticket,
            "ticketinstock"=>$ticketinstock,
            "ticketsold"=>$ticketsold,
            "revenue"=>$revenue,
            "expected"=>$expected
        ]);
    }

}
