<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
            // título, autor, año de publicación, ISBN
            // $table->string('titulo');
            // $table->string('autor');
            // $table->date('ano_publicacion');
            // $table->string('isbn');
        return [
            'titulo' => "Título del libro : ".$this->titulo,
            'autor' => "Autor : ".$this->autor,
            'ano_publicacion' => $this->ano_publicacion,
            'isbn' => $this->isbn,
        ];
    }
}
