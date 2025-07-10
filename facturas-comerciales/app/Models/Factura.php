<?php

namespace App\Models;

class Factura
{
    //Método estático que retorna un array de facturas simuladas 
    public static function todas ()
    {
        return [
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
            ];
    }
}
