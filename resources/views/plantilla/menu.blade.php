<li class="xn-logo">
    <a href="index.html">Proyecto <b>Admin</b></a>
    <a href="#" class="x-navigation-control"></a>
</li>
<li class="xn-profile">
    <a href="#" class="profile-mini">
        <img src='{{url("/admin-lte")}}/assets/images/users/avatar.jpg" alt="John Doe'/>
    </a>
    <div class="profile">
        <div class="profile-image">
            <img src='{{url("/admin-lte")}}/assets/images/users/avatar.jpg' alt="John Doe"/>
        </div>
        <div class="profile-data">
            <div class="profile-data-name">John Doe</div>
            <div class="profile-data-title">Web Developer/Designer</div>
        </div>
        <div class="profile-controls">
            <a href="" class="profile-control-left"><span class="fa fa-info"></span></a>
            <a href="" class="profile-control-right"><span class="fa fa-envelope"></span></a>
        </div>
    </div>                                                                        
</li>

<li class="xn-title">Navegación</li>

<li class="active">
    <a href="/"><span class="fa fa-desktop"></span> <span class="xn-text">Inicio</span></a>                        
</li>        

<li class="xn-openable">
    <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Registros</span></a>
    <ul>
        <li><a href="{{route('comidas.create')}}"><span class="glyphicon glyphicon-cutlery"></span> Comidas</a></li>
        <li><a href="{{route('clientes.create')}}"><span class="fa fa fa-group"></span> Clientes</a></li>
        <li><a href="{{route('empleados.create')}}"><span class="fa fa-user"></span> Empleados</a></li>            
    </ul>
</li>

<li class="xn-openable">
    <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text"> Salida de Productos</span></a>
    <ul>
        <li>
            <a href="{{route('ventas.create')}}"><span class="glyphicon glyphicon-shopping-cart"></span> Ventas</a>
        </li>                     
    </ul>
</li>
<li class="xn-title">Reportes</li>
<li class="xn-openable">
    <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Configuración</span></a>                        
    <ul>
        <li><a href="ui-widgets.html"><span class="fa fa-user"></span> User</a>
            <div class="informer informer-warning">+4</div>
        </li>                            
        <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
        <li>
            <a href="ui-icons.html"><span class="fa fa-envelope-o"></span> Mensajes</a>
            <div class="informer informer-warning">+679</div>
        </li>                            
    </ul>
</li>                    
<li class="xn-openable">
    <a href="#"><span class="fa fa-sitemap"></span><span class="xn-text"> Generar</span></a>
    <ul>
        <li>
            <a href="{{route('ventas.index')}}"><span class="fa fa-tasks"></span>Ventas Diarias</a>
            <div class="informer informer-danger">New</div>            
        </li>
        <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Venta Por Periodo</a></li>
        <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Ganancias</a></li>
    </ul>
</li>                                     
<li>
    <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
</li>                    
                    