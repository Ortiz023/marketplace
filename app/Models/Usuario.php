<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $fillable = ['nombre', 'email', 'movil', 'password', 'rol', 'estado', 'ciudad_id'];
}
