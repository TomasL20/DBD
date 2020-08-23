<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'totalPrice',
        'quantity',
    ];
     //se colocan los campos los cuales se quieren llenar
    protected $nullable = [
        'freeAt',
        'reservedAt',
    ];
    //se especifica el tipo de relaciones que posee la clase

    //la clase "Order" pertenece  a un objeto de la clase "User"
    public function user(){
        return $this->belongsTo(User::class);
    }
    //la clase "Order" pertenece  a un objeto de la clase "payment"
    public function payment(){
        return $this->belongsTo(Payment::class);
    }
    //la clase "Order" pertenece  a un objeto de la clase "ad"
    public function ad(){
        return $this->belongsTo(Ad::class);
    }
}
