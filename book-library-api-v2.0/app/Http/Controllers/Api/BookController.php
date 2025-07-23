<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
// Mostrar todos los libros
public function index()
{
return response()->json(Book::all(), 200);
}
// Crear nuevo libro
public function store(Request $request)
{
$validated = $request->validate([
'title' => 'required|string|max:255',
'author' => 'required|string|max:255',
'year' => 'required|digits:4|integer|min:1000|max:' . date('Y'),
'isbn' => 'required|string|max:20|unique:books',
]);
$book = Book::create($validated);
return response()->json($book, 201);
}
// Mostrar un solo libro
public function show($id)
{
$book = Book::find($id);
if (!$book) {
return response()->json(['message' => 'Libro no encontrado'], 404);
}
return response()->json($book);
}

// Actualizar un libro
public function update(Request $request, $id)
{
    $book = Book::find($id);
    if (!$book) {
    return response()->json(['message' => 'Libro no encontrado'], 404);
    }
    $validated = $request->validate([
    'title' => 'sometimes|required|string|max:255',
    'author' => 'sometimes|required|string|max:255',
    'year' => 'sometimes|required|digits:4|integer|min:1000|max:' . date('Y'),
    'isbn' => 'sometimes|required|string|max:20|unique:books,isbn,' . $id,
    ]);
    $book->update($validated);
    return response()->json($book);
}
// Eliminar un libro
public function destroy($id)
{
$book = Book::find($id);
if (!$book) {
return response()->json(['message' => 'Libro no encontrado'], 404);
}
$book->delete();
return response()->json(['message' => 'Libro eliminado']);
}
}