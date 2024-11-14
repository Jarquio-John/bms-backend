<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Display a listing of the books
    public function index()
    {
        // Retrieve all books
        $books = Book::all();
        return response()->json($books);
    }

    // Store a newly created book in storage
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_date' => 'required|date',
        ]);

        // Create new book
        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'published_date' => $request->published_date,
        ]);

        return response()->json($book, 201); // 201 Created
    }

    // Display the specified book
    public function show($id)
    {
        $book = Book::find($id);

        if ($book) {
            return response()->json($book);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    // Update the specified book in storage
    public function update(Request $request, $id)
    {
        // Validate request data
        $request->validate([
            'title' => 'sometimes|string|max:255',
            'author' => 'sometimes|string|max:255',
            'published_date' => 'sometimes|date',
        ]);

        $book = Book::find($id);

        if ($book) {
            // Update book details
            $book->update($request->all());
            return response()->json($book);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    // Remove the specified book from storage
    public function destroy($id)
    {
        $book = Book::find($id);

        if ($book) {
            $book->delete();
            return response()->json(['message' => 'Book deleted successfully']);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }
}
