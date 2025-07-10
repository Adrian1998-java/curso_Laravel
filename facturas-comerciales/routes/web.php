<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturaController;

Route::get('/', [FacturaController::class,'index'])->name('factura.index');
