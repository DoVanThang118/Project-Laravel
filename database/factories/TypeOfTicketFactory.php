<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeOfTicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "totalticket"=>0,
            "ticketinstock"=>0,
            "image"=>$this->faker->imageUrl(),
            "description"=>$this->faker->address,
            "price"=>random_int(50,200),
            "flight_id"=>random_int(2,5),
            "typeofseat_id"=>0,
        ];
    }
}
