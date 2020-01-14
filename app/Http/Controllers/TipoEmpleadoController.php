<?php

namespace App\Http\Controllers;
use App\Models\TipoEmpleado;
use Illuminate\Http\Request;

class TipoEmpleadoController extends Controller
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
        $vartipoempleado=TipoEmpleado::all();
        return view('tipo_empleado.create',['vartipoempleado'=>$vartipoempleado]);
    }
    public function create(){
        $vartipoempleado=TipoEmpleado::all();
        return view('tipo_empleado.create',['vartipoempleado'=>$vartipoempleado]);
    }

    public function store(Request $request){
        $datos=$request->all();
        $vartipoempleado = new TipoEmpleado;
        $vartipoempleado->nombre_tipo_empleado=$request->input('idempleado');
        $vartipoempleado->save();

        return redirect()->route('tipo_empleado.create');
    }

    public function edit($cedula){
        $vartipoempleado=TipoEmpleado::find($cedula);
        return view('tipo_empleado.edit')->with('vartipoempleado',$vartipoempleado);
    }

    public function update(Request $request,$cedula){
        $vartipoempleado=TipoEmpleado::find($cedula);
        $datos=array();
        $datos['nombre_tipo_empleado']=$request->input('idempleado');
        $vartipoempleado->update($datos);
        return redirect()->route('tipo_empleado.create');

    }

    public function delete($cedula){
        $vartipoempleado=TipoEmpleado::find($cedula);
        $vartipoempleado->delete();
        return redirect()->route('tipo_empleado.create');
    }

    //
}