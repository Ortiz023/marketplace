<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['estado_producto', 'descripcion', 'valoracion', 'usuario_id', 'producto_id'];
}
