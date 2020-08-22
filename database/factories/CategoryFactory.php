<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //se crean los fakers donde se especifican los tipos de datos que corresponde
        'catName' => $faker->randomElement($array = array ('Inmobilaria','Muebles','Herramientas','Articulos','Espacios','Vehiculos')), //se hace uso de este tipo de dato, generando un nombre de categoria al azar, dentro de los cuales fueron especificados
        
    ];
});
