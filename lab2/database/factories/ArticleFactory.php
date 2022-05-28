<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class ArticleFactory extends Factory
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
            "title"=> $this->faker->text(50),
            "code" => $this->faker->randomLetter(),
            "body" => $this->faker->text(200),
            "createDateTime" => $this->faker->dateTimeBetween($start = '-52 weeks', $end = '+2 weeks'),
            "author" => $this->faker->name(),
        ];
    }
}
