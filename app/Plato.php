<?php

namespace proyectoFinalWeb;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $table = 'tabla_platos';

    protected $primaryKey= 'id';

    public $timestamps = false;

    protected $fillabel= [
    	'nombre',
    	'valor',
    ];
}
