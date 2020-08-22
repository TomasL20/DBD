<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Record;
use Faker\Generator as Faker;

$factory->define(Record::class, function (Faker $faker) {
    return [
        //
        'action'=>$faker->word(),
        'createdAt'=> $faker->date(),
        'updatedAt'=> $faker->date(),
    ];
});
