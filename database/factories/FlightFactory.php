<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "takeoftime"=>$this->faker->dateTime(),
            "landingtime"=>$this->faker->dateTime(),
            "description"=>$this->faker->address,
            "totalticket"=>0,
            "airplane_id"=>random_int(1,50),
            "airstrip_id"=>random_int(1,7),
        ];
    }
}
