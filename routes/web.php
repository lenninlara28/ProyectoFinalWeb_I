<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts/admin');
});

Route::resource('almacen/Ingrediente','IngredienteController');
Route::resource('almacen/Plato','PlatoController');

Route::resource('almacen/PlatosIngredientes','PlatosIngredientesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
