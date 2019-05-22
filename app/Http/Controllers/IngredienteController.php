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
    		$ingredientes = DB::table('tabla_ingredientes')->where('nombre','LIKE','%'.$query.'%')->orderBy('id','desc');
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
    	$ngrediente->save();
    	return Redirect::to('almacen/ingrediente');

    }

    public function show($id)
    {
    	return view("alamacen.show",["ingrediente"=>Ingrediente::findOrFail($id)]);
    }

    public function edit($id)
    {
    	return view("alamacen.edit",["ingrediente"=>Ingrediente::findOrFail($id)]);
    }

    public function update(IngredienteFormRequest $request,$id)
    {
    	$ingrediente=Ingrediente::findOrFail($id);
    	$ingrediente->nombre=$request->get('nombre');
    	$ingrediente->nombre=$request->get('proveedor');
    	$ingrediente->update();
    	return Redirect::to('almacen/Ingrediente');
    }

    public function destroy()
    {
    	
    }
}
