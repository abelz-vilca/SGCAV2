<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'programas_estudios';
    protected $fillable = [
            
         'nombre_especialidades',
         'CUI',/*código único de identificación*/
         'programa_estudio_id'
                
     ]
}
