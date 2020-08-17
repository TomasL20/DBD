<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRol extends Model
{
    public function rol(){
        return $this->belongsTo(Rol::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
