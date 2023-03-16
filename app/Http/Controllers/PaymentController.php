<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function index()
    {
        return view('user.cart');
    }

    public function payment(User $user)
    {
        $data= [
            "user"=>$user
        ];
        Mail::to('email')->send(new MailOrder($data));

//        return view('user.payment');
    }
}
