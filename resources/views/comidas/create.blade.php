@extends('plantilla.plantilla')
@section('titulo','proyecto °| lumen')
@section('contenido')
<!--<div class="container">-->
  <!--<div class="page-content-wrap">-->
    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formcomida" name="formcomida" action="{{route('comidas.store')}}" method="POST">
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
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Numero:</label>
                    <div class="col-md-9">                                            
                        <div class="input-group">
                          @empty($prueba->id_comida)
                              <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                              <input type="number" id="idcomida" name="idcomida" class="form-control" placeholder="N° Referencia" disabled  value="1" />
                          @endempty
                          @isset($prueba->id_comida)
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="number" id="idcomida" name="idcomida" class="form-control" placeholder="N° Referencia" disabled  value="{{$prueba->id_comida+1}}" />
                          @endisset
                        </div>                                            
                    </div>
                  </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Descripción:</label>
                        <div class="col-md-9 col-xs-12">                                            
                          <textarea class="form-control" rows="6" placeholder="descripción comida" id="descripcion" name="descripcion"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Nombre:</label>
                    <div class="col-md-9">                                            
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-comment"></span></span>
                            <input type="text" id="nombrecomida" name="nombrecomida" class="form-control"/>
                        </div>                                            
                        <span class="help-block">Escriba Nombre de Las Comidas</span>
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-3 control-label"> Precio:</label>
                      <div class="col-md-9">                                            
                          <div class="input-group">
                              <span class="input-group-addon"><span class="fa fa-usd"></span></span>
                              <input type="number" id="precio" name="precio" class="form-control"/>
                          </div>                                            
                          <span class="help-block">Aqui el precio</span>
                      </div>
                  </div>
                    <div class="form-group">
                      <label class="col-md-3 col-xs-12 control-label">Tipo Comida</label>
                      <div class="col-md-6 col-xs-12">                                             
                          <select class="form-control select" id="codtipocomida" name="codtipocomida">
                              <option selected disabled value="0">==seleccione==</option>
                              @foreach($vartipocomida as $tipocomida)
                                <option value="{{$tipocomida->cod_tipo_comida}}">{{$tipocomida->nombre_tipo_comida}}</option>
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
              <h4><b>Registros</b></h4>
              <div class="row">
                  <div class="col-md-12">
                      <div class="table table-responsive">
                         <table class="table table-bordered table-striped table-actions table datatable">
                             <thead>
                                 <th width="50" class="text-center">#</th>
                                 <th class="text-center">Nombre Comida</th>
                                 <th width="100" class="text-center">precio</th>
                                 <th width="200" class="text-center">Tipo Comida</th>
                                 <th width="120">actions</th>
                             </thead>
                             @foreach($varcomida as $comidas)
                                <tr>
                                    <td class="text-center">{{$comidas->id_comida}}</td>
                                    <td class="text-center">{{$comidas->nombre_comida}}</td>
                                    <td class="text-center">${{$comidas->precio}}</td>
                                    <td class="text-center">
                                     @foreach($vartipocomida as $tipocomi)
                                      @if($comidas->cod_tipo_comida==$tipocomi->cod_tipo_comida)
                                        {{$tipocomi->nombre_tipo_comida}}
                                      @endif
                                     @endforeach
                                    </td>
                                    <td>
                                         <a class="btn btn-default btn-rounded btn-sm" href="{{ route('comidas.edit',['id'=>$comidas->id_comida]) }}">
                                             <span class="fa fa-pencil"></span>
                                         </a>
                                         <a class="btn btn-danger btn-rounded btn-sm" href="{{ route('comidas.delete',['id'=>$comidas->id_comida]) }}">
                                             <span class="fa fa-times"></span>
                                         </a>
                                    </td>
                                </tr>
                            @endforeach
                         </table> 
                      </div>
                  </div>
              </div>
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
<!--<div class="modal fade" id="tipo_comida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form class="" id="formtipocomida" name="formtipocomida" action="" method="post">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4><span class="fa fa-arrow-circle-o-left"></span> <b>Registrar Tipo De Comidas</b></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-12">
                    <form id="tipos_comidas" name="tipos_comidas" action="" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Tipo De Comida:</label>
                            <div class="col-md-9">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" id="idcomida" name="idcomida" class="form-control" placeholder="escriba el tipo de comida" />
                                </div>                                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>       
        </div>
        <div class="modal-footer">
            <button class="btn btn-info pull-right">Registrar</button>                        
        </div>
        </div>
    </form>
    </div>
</div>-->
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
@endsection