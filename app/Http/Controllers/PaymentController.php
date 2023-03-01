<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('user.payment-all');
    }

    public function payment()
    {
        return view('user.payment');
    }
}
