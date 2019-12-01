<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    protected $table = 'academicos';
   protected $fillable = [
   		
        'nombre_academico',
        'facultad_id'
        
    ];
}
