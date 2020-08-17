<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Permission;
use Faker\Generator as Faker;

$factory->define(Permission::class, function (Faker $faker) {
    return [
        'description' => $faker->randomElement($array = array ('Publicar, editar y eliminar anuncio','Agregar, editar y eliminar categoria','Agregar y eliminar roles','Comentar, editar y eliminar comentario', 'Eliminar usuario', 'Elegir método de pago ')),
    ];
});
