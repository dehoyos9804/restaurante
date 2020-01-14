<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Models\TipoEmpleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
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
        $varempleado=Empleado::all();
        return view('empleados.create')->with('vartipoempleado',$vartipoempleado)->with('varempleado',$varempleado);
    }
    public function create(){
        $vartipoempleado=TipoEmpleado::all();
        $varempleado=Empleado::all();
        
        return view('empleados.create')
        ->with('vartipoempleado',$vartipoempleado)
        ->with('varempleado',$varempleado);
    }

    public function store(Request $request){

        $varempleado=new Empleado;
        $varempleado->cedula=$request->input('cedulaempleado');
        $varempleado->nombres_completos=$request->input('nombreempleado');
        $varempleado->apellidos_completos=$request->input('apellidoempleado');
        $varempleado->sexo=$request->input('genesexo');
        $varempleado->direccion=$request->input('direccion');
        $varempleado->telefono=$request->input('telefono');
        $varempleado->clave_empleado=$request->input('claveempleado');
        $varempleado->cod_tipo_empleado=$request->input('tipoempleado');
        $varempleado->save();

        return redirect()->route('empleados.create');
    }

    public function edit($cedula){
        //$varcomida=Comida::find($id_comida);
        $varempleado=Empleado::where('cedula',$cedula)->first();
        $vartipoempleado=TipoEmpleado::all();
        return view('empleados.edit')->with('varempleado',$varempleado)->with('vartipoempleado',$vartipoempleado);
    }

    public function update(Request $request,$cedula){
        $varempleado=Empleado::find($cedula);
        $datos=array();
        $datos['nombres_completos']=$request->input('nombreempleado');
        $datos['apellidos_completos']=$request->input('apellidoempleado');
        $datos['sexo']=$request->input('genesexo');
        $datos['direccion']=$request->input('direccion');
        $datos['telefono']=$request->input('telefono');
        $datos['clave_empleado']=$request->input('claveempleado');
        $datos['cod_tipo_empleado']=$request->input('tipoempleado');
        $varempleado->update($datos);

        return redirect()->route('empleados.create');
    }

    public function delete($cedula){
        $varempleado=Empleado::find($cedula);
        $varempleado->delete();
        return redirect()->route('empleados.create');
    }

    //
}
