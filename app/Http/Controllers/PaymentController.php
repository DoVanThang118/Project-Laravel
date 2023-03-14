<?php

namespace App\Http\Controllers;

use App\Mail\MailOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function index()
    {
        return view('user.cart');
    }

    public function viewPayment()
    {
        return view('user.payment');
    }

    public function payment()
    {
            $data = [
            'message' => "Compact successfully",
            'user' => User::findOrFail(1)
        ];
            dd($data);
        Mail::to('email')->send(new MailOrder($data));
    }
}
