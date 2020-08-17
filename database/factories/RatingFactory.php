<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $idAd = App\Ad::pluck('id')->toArray();
    return [
        'rate' => $faker->numberBetween(0,10),
        'comments' => $faker->text(),
        'createdAt' => $faker->date(),
        'idAd' => $faker->randomElement($idAd),
    ];
});
