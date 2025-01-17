<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Get all books
    public function index() {
        return response()->json(Book::all(), 200);
    }

    // Create a new book
    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer',
            'genre' => 'required|string|max:100',
            'summary' => 'nullable|string',
        ]);

        $book = Book::create($validatedData);
        return response()->json($book, 201); // Status 201: Created
    }

    // Get a specific book by ID
    public function show($id) {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        return response()->json($book, 200);
    }

    // Update a specific book by ID
    public function update(Request $request, $id) {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer',
            'genre' => 'required|string|max:100',
            'summary' => 'nullable|string',
        ]);

        $book->update($validatedData);
        return response()->json($book, 200); // Status 200: OK
    }

    // Delete a specific book by ID
    public function destroy($id) {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->delete();
        return response()->json(['message' => 'Book deleted successfully'], 200);
    }
}