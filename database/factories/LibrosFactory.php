<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libros>
 */
class LibrosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ISBN' => $this->faker->numerify('###########'),
            'nombre' => $this->faker->name(),
            'autor' => $this->faker->name(),
            'editorial' => $this->faker->name(),
            'cantidad' => $this->faker->randomDigitNotNull(),
        ];
    }
}
