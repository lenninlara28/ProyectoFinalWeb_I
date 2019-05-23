<?php

namespace proyectoFinalWeb;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'tabla_ingredientes';

    protected $primaryKey= 'id';

    public $timestamps = false;

    protected $fillabel= [
    	'id',
    	'nombre',
    	'proveedor',
    ];

    
}
