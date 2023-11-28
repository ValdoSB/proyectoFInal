<?php

namespace Database\Factories;
use App\Models\User;



use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clientes>
 */
class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
       
        return [
            'clientCURP' => $this->faker->sentence(),
            'clientName' => $this->faker->name(),
            'clientAge' => $this->faker->numberBetween(1, 99),
            'clientAddress' => $this->faker->sentence(),
            'clientPostalCode' => $this->faker->numerify('#####'),
            'clientPhone' => $this->faker->numerify('##############'),
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'fileName' => null,
            'filePath' => null,
        ];
    }
}
