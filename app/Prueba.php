<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    protected $table = 'pruebas';
    protected $fillable = [
        'id',
        'archivo',
        'estandares_id',
        'programas_id'

    ];
}
