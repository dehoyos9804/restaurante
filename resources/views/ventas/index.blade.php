@extends('plantilla.plantilla')
@section('titulo','proyecto-lumen')
@section('contenido')
    <div class="row">
      <div class="col-md-12">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h5 class="panel-title"><span class="fa  fa-cutlery"></span><b> Ventas Registradas</b></h5>
                <ul class="panel-controls">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table table-responsive">
                           <table class="table table-bordered table-striped table-actions table datatable">
                               <thead>
                                   <th width="50" class="text-center">N° Factura</th>
                                   <th class="text-center">Cliente</th>
                                   <th width="100" class="text-center">fecha venta</th>
                                   <th width="100" class="text-center">Tipo Venta</th>
                                   <th width="100" class="text-center">Total</th>
                                   <th width="120" class="text-center">actions</th>
                               </thead>
                                @foreach($varventas as $venta)
                                  <tr>
                                   <td class="text-center">{{$venta->id_venta}}</td>
                                   <td class="text-center">
                                    @foreach($varclientes as $cliente)
                                      @if($venta->cod_cliente==$cliente->cedula)
                                        {{$cliente->nombres}} {{$cliente->apellidos}}
                                      @endif
                                    @endforeach
                                   </td>
                                   <td class="text-center">{{$venta->fecha_venta}}</td>
                                   <td class="text-center">{{$venta->tipo_venta}}</td>
                                   <td class="text-center">{{$venta->total_venta}}</td>
                                   <td>
                                      <a href="{{route('pdf.reporteVenta',['id'=>$venta->id_venta])}}" class="btn btn-danger btn-rounded btn-sm">
                                          <span class="fa fa-arrow-down"></span>Ver Reporte
                                      </a>
                                   </td>
                                  </tr>
                                @endforeach
                           </table> 
                        </div>
                    </div>
                </div>
              </div><!--fin panel body-->
          </div>
      </div>
    </div>
@endsection

@section('menu')
  @include('plantilla.menu')
@endsection

@section('titlepage')
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Registros</b></h2>
@endsection

@section('men')
    <li>
        <a href="#">
           <span class="fa fa-dashboard"></span> Home
        </a>
    </li>                    
    <li class="#">Registro</li>
    <li class="active">Comida</li>
    <li class="active">Tipo Comida</li>
@endsection