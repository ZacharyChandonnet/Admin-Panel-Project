<?php

namespace Database\Factories;

use App\Models\Secteur;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntrepriseFactory extends Factory
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
            'img_url' => 'img/' . $this->faker->uuid() . '.jpg',
            'secteur_id' => Secteur::factory(),
            'description' => $this->faker->realText(),
            'specialite' => $this->faker->word(),
            'adresse' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'code_postal' => $this->faker->regexify('[a-zA-Z][0-9][a-zA-Z][0-9][a-zA-Z][0-9]'),
            'personne_ressource' => $this->faker->name(),
            'type' => $this->faker->word(),
            'email' => $this->faker->email(),
        ];
    }
}
