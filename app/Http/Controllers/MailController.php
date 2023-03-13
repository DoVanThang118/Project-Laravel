<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Pusher\Pusher;

class MailController extends Controller
{
    public function checkout(){
        $cart = session()->has("cart") && is_array(session("cart"))?session("cart"):[];
        if(count($cart) == 0){
            return redirect()->to("/cart");
        }
        $grand_total = 0;
        foreach ($cart as $item){
            $grand_total += $item->price * $item->buy_qty;
        }
        return view("user.checkout",compact('cart',"grand_total"));
    }
    public function placeOrder(Request $request ){
        Auth::id();
        $request->validate([
            "amount"=>"required",
            "cardtype"=>"required",
            "cardnumber"=>"required",
            "expirydate"=>"required",
            "CVV"=>"required",
            "fullname"=>"required"
        ]);
        $cart = session()->has("cart") && is_array(session("cart"))?session("cart"):[];
        if(count($cart) == 0) return abort(404);
        $grand_total = 0;
        $can_checkout = true;
        foreach ($cart as $item){
            $grand_total += $item->price * $item->buy_qty;
            if($can_checkout && $item->qty ==0){
                $can_checkout =  false;
            }
        }
        if(!$can_checkout) return abort(404);

        $order = Order::create([
            "order_date"=>$request->get("order_date"),
            "grand_total"=>$request->get("totalmoney"),
            "shipping_address"=> $request->get("address"),
            "customer_tel"=>$request->get("phone"),
        ])->createItems();
        //  $order->createItems();
        return redirect()->to("/");
    }


    public function sendNotification(){
        $data['message'] = 'There is a new order';
        $data["order_id"] = ' ' ;
        notification("my-channel",'my-event',$data);
    }
}
