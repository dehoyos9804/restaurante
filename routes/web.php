<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/*$router->get('/', function () use ($router) {
    return $router->app->version();
});*/
$router->get('/',['uses'=>'InicioController@index',]);
$router->get('/vtnComida',['uses'=>'ComidaController@index',]);
$router->get('/vtnCliente',['uses'=>'ClienteController@index',]);
$router->get('/vtnEmpleado',['uses'=>'EmpleadoController@index',]);
$router->get('/vtnVenta',['uses'=>'VentaController@index',]);


/*RUTAS PARA TIPO DE COMIDA*/
//$router->get('tipo_comida',['as'=>'tipo_comida.index', 'uses'=>'MateriaController@index',]);
$router->get('tipo_comida/create',['as'=>'tipo_comida.create', 'uses'=>'TipoComidaController@create',]);
$router->post('tipo_comida',['as'=>'tipo_comida.store', 'uses'=>'TipoComidaController@store',]);
$router->get('tipo_comida/{id}/edit',['as'=>'tipo_comida.edit', 'uses'=>'TipoComidaController@edit',]);
$router->patch('tipo_comida/{id}',['as'=>'tipo_comida.update', 'uses'=>'TipoComidaController@update',]);
$router->get('tipo_comida/{id}/delete',['as'=>'tipo_comida.delete', 'uses'=>'TipoComidaController@delete',]);
/*FIN RUTAS TIPO COMIDA*/

/*RUTAS PARA COMIDA*/
//$router->get('comida',['as'=>'comidas.index', 'uses'=>'ComidaController@index',]);
$router->get('comida/create',['as'=>'comidas.create', 'uses'=>'ComidaController@create',]);
$router->post('comida',['as'=>'comidas.store', 'uses'=>'ComidaController@store',]);
$router->get('comida/{id}/edit',['as'=>'comidas.edit', 'uses'=>'ComidaController@edit',]);
$router->patch('comida/{id}',['as'=>'comidas.update', 'uses'=>'ComidaController@update',]);
$router->get('comida/{id}/delete',['as'=>'comidas.delete', 'uses'=>'ComidaController@delete',]);
/*FIN RUTAS COMIDA*/


/*RUTAS PARA TIPO CLIENTES*/
//$router->get('tipocliente',['as'=>'tipo_cliente.index', 'uses'=>'TipoClienteController@index',]);
$router->get('tipocliente/create',['as'=>'tipo_cliente.create', 'uses'=>'TipoClienteController@create',]);
$router->post('tipocliente',['as'=>'tipo_cliente.store', 'uses'=>'TipoClienteController@store',]);
$router->get('tipocliente/{id}/edit',['as'=>'tipo_cliente.edit', 'uses'=>'TipoClienteController@edit',]);
$router->patch('tipocliente/{id}',['as'=>'tipo_cliente.update', 'uses'=>'TipoClienteController@update',]);
$router->get('tipocliente/{id}/delete',['as'=>'tipo_cliente.delete', 'uses'=>'TipoClienteController@delete',]);
/*FIN RUTAS TIPO CLIENTES*/

/*RUTAS PARA CLIENTES*/
//$router->get('cliente',['as'=>'clientes.index', 'uses'=>'ClienteController@index',]);
$router->get('cliente/create',['as'=>'clientes.create', 'uses'=>'ClienteController@create',]);
$router->post('cliente',['as'=>'clientes.store', 'uses'=>'ClienteController@store',]);
$router->get('cliente/{id}/edit',['as'=>'clientes.edit', 'uses'=>'ClienteController@edit',]);
$router->patch('cliente/{id}',['as'=>'clientes.update', 'uses'=>'ClienteController@update',]);
$router->get('cliente/{id}/delete',['as'=>'clientes.delete', 'uses'=>'ClienteController@delete',]);
/*FIN RUTAS CLIENTES*/


/*RUTAS PARA TIPO EMPLEADOS*/
//$router->get('tipoempleado',['as'=>'tipo_empleado.index', 'uses'=>'TipoEmpleadoController@index',]);
$router->get('tipoempleado/create',['as'=>'tipo_empleado.create', 'uses'=>'TipoEmpleadoController@create',]);
$router->post('tipoempleado',['as'=>'tipo_empleado.store', 'uses'=>'TipoEmpleadoController@store',]);
$router->get('tipoempleado/{id}/edit',['as'=>'tipo_empleado.edit', 'uses'=>'TipoEmpleadoController@edit',]);
$router->patch('tipoempleado/{id}',['as'=>'tipo_empleado.update', 'uses'=>'TipoEmpleadoController@update',]);
$router->get('tipoempleado/{id}/delete',['as'=>'tipo_empleado.delete', 'uses'=>'TipoEmpleadoController@delete',]);
/*FIN RUTAS TIPO EMPLEADOS*/

/*RUTAS PARA EMPLEADOS*/
//$router->get('empleado',['as'=>'empleados.index', 'uses'=>'EmpleadoController@index',]);
$router->get('empleado/create',['as'=>'empleados.create', 'uses'=>'EmpleadoController@create',]);
$router->post('empleado',['as'=>'empleados.store', 'uses'=>'EmpleadoController@store',]);
$router->get('empleado/{id}/edit',['as'=>'empleados.edit', 'uses'=>'EmpleadoController@edit',]);
$router->patch('empleado/{id}',['as'=>'empleados.update', 'uses'=>'EmpleadoController@update',]);
$router->get('empleado/{id}/delete',['as'=>'empleados.delete', 'uses'=>'EmpleadoController@delete',]);
/*FIN RUTAS EMPLEADOS*/

/*RUTAS PARA VENTAS*/
$router->get('venta/lista',['as'=>'ventas.index', 'uses'=>'VentaController@index',]);
$router->get('venta/create',['as'=>'ventas.create', 'uses'=>'VentaController@create',]);
$router->post('venta',['as'=>'ventas.store', 'uses'=>'VentaController@store',]);
$router->get('venta/{id}/edit',['as'=>'ventas.edit', 'uses'=>'VentaController@edit',]);
$router->patch('venta/{id}',['as'=>'ventas.update', 'uses'=>'VentaController@update',]);
$router->get('venta/{id}/delete',['as'=>'ventas.delete', 'uses'=>'VentaController@delete',]);
$router->get('venta/{id}/reporte', ['as' => 'pdf.reporteVenta', 'uses' => 'VentaController@reportes',]);
/*FIN RUTAS VENTAS*/



