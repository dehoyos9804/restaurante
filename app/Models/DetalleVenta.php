<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class DetalleVenta extends Model 
{
    protected $table='detalles_ventas';

    protected $primaryKey='cod_venta';

    protected $fillable = ['cod_venta', 'cod_comida', 'cantidad' ];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function comida(){
    	return $this->belongsTo('\App\Models\Comida','comidas','cod_comida');
    }

    public function venta(){
    	return $this->belongsTo('\App\Models\Ventas','ventas','cod_venta');
    }
}
