<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_v_s', function (Blueprint $table) {
            $table->id();

            $table->string('estilo')->nullable();
            $table->string('file')->nullable();
            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('edad')->nullable();
            $table->string('telefono1')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('email')->nullable();
            $table->string('nivel_estudios')->nullable();
            $table->string('nombre_institucion')->nullable();
            $table->date('fecha_egreso')->nullable();

            $table->string('aptitud1')->nullable();
            $table->string('aptitud2')->nullable();
            $table->string('aptitud3')->nullable();
            $table->string('aptitud4')->nullable();
            $table->string('aptitud5')->nullable();

            $table->string('conocimiento1')->nullable();
            $table->string('conocimiento2')->nullable();
            $table->string('conocimiento3')->nullable();
            $table->string('conocimiento4')->nullable();
            $table->string('conocimiento5')->nullable();

            $table->string('idioma1')->nullable();
            $table->string('idioma2')->nullable();
            $table->string('idioma3')->nullable();
            $table->string('idioma4')->nullable();
            $table->string('idioma5')->nullable();

            $table->string('empresa1')->nullable();
            $table->string('puesto1')->nullable();
            $table->date('fecha_ingreso1')->nullable();
            $table->date('fecha_egreso1')->nullable();
            $table->string('descripcion_puesto1')->nullable();
            $table->string('empresa2')->nullable();
            $table->string('puesto2')->nullable();
            $table->date('fecha_ingreso2')->nullable();
            $table->date('fecha_egreso2')->nullable();
            $table->string('descripcion_puesto2')->nullable();
            $table->string('empresa3')->nullable();
            $table->string('puesto3')->nullable();
            $table->date('fecha_ingreso3')->nullable();
            $table->date('fecha_egreso3')->nullable();
            $table->string('descripcion_puesto3')->nullable();
            $table->string('empresa4')->nullable();
            $table->string('puesto4')->nullable();
            $table->date('fecha_ingreso4')->nullable();
            $table->date('fecha_egreso4')->nullable();
            $table->string('descripcion_puesto4')->nullable();
            $table->string('empresa5')->nullable();
            $table->string('puesto5')->nullable();
            $table->date('fecha_ingreso5')->nullable();
            $table->date('fecha_egreso5')->nullable();
            $table->string('descripcion_puesto5')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_v_s');
    }
}
