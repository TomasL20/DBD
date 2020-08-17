<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RolPermission;
use Faker\Generator as Faker;

$factory->define(RolPermission::class, function (Faker $faker) {
    $idRol = App\Rol::pluck('id')->toArray();
    $idPer = App\Permission::pluck('id')->toArray();
    return [
        'idRol' => $faker->randomElement($idRol),
        'idPer' => $faker->randomElement($idPer),
    ];
});
