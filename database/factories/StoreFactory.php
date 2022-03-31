<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // create fake data
            'name' => $this->faker->words(3,true),
            'description' => $this->faker->sentence,
        ];
    }
}