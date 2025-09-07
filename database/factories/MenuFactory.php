<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gambar' => 'menu-item-2.png',
            'nama' => fake()->sentence(mt_rand(1, 3)),
            'deskripsi' => $this->faker->paragraph(mt_rand(1, 3)),
            'harga' =>  $this->faker->numberBetween(50000, 200000),
            'kategori_id' => mt_rand(1, 3),
        ];
    }
}
