<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'valor', 'imagen', 'estado', 'estado_producto', 'categoria_id', 'usuario_id', 'ciudad_id'];
}
