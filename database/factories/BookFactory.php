<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3), // Judul random (3 kata)
            'author' => $this->faker->name, // Nama pengarang random
            'published_year' => $this->faker->numberBetween(1900, 2025),
            'genre' => $this->faker->randomElement(['Fiction', 'Non-Fiction', 'Fantasy', 'Biography', 'Mystery']),
            'summary' => $this->faker->paragraph, // Ringkasan random
        ];
    }
}
