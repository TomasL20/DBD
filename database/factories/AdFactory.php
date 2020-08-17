<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $idProd = App\Product::pluck('id')->toArray();
    $idUser = App\User::pluck('id')->toArray();
    return [
        //
        'description' => $faker->text(),
        'descName' => $faker->word(),
        'price' => $faker->randomFloat(),
        'arrInfo' => $faker->text(),
        'stock' => $faker->numberBetween($min = 0, $max = 100),
        'status' => $faker->boolean(),
        'location' => $faker->randomElement($array = array ('Santiago','La Serena','Concepción','Puerto Montt', 'Valparaiso', 'Rancagua')),
        'idProd' => $faker->randomElement($idProd),
        'idUser' => $faker->randomElement($idUser),
    ];
});
