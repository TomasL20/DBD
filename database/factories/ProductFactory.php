<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    //se especifica el tipo de dato, se colocan las rutas de las llaves
    $idCat = App\Category::pluck('id')->toArray();
    return [
        //se crean los fakers donde se especifican los tipos de datos que corresponde
        'prodName' => $faker->randomElement($array = array ('Departamento','Escritorio','Tijera','Taladro Bauker', 'Patio', 'Moto')), // Se hace uso este tipo de dato , ene l cual se da a escoger el tipo de producto, dentro de los especificados 
        'idCat'=> $faker->randomElement($idCat), // se hace uso de este tipo de dato para dar un id a la categoria "id"
    ];
});
