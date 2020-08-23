<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{
    use SoftDeletes;
     //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'description',
    ];
    //se especifica el tipo de relaciones que posee la clase
    //la clase "Rol" tiene una relacion de uno es a muchos con un objeto de la clase "rolPermission"
    public function rolPermission(){
        return $this->hasMany(RolPermission::class);
    }
    //la clase "Rol" tiene una relacion de uno es a muchos con un objeto de la clase "userRol"
    public function userRol(){
        return $this->hasMany(UserRol::class);
    }
}
