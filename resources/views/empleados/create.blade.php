@extends('plantilla.plantilla')
@section('titulo','proyecto °| lumen')
@section('contenido')
<!--<div class="container">-->
  <!--<div class="page-content-wrap">-->
    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formclientes" name="formclientes" action="{{route('empleados.store')}}" method="POST">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa fa-user"></span><b> Empleados</b></h3>
              <ul class="panel-controls">
                  <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                  <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                  <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
              </ul>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Cedula:</label>
                    <div class="col-md-9">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="number" id="cedulaempleado" name="cedulaempleado" class="form-control" placeholder="Numero De Cedula" />
                      </div>                                            
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Apellidos:</label>
                    <div class="col-md-9 col-xs-12">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-comment"></span></span>
                        <input type="text" id="apellidoempleado" name="apellidoempleado" class="form-control" placeholder="Escriba El Apellido">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-3 col-xs-12 control-label">Genero:</label>
                      <div class="col-md-9 col-xs-12">                                              
                          <select class="form-control select" id="genesexo" name="genesexo">
                              <option selected disabled>==seleccione==</option>
                              <option value="masculino">Masculino</option>
                              <option value="femenino">Femenino</option>
                              <option value="otros">Otros</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Telefonos:</label>
                    <div class="col-md-9">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-usd"></span></span>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Escriba Su Télefono" />
                      </div> 
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Nombres:</label>
                    <div class="col-md-9">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-comment"></span></span>
                        <input type="text" class="form-control" id="nombreempleado" name="nombreempleado" placeholder="Escriba El Nombre" />
                      </div>                                            
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Dirección:</label>
                    <div class="col-md-9">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-usd"></span></span>
                        <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Escriba la Dirección" />
                      </div> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Clave Empleado:</label>
                    <div class="col-md-9">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-usd"></span></span>
                        <input type="password" id="claveempleado" name="claveempleado" class="form-control" placeholder="clave" />
                      </div> 
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-3 col-xs-12 control-label">Tipo Empleado</label>
                      <div class="col-md-6 col-xs-12">                                                            
                          <select class="form-control select" id="tipoempleado" name="tipoempleado">
                              <option selected disabled>==seleccione==</option>
                              @foreach($vartipoempleado as $tipoempleado)
                                <option value="{{$tipoempleado->cod_tipo_empleado}}">{{$tipoempleado->nombre_tipo_empleado}}</option>
                              @endforeach
                          </select>
                              <span class="help-block">
                                  Tipo De Empleado
                              </span>
                      </div>
                      <div class="col-md-3">
                        <a href="{{route('tipo_empleado.create')}}" class="btn btn-info btn-addon"><i class="glyphicon glyphicon-plus"></i>Tipo empleado</a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="table table-responsive">
                         <table class="table table-bordered table-striped table-actions table datatable">
                             <thead>
                                 <th width="100" class="text-center">N° cedula</th>
                                 <th class="text-center">Nombre y Apellidos</th>
                                 <th width="100" class="text-center">Telefono</th>
                                 <th width="200" class="text-center">Tipo Empleado</th>
                                 <th width="120">actions</th>
                             </thead>
                             @foreach($varempleado as $empleado)
                                <tr>
                                    <td class="text-center">{{$empleado->cedula}}</td>
                                    <td class="text-center">{{$empleado->nombres_completos}} {{$empleado->apellidos_completos}}</td>
                                    <td class="text-center">{{$empleado->telefono}}</td>
                                    <td class="text-center">
                                     @foreach($vartipoempleado as $tipoempleado)
                                      @if($empleado->cod_tipo_empleado==$tipoempleado->cod_tipo_empleado)
                                        {{$tipoempleado->nombre_tipo_empleado}}
                                      @endif
                                     @endforeach
                                    </td>
                                    <td>
                                         <a class="btn btn-default btn-rounded btn-sm" href="{{ route('empleados.edit',['id'=>$empleado->cedula]) }}">
                                             <span class="fa fa-pencil"></span>
                                         </a>
                                         <a class="btn btn-danger btn-rounded btn-sm" href="{{ route('empleados.delete',['id'=>$empleado->cedula]) }}">
                                             <span class="fa fa-times"></span>
                                         </a>
                                    </td>
                                </tr>
                            @endforeach
                         </table> 
                      </div>
                  </div>
              </div>
              </div>
              <div class="panel-footer">
              <button class="btn btn-info pull-right" type="submit">Registrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  <!--</div>-->
<!--</div>-->
@endsection

@section('menu')
  @include('plantilla.menu')
@endsection

@section('titlepage')
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Registro De Empleados</b></h2>
@endsection

@section('men')
    <li>
        <a href="#">
           <span class="fa fa-dashboard"></span> Home
        </a>
    </li>                    
    <li class="#">Registro</li>
    <li class="active">Cliente</li>
    <li class="active">create</li>
@endsection