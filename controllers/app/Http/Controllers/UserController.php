<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;    

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $user = new User();
        $user->name = "Adrian";
        $user->email = "adrian@gmail.com";
        $user->password = Hash::make("123456");
        $user->age = 27;
        $user->address = "Calle Adrian";
        $user->zip_code = "38000";
        $user->save();

        User::create([
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'password' => Hash::make("123456"),
            'age' => 30,
            'address' => 'Calle Juan',
            'zip_code' => '38000'            
            ]
        );
        User::create([
            'name' => 'Laura',
            'email' => 'laura@gmail.com',
            'password' => Hash::make("123456"),
            'age' => 30,
            'address' => 'Calle Laura',
            'zip_code' => '38000'            
            ]
        );
        User::create([
            'name' => 'Adan',
            'email' => 'Adan@gmail.com',
            'password' => Hash::make("123456"),
            'age' => 30,
            'address' => 'Calle Adan',
            'zip_code' => '38000'            
            ]
        );

        return redirect()->route('user.index')->with('success', 'Usuarios creados correctamente.');
        
    }
}
