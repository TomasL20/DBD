<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'paymentType',
    ];
    //se especifica el tipo de relacion que posee la clase
    public function order(){
        return $this->hasMany(Order::class);
    }
}
