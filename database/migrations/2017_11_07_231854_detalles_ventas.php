<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetallesVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_ventas', function (Blueprint $table) {
            $table->integer('cod_venta')->unsigned();
            $table->integer('cod_comida')->unsigned();
            $table->primary(array('cod_venta','cod_comida'));
            $table->string('cantidad');
            $table->foreign('cod_venta')->references('id_venta')->on('ventas')->onDelete('CASCADE')->onCascade('CASCADE'); 
            $table->foreign('cod_comida')->references('id_comida')->on('comidas')->onDelete('CASCADE')->onCascade('CASCADE');
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
        Schema::dropIfExists('detalles_ventas');
    }
}
