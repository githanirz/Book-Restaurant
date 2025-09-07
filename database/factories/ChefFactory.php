<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chef>
 */
class ChefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gambar' => 'chef1.jpg',
            'nama' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'deskripsi' => $this->faker->paragraph(mt_rand(1, 3)),
            'role_id' => mt_rand(1, 3),

        ];
    }
}
