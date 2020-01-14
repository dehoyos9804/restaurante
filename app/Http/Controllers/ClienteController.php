<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\TipoCliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
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
        $vartipocliente=TipoCLiente::all();
        $varcliente=Cliente::all();
        return view('clientes.create')->with('vartipocliente',$vartipocliente)->with('varcliente',$varcliente);
    }
    public function create(){
        $vartipocliente=TipoCLiente::all();
        $varcliente=Cliente::all();
        
        return view('clientes.create')
        ->with('vartipocliente',$vartipocliente)
        ->with('varcliente',$varcliente);
    }

    public function store(Request $request){
        /*$datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');*/

        $varcliente=new Cliente;
        $varcliente->cedula=$request->input('cedula');
        $varcliente->nombres=$request->input('nombres');
        $varcliente->apellidos=$request->input('apellidos');
        $varcliente->genero=$request->input('genero');
        $varcliente->direccion=$request->input('direccion');
        $varcliente->telefono=$request->input('telefono');
        $varcliente->cod_tipo_cliente=$request->input('tipocliente');
        $varcliente->save();

        return redirect()->route('clientes.create');
    }

    public function edit($cedula){
        //$varcomida=Comida::find($id_comida);
        $varcliente=Cliente::where('cedula',$cedula)->first();
        $vartipocliente=TipoCliente::all();
        return view('clientes.edit')->with('varcliente',$varcliente)->with('vartipocliente',$vartipocliente);
    }

    public function update(Request $request,$cedula){
        $varcliente=Cliente::find($cedula);
        $datos=array();
        $datos['nombres']=$request->input('nombres');
        $datos['apellidos']=$request->input('apellidos');
        $datos['genero']=$request->input('genero');
        $datos['direccion']=$request->input('direccion');
        $datos['telefono']=$request->input('telefono');
        $datos['cod_tipo_cliente']=$request->input('tipocliente');
        $varcliente->update($datos);
        return redirect()->route('clientes.create');
    }

    public function delete($cedula){
        $varcliente=Cliente::find($cedula);
        $varcliente->delete();
        return redirect()->route('clientes.create');
    }


    //
}
