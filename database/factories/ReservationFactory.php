<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $valid_countries = array('france', 'espagne', 'portugal', 'italie', 'roumanie', 'tunisie');

        return [
            'name' => fake()->name(),
            'age' => rand(7, 77),
            'pays' => fake()->randomElement($valid_countries),
        ];
    }
}
