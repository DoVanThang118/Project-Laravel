<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailOrder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.neworder')
            ->with([
//                'orderName' => $this->order->name,
                'orderTotalmoney' => $this->order->totalmoney,
                'orderQty' => $this->order->qty,
                'orderDate' =>$this->order->order_date,
//                'orderEmail'=> $this->order->email,
            ]);
    }
}
