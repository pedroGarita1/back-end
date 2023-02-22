<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'apellido' => $this->faker->lastName(),
            'nombre' => $this->faker->name(),
            'fechaNacimiento' => $this->faker->date('Y-m-d', 'now')
        ];
    }
}
