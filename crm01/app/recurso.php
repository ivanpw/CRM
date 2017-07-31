<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recurso extends Model
{
    protected $table='recursos';
     public function tablaprom()
  {
    return $this->belongsTo('App\Proyecto');
  }
}
