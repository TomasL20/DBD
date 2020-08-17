<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'prodName',
    ];

    public function ad(){
        return $this->hasMany(Ad::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
