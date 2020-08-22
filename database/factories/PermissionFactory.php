<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Permission;
use Faker\Generator as Faker;

$factory->define(Permission::class, function (Faker $faker) {
    return [
        //se crea el faker donde se especifica el tipo de dato
        'description' => $faker->randomElement($array = array ('Publicar, editar y eliminar anuncio','Agregar, editar y eliminar categoria','Agregar y eliminar roles','Comentar, editar y eliminar comentario', 'Eliminar usuario', 'Elegir método de pago ')),
        // se hace uso de este tipo de dato y da a escoger un elemento al azar de los especificados para poder dar una descripcion al permiso de la clase
    ];
});
