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
    //la clase "Product" tiene una relacion de uno es a muchos con un objeto de la clase "ad"
    public function ad(){
        return $this->hasMany(Ad::class);
    }
    //la clase "Product" pertenece  a un objeto de la clase "category"
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
