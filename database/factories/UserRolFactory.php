<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserRol;
use Faker\Generator as Faker;

$factory->define(UserRol::class, function (Faker $faker) {
    //se especifica el tipo de dato, se colocan las rutas de las llaves
    $idRol = App\Rol::pluck('id')->toArray();
    $idUser = App\User::pluck('id')->toArray();
    return [
        //se crean los fakers donde se especifican los tipos de datos que corresponde
        'idRol' => $faker->randomElement($idRol), //se hace uso de este tipo de dato para generar un identificador del rol "idrol"
        'idUser' => $faker->randomElement($idUser),//se hace uso de este tipo de dato para generar un identificador del rol "iduser"
    ];
});
