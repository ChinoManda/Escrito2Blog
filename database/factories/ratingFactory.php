<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rate' => $this->faker->numberBetween(0, 10),
            'post' => \App\Models\post::factory(),
            'author' => \App\Models\author::factory(),
        ];
    }
}
