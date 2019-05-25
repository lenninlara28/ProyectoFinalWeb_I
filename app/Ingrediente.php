<?php

namespace proyectoFinalWeb;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'tabla_ingredientes';

    protected $primaryKey= 'idIngrediente';

    public $timestamps = false;

    protected $fillabel= [
    	'nombre',
    	'proveedor',
    ];
}
