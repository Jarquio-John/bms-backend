<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),  // Generates a random book title (3 words)
            'author' => $this->faker->name(),      // Generates a random author name
            'published_year' => $this->faker->year(), // Generates a random published year (e.g., 2020)
            'genre' => $this->faker->word(),
            'description' => $this->faker->paragraph(7),  // Generates a random description
        ];
    }
}
