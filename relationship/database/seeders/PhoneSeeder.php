<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'prefix' => 34,
            'phone_number' => 666666966,
            'user_id' => 1
        ]);
        Phone::create([
            'prefix' => 35,
            'phone_number' => 777777577,
            'user_id' => 1
        ]);
        Phone::create([
            'prefix' => 34,
            'phone_number' => 663466966,
            'user_id' => 2
        ]);
        Phone::create([
            'prefix' => 35,
            'phone_number' => 712377577,
            'user_id' => 2
        ]);
        Phone::create([
            'prefix' => 35,
            'phone_number' => 712377577,
            'user_id' => 3
        ]);

    }
}
