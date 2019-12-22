<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexoestandar extends Model
{
    protected $table = 'anexoestandares';
    protected $fillable = [
        
        'archivoae',
        'Descripcion',
        'anexoep_id',
        'fecha'
        
    ];
    public function estandar_programa()
    {
        return $this->belongsTo(
            'App\estandar_programa',

            'anexoep_id'
        );
    }
}
