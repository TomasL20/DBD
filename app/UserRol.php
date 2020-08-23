<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRol extends Model
{   //se especifica el tipo de relaciones que posee la clase
    //la clase "UserRol" pertenece  a un objeto de la clase "Rol"
    use SoftDeletes;
    public function rol(){
        return $this->belongsTo(Rol::class);
    }
    //la clase "UserRol" pertenece  a un objeto de la clase "user"
    public function user(){
        return $this->belongsTo(User::class);
    }
}
