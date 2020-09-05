<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Purchase;

$factory->define(Purchase::class, function (Faker $faker) {
    $user_id = App\User::pluck('id')->toArray();
    $publication_id = App\Publication::pluck('id')->toArray();
    return [
        'paymentMethod' => $faker->numberBetween($min=1, $max=4),
        'card' => $faker->creditCardNumber,
        'startdate' => $faker->date,
        'finishdate' => $faker->date,
        'deadline' => $faker->date,
        'user_id' => $faker->randomElement($user_id),
        'publication_id' => $faker->randomElement($publication_id),
        'active' => 'true',
    ];
});
