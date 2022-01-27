<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BadgeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $graphics = config('badges');

        return [
            'name' => $this->faker->name('male'),
            'description' => $this->faker->text(),
            'graphic' => $graphics[array_rand($graphics)]
        ];
    }
}
