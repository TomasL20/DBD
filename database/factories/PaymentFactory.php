<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        //se crea el faker donde se especifica el tipo de dato
        'paymentType' => $faker->creditCardType, //Se hace uso este tipo de dato para generar los datos de un tipo de tarjeta de credito
    ];
});
