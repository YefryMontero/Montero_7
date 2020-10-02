<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Admin\Rol;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;
    protected $timestamp = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'tipo_id', 
        'num_id',  
        'celular',
        'direccion',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = Hash::make($pass);
    } 

    public function roles_usuario(){
        return $this->belongsToMany(Rol::class ,'roles_usuario');
    }

    public function setSession($roles)
    {
        Session::put([
            'usuario' => $this->usuario,
            'usuario_id' => $this->id,
            'nombre_usuario' => $this->nombre
        ]);
        if (count($roles) == 1) {
            Session::put(
                [
                    'rol_id' => $roles[0]['id'],
                    'rol_nombre' => $roles[0]['nombre'],
                    ]
            );
        } else {
            Session::put('roles', $roles);
        }
    }
     
    public function scopeBuscarUsuario($query,$usuario,$password){
        return $query->where('usuario','=',$usuario ,'and','password','=',$password) ;
    }
    public function scopeBuscarId($query,$num_id){
        return $query->where('num_id','=',$num_id);
    }
    public function scopeBuscarCelular($query,$celular){
        return $query->where('celular','=',$celular);
    }
    public function scopeBuscarCorreo($query,$email){
            return $query->where('email','=',$email);
    }
}
