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
       'stock',
       'unidad_medida'
    ];

    public function scopeFiltrarPorNombre($query, $texto, $boolean = 'or'){
		return $query->where('nombre','like', '%'.$texto.'%', $boolean);
    }
}
