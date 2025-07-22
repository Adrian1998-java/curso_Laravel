<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\BookResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BookResource::collection(Book::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $book = Book::create($request->all());
        return response()->json([
            'message' => 'Book created successfully',
            'succes' => true,
            'data' => $book
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return response()->json($book, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, string $id)
    {
        // título, autor, año de publicación, ISBN
        $book = Book::find($id);
        $book->titulo = $request->titulo;
        $book->autor = $request->autor;
        $book->año_publicacion = $request->año_publicacion;
        $book->isbn = $request->isbn;
        $book->save();

        return response()->json([
            'success' => true,
            'data' => $book
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::find($id)->delete();
        return response()->json([
            'success' => true,
        ], 200);
    }
}
