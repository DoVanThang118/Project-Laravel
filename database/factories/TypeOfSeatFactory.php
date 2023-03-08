<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeOfSeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>"",
            "totalseat"=>30,
            "description"=>$this->faker->address,
            "airplane_id"=>0
        ];
    }
}
