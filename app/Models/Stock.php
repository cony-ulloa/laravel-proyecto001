<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_stock';
    protected $table = 'stocks';

    public function sucursal(){
        return $this->belongsTo(Sucursal::class, 'id_sucursal');
    }

    public function producto(){
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
