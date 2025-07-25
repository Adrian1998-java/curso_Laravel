<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Resources\UserResource;

Route::get('/user', function(Request $request){
    $user = User::find(1);
    return new UserResource($user);
});


// Route::get('/test', function(Request $request) {
//     return response()->json(['message' => 'API funcionando correctamente']);
// });



