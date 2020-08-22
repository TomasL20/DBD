<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
     //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'rate', 'comment', 'commentDate',
    ];
    //se especifica el tipo de relacion que posee la clase
    public function ad(){
        return $this->belongsTo(Ad::class);
    }
}
