<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificaado extends Model
{
    protected $table = 'certificados';
    protected $fillable = [
        
        'nombres',
        'idcertificado',
        'fecha'
    ];
}
