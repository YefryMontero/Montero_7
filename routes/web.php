<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Grupo de rutas para la administracion
Route::group(['prefix' => 'admin', 'namespace' => 'Admin' ], function(){
	Route::get('/admin' , 'AdminController@index')->name('admin');
	//Rutas Usuario
    Route::get('/usuarios' , 'UsuarioController@index')->name('usuarios');
    Route::get('/usuarios/crear' , 'UsuarioController@create')->name('crear_usuario');
    Route::post('/usuarios' , 'UsuarioController@store')->name('guardar_usuario');
    Route::delete('usuario/{id}', 'UsuarioController@destroy')->name('eliminar_usuario');

    //Rutas Roles
    Route::get('/roles' , 'RolController@index')->name('roles');
    Route::get('/roles/crear' , 'RolController@create')->name('crear_rol');
    Route::post('/roles' , 'RolController@store')->name('guardar_rol');    
    //Rutas Permisos
    Route::get('/permisos' , 'PermisoController@index')->name('permisos');
    Route::get('/permisos/crear' , 'PermisoController@create')->name('crear_permiso');
    Route::post('/permisos' , 'PermisoController@store')->name('guardar_permiso');

    Route::get('permisos-rol', 'PermisoController@indexPermisosRol')->name('permisos_rol');
    Route::post('permisos-rol', 'PermisoController@storePermisosRol')->name('guardar_permisos_rol');


    //Rutas Clientes
    Route::get('/clientes' , 'ClienteController@index')->name('clientes');
    Route::get('/clientes/crear' , 'ClienteController@create')->name('crear_cliente');
    Route::post('/clientes', 'ClienteController@store')->name('guardar_cliente');
    //Rutas Proveedores
    Route::get('/proveedores' , 'ProveedorController@index')->name('proveedores');
    Route::get('/proveedores/crear' , 'ProveedorController@create')->name('crear_proveedor');
    Route::post('/proveedores', 'ProveedorController@store')->name('guardar_proveedor');
    //Rutas Productos
    Route::get('/productos' , 'ProductoController@index')->name('productos');
    Route::get('/productos/crear' , 'ProductoController@create')->name('crear_producto');
    Route::post('/productos', 'ProductoController@store')->name('guardar_producto');
});

