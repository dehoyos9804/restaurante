@extends('plantilla.plantilla')
@section('titulo','Proyecto| LUMEN')
@section('titlepage')
 <h2><span class="fa fa-arrow-circle-o-left"></span> <b>Bienvenido</b></h2>
@endsection
@section('contenido')
                            
<!-- START WIDGET SLIDER -->
        <div class="widget widget-default widget-carousel">
            <div class="owl-carousel" id="owl-example">
                <div>                                    
                    <div class="widget-title">Total Visitors</div>                                                                        
                    <div class="widget-subtitle">27/08/2014 15:23</div>
                    <div class="widget-int">3,548</div>
                </div>
                <div>                                    
                    <div class="widget-title">Returned</div>
                    <div class="widget-subtitle">Visitors</div>
                    <div class="widget-int">1,695</div>
                </div>
                    <div>                                    
                        <div class="widget-title">New</div>
                        <div class="widget-subtitle">Visitors</div>
                        <div class="widget-int">1,977</div>
                    </div>
            </div>                            
            <div class="widget-controls">                                
                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
            </div>                             
         </div>         
   <!-- END WIDGET SLIDER -->
@endsection

@section('menu')
  @include('plantilla.menu')
@endsection

@section('men')
<li>
  <a href="#">
     <span class="fa fa-dashboard"></span> Home
  </a>
</li>                    
<li class="active">Dashboard</li>
@endsection
