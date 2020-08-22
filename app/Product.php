<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'prodName',
    ];
    //se especifica el tipo de relaciones que posee la clase
    public function ad(){
        return $this->hasMany(Ad::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
