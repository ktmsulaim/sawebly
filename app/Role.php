<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public static function getNameAttribute($value){
        return ucfirst($value);
    }
}
