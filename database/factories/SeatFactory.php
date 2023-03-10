<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name,
            "description"=>$this->faker->address,
            "typeofseat_id"=>65,
        ];
    }
}
