<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Tips Untuk makanan sehat tapi tetap enak',
            'excerpt' => 'Banyak jenis makanan yang sehat tapi tetap terasa enak , seperti halnya sayuran meskipun hanya seperti rumput tapi bisa dijadikan makanan yang nikmat.',
            'body' => $this->faker->paragraph(mt_rand(3, 5)),
            'user_id' => mt_rand(1, 5),
            'gambar' => 'about1.jpg',
        ];
    }
}
