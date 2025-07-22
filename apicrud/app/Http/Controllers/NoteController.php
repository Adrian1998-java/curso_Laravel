<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteController extends Controller
{

    public function index() : JsonResource
    {
        // $notes = Note::all();
        // return response()->json($notes, 200);
        return NoteResource::collection(Note::all());
    }


    public function store(NoteRequest $request) : JsonResponse
    {
        $note = Note::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $note
        ], 201);
        // $note = new Note();
        // $note->title = $request->title;
        // $note->content = $request->content;
        // $note->save();

        // return response()->json([
        //     'success' => true,
        //     'data' => $note
        // ], 201);
    }

    // public function store(Request $request)
    // {
    //     //
    // }


    public function show(string $id) : JsonResponse
    {
        $note = Note::find($id);
        return response()->json($note, 200);
    }

    // public function edit(string $id)
    // {
    //     //
    // }


    public function update(NoteRequest $request, string $id) : JsonResponse
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return response()->json([
            'success' => true,
            'data' => $note
        ], 200);

    }

    public function destroy(string $id) : JsonResponse
    {
        Note::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
