<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EliminarController extends Controller
{
  public function index()
  {
    return view('eliminar');
  }

  public function delete(request $request){
    $this->validate($request, 
    ['codigoUnico' => 'required']);

    $producto = Producto::where('codigoUnico', $codigoUnico);
    if(\Storage::disk('imagenes')->has($producto[0]->image)){
      \Storage::disk('imagenes')->delete($producto[0]->image);
    }

    $productoBorrar = Producto::find($codigoUnico);
    $productoBorrar->delete();

    return view('menu');
  }

}

