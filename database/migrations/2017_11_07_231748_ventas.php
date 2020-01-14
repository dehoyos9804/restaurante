<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
             $table->increments('id_venta');
            $table->date('fecha_venta');
            $table->double('total_venta');
            $table->string('tipo_venta');
            $table->integer('cod_empleado')->unsigned();
            $table->integer('cod_cliente')->unsigned();
            $table->foreign('cod_empleado')->references('cedula')->on('empleados')->onDelete('CASCADE')->onCascade('CASCADE'); 
            $table->foreign('cod_cliente')->references('cedula')->on('clientes')->onDelete('CASCADE')->onCascade('CASCADE');
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
        Schema::dropIfExists('ventas');
    }
}
