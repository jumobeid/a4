<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function location()
    {
      return $this->belongsTo('App\Location');
    }

    public function animals()
    {
      return $this->belongsToMany('App\Animal');

    }
}
