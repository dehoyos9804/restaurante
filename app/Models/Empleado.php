<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Empleado extends Model 
{
   	protected $primaryKey='cedula';

   	protected $table='empleados';

    protected $fillable = 
    ['cedula', 'nombres_completos', 'apellidos_completos', 'sexo' , 'direccion','telefono','clave_empleado','cod_tipo_empleado' ];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function tiposempleados(){
    	return $this->hasMany('\App\Models\TipoEmpleado', 'tipoempleados','cod_tipo_empleado');
    }

    public function ventas(){
    	return $this->belongsToMany('\App\Models\Venta','ventas','cod_empleado','cod_cliente');
    }
    
}