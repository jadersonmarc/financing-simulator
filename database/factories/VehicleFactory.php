<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'photo' => 'url_para_foto_do_veiculo_' . $this->faker->unique()->numberBetween(1, 100),
            'city' => $this->faker->city,
            'brand' => $this->faker->company,
            'model' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'year' => $this->faker->numberBetween(2000, 2022),
            'mileage' => $this->faker->numberBetween(0, 200000),
            'transmission_type' => $this->faker->randomElement(['Manual', 'Automático']),
            'store_phone' => $this->faker->phoneNumber,
            'price' => $this->faker->numberBetween(20000, 100000),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
