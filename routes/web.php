<?php

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

use App\Http\Controllers\PermisoController;
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hola';
});*/

//Route::get('ruta', 'controlador@metodo');          
//Route::get('permiso', 'PermisoController@index');
//Route::get('permiso', 'PermisoController@create');

//Route::view('permiso', 'permiso'); //Route::view('rura', 'NombreVista');

//Route::get('permiso/{nombre}/{slug?}', 'PermisoController@index'); //nombre y slug son 2 parametros, slug es opcional.

Route::get('admin/sistema/permiso', 'PermisoController@index')->name('permiso'); //Una ruta con nombre
