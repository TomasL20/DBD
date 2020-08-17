<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rating;
use Faker\Generator as Faker;

$factory->define(Rating::class, function (Faker $faker) {
    $idAd = App\Ad::pluck('id')->toArray();
    return [
        'rate' => $faker->numberBetween(0,10),
        'comment' => $faker->text(),
        'commentDate' => $faker->date(),
        'idAd' => $faker->randomElement($idAd),
    ];
});
