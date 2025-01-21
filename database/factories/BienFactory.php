<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Etat;
use App\Models\Status;
use App\Models\TypeBien;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bien>
 */
class BienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'surface' => $this->faker->randomNumber(),
            'image' => $this->faker->imageUrl(),
            'prix' => $this->faker->randomNumber(),
            'city_id' => $this->faker->randomElement(City::pluck('id')),
            'type_bien_id' => $this->faker->randomElement(TypeBien::pluck('id')),
            'status_id' => $this->faker->randomElement(Status::pluck('id')),
            'user_id' => $this->faker->randomElement(User::pluck('id')),
            'etat_id' => $this->faker->randomElement(Etat::pluck('id')),

        ];
    }
}
