<?php

namespace App\Http\Controllers;

use App\Mail\MailOrder;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function payment(Order $order, User $user,Ticket $ticket)
    {
        $data= [
            "order"=>$order,
            "user"=>$user,
            "ticket"=>$ticket
        ];
        Mail::to( 'email')->send(new MailOrder($data));
    }
}
