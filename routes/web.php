<?php



Route::get('/', function () {
    return view('productos/listar');
});


Route::get('/login', function(){
    return view('login');
});


Route::get('productos/agregar', 'ProductosController@create');
Route::get('productos/{nombre}', 'ProductosController@show');


Route::resource('productos', ProductosController::class);