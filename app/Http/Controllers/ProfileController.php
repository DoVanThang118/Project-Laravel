<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        $user= auth()->user();
        $order=Order::where("user_id",$user->id)->get();

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

}
