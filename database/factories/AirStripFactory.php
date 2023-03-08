<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AirStripFactory extends Factory
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
            "landingcity_id"=>random_int(1,15),
            "takeofcity_id"=>random_int(16,30)
        ];
    }
}
