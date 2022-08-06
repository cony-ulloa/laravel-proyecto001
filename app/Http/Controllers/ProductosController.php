<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    
    public function index(){
        $productos = Producto::get();

        return view('productos.listar',[
            'productos' => $productos
        ]);

    }
    
    public function create(){
        return view('productos.agregar');
    }


    public function store(Request $request) {
        $this->validate($request, [
            'id' => 'required|integer',
            'codigoUnico' => 'required|integer',
            'nombre' => 'required',
            'categoria' => 'required',
            'descripcion' => 'required',


        ]);

        $producto = new Producto();
        $producto->id = $request.id;
        $producto->codigoUnico = $request.codigoUnico;
        $producto->nombre = $request.nombre;
        $producto->categoria = $request.categoria;
        $producto->descripcion = $request.descripcion;
        $producto->save();

        $productos = Producto::get();

        return view('productos.listar',[
            'productos' => $productos
        ]);

    }
    
    public function show($nombre){
        
        $producto = Producto::where('nombre', $nombre)->get();
   

        return view('productos.listar',[
            'productos' => $producto
        ]);
   
    }



}
