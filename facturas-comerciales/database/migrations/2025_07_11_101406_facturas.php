<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facturas', function(Blueprint $table)
        {
            $table->id();
            $table->unsignedInteger('numero');
            $table->longText('cliente');
            $table->unsignedInteger('importe');
            $table->string('fecha');
        });
        // DB::table('facturas')->insert([
        //     [
        //         'numero' => 'F001',
        //         'cliente' => 'Cliente A',
        //         'importe' => 1500.50,
        //         'fecha' => '2022-07-10'
        //     ],
        //     [
        //         'numero' => 'F002',
        //         'cliente' => 'Cliente B',
        //         'importe' => 1200.50,
        //         'fecha' => '2022-07-10'
        //     ],
        //     [
        //         'numero' => 'F003',
        //         'cliente' => 'Cliente C',
        //         'importe' => 1100.00,
        //         'fecha' => '2022-07-10'
        //     ]
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
