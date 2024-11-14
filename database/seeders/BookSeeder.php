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
        // Create 10 sample books using the Book model
        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'description' => 'A story about the American dream in the 1920s.',
            'published_year' => 1925,
            'isbn' => '9780743273565',
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'description' => 'A dystopian novel about totalitarianism.',
            'published_year' => 1949,
            'isbn' => '9780451524935',
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'description' => 'A novel set in the South, focusing on racial injustice.',
            'published_year' => 1960,
            'isbn' => '9780060935467',
        ]);

        Book::create([
            'title' => 'The Catcher in the Rye',
            'author' => 'J.D. Salinger',
            'description' => 'A young man struggles with growing up in a complex world.',
            'published_year' => 1951,
            'isbn' => '9780316769488',
        ]);

        Book::create([
            'title' => 'Moby Dick',
            'author' => 'Herman Melville',
            'description' => 'A sailor’s quest to kill the legendary white whale.',
            'published_year' => 1851,
            'isbn' => '9781503280786',
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'description' => 'A classic novel of manners and romance.',
            'published_year' => 1813,
            'isbn' => '9780141439518',
        ]);

        Book::create([
            'title' => 'The Hobbit',
            'author' => 'J.R.R. Tolkien',
            'description' => 'A fantasy adventure about a hobbit’s journey.',
            'published_year' => 1937,
            'isbn' => '9780345339683',
        ]);

        Book::create([
            'title' => 'War and Peace',
            'author' => 'Leo Tolstoy',
            'description' => 'A historical novel set during the Napoleonic Wars.',
            'published_year' => 1869,
            'isbn' => '9780307266934',
        ]);

        Book::create([
            'title' => 'Crime and Punishment',
            'author' => 'Fyodor Dostoevsky',
            'description' => 'A psychological drama about guilt and redemption.',
            'published_year' => 1866,
            'isbn' => '9780143058144',
        ]);

        Book::create([
            'title' => 'The Odyssey',
            'author' => 'Homer',
            'description' => 'An ancient Greek epic about the journey of Odysseus.',
            'published_year' => -800,
            'isbn' => '9780140268867',
        ]);

        $this->call(BookSeeder::class);
    }
}
