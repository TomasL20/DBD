<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
     //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'description',
    ];
    //se especifica el tipo de relaciones que posee la clase
    public function rolPermission(){
        return $this->hasMany(RolPermission::class);
    }
    public function userRol(){
        return $this->hasMany(UserRol::class);
    }
}
