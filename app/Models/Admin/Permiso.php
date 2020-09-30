<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //
    protected $table = "permisos";
    protected $fillable = ['nombre', 'slug'];
    protected $guarded = ['id'];
    protected $timestamp = true;

    public function permisosRol()
    {
        return $this->belongsToMany(Rol::class, 'permisos_rol');
    }
}
