<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\NoteRequest;
use App\Models\Citas;

class CitasController extends Controller
{
    public function index() : View
    {  
        $citas = Citas::all();
        return view('citas.index', compact('citas'));
    }

    public function create() : View
    {
        return view('citas.create');
    }

    public function store (NoteRequest $request) : RedirectResponse
    {
        $request->validate([
            "nombreCliente" => "required",
            "FechaHoraCita" => "required",
            "Motivo" => "required",
            "EstadoCita" => "required"
        ]);
        Citas::create($request->all());
        return redirect()->route('citas.index');
    }
}
