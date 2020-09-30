<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $timestamp = true;
    protected $table = 'proveedores';
    protected $fillable = [
       'nombre',
       'apellido',
       'tipo_id',
       'num_id',
       'email',
       'direccion',
       'celular'
    ];
}
