<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class usersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_nacimiento' => $this->faker->date()
        ];
    }
}
