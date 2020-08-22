<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolPermission extends Model
{   //se especifica el tipo de relaciones que posee la clase
    //la clase "rolPermission" pertenece  a un objeto de la clase "Permission"
    public function permission(){
        return $this->belongsTo(Permission::class);
    }
    //la clase "rolPermission" pertenece  a un objeto de la clase "Rol"
    public function rol(){
        return $this->belongsTo(Rol::class);
    }
}
