<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Land>
 */
class LandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            "Libelle" => $this->faker->country(),
            "description" => $this->faker->paragraph(),
            "code_indicatif" => $this->faker->numberBetween(1, 700),
            "Continent" => $this->faker->randomElement(["Amérique", "Europe", "Asie", "Afrique", "Océanie", "Antarctique"]),
            "population" => rand(100000, 90000000),
            "capitale" => $this->faker->city(),
            "monnaie" => $this->faker->randomElement(["XOF", "EUR", "DOLLAR"]),
            "langue" => $this->faker->randomElement(["FR", "EN", "AR", "ES"]),
            "Superficie" => rand(100000, 90000000),
            "est_laique" => $this->faker->boolean()
        ];
    }
}
