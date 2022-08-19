<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Stock;
use App\Sucursal;
use Illuminate\Http\Request;

class ConsultarController extends Controller
{
  public function index()
  {
    $sucursales = Sucursal::get();
    /* dd($productos); */
    return view('consultar', [
      'sucursales' => $sucursales
    ]);
  }

  public function consulta(Request $request)
  {
    $codigoUnico = $request->codigoUnico;
    $nombre = $request->nombre;
    $sucursalesid = $request->sucursales_id;

      $productoCodigo=Producto::where('codigoUnico',$codigoUnico)->get();
      $productoNombre=Producto::where('nombre',$nombre)->get();
      $stocks=Stock::where('sucursales_id',$sucursalesid)->get();
      $sucursales=Sucursal::get();
    return view('mostrarConsulta', [
      'sucursales' => $sucursales,
      'productoCodigo' => $productoCodigo,
      'productoNombre' => $productoNombre,
      'stocks' => $stocks,
    ]);
  }
}
