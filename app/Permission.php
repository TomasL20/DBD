<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'description',
    ];
    protected $primaryKey = 'idPermiso';
    public function rolPermission(){
        return $this->hasMany(RolPermission::class);
    }
        
    
    

}
