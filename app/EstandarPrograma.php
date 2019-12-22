<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstandarPrograma extends Model
{
    //
    protected $table = "estandar_programa";
    protected $fillable = [
       
        'archivo',
        'calificacion',
        'descripcion',
        'fecha',
        'estandar_id',
        'programa_id',

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
            'programa_id'

        );
    }
    
}
