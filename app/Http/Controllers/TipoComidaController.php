<?php

namespace App\Http\Controllers;
use App\Models\TipoComida;
use Illuminate\Http\Request;
class TipoComidaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $tiposcomidas=TipoComida::all();
        return view('tipo_comida.create',['tiposcomidas'=>$tiposcomidas]);
    }
    public function create(){
        $tiposcomidas=TipoComida::all();
        return view('tipo_comida.create',['tiposcomidas'=>$tiposcomidas]);
    }

    public function store(Request $request){
        $datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');
    }

    public function edit($cod_tipo_comida){
        $tiposcomidas=TipoComida::find($cod_tipo_comida);
        return view('tipo_comida.edit')->with('tiposcomidas',$tiposcomidas);
    }

    public function update(Request $request,$cod_tipo_comida){
        $tiposcomidas=TipoComida::find($cod_tipo_comida);
        $datos=array();
        $datos['nombre_tipo_comida']=$request->input('nombretipocomida');
        $tiposcomidas->update($datos);
        return redirect()->route('tipo_comida.create');

    }

    public function delete($cod_tipo_comida){
        $tiposcomidas=TipoComida::find($cod_tipo_comida);
        $tiposcomidas->delete();
        return redirect()->route('tipo_comida.create');
    }

    //
}