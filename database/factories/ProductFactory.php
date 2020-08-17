<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $idCat = App\Category::pluck('id')->toArray();
    return [
        'name' => $faker->randomElement($array = array ('Departamento','Escritorio','Tijera','Taladro Bauker', 'Patio', 'Moto')),
        'idCat'=> $faker->randomElement($idCat),
    ];
});
