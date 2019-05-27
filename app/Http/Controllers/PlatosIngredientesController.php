<?php

namespace proyectoFinalWeb\Http\Controllers;

use Illuminate\Http\Request;
use proyectoFinalWeb\http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use proyectoFinalWeb\http\Requests\PlatosIngredientesFormRequest;
use proyectoFinalWeb\http\Requests\PlatoFormRequest;
use proyectoFinalWeb\PlatoIngrediente;
use proyectoFinalWeb\Plato;
use proyectoFinalWeb\Ingrediente;
use DB;

class PlatosIngredientesController extends Controller
{
 public function __construct()
    {

    }

    public function create()
    {
        $platos= DB::table('tabla_platos')->where('nombre','<>'," ")->orderBy('id','asc')->
            paginate(7);
        $ingredientes = DB::table('tabla_ingredientes');
        return view("almacen.PlatosIngredientes.create",["platos"=>$platos,"ingredientes"=>$ingredientes]);
    }

    public function store(PlatosIngredientesFormRequest $request)
    {
        $platoIngrediente = new PlatoIngrediente;
        $platoIngrediente->codPlato=$idPlato;
        $platoIngrediente->codIngrediente=$request->get('codIngrediente');
        $plato->cantidad=$request->get('cantidad');
        $plato->save();
        return Redirect::to('almacen/Plato');

    }

    public function edit($id)
    {
        $plato = DB::table('tabla_platos')->where('id','=',$id)->pluck('nombre');
        $ingredientes = DB::table('tabla_platos_ingredientes')->where('codPlato','=',$id)->pluck('codIngrediente','cantidad');
        $nombreIngrediente= DB::table('tabla_ingredientes')->pluck('nombre','idIngrediente');
        return view("almacen.PlatosIngredientes.index",["plato"=>$plato,"ingredientesnombres"=>$nombreIngrediente,"ingredientes"=>$ingredientes]);
    }
}
