<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Venta extends Model 
{
    protected $table='ventas';

    protected $primaryKey='id_venta';

    protected $fillable = ['id_venta', 'fecha_venta', 'total_venta','tipo_venta', 'cod_empleado' , 'cod_cliente' ];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function empleados(){
    	return $this->belongsTo('\App\Models\Empleado','empleados','cod_empleado');
    }

    public function clientes(){
    	return $this->belongsTo('\App\Models\Cliente','clientes','cod_cliente');
    }

    public function detalle_ventas(){
    	return $this->belongsToMany('\App\Models\DetalleVenta','detalles_ventas','cod_venta','cod_comida');
    }
}
