@extends('plantilla.plantilla')
@section('titulo','proyecto-lumen')
@section('contenido')
<!--<div class="container">-->
  <!--<div class="page-content-wrap">-->
    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('comidas.update',['id'=>$varcomida->id_comida])}}" method="POST">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa  fa-cutlery"></span><b> Comidas</b></h3>
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
                    <label class="col-md-3 control-label"> Numero:</label>
                    <div class="col-md-9">                                            
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="number" id="idcomida" name="idcomida" class="form-control" placeholder="N° Referencia" disabled  value="{{$varcomida->id_comida}}" />
                        </div>                                            
                    </div>
                  </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Descripción:</label>
                        <div class="col-md-9 col-xs-12">                                            
                          <textarea class="form-control" rows="6" placeholder="descripción comida" id="descripcion" name="descripcion">{{$varcomida->descripcion}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Nombre:</label>
                    <div class="col-md-9">                                            
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-comment"></span></span>
                            <input type="text" id="nombrecomida" name="nombrecomida" class="form-control" value="{{$varcomida->nombre_comida}}" />
                        </div>                                            
                        <span class="help-block">Escriba Nombre de Las Comidas</span>
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-3 control-label"> Precio:</label>
                      <div class="col-md-9">                                            
                          <div class="input-group">
                              <span class="input-group-addon"><span class="fa fa-usd"></span></span>
                              <input type="number" id="precio" name="precio" class="form-control" value="{{$varcomida->precio}}" />
                          </div>                                            
                          <span class="help-block">Aqui el precio</span>
                      </div>
                  </div>
                    <div class="form-group">
                      <label class="col-md-3 col-xs-12 control-label">Tipo Comida</label>
                      <div class="col-md-6 col-xs-12">                                           
                          <select class="form-control select" id="codtipocomida" name="codtipocomida">
                              @foreach($vartipocomida as $tipocomida)
                                   
                                @if ($varcomida->cod_tipo_comida==$tipocomida->cod_tipo_comida)
                                <option value="{{$tipocomida->cod_tipo_comida}}" selected="">{{$tipocomida->nombre_tipo_comida}}</option>
                                @endif
                                @if($varcomida->cod_tipo_comida!=$tipocomida->cod_tipo_comida)
                                <option value="{{$tipocomida->cod_tipo_comida}}">{{$tipocomida->nombre_tipo_comida}}</option>
                                @endif
                              @endforeach
                          </select>
                          <a data-toggle="modal" data-target="#tipo_comida">
                              <span class="help-block">
                                  <span class="glyphicon glyphicon-zoom-in"></span> <b>Click</b> para Registrar Tipo Comida
                              </span>
                          </a>
                      </div>
                      <div class="col-md-3">
                        <a href="{{ route('tipo_comida.create') }}" class="btn btn-info btn-addon"><i class="glyphicon glyphicon-plus"></i>Tipo comida</a>
                      </div>
                    </div>
                </div>
              </div>
              <br>
              </div><!--fin panel body-->
              <div class="panel-footer">
              <button class="btn btn-info pull-right">Registrar</button>
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
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Registro De Comidas</b></h2>
@endsection

@section('men')
    <li>
        <a href="#">
           <span class="fa fa-dashboard"></span> Home
        </a>
    </li>                    
    <li class="#">Registro</li>
    <li class="active">Comida</li>
    <li class="active">edit</li>
@endsection