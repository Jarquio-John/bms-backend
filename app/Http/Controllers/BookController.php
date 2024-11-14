<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer|digits:4', 
            'genre' => 'required|string|max:100',
            'description' => 'required|string|max:1000',
        ]);

        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'published_year' => $request->published_year,
            'genre' => $request->genre,
            'description' => $request->description,
        ]);

        return response()->json($book, 201);
    }

    public function show(string $id)
    {
        $book = Book::find($id);

        if ($book) {
            return response()->json($book);
        }
        
        return response()->json(['message' => 'Book not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'sometimes|string|max:255',
            'author' => 'sometimes|string|max:255',
            'published_year' => 'sometimes|integer|digits:4',
            'genre' => 'sometimes|string|max:100',
            'description' => 'sometimes|string|max:1000',
        ]);

        $book = Book::find($id);

        if ($book) {
            $book->update($request->all());
            return response()->json($book);
        }
        
        return response()->json(['message' => 'Book not found'], 404);
    }

    public function destroy(string $id)
    {
        $book = Book::find($id);

        if ($book) {
            $book->delete();
            return response()->json(['message' => 'Book deleted successfully']);
        }
        
        return response()->json(['message' => 'Book not found'], 404);
    }
}
