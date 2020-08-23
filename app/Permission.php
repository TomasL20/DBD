<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;
    //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'description',
    ];
    //se especifica el tipo de relacion que posee la clase
    //la clase "Permission" tiene una relacion de uno es a muchos con un objeto de la clase "rolPermission"
    public function rolPermission(){
        return $this->hasMany(RolPermission::class);
    }
        
    
    

}
