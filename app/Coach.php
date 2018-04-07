<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    /**
    * The roles that belong to the user.
    */
    public function fields()
    {
       return $this->belongsToMany('App\Field');
    }
}
