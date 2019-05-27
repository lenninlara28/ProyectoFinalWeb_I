<?php

namespace proyectoFinalWeb\Http\Controllers;

use Illuminate\Http\Request;

use proyectoFinalWeb\http\Requests;
use proyectoFinalWeb\Ingrediente;
use Illuminate\Support\Facades\Redirect;
use proyectoFinalWeb\http\Requests\IngredienteFormRequest;
use DB;

class IngredienteController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
    	if ($request) {
    		$query = trim($request->get('searchText'));
    		$ingredientes = DB::table('tabla_ingredientes')->where('nombre','LIKE','%'.$query.'%')->orderBy('idIngrediente','asc')->
            paginate(7); 
    		return view('almacen.ingrediente.index',["ingredientes"=>$ingredientes,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	return view("almacen.Ingrediente.create");
    }

    public function store(IngredienteFormRequest $request)
    {
    	$ingrediente = new Ingrediente;
    	$ingrediente->nombre=$request->get('nombre');
    	$ingrediente->proveedor=$request->get('proveedor');
    	$ingrediente->save();
    	return Redirect::to('almacen/Ingrediente');

    }

    public function show($idIngrediente)
    {
    	return view("almacen.Ingrediente.show",["ingrediente"=>Ingrediente::findOrFail($idIngrediente)]);
    }

    public function edit($idIngrediente)
    {
    	return view("almacen.Ingrediente.edit",["ingrediente"=>Ingrediente::findOrFail($idIngrediente)]);
    }

    public function update(IngredienteFormRequest $request,$idIngrediente)
    {
    	$ingrediente=Ingrediente::findOrFail($idIngrediente);
    	$ingrediente->nombre=$request->get('nombre');
    	$ingrediente->proveedor=$request->get('proveedor');
    	$ingrediente->update();
    	return Redirect::to('almacen/Ingrediente');
    }

    public function destroy($id)
    {
    	$ingrediente=Ingrediente::findOrFail($id);
        $ingrediente->delete();
        return Redirect::to('almacen/Ingrediente');
    }
}
