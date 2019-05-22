<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tabla_ingredientes');
        Schema::create('tabla_ingredientes', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nombre',50);
            $table->char('proveedor',50);
            $table->timestamps();
        });

        Schema::dropIfExists('tabla_platos');
        Schema::create('tabla_platos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nombre',50);
            $table->double('valor');
            $table->timestamps();
        });

        Schema::dropIfExists('tabla_platos_ingredientes');
        Schema::create('tabla_platos_ingredientes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('codPlato');
            $table->foreign('codPlato')->references('id')->on('tabla_platos');
            $table->unsignedInteger('codIngrediete');
            $table->foreign('codIngrediete')->references('id')->on('tabla_ingredientes');
            $table->double('cantidad');
            $table->timestamps();
        });

        Schema::dropIfExists('tabla_ordenes');
        Schema::create('tabla_ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->date("fecha");
            $table->unsignedInteger('Num_Mesa');
            $table->char("Estado",1);
            $table->timestamps();
        });

        Schema::dropIfExists('tabla_ordenes_platos');
        Schema::create('tabla_ordenes_platos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Num_Orden');
            $table->foreign('Num_Orden')->references('id')->on('tabla_ordenes');
            $table->unsignedInteger('codPlato');
            $table->foreign('codPlato')->references('id')->on('tabla_platos');
            $table->unsignedInteger('Cantidad');
            $table->double("valor");
            $table->timestamps();
        });        

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabla_ingrediente');
        Schema::dropIfExists('tabla_plato');
        Schema::dropIfExists('tabla_plato_ingrediente');
        Schema::dropIfExists('tabla_orden');
        Schema::dropIfExists('tabla_Orden_Plato');
    }
}
