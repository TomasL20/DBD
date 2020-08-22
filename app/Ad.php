<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'description', 'descName', 'price',
        'arrInfo', 'stock', 'status','location',
    ];

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
