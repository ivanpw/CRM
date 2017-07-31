<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto_recurso extends Model
{
    protected $table='proyectos_recursos';

            public function recursos()
{
     return $this->hasMany('App\recurso' );
}
        public function proyectos()
{
     return $this->hasMany('App\Proyecto' );
}
}
