<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'totalPrice',
        'quantity',
    ];
    
    protected $nullable = [
        'freeAt',
        'reservedAt',
    ];
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
