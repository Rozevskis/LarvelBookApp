<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::query()
        ->orderBy('created_at', 'desc')
        ->paginate();
        return view('book.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'author' => ['required', 'string'],
            'released_at' => ['required', 'date']
        ]);

        $data['user_id'] = $request->user()->id;
        $book = Book::create($data);

        return to_route('book.index', $book)->with('message', 'Book was created');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.view', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'author' => ['required', 'string'],
            'released_at' => ['required', 'date']
        ]);

        
        $book->update($data);

        return to_route('book.index', $book)->with('message', 'Book was Update');
    }

    
    public function destroy(Book $book)
{
    $book->delete();
    return response()->noContent();
}
}
