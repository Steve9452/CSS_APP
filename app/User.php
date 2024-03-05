<?php

namespace App;

use Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $primaryKey = 'idUser';

    protected $fillable = [
        'nombres',
        'apellidos',
        'correo',
        'estado',
        'genero',
        'verificado',
        'ultima_fecha_contra',
        'ya_aplico_hoy',
        'idRol',
        'idPerfil',
        'idCarrera',
        'password',
        'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token'
    ];

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'proyectoxestudiante', 'idUser', 'idProyecto');
    }

    public function rol()
    {
        return $this->hasOne('App\Rol', 'idRol', 'idRol');
    }

    public function perfil()
    {
        return $this->hasOne('App\Perfil', 'idPerfil', 'idPerfil');
    }

    public function carrera()
    {
        return $this->hasOne('App\Carrera', 'idCarrera', 'idCarrera');
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
