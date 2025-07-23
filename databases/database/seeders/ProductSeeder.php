<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'name'=>'Example',
            'short_description'=>'Lorem ipsum',
            'description'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis placeat nam reprehenderit facere fugiat sint incidunt possimus minima magnam, est rerum debitis, accusamus quam libero a harum, ipsum eveniet cupiditate?',
            'price'=>25
        ]);
        Producto::create([
            'name'=>'Example 2',
            'short_description'=>'Lorem ipsum',
            'description'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis placeat nam reprehenderit facere fugiat sint incidunt possimus minima magnam, est rerum debitis, accusamus quam libero a harum, ipsum eveniet cupiditate?',
            'price'=>35
        ]);
        Producto::create([
            'name'=>'Example 3',
            'short_description'=>'Lorem ipsum',
            'description'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis placeat nam reprehenderit facere fugiat sint incidunt possimus minima magnam, est rerum debitis, accusamus quam libero a harum, ipsum eveniet cupiditate?',
            'price'=>50
        ]);
    }
}
