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


Route::get('/login', function(){
    return view('login');
});

// Controladores CRUD
//Metodos get

//Agregar
Route::get('productos/agregar', 'ProductosController@create');


Route::resource('productos', ProductosController::class);