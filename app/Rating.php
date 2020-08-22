<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'rate', 'comment', 'commentDate',
    ];

    public function ad(){
        return $this->belongsTo(Ad::class);
    }
}
