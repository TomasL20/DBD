<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'description',
    ];

    public function rolPermission(){
        return $this->hasMany(RolPermission::class);
    }
    public function userRol(){
        return $this->hasMany(UserRol::class);
    }
}
