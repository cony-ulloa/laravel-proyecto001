<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(
            [
                'id_sucursal' => 1,
                'comuna' => 'santiago',
            ],
            [
                'id_sucursal' => 2,
                'comuna' => 'algarrobo',
            ],
            [
                'id_sucursal' => 3,
                'comuna' => 'valparaiso',
            ]
            ));

        }}
