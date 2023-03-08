<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "status"=>0,
            "price"=>0,
            "typeofticket_id"=>random_int(1,20),
            "order_id"=>null,
            "seat_id"=>null,

        ];
    }
}
