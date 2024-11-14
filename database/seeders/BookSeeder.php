<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The Silent Patient',
            'author' => 'Alex Michaelides',
            'published_year' => 2019,
            'genre' => 'Thriller',
            'description' => 'A psychological thriller about a woman who shoots her husband and then never speaks again.',
        ]);

        Book::create([
            'title' => 'The Night Circus',
            'author' => 'Erin Morgenstern',
            'published_year' => 2011,
            'genre' => 'Fantasy',
            'description' => 'A fantasy novel about a magical competition between two young illusionists.',
        ]);

        Book::create([
            'title' => 'The Goldfinch',
            'author' => 'Donna Tartt',
            'published_year' => 2013,
            'genre' => 'Fiction',
            'description' => 'A novel about loss, survival, and art, centered around a young boy who survives a terrorist bombing.',
        ]);

        Book::create([
            'title' => 'Where the Crawdads Sing',
            'author' => 'Delia Owens',
            'published_year' => 2018,
            'genre' => 'Mystery',
            'description' => 'A mystery and coming-of-age story about a young girl growing up alone in the marshes of North Carolina.',
        ]);

        Book::create([
            'title' => 'Circe',
            'author' => 'Madeline Miller',
            'published_year' => 2018,
            'genre' => 'Fantasy',
            'description' => 'A retelling of the myth of Circe, the enchantress from Homer\'s "Odyssey".',
        ]);

        Book::create([
            'title' => 'The Seven Husbands of Evelyn Hugo',
            'author' => 'Taylor Jenkins Reid',
            'published_year' => 2017,
            'genre' => 'Romance',
            'description' => 'A fictional tale of an aging Hollywood star revealing the secrets of her life, love, and career.',
        ]);

        Book::create([
            'title' => 'Big Little Lies',
            'author' => 'Liane Moriarty',
            'published_year' => 2014,
            'genre' => 'Comedy',
            'description' => 'A dark comedy about a group of women and their tangled relationships, culminating in a murder.',
        ]);

        Book::create([
            'title' => 'Educated',
            'author' => 'Tara Westover',
            'published_year' => 2018,
            'genre' => 'Memoir',
            'description' => 'A memoir about a woman who grows up in a strict, survivalist family and escapes to pursue education.',
        ]);

        Book::create([
            'title' => 'The Invisible Man',
            'author' => 'H.G. Wells',
            'published_year' => 1897,
            'genre' => 'Science Fiction',
            'description' => 'A science fiction novel about a scientist who discovers how to make himself invisible, with dangerous consequences.',
        ]);

        Book::create([
            'title' => 'The Alchemist',
            'author' => 'Paulo Coelho',
            'published_year' => 1988,
            'genre' => 'Philosophy',
            'description' => 'A philosophical novel about a young shepherds journey to find treasure, while discovering the meaning of life.',
        ]);
    }
}
