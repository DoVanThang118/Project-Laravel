<?php

namespace App\Http\Controllers;

use App\Mail\MailOrder;
use App\Models\AirStrip;
use App\Models\City;
use App\Models\Flight;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\TypeOfTicket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Pusher\Pusher;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Carbon\Carbon;

class WelcomeController extends Controller
{
    public function welcome()
    {
        session()->forget("cart");
        session()->forget('payment_info');
        $city = City::all();
        return view("/welcome", [
            "city" => $city
        ]);
    }

    public function filter(Request $request)
    {
        $request->validate([
            "takeoftime" => "required",
//            "returnday"=>"required",
            "takeofcity_id" => "required|numeric|min:1",
            "landingcity_id" => "required|numeric|different:takeofcity_id|min:1",
            "direction" => "required|numeric|min:1",
            "adults" => "required|numeric|min:1",

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
        $direction = $request->get("direction");


        try {
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

            if ($direction == 1) {

                $asflight = AirStrip::AirStripFilter($landingcity_id, $takeofcity_id)
                    ->pluck("id")->toArray();

                $flight = Flight::FlightAirStripFilter($asflight)
                    ->TakeofTimeFilter($takeoftime)
                    ->orderBy("id", "desc")
                    ->get();


                for ($i = 0; $i < $flight->count(); $i++) {
                    $type = TypeOfTicket::with("Flight")
                        ->FlightFilter($flight[$i]->id)
                        ->get();
                    $c=0;
                    foreach ($type as $t){
                        if($t->ticketinstock>=$adults){
                            $c++;
                        }
                    }
                    if($c!=0){
                        $data[]=$flight[$i];

                    }

                }
                $data2=[];

                if (isset($data)) {
                    return view("flight-list", [
                        "data" => $data,
                        "adults"=>$adults,
                        "data2"=>$data2
                    ])->with("success", "Success");

                } else {

                    $flight = Flight::FlightAirStripFilter($asflight)
                        ->whereDate("takeoftime",">=",$takeoftime)
                        ->whereDate("takeoftime","<=",Carbon::parse($takeoftime)->addDays(3))
                        ->orderBy("id", "desc")
                        ->get();
                    for ($i = 0; $i < $flight->count(); $i++) {
                        $type = TypeOfTicket::with("Flight")
                            ->FlightFilter($flight[$i]->id)
                            ->get();
                        $c=0;
                        foreach ($type as $t){
                            if($t->ticketinstock>=$adults){
                                $c++;
                            }
                        }
                        if($c!=0){
                            $data[]=$flight[$i];
                        }

                    }
                    $data2=[];
                    if (isset($data)) {
                        return view("flight-list", [
                            "data" => $data,
                            "adults"=>$adults,
                            "data2"=>$data2

                        ])->with("success", "The entered time could not be found. We recommend some similar flights");
                    } else {
                        return redirect()->back()->with("error","Flight not found please find again");
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
                    ->get();
                $flight2 = Flight::FlightAirStripFilter($asflight2)
                    ->TakeofTimeFilter($returnday)
                    ->orderBy("id", "desc")
                    ->get();

                for ($i = 0; $i < $flight->count(); $i++) {
                    $type = TypeOfTicket::with("Flight")
                        ->FlightFilter($flight[$i]->id)
                        ->get();
                    $c=0;
                    foreach ($type as $t){
                        if($t->ticketinstock>=$adults){
                            $c++;
                        }
                    }
                    if($c!=0){
                        $data[]=$flight[$i];
                    }

                }
                for ($i = 0; $i < $flight2->count(); $i++) {
                    $type = TypeOfTicket::with("Flight")
                        ->FlightFilter($flight2[$i]->id)
                        ->get();
                    $c=0;
                    foreach ($type as $t){
                        if($t->ticketinstock>=$adults){
                            $c++;
                        }
                    }
                    if($c!=0){
                        $data2[]=$flight2[$i];

                    }

                }

                if(!isset($data2)){
                    $flight2 = Flight::FlightAirStripFilter($asflight2)
                        ->whereDate("takeoftime",">=",$returnday)
                        ->whereDate("takeoftime","<=",Carbon::parse($returnday)->addDays(3))
                        ->orderBy("id", "desc")
                        ->paginate(20);
                    for ($i = 0; $i < $flight2->count(); $i++) {
                        $type = TypeOfTicket::with("Flight")
                            ->FlightFilter($flight2[$i]->id)
                            ->get();
                        $c=0;
                        foreach ($type as $t){
                            if($t->ticketinstock>=$adults){
                                $c++;
                            }
                        }
                        if($c!=0){
                            $data2[]=$flight2[$i];
                        }
                    }
                }

                if(!isset($data)){
                    $flight = Flight::FlightAirStripFilter($asflight)
                        ->whereDate("takeoftime",">=",$takeoftime)
                        ->whereDate("takeoftime","<=",Carbon::parse($takeoftime)->addDays(3))
                        ->orderBy("id", "desc")
                        ->paginate(20);
                    for ($i = 0; $i < $flight->count(); $i++) {
                        $type = TypeOfTicket::with("Flight")
                            ->FlightFilter($flight[$i]->id)
                            ->get();
                        $c=0;
                        foreach ($type as $t){
                            if($t->ticketinstock>=$adults){
                                $c++;
                            }
                        }
                        if($c!=0){
                            $data[]=$flight[$i];
                        }
                    }

                }
                    if(!isset($data)){
                        $data=[];
                    }
                    if(!isset($data2)){
                        $data2=[];
                    }
                        return view("flight-list", [
                            "data" => $data,
                            "data2"=>$data2,
                            "adults"=>$adults
                        ])->with("success", "The entered time could not be found. We recommend some similar flights");
                }


        }catch (\Exception $e){
            return redirect()->back("error","Flight not found please find again");
        }

    }

    public function addToCart(Flight $flight,Request $request)
    {
        $t=$request->get("type");
        $qty=$request->get("qty");
        $type=TypeOfTicket::where("id",$t)->first();

        $cart=session()->has("cart")&&is_array(session("cart"))?session("cart"):[];
        $flag=true;
        foreach ($cart as $item){
            if($item->id==$type->id){
                $flag=false;
                break;
            }
        }
        if($flag){
            $type->buy_qty=$qty;
            $cart[]=$type;
        }
        session(["cart"=>$cart]);
        return redirect()->back();

    }

    public function shopcart(){
        $cart=session()->has("cart")&&is_array(session("cart"))?session("cart"):[];
        if(count($cart)==0){
            return redirect()->to("/");
        }
        $grand_total=0;
        foreach ($cart as $item){
            $grand_total+=$item->price*$item->buy_qty;
        }
        $totalticket=0;
        foreach($cart as $item){
            $totalticket+=$item->buy_qty;
        }
        $can_checkout=true;
        foreach ($cart as $item){
            if($can_checkout&&$item->ticketinstock==0){
                $can_checkout=false;
            }
        }
        return view("user.cart",[
            "totalticket"=>$totalticket,
            "grand_total"=>$grand_total,
            "cart"=>$cart
        ]);
    }


    public function checkout(){
        $cart=session()->has("cart")&&is_array(session("cart"))?session("cart"):[];
        if(count($cart)==0){
            return redirect()->to("/");
        }
        $grand_total=0;
        foreach ($cart as $item){
            $grand_total+=$item->price*$item->buy_qty;
        }
        $totalticket=0;
        foreach($cart as $item){
            $totalticket+=$item->buy_qty;
            $buy_qty=$item->buy_qty;
        }

        return view("user.payment",[
            "totalticket"=>$totalticket,
            "grand_total"=>$grand_total,
            "cart"=>$cart,
            "buy_qty"=>$buy_qty
        ]);
    }

    public function remove(TypeOfTicket $typeOfTicket){
        $cart = session()->has("cart") && is_array(session("cart"))?session("cart"):[];
        foreach ($cart as $key=>$item){
            if($item->id == $typeOfTicket->id){
                unset($cart[$key]);
                break;
            }
        }
        $grand_total=0;
        $can_checkout=true;
        foreach ($cart as $item){
            $grand_total+=$item->price*$item->buy_qty;
            if($can_checkout&&$item->ticketinstock==0){
                $can_checkout=false;
            }
        }
        session(["cart"=>$cart]);
        return redirect()->back();
    }

    public function placeOrder(Request $request, User $user){

        foreach ($request->payment_info as $offset => $val) {
            foreach ($val as $key => $item) {
                if($val[$key] == null) {
                    session()->flash('error', [
                        'offset' => $offset,
                        'key' => $key,
                        'message' => 'Vui lòng không để trống thông tin'
                    ]);

                    return redirect()->back();
                } else {
                    session()->flash('payment_info', $request->payment_info);
                }
            }
        }

        $cart=session()->has("cart")&&is_array(session("cart"))?session("cart"):[];
        if(count($cart) == 0) return abort(404);
        $grand_total = 0;
        $can_checkout = true;
        $totalticket=0;
        foreach($cart as $item){
            $totalticket+=$item->buy_qty;
        }
        foreach ($cart as $item){
            $grand_total += $item->price * $item->buy_qty;
            if($can_checkout && $item->buy_qty ==0){
                $can_checkout =  false;
            }
        }
        if(!$can_checkout) return abort(404);

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

        $user=auth()->id();
        $order = Order::create([
            "order_date"=> now(),
            "qty"=>$totalticket,
            "totalmoney"=>$grand_total,
//            "status",
            "user_id"=>$user,
//            "discount_id"
        ]);

        foreach($cart as $item){
            $ticket[] = Ticket::with("TypeOfTicket")->where("typeofticket_id",$item->id)->where("status",0)->limit($item->buy_qty)->get();
        }
        $payment_info = $request->payment_info;

        for($i=0;$i<count($ticket);$i++){
            for($j=0;$j<$ticket[$i]->count();$j++){
                $ticket[$i][$j]->update([
                    "status"=>1,
                    "name"=>$payment_info[$j]['name'],
                    "birthday"=>$payment_info[$j]['birthday'],
                    "cccd"=>$payment_info[$j]['cccd'],
                    "phone"=>$payment_info[$j]['phone'],
                    "order_id"=>$order->id,
                    "expiredtime"=>now()->addHours(5),
                ]);
                $type=TypeOfTicket::where("id",$ticket[$i][$j]->typeofticket_id)->first();

                $type->update([
                    "ticketinstock"=>$type->ticketinstock-1
                ]);
            }
        }
        Mail::to($request->user())->send(new MailOrder($order));
        return $this->processTransaction($order);
    }


    public function processTransaction(Order $order)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction',['order'=>$order->id]),
                "cancel_url" => route('cancelTransaction',['order'=>$order->id]),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => number_format($order->totalmoney,2,".","")
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

        } else {
            return redirect()
                ->route('checkout')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }


    public function successTransaction(Order $order){
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher(
            '265acd2b0b5380eef4d9',
            '850864585d54284715cd',
            '1567274',
            $options
        );

        $data['message'] = 'Có một đơn hàng mới';
        $data["order_id"] = $order->id;
        event(new \App\Events\PusherEvent($data['message']));
        $pusher->trigger('my-channel', 'my-event', $data);

        $ticket=Ticket::with("Order")->where("order_id",$order->id)->get();
        for($i=0;$i<$ticket->count();$i++){
            $ticket[$i]->update([
                "status"=>2,
            ]);

        }
        session()->forget("cart");
        session()->forget('payment_info');
        $mes="Payment success! Order No ".$order->id;
        $user= auth()->user();
        $order=Order::where("user_id",$user->id)->orderBy("id","desc")->get();


//        dd($order);
//        dd($user);
        return view('user.profile',[
            "user"=>$user,
            "order"=>$order,
            "mes"=>$mes
        ]);

    }

    public function cancelTransaction(Order $order){

        $ticket=Ticket::with("Order")->where("order_id",$order->id)->get();
        for($i=0;$i<$ticket->count();$i++){
            $ticket[$i]->update([
                "status"=>0,
                "name"=>null,
                "birthday"=>null,
                "cccd"=>null,
                "phone"=>null,
                "order_id"=>null,
                "expiredtime"=>null,
            ]);
            $type=TypeOfTicket::where("id",$ticket[$i]->typeofticket_id)->first();

            $type->update([
                "ticketinstock"=>$type->ticketinstock+1
            ]);
        }
        $order->delete();

        session()->forget("cart");
        session()->forget('payment_info');
        $city = City::all();
        return view("/welcome", [
            "city" => $city
        ]);
    }


}
