<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AirplaneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->unique()->name,
            "brand"=>$this->faker->name,
            "description"=>$this->faker->address,
            "image"=>$this->faker->imageUrl(),
            "totalseat"=>90
        ];
    }
}
