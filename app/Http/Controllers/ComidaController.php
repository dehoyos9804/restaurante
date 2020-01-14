<?php

namespace App\Http\Controllers;
use App\Models\Comida;
use App\Models\TipoComida;
use Illuminate\Http\Request;

class ComidaController extends Controller
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
        $vartipocomida=TipoComida::all();
        $varcomida=Comida::all();
        return view('comidas.create')->with('vartipocomida',$vartipocomida)->with('varcomida',$varcomida);
    }
    public function create(){
        $vartipocomida=TipoComida::all();
        $varcomida=Comida::all();
        $prueba=Comida::all()->last();
        return view('comidas.create')
        ->with('vartipocomida',$vartipocomida)
        ->with('varcomida',$varcomida)
        ->with('prueba',$prueba);
    }

    public function store(Request $request){
        /*$datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');*/

        $varcomida=new Comida;
        //$varcomida->id_comida=$request->input('idcomida');
        $varcomida->nombre_comida=$request->input('nombrecomida');
        $varcomida->descripcion=$request->input('descripcion');
        $varcomida->precio=$request->input('precio');
        $varcomida->cod_tipo_comida=$request->input('codtipocomida');
        $varcomida->save();

        return redirect()->route('comidas.create');
    }

    public function edit($id_comida){
        //$varcomida=Comida::find($id_comida);
        $varcomida=Comida::where('id_comida',$id_comida)->first();
        $vartipocomida=TipoComida::all();
        return view('comidas.edit')->with('varcomida',$varcomida)->with('vartipocomida',$vartipocomida);
    }

    public function update(Request $request,$id_comida){
        $varcomida=Comida::find($id_comida);
        $datos=array();
        $datos['nombre_comida']=$request->input('nombrecomida');
        $datos['descripcion']=$request->input('descripcion');
        $datos['precio']=$request->input('precio');
        $datos['cod_tipo_comida']=$request->input('codtipocomida');
        $varcomida->update($datos);
        return redirect()->route('comidas.create');
    }

    public function delete($id_comida){
        $varcomida=Comida::find($id_comida);
        $varcomida->delete();
        return redirect()->route('comidas.create');
    }

    //
}
