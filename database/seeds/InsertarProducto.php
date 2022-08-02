<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [
              'codigoUnico'=> 0001,
              'nombre' => 'guitarra',
              'categoria' => 'instrumentos',
              'desc' => 'Instrumento de cuerda',
              'precio' => 200
            ]
            ));
    }
}

