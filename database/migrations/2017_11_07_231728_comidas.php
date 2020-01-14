<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comidas', function (Blueprint $table) {
            $table->increments('id_comida');
            $table->string('nombre_comida');
            $table->text('descripcion');
            $table->double('precio');
            $table->integer('cod_tipo_comida')-> unsigned();
            $table->foreign('cod_tipo_comida')->references('cod_tipo_comida')->on('tipocomidas')->onDelete('CASCADE')->onCascade('CASCADE'); 
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
        Schema::dropIfExists('comidas');
    }
}
