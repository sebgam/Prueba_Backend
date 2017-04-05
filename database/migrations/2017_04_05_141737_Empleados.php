<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {

            $table->integer('id_empleado')->primary();
            $table->integer('id_empresa')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('correo');
            $table->foreign('id_empresa')->references('id')->on('empresa');
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
        Schema::dropIfExists('empleados');
    }
}
