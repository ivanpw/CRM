<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table='proyectos';

     public function tablarec()
  {
    return $this->hasMany('App\puesto');
  }
}
