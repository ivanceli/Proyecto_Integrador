<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
//$route['index'] = 'Welcome/Principal';
$route['quienes_somos'] = 'Welcome/quienes_somos';
$route['comercializacion'] = 'Welcome/comercializacion';
$route['info_de_contacto'] = 'Welcome/info_de_contacto';
$route['terminos_de_uso'] = 'Welcome/terminos_de_uso';
$route['catalogo'] = 'Welcome/catalogo';

//rutas para crear usuario cliente
$route['registro'] = 'registro_controller/registro';
$route['verifico_nuevoregistro'] = 'registro_controller';

//rutas para el login
$route['login'] = 'loginController/login';
$route['verificoUsuario'] = 'loginController';
$route['cerrar_sesion']='loginController/cerrar_sesion';


//rutas para  la consulta
$route['consulta'] = 'consulta_controller';
$route['verifico_consulta'] = 'consulta_controller';
$route['cargarconsultas']='consulta_controller/muestra_consulta';
$route['consulta_elimina/(:num)']='consulta_controller/eliminar_consulta';



//rutas para administrar productos
$route['cargarproducto']='producto_controller/form_agrega_producto';
$route['verifico_nuevoproducto']='producto_controller/agrega_producto';
$route['productos_todos']='producto_controller';
$route['productos_modifica/(:num)']='producto_controller/muestra_modificar/$1';
$route['verifico_modificaproducto/(:num)']='producto_controller/modificar_producto/$1';
$route['productos_eliminados/(:num)']='producto_controller/muestra_eliminados/$1';
$route['productos_eliminados']='producto_controller/muestra_eliminados';
$route['productos_elimina/(:num)'] = 'producto_controller/eliminar_producto/$1';
$route['productos_activa/(:num)'] = 'producto_controller/activar_producto/$1';



//rutas para administrar usuarios
$route['usuarios_todos']='usuario_controller/usuarios';
$route['cargarusuario']='usuario_controller/agrega_usuario';
$route['verifico_nuevousuario']='usuario_controller/agrega_usuario';
$route['usuarios_eliminados/(:num)']='usuario_controller/muestra_eliminados/$1';
$route['usuarios_eliminados']='usuario_controller/muestra_eliminados/';
$route['usuarios_elimina/(:num)'] = 'usuario_controller/usuarios_elimina/$1';
$route['usuarios_modifica/(:num)'] = 'usuario_controller/muestra_modificar/$1';
$route['verifico_modificausuario/(:num)']='usuario_controller/modificar_usuario/$1';
$route['usuarios_activa/(:num)'] = 'usuario_controller/activar_usuario/$1';


//rutas para el carrito
$route['lacteos_enteros'] = 'carrito_controller/lacteos_enteros';
$route['lacteos_descremados'] = 'carrito_controller/lacteos_descremados';
$route['carrito_agrega'] = 'carrito_controller/add';
$route['carrito_actualiza'] = 'carrito_controller/actualiza_carrito';
$route['carrito_elimina/(:any)'] = 'carrito_controller/remove/$1';
$route['comprar'] = 'carrito_controller/muestra_compra';
$route['confirma_compra'] = 'carrito_controller/guarda_compra';
$route['noStock'] = 'carrito_controller/stockInsuficiente';
$route['principal'] = 'welcome';

//rutas para los reportes
$route['cargarventas']='producto_controller/listar_ventas';
$route['muestradetalle/(:num)']='producto_controller/muestra_detalle/$1';


//rutas para usuario logeado
$route['mostrar_datos']='usuario_controller/mostrar_datos';
$route['usuariologeado_modifica/(:num)'] = 'usuario_controller/muestra_modificar2/$1';
$route['verifico_modificausuariologeado/(:num)']='usuario_controller/modificar_usuario_logeado/$1';






$route['translate_uri_dashes'] = FALSE;

///(:num) recibir parametros