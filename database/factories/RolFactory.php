<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Rol;

$factory->define(Rol::class, function (Faker $faker) {
    return [
        'type' => $faker->numberBetween($min=1, $max=3),
    ];
});
