<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => rand(10000000,30000000),
            'quantity' => rand(1,5),
            'user_id' => rand(0,30),
        ];
    }
}
