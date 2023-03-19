<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\TypeOfTicket;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        $user= auth()->user();
        $order=Order::where("user_id",$user->id)->orderBy("id","desc")->get();

//        dd($order);
//        dd($user);
        return view('user.profile',[
            "user"=>$user,
            "order"=>$order,
        ]);
    }

    public function edit()
    {
        return view('user.profile-edit');
    }
    public function detailorder(Order $order){
        $user= auth()->user();
        $ticket=Ticket::where("order_id",$order->id)->get();
//        dd($order);
//        dd($user);
        return view('user.detailorder',[
            "user"=>$user,
            "order"=>$order,
            "ticket"=>$ticket
        ]);
    }
    public function ticketedit(Ticket $ticket){

        $user= auth()->user();

        return view('user.ticket-edit',[
            "user"=>$user,
            "ticket"=>$ticket
        ]);

    }
    public function ticketupdate(Request $request,Ticket $ticket){
        $request->validate([
            "name"=>"required|string|min:3",
            "phone"=>"required|string|min:3",
            "cccd"=>"required|string|min:3",
            "birthday"=>"required",

        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=> "Phải nhập vào là một chuỗi văn bản",
            "min"=> "Phải nhập :attribute  tối thiểu :min",
            "mimes"=>"Vui lòng nhập đúng định dạng ảnh"
        ]);
        try{
            $type=TypeOfTicket::where("id",$ticket->typeofticket_id)->first();
            $flight=Flight::where("id",$type->flight_id)->first();
//            dd(now()->addDays(2));
            if($flight->takeoftime>=now()->addDays(2)){
                $ticket->update([
                    "name"=>$request->get("name"),
                    "phone"=>$request->get("phone"),
                    "cccd"=>$request->get("cccd"),
                    "birthday"=>$request->get("birthday"),

                ]);
                $user= auth()->user();
                $order=Order::where("id",$ticket->order_id)->first();
//
//                return view('user.ticket-edit',[
//                    "user"=>$user,
//                    "order"=>$order,
//                    "ticket"=>$ticket
//                ])->with("success","DONE");

                return redirect()->back()->with("success","SUCCESS");

            }else{
                return redirect()->back()->with("error","FAILED");
            }

        }catch (\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }

    }



}
