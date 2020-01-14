@extends('plantilla.plantilla')
@section('titulo','proyecto °| lumen')
@section('contenido')
<!--<div class="container">-->
  <!--<div class="page-content-wrap">-->
    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formclientes" name="formclientes" action="{{route('clientes.update',['id'=>$varcliente->cedula])}}" method="POST">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa fa-users"></span><b> Empleados</b></h3>
                <ul class="panel-controls">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>
            </div>
            <div class="panel-body">
              <input type="hidden" name="_method" value="PATCH">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Cedula:</label>
                    <div class="col-md-9">                                            
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="number" id="cedula" name="cedula" class="form-control" placeholder="Numero De Cedula" value="{{$varcliente->cedula}}" disabled />
                        </div>                                            
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Apellidos:</label>
                    <div class="col-md-9 col-xs-12">                                            
                      <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-comment"></span></span>
                        <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Escriba El Apellido" value="{{$varcliente->apellidos}}">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-3 col-xs-12 control-label">Genero:</label>
                      <div class="col-md-9 col-xs-12">                                              
                          <select class="form-control select" id="genero" name="genero">
                            @if($varcliente->genero=='masculino')
                              <option disabled>==seleccione==</option>
                              <option value="masculino" selected>Masculino</option>
                              <option value="femeninino">Femenino</option>
                              <option value="otros">Otros</option>
                            @endif
                            @if($varcliente->genero=='femenino')
                              <option disabled>==seleccione==</option>
                              <option value="masculino">Masculino</option>
                              <option value="femeninino" selected>Femenino</option>
                              <option value="otros">Otros</option>
                            @endif
                            @if($varcliente->genero=='otros')
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
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Escriba Su Télefono" value="{{$varcliente->telefono}}" />
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
                            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Escriba El Nombre" value="{{$varcliente->nombres}}" />
                        </div>                                            
                    </div>
                  </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Dirección:</label>
                        <div class="col-md-9">                                            
                          <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-usd"></span></span>
                            <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Escriba la Dirección" value="{{$varcliente->direccion}}" />
                          </div> 
                        </div>
                    </div>
                  <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Tipo Cliente</label>
                      <div class="col-md-6 col-xs-12">                                                                                            
                        <select class="form-control select" id="tipocliente" name="tipocliente">
                          <option selected disabled>==seleccione==</option>
                          @foreach($vartipocliente as $tipocliente)
                            @if ($varcliente->cod_tipo_cliente==$tipocliente->cod_tipo_cliente)
                              <option value="{{$tipocliente->cod_tipo_cliente}}" selected="">{{$tipocliente->nombre_tipo_cliente}}</option>
                            @endif
                            @if($varcliente->cod_tipo_cliente!=$tipocliente->cod_tipo_cliente)
                              <option value="{{$tipocliente->cod_tipo_cliente}}">{{$tipocliente->cod_tipo_cliente}}</option>
                            @endif
                          @endforeach
                        </select>
                            <span class="help-block">Tipo De Clientes</span>
                      </div>
                      <div class="col-md-3">
                        <a href="{{route('tipo_cliente.create')}}" class="btn btn-info btn-addon"><i class="glyphicon glyphicon-plus"></i>Tipo comida</a>
                      </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="panel-footer">
              <button class="btn btn-info pull-right">Registrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
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