<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolPermission extends Model
{   //se especifica el tipo de relaciones que posee la clase
    public function permission(){
        return $this->belongsTo(Permission::class);
    }
    
    public function rol(){
        return $this->belongsTo(Rol::class);
    }
}
