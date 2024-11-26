<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jobOffer' => $this->faker->realText($maxNbChars = 200),
            'jobVacancyStatus' => $this->faker->realText($maxNbChars = 200),
        ];
    }
}
