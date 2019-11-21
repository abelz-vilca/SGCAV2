<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criterio extends Model
{
    protected $table = 'criterios';
    protected $fillable = [
        'id',
        'nombre_criterio',


    ];
    public function estandar()
    {
        return $this->belongsToMany(
            'App\Estandar',
            'criterio_estandar',
            'criterio_id',
            'estandar_id'
        )->withPivot(
            'estandar_id',
            'archivo',
            'calificacion',
            'descripcion',
            'justificacion',
            'fecha'
        );
    }
}
