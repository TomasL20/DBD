<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rating;
use Faker\Generator as Faker;

$factory->define(Rating::class, function (Faker $faker) {
    //se especifica el tipo de dato, se colocan las rutas de las llaves
    $idAd = App\Ad::pluck('id')->toArray();
    return [
        //se crean los fakers donde se especifican los tipos de datos que corresponde
        'rate' => $faker->numberBetween(0,10), //se hace uso de este tipo de dato para poder crear un numero aleatorio entre 0 y 10 para poder dar una valoracion "rate" 
        'comment' => $faker->text(), // se hace uso de este tipo de dato para poder realizar lso comentarios
        'commentDate' => $faker->date(), // se hace uso este tipo de dato, para tener la fecha de creacion del comentario
        'idAd' => $faker->randomElement($idAd), // se hace uso de este tipo de dato para poder tener un numero aleatorio y dar un id al anuncio "Ad"
    ];
});
