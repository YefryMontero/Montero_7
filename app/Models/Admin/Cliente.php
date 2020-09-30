<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $timestamp = true;
    protected $table = 'clientes';
    protected $fillable = [
       'nombre',
       'apellido',
       'tipo_id',
       'num_id',
       'email',
       'direccion',
       'celular'
    ];


	// FILTROS
	public function scopeFiltrarPorNombre($query, $texto, $boolean = 'or'){
		return $query->where('nombre','like', '%'.$texto.'%', $boolean);
	}
	public function scopeFiltrarId($query, $texto, $boolean = 'or'){
		return $query->where('num_id','like', '%'.$texto.'%', $boolean);
	}
	public function scopeFiltrarCorreo($query, $texto, $boolean = 'or'){
		return $query->where('email','like', '%'.$texto.'%', $boolean);
	}

}
