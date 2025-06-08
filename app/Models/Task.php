<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
public function tasks()
    {
        return $this->hasMany(Task::class); // Adjust the relationship type and model as needed
    }

}
