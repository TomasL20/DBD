<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'description',
    ];
    public function rolPermission(){
        return $this->hasMany(RolPermission::class);
    }
        
    
    

}
