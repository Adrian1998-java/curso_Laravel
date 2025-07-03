<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view();
// Route::get('mi/ruta, controladorRuta');
// Route::post();
// Route::put();
// Route::delete();
// Route::patch();

Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');
// Route::view('/', 'welcome');


