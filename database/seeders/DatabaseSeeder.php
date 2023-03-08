<?php

namespace Database\Seeders;

use App\Models\Airplane;
use App\Models\AirStrip;
use App\Models\City;
use App\Models\Flight;
use App\Models\Order;
use App\Models\Seat;
use App\Models\Ticket;
use App\Models\TypeOfSeat;
use App\Models\TypeOfTicket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //B1: Tạo airplane và typeofseat
//        Airplane::factory(30)->create();
//        for($i=1;$i<=90;$i++){
//            TypeOfSeat::factory(1)->create();
//        }
//        for($i=1;$i<=30;$i++){
//            TypeOfSeat::find($i)->update(["name"=>"VIP","airplane_id"=>$i]);
//        }
//        for($i=31;$i<=60;$i++){
//            TypeOfSeat::find($i)->update(["name"=>"NORMAL","airplane_id"=>($i-30)]);
//        }
//        for($i=61;$i<=90;$i++){
//            TypeOfSeat::find($i)->update(["name"=>"CHEAP","airplane_id"=>($i-60)]);
//        }

        //B2: Tạo seat
//        for ($i = 1; $i <= 30; $i++) {
//            Seat::factory(1)->create();
//        }



        //B4:tao city
//       City::factory(36)->create();
        AirStrip::factory(4)->create();
        //B5 tao airstrip
//        AirStrip::factory(50)->create();
        //B6 tao flight
//        Flight::factory(20)->create();
        //B7 tao type of ticket
//        TypeOfTicket::factory(20)->create();
        //B8 tao ticket
//        Ticket::factory(2000)->create();
        //B9 cap nhat lai gia ve
//        for($i=1;$i<=2000;$i++){
//            $type = TypeOfTicket::all();
//            $tot =Ticket::find($i);
//            foreach ($type as $t){
//                if($t->id==$tot->typeofticket_id){
//                    $tot->update(["price"=>$t->price]);
//                }
//            }
//
//        }
        //B10 cap nhat lai so luong typeofticket
//        for($i=1;$i<=20;$i++){
//            $ticket = Ticket::all();
//            $totalticket=0;
//            foreach ($ticket as $t){
//                if($t->typeofticket_id==$i){
//                    $totalticket+=1;
//                }
//            }
//            TypeOfTicket::find($i)->update(["totalticket"=>$totalticket]);
//
//        }


    }
}
