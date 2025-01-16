<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlokairuTaula>
 */
class AlokairuTaulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $etxeak = \App\Models\Etxea::pluck('id')->toArray();

        return [
            'izena' => $this->faker->sentence,
            'etxea_id' => $this->faker->randomElement($etxeak),

        ];
    }
}
