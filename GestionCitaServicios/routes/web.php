<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;

Route::resource('/citas', CitasController::class);
