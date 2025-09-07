<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booktable>
 */
class BooktableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'tanggal' => fake()->date('Y-m-d'),
            'waktu' => $this->faker->numberBetween(1, 23),
            'email' => fake()->unique()->safeEmail(),
            'nohp' => fake()->bothify('############'),
            'pesan' => $this->faker->paragraph(mt_rand(1, 3)),

        ];
    }
}
