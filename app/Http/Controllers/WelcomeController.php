<?php

namespace App\Http\Controllers;

use App\Models\AirStrip;
use App\Models\City;
use App\Models\Flight;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\TypeOfTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class WelcomeController extends Controller
{
    public function welcome()
    {

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


        if ($takeofcity_id != $landingcity_id) {

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


                if (isset($data)) {
                    return view("flight-list", [
                        "data" => $data,
                        "adults"=>$adults
                    ])->with("success", "Success");

                } else {

                    $flight = Flight::FlightAirStripFilter($asflight)
                        ->whereDate("takeoftime",">=",now())
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

                    if (isset($data)) {
                       return view("flight-list", [
                            "data" => $data,
                           "adults"=>$adults
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

                if (isset($data)||isset($data2)) {
                    return view("flight-list", [
                        "data" => $data,
                        "data2"=>$data2,
                        "adults"=>$adults
                    ])->with("success", "Success");

                } else {

                    $flight = Flight::FlightAirStripFilter($asflight)
                        ->whereDate("takeoftime",">=",now())
                        ->orderBy("id", "desc")
                        ->paginate(20);
                    $flight2 = Flight::FlightAirStripFilter($asflight2)
                        ->whereDate("takeoftime",">=",now())
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
                    if (isset($data)&&isset($data2)) {
                        return view("flight-list", [
                            "data" => $data,
                            "data2"=>$data2,
                            "adults"=>$adults
                        ])->with("success", "The entered time could not be found. We recommend some similar flights");
                    }
                    else{
                        return redirect()->back("error","Flight not found please find again");
                    }

                }

            }

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
//        dd($cart);
        $grand_total=0;
        $can_checkout=true;
        foreach ($cart as $item){
            $grand_total+=$item->price*$item->buy_qty;
            if($can_checkout&&$item->ticketinstock==0){
                $can_checkout=false;
            }
        }

        return view("user.cart",[
            "grand_total"=>$grand_total,
            "cart"=>$cart,
            "can_checkout"=>$can_checkout

        ]);
    }

//    public function shopcart(){
//        $cart=session()->has("cart")&&is_array(session("cart"))?session("cart"):[];
//        $can_checkout=true;
//        foreach ($cart as $item){
//
//            if($can_checkout&&count($cart)==0){
//                $can_checkout=false;
//            }
//        }
//        return view("user.cart",[
//            "cart"=>$cart,
//            "can_checkout"=>$can_checkout
//        ]);
//    }


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
        }

        return view("user.payment",[
            "totalticket"=>$totalticket,
            "grand_total"=>$grand_total,
            "cart"=>$cart
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

        session(["cart"=>$cart]);
        $grand_total=0;
        $can_checkout=true;
        foreach ($cart as $item){
            $grand_total+=$item->price*$item->buy_qty;
            if($can_checkout&&$item->ticketinstock==0){
                $can_checkout=false;
            }
        }

        return view("user.cart",[
            "grand_total"=>$grand_total,
            "cart"=>$cart,
            "can_checkout"=>$can_checkout

        ]);
    }

    public function placeOrder(Request $request){
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


        $order = Order::create([
            "order_date"=> now(),
            "qty"=>$totalticket,
            "totalmoney"=>$grand_total,
//            "status",
            "user_id"=>2,
//            "discount_id"
        ]);

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
        $cart=session()->has("cart")&&is_array(session("cart"))?session("cart"):[];
        $ticket=collect();
        foreach($cart as $item){
            $ticke =Ticket::with("TypeOfTicket")->where("typeofticket_id",$item->id)->limit($item->buy_qty)->get();
            $ticket = collect([$ticke]);
        }
        dd($ticket);

        return "Success pay: ".$order->totalmoney;
        // chuyen trang thai da thanh toan
    }

    public function cancelTransaction(Order $order){
        return "Cancel";
    }
}
