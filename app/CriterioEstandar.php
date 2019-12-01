<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CriterioEstandar extends Model
{
    protected $table = "criterio_estandar";
    protected $fillable = [
        
        'archivo',
        'calificacion',
        'descripcion',
        'justificacion',
        'fecha',
        'estandar_id',
        'criterio_id',

    ];
    public function estandares()
    {
        return $this->belongsTo(
            'App\Estandar',

            'estandar_id'
        );
    }
    public function programas()
    {
        return $this->belongsTo(
            'App\Programa',
            'criterio_id'

        );
    }
}
