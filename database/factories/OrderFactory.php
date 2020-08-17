<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $idAd = App\Ad::pluck('id')->toArray();
    $idUser = App\User::pluck('id')->toArray();
    $idPay = App\Payment::pluck('id')->toArray();
    return [
        //
        'totalPrice' => $faker->randomFloat(),
        'quantity' => $faker->randomBetween($min = 0,$max = 100),
        'reservedAt' => $faker->date(),
        'freeAt' => $faker->date(),
        'idUser' => $faker->randomElement($idUser),
        'idAd' => $faker->randomElement($idAd),
        'idPay' => $faker->randomElement($idPay),
    ];
});
