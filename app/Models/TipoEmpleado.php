<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class TipoEmpleado extends Model 
{
   	protected $primaryKey='cod_tipo_empleado';

   	protected $table='tipoempleados';

    protected $fillable = ['cod_tipo_empleado', 'nombre_tipo_empleado'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function empleados(){
    	return $this->belongsTo('\App\Models\Empleado','empleados','cod_tipo_empleado');
    }
}