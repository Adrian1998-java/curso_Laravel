<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index ()
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }
    public function create ()
    {
        return view('note.create');
    }
    public function store (Request $request)
    {
        Note::create($request->all());

        // Note::create([
        //     'title'=>$request->title,
        //     'description'=>$request->description
        // ]);

        // $note = new Note();
        // $note->title = $request->title;
        // $note->description = $request->description;
        // $note->save();

        return redirect()->route('note.index');
    }
}
