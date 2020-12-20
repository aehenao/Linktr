<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnlacesDirectos extends Model
{
    protected $table = 'enlaces_directos';

    protected $fillable = [
        'enlace', 'destino', 'tiempo_espera', 'estado', 'imagen', 'nombre_imagen', 'titulo', 'subtitulo'
    ];
}
