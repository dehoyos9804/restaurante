<?php

namespace App\Http\Controllers;
use App\Models\TipoCliente;
use Illuminate\Http\Request;

class TipoClienteController extends Controller
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
        $vartipocliente=TipoCliente::all();
        return view('tipo_cliente.create',['vartipocliente'=>$vartipocliente]);
    }
    public function create(){
        $vartipocliente=TipoCliente::all();
        return view('tipo_cliente.create',['vartipocliente'=>$vartipocliente]);
    }

    public function store(Request $request){
        $datos=$request->all();
        $vartipocliente = new TipoCliente;
        $vartipocliente->nombre_tipo_cliente=$request->input('nametipocliente');
        $vartipocliente->save();
        return redirect()->route('tipo_cliente.create');
    }

    public function edit($cedula){
        $vartipocliente=TipoCliente::find($cedula);
        return view('tipo_cliente.edit')->with('vartipocliente',$vartipocliente);
    }

    public function update(Request $request,$cedula){
        $vartipocliente=TipoCliente::find($cedula);
        $datos=array();
        $datos['nombre_tipo_cliente']=$request->input('nametipocliente');
        $vartipocliente->update($datos);
        return redirect()->route('tipo_cliente.create');

    }

    public function delete($cedula){
        $vartipocliente=TipoCliente::find($cedula);
        $vartipocliente->delete();
        return redirect()->route('tipo_cliente.create');
    }

    //
}