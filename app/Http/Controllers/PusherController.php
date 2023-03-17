<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class PusherController extends Controller
{
    public function sendNotification(){
        // send notification
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
        $data["order_id"] = 55;
        event(new \App\Events\PusherEvent($data['message']));
        $pusher->trigger('my-channel', 'my-event', $data);
        dd("Có một đơn hàng mới");
    }
}
