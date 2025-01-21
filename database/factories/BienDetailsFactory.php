<?php

namespace Database\Factories;

use App\Models\Bien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BienDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rooms' => $this->faker->randomNumber(1,4),
            'baths'  => $this->faker->randomNumber(1,4),
            'garages'  => $this->faker->randomNumber(1,4),
            'balconies'  => $this->faker->randomNumber(1,4),
            'bien_id'  => $this->faker->randomElement(Bien::pluck('id')),
        ];
    }
}
