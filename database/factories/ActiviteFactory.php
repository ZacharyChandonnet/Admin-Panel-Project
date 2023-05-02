<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActiviteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->company(),
            'type' => $this->faker->word(),
            'description' => $this->faker->realText(),
            'duree' => $this->faker->time(),
            'prix' => $this->faker->word(),
            'statut' => $this->faker->boolean(),
            'nb_dispo' => $this->faker->word(),
        ];
    }
}
