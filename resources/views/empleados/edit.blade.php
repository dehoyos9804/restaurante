@extends('plantilla.plantilla')
@section('titulo','proyecto °| lumen')
@section('contenido')
<!--<div class="container">-->
  <!--<div class="page-content-wrap">-->
    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formclientes" name="formclientes" action="{{route('empleados.update',['id'=>$varempleado->cedula])}}" method="POST">
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
                <input type="hidden" name="_method" value="PATCH">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Cedula:</label>
                    <div class="col-md-9">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="number" id="cedulaempleado" name="cedulaempleado" class="form-control" placeholder="Numero De Cedula" value="{{$varempleado->cedula}}" disabled />
                      </div>                                            
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Apellidos:</label>
                    <div class="col-md-9 col-xs-12">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-comment"></span></span>
                        <input type="text" id="apellidoempleado" name="apellidoempleado" class="form-control" placeholder="Escriba El Apellido" value="{{$varempleado->apellidos_completos}}">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-3 col-xs-12 control-label">Genero:</label>
                      <div class="col-md-9 col-xs-12">                                              
                          <select class="form-control select" id="sexo" name="sexo">
                            @if($varempleado->sexo=='masculino')
                              <option disabled>==seleccione==</option>
                              <option value="masculino" selected>Masculino</option>
                              <option value="femeninino">Femenino</option>
                              <option value="otros">Otros</option>
                            @endif
                            @if($varempleado->sexo=='femenino')
                              <option disabled>==seleccione==</option>
                              <option value="masculino">Masculino</option>
                              <option value="femeninino" selected>Femenino</option>
                              <option value="otros">Otros</option>
                            @endif
                            @if($varempleado->sexo=='otros')
                              <option disabled>==seleccione==</option>
                              <option value="masculino">Masculino</option>
                              <option value="femeninino">Femenino</option>
                              <option value="otros" selected>Otros</option>
                            @endif
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Telefonos:</label>
                    <div class="col-md-9">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-usd"></span></span>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Escriba Su Télefono" value="{{$varempleado->telefono}}" />
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
                        <input type="text" class="form-control" id="nombreempleado" name="nombreempleado" placeholder="Escriba El Nombre" value="{{$varempleado->nombres_completos}}" />
                      </div>                                            
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Dirección:</label>
                    <div class="col-md-9">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-usd"></span></span>
                        <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Escriba la Dirección" value="{{$varempleado->direccion}}" />
                      </div> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Clave Empleado:</label>
                    <div class="col-md-9">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-usd"></span></span>
                        <input type="text" id="claveempleado" name="claveempleado" class="form-control" placeholder="clave" value="{{$varempleado->clave_empleado}}" />
                      </div> 
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-3 col-xs-12 control-label">Tipo Empleado</label>
                      <div class="col-md-6 col-xs-12">                                                            
                          <select class="form-control select" id="tipoempleado" name="tipoempleado">
                              <option selected disabled>==seleccione==</option>
                              @foreach($vartipoempleado as $tipo_empleado)
                                @if ($varempleado->cod_tipo_empleado==$tipo_empleado->cod_tipo_empleado)
                                  <option value="{{$tipo_empleado->cod_tipo_empleado}}" selected="">{{$tipo_empleado->nombre_tipo_empleado}}</option>
                                @endif
                                @if($varempleado->cod_tipo_empleado!=$tipo_empleado->cod_tipo_empleado)
                                  <option value="{{$tipo_empleado->cod_tipo_empleado}}">{{$tipo_empleado->nombre_tipo_empleado}}</option>
                                @endif
                              @endforeach
                          </select>
                          <a data-toggle="modal" data-target="#tipocliente">
                              <span class="help-block">
                                  <span class="glyphicon glyphicon-zoom-in"></span> <b>Click</b> para Registrar Tipo De Empleado
                              </span>
                          </a>
                      </div>
                      <div class="col-md-3">
                        <a href="" class="btn btn-info btn-addon"><i class="glyphicon glyphicon-plus"></i>Tipo empleado</a>
                      </div>
                  </div>
                </div>
              </div>a
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
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Registro De Clientes</b></h2>
@endsection

@section('men')
    <li>
        <a href="#">
           <span class="fa fa-dashboard"></span> Home
        </a>
    </li>                    
    <li class="#">Registro</li>
    <li class="active">Cliente</li>
@endsection