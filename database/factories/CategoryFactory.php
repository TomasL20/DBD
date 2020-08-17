<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //
        'catName' => $faker->randomElement($array = array ('Inmobilaria','Muebles','Herramientas','Articulos','Espacios','Vehiculos')),
        
    ];
});
