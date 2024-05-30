<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carrera';
    protected $primaryKey = 'idCarrera';
    protected $fillable = ['idFacultad', 'nombre', 'estado'];


    public function proyectos()
    {
        return $this->belongsToMany('App\Proyecto', 'proyectoxcarrera', 'idProyecto', 'idCarrera' )->withPivot('estado');
    }

    public function facultad()
    {
        return $this->belongsTo('App\Facultad', 'idFacultad', 'idFacultad');
    }
}