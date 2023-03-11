<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Ticket;
use App\Models\TypeOfTicket;
use Illuminate\Http\Request;

class TicketListController extends Controller
{
    public function index(Flight $flight,Request $request)
    {
        $ticket = Ticket::all();

        $typeofticket_id = $request->get("typeofticket_id");
        $type=TypeOfTicket::with("Flight")
            ->FlightFilter($flight->id)
            ->get();
        if($typeofticket_id!=0){
            $data=Ticket::with("TypeOfTicket")
                ->TicketFilter($typeofticket_id)
                ->get();
        }else{
            $data = Ticket::with("TypeOfTicket")
                ->TypeOfTicketFilter($type)
                ->orderBy("id","desc")
                ->get();
        }
        return view('ticket-list',[
            "ticket"=>$ticket,
            "type"=>$type,
            "data"=>$data
        ]);
    }
}
