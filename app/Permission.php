<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'description',
    ];
    //se especifica el tipo de relacion que posee la clase
    public function rolPermission(){
        return $this->hasMany(RolPermission::class);
    }
        
    
    

}
