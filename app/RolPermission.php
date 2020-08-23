<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RolPermission extends Model
{   //se especifica el tipo de relaciones que posee la clase
    //la clase "rolPermission" pertenece  a un objeto de la clase "Permission"
    use SoftDeletes;
    public function permission(){
        return $this->belongsTo(Permission::class);
    }
    //la clase "rolPermission" pertenece  a un objeto de la clase "Rol"
    public function rol(){
        return $this->belongsTo(Rol::class);
    }
}
