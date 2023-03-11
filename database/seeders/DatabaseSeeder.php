<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Airplane;
use App\Models\AirStrip;
use App\Models\City;
use App\Models\Flight;
use App\Models\Order;
use App\Models\Seat;
use App\Models\Ticket;
use App\Models\TypeOfSeat;
use App\Models\TypeOfTicket;
use App\Models\User;
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
        $admin = User::create([
            "name"=>"admin",
            "email"=>"admin@localhost",
            "phone"=>"888888888",
            "password"=> bcrypt("admin")
        ]);
        Admin::create([
            "user_id"=>$admin->id,
            "role"=>"ADMIN"
        ]);
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

        //B5 tao airstrip
//        AirStrip::factory(4)->create();

//        City::factory(1)->create();



    }
}
