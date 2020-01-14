<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Comida extends Model 
{
	protected $primaryKey='id_comida';

    protected $table='comidas';

    protected $fillable = ['id_comida', 'nombre_comida', 'descripcion', 'precio' , 'cod_tipo_comida' ];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function tiposcomidas(){
    	return $this->hasMany('\App\Models\TipoComida', 'tipocomidas','cod_tipo_comida');
    }

    public function detalle_ventas(){
    	return $this->belongsToMany('\App\Models\DetalleVenta','detalles_ventas','cod_venta','cod_comida');
    }
}