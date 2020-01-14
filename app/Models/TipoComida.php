<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class TipoComida extends Model 
{

	protected $primaryKey='cod_tipo_comida';
	
   	protected $table='tipocomidas';

    protected $fillable = ['cod_tipo_comida', 'nombre_tipo_comida'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function comidas(){
    	return $this->belongsTo('\App\Models\Comida','comidas','cod_tipo_comida');
    }
}
