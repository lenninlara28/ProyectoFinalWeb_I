<?php

namespace proyectoFinalWeb;

use Illuminate\Database\Eloquent\Model;

class PlatoIngrediente extends Model
{
    protected $table = 'tabla_platos_Ingredientes';

    protected $primaryKey= 'id';

    public $timestamps = false;

    protected $fillabel= [
    	'codPlato',
    	'codIngrediente',
    	'cantidad',
    ];
}
