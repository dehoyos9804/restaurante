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
            $table->integer('cedula')-> unsigned();
            $table->primary('cedula');
            $table->string('nombres_completos');
            $table->string('apellidos_completos');
            $table->string('sexo');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('clave_empleado');
            $table->integer('cod_tipo_empleado')-> unsigned();
            $table->foreign('cod_tipo_empleado')->references('cod_tipo_empleado')->on('tipoempleados')->onDelete('CASCADE')->onCascade('CASCADE'); 
            $table->softDeletes();
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
