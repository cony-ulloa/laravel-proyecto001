<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionController extends Controller
{
    
    public function registrar(){
        return view('registrar');
    }

    public function listar(){
        return view('consultar');
    }
    
    public function actualizar(){
        return view('actualizar');
    }

    public function eliminar(){
        return view('eliminar');
    }

    public function guardarFormulario(Request $request) {
        $this->validate($request, [
            'id' => 'required|integer',
            'codigoUnico' => 'required|integer',
            'nombre' => 'required',
            'categoria' => 'required',
            'sucursal' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'integer|min:0|required',
            'precio' => 'integer|required',

        ]);

        return [
                $request->input("id"),
                $request->input("codigoUnico"),
                $request->input("nombre"),
                $request->input("sucursal"),
                $request->input("descripcion"),
                $request->input("cantidad"),
                $request->input("precio"),

            ];
    }

    public function actualizarFormulario(Request $request) {
        $this->validate($request, [
            'nombre' => 'required',
            'precio' => 'integer|required',
            'descripcion' => 'required',
        ]);

        return [$request->input("nombre"),
                $request->input("precio"),
                $request->input("descripcion"),
    ];
    }

    public function consultarFormulario(Request $request) {
        $this->validate($request, [
            'codigoUnico' => 'integer|required',
            'nombre' => 'required',
        ]);

        return [$request->input("codigoUnico"),
                $request->input("nombre"),
                $request->input("sucursal"),
    ];
    }

    public function eliminarFormulario(Request $request) {
        $this->validate($request, [
            'codigoUnico' => 'integer|required',
        ]);

        return $request->input("codigoUnico");
    }

    
}
