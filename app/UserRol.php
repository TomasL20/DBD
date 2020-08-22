<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRol extends Model
{   //se especifica el tipo de relaciones que posee la clase
    public function rol(){
        return $this->belongsTo(Rol::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
