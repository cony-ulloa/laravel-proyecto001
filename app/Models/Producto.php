<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_producto';
    protected $table = 'productos';

    public function sucursal(){
        return $this->belongsTo(Sucursal::class, 'id_sucursal');
    }

}