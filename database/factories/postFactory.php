<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->text(),
            'publicity' => $this->faker->boolean(),
            'author' => \App\Models\author::factory(),
        ];
    }
}
