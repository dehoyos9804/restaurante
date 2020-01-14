@extends('plantilla.plantilla')
@section('titulo','proyecto-lumen')
@section('contenido')
    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formtipocomida" name="formtipocomida" action="{{route('tipo_comida.store')}}" method="POST">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h5 class="panel-title"><span class="fa  fa-cutlery"></span><b> Tipo Comida</b></h5>
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
                  <div class="form-group">
                    <label class="col-md-2 control-label"> Tipo De Comida:</label>
                    <div class="col-md-10">                                            
                      <div class="input-group">
                          <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                          <input type="text" id="nombretipocomida" name="nombretipocomida" class="form-control" placeholder="escriba el tipo de comida" />
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
                                   <th class="text-center">Tipo Comida</th>
                                   <th width="120" class="text-center">actions</th>
                               </thead>
                                @foreach($tiposcomidas as $tipcomida)
                                  <tr>
                                   <td class="text-center">{{$tipcomida->cod_tipo_comida}}</td>
                                   <td class="text-center">{{$tipcomida->nombre_tipo_comida}}</td>
                                   <td>
                                        <a href="{{route('tipo_comida.edit',['id'=>$tipcomida->cod_tipo_comida])}}" class="btn btn-default btn-rounded btn-sm">
                                            <span class="fa fa-pencil"></span>
                                        </a>
                                        <a href="{{route('tipo_comida.delete',['id'=>$tipcomida->cod_tipo_comida])}}" class="btn btn-danger btn-rounded btn-sm">
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
                <a href="{{route('comidas.create')}}" class="btn btn-info btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancel</a>
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
  <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Registro Tipo Comida</b></h2>
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