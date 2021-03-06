<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userName', 'realName','email', 'password', 'imageUserURL'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
     //se colocan los campos los cuales se quieren llenar
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //se especifica el tipo de relaciones que posee la clase
    //la clase "user" tiene una relacion de uno es a muchos con un objeto de la clase "UserRol"
    public function userRol(){
        return $this->hasMany(UserRol::class);
    }
    //la clase "user" tiene una relacion de uno es a muchos con un objeto de la clase "Order"
    public function order(){
        return $this->hasMany(Order::class);
    }
    //la clase "user" tiene una relacion de uno es a muchos con un objeto de la clase "ad"
    public function ad(){
        return $this->hasMany(Ad::class);
    }
}
