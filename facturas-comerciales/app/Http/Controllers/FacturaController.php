<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::todas();
        return view('facturas.index', compact('facturas'));
    }
}
