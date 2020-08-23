<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use SoftDeletes;
     //se colocan los campos los cuales se quieren llenar
    protected $fillable = [
        'rate', 'comment', 'commentDate',
    ];
    //se especifica el tipo de relacion que posee la clase
    //la clase "Rating" pertenece  a un objeto de la clase "ad"
    public function ad(){
        return $this->belongsTo(Ad::class);
    }
}
