<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRol extends Model
{   //se especifica el tipo de relaciones que posee la clase
    //la clase "UserRol" pertenece  a un objeto de la clase "Rol"
    public function rol(){
        return $this->belongsTo(Rol::class);
    }
    //la clase "UserRol" pertenece  a un objeto de la clase "user"
    public function user(){
        return $this->belongsTo(User::class);
    }
}
