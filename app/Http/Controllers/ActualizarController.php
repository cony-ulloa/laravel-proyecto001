<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ActualizarController extends Controller
{
  public function index()
  {
    return view('actualizar');
  }

  public function update(Request $request){
    $this->validate($request, 
    ['codigoUnico' => 'required']);

    $imagen = $request->file('image');

    if($imagen){
      $imagen_path = time()."-".$imagen->getClientOriginalName();
      \Storage::disk('imagenes')->put($imagen_path, \File::get($imagen));
      Producto::where('codigoUnico', $requiest->codigoUnico)
      -> update([
        'nombre' => $request->nombre,
        'precio' => $request->precio,
        'descripcion' => $request->descripcion,
        'image' => $imagen_path,
      ]);
    } else {
      Producto::where('codigoUnico', $requiest->codigoUnico)
      -> update([
        'nombre' => $request->nombre,
        'precio' => $request->precio,
        'descripcion' => $request->descripcion
      ]);
    }

    
    
    return view('menu');
  }
}



