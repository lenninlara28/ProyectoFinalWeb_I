<?php

namespace proyectoFinalWeb\Http\Controllers;

use Illuminate\Http\Request;

use proyectoFinalWeb\http\Requests;
use proyectoFinalWeb\Plato;
use Illuminate\Support\Facades\Redirect;
use proyectoFinalWeb\http\Requests\PlatoFormRequest;
use DB;

class PlatoController extends Controller
{
   	public function __construct()
    {

    }

    public function index(Request $request)
    {
    	if ($request) {
    		$query = trim($request->get('searchText'));
    		$plato = DB::table('tabla_platos')->where('nombre','LIKE','%'.$query.'%')->orderBy('id','asc')->
            paginate(7); 
    		return view('almacen.plato.index',["plato"=>$plato,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	return view("almacen.plato.create");
    }

    public function store(PlatoFormRequest $request)
    {
    	$plato = new Plato;
    	$plato->nombre=$request->get('nombre');
    	$plato->valor=$request->get('valor');
    	$plato->save();
    	return Redirect::to('almacen/Plato');

    }

    public function show($id)
    {
    	return view("almacen.Plato.show",["plato"=>Plato::findOrFail($id)]);
    }

    public function edit($id)
    {
    	return view("almacen.Plato.edit",["plato"=>Plato::findOrFail($id)]);
    }

    public function update(PlatoFormRequest $request,$id)
    {
    	$plato=Plato::findOrFail($id);
    	$plato->nombre=$request->get('nombre');
    	$plato->nombre=$request->get('valor');
    	$plato->update();
    	return Redirect::to('almacen/Plato');
    }

    public function destroy($id)
    {
    	$plato=Plato::findOrFail($id);
        $plato->delete();
        return Redirect::to('almacen/Plato');
    }
}
