<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'catName',
    ];
    //se especifica el tipo de relacion que posee la clase
    //la clase "Category" tiene una relacion de uno es a muchos con un objeto de la clase "product"
    public function product(){
        return $this->hasMany(Product::class);
    }
}
