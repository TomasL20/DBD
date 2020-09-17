<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
     //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'description', 'descName', 'price',
        'arrInfo', 'stock', 'status','location', 'imageURL'
    ];
    //se especifica el tipo de relaciones que posee la clase
    //la clase "Ad" tiene una relacion de uno es a muchos con un objeto de la clase "Order"
    public function order(){
        return $this->hasMany(Order::class);
    }
    //la clase "Ad" tiene una relacion de uno es a muchos con un objeto de la clase "Rating"
    public function rating(){
        return $this->hasMany(Rating::class);
    }
    //la clase "Ad" pertenece  a un objeto de la clase "User"
    public function user(){
        return $this->belongsTo(User::class);
    }
    //la clase "Ad" pertenece  a un objeto de la clase "Product"
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
