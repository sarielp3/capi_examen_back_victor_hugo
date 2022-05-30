<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class usuarios_domicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->word(),
            'numero_exterior' => $this->faker->randomNumber(3, true),
            'colonia' => $this->faker->name(),
            'cp' => $this->faker->randomNumber(5, true),
            'ciudad' => $this->faker->name()
        ];
    }
}
