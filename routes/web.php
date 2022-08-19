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

Route::get('/', 'MenuController@index') ;
Route::resource('/productos', 'ProductosController');

Route::get('/consultar', 'ConsultarController@index');
Route::post('/consultar', 'ConsultarController@consulta');

Route::get('/sesion', 'SesionController@index');
Route::get('/menu', 'MenuController@index');
Route::get('/asignar', 'AsignarController@index');
Route::get('/eliminar', 'EliminarController@index');
/* Route::get('/productos','ProductosController@index'); //Mostrar todos los productos */
Route::get('/actualizar/{id}', 'ActualizarController@update');
