<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('cedula')-> unsigned();
            $table->primary('cedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('genero');
            $table->string('direccion');
            $table->string('telefono');
            $table->integer('cod_tipo_cliente')-> unsigned();
            $table->foreign('cod_tipo_cliente')->references('cod_tipo_cliente')->on('tipoclientes')->onDelete('CASCADE')->onCascade('CASCADE'); 
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
        Schema::dropIfExists('clientes');
    }
}
