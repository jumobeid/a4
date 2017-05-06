<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    public function tasks()
    {
      return $this->hasMany('App\Task');
    }


    public static function locationsForDropdown() {

      $locations = Location::orderBy('name', 'ASC')->get();

      # Organize the authors into an array where the key = author id and value = author name
      $locationsForDropdown = [];
      foreach($locations as $location) {
          $locationsForDropdown[$location->id] = $location->name;
      }
      return $locationsForDropdown;
    }
}
