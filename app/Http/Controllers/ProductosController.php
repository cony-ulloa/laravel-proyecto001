<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Stock;
use App\Sucursal;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $productos = Producto::get();
    /* dd($productos); */
    return view('listadoprod', [
      'productos' => $productos
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    /* return view('registrar'); */

    $sucursales = Sucursal::get();
    /* dd($productos); */
    return view('registrar', [
      'sucursales' => $sucursales
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
    'codigoUnico' => 'required',
    'nombre' => 'required',
    'categoria' => 'required',
    'desc' => 'required',
    'sucursales_id' => 'required',
    'cantidad' => 'required',
    'precio' => 'required',
]);
    /* dd($request); */
      $producto = new Producto();
      $stock = new Stock();

      $producto->codigoUnico = $request->codigoUnico;
      $producto->nombre = $request->nombre;
      $producto->categoria = $request->categoria;
      $producto->desc = $request->desc;
      $producto->save();
      $stock->sucursales_id = $request->sucursales_id;
      $stock->cantidad = $request->cantidad;
      $stock->precio = $request->precio;
      $stock->productos_id = $producto->id;
      $stock->save();

    $productos = Producto::get();
    /* dd($productos); */
    return view('listadoprod', [
      'productos' => $productos
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $producto=Producto::where('id',$id)->get();
      $stocks=Stock::where('productos_id',$id)->get();
      $sucursales=Sucursal::get();

      return view('infoprod', [
        'producto' => $producto,
        'sucursales' => $sucursales,
        'stocks' => $stocks
      ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
