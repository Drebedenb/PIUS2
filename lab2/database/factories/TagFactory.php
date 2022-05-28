<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $this->faker = Faker::create();
        return [
            "title" => $this->faker->text(50),
            "code" => $this->faker->randomLetter(),
        ];

    }
}
