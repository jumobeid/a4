<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function tasks()
    {
        return $this->belongsToMany('App\Task','animal_task','animal_id','task_id');

    }

    # app/Tag.php
    public static function getAnimalsForCheckboxes() {

        $animals = Animal::orderBy('name','ASC')->get();

        $animalsForCheckboxes = [];

        foreach($animals as $animal) {
            $animalsForCheckboxes[$animal['id']] = $animal->name;
        }

        return $animalsForCheckboxes;

    }
}
