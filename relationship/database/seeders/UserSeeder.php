<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            "name" => 'example',
            'email' => 'example@example.com',
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'id' => 2,
            "name" => 'ejemplo',
            'email' => 'ejemplo@email.com',
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'id' => 3,
            "name" => 'Adrián',
            'email' => 'scraggy1998@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
