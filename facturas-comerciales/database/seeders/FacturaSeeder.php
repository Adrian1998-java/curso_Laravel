<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Factura;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('facturas')->insert([
            [
                'numero' => 'F001',
                'cliente' => 'Cliente A',
                'importe' => 1500.50,
                'fecha' => '2022-07-10'
            ],
            [
                'numero' => 'F002',
                'cliente' => 'Cliente B',
                'importe' => 1200.50,
                'fecha' => '2022-07-10'
            ],
            [
                'numero' => 'F003',
                'cliente' => 'Cliente C',
                'importe' => 1100.00,
                'fecha' => '2022-07-10'
            ]
        ]);
    }
}
