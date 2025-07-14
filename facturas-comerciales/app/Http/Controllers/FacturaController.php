<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = DB::table('facturas')->get();
        return view('facturas.index', compact('facturas'));
    }
}
