<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Cliente extends Model 
{
   	protected $primaryKey='cedula';

   	protected $table='clientes';

    protected $fillable = ['cedula', 'nombres', 'apellidos', 'genero' , 'direccion','telefono','cod_tipo_cliente' ];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function tiposclientes(){
    	return $this->hasMany('\App\Models\TipoCliente', 'tipoclientes','cod_tipo_cliente');
    }

    public function venta(){
    	return $this->belongsToMany('\App\Models\Venta','ventas','cod_empleado','cod_cliente');
    }
}
