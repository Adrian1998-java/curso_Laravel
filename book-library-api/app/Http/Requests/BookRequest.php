<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // $table->string('titulo');
            // $table->string('autor');
            // $table->date('ano_publicacion');
            // $table->string('isbn');
            'título' => 'required|string',
            'autor' => 'required|string',
            'ano_publicacion' => 'required|date',
            'isbn' => 'required|string'
        ];
    }
}
