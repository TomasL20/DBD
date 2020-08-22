<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RolPermission;
use Faker\Generator as Faker;

$factory->define(RolPermission::class, function (Faker $faker) {
    //se especifica el tipo de dato, se colocan las rutas de las llaves
    $idRol = App\Rol::pluck('id')->toArray();
    $idPer = App\Permission::pluck('id')->toArray();
    return [
        //se crean los fakers donde se especifican los tipos de datos que corresponde
        'idRol' => $faker->randomElement($idRol),// se hace uso de este tipo de dato para poder generar un identificador del rol
        'idPer' => $faker->randomElement($idPer),// se hace uso de este tipo de dato para poder generar un identificador del permiso
    ];
});
