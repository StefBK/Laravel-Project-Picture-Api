<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PictureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => $this->faker->name(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text(),
            'url' => $this->faker->imageUrl(640,480,$this->faker->words(2,true), true),
            'likes' => $this->faker->numberBetween(0, 100)
        ];
    }
}
