<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_sucursal';
    protected $table = 'sucursales';

    public function producto(){
        return $this->hasMany(Producto::class);
}

}