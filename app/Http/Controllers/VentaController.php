<?php

namespace App\Http\Controllers;
use App\Models\Comida;
use App\Models\Empleado;
use App\Models\Cliente;
use App\Models\Venta;
use App\Models\DetalleVenta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use DB;


class VentaController extends Controller
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
        $varclientes=Cliente::all();
        $varventas=Venta::all();
        return view('ventas.index')->with('varclientes',$varclientes)->with('varventas',$varventas);
    }
    public function create(){
        $varcomida=Comida::all();
        $varempleados=Empleado::all();
        $varclientes = Cliente::all();
        

        
        return view('ventas.create')
        ->with('varcomida',$varcomida)
        ->with('varempleados',$varempleados)
        ->with('varclientes',$varclientes);
    }

    public function store(Request $request){

        $ventas=new Venta;
        $ventas->id_venta=$request->input('idventa');
        $ventas->fecha_venta=$request->input('fecha_venta');
        $ventas->total_venta=$request->input('deta_total');
        $ventas->tipo_venta=$request->input('tipo_venta');
        $ventas->cod_empleado=$request->input('emp_vendedor');
        $ventas->cod_cliente=$request->input('cli_idcliente');
        $ventas->save();

        $cod_venta=$request->input('idventa');
        $cod_comida=$request->input('idcomida');
        $cantidad=$request->input('cantidad');


        $contador=0;
        /*$detalle=new DetalleVenta;
        $detalle->cod_venta=$request->input('idventa');
        $detalle->cod_comida=$cod_comida[$contador];
        $detalle->cantidad=$cantidad[$contador];
        $detalle->save();
        //dd(count($cod_comida));*/

        while ($contador < count($cod_comida)) {
            $detalle=new DetalleVenta;

            $detalle->cod_venta=$ventas->id_venta;
            
            $detalle->cod_comida=$cod_comida[$contador];
            $detalle->cantidad=$cantidad[$contador];
            $detalle->save();
            

            $contador=$contador+1;
        }

        return redirect()->route('ventas.create');

    }

    public function edit($cedula){
        
    }

    public function update(Request $request,$cedula){
       
    }

    public function delete($cedula){
       
    }

    public function reportes($id_venta){
        $reporteventas=DB::table('ventas')
                       ->join('detalles_ventas','detalles_ventas.cod_venta','=','ventas.id_venta')
                       ->join('clientes','clientes.cedula','=','ventas.cod_cliente')
                       ->join('comidas','comidas.id_comida','=','detalles_ventas.cod_comida')
                       ->select('comidas.id_comida','comidas.nombre_comida','comidas.precio','detalles_ventas.cantidad','comidas.precio')
                       ->where('ventas.id_venta','=',$id_venta)
                       ->get();

        $ventas=Venta::where('id_venta',$id_venta)->first();
        $clientes=Cliente::where('cedula',$ventas->cod_cliente)->first();
        return view('pdf.reporteVenta',compact('reporteventas'),compact('ventas','clientes'));
       /*$pdf = PDF::loadView('pdf.reporteVenta',compact('reporteventas'),compact('ventas','clientes'));
       return $pdf->download('invoice.pdf');*/
    }

    //
}
