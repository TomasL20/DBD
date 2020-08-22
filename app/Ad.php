<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
     //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'description', 'descName', 'price',
        'arrInfo', 'stock', 'status','location',
    ];
    //se especifica el tipo de relaciones que posee la clase
    public function order(){
        return $this->hasMany(Order::class);
    }

    public function rating(){
        return $this->hasMany(Rating::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
