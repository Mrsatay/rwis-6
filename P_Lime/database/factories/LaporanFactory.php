<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\laporan>
 */
class LaporanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->unique()->words(3, true),
            'pengirim' => fake()->unique()->name,
            'gambar' => fake()->image(null, 120, 80, 'animals', true, true, 'cats', true, 'jpg'),
            'deskripsi' => fake()->unique()->text(100),
            'status' => fake()->randomElement(['Selesai','Belum Selesai']),
        ];
    }
}