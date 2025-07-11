<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturaController;

Route::get('/catalogo', [FacturaController::class,'index'])->name('factura.index');
