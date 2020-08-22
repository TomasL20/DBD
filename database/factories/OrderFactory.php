<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    //se especifica el tipo de dato, se colocan las rutas de las llaves
    $idAd = App\Ad::pluck('id')->toArray();
    $idUser = App\User::pluck('id')->toArray();
    $idPay = App\Payment::pluck('id')->toArray();
    return [
        //se crean los fakers donde se especifican los tipos de datos que corresponde
        'totalPrice' => $faker->randomFloat(), //se hace uso de este tipo de dato, para generar un numero random para el precio total
        'quantity' => $faker->numberBetween(0,100), //se hace uso de este tipo de dato, para generar un numero al azar entre 0 y 100
        'reservedAt' => $faker->date(), // se hace uso de este tipo de dato, para poder generar una fecha de la reserva
        'freeAt' => $faker->date(), // se hace uso de este tipo de dato para indicar que ya esta neuvamente disponible la orden
        'idUser' => $faker->randomElement($idUser), // se hace uso este tipo de dato, para darle un id al usuario "user"
        'idAd' => $faker->randomElement($idAd),// se hace uso este tipo de dato, para darle un id anuncio "ad"
        'idPay' => $faker->randomElement($idPay),// se hace uso este tipo de dato, para darle un id al tipo de pago "pay"
    ];
});
