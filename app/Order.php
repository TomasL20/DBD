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
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function payment(){
        return $this->belongsTo(Payment::class);
    }
    public function ad(){
        return $this->belongsTo(Ad::class);
    }
}
