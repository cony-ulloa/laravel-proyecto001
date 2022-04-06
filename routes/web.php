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

Route::get('/', function () {
    return view('vista');
});

Route::get('/registrar', function(){
    return view('registrar');
});
Route::get('/consultar', function(){
    return view('consultar');
});
Route::get('/eliminar', function(){
    return view('eliminar');
});
Route::get('/actualizar', function(){
    return view('actualizar');
});

Route::get('/login', function(){
    return view('login');
});

// Controladores CRUD
//Metodos get

//Agregar
Route::get('/registrar', 'GestionController@registrar');

//Listar
Route::get('/consultar', 'GestionController@listar');

//Actualizar
Route::get('/actualizar', 'GestionController@actualizar');

//Eliminar
Route::get('/eliminar', 'GestionController@eliminar');

//Metodos post
Route::post('guardarFormulario', 'GestionController@guardarFormulario');

Route::post('actualizarFormulario', 'GestionController@actualizarFormulario');

Route::post('eliminarFormulario', 'GestionController@eliminarFormulario');

Route::post('consultarFormulario', 'GestionController@consultarFormulario');

