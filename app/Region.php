<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regiones';
    protected $fillable = [
            
         'nombre_region'
         
     ];
}
