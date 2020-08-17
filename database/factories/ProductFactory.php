<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $idCat = App\Category::pluck('id')->toArray();
    return [
        'prodName' => $faker->randomElement($array = array ('Departamento','Escritorio','Tijera','Taladro Bauker', 'Patio', 'Moto')),
        'idCat'=> $faker->randomElement($idCat),
    ];
});
