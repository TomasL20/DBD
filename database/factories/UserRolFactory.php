<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $idRol = App\Rol::pluck('id')->toArray();
    $idUser = App\User::pluck('id')->toArray();
    return [
        'idRol' => $faker->randomElement($idRol),
        'idUser' => $faker->randomElement($idUser),
    ];
});
