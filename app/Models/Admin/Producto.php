<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $timestamp = true;
    protected $table = 'productos';
    protected $fillable = [
       'nombre',
       'descripcion',
       'precio',
       'stock'
    ];
}
