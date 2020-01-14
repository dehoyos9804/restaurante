<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class TipoCliente extends Model 
{
   	protected $primaryKey='cod_tipo_cliente';

   	protected $table='tipoclientes';

    protected $fillable = ['cod_tipo_cliente', 'nombre_tipo_cliente'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function clientes(){
    	return $this->belongsTo('\App\Models\Cliente','clientes','cod_tipo_cliente');
    }
}
