<?php

namespace App\Http\Controllers;

use App\Mail\MailOrder;
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

        ];
        Mail::to('email')->send(new MailOrder($data));
    }
}
