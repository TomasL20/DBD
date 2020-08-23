<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;
     //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'paymentType',
    ];
    //se especifica el tipo de relacion que posee la clase
    //la clase "payment" tiene una relacion de uno es a muchos con un objeto de la clase "Order"
    public function order(){
        return $this->hasMany(Order::class);
    }
}
