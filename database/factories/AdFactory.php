<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ad;
use Faker\Generator as Faker;

$factory->define(Ad::class, function (Faker $faker) {
    //se especifica el tipo de dato, se colocan las rutas de las llaves
    $idProd = App\Product::pluck('id')->toArray();
    $idUser = App\User::pluck('id')->toArray();
    return [
        //se crean los fakers donde se especifican los tipos de datos que corresponde
        'description' => $faker->text(),    //Se hace uso de este tipo de dato, ya que es un texto el cual dará la descripcion
        'descName' => $faker->word(),       // Se hace uso de este tipo de dato, ya que, es el nombre de la descripcion(una sola palabra)
        'price' => $faker->randomFloat(),   // Se crea un numero random par apoder entregarle un valor al precio
        'arrInfo' => $faker->text(),        //Se hace uso de este tipo de dato, para poder describir la informacion 
        'stock' => $faker->numberBetween($min = 0, $max = 100), // Se hace uso de un numero random para tener un stock entre 0 y 100
        'status' => $faker->boolean(), // Se hace uso de este tipo de dato, para ver que el estado sea true si esta disponible, o flase de lo contrario
        'location' => $faker->randomElement($array = array ('Santiago','La Serena','Concepción','Puerto Montt', 'Valparaiso', 'Rancagua')), // Se hace uso de este tipo de dato para generar una localizacion al azar dentro de las que fueron especificadas
        'idProd' => $faker->randomElement($idProd), // Se hace uso de este tipo de dato para poder generar un numero random del id del producto
        'idUser' => $faker->randomElement($idUser), //Se hace uso de este tipo de dato para poder generar un numero random del id del usuario
    ];
});
