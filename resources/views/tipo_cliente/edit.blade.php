@extends('plantilla.plantilla')
@section('titulo','proyecto-lumen')
@section('contenido')
    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formtipocliente" name="formtipocliente" action="{{route('tipo_cliente.update',['id'=>$vartipocliente->cod_tipo_cliente])}}" method="POST">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h5 class="panel-title"><span class="fa  fa-cutlery"></span><b> Tipo Cliente</b></h5>
                <ul class="panel-controls">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>
            </div>
            <div class="panel-body">
              <div class="row">
                <input type="hidden" name="_method" value="PATCH">
                <div class="col-xs-12">
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Tipo Cliente:</label>
                    <div class="col-md-9">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" id="nametipocliente" name="nametipocliente" class="form-control" placeholder="escriba un nuevo tipo de cliente" value="{{$vartipocliente->nombre_tipo_cliente}}" />
                      </div>                                            
                    </div>
                  </div>
                </div>
            </div> 
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table table-responsive">
                           <table class="table table-bordered table-striped table-actions table datatable">
                               <thead>
                                   <th width="50" class="text-center">#</th>
                                   <th class="text-center">Tipo Cliente</th>
                                   <th width="120" class="text-center">actions</th>
                               </thead>
                                  <tr>
                                   <td class="text-center">{{$vartipocliente->cod_tipo_cliente}}</td>
                                   <td class="text-center">{{$vartipocliente->nombre_tipo_cliente}}</td>
                                   <td>
                                        <a href="{{route('tipo_cliente.edit',['id'=>$vartipocliente->cod_tipo_cliente])}}" class="btn btn-default btn-rounded btn-sm">
                                            <span class="fa fa-pencil"></span>
                                        </a>
                                        <a href="{{route('tipo_cliente.delete',['id'=>$vartipocliente->cod_tipo_cliente])}}" class="btn btn-danger btn-rounded btn-sm">
                                            <span class="fa fa-times"></span>
                                        </a>
                                   </td>
                                  </tr>
                           </table> 
                        </div>
                    </div>
                </div>
              </div><!--fin panel body-->
              <div class="panel-footer">
                <a href="{{route('clientes.create')}}" class="btn btn-info btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancel</a>
              <button class="btn btn-info pull-right" type="submit">Registrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection

@section('menu')
  @include('plantilla.menu')
@endsection

@section('titlepage')
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Registro Tipo Cliente</b></h2>
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