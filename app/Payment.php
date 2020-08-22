<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'paymentType',
    ];
    protected $primaryKey = 'idPago';
    public function order(){
        return $this->hasMany(Order::class);
    }
}
