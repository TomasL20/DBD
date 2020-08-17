<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $idAd = App\Ad::pluck('id')->toArray();
    $idUser = App\User::pluck('id')->toArray();
    $idPay = App\Payment::pluck('id')->toArray();
    return [
        //
        'totalPrice' => $faker->randomFloat(),
        'quantity' => $faker->numberBetween(0,100),
        'reservedAt' => $faker->date(),
        'freeAt' => $faker->date(),
        'idUser' => $faker->randomElement($idUser),
        'idAd' => $faker->randomElement($idAd),
        'idPay' => $faker->randomElement($idPay),
    ];
});
