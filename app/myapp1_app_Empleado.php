<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [ 'nombre', 'direccion', 'tipoId' ];
    public function tipoIdentificacion() {
        return $this->belongsTo('App\TipoIdentificacion');
    }
    protected $table = 'myapp_empleado';
    
}
