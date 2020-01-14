<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->           
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href='{{url("/admin-lte")}}/css/theme-default.css'/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <!--<div class="page-container">-->
            <!-- PAGE CONTENT -->
            <div class="page-content">                       
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container">
                              <div class="row">
                                <br><br>
                                <div class="col-md-12">
                                  <h2 class="text-center text-info"><i class="glyphicon glyphicon-qrcode"></i><b>REPORTE DE VENTAS</b></h2>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-6">
                                    <h3><b>Fecha Factura: </b> {{$ventas->fecha_venta}}</h3>
                                  </div>
                                  <div class="col-md-1">
                                    
                                  </div>
                                  <div class="col-md-5">
                                    <h3 class="text-right"><b>NÚMERO FACTURA: </b> 00{{$ventas->id_venta}}</h3>
                                  </div>
                                </div>
                                <br><br><br>
                                <div class="col-md-12">
                                  
                                    
                                    <div class="col-md-6">
                                      <h3><b>CLIENTE: </b>{{$clientes->nombres}} {{$clientes->apellidos}}</h3>
                                    </div>
                                    <div class="col-md-2">
                                      
                                    </div>
                                    <div class="col-md-4">
                                      <h3 class="text-right"><b>CC/NIT: </b>{{$clientes->cedula}}</h3>
                                    </div>
                                    <br><br>
                                    <div class="col-md-6">
                                      <h3><b>DIRECCIÓN: </b>{{$clientes->direccion}}</h3>
                                    </div>
                                    <div class="col-md-2">
                                      
                                    </div>
                                    <div class="col-md-4">
                                      <h3 class="text-right"><b>TELEFONO: </b>{{$clientes->telefono}}</h3>
                                    </div>
                                  
                                </div>
                                <div class="col-md-12">
                                  <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="100" class="text-center">codigo</th>
                                                    <th class="text-center">Descripción Comida</th>
                                                    <th width="200" class="text-center">Cantidad Vendida</th>
                                                    <th width="200" class="text-center">Precio</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                @foreach($reporteventas as $reporte)
                                                  <tr>
                                                    <td class="text-center">{{$reporte->id_comida}}</td>
                                                    <td class="text-center">{{$reporte->nombre_comida}}</td>
                                                    <td class="text-center">{{$reporte->cantidad}}</td>
                                                    <td class="text-center">{{$reporte->precio}}</td>
                                                  </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <td></td>
                                                <td><b>OBSERVACIONES:</b></td>
                                                <td class="text-center"><b>Total:</b></td>
                                                <td class="text-center">${{$ventas->total_venta}}</td>
                                             </tfoot>
                                        </table>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                  <div class="footer">
                                    <p class="text-center">Esta Factura se elabora como lo indica la ley 1231 de julio de 2008.
                                    Todos los Derechos Reservado&copy; 2017
                                    </p>
                                  </div>
                                </div>                                                           
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                                                   
            </div>            
            <!-- END PAGE CONTENT -->
        <!--</div>-->
        <!-- END PAGE CONTAINER -->

        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/jquery/jquery.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/jquery/jquery-ui.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/bootstrap/bootstrap.min.js'></script>       
        <!-- END PLUGINS -->

        <script type="text/javascript" src='{{url("/admin-lte")}}/js/demo_tables.js'></script> 
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/datatables/jquery.dataTables.min.js'></script>  

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='{{url("/admin-lte")}}/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/scrolltotop/scrolltopcontrol.js'></script>
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/morris/raphael-min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/morris/morris.min.js'></script>       
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/rickshaw/d3.v3.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/rickshaw/rickshaw.min.js'></script>
        <script type='text/javascript' src='{{url("/admin-lte")}}/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='{{url("/admin-lte")}}/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='{{url("/admin-lte")}}/js/plugins/bootstrap/bootstrap-datepicker.js'></script>         
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/owl/owl.carousel.min.js'></script>                 
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/moment.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/daterangepicker/daterangepicker.js'></script>

        <script type='text/javascript' src='{{url("/admin-lte")}}/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/bootstrap/bootstrap-file-input.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/tagsinput/jquery.tagsinput.min.js'></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins.js'></script>        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/actions.js'></script>
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/demo_dashboard.js'></script>

        <!-- END TEMPLATE -->         
    </body>
</html>
