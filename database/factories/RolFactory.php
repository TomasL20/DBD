<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rol;
use Faker\Generator as Faker;

$factory->define(Rol::class, function (Faker $faker) {
    return [
         //se crea el faker donde se especifica el tipo de dato
        'description' => $faker->text(),// se hace uso de este tipo de dato, para poder dar una descripcion 
    ];
});
