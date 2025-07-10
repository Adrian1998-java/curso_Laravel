<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public static function todo()
    {
        return 
        [
            [
            'nombre'=>'Camisa Clasica',
            'precio'=>29.99,
            'description'=>'Camisa de algodón para uso diario',
            ],
            [
            'nombre'=>'Pantalón Skinny',
            'precio'=>19.99,
            'description'=>'Pantalón ajustado para resaltar piernas',
            ],
            [
            'nombre'=>'Zapatos de piel',
            'precio'=>19.99,
            'description'=>'Zapatos con piel de cocodrilo de la carcel de Florida',
            ]

        ];
    }
}
